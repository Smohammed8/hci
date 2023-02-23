<?php
                            $current_user = $this->session->userdata('admin_id'); 
	                         $sql = mysql_query("SELECT * FROM `link_tbl` where user_id ='$current_user'");
                             while($row3 = mysql_fetch_array($sql)){
                             $regionx    = $row3["region"]; 
						     $zonex      = $row3["zone"]; 
							 $woredax    = $row3["woreda"]; 
							 }
                        $res = mysql_query("SELECT agreemenrt_type from  parent  where woreda_id='$woredax' and section_id='$zonex' and class_id='$regionx'") or die(mysql_error());
                         while($row22=mysql_fetch_array($res)){
                             $gre= $row22['agreemenrt_type'];
						 }
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today));
               $current_user = $this->session->userdata('admin_id');
			   $s="SELECT name FROM `admin` where admin_id='$current_user'";
               $ress = mysql_query($s) or die(mysql_error());
               $rows = mysql_fetch_array($ress);
               $name = $rows['name'];  
if(isset($_POST['submit'])){ 
    $region       = $_POST["region"];
	$zone         = $_POST["zone"];
	$woreda       = $_POST["woreda"];

	}	            	
function generateRow($region,$zone,$woreda){
	   
		$contents = '';
		  
                   $sql ="select * from treatment where  region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'";  
			    
				$result = mysql_query($sql)or die(mysql_error());
				/*
				  if(mysql_num_rows($result)<1){
	             
						 echo'<div style="color:red;font-size:16px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="16px"/>&nbsp; No unpaid service charge found!</div>';
	                        exit();
                        } */
                   
							  $i=1;
                         while($row2 = mysql_fetch_array($result)){
                               $mrn_id       = $row2['mrn_id'];
							  $encounter_id  =$row2['encounter_id'];	
							 
							 $subtotal2 = ($row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other']);
                           
							  $sq = mysql_query("select name from patients where mrn_id ='$mrn_id'"); 
				  	   while($d =mysql_fetch_array($sq)){
			                 $name2= ucwords(strtolower($d['name']));  
					        // $agreement= $d['agreement']; 
					   }
					         
			$contents .= '
			<tr>
			       <td>'.$i++.'.</td>
				   <td>'.$row2['mrn_id'].'</td>
				   <td>'.$row2['CBHI_code'].'</td>
		           <td>'.$name2.'</td>
				   <td>'.$row2['Date_of_service'].'</td>
				   <td>'.$row2['encounter'].'</td>
			
				   <td>'.$row2['zone'].'</td>
				   <td>'.$row2['woreda'].'</td>
				   <td style="text-align: right;">'.number_format($row2['card'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['lab'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['Imaging'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['surgery'],2).'</td>
			       <td style="text-align: right;">'.number_format($row2['drugs'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['Bed_fee'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['other'],2).'</td>
				   <td style="text-align: right;">'.number_format($subtotal2 ,2).'</td>
				   
				  
			</tr>
			
		             
			';
		   }

	
		return $contents;
	}


	
// P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Service charge report by quarter');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    //$pdf->SetAutoPageBreak(TRUE, 17); 
// set auto page breaks
   $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


// set some language-dependent strings (optional)
  if (@file_exists(dirname(__FILE__).'tcpdf/config/lang/eng.php')) {
    require_once(dirname(__FILE__).'tcpdf/config/lang/eng.php');
    $pdf->setLanguageArray($l);
   }

//////////////////////////////////////////////////////////////////////////////////////////////
 	
    $pdf->SetFont('helvetica', '', 9);  
    $pdf->AddPage();  
    $content = ''; 
    $content .= '

           <img src="uploads/pdfheader.jpg" style="align:left;"> 
      	<h2 align="center">All Recorded service charge from Jimma Medical Center</h2>
			
		<b>This report is generated on '.$new.'  by  <u>'.$name.'</u> to assure that all unpaid Service charge records in your woreda  from Jimma Medical Center</h2>
	Region Code = '.$region.'   Zone code ='.$zone.'   Woreda/Org Code='.$woreda.'  Agreement='.$gre.'<br><br>
      	<table border="1" cellspacing="0" cellpadding="1"> 
		
		  
							       <thead>
                           <tr class="header-tr" bgcolor="gray" >
					
							          <td  colspan="11"><b> Patient encounter status</b></td>
								  
							
                               
							       <td  colspan="8"><b>Payment information by servics type</b></td>
								   						     
							  
								       </tr>
							    
                             </thead>
							 
           <tr style="background-color:lightblue;">  
		   
		   
           		<th width="2%" align="left"> <b>#</b></th>
                <th width="5%" align="left"><b>MRN</b></th>
				<th width="12%" align="left"><b>CBHI</b></th> 
				<th width="16%" align="left"> <b>Name</b></th>
				<th width="8%" align="left"><b>Date</b></th>
				<th width="5%" align="left"><b>Encounter</b></th> 
		
			
				<th width="5%" align="left"><b>Zone</b></th> 
				<th width="5%" align="left"><b>Woreda</b></th>
				<th width="5%" align="left"><b>Card</b></th> 
                <th width="5%" align="left"><b>Lab</b></th>
			    <th width="5%" align="left"><b>Imaging</b></th>
				<th width="5%" align="left"><b>Procedure</b></th> 
				<th width="5%" align="left"> <b>Drug</b></th>
                <th width="5%" align="left"><b>Bed</b></th>
				<th width="5%" align="left"><b>other</b></th> 
				<th width="6%" align="left"><b>#Total</b></th> 
				
				
				 				
           </tr>
		      				   
            ';  
	 	
    $content .=generateRow($region,$zone,$woreda); 
	  
      
           $result1 = mysql_query("select sum(card)  from treatment  where  region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error());      

    		while ($row12 = mysql_fetch_array($result1)) {
				$card2 = $row12['sum(card)'];
				} 
					
	  
           $result2  =mysql_query("select sum(lab)  from treatment where  region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error()); 
    		while ($row22 = mysql_fetch_array($result2)) {
			$lab2  =	$row22['sum(lab)'];
			} 

  
           $result3 = mysql_query("select sum(Imaging) from treatment where region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error()); 	
	   
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging2 = $row3['sum(Imaging)'];
				}
	 

           $result4 = mysql_query("select sum(surgery) from treatment where  region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error());  	
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
				}

           $result5 = mysql_query("select sum(drugs) from treatment where region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error());  	

    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
				}

           $result6  = mysql_query("select sum(Bed_fee) from treatment where  region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error());  	
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2  = $row6['sum(Bed_fee)'];
				}

 
            $result7  = mysql_query("select  sum(other) from treatment where  region='$region' and  zone='$zone' and woreda='$woreda' and  paid='No'")  or die(mysql_error());  	
	   					
    		while ($row7 = mysql_fetch_array($result7)) {
			$other2 =  $row7['sum(other)'];
				}
		 
			$grandtotal2 =($card2+$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2);
	           $content .= '
                      <tfoot>
                       <tr>
					
			        <td  colspan="8" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
					<td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($card2,2).'</b></td>
				    <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($lab2,2).'</b></td>
				    <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($Imaging2,2).'</b></td>
			        <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($surgery2,2).'</b></td>
				    <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($drugs2,2).'</b></td>
			        <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($Bed_fee2 ,2).'</b></td>
                    <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($other2 ,2).'</b></td>
		            <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($grandtotal2 ,2).'</b></td>
									 
	                 </tr>
              	   </tfoot>
				     ';  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('service charge per quarter.pdf', 'I');
	
?>