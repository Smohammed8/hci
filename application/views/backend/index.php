
<?php
	$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$text_align         =	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
	$account_type       =	$this->session->userdata('login_type');
	$skin_colour        =   $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description;
	$active_sms_service =   $this->db->get_where('settings' , array('type'=>'active_sms_service'))->row()->description;
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">
<head>
	<title><?php echo $page_title;?> | <?php echo $system_title;?></title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="SEID MOHAMMED-JMC-ICT" />
	<meta name="author" content="SEID MOHAMMED-JMC-ICT" />
<link rel="stylesheet" href="assets/css2/redmond.calendars.picker.css">



	<?php include 'includes_top.php';?>
<style>
a:hover{
	text-decoration:none !important;
}
a:visited{
	text-decoration:none !important;
}
a:active{
	text-decoration:none !important;
}
</style>
</head>
	<?php //include 'includes_top.php';?>

<?php 
$edit_data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($edit_data as $row):
          $roll =$row["role"];              
     ?>
	 <?php endforeach; ?>
	 
<body class="page-body <?php if ($skin_colour != '') echo 'skin-' . $skin_colour;?>" >
	<div class="page-container <?php if ($text_align == 'right-to-left') echo 'right-sidebar';?>" >
	
	<?php if (trim($roll=='Super_admin')){
		
	   include $account_type.'/navigation.php';
		
     	}
	    if (trim($roll=='Admin')){
		
	    include $account_type.'/navigation_admin.php';
		
		} 
        if (trim($roll=='Head')){
		
	     include $account_type.'/navigation_head.php';
          }
        if($roll=='Adminstration'){
         include $account_type.'/navigation_adminstration.php';
			     }
	    if (trim($roll=='Org')){
		
	      include $account_type.'/navigation_org.php';
          }
   
         if (trim($roll=='User')){
		
	    include $account_type.'/navigation_user.php';
		}
		 ?>
	
		<div class="main-content" width="100%">
		
			<?php include 'header.php';?>

     <?php   if($roll =='Head' or $roll =='User'){?>
     <form action="<?php echo base_url(); ?>index.php?admin/patient_profile" method="post">
	   <div class="form-group">
						
						<div class="col-sm-2">
							<select name="key" class="form-control" >
                                   <!-- <option value="MRN">  <?php //echo get_phrase('search by');?></option> -->
                              		<option value="MRN"><?php echo get_phrase('MRN');?></option> 
									<option value="phone"><?php echo get_phrase('phone');?></option> 
								    <option value="code"><?php echo get_phrase('CBHI_Code');?></option>
									
                         
                          </select>
					</div>
		
         <div class="form-group">
                     <div class="col-sm-4">
			 <input type="text" class="form-control" autocomplete="on"    title ="Enter  Phone or MRN or CBHI#ID or ID" id ="search" name="id" onmouseover ="this.focus();"  placeholder="Enter key to search..." /> <!--autocomplete="off"-->
			        </div>
				   <div class="col-sm-5">
			 <button type="submit" class="btn btn-primary" title ="Click here after fill MRN" id="submit" style="font-weight:bold;" name="search"><i class="fa fa-search"></i> <?php echo get_phrase('search');?></button> 
           </div>
	                  </div>
	 
	                </form> 
					
    
				   
                  <?php  } 
				  
				  else if($roll =='Admin' or $roll =='Super_admin'){?>
					 
					      
						  <form action="<?php echo base_url(); ?>index.php?admin/user_profile_search" method="post"  >
						  
	               <div class="form-group">
						
						<div class="col-sm-2">
							<select name="key" class="form-control" >
                                    <option value="email">  <?php //echo get_phrase('search for');?> Search user by </option> 
								    <option value="email"><?php //echo get_phrase('phone');?>Email </option> 
                              		<option value="phone"><?php //echo get_phrase('MRN');?> Phone</option> 
									<option value="id"><?php //echo get_phrase('MRN');?> User #ID</option> 
									
                          </select>
					</div>
		
         <div class="form-group">
                     <div class="col-sm-4">
			 <input type="text" class="form-control" autocomplete="off"   title ="Enter key to search User" id ="search" name="id" onmouseover ="this.focus();"  placeholder="Enter key to search user..." /> <!--autocomplete="off"-->
			        </div>
				   <div class="col-sm-5">
			 <button type="submit" class="btn btn-primary" title ="Click here after fill" id="submit" style="font-weight:bold;" name="search"><i class="fa fa-search"></i> <?php echo get_phrase('search');?></button> 
           </div>
	                  </div>
	 
	                </form> 
					 
                     <?php }
					 else { 
   
                          $user = $this->session->userdata('admin_id'); 	
	  
	                       $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						   } ?>
						   
		
	 	<h3>	<i class="fa fa-flag"> &nbsp;</i>Welcame to  <u><?php echo $this->crud_model->get_type_name_by_id('class',$region);?>/<?php echo $this->crud_model->get_section_name_by_id($zone,$region);?>/<?php echo $this->crud_model->get_woreda_name_by_id($woreda,$zone);?></u> </h3>  <p style="font-weight:bold;font-size:12px;color:green;">Region code :<?php echo  $region;?> &nbsp;&nbsp;Zone code :<?php echo $zone;?>&nbsp;&nbsp;Woreda code:<?php echo  $woreda;?></p>  
	   		
				 <form action="<?php echo base_url(); ?>index.php?admin/beneficiary_profile" method="post">
	               <div class="form-group">
						
						<div class="col-sm-2">
							<select name="key" class="form-control" >
                                    <option value="CBHI">  <?php //echo get_phrase('search for');?> Search by </option> 
								    <option value="CBHI"><?php //echo get_phrase('phone');?>CBHI#ID </option> 
                              		<option value="phone"><?php //echo get_phrase('MRN');?> Phone</option> 
									
									
                          </select>
					</div>
		
         <div class="form-group">
                     <div class="col-sm-4">
			 <input type="text" class="form-control" autocomplete="off"   title ="Enter key to search beneficiary" id ="search" name="id" onmouseover ="this.focus();"  placeholder="Enter key to search beneficiary..." /> <!--autocomplete="off"-->
			        </div>
				   <div class="col-sm-5">
			 <button type="submit" class="btn btn-primary" title ="Click here after fill" id="submit" style="font-weight:bold;" name="search"><i class="fa fa-search"></i> <?php echo get_phrase('search');?></button> 
           </div>
	                  </div>
	 
	                </form> 
                  <?php }?>
	 <br>
	           	<div class="login-progressbar-indicator" id="loader">
		
					<span><img src="uploads/ajax-loader.gif">
			<?php echo get_phrase('please wait...');?></span>
				
			</div>
			
			
<script>	
$("#loader").hide();

$("#submit").on('click', function(){
	
    $("#loader").show();
	
})
</script>






	 <br>
			<?php include $account_type.'/'.$page_name.'.php';?>

			<?php include 'footer.php';?>

		</div>

        	
	</div>
	
    <?php include 'modal.php';?>
    <?php include 'includes_bottom.php';?>
    
<script type="text/javascript">
idleMax = 6;// Logout after 10 minutes of IDLE
idleTime = 0;
$(document).ready(function () {
    var idleInterval = setInterval("timerIncrement()", 60000); 
    $(this).mousemove(function (e) {idleTime = 0;});
    $(this).keypress(function (e) {idleTime = 0;});
})
function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > idleMax) { 
	      window.location="<?php echo base_url();?>index.php?login/logout";
    }
}



</script>
<script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
	$('#popupDatepicker').calendarsPicker({calendar: calendar}); // change ID into class
	
	//$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate});
});

///function showDate(date) {
	//alert('The date chosen is ' + date);
}
</script>
</body>
</html>
		
  

