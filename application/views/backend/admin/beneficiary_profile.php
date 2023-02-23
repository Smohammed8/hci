  <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:70%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}
	</style>
<style>

img.profile-user-img {
    margin: 0 auto;
    width: 100px;
    padding: 3px;
    border: 3px solid 
#d2d6de;
}

table, th, tr ,td {
  border: 1px solid blue;
}
</style>
<?php
if(isset($_POST['search'])){ 

$param2  = trim($_POST["id"]);
//$info  =	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
//foreach($info as $row):
if($param2!='')
 
$results = mysql_query("SELECT * FROM beneficiary  WHERE full_code ='$param2' or phone='$param2'");
$no_of_row = mysql_num_rows($results);
 

 if($no_of_row <=0){
	 
	 echo"<br><br><br><br><br><br>";
	 if($param2==''){ echo 'Nothing Entered!';
	 
	 	echo "<meta http-equiv='refresh' content='2; url=?admin/dashboard'>";
	 
	 } 
	 //else{ echo $param2;}
	 else{ echo '';}
				
	echo '<div style="color:red;font-size:17px;" > 
	<img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;The record does\'t exist!</div>';
    echo"<br><br><br>";
                   ?>
	
	   <a href="<?php echo base_url(); ?>index.php?admin/beneficiary_add/<?php echo $param2;?>">
	   <input type="hidden" class="form-control"  name=""  value="<?php echo $param2;?>">
                        <span style="color:green;"><i class="fa  fa-hand-o-right"></i><u> <?php echo get_phrase('new_beneficiary'); ?></u></span>
                    </a>
				<?php
            echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		
		echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";				
		}
 else{
while($row = mysql_fetch_assoc($results)) {

   $user   = $row['user'];
   $cbhi   = $row['cbhi'];
    $family_code   = $row['family_code'];
 
   ?>
<br><br>


	                   <?php
	
						  $s="SELECT name,role FROM `admin` where admin_id='$user'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>


 
							   
							   
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<hr>
		<ul class="nav nav-tabs bordered" >

			<li class="active" >
			<img src="<?php echo $this->crud_model->get_image_url('beneficiary' , $row['beneficiary_id']);?>" width="100px" height="90px" class="profile-user-img" border="3px" >&nbsp;&nbsp;&nbsp;<b><u style="font-size:15px;"><?php echo $row['name'];?></u></b><br>
       <br><button type="button" style="text-align:left; width:100%" class="btn btn-block btn-primary btn-xs"><b> <i class="fa fa-user" ></i> &nbsp;&nbsp;<?php echo get_phrase('personal_information');?>&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
				
			
				</li>
						
		</ul>
		  
    	<!------CONTROL TABS END------>
                 <a href="#" title="update patient profile" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_patient_edit2/<?php echo $row['beneficiary_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="entypo-pencil"></i>
            	 <?php echo get_phrase('edit_profile');?>  
                </a>
   
					
				      <a href="#" title="use servic calculator" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_calculator/<?php echo $row['beneficiary_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="fa fa-check-square-o"></i>
            	 <?php echo get_phrase('renew');?> 
                </a>
				
				
				      <a href="<?php echo base_url();?>index.php?admin/report_sheet/<?php echo $row['beneficiary_id'];?>" title=" view medical_history" class="btn btn-primary pull-right">
          <i class="fa fa-print"></i>
            	 <?php echo get_phrase('renewal_status');?> 
                </a>
				    
                          
                    
						
				   <a href="#" title=" view appointment" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_old_case/<?php echo $row['beneficiary_id'];?>');"
            	class="btn btn-primary pull-right">
                <i class="fa  fa-users"></i>
            	<?php echo get_phrase('add_family');?> 
                </a> 
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <a href="#" title="start new treatment" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_add_payment_org/<?php echo $row['beneficiary_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="fa fa-usd"></i>
            	 <?php echo get_phrase('add_payment');?> 
                </a>
	
                <br>
				
			
	
		<div class="tab-content" style="margin-right:420px;">
        	<!----EDITING FORM STARTS-->
			<div class="tab-pane box active"  id="list" style="padding: 5px">
                <div class="box-content">
				
                        <?php echo form_open(base_url() . 'index.php?admin/manage_profile/update_profile_info' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
							
			
					           <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                               
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""> <u>CBHI ID:</u></a></span>
                                
								
								</div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo  $row['cbhi'];?></b></u></a></span>
                                </div>
                            </div>
					<?php $mrn =    $row['mrn_id'];  $cbhi = $row['cbhi'];  $code2 = $row['full_code'];?>
					
					         <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u> <?php //echo get_phrase('MRN');?>family_code</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;
									<a href="#"><u><b><?php echo $row['family_code'];?></b></u></a></span>
                                </div>
                            </div>
							
							    <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u> <?php //echo get_phrase('MRN');?>CBHI_#code</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;
									<a href="#"><u><b><?php echo $row['full_code'];?></b></u></a></span>
                                </div>
                            </div>
							
			                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('patient_type');?></u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['indigent'];?></b></u></a></span>
                                </div>
                            </div>
							      <?php if($row['phone']!=''){?>   
                                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;<u><a href="#"> <?php echo get_phrase('phone');?></a></u></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b><?php echo $row['phone'];?></b></a></span>
                                </div>
                            </div>
									  <?php }?>
                                <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('gender');?>:</u></a></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php if($row['sex']=='F'){ echo 'Female'; } else{ echo 'Male';}?></b></u></a></span>
                                </div>
                            </div>

                     

                             <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('relation');?>:</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['relation'];?></b></u></a></span>
                                </div>
                            </div>

                             <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#"><?php echo get_phrase('region');?></a></u></span>
                                </div>
								<div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#"><?php echo $this->crud_model->get_class_name($row['region']);?></a></u></span>
                                </div>
                            </div>

                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('zone');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?>(<?php echo $row['zone'];?>)</u></a></span>
                                </div>
                            </div>

                         <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
								<i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('woreda_town_organization');?> </u></a></span>
                                </div>
								 <div class="col-sm-6">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?>(<?php echo $row['woreda'];?>)</u></a></span>
                                </div>
                            </div>
							
							    	<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('kebele');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b><?php if($row['kebele']!=''){ echo $row['kebele'];} else { echo ".....................";}?></b></a></span>
                                </div>
                            </div>
							
		                 	<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('date_of_birth');?>&nbsp;(YYYY-MM-DD)</u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo  $row['dob'];?>&nbsp;&nbsp;E.C</b></u></a></span>
                                </div>
                            </div>
							
					<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('registered_by');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $name;?>(<?php echo $role;?>)</b></u></a></span>
                                </div>
                            </div>
							
					
							
							
																 <?php
                        /*
       				       $ssss= mysql_query("SELECT * FROM patients where mrn_id='$mrn_id'") or die(mysql_error());
                   
                           while($data = mysql_fetch_array($ssss)){
                           $renewal= $data['renewal']; 
						   $setup_year= $data['setup_year'];
			                } */
			
							 
					   ?>
							
							
							
                             <br>


                            <div class="form-group" style="background-color:#3c8dbc;">
                                <div class="col-sm-offset-3 col-sm-5" style="background-color:lightblue">
                                   
                                </div>
							</div>
                        </form>
				
                </div>
			</div>
    
            
		</div>
	</div>
</div>
                             <?php 
                            $user = $this->session->userdata('admin_id'); 	
	                        $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						     } ?>

                           <?php
						     $results = mysql_query("SELECT agreemenrt_type FROM `parent` where section_id='$zone' and class_id='$region' and woreda_id='$woreda'") or die(mysql_error());
                             while($row4 = mysql_fetch_array($results)){
                             $agree = $row4["agreemenrt_type"]; 
						     }
						    ?>
		  <?php if($agree=='Health Insurance'){?>
		
 <i class="fa  fa-users"></i>  &nbsp;&nbsp;<?php echo get_phrase('family');?> 
 	

           <table class="hoverTable" id="" width="100%">
		                 <?php  
						 
						        $wor    = $row['woreda'];
						        $zo     = $row['zone'];
								$family = $row['family_code'];
						        $reg    = $row['region']; ?>
		   <?php	 $sqlx="SELECT * FROM family where  region ='$reg' and zone='$zo' and  woreda='$wor' and family_code='$family'";
                      $resultx = mysql_query($sqlx) or die(mysql_error());
                        if(mysql_num_rows($resultx)>0){ ?>
	             
						
                	<thead>
                		<tr class="header-tr" bgcolor="lightblue" height="30px;">
							<th><div>#</div></th>
                    	
						  
                    		<th width="20%"><div><?php echo get_phrase('fname');?></div></th>
                    		<th><div><?php echo get_phrase('family_code');?></div></th>
                    		<th><div><?php echo get_phrase('relation');?></div></th>
							<th><div><?php echo get_phrase('age');?></div></th>
							<th><div><?php echo get_phrase('sex');?></div></th>
							<th width="30%"><div>Address Path</div></th>
                    		<th><div><?php echo get_phrase('CBHI_#code');?></div></th>
						  
						</tr>
					</thead>
						<?php }?>
                    <tbody>

                    	<?php 
						
						
						$count = 1;
					
						 $sqlx="SELECT * FROM family where  region ='$reg' and zone='$zo' and  woreda='$wor' and family_code='$family'";
                      $resultx = mysql_query($sqlx) or die(mysql_error());
                        if(mysql_num_rows($resultx)<1)
                           {
	             
						 echo'<div style="color:red;font-size:14px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No family registered yet!</div>';
	 
                              }
                         while($rows=mysql_fetch_array($resultx)){
                     	    $dob = $rows['dob'];
							$today = date("y-m-d");
							$diff = date_diff(date_create($dob),date_create($today));
							$age = $diff->format('%y')-7;
							 ?>  
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $rows['name'];?></td>
							<td><?php echo $rows['family_code'];?></td>
							<td><?php echo $rows['relation'];?></td>
							<td> <?php echo $age;?></td>	 
							<td><?php echo $rows['sex'];  ?> </td>
							<td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?>/
							<?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></td>
						    <td><?php echo $rows['full_code'];?> </td>
						
	
			
                        </tr>
						 <?php }?>
                    </tbody>
                </table>
				
				
				
				
				<?php }?>
				
		
<!--password-->
<div class="row">
	<div class="col-md-12">
	
	
    
    	<!------CONTROL TABS START------>
	<ul class="nav nav-tabs bordered">

			<li class="active">

	  <button type="button" class="btn btn-block btn-primary btn-xs"><b> <i class="fa fa-th-list"></i>  
	  &nbsp;&nbsp;Last Payment and renewal status &nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
						
		</li>
		</ul>
		
	
    	<!------CONTROL TABS END------>
        
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					
                        <?php echo form_open(base_url() . 'index.php?student/manage_profile/change_password' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            
							
							 <div class="form-group" style="height:14px">
                   
                               <table class="hoverTable" id="table_export">
							   
							   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							       <td  colspan="5"> <b><?php echo get_phrase('beneficiary status');?></b></td> 
								  
							
                               
							   <td  colspan="9"> <b><?php echo get_phrase('payment information by renewal year');?></b></td>  
								   
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div>#</div></th>
							
							<th><div> <?php echo get_phrase('CBHI Code');?></div></th>
                         
                            <th><div><?php echo get_phrase('date');?>:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>
							<th><div><?php echo get_phrase('diagnosis');?> </div></th>
                            <th><div>2012</div></th>
                            <th><div>2013</div></th>
							<th><div>2014</div></th>
							<th><div>2015</div></th>
                            <th><div>2016</div></th>
							<th><div>2017</div></th>
						    <th><div>2018</div></th>
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							 
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                   $sql="select * from treatment where mrn_id ='$mrn_id' order by encounter_id desc Limit 1";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:15px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No payment made yet!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){

                            ?>
                        <tr>				
                                 <?php   $encounter_id  =$row2['encounter_id'];?>						
							    <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
							    <td><?php echo $row2['Date_of_service'];?></td>
						        <td><?php echo $row2['encounter'];?> </td>
							    <td><?php  if($row2['diagniss']=='') 
								        echo "-"; 
										else
								     echo $row2['diagniss'];?> 
								   </td>
							       <td><?php echo $row2['card'];?></td>
							       <td><?php echo $row2['lab'];?></td>
								   <td><?php echo $row2['Imaging'];?></td>
	    						   <td><?php echo $row2['surgery'];?></td>
							       <td><?php echo $row2['drugs'];?></td>
								   <td><?php echo $row2['Bed_fee'];?></td>
								   <td><?php echo $row2['other'];?></td>
								   
								   <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								   <td style="text-align: right;"> <b><u>
								 
								 <?php   $sql2 = mysql_query("update treatment set total =$subtotal where encounter_id='$encounter_id'"); ?>
									 	  <?php  echo number_format($subtotal,2); ?>
								     </u></b> </td>
									  
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  <?php $outcome =  $row2['outcome'];
								        $edited  =  $row2['edited']; 
										 $type= $row2['encounter']; ?>
              
                          										 <?php
                           $current_user = $this->session->userdata('admin_id');
       				       $ss="SELECT * FROM `admin` where admin_id='$current_user'";
                           $re = mysql_query($ss) or die(mysql_error());
                           while($da = mysql_fetch_array($re)){
                           $role = $da['role']; 
			                }
					   ?>
						  <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                                       <i class="fa fa-list"></i>&nbsp;  Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu" >
                                        
                                
										 
										     <li>
										  <?php if($outcome ==''){?>
                                        	 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_add_payment/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('add payment');?> 
                                               	</a>
										    <?php }
											   else{?>
										      <a href="#" onclick="">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('add payment');?>(Closed)
                                               	</a>
										      <?php }?>
                                              </li>
											  
											  
										  <?php if($outcome !='' and $edited >0){?>
                                        	 <li class="divider"></li>	
											      <li>
												
												  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_add_payment/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('exception');?>
                                               	</a>
										
                                              </li>
											  		
										      <?php }?>
											   <li class="divider"></li>	
											       <li>
										  <?php if($outcome ==''){?>
                                        	 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_old_outcome/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-user"></i>
													<?php echo get_phrase('evolution');?> 
                                               	</a>
										    <?php }
											   else{?>
										      <a href="#" onclick="">
                                            	<i class="entypo-user"></i>
													<?php echo get_phrase('evolution');?>(Closed)
                                               	</a>
										      <?php }?>
                                              </li>
												
														
										
										        <li class="divider"></li>	
														 
														  <li>
														  
											    <?php if(($outcome =='') and ($type=='IPD')){?>
                                        	    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_returnable/<?php echo $row2['encounter_id'];?>');">
                                            	&nbsp;&nbsp;  <i class="fa fa-dollar"></i>
													Calculate Bed Charge<?php //echo get_phrase('Returnable');?> 
                                                 	</a>
													  <?php }else{?> 
												<a href="#" onclick="" style="color:red;">
                                            	    &nbsp;&nbsp;<i class="fa fa-dollar"></i>
													No Bed Charge!
                                                 	</a>
													  <?php } ?>	
													  
                                        				</li>	
												
			                             	 <li class="divider"></li>	
                                        <li>
										     <?php if(($outcome =='') and ($edited =='0')){?>
                                        	  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_edit/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>
                                               	</a>
													 <?php }
													 
													 else if(($role =='Super_admin') and ($outcome !='') and ($edited =='1')){?> 
												  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_edit/<?php echo $row2['encounter_id'];?>');">
                                            	   <i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>
                                               	  </a>
													 
													 <?php }else{?>
														<a href="#" onclick="">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>(Closed)
                                               	 </a><?php }?>
                                        				</li>
														
					
                                   <?php if($role =='Super_admin'){?>
								 
                                        <li class="divider"></li>
										
                                        <li>
                                                 <?php if($outcome ==''){?>
											<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/encouter/delete/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>
                                               	</a>
												 <?php }else{?>  
												 
												 	<a href="#" onclick="">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>(Closed)
                                               	</a>
												 <?php }?>
                                        </li>
								   <?php }?>
										
										
										
									
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
	<td  colspan="5" style="text-align:right;"><b> #<?php echo get_phrase('subtotal_amount(in ETB)');?>:</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card= $row1['sum(card)'];
    	?>
               <td >     <b> <u> <?php echo number_format($row1['sum(card)'],2); ?></u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab  =	$row2['sum(lab)'];
    	?>
           <td>
		   <b> <u> <?php echo number_format($row2['sum(lab)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging= $row3['sum(Imaging)'];
    	?>
           <td>
		  <b> <u> <?php echo number_format($row3['sum(Imaging)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery= $row4['sum(surgery)'];
    	?>
           <td>
		  <b> <u>  <?php echo number_format($row4['sum(surgery)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs= $row5['sum(drugs)'];
    	?>
           <td>
		   <b> <u> <?php echo number_format($row5['sum(drugs)'],2); ?></u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee = $row6['sum(Bed_fee)'];
    	?>
           <td>
		   <b> <u> <?php  echo number_format($row6['sum(Bed_fee)'],2); ?></u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other=  $row7['sum(other)'];
    	?>
           <td>
		  <b> <u> <?php  echo number_format($row7['sum(other)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
		  <?php 	//$fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
  
		     <?php $grandtotal =$card +$lab+$Imaging+$surgery+$drugs+$Bed_fee+$other;?>
		    <td style="background-color:gray;text-align: right;" > <b> 
			 <u>  <?php  echo number_format($grandtotal,2); ?></u> </b> </td>
		   
    	<?php } ?>
						
							         
								       </tr>
							    
                             </tfoot>							
                    </tbody>			
                </table>
								   			
                            </div>              
                </div>
			</div>

            
		</div>
		
	</div>
</div>
 <?php }}//endforeach;?>					 				

				
<?php } ?>
	<br><br><br><br><br>
	<script>

  
var blink_speed = 500;
var t = setInterval(function () {
    var ele = document.getElementById('blinker');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

</script>		
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
