<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $Today;
?>
<?php 
$edit_data		=	$this->db->get_where('treatment' , array('encounter_id' => $param2) )->result_array();
foreach($edit_data as $row):

$Date_of_service= $row['Date_of_service'];
$encounter = $row['encounter'];

?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading" style="background-color:#ccdbdc;">
            	<div class="panel-title" >
            		<i class="fa fa-usd"></i>
						Collect Service Change <?php //echo get_phrase('collect_insurance_data');?>
            	</div>
            </div>
			<div class="panel-body" style="background-color:#ccdbdc;">
				
           <?php echo form_open(base_url() . 'index.php?admin/add_payment/add_pay/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
		       
					
					
									<div class="form-group">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('Date_of_service');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly  value= "<?php echo $row['Date_of_service'];?>" name="Date_of_service">
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['encounter_id'];?>" name="encounter_id">
						</div>
					</div>
						
					
	
						<div class="form-group">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label">Given <?php echo get_phrase('service');?></label> 
						<div class="col-sm-5">
						<?php if($encounter=='OPD'){?>
							<select name="treatment" class="form-control" required="required"  id="cost"  data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								/*$card ='card';
								$bed  = 'Bed_fee';
								$serv =$this->db->get_where('services' , array('name!='=>$card, 'name!='=>$bed))->result_array();
								foreach($serv as $row2):
									?>
                            		<option value="<?php echo $row2['name'];?>">
										
											    
											   <?php  echo $row2['name'];
											       ?>	 
                                            </option>
                                <?php
								endforeach; */
							  ?>
							  <option value="drugs"> Drugs </option>
							  <option value="surgery">Procedure</option>
							  <option value="Imaging">Imaging</option>
							  <option value="lab"> Laboratory</option>
							  <option value="other">Other</option>
                          </select>
						<?php }else{  ?> 
						<select name="treatment" class="form-control" required="required"  id="cost" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
							<!--  <option value="Bed_fee">Bed Charge</option> -->
							
							  <option value="drugs">  Drugs </option>
							  <option value="surgery">Procedure</option>
							  <option value="Imaging">Imaging</option>
							  <option value="lab">    Laboratory</option>
							  <option value="other">  Other</option>
                          </select>
						<?php }  ?>
						</div> 
					</div>

       
							     <div class="form-group">
                                <label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label">#<?php echo get_phrase('Price');?>(ETB):</label>
                                <div class="col-sm-5">
                                    <input type="number" step="0.01" min="1"   max="2000" class="form-control" name="price" required="required" value=""/>
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
							
							  <button type="submit" style="font-weight:bold;" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('submit');?></button>
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