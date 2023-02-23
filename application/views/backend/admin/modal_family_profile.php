
                      


					  <?php

							
							$info = $this->db->get_where('patients' , array('cbhi'=>$param2))->result_array();
							foreach ($info as $row): ?> 
							<?php 
							$cbhi = $row['cbhi'];
						    $woreda_id = $row['woreda_id']; ?>
						   		  
               
					  
     <div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-3">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('student' , $row['mrn_id']);?>" 
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
					
                <table class="table table-striped" border="0px;" style="font-weight:bold;">
                   <fieldset  >
					<legend style="padding:3px; border:#4e95f4 2px solid;"><i class="fa fa-user"></i>&nbsp;<?php echo get_phrase('family_information');?>  </legend>
                    	
				
                    <tr>
                        <td> <?php echo get_phrase('MRN');?>:</td>
                        <td><b><?php echo  $row['mrn_id'];?></b></td>
                    </tr>
              
			
                    <tr>
                        <td><?php echo get_phrase('cbhi');?></td>
                        <td><b><?php echo  $row['cbhi'];?></b></td>
                    </tr>
                   
	
                    <tr>
                        <td><?php echo get_phrase('region');?>:</td>
                        <td><b><?php echo $this->crud_model->get_class_name($row['class_id']);?></b></td>
                    </tr>
              
                    <tr>  
                        <td><?php echo get_phrase('zone');?>:</td>
                        
		
						
						<td><?php echo $this->crud_model->get_section_name_by_id($row['section_id'],$row['class_id']);?>(<?php echo $row['section_id'];?>)</td>
                    </tr>
                   
                    <tr>  
                        <td> <?php echo get_phrase('woreda');?>: <?php echo $row['woreda_id'];?> </td>
						
                        <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$row['section_id']);?></td>
						
						
                    </tr>
                  
                    <tr>
                        <td><?php echo get_phrase('kebele');?></td>
                        <td><b><?php if($row['kebele']!=''){echo $row['kebele'];} else{ echo '..........................';} ?></b></td>
                    </tr>
                    
                    <tr>
                        <td><?php echo get_phrase('sex');?></td>
                        <td><b><?php echo $row['sex'];?></b></td>
                    </tr>
                  
                    <tr>
                        <td><?php echo get_phrase('phone');?></td>
                        <td><b><?php if($row['phone']!=''){echo $row['phone'];}else{ echo '.............................';}?></b></td>
                    </tr>
                  
               
                
                    <tr>
                        <td><?php echo get_phrase('Indigent');?></td>
                        <td><b><?php echo $row['indigent'];?></b>
                        </td>
                    </tr>
               
                    <tr>
                        <td><?php echo get_phrase('agreement');?>:</td>
                        <td><b><?php echo $row['agreement'];?></b>
                        </td>
                    </tr>
               
                    <tr>
                        <td> <?php echo get_phrase('date_of_registration');?>:</td>
                        <td><b><?php echo $row['reg_date'];?> E.C.</b>
                        </td>
                    </tr>
                   
                    <tr>
                        <td><?php echo get_phrase('CBHI Code');?></td>
                        <td><b><?php echo $row['full_code'];?></b>
                        </td>
                    </tr>
                  
                    <tr>
                        <td><?php echo get_phrase('registered_by');?>:</td>
                       
			
						<td></b><?php echo $this->crud_model->get_type_name_by_id('admin',$row['user']);?>(<?php echo $row['user'];?>)</b></td>
                        </td>
                    </tr>
             
                  </fieldset> 
                </table> 
				
			</div>
		</div>	 	
	</section>
	
	
	
</div>
<?php endforeach;?>