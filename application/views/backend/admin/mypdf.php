<!-- application/views/mypdf.php --------------------------------------------->
<!DOCTYPE html>

<html>

<head>

	<title>Monthly repors</title>


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
   border: 1px solid #ddd;
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
</head>
<?php 
function money_format($value) {
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

<img src="uploads/1215.jpg" style="float:left;" height="100" width="100">
<h1><center> Jimma University</center></h1>
<h2><center> Jimma University Specialized Hospital</center></h2>
       <h3><center> Monthly Report</center></h3>
 <!--<img src="uploads/logo.png " style="float:right;" height="90" width="100">-->
<span><b>Facility Name:</b>&nbsp;&nbsp; &nbsp; <u><?php echo 'Jimma Medical Center';?></u><span>&nbsp;
<span><b>Request for:</b> &nbsp;&nbsp; &nbsp; <u><?php echo 'Month-4 ';?></u></span>&nbsp;
<span><b>Year:</b>&nbsp;&nbsp; &nbsp; <u><?php echo '2012 E.C';?></u></span>&nbsp;
<span><b>District:</b>&nbsp;&nbsp; &nbsp; <u><?php echo 'Limu Seka ';?></u></span><br>


	
	
                <div class="" style="overflow-x:auto;">
					
							
                   
                               <table class="hoverTable" id="table_export" style="border:1px solid black;width:100% !important;">
							   
							   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="13"><b>Patient Encounter Status</b></td>
								  
							
                               
							       <td  colspan="9"><b>Payment information by servics type</b></td>
								   
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    
			          <th><div>#<?php echo get_phrase('sn');?>:</div></th	>
						<th><div>#<?php echo get_phrase('CN');?>:</div></th	>
                       <th><div><?php echo get_phrase('CBHI Code');?>:</div></th>
						  <th><div><?php echo get_phrase('full name');?>:</div></th>
						  
                            <th><div><?php echo get_phrase('region');?>:</div></th>
							<th><div><?php echo get_phrase('zone');?>:</div></th>
							<th><div><?php echo get_phrase('woreda');?>:</div></th>
							<th><div><?php echo get_phrase('kebele');?>:</div></th>
						    <th><div><?php echo get_phrase('age');?>:</div></th>
							 <th><div><?php echo get_phrase('sex');?>:</div></th>
							 
							<th><div><?php echo get_phrase('date');?>:</div></th>
							
							<th><div><?php echo get_phrase('service');?></div></th>
							<th><div><?php echo get_phrase('diagnosis');?> </div></th>
							
							
                            <th><div><?php echo get_phrase('card');?></div></th>
							
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('procedure');?></div></th>
							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>
								
							<th><div>#<?php echo get_phrase('total');?></div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							 
                           
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
					
   // if(isset($_POST['report'])){ 

	 /*$mm         =trim($_POST["mm"]);
	$ag         =trim($_POST["agreemen"]);
    $class_id   =trim($_POST["class_id"]);
    $section_id =trim($_POST["section_id"]);
	$woreda_id  =trim($_POST["woreda_id"]);
    $yyyy       =trim($_POST["yyyy"]);
	
	
            $mm              = $this->input->post('mm');
			$agreement       = $this->input->post('agreement');
			$class_id        = $this->input->post('class_id');
			$section_id      = $this->input->post('section_id');
			$woreda_id      = $this->input->post('woreda_id');
			$yyyy           = $this->input->post('yyyy');  */
	///	}
	//where month='$mm ' and agreement ='$ag' and region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and year='$yyyy'
					$count = 1;
                   $sql="select * from treatment ";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No new report found!!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id']
                            ?>
							<?php
							  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	   while($row=mysql_fetch_array($sq)){
			          $name=$row['name'];  
					  $agreement=$row['agreement']; 
					  $age=$row['age'];
					  $sex= $row['sex'];
					 $class_id =$row['class_id'];
					 $section_id = $row['section_id'];
					 $woreda_id = $row['woreda_id'];
					  $kebele = $row['kebele'];
					 
				 
					   }
					 ?>
                        <tr>		
                               <td><?php echo $count++; ?></td>						
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								<td><?php echo $name;?></td>
								 <td><?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?></td>
								 <td><?php echo $this->crud_model->get_type_name_by_id('section',$section_id);?></td>
								 <?php 
								 if($woreda_id=='00'){ 
									 ?>
								 
								 <td> <?php echo 'No code';?></td>
								 <?php
								 }
								 else{
									?>
                                  <td><?php echo $this->crud_model->get_type_name_by_idx('parent',$woreda_id);?></td>									
									
                                  <?php									
								 }
								 ?>							 
								<td><?php echo $kebele;?> </td>
								<td><?php echo $age;?> </td>
								<td><?php echo $sex;?> </td>
								
							    <td><?php echo $row2['Date_of_service'];?> </td>
								
						        <td><?php echo $row2['encounter'];?> </td>
							       <td><?php echo $row2['diagniss'];?> </td>
							       <td width="5%"><?php echo $row2['card'];?></td>
							       <td width="5%"><?php echo $row2['lab'];?></td>
								   <td width="5%"><?php echo $row2['Imaging'];?></td>
	    						   <td width="5%"><?php echo $row2['surgery'];?></td>
							       <td width="5%"><?php echo $row2['drugs'];?></td>
								   <td width="5%"><?php echo $row2['Bed_fee'];?></td>
								   <td width="5%"><?php echo $row2['other'];?></td>
								   
								   <td width="6%"><b><u><?php echo $row2['total'];?> </u></b> </td>
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
					
							          <td  colspan="13" style="text-align:right;"><b>#<?php echo get_phrase('subtotal_amount(in ETB)');?>:</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment ") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
    	?>
               <td >     <b> <u><?php echo money_format($row1['sum(card)']);?> .00</u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment ") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
    	?>
           <td>
		   <b> <u><?php echo money_format($row2['sum(lab)']);?>.00</u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment ") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
    	?>
           <td>
		  <b> <u> <?php  echo money_format($row3['sum(Imaging)']);?>.00</u> </b> </td>
		   
    	<?php } ?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment ") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
    	?>
           <td>
		  <b> <u>  <?php echo money_format($row4['sum(surgery)']);?>.00</u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
    	?>
           <td>
		   <b> <u> <?php echo money_format($row5['sum(drugs)']);?>.00</u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
    	?>
           <td>
		   <b> <u> <?php  echo money_format($row6['sum(Bed_fee)']);?>.00</u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment ") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
    	?>
           <td>
		  <b> <u> <?php echo money_format($row7['sum(other)']);?>.00</u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment ") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
           
		    <td style="background-color:pink;" id="total"> <b> Birr <u><?php echo money_format($row8['sum(total)']);?>.00 </u> </b> </td>
		   
    	<?php } ?>
						
							         
								       </tr>
							    
                             </tfoot>							
                    </tbody>
					
                </table>
					<center><span>Approved by</span>
	<p style="align:right">____________________</p>
	<p style="align:right"><?php echo 'Name of Finance Head'?></p> </center>			   			
                              
                </div>
		
	
	
 
<br><br><br><br>
</body>

</html>
