
<!--
<div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>

<div class="alert alert-info">
  <strong>Info!</strong> Indicates a neutral informative change or action.
</div>

<div class="alert alert-warning">
  <strong>Warning!</strong> Indicates a warning that might need attention.
</div>

<div class="alert alert-danger">
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div> -->


            <?php
            $current_user = $this->session->userdata('login_type') . '-' . $this->session->userdata('admin_id');
       
	   
						  $s="SELECT * FROM `message_thread` where reciever='$current_user'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $code = $rows['message_thread_code']; 
			                }
					   ?>
					   <?php
					   
 	                   $tf = mysql_query("SELECT * FROM `message` where message_thread_code ='$code' and read_status =0");
					   
                                    $number = mysql_num_rows($tf);
          	  ?>
                 
       
 <?php
            $current_user = $this->session->userdata('admin_id');
       
	   
						  $ss="SELECT * FROM `admin` where admin_id='$current_user'";
                          $re = mysql_query($ss) or die(mysql_error());
                           while($ro = mysql_fetch_array($re)){
                           $role = $ro['role']; 
			                }
					   ?>
						<style>
						div#link{
							text-decoration:underline;
						}
						</style>
						

                               <?php
                         $server=	$this->db->get('server')->result_array();
                             foreach($server as $rowx):
							 $link = $rowx['link'];
							 ?>
							 <?php endforeach;?>
							 
     <div class="row">                                                    <!--  :#562d7b-->
	
	 <div class="panel panel-gradient" id="link" style="background-color:#084184 ;  margin-left: -6px; margin-top: -20px; font-weight;bold; font-size:12px;margin-bottom: -48px;  height:50px; width:100%; color:white;"><br>
        
	  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	  
	<!--<img src="uploads/3.png" width="1110px" height="50px" style="margin-top:-18px; margin-left:-5px;"  #562d7b /> -->
	
	
	<div class="col-md-12 col-md-12 clearfix " style="width:100%; margin-top: -20px;"  >
		
		
        <ul class="list-inline links-list pull-left">
        <!-- Language Selector -->	
		
           <li class="dropdown language-selector" >
           
				<?php if($account_type = 'admin'):?>
				<ul class="dropdown-menu <?php if ($text_align == 'right-to-left') 
					echo 'pull-right'; 
				    else 
					echo 'pull-left';?>">
					<li>
						<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/manage_profile">
                        	<i class="entypo-info"></i>
							<span><?php echo get_phrase('edit_profile');?></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>index.php?<?php echo $account_type;?>/manage_profile">
                        	<i class="entypo-key"></i>
							<span><?php echo get_phrase('change_password');?></span>
						</a>
					</li>
				</ul>
				<?php endif;?>

			</li>
        </ul>
										   
        
		<ul class="list-inline links-list pull-right" >     
	
        <?php   $form = trim('patient registration form.pdf');?>
		<?php   $name = trim('Intergrated_HCI Manual_Document.pdf');?>
		<?php   $link = trim('index.html');?>
						    
						<?php if ($role=='Super_admin'){?>
							
							 	 <li >
                                                                                                                       <!-- #084184;-->
						      <a href="<?php echo base_url().'user_guide/'.$link; ?>"  style ="color:white;background-color:#084184 ;"target ="_new" title="Technical documentation for developers" style="font-weight:bold;">
                                
								<i class="fa fa-book"></i>
                                    <?php echo get_phrase('developer_guide');?>
                                </a>
                                 </li>
								 
								 
								 &nbsp;<li class="sep"></li>
								 
						       <?php } ?>
							 
							<?php if ($role !='Org') {?>
 							     <li>
						       <a href="<?php echo base_url().'user_manual/'.$name; ?>"  target ="_blank" title="Download User Manual" style="color:white;background-color:#084184;" style="font-weight:bold;">
                                
								<i class="fa fa-download"></i>
                                    <?php echo get_phrase('user_manual');?>
                                </a>
                                 </li>
								 
								 <li >
                           	 &nbsp;<li class="sep"></li>
						      <a href="<?php echo base_url().'user_manual/'.$form; ?>"  target ="_blank" title="Download User Manual" style="color:white;background-color:#084184 ;" style="font-weight:bold;">
								<i class="fa fa-download"></i>
                                   Form of Reg<?php //echo get_phrase('user_manual');?>
                                </a>
                                 </li>
								 	 &nbsp;<li class="sep"></li>
							<?php }?>
								 
								 
							
                                   <li >
                            <a href="#" style="color:white;font-weight:bold;" title="Developer information" style="color:white;background-color:#084184 ;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_developer_profile');">
                                <i class="entypo-user"></i>
                                    <?php echo get_phrase('Developer');?>
                                </a>
                                 </li>
								 
						&nbsp;<li class="sep"></li>
				 <?php  $unread_message_number = $this->crud_model->count_unread_message_of_thread($rows['message_thread_code']);?>
		<li class="dropdown messages-menu" >
			    <a href="<?php echo base_url(); ?>index.php?admin/message/message_home">
				
              
			  
			 
			  
			  <?php if($number >0){ ?>
			    <span style="color: #dd4b39 !important; font-size:11px" id="blink"><i class="fa fa-envelope-o" title="Your message inbox" style="color:white;font-weight:bold;"></i>  <sup style="color:red; font-weight:bold;"><b></sup><?php echo $number ;?></b></span>
			  <?php }
			  else { ?>
					
					 <i class="fa fa-envelope-o" title="Your message inbox" style="color:white;font-weight:bold;"></i> <sup style="color:red; font-weight:bold;"><?php echo $number ;?></sup>
			<?php 	} ?>
			
             
            </a>
				</li>
						<li class="sep"></li>
           <li class="dropdown language-selector" >
                   <a href="#" class="dropdown-toggle" style="color:white;" data-toggle="dropdown" data-close-others="true">
                        <img src="assets/images/flag/Amharic.png" style="width:25px; height:16px;" />	<b> <?php echo get_phrase('language');?>  </b>
                    </a>  
				
				<ul class="dropdown-menu <?php if ($text_align == 'left-to-right')
					echo 'pull-left'; 
				
				    else echo 'pull-right';?>">
		
                    
				</ul>
				
			</li>			
						<?php 
   $edit_data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($edit_data as $row):
          $name      = ucwords(strtolower($row["name"]));    
          $role      =$row["role"];  
		  $admin_id  =$row["admin_id"]; 
		 $password   =$row["password"]; 
		  
                       
     ?>
	 <?php endforeach; ?>
	 
			<li class="sep"></li>
			    <b>
				
				
						

										
				<a href="<?php echo base_url(); ?>index.php?<?php echo $account_type;?>/manage_profile/<?php echo $admin_id;?>" title="Your profile" style="color:white;">
				<img src="<?php echo $this->crud_model->get_image_url('admin' ,$admin_id);?> " class="img-circle" width="30" height="30" />
					
		

		 <?php 
		 
		 if($password == '092178478b5b7f2ad4c5531604efa95e'){
		     echo ucwords($name); echo '('; ?><span style="color: #dd4b39 !important; font-size:11px" id="blinker"><u> <b>Change Password!</b></u></span><?php echo ')';
			  } 
	        else{ ?>
			<u style="color:white;background-color:#084184 ;"> <?php echo ucwords($name); ?></u>
		<?php	}
		 ?>
                    </a>  </b>
						<li class="sep"></li>
			<li>
				 <b><a href="<?php echo base_url();?>index.php?login/logout" style="color:white;background-color:#084184;" title=" to logout click here">
					<?php echo get_phrase('log Out');?> <i class="entypo-logout right"></i>
				</a>  </b>
			</li>
		</ul>
	</div>

	   <!-- <i class="entypo-globe"></i> <i><?php //echo $link ;?></i> -->
    </div>


	
</div> 

<hr style="margin-top:0px;" />

<script>

  
var blink_speed = 500;
var t = setInterval(function () {
    var ele = document.getElementById('blinker');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

</script>
<script>

  
var blink_speed = 500;
var t = setInterval(function () {
    var ele = document.getElementById('blink');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

</script>