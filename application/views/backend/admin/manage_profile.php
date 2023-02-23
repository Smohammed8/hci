

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
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}




	</style>

<?php 
$edit_data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($edit_data as $row):
   $row['admin_id']= $this->session->userdata('admin_id');
     ?>
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="fa fa-edit"></i> 
					<?php echo get_phrase('update_profile');?>
                    	</a></li>
			<li>
            	<a href="#chpass" data-toggle="tab"><i class="fa fa-lock"></i> 
					<?php echo get_phrase('change password');?>
                    	</a></li>
							<li>
            	<a href="#1" data-toggle="tab"><i class="fa fa-wrench"></i> 
					<del><?php echo get_phrase('account_setting');?> </del>
                    	</a></li>
							<li>
            	<a href="#2" data-toggle="tab"><i class="fa fa-user"></i> 
					<del><?php echo get_phrase('account_status');?> </del>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
	
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            	<!----EDITING FORM STARTS-->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content">
					
                        <?php echo form_open(base_url() . 'index.php?admin/manage_profile/update_profile_info/'.$row['admin_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                                  
								
                                    <input type="hidden" class="form-control" readonly name="admin_id" value="<?php echo $row['admin_id'];?>"/>
                             
							
                            <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('name');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="txtuppercase" name="name" value="<?php echo $row['name'];?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('email');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"   name="email" value="<?php echo $row['email'];?>"/>
                                </div>
                            </div>
							
							          <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('registered_on');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="date_of_join" value="<?php echo $row['date_of_join'];?>"/>
                                </div>
                            </div>
							
							    
							         <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('sex');?>:</label>
                                <div class="col-sm-5">
                                    <select name="Sex" class="form-control">
                                    	<option value="Male" <?php if($row['Sex'] == 'Male')echo 'selected';?>><?php echo get_phrase('male');?></option>
                                    	<option value="Female" <?php if($row['Sex'] == 'Female')echo 'selected';?>><?php echo get_phrase('female');?></option>
                                    </select>
                                </div>
                            </div>
							
							
							
							          <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('phone');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" maxlength ="10" name="phone" value="<?php echo $row['phone'];?>"/>
                                </div>
                            </div>
							
							
							
							          <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('role');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control"  readonly name="role" value="<?php echo $row['role'];?>"/>
                                </div>
                            </div>
							
                            <div class="form-group">
                                <label style="font-weight:bold;" for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('photo');?> </label>
                                
                                <div class="col-sm-5">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
                                            <img src="<?php echo $this->crud_model->get_image_url('admin' , $row['admin_id']);?>" alt="...">
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
                                    <button type="submit" class="btn btn-primary pull-right"><i class=" fa fa-edit (alias)"></i> &nbsp;<?php echo get_phrase('update_profile');?></button>
                                </div>
							</div>
                         <?php echo form_close();?>
				
                </div>
			</div>
			
			<?php endforeach;?>
            <!----TABLE LISTING ENDS--->
            
            
			<!----CREATION FORM STARTS---->
			
			<div class="tab-pane box active" id="chpass" style="padding: 5px">
                <div class="box-content padded">
					
                        <?php echo form_open(base_url() . 'index.php?admin/manage_profile/change_password' , array('class' => 'form-horizontal form-groups-bordered validate', 'name'=>'myform','target'=>'_top'));?>
                            <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('current_password');?>:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" required="required"  name="password" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('new_password');?>:</label>
                                <div class="col-sm-5">
                                    <input type="password" name="new_password" id="myInput" class="form-control" required="required"  onkeyup="CheckPasswordStrength(this.value)"   value=""/>
                                
								 <input type="checkbox"   onclick="myFunction()">&nbsp;<?php echo get_phrase('show_password');?> 
								</div>
							&nbsp; <p id="pass"> </p>
								 <input type="button" style="font-weight:bold;" class="button" value="Generate" onClick="randomPassword(8);" tabindex="2">
                            </div>
							  
                            <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('confirm_new_password');?>:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" required="required"  name="confirm_new_password" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-primary pull-right"><i class=" fa fa-edit (alias)"></i> &nbsp;<?php echo get_phrase('update_password');?></button>
                              </div>
								</div>
                        <?php echo form_close();?>
				
                </div>
			</div>
			<!----CREATION FORM ENDS-->
            
		</div>
	</div>
</div>

<script type="text/javascript">
    function CheckPasswordStrength(password) {
		
		var posid ="error";
        var error = document.getElementById("pass");
 
        //TextBox left blank.
        if (password.length == 0) {
            error.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak Password!";
                color = "red";
                break;
            case 2:
                strength = "Good Password";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong Password";
                color = "green";
                break;
            case 5:
                strength = "Very Strong Password";
                color = "darkgreen";
                break;
        }
        error.innerHTML = strength;
        error.style.color = color;
    }

 
function randomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
   // return pass;
	myform.new_password.value  = pass;
}

 
</script>
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


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
</script>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>