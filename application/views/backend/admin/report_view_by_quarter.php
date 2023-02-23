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
<!--
<p style="align:left;"><button onclick="myFunction()">Print out</button></p> -->
<body>
<?php
   if(isset($_POST['search'])){ 
	$class_id    = $_POST["class_id"];
	$section_id  = $_POST["section_id"];
	$woreda_id   = $_POST["woreda_id"];
	$qt          = $_POST["qt"];
	$ag          = $_POST["agreement"];
	$yyyy        = $_POST["yyyy"];
    $backyear    = $yyyy-1;   
   $mm1=11; $dd1=1; $mm2=1; $dd2=30;
   $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
   $fyear = trim($yyyy.'-'.$mm2.'-'.$dd2);
	?>
 	           <form action="<?php echo base_url(); ?>index.php?admin/quarter_report_pdf" method="post"> 
	            <input type="hidden" name="class_id" value="<?php echo $class_id;?>">
				<input type="hidden" name="section_id" value="<?php echo $section_id;?>">
				<input type="hidden" name="woreda_id" value="<?php echo $woreda_id ;?>">
				<input type="hidden" name="qt" value="<?php echo $qt;?>">
				<input type="hidden" name="agreement" value="<?php echo $ag;?>">
				<input type="hidden" name="yyyy" value="<?php echo $yyyy;?>">  
				<?php if($ag=='CB Health Insuranc'){     $org ='Woreda';?>
			     <input type="hidden" name="org" value="Woreda">
				  <input type="hidden" name="kebele" value="Kebele">
				<?php }else{    $org ='Organization';?>				 
                 <input type="hidden" name="org" value="Organization"> 
				 <input type="hidden" name="kebele" value="Address">
				<?php }?>
				 <input type="hidden" name="woreda" value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda_id,$section_id);?>"> 
				 <input type="hidden" name="zone" value="<?php echo $this->crud_model->get_section_name_by_id($section_id,$class_id);?>">   
				 <input type="hidden" name="region" value="<?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?>"> 
				 
			    <div class="col-sm-3">
				<button type="submit" name="print" class="btn btn-primary pull-right"> 
			    <i class="fa fa-print" style="color:white;"></i>PDF</button> <input type="button" onClick="window.print() ;" value="Print" size="20"/>
			     </div>
	</form>
	
 <div class="row">
	<div class="col-md-5">
		<div class="panel panel-primary" data-collapsed="0">
       
		<center>				  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:;width:100%">

			<div  class="panel-title">
            	<img src="uploads/report_header2.JPG"  height="130" width="100%">
						
				</div>

			</div>
			
</center>
        </div>
    </div>
</div>

<span style="margin-left:30px"><b>Facility:</b>&nbsp;&nbsp; &nbsp; <u><?php echo get_phrase('jimma_medical_center');?></u><span>&nbsp;&nbsp;
<span><b>Request for:</b> &nbsp;&nbsp; &nbsp; <u>Quarter-<?php echo $qt ;?></u></span>&nbsp;&nbsp;
<span><b> Fiscal <?php echo get_phrase('year');?>:</b>&nbsp;&nbsp;<u><?php echo $yyyy-1;?>/<?php echo $yyyy;?> E.C</u></span>&nbsp;&nbsp;
<span><b><?php echo $org;?>:</b>&nbsp;&nbsp; &nbsp; <u><?php echo $this->crud_model->get_woreda_name_by_id($woreda_id,$section_id);?></u>&nbsp;&nbsp;&nbsp;<b>Agreement:</b>&nbsp;&nbsp;<u><?php echo $ag ;?></u>&nbsp;&nbsp;&nbsp;&nbsp;</span><br>

         <div class="" style="overflow-y:auto;">
					
		
					
                            <table class="hoverTable" id="tblData" style="border:1px solid black;width:100% !important;">		   
							   
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
			$mm1=11; $dd1=1; $mm2=1; $dd2=30;
			$byear = trim($backyear."-".$mm1."-".$dd1);
			//$byear=2012-11-1;
			$fyear = trim($yyyy."-".$mm2."-".$dd2);
            //$fyear=2013-1-30;
             if($qt ==1) 
		     $sql="select * from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'";     
			 if($qt ==2)
	         $sql="select * from treatment where month in(2,3,4) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$yyyy'";     
			 if($qt ==3)
	           $sql="select * from treatment where month in (5,6,7) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$yyyy'";    
		     if($qt ==4)
              $sql="select * from treatment where month in (8,9,10) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year='$yyyy'";  
			  
					   $count = 1;
                  $result = mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1){
						   echo'<div style="color:red;font-size:17px;" >
						   <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                       $this->session->set_flashdata('flash_message' , get_phrase('not_report_found!'));
						   redirect(base_url() . 'index.php?admin/report_by_quarter/', 'refresh');
                              }
			
			
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id'];
                            ?>
								
				<?php 
					  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	  while($row=mysql_fetch_array($sq)){
			          $name= ucwords(strtolower($row['name'])); 
					  $agreement=$row['agreement']; 
					  $age=$row['age'];
					  $sex= $row['sex'];
					  $class_id =$row['class_id'];
					  $section_id = $row['section_id'];
					  $woreda_id = $row['woreda_id'];
					 // $kebele = $row['kebele'];
					 
				 
					   } 
					 ?>	
                        <tr>		
                               <td><?php echo $count++; ?></td>						
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								 <td><?php echo $name;?></td>
								 <td><?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?></td>
								 <td><?php echo $this->crud_model->get_section_name_by_id($section_id,$class_id);?></td>
								
							    <?php $dig  = $row2['diagniss']; 
								$encounter_id =$row2['encounter_id'];?>
								 
								<td><?php echo $row2['age'];?></td>
								<td><?php echo $sex;?> </td>
								<td><?php echo $row2['Date_of_service'];?> </td>
								 <td><?php echo $row2['encounter'];?> </td>
								 
							  	   <?php if($dig==''){ ?>
								    <td><?php echo '-'; ?></td>
									<?php
								   }else{ ?>
									 <td><?php echo $row2['diagniss'];?> </td>  
								 <?php  }
								   ?>
								  
							       <td style="text-align:right;" width=""><?php echo number_format($row2['card'],2); ?></td>
							       <td style="text-align:right;" width=""><?php echo number_format($row2['lab'],2); ?></td>
								   <td style="text-align:right;" width=""><?php echo number_format($row2['Imaging'],2); ?></td>
	    						   <td style="text-align:right;" width=""><?php echo number_format($row2['surgery'],2); ?></td>
							       <td style="text-align:right;" width=""><?php echo number_format($row2['drugs'],2); ?></td>
								   <td style="text-align:right;" width=""><?php echo number_format($row2['Bed_fee'],2); ?></td>
								   <td style="text-align:right;" width=""><?php echo number_format($row2['other'],2); ?></td>
								   
								   
								     <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								     <td width="7%" style="text-align: right;"><b><u>
									    <?php  echo  number_format($subtotal,2); ?>
									 
							 </u></b> </td>
									 
									
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
			   	$mm1=11; $dd1=1; $mm2=1; $dd2=30;
		        $byear = trim($backyear."-".$mm1."-".$dd1);
			    $fyear = trim($yyyy."-".$mm2."-".$dd2);
	    if($qt ==1)
		   $result1 = mysql_query("select sum(card)  from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'")  or die(mysql_error()); 		   
	    if($qt ==2)
	        $result1 =mysql_query("select sum(card)  from treatment where month in(2,3,4) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());       
	    if($qt ==3)
	        $result1 =mysql_query("select sum(card)  from treatment where month in(5,6,7)  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());      
	    if($qt ==4)
           $result1 = mysql_query("select sum(card)  from treatment where month in(8,9,10) and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'")  or die(mysql_error());      

    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
				} 
    	?>		   
		      <td style="text-align: right;" > <b> <u>
			
		       <?php  echo  number_format($card2,2);?> </u> </b> 
			   
		 <?php
		    	$mm1=11; $dd1=1; $mm2=1; $dd2=30;
		        $byear = trim($backyear."-".$mm1."-".$dd1);
			    $fyear = trim($yyyy."-".$mm2."-".$dd2);
		 	if($qt ==1)
		     $result2 = mysql_query("SELECT sum(lab) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id'") or die(mysql_error());     
		    if($qt ==2)
	          $result2 = mysql_query("SELECT sum(lab) FROM treatment  where month in(2,3,4) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());    
			if($qt ==3)
	         $result2 = mysql_query("SELECT  sum(lab) FROM treatment  where month in(5,6,7) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());   
		    if($qt ==4)
              $result2 = mysql_query("SELECT sum(lab) FROM treatment  where month in (8,9,10) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error()); 
			   
    		while ($row22 = mysql_fetch_array($result2)) {
				$lab2  =	$row22['sum(lab)'];
				}
    	     ?>
           
		      <td style="text-align: right;" > <b> <u> <?php  echo  number_format($lab2,2);?></u> </b> 
			  
			 <?php
			    	$mm1=11; $dd1=1; $mm2=1; $dd2=30;
		            $byear = trim($backyear."-".$mm1."-".$dd1);
			        $fyear = trim($yyyy."-".$mm2."-".$dd2);
			 if($qt ==1)
		     $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  month in(2,3,4) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());  
			     
			if($qt ==3)
	         $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where   month in(5,6,7) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  month in(8,9,10) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error()); 
    		while ($row32 = mysql_fetch_array($result3)) {
				$Imaging2 = $row32['sum(Imaging)'];
				
			}	
    	?> 
		      <td style="text-align: right;" > <b> <u>
			
		      <?php  echo  number_format($Imaging2,2);?></u> </b> 
		   
			 <?php 
			 if($qt ==1)
		     $result4 = mysql_query("SELECT sum(surgery) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id'") or die(mysql_error());     
		    if($qt ==2)
	          $result4 = mysql_query("SELECT sum(surgery) FROM treatment  where  month in(2,3,4)  and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());   
			if($qt ==3)
	         $result4 = mysql_query("SELECT sum(surgery) FROM treatment   where  month in(5,6,7) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());     
		    if($qt ==4)
              $result4 = mysql_query("SELECT sum(surgery) FROM treatment  where  month in(8,9,10) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error()); 
    		while ($row42 = mysql_fetch_array($result4)) {
				$surgery2 = $row42['sum(surgery)'];
			}
    	   ?>
		      <td style="text-align: right;" > <b> <u>
			
		      <?php  echo  number_format($surgery2,2);?></u> </b> 			         
			 <?php
			    	$mm1=11; $dd1=1; $mm2=1; $dd2=30;
		            $byear = trim($backyear."-".$mm1."-".$dd1);
			        $fyear = trim($yyyy."-".$mm2."-".$dd2);
			if($qt ==1)
		     $result5 = mysql_query("SELECT sum(drugs) FROM treatment  where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and  zone='$section_id'  and paid='No' and woreda='$woreda_id'") or die(mysql_error());  
		 	if($qt ==2)
	          $result5 = mysql_query("SELECT sum(drugs) FROM treatment where month in(2,3,4)  and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'  and paid='No' and year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result5 = mysql_query("SELECT sum(drugs) FROM treatment where month in(5,6,7)   and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'  and paid='No' and year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result5 = mysql_query("SELECT sum(drugs) FROM treatment where month in(8,9,10) and agreement ='$ag'  and region='$class_id' and  zone='$section_id'  and paid='No' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error()); 
			   
    		while ($row52 = mysql_fetch_array($result5)) {
				$drugs2 = $row52['sum(drugs)'];
				}
    	         ?>
		      <td style="text-align: right;" > <b> <u>
			
		       <?php  echo  number_format($drugs2,2);?></u> </b> 
			   			          
					 <?php
					$mm1=11; $dd1=1; $mm2=1; $dd2=30;
		            $byear = trim($backyear."-".$mm1."-".$dd1);
			        $fyear = trim($yyyy."-".$mm2."-".$dd2);
		    if($qt ==1)
		     $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment  where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month in(2,3,4) and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where  month in(5,6,7)  and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month in(8,9,10) and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error()); 
			    
    		while ($row62 = mysql_fetch_array($result6)) {
				$Bed_fee2 = $row62['sum(Bed_fee)'];
			}
    	    ?>
		      <td style="text-align: right;" > <b> <u>
			
		        <?php  echo  number_format($Bed_fee2,2);?></u> </b> 
					 
			 <?php
			        $mm1=11; $dd1=1; $mm2=1; $dd2=30;
		            $byear = trim($backyear."-".$mm1."-".$dd1);
			        $fyear = trim($yyyy."-".$mm2."-".$dd2);
			if($qt ==1)
		     $result7 = mysql_query("SELECT sum(other) FROM treatment  where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and agreement ='$ag' and region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id'") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result7 = mysql_query("SELECT sum(other) FROM treatment where month in(2,3,4)  and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());  
			    
			if($qt ==3)
	         $result7 = mysql_query("SELECT sum(other) FROM treatment where month in(5,6,7)  and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error());
			     
		    if($qt ==4)
              $result7 = mysql_query("SELECT sum(other) FROM treatment where  month in(8,9,10) and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and paid='No' and year='$yyyy'") or die(mysql_error()); 
			 
    		while ($row72 = mysql_fetch_array($result7)) {
				$other2 =  $row72['sum(other)'];
			}
    	?>
		      <td style="text-align: right;" > <b> <u><?php  echo  number_format($other2,2);?></u> </b> </td>
		
		<?php $gt = $card2+$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2; 
	
		
		?>
		 
		    <td style="background-color:pink;text-align: right;" > <b> <u><?php  echo  number_format($gt,2);?></u> </b> </td>
		   
    						         
			</tr>
			<?php 
			}
             ?>				    
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
	<?php 		
			
			
				if (trim($ag=='CB Health Insurance')){
					
					              
		  	                        if($qt ==1){
		                            $opd1 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='OPD' and indigent ='K' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $opdk = mysql_num_rows($opd1);
								   
								    $opd2 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='OPD' and indigent ='H' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='IPD' and indigent ='K' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $ipdk  = mysql_num_rows($ipd1);
									
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and encounter='IPD' and indigent ='H' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $ipdh = mysql_num_rows($ipd2);
										
									
								    $tf=mysql_query("SELECT * FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and  sex='M'  and agreement ='$ag' and paid='No'and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $m = mysql_num_rows($tf);
                                        
                                 	$tm=mysql_query("SELECT * FROM  treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and sex='F' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $f = mysql_num_rows($tm);
									
									
		                               
								    $md= mysql_query("SELECT * FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and reason='Medical service'  and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and  reason='Drug stock-out' and paid='No' and  agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $stock_out = mysql_num_rows($stock);
							
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'  and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);
									}
								if($qt ==2){
									
								  $opd1 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and  encounter='OPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdk = mysql_num_rows($opd1);
								    $opd2 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and encounter='OPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and encounter='IPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdk  = mysql_num_rows($ipd1);
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where (month='2' or month='3' or month='4') and encounter='IPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdh = mysql_num_rows($ipd2);
										
									
								    $tf=mysql_query("SELECT * FROM treatment where (month='2' or month='3' or month='4') and sex='M'  and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $m = mysql_num_rows($tf);
                                        
                                 	$tm=mysql_query("SELECT * FROM  treatment where (month='2' or month='3' or month='4') and sex='F' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $f = mysql_num_rows($tm);
									
									
		                               
								    $md= mysql_query("SELECT * FROM treatment where (month='2' or month='3' or month='4') and reason='Medical service' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where (month='2' or month='3' or month='4') and reason='Drug stock-out' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $stock_out = mysql_num_rows($stock);
									
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where sex ='F'  and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);	
								}
								if($qt ==3){
									
								  $opd1 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7')   and encounter='OPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdk = mysql_num_rows($opd1);
								    $opd2 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and encounter='OPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and encounter='IPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdk  = mysql_num_rows($ipd1);
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where (month='5' or month='6' or month='7') and  encounter='IPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdh = mysql_num_rows($ipd2);
										
									
								    $tf=mysql_query("SELECT * FROM treatment where (month='5' or month='6' or month='7') and sex='M' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $m = mysql_num_rows($tf);
                                 	$tm=mysql_query("SELECT * FROM  treatment where (month='5' or month='6' or month='7') and sex='F' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $f = mysql_num_rows($tm);
									
								    $md= mysql_query("SELECT * FROM treatment where (month='5' or month='6' or month='7') and reason='Medical service' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where (month='5' or month='6' or month='7') and  reason='Drug stock-out' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $stock_out = mysql_num_rows($stock);
									
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'  and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'  and agreement ='$ag' and region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);	
								}
								if($qt ==4){
									
									  $opd1 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' and encounter='OPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdk = mysql_num_rows($opd1);
								    $opd2 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' and encounter='OPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $opdh = mysql_num_rows($opd2);
						
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' and encounter='IPD' and paid='No' and indigent ='K' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdk  = mysql_num_rows($ipd1);
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where (month='8' or month='9' or month='10' and encounter='IPD' and paid='No' and indigent ='H' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $ipdh = mysql_num_rows($ipd2);
										
									
								    $tf=mysql_query("SELECT * FROM treatment where (month='8' or month='9' or month='10' and sex='M'  and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $m = mysql_num_rows($tf);
                                 	$tm=mysql_query("SELECT * FROM  treatment where (month='8' or month='9' or month='10' and sex='F' and agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $f = mysql_num_rows($tm);
									
								    $md= mysql_query("SELECT * FROM treatment where (month='8' or month='9' or month='10' and reason='Medical service' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where (month='8' or month='9' or month='10' and  reason='Drug stock-out' and paid='No' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year ='$yyyy'");
                                    $stock_out = mysql_num_rows($stock);
									
									
	                                $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vmale = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  agreement ='$ag' and paid='No' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id'");
                                    $vfemale = mysql_num_rows($sfemale);
									
			                      	}
									
									?>
								
									<p style="font-size:16px;font-weight:bod;">Key Performance Indicators</p>
		 <table class="" style="width:100%">
                	<thead>
                		    <tr class="" bgcolor="lightblue">
                    		
                    		<th style="width:10%;writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Health_Facility_Name');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Type_of_Facility');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Catchment_Population');?></div></th>
							
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('OPD_Utilization-#of_Non_Paying');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('OPD_Utilization-#of_Paying');?></div></th>
							
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('IPD_Utilization_#of_Non_Paying');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('IPD_Utilization_#of_Paying');?></div></th>		   
							
							
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total_#of_visits_all_patients(HMIS)-Male');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_visits_all_patients (HMIS)-Female');?></div></th>
							
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_visits_CBHI_clients-Male');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_visits_CBHI_clients-Female');?></div></th>
							
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_OPD_claims');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total-#of_IPD_claims');?></div></th>
							
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_card');?></div></th>			
						    <th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_lab');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_imaging');?></div></th>
					      	<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div> <?php echo get_phrase('Amount_claimed_for_procedure');?> </div></th>
                    		
						
						    <th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div> <?php echo get_phrase('Amount_claimed_for_drugs & SS');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed_for_bed_day');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Amount_claimed-other');?></div></th>
							
							
							
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Total_amount_claimed');?></div></th>
							<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Patients_referred_for_medical_services');?></div></th>
                    		<th style="writing-mode: sideways-lr; padding:0px 0px 0;text-align: left;"><div><?php echo get_phrase('Patients_referred_due_to_drug_stock-out');?></div></th>
							
							
						</tr>
					</thead>
                    <tbody>
					
	 
                    	<?php 
						//$count = 1;
						//$current_user =  $this->session->userdata('admin_id');
                        $notices = $this->db->get_where('facility')->result_array();
						foreach($notices as $row):?>
                        <tr>
                           <!-- <td><?php// echo $count++;?></td> -->
						   	<td><b><?php echo $row['name'];?></b></td>
							<td><b><?php echo $row['type'];?></b></td>
							<td><b><?php echo  format($row['cachement']);?></b></td>
							
						    <td style="background-color:pink;"><b><?php echo $opdh;?></b></td>	
							<td style="background-color:pink;"><b><?php echo $opdk;?></b></td>	
							
						    <td style="background-color:pink;"><b><?php echo $ipdh;?></b></td>
						    <td style="background-color:pink;"><b><?php echo $ipdk;?></b></td>
							
						    <td style="background-color:gray;"><b><?php echo $vmale;?></b></td>
							<td style="background-color:gray;"><b><?php echo $vfemale;?></b></td>
							
							<td><b><?php echo $m;?></b></td>
							<td><b><?php echo $f;?></b></td>
							
							<td style="background-color:#084184;color:white;"><b><?php echo $opdk+$opdh;?></b></td>
						    <td style="background-color:#084184;color:white;"><b><?php echo $ipdk+$ipdh;?></b></td>		
							
							<td ><b><?php echo  number_format($card2,2); ?></b></td>
							<td><b><?php  echo  number_format($lab2,2); ?></b></td>
							<td><b><?php  echo  number_format($Imaging2,2); ?></b></td>	
						    <td><b><?php  echo  number_format($surgery2,2); ?></b></td>
							<td><b><?php  echo  number_format($drugs2,2); ?></b></td>
							<td><b><?php  echo  number_format($Bed_fee2,2); ?></b></td>
							<td><b><?php  echo  number_format($other2,2); ?></b></td>
						    <td><b><?php  echo  number_format($gt,2); ?></b></td>	
						    <td><b><?php echo $medical;?></b></td>
							<td><b><?php echo $stock_out;?></b></td>
							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
				
				<?php } else{ }?>		
 
<br><br><br><br>
</body>


<script>
function myFunction() {
  window.print();
}
</script>


</html>
