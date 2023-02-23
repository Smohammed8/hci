<?php 
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today)); 
       $data2	=	$this->db->get('server' )->result_array();
        foreach($data2 as $rows):
		$domain_name   =$rows["domain_name"]; 	                  
        endforeach; 
if(isset($_POST['print'])){ 
    $admin_id    = $_POST["admin_id"];

	 	}									
function generateRows($admin_id){
$contents = '';
   $sql = "SELECT * FROM `admin` where admin_id ='$admin_id'";	
   $pass  = "jimma";
   $jimma = md5($pass);
   $yes   = "yes";
   $trial = "0";
    $sql2 = mysql_query("UPDATE admin SET password ='$jimma' where admin_id ='$admin_id'"); 
    $sql3 = mysql_query("UPDATE admin SET  login_attempts='$trial' where admin_id ='$admin_id'");  
    $sql4 = mysql_query("UPDATE admin SET active ='$yes' where admin_id ='$admin_id'");     
      if(($sql2==true) and ($sql3==true)  and ($sql4==true)){
	 $result = mysql_query($sql) or die(mysql_error());
     while($row = mysql_fetch_array($result)){    
			$contents .='
			<tr>
			<td><b>'.$row['name'].'</b></td>
		
	    </tr>	
			';
	  } 
	 }
	  else{
		die(mysql_error());  
	  }
    return $contents;
	}
function generateRow($admin_id ){
$contents = '';
 $sql = "SELECT * FROM `admin` where admin_id= '$admin_id '";			
      $result = mysql_query($sql) or die(mysql_error());
     while($row = mysql_fetch_array($result)){    
			$contents .='
			<tr>
			<td>'.$row['email'].'</td>
			<td>   jimma    </td>
			<td>'.$row['role'].'</td>
	    	<td>'.$row['active'].'</td>
	   </tr>	
			';
		} 
    return $contents;
	}	
  // P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('User account report');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false); 
    $pdf->SetAutoPageBreak(TRUE, 10);  	
    $pdf->SetFont('helvetica', '', 12);  
    $pdf->AddPage();  
    $content = ''; 
	   $content .= '
	 <img src="uploads/pdfheader.jpg">
	   Dear&nbsp;   
	    ';
	  $content .= generateRows($admin_id) ; 

    $content .= '
		
<p style="font-size:12px;align:justify;"> 

With great pleasure we granted you access right the following 
HCI user account which enables you to login on Insurance management system by: <br>
</p>
	<table border="1" cellspacing="0" cellpadding="2"> 
           <tr style="background-color:lightblue;">  
           		
				<th width="40%" align="left"> <b>Email</b></th>
				<th width="15%" align="left"> <b>Password</b></th>
				<th width="20%" align="left"> <b>Account role</b></th>
				<th width="25%" align="left"> <b>Is account active?</b></th>
			      
	          </tr> 
	   
       '; 
  
    $content .= generateRow($admin_id ) ; 
    $content .= '</table>'; 
		  $content .= '
		  <p style="font-size:12px;align:justify;">  
	
 <b>You are strongly recommended to change your default password at first time login provided above using the following steps: </b> <br>
•	Open your browser such as Firefox,Google Chrome <br>
•	Go to <u>https://'.$domain_name.'</u> <br>
•	Enter your  provided above email and current password to login <br>
•	After successfully login, blink, blink red text saying ‘ change password’ displayed on top right. <br>
•	Click on change password red text link. <br>
•	Enter your current password, new password and repeat your new password in the password box. <br>
It is recommended to follow the following guideline when you set password. <br>
     &nbsp;&nbsp;&nbsp;=>	Password length should not be less than 8 characters <br>
     &nbsp;&nbsp;&nbsp;=>	The Strong password should contain a combination of <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Digits ( 0 -9 ) <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Alphabets  (A-Z, a-z) <br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Special characters (e.g. ! @ $ % ^ & * () ~ ) ; / - # & * + ? <> : [] {})<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Avoiding using dictionary words, name and phone numbers<br>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	Change password regularly <br>
•	Click on Update password <br>
•	Logout from the system <br>
Please note that, a user account is used to identify on a single user. 
It is legally forbidden to share user accounts with others. 
We also like to remind you to keep this letter in a secure place for further reference. 
If you have any comments, questions or suggestions please contact us at phone number of JMC-ICT Help Desk.
			<b>+251-472-115775.</b>
   </p>	
<hr><br>
<p style="text-align:right;"><b> Jimma Medical Center<br> JMC-ICT <b></p>
';
	
    $pdf->writeHTML($content);  
    $pdf->Output('User account information.pdf', 'I');
	
?>