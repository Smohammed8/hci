

<?php 
$edit_data		=	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
foreach ($edit_data as $row):
?>
<?php endforeach;?>
<?php $mrn_id = $row['mrn_id'];  ?>
<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-3">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('patients' , $row['mrn_id']);?>" 
                	class="img-responsive img-circle" />
			</a>
			
		</div>
		
		<div class="col-sm-9">
			
			<ul class="profile-info-sections">
				<li style="padding:0px; margin:0px;">
					<div class="profile-name">
							<h3><?php echo $row['name'];?></h3>
					</div>
				</li>
			</ul>
			
		</div>
		
		
	</header>
			
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="">
            		<br>
						<?php 
                   $sql="select * from treatment  where mrn_id='$param2'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1){
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;This patient has been not conduct any treatment yet !</div>';
	 
                           }
                  
    		$result1 = mysql_query("SELECT * FROM treatment where mrn_id ='$param2'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result1)) {
    	?>	 
		
		<?php $mrn_id = $row2['mrn_id'];?>
            <table class="" border="1px;" width="100%">
                   <fieldset  >
					<legend style="padding:3px; border:#4e95f4 2px solid;"> <?php  echo get_phrase('encounter_status_at'); ?> <?php echo $row2['Date_of_service'];?> ዓ.ም</legend>
                    
				    <tr style="background-color:lightblue;">
                        <td><u><b><?php  echo get_phrase('join_date'); ?></b></u></td>
                        <td><u><b><?php  echo get_phrase('service_type'); ?></u></b></td>  
						<td> <u><b>#<?php  echo get_phrase('price'); ?></b></u></td>
                    </tr>
                    <tr> 
					<?php $total= $row2['card']+ $row2['drugs']+ row2['Bed_fee']+$row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['other'];?>
                        <td rowspan="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<b><?php echo $row2['Date_of_service'];?></b></td>
                        <td><b> <?php  echo get_phrase('card'); ?></b></td>  <td><b><?php echo $row2['card'];?></b></td>
                    </tr>
                   
                   <tr>
                  
                        <td><b><?php  echo get_phrase('drug'); ?></b></td>  <td><b> <?php echo $row2['drugs'];?></b></td>
                    </tr>
					   <tr>
                    
                        <td><b> <?php  echo get_phrase('bed'); ?></b></td>  <td><b><?php echo $row2['Bed_fee'];?></b></td>
                    </tr>
					   <tr>
                  
                        <td><b><?php  echo get_phrase('lab'); ?></b></td>  <td><b><?php echo $row2['lab'];?></b></td>
                    </tr>
					   <tr>
                  
                        <td><b><?php  echo get_phrase('imaging'); ?></b></td>  <td><b> <?php echo $row2['Imaging'];?></b></td>
                    </tr>
						   <tr>
                  
                        <td><b><?php  echo get_phrase('procedure'); ?></b></td>  <td><b><?php echo $row2['surgery'];?></b></td>
                    </tr>
						   <tr>
                  
                 <td><b><?php  echo get_phrase('other'); ?>:</b></td> <td><b><?php echo $row2['other'];?></b> </td>
									
                             </tr>
				 
								   <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+ $row2['other'];?>
								   
								
								 
								    <?php   $sql3 = mysql_query("update treatment set total =$subtotal where mrn_id ='$mrn_id'"); ?>
									 
       
				
					    <tr>
                 
                        <td style="background-color:lightblue;"><b>#Grand Total in ETB</b><td style="background-color:lightblue;">
						<u><b>  ETB <?php echo $subtotal;?> </b></U></td>
                        </td>
                    </tr>
			
				
              
                  </fieldset> 
                </table>	
				
				
				<br>
			<?php }?>
				
				 
		
			</div>
		</div>	 	
	</section>
	
	
	
</div>

