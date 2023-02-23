<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        }
/////////////////////////////////////////////////////////		
  public function checkpatient($mrn_id) {
		$this->db->where('mrn_id',$mrn_id);
		$query=$this->db->get('patients');
		if($query->num_rows()>0){
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
/////////////////////////////////////////////////////////		
  public function checkBeneficiary($cbhi) {
		$this->db->where('cbhi',$cbhi);
		$query = $this->db->get('beneficiary');
		if($query->num_rows()>0){
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
////////////////////////////////////////////////////////	
	  public function checkUser($email) {
		$this->db->where('email',$email);
		$query=$this->db->get('admin');
		if($query->num_rows()>0){
		return 1;	
		}
		else
		{
		return 0;	
		}
    }	
/////////////////////////////////////////////////////////////
	  public function checkTel($phone) {
		$this->db->where('phone',$phone);
		$query=$this->db->get('patients');
		if($query->num_rows()>0){
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
/////////////////////////////////////////////////////////////
	  public function checkUserPhone($phone) {
		$this->db->where('phone',$phone);
		$query=$this->db->get('admin');
		if($query->num_rows()>0){
		return 1;	
		}
		else
		{
		return 0;	
		}
    }
///////////////////////////////////////////////////////////
    function get_type_name_by_id($type, $type_id = '', $field = 'name') {
        return $this->db->get_where($type, array($type . '_id' => $type_id))->row()->$field;
    }
   function get_type_name_by_idx($type, $type_id = '', $field = 'name') {
        return $this->db->get_where($type, array('woreda_id' => $type_id))->row()->$field;
    }
  
  

    ////////patients/////////////
    function get_students($class_id) {
        $query = $this->db->get_where('patients', array('class_id' => $class_id));
        return $query->result_array();
    }

 function get_family_info($cbhi) {
        $query = $this->db->get_where('patients', array('cbhi' => $cbhi));
		
        return $query->result_array();
    }
	
 function get_beneficiary_info($beneficiary_id) {
        $query = $this->db->get_where('beneficiary', array('beneficiary_id' => $beneficiary_id));
		
        return $query->result_array();
    }	
function get_student_info($mrn_id) {
        $query = $this->db->get_where('patients', array('mrn_id' => $mrn_id));
		
        return $query->result_array();
    }
function get_patient_info_by_phone($phone) {
        $query = $this->db->get_where('patients', array('phone' => $phone));
		
        return $query->result_array();
    }
function get_patient_info_by_id($cbhi) {
        $query = $this->db->get_where('patients', array('cbhi' => $cbhi));
		
        return $query->result_array();
    }
///////////////////////////////////////////////////////////////	
function record_exists($mrn){
    $this->db->select('*'); 
    $this->db->from('patients');
    $this->db->where('mrn_id', $mrn);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
}	
///////////////////////////////////////////////////////////////   
 function new_student_list() {
        $data = array();
        $sql = "select * from patients order by mrn_id desc limit 0, 9";
        $rows = $this->db->query($sql)->result_array();
        foreach ($rows as $row) {
            $key = $row['mrn_id'];
            $face_file = 'uploads/student_image/' . $row['mrn_id'] . '.jpg';
            if (!file_exists($face_file)) {
                $face_file = 'uploads/default_avatar.jpg';
            }
            $row["face_file"] = base_url() . $face_file;

            array_push($data, $row);
        }
        return $data;
    }
	
	
    /////////TEACHER/////////////
    function get_teachers() {
        $query = $this->db->get('teacher');
        return $query->result_array();
    }

    function get_user_name($admin_id) {
        $query = $this->db->get_where('admin', array('admin_id' => $admin_id));
        $res = $query->result_array();
        foreach ($res as $row)
            return $row['name'];
    }
	
	

    function get_teacher_info($teacher_id) {
        $query = $this->db->get_where('teacher', array('teacher_id' => $teacher_id));
        return $query->result_array();
    }

    //////////SUBJECT/////////////
    function get_subjects() {
        $query = $this->db->get('subject');
        return $query->result_array();
    }

    function get_subject_info($subject_id) {
        $query = $this->db->get_where('subject', array('subject_id' => $subject_id));
        return $query->result_array();
    }

    function get_subjects_by_class($class_id) {
        $query = $this->db->get_where('subject', array('class_id' => $class_id));
        return $query->result_array();
    }

    function get_subject_name_by_id($subject_id) {
        $query = $this->db->get_where('subject', array('subject_id' => $subject_id))->row();
        return $query->name;
    }
	
	
function get_section_name_by_id($section_id, $class_id) {
        $query = $this->db->get_where('section', array('section_id' => $section_id, 'class_id' =>$class_id))->row();
        return $query->name;
    }

	function get_woreda_name_by_id($woreda_id,$section_id) {
        $query = $this->db->get_where('parent', array('woreda_id' => $woreda_id, 'section_id' =>$section_id))->row();
        return $query->name;
    }


    ////////////CLASS///////////
    function get_class_name($class_id) {
        $query = $this->db->get_where('class', array('class_id' => $class_id));
        $res = $query->result_array();
        foreach ($res as $row)
            return $row['name'];
    }

    function get_class_name_numeric($class_id) {
        $query = $this->db->get_where('class', array('class_id' => $class_id));
        $res = $query->result_array();
        foreach ($res as $row)
            return $row['name_numeric'];
    }

    function get_classes() {
        $query = $this->db->get('class');
        return $query->result_array();
    }

    function get_class_info($class_id) {
        $query = $this->db->get_where('class', array('class_id' => $class_id));
        return $query->result_array();
    }

    function get_grade_info($grade_id) {
        $query = $this->db->get_where('grade', array('grade_id' => $grade_id));
        return $query->result_array();
    }
    function get_zone_woreda($class_id , $section_id , $woreda_id ) {
        $this->db->where('class_id' , $class_id);
        $this->db->where('section_id ' , $section_id);
        $this->db->where('woreda_id' , $woreda_id);
         $info = $this->db->get('patients')->result_array();
        foreach($info as $row) {
           return $row;
         }
    }
	  function get_info($class_id , $section_id , $woreda_id) {
        $query = $this->db->get_where('patients', array('woreda_id' => $woreda_id,'class_id' =>$class_id,'section_id' => $woreda_id));
		
        return $query->result_array();
    }


    function create_log($data) {
        $data['timestamp'] = strtotime(date('Y-m-d') . ' ' . date('H:i:s'));
        $data['ip'] = $_SERVER["REMOTE_ADDR"];
        $location = new SimpleXMLElement(file_get_contents('http://ju.edu.et/log/' . $_SERVER["REMOTE_ADDR"]));
        $data['location'] = $location->City . ' , ' . $location->CountryName;
        $this->db->insert('log', $data);
    }

    function get_system_settings() {
        $query = $this->db->get('settings');
        return $query->result_array();
    }

    ////////BACKUP RESTORE/////////
    function create_backup($type) {
        $this->load->dbutil();
            $options = array(
            'format' => 'txt',  // gzip, zip, txt
            'add_drop' => TRUE, // Whether to add DROP TABLE statements to backup file
            'add_insert' => TRUE, // Whether to add INSERT data to backup file
            'newline' => "\n"               // Newline character used in backup file
        );


        if ($type == 'all') {
            $tables = array('');
            $file_name = 'system_backup';
		//uploads/
		
        } else {
            $tables = array('tables' => array($type));
            $file_name = 'backup_' . $type;
        }

        $backup = & $this->dbutil->backup(array_merge($options, $tables));


        $this->load->helper('download');
        force_download($file_name. '.sql', $backup);
    }

    /////////RESTORE TOTAL DB/ DB TABLE FROM UPLOADED BACKUP SQL FILE//////////
    function restore_backup() {
        move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/backup.sql');
        $this->load->dbutil();


        $prefs = array(
            'filepath' => 'uploads/backup.sql',
            'delete_after_upload' => TRUE,
            'delimiter' => ';'
        );
        $restore = & $this->dbutil->restore($prefs);
        unlink($prefs['filepath']);
    }

    /////////DELETE DATA FROM TABLES///////////////
    function truncate($type) {
        if ($type == 'all') {
           //$this->db->truncate('patients');
           //  $this->db->truncate('region');
           //  $this->db->truncate('zones');
           // $this->db->truncate('parent');
           //  $this->db->truncate('class');
           // $this->db->truncate('encounter');
           // $this->db->truncate('treatment');
		   // $this->db->truncate('message');
           // $this->db->truncate('kebele');
           //  $this->db->truncate('services');
           // $this->db->truncate('woreda');
			$this->db->truncate('log');
		   // $this->db->truncate('settings');
					
        } else {
            $this->db->truncate($type);
        }
    }

    ////////IMAGE URL//////////
    function get_image_url($type = '', $id = '') {
        if (file_exists('uploads/'.$type .'_image/'.$id .'.jpg'))
            $image_url = base_url() . 'uploads/' . $type . '_image/' . $id . '.jpg';
        else
            $image_url = base_url() . 'uploads/user.jpg';

        return $image_url;
    }

 
    function select_study_material_info()
    {
        $this->db->order_by("timestamp", "desc");
        return $this->db->get('document')->result_array(); 
    }
	
	
function lastday($month = '', $year = '') {
   if (empty($month)) {
      $month = date('m');
   }
   if (empty($year)) {
      $year = date('Y');
   }
   $result = strtotime("{$year}-{$month}-01");
   $result = strtotime('-1 second', strtotime('+1 month', $result));
   return date('d', $result);
}
function lastmonth($month = '', $year = '') {
   if (empty($month)) {
      $month = date('m');
   }
   if (empty($year)) {
      $year = date('Y');
   }
   $result = strtotime("{$year}-{$month}-01");
   $result = strtotime('-1 second', strtotime('+1 month', $result));
   return date('m', $result);
}

function format($value) {
	if ($value > 1) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}
 function randomcode($len="10"){
	global $pass;
	global $lchar;

$code= NULL;
for($i=0; $i<$len; $i++){
		$char=chr(rand(48,122));
		while (!ereg("[a-zA-Z0-9]", $char)){
			if($char == $lchar) {
				continue;
				}
			$char =chr(rand(48,90));
		}
		$pass .=$char;
		$lchar=$char;
	}
	return $pass;
}



    function select_study_material_info_for_student()
    {
        $student_id = $this->session->userdata('mrn_id');
        $class_id   = $this->db->get_where('patients', array('mrn_id' => $student_id))->row()->class_id;
        $this->db->order_by("timestamp", "desc");
        return $this->db->get_where('document', array('class_id' => $class_id))->result_array();
    }
    
    function update_study_material_info($document_id)
    {
        $data['timestamp']      = strtotime($this->input->post('timestamp'));
        $data['title'] 		= $this->input->post('title');
        $data['description']    = $this->input->post('description');
        $data['class_id'] 	= $this->input->post('class_id');
        
        $this->db->where('document_id',$document_id);
        $this->db->update('document',$data);
    }
    
    function delete_study_material_info($document_id)
    {
        $this->db->where('document_id',$document_id);
        $this->db->delete('document');
    }
    
    ////////private message//////
    function send_new_private_message() {
        $message    = $this->input->post('message');
		$rec    = $this->input->post('reciever');
       // $timestamp  = strtotime(date("Y-m-d H:i:s"));

        $reciever   =  $this->session->userdata('login_type') . '-' .$rec;
        $sender     = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');// admin-1213

        //check if the thread between those 2 users exists, if not create new thread
        $num1 = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->num_rows();
        $num2 = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->num_rows();

        if (($num1 == 0 )and ($num2 == 0)) {
            $message_thread_code                        = substr(md5(rand(100000000, 20000000000)), 0, 15);
            $data_message_thread['message_thread_code'] = $message_thread_code;
            $data_message_thread['sender']              = $sender;
            $data_message_thread['reciever']            = $reciever;
            $this->db->insert('message_thread', $data_message_thread);
        }
        if ($num1 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $sender, 'reciever' => $reciever))->row()->message_thread_code;
        if ($num2 > 0)
            $message_thread_code = $this->db->get_where('message_thread', array('sender' => $reciever, 'reciever' => $sender))->row()->message_thread_code;

          $now = time();
          $this_time = date('m/d/Y H:i:s',$now);
		  
        $data['message_thread_code']    = $message_thread_code;
        $data['message']                = $message;
        $data['sender']                 = $sender;
         $data['timestamp']              = $this_time;
        $this->db->insert('message', $data);
       redirect(base_url() . 'index.php?admin/message/message_read/'.$message_thread_code, 'refresh');
        // notify email to email reciever
        $this->email_model->notify_email('new_message_notification', $this->db->insert_id());
		

        return $message_thread_code;
    }

    function send_reply_message($message_thread_code) {
        $message    = $this->input->post('message');
       // $timestamp  = strtotime(date("Y-m-d H:i:s"));
        $sender     = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');
           $now = time();
          $this_time = date('m/d/Y H:i:s',$now);

        $data['message_thread_code']    = $message_thread_code;
        $data['message']                = $message;
        $data['sender']                 = $sender;
         $data['timestamp']              = $this_time;
        $this->db->insert('message', $data);
		
      redirect(base_url() . 'index.php?admin/message/message_read/' .$message_thread_code, 'refresh');
        // notify email to email reciever
        $this->email_model->notify_email('new_message_notification', $this->db->insert_id());
		return $message_thread_code;
    }
    function count_unread_message_of_curuser() {
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');
        $sql = "select count(a.message_id) counts from message a "
                . " inner join message_thread b on a.message_thread_code=b.message_thread_code "
                . " where b.reciever='" . $current_user . "' and a.read_status=0";
        $row = $this->db->query($sql)->row_array();
        return $row["counts"];
    }
    function mark_thread_messages_read($message_thread_code) {
        // mark read only the oponnent messages of this thread, not currently logged in user's sent messages
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');
        $this->db->where('sender !=', $current_user);
        $this->db->where('message_thread_code', $message_thread_code);
        $this->db->update('message', array('read_status' => 1));
		
    }

    function count_unread_message_of_thread($message_thread_code) {
        $unread_message_counter = 0;
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');
        $messages = $this->db->get_where('message', array('message_thread_code' => $message_thread_code))->result_array();
        foreach ($messages as $row) {
            if ($row['sender'] != $current_user && $row['read_status'] == '0')
                $unread_message_counter++;
        }
        return $unread_message_counter;
    }
	
	
    function unread_message_of_curuser() {
        $data = array();
        $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');
        $sql = "select a.*  from message a "  . " inner join message_thread b on a.message_thread_code=b.message_thread_code "
                . " where b.reciever='" . $current_user . "' and a.read_status=0";
        $rows = $this->db->query($sql)->result_array();
        foreach ($rows as $row) {
            $sender = explode('-', $row['sender']);
            $sender_type = $sender[0];
            $sender_id = $sender[1];

            $sql = "select name from " . $sender_type . " where " . $sender_type . "_id=" . $sender_id;
            $result = $this->db->query($sql)->row_array();
            $row["sender_name"] = $result["name"];

            $key = $row['sender'];
            $face_file = 'uploads/' . $sender_type . '_image/' . $sender_id . '.jpg';
            if (!file_exists($face_file)) {
                $face_file = 'uploads/default_avatar.jpg';
            }
            $row["face_file"] = base_url() . $face_file;

//            $cur_time = date('Y-m-d H:i:s', time());
//            $send_time =date('Y-m-d H:i:s', $row["timestamp"]);
//            echo $cur_time;
//            $diff = date_diff($cur_time, $send_time);
            $ago = '';
            $sec = time() - $row["timestamp"];
            $year = (int) ($sec / 31556926);
            $month = (int) ($sec / 2592000);
            $day = (int) ($sec / 86400);
            $hou = (int) ($sec / 3600);
            $min = (int) ($sec / 60);
            if ($year > 0) {
                $ago = $year . ' year(s)';
            } else if ($month > 0) {
                $ago = $month . ' month(s)';
            } else if ($day > 0) {
                $ago = $day . ' day(s)';
            } else if ($hou > 0) {
                $ago = $hou . ' hour(s)';
            } else if ($min > 0) {
                $ago = $min . ' minute(s)';
            } else {
                $ago = $sec . ' second(s)';
            }

            $row["ago"] = $ago;

            array_push($data, $row);
        }
        return $data;
    }

}
?>

