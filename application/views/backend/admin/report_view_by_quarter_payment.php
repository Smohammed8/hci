<!-- application/views/mypdf.php --------------------------------------------->
<!DOCTYPE html>

<html>

<head>

	<title></title>


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
p {
  page-break-inside: avoid;
}

      h1 { page-break-before : right }
      h2 { page-break-after : avoid }
   
</style>

</head>
<?php 
$Today = date('y:m:d');
$new =date('l, F d, Y',strtotime($Today)); 
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
 <?php
 
    set_time_limit(60); // 60 seconds (1 minutes)
    ini_set('pcre.backtrack_limit', '10000000');
    ini_set('memory_limit', '4060M');
	?>

<body>
<?php
   if(isset($_POST['search'])){ 
	$class_id    = $_POST["class_id"];
	$section_id  = $_POST["section_id"];
	$woreda_id   = $_POST["woreda_id"];
	$qt          = $_POST["qt"];
	$remaining   = $_POST["remaining"];
	$yyyy        = $_POST["year"];
	
	$backyear    = $yyyy-1;   
    $mm1=11; $dd1=1; $mm2=1; $dd2=30;
    $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
    $fyear = trim($yyyy.'-'.$mm2.'-'.$dd2);
	
	?>
	
<script>
function myFunction() {
  window.print();
}
</script>
    <form action="<?php echo base_url(); ?>index.php?admin/verfiy_payment/byquarter" method="post">
		            <div class="form-group" style="">		


						 <input type="hidden" name="class_id" class="form-control"    value="<?php echo $class_id;?>"/> 
						 <input type="hidden" name="section_id" class="form-control"  value="<?php echo $section_id;?>"/> 
						 <input type="hidden" name="woreda_id" class="form-control"   value="<?php echo $woreda_id;?>"/> 
						 <input type="hidden" name="qt" class="form-control"          value="<?php echo $qt;?>"/> 
						 <input type="hidden" name="year" class="form-control"        value="<?php echo $yyyy;?>"/> 
						 <input type="hidden" name="remaining" class="form-control"   value="<?php echo $remaining;?>"/> 	
		                  <input type="hidden" name="byear" class="form-control"      value="<?php echo  $byear;?>"/> 
		                  <input type="hidden" name="fyear" class="form-control"      value="<?php echo  $fyear;?>"/> 
						<div class="col-sm-offset-3 col-sm-5">
							<button type ="submit" style="font-weight:bold;" name="" class="btn btn-primary pull-right"> 
					<i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('verify_payment');?></button>					 				

						</div>
						
					</div>
					 
				</form>
				 <button onclick="myFunction()">Print</button>
				
            </div>
			</form>
<!-- <button onclick="exportTableToExcel('tblData', 'members-data')">ExportTo Excel </button> --->

<br><br>
 <div class="row">
	<div class="col-md-5">
		<div class="panel panel-primary" data-collapsed="0">
       
		<center>				  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:;width:100%">

			<div  class="panel-title">
            	<img src="uploads/report_header2.JPG"  height="110" width="100%">
						
				</div>

			</div>
			
</center>
        </div>
    </div>
</div>
<span style="margin-left:50px"><b>Facility:</b>&nbsp;&nbsp; &nbsp; <u><?php echo get_phrase('jimma_medical_center');?></u><span>&nbsp;&nbsp;
<span><b>Request for:</b> &nbsp;&nbsp; &nbsp; <u>Quarter-<?php echo $qt ;?></u></span>&nbsp;&nbsp;
<span><b><?php echo get_phrase('year');?>:</b>&nbsp;&nbsp; &nbsp; <u> <?php echo $yyyy-1;?>/<?php echo $yyyy;?> E.C</u></span>&nbsp;&nbsp;
<span><b><?php echo get_phrase('district/organization');?>:</b>&nbsp;&nbsp; &nbsp; <u><?php echo $this->crud_model->get_woreda_name_by_id($woreda_id,$section_id);?></u>&nbsp;&nbsp;&nbsp;&nbsp;Print Date: <u><?php echo $new;?></u></span><br>

         <div class="" style="overflow-x:auto;">
					
		
					
                              <center> <table class="hoverTable" id="tblData" style="border:1px solid black;width:100% !important;">		   
							   
						   <thead>
                           <tr class="header-tr" bgcolor="" >
					
							       
								   <td  style="font-size:14px;" colspan="11"><b><?php echo get_phrase('patient encounter status');?></b></td>
								  
							
                               
							       <td  style="font-size:14px;" colspan="9"><b><?php echo get_phrase('payment information by servics type');?></b></td> 
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="#C0C0C0" style="" height="30px;">
					    
			          <th><div>#</div></th	>
						<th><div><?php echo get_phrase('CN');?>:</div></th	>
                       <th><div><?php echo get_phrase('CBHI Code');?>:</div></th>
						  <th><div><?php echo get_phrase('full name');?>:</div></th>
						  
                            <th><div><?php echo get_phrase('region');?>:</div></th>
							<th><div><?php echo get_phrase('zone');?>:</div></th>
					
							<!--<th><div><?php //echo get_phrase('kebele');?>:</div></th>-->
						    <th><div><?php echo get_phrase('age');?>:</div></th>
							 <th><div><?php echo get_phrase('sex');?>:</div></th>
							 
							<th><div><?php echo get_phrase('date');?>:</div></th>
							
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
           
             if($qt =='1')
		       $sql="select * from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'";  
		 		   
		     if($qt =='2')
	           $sql="select * from treatment where  month in(2,3,4) and region ='$class_id' and  zone='$section_id' and  paid='No' and woreda='$woreda_id' and  year ='$yyyy'";  
			     
			 if($qt =='3')
	           $sql="select * from treatment where month  in(5,6,7)and region ='$class_id' and  zone='$section_id' and  paid='No' and woreda='$woreda_id' and year ='$yyyy'"; 
			     
		     if($qt =='4')
               $sql="select * from treatment where month  in(8,9,10) and region ='$class_id' and  zone='$section_id' and  paid='No' and woreda='$woreda_id' and year='$yyyy'";  
			  
					   $count = 1;
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                       $this->session->set_flashdata('flash_message' , get_phrase('No report found associated with those information!'));
						  redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh');
                              }
                         while($row28=mysql_fetch_array($result)){
                             $mrn_id= $row28['mrn_id'];
                            ?>
								
				<?php 
					  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	  while($row=mysql_fetch_array($sq)){
			          $name=$row['name'];  
					  $agreement = $row['agreement']; 
					  $age=$row['age'];
					  $sex= $row['sex'];
					  $class_id =$row['class_id'];
					  $section_id = $row['section_id'];
					  $woreda_id = $row['woreda_id'];
					//  $kebele = $row['kebele'];
					   } 
					 ?>	
                        <tr>		
                               <td><?php echo $count++; ?></td>						
							   <td><?php echo $row28['mrn_id'];?></td>
							    <td><?php echo $row28['CBHI_code'];?></td>
								<?php  $agre = $row28['agreement']; ?>
								 <td><?php echo $name;?></td>						
								 <td><?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?></td>					 
								 <td><?php echo $this->crud_model->get_section_name_by_id($section_id,$class_id);?></td>
								
	
								 
							<!--	<td><?php //echo $kebele;?> </td>-->
								<td><?php echo $age;?> </td>
								<td><?php echo $sex;?> </td>
								
							    <td><?php echo $row28['Date_of_service'];?> </td>
								
						        <td><?php echo $row28['encounter'];?> </td>
							   
								   
								        <?php $dig  = $row28['diagniss']; ?>
								   
								      <?php if($dig ==''){ ?>
								    <td><?php echo '-'; ?></td>
									<?php
								   }else{ ?>
									 <td><?php echo $row28['diagniss'];?> </td>  
								 <?php  }
								   ?>
								   
							       <td style="text-align:right;" width=""><?php echo number_format($row28['card'],2); ?></td>
							       <td style="text-align:right;" width=""><?php echo number_format($row28['lab'],2); ?></td>
								   <td style="text-align:right;" width=""><?php echo number_format($row28['Imaging'],2); ?></td>
	    						   <td style="text-align:right;" width=""><?php echo number_format($row28['surgery'],2); ?></td>
							       <td style="text-align:right;" width=""><?php echo number_format($row28['drugs'],2); ?></td>
								   <td style="text-align:right;" width=""><?php echo number_format($row28['Bed_fee'],2); ?></td>
								   <td style="text-align:right;" width=""><?php echo number_format($row28['other'],2); ?></td>
							          <?php $encounter_id  = $row28['encounter_id'];?>
								   
								     <?php $subtotal = $row28['card']+ $row28['lab']+$row28['Imaging']+$row28['surgery']+$row28['drugs']+$row28['Bed_fee']+$row28['other'];?>
								   
								  
								   <?php
								  
							  if($qt =='1')
		                        $sql3 = mysql_query("update treatment set total =$subtotal where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());   
							      
		                      if($qt =='2')
	                            $sql4= mysql_query("update treatment set total =$subtotal  where month='2' or month='3' or month='4'  and paid='No' and region='$class_id' and   zone='$section_id' and  woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());  
							  
			                  if($qt =='3')
	                             $sq5= mysql_query("update treatment set total =$subtotal where month='5' or month='6' or month='7' and  paid='No' and region='$class_id' and   zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error()); 
							          
		                      if($qt =='4')
                                $sql6= mysql_query("update treatment set total =$subtotal where month='8' or month='9' or month='10' and paid='No' and region='$class_id' and  zone='$section_id' and  woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());   
							        if(($sql3==false) and ($sql4 ==false) and ($sq5==false)and($sql6==false)){	
									 $this->session->set_flashdata('flash_message' , get_phrase('not_sub_total_amount_updated'));
						             redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh');								
							      		}   
								   ?>
			            
			  
								     <td width="7%" style="text-align: right;"><b><u>
										 <?php echo number_format($subtotal,2); ?>
									 
							 </u></b> </td>
									 
									
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
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
			if($qt =='1')
		      $result1 = mysql_query("SELECT sum(card) FROM treatment  where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result1 = mysql_query("SELECT sum(card) FROM treatment where month in(2,3,4) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			     
			if($qt =='3')
	          $result1 = mysql_query("SELECT sum(card) FROM treatment  where month in(5,6,7) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt =='4')
               $result1 = mysql_query(" SELECT sum(card) FROM treatment where month in(8,9,10) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			   
    		
			while($row11 = mysql_fetch_array($result1)) {
				  $card11 = $row11['sum(card)'];
			}		
    	?>		   
		      <td style="text-align: right;" > <b> <u>
			
		       <?php echo number_format($card11,2); ?></u> </b> 
		 <?php
		 
		 	if($qt ==1)
		     $result2 = mysql_query("SELECT sum(lab) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and  region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result2 = mysql_query("SELECT sum(lab) FROM treatment  where month in(2,3,4) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			     
			if($qt ==3)
	         $result2 = mysql_query("SELECT  sum(lab) FROM treatment  where month in(5,6,7) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result2 = mysql_query("SELECT sum(lab) FROM treatment  where month in(8,9,10) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			   
    		while ($row22 = mysql_fetch_array($result2)) { 
				$lab22  =	$row22['sum(lab)'];
			}
    	     ?>
		      <td style="text-align: right;" > <b> <u>
			
		       <?php echo number_format($lab22,2); ?></u> </b> 
			 <?php
			 
			 if($qt ==1)
		     $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  month in(2,3,4) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			     
			if($qt ==3)
	         $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where   month in(5,6,7) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  month in(8,9,10) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			   
			   
    	
    		while ($row33 = mysql_fetch_array($result3)) {
				$Imaging33 = $row33['sum(Imaging)'];
				}
    	?>
          
		      <td style="text-align: right;" > <b> <u>
			
		       <?php echo number_format($Imaging33,2); ?></u> </b> 
		   
    
			 <?php
			 
			 
			if($qt ==1)
		     $result4 = mysql_query("SELECT sum(surgery) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result4 = mysql_query("SELECT sum(surgery) FROM treatment  where month in(2,3,4) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result4 = mysql_query("SELECT sum(surgery) FROM treatment   where month in(5,6,7) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result4 = mysql_query("SELECT sum(surgery) FROM treatment  where month in(8,9,10) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			    
    		
    		while ($row44 = mysql_fetch_array($result4)) {
				   $surgery44 = $row44['sum(surgery)'];
			    }
    	         ?>
		      <td style="text-align: right;" > <b> <u>
			
		      <?php echo number_format($surgery44,2); ?></u> </b> 

							         
			 <?php  
			if($qt ==1)
		     $result5 = mysql_query("SELECT sum(drugs) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result5 = mysql_query("SELECT sum(drugs) FROM treatment where month in(2,3,4)  and paid='No' and  region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result5 = mysql_query("SELECT sum(drugs) FROM treatment  where month in(5,6,7)  and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result5 = mysql_query("SELECT sum(drugs) FROM treatment where month in(8,9,10) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			   
    		while ($row55 = mysql_fetch_array($result5)) {
				$drugs55 = $row55['sum(drugs)'];
			}
    	?>
		      <td style="text-align: right;" > <b> <u>
			
		      <?php echo number_format($drugs55,2); ?></u> </b> 
			   
		  				          
					 <?php
					 
		    if($qt ==1)
		     $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month in (2,3,4)  and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month  in (5,6,7)  and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month in (8,9,10) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			    
    		while($row66 = mysql_fetch_array($result6)) {
				$Bed_fee66 = $row66['sum(Bed_fee)'];
			}
              	?>
         
		      <td style="text-align: right;" > <b> <u>
			
		       <?php echo number_format($Bed_fee66,2); ?></u> </b> 
			   					 
			 <?php
			 if($qt ==1)
		     $result7 = mysql_query("SELECT sum(other) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result7 = mysql_query("SELECT sum(other) FROM treatment where month in (2,3,4) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result7 = mysql_query("SELECT sum(other) FROM treatment where month in (5,6,7) and  paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result7 = mysql_query("SELECT sum(other) FROM treatment where month in (8,9,10) and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy'") or die(mysql_error()); 
			 
    		while ($row77 = mysql_fetch_array($result7)) {
				$other77 =  $row77['sum(other)'];
			}
    	?>
          
		      <td style="text-align: right;" > <b> <u>
			
		       <?php echo number_format($other77,2); ?></u> </b> </td>
		

		
		                    
			 <?php 
			if($qt ==1)
		    
		     $result8 = mysql_query("SELECT sum(total) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
			
		    if($qt ==2)
			     
	          $result8 = mysql_query("SELECT sum(total) FROM treatment where (month='2' or month='3' or month='4') and  (paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy')") or die(mysql_error());  
			
			if($qt ==3)	 
	        $result8 = mysql_query("SELECT sum(total) FROM treatment where (month='5' or month='6' or month='7') and  (paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy')") or die(mysql_error());
			
		    if($qt ==4)
				 		
             $result8 = mysql_query("SELECT sum(total) FROM treatment where (month='8' or month='9' or month='10') and  (paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  year='$yyyy')") or die(mysql_error()); 
			
    		 while ($row82 = mysql_fetch_array($result8)) {
				$totalx =  $row82['sum(total)'];
			}
              $gtotal2= ($card11+$lab22+$Imaging33+$surgery44+$drugs55+$Bed_fee66+$other77);
	     	?>
		    <td style="background-color:pink;text-align: right;" > <b> <u>
		<?php echo number_format($gtotal2,2); ?></u> </b> </td>				         
			</tr>
				<?php }?>			    
             </tfoot>							
                    </tbody>
                </table>
				   </center>
				     <?php
                          $current_user = $this->session->userdata('admin_id');
						  $s="SELECT name FROM `admin` where admin_id='$current_user'";
                          $ress = mysql_query($s) or die(mysql_error());
                           $rows = mysql_fetch_array($ress);
                           $name = $rows['name'];    
					   ?>
					   <br>
					<div style="margin-left:900px;"><u><span>_________________</span></u>

	<p style="align:right"><?php echo $name;?></p> </div>			   			
                              
                </div>
<br><br><br><br>
</body>

</html>
