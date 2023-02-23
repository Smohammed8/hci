<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>




<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="#list" data-toggle="tab"><i class="entypo-user"></i> 
					Check patient status against discharge standards
                    	</a></b>
						</u>
				</div>
            </div>
			
			<div class="panel-body" style="color:black;font-weight:bold;">
				
                <?php echo form_open(base_url() . 'index.php?admin/cheecklist/add/' , array('class' => 'form-horizontal form-groups-bordered validate', onsubmit =>'return check(this)', 'enctype' => 'multipart/form-data')); ?>
	
         
			 
					
				<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						  1. <input type="checkbox" style="">&nbsp;&nbsp;Body temperature remains normal for at least 3 days (ear temperature is lower than 37.5 °C)
						</div>
					</div>
					
							
				<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						 2. <input type="checkbox" style="">&nbsp;&nbsp;Respiratory symptoms are significantly improved
						</div>
					</div>
					
									
				<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						   3. <input type="checkbox" style="">&nbsp;&nbsp;The nucleic acid is tested negative for respiratory 
						  tract pathogen twice consecutively (sampling interval more than 24 hours); 
						  the nucleic acid test of stool samples can be performed at the same time if possible
						</div>
					</div>
					
										
				<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						  4. <input type="checkbox" style="">&nbsp;&nbsp;Lung imaging shows obvious improvement in lesions
						</div>
					</div>
						<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						  5. <input type="checkbox" style="">&nbsp;&nbsp;There is no comorbidities or complications which require hospitalization;
						</div>
					</div>
					
						<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						   6. <input type="checkbox" style="">&nbsp;&nbsp;SpO2 > 93% without assisted oxygen inhalation
						</div>
					</div>
						<div class="form-group">
				
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-8">
						  7. <input type="checkbox" style="">&nbsp;&nbsp;Discharge approved by multi-disciplinary medical team
						</div>
					</div>
					
					   <div class="form-group">
						<label for="field-1" style="font-weight:bold;color:black;" class="col-sm-3 control-label"></label>
                        
						<div class="col-sm-5">
							Note on patient status
							 <textarea rows="3" cols="10" name="message" class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="message"  placeholder="Write about patient details" id="sample_wysiwyg"></textarea>
   
						</div>
						
       
					</div>
				
                    <div class="form-group">
					
						<div class="col-sm-offset-3 col-sm-5">
		
							
					
					  <button type="submit" style="font-weight:bold;" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('save');?></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				
						</div>
					</div>
                <?php echo form_close();?>
			
            </div>
			
				
			
        </div>
    </div>
</div>

