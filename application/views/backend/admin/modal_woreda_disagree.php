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
					<?php echo get_phrase('terminate_organzation_agreement');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/woredas/end/' . $row['district_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
					
					
						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly name="woreda_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['woreda_id'];?>">
						</div>
					</div>
					
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Organization/Woreda');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['name'];?>">
						</div>
					   </div>
                    			
				 	       <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('Agreement');?>:</label>
                        
						<div class="col-sm-5">
							<select name="agreed" style="color:red;" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
							onchange="get_indegent_patients(this.value)">
                         <option value="">..............</option>
						      <option value="Terminated"><?php echo get_phrase('terminated');?></option>
                          </select>
						  
						  
						</div> 
					</div>
	   
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('end_agreement');?></button>
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