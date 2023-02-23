<?php
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today));
         $current_user = $this->session->userdata('admin_id');
			   $s="SELECT name FROM `admin` where admin_id='$current_user'";
               $ress = mysql_query($s) or die(mysql_error());
               $rows = mysql_fetch_array($ress);
               $name = $rows['name'];  

   if(isset($_POST['print'])){ 
	$class_id      = $_POST["region"];
	$section_id    = $_POST["zone"];
	$woreda_id     = $_POST["woreda"];
	$woredaName    = $_POST["woredaName"];
	$indigent      = $_POST["indigent"];
	
   }
   
	
function generateRow($class_id,$section_id,$woreda_id,$indigent){
		$contents = '';
	 	
	$sql="SELECT * FROM `beneficiary` where woreda='$woreda_id' and region ='$class_id ' and zone='$section_id' and indigent='$indigent'";
				
       $result = mysql_query($sql) or die(mysql_error());
			   $i=1;
      while($row = mysql_fetch_array($result)){         
			$contents .= '
			<tr>
			    <td>'.$i++.'.</td>
				<td>'.$row['family_code'].'</td>
				<td>'.$row['cbhi'].'</td>
			    <td>'.$row['name'].'</td>
				<td>'.$row['sex'].'</td>
				<td>'.$row['dob'].'</td>
				<td>'.$row['kebele'].'</td>
				<td>'.$row['relation'].'</td>
				<td>'.$row['full_code'].'</td>
				<td>'.$row['region'].'</td>
				<td>'.$row['zone'].'</td>
				<td>'.$row['woreda'].'</td>
				<td>'.$row['indigent'].'</td>
				
			</tr>
		
			';
		   }

	
		return $contents;
	}
		

	
// P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Client information');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    //$pdf->SetAutoPageBreak(TRUE, 17);  	
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = ''; 
    $content .= '
     
           <img src="uploads/pdfheader.jpg" style="align:left;"> 
      	<h2 align="center"> List of Benficiary(Abawora) in our Woreda ,'.$indigent.' Indigent </h2>
		<p>   Region :'.$class_id.'  Zone:'.$section_id.'    Woreda: '.$woredaName.'  Woreda Code: '.$woreda_id.' &nbsp;&nbsp;&nbsp; Printed by : '.$name.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Print Date : '.$new.'<br>
	            </p> 
      	<table border="1" cellspacing="0" cellpadding="1"> 
           <tr style="background-color:lightblue;">  
           		<th width="3%" align="left"> <b>#</b></th>
                <th width="7%" align="left"><b>Family code</b></th>
				<th width="8%" align="left"><b>CBHI</b></th> 
				
				<th width="16%" align="left"> <b>Full Name</b></th>
                <th width="3%" align="left"><b>Sex</b></th>
				<th width="10%" align="left"><b>DOB</b></th> 
				<th width="8%" align="left"><b>Kebele</b></th> 
                <th width="8%" align="left"><b>Relation</b></th>
				<th width="14%" align="left"><b>CBHI#ID</b></th> 
				<th width="6%" align="left"> <b>Region</b></th>
                <th width="5%" align="left"><b>Zone</b></th>
				<th width="6%" align="left"><b>Woreda</b></th> 
				<th width="6%" align="left"><b>Indigent</b></th> 
           </tr>
		  
		       				   
            ';  
	 	
    $content .=generateRow($class_id,$section_id,$woreda_id,$indigent) ; 
      
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('Client information.pdf', 'I');
	
?>