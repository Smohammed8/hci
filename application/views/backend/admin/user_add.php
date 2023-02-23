<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
	
	// 1 First name - convert textbox user entered text to uppercase
	jQuery('#fnuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
	
	// 1 First name - convert textbox user entered text to uppercase
	jQuery('#lnuppercase').keyup(function() {
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
	
	 var number = /^[0-9]+$/; 
	 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  


if(!(f.fname.value.match(letters))) {
			document.getElementById("fn").innerHTML = "Please, Enter character only for first name.";
			f.fname.focus();
			return false;
		} 
if(!(f.lname.value.match(letters))) {
			document.getElementById("mn").innerHTML = "Please, Enter character only for middle name.";
			f.lname.focus();
			return false;
		} 

   if(!(f.phone.value.match(phoneno)) && (f.phone.value!='')) { 
			document.getElementById("tel").innerHTML = "Invalid phone number!";
			f.phone.focus();
			return false;
		}	
   if(f.phone.value.length < 10) { 
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
            	<u><b><a href="#list" data-toggle="tab"><i class="fa  fa-user"></i> 
					<?php echo get_phrase('Basic_user_information');?>
                    	</a></b>
						</u>
						  
				
				</div>
            </div>
				<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/users/createbyadmin/' , array('class' => 'form-horizontal form-groups-bordered validate', 'onsubmit' =>'return check(this)', 'enctype' => 'multipart/form-data'));?>
		
					
					<div class="form-group">
						<label for="field-1" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('firstname');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"  id="fnuppercase" name="fname"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
						<p style="color:red" id="fn">
					</div>
					
							<div class="form-group">
						<label for="field-1" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('lastname');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" autocomplete="off" spellcheck="false"  id="lnuppercase" name="lname"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
						<p style="color:red" id="mn">
					</div>
					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('date_of_registration');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  readonly name="date_of_join" value="<?php echo $new;?>" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                        
							<div class="col-sm-5">
							<select name="Sex" class="form-control" data-validate="required"  >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="Male"><?php echo get_phrase('male');?></option>
                              <option value="Female"><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
						<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('phone');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" id="phone" autocomplete="off" onkeypress="return number(event,this.value)"  name="phone"  autofocus>
						</div> 
						<p style="color:red" id="tel">
					</div>
					
				 <?php if($role=='Super_admin'){?>
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
							<div class="col-sm-5">
							<select name="role" class="form-control" data-validate="required"  >
                              <option value=""><?php echo get_phrase('select');?></option>
							   <option value="Super_admin"><?php echo get_phrase('super_adminstrator ');?></option>
                              <option value="Admin"><?php echo get_phrase('system_adminstrator ');?></option>
							   <option value="Head"><?php echo get_phrase('acountant');?></option>
                              <option value="User"> <?php echo get_phrase('user');?></option>
							  <option value="Org"> <?php echo get_phrase('client');?></option>
							
                          </select>
						</div> 
					</div>
				 <?php }  else{ ?>
					 
					 		<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
							<div class="col-sm-5">
							  <select name="role" class="form-control" data-validate="required" >
                               <option value="Admin"><?php echo get_phrase('system_adminstrator ');?></option>
							   <option value="Head"><?php echo get_phrase('acountant');?></option>
                               <option value="User"> <?php echo get_phrase('user');?></option>
							   <option value="Org"> <?php echo get_phrase('client');?></option>

                              </select>
						</div> 
					</div>
				 <?php }?>
				 
				 
					
                    
					<div class="form-group">
						<label for="field-1" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('username');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly  placeholder ="firstname@ju.edu.et" name="mail"  autocomplete="off">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;"  class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly  name="password" value="jimma" autocomplete="off">
						</div> 
					</div>
                    	
                    
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('save');?></button>
							 <span>	<button type="reset" style="font-weight:bold;" class="btn btn-primary pull-right"><i class="fa  fa-times"></i>&nbsp;<?php echo get_phrase('clear');?></button>&nbsp;&nbsp;&nbsp;</span>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
	
        </div>
    </div>
</div>


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
$("#phone").blur(function() 
{
var phone = $('#phone').val();

	if(phone!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php?admin/checkUserPhone'); ?>",
		dataType: 'html',
		data: {phone: phone},
		success: function(res) {
	   if(res==1){
			$("#tel").css({"color":"red"});
			$("#tel").html("This phone already exists");
			}
			else
			{
			$("#tel").css({"color":"green"});	
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
