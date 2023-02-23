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

   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="HCI Admin Panel" />
        <meta name="author" content="HCI application JU SEID" />

      
      
        <script src="assets/js/jquery-1.11.0.min.js"></script>
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
 

<body>
<?php
   if(isset($_POST['search'])){ 

	$class_id  = trim($_POST["class_id"]);
	$section_id  =trim($_POST["section_id"]);
	$woreda_id  =trim($_POST["woreda_id"]);
	$mm  = trim($_POST["mm"]);
	$remaining  =trim($_POST["remaining"]);
	$yyyy  =trim($_POST["yyyy"]);
	?>







<script>
function myFunction() {
  window.print();
}
</script>
    <form action="<?php echo base_url(); ?>index.php?admin/verfiy_payment/bymonth" method="post">
		            <div class="form-group" style="">		


						 <input type="hidden" name="class_id" class="form-control"    value="<?php echo $class_id;?>"/> 
						 <input type="hidden" name="section_id" class="form-control"  value="<?php echo $section_id;?>"/> 
						 <input type="hidden" name="woreda_id" class="form-control"   value="<?php echo $woreda_id;?>"/> 
						 <input type="hidden" name="mm" class="form-control"          value="<?php echo $mm;?>"/> 
						 <input type="hidden" name="year" class="form-control"        value="<?php echo $yyyy;?>"/> 
						 <input type="hidden" name="remaining" class="form-control"   value="<?php echo $remaining;?>"/> 			 
						<div class="col-sm-offset-3 col-sm-5">
							<button type ="submit" style="font-weight:bold;" name="" class="btn btn-primary pull-right"> 
					<i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('verify_payment');?></button>					 				

						</div>
						
					</div>
					 
				</form>
				 <button onclick="myFunction()">Print</button>
<!-- <button onclick="exportTableToExcel('tblData', 'members-data')">ExportTo Excel </button> --->

<br><br>
 <div class="row">
	<div class="col-md-5">
		<div class="panel panel-primary" data-collapsed="0">
       
		<center>				  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:;width:100%">

			<div  class="panel-title">
            	<img src="uploads/report_header.JPG"  height="115" width="100%">
						
				</div>

			</div>
			
</center>
        </div>
    </div>
</div>

<span style="margin-left:100px"><b>Facility Name:</b>&nbsp;&nbsp; &nbsp; <u><?php echo get_phrase('jimma_medical_center');?></u><span>&nbsp;&nbsp;
<span><b>Request for:</b> &nbsp;&nbsp; &nbsp; <u>Month-<?php echo $mm;?></u></span>&nbsp;&nbsp;
<span><b><?php echo get_phrase('year');?>:</b>&nbsp;&nbsp; &nbsp; <u><?php echo $yyyy;?> E.C</u></span>&nbsp;&nbsp;
<span><b><?php echo get_phrase('district/organization');?>:</b>&nbsp;&nbsp; &nbsp; <u><?php echo $this->crud_model->get_woreda_name_by_id($woreda_id,$section_id);?></u>&nbsp;&nbsp;&nbsp;&nbsp; Date :____________________E.C</span><br>

         <div class="" style="overflow-y:auto;" class="page" data-size="A4">
		 
		 
					
							
                   
                              <center> <table class="hoverTable" id="tblData" style="border:1px solid black;width:85% !important;">
							   
							   
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
						<th><div><?php echo get_phrase('CN');?>:</div></th	>
                       <th><div><?php echo get_phrase('CBHI Code');?>:</div></th>
						  <th><div><?php echo get_phrase('full name');?>:</div></th>
						  
                            <th><div><?php echo get_phrase('region');?>:</div></th>
							<th><div><?php echo get_phrase('zone');?>:</div></th>
							
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

               

	    //where month='$mm ' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'
					$count = 1;
                   $sql="select * from treatment where month='$mm' && paid='No' && region='$class_id' && zone='$section_id' && woreda='$woreda_id' && year='$yyyy'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No report found associated with those information!!</div>';
	                      $this->session->set_flashdata('flash_message' , get_phrase('not_report_found!'));
						  redirect(base_url() . 'index.php?admin/accept_payment/', 'refresh');
                              }
                         while($row2=mysql_fetch_array($result)){ 
                             $mrn_id= $row2['mrn_id'];
                            ?>
								
				<?php 
					  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	  while($row=mysql_fetch_array($sq)){
			          $name=$row['name'];  
					   $age=$row['age'];  
					   $agreement = $row['agreement']; 
					 
	
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
						
								<td><?php echo $row2['age'];?>
					
							    <td><?php echo $row2['sex'];?> </td>
								
							    <td><?php echo $row2['Date_of_service'];?> </td>
								
						
								
						           <td><?php echo $row2['encounter'];?> </td>
								       <?php $dig  = $row2['diagniss']; ?>
								   
								      <?php if($dig ==''){ ?>
								    <td><?php echo '-'; ?></td>
									<?php
								   }else{ ?>
									 <td><?php echo $row2['diagniss'];?> </td>  
								 <?php  }
								   ?>
								   
							       <td style="text-align: right;" width=""><?php echo number_format($row2['card'],2); ?></td>
							       <td style="text-align: right;" width=""><?php echo number_format($row2['lab'],2); ?></td>
								   <td style="text-align: right;" width=""><?php echo number_format($row2['Imaging'],2); ?></td>
	    						   <td style="text-align: right;" width=""><?php echo number_format($row2['surgery'],2); ?></td>
							       <td style="text-align: right;" width=""><?php echo number_format($row2['drugs'],2); ?></td>
								   <td style="text-align: right;" width=""><?php echo number_format($row2['Bed_fee'],2); ?></td>
								   <td style="text-align: right;" width=""><?php echo number_format($row2['other'],2); ?></td>
								   
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = mysql_query("update treatment set total ='$subtotal' where month='$mm' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'"); ?>
								     <?php 	$fmt2 = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
								     <td width="7%" style="text-align: right;"><b><u>
									   <?php  echo number_format($subtotal,2); ?>
									   
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
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
			} 
    	?>
               
			   
			    <?php 	$am = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
			      <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($card2,2); ?></b> </td>
			   
			   
    	
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
				$lab2  =	$row2['sum(lab)'];
			}
    	?>
		    <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			  <?php  echo number_format($lab2,2); ?></u> </b> </td>
			   
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy' ") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				
				$Imaging2 = $row3['sum(Imaging)'];
			}
    	?>
          
		  
		  
		  	    <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($Imaging2,2); ?></u> </b> </td>
			  
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
			}
    	?>
           
		  
		  
		  <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($surgery2,2); ?></u> </b> </td>
			  
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
			}
    	?>    
		  <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($drugs2,2); ?></u> </b> </td>
			   
				          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2 = $row6['sum(Bed_fee)'];
			}
    	?>	   
		     <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($Bed_fee2,2); ?></u> </b> </td>
		   
			   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where month='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				$other2 =  $row7['sum(other)'];
			}
    	?>
        
		  
		   <td style="background-color:gray;text-align: right;" > <b>
			    <u>
			   <?php  echo number_format($other2,2); ?></u> </b> </td>
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where month ='$mm' and paid='No' and region='$class_id' and zone='$section_id' and woreda='$woreda_id' and year='$yyyy'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	        ?>
           
		   <?php    $grandtotal2 = $card2 +$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		   <?php 	$am = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
		   

		      <td style="background-color:gray;text-align: right;"> <b>
			 <u>
			   <?php  echo number_format($grandtotal2,2); ?></u> </b> </td> 
    	      <?php 
		        }}
               ?>
						
							         
			</tr>
							    
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
				
				
						   
				<div style="margin-left:900px;"><u><span>   Service Agreement</span></u>

	<p style="align:right"><?php echo   $agreement;?></p> </div>		   			
                              
    </div>
	
		
				
	
 
<br><br><br><br>
</body>

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
