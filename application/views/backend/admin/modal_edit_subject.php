<?php 
$edit_data		=	$this->db->get_where('subject' , array('subject_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php// echo get_phrase('edit_student');?> Editing form
            	</div>
            </div>
			<div class="panel-body">
				
                <?php //echo form_open(base_url() . 'index.php?admin/subject/'.$row['class_id'].'/do_update/'.$row['subject_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
				<?php echo form_open(base_url() . 'index.php?admin/subject/do_update/'.$row['subject_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                	

	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['name'];?>">
						</div>
					</div>
					
								
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('roll');?>TTLM Code:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="TTLM_Code" value="<?php echo $row['TTLM_Code'];?>" >
						</div> 
					</div>
					
					
<!--
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('parent');?></label>
                        
						<div class="col-sm-5">
							<select name="parent_id" class="form-control select2" data-validate="required" data-message-required="<?php //echo get_phrase('value_required');?>">
                              <option value=""><?php// echo get_phrase('select');?></option>
                              <?php 
									//$parents = $this->db->get('parent')->result_array();
									//foreach($parents as $row3):
										?>
                                		<option value="<?php// echo $row3['parent_id'];?>"
                                        	<?php //if($row['parent_id'] == $row3['parent_id'])echo 'selected';?>>
													<?php //echo $row3['name'];?>
                                                </option>
	                                <?php
									//endforeach;
								  ?>
                          </select>
						</div> 
					</div>
					 -->
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
									$classes = $this->db->get('class')->result_array();
									foreach($classes as $row2):
										?>
                                		<option value="<?php echo $row2['class_id'];?>"
                                        	<?php if($row['class_id'] == $row2['class_id'])echo 'selected';?>>
													<?php echo $row2['name'];?>
                                                </option>
	                                <?php
									endforeach;
								  ?>
                          </select>
						</div> 
					</div>

						<!--
						<div class="form-group">
							<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('section');?></label>
			                    <div class="col-sm-5">
			                        <select name="" class="form-control" id="section_selector_holder">
			                            <option value=""><?php //echo get_phrase('select_class_first');?></option>
				                        
				                    </select>
				                </div>
						</div>
					-->
		
		               <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('section');?></label>
                        
						<div class="col-sm-5">
							<select name="level" class="form-control selectboxit">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="I" <?php if($row['level'] == 'I')echo 'selected';?>>Level I</option>
                              <option value="II"<?php if($row['level'] == 'II')echo 'selected';?>>Level II</option>
                               <option value="III" <?php if($row['level'] == 'III')echo 'selected';?>>Level III</option>
                              <option value="IV"<?php if($row['level'] == 'IV')echo 'selected';?>>Level IV</option>
                         

						 </select>
						</div> 
					</div> 
					
			
						  		<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php// echo get_phrase('roll');?> Nominal Duration:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="Duration" placeholder="" value="<?php echo $row['Duration'];?>">
						</div> 
					</div>
						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php //echo get_phrase('photo');?>Upload handout</label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">No file selected</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" value="<?php echo $row['userfile'];?> ">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php// echo get_phrase('edit_student');?>Update </button>
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

    var class_id = $("#class_id").val();
    
    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });


</script>