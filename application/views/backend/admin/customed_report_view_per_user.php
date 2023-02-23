<!-- application/views/mypdf.php --------------------------------------------->
<!DOCTYPE html>

<html>

<head>

	<title> </title>


<style>
p#head{
font-size:25px;
font-weight:bold;	
	
}
tr.header-tr{
	
	style="border:1px solid black;width:100% !important;
	
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  font-size:12px;
  display: table;
 border-spacing: 2px;
}

th, td {
  text-align: left;
  padding: 3px;
   border: 1px solid black;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
#total{
	text-decoration:underline;
	text-decoration-style:double;
	
}
</style>

<style type = "text/css">
@page{
  size: A4 landscape;
  
  margin: 1cm;
}
@page :first {
  margin: 2cm;

}
@page {
    margin-top: 2cm;
    margin-bottom: 2cm;
    margin-left: 2cm;
    margin-right: 2cm;
	@page { size:8.5in 11in; margin: 2cm }
}


@page {
    margin-top: 22mm;
    margin-bottom: 2mm;
    margin-left: 10mm;
    margin-right: 2mm;

  size: A4 landscape;
    max-height:100%;
	max-width:100%
}
}


</style>

<style>
body {

 
 background: white;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}

</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style>
div.b128{
 border-left: 1px black solid;
 height: 30px;
} 
</style>

</head>
<?php 
function format($value) {
	if ($value > 1) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}

?>
 
<p style="align:left;"><button onclick="myFunction()">Print out</button></p>
<body>
<?php
   if(isset($_POST['search'])){ 


       $user  =trim($_POST["user"]);
	

    $yyyy1    = $_POST["year1"];
	$mm1      = $_POST["mm1"];
	$dd1      = $_POST["dd1"];

    $yyyy2     = $_POST["year2"];
	$mm2       = $_POST["mm2"];
	$dd2       = $_POST["dd2"];

   $fro =   ($dd1."/".$mm1."/".$yyyy1);
   $too =   ($dd2."/".$mm2."/".$yyyy2);

	
	    
		 $from = ($yyyy1."-".$mm1."-".$dd1);
	     $to  =  ($yyyy2."-".$mm2."-".$dd2);
		 
	if($yyyy1 > $yyyy2){
			echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;Invalid year selection!</div>';
	         $this->session->set_flashdata('flash_message' , get_phrase('invalid_year_selection!!'));
		    redirect(base_url() . 'index.php?admin/customed_report/', 'refresh');
                           	
		}
	if(($yyyy1 == $yyyy2) and ($mm1 >$mm2)){
			echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;invalid_year_and_month_selection!</div>';
	         $this->session->set_flashdata('flash_message' , get_phrase('invalid_year_and_month_selection!!'));
		    redirect(base_url() . 'index.php?admin/customed_report/', 'refresh');
                           	
		}	
		
if(($yyyy1 == $yyyy2) and ($mm1 == $mm2) and ($dd1 >=$dd2)){
			echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;invalid_year_and_month_and_date_selection!</div>';
	         $this->session->set_flashdata('flash_message' , get_phrase('invalid_year_and_month_and_date_selection!'));
		    redirect(base_url() . 'index.php?admin/customed_report/', 'refresh');
                           	
		}
		 
	?>

 <div class="row">
	<div class="col-md-5">
		<div class="panel panel-primary" data-collapsed="0">
       
		<center>				  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="width:100%">

			<div  class="panel-title">
            	<img src="uploads/report_headercustomed.JPG"  height="130" width="100%">
						
				</div>

			</div>
			
</center>
        </div>
    </div>
</div>
     <?php
            
       
	   
						  $sql =mysql_query("SELECT name FROM `admin` where admin_id='$user'") or die(mysql_error());
                           $row = mysql_fetch_array($sql);
                           $user_name = $row['name']; 
			                
					   ?>
<span style="margin-left:30px;font-size:16px;"><b>Facility Name:</b>&nbsp;&nbsp; &nbsp; <u><?php echo get_phrase('jimma_medical_center');?></u><span>&nbsp;&nbsp;
<span><b><?php echo get_phrase('report');?>:</b>&nbsp;&nbsp; &nbsp; <u><?php echo 'Per user';?> </u></span>&nbsp;&nbsp;
<span>&nbsp;&nbsp;&nbsp;&nbsp;<b>Date Range:</b>  From <u><?php echo $fro; ?></u> &nbsp;to&nbsp;<u><?php echo $too;?></u>&nbsp;E.C &nbsp;&nbsp;<b>User</b>&nbsp;&nbsp: <u> <?php echo $user_name;?> </u></span><br>

         <div class="" style="overflow-y:auto;" class="page" data-size="A4">
		 
		 
					
							
                   
                             <table class="hoverTable" id="tblData" style="border:1px solid black;width:100% !important;">	
							   
							   
							       <thead class="print">
                           <tr class="header-tr" bgcolor="" >
					
							       
								   <td  style="font-size:14px;"  colspan="11"><b><?php echo get_phrase('patient encounter status');?></b></td>
								  
							
                               
							       <td   style="font-size:14px;" colspan="9"><b><?php echo get_phrase('payment information by servics type');?></b></td> 
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead  id="tblData">
                        <tr class="header-tr" bgcolor="#C0C0C0" style="" height="30px;">
					    
			          
					  <th><div>#</div></th	>
						<th><div><?php echo get_phrase('CN');?></div></th	>
                       <th><div><?php echo get_phrase('CBHI Code');?></div></th>
						  <th><div><?php echo get_phrase('name');?></div></th>
						  
                            <th><div><?php echo get_phrase('region');?></div></th>
							<th><div><?php echo get_phrase('zone');?></div></th>
							
						    <th><div><?php echo get_phrase('age');?></div></th>
							 <th><div><?php echo get_phrase('sex');?></div></th>
							 <th><div><?php echo get_phrase('date');?></div></th>
							<th><div><?php echo get_phrase('service');?></div></th>
							<th><div><?php echo get_phrase('diagnosis');?> </div></th>
							<th style=""><div><?php echo get_phrase('card');?></div></th>
							<th style=""><div><?php echo get_phrase('lab');?> </div></th>
							<th style=""><div><?php echo get_phrase('imaging');?></div></th>
							<th style=""><div><?php echo get_phrase('procedure');?></div></th>
							<th style=""><div><?php echo get_phrase('drug');?></div></th>
							<th style=""><div><?php echo get_phrase('bed');?></div></th>
						    <th style=""><div><?php echo get_phrase('other');?></div></th>
						    <th style=""><div>#<?php echo get_phrase('Subtotal');?></div></th>
							<th style=""><div><?php echo get_phrase('remark');?></div></th>
							 
                           
                        </tr>
                    </thead>
                    <tbody>
					
				
					
			<?php

               

	    //where month='$mm ' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'
					$count = 1;
                   $sql="SELECT * from treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user='$user'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1){
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;This user has no any registration on this time interval!</div>';
	                      $this->session->set_flashdata('flash_message' , get_phrase('this_user_has_no_any_registration_on_this_time_interval'));
						  redirect(base_url() . 'index.php?admin/customed_report/', 'refresh');
                              }
							  
	
								  
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id'];
                            ?>
								
				<?php 
					  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	  while($row=mysql_fetch_array($sq)){
			          $name=$row['name'];  
					   $age=$row['age']; 
					   $sex=$row['sex']; 
	
					   } 
					 ?>	
                        <tr id="tblData">		
                               <td><?php echo $count++; ?></td>						
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								 <td><?php echo $name;?></td>
								
								 <td><?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?></td>
								 <td>
								 <?php echo $this->crud_model->get_section_name_by_id($section_id,$class_id);?>
								</td>							 
						      <?php $dig  = $row2['diagniss']; ?>
								<td><?php echo $row2['age'];?>
								<td><?php echo $sex;?> </td>
								
							    <td><?php echo $row2['Date_of_service'];?> </td>
								
						           <td><?php echo $row2['encounter'];?> </td>
								   <?php if($dig ==''){ ?>
								    <td><?php echo '-'; ?></td>
									<?php
								   }else{ ?>
									 <td><?php echo $row2['diagniss'];?> </td>  
								 <?php  }
								   ?>		   
							       <td style="text-align: right;" width=""><?php echo $row2['card'];?></td>
							       <td style="text-align: right;" width=""><?php echo $row2['lab'];?></td>
								   <td style="text-align: right;" width=""><?php echo $row2['Imaging'];?></td>
	    						   <td style="text-align: right;" width=""><?php echo $row2['surgery'];?></td>
							       <td style="text-align: right;" width=""><?php echo $row2['drugs'];?></td>
								   <td style="text-align: right;" width=""><?php echo $row2['Bed_fee'];?></td>
								   <td style="text-align: right;" width=""><?php echo $row2['other'];?></td>
								   
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = mysql_query("update treatment set total =$subtotal  where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE) and user='$user'"); ?>
								     <?php 	$fmt2 = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
								     <td width="7%" style="text-align: right;"><b><u>
									 
									   <?php  echo number_format($subtotal,2); ?></u></b> </td>
								   
								   
								        <?php if($row2['remark']==''){ ?>
											
								         <td><?php echo '-';?></td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                     
                        </tr>
						
                   <?php }?>
			
				
				  
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
		<td  colspan="11" style="text-align:right;"><b>#<?php echo get_phrase('subtotal_amount(in ETB)');?>:</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user='$user'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
			}
				
    	?>
               
			   
			    <?php 	$am = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
			      <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($card2,2); ?></u> </b> </td>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user='$user'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
				$lab2  =	$row2['sum(lab)'];
			}
    	?>
          
		   
		   
		    <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($lab2,2); ?></u> </b> </td>
			   
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user ='$user'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				
				$Imaging2 = $row3['sum(Imaging)'];
			}
    	?>
          
		  
		  
		  	    <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			    <?php  echo number_format($Imaging2,2); ?></u> </b> </td>

			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user ='$user'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
			}
    	?>
           
		  
		  
		  <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			 <?php  echo number_format($surgery2,2); ?></u> </b> </td>
			   

							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user ='$user'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
			}
    	?>    
		  <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			 <?php  echo number_format($drugs2,2); ?></u> </b> </td>
			   
				          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user ='$user'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2 = $row6['sum(Bed_fee)'];
			}
    	?>	   
		     <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($Bed_fee2,2); ?></u> </b> </td>			   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user ='$user'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				$other2 =  $row7['sum(other)'];
			}
    	?>
        
		  
		   <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			  <?php  echo number_format($other2,2); ?></u> </b> </td>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and user ='$user'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				$total2 =  $row7['sum(total)'];
			}
    	?>
           
		   <?php    $grandtotal2 = $card2 +$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		
		   <td style="background-color:gray;text-align: right;" > <b>
			 <u>
			   <?php  echo number_format($grandtotal2,2); ?></u> </b> </td> 

			   
    	      <?php 
		        }
               ?>
						</tr>
							    
                             </tfoot>							
                    </tbody>
					
                </table>
				 
				     <?php
            $current_user = $this->session->userdata('admin_id');
       
	   
						  $s="SELECT name FROM `admin` where admin_id='$current_user'";
                          $ress = mysql_query($s) or die(mysql_error());
                           $rows = mysql_fetch_array($ress);
                           $name = $rows['name']; 
			                
					   ?>
				
			<br><br>
	<p style="margin-left:1000px;">____________________</p>
	<p style="margin-left:1000px;"><?php echo $name;?></p> 		   			
                              
                </div>
				
		
	
	
				
		
	<br><br><br><br>
	<?php 		$fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY);?>
			
		
				
		  
		                          
		                                <?php 
								$md= mysql_query("SELECT * FROM treatment where reason='Medical service'");
                                    $medical = mysql_num_rows($md);
								$stock = mysql_query("SELECT * FROM treatment where reason='Drug stock-out'");
                                    $stock_out = mysql_num_rows($stock);
									
									
				                   $ip= mysql_query("SELECT * FROM treatment where encounter='IPD'");
                                    $ipd = mysql_num_rows($ip);
									
	                                 $op= mysql_query("SELECT * FROM treatment where encounter='OPD'");
                                    $opd = mysql_num_rows($op);
									
	                                 $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M' and encounter='OPD'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F' and encounter='OPD'");
                                    $vfemale = mysql_num_rows($sfemale);
									
									?>
									<?php 	$tf=mysql_query("SELECT * FROM patients where sex='M' and agreement='CB Health Insurance'");
                                    $m = mysql_num_rows($tf);
                                         
   
                                 	$tm=mysql_query("SELECT * FROM  patients where sex='F' and agreement='CB Health Insurance'");
									
                                    $f = mysql_num_rows($tm);
									?>
									<p style="font-size:16px;font-weight:bod;">Key Performance Indicators</p>
										<div style="margin-left: 5%">

		
	</div>
		             <table class="" style="width:100%;font-size:15px;">
                	<thead>
                		    <tr class="" bgcolor="gray">
                    		
                    		<th style="width:10%;writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Health_Facility_Name');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Type_of_Facility');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Catchment_Population');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('OPD_Utilization-#of_Paying');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('IPD_Utilization_#of-Paying');?></div></th>
							
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total_#of_visits_all_patients(HMIS)-Male');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_visits_all_patients (HMIS)-Female');?></div></th>
							
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_visits_CBHI_clients-Male');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_visits_CBHI_clients-Female');?></div></th>
							
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_OPD_claims');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_IPD_claims');?></div></th>
							
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_card');?></div></th>			
						    <th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_lab');?></div></th>
							
							 <th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_surgery');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_imaging');?></div></th>
						   <th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_drugs & SS');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_bed_day');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed-other');?></div></th>
							
							
							
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total_amount_claimed');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Patients_referred_for_medical_services');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Patients_referred_due_to_drug_stock-out');?></div></th>
							
							
						</tr>
					</thead>
                    <tbody>
					
                      <?php  $fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY);?>
	 
                    	<?php 
						//$count = 1;
						//$current_user =  $this->session->userdata('admin_id');
       
                        $notices = $this->db->get_where('facility')->result_array();
						foreach($notices as $row):?>
                        <tr>
                           <!-- <td><?php// echo $count++;?></td> -->
						   	<td><b><?php echo $row['name'];?></b></td>
							<td><b><?php echo $row['type'];?></b></td>
							<td><b><?php echo format($row['cachement']);?></b></td>
							<td><b><?php echo '-';?></b></td>	
						    <td><b><?php echo '-';?></b></td>
							<td><b><?php echo $vmale;?></b></td>
							<td><b><?php echo $vfemale;?></b></td>
							<td><b><?php echo $m;?></b></td>
							<td><b><?php echo $f;?></b></td>
							<td><b><?php echo $opd;?></b></td>
						    <td><b><?php echo $ipd;?></b></td>
										
							<td><b><?php  echo  number_format($card2,2); ?></b></td>
							<td><b><?php  echo  number_format($lab2,2); ?></b></td>
							<td><b><?php  echo  number_format($Imaging2,2); ?></b></td>	
						    <td><b><?php  echo  number_format($surgery2,2); ?></b></td>
							<td><b><?php  echo  number_format($drugs2,2); ?></b></td>
							<td><b><?php  echo  number_format($Bed_fee2,2); ?></b></td>
							<td><b><?php  echo  number_format($other2,2); ?></b></td>
						    <td><b><?php  echo  number_format($grandtotal2,2); ?></b></td>	
						    <td><b><?php echo $medical;?></b></td>
							<td><b><?php echo $stock_out;?></b></td>
							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
 
<br><br><br><br>
</body>


<script>
function myFunction() {
  window.print();
}
</script>
<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>




</html>
