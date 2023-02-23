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
                    <?php echo form_open(base_url() . 'index.php?admin/users/disable/'.$row['admin_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
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
                                <label class="col-sm-3 control-label"><?php echo get_phrase('activated');?>:</label>
                                <div class="col-sm-5">
                                    <select name="active" class="form-control">
                                    	<option value="yes" style="color:green;" <?php if($row['active'] == 'yes')echo 'selected';?>><?php echo get_phrase('Enabled');?></option>
                                    	<option value="no" style="color:red;" <?php if($row['active'] == 'no')echo 'selected';?>><?php echo get_phrase('Disabled');?></option>
                                    </select>
                                </div>
                            </div>
		
							
							
							
                            
                            
                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                               <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-edit"></i>&nbsp;<?php echo get_phrase('disable_user');?></button>
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