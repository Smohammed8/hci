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
	$qt          = $_POST["qt"];
	$ag          = $_POST["agreement"];
	$yyyy        = $_POST["yyyy"];
	$org         = $_POST["org"];
	$kebele      = $_POST["kebele"];
	$woreda      = $_POST["woreda"];
	$zone        = $_POST["zone"];
	$region      = $_POST["region"];
    $backyear    = $yyyy-1;   
    $mm1=11; $dd1=1; $mm2=1; $dd2=30;
    $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
    $fyear = trim($yyyy.'-'.$mm2.'-'.$dd2);       		   
   }		                
function generateRow($yyyy ,$qt,$class_id,$section_id,$woreda_id,$ag,$byear,$fyear){
  
		$contents = '';
		
		
		     if($qt ==1)
		       $sql="select * from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'";  
		 		   
		     if($qt ==2)
	           $sql="select * from treatment where month in(2,3,4)  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'";  
			     
			 if($qt ==3)
	           $sql="select * from treatment where month in(5,6,7) and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'"; 
			     
		     if($qt ==4)
               $sql="select * from treatment where month in(8,9,10)  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'";  
			  
					   $i = 1;
                  $result=mysql_query($sql) or die(mysql_error());
                       
					 /*  if(mysql_num_rows($result)<1)
                           {
	             
						  echo'<div style="color:red;font-size:17px;" >
						  <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                             exit;
                              }
			
			         */
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id'];
							 
							  $subtotal = ($row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other']);
                           
                    
					  $sq = mysql_query("select name,agreement,age,sex,class_id,section_id,woreda_id,kebele from patients where mrn_id ='$mrn_id'"); 
				  	  while($row=mysql_fetch_array($sq)){
			          $name2 = ucwords(strtolower($row['name']));  
					  $agreement =$row['agreement']; 
					  $age = $row['age'];
					  $sex = $row['sex'];
					  $class_id =$row['class_id'];
					  $section_id = $row['section_id'];
					  $woreda_id  = $row['woreda_id'];
					  if($row['kebele'] !=''){
						  
					   $kebele  = ucwords(strtolower($row['kebele']));   
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

             if($qt ==1)
		     $sql= mysql_query("update treatment set total  = $subtotal  where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and  agreement ='$ag' and paid='No'  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");  
		   
		     if($qt ==2)
	         $sql= mysql_query("update treatment set total  = $subtotal  where   month in(2,3,4) and   agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'");  
			     
			 if($qt ==3)
	         $sql= mysql_query("update treatment set total  = $subtotal  where   month in(5,6,7) and   agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'"); 
			     
		     if($qt ==4)
             $sql= mysql_query("update treatment set total  = $subtotal  where   month in(8,9,10) and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'");  
							
		 	$contents .= '
			<tr>
			       <td>'.$i++.'.</td>
				   <td style="text-align:left;">'.$row2['mrn_id'].'</td>
				   <td style="text-align:left;">'.$row2['CBHI_code'].'</td>
		           <td style="text-align:left;">'.$name2.'</td>
				   <td style="text-align:left;">'.$kebele.'</td>
				   <td style="text-align:left;">'.$row2['age'].'</td>
				   <td style="text-align:left;">'.$sex.'</td>
				   <td style="text-align:left;">'.$row2['Date_of_service'].'</td>
				   <td style="text-align:left;">'.$row2['encounter'].'</td>
				   <td style="text-align:left;">'.$diagniss.'</td>
				          				   
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
	$pdf= new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
	set_time_limit(600); // 60 seconds (1 minutes)
    ini_set('pcre.backtrack_limit', '10000000');
    ini_set('memory_limit', '4060M');
    $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Payment report by quarter');  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '9', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(true);  
    $pdf->setFontSubsetting(false); 
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
	//$pdf->SetCellPaddings(5,5,5,5); 
   // $pdf->SetCellMargins(5,5,5,5);  	
    $pdf->AddPage();  
    $content = ''; 
    $content .= '

           <img src="uploads/pdfheader.jpg" style="align:left;"> 
      	<h2 align="center"> Quarterly - fully or partailly service charge payment request </h2>
			
		<b>This report is generated on '.$new.'  by  <u>'.$name.'</u> 
		
		
		to declare or request our clients Service charge to be made fully or partailly pay  for Jimma Medical Center</h2>
	
	
	

		<b> Facility :
    <u>Jimma Medical Center</u>
		&nbsp;&nbsp;&nbsp;&nbsp;Request for : <u>Quarter-'.$qt.'</u>   
		&nbsp;&nbsp;&nbsp;&nbsp;Fisical Year : <u>'.$backyear.'/'.$yyyy .'</u>    
		
		&nbsp;&nbsp;&nbsp;&nbsp;Zone : <u>'.$zone.' </u>  
		&nbsp;&nbsp;&nbsp;&nbsp;'.$org.': <u>'.$woreda .'</u>   
		&nbsp;&nbsp;&nbsp;&nbsp;Agreement : <u>'.$ag.'</u> </b><br><br>
      		
		<table border="1" cellspacing="0" cellpadding="1" style="page-break-inside:avoid !important; margin: 4px 0 4px 0;"> 
		
		  
							    
                           <tr class="header-tr" bgcolor="gray"  style="page-break-inside:avoid; page-break-after:auto;">
					
							   
							
									  <td  width="61%" colspan="10"><b> Patient encounter status</b></td>
								  
							         <td  width="39%" colspan="8"><b>Payment information by servics type</b></td>
								    						     
						
								       </tr>
							    
                      
							 
					 		 
                <tr style="background-color:lightblue;">  
			    <th width="3%" align="left"> <b>#</b></th>
                <th width="4%" align="left"><b>MRN</b></th>
				<th width="11%" align="left"><b>Code</b></th> 
				<th width="16%" align="left"><b>Full Name</b></th>
				<th width="8%" align="left"><b>'.$kebele.'</b></th> 
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
	 	
    $content .= generateRow($yyyy ,$qt,$class_id,$section_id,$woreda_id,$ag,$byear,$fyear); 
		 		 
        if($qt ==1)
		   $result1 = mysql_query("select sum(card) from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error()); 		   
	    if($qt ==2)
	        $result1 =mysql_query("select sum(card)  from treatment where month in(2,3,4)   and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==3)
	        $result1 =mysql_query("select sum(card)  from treatment where month in(5,6,7)   and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());      
	    if($qt ==4)
           $result1 = mysql_query("select sum(card)  from treatment where month in(8,9,10)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());      

    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
				} 
	    if($qt ==1)
		   $result2  =mysql_query("select sum(lab) from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error());    		   
	    if($qt ==2)
	        $result2 =mysql_query("select sum(lab)  from treatment where month in(2,3,4)   and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());        
	    if($qt ==3)
	        $result2 =mysql_query("select sum(lab)  from treatment where month in(5,6,7)   and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==4)
           $result2  =mysql_query("select sum(lab)  from treatment where month in(8,9,10)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error()); 
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab2  =	$row2['sum(lab)'];
			} 
	    if($qt ==1)
		   $result3 = mysql_query("select sum(Imaging) from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error());    		   
	    if($qt ==2)
	        $result3 =mysql_query("select sum(Imaging) from treatment where month in(2,3,4)    and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());        
	    if($qt ==3)
	        $result3 =mysql_query("select sum(Imaging) from treatment where month in(5,6,7)    and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==4)
           $result3 = mysql_query("select sum(Imaging) from treatment where  month in(8,9,10)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error()); 	
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging2 = $row3['sum(Imaging)'];
				}
	    if($qt ==1)
		   $result4 = mysql_query("select sum(surgery) from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error());    		   
	    if($qt ==2)
	        $result4 = mysql_query("select sum(surgery) from treatment where month in(2,3,4)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());        
	    if($qt ==3)
	        $result4 = mysql_query("select sum(surgery) from treatment where month in(5,6,7)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==4)
           $result4 = mysql_query("select sum(surgery) from treatment where  month in(8,9,10) and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());  	
	   
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
				}
		if($qt ==1)
		   $result5 = mysql_query("select sum(drugs) from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error());    		   
	    if($qt ==2)
	        $result5 =mysql_query("select sum(drugs) from treatment where  month in(2,3,4)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());        
	    if($qt ==3)
	        $result5 =mysql_query("select sum(drugs) from treatment where  month in(5,6,7) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==4)
           $result5 = mysql_query("select sum(drugs) from treatment where   month in(8,9,10)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());  	
	   
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
				}
		if($qt ==1)
		   $result6  = mysql_query("select sum(Bed_fee) from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error());    		   
	    if($qt ==2)
	        $result6 = mysql_query("select sum(Bed_fee) from treatment where   month in(2,3,4)  and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==3)
	        $result6 = mysql_query("select sum(Bed_fee) from treatment where   month in(5,6,7) and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==4)
           $result6  = mysql_query("select sum(Bed_fee) from treatment where   month in(8,9,10) and  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());  	
	   
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2  = $row6['sum(Bed_fee)'];
				}
		if($qt ==1)
		   $result7  = mysql_query("select  sum(other) from treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$backyear'")  or die(mysql_error());   		   
	    if($qt ==2)
	        $result7 = mysql_query("select sum(other) from treatment where   month in(2,3,4) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==3)
	        $result7 = mysql_query("select sum(other) from treatment where   month in(5,6,7)and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());        
	    if($qt ==4)
           $result7  = mysql_query("select  sum(other) from treatment where  month in(8,9,10)and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());  	
	   								 
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
                            if($qt ==1){
		                            $opd1 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='OPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $opdk = mysql_num_rows($opd1);
								   
								    $opd2 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='OPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='IPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $ipdk  = mysql_num_rows($ipd1);
									
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='IPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $ipdh = mysql_num_rows($ipd2);
										$allipd= $ipdk+$ipdh;
									    $allopd = $opdk+$opdh;
									
								    $tf=mysql_query("SELECT * FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and  sex='M' and paid='No'  and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $m = mysql_num_rows($tf);
                                        
                                 	$tm=mysql_query("SELECT * FROM  treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and sex='F' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $f = mysql_num_rows($tm);
									
									
		                               
								    $md= mysql_query("SELECT * FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and reason='Medical service' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and  reason='Drug stock-out' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $stock_out = mysql_num_rows($stock);
							
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);
									}
								if($qt ==2){
									
								  $opd1 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and  encounter='OPD' and indigent ='K' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdk = mysql_num_rows($opd1);
								    $opd2 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and encounter='OPD' and indigent ='H' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and encounter='IPD' and indigent ='K' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdk  = mysql_num_rows($ipd1);
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and encounter='IPD' and indigent ='H' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdh = mysql_num_rows($ipd2);
										
									$allipd= $ipdk+$ipdh;
									$allopd = $opdk+$opdh;
								    $tf=mysql_query("SELECT * FROM treatment where (month='2' or month='3' or month='4') and sex='M'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $m = mysql_num_rows($tf);
                                        
                                 	$tm=mysql_query("SELECT * FROM  treatment where (month='2' or month='3' or month='4') and sex='F' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $f = mysql_num_rows($tm);
									
									
		                               
								    $md= mysql_query("SELECT * FROM treatment where (month='2' or month='3' or month='4') and reason='Medical service' and paid='No' and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where (month='2' or month='3' or month='4') and reason='Drug stock-out' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $stock_out = mysql_num_rows($stock);
									
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where sex ='F'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);	
								}
								if($qt ==3){
									
								  $opd1 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and encounter='OPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdk = mysql_num_rows($opd1);
								    $opd2 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and encounter='OPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and encounter='IPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdk  = mysql_num_rows($ipd1);
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and  encounter='IPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdh = mysql_num_rows($ipd2);
										$allipd= $ipdk+$ipdh;
									    $allopd = $opdk+$opdh;
									
								    $tf=mysql_query("SELECT * FROM treatment where (month='5' or month='6' or month='7') and sex='M'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $m = mysql_num_rows($tf);
                                 	$tm=mysql_query("SELECT * FROM  treatment where (month='5' or month='6' or month='7') and sex='F' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $f = mysql_num_rows($tm);
									
								    $md= mysql_query("SELECT * FROM treatment where (month='5' or month='6' or month='7') and reason='Medical service' and paid='No' and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where (month='5' or month='6' or month='7') and  reason='Drug stock-out' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $stock_out = mysql_num_rows($stock);
									
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);	
								}
								if($qt ==4){
									
									  $opd1 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' encounter='OPD' and indigent ='K' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdk = mysql_num_rows($opd1);
								    $opd2 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' encounter='OPD' and indigent ='H' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdh = mysql_num_rows($opd2);
						             
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' encounter='IPD' and indigent ='K' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdk  = mysql_num_rows($ipd1);
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' encounter='IPD' and indigent ='H' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdh = mysql_num_rows($ipd2);
										$allipd= $ipdk+$ipdh;
									    $allopd = $opdk+$opdh;
								    $tf=mysql_query("SELECT * FROM treatment where (month='8' or month='9' or month='10' sex='M'  and agreement ='$ag' and region='$class_id' and  paid='No' and zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $m = mysql_num_rows($tf);
                                 	$tm=mysql_query("SELECT * FROM  treatment where (month='8' or month='9' or month='10' sex='F' and agreement ='$ag' and region='$class_id' and  paid='No' and zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $f = mysql_num_rows($tm);
									
								    $md= mysql_query("SELECT * FROM treatment where (month='8' or month='9' or month='10' and reason='Medical service' and paid='No' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where (month='8' or month='9' or month='10' and reason='Drug stock-out' and paid='No' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $stock_out = mysql_num_rows($stock);
									
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);
									
			                      	}
									
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
    $pdf->Output('Payment report by quarter', 'I');
	
?>