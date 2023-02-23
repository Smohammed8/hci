<?php 

$Today = date('y:m:d');
$new  =date('l, F d, Y',strtotime($Today));

 ?>
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Admin extends CI_Controller
{
    
    
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('session');
		
       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
    }
///////////////////////////////////////////////////////////////////////	
 public function checkMrn(){
		$mrn_id =$this->input->post('mrn_id');
		$result = $this->crud_model->checkpatient($mrn_id);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }
	
///////////////////////////////////////////////////////////////////////	
 public function checkCbhi(){
		$cbhi =$this->input->post('cbhi');
		$result = $this->crud_model->checkBeneficiary($cbhi);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }
	///////////////////////////////////////////////////////////////////////	
 public function checkEmail(){
		$email =$this->input->post('mail');
		$result = $this->crud_model->checkUser($email);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }
/////////////////////////////////////////////////////////////////
 public function checkPhone(){
		$phone =$this->input->post('phone');
		$result = $this->crud_model->checkTel($phone);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }
	/////////////////////////////////////////////////////////////////
 public function checkUserPhone(){
		$phone =$this->input->post('phone');
		$result = $this->crud_model->checkUserPhone($phone);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }
/////////////////////////////////////////////////////////////////////

  public function user_details(){
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
		   if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
		$this->load->library('user_agent');
		$data['browser']=$this->agent->browser();
		$data['browser_version']=$this->agent->version();
		$data['os']=$this->agent->platform();
		$data['ip_address']=$this->input->ip_address();
		$this->load->view('user_access_control_list',$data);
		
		
    }
    
    /***ADMIN DASHBOARD***/
    function dashboard()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('backend/index', $page_data);
    }
function pdf(){
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'mypdf';
        $page_data['page_title'] = get_phrase('');
        $this->load->view('backend/admin/mypdf', $page_data);
       }
	
    ///////////////////////////////////////////////////////////////
	
	
function report_by_month($param1 = '', $param2 = '', $param3 = ''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['report_view_by_month'] = $this->db->get('treatment')->result_array();
        $page_data['page_name']   = 'report_by_month';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('report_by_month_view');
        $this->load->view('backend/index', $page_data); 
		
	}
	/////////////////////////////////////////////////////////	
function customed_report($param1 = '', $param2 = '', $param3 = ''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['customed_report_view'] = $this->db->get('treatment')->result_array();
        $page_data['page_name']   = 'customed_report';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('customed_report_view');
        $this->load->view('backend/index', $page_data); 
		
	}

	/////////////////////////////////////////////////////////	
function create_report($param1 = '', $param2 = '', $param3 = ''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['created_report_view'] = $this->db->get('beneficiary')->result_array();
        $page_data['page_name']   = 'create_report';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('created_report_view');
        $this->load->view('backend/index', $page_data); 
		
	}

//////////////////////////////////////////////////////////////////	
function report_per_month(){
              
		
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'report_view_by_month';
        $page_data['page_title'] = get_phrase('report_per_month_view');
        $this->load->view('backend/admin/report_view_by_month', $page_data);

}
/////////////////////////////////////////////
function customed_report_view(){
              
		
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'customed_report_view';
        $page_data['page_title'] = get_phrase('customed_report_view');
        $this->load->view('backend/admin/customed_report_view', $page_data);

}
//////////////////////////////////////////////////////////////////	
function report_view_per_district(){
              
	if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'customed_report_view_per_district';
        $page_data['page_title'] = get_phrase('customed_report_view');
        $this->load->view('backend/admin/customed_report_view_per_district', $page_data);

}
//////////////////////////////////////////////////////////////////	
function report_view_per_user(){
              
	if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'customed_report_view_per_user';
        $page_data['page_title'] = get_phrase('customed_report_view');
        $this->load->view('backend/admin/customed_report_view_per_user', $page_data);

}
//////////////////////////////////////////////////////////////////	
function report_view_per_agreement(){
              
	if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'customed_report_view_per_agree';
        $page_data['page_title'] = get_phrase('customed_report_view');
        $this->load->view('backend/admin/customed_report_view_per_agree', $page_data);

}
//////////////////////////////////////////////////////////////////	

function general_report_view($param1 = '', $param2 = '', $param3 = ''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'general_report';
        $page_data['page_title'] 	= get_phrase('general_report_view');
        $this->load->view('backend/index', $page_data); 
		
	}
/////////////////////////////////////////////
function general_report(){
             
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'general_report_view';
        $page_data['page_title'] = get_phrase('general_report_view');
        $this->load->view('backend/admin/general_report_view', $page_data);

}
/////////////////////////////////////////////////////////////////

function report_per_month_preview(){             	
if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'report_view_by_month_payment';
        $page_data['page_title'] = get_phrase('report_per_month_payment');
        $this->load->view('backend/admin/report_view_by_month_payment', $page_data);
   }  
      ///////////////////////////////////////////////////////////
function unpaid_woreda_by_time_pdf_report(){
  if ($this->session->userdata('admin_login') != 1)
    redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'unpaid_woreda_by_time_pdf';
        $page_data['page_title'] = get_phrase('payment_history_pdf_print');
        $this->load->view('backend/admin/unpaid_woreda_by_time_pdf', $page_data);
   }  
///////////////////////////////////////////////////////////
function unpaid_woreda_list_pdf(){
  if ($this->session->userdata('admin_login') != 1)
    redirect(base_url(), 'refresh');
        $page_data['page_name']  = ' unpaid_woreda_pdf';
        $page_data['page_title'] = get_phrase('payment_history_pdf_print');
        $this->load->view('backend/admin/unpaid_woreda_pdf', $page_data);
   }
///////////////////////////////////////////////////////////
function payment_history_print_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'payment_history';
        $page_data['page_title'] = get_phrase('payment_history_pdf_print');
        $this->load->view('backend/admin/payment_history', $page_data);

   }
   
   
 ///////////////////////////////////////////////////////////
 function finance_paid_print_by_time_pdf(){
 if ($this->session->userdata('admin_login') != 1)
        redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_finance_paid_print_by_time';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/all_finance_paid_print_by_time', $page_data);

   }
 ///////////////////////////////////////////////////////////
    
 function today_encounter_print_by_time_pdf(){
 if ($this->session->userdata('admin_login') != 1)
        redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'today_encounter_print_by_time';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/today_encounter_print_by_time', $page_data);

   }
 ///////////////////////////////////////////////////////////
     
 function today_encounter_print_pdf(){
 if ($this->session->userdata('admin_login') != 1)
        redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'today_encounter_print_pdf';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/today_encounter_print_pdf', $page_data);

   }
 ////////////////////////////////////////////////
function all_finance_paid_print_pdf(){
  
 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_finance_paid_print';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/all_finance_paid_print', $page_data);

   }
 ///////////////////////////////////////////////////////////
function all_finance_print_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_finance_print';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/all_finance_print', $page_data);

   }
   ///////////////////////////////////////////////////////////
   
function my_finance_print_pdf(){  
              	
   if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'my_finance_print';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/my_finance_print', $page_data);
   }
   ///////////////////////////////////////////////////////////
function our_finance_print_pdf(){  
              	
   if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'our_finance_print';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/our_finance_print', $page_data);
   }
   ///////////////////////////////////////////////////////////
function all_my_encounter_print_pdf(){

    if ($this->session->userdata('admin_login') != 1)
       redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_my_encounter_pdf_print';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/all_my_encounter_pdf_print', $page_data);
   }   
   
///////////////////////////////////////////////////////////
function daily_my_encounter_print_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'daily_my_encounter_pdf_print';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/all_my_encounter_pdf_print_today', $page_data);
   }     
/////////////////////////////////////////////////////////////////////  
function monthly_report_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'pdf_report_by_month';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/pdf_report_by_month', $page_data);

}
/////////////////////////////////////////////////////////////////////   
function quarter_report_pdf  (){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'pdf_report_by_quarter';
        $page_data['page_title'] = get_phrase('all_finance_print');
        $this->load->view('backend/admin/pdf_report_by_quarter', $page_data);

   }

///////////////////////////////////////////////////////////
function all_patients_print_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_patient_info_print';
        $page_data['page_title'] = get_phrase('all_patient_info_print');
        $this->load->view('backend/admin/all_patient_info_print', $page_data);

   }
 ///////////////////////////////////////////////////////////
 
function our_client_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_our_clients_info_print';
        $page_data['page_title'] = get_phrase('all_patient_info_print');
        $this->load->view('backend/admin/all_our_clients_info_print', $page_data);

   }
 ///////////////////////////////////////////////////////////
function our_client_pdf_by_indigent(){ 
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_our_clients_info_print_by_indigent';
        $page_data['page_title'] = get_phrase('all_patient_info_print');
        $this->load->view('backend/admin/all_our_clients_info_print_by_indigent', $page_data);

   }
 ///////////////////////////////////////////////////////
 function our_client_pdf_by_kebele(){ 
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'all_our_clients_info_print_by_kebele';
        $page_data['page_title'] = get_phrase('all_patient_info_print');
        $this->load->view('backend/admin/all_our_clients_info_print_by_kebele', $page_data);

   }
 ///////////////////////////////////////////////////////
function today_my_patients_print_pdf(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'my_patient_info_print';
        $page_data['page_title'] = get_phrase('all_patient_info_print');
        $this->load->view('backend/admin/my_patient_info_print', $page_data);

   }
///////////////////////////////////////////////////////////
function account_print(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'account_info_print';
        $page_data['page_title'] = get_phrase('account_info_prin');
        $this->load->view('backend/admin/account_info_print', $page_data);

   }
//////////////////////////////////////////////////////////////////	
function account_info($admin_id){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
		$param2     = $this->db->get_where('admin' , array('admin_id' =>$admin_id))->row()->$admin_id;
		$page_data['admin_id']    =$param2 ;
		//generateRow($admin_id);
        $page_data['page_name']  = 'account_info';
        $page_data['page_title'] = get_phrase('account_info_prin');
        $this->load->view('backend/admin/account_info', $page_data);

   }
	//////////////////////////////////////////////////////////////////	
function report_per_quarter_preview(){
              	
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'report_view_by_quarter_payment';
        $page_data['page_title'] = get_phrase('report_per_quarter_preview');
        $this->load->view('backend/admin/report_view_by_quarter_payment', $page_data);

   }
	///////////////////////////////////////////////////////////
	function report_by_quarter(){
		if ($this->session->userdata('admin_login') != 1)
        redirect(base_url(), 'refresh');		
		$page_data['page_name']  = 'report_by_quarter';
		$page_data['page_title'] = get_phrase('report_by_quarter');
		$this->load->view('backend/index', $page_data);
	}
	function report_per_quarter(){
              
		
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'report_view_by_quarter';
        $page_data['page_title'] = get_phrase('report_view_by_quarter');
        $this->load->view('backend/admin/report_view_by_quarter', $page_data);

	}

///////////////////////////////////////////////////////////	
	function health_insurance_report_per_quarter(){
            
		 if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $page_data['page_name']  = 'health_insurance_report_per_quarter';
        $page_data['page_title'] = get_phrase('report_view_by_quarter');
        $this->load->view('backend/admin/health_insurance_report_per_quarter', $page_data);

	}
///////////////////////////////////////////////////////////		
function financebyquarter(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
       // $page_data['report_view_by_month'] = $this->db->get('treatment')->result_array();
        $page_data['page_name']   = 'finance_by_quarter';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////


function today_encounter(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'today_encounter';//report_view_today_encounter
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////

function today_encounters(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'today_encounters';//report_view_today_encounter
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////

function finance(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
       // $page_data['report_view_by_month'] = $this->db->get('treatment')->result_array();
        $page_data['page_name']   = 'finance';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////
function hmis_data_view(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'hmis_data';//HMIS data view
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////
function new_patient(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'new_patient';
       $page_data['page_title'] 	= get_phrase('new_patient_profile');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////
function general_view(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'general_stastices';//general_stastices
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////
function health_insurance_report(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'health_insurance_report';//health_insurance_report
        $page_data['page_title'] 	= get_phrase('health_insurance_report');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////
function general_view_woreda(){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']     = 'general_stastices_org';   //general_stastices
        $page_data['page_title'] 	= get_phrase('finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////
function requests_approved(){  
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
       // $page_data['report_view_by_month'] = $this->db->get('treatment')->result_array();
        $page_data['page_name']   = 'approved_finance';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('approved_finance');
        $this->load->view('backend/index', $page_data);    	
	}
///////////////////////////////////////////////////////////

function my_encounter($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'my_encounter_page';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('my_encounters');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////

function my_worda($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'my_unpaid';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('unpaid_finance');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////
	function my_request($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'my_requests';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('my_requests');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////
  function payment_requests($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'payment_requests';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('my_requests');
        $this->load->view('backend/index', $page_data);    	
	}
		///////////////////////////////////////////////////////////
	function accept_payment($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'accept_payment';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('accept_payment');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////
	
	function inbox_request($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'inbox_requests';//report_view_by_month
        $page_data['page_title'] 	= get_phrase('inbox_requests');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////
	
	function partially_paid_list($admin_id=''){
    if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'partially_paid';//report_view_by_partially
        $page_data['page_title'] 	= get_phrase('partially_paid_list');
        $this->load->view('backend/index', $page_data);    	
	}
	///////////////////////////////////////////////////////////
	
	function patient_add($param2='')
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$page_data['page_name']  = 'patient_add';
		$page_data['page_title'] = get_phrase('new_patient_profile');
		$this->load->view('backend/index', $page_data);
	}
	
///////////////////////////////////////////////////////////
	
	function beneficiary_add(){
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$page_data['page_name']  = 'beneficiary_add';
		$page_data['page_title'] = get_phrase('beneficiary_add');
		$this->load->view('backend/index', $page_data);
	}
	
	

////////////////////////////////////////////////////////
			
     function add_beneficiary($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
			
			$fname                   = $this->input->post('fname');
			$mname                   = $this->input->post('mname');
			$lname                   = $this->input->post('lname');
		   //$name                   = ($fname." ".$mname); 
		    $data['name']            = ($fname." ".$mname." ".$lname); 
			//$data['name']            = array_change_key_case($name ,CASE_UPPER);	
            $data['sex']             = $this->input->post('sex');
			$data['relation']        = 'Abawora';
			
			$data['cbhi']     = $this->input->post('cbhi');
			$data['family_code']     = $this->input->post('family_code');
			$data['indigent']        = $this->input->post('indigent');
		   
			$data['kebele']          = $this->input->post('kebele');
			 $data['region']         = $this->input->post('region');
			$data['zone']            = $this->input->post('zone'); 
			$data['woreda']          = $this->input->post('woreda');
		    $var                     = $this->input->post('dob');
			$data['dob']             = date("Y-m-d", strtotime($var));
            $data['phone']           = $this->input->post('phone');
			
		    $data['user']            = $this->session->userdata('admin_id');
			
            $data['full_code'] = ($data['indigent']."/".$data['zone']."/".$data['woreda']."/".$data['cbhi']); 
			
            $sucess= $this->db->insert('beneficiary', $data); 
            $beneficiary_id = $this->db->insert_id();
			if($sucess){
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/beneficiary_image/'.$beneficiary_id.'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
		        }
				else{
			    echo die (mysql_error()); 
				}
            redirect(base_url() . 'index.php?admin/beneficiary_add/' . $data['woreda'], 'refresh');
        }
        if ($param2 == 'edit') {
		    $data['mrn_id']          = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = $this->input->post('name');
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']     = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']       = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
			//$data['kebele']     = $this->input->post('kebele');
			
		    $data['user']            =$this->session->userdata('admin_id');

		 if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			   $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
			   $this->db->where('mrn_id' ,$data['mrn_id']);
			   $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
            
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			}

            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id'] . '.jpg');
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/patient_information/' . $param1, 'refresh');
        } 
		
	  if ($param2 == 'renew') {
		  
		  $current_user = $this->session->userdata('admin_id');
			$data['renewal']         = $this->input->post('renewal');
            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('renewal_updated'));
			
            redirect(base_url() . 'index.php?admin/our_patient_info/'.$current_user, 'refresh');
        } 
            $page_data['mrn_id'] 	=$param3;
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
	        $this->load->view('backend/index', $page_data);		
	
        if ($param2 == 'delete') {
            $this->db->where('mrn_id', $param3);
            $this->db->delete('patients');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/patient_information/' . $param1, 'refresh');
        }
    }
	////////////////////////////////////////////////////////	
     function beneficiary($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'update') {
			$id                      = $this->input->post('beneficiary_id');
			$data['cbhi']            = $this->input->post('cbhi');
			$data['name']            = $this->input->post('name');
            $data['sex']             = $this->input->post('sex');
		    $data['region']          = $this->input->post('region');
			$data['kebele']          = $this->input->post('kebele');
			$data['indigent']        = $this->input->post('indigent');
			$data['zone']            = $this->input->post('zone');
			$data['relation']        = $this->input->post('relation');
			$data['dob']             = $this->input->post('dob');
		   // $data['dob']             =  date("Y-m-d", strtotime($dob));
	        $data['user']            = $this->session->userdata('admin_id'); 	
			$data['woreda']          = $this->input->post('woreda');
			$data['family_code']     = $this->input->post('family_code');
            $data['phone']           = $this->input->post('phone');
            $data['full_code'] = ($data['indigent']."/".$data['zone']."/".$data['woreda']."/".$data['cbhi']); 
            
			$this->db->where('beneficiary_id',$id);
            $this->db->update('beneficiary', $data);
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/beneficiary_image/'.$id.'.jpg');
             $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/our_patient_info/'.$data['woreda'], 'refresh');
        }
	
    	if ($param2 == 'renew') {
		  $current_user = $this->session->userdata('admin_id');
			$data['renewal']        = $this->input->post('renewal');
            $this->db->where('beneficiary_id',$param3);
            $this->db->where('beneficiary');
           $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url().'index.php?admin/our_patient_info/', 'refreshsh');
        }           
        if ($param1 == 'remove') {
            $this->db->where('beneficiary_id',$param2);
            $this->db->delete('beneficiary');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
			 redirect(base_url() . 'index.php?admin/our_patient_info/'.$param2, 'refresh');
        } 
    }
/////////////////////////////////////////////////////////

function check_status()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
		$page_data['page_name']  = 'check_status_add';
		$page_data['page_title'] = get_phrase('check_status_add');
		$this->load->view('backend/index', $page_data);
	}
	
function avoid()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
		$page_data['page_name']  = 'check_preventions';
		$page_data['page_title'] = get_phrase('check_status_add');
		$this->load->view('backend/index', $page_data);
	}
	
function patient_add_woreda(){
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$page_data['page_name']  = 'patient_add_woreda';
		$page_data['page_title'] = get_phrase('add_student');
		$this->load->view('backend/index', $page_data);
	}
/////////////////////////////////////////////////////////////////////	

      function error_auding(){
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$page_data['page_name']  = 'system_auding';
		$page_data['page_title'] = get_phrase('system_auding');
		$this->load->view('backend/index', $page_data);
	}
	/////////////////////////////////////////////////////////////////////	

   function admin_setting()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$page_data['page_name']  = 'admin_level_setting';
		$page_data['page_title'] = get_phrase('admin_level_setting');
		$this->load->view('backend/index', $page_data);
	}
function patient_bulk_add($param1 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		if ($param1 == 'import_excel')
		{
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/patient_import.xlsx');
			// Importing excel sheet for bulk student uploads

			include 'simplexlsx.class.php';
			
			$xlsx = new SimpleXLSX('uploads/patient_import.xlsx');
			
			list($num_cols, $num_rows) = $xlsx->dimension();
			$f = 0;
			foreach( $xlsx->rows() as $r ) 
			{
				// Ignore the inital name row of excel file
				if ($f == 0)
				{
					$f++;
					continue;
			     	}
				for( $i=0; $i < $num_cols; $i++ ){
				       	if ($i == 0)	$data['mrn_id']			=	$r[$i];
					else if ($i == 1)	$data['name']		    =	$r[$i];
					else if ($i == 2)	$data['cbhi']		    =	$r[$i];
					else if ($i == 3)	$data['class_id']		=	$r[$i];
					else if ($i == 4)	$data['section_id']		=	$r[$i];
					else if ($i == 5)	$data['woreda_id']	    =	$r[$i];
					else if ($i == 6)	$data['indigent']		=	$r[$i];
					else if ($i == 7)	$data['agreement']      =	$r[$i];
					else if ($i == 8)	$data['sex']	     	=	$r[$i];  
					else if ($i == 9)	$data['reg_date']	    =	$r[$i];
					else if ($i == 10)	$data['phone']	        =	$r[$i];
					else if ($i == 11)	$data['kebele']	        =	$r[$i];
				    else if ($i == 12)	$data['age']	        =	$r[$i];
				   //  else if ($i == 14)	$data['full_code']	    =	$r[$i];
				   // else if ($i == 15)	$data['user']	        =	$r[$i];
				   // else if ($i == 16)	$data['cdate']	        =	$r[$i];
				    
				}
		   if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			 $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
            
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			}
			 $current_user = $this->session->userdata('admin_id');
       
			   $data['user']= $current_user;
			   $data['cdate']=$new;
				$data['class_id']	=	$this->input->post('class_id');
				
				$this->db->insert('patients' , $data);
				//print_r($data);
				$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
			}
			
			redirect(base_url() . 'index.php?admin/patient_information/' . $this->input->post('class_id'), 'refresh');
		}
		$page_data['page_name']  = 'patient_bulk_add';
		$page_data['page_title'] = get_phrase('add_bulk_student');
		
		$this->load->view('backend/index', $page_data);
	}
///////////////////////////////////////////////////////////////////////	
	function student_information($class_id = '')
	{
      if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');	
		$page_data['page_name']  	= 'patient_information';
		$page_data['page_title'] 	= get_phrase('patient_information'). " - ".get_phrase('class')." : ".$this->crud_model->get_class_name($class_id);
		$page_data['class_id'] 	= $class_id;
		$this->load->view('backend/index', $page_data);
	}
///////////////////////////////////////////////////////////////////////	
	function deligated_users()
	{
      if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');	
		$page_data['page_name']  	= 'deligated_users';
		$page_data['page_title'] 	= get_phrase('deligated_user');
		$this->load->view('backend/index', $page_data);
	}
/////////////////////////////////////////////////////////////////////////		
   function user(){
      if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');	
		$page_data['page_name']  	= 'users';
		$page_data['page_title'] 	= get_phrase('user_account_list');
		$this->load->view('backend/index', $page_data);
	}
	
/////////////////////////////////////////////////////////////////////////	
   function user_stastics_report($admin_id2= ''){
      if ($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
		$page_data['page_name']  	= 'user_stastics';
		$page_data['user_stastics'] = $this->db->get('admin', array('admin_id' =>$admin_id2))->result_array();
		$page_data['page_title'] 	= get_phrase('user_stastics');
		$page_data['admin_id2'] 	= $admin_id2;
		$this->load->view('backend/index', $page_data);
	}
//////////////////////////////////////////////////////////////////////////	
	function patient_information($class_id = ''){
      if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
			
		$page_data['page_name']  	= 'patient_information';
		$page_data['page_title'] 	= get_phrase('patient_information');
		$page_data['class_id'] 	= $class_id;
		$this->load->view('backend/index', $page_data);
	}
///////////////////////////////////////////////////////////////////////////////


    function get_class_patient_mass($class_id)
    {
        $patient = $this->db->get_where('patients' , array('class_id' => $class_id  ))->result_array();
        echo '<div class="form-group">
                <label class="col-sm-3 control-label">' . get_phrase('patient_information') . '</label>
                <div class="col-sm-9">';
        foreach($patient as $row) {
            echo '<div class="checkbox">
                    <label><input type="checkbox" class="check" name="mrn_id[]" value="' . $row['mrn_id'] . '">' . $row['name'] .'</label>
                </div>';
        }
        echo '<br><button type="button" class="btn btn-default" onClick="select()">'.get_phrase('select_all').'</button>';
        echo '<button style="margin-left: 5px;" type="button" class="btn btn-default" onClick="unselect()"> '.get_phrase('select_none').' </button>';
        echo '</div></div>';
    }

////////////////////////////////////////////////////////////////////////////////////////////////
 function my_patient_info($admin_id = ''){
      if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
			
		$page_data['page_name']  	= 'my_registration_page';
		$page_data['page_title'] 	= get_phrase('my_patient_info');
		$page_data['class_id'] 	= $admin_id;
		$this->load->view('backend/index', $page_data);
	}
	
	///////////////////////////////////////////////////////////////////////////////
 function our_patient_info($admin_id = ''){
      if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
			
		$page_data['page_name']  	= 'our_registration_page';
		$page_data['page_title'] 	= get_phrase('my_patient_info');
		$page_data['class_id'] 	= $admin_id;
		$this->load->view('backend/index', $page_data);
	}
////////////////////////////////////////////////////////////////////////////////	
function my_patients($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $page_data['patient_info'] = $this->db->get('patients')->result_array();
        $page_data['page_name']   = 'my_patient_info';
        $page_data['page_title'] 	= get_phrase('my_patient_info');
        $this->load->view('backend/index', $page_data);
        
     } 
    //////////////////////////////////////////////////////////////////////////////////  	
function encounter_report_pertime($admin_id=''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $page_data['patient_info'] = $this->db->get('patients')->result_array();
        $page_data['page_name']   = 'my_encounter_report';
        $page_data['page_title'] 	= get_phrase('my_encounters');
        $this->load->view('backend/index', $page_data);
        
     }
 //////////////////////////////////////////////////////////////////////////////////  	
function patient_info($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $page_data['patient_info'] = $this->db->get('patients')->result_array();
        $page_data['page_name']   = 'patient_info';
        $page_data['page_title'] 	= get_phrase('patient_information');
        $this->load->view('backend/index', $page_data);
        
     } 
 
//////////////////////////////////////////////////////////////////////////////////// 
  	
function service_charge($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');

        $page_data['service_charge_info'] = $this->db->get('treatment')->result_array();
        $page_data['page_name']   = 'service_charge_info';
        $page_data['page_title'] 	= get_phrase('service_charge_info');
        $this->load->view('backend/index', $page_data);
        
     } 
 
//////////////////////////////////////////////////////////////////////////////////// 	
function paid_service_charge($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']   = 'paid_service_charge_info';
        $page_data['page_title'] 	= get_phrase('paid_service_charge_info');
        $this->load->view('backend/index', $page_data);
        
     } 
function report_sheet($mrn_id) {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $class_id     = $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->class_id;
        $class_name   = $this->db->get_where('class' , array('class_id' => $class_id))->row()->name;

        $page_data['mrn_id']    =   $mrn_id;
        $page_data['class_id']   =   $class_id;
        $page_data['exam_id']    =   $exam_id;
        $this->load->view('backend/admin/report_sheet_print_view', $page_data);
    }
/////////////////////////////////////////////////////////////////////////////////////
function create_account($param1 = '', $param2 = '', $param3 = ''){
          if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
          if ($param1 == 'signup') {	
			$data['admin_id']       = $this->input->post('admin_id');
			$fname                  = $this->input->post('fname');
			$lname                  = $this->input->post('lname');
			$data['name']           = ($fname." ".$lname); 
		    $data['phone']          = $this->input->post('phone');
			$data['Sex']            = $this->input->post('Sex');
			$data['email']          = $this->input->post('email');
			
			$data['active']         = $this->input->post('active');
			$data['status']         = $this->input->post('status');
			$data['registered_by']  = $this->input->post('registered_by');
			$data['role']           = $this->input->post('role');
			$data['date_of_join']   = $this->input->post('date_of_join');
	        $sucess= $this->db->insert('admin', $data); 
            $admin_id = $this->db->insert_id(); 
			if($sucess){
            $this->session->set_flashdata('flash_message' , get_phrase('registered_successfully'));
		        }
		  else{
			echo die (mysql_error()); 
	       }
          redirect(base_url() . 'index.php?admin/patient_add/' . $data['class_id'], 'refresh');
        }
}
//////////////////////////////////////////////////////////////////////////////////////			
     function student($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
	         //$this->load->library('form_validation');
			$data['mrn_id']     = $this->input->post('mrn_id');
			$x                  = $data['mrn_id'];
			$data['cbhi']     = $this->input->post('cbhi');
			$id     = $this->input->post('agreement');
			$agre      =	$this->db->get_where('agreement' , array('agreement_id'=>$id))->row()->agreement;
		    $data['agreement']      = $agre;
			$fname                 = strtoupper($this->input->post('fname'));
			$mname                 = strtoupper($this->input->post('mname'));
			$lname                 = strtoupper($this->input->post('lname'));
			$data['name']          = ($fname." ".$mname." ".$lname); 
			//$data['name']          = ($fname." ".$mname); 
			//$data['name']         = array_change_key_case($data['name'], CASE_UPPER);	
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['section_id']       = $this->input->post('section_id');
			$data['cdate']       = $this->input->post('cdate');
			
		    //$data['user']       =$this->session->userdata('login_type');
	         $data['user']  = $this->session->userdata('admin_id');
			 	
			$data['woreda_id']          = $this->input->post('woreda_id');
		    $data['age']         = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
		   
		   /* $dd    = $this->input->post('dd');
			$mm = $this->input->post('mm');
			$yyyy = $this->input->post('yyyy');
			
             // $data['reg_date']= ($dd ."-".$mm."-".$yyyy);
			  $data['reg_date']= ($yyyy."-".$mm."-".$dd); */
			
		   if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			 $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
            
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			} 
            $sucess= $this->db->insert('patients', $data); 
            $mrn_id = $this->db->insert_id(); 
			if($sucess){
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$x. '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
		        }
				else{
			    echo die (mysql_error()); 
				}
            redirect(base_url() . 'index.php?admin/patient_add/' . $data['class_id'], 'refresh');
        }
        if ($param2 == 'edit') {
		    $data['mrn_id']          = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = strtoupper($this->input->post('name'));
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']     = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']       = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
		    $data['user']            =$this->session->userdata('admin_id');
		 if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			   $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
			   $this->db->where('mrn_id' ,$data['mrn_id']);
			   $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
            
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			  $this->db->where('mrn_id' ,$data['mrn_id']);
			   $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
			}

            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id'] . '.jpg');
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/patient_information/' . $param1, 'refresh');
        } 
		
	  if ($param2 == 'renew') {
		  
		  $current_user = $this->session->userdata('admin_id');
			$data['renewal']         = $this->input->post('renewal');
            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('renewal_updated'));
			
            redirect(base_url() . 'index.php?admin/our_patient_info/'.$current_user, 'refresh');
        } 
		
		if ($param2 == 'editing') {
		    $data['mrn_id']         = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = strtoupper($this->input->post('name'));
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']      = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']      = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
		     $data['user']          = $this->session->userdata('admin_id');
			 $current_user=   $data['user'];
			 
			if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			   $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
			   $this->db->where('mrn_id' ,$data['mrn_id']);
			   $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			  $this->db->where('mrn_id' ,$data['mrn_id']);
			 $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
			}
			 $this->db->where('mrn_id' ,$data['mrn_id']);
			 $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
   
            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id']. '.jpg');
            $this->crud_model->clear_cache();
			$page_data['page_title'] = get_phrase('my_registration');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
             redirect(base_url() . 'index.php?admin/our_patient_info/'.$current_user, 'refresh');
             }	
			
///////////////////////////////////////////////////////////////////////////			
			
		if ($param2 == 'update') {
		    $data['mrn_id']         = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = strtoupper($this->input->post('name'));
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']      = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']      = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
		    $data['user']          = $this->session->userdata('admin_id');
            if($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			  $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
              $this->db->where('mrn_id' ,$data['mrn_id']);
			  $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
            }
			else{	
		     $data['full_code'] = ($data['indigent']."/".$data['cbhi']);
             $this->db->where('mrn_id' ,$data['mrn_id']);
			 $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));			
			}
            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id']. '.jpg');
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
             }
            $page_data['mrn_id'] 	=$param3;
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
	        $this->load->view('backend/index', $page_data);		
        if ($param2 == 'delete') {
            $this->db->where('mrn_id', $param3);
            $this->db->delete('patients');
			$this->db->where('mrn_id' ,$param3);
			$this->db->delete('treatment'); 
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/patient_information/' . $param1, 'refresh');
        }
    }
////////////////////////////////////////////////////////		
     function patients($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        
		if ($param1 == 'create') {
			$data['mrn_id']     = $this->input->post('mrn_id');
			$x                  = $data['mrn_id'];
			$data['cbhi']     = $this->input->post('cbhi');
			$id     = $this->input->post('agreement');
			$agre      =	$this->db->get_where('agreement' , array('agreement_id'=>$id))->row()->agreement;
		    $data['agreement']      = $agre;
			$fname                  = strtoupper($this->input->post('fname'));
			$mname                  = strtoupper($this->input->post('mname'));
			$lname                  = strtoupper($this->input->post('lname'));
			$data['name']           = ($fname." ".$mname." ".$lname); 
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['section_id']     = $this->input->post('section_id');
			$data['cdate']           = $this->input->post('cdate');
	        $data['user']            = $this->session->userdata('admin_id');	
			$woredaid                = $this->input->post('woreda_id');
			$data['woreda_id']       =  $woredaid;
			$agreement               =	$this->db->get_where('parent' , array('woreda_id'=>$woredaid))->row()->agreemenrt_type;
		    $dob                     = $this->input->post('age');
		    $data['age']             =  date("Y-m-d", strtotime($dob));
            $data['phone']           = $this->input->post('phone');

			
		    if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			 $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			} 
			// to check if user agreemen selection and organization input likeness
	      if($agre ==$agreement){
            $sucess = $this->db->insert('patients', $data); 
            $mrn_id = $this->db->insert_id(); 		
		  if($sucess){
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/'.$x.'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
		        }
		     }
		 else{
			 $this->session->set_flashdata('flash_message' , get_phrase('mismatch_agreement!'));
				}
            redirect(base_url() . 'index.php?admin/patient_add/', 'refresh');
	     } 

if ($param1 == 'create2') {
			$data['mrn_id']     = $this->input->post('mrn_id');
			$x                  = $data['mrn_id'];
			$data['cbhi']     = $this->input->post('cbhi');
			$id     = $this->input->post('agreement');
			$agre      =	$this->db->get_where('agreement' , array('agreement_id'=>$id))->row()->agreement;
		    $data['agreement']      = $agre;
			$fname                  = strtoupper($this->input->post('fname'));
			$mname                  = strtoupper($this->input->post('mname'));
			$lname                  = strtoupper($this->input->post('lname'));
			$data['name']           = ($fname." ".$mname." ".$lname); 
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['section_id']     = $this->input->post('section_id');
			$data['cdate']           = $this->input->post('cdate');
	        $data['user']            = $this->session->userdata('admin_id');	
			$woredaid                = $this->input->post('woreda_id');
			$data['woreda_id']       =  $woredaid;
			$agreement               =	$this->db->get_where('parent' , array('woreda_id'=>$woredaid))->row()->agreemenrt_type;
		    $dob                     = $this->input->post('age');
		    $data['age']             =  date("Y-m-d", strtotime($dob));
            $data['phone']           = $this->input->post('phone');

			
		    if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			 $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			} 
			// to check if user agreemen selection and organization input likeness
	      if($agre ==$agreement){
            $sucess = $this->db->insert('patients', $data); 
            $mrn_id = $this->db->insert_id(); 		
		  if($sucess){
			move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/'.$x.'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
		        }
		     }
		 else{
			 $this->session->set_flashdata('flash_message' , get_phrase('mismatch_agreement!'));
				}
            redirect(base_url() . 'index.php?admin/new_patient/', 'refresh');
	            }
///////////////////////////////////////////////////////////////////////////// 				
         if ($param2 == 'edit') {
		    $data['mrn_id']          = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = strtoupper($this->input->post('name'));
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']     = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']       = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
			//$data['kebele_code']     = $this->input->post('kebele_code');
			
		    $data['user']            =$this->session->userdata('admin_id');
		  
		  //  $data['reg_date']        = $this->input->post('reg_date');
		 if ($data['indigent'] == 'H' or $data['indigent'] == 'K') {
			   $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
			   $this->db->where('mrn_id' ,$data['mrn_id']);
			   $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
            
            }
			else{	
		    $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			}

            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id'] . '.jpg');
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/patient_information/' . $param1, 'refresh');
        } 
		
	  if ($param2 == 'renew') {
		  
		  $current_user = $this->session->userdata('admin_id');
			$data['renewal']         = $this->input->post('renewal');
            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('renewal_updated'));
			
            redirect(base_url() . 'index.php?admin/our_patient_info/'.$current_user, 'refresh');
        } 
		
		if ($param2 == 'editing') {
		    $data['mrn_id']         = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = strtoupper($this->input->post('name'));
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']      = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']      = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
			//$data['kebele_code']  = $this->input->post('kebele_code');
		     $data['user']          = $this->session->userdata('admin_id');
			 $current_user=   $data['user'];
			 $data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
			 $this->db->where('mrn_id' ,$data['mrn_id']);
			 $this->db->update('treatment' , array('CBHI_code' =>$data['full_code']));
   
            $this->db->where('mrn_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id']. '.jpg');
            $this->crud_model->clear_cache();
			$page_data['page_title'] = get_phrase('my_registration');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
             redirect(base_url() . 'index.php?admin/our_patient_info/'.$current_user, 'refresh');
             }	
			
///////////////////////////////////////////////////////////////////////////			
			
		if ($param2 == 'update') {
		    $data['mrn_id']         = $this->input->post('mrn_id');
			$data['cbhi']           = $this->input->post('cbhi');
			$data['name']           = strtoupper($this->input->post('name'));
            $data['sex']            = $this->input->post('sex');
		    $data['class_id']       = $this->input->post('class_id');
			$data['kebele']         = $this->input->post('kebele');
			$data['indigent']       = $this->input->post('indigent');
			$data['agreement']      = $this->input->post('agreement');
            $data['section_id']     = $this->input->post('section_id');
		   	$data['woreda_id']      = $this->input->post('woreda_id');
		    $data['age']            = $this->input->post('age');
            $data['phone']          = $this->input->post('phone');
		    $data['user']          = $this->session->userdata('admin_id');
		    if($data['indigent'] == 'H' or $data['indigent'] == 'K' or $data['indigent'] == 'K/F/C/GMB') {
			$data['full_code'] = ($data['indigent']."/".$data['section_id']."/".$data['woreda_id']."/".$data['cbhi']); 
			$this->db->where('mrn_id' ,$data['mrn_id']);
			$this->db->update('treatment' , array('CBHI_code' =>$data['full_code'], 'indigent' =>$data['indigent'],'agreement' =>$data['agreement'],'region'=>$data['class_id'],'zone'=> $data['section_id'], 'woreda'=>$data['woreda_id'],'sex'=>$data['sex']));
              }
		   else{	
		       $data['full_code'] = ($data['indigent']."/".$data['cbhi']);	
			   $this->db->where('mrn_id' ,$data['mrn_id']);
			   $this->db->update('treatment' , array('CBHI_code' =>$data['full_code'], 'indigent' =>$data['indigent'],'agreement' =>$data['agreement'],'region'=>$data['class_id'],'zone'=> $data['section_id'], 'woreda'=>$data['woreda_id'],'sex'=>$data['sex']));
			
			}
            $this->db->where('patient_id', $param3);
            $this->db->update('patients', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' .$data['mrn_id']. '.jpg');
            $this->crud_model->clear_cache();
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
           // redirect(base_url() . 'index.php?admin/dashboard/' .$param3, 'refresh');
             }
            $page_data['mrn_id'] 	=$data['mrn_id'];
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
	        $this->load->view('backend/index', $page_data);		
	
        if ($param2 == 'delete') {
            $this->db->where('mrn_id', $param3);
            $this->db->delete('patients');
			$this->db->where('mrn_id' ,$param3);
			$this->db->update('treatment');  
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/patient_information/'.$param1, 'refresh');
        }
    }
	
	
  function verfiy_payment($param1 = '', $param2 = '', $param3 = ''){
		
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
    
   
        if ($param1 == 'bymonth') {	  
			 $class_id       = $this->input->post('class_id');
             $section_id     = $this->input->post('section_id');
			 $woreda_id      = $this->input->post('woreda_id');
			 $yyyy           = $this->input->post('year');
			 $month          = $this->input->post('mm');
             $remaining      = $this->input->post('remaining');
			 
			 if($remaining < 0){
				
				 $this->session->set_flashdata('flash_message' , get_phrase('Amount_must_be_greater_than_zero'));
                 redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
	                           		   
				
			}
			   $sql21 = mysql_query("SELECT * from treatment where (month='$month' and  region='$class_id' and  paid ='No' and  zone='$section_id' and  woreda='$woreda_id' and  year='$yyyy')") or die(mysql_error());
			   
			   $rowz = mysql_num_rows($sql21);
				   
                    if($rowz <1){
							  
				       $this->session->set_flashdata('flash_message' , get_phrase('Report not found with given information with this month!'));
					   redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
						 }
						   else{
								 
							 $results = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM `treatment` where region='$class_id' and zone='$section_id' and  month='$month' and year='$yyyy' and woreda='$woreda_id'")or die(mysql_error());
                                        
                                 while($rowx = mysql_fetch_array($results)){								 
			                            $card     = $rowx['sum(card)'];
			                            $lab      = $rowx['sum(lab)']; 	
			                            $img      = $rowx['sum(Imaging)'];  										
										$sur      = $rowx['sum(surgery)']; 	
			                            $drug     = $rowx['sum(drugs)'];							
										$bed      = $rowx['sum(Bed_fee)']; 	
			                            $other    = $rowx['sum(other)'];										
					                    $total    =($card+$lab+$img+$sur+$drug+$bed+$other);
							    	    } 
									    
										 $paid = $remaining ;
									     $perc = ($paid*100)/$total;
									     $unpaid_amount  = $total-$paid; // to calculate paid amount
								         $paid_amount = $paid;
										 $unpaid_percentage  = 100-$perc; // paid=100-25=75%
										 $paid_percentage = $perc ; // unpaid amount from user input
										 
										/*
									     $unpaid_amount =(($rem/100)*$total1);
									     $paid_amount  = $total1-$unpaid_amount; // to calculate paid amount
										 $paid_percentage  = 100-$rem; // paid=100-25=75%
										 $unpaid_percentage = $rem; // unpaid percentage from user input
										 */
										 if($paid > $total){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('paid_amount_cannot_be_greater_than_total_amount'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
										 
										 $result = mysql_query("SELECT * from `payment` where region='$class_id' and zone='$section_id' and per_time='$month' and year='$yyyy' and woreda='$woreda_id' and status ='Monthly'")or die(mysql_error());
                      
                                         $rowy = mysql_num_rows($result);
										 if($rowy>0){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('already_payment_made!'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
								          else{
								 
									   if($remaining=='0') $tag='Yes'; else $tag='Pending';
						
									 
								         $result2 =mysql_query("INSERT INTO payment (region, zone, woreda,per_time,year,paid_amount,unpaid_amount, total, paid,remain,fully_covered,status) 
								                                      VALUES ('$class_id','$section_id','$woreda_id','$month','$yyyy','$paid_amount','$unpaid_amount','$total','$paid_percentage','$unpaid_percentage','$tag','Monthly')")or die(mysql_error());
                                 	 
						                // $sql24 = mysql_query("update treatment set paid ='Yes'  where month='$month' and region='$class_id'  and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());  
			                        if ($result2==true){
		                                 $this->session->set_flashdata('flash_message' , get_phrase('montly_payment_sucessfully_accepted!'));
                                         redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 			 
						  
                             }}}
		                 }	
		
 	
		
	/////////////////////////////////////////////////////////////////////////////////////////////////////////	
 if ($param1 == 'byquarter') {	
	         $class_id       = $this->input->post('class_id');
             $section_id     = $this->input->post('section_id');
			 $woreda_id      = $this->input->post('woreda_id');
			 $year           = $this->input->post('year');
		     $qt             = $this->input->post('qt');
             $rem            = $this->input->post('remaining');
			 $byear          = trim($this->input->post('byear'));
             $fyear          = trim($this->input->post('fyear'));
		
   // if(($rem < 0) || ($rem >99)){
		    if($rem < 0){		
				 $this->session->set_flashdata('flash_message' , get_phrase('paid_amount_amount greater_than_zero!'));
                 redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
	                           		   
				
			}
			   
	if($qt ==1){
		
			   $sql1 ="SELECT * from treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear' AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'";
               $res1 = mysql_query($sql1) or die(mysql_error());
			   $row1 = mysql_num_rows($res1);
				   
                        if($row1 <1){				  
				       $this->session->set_flashdata('flash_message' , get_phrase('Report not found with given information with quarter one!'));
					   redirect(base_url() .'index.php?admin/accept_payment/', 'refresh'); 
						 }
						 else{
							 
                      $res = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and  paid='No' and   zone='$section_id' and  woreda='$woreda_id'") or die(mysql_error());
                                        
                                        while($rowz = mysql_fetch_array($res)){								 
			                            $card2     = $rowz['sum(card)'];
			                            $lab2      = $rowz['sum(lab)']; 	
			                            $img2      = $rowz['sum(Imaging)'];  										
										$sur2      = $rowz['sum(surgery)']; 	
			                            $drug2     = $rowz['sum(drugs)'];							
										$bed2      = $rowz['sum(Bed_fee)']; 	
			                            $other2    = $rowz['sum(other)'];										
					                    $total1    =($card2+$lab2+$img2+$sur2+$drug2+$bed2+$other2);
							    	   } 
									 
									     $paid = $rem;
									     $perc = ($paid*100)/$total1;
									     $unpaid_amount  = $total1-$paid; // to calculate paid amount
								         $paid_amount = $paid;
										 $unpaid_percentage  = 100-$perc; // unpaid percentage =100-25=75%
										 $paid_percentage = $perc ; // paid percentage
										 
										/*
									     $unpaid_amount =(($rem/100)*$total1);
									     $paid_amount  = $total1-$unpaid_amount; // to calculate paid amount
										 $paid_percentage  = 100-$rem; // paid=100-25=75%
										 $unpaid_percentage = $rem; // unpaid percentage from user input
										 */
										 if($paid > $total1){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('paid_amount_cannot_be_greater_than_total_amount'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
										 $resul = mysql_query("SELECT * from `payment` where region='$class_id' and zone='$section_id' and  per_time='$qt' and year='$year' and woreda='$woreda_id' and status ='quarterly'")or die(mysql_error());
                      
                                         $rowy = mysql_num_rows($resul);
										 if($rowy>0){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('already_payment_made!'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
								          else{
								 
									   if($rem =='0') $tag='Yes'; else  $tag='Pending'; 
						
									 
								 $result2 = mysql_query("INSERT INTO `payment`(`region`, `zone`, `woreda`,`per_time`,`year`,`paid_amount`,`unpaid_amount`,`total`, `paid`,`remain`,`fully_covered`,`status`) 
								                                      VALUES ('$class_id','$section_id','$woreda_id','$qt','$year', $paid_amount,$unpaid_amount,$total1,'$paid_percentage','$unpaid_percentage','$tag','quarterly')") or die(mysql_error());
                                 
							 // mysql_query("update treatment set paid ='Yes' where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and  CAST('$fyear'  AS DATE) and  region='$class_id' and  zone='$section_id' and  woreda='$woreda_id'") or die(mysql_error()); 
								if($result2==true){
		                        $this->session->set_flashdata('flash_message' , get_phrase('quarterly_payment_sucessfully_accepted!'));
                                redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
						       } 
							 } 
					   	}
				      }
				            	
           if($qt ==2){
			   $sql2="SELECT * from treatment where month in (2,3,4) and  region='$class_id' and paid ='No' and zone='$section_id' and woreda='$woreda_id' and year='$year'";
               $res2 = mysql_query($sql2) or die(mysql_error());
			   $row2 = mysql_num_rows($res2);
				   
                    if($row2 <1){
							  
				       $this->session->set_flashdata('flash_message' , get_phrase('Report not found with given information with quarter two!'));
					   redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
						 }
						   else{
								 
							    $result2 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM `treatment` where month in (2,3,4) and paid='No' and region='$class_id' and zone='$section_id' and year='$year' and woreda='$woreda_id'") or die(mysql_error());
                                        
                                 while($rowz = mysql_fetch_array($result2)){								 
			                            $card     = $rowz['sum(card)'];
			                            $lab      = $rowz['sum(lab)']; 	
			                            $img      = $rowz['sum(Imaging)'];  										
										$sur      = $rowz['sum(surgery)']; 	
			                            $drug     = $rowz['sum(drugs)'];							
										$bed      = $rowz['sum(Bed_fee)']; 	
			                            $other    = $rowz['sum(other)'];										
					                    $total2    =($card+$lab+$img+$sur+$drug+$bed+$other);
							    	 } 
									      $paid = $rem;
									     $perc = ($paid*100)/$total2 ;
									     $unpaid_amount  = $total2-$paid; // to calculate paid amount
								         $paid_amount = $paid;
										 $unpaid_percentage  = 100-$perc; // paid=100-25=75%
										 $paid_percentage = $perc ; // unpaid amount from user input
										 
										/*
									     $unpaid_amount =(($rem/100)*$total1);
									     $paid_amount  = $total1-$unpaid_amount; // to calculate paid amount
										 $paid_percentage  = 100-$rem; // paid=100-25=75%
										 $unpaid_percentage = $rem; // unpaid percentage from user input
										 */
										 if($paid > $total2){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('paid_amount_cannot_be_greater_than_total_amount'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
										 
										 $resul = mysql_query("SELECT * from `payment` where region='$class_id' and zone='$section_id' and  per_time='$qt' and year='$year' and woreda='$woreda_id' and status ='quarterly'") or die(mysql_error());
                      
                                         $rowy = mysql_num_rows($resul);
										 if($rowy>0){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('already_payment_made!'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
								          else{
								 
									   if($rem=='0') $tag='Yes'; else  $tag='Pending'; 
						
									 
								 $result2 =mysql_query("INSERT INTO `payment`(`region`, `zone`, `woreda`,`per_time`,`year`,`paid_amount`,`unpaid_amount`,`total`, `paid`,`remain`,`fully_covered`,`status`) 
								                                      VALUES ('$class_id','$section_id','$woreda_id','$qt','$year',$paid_amount,$unpaid_amount, $total2,'$paid_percentage','$unpaid_percentage','$tag','quarterly')")or die(mysql_error());
                                 	 
						     //  mysql_query("update treatment set paid ='Yes' where month in (2,3,4)  and region='$class_id'  and zone='$section_id' and woreda='$woreda_id' and year='$year'") or die(mysql_error());  
			                      if($result2==true){
		                        $this->session->set_flashdata('flash_message' , get_phrase('quarterly_payment_sucessfully_accepted!'));
                                redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
	                       }	 
							 
		   }}
		}	
				  
			   if($qt ==3){
				   
				   
			   $sql3 ="SELECT * from treatment where  month in (5,6,7)  and region='$class_id' and paid ='No' and zone='$section_id' and woreda='$woreda_id' and year='$year'";
               $res3 = mysql_query($sql3) or die(mysql_error());
			   $row3 = mysql_num_rows($res3);
				   
                          if($row3<1){
							  
				       $this->session->set_flashdata('flash_message' , get_phrase('Report not found with given information with quarter three!'));
					   redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
						 }
						 else{
						      $result3 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM `treatment` where month in (5,6,7) and paid='No' and region='$class_id' and zone='$section_id' and year='$year' and woreda='$woreda_id'") or die(mysql_error());                             
                                 while($rowz = mysql_fetch_array($result3)){								 
			                            $card3     = $rowz['sum(card)'];
			                            $lab3      = $rowz['sum(lab)']; 	
			                            $img3      = $rowz['sum(Imaging)'];  										
										$sur3      = $rowz['sum(surgery)']; 	
			                            $drug3     = $rowz['sum(drugs)'];							
										$bed3      = $rowz['sum(Bed_fee)']; 	
			                            $other3    = $rowz['sum(other)'];										
					                    $total3    =($card3+$lab3+$img3+$sur3+$drug3+$bed3+$other3);
							    	 } 
									     $paid = $rem;
									     $perc = ($paid*100)/$total3 ;
									     $unpaid_amount  =$total3-$paid; // to calculate paid amount
								         $paid_amount = $paid;
										 $unpaid_percentage  = 100-$perc; // paid=100-25=75%
										 $paid_percentage = $perc ; // unpaid amount from user input
										 
										/*
									     $unpaid_amount =(($rem/100)*$total1);
									     $paid_amount  = $total1-$unpaid_amount; // to calculate paid amount
										 $paid_percentage  = 100-$rem; // paid=100-25=75%
										 $unpaid_percentage = $rem; // unpaid percentage from user input
										 */
										 if($paid > $total3 ){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('paid_amount_cannot_be_greater_than_total_amount'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
										 
										 $resul = mysql_query("SELECT * from `payment` where region='$class_id' and zone='$section_id' and per_time='$qt' and year='$year' and woreda='$woreda_id'  and status ='quarterly'") or die(mysql_error());
                      
                                         $rowy = mysql_num_rows($resul);
										 if($rowy>0){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('already_payment_made!'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
								          else{
								 
									   if($rem=='0') $tag='Yes'; else  $tag='Pending'; 
						
									 
								 $result2 =mysql_query("INSERT INTO `payment`(`region`, `zone`, `woreda`,`per_time`,`year`,`paid_amount`,`unpaid_amount`,`total`, `paid`,`remain`,`fully_covered`,status) 
								                                      VALUES ('$class_id','$section_id','$woreda_id','$qt','$year',$paid_amount,$unpaid_amount,$total3,'$paid_percentage','$unpaid_percentage','$tag','quarterly')")or die(mysql_error());
                                 	 
							 					 
							   // mysql_query("update treatment set paid ='Yes' where month in (5,6,7)  and  region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$year'") or die(mysql_error());
			                      if($result2==true){
		                        $this->session->set_flashdata('flash_message' , get_phrase('quarterly_payment_sucessfully_accepted!'));
                                redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
	                            } 
							 
			               }}
				  }	
		     if($qt ==4){
			   $sql4="SELECT * from treatment where  where month in (8,9,10)  and  region='$class_id' and paid ='No' and zone='$section_id' and woreda='$woreda_id' and year='$year'";
               $res4 = mysql_query($sql4) or die(mysql_error());
			   $row4 = mysql_num_rows($res4);
				   
                       if($row4 <1){
							  
				       $this->session->set_flashdata('flash_message' , get_phrase('Report not found with given information with quarter four!'));
					   redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
						 }
				          else{
							  
							    $result4 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM `treatment` where month in (8,9,10) and paid='No' and region='$class_id' and zone='$section_id' and year='$year' and woreda='$woreda_id'") or die(mysql_error());                             
                                 while($rowz = mysql_fetch_array($result4)){								 
			                            $card     = $rowz['sum(card)'];
			                            $lab      = $rowz['sum(lab)']; 	
			                            $img      = $rowz['sum(Imaging)'];  										
										$sur      = $rowz['sum(surgery)']; 	
			                            $drug     = $rowz['sum(drugs)'];							
										$bed      = $rowz['sum(Bed_fee)']; 	
			                            $other    = $rowz['sum(other)'];										
					                    $total4    =($card+$lab+$img+$sur+$drug+$bed+$other);
							    	 } 
									    $paid = $rem;
									     $perc = ($paid*100)/$total4;
									     $unpaid_amount  =$total4-$paid; // to calculate paid amount
								         $paid_amount = $paid;
										 $unpaid_percentage  = 100-$perc; // paid=100-25=75%
										 $paid_percentage = $perc ; // unpaid amount from user input
										 
										/*
									     $unpaid_amount =(($rem/100)*$total1);
									     $paid_amount  = $total1-$unpaid_amount; // to calculate paid amount
										 $paid_percentage  = 100-$rem; // paid=100-25=75%
										 $unpaid_percentage = $rem; // unpaid percentage from user input
										 */
										 if($paid > $total4){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('paid_amount_cannot_be_greater_than_total_amount'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
										 
										 $resul = mysql_query("SELECT * from `payment` where region='$class_id' and zone='$section_id' and per_time='$qt' and year='$year' and woreda='$woreda_id' and status ='quarterly'")or die(mysql_error());
                      
                                         $rowy = mysql_num_rows($resul);
										 if($rowy>0){
											 
											 $this->session->set_flashdata('flash_message' , get_phrase('already_payment_made!'));
                                               redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 	 
										 }
								          else{
								 
									   if($rem==0) $tag='Yes'; else  $tag='Pending'; 
						
									 
								 $result2 =mysql_query("INSERT INTO `payment`(`region`, `zone`, `woreda`,`per_time`,`year`,`paid_amount`,`unpaid_amount`,`total`, `paid`,`remain`,`fully_covered`,`status`) 
								                                      VALUES ('$class_id','$section_id','$woreda_id','$qt','$year',$paid_amount,$unpaid_amount,$total4,'$paid_percentage','$unpaid_percentage','$tag','quarterly')")or die(mysql_error());
                                 	 
							 
                                // mysql_query("update treatment set paid ='Yes' where month in (8,9,10) and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$year'") or die(mysql_error());  
			                     if($result2==true){
		                        $this->session->set_flashdata('flash_message' , get_phrase('quarterly_payment_sucessfully_accepted!'));
                                redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh'); 
	                            } 			 
						 }
				    }	
              }}
	}
		
 //////////////////////////////////////////				
      function approved_request($param1 = '', $param2 = '', $param3 = '')
    {
		
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
    
	   if ($param1 == 'send') {	
							 
			$data['region']       = $this->input->post('region');
            $data['zone']         = $this->input->post('zone');
			$data['woreda']       = $this->input->post('woreda');
			
		    $data['year']        = $this->input->post('year');
            $data['quarter']     = $this->input->post('quarter');
		    $data['request_by']  = $this->session->userdata('admin_id');
			$data['approved']    = 'Pending';		
	         $this->db->insert('payment_approval', $data)or die(mysql_error());  
            $request_id = $this->db->insert_id(); 
		
            $this->session->set_flashdata('flash_message' , get_phrase('sent_successfully'));
		     redirect(base_url() . 'index.php?admin/my_request/', 'refresh');
	         }
		   if ($param1 == 'fully_monthly') {	
		     $unpaid_amount     = $this->input->post('unpaid_amount');
             $paid_amount      = $this->input->post('paid_amount');
			 $payment_id     = $this->input->post('payment_id');
			 $total =  ($unpaid_amount + $paid_amount);


			  $data['fully_covered']  = 'Yes';
              $data['paid']           = 100;
              $data['remain']         = 0;
			  $data['unpaid_amount']  = 0;
			  $data['paid_amount']    = $total;
			  $data['approval_date']  = $this->input->post('approval_date');
			 
              $data['approved_by']  = $this->session->userdata('admin_id');
				  
					 
              $this->db->where('payment_id' ,$payment_id);
              $this->db->update('payment' , $data) or die(mysql_error()); 
			  $page_data['page_title'] 	= get_phrase('partially_paid_list');
              $page_data['page_name']  = 'modal_approve_partial';
			  
            $this->session->set_flashdata('flash_message' , get_phrase('successfull_payment_covered(100%)'));
			 
            redirect(base_url() . 'index.php?admin/partially_paid_list/', 'refresh');
        }
		
		   
        if ($param1 == 'accept') {
		    // $class_id     = $this->input->post('region');
             //$section_id      = $this->input->post('zone');
			 //$woreda_id     = $this->input->post('woreda');
			 //$yyyy       = $this->input->post('year');
             //$quarter    = $this->input->post('quarter');
			 // $request_id   = $this->input->post('request_id');
			
			 $data['view']         = 'Seen';
             $data['approved_by']  = $this->session->userdata('admin_id');
				  
			 
              $this->db->where('request_id' ,$param2);
              $this->db->update('complain' , $data);
			  $page_data['page_title'] 	= get_phrase('inbox_complain');
              $page_data['page_name']  = 'inbox_requests';
			
					 
              $this->db->where('request_id' , $param2);
              $this->db->update('payment_approval' , $data);
			  $page_data['page_title'] 	= get_phrase('inbox_request');
              $page_data['page_name']  = 'inbox_requests';
			  
            $this->session->set_flashdata('flash_message' , get_phrase('message_seen'));
			 
            redirect(base_url() . 'index.php?admin/inbox_request/', 'refresh');
        }

    }
	
    
     /****MANAGE USERS*****/
	 
	     function manege_kebele($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
             $data['name']         = $this->input->post('name');
             $data['kebele_code']  = $this->input->post('kebele_code');
             $data['region_id']     = $this->input->post('region_id');
			 $data['zone_id']       = $this->input->post('zone_id');
			 $data['woreda_id']    = $this->input->post('woreda_id');
            $this->db->insert('kebele', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/manege_kebele/', 'refresh');
        }
        if ($param1 == 'edit') {
             $data['kebele_code']   = $this->input->post('kebele_code');
			 $data['name']          = $this->input->post('name');
             $data['region_id']     = $this->input->post('region');
			 $data['zone_id']       = $this->input->post('zone');
			 $data['woreda_id']     = $this->input->post('woreda');
     
            $this->db->where('kebele_id' , $param2);
            $this->db->update('kebele' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/manege_kebele/', 'refresh');
         }

      if ($param1 == 'delete') {
            $this->db->where('kebele_id' , $param2);
            $this->db->delete('kebele');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/manege_kebele/', 'refresh');
        }
        $page_data['page_title'] 	= get_phrase('woreda_kebele');
        $page_data['page_name']  = 'woreda_kebele';
        $this->load->view('backend/index', $page_data);
    }
	
  /////////////////////////////////////////////////////////
  
    function kebele($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
             $data['name']         = $this->input->post('name');
             $data['kebele_code']  = $this->input->post('kebele_code');
             $data['region_id']     = $this->input->post('region_id');
			 $data['zone_id']       = $this->input->post('zone_id');
			 $data['woreda_id']    = $this->input->post('woreda_id');
            $this->db->insert('kebele', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/kebele/', 'refresh');
        }
        if ($param1 == 'edit') {
             $data['kebele_code']   = $this->input->post('kebele_code');
			 $data['name']          = $this->input->post('name');
             $data['region_id']     = $this->input->post('region_id');
			 $data['zone_id']       = $this->input->post('zone_id');
			 $data['woreda_id']     = $this->input->post('woreda_id');
     
            $this->db->where('kebele_id' , $param2);
            $this->db->update('kebele' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/kebele/', 'refresh');
         }

      if ($param1 == 'delete') {
            $this->db->where('kebele_id' , $param2);
            $this->db->delete('kebele');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/kebele/', 'refresh');
        }
        $page_data['page_title'] 	= get_phrase('all_kebele');
        $page_data['page_name']  = 'kebele';
        $this->load->view('backend/index', $page_data);
    }
	
  /////////////////////////////////////////////////////////
function create_user($param1 = '', $param2 = '', $param3 = '')
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh'); 
		$page_data['page_name']  = 'user_add';
		$page_data['page_title'] = get_phrase('new_user_profile');
		$this->load->view('backend/index', $page_data);
	}

/////////////////////////////////////////////////////////////

    function users($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
			
           // $data['admin_id']        = $this->input->post('admin_id');
            $fname          = $this->input->post('fname');
			$lname           = $this->input->post('lname');
			$data['name']            = ($fname."  ".$lname); 
            $data['date_of_join']    = $this->input->post('date_of_join');
            $data['Sex']             = $this->input->post('Sex');
            $data['phone']           = $this->input->post('phone');
			$mail                    = '@ju.edu.et';
			$x                       =  $fname;
	        $x2                      = strtolower($x); //strtoupper($x);
		    $data['email']           = trim($x2."".$mail); 
            $data['password']        = md5($this->input->post('password')); 
            $data['status']          = '0';
	    	$data['role']            = $this->input->post('role');
			$data['registered_by']   = $this->session->userdata('admin_id');
		 
            $this->db->insert('admin', $data);
            $admin_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' .$data['admin_id'].'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $this->email_model->account_opening_email('admin', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'index.php?admin/users/', 'refresh');
        }
	  if ($param1 == 'createbyadmin') {
			
            $fname          = $this->input->post('fname');
			$lname           = $this->input->post('lname');
			$data['name']            = ($fname."  ".$lname); 
            $data['date_of_join']    = $this->input->post('date_of_join');
            $data['Sex']             = $this->input->post('Sex');
            $data['phone']           = $this->input->post('phone');
			$mail                    = '@ju.edu.et';
			$x                       =  $fname;
	        $x2                      = strtolower($x); //strtoupper($x);
		    $data['email']           = trim($x2."".$mail); 
            $data['password']        = md5($this->input->post('password')); 
            $data['status']          = '0';
	    	$data['role']            = $this->input->post('role');
			$data['registered_by']   = $this->session->userdata('admin_id');
		 
            $this->db->insert('admin', $data);
            $admin_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/' .$data['admin_id'].'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            //$this->email_model->account_opening_email('admin', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'index.php?admin/create_user/', 'refresh');
        }
		
		  if($param1 == 'link') {
			  
			  
			    $data['user_id']        = $this->input->post('user_id');  
			    $user_id                =    $data['user_id'];
				
           $results = mysql_query("SELECT * FROM `link_tbl` where user_id ='$user_id'") or die(mysql_error());           
           $no_of_row = mysql_num_rows($results);
           if($no_of_row >=1){					
			 $this->session->set_flashdata('flash_message' , get_phrase('user_already_linked!'));
             redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');		
           }  
            else{			  
            $data['region']           = $this->input->post('region');
            $data['zone']             = $this->input->post('zone');
            $data['woreda']           = $this->input->post('woreda');
            $data['linked_by']        = $this->session->userdata('admin_id');	 
            $this->db->insert('link_tbl', $data);
            $admin_id = $this->db->insert_id();
          
            $this->session->set_flashdata('flash_message' , get_phrase('user_linked_successfully'));
 
            redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');
        }
		  }
		
        if ($param1 == 'do_update') {
	        $data['admin_id']     = $this->input->post('admin_id');
            $data['name']         = $this->input->post('name');
            $data['date_of_join'] = $this->input->post('date_of_join');
            $data['Sex']          = $this->input->post('Sex');
            $data['phone']        = $this->input->post('phone');
			$data['email']        = $this->input->post('email');
            $data['password']     = md5($this->input->post('password')); 
		    $data['registered_by']   = $this->session->userdata('admin_id');
	    	$data['role']  = $this->input->post('role');
            
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/'.$param2.'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');
          } 
		 if ($param1 == 'reinitialize_password') {
	        $data['admin_id']        = $this->input->post('admin_id');
			 $role                   = $this->input->post('role');
            $data['password']        = md5($this->input->post('password')); 
            $data['active']          = 'yes';
			$data['login_attempts']  = 0;  			
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
			$this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
		    redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');
			
          } 	
	   if ($param1 == 'disable') {
	        $data['admin_id']        = $this->input->post('admin_id');
            $data['active']          = $this->input->post('active');
		    $data['role']          = 'inactive';
			$data['active']          = 'no';
			$data['login_attempts']  = 4;
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');
           } 
       if ($param1 == 'enable') {
	        $data['admin_id']        = $this->input->post('admin_id');
            $data['active']          = $this->input->post('active');
			$data['role']          = $this->input->post('role');
            $data['active']          = 'yes';
			$data['login_attempts']  = 0;
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');
          }		
		else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
			
            } 
		 else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('admin', array('admin_id' => $param2 ))->result_array();
        }
		  if ($param1 == 'terminate') {  
		  
		    $data['active'] = 'no';
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
            $this->db->where('user_id', $param2);
            $this->db->delete('link_tbl');
            $this->session->set_flashdata('flash_message' , get_phrase('deligation_canceled_successfully'));
            redirect(base_url() . 'index.php?admin/deligated_users/', 'refresh');
        }
		
        if ($param1 == 'delete') {
            $this->db->where('admin_id', $param2);
            $this->db->delete('admin');
			$this->db->where('user_id', $param2);
            $this->db->delete('link_tbl');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/dashboard/', 'refresh');
        }
        $page_data['users']   = $this->db->get('admin')->result_array();
        $page_data['page_name']  = 'users';
        $page_data['page_title'] = get_phrase('manage_user');
        $this->load->view('backend/index', $page_data);
    }
    

   	  
	  /****MANAGE activer users*****/
    function activer_users($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
			
            $data['admin_id']        = $this->input->post('admin_id');
            $fname          = $this->input->post('fname');
			$lname           = $this->input->post('lname');
			$data['name']            = ($fname."  ".$lname); 
            $data['date_of_join']    = $this->input->post('date_of_join');
            $data['Sex']             = $this->input->post('Sex');
            $data['phone']           = $this->input->post('phone');
			$mail                  = '@ju.edu.et';
		    $data['email']            = ($fname." ".$mail); 
            $data['password']        = $this->input->post('password'); 
            $data['status']        = '0';
	    	$data['role']            = $this->input->post('role');
		 
            $this->db->insert('admin', $data);
            $teacher_id = $this->db->insert_id();
           // move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $teacher_id . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $this->email_model->account_opening_email('admin', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'index.php?admin/active_user_list/', 'refresh');
        }
        if ($param1 == 'do_update') {
	        $data['admin_id']        = $this->input->post('admin_id');
            $data['name']        = $this->input->post('name');
            $data['date_of_join']    = $this->input->post('date_of_join');
            $data['Sex']         = $this->input->post('Sex');
            $data['phone']    = $this->input->post('phone');
			$data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password'); 
            $data['class_id']  = $this->input->post('class_id');
	    	$data['role']  = $this->input->post('role');
            
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/active_user_list/', 'refresh');
        } 
		
		else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('admin', array('admin_id' => $param2 ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('admin_id', $param2);
            $this->db->delete('admin');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/active_user_list/', 'refresh');
        }
        $page_data['teachers']   = $this->db->get('admin')->result_array();
        $page_data['page_name']  = 'active_user_list';
        $page_data['page_title'] = get_phrase('active_user_list');
        $this->load->view('backend/index', $page_data);
    }
    
	  /****MANAGE activer users*****/
    function access_control($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
			
            $data['admin_id']        = $this->input->post('admin_id');
            $fname                   = $this->input->post('fname');
			$lname                   = $this->input->post('lname');
			$data['name']            = ($fname."  ".$lname); 
            $data['date_of_join']    = $this->input->post('date_of_join');
            $data['Sex']             = $this->input->post('Sex');
            $data['phone']           = $this->input->post('phone');
			$mail                    = '@ju.edu.et';
		    $data['email']           = ($fname." ".$mail); 
            $data['password']        = md5($this->input->post('password')); 
            $data['status']          = '0';
	    	$data['role']            = $this->input->post('role');
		 
            $this->db->insert('admin', $data);
            $teacher_id = $this->db->insert_id();
            //move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/'.$admin_id .'.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $this->email_model->account_opening_email('admin', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'index.php?admin/user_access_control_list/', 'refresh');
        }
        if ($param1 == 'do_update') {
	        $data['admin_id']        = $this->input->post('admin_id');
            $data['name']            = $this->input->post('name');
            $data['date_of_join']    = $this->input->post('date_of_join');
            $data['Sex']             = $this->input->post('Sex');
            $data['phone']           = $this->input->post('phone');
			$data['email']           = $this->input->post('email');
            $data['password']        = md5($this->input->post('password')); 
            $data['class_id']        = $this->input->post('class_id');
	    	$data['role']            = $this->input->post('role');
            
            $this->db->where('admin_id', $param2);
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $param2 . '.jpg');
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/user_access_control_list/', 'refresh');
        } 
		
		else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('admin', array('admin_id' => $param2 ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('admin_id', $param2);
            $this->db->delete('admin');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/user_access_control_list/', 'refresh');
        }
        $page_data['teachers']   = $this->db->get('admin')->result_array();
        $page_data['page_name']  = 'user_access_control_list';
        $page_data['page_title'] = get_phrase('manage_user_access');
        $this->load->view('backend/index', $page_data);
    }
    
    
    
    /****MANAGE SUBJECTS*****/
    function zone($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
  
		 $page_data['class_id']   = $param1;
        $page_data['zone']   = $this->db->get_where('parent' , array('section_id' => $param1))->result_array();
        $page_data['page_name']  = 'zone';
        $page_data['page_title'] = get_phrase('manage_zone');
        $this->load->view('backend/index', $page_data);
    }
    
	
	//////////////////////////////////////////////////////////////////////////////////////////
function  add_payment($param1 = '', $param2 = '' , $param3 = '') {

         if ($param1 == 'add_pay'){
			
		   	$tr = $this->input->post('treatment');
			$Date_of_service = $this->input->post('Date_of_service');
			$encounter_id    = $this->input->post('encounter_id');
			
			$price  = $this->input->post('price');
		    $data['outcome']=   $this->input->post('outcome');
		    $data['remark']   = $this->input->post('remark');
			$s="SELECT * FROM  treatment where  Date_of_service ='$Date_of_service' and encounter_id = '$encounter_id'";
             $ress = mysql_query($s) or die(mysql_error());
             while($rows = mysql_fetch_array($ress)){
               $param2 = $rows['encounter_id']; 	
			   $card    = $rows["card"]; 	
			   $lab     = $rows["lab"]; 	
			   $other   = $rows["other"]; 	
			   $drugs   = $rows["drugs"]; 	
			   $Bed_fee = $rows["Bed_fee"]; 	
			   $surgery = $rows["surgery"]; 	
			   $Imaging = $rows["Imaging"]; 	
			   $total   = $rows["total"]; 	
           }
		
			
if(trim($tr== 'card')){
				  
$sql1 ="update treatment set card = card+$price where  encounter_id ='$param2'";
$result1=mysql_query($sql1) or die(mysql_error());

  }
if(trim($tr== 'lab')){
				  
$sql2 ="update treatment set lab= lab+$price where  encounter_id ='$param2'";
$result2=mysql_query($sql2) or die(mysql_error());
}

if(($tr== 'Imaging')){	
 
$sql3 ="update treatment set Imaging = Imaging+$price where  encounter_id ='$param2'";
$result3=mysql_query($sql3) or die(mysql_error());

 }
if(trim($tr== 'surgery')){
				  
$sql4 ="update treatment set surgery = surgery+$price where encounter_id ='$param2'";
$result4=mysql_query($sql4) or die(mysql_error());
	  }		
if(trim($tr== 'Bed_fee')){
				  
$sql5 ="update treatment set Bed_fee = Bed_fee+$price where encounter_id ='$param2'";

$result5=mysql_query($sql5) or die(mysql_error());
 }	    
if(trim($tr== 'drugs')){
			
$sql6 ="update treatment set drugs = drugs+$price where encounter_id ='$param2'";
$result6 =mysql_query($sql6) or die(mysql_error());
 }
if(trim($tr== 'other')){
$sql7 ="update treatment set other = other+$price where encounter_id ='$param2'";
$result7=mysql_query($sql7) or die(mysql_error());

		}	

 $sq="SELECT * FROM treatment where encounter_id ='$param2'";
             $results = mysql_query($sq) or die(mysql_error());
             while($row3 = mysql_fetch_array($results)){	
			   $mrn_id    = $row3["mrn_id"];
			   $c    = $row3["card"]; 	
			   $l    = $row3["lab"]; 	
			   $o    = $row3["other"]; 	
			   $d    = $row3["drugs"]; 	
			   $B    = $row3["Bed_fee"]; 	
			   $s    = $row3["surgery"]; 	
			   $I    = $row3["Imaging"]; 		
                  }	

   $sqll ="update treatment set total = $o+$d+$s+$B+$I+$c+$l where encounter_id='$param2'"; 
          $results =mysql_query($sqll) or die(mysql_error());  
		 if($results==true){
			
		   if ($this->input->post('outcome') != '') {
               $this->db->where('encounter_id', $param2);
               $this->db->update('treatment', $data);
                 }
		      if ($this->input->post('remark') != '') {
               $this->db->where('encounter_id', $param2);
               $this->db->update('treatment', $data);
                }
	      
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
           // redirect(base_url() . 'index.php?admin/dashboard/'.$data['mrn_id'], 'refresh');
	    } 
		    $page_data['mrn_id'] 	=$mrn_id;
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
	        $this->load->view('backend/index', $page_data);
	 }	  
}
////////////////////////////////////////////////////////////////////////////////////////////	
    function  encouter($param1 = '', $param2 = '' , $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
		 $re2 = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ross = mysql_fetch_array($re2)) {
				$year  = $ross['year'];
				$backyear  = $year-1;
				}
		
       if ($param1 == 'create') {	
               	   
			$data['mrn_id']    = $this->input->post('mrn_id');
			$data['CBHI_code'] =   $this->input->post('CBHI_code');  	
			$data['diagniss']  =   $this->input->post('diagniss');
			$data['encounter'] =   $this->input->post('encounter');
			$data['agreement'] =   $this->input->post('agreement');
			$data['indigent']  =   $this->input->post('indigent');
			$data['region']    =   $this->input->post('region');
			$data['zone']      =   $this->input->post('zone');
			$data['woreda']    =   $this->input->post('woreda');
			$data['sex']       =   $this->input->post('sex');
			$data['user']      =   $this->input->post('user');
			$data['final_date'] =   $this->input->post('final_date');
			$data['cdate']     =   $this->input->post('cdate');
			$data['age']       =   $this->input->post('age');
			$data['paid']      = 'No';
			$data['edited']    = '0';
		    $dd                =$this->input->post('dd');
			$mm                =$this->input->post('mm');
			$yyyy              = $this->input->post('yyyy');
		    $treatment         = $this->input->post('treatment');
			
			
    if($treatment=='Card'){
            $data['mrn_id']    = $this->input->post('mrn_id');
            $data['CBHI_code'] = $this->input->post('CBHI_code'); 
            $price             = $this->input->post('price');
            $mrn_id            = $data['mrn_id'];
            $CBHI_code         = $data['CBHI_code'];
			$data['card']      = $price;
	        $data['lab']       = '0';	
	        $data['Imaging']   = '0';
			$data['surgery']   = '0';
			$data['Bed_fee']   = '0';
			$data['drugs']     = '0';
			$data['other']     = '0'; 
			$data['month']= $mm;
			$data['year']= $yyyy;
			$pug = $mm-1;
		   // $data['Date_of_service'] = ($dd."/".$mm."/".$yyyy); 
		   	if($mm=='13'){
             $data['Date_of_service'] =  trim($yyyy."-".$pug."-".$dd);
               }
	        else {
             $data['Date_of_service'] =  trim($yyyy."-".$mm."-".$dd);
            }
        
             $data['total']   = ($data['card']+$data['Imaging']+$data['surgery']+$data['Bed_fee']+$data['drugs']+$data['other']); 
            
             $new1 = date('Y-m-d');		
             $new2 = date('Y-m-d',strtotime($new1. ' - 1 days'));
             $new3 = date('Y-m-d',strtotime($new1. ' - 2 days'));
             $new4 = date('Y-m-d',strtotime($new1. ' - 3 days'));
             $new5 = date('Y-m-d',strtotime($new1. ' - 4 days'));
             $new6 = date('Y-m-d',strtotime($new1. ' - 5 days'));
             $new7 = date('Y-m-d',strtotime($new1. ' - 6 days'));
             $new8 = date('Y-m-d',strtotime($new1. ' - 7 days'));
             $new9 = date('Y-m-d',strtotime($new1. ' - 8 days'));
             $new10 = date('Y-m-d',strtotime($new1. ' - 9 days'));

			 $sql3 ="SELECT  *  FROM  treatment where cdate in ('$new1','new2','$new3','$new4','$new5','$new6','$new7','$new8','$new9','$new10') and mrn_id ='$mrn_id'";
             $ress = mysql_query($sql3);
           
		   if(mysql_num_rows($ress)>0 or $yyyy != $year){
            $this->session->set_flashdata('flash_message' , get_phrase('not_allowed_to_create_encounter!'));
			$page_data['page_title'] = get_phrase('patient_profile_view');
		    $page_data['page_name'] = 'patient_profile_view';
            $page_data['mrn_id'] 	= $mrn_id;
            $this->load->view('backend/index', $page_data);
            }
			/*	
		    if($yyyy != $year){
            $this->session->set_flashdata('flash_message' , get_phrase('invalid_year_selection'));
	        $page_data['page_title'] = get_phrase('patient_profile_view');
		    $page_data['page_name'] = 'patient_profile_view';
            $page_data['mrn_id'] 	= $mrn_id;
            $this->load->view('backend/index', $page_data);
            } */
			
			else {
            $this->db->insert('treatment', $data);	
			$this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            $page_data['page_title'] = get_phrase('patient_profile_view');
		    $page_data['page_name'] = 'patient_profile_view';
            $page_data['mrn_id'] 	=$mrn_id;
            $this->load->view('backend/index', $page_data);
                 } 
               
            }
	   }			
     if ($param1 == 'do_submit') {
			$data['mrn_id']     = $this->input->post('mrn_id');
			$m['CBHI_code']    =   $this->input->post('CBHI_code');
            $data['encounter_id']   = $this->input->post('encounter_id');
			$data['card']      = $this->input->post('card');
			$data['lab']       =  $this->input->post('lab');	
	        $data['Imaging']   =  $this->input->post('Imaging');
			$data['surgery']   = $this->input->post('surgery');
			$data['Bed_fee']   = $this->input->post('Bed_fee');
			$data['drugs']     = $this->input->post('drugs');
			$data['other']     = $this->input->post('other'); 
			$data['total']     = ($data['card']+$data['lab'] +$data['Imaging']+$data['surgery']+$data['Bed_fee']+$data['drugs']+$data['other']); 
			$data['remark']    = $this->input->post('remark'); 
			
            
            $this->db->where('mrn_id', $param2);
            $this->db->update('treatment', $data);
			
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			
			$page_data['page_title'] = get_phrase('patient_profile_view');
		    $page_data['page_name'] = 'patient_profile_view';
		    $page_data['mrn_id'] 	=$param2;
	        $this->load->view('backend/index', $page_data);
			
        } 
		
		 if ($param1 == 'new_letter') {
			
			$mrn_id                 = $this->input->post('mrn_id');
		    $encounter_id           = $this->input->post('encounter_id');
			$code                    =  $this->input->post('code');
            $data['indigent']       = $this->input->post('indigent');
		    $data['CBHI_code']      = $data['indigent']."/".$code; 
            $this->db->where('encounter_id',$param2);
            $this->db->update('treatment', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
		    $page_data['mrn_id'] 	= $mrn_id;
	        $this->load->view('backend/index', $page_data);
        }
			
 if ($param1 == 'do_edit') { 
			
			$data['mrn_id']       = $this->input->post('mrn_id');
		    $data['encounter_id']   = $this->input->post('encounter_id');
		    $enc_id                 =  $data['encounter_id']; 
			$data['diagniss'] =  $this->input->post('diagniss');
			$data['Date_of_service'] =  $this->input->post('Date_of_service');
			$data['encounter']    = $this->input->post('encounter');	
         // $data['indigent']     = $this->input->post('indigent');
			$data['age']          = $this->input->post('age');
			$data['month']        = $this->input->post('month');
			$data['year']         = $this->input->post('year');
			
	        $data['card']         = $this->input->post('card');
			$data['lab']          = $this->input->post('lab');
			$data['Imaging']      = $this->input->post('Imaging');
			$data['surgery']      = $this->input->post('surgery');
			$data['drugs']        = $this->input->post('drugs');
			$data['Bed_fee']      = $this->input->post('Bed_fee');
			$data['other']        = $this->input->post('other');
			$data['remark']       = $this->input->post('remark');
		    $sqq         = "update treatment set edited = edited+1 where encounter_id ='$enc_id'";
            $ress        = mysql_query($sqq) or die(mysql_error());
            $card        = $this->input->post('card');
			$lab         = $this->input->post('lab');
			$Imaging     = $this->input->post('Imaging');
			$surgery     = $this->input->post('surgery');
			$drugs       = $this->input->post('drugs');
			$Bed_fee     = $this->input->post('Bed_fee');
			$other       = $this->input->post('other');			
		    $mrn_id      = $data['mrn_id'];  
		    $data['total']   = ($card +$lab + $Imaging + $surgery + $drugs +$Bed_fee + $other); 
			
            $this->db->where('encounter_id', $param2);
            $this->db->update('treatment', $data);
			
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
		    $page_data['mrn_id'] 	= $mrn_id;
	        $this->load->view('backend/index', $page_data);
        } 
		
		if ($param1 == 'outcome') {
			
			$mrn_id      = $this->input->post('mrn_id');
		    //$data['encounter_id']   = $this->input->post('encounter_id');
		
			$data['outcome']  =  $this->input->post('outcome');
			$data['reason']   =  $this->input->post('reason');
	
            $this->db->where('encounter_id', $param2);
            $this->db->update('treatment', $data);
			
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
		    $page_data['mrn_id'] 	=$mrn_id;
	        $this->load->view('backend/index', $page_data);
			
            //redirect(base_url() . 'index.php?admin/dashboard/'.$data['mrn_id'], 'refresh');
        } 
   if ($param1 == 'do_pay') {
			
		   	$treatment = $this->input->post('treatment');
			$when    = $this->input->post('when');
			$mrn_id  = $this->input->post('mrn_id');
			$price  = $this->input->post('price');
             $sql="SELECT * FROM  treatment where Date_of_service ='$when' and  mrn_id ='$mrn_id'";
             $res = mysql_query($sql) or die(mysql_error());
             while($row = mysql_fetch_array($res)){
               $date      = $row['encounter_id']; 
               $encounter = $row['encounter']; 	
               $mrn_id    = $row['mrn_id']; 		   
			   $card      = $row["card"]; 	
			   $lab       = $row["lab"]; 	
			   $other     = $row["other"]; 	
			   $drugs     = $row["drugs"]; 	
			   $Bed_fee   = $row["Bed_fee"]; 	
			   $surgery   = $row["surgery"]; 	
			   $Imaging   = $row["Imaging"]; 	
			   $total     = $row["total"]; 	
                  }
		
			
if(trim($treatment== 'card')){
				  
$sql11 ="update treatment set card = card+$price where Date_of_service='$when' and mrn_id='$mrn_id'";
$result11=mysql_query($sql11) or die(mysql_error());

  }
if(trim($treatment== 'lab')){
				  
$sql22 ="update treatment set lab= lab+$price where  Date_of_service='$when' and mrn_id='$mrn_id'";
$result22=mysql_query($sql22) or die(mysql_error());
}

if(($treatment== 'Imaging')){	
 
$sql33 ="update treatment set Imaging = Imaging+$price where Date_of_service ='$when' and mrn_id='$mrn_id'";
$result33=mysql_query($sql33) or die(mysql_error());

 }
if(trim($treatment== 'surgery')){
				  
$sql44 ="update treatment set surgery = surgery+$price where Date_of_service ='$when' and mrn_id='$mrn_id'";
$result44=mysql_query($sql44) or die(mysql_error());
	  }		
if(trim($treatment== 'Bed_fee') and  $encounter=='OPD'){
				  
$sql55 ="update treatment set Bed_fee = Bed_fee+0 where Date_of_service ='$when' and mrn_id='$mrn_id'";

$result55=mysql_query($sql55) or die(mysql_error());
 }	    
if(trim($treatment== 'drugs')){
			
$sql66 ="update treatment set drugs = drugs+$price where Date_of_service ='$when' and mrn_id='$mrn_id'";
$result66 =mysql_query($sql66) or die(mysql_error());
 }
if(trim($treatment== 'other')){
$sql77 ="update treatment set other = other+$price where Date_of_service ='$when' and mrn_id='$mrn_id'";
$result77=mysql_query($sql77) or die(mysql_error());

		}	
 
 $sq="SELECT * FROM treatment where Date_of_service ='$when' and mrn_id='$mrn_id'";
             $resultx = mysql_query($sq) or die(mysql_error());
             while($row2 = mysql_fetch_array($resultx)){	
			   $c    = $row2["card"]; 	
			   $l    = $row2["lab"]; 	
			   $o    = $row2["other"]; 	
			   $d    = $row2["drugs"]; 	
			   $B    = $row2["Bed_fee"]; 	
			   $s    = $row2["surgery"]; 	
			   $I    = $row2["Imaging"]; 		
                  }	
		 $data['outcome']=   $this->input->post('outcome');
		 $data['remark']   = $this->input->post('remark');
		// $data['diagniss']   = $this->input->post('diagniss');
   $sql8 ="update treatment set total = $o+$d+$s+$B+$I+$c+$l where Date_of_service ='$when' and mrn_id='$mrn_id'"; 
          $result8 =mysql_query($sql8) or die(mysql_error());  
		 if($result8==true){
			
		     if ($this->input->post('outcome') != '') {
               $this->db->where('Date_of_service', $when);
               $this->db->update('treatment', $data);
                 }
		      if ($this->input->post('remark') != '') {
               $this->db->where('Date_of_service', $when);
               $this->db->update('treatment', $data);
                }
	    
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			
			$page_data['page_title'] = get_phrase('patient_profile_view');
		    $page_data['page_name'] ='patient_profile_view';
		    $page_data['mrn_id'] 	= $mrn_id;    
	        $this->load->view('backend/index', $page_data);
			
            //redirect(base_url() . 'index.php?admin/dashboard/'.$data['mrn_id'], 'refresh');
	      }
		  
      }
if ($param1 == 'delete') {
            $this->db->where('encounter_id', $param2);
            $this->db->delete('treatment');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url().'index.php?admin/dashboard/'.$data['mrn_id'],'refresh');

        }
	}
   
    /****MANAGE CLASSES*****/
    function classes($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']         = $this->input->post('name');
            $data['note'] = $this->input->post('note');
          
            $this->db->insert('class', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/classes/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']         = $this->input->post('name');
            $data['note'] = $this->input->post('note');
            $this->db->where('class_id', $param2);
            $this->db->update('class', $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/classes/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class', array(
                'class_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_id', $param2);
            $this->db->delete('class');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/classes/', 'refresh');
        }
        $page_data['classes']    = $this->db->get('class')->result_array();
        $page_data['page_name']  = 'class';
        $page_data['page_title'] = get_phrase('manage_class');
        $this->load->view('backend/index', $page_data);
    }

    /****MANAGE SECTIONS*****/
    function section($class_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        // detect the first class
        if ($class_id == '')
            $class_id           =   $this->db->get('class')->first_row()->class_id;

        $page_data['page_name']  = 'section';
        $page_data['page_title'] = get_phrase('manage_sections');
        $page_data['class_id']   = $class_id;
        $this->load->view('backend/index', $page_data);    
    }
///////////////////////////////////////////////////////////////	
	  function woreda($section_id= '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        // detect the first class
        if ($class_id == '')
            $class_id           =   $this->db->get('section')->first_row()->section_id;

        $page_data['page_name']  = 'woreda';
        $page_data['page_title'] = get_phrase('manage_sections');
        $page_data['section_id']   = $section_id;
        $this->load->view('backend/index', $page_data);    
    }
	//////////////////////////////////////////////////////////////////
	 function deposit_amount($param1 = '' , $param2 = '',$param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'deposit'){
			
		     $data['encounter_id']  =   $this->input->post('encounter_id');
			   $data['Bed_fee']  =   $this->input->post('Bed_fee');
			  $mrn_id  =   $this->input->post('mrn_id');
			
             $this->db->where('encounter_id' , $data['encounter_id']);
             $this->db->update('treatment' , $data) or die(mysql_error());
           	 $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
			$page_data['page_title'] = get_phrase('patient_profile_view');
			$page_data['page_name'] = 'patient_profile_view';
		    $page_data['mrn_id'] 	= $mrn_id;
	        $this->load->view('backend/index', $page_data);
		
           // redirect(base_url() . 'index.php?admin/patient_profile/' .$mrn_id , 'refresh');
           }
     

          if($param1 == 'do_return') {
              $data['encounter_id']     =   $this->input->post('encounter_id');
			  $mrn_id                   =   $this->input->post('mrn_id');
		      $new                      =   $this->input->post('Bed_fee'); 
              $old                      =   $this->input->post('deposit');
			  $data['Bed_fee']          =   ($new+$old); 
			  
           //  $data['Bed_fee']        =   substr($Bed_fee, 5); 
			
            $this->db->where('encounter_id' , $data['encounter_id']);
            $this->db->update('treatment' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
		    $page_data['page_title'] = get_phrase('patient_profile_view');		
			$page_data['page_name'] = 'patient_profile_view';
		    $page_data['mrn_id'] 	= $mrn_id;
	        $this->load->view('backend/index', $page_data);
            //redirect(base_url() . 'index.php?admin./patient_profile/' .$mrn_id, 'refresh');
        }

     
    }

//////////////////////////////////////////////////////////////////////
    function sections($param1 = '' , $param2 = '',$param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
			
		    $data['section_id']  =   $this->input->post('section_id');
            $data['name']        =   $this->input->post('name');
            $data['class_id']    =   $this->input->post('class_id');
			$data['note']        =   $this->input->post('note');
            $this->db->insert('section' , $data) or die(mysql_error());
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'do_update') {
            $data['section_id']  =   $this->input->post('section_id');
			//$data['zone_id']  =   $this->input->post('zone_id');
            $data['name']        =   $this->input->post('name');
            $data['class_id']    =   $this->input->post('class_id');
			$data['note']        =   $this->input->post('note');
			
            $this->db->where('zone_id' , $param2);
            $this->db->update('section' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/section/' . $data['class_id'] , 'refresh');
        }

        if ($param1 == 'delete') {
            $this->db->where('zone_id' , $param2);
            $this->db->delete('section');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/section/' . $data['class_id'] , 'refresh');
        }
    }
//////////////////////////////////////////////////////////////////////

  function woredas($param1 = '' , $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
         if ($param1 == 'create') {	
		    $data['woreda_id']         =   $this->input->post('woreda_id');
            $data['name']              =   $this->input->post('name');
            $data['class_id']          =   $this->input->post('class_id');
			$data['section_id']        =   $this->input->post('section_id');
		    $data['agreemenrt_type']   =   $this->input->post('agreemenrt_type');
			$data['agreed']            =   'Yes';
			$data['permission']        =    '0'; 
            $this->db->insert('parent' , $data);
			$this->db->insert('woreda' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }

        if ($param1 == 'edit') {
             $data['woreda_id']         =   $this->input->post('woreda_id'); 
             $data['name']              =   $this->input->post('name');
             $data['class_id']          =   $this->input->post('class_id');
			 $data['section_id']        =   $this->input->post('section_id');
			 $data['agreemenrt_type']   =   $this->input->post('agreemenrt_type');
		   	 $data['permission']        =   $this->input->post('permission'); 
			 $data['agreed']            =   $this->input->post('agreed');
			 $woreda                    =   $data['woreda_id'] ;
			 
			 $wcode                     =   $this->input->post('wcode');  // Existing woreda code
			 $region                    =   $this->input->post('region'); // Existing region code
			 $zone                      =   $this->input->post('zone');  // Existing zone code
			 
	          $sql2 = mysql_query("UPDATE `patients` SET woreda_id ='$woreda' WHERE woreda_id ='$wcode' && class_id='$region' && section_id='$zone'") or die(mysql_error());
			  $sql3 = mysql_query("UPDATE `treatment` SET  woreda = '$woreda' WHERE woreda ='$wcode' && region ='$region' && zone ='$zone'") or die(mysql_error());
			 
		    if(!(($sql2 == true) and ($sql3==true))){
			
			 $this->session->set_flashdata('flash_message' , get_phrase('forign_key_not_updated'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');	
			}

            $this->db->where('district_id' , $param2);
            $this->db->update('parent' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }
        if ($param1 == 'end') {
              $data['agreed']           =   $this->input->post('agreed'); 
            $this->db->where('district_id' , $param2);
            $this->db->update('parent' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }
		if ($param1 == 'enable') {
              $data['agreed']           =   $this->input->post('agreed'); 
            $this->db->where('district_id' , $param2);
            $this->db->update('parent' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }
	  if ($param1 == 'grant') {
             $data['permission']     =   $this->input->post('permission'); 
            $this->db->where('district_id' , $param2);
            $this->db->update('parent' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }
		if ($param1 == 'revoke') {
            $data['permission']           =   $this->input->post('permission');
            $this->db->where('district_id' , $param2);
            $this->db->update('parent' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }
		
		
        if ($param1 == 'delete') {
            $this->db->where('district_id' , $param2);
            $this->db->delete('parent');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
        redirect(base_url() . 'index.php?admin/woreda/' . $data['section_id'] , 'refresh');
        }
    }
	///////////////////////////////////////////////////////////////////////////////////////////


    function get_class_section($class_id)
    {
		     if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $sections = $this->db->get_where('section' , array(  'class_id' => $class_id))->result_array();
        foreach ($sections as $row) {
            echo '<option value="' . $row['section_id'] . '">' . $row['name'] . '</option>';
        }
    }
////////////////////////////////////////////////////////////////////////
 function get_indegent($agreement_id){
	    if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $indegent = $this->db->get_where('indigent' , array('agreement_id' =>$agreement_id))->result_array();
		
        foreach ($indegent as $row2) {
            echo '<option value="'.$row2['name']. '">'.$row2['name']. '</option>';
        }
    }

//////////////////////////////////////////////////////////////////////////////////	
    function get_zone_woreda($section_id){
		  if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
		 $agree ='Yes';
		 
		// if($agreement=='1')
		 //  $woreda = mysql_query("SELECT * from parent where section_id='$section_id' and agreed='$agree'  and agreemenrt_type ='CB Health Insurance' order by name ASC");
		 //if($agreement=='3')
		  $woreda = mysql_query("SELECT * from parent where section_id='$section_id' and agreed='$agree'  order by name ASC");
		 
		   while($row = mysql_fetch_array($woreda)){	 
            echo '<option  style="background-color:lightblue;" value="'.$row['woreda_id'].'">'.$row['name'].'</option>';
        }
    }
	
	////////////////////////////////////////////////////////////////////////
    function get_zone_woreda2($section_id){ 
	     if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
		   $agree ='Yes';
      //   $woreda = $this->db->get_where('parent' , array('section_id'=>$section_id, 'agreed'=>$agree))->result_array();
		   $woreda2 = mysql_query("SELECT * from parent where section_id='$section_id' and agreed='$agree' and agreemenrt_type='CB Health Insurance' order by name ASC");
		    while($rows = mysql_fetch_array($woreda2)){	 
            echo '<option style="background-color:lightblue; value="'.$rows['woreda_id'].'">'.$rows['name'].'</option>';
        }
    }
	////////////////////////////////////////////////////////////////////////


    function tabulation_sheet($class_id = '' , $exam_id = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($this->input->post('operation') == 'selection') {
            $page_data['exam_id']    = $this->input->post('exam_id');
            $page_data['class_id']   = $this->input->post('class_id');
            
            if ($page_data['exam_id'] > 0 and  $page_data['class_id'] > 0) {
				
                redirect(base_url() . 'index.php?admin/tabulation_sheet/' . $page_data['class_id'] . '/' . $page_data['exam_id'] , 'refresh');
            } 
			else {
                $this->session->set_flashdata('mark_message', 'Choose class and exam');
                redirect(base_url() . 'index.php?admin/tabulation_sheet/', 'refresh');
            }
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;
        
        $page_data['page_info'] = 'Exam marks';
        
        $page_data['page_name']  = 'tabulation_sheet';
        $page_data['page_title'] = get_phrase('tabulation_sheet');
        $this->load->view('backend/index', $page_data);
    
    }

//////////////////////////////////////////////////////////////////////////////////
  
  function user_profile_search($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']   = 'users_search_result';
        $page_data['page_title']  = get_phrase('users_search_result');
        $this->load->view('backend/index', $page_data);
        
    }  

//////////////////////////////////////////////////////////////////////////
	 function patient_profile($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        $page_data['page_name']   = 'patient_profile';
        $page_data['page_title']  = get_phrase('patient_profile');
        $this->load->view('backend/index', $page_data);
        
    }
 ////////////////////////////////////////////////////////////////////////// 
	 function beneficiary_profile($param1 = '', $param2 = '', $param3 = ''){
        if($this->session->userdata('admin_login') != 1)
        redirect('login', 'refresh');
        $page_data['page_name']   = 'beneficiary_profile';
        $page_data['page_title']  = get_phrase('beneficiary__profile');
        $this->load->view('backend/index', $page_data);
        
    }
 ////////////////////////////////////////////////////////////////////////// 
    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
			$data['user']             = $this->input->post('user');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->insert('noticeboard', $data);
            $check_sms_send = $this->input->post('check_sms');

            if ($check_sms_send == 1) {
                // sms sending configurations
                // $parents  = $this->db->get('parent')->result_array();
                $students = $this->db->get('patients')->result_array();
               // $teachers = $this->db->get('teacher')->result_array();
                $date     = $this->input->post('create_timestamp');
                $message  = $data['notice_title'] . ' ';
                $message .= get_phrase('on') . ' ' . $date;
                foreach($parents as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($students as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($teachers as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
            }

            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/noticeboard/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->where('notice_id', $param2);
            $this->db->update('noticeboard', $data);

            $check_sms_send = $this->input->post('check_sms');

            if ($check_sms_send == 1) {
                // sms sending configurations

               // $parents  = $this->db->get('parent')->result_array();
                $students = $this->db->get('patients')->result_array();
               // $teachers = $this->db->get('teacher')->result_array();
                $date     = $this->input->post('create_timestamp');
                $message  = $data['notice_title'] . ' ';
                $message .= get_phrase('on') . ' ' . $date;
                foreach($parents as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($students as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
                foreach($teachers as $row) {
                    $reciever_phone = $row['phone'];
                    $this->sms_model->send_sms($message , $reciever_phone);
                }
            }

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/noticeboard/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('noticeboard', array(
                'notice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('notice_id', $param2);
            $this->db->delete('noticeboard');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/noticeboard/', 'refresh');
        }
        $page_data['page_name']  = 'noticeboard';
        $page_data['page_title'] = get_phrase('manage_noticeboard');
        $page_data['notices']    = $this->db->get('noticeboard')->result_array();
        $this->load->view('backend/index', $page_data);
    }
    
	
	
	   ////////SEND MATERIAL//////////
 function send_document($param1 = '', $param2 = '', $param3 = ''){
              if ($this->session->userdata('admin_login') != 1)
               redirect(base_url(), 'refresh');
 if ($param1 == 'create') {
	    $data['description']    = $this->input->post('description');
        $data['file_name'] 	    = $_FILES["file_name"]["name"];
        $data['reciever_id']    = $this->input->post('reciever_id');
	    $data['sender_id'] 		= $this->input->post('sender_id');
        $data['timestamp']      = strtotime($this->input->post('timestamp'));
		
		  }
		
        $this->db->insert('document',$data);

        move_uploaded_file($_FILES["file_name"]["tmp_name"], "uploads/document/" . $_FILES["file_name"]["name"]);
		
	  
            $this->session->set_flashdata('flash_message' , get_phrase('document_uploaded_successfully'));
            redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
    }


//////////////////////////////////////////////////////////////

    /* Payment process */
    function payment_request($param1 = '', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

      if ($param1 == 'cancel') {
            $this->db->where('payment_id', $param2);
            $this->db->delete('payment');
            $this->session->set_flashdata('flash_message' , get_phrase('successfully_cancelled'));
            redirect(base_url() . 'index.php?admin/partially_paid_list/' . $param2, 'refresh');
        }
        $page_data['page_name']                 = 'partially_paid';
        $page_data['page_title']                = get_phrase('partially_paid_list');
        $this->load->view('backend/index', $page_data);
    }
    
    /*****SITE/SYSTEM SETTINGS*********/
	
//////////////////////////////////////////////////////////////

    /* private messaging */
    function message($param1 = 'message_home', $param2 = '', $param3 = '') {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

		if ($param1 == 'send_new_message') {
            $message_thread_code = $this->crud_model->send_new_private_message();
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . 'index.php?admin/message/message_read/'.$message_thread_code, 'refresh');
        }

        if ($param1 == 'send_reply') {
            $this->crud_model->send_reply_message($param2);  //$param2 = message_thread_code
            $this->session->set_flashdata('flash_message', get_phrase('message_sent!'));
            redirect(base_url() . 'index.php?admin/message/message_read/' . $param2, 'refresh');
        }
     if ($param1 == 'edit') {
		    $data['message'] =   $this->input->post('message'); 
            $this->db->where('message_id', $param2);
            $this->db->update('message' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/message/message_read/' . $param2, 'refresh');
        }
      if ($param1 == 'delete') {
            $this->db->where('message_id', $param2);
            $this->db->delete('message');
            $this->session->set_flashdata('flash_message' , get_phrase('data_deleted'));
            redirect(base_url() . 'index.php?admin/message/message_read/' . $param2, 'refresh');
        }
        if ($param1 == 'message_read') {
            $page_data['current_message_thread_code'] = $param2;  // $param2 = message_thread_code
            $this->crud_model->mark_thread_messages_read($param2);
        }


        $page_data['message_inner_page_name']   = $param1;
        $page_data['page_name']                 = 'message';
        $page_data['page_title']                = get_phrase('private_messaging');
        $this->load->view('backend/index', $page_data);
    }
    
    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        
        if ($param1 == 'do_update') {
			 
            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_title');
            $this->db->where('type' , 'system_title');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('address');
            $this->db->where('type' , 'address');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('phone');
            $this->db->where('type' , 'phone');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('paypal_email');
            $this->db->where('type' , 'paypal_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('currency');
            $this->db->where('type' , 'currency');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_email');
            $this->db->where('type' , 'system_email');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('system_name');
            $this->db->where('type' , 'system_name');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('language');
            $this->db->where('type' , 'language');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('text_align');
            $this->db->where('type' , 'text_align');
            $this->db->update('settings' , $data);
			
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        if($param1 == 'change_skin') {
            $data['description'] = $param2;
            $this->db->where('type' , 'skin_colour');
            $this->db->update('settings' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('theme_selected')); 
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh'); 
        }
        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }
	
	
	function update_system($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        
        if ($param1 == 'change') {
			
              $data['text_align'] = $this->input->post('text_align');
			  $data['skin_colour'] = $this->input->post('skin_colour');
			  $data['language'] = $this->input->post('language');
			  
            $this->db->where('admin_id' ,$param2);
            $this->db->update('admin' , $data);

          
			
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
            redirect(base_url() . 'index.php?admin/system_settings/', 'refresh');
        }
        
        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }

	/***** UPDATE PRODUCT *****/
	
	function update() {
        
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
            
        // Create update directory.
        $dir    = 'update';
        if ( !is_dir($dir) )
            mkdir($dir, 0777, true);
        
        $zipped_file_name   = $_FILES["file_name"]["name"];
        $path               = 'update/' . $zipped_file_name;
        
        move_uploaded_file($_FILES["file_name"]["tmp_name"], $path);
        
        // Unzip uploaded update file and remove zip file.
        $zip = new ZipArchive;
        $res = $zip->open($path);
        if ($res === TRUE) {
            $zip->extractTo('update');
            $zip->close();
            unlink($path);
        }
        
        $unzipped_file_name = substr($zipped_file_name, 0, -4);
        $str                = file_get_contents('./update/' . $unzipped_file_name . '/update_config.json');
        $json               = json_decode($str, true);
        

			
		// Run php modifications
		require './update/' . $unzipped_file_name . '/update_script.php';
        
        // Create new directories.
        if(!empty($json['directory'])) {
            foreach($json['directory'] as $directory) {
                if ( !is_dir( $directory['name']) )
                    mkdir( $directory['name'], 0777, true );
            }
        }
        
        // Create/Replace new files.
        if(!empty($json['files'])) {
            foreach($json['files'] as $file)
                copy($file['root_directory'], $file['update_directory']);
        }
        
        $this->session->set_flashdata('flash_message' , get_phrase('product_updated_successfully'));
        redirect(base_url() . 'index.php?admin/system_settings');
    }
	  
function maintenace_mode($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        
        if ($param1 == 'change') {
			$data['maintainac_id'] = $this->input->post('maintainac_id');
            $data['maintainac_mode'] = $this->input->post('maintainac_mode');
            $this->db->where('maintainac_id ' ,$param2);
            $this->db->update('mode' , $data);
			if($data['maintainac_id']==1){
		    mysql_query("delete from ci_sessions") or die(mysql_error());
	    	}
    	}
      $this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
      redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh'); 

}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////

function allowed($param1 = '', $param2 = '', $param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        
        if ($param1 == 'allow') {
			
			 
			$data['signup_id'] = $this->input->post('signup_id');
            $data['offset'] = $this->input->post('offset');
            $this->db->where('signup_id' ,$param2);
            $this->db->update('signup' , $data);
		}
      $this->session->set_flashdata('flash_message' , get_phrase('data_updated')); 
      redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh'); 

    }
	///////////////////////////////////////////////////////////////////////////////////////////////////////

    function option_list($param1 = '', $param2 = '', $param3 = '')
    {
      if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
      if ($param1 == 'create1') {
			$data['name'] = $this->input->post('name');
			$data['agreement_id'] = $this->input->post('agreement_id');
			
            $this->db->insert('indigent', $data);
            $indigent_id = $this->db->insert_id();
     
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
           redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
              }
     if ($param1 == 'create2') {
			$data['agreement'] = $this->input->post('agreement');
            $this->db->insert('agreement', $data);
            $agreement_id = $this->db->insert_id();
     
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
             }
	  if ($param1 == 'create3') {
			$data['footer'] = $this->input->post('footer');	
            $this->db->where('footer_id' ,$param2);
            $this->db->update('copyright' , $data);
     
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
           redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
			
		   if($param1 == 'create4') {
			$data['name'] = $this->input->post('name');
            $this->db->insert('outcome', $data);
            $outcome_id = $this->db->insert_id();
     
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
             }
	   if ($param1 == 'create5') {		   
		    //$year_id        = $this->input->post('year_id');   
			$data['min_year'] = $this->input->post('min_year');
			$data['max_year'] = $this->input->post('max_year');
		    $this->db->where('year_id',$param2);
            $this->db->update('year' , $data);
     
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
             }
	 if ($param1 == 'create6') {		   
		  
			$data['name'] = $this->input->post('services');
            $this->db->insert('services', $data);
            $service_id = $this->db->insert_id();
     
            $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
             }
     if ($param1 == 'create7') {		   
			$data['year'] = $this->input->post('year');
		     $fyears  =  $data['year'];
		    
		    $this->db->where('id',$param2);
            $this->db->update('fiscal_year' , $data);
             mysql_query("UPDATE year SET  max_year = $fyears") or die(mysql_error());
             $this->session->set_flashdata('flash_message' , get_phrase('data_added_successfully'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
             }
        $page_data['page_name']  = 'sms_settings';
        $page_data['page_title'] = get_phrase('sms_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }
	
	//////////////////////////////////////////////////////////////////////////////////////
    function sms_settings($param1 = '' , $param2 = '',$param3 = ''){
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1 == 'update1') {
			$data['type'] = $this->input->post('type');
			$data['name'] = $this->input->post('name');
			$data['cachement'] = '0';
			$data['ownership'] = $this->input->post('ownership');
			$data['tmale'] = '0';
			$data['tfemale'] = '0';
			
            $this->db->where('Facility_id' ,$param2);
            $this->db->update('facility' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
     if ($param1 == 'update2') {

			$data['tmale'] = $this->input->post('tmale');
			$data['tfemale'] = $this->input->post('tfemale');
	        $data['cachement'] = $data['tmale'] + $data['tfemale'];
			
            $this->db->where('Facility_id' ,$param2);
            $this->db->update('facility' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
		 if ($param1 == 'update3') {

            $data['server_id']   = $this->input->post('server_id');
			$data['ip']          = $this->input->post('ip');
			$data['domain_name'] = $this->input->post('domain_name');
			$data['link'] = $this->input->post('link');
			
            $this->db->where('server_id' ,$param2);
            $this->db->update('server' , $data);
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
           }
		     if ($param1 == 'update4') {

              $data['duration'] = $this->input->post('duration');
			  $data['warning'] = $this->input->post('warning');
			  $data['characters'] = $this->input->post('characters');
		      $data['reusable'] = $this->input->post('reusable'); 
		      //$data['letter'] = $this->input->post('letter');
			  //$data['uppercase'] = $this->input->post('uppercase');
			  //$data['lowercase'] = $this->input->post('letter');
			  
			  $data['letter']    = 'default';
			  $data['uppercase'] = 'default';
			  $data['lowercase'] = 'defualt';
		
		
            $this->db->where('password_id' ,$param2);
            $this->db->update('password' , $data);

  
            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
		
    if ($param1 == 'update5') {

            $data['description'] = $this->input->post('clickatell_user');
			
            $this->db->where('type' , 'clickatell_user');
            $this->db->update('settings' , $data);

    

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
if ($param1 == 'update6') {

            $data['description'] = $this->input->post('clickatell_user');
			
            $this->db->where('type' , 'clickatell_user');
            $this->db->update('settings' , $data);

    

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
    if ($param1 == 'update7') {

            $data['description'] = $this->input->post('clickatell_user');
			
            $this->db->where('type' , 'clickatell_user');
            $this->db->update('settings' , $data);

    

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
     if ($param1 == 'update8') {

			$data['tmale']     = $this->input->post('tmale');
			$data['tfemale']   = $this->input->post('tfemale');
	        $data['cachement'] = $data['tmale'] + $data['tfemale'];
			$data['name']      = $this->input->post('name');
			$data['type']      = $this->input->post('type');
			$data['ownership'] = $this->input->post('ownership');
	        $data['cachement'] = $data['tmale'] + $data['tfemale'];
			
            $this->db->where('Facility_id' ,$param2);
            $this->db->update('facility' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/hmis_data_view/', 'refresh');
        }
		 if ($param1 == 'clickatell') {

            $data['description'] = $this->input->post('clickatell_user');
            $this->db->where('type' , 'clickatell_user');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('clickatell_password');
            $this->db->where('type' , 'clickatell_password');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('clickatell_api_id');
            $this->db->where('type' , 'clickatell_api_id');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }
        if ($param1 == 'twilio') {

            $data['description'] = $this->input->post('twilio_account_sid');
            $this->db->where('type' , 'twilio_account_sid');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('twilio_auth_token');
            $this->db->where('type' , 'twilio_auth_token');
            $this->db->update('settings' , $data);

            $data['description'] = $this->input->post('twilio_sender_phone_number');
            $this->db->where('type' , 'twilio_sender_phone_number');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }

        if ($param1 == 'active_service') {

            $data['description'] = $this->input->post('active_sms_service');
            $this->db->where('type' , 'active_sms_service');
            $this->db->update('settings' , $data);

            $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
            redirect(base_url() . 'index.php?admin/sms_settings/', 'refresh');
        }

        $page_data['page_name']  = 'sms_settings';
        $page_data['page_title'] = get_phrase('sms_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->load->view('backend/index', $page_data);
    }
///////////////////////////////////////////////////////////////////////////////	
    function set_up_year($param1 = '' , $param2 = '',$param3 = ''){

		  if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
		$admin_id = $this->session->userdata('admin_id'); 
        $page_data['page_name']  = 'setup_year';
        $page_data['page_title'] = get_phrase('set_up_renewal_year');
		$page_data['admin_id'] 	= $admin_id;
		$this->load->view('backend/index', $page_data);
	}
  //////////////////////////////////////////////////////////////////////////////////////////  
    /*****LANGUAGE SETTINGS*********/
    function manage_language($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		
		if ($param1 == 'edit_phrase') {
			$page_data['edit_profile'] 	= $param2;	
		}
		if ($param1 == 'update_phrase') {
			$language	=	$param2;
			$total_phrase	=	$this->input->post('total_phrase');
			for($i = 1 ; $i < $total_phrase ; $i++)
			{
				//$data[$language]	=	$this->input->post('phrase').$i;
				$this->db->where('phrase_id' , $i);
				$this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
			}
			redirect(base_url() . 'index.php?admin/manage_language/edit_phrase/'.$language, 'refresh');
		}
		if ($param1 == 'do_update') {
			$language        = $this->input->post('language');
			$data[$language] = $this->input->post('phrase');
			$this->db->where('phrase_id', $param2);
			$this->db->update('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_phrase') {
			$data['phrase'] = $this->input->post('phrase');
			$this->db->insert('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_language') {
			$language = $this->input->post('language');
			$this->load->dbforge();
			$fields = array(
		    $language => array('type' => 'LONGTEXT'));
			$this->dbforge->add_column('language', $fields);
			
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		if ($param1 == 'delete_language') {
			$language = $param2;
			$this->load->dbforge();
			$this->dbforge->drop_column('language', $language);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			
			redirect(base_url() . 'index.php?admin/manage_language/', 'refresh');
		}
		$page_data['page_name']        = 'manage_language';
		$page_data['page_title']       = get_phrase('manage_language');
		//$page_data['language_phrases'] = $this->db->get('language')->result_array();
		$this->load->view('backend/index', $page_data);	
    }

        /*****BACKUP PAGE**********/
		
		
function backup($param2='')
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$page_data['page_name']  = 'backup';
	    $page_data['page_title'] = get_phrase('manage_backup_restore');
		$this->load->view('backend/index', $page_data);
	}
    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($operation == 'create') {
            $this->crud_model->create_backup($type);
        }
        if ($operation == 'restore') {
            $this->crud_model->restore_backup();
            $this->session->set_flashdata('backup_message', 'Backup Restored');
            redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
        }
        if ($operation == 'delete') {
            $this->crud_model->truncate($type);
            $this->session->set_flashdata('backup_message', 'Data removed');
            redirect(base_url() . 'index.php?admin/backup_restore/', 'refresh');
        }
        
        $page_data['page_info']  = 'Create backup / restore from backup';
        $page_data['page_name']  = 'backup_restore';
        $page_data['page_title'] = get_phrase('manage_backup_restore');
        $this->load->view('backend/index', $page_data);
    }
    
    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'index.php?login', 'refresh');
        if ($param1 == 'update_profile_info') {
		
			$data['admin_id']      = $this->input->post('admin_id');
		    $admin_id              = $this->session->userdata('admin_id');
            $data['name']          = $this->input->post('name');
            $data['email']         = $this->input->post('email');
			$data['date_of_join']  = $this->input->post('date_of_join');
            $data['Sex']           = $this->input->post('Sex');
			$data['phone']         = $this->input->post('phone');
			$data['role']          = $this->input->post('role');
			
            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/admin_image/'.$data['admin_id'].'.jpg');
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'index.php?admin/manage_profile/', 'refresh');
              }
            if ($param1 == 'change_password') {
            $data['password']             = md5($this->input->post('password'));
            $data['new_password']         = md5($this->input->post('new_password'));
            $data['confirm_new_password'] = md5($this->input->post('confirm_new_password'));
            
            $current_password = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('admin_id')))->row()->password;
            if ($current_password == $data['password'] and  $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array( 'password' => $data['new_password']));
                
				$this->session->set_flashdata('flash_message', get_phrase('password_updated'));
				
            } 
			
			else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
             
			redirect(base_url() . 'index.php?admin/manage_profile/'.$this->session->userdata('admin_id'), 'refresh');
			 

        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('admin', array('admin_id' => $this->session->userdata('admin_id')))->result_array();
       
	   $this->load->view('backend/index', $page_data);
	//  redirect(base_url() . 'index.php?login', 'refresh'); 
    }  
}
