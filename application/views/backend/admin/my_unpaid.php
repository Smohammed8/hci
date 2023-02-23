 <!--
   <?php $admin_id = $this->session->userdata('admin_id'); ?>
<label for="" class="col-sm-2 control-label"><b>Payment Request Filter data by:</b></label>

	  
		
             <form action="<?php echo base_url(); ?>index.php?admin/patient_report/<?php //echo $admin_id;?>" method="post">    
			<div class="col-sm-2">
				 		<select name="admin_id" class="form-control" data-validate="required" id="class_id" 
								
								data-message-required="<?php //echo get_phrase('value_required');?>">
                              <option value=""><?php //echo get_phrase('select');?></option>
                              
							    <option value="today"><?php echo get_phrase('today');?></option>
							<!--	<option value="week"><?php //echo get_phrase('this_week');?></option>
						       	<option value="month"><?php //echo get_phrase('this_month');?></option>
							    <option value="quarter"><?php //echo get_phrase('this_quarter');?></option>
							    <option value="year"><?php //echo get_phrase('this_year');?></option> -->
			            <!--        </select>					
			                  </div>               
				
	
        <!-- <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-search"></i> <?php echo get_phrase('filter');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
  -->
 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:70%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:3px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}
	</style>
	

	<hr>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<img src="uploads/1215.jpg" style="float:left;" height="70" width="80">
						
				</div>
				<h1><center><?php echo get_phrase('jimma_university ');?></center></h1>
<h2><center><?php echo get_phrase('jimma_university_specialized_hospital');?></center></h2>
            </div>
			

        </div>
    </div>
</div>
					
		    
 <?php
	
						  $s="SELECT name FROM `admin` where admin_id='$admin_id'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>
					   
<h4> <i class="fa  fa-ambulance"></i> Treatments which are recorded by <u> <?php echo  $name;?> </u> in Name of Woreda</h4>

<table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="6">Patient Encounter Status</td>
								  
							
                               
							       <td  colspan="9"> Payment information by servics type</td>
								   
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div> MRN </div></th>
							
							<th><div> CBHI Code</div></th>
							
                         <th><div> Name</div></th>
                            <th><div><?php //echo get_phrase('join_date');?>Date:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>
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
							<th><div><?php echo get_phrase('paid');?></div></th>
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                   $sql="select * from treatment where user ='$admin_id'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No new report found!!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id']
                            ?>
							<?php
							  $sq = mysql_query("select  name from patients where mrn_id ='$mrn_id'"); 
				  	   while($d=mysql_fetch_array($sq)){
			         $name= $d['name'];  
					  $agreement= $d['agreement']; 
					   }
					 ?>
					   <?php   $encounter_id  =$row2['encounter_id'];?>	
                        <tr>					  
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								<td><?php echo $name;?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
							       <td><?php echo $row2['diagniss'];?> </td>
								   
								   
								   
								   <td style="text-align: right;"><?php echo number_format($row2['card'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['lab'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Imaging'],2);?></td>
	    						   <td style="text-align: right;"><?php echo number_format($row2['surgery'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['drugs'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Bed_fee'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['other'],2);?></td>
								   
								  <!-- <td>ETB <b><u><?php //echo $row2['total'];?></u></b> </td> -->
								   
								   
								    <?php 	$fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
	
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 =  mysql_query("update treatment set total =$subtotal where paid='No' and encounter_id='$encounter_id'"); ?>
									
									   <td style="text-align: right;"><b><u>
								   
								   	<?php  echo  number_format($subtotal,2); ?></u></b> </td>
									
								        <?php if($row2['remark']==''){ ?>
											
								     <td>-</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                            <td>
                                
                              <i class="fa fa-times"></i>
                                
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="6" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
    	?>
               <td> <b><u><?php echo number_format($row1['sum(card)'],2);?></u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
    	?>
           <td>
		   <b> <u><?php echo number_format($row2['sum(lab)'],2);?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
    	?>
           <td>
		  <b> <u> <?php echo number_format($row3['sum(Imaging)'],2);?></u> </b> </td>
		   
    	<?php } ?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
    	?>
           <td>
		  <b> <u>  <?php echo number_format($row4['sum(surgery)'],2);?></u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
    	?>
           <td>
		   <b> <u> <?php echo number_format($row5['sum(drugs)'],2);?></u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
    	?>
           <td>
		   <b> <u> <?php echo number_format($row6['sum(Bed_fee)'],2);?></u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
    	?>
           <td>
		  <b> <u> <?php echo number_format($row7['sum(other)'],2);?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where user ='$admin_id'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
           
		    <td style="background-color:gray;" > <b> Birr <u><?php echo number_format($row8['sum(total)'],2);?></u> </b> </td>
		   
    	<?php } ?>
						
							         
								       </tr>
							    
                             </tfoot>							
                    </tbody>
</table>
  <?php $admin_id = $this->session->userdata('admin_id'); ?>
<label for="" class="col-sm-2 control-label"><b>Payment Request :</b></label>

	  
		
             <form action="<?php echo base_url(); ?>index.php?admin/patient_report/<?php echo $admin_id;?>" method="post">    
			<div class="col-sm-3">
				 			
                            <select name="admin_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                               <?php
							
							for($i=2012;$i<=2030;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>								
			                  </div>               
				
	
        <form action="<?php echo base_url(); ?>index.php?admin/patient_report/<?php echo $admin_id;?>" method="post">    
			<div class="col-sm-3">
				 		<select name="admin_id" class="form-control" data-validate="required" id="class_id"  data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              
							    <option value="1"><?php echo get_phrase('first_quarter');?></option>
							    <option value="2"><?php echo get_phrase('2nd_quarter');?></option>
						       	<option value="3"><?php echo get_phrase('3rd_quarter');?></option>
							    <option value="4"><?php echo get_phrase('4th_quarter');?></option>
							    <option value="5"><?php echo get_phrase('this_year');?></option> 
			                    </select>					
			                  </div>               
				
	
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-envelope-o"></i> <?php echo get_phrase('send_request');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
<br><br><br><br><br><br><br>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(7, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									 datatable.fnSetColumnVis(6, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>
<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>


<script type="text/javascript">

	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>