<script>
jQuery(document).ready(function() {
	
	// 1 Capitalize string - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
	
	// 2 Capitalize string first character to uppercase
	jQuery('#txtcapital').keyup(function() {
		var caps = jQuery('#txtcapital').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital').val(caps);
	});
	
	// 3 Capitalize string every 1st chacter of word to uppercase
	jQuery('#name').keyup(function() 
	{
		var str = jQuery('#name').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#name').val(spart.join(" "));
	
	});
});
</script>
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
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_teacher');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/users/do_update/'.$row['admin_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
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
                                <label class="col-sm-3 control-label"><?php echo get_phrase('user_id');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="admin_id" value="<?php echo $row['admin_id'];?>"/>
                                </div>
                            </div>
							
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('join_date');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="datepicker form-control" name="date_of_join" value="<?php echo $row['date_of_join'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('sex');?></label>
                                <div class="col-sm-5">
                                    <select name="Sex" class="form-control selectboxit">
                                    	<option value="Male" <?php if($row['sex'] == 'Male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="Female" <?php if($row['sex'] == 'Female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
		
							
							
							
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('usename');?></label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
							 <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="password" value="<?php echo $row['password'];?>"/>
                                </div>
                            </div>
							
							
							
							
							
							
							
							 <?php if($role=='Super_admin'){?>
						 	<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
						<div class="col-sm-5">
			<select name="role" class="form-control" data-validate="required" id="role"> 
                        <option value=""><?php echo get_phrase('select');?></option>
		             	<option value="Super_admin" <?php if($row['role'] == 'Super_admin')echo 'selected';?>><?php echo get_phrase('super_adminstrator');?></option>
			            <option value="Admin" <?php if($row['role'] == 'Admin')echo 'selected';?>><?php echo get_phrase('system_adminstrator');?></option>
                        <option value="User" <?php if($row['role'] == 'User') echo 'selected';?>><?php echo get_phrase('user');?></option>
			             <option value="Head" <?php if($row['role'] == 'Head')echo 'selected';?>><?php echo get_phrase('financ_head');?></option>
                       <option value="Org" <?php if($row['role'] == 'Org')echo 'selected';?>>Client</option>  
							   
                          </select>
						</div> 
				    	</div>
				 <?php }  else{ ?>
					 
					 		<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
						<div class="col-sm-5">
							<select name="role" class="form-control" data-validate="required" id="role"> 
                              <option value=""><?php echo get_phrase('select');?></option>
							  
				              <option value="Admin" <?php if($row['role'] == 'Admin')echo 'selected';?>><?php echo get_phrase('system_adminstrator');?></option>
                              <option value="User" <?php if($row['role'] == 'User')echo 'selected';?>><?php echo get_phrase('user');?></option>
			                  <option value="Head" <?php if($row['role'] == 'Head')echo 'selected';?>><?php echo get_phrase('financ_head');?></option>
                              <option value="Org" <?php if($row['role'] == 'Org')echo 'selected';?>>Client</option>
							   
							   
                          </select>
						</div> 
				    	</div>
				 <?php }?>
							
								
					
	            <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-5">
                                <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('edit_user');?></button>
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
