<?php
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today));

   if(isset($_POST['search'])){ 

    $yr     = $_POST['yr'];
	$qtr    = $_POST['qtr'];
   }
function generateRow($yr,$qtr){
		$contents = '';
	 	
	$sql="SELECT * FROM `payment` where year='$yr' and  per_time='$qtr'";
				
       $result = mysql_query($sql) or die(mysql_error());
	   
	                           if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                        $this->session->set_flashdata('flash_message' , get_phrase('not_report_found!'));
						    redirect(base_url() . 'index.php?admin//partially_paid_list/', 'refresh');
                              }

			   $i=1;
      while($row = mysql_fetch_array($result)){         
			$contents .= '
			<tr>
			    <td>'.$i++.'.</td>
				<td>'.$row['region'].'</td>
				<td>'.$row['zone'].'</td>
			    <td>'.$row['woreda'].'</td>	   
				<td>'.$row['per_time'].'</td>
				<td>'.$row['year'].'</td>
				<td>'.$row['paid_amount'].'</td>
				<td>'.$row['unpaid_amount'].'</td>
				<td>'.$row['total'].'</td>
				<td>'.$row['paid'].'%</td>
				<td>'.$row['remain'].'%</td>
				<td>'.$row['fully_covered'].'</td>
				<td>'.$row['status'].'</td>
				
			</tr>
		
			';
		   }

	
		return $contents;
	}
		

	
// P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('User account information');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    //$pdf->SetAutoPageBreak(TRUE, 17);  	
    $pdf->SetFont('helvetica', '', 12);  
    $pdf->AddPage();  
    $content = ''; 
    $content .= '
     
           <img src="uploads/pdfheader.jpg" style="align:left;"> 
      	<h2 align="center"> District or Organizational Payment History Report </h2>
		   <p>  4=Oromia Region,  7=SNNP Region,8=Gambela Region <br>
	            19=Bunobedele zone, 10=Jimma zone,  09 = Elubabora zone   </p> 
      	<table border="1" cellspacing="0" cellpadding="1"> 
           <tr style="background-color:lightblue;">  
           		<th width="3%" align="left"> <b>#</b></th>
                <th width="7%" align="left"> <b>Region</b></th>
				<th width="8%" align="left"> <b>zone</b></th> 
				<th width="10%" align="left"><b>Woreda</b></th>
                <th width="11%" align="left"><b>Mon/Quarter</b></th>
				<th width="8%" align="left"> <b>Year</b></th> 
				<th width="10%" align="left"><b>Paid</b></th> 
                <th width="8%" align="left"> <b>Unpaid</b></th>
				<th width="8%" align="left"><b>#Total</b></th> 
				<th width="6%" align="left"> <b>Paid</b></th>
                <th width="7%" align="left"> <b>Remain</b></th>
				<th width="8%" align="left"> <b>Covered</b></th> 
				<th width="6%" align="left"> <b>Status</b></th> 
           </tr>
		       				   
            ';  
	 	
    $content .=generateRow($yr,$qtr) ; 

    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('UserList.pdf', 'I');
	
?>