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
		<?php


$new  = date('Y-m-d');
$day  = date('y:m:d');
$today = date('l, F d, Y',strtotime($day));
?>
<br><br>
<p style="text-align:right;"> 
  <a href="<?php echo base_url(); ?>index.php?admin/all_my_encounter_print_pdf"  class="btn btn-primary pull-right"><i class="fa fa-print"></i>&nbsp;PDF </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php?admin/dashboard" class="btn btn-primary pull-right"><i class="fa fa-times"></i>&nbsp;Close </a> </p>
  
<?php
						   $s = "SELECT name,date_of_join FROM `admin` where admin_id='$admin_id'";
                           $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $date_of_join = $rows['date_of_join']; 
			                }
					   ?>
<h4> <i class="fa  fa-users"></i> Visits, which are recorded by  <u> <b><?php echo  $name;?></b>  </u>  on  <u><?php  echo $today ;?></u></h4>

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
							 
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                   $sql="select * from treatment where user ='$admin_id' and  cdate='$new'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:15px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No new encounter created today! </div>';
	 
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
                        <tr>					  
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								<td><?php echo $name;?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>

								    <td><?php if($row2['diagniss']==''){ echo '-';} else { echo $row2['diagniss'];}?></td>
							       <td><?php echo $row2['card'];?></td>
							       <td><?php echo $row2['lab'];?></td>
								   <td><?php echo $row2['Imaging'];?></td>
	    						   <td><?php echo $row2['surgery'];?></td>
							       <td><?php echo $row2['drugs'];?></td>
								   <td><?php echo $row2['Bed_fee'];?></td>
								   <td><?php echo $row2['other'];?></td>
								   
								   <td>ETB <b><u><?php echo $row2['total'];?></u></b> </td>
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                            <td>
                                
                              
                                
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="6" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
    	?>
               <td >     <b> <u><?php echo $row1['sum(card)'];?></u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
    	?>
           <td>
		   <b> <u><?php echo $row2['sum(lab)'];?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
    	?>
           <td>
		  <b> <u> <?php  echo $row3['sum(Imaging)'];?></u> </b> </td>
		   
    	<?php } ?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
    	?>
           <td>
		  <b> <u>  <?php echo $row4['sum(surgery)'];?></u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
    	?>
           <td>
		   <b> <u> <?php echo $row5['sum(drugs)'];?></u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
    	?>
           <td>
		   <b> <u> <?php  echo $row6['sum(Bed_fee)'];?></u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
    	?>
           <td>
		  <b> <u> <?php echo $row7['sum(other)'];?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where user ='$admin_id' and cdate='$new'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
           
		    <td style="background-color:gray;" > <b> Birr <u><?php echo $row8['sum(total)'];?></u> </b> </td>
		   
    	<?php } ?>
						
							         
								       </tr>
							    
                             </tfoot>							
                    </tbody>
</table>
  <?php $admin_id = $this->session->userdata('admin_id'); ?>
<label for="" class="col-sm-2 control-label"><b>Filter data by:</b></label>

	  
		
             <form action="<?php echo base_url(); ?>index.php?admin/today_encounters/<?php echo $admin_id;?>" method="post">    
			<div class="col-sm-6">
				 		<select name="admin_id" class="form-control"  required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                              
							    <option value="today"><?php echo get_phrase('today');?></option>
							    <option value="today"><?php echo get_phrase('yesterday');?></option>
							    <option value="today"><?php echo get_phrase('last_week');?></option>
								<option value="today"><?php echo get_phrase('last_month');?></option>
							    <option value="today"><?php echo get_phrase('last_quarter');?></option>
								<option value="today"><?php echo get_phrase('last_year');?></option>  
			                    </select>					
			                  </div>               
				
	
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-search"></i> <?php echo get_phrase('filter');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

