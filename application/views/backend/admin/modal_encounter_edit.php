<?php 	$re25 = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ross = mysql_fetch_array($re25)) {
				$year  = $ross['year'];
				$backyear  = $year-1;
				}
?>

<?php 
$edit_data		=	$this->db->get_where('treatment' , array('encounter_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading" style="background-color:#ccdbdc;">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<b><?php echo get_phrase('Editing_encounter');?> </b>
            	</div>
            </div>
			<div class="panel-body" style="background-color:#ccdbdc;">
				
             
            
					 <?php echo form_open(base_url() . 'index.php?admin/encouter/do_edit/' .$row['encounter_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
				


					

							<input type="hidden" class="form-control"   value= "<?php echo $row['encounter_id'];?>" name="encounter_id"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
				

					
				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('MRN');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  value= "<?php echo $row['mrn_id'];?>" name="mrn_id"   data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					
					        <input type="hidden" class="form-control" name="indigent" value="<?php echo $row['indigent'];?>"/> 
						
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('Main Diagniss(HMIS)');?>:</label>
                                <div class="col-sm-5">
                                   
									 <textarea type="textarea" class="form-control" name="diagniss" value=""/>    </textarea>
                                </div>
                            </div>
					     
                                   
									 <input type="hidden" class="form-control" name="Date_of_service" value="<?php echo $row['Date_of_service'];?>"/>   
                              
							 <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('age');?>:</label>
                                <div class="col-sm-5">
                                   
									 <input type="number" class="form-control" min ="0" max="120" name="age" required value="<?php echo $row['age'];?>"/>   
                                </div>
                            </div>
					        <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('year');?>:</label>
                                <div class="col-sm-5">
                                   
									 <input type="number" class="form-control" min="<?php echo $backyear;?>"  max="<?php echo $year;?>" name="year" required value="<?php echo $row['year'];?>"/>   
                                </div>
                           </div>
						    <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('month');?>:</label>
                                <div class="col-sm-5">
                                   
									 <input type="number" class="form-control" min="1" max="13" name="month" required value="<?php echo $row['month'];?>"/>   
                                </div>
                           </div>
						   
		                <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('encounter');?>: </label>
                        
						<div class="col-sm-5">
							<select name="encounter" class="form-control" data-validate="required"  data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
							  <option value="OPD" <?php if($row['encounter'] == 'OPD')echo 'selected';?>><?php echo get_phrase('Visit(OPD)');?></option>
                              <option value="IPD"<?php if($row['encounter'] == 'IPD') echo 'selected';?>><?php echo get_phrase('Admission(IPD)');?></option>
                             
                      
                          </select>
						</div> 
					</div>
					
					
<div class="panel-heading" style="background-color:#ccdbdc;">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<b><?php echo get_phrase('Edit_price');?></b>
            	</div>
            </div>

					
			   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('card');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"   maxlength="2"  min ="0" max="10" class="form-control"  name="card" value="<?php echo $row['card'];?>"/>
                                </div>
                            </div>
							
							
	    <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('lab');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"   maxlength="4" min ="0"  class="form-control"  name="lab" value="<?php echo $row['lab'];?>"/>
                                </div>
                            </div>
							
							
			 <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase(' imaging');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"   maxlength="4" min ="0"  class="form-control"  name="Imaging" value="<?php echo $row['Imaging'];?>"/>
                                </div>
                            </div>
						
							
			   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('procedure ');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"   maxlength="4" min ="0"  class="form-control"  name="surgery" value="<?php echo $row['surgery'];?>"/>
                                </div>
                            </div>

				   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('drug');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"   min ="0" step="0.01" class="form-control"  name="drugs" value="<?php echo $row['drugs'];?>"/>
                                </div>
                            </div>
												
			     <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('bed');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"   maxlength="2"  min ="0"  class="form-control"  name="Bed_fee" value="<?php echo $row['Bed_fee'];?>"/>
                                </div>
                            </div>
							
							
												
			 <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('other');?> :</label>
                                <div class="col-sm-5">
                                    <input type="number"   min ="0" step ="0.01"  class="form-control"  name="other" value="<?php echo $row['other'];?>"/>
                                </div>
                            </div>
							
					<div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('remark');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text"  class="form-control"  name="remark" value="<?php echo $row['remark'];?>"/>
                                </div>
                            </div
							
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