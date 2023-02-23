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
					<?php //echo get_phrase('new');?> New Letter 
            	</div>
            </div>
			<div class="panel-body" style="background-color:#ccdbdc;">
				
             
            
					 <?php echo form_open(base_url() . 'index.php?admin/encouter/new_letter/'.$row['encounter_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
			
							<input type="hidden" class="form-control"   value= "<?php echo $row['encounter_id'];?>" name="encounter_id"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">

				<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('medical_record_number');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="mrn_id" readonly  value= "<?php echo $row['mrn_id'];?>">
						</div>
					</div>
						
                          <?php
						  $mrn_id  =  $row['mrn_id'];
		                  $res = mysql_query("select full_code from patients where mrn_id='$mrn_id'");
					    	 while($rows= mysql_fetch_array($res)){
						   $full_code = $rows['full_code'];
					     	 }
                          ?>
					          <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label">Old Letter Code</label>
                        
						<div class="col-sm-5">
							 <input type="text" readonly class="form-control" name="full_code" value="<?php echo $full_code;?>"/>
						</div> 
					</div>
					 <input type="hidden" class="form-control" name="indigent" value="<?php echo $row['indigent'];?>"/>
					
					 <div class="form-group">
                                <label class="col-sm-3 control-label">Today Letter Code:</label>
                                <div class="col-sm-5">
                                   
									 <input type="text" class="form-control" name="code" required="required"/>   
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

<?php
endforeach;
?>

