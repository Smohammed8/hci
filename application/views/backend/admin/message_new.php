<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('write_your_message');?>
            	</div>
            </div>
			<?php
			  $login_user_id    = $this->session->userdata('admin_id');
			  $sender     = $this->session->userdata('login_type');
			
			 ?>
			 
    										<?php 
   $data2 =	$this->db->get_where('admin' , array('admin_id' =>$login_user_id ))->result_array();
   foreach($data2 as $rows):
		 $role   =$rows["role"]; 
		                  
     ?>

	 <?php endforeach; ?>
	 	 <?php $us ='User'; $sup ='Super_admin'; ?>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/message/send_new_message/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
  
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-1 control-label"><?php echo get_phrase('recipient');?></label>
                        
						<div class="col-sm-5">
						 <?php if($role =='Super_admin' or $role=='Admin'){?>
							<select name="reciever" class="form-control" data-validate="required" 
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option style="font-weight:bold;"  value=""><?php echo get_phrase('select_a_user');?></option>
							  <?php
                             	$user = $this->db->get_where('admin' , array('admin_id!='=> $login_user_id ))->result_array();
							    foreach ($user as $row):
								?>
                            		<option  style="font-weight:bold;"  value="<?php echo $row['admin_id'];?>">
											<?php echo $row['name'];?> [<?php echo $row['phone'];?> ]
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						 <?php }  
						 else if($role =='Head'){?>
						 		<select name="reciever" class="form-control" data-validate="required" 
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option style="font-weight:bold;" value=""><?php echo get_phrase('select_a_user');?></option>
							  <?php
							   $client ='Org';
							   $user   = 'User';
							   $admin2 ='Admin';
							   $head   = 'Head';
                             	$user = $this->db->get_where('admin' , array('admin_id!='=> $login_user_id, 'role!='=>$admin2))->result_array();
							    foreach ($user as $row):
								?>
                            		<option style="font-weight:bold;"  value="<?php echo $row['admin_id'];?>">
											<?php echo $row['name'];?> [<?php echo $row['phone'];?> ]
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						 
						 <?php  } 
						  else if ($role =='User'){      
						    $user ='User';  $head ='Head'; $client ='Org';  $admin3 ='Super_admin'; $admin1 ='Admin';?>
						 
						 	<select name="reciever" class="form-control" data-validate="required" 
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option style="font-weight:bold;" value=""><?php echo get_phrase('select_a_user');?></option>
							  <?php
                             	$user = $this->db->get_where('admin' , array('admin_id!='=>$login_user_id, 'role!='=>$admin3,'role!='=>$client,'role!='=>$admin1))->result_array();
							    foreach ($user as $row):
								?>
                            		<option  style="font-weight:bold;" value="<?php echo $row['admin_id'];?>">
											<?php echo $row['name'];?>  [<?php echo $row['phone'];?> ]
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						 
						 <?php } else {  
						    $us ='User'; $sup ='Super_admin'; $admin1 ='Admin'; ?>
						  		<select name="reciever" class="form-control" data-validate="required" 
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option style="font-weight:bold;" value=""><?php echo get_phrase('select_a_user');?></option>
							  <?php
                             	$user = $this->db->get_where('admin' , array('admin_id!='=>$login_user_id,'role!='=>$us,'role!='=>$sup,'role!='=>$admin1))->result_array();
							    foreach ($user as $row):
								?>
                            		<option style="font-weight:bold;"  value="<?php echo $row['admin_id'];?>">
											<?php echo $row['name'];?> [<?php echo $row['phone'];?> ]
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						   <?php }?>
						</div> 
					</div>


<div class="mail-reply">
    <div class="compose-message-editor">
        <textarea rows="5" cols="10" name="message" class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="message"  placeholder="<?php echo get_phrase('Write message...'); ?>" id="sample_wysiwyg"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-icon pull-right">
        <?php echo get_phrase('send'); ?>
        <i class="entypo-mail"></i>
    </button>
    <br><br>
</div>


				
				
			
                    
                 
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

