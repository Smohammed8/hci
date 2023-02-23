

		                     <?php 
                 		     $current_user = $this->session->userdata('admin_id'); 
	                         $sql = "SELECT * FROM `link_tbl` where user_id ='$current_user'";
                             $ress = mysql_query($sql) or die(mysql_error());
                             while($row3 = mysql_fetch_array($ress)){
                             $region    = $row3["region"]; 
						     $zone      = $row3["zone"]; 
							 $woreda    = $row3["woreda"]; 
						   } ?>
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

 
 <?php     $result8 = mysql_query("SELECT * FROM `parent`  where class_id='$region' and section_id='$zone' and woreda_id='$woreda'") or die(mysql_error());
    		while ($da = mysql_fetch_array($result8)) {
				$permission =  $da['permission'];
			}
			?>
 <?php if($permission =='1'){?>
        <li class="<?php
             if ($page_name == 'beneficiary_add' ||
				 $page_name == 'my_registration_page' ||
                 $page_name == 'woreda_kebele')
                echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-angle-double-right"></i>
                 <span style="color:yellow;font-weight:bold;"><?php echo get_phrase('master_list'); ?></span>
            </a>
            <ul>
	          <li class="<?php if ($page_name == 'beneficiary_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/beneficiary_add/<?php echo $current_user; ?>">
                        <span style="color:yellow;font-weight:bold"><i class="entypo-dot"></i><?php echo get_phrase('add_new_beneficiary'); ?></span>
                    </a>
                </li>
				  <li class="<?php if ($page_name == 'my_registration_page') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/our_patient_info/<?php echo $current_user; ?>">
                        <span style="color:yellow;font-weight:bold"><i class="entypo-dot"></i><?php echo get_phrase('in_our_woreda'); ?></span>
                    </a>
                </li>
						   <!-- manage Kebele -->
            <li class="<?php if ($page_name == 'woreda_kebele') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manege_kebele" target="_self">
                 <span style="color:yellow;font-weight:bold"><i class="entypo-dot"></i> 
                <span><?php echo get_phrase('manage Kebele'); ?></span>
            </a>
        </li>
			
			<li class="<?php if($page_name == 'create_report') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/create_report/<?php //echo $current_user; ?>">
                        <span style="color:yellow;font-weight:bold"><i class="entypo-dot"></i> <?php echo get_phrase('create_report'); ?></span>
                    </a>
                </li> 	
				

            </ul>
        </li>
		
		
		
 <?php } else{?>
 
   <li class="<?php if ($page_name == 'beneficiary_add') echo 'active'; ?> ">
        <a href="#">
                <i class="fa fa-angle-double-right"></i>
                 <span style="color:yellow;font-weight:bold;">  <del><?php echo get_phrase('master_list'); ?> </del></span>
            </a>    
        </li>
		
		
 <?php }?>
		
		
		<?php   $pend ='Pending';			   
				 $sql= mysql_query("select * from payment where region='$region' and zone='$zone' and woreda='$woreda' and fully_covered='Pending'");
                  
                       $num = (mysql_num_rows($sql));
                            ?>
	             
				 
		      <li class="<?php if ($page_name == 'payment_requests') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/payment_requests/<?php echo $current_user; ?>">
                        <i class="fa fa-angle-double-right"></i>
						<?php echo get_phrase('payment_request'); ?>(<?php echo  $num ;?>)</span>
                    </a>
                </li>
		
		
  <!-- patient -->
        <li class="<?php
             if ($page_name == 'today_encounter' ||
				 $page_name == 'report' ||
                 $page_name == 'my_encounter_page')
                echo 'opened active has-sub';
        ?> ">
              <a href="#">
                <i class="fa fa-angle-double-right"></i>
                <span style="font-weight:bold"><?php echo get_phrase('service_utilization'); ?></span>
               </a>
							<?php
                       $Today = date('y:m:d');
                       $new = date('l, F d, Y',strtotime($Today));
                       $result = mysql_query("select * from treatment where region='$region' and zone='$zone' and woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
                       $num = mysql_num_rows($result);
                          
							   ?>
                <ul>
         
                <li class="<?php if ($page_name == 'today_encounter') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/today_encounter">
                        <span style="font-weight:bold"><i class="entypo-dot"></i> <?php echo get_phrase('today_visits'); ?> (<?php echo $num;?>)</span>
                    </a>
                </li> 
			
             
				  <!-- finance info -->
        <li class="<?php if ($page_name == 'finance_by_quarter') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/financebyquarter" target="_self" >
                <i class="entypo-dot"></i>
                 <span style="font-weight:bold"><?php echo get_phrase('service_charge_info'); ?></span>
            </a>
        </li>
		
					  <!-- finance info -->
      
		  <li class="<?php if($page_name =='general_stastices_org') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/general_view_woreda">
                 <i class="entypo-dot"></i>
                 <span style="font-weight:bold"><?php echo get_phrase('fanance_chart'); ?></span>
            </a>
          </li>
		 
		 
  
            
		     <li class="<?php if ($page_name == 'my_requests') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/my_request/<?php echo $current_user; ?>">
                        <span style="font-weight:bold"><i class="entypo-dot"></i>
						<?php echo get_phrase('payment_history'); ?></span>
                    </a>
                </li>
				
            </ul>		
        </li>
   
     
		<li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/message">
                <i class="fa fa-angle-double-right"></i>
                <span style="font-weight:bold"><?php echo get_phrase('message'); ?></span>
            </a>
			
                 <ul>
                <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/message/message_home">
                        <span style="font-weight:bold"><i class="entypo-dot"></i><?php echo get_phrase('messages'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/message/message_new">
                        <span style="font-weight:bold"><i class="entypo-dot"></i><?php echo get_phrase('new_message'); ?></span>
                    </a>
                </li>
				
            
            </ul>		
        </li>
		

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile">
               <i class="fa fa-angle-double-right"></i>
                <span style="font-weight:bold"><?php echo get_phrase('my_profile'); ?></span>
            </a>
        </li>
		
	
		
		
				
		     <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url();?>index.php?login/logout">
                <i class="fa fa-angle-double-right"></i>
                <span style="font-weight:bold"> <?php  echo get_phrase('logout'); ?></span>
            </a>
        </li>
					

		
		
		   </ul>
		   

</div>
