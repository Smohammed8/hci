
				<?php 
   $data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($data as $row3):


		 $role   =$row3["role"]; 
		  
                       
     ?>
	 <?php endforeach; ?>
	 
<?php 
$edit_data		=	$this->db->get_where('admin' , array('admin_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-user"></i>
					<?php echo get_phrase('disable_user');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/users/enable/'.$row['admin_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                                <div class="form-group">
                                <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                                
                                <div class="col-sm-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                            <img src="<?php echo $this->crud_model->get_image_url('admin' , $row['admin_id']);?>" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="userfile" accept="image/*">
                                            </span>
                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('user_id');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="admin_id" value="<?php echo $row['admin_id'];?>"/>
                                </div>
                            </div>
							
							
                         
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('activation');?>:</label>
                                <div class="col-sm-5">
                                    <select name="active" class="form-control">
									<option value="no" style="color:red;" <?php if($row['active'] == 'no')echo 'selected';?>><?php echo get_phrase('Disabled');?></option>
                                    	<option value="yes" style="color:green;" <?php if($row['active'] == 'yes')echo 'selected';?>><?php echo get_phrase('Enabled');?></option>
                                    	
                                    </select>
                                </div>
                            </div>
		
							   <?php if($role=='Super_admin'){?>
							<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
							<div class="col-sm-5">
							<select name="role" class="form-control" data-validate="required"  >
                              <option value=""><?php echo get_phrase('select');?></option>
							   <option value="Super_admin"><?php echo get_phrase('super_adminstrator');?></option>
                              <option value="Admin"><?php echo get_phrase('system_adminstrator');?></option>
							   <option value="Head"><?php echo get_phrase('acountant');?></option>
                               <option value="User"> <?php echo get_phrase('user');?></option>
							   <option value="Org"> <?php echo get_phrase('organization');?></option>
							
							  
							  
                          </select>
						</div> 
					</div>
				 <?php }  else{ ?>
					 
					 		<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
							<div class="col-sm-5">
							<select name="role" class="form-control" data-validate="required" >
                              <option value="Admin"><?php echo get_phrase('system_adminstrator ');?></option>
							   <option value="Head"><?php echo get_phrase('acountant');?></option>
                              <option value="User"> <?php echo get_phrase('user');?></option>
						      <option value="Org"> <?php echo get_phrase('organization');?></option>
                          </select>
						</div> 
					</div>
				 <?php }?>
							
							
                            
                            
                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                               <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-edit"></i>&nbsp;<?php echo get_phrase('enable_user');?></button>
                            </div>
                        </div>
						
						
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>