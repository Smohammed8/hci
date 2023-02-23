<?php
$Today = date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
//echo $new;
?>
										<?php 
   $data =	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($data as $row3):
		 $role   =$row3["role"]; 
		                  
     ?>
	 <?php endforeach; ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_user');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/users/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
		            <!--
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php //echo get_phrase('user_id');?>:</label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="admin_id" data-validate="required" data-message-required="<?php //echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div> -->
					
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('firstname');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="fname" id="txtuppercase" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					
							<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('lastname');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" name="lname" id="txtuppercase1" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('date_of_registration');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  readonly name="date_of_join" value="<?php echo $new;?>" data-start-view="2">
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('gender');?></label>
                        
							<div class="col-sm-5">
							<select name="Sex" class="form-control" data-validate="required"  >
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="Male"><?php echo get_phrase('male');?></option>
                              <option value="Female"><?php echo get_phrase('female');?></option>
                          </select>
						</div> 
					</div>
					
				 <?php if($role=='Super_admin'){?>
							<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
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
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('role');?></label>
                        
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
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('phone');?></label>
                        
						<div class="col-sm-5">
							<input type="text" maxlength ="10" class="form-control" id="phone" name="phone" value="" >
						</div> 
							<p style="color:red" id="tel">
					</div>
                    
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('username');?></label>
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly  placeholder ="firstname@ju.edu.et" name="mail"  autocomplete="off">
						</div>
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('password');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" readonly  name="password" value="jimma" autocomplete="off">
						</div> 
					</div>
                    	
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?></label>
                        
						<div class="col-sm-5">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="uploads/user.jpg" alt="...">
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
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('add_user');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<script>
jQuery(document).ready(function() {
	
	// 1 Capitalize string - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
	
	// 2 Capitalize string - convert textbox user entered text to uppercase
	jQuery('#txtuppercase1').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
	
	// 2 Capitalize string first character to uppercase
	jQuery('#txtcapital').keyup(function() {
		var caps = jQuery('#txtcapital').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital').val(caps);
	});
	
	// 3 Capitalize string every 1st chacter of word to uppercase
	jQuery('#fn').keyup(function() 
	{
		var str = jQuery('#fn').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#fn').val(spart.join(" "));
	
	});
	
	// 3 Capitalize string every 1st chacter of word to uppercase
	jQuery('#ln').keyup(function() 
	{
		var str = jQuery('#ln').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#ln').val(spart.join(" "));
	
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
