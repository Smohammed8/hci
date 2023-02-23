<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<script>
jQuery(document).ready(function() {
	
	// 1 First name - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
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
 <script>
function check(f){
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	var letters = /^[A-Za-z]+$/;  
	
	 var number = /^[0-9]+$/; 
	 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  


if(!(f.fname.value.match(letters))) {
			document.getElementById("fn").innerHTML = "Please, Enter character only for first name.";
			f.fname.focus();
			return false;
		} 
if(!(f.mname.value.match(letters))) {
			document.getElementById("mn").innerHTML = "Please, Enter character only for middle name.";
			f.mname.focus();
			return false;
		} 
	if(!(f.lname.value.match(letters))) {
			document.getElementById("ln").innerHTML = "Please, Enter character only for  last name.";
			f.lname.focus();
			return false;
		} 
    
  
   if(!( f.phone.value.match(phoneno)) && (f.phone.value!='')) { 
			document.getElementById("tel").innerHTML = "Invalid phone number!";
			f.phone.focus();
			return false;
		}		
		else 
		return true;
		
	}
  </script>

<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $new;
?>

                              <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                               $min_year = $row2['min_year'];   
                                
								endforeach;
							  ?>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<u><b><a href="#list" data-toggle="tab"><i class="entypo-user"></i> 
					<?php echo get_phrase('personal_info');?>
                    	</a></b>
						</u>
				</div>
            </div>
			
			<div class="panel-body" >
				
                <?php echo form_open(base_url() . 'index.php?admin/student/create/' , array('class' => 'form-horizontal form-groups-bordered validate', onsubmit =>'return check(this)', 'enctype' => 'multipart/form-data')); ?>
	
			<div class="form-group" >
						<label for="field-1"  class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
							        <img src="uploads/user.jpg" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Upload image(optional)</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>

		
					

				        <div class="form-group">
						<label for="field-1" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php //echo get_phrase('MRN');?> <?php echo get_phrase('medical_record_number');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" value="" autocomplete="off" onkeypress="return numbersOnly(event,this.value)" name="mrn_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo set_value('mrn_id');?>" autofocus>
						</div>
					</div>
                         <!--
	                      <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php //echo get_phrase('encounter');?>:</label>
                        
						<div class="col-sm-5">
							<select name="encouter" class="form-control" data-validate="required" id="class_id" 
								data-message-required="<?php //echo get_phrase('value_required');?>">
                                   <option value=""><?php //echo get_phrase('select');?></option>
							  
                                  <option value="OPD"><?php //echo get_phrase('Visit(OPD)');?></option>
							      <option value="IPD"><?php //echo get_phrase('Admission(IPD)');?></option>
							   
							
                          </select>
						</div> 
					</div>-->
					
					
						<div class="form-group">
						<label for="field-1" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('cbhi_no');?> (Personal ID)/Letter no:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" maxlength ="20" name="cbhi"  value="<?php echo set_value('cbhi');?>" placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>

				<div class="form-group">
						<label for="field-1" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('fname');?></label>
                        
						<div class="col-sm-2">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"  id="txtcapital" name="fname" placeholder="First name"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo set_value('fname');?>" autofocus>
						<p style="color:red" id="fn">
						</div>
						<div class="col-sm-2">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"  id="txtcapital2" name="mname" placeholder="Middle name"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo set_value('mname');?>" autofocus>
						<p style="color:red" id="mn">
						</div>
					
							<div class="col-sm-2">
							<input type="text" class="form-control" autocomplete="off"  spellcheck="false"  id="txtcapital3"  name="lname"  placeholder="Last name" >
					<p style="color:red" id="">
						</div>
					 
					</div> 
					
					
					  	       <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('Agreement');?>:</label>
                        
						<div class="col-sm-5">
							<select name="agreement" id="agreement" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
							onchange="get_indegent_patients(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              	
                              <?php 
								$agreement = $this->db->get('agreement')->result_array();
								foreach($agreement as $row):
									?>
                            		<option value="<?php echo $row['agreement_id'];?>">
											<?php echo $row['agreement'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
							  
                          </select>
						  
						  
						</div> 
					</div>
  	               
				   
	

	             <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('indigent');?>:</label>
		                    <div class="col-sm-5">
		                        <select name="indigent" id="indigent" class="form-control" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
		                            <option value=""><?php echo get_phrase('select_agreement_first');?></option>
			                        
			                    </select>
								  <p> Note: Select 'H' or 'K' for CBHI patients</p>
			                </div>
					</div>



					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('gender');?>:</label>
                        
						<div class="col-sm-5">
						
							<select name="sex" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="M"><?php echo get_phrase('male');?></option>
                              <option value="F"><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
					
					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('region');?>:</label>
                        
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
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('zone');?>:</label>
		                    <div class="col-sm-5">
		                        <select name="section_id" class="form-control" id="section_selector_holder" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
					
								<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('woreda_town_organization');?>:</label>
                        
						<div class="col-sm-5">
							<select name="woreda_id" class="form-control" id="woreda_code"  data-validate="required" 
							data-message-required="<?php echo get_phrase('value_required');?>">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
			
					
				<div class="form-group">
						<label for="field-1" style="font-weight:bold;color:black;"class="col-sm-3 control-label"><?php echo get_phrase('kebele_or_address');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  autocomplete="on" name="kebele"  id="txtcapital" placeholder="optional">
						</div>
					</div>
			  <input type="hidden" class="form-control"  name="cdate"   value="<?php echo $new; ?>">
					
           
					  <div class="form-group">
						<label for="field-1" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php //echo get_phrase('MRN');?> <?php echo get_phrase('date_of_birth');?>:</label>
                        
						<div class="col-sm-5">
							<input type="date" class="form-control" value=""  name="age" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
						<!--
						<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php //echo get_phrase('age');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" onkeypress="return numbers(event,this.value)" name="age" placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
						</div> 
					</div> -->

						<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;"  class="col-sm-3 control-label"><?php echo get_phrase('phone');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" onkeypress="return number(event,this.value)"  name="phone"  autofocus>
						</div> 
						<p style="color:red" id="tel">
					</div>
            

                    <div class="form-group">
					
						<div class="col-sm-offset-3 col-sm-5">
		
							
					
					  <button type="submit" style="font-weight:bold;" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('submit');?></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span>	<button type="reset" style="font-weight:bold;" class="btn btn-primary pull-right"><i class="fa  fa-times"></i>&nbsp;<?php echo get_phrase('clear');?></button>&nbsp;&nbsp;&nbsp;</span>
				
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

	function get_indegent_patients(agreement) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_indegent/'+agreement,
            success: function(response)
            {
                jQuery('#indigent').html(response);
            }
        });

    }

</script>



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
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 5) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }


</script>
<script type="text/javascript">
  function numbers(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 2) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }


</script>
<script type="text/javascript">
  function number(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 9) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }


</script>
