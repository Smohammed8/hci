<?php
$info	=	$this->crud_model->get_student_info($param2);
foreach($info as $row):?>

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
							<h3><?php echo ucwords(strtolower($row['name']));?></h3>
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
					<legend style="padding:3px; border:#4e95f4 2px solid;"> <i class="fa fa-user"></i>&nbsp;<?php echo get_phrase('basic_pataient_information');?>  </legend>
                    
					
					
					
				
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
                        <td> <?php echo get_phrase('woreda_town_organization');?>:</td>
                        
						<td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$row['section_id']);?>(<?php echo $row['woreda_id'];?>)</td>
                    </tr>
					
					
					
					
                
                     <tr>
                        <td><?php echo get_phrase('kebele');?></td>
                        <td><b><?php if($row['kebele']!=''){echo ucwords(strtolower($row['kebele']));} else{ echo '.............';} ?></b></td>
                    </tr>
                    
               
                    <tr>
                        <td><?php echo get_phrase('gender');?></td>
                        <td><b><?php if($row['sex']=='F'){ echo 'Female'; } else{ echo 'Male';}?></b></td>
                    </tr>
					
					  <tr>
                        <td><?php echo get_phrase('phone');?></td>
                        <td><b><?php if($row['phone'] !=''){ echo $row['phone'];} else{ echo '______';}?></b></td>
                    </tr>
           
                      <tr>
                        <td><?php echo get_phrase('age/date_of_birth');?></td>
                        <td><b><?php echo $row['age'];?></b></td>
                    </tr>
                  
               
               
                    <tr>
                        <td> Patient type<?php //echo get_phrase('Indigent');?></td>
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
                        <td><b><?php echo $row['cdate'];?></b>
                        </td>
                    </tr>
               
                    <tr>
                        <td>Code <?php //echo get_phrase('CBHI Code');?></td>
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