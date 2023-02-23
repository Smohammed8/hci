

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="assets/css2/redmond.calendars.picker.css">
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

<script type="text/javascript">
// Ajax post
$(document).ready(function() 
{
$("#cbhi").blur(function() 
{
var cbhi = $('#cbhi').val();

	if(cbhi!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php?admin/checkCbhi'); ?>",
		dataType: 'html',
		data: {cbhi: cbhi},
		success: function(res) {
			if(res==1){
			$("#msg").css({"color":"red"});
			$("#msg").html("This CBHI #ID already exists");
			}
			else
			{
			$("#msg").css({"color":"green"});
			//$("#msg").html("Ya! You can use this card number");	
			$("#msg").html('&nbsp;<img src="uploads/tick.gif" align="absmiddle">');
			
			}
		  },
		error:function(){
		alert('some error');	
		}
		});
	}


});
});
</script>

<script>
jQuery(document).ready(function() {
	
	// 1 First name - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
	jQuery('#txtuppercase1').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
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
<style>
a:hover{
	text-decoration:none !important;
}
a:visited{
	text-decoration:none !important;
}
a:active{
	text-decoration:none !important;
}
</style>
<SCRIPT type="text/javascript">

pic1 = new Image(16, 16); 
pic1.src = "uploads/loader.gif";

$(document).ready(function(){

$("#mrn_id").change(function() { 

var usr = $("#mrn_id").val();

if(usr.length >= 4){
$("#status").html('<img src="uploads/loader.gif" align="absmiddle">&nbsp;Checking availability...');
    $.ajax({  
    type: "POST",  
	url: "<?php echo base_url(); ?>index.php/admin/record_exists",
    data: "mrn_id ="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK'){ 
        $("#mrn_id").removeClass('object_error'); 
		$("#mrn_id").addClass("object_ok");
		$(this).html('&nbsp;<img src="uploads/tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#mrn_id").removeClass('object_ok'); 
		$("#mrn_id").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
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
</head>

                      <?php
	                        $user = $this->session->userdata('admin_id'); 
						   $s = "SELECT * FROM `admin` where admin_id ='$user'";
                           $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
						   $role = $rows['role']; 	
						   }
						  $admin_id = $this->session->userdata('admin_id'); 
	                       $re = mysql_query("SELECT  * FROM link_tbl where user_id ='$admin_id'") or die(mysql_error());;
                            while($row3 = mysql_fetch_array($re)){
                             $region =  $row3['region']; 
						     $zone   =   $row3['zone']; 
							 $woreda = $row3['woreda']; 
						      } 
							?>
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
							       <?php 
   
                          $user = $this->session->userdata('admin_id'); 	
	  
	                       $sql = "SELECT * FROM `link_tbl` where user_id ='$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region    = $row3["region"]; 
						     $zone      = $row3["zone"]; 
							 $woreda    = $row3["woreda"]; 
						   } ?>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
			
			 
                     <?php   $id =1; ?>
                        
							   
                         <u><b><a href="#list" data-toggle="tab"> <i class="fa  fa-pencil-square-o"></i>
					<?php echo get_phrase('beneficiary_info');?>
                    	</a></b>
						</u>
						  
				
				</div>
            </div>
			
			<div class="panel-body" >
				
                <?php echo form_open(base_url() . 'index.php?admin/add_beneficiary/create/' , array('class' => 'form-horizontal form-groups-bordered validate', onsubmit =>'return check(this)', 'enctype' => 'multipart/form-data')); ?>
	
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
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('first_name');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"   id="txtuppercase" name="fname" placeholder="First name"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  autofocus>
						  
						</div> 
					</div>
					
					     <div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('middle_name');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"   id="txtuppercase1" name="mname" placeholder="Middle name"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" autofocus>
						  
						  
						</div> 
					</div>
					
					 	       <div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('last_name');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off"  spellcheck="false"  id="txtuppercase2"  name="lname"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"  placeholder="Last name" >
						  
						  
						</div> 
					</div>
  	               
				   	<div class="form-group">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('cbhi');?> #ID:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off"  id ="cbhi" name="cbhi"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
						<br/><span id="msg"></span>
					</div>
					
						<div class="form-group">
						<label for="field-1"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('family_code');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off"  name="family_code"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div>
					</div>
	             <div class="form-group">
						<label for="field-2"  style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('indigent');?>:</label>
		                    <div class="col-sm-5">
		                        <select name="indigent" id="indigent" class="form-control" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
		                            <option value=""><?php echo get_phrase('select');?></option>
			                         <option value="H"><?php echo get_phrase('H');?></option>
			                         <option value="K"><?php echo get_phrase('K');?></option>
			                        
			                    </select>
								 
			                </div>
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
							<input type="hidden" class="form-control"  name="region"  value="<?php echo $region;?>">
							<input type="hidden" class="form-control"  name="zone"  value="<?php echo $zone;?>">
							<input type="hidden" class="form-control"  name="woreda"  value="<?php echo $woreda;?>">
                          <div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('kebele');?>:</label>
                        
					 	<div class="col-sm-5">
						
							<select name="kebele" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                       
							     <?php 
								 $kebele = $this->db->get_where('kebele' , array('region_id'=>$region ,'zone_id'=>$zone,'woreda_id'=>$woreda))->result_array();
								foreach($kebele as $row):
									?>
                            		<option value="<?php echo $row['name'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>
			     <input type="hidden" class="form-control"  name="cdate"   value="<?php echo $new; ?>">
					  <div class="form-group">
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label">  <?php echo get_phrase('date_of_birth');?>:</label>
                        
						<div class="col-sm-5">
						 <input type="text" class="form-control" id="popupDatepicker"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" name="dob"/>
						
						</div>
					</div>

				
						<div class="form-group">
						<label for="field-2"  style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('phone');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" onkeypress="return number(event,this.value)"  name="phone"  autofocus>
						</div> 
						<p style="color:red" id="tel">
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
<br><br><br><br><br><br><br><br>

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



