<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2030 05:00:00 GMT");
    }

    //Default function, redirects to logged in user area
    public function index() {
       	
        if ($this->session->userdata('admin_login') == 1)
			
		 
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
          
		                  

        $this->load->view('backend/login');
      }
    //Ajax login function 
	 function ajax_login() {
        $response = array();
		$email =   trim($_POST["email"]);
        $password = md5(trim($_POST["password"]));
		
		
        $response['submitted_data'] = $_POST;

        //Validating login
        $login_status = $this->validate_login($email, $password);
        $response['login_status'] = $login_status;
		
        if ($login_status == 'success') {
			
            $response['redirect_url'] = '';
        }
	

        //Replying ajax request with validation response
        echo json_encode($response);
    }
    //Validating login from ajax request
     function validate_login($email = '', $password = '') {	 
	   $credential = array('email' => $email, 'password' => $password, 'active'=>'yes');
        // Checking login credential for admin
        $query = $this->db->get_where('admin', $credential);
        if ($query->num_rows() > 0){
            $row = $query->row();
            $this->session->set_userdata('admin_login', '1');
            $this->session->set_userdata('admin_id', $row->admin_id);
            $this->session->set_userdata('login_user_id', $row->admin_id);
            $this->session->set_userdata('name', $row->name);
            $this->session->set_userdata('login_type', 'admin');
            $this->session->set_userdata('text_align', $row->text_align);
			$this->session->set_userdata('skin_colour', $row->skin_colour);
			$this->session->set_userdata('language', $row->language);
		     $key         = (rand(10000, 1000000));
			 $now = time();
             $nows = date('m/d/Y H:i:s',$now);
		 
            // update the new authentication key into user table
            $this->db->where('admin_id' , $row->admin_id);
            $this->db->update('admin' , array('authentication_key' => $key, 'last_login' =>$nows, 'status' =>'1'));
		    $this->db->update('admin' , array('login_attempts' =>'0'));
		 
             return 'success';   
			 }
		     if($query->num_rows() < 1){
			 mysql_query("update admin set login_attempts =login_attempts+1 where email='$email'");
			 $result = mysql_query("select login_attempts from admin where email='$email'");
			 while($data= mysql_fetch_array($result)){
               $trial   = $data["login_attempts"]; 
			 }
			 if($trial >6){
		       mysql_query("update admin set active ='no' where email='$email'");
			 }
			
        return 'invalid';
		}
    
    }
    function four_zero_four() {
        $this->load->view('four_zero_four');
    }

    // PASSWORD RESET BY EMAIL
function forgot_password(){
        $this->load->view('backend/forgot_password');
       }
function user_register(){
        $this->load->view('backend/sign');
       }
   
  
    function ajax_forgot_password(){
        $resp                   = array();
        $resp['status']         = 'false';
        $email                  = $_POST["email"];
        $reset_account_type     = '';
        //resetting user password here
        $new_password            =   substr(rand(100000000,20000000000), 0,7);
	    $new_password2           =   substr(md5(rand(100000000,20000000000) ) , 0,7);

        // Getting role for users
        $result = mysql_query("select role from admin where email='$email'");
			 while($data= mysql_fetch_array($result)){
               $role  = $data["role"]; 
			 }
			 
        // Checking credential for admin
        $query = $this->db->get_where('admin' , array('email' => $email));
        if ($query->num_rows() > 0) 
        {
            $reset_account_type     =  $role;
            $this->db->where('email' , $email);
            $this->db->update('admin' , array('password' =>$new_password2));
            $resp['status']         = 'true';
			
        }
        // send new password to user email  
        $this->email_model->password_reset_email($new_password , $reset_account_type , $email);

        $resp['submitted_data'] = $_POST;

        echo json_encode($resp);
    }

    /*     * *****LOGOUT FUNCTION ****** */

    function logout() {
		  $now = time();
          $this_time = date('m/d/Y H:i:s',$now);
		  $current_user = $this->session->userdata('admin_id');
		  $this->db->where('admin_id' ,$current_user);
          $this->db->update('admin' , array('logout' =>$this_time,'status' =>'0'));
          $this->session->sess_destroy();
          $this->session->set_flashdata('logout_notification', 'logged_out');
          redirect(base_url(), 'refresh');
    }

}
