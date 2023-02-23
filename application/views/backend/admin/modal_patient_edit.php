<?php 
$edit_data		=	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_patient');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/student/'.$row['class_id'].'/update/'.$row['mrn_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php echo $this->crud_model->get_image_url('student' , $row['mrn_id']);?>" alt="...">
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
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['name'];?>">
						</div>
					</div>


		        <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" required="required" id="class_id"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row2):
									?>
                            		<option value="<?php echo $row2['class_id'];?>">
											<?php echo $row2['name'];?>
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
		                        <select name="section_id" class="form-control" id="section_selector_holder" required="required" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
					
								<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('woreda');?></label>
                        
						<div class="col-sm-5">
							<select name="woreda_id" class="form-control" id="woreda_id"  required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
				<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('age');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="age" value="<?php echo $row['age'];?>" data-start-view="2">
						</div> 
					</div>
	
			
								<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('agreement');?></label>
                        
						<div class="col-sm-5">
							<select name="agreement" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="CB Health Insurance" <?php if($row['agreement'] == 'CB Health Insurance')echo 'selected';?>><?php echo get_phrase('CB Health Insurance');?></option>
                              <option value="Health Care finance"<?php if($row['agreement'] == 'Health Care finance')echo 'selected';?>><?php echo get_phrase('Health Care finance');?></option>
                             <option value="Credit Service"<?php if($row['agreement'] == 'Credit Service')echo 'selected';?>><?php echo get_phrase('Credit Service');?></option>
                             
						 </select>
						</div> 
					</div>
					
		
					
					
								<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('indigent');?></label>
                        
						<div class="col-sm-5">
							<select name="indigent" class="form-control" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="H" <?php if($row['indigent'] == 'H')echo 'selected';?>><?php echo get_phrase('H');?></option>
                              <option value="K"<?php if($row['indigent'] == 'K')echo 'selected';?>><?php echo get_phrase('K');?></option>
							  <option value="Student" <?php if($row['indigent'] == 'Student')echo 'selected';?>><?php echo get_phrase('student');?></option>
                              <option value="Employee"<?php if($row['indigent'] == 'Employee')echo 'selected';?>><?php echo get_phrase('employee');?></option>
                              <option value="Prisoner" <?php if($row['indigent'] == 'Prisoner')echo 'selected';?>><?php echo get_phrase('prisoner');?></option>
                              
							
						 </select>
						</div> 
					</div>		
                 <!--
		           <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('date');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly name="reg_date" value="<?php //echo $row['reg_date'];?>" data-start-view="2">
						</div> 
					</div>  -->
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('mrn');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="mrn_id" value="<?php echo $row['mrn_id'];?>" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('cbhi');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="cbhi" value="<?php echo $row['cbhi'];?>" data-start-view="2">
						</div> 
					</div>
						<!--		
								<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('encouter');?></label>
                        
						<div class="col-sm-5">
							<select name="encouter" class="form-control">
                              <option value=""><?php //echo get_phrase('select');?></option>
                              <option value="OPD" <?php //if($row['encouter'] == 'OPD')echo 'selected';?>><?php //echo get_phrase('Visit(OPD)');?></option>
                              <option value="IPD"<?php //if($row['encouter'] == 'IPD')echo 'selected';?>><?php //echo get_phrase('Admission(IPD)');?></option>
                             
						 </select>
						</div> 
					</div>  -->
				
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="M" <?php if($row['sex'] == 'M')echo 'selected';?>><?php echo get_phrase('male');?></option>
                              <option value="F"<?php if($row['sex'] == 'F')echo 'selected';?>><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
					
						<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('kebele');?></label>
                        
						<div class="col-sm-5">
							<input type="text"  class="form-control" name="kebele" value="<?php echo $row['kebele'];?>" data-start-view="2">
						</div> 
					</div>
					
					<!--	
				<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php// echo get_phrase('kebele_cod');?></label>
                        
						<div class="col-sm-5">
							<input type="text"  class="form-control" name="kebele_code" value="<?php //echo $row['kebele_code'];?>" data-start-view="2">
						</div> 
					</div>
					-->
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>" >
						</div> 
					</div>
                   

                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('edit_patient');?></button>
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

</script>


<script type="text/javascript">

	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_id').html(response);
            }
        });

    }

</script>