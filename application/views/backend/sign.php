<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
        $system_title = $this->db->get_where('settings', array('type' => 'system_title'))->row()->description;
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="HCI Admin Panel" />
        <meta name="author" content="" />

        <title><?php echo get_phrase('user_sign_up'); ?> | <?php echo $system_title; ?></title>


        <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/neon-core.css">
        <link rel="stylesheet" href="assets/css/neon-theme.css">
        <link rel="stylesheet" href="assets/css/neon-forms.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <script src="assets/js/jquery-1.11.0.min.js"></script>


		
        <link rel="shortcut icon" href="assets/images/favicon.png">

    </head>
	
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
			document.getElementById("ln").innerHTML = "Please, Enter character only for first name.";
			f.lname.focus();
			return false;
		} 
	/*	
   if(!( f.phone.value.match(phoneno)) && (f.phone.value!='')) { 
			document.getElementById("tel").innerHTML = "Invalid phone number!";
			f.phone.focus();
			return false;
		}
    */
     if(!( f.email.value.match(mailformat))) {
			document.getElementById("em").innerHTML = "Invalid email address!";
			f.email.focus();
			return false;
		}
		
		else 
		return true;
		
	}
  </script>
<script type="text/javascript">

$(document).ready(function() 
{
$("#email").blur(function() 
{
var email = $('#email').val();

	if(email!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url('/index.php?admin/checkEmail'); ?>",
		dataType: 'html',
		data: {mail: email},
		success: function(res) {
			if(res==1){
			$("#msg").css({"color":"red"});
			$("#msg").html("This email already exists");
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
	else
	{
	alert("Please, Enter email");
	}

});
});
</script>


  <?php 
  $message='';
if(isset($_POST['submit'])){
	////Function to sanitize values received from the form. Prevents SQL injection
		function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
		$str = stripslashes($str);
		}
		
		return mysql_real_escape_string($str);
	}

   //Sanitize the POST values
	             $pass =  clean($_POST["password"]);
				 $c_pass =clean($_POST["c_password"]);
                 $password = md5($pass);
		        // $user_id=clean($_POST["user_id"]);	
				 $fname=  $_POST["fname"];	
				 $lname=  $_POST["lname"];
	             $name    = ($fname."  ".$lname); 				 
				 $role=   $_POST["role"];	
				// $phone=  clean($_POST["phone"]);	
			     $Sex=    $_POST["Sex"];
			     $mail=  $_POST["mail"];
			     $date=   $_POST["date_of_join"];
			     $active= $_POST["active"];
			     $status= $_POST["status"];
				 $self=   $_POST["registered_by"];
					//or phone ='$phone'
					

		//$sql="select email from admin where `email` ='$email'"; // used to check already user existed!
		$sql2 = mysql_query("SELECT * FROM admin WHERE email='$mail'") or die(mysql_query());
		//$result= mysql_query($sql) or die(mysql_query());
	    $rows = mysql_num_rows($sql2);//if $row
		  if($rows >0){   
		
				$message = "<font><p style='color:red; font-weight:bold;font-size:17px;'><STRONG> $mail</STRONG> is already exist!</font>";	
				echo "<meta http-equiv='refresh' content='5; url=?login/user_register'>";
			 }
			 else{
         if ($pass!=$c_pass){
				  
			 $message = "<font><p style='color:red; font-weight:bold;font-size:25px;'>Password Mismatch!</font>";	
				
				echo "<meta http-equiv='refresh' content='5; url=?login/user_register'>";  
				  
			  }	   			
		          else{
					  
				 $sql="INSERT INTO `admin`(`name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`,`status`, `active`, `registered_by`)
  				                    values('$name', '$mail','$password', ' $date', '$Sex', '', ' $role','$status','$active','$self')" or die(mysql_error());
                   $result = mysql_query($sql)or die(mysql_error());
                       if($result){	
					   
								   
			     
					$message= "<font><p style='color:green; font-weight:bold;font-size:25px;'> Sucessfully registered ! Return to login page!</p></font>";
				
					echo "<meta http-equiv='refresh' content='5; url=?login'>";
					   }
}} }
					   ?>


    <body class="page-body login-page login-form-fall" data-url="http://neon.dev">


     

        <div class="login-container">

            <div class="login-header login-caret">

                <div class="login-content" style="width:100%;">

                    <a href="<?php echo base_url(); ?>" class="logo">
                        <img src="uploads/logo.png" height="60" alt="" />
                    </a>

                    <p class="description">
                        <h2 style="color:#cacaca; font-weight:100;">
                            <?php echo $system_name; ?>
                        </h2>
                    </p>
                    <p class="description" style="" ><i class="entypo-info"></i> Now You can register here, then contact adminstrator to activate your account. <br> but,if you don't have personal email, inform system adminstrator !
					
					
					</p>
                         <b><?php echo $message;?></b>
                </div>

            </div>

            <div class="login-progressbar">
                <div></div>
            </div>

            <div class="login-form">

                <div class="login-content">

               
              <form method="post" action ="" onsubmit ='return check(this)'  class ="form-horizontal form-groups-bordered validate"> 

                        
   <?php //echo form_open(base_url() . 'index.php?Login/create_account/signup/' , array('class' => 'form-horizontal form-groups-bordered validate', onsubmit =>'return check(this)', 'enctype' => 'multipart/form-data')); ?>
	
                        <div class="form-steps">

                            <div class="step current" id="step-1">
             
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user"></i>
                                        </div>

                                        <input type="text" class="form-control"  spellcheck="false"  name="fname"  placeholder="First name"  id="txtuppercase" autocomplete="on" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                    </div>
									<p style="color:red" id="fn">
                                </div>
								    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-user"></i>
                                        </div>

                                        <input type="text" class="form-control" spellcheck="false"  name="lname"  placeholder="Father name"  id="txtuppercase1" autocomplete="on" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" value="" autofocus>
                                    </div>
									<p style="color:red" id="ln">
                                </div>
						
									    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-heart"></i>
                                        </div>

                                   <select name="Sex" class="form-control" required ="required">
                              <option value=""><?php echo get_phrase('gender');?></option>
                              <option value="Male"><?php echo get_phrase('male');?></option>
                              <option value="Female"><?php echo get_phrase('female');?></option>
                                      </select>
                                    </div>
                                </div>
								<?php
                           $Today = date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                                
                                    ?>
							  <input type="hidden" class="form-control" name="role"  value="inactive" /> 
							  <input type="hidden" class="form-control" name="date_of_join"  value="<?php echo $new;?>"/> 
								
								<input type="hidden" class="form-control" name="active"  value="no"/> 
						        <input type="hidden" class="form-control" name="status"  value="0"/> 
								<input type="hidden" class="form-control" name="registered_by"  value="self"/> 
								
					
								    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-mail"></i>
                                        </div>

                                        <input type="text" id="email" class="form-control" name="mail"  placeholder="Email"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" autocomplete="off" />
                                    </div>
									<span id="msg"></span>
								     <!-- <a href="https://accounts.google.com/SignUp?hl=en&continue=https://myaccount.google.com/intro"  target="_new" style=" color:green;font-size:12px;"><u> If you don't have Email,Click Here</u> </a> -->
                                </div>
								 
								    <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-key"></i>
                                        </div>

                                        <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Password" onkeyup="CheckPasswordStrength(this.value)"   data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" autocomplete="on" />
                                     </div>
									<p style="color:red" id="pass">
								
                                </div>
	                          
								 <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-key"></i>
                                        </div>

                                        <input type="password" class="form-control" name="c_password"  placeholder="Confirm Password"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" autocomplete="on" />
                                    </div>
									<p style="color:red" id="pass">
                                </div>
                                <div class="form-group">
                                     <center><button type="submit" name="submit" class="btn btn-info btn-block btn-login">
                                   Submit 
                                        <i class="entypo-right-open-mini"></i>   <i class="entypo-user-add"></i> 
                                    </button></center>
                                </div>
                  
                            </div>

                        </div>

                </form> 

  <?php //echo form_close();?>

                    <div class="login-bottom-links">

                        <a href="<?php echo base_url(); ?>index.php?login" class="link">
                            <i class="entypo-lock"></i>
                         Return to login page
                        </a>


                    </div>

                </div>

            </div>

        </div>


        <!-- Bottom Scripts -->
        <script src="assets/js/gsap/main-gsap.js"></script>
        <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/joinable.js"></script>
        <script src="assets/js/resizeable.js"></script>
        <script src="assets/js/neon-api.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/neon-forgotpassword.js"></script>
        <script src="assets/js/jquery.inputmask.bundle.min.js"></script>
        <script src="assets/js/neon-custom.js"></script>
        <script src="assets/js/neon-demo.js"></script>

    </body>
</html>
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
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 
</script>
<script>
jQuery(document).ready(function() {
	
	// 1 Uppercase string - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
		// 2 Uppercase string - convert textbox user entered text to uppercase
	jQuery('#txtuppercase1').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
		// 3 Lowercase string - convert textbox user entered text to  Lowercase
	jQuery('#email').keyup(function() {
		$(this).val($(this).val().toLowerCase());
	});
	
		// 3 Uppercase string - convert textbox user entered text to uppercase
	jQuery('#txtuppercase2').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});
	
	// 2 Capitalize string first character to uppercase
	jQuery('#txtcapital').keyup(function() {
		var caps = jQuery('#txtcapital').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital').val(caps);
	});
	
	// 3 Capitalize string every 1st chacter of word to uppercase
	jQuery('#n1').keyup(function() 
	{
		var str = jQuery('#n1').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#n1').val(spart.join(" "));
	
	});
	
	// 3 Capitalize string every 1st chacter of word to uppercase
	jQuery('#n2').keyup(function() 
	{
		var str = jQuery('#n2').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#n2').val(spart.join(" "));
	
	});
});
</script>