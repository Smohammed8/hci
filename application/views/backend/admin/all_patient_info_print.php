<?php
$new  = date('Y-m-d');
$day  = date('y:m:d');
$today = trim(date('l, F d, Y',strtotime($day)));
function generateRow(){
		$contents = '';
	 	
	$sql="SELECT * FROM `patients`";
				
       $result = mysql_query($sql) or die(mysql_error());
			   $i=1;
      while($row = mysql_fetch_array($result)){         
			$contents .= '
			<tr>
			    <td>'.$i++.'.</td>
				<td>'.$row['mrn_id'].'</td>
				<td>'.$row['cbhi'].'</td>
			    <td>'.$row['name'].'</td>
				<td>'.$row['sex'].'</td>
				<td>'.$row['age'].'</td>
				<td>'.$row['kebele'].'</td>
				<td>'.$row['agreement'].'</td>
				<td>'.$row['full_code'].'</td>
				<td>'.$row['class_id'].'</td>
				<td>'.$row['section_id'].'</td>
				<td>'.$row['woreda_id'].'</td>
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
    $pdf->SetTitle('All patient info print pdf');  
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
      	<h2 align="center"> All CBHI,Credit and Healthcare Finance Patients List </h2>
		<p>  4=Oromia Region,  7=SNNP Region,8=Gambela Region <br>
	            19=Bunobedele zone, 10=Jimma zone,  09 = Elubabora zone   </p> 
      	<table border="1" cellspacing="0" cellpadding="1"> 
           <tr style="background-color:lightblue;">  
           		<th width="3%" align="left"> <b>#</b></th>
                <th width="7%" align="left"><b>MRN</b></th>
				<th width="8%" align="left"><b>CBHI</b></th> 
				
				<th width="16%" align="left"> <b>Full Name</b></th>
                <th width="3%" align="left"><b>Sex</b></th>
				<th width="10%" align="left"><b>DOB</b></th> 
				<th width="10%" align="left"><b>Kebele</b></th> 
                <th width="8%" align="left"><b>Agreement</b></th>
				<th width="12%" align="left"><b>CBHI#ID</b></th> 
				<th width="6%" align="left"> <b>Region</b></th>
                <th width="5%" align="left"><b>Zone</b></th>
				<th width="6%" align="left"><b>Woreda</b></th> 
				<th width="6%" align="left"><b>Indigent</b></th> 
           </tr>
		       				   
            ';  
	 	
    $content .=generateRow() ; 

    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('All patient info print.pdf', 'I');
	
?>