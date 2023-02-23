<?php
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today));
               $current_user = $this->session->userdata('admin_id');
			   $s ="SELECT name FROM `admin` where admin_id='$current_user'";
               $ress = mysql_query($s) or die(mysql_error());
               $rows = mysql_fetch_array($ress);
               $name = $rows['name'];  
if(isset($_POST['print'])){ 
    $class_id    = $_POST["class_id"];
	$section_id  = $_POST["section_id"];
	$woreda_id   = $_POST["woreda_id"];
	$mm          = $_POST["mm"];
	$ag          = $_POST["agreement"];
	$yyyy        = $_POST["yyyy"];
	$woreda        = $_POST["woreda"];
	$zone          = $_POST["zone"];
	$region        = $_POST["region"];
	
	        	}		                
function generateRow($yyyy ,$mm ,$class_id,$section_id,$woreda_id,$ag){
		$contents = '';
			
		   $sql = "select * from treatment where month='$mm' and agreement ='$ag' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'";
                  
					   $i = 1;
                  $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						  echo'<div style="color:red;font-size:17px;" >
						  <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                             exit;
                              }
			
			
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id       = $row2['mrn_id'];
							 $encounter_id = $row2['encounter_id'];
							 
							 
							  $subtotal = ($row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other']);
                           
                    
					  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	  while($row=mysql_fetch_array($sq)){
			          $name2 = ucwords(strtolower($row['name']));  
					  $agreement =$row['agreement']; 
					  $age = $row['age'];
					  $sex = $row['sex'];
					  $class_id =$row['class_id'];
					  $section_id = $row['section_id'];
					  $woreda_id  = $row['woreda_id'];
					  //$woreda = $this->crud_model->get_woreda_name_by_id($woreda_id ,$section_id );
					   if($row['kebele'] !=''){
						$kebele     = ucwords(strtolower($row['kebele']));   
					   }
					   else{
                        $kebele     = '-';  						 
					   }
					   } 
					  if($row2['diagniss'] !=''){
						  $diagniss     =$row2['diagniss'];   
					   }
					   else{
						$diagniss     ='-';       
					   }
					   
			$sql = mysql_query("update treatment set total =$subtotal  where  month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id'  and year='$yyyy' and encounter_id='$encounter_id')"); 
           
		 	$contents .= '
			<tr>
			       <td>'.$i++.'.</td>
				   <td>'.$row2['mrn_id'].'</td>
				   <td>'.$row2['CBHI_code'].'</td>
		           <td>'.$name2.'</td>
				   
				   <td style="text-align:left;">'.$kebele.'</td>
				   <td>'.$row2['age'].'</td>
				   <td>'.$sex.'</td>
				   <td>'.$row2['Date_of_service'].'</td>
				   <td>'.$row2['encounter'].'</td>
				   <td style="text-align: center;">'.$diagniss.'</td>
				          				   
				   <td style="text-align: right;">'.number_format($row2['card'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['lab'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['Imaging'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['surgery'],2).'</td>
			       <td style="text-align: right;">'.number_format($row2['drugs'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['Bed_fee'],2).'</td>
				   <td style="text-align: right;">'.number_format($row2['other'],2).'</td>
				   <td style="text-align: right;">'.number_format($subtotal ,2).'</td>
				   
				  
			</tr>	             
			';
		   }
		return $contents;
	}
   // P =portriat   L=landscape
	require_once('tcpdf/tcpdf.php');  
	set_time_limit(60); // 60 seconds (1 minutes)
    ini_set('pcre.backtrack_limit', '10000000');
    ini_set('memory_limit', '4060M');
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Payment report by month');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '9', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(true);
    //$pdf->SetAutoPageBreak(TRUE, 17); 
   // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'tcpdf/config/lang/eng.php')) {
    require_once(dirname(__FILE__).'tcpdf/config/lang/eng.php');
    $pdf->setLanguageArray($l);
   }
//////////////////////////////////////////////////////////////////////////////////////////////
 	
    $pdf->SetFont('helvetica', '', 8);  
	$pdf->SetMargins(5,5,1,true);  
    $pdf->AddPage();  
    $content = ''; 
    $content .= '

           <img src="uploads/pdfheader.jpg" style="align:left;"> 
      	<h2 align="center">  Monthly  Service charge payment report </h2>
			
		<b>This report is generated on '.$new.'  by  <u>'.$name.'</u> 
		
		
		to declare or request our clients Service charge to be made fully or partailly pay  for Jimma Medical Center</h2>
	

	

		<b> Facility :
    <u>Jimma Medical Center</u>
		&nbsp;&nbsp;&nbsp;&nbsp;Request for : <u>Month-'.$mm.'</u>   
		&nbsp;&nbsp;&nbsp;&nbsp;Year : <u>'.$yyyy .'</u>    
		&nbsp;&nbsp;&nbsp;&nbsp;Region : <u>'.$region.' </u>  
		&nbsp;&nbsp;&nbsp;&nbsp;Zone : <u>'.$zone.' </u>  
		&nbsp;&nbsp;&nbsp;&nbsp;District/organization: <u>'.$woreda.'</u>   
		&nbsp;&nbsp;&nbsp;&nbsp;Agreement : <u>'.$ag.'</u> </b><br><br>
      		
		<table border="1" cellspacing="0" cellpadding="1" style="page-break-inside:avoid !important; margin: 4px 0px 4px 0px;"> 
		  
							   
                           <tr class="header-tr" bgcolor="gray">
					
							       	  <td  width="61%" colspan="10"><b> Patient encounter status</b></td>
								  
							         <td  width="39%" colspan="8"><b>Payment information by servics type</b></td>
								   						     
							  
								       </tr>
							
                <tr style="background-color:lightblue;">  
			    <th width="3%" align="left"> <b>#</b></th>
                <th width="4%" align="left"><b>MRN</b></th>
				<th width="11%" align="left"><b>Code</b></th> 
				<th width="16%" align="left"><b>Full Name</b></th>
				<th width="8%"  align="left"><b>Address</b></th> 
				<th width="3%" align="left"><b>age</b></th> 
				<th width="2%" align="left"><b>Sex</b></th> 
				<th width="7%" align="left"><b>Service date</b></th> 
				<th width="3%" align="left"><b>Type</b></th>
				<th width="4%" align="left"><b>Diagnosis</b></t></th>
				<th width="4%" align="left"><b>Card</b></th> 
                <th width="5%" align="left"><b>Lab</b></th>
			    <th width="5%" align="left"><b>Imaging</b></th>
				<th width="4%" align="left"><b>Procedure</b></th> 
				<th width="6%" align="left"> <b>Drug</b></th>
                <th width="4%" align="left"><b>Bed</b></th>
				<th width="4%" align="left"><b>other</b></th> 
				<th width="6%" align="left"><b>#Total</b></th>
           </tr>  				   
            ';  
	 	
    $content .= generateRow($yyyy ,$mm,$class_id,$section_id,$woreda_id,$ag); 
	
	   $result1 = mysql_query("SELECT sum(card) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
		 		 
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
				} 
				
	   $result2 = mysql_query("SELECT sum(lab) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab2  =	$row2['sum(lab)'];
			} 
	   $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy' ") or die(mysql_error());
    		
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging2 = $row3['sum(Imaging)'];
				}
				
	   $result4 = mysql_query("SELECT sum(surgery) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		
	   while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
				}
	   $result5 = mysql_query("SELECT sum(drugs) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		
	   while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
				}
       $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2  = $row6['sum(Bed_fee)'];
				}
	   $result7 = mysql_query("SELECT sum(other) FROM treatment where month='$mm' and paid='No' and agreement ='$ag' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
			$other2 =  $row7['sum(other)'];
				}
		 
			$grandtotal =($card2+$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2);
	           $content .= '
                      <tfoot>
                       <tr>
					
			        <td  colspan="10" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
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
			
     	if (trim($ag=='CB Health Insurance')){
					
		                            $opd1 = mysql_query("SELECT * FROM `treatment` where  month='$mm' and paid='No' and encounter='OPD' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $opdk = mysql_num_rows($opd1);
								   
								    $opd2 = mysql_query("SELECT * FROM `treatment` where  month='$mm' and paid='No' and encounter='OPD' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where  month='$mm' and paid='No' and encounter='IPD' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $ipdk  = mysql_num_rows($ipd1);
									
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where month='$mm' and paid='No' and encounter='IPD' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $ipdh = mysql_num_rows($ipd2);
							        $allipd= $ipdk+$ipdh;
								     $allopd = $opdk+$opdh;
								    $tf=mysql_query("SELECT * FROM treatment where month='$mm' and paid='No'  and  sex='M'  and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $m = mysql_num_rows($tf);
                                        
                                 	$tm=mysql_query("SELECT * FROM  treatment where month='$mm' and paid='No' and sex='F' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $f = mysql_num_rows($tm);
									
									
		                               
								    $md= mysql_query("SELECT * FROM treatment where month='$mm' and paid='No' and reason='Medical service' agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where  month='$mm' and paid='No' and reason='Drug stock-out' agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $stock_out = mysql_num_rows($stock);
							
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F' and paid='No'  and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);
									
									
					             $sqll ="select * from facility";  
                                 $resultc = mysql_query($sqll) or die(mysql_error());
                                  	while ($ro  = mysql_fetch_array($resultc)) {
			                         $facility  =  $ro['name'];
								     $type      =  $ro['type'];
									  $pay      =  '-';
								     $cachement =  number_format($ro['cachement']);
				                     }


				
    $content .= '
<br><br><br><br>

<div style="page-break-before:always;"></div>
		 <h2> Key Performance Indicators</h2>
		<table border="1" cellspacing="" cellpadding="1"> 
		
		
		
							       <thead>
                           <tr class="header-tr" >
					
							          <td  colspan="20"><b> Key Performance Indicators</b></td>
								  
								       </tr>
							    
                             </thead>    					 
           <tr style="background-color:gray;">  
                    		
                         	<th width="5%" style="left;"> Health Facility Name</th>
                    		<th width="5%" style="left;">Type of Facility</th>
                    		<th width="7%" style="left;"> Catchment Population</th>
							
						    <th width="5%" style="left;"> OPD Utilization #of Non_Paying</th>
							<th width="5%" style="left;"> OPD Utilization #of Paying</th>
							
							<th width="5%" style="left;"> IPD Utilization #of Non_Paying</th>
							<th width="5%" style="left;"> IPD Utilization #of Paying</th>

							
							<th width="5%" style="left;"> Total #of visits CBHI clients Male</th>
                    		<th width="5%" style="left;"> Total #of visits CBHI clients Female</th>
							
                    		<th width="4%" style="left;"> Total #of OPD claims</th>
							<th width="2%" style="left;"> Total #of IPD claims</th>
							
                    		<th width="4%" style="left;"> Amount claimed for card</th>			
						    <th width="5%" style="left;"> Amount claimed for lab</th>
							<th width="5%" style="left;"> Amount claimed for imaging</th>
							
							<th width="5%" style="left;"> Amount claimed for Procedure</th>
                    		<th width="5%" style="left;"> Amount claimed for drugs & SS</th>
							<th width="5%" style="left;"> Amount claimed for bed day</th>
                    		<th width="3%" style="left;"> Amount claimed other</th>
							<th width="6%" style="left;"> Total amount claimed</th>
							<th width="4%" style="left;"> Patients referred for medical services</th>
                    		<th width="4%" style="left;">Patents referred due to drug stock-out</th>
							
							
						</tr>
					
					     '; 
					
					  $content .= '
                   <tbody>
                        <tr>
                         	<td><b>'.$facility.'</b></td>
							<td><b>'.$type.'</b></td>
							<td><b>'.$cachement.' </b></td>
							
							<td><b> '.$opdh.' </b></td>	
						    <td><b> '.$opdk.' </b></td>
							<td><b> '.$ipdh.' </b></td>	
						    <td><b> '.$ipdk.' </b></td>
							

							<td><b>'.$m.'</b></td>
							<td><b>'.$f.'</b></td>
							
							<td><b>'.$allopd.'</b></td>
						    <td><b>'.$allipd.'</b></td>
							
					        <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($card2,2).'</b></td>
				            <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($lab2,2).'</b></td>
				            <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($Imaging2,2).'</b></td>
			                <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($surgery2,2).'</b></td>
				            <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($drugs2,2).'</b></td>
			                <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($Bed_fee2 ,2).'</b></td>
                            <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($other2 ,2).'</b></td>
		                    <td   style="text-align:right; background-color:lightblue;"><b>'.number_format($grandtotal,2).'</b></td>
						    <td> <b>'.$medical.'</b></td>
						    <td> <b>'.$stock_out.'</b></td>	
                        </tr>
                       </tbody>
					   </table>
						
                       ';  
		}	
  $content .= '
	<p style="text-align:left; font-size:10px;">'.$name.'</p>  
						 <img src="uploads/approval.jpg"> 
   ';  		
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('Payment report by month', 'I');
	
?>