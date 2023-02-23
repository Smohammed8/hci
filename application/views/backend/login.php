<!DOCTYPE html>
<html lang="en">
<head>
<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
?>
	<?php
	$system_name	=	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	?>
	<meta charset="utf-8">

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title><?php echo get_phrase('login');?> | <?php echo $system_title;?></title>
	

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.0.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="assets/images/favicon.png">
	
</head>
<body class="page-body login-page login-form-fall"  data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax  style="background-color:white;"-->
<script type="text/javascript">
var baseurl = '<?php echo base_url();?>';
</script>

<div class="login-container" >
	
	<div class="login-header login-caret" >
		
		<div class="login-content"  style="width:100%;">
			
			<a href="<?php echo base_url();?>" class="logo">
				<img src="uploads/logo.png" height="60" alt="" />
			</a>
			
			<p class="description">
            	<h2 style="color:#cacaca; font-weight:100;">
					<?php echo $system_name;?>
              </h2>
           </p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<img src="uploads/ajax-loader.gif"><br>
				<span><?php echo get_phrase('please wait...');?></span>
				
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	<?php
		$result8 = mysql_query("SELECT * FROM mode ") or die(mysql_error());
    	$row8 = mysql_fetch_array($result8);
				
				$mode  = $row8['maintainac_mode'];
			
			
		
			?>
				<?php
		$result9 = mysql_query("SELECT * FROM `enable_tbl`  ") or die(mysql_error());
    	$row9 = mysql_fetch_array($result9);
				
				$signup  = $row9['signup'];
			    $survey  = $row9['survey'];
			
		
			?>
	         
	<div class="login-form">
		<div class="login-content">
			
			<div class="form-login-error">
				<h3><b> <?php echo get_phrase('Invalid login');?></b></h3>
				<!-- <p> <?php //echo get_phrase('Please Enter correct username or password!');?></p> -->
				<p><b> <strong> <u>Warning:</u></strong>  With multiple wrong login attemps, You will be blocked!</b></p>
			</div>
			
			<?php 
		if($mode =='1'){
				
				?>
			<div class="alert alert-danger" style="font-size:16px;">
      	<i class="entypo-alert" aria-hidden="true"></i><strong>Down time!</strong>
      <hr>

		 System currently down due to bugs <br> 
		 <i class="entypo-user"></i> <small> Contact System adminstrator</small>
		</div> 
		

				<?php } 
				else{
					?>
						<form method="post" role="form" id="form_login">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>	
					<input type="text" class="form-control"  name="email" id="email" placeholder="Email" autocomplete="off" data-mask="email" />
					</div>
					
				</div>
			
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
					Login
					</button>
				</div>		
			</form>
					        <?php
                     $mm  =	$this->db->get('signup')->result_array();
                         foreach($mm as $row33):?>
				     <?php endforeach;?>
		
		<!--
			<div class="login-bottom-links">
				<a href="<?php //echo base_url();?>index.php?login/forgot_password" class="link">
				 Forgot your password?
				</a>
			</div> -->
			 		<div class="login-bottom-links">
					
					<?php if($row33['offset']=='1'){?>
                            <a href="<?php echo base_url();?>index.php?login/user_register" class="link">
                                <i class="entypo-user-add"></i>
                                   <u> Sign Up here </u>
                                </a>
					     <?php }?>
								
				    
							
                               </div>							 
			     <?php	
				}
				?>
			
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
	<script src="assets/js/neon-login.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>