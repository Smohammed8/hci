

<?php 
$edit_data		=	$this->db->get_where('admin' , array('admin_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-3">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('admin' , $row['admin_id']);?>" 
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
					<legend style="padding:3px; border:#4e95f4 2px solid;"> 
					<i class="fa fa-user"></i>&nbsp;<?php echo get_phrase('basic_user_information');?> </legend>
                    
					
					
					
					
                    <tr>
                        <td><?php echo get_phrase('user_id');?>:</td>
                        <td><b><?php echo  $row['admin_id'];?></b></td>
                    </tr>
               
					
					
							
                    <tr>
                        <td><?php echo get_phrase('email');?>:</td>
                        <td><b><?php echo  $row['email'];?></b></td>
                    </tr>
                   
					
			
                    <tr>
                        <td><?php echo get_phrase('join_date');?>:</td>
                        <td><b><?php echo $row['date_of_join'];?></b></td>
                    </tr>
                
                    <tr>  
                        <td><?php echo get_phrase('sex');?>:</td>
                        
						<td><?php echo $row['Sex'];?></td>
                    </tr>
                  
                    <tr>  
                        <td> <?php echo get_phrase('phone');?>:</td>
                        
					       <?php $phone  = $row['phone'];?>
							   
								 
								   <?php if($phone ==''){?>
								          <td>_________</td>
								 
								 	<?php } else{?>
								
									 <td><?php echo $row['phone'];?></td>
									<?php }?>
                    </tr>
            
                    <tr>
                        <td><?php echo get_phrase('role');?>:</td>
                        <td><b>Insurance <?php echo $row['role'];?></b></td>
                    </tr>
                 
                    <tr>
                        <td><?php echo get_phrase('status');?>:</td>
						<?php $tatus= $row['status'];?>
						 <?php if($tatus=='0'){?>
                        <td><b><?php echo 'Now offline';?></b></td>
						
						 <?php }else{ ?>
						  <td><img src="uploads/online.png"><b><?php echo 'Now online';?></b></td>
						 
						 	 <?php }?>
						 
                    </tr>
					
					<?php $x= $row['password'];?>
                        <?php if (trim($x=='092178478b5b7f2ad4c5531604efa95e')){?>
                    <tr>
                        <td><?php echo get_phrase('password');?>:</td>
                        <td><b> Defualt Password</b></td>
                    </tr>
                     <?php }else{ ?>
					 
					    <tr>
                        <td><?php echo get_phrase('password');?>:</td>
                        <td><b><?php echo $row['password'];?></b></td>
                    </tr>
					 <?php }?>
                    <tr>
                        <td><?php echo get_phrase('active');?>?</td>
                        <td><b><?php echo $row['active'];?></b></td>
                    </tr>
                   <?php  $self = $row['registered_by'];?>
                    <tr>
                        <td><?php echo get_phrase('registered_by');?>:</td>
                             
							 
							  
							  <?php if($self =='self'){?>
							  <td><b><?php echo $row['registered_by'];?></b></td>
							  <?php }
							  else{ ?>
							  
						 <td><b><?php echo $this->crud_model->get_type_name_by_id('admin',$row['registered_by']);?></b></td>
							  <?php }?>
					   </td>
                    </tr>
               
			
					
                  </fieldset> 
                </table> 
				
			</div>
		</div>	 	
	</section>
	
	
	
</div>


<?php endforeach;?>