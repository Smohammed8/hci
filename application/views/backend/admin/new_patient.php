

  <style>
input[type="text"]:focus {
  background: #ffcccc;
}
input[type="text"]:focus {
  background: #ffcccc;
 border:1px solid  white;
}

#head {
 background: url('uploads/bg.jpg') no-repeat center; 
}
 </style>


<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $new;
?>
 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:70%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: white;
    }
	.asad{
		background-color:pink;	
	}
	</style>
<?php 
function format($value) {
	if ($value > 1) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}

?>	

<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START--   <li class="active">  ---->
		<ul class="nav nav-tabs bordered">
			<li class=""  > 
            	<a href="#padd" data-toggle="tab"><i class="entypo-user"></i> 
					
				<b><u>Patient Information (1) </u></b>
                    	</a>
						</li>
			<li class="">
            	<a href="#addlist" data-toggle="tab"><i class="entypo-plus-circled"></i>
				<b><u>Address Information (2)</u></b>
                    	</a>
						</li>
						
						<li class="">
            	<a href="#uploads" data-toggle="tab"><i class="entypo-upload"></i>
				<b><u>Optional uploads (3)</u></b>
                    	</a>
						</li>
						
	
		</ul>
		
    	<!------CONTROL TABS END------>
      <style>  
	       th { writing-mode: sideways-lr; /* +90°: use 'tb-rl' */
          text-align: left;          /* +90°: use 'right' */
          padding:0px 0px 0; }
		  table, th, tr ,td {
          border: 1px solid black;
           }

		  </style>
		 <?php echo form_open(base_url() . 'index.php?admin/patients/create2/' , array('class' => 'form-horizontal form-groups-bordered validate', onsubmit =>'return check(this)', 'enctype' => 'multipart/form-data')); ?>	 
		<div class="tab-content" style="background-color:#ccdbdc;">
            <!----TABLE LISTING STARTS-->
         
         

					<br>
						
						
			<div class="tab-pane box" id="padd" style="padding: 5px">
                <div class="box-content">
                		<p style="color:red" id="addressinfo"> 
						
					<div class="btn btn-sm pull-right" >
						<div class="col-sm-8">
						 <input type="radio"   value="Insider"   title="Patients who came with referral to Jimma Medical Center"  name="type" checked   required>&nbsp;&nbsp;Insider  &nbsp;&nbsp; 
						  <input type="radio"  value="Outsider"  title="Patients who came from other health facility without refer to get a specific service"  name="type" required>&nbsp;&nbsp;Outsider
						</div>
					</div>	   

					
				        <div class="form-group">
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label"><?php //echo get_phrase('MRN');?> <?php echo get_phrase('medical_record_number');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  id="mrn_id"  autocomplete="off" onkeypress="return numbersOnly(event,this.value)" name="mrn_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo set_value('mrn_id');?>" autofocus>
						</div>
						<br/><span id="msg"></span>  
					</div>
                     
						<div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label">First Name :<?php //echo get_phrase('fname');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"   id="txtuppercase" name="fname" placeholder="First name"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo set_value('fname');?>" autofocus>
						</div> 
						<p style="color:red" id="fn">
				    	</div>
						
						
							<div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"> Father Name: <?php //echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"   id="txtuppercase1" name="mname" placeholder="Middle name"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="<?php echo set_value('mname');?>" autofocus>
						</div> 
						<p style="color:red" id="mn">
				    	</div>
						
							<div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"> Grandfather Name:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off"  spellcheck="false"  id="txtuppercase2"   name="lname"  placeholder="Last name">
						</div> 
						<!-- <p style="color:red" id="tel"> -->
				    	</div>
					
					  
					<div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('gender');?>:</label>
                        
						<div class="col-sm-5">
						
							<select name="sex" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="M"><?php echo get_phrase('male');?></option>
                              <option value="F"><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
		
           
						<div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('phone');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" onkeypress="return number(event,this.value)"  id="phone"  name="phone"  autofocus>
						</div> 
						<p style="color:red;" id="tel">
				    	</div>
						
						
					  <div class="form-group">
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label">  <?php echo get_phrase('date_of_birth');?>:</label>
                        
						<div class="col-sm-5">
							<!--class="datepicker form-control" -->
						 <input type="text" class="form-control"  id="popupDatepicker"  placeholder="ቀን-ወር-ዓመት" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" name="age"/>
						
						</div>
						<p style="color:red" id="age"></p>
					</div>

				
            

                 <div class="form-group">
					
						<div class="col-sm-offset-3 col-sm-5">
		
							
				
					  <button type="submit" style="font-weight:bold;" onclick="return ValidateDOB()" class="btn btn-primary pull-right">
					  <i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('register');?></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 
				       	 
						</div>
					</div>
              
					          
                </div>                
			</div>
         
								
								<br>
									
			<div class="tab-pane box" id="addlist" style="padding: 5px">
		
                <div class="box-content">
                	<p style="color:red;" id="personalinfo">
					
					
						<div class="form-group">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('cbhi_no');?>/Letter No:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off"  title="kebelecode/abaworacode/familycode" maxlength ="20" name="cbhi"  value="<?php echo set_value('cbhi');?>" placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
					  	       <div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('Agreement');?>:</label>
                        
						<div class="col-sm-5">
							<select name="agreement" id="agreement" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="get_indegent_patients(this.value)">
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
						<label for="field-2"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('indigent');?>:</label>
		                    <div class="col-sm-5">
		                        <select name="indigent" id="indigent" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
		                            <option value=""><?php echo get_phrase('select_agreement_first');?></option>
			                        
			                    </select>
								 
			                </div>
					</div>
		
					<div class="form-group">
						<label for="field-2"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('region');?>:</label>
                        
						<div class="col-sm-5">
							<select name="class_id" class="form-control" data-validate="required" id="class_id" data-message-required="<?php echo get_phrase('value_required');?>"
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
						<label for="field-2"  style="font-weight:bold;" class="col-sm-3 control-label"> <?php echo get_phrase('zone'); ?><?php //echo get_phrase('sub-city'); ?>:</label>
		                    <div class="col-sm-5">
		                        <select name="section_id" class="form-control" id="section_selector_holder" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
					
								<div class="form-group">
						<label for="field-2"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('woreda_town_organization');?>:</label>
                        
						<div class="col-sm-5">
							<select name="woreda_id" class="form-control" id="woreda_code"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
			
					
				<div class="form-group" id="extra">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('kebele');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  autocomplete="on" name="kebele"  id="txtcapital4" >
						</div>
					</div>
			        <input type="hidden" class="form-control"  name="cdate"   value="<?php echo $new; ?>">
				

                   <div class="form-group">
					
						<div class="col-sm-offset-3 col-sm-5">
		
							
				
					  <button type="submit" style="font-weight:bold;" onclick="return ValidateDOB()" class="btn btn-primary pull-right">
					  <i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('register');?></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 
				       	 
						</div>
					</div>
                    
					             
                </div>                
			</div>
			<!-- ///////////////////////////////////Uploads ///////////////////////////////////////////////////  -->
			
			<div class="tab-pane box" id="uploads" style="padding: 5px">
		
                <div class="box-content">
                	<p style="color:red;" id="personalinfo">
					
					
					
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
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"> Scanned Letter:</label>
                        
						<div class="col-sm-5">
							<input type="file" class="form-control"  name="scan">
							<!-- <input type="file" class="form-control"  name="scan" data-validate="required" data-message-required="<?php //echo get_phrase('value_required');?>"> -->
						</div>
						</div>
					</div>
					  	       
				

                   <div class="form-group">
					
						<div class="col-sm-offset-3 col-sm-5">
		
							
				
					  <button type="submit" style="font-weight:bold;" onclick="return ValidateDOB()" class="btn btn-primary pull-right">
					  <i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('register');?></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 
				       	 
						</div>
					</div>
                    
					             
                </div>                
			</div>
			<!-- ////////////////////////////////////////// end of Uploads ///////////////////-->
			
			
				 
					
			 <?php echo form_close();?>
			<!----CREATION FORM ENDS-->
            
		</div>
	</div>
</div>
	<br><br><br>

<script src="assets/js2/jquery.plugin.js"></script>
<script src="assets/js2/jquery.calendars.js"></script>
<script src="assets/js2/jquery.calendars.plus.js"></script>
<script src="assets/js2/jquery.calendars.picker.js"></script>
<script src="assets/js2/jquery.calendars.ethiopian.js"></script>
<script src="assets/js2/jquery.calendars.ethiopian-am.js"></script>
<script src="assets/js2/jquery.calendars.picker-am.js"></script>
<script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
	$('#popupDatepicker').calendarsPicker({calendar: calendar});
	
	//$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>

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

 <script>
function check(f){
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	var letters = /^[A-Za-z]+$/;  
	var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
	 var number = /^[0-9]+$/; 
	 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		
if(!(f.fname.value.match(letters))) {
			document.getElementById("fn").innerHTML = "Invalid name!";
			f.fname.focus();
			return false;
		} 
if(!(f.mname.value.match(letters))) {
			document.getElementById("mn").innerHTML = "Invalid name!";
			f.mname.focus();
			return false;
		} 
if(!(f.lname.value.match(letters))) {
			document.getElementById("ln").innerHTML = "Invalid name!";
			f.lname.focus();
			return false;
		} 
  
   if(!( f.phone.value.match(phoneno)) && (f.phone.value!='')) { 
			document.getElementById("tel").innerHTML = "Invalid phone number!";
			f.phone.focus();
			return false;
		}
///////////////////////////////////////////		
if(f.cbhi.value=='') { 
			document.getElementById("addressinfo").innerHTML = "There are some required fields in address bar!";
			f.cbhi.focus();
			return false;
		}
//////////////////////////////////////////////////

if(f.mrn_id.value=='') { 
			document.getElementById("personalinfo").innerHTML = "There are some required fields in personal info bar!";
			f.mrn_id.focus();
			return false;
		}
//////////////////////////////////////////////////

if(f.fname.value=='') { 
			document.getElementById("personalinfo").innerHTML = "There are some required fields in personal info bar!";
			f.fname.focus();
			return false;
		}
//////////////////////////////////////////////////

if(f.mname.value=='') { 
			document.getElementById("personalinfo").innerHTML = "There are some required fields in personal info bar!";
			f.mname.focus();
			return false;
		}
//////////////////////////////////////////////////
if(f.sex.value=='') { 
			document.getElementById("personalinfo").innerHTML = "There are some required fields in personal info bar!";
			f.sex.focus();
			return false;
		}
//////////////////////////////////////////////////
if(f.age.value=='') { 
			document.getElementById("personalinfo").innerHTML = "There are some required fields in personal info bar!";
			f.age.focus();
			return false;
		}
//////////////////////////////////////////////////

  if(!(f.age.value.match(dateformat))) {
			document.getElementById("age").innerHTML = "Invalid date of birth!";
			f.age.focus();
			return false;
		}
		else 
		return true;
		
	}
  </script>
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



<script type="text/javascript">
// Ajax post
$(document).ready(function() 
{
$("#mrn_id").blur(function() 
{
var mrn_id = $('#mrn_id').val();

	if(mrn_id!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php?admin/checkMrn'); ?>",
		dataType: 'html',
		data: {mrn_id: mrn_id},
		success: function(res) {
			if(res==1){
			$("#msg").css({"color":"red"});
			$("#msg").html("ይህ ካርድ ቁጥር በሌላ ሰው ስም ቀድሞ ተመዝግቧል!");
			return false;
			}
			else
			{
			$("#msg").css({"color":"green"});
			//$("#msg").html("Ya! You can use this card number");	
			$("#msg").html('&nbsp;<img src="uploads/tick.gif" align="absmiddle">');
			return true;
			}
		  },
		error:function(){
		alert('some error');	
		}
		});
	}
	/*else
	{
	alert("Please, Start from card number!");
	}*/

});
});
</script>


<script type="text/javascript">
// Ajax post
$(document).ready(function() 
{
$("#phone").blur(function() 
{
var phone = $('#phone').val();

	if(phone!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php?admin/checkPhone'); ?>",
		dataType: 'html',
		data: {phone: phone},
		success: function(res) {
	if(res==1){
			$("#tel").css({"color":"red"});
			$("#tel").html("ይህ ስልክ ቁጥር ቀድሞ ተመዝግቧል!");
			}
			else
			{
			$("#tel").css({"color":"green"});
			//$("#msg").html("Ya! You can use this card number");	
			$("#tel").html('&nbsp;<img src="uploads/tick.gif" align="absmiddle">');
			
			}
		  },
		error:function(){
		alert('some error');	
		}
		});
	}
	/*
	else
	{
	alert("Please, Start Phone!");
	} */

});
});
</script>
<script>
$('#agreement').on('change', function() {
    if (($(this).val() === "1") || ($(this).val() === "2")){
        $("#extra").show();
        $("#txtcapital4").attr("required",true);
    } else {
        $("#extra").hide();
    }
});
</script>
