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

        <title><?php //echo get_phrase('user_sign_up'); ?> | <?php echo $system_title; ?></title>


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
               
                        
                </div>

            </div>

            <div class="login-progressbar">
                <div></div>
            </div>

            <div class="login-form">

                <div class="login-content">

               
					<?php echo form_open(base_url() . 'index.php?login/step14' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>


   
                       
 <div class="form-steps" style="font-size:12px;width:100%;">
                            <div class="step current" id="step-1">
                  
						
									
	
								
								
								
							<p style="font-size:12px;color:gold;font-weight:bold;"><i class="entypo-right-open"></i> 
							
							
			How worried are you that you or someone in your immediate family might become seriously ill from coronavirus (COVID-19)?</p>
								
								<hr>
             <div class="form-group" style="width:100%; text-align:left;">
                               
                          


                              
							  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								 <input type="radio" style="margin-right:0px;" value ="Yes" name="worried" required />&nbsp;&nbsp;Very worried  <br>
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" style="margin-right:0px;" value ="No" name ="worried" style="">&nbsp;&nbsp;Somewhat worried <br>

	                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" style="margin-right:0px;" value ="No" name ="worried" style="">&nbsp;&nbsp;Not too worried <br>
								  
								   
								  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;								  
						          <input type="radio" style="margin-right:0px;" value ="No" name ="worried" style="">&nbsp;&nbsp;Not worried at all
						
								    
                                </div>	
						
						
						
						        <div class="form-group">
                                     <center>
									 <button type="submit" name="" class="btn btn-info">
                               
                                        <i class="entypo-left-open-mini"></i>    Back
                                    </button>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;
									 <button type="submit" name="" class="btn btn-info">
                               
                                        <i class="entypo-right-open-mini"></i>    Next
                                    </button>
									</center>
                                </div>
								
                        
                  
                            </div>

                        </div>

       
                    <?php echo form_close();?>


                    <div class="login-bottom-links">

                        <a href="<?php echo base_url(); ?>index.php?login" class="link">
                            <i class="entypo-lock"></i>
                         Close
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
