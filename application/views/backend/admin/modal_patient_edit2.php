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
                        <?php  $current_user = $this->session->userdata('admin_id'); 
	
       				       $ss="SELECT * FROM `admin` where admin_id='$current_user'";
                           $re = mysql_query($ss) or die(mysql_error());
                           while($da = mysql_fetch_array($re)){
                           $role = $da['role']; 
			                } ?>

<?php 
$edit_data		=	$this->db->get_where('patients' , array('patient_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-user"></i>
					<?php echo get_phrase('edit_patient');?> details 
					<br><small>Note: If you want to edit patient card number, first edit card number in encouter!</small>
            	</div>
            </div>
			<div class="panel-body" style="background-color:#ccdbdc;">
				
                <?php echo form_open(base_url() . 'index.php?admin/patients/'.$row['class_id'].'/update/'.$row['patient_id'] , array('class' => 'form-horizontal form-groups-bordered validate', onsubmit =>'return check(this)', 'enctype' => 'multipart/form-data')); ?>
                
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
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('medical_record_number');?></label>
                        
						
						
						<div class="col-sm-5">
						
						 <?php  $mrn  = $row['mrn_id'];
					     $result = mysql_query("select * from treatment where mrn_id ='$mrn' order by encounter_id desc limit 1");
                         if(mysql_num_rows($result)>0){  ?> 
								
							<input  type="text" class="form-control"  readonly title="" required="required" name="mrn_id" value="<?php echo $row['mrn_id'];?>">
						<small style="color:red;"> This patient has an encouter. So if you want to edit patient card number, first edit card number in encouter!</small>
						 <?php }else{ ?>
							 
							 <input  type="text" class="form-control"   required="required" autocomplete="off" onkeypress="return numbersOnly(event,this.value)"  name="mrn_id" value="<?php echo $row['mrn_id'];?>" autofocus>
						
						<?php }?>
						
						
						</div>
						
						<p style="color:red" id="mrn">
					</div>
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('name');?> </label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  id="txtuppercase" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo $row['name'];?>" >
						</div>
							<p style="color:red" id="fn">
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
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"> <?php echo get_phrase('woreda');?></label>
                        
						<div class="col-sm-5">
							<select name="woreda_id" class="form-control" id="woreda_id"  required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"> Date of Birth(DOB)<?php //echo get_phrase('DOB');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="age" value="<?php echo $row['age'];?>"> 
						</div>
                           (YYYY-MM-DD)          					
					</div>	
	
			
								<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('agreement');?></label>
                        
						<div class="col-sm-5">
							<select name="agreement" class="form-control">
                              <option value=""><?php echo get_phrase('select');?></option>
							  
							  <option value="CB Health Insurance" <?php if($row['agreement']=='CB Health Insurance') echo 'selected';?>><?php echo get_phrase('CB Health Insurance');?></option>
							  <option value="Credit Service"<?php if($row['agreement']=='Credit Service')echo 'selected';?>><?php echo get_phrase('Credit Service');?></option>
							  
						 </select>
						</div> 
					</div>
					
	                  <div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"> <?php echo get_phrase('indigent');?></label>
                        
						<div class="col-sm-5">
							<select name="indigent" class="form-control" required>
                              <option value=""><?php echo get_phrase('select');?></option>
                              
                              <option value="H" <?php if($row['indigent'] == 'H')echo 'selected';?>><?php echo get_phrase('H');?></option>
                              <option value="K"<?php if($row['indigent'] == 'K')echo 'selected';?>><?php echo get_phrase('K');?></option>
							  <option value="Student" <?php if($row['indigent'] == 'Student')echo 'selected';?>><?php echo get_phrase('student');?></option>
                              <option value="Employee"<?php if($row['indigent'] == 'Employee')echo 'selected';?>><?php echo get_phrase('employee');?></option>
                              <option value="Prisoner" <?php if($row['indigent'] == 'Prisoner')echo 'selected';?>><?php echo get_phrase('prisoner');?></option>
                              <option value="Refuge" <?php if($row['indigent'] == 'Refuge')echo 'selected';?>><?php echo get_phrase('refuge');?></option>
							  <option value="K/F/C/GMB" <?php if($row['indigent'] == 'K/F/C/GMB')echo 'selected';?>><?php echo get_phrase('K/F/C/GMB');?></option>
							  
						 </select>
						</div> 
					</div>		
      
				
					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('cbhi');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="cbhi" value="<?php echo $row['cbhi'];?>">
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
							<input type="text"  class="form-control" autocomplete="off" onkeypress="return number(event,this.value)" name="phone" value="<?php echo $row['phone'];?>" >
						</div> 
						<p style="color:red" id="tel">
					</div>
                   

                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"> <i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('update');?></button>
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

 <script>
function check(f){
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	var letters = /^[A-Za-z]+$/;  
	
	 var number = /^[0-9]+$/; 
	 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  


if(f.name.value.match(number)) {
			document.getElementById("fn").innerHTML = "Invalid name!";
			f.name.focus();
			return false;
		} 
		
		else 
		return true;
		
	}
  </script>