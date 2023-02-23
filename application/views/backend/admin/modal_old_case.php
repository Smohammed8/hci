<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $Today;
?>
<?php 
$edit_data		=	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
foreach($edit_data as $row):
$mrn_id= $row['mrn_id'];
?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('patient_appointment');?>
            	</div>
            </div>
			<div class="panel-body" style="background-color:#ccdbdc;">
				
               <?php echo form_open(base_url() . 'index.php?admin/encouter/do_pay/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
		       
					     <input type="hidden" class="form-control" readonly   value= "<?php echo $row['mrn_id'];?>" name="mrn_id"      data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
				         <input type="hidden" class="form-control" readonly  value= "<?php echo $row['full_code'];?>" name="CBHI_code"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						 <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('patient outcome:');?></label>
						<div class="col-sm-5">
						  	<select name="outcome" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
							  <?php
                                $result = mysql_query("SELECT * FROM `outcome` ORDER BY `outcome`.`outcome_id` DESC");
								 while($row3 = mysql_fetch_array($result)){ ?>
									<option value="<?php echo $row3['name'];?>">
											<?php echo $row3['name'];?>
                                            </option> 
									 
							<?php	 } ?>
			                        
			                    </select>
						</div> 
					</div>
		         	<div class="form-group">
			            <?php if($row['sex'] =='M'){ ?>
							<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('When she was came?');?>: </label>
							
						<?php } else{ ?>
						   <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('When he was came?');?>: </label>
						<?php }?>
						<div class="col-sm-5">
							<select name="when" class="form-control"  required="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
						
								$treat = $this->db->get_where('treatment' ,array('mrn_id' =>$mrn_id, 'outcome='=>NULL))->result_array();
								
								foreach($treat as $row2):
									?>
                            		<option value="<?php echo $row2['Date_of_service'];?>">
											<?php echo $row2['Date_of_service'];?> 
                                            </option>	
                                <?php
								endforeach;
							  ?>
						
                          </select>
						</div>
						
					</div>
						<div class="form-group">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('service');?></label> 
						<div class="col-sm-5">
						
						<select name="treatment" class="form-control" required="required"  id="cost" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
							  <option value="Bed_fee">Bed Charge</option>
							  <option value="drugs">  Drugs </option>
							  <option value="surgery">Procedure</option>
							  <option value="Imaging">Imaging</option>
							  <option value="lab">    Laboratory</option>
							  <option value="other">  Other</option>
                          </select>
					
						</div> 
				       	</div>
				
							     <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('#Price(ETB)');?> :</label>
                                <div class="col-sm-5">
                                    <input type="number"  step="0.01" min="0" class="form-control"  name="price" value="" required/>
                                </div>.00
                            </div>
					
			         <div class="form-group"  id="remark">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('remark');?>: </label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="req" name="remark" >
						</div>
					</div>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('add');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 3) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }


</script>
<script>
$('#cost').on('change', function() {
    if ($(this).val() === "other"){
        $("#remark").show();
        $("#req").attr("required",true);
    } else {
        $("#remark").hide();
    }
});
</script>
