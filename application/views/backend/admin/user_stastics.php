 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:3px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}

	</style>	
	<style>


tr:nth-child(even) {
  background-color: #f2f2f2;
}


</style>
<?php 
function format($value) {
	if ($value > 1) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}

?>
	<hr>	
			
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
			 
									
	    <a href="<?php echo base_url(); ?>index.php?admin/dashboard/"  class="btn btn-primary pull-right">
        <i class="fa fa-reply"></i>  <?php echo get_phrase('back'); ?> 
		
             </a>

<?php 
$data		=	$this->db->get_where('admin' , array('admin_id' =>$admin_id2))->result_array();
foreach ($data as $row):
?>


<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-2">
			
			<a href="#" class="profile-picture">
				<img src="<?php echo $this->crud_model->get_image_url('admin' ,$admin_id2);?>" 
                	class="img-responsive img-circle"  width="120" height="100"/>
			</a>
			
		</div>
		
		<div class="col-sm-9">
			
			<ul class="profile-info-sections">
				<li style="padding:0px; margin:0px;">
					<div class="profile-name">
							<h3><?php echo $row['name'];?></h3>
					</div>
				</li>
			</ul>
			
		</div>
		
		
	</header>
		<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));

$new2  = date('Y-m-d');
$day  = date('y:m:d');
$today = date('l, F d, Y',strtotime($day));
?>

	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="">
            		<br>
						<?php 
                                    $tf=mysql_query("SELECT * FROM patients where user ='$admin_id2' and cdate='$new'");
                                    $nw = mysql_num_rows($tf);
									$enc=mysql_query("SELECT * FROM treatment where user ='$admin_id2' and cdate='$new2'");
                                    $en = mysql_num_rows($enc);
									
									$to=mysql_query("SELECT * FROM patients where user ='$admin_id2'");
                                    $tota = mysql_num_rows($to);
									$tt=mysql_query("SELECT * FROM treatment where user ='$admin_id2'");
                                    $tta= mysql_num_rows($tt);
									
								   $ed=mysql_query("SELECT * FROM treatment where user ='$admin_id2' and edited='1'");
                                    $edit= mysql_num_rows($ed);
									
								    $sex = $row['Sex'];
    	                  ?>	 
            <table class="" border="2px;" style="font-size:14px;" width="100%">
                   <fieldset  >
					<legend style="padding:3px; border:#4e95f4 2px solid;"> <?php  echo get_phrase('monitor'); ?> <?php echo $row['name'];?> <?php  echo get_phrase('today_work_activities'); ?> (<?php echo $today;?>)</legend>
                    
				    <tr style="background-color:lightblue;">
                        <td><u><b><?php  echo get_phrase('current_status'); ?></b></u></td>
                        <td><u><b><?php  echo get_phrase('type_activity'); ?></u></b></td>  
						<td> <u><b><?php  echo get_phrase('indication'); ?></b></u></td>
                    </tr>
                    <tr> 
					
					  <?php  
					  if($row['status']=='1'){  ?>
					  
                        <td rowspan="8"> <img src="uploads/online.png"> <b><?php  echo get_phrase('online'); ?></b> <br>
						
						
						<?php if($sex=='Male'){?> <center><img src="uploads/ml.jpg" width="80" ></center> <?php } else{?> <center><img src="uploads/fm.jpg" width="80" ></center> <?php } ?>     </td>
						
						<?php
					  }
					  else{
						?>
					  <td rowspan="8"><i class="entypo-user"></i> <b> <?php  echo get_phrase('logged_out_at'); ?> <u><?php echo $row['logout'];?></u></b></td>
					  
					<?php   } ?>
                        <td><b> <?php  echo get_phrase('last_logged_in'); ?></b></td>  <td><b><?php echo $row['last_login'];?></b></td>
                    </tr>
                   
                   <tr>
                  
                        <td><b><?php  echo get_phrase('registration_of_new_patient'); ?> today</b></td>  <td><b> <span style="color:green"> <?php echo $nw ;?></span></b></td>
                    </tr>
					   <tr>
                    
                        <td><b> <?php  echo get_phrase('creating_new_encouters'); ?> today</b></td>  <td><b><span style="color:green"><?php echo $en;?></span></b></td>
                    </tr>
					   <tr>
                  
                        <td><b><?php  echo get_phrase('no_of_editing'); ?></b></td>  <td><b> <?php if($sex=='Male'){?> He <?php } else{?> She <?php } ?> has been edited <span style="color:red">(<?php echo $edit;?>)</span> patient(s) finance data</b></td>
                    </tr>
					   <tr>
                  
                        <td><b><?php  echo get_phrase('no_of_error_made'); ?></b></td>  <td><b> <span style="color:red"><?php //echo $row2['Imaging'];?>0</span></b></td>
                    </tr>
						   <tr>
                  
                        <td><b><?php  echo get_phrase('idel_time'); ?></b></td>  <td><b><span style="color:blue"><?php //echo $row2['surgery'];?>0 minutes</span></b></td>
                    </tr>
						 
            
								  
           <tr>
                 
                        <td style="background-color:lightblue;"><b><center>  <i class="fa fa-users"></i><?php  echo get_phrase('total_patient_registration'); ?></center></b><td style="background-color:lightblue;"><u><b><span style="color:green"><?php echo  format($tota);?></span></b></U></td>
                        </td>
                    </tr>
				
					    <tr>
                 
                        <td style="background-color:lightblue;"><b><center> <i class="entypo-users"></i><?php  echo get_phrase('total_old_encouters'); ?> </center></b><td style="background-color:lightblue;"><u><b><span style="color:green"><?php echo format($tta);?></span></b></U></td>
                        </td>
                    </tr>
			
				
              
                  </fieldset> 
                </table>	
				
				
				<br>
			
				   <table class="" border="2px;" style="font-size:14px;" width="100%">
                   <fieldset  >
					<legend style="padding:3px; border:#4e95f4 2px solid;"> <?php echo $row['name'];?> Basic information </legend>
                    
				    <tr style="background-color:lightblue;">
                        <td><u><b>User <?php  echo get_phrase('profile'); ?></b></u></td>
                        <td><u><b><?php  echo get_phrase('attribute'); ?>s</u></b></td>  
						<td> <u><b><?php  echo get_phrase('user_information'); ?></b></u></td>
                    </tr>
                    <tr> 
					
					 
					  
                        <td rowspan="8"> 
						
							
					<center> <a href="#" class="profile-picture">
				<img  width="100" height="50" src="<?php echo $this->crud_model->get_image_url('admin' , $row['admin_id']);?>" 
                	class="img-responsive img-circle" />
		 </a>  	</center>
						
						</td>
						
					
                        <td><b> Registered on</b></td>  <td><b><?php echo $row['date_of_join'];?></b></td>
                    </tr>
                   
                   <tr>
                  
                        <td><b> User email</b></td>  <td><b> <span style="color:"><?php echo $row['email'];?></span></b></td> 
                    </tr>
					   <tr>
                    
                        <td><b> User mobile </b></td>  <td><b><span style="color:"><?php echo $row['phone'];?></span></b></td>
                    </tr>
					   <tr> 
                        <td><b>Registered by</b></td>  <td><b>  <span style="color:"><?php echo $row['registered_by'];?></span></b></td>
                    </tr>
					   <tr>
                  
                        <td><b>Session ended</b></td>  <td><b> <span style="color:"><?php echo $row['logout'];?></span></b></td>
                    </tr>
						   <tr>
                  
                        <td><b>Password</b></td>  <td><b><span style="color:blue"><?php echo $row['password'];?></span></b></td>
                    </tr>
						 
            
								  
           <tr>
                 
                        <td style="background-color:lightblue;"><b>Gender</b><td style="background-color:lightblue;"> <b><span> <?php if($sex=='Male'){?> <i class="fa fa-male"></i> <?php } else{?> <i class="fa fa-female"></i> <?php } ?> <?php echo $row['Sex'];?></span></b></td>
                        </td>
                    </tr>
				
					    <tr>
                 
                        <td style="background-color:lightblue;"><b>Is account active </b><td style="background-color:lightblue;"><?php if($row['active']=='yes'){?> <i class="fa fa-check-square-o"></i> <b>Yes, Activated </b> <?php } else {?> <i class="fa fa-times"></i>  <b><span style="color:red;"> <b>Not Activated</b></span></b><?php } ?> </td> 
                        </td>
                    </tr>
			
				
              
                  </fieldset> 
                </table>	
			
		
			</div>
		</div>	 	
	</section>
	
	<?php endforeach;?>	 
	
</div>


   
<br><br><br><br><br><br>

