<?php
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today));

function generateRow(){
		$contents = '';
	 	
	$sql="SELECT  `name`, `email`, `date_of_join`, `active`,`role`,`registered_by` FROM `admin`";
				
       $result = mysql_query($sql) or die(mysql_error());
			   $i=1;
      while($row = mysql_fetch_array($result)){   
	  
	 if($row['registered_by'] !='self'){
		  $registered_by = $row['registered_by'];
		  
         $ress = mysql_query("SELECT name FROM `admin` where admin_id='$registered_by'") or die(mysql_error());
               $rows = mysql_fetch_array($ress);
               $name = ucwords(strtolower($rows['name']));  
	    }
	  else{
	  $name = 'By Self';

	  }
				   
			$contents .= '
			<tr>
			    <td>'.$i++.'.</td>
			    <td>'.$row['name'].'</td>
				<td>'.$row['date_of_join'].'</td>
				<td>'.$row['active'].'</td>
				<td>'.$row['email'].'</td>
				<td>'.$row['role'].'</td>
				<td>'.ucwords(strtolower($name)).'</td>
				
			</tr>
		
			';
		   }

	
		return $contents;
	}
		

	
// P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('User account List');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    //$pdf->SetAutoPageBreak(TRUE, 17);  	
    $pdf->SetFont('helvetica', '', 9);  
    $pdf->AddPage();  
    $content = ''; 
    $content .= '
     
           <img src="uploads/123.JPG" style="align:left;"> 
      	<h2 align="center">System User List </h2> 
      
      	<table border="1" cellspacing="0" cellpadding="1"> 
           <tr style="background-color:lightblue;">  
           		<th width="4%" align="left"> <b>#ID</b></th>
                <th width="21%" align="left"><b>Name</b></th>
				<th width="23%" align="left"><b>Date of Registeration</b></th> 
				<th width="7%" align="left"> <b>Active</b></th>
                <th width="20%" align="left"><b>Email</b></th>
				<th width="12%" align="left"><b>Role</b></th> 
				<th width="13%" align="left"><b>Registered by</b></th> 
				
           </tr>
		       				   
            ';  
	 	
    $content .=generateRow() ; 

    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('User account List.pdf', 'I');
	
?>