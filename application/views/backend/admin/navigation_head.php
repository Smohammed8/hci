
<style>
a {font-weight:bold;	
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
        <!-- patient-->
        <li class="<?php
        if ($page_name == 'patient_add' ||
                $page_name == 'patient_bulk_add' ||
                $page_name == 'patient_information')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('patient_information'); ?></span>
            </a>
			
			
			
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
	 
                <!-- patient INFORMATION -->
                <li class="<?php if ($page_name == 'patient_information') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php  echo get_phrase('PatientByregion'); ?></span> 
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'patient_information' &&  $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/patient_information/<?php echo $row['class_id']; ?>">
                                    <span>  <i class="fa  fa-caret-right"></i>  <?php echo $row['name']; ?></span>
									
                                </a>
                            </li>
							
                        <?php endforeach; ?>
                    </ul>
					
                </li>
            </ul>
        </li>


		
		

        <!-- REGION-->
        <li class="<?php
        if ($page_name == 'class' ||
                $page_name == 'section')
            echo 'opened active';
        ?> ">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span><?php echo get_phrase('class'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/classes">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_classes'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_zone'); ?></span>
                    </a>
                </li>
				
				
					   <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/zone">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage Woredas'); ?> </span>
                    </a>
                </li>
				
				
				   <!-- PARENTS -->
        <li class="<?php if($page_name == 'kebele') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/kebele">
                <i class="entypo-dot"></i> 
                <span><?php echo get_phrase('manage Kebele'); ?></span>
            </a>
        </li>
				
	
		
            </ul>
        </li>

       

             <li class="<?php if ($page_name == 'user_stastics') echo 'opened active'; ?> ">
                    <a href="#">
                        <span>&nbsp;<i class="fa fa-user"></i> <?php  echo get_phrase('user_stastices'); ?></span> 
                    </a>
                    <ul>
                        <?php
                        $users = $this->db->get_where('admin', array('role' =>'User'))->result_array();
                        foreach ($users as $row3):
                            ?>
                            <li class="<?php if ($page_name == 'user_stastics') echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/user_stastics_report/<?php echo $row3['admin_id']; ?>">
                                    <span><i class="entypo-dot"></i><?php echo ucwords(strtolower($row3['name'])); ?></span>
									
                                </a>
								
                            </li>
							
                        <?php endforeach; ?>
                    </ul>
					
                </li>
        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'hmis_data') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/hmis_data_view">
                <i class="entypo-chart-bar"></i>
                <span><?php echo get_phrase('hmis_data'); ?></span>
            </a>
        </li>
    <!-- general_stastices-->
        <li class="<?php if ($page_name == 'general_stastices') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/general_view">
               &nbsp;<i class="fa fa-bars"></i>
                <span><?php echo get_phrase('general_finance_stastices'); ?></span>
            </a>
        </li>

		
        <!-- Fianace information-->
         <li class="<?php if ($page_name == 'finance') echo 'active'; ?> ">
          <a href="<?php echo base_url(); ?>index.php?admin/finance" target="_self" >
                &nbsp;<i class="fa fa-usd"></i>
                <span><?php echo get_phrase('finance'); ?></span>
            </a>
			
                 <ul>
				    <li class="<?php if ($page_name == 'accept_payment') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/accept_payment">
                        <span><i class="entypo-dot"></i>Send <?php echo get_phrase('payment_request'); ?></span>
                    </a>
                </li>	
				    <li class="<?php if ($page_name == 'finance') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/finance" title="service_charge_information">
                        <span><i class="entypo-dot"></i><?php echo get_phrase('today_service_charge'); ?></span>
                    </a>
                </li>
			   <!--     
                <li class="<?php //if ($page_name == 'approved') echo 'active'; ?> ">
                    <a href="<?php //echo base_url(); ?>index.php?admin/requests_approved" title="Approved payment request">
                        <span><i class="entypo-dot"></i><?php //echo get_phrase('paid_cash'); ?></span>
                    </a>
                </li> -->
								
				    <li class="<?php if ($page_name == 'partially_paid') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/partially_paid_list" title="partially_paid_cash">
                        <span><i class="entypo-dot"></i><?php echo get_phrase('ledger'); ?></span>
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
				
					<!---
				    <li class="<?php //if ($page_name == 'inbox_requests') echo 'active'; ?> ">
                    <a href="<?php //echo base_url(); ?>index.php?admin/inbox_request">
                        <span><i class="entypo-dot"></i><?php //echo get_phrase('complain_list'); ?></span>
                    </a>
                </li>  -->
				
            
            </ul>		
        </li>

		
        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>
		
		     <li class="">
            <a href="">
                &nbsp;<i class="fa fa-print"></i>
                 <span><?php echo get_phrase('generate_reports'); ?> </span>
            </a>
			
			
			   <ul>
                <li class="<?php if ($page_name == 'report_by_month') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/report_by_month">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('By Month'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'report_by_quarter') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/report_by_quarter">
                        <span><i class="entypo-dot"></i> <?php  echo get_phrase('By Quarter'); ?> </span>
                    </a>
                </li>
				
				    <li class="<?php if ($page_name == 'customed_report') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/customed_report">
                        <span><i class="entypo-dot"></i> <?php  echo get_phrase('customed_report'); ?> </span>
                    </a>
                </li>
				
               <li class="<?php if ($page_name == 'general_report') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/general_report_view">
                        <span><i class="entypo-dot"></i> <?php  echo get_phrase('general_report'); ?> </span>
                    </a>
                </li>
				    <li class="<?php if ($page_name == 'health_insurance_report') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/health_insurance_report">
                        <span><i class="entypo-dot"></i> <?php  echo get_phrase('health_insurance_report'); ?> </span>
                    </a>
                </li>
				
				</ul>
            </li>
		
       <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url();?>index.php?login/logout">
               &nbsp;<i class="fa fa-sign-out"></i>
                <span> <?php  echo get_phrase('logout'); ?></span>
            </a>
        </li>
				

    </ul>

</div>