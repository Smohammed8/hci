<?php
$info	=	$this->crud_model->get_beneficiary_info($param2);
foreach($info as $row):?>

<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-3">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('beneficiary' , $row['beneficiary_id']);?>" 
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
					<legend style="padding:3px; border:#4e95f4 2px solid;"> <i class="fa fa-user"></i>&nbsp;<?php echo get_phrase('basic_beneficiary_information');?>  </legend>
                    
					
					
					
			
                 
                    <tr>
                        <td><?php echo get_phrase('cbhi');?></td>
                        <td><b><?php echo  $row['cbhi'];?></b></td>
                    </tr>
                    <tr>
                        <td> <?php echo get_phrase('family_code');?>:</td>
                        <td><b><?php echo $row['family_code'];?></b>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo get_phrase('region');?>:</td>
                        <td><b><?php echo $this->crud_model->get_class_name($row['region']);?></b></td>
                    </tr>
					
					
                   
                    <tr>  
                        <td><?php echo get_phrase('zone');?>:</td>
                        
						<td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?>(<?php echo $row['zone'];?>)</td>
                    </tr>
                  
                    <tr>  
                        <td> <?php echo get_phrase('woreda');?>:</td>
                        
						<td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?>(<?php echo $row['woreda'];?>)</td>
                    </tr>
					
					
					
					
                
                     <tr>
                        <td><?php echo get_phrase('kebele');?></td>
                        <td><b><?php if($row['kebele']!=''){echo $row['kebele'];} else{ echo '.............';} ?></b></td>
                    </tr>
                    
               
                    <tr>
                        <td><?php echo get_phrase('gender');?></td>
                        <td><b><?php if($row['sex']=='F'){ echo 'Female'; } else{ echo 'Male';}?></b></td>
                    </tr>
           
                      <tr>
                        <td><?php echo get_phrase('date_of_birth');?></td>
                        <td><b><?php echo $row['dob'];?> E.C</b></td>
                    </tr>
                  
               
               
                    <tr>
                        <td><?php echo get_phrase('Indigent');?></td>
                        <td><b><?php echo $row['indigent'];?></b>
                        </td>
                    </tr>
                  
                    <tr>
                        <td><?php echo get_phrase('relation');?>:</td>
                        <td><b><?php echo $row['relation'];?></b>
                        </td>
                    </tr>
					    <?php   $wor    = $row['woreda'];
						        $zo     = $row['zone'];
								$family = $row['family_code'];
						        $reg    = $row['region']; 
		           	            $resultx = mysql_query("SELECT * FROM family where  region ='$reg' and zone='$zo' and  woreda='$wor' and family_code='$family'") or die(mysql_error());
                   
                        $num = mysql_num_rows($resultx); ?>
                  <tr>
                        <td> <?php echo get_phrase('no_of_family');?>:</td>
                        <td><b><?php echo  $num;?></b>
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