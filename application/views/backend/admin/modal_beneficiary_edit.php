  
<script>
jQuery(document).ready(function() {
	
	// 1 FIRST NAME  - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
		// 1 MIDDLE NAME  - convert textbox user entered text to uppercase
	jQuery('#txtuppercase1').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
		// 1 LAST NAME - convert textbox user entered text to uppercase
	jQuery('#txtuppercase2').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
	
	// 1 First name Capitalize string first character to uppercase
	jQuery('#txtcapital').keyup(function() {
		var caps = jQuery('#txtcapital').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital').val(caps);
	});
		// 1 Middle name Capitalize string first character to uppercase
	jQuery('#txtcapital2').keyup(function() {
		var caps = jQuery('#txtcapital2').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital2').val(caps);
	});
		
	// 2 Last name Capitalize string first character to uppercase
	jQuery('#txtcapital3').keyup(function() {
		var caps = jQuery('#txtcapital3').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital3').val(caps);
	});
		// 2 Kebele Capitalize string first character to uppercase
	jQuery('#txtcapital4').keyup(function() {
		var caps = jQuery('#txtcapital4').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital4').val(caps);
	});
	
	// 3 Last Name Capitalize string every 1st chacter of word to uppercase
	jQuery('#txt_firstCapital').keyup(function() 
	{
		var str = jQuery('#txt_firstCapital').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#txt_firstCapital').val(spart.join(" "));
	
	});
});

</script>

<?php 
$edit_data		=	$this->db->get_where('beneficiary' , array('beneficiary_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('edit_beneficiary');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/beneficiary/update/'.$row['beneficiary_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                
                	
	
					<div class="form-group">
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="<?php echo $this->crud_model->get_image_url('beneficiary' , $row['beneficiary_id']);?>" alt="...">
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
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" id="txtuppercase" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['name'];?>">
						</div>
					</div>


			            	<input type="hidden" class="form-control" name="beneficiary_id"  value="<?php echo $row['beneficiary_id'];?>">
							<input type="hidden" class="form-control" name="region" value="<?php echo $row['region'];?>">
						
							<input type="hidden" class="form-control" name="zone" value="<?php echo $row['zone'];?>">
						
							<input type="hidden" class="form-control" name="woreda"  value="<?php echo $row['woreda'];?>">
					
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;" style="font-weight:bold;" class="col-sm-3 control-label">Date of Birth</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="dob"  value="<?php echo $row['dob'];?>"> 
						</div>
                           (DD-MM-YYYY)          					
					</div>	
	                  <div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('indigent');?></label>
                        
						<div class="col-sm-5">
							<select name="indigent" class="form-control" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              
                              <option value="H" <?php if($row['indigent'] == 'H')echo 'selected';?>><?php echo get_phrase('H');?></option>
                              <option value="K"<?php if($row['indigent'] == 'K')echo 'selected';?>><?php echo get_phrase('K');?></option>
							 
						 </select>
						</div> 
					</div>	
	              <div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('cbhi');?></label>
                        
						<div class="col-sm-5">
							<input type="text"  class="form-control" name="cbhi" value="<?php echo $row['cbhi'];?>">
						</div> 
					</div>					
      	              <div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('family_code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="family_code" value="<?php echo $row['family_code'];?>">
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('relation');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" id="txt_firstCapital" name="relation" value="<?php echo $row['relation'];?>" >
						</div> 
					</div>
					
				
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                        
						<div class="col-sm-5">
							<select name="sex" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="M" <?php if($row['sex'] == 'M')echo 'selected';?>><?php echo get_phrase('male');?></option>
                              <option value="F"<?php if($row['sex'] == 'F')echo 'selected';?>><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
					
						<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('kebele');?></label>
                        
						<div class="col-sm-5">
							<input type="text"  class="form-control" name="kebele" value="<?php echo $row['kebele'];?>">
						</div> 
					</div>

					<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>" >
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