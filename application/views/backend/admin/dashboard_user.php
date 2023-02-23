<?php
$Today = date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
//echo $new;

?>
    <?php  $current_user = $this->session->userdata('admin_id'); ?>
	          
     		
			
		                             <?php
                     	              $my =mysql_query("SELECT * FROM `treatment` where user ='$current_user'");
								       $total = mysql_num_rows($my); 
									   ?>
									   
									<?php
									$p =mysql_query("SELECT * FROM `patients` where  user ='$current_user'");
                                     $patients = mysql_num_rows($p);
									 
									    $cbhi =mysql_query("SELECT * FROM `patients` where  user ='$current_user' and agreement='CB Health Insurance'");
                                        $cbh = mysql_num_rows($cbhi);
									 $ch =mysql_query("SELECT * FROM `patients` where  user ='$current_user' and agreement='Health Care finance'");
                                     $hcf = mysql_num_rows($ch);
									 	$cs =mysql_query("SELECT * FROM `patients` where  user ='$current_user' and agreement='Credit Service'");
                                        $css = mysql_num_rows($cs);
									 ?>
																	   
	<div class="col-md-4">
		<div class="row">
        <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $total;?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3>  <i class="fa fa-users" style="color:white;"></i>&nbsp; <?php echo get_phrase('my_encounter');?></h3>
					    <p>.........................................</p>
             	  <?php 
				
				
                                 	$smale =mysql_query("SELECT * FROM `treatment` where user = '$current_user' and sex='M'");
                                    $male = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where user = '$current_user' and sex ='F'");
                                    $female = mysql_num_rows($sfemale);
									
									?>
						   
                   <p style=" font-size:14px;"> <i class="fa fa-male" ></i>&nbsp;<?php echo get_phrase('male');?>
				   :<?php echo format($male);?>
				   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <i class="fa fa-female"></i>&nbsp;<?php echo get_phrase('female');?>:<?php echo format($female); ?> </p>
				   
			
				    
                </div>              
            </div>

							
					  
             <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $patients;?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3>   <i class="fa fa-users"></i>&nbsp<?php echo get_phrase('my_total_patients');?>
					</h3>
             <p>.........................................</p>
                   <p style=" font-size:14px;"> <i class="fa fa-book" style="color:white;" ></i>&nbsp;
				   <?php echo get_phrase('insurance');?>:<?php echo format($cbh);?>
				<!--
				 &nbsp;&nbsp;&nbsp;  <i class="entypo-vcard" style="color:white;"></i>&nbsp;
				 <?php //echo get_phrase('health_care');?>:<?php //echo format($hcf);?><br> -->
		 &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; 
				   <i class="fa fa-flag" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('credit_service');?>:<?php echo format($css);?></p>
                </div>              
            </div>
							
						<?php
						   
							$nw =mysql_query("SELECT * FROM patients where  user ='$current_user' and  cdate='$new'");
                            $nws = mysql_num_rows($nw);
					        $tday  = date('Y-m-d');
							$enc =mysql_query("SELECT * FROM `treatment`  where  user ='$current_user' and  cdate='$tday'");
                            $newinc = mysql_num_rows($enc);
							
							
						?>          
             <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" >Today</div>
                    <hr>
                    <h3> <i class="entypo-list" style="color:white;" ></i>New actvities<?php //echo get_phrase('today_actvities');?></h3>
					    <p>.........................................</p>
             
                   <p style=" font-size:14px;"> <i class="entypo-user-add" style="color:white;" ></i>
				   <?php echo get_phrase('new registration');?>:<?php echo $nws;?>
				   &nbsp;&nbsp;<i class="fa fa-users" style="color:white;"></i>
				   <?php echo get_phrase('encounter');?>:<?php echo $newinc;?></p>
				    
                </div> 
   <div id="inlineDatepicker"></div> 				
            </div>
			
			
			<br><br><br>
			

    	</div>
		 
    </div>
	
