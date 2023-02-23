


<style>
a{
	
font-weight:bold;	
}
</style>
<div class="sidebar-menu">

    <header class="logo-env" >

        <!-- logo -->
	     <div class="logo" style="">
           <center>  <a href="#"> <img src="uploads/1215.jpg"  style="max-height:70px;width:70px;"/> 
            </a> </center> 
			<span style=" color:white;">
			<center> Jimma University</center> 
				<center> Jimma Medical Center 	</center>
			<center><small> Welcome to Integrated IMS System </small></center> </span> 
		
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
 <hr>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard">
                <i class="fa fa-home"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

 
        <!-- patient -->
        <li class="<?php
             if ($page_name == 'patient_add' ||
				 $page_name == 'my_registration_page' ||
                 $page_name == 'my_encounter_page')
                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('patient_information'); ?></span>
            </a>
			
			
			 <?php  $current_user = $this->session->userdata('admin_id'); ?>
            <ul>
                <!-- patient ADMISSION -->
                <li class="<?php if ($page_name == 'patient_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/patient_add">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('admit_patient'); ?></span>
                    </a>
                </li>
				
				  <li class="<?php if ($page_name == 'new_patient') echo 'active'; ?> ">
                <a href="<?php echo base_url(); ?>index.php?admin/new_patient">
                <i class="entypo-dot"></i>
                <span> New patient2</span>
                </a>
                 </li>
				
				  <li class="<?php if ($page_name == 'my_registration_page') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/my_patient_info/<?php echo $current_user; ?>">
                        <span><i class="entypo-dot"></i><?php echo get_phrase('my_registration'); ?></span>
                    </a>
                </li>
	                <li class="<?php if ($page_name == 'my_encounter_page') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/my_encounter/<?php echo $current_user; ?>">
                        <span><i class="entypo-dot"></i><?php echo get_phrase('my_encounters'); ?></span>
                    </a>
                </li>
            </ul>
        </li>
          <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
            <a href="">
                <i class="fa fa-flag"></i>
                <span><?php //echo get_phrase('message'); ?>Clients Info</span>
            </a>
			
                 <ul>
                   <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section">
                        <span><i class="entypo-dot"></i> <?php //echo get_phrase('manage_zone'); ?>List of Zones</span>
                    </a>
                   </li>
					   <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/zone">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage Woredas'); ?>/Organization </span>
                    </a>
                </li>
				
            
            </ul>		
        </li>
		
		<li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/message">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
			
                 <ul>
                <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/message/message_home">
                        <span><i class="entypo-dot"></i><?php echo get_phrase('messages'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/message/message_new">
                        <span><i class="entypo-dot"></i><?php echo get_phrase('new_message'); ?></span>
                    </a>
                </li>
				
            
            </ul>		
        </li>
  
	     <!--HMSI -->
        <li class="<?php if ($page_name == 'hmis_data') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/hmis_data_view">
                <i class="entypo-chart-bar"></i>
                <span><?php echo get_phrase('hmis_data'); ?></span>
            </a>
        </li>

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
                <i class="entypo-user"></i>
                <span><?php echo get_phrase('my_profile'); ?></span>
            </a>
        </li>
		
	
		
		
				
		     <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url();?>index.php?login/logout">
                <i class="fa fa-sign-out"></i>
                <span> <?php  echo get_phrase('logout'); ?></span>
            </a>
        </li>
					

		
		
		   </ul>

</div>