<?php 
	$edit_data = $this->db->get_where('kebele' , array('kebele_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="fa fa-edit"></i>
					<?php echo get_phrase('edit kebele');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url().'index.php?admin/kebele/edit/' . $row['kebele_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
			<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="kebele_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['kebele_code'];?>">
						</div>
					</div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('kebele_name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['name'];?>">
						</div>
					</div>		
						<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							<select name="region_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['class_id'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('zone');?></label>
		                    <div class="col-sm-5">
		                        <select name="zone_id" class="form-control" id="section_selector_holder" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>				
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('woreda');?></label>
                        
						<div class="col-sm-5">
							<select name="woreda_id" class="form-control" id="woreda_code"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
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


<script type="text/javascript">

	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>