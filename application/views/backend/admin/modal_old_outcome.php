<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $Today;
?>
<?php 
$edit_data		=	$this->db->get_where('treatment' , array('encounter_id'=>$param2) )->result_array();
foreach($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading" style="background-color:#ccdbdc;">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('patient_evolution');?>
            	</div>
            </div>
			<div class="panel-body" style="background-color:#ccdbdc;">
				
               <?php echo form_open(base_url() . 'index.php?admin/encouter/outcome/'.$row['encounter_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
		       
					
					
									<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('MRN');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="mrn_id" readonly   value="<?php echo $row['mrn_id'];?>">
						</div>
					</div>
						
					
					
						<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php  echo get_phrase('CBHI Code');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly  value="<?php echo $row['CBHI_code'];?>">
						</div>
					</div>
					
					
						
								<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('patient outcome:');?></label>
						<div class="col-sm-5">
						  		<select name="outcome" class="form-control"  required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
							  $result = mysql_query("SELECT * FROM `outcome` ORDER BY `outcome`.`outcome_id` DESC");
								 while($row = mysql_fetch_array($result)){ ?>
									<option value="<?php echo $row['name'];?>">
											<?php echo $row['name'];?>
                                            </option> 
									 
							<?php	 } ?>
						
			                        
			                    </select>
						</div> 
					</div>
					
			
					
									<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('reason_out');?></label>
						
                       
						<div class="col-sm-5">
							<select name="reason" class="form-control" required="required">
                               <option value=""><?php echo get_phrase('select');?> reason</option>
							 
							   
							   
							       <?php 
							  $res = mysql_query("SELECT * FROM `outcome_reason`  ORDER BY `reason` ASC");
								 while($data = mysql_fetch_array($res)){ ?>
									<option value="<?php echo $data['reason'];?>">
											<?php echo $data['reason'];?>
                                            </option> 
									 
							<?php	 } ?>
						
							 
                          </select>
						</div> 
					</div>
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right">  <i class="fa  fa-check-square-o"></i> <?php echo get_phrase('close_encounter');?></button>
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

