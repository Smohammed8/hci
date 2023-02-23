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
	
<?php
$day = date('y:m:d');
$today = date('l, F d, Y',strtotime($day));
$new  = date('Y-m-d');

?>
                       <?php  $admin_id = $this->session->userdata('admin_id');  ?>
					   
			   <form action="<?php echo base_url(); ?>index.php?admin/today_encounter_print_pdf/<?php echo $admin_id;?>" method="post">    	
                <input type="hidden" name="user"    value="<?php echo $admin_id; ?>"> 
                <input type="hidden" name="date"    value="<?php echo $new ;?>"> 				
			    <button type="submit" class="btn btn-primary pull-right" style="font-weight:bold;" name="print"><i class="fa fa-print"></i> PDF</button>      
            </form> 
			 
			 <br>
	
	   <hr>
	                    <?php
						    $s = "SELECT name FROM `admin` where admin_id='$admin_id'";
                            $ress = mysql_query($s) or die(mysql_error());
                            while($rows = mysql_fetch_array($ress)){
                            $name = $rows['name']; 
							}
							?>
	   <h4> <i class="fa  fa-ambulance"></i> Servics charge which are recorded today at <u> <?php echo $today  ;?> by <?php echo $name  ;?> </u></h4>
            <table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5">Patient Encounter Status</td>
								  
							
                               
							       <td  colspan="9">Payment information by servics type</td>
								   						     
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
							<!--<th><div><?php //echo get_phrase('diagnosis');?> </div></th> -->
							
							
                            <th><div><?php echo get_phrase('card');?></div></th>
							
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('procedure');?></div></th>
							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>
								
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							<th><div><?php echo get_phrase('paid');?></div></th> 
                            
                        </tr>
                    </thead>
                    <tbody>

					
					<?php 
                   $sql="select * from treatment where user ='$admin_id' and paid='No' and cdate='$new'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;">
						 <img src="uploads/invalid.PNG" width="17px" height="16px"/>&nbsp;No encounter found today!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             
							 $mrn_id= $row2['mrn_id'];
                            ?>
							<?php
							  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
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
								 
								 <!--   <td><?php $encounter_id= $row2['encounter_id'];?> </td> -->
							    <!--   <td><?php //echo $row2['diagniss'];?> </td> -->
							       <td style="text-align: right;"><?php echo number_format($row2['card'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['lab'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Imaging'],2);?></td>
	    						   <td style="text-align: right;"><?php echo number_format($row2['surgery'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['drugs'],2);?> </td>
								   <td style="text-align: right;"><?php echo number_format($row2['Bed_fee'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['other'],2);?></td>
							
	                                       <?php $encounter_id  = $row2['encounter_id'];?>
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = mysql_query("update treatment set total =$subtotal where encounter_id='$encounter_id' and user ='$admin_id' and paid='No' and cdate='$new'"); ?>
									
								   <td style="text-align: right;"><b><u>
								   
								   	<?php  echo number_format($subtotal,2); ?></u></b> </td>
								  
								   
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                            <td>
                                
                             <!-- <i class="fa fa-check-square-o"></i> -->
                                  <i class="fa fa-times"></i>
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
           <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card= $row1['sum(card)'];
					 
    	?>
               <td style="text-align: right;">  <b> <u>
			   <?php echo number_format($row1['sum(card)'],2);?></u> </b></td>
    
			<?php }?>
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab  =	$row2['sum(lab)'];
			
    	?>
           <td style="text-align: right;">
		   <b> <u> <?php echo number_format($row2['sum(lab)'],2);?></u> </b> </td>
		   	<?php }?>
    	
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging= $row3['sum(Imaging)'];
			
    	?>
           <td style="text-align: right;">
		  <b> <u><?php echo number_format($row3['sum(Imaging)'],2);?></u> </b> </td>
		   	<?php }?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery = $row4['sum(surgery)'];
			
    	?>
           <td style="text-align: right;">
		  <b> <u><?php echo number_format($row4['sum(surgery)'],2);?></u> </b> </td>
		   
   	<?php }?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs= $row5['sum(drugs)'];
			
    	?>
           <td style="text-align: right;">
		   <b> <u> <?php echo number_format($row5['sum(drugs)'],2);?></u> </b> </td>
		   			<?php }?>		          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee = $row6['sum(Bed_fee)'];
				
			
    	?>
           <td style="text-align: right;">
		   <b> <u>  <?php echo number_format($row6['sum(Bed_fee)'],2);?></u> </b> </td>
		   		<?php }?>		   
									 
		<?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other=  $row7['sum(other)'];
			
    	?>
           <td style="text-align: right;">
		  <b> <u><?php echo number_format($row7['sum(other)'],2);?></u> </b> </td>
		   
	      <?php }?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where user ='$admin_id' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				$total =  $row8['sum(total)'];
			}
    	?>
	

		     <?php $grandtotal =$card +$lab+$Imaging+$surgery+$drugs+$Bed_fee+$other;?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			      <?php echo number_format($grandtotal,2);?></u> </b> </td>
	
			      </tr>	    
                  </tfoot>							
           </tbody>
   </table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

