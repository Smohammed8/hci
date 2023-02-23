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
                 		     $current_user = $this->session->userdata('admin_id'); 
	                         $sql = mysql_query("SELECT * FROM `link_tbl` where user_id ='$current_user'");
                             while($row3 = mysql_fetch_array($sql)){
                             $region    = $row3["region"]; 
						     $zone      = $row3["zone"]; 
							 $woreda    = $row3["woreda"]; 
							 }
			?>
<?php						
                        $res = mysql_query("SELECT agreemenrt_type from  parent  where woreda_id='$woreda' and section_id='$zone' and class_id='$region'") or die(mysql_error());
                         while($row22=mysql_fetch_array($res)){
                             $gre= $row22['agreemenrt_type'];
						 }
                            ?>
						   
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
	$class_id  = trim($_POST["class_id"]);
	$section_id  =trim($_POST["section_id"]);
	$woreda_id  =trim($_POST["woreda_id"]);

    $yyyy1    = $_POST["year1"];
	$mm1      = $_POST["mm1"];
	$dd1      = $_POST["dd1"];

    $yyyy2     = $_POST["year2"];
	$mm2       = $_POST["mm2"];
	$dd2       = $_POST["dd2"];
   $from = trim($yyyy1."-".$mm1."-".$dd1);
   $to  =  trim($yyyy2."-".$mm2."-".$dd2);
   $fro =   ($dd1."/".$mm1."/".$yyyy1);
   $too =   ($dd2."/".$mm2."/".$yyyy2);
   
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
		<div  class="panel-heading" style="background-color:;width:100%">

			<div  class="panel-title">
            	<img src="uploads/report_headercustomed.JPG"  height="130" width="100%">
						
				</div>

			</div>
			
</center>
        </div>
    </div>
</div>

<span style="margin-left:30px;font-size:16px;"><b>Facility Name:</b>&nbsp;&nbsp; &nbsp; <u><?php echo get_phrase('jimma_medical_center');?></u><span>&nbsp;&nbsp;
<span><b>Report per :</b> &nbsp;Time Interval &nbsp;&nbsp;  
<span><b><?php echo get_phrase('district/organization');?>:</b>&nbsp;&nbsp; &nbsp; <u><?php echo $this->crud_model->get_woreda_name_by_id($woreda_id,$section_id);?></u>&nbsp;&nbsp;&nbsp;<b>Agreement:</b>&nbsp;&nbsp;<u><?php echo $gre;?></u>&nbsp;&nbsp;&nbsp;&nbsp;<b>Range:</b>  From <u><?php echo $fro; ?></u> &nbsp;to&nbsp;<u><?php echo $too;?></u>&nbsp;E.C </span><br>

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
                   $sql="SELECT * from treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE) and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1){
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                      $this->session->set_flashdata('flash_message' , get_phrase('not_report_found!'));
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
								   
								    <?php   $sql2 = mysql_query("update treatment set total =$subtotal  where Date_of_service BETWEEN '$from' and  '$to' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'"); ?>
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
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
			}
				
    	?>
               
			   
			    <?php 	$am = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
			      <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($card2,2); ?></u> </b> </td>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
				$lab2  =	$row2['sum(lab)'];
			}
    	?>
          
		   
		   
		    <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($lab2,2); ?></u> </b> </td>
			   
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				
				$Imaging2 = $row3['sum(Imaging)'];
			}
    	?>
          
		  
		  
		  	    <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			    <?php  echo number_format($Imaging2,2); ?></u> </b> </td>

			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
			}
    	?>
           
		  
		  
		  <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			 <?php  echo number_format($surgery2,2); ?></u> </b> </td>
			   

							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
			}
    	?>    
		  <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			 <?php  echo number_format($drugs2,2); ?></u> </b> </td>
			   
				          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2 = $row6['sum(Bed_fee)'];
			}
    	?>	   
		     <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($Bed_fee2,2); ?></u> </b> </td>			   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				$other2 =  $row7['sum(other)'];
			}
    	?>
        
		  
		   <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			  <?php  echo number_format($other2,2); ?></u> </b> </td>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE)  and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No'") or die(mysql_error());
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
					    <?php 	
									$opd1 = mysql_query("SELECT * FROM `treatment`  where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE) and encounter='OPD' and paid='No' and indigent ='K' and region='$region' and  zone='$zone' and woreda='$woreda'");
                                    $opdk = mysql_num_rows($opd1);
									
								    $opd2 = mysql_query("SELECT * FROM `treatment`  where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE) and encounter='OPD' and paid='No' and indigent ='H' and region='$region' and  zone='$zone' and woreda='$woreda'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment`  where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE) and encounter='IPD' and paid='No' and indigent ='K' and region='$region' and  zone='$zone' and woreda='$woreda'");
                                    $ipdk  = mysql_num_rows($ipd1);
									
								    $ipd2 = mysql_query("SELECT * FROM `treatment`  where Date_of_service BETWEEN CAST('$from' AS DATE) and CAST('$to' AS DATE) and encounter='IPD' and paid='No' and indigent ='H' and region='$region' and  zone='$zone' and woreda='$woreda'");
                                    $ipdh = mysql_num_rows($ipd2);
									
								
									?>
									
				
			<br><br>
			<p style="margin-left:100px;"> <?php echo get_phrase('OPD_Utilization-#of_Paying');?>(K)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <u><?php echo $opdk; ?> </u> </p>
			<p style="margin-left:100px;"><?php echo get_phrase('OPD_Utilization_#of_Non_Paying');?>(H)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u> <?php echo $opdh; ?></u> </p>
			<p style="margin-left:300px;"><?php echo get_phrase('IPD_Utilization_#of_Non_Paying')?>(K)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u> <?php echo $ipdk; ?></u> </p>
			<p style="margin-left:300px;"><?php echo get_phrase('IPD_Utilization_#of_Paying');?> (H)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u> <?php echo $ipdh; ?></u> </p>
	<p style="margin-left:1000px;">____________________</p>
	<p style="margin-left:1000px;"><?php echo $name;?></p> 		   			
                              
                </div>
					
		
	<br><br><br><br>  
		                               
</body>


<script>
function myFunction() {
  window.print();
}
</script>
</html>
