

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
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_new_woreda');?> 
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/woredas/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	
	
			<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('nick_name');?>Code</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="woreda_id" value="" >
						</div> 
					</div>

		
				<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('class');?> </label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php echo get_phrase('value_required');?>"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['class_id'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>

			         <div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('zone');?></label>
		                    <div class="col-sm-5">
		                        <select name="section_id" class="form-control" id="section_selector_holder" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
					
				
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php //echo get_phrase('name');?>Woreda or Organization:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" id="txt_firstCapital" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
			
				
			<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php //echo get_phrase('class');?>Agreemenrt type: </label>
                        
						<div class="col-sm-5">
							<select name="agreemenrt_type" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						      <option value=""><?php echo get_phrase('select');?></option>
                           
                              <?php 
								$agreement = $this->db->get('agreement')->result_array();
								foreach($agreement as $rows):
									?>
                            		<option value="<?php echo $rows['agreement'];?>">
											<?php echo $rows['agreement'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
							  
						      
                          </select>
						</div> 
					</div>
               
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><?php //echo get_phrase('add_section');?> Add Woreda</button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
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