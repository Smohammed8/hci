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
                    <p class="description" style="" ><i class="entypo-info"></i> 
					
			Thank you for your willingness to share your personal information. You must be 18 years or older to take this survey.
					
					</p>
                        
                </div>

            </div>

            <div class="login-progressbar">
                <div></div>
            </div>

            <div class="login-form">

                <div class="login-content">

               
					<?php echo form_open(base_url() . 'index.php?login/step4' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>


   
                       
 <div class="form-steps" style="font-size:12px;width:100%;">
                            <div class="step current" id="step-1">
                      <b>     
						<p style="font-size:12px;color:gold;font-weight:bold;text-align:left;"> <i class="entypo-right-open"></i> Which regional state are you currently staying?</p>
			
									    <div class="form-group" style="width:100%;">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-flag"></i>
                                        </div>
										
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
								 
									<p style="font-size:12px;color:gold;font-weight:bold;text-align:left;">  <i class="entypo-right-open"></i> Which zone are you currently staying?</p>
					
									    <div class="form-group" style="width:100%;">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-flag"></i>
                                        </div>
										
	                       <select name="section_id" class="form-control" id="section_selector_holder" 
								
								data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
                                    </div>
                                </div>
								  
				<p style="font-size:12px;color:gold;font-weight:bold;text-align:left;">	<i class="entypo-right-open"></i> Which woreda are you currently staying?</p>
				
									    <div class="form-group" style="width:100%;">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="entypo-flag"></i>
                                        </div>
									<select name="woreda_id" class="form-control" id="woreda_code"  data-validate="required" 
							data-message-required="<?php echo get_phrase('value_required');?>">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
                                    </div>
                                </div>
								
								
							<p style="font-size:12px;color:gold;font-weight:bold;"> <i class="entypo-right-open"></i> In the last 24 hours,have you had any of the following symptoms?</p>
								
								<hr>
                       <div class="form-group" style="text-align:right; width:100%;">
                               
                          
                                    
                                Loss of smell or taste  :&nbsp;&nbsp;&nbsp;
							  
								 <input type="radio" style="margin-right:0px;" name="smell" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" style="margin-right:0px;" name ="smell" style="">&nbsp;&nbsp;No <br>


                                Dry cough :&nbsp;&nbsp;&nbsp;
								
								 <input type="radio"  style="margin-right:0px;" name="cough" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" style="margin-right:0px;" name ="cough" style="">&nbsp;&nbsp;No <br>	

                                Stuffy or runny nose :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="nose" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="nose" style="">&nbsp;&nbsp;No <br>


                                Eye pain :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="eye" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="eye" style="">&nbsp;&nbsp;No <br>


                                Nausea :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="nau" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="nau" style="">&nbsp;&nbsp;No <br>

                                 Fatigue :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="fatigue" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="fatigue" style="">&nbsp;&nbsp;No
								  
								  <br>

                                 Fever :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="fever" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="fever" style="">&nbsp;&nbsp;No
								  
                                  <br>

                                 Headache :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="head" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="head" style="">&nbsp;&nbsp;No
								  
								  <br>

                                Aches or Muscle pain :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="aches" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="aches" style="">&nbsp;&nbsp;No
								  
								  <br>

                                Chest pain :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="chest" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="chest" style="">&nbsp;&nbsp;No
								  <br>

                                Difficulty breathing:&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="breath" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="breath" style="">&nbsp;&nbsp;No
								  
								  <br>

                            Sore throat :&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="sore" required />&nbsp;&nbsp;Yes   
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						          <input type="radio" name ="sore" style="">&nbsp;&nbsp;No
								  
                                </div>	  
						
						
						        <div class="form-group">
                                     <center>
									 <button type="submit" name="" class="btn btn-info">
                               
                                        <i class="entypo-left-open-mini"></i>    Back
                                    </button>
									&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;
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
