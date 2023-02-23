<?php
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today));
               $current_user = $this->session->userdata('admin_id');
			   $s="SELECT name FROM `admin` where admin_id='$current_user'";
               $ress = mysql_query($s) or die(mysql_error());
               $rows = mysql_fetch_array($ress);
               $name = $rows['name'];  
if(isset($_POST['print'])){ 

    $year       = $_POST["year"];
	$qt         = $_POST["qt"];
	$paid       ='Yes';
    $backyear    =$year -1; 
 
	
		    $region    =$_POST["region"];
			$zone      =$_POST["zone"];
	    	$woreda    =$_POST["woreda"];
			
			$class_id      =$_POST["class_id"];
			$section_id    =$_POST["section_id"];
			$woreda_id     =$_POST["woreda_id"];

	
    $mm1=11; $dd1=1; $mm2=1; $dd2=30;
    $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
    $fyear = trim($year .'-'.$mm2.'-'.$dd2);      		   
	                
function generateRow($year ,$qt,$byear, $fyear,$class_id ,$section_id,$woreda_id){
		$contents = '';
		 
		      if($qt ==1) 
		        $sql="select * from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')";     
			  if($qt ==2)
	            $sql="select * from treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')";     
			  if($qt ==3)
	            $sql="select * from treatment where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')";    
		      if($qt ==4)
                $sql="select * from treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year='$year')";  
			  		
                   $result = mysql_query($sql)or die(mysql_error());
                        if(mysql_num_rows($result)<1){
						 echo'<div style="color:red;font-size:17px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found with this time!</div>';
	                         exit;
                             }
							  	   $i=1;
                         while($row2=mysql_fetch_array($result)){
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
				   <td>'.$row2['agreement'].'</td>
				
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

}
	
// P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('paid service charge information by time');  
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
      	<h2 align="center"> Service charge report per quarter and Woreda/Organization </h2>
			
		<b>This report is generated on '.$new.'  by  <u>'.$name.'</u> to summarize or declare that fully or partailly made Service charge payment with clients of Jimma Medical Center</h2>
	 	Region= '.$region.' Zone= '.$zone.'   Woreda= '.$woreda.' Fisical Year= '.$backyear.'/'.$year.' and Quarter ='.$qt.'<br><br>
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
				<th width="7%" align="left"><b>CBHI</b></th> 
				<th width="16%" align="left"> <b>Name</b></th>
				<th width="5%" align="left"><b>Date</b></th>
				<th width="5%" align="left"><b>Encounter</b></th> 
				<th width="8%" align="left"><b>agreement</b></th> 
				
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
	 	
    $content .=generateRow($year ,$qt,$byear, $fyear,$class_id ,$section_id,$woreda_id); 
	            
	
           if($qt ==1)
		      $result1 = mysql_query("SELECT sum(card) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result1 = mysql_query("SELECT sum(card) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result1 = mysql_query("SELECT sum(card) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result1 = mysql_query(" SELECT sum(card) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
			}
			
		    if($qt ==1)
		      $result12 = mysql_query("SELECT sum(lab) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result12 = mysql_query("SELECT sum(lab) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result12 = mysql_query("SELECT sum(lab)FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result12 = mysql_query(" SELECT sum(lab) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
	        while ($row22 = mysql_fetch_array($result12)) {
			    $lab2  =	$row22['sum(lab)'];
			   } 
		    if($qt ==1)
		      $result13 = mysql_query("SELECT sum(Imaging) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result13 = mysql_query("SELECT sum(Imaging) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result13 = mysql_query("SELECT sum(Imaging) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result13 = mysql_query("SELECT sum(Imaging) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
    		while ($row3 = mysql_fetch_array($result13)) {
				$Imaging2 = $row3['sum(Imaging)'];
				}
	       
             if($qt ==1)
		      $result14 = mysql_query("SELECT sum(surgery) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result14 = mysql_query("SELECT sum(surgery) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result14 = mysql_query("SELECT sum(surgery) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result14 = mysql_query(" SELECT sum(surgery) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
			 while ($row4 = mysql_fetch_array($result14)) {
				$surgery2 = $row4['sum(surgery)'];
				}
	       if($qt ==1)
		      $result15 = mysql_query("SELECT sum(drugs) FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result15 = mysql_query("SELECT sum(drugs) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result15 = mysql_query("SELECT sum(drugs) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result15 = mysql_query(" SELECT sum(drugs) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    		
			
			while ($row5 = mysql_fetch_array($result15)) {
				$drugs2 = $row5['sum(drugs)'];
				}
		   if($qt ==1)
		      $result16 = mysql_query(" SELECT sum(Bed_fee) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result16 = mysql_query(" SELECT sum(Bed_fee) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result16  = mysql_query(" SELECT sum(Bed_fee) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result16 = mysql_query(" SELECT sum(Bed_fee) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    		
			while ($row6 = mysql_fetch_array($result16)) {
				$Bed_fee2  = $row6['sum(Bed_fee)'];
				}
		  if($qt ==1)
		      $result17 = mysql_query("SELECT sum(other) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	           $result17 = mysql_query("SELECT sum(other) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt ==3)
	          $result17 = mysql_query("SELECT sum(other) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt ==4)
               $result17 = mysql_query(" SELECT sum(other) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    	
    		while ($row7 = mysql_fetch_array($result17)) {
			 $other2 =  $row7['sum(other)'];
				}
			$grandtotal = ($card2+$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2);
	           $content .= '
                      <tfoot>
                       <tr>
					
			                          <td  colspan="9" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
									  <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($card2,2).'</b></td>
				                      <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($lab2,2).'</b></td>
				                      <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($Imaging2,2).'</b></td>
			                          <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($surgery2,2).'</b></td>
				                      <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($drugs2,2).'</b></td>
									  <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($Bed_fee2 ,2).'</b></td>
                                      <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($other2 ,2).'</b></td>
									  <td   style="text-align:right;" style="background-color:lightblue;"><b>'.number_format($grandtotal ,2).'</b></td>
									 
	                 </tr>
              	   </tfoot>
				   
				
		
				     ';  
	 	

    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('All finance paid by time.pdf', 'I');
	
?>