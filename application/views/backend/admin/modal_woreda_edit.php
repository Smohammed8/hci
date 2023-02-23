<?php 
	$edit_data = $this->db->get_where('parent' , array('district_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="fa fa-edit"></i>
					<?php echo get_phrase('edit woreda');?> 
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/woredas/edit/'.$row['district_id'] ,array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
					
					
						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="woreda_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['woreda_id'];?>">
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Organization/Woreda');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['name'];?>">
						</div>
					</div>
                    			
									
						<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							
								<select name="class_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>">
								
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
									$classes = $this->db->get('class')->result_array();
									foreach($classes as $row2):
										?>
                                		<option value="<?php echo $row2['class_id'];?>"
                                			<?php if ($row['class_id'] == $row2['class_id'])
                                				echo 'selected';?>>
													<?php echo $row2['name'];?>
                                        </option>
                                    <?php
									endforeach;
								?>
                          </select>
						</div> 
					</div>
					
						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('zone_code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="section_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['section_id'];?>">
						</div>
					</div>
					     <input type="hidden"  value="<?php echo $row['woreda_id'];?>" class="form-control" name="wcode">
				    	<input type="hidden"  value="<?php echo $row['class_id'] ;?>" class="form-control" name="region">
				  		<input type="hidden"  value="<?php echo $row['section_id'] ;?>" class="form-control" name="zone">
						
						
                    <input type="hidden" class="form-control" name="permission" value="<?php echo $row['permission'];?>">
					<input type="hidden" class="form-control" name="agreed"  value="<?php echo $row['agreed'];?>">
                            
		
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('agreement');?></label>
                        
						<div class="col-sm-5">
						<select name="agreemenrt_type" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="CB Health Insurance" <?php if($row['agreemenrt_type']=='CB Health Insurance')echo 'selected';?>><?php echo get_phrase('CB Health Insurance');?></option>
							  <option value="Credit Service"<?php if($row['agreemenrt_type']=='Credit Service')echo 'selected';?>><?php echo get_phrase('Credit Service');?></option>
                          </select>
						</div> 
					</div>
					
					

                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('update');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>