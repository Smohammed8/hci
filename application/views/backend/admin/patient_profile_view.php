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

	.profile-user-img#pro{
		
		background-color:#fff;
		border 4px solid #fff;
		
		border-top-color:rgb(255,255,255);
		border-top-style:solid;
		border-top-width:4px;
		
		border-right-color:rgb(255,255,255);
		border-right-style:solid;
		border-right-width:4px;
		
		
		border-left-color:rgb(255,255,255);
		border-left-style:solid;
		border-left-width:4px;
		
		border-bottom-color:rgb(255,255,255);
		border-bottom-style:solid;
		border-bottom-width:4px;
		
		border-image-source:initial;
		border-image-slice:initial;
		border-image-width:initial;
		border-image-outset:initial;
		border-image-repeat:initial;
		border-radius:2px;
		
	}

</style>
 

<?php

 
$info  =	$this->db->get_where('patients' , array('mrn_id' => $mrn_id) )->result_array();
foreach($info as $row):
$mrn_id = $row['mrn_id'];
   $user = $row['user']; 
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

<div class="row" style="background-color:#ccdbdc;">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<hr>
		<ul class="nav nav-tabs bordered" >

			<li class="active" >
			<img src="<?php echo $this->crud_model->get_image_url('student' , $row['mrn_id']);?>" width="100px" height="90px" class="profile-user-img" id="pro" border="3px" >&nbsp;&nbsp;&nbsp;<b><u style="font-size:15px;"><?php echo ucwords(strtolower($row['name']));?></u></b><br>
            <button type="button" style="text-align:left;" class="btn btn-block btn-primary btn-xs"><b> <i class="fa fa-user" ></i> &nbsp;&nbsp;<?php echo get_phrase('personal_information');?>&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
				
				</li>
                 <a href="#" title="update patient profile" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_patient_edit2/<?php echo $row['patient_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="entypo-pencil"></i>
            	 <?php echo get_phrase('edit_profile');?>  
                </a>
   
					
				      <a href="#" title="use servic calculator" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_calculator/<?php echo $row['mrn_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="fa fa-dollar"></i>
            	 <?php echo get_phrase('Calculator');?> 
                </a>
				
				
				      <a href="<?php echo base_url();?>index.php?admin/report_sheet/<?php echo $row['mrn_id'];?>" title=" view medical_history" class="btn btn-primary pull-right">
          <i class="fa fa-print"></i>
            	Encounter <?php echo get_phrase('history');?>
                </a>
				    
                          
                    
						
				   <a href="#" title=" view appointment" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_old_case/<?php echo $row['mrn_id'];?>');"
            	class="btn btn-primary pull-right">
                <i class="entypo-user"></i>
            	<?php echo get_phrase('Old case');?> 
                </a> 
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="#" title="start new treatment" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_new_enconter/<?php echo $row['mrn_id'];?>');" 
            	class="btn btn-primary pull-right">
               <i class="entypo-plus-circled"></i>
			   
			      <?php 
				      $sqlx ="SELECT * FROM `treatment` where mrn_id ='$mrn_id'";
				       $res = mysql_query($sqlx) or die(mysql_error());
                        if(mysql_num_rows($res)<1){ ?>
						
							New encounter
					   <?php 	}
						else{ ?>
							
						Check-in
					<?php 	}
						?>
						
            
				 
                </a>
		</ul>
                <br>

	
		<div class="tab-content" style="margin-right:400px; font-size:12px; !important;">
        	<!----EDITING FORM STARTS-->
			<div class="tab-pane box active"  id="list" style="padding: 5px">
                <div class="box-content">
				
                        <?php echo form_open(base_url() . 'index.php?admin/manage_profile/update_profile_info' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
							
			
					              <div class="form-group" style="height:14px">
                               
                                   <div class="col-sm-5">
                                 <?php if($row['agreement']=='CB Health Insurance'){?>
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"> <u>CBHI ID:</u></a></span>
                                
								<?php } else { ?>
								
								<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"> <u>Letter No: </u></a></span>
                                 <?php }?>
								</div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo  $row['cbhi'];?></b></u></a></span>
                                </div>
                            </div>
					
					
					         <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
										<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('medical_record_number');?></u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['mrn_id'];?></b></u></a></span>
                                </div>
                            </div>
							
			                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href=""><u><?php echo get_phrase('patient_type');?></u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['indigent'];?></b></u></a></span>
                                </div>
                            </div>
							             
                                <?php if($row['phone']!=''){?>   
                                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<u><a href="#"> <?php echo get_phrase('phone');?></a></u></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b><?php echo $row['phone'];?></b></a></span>
                                </div>
                            </div>
									  <?php }?>

                        
                                <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('gender');?>:</u></a></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php if($row['sex']=='F'){ echo 'Female'; } else{ echo 'Male';}?></b></u></a></span>
                                </div>
                            </div>

                     

                             <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('date_of_registration');?>:</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['cdate'];?></b></u></a></span>
                                </div>
                            </div>

                             <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<u><a href="#"><?php echo get_phrase('region');?></a></u></span>
                                </div>
								<div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#"><?php echo $this->crud_model->get_class_name($row['class_id']);?></a></u></span>
                                </div>
                            </div>

                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('zone');?></u></a></span>
                                </div>
								
								   <div class="col-sm-5">
                                 <?php if($row['agreement']=='CB Health Insurance'){?>
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_section_name_by_id($row['section_id'],$row['class_id']);?>(<?php echo $row['section_id'];?>)</u></a></span>
                                
								<?php } else { ?>
								
								<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_section_name_by_id($row['section_id'],$row['class_id']);?></u></a></span>
                                 <?php }?>
								</div>

                            </div>

                                <div class="form-group"  style="height:14px">
                               
							    <div class="col-sm-5">
                                 <?php if($row['agreement']=='CB Health Insurance'){?>
									<i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('woreda');?> </u></a></span>
                                
								<?php } else { ?>
								
								<i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('organization');?> </u></a></span>
                                 <?php }?>
								</div>
								   <div class="col-sm-12">
                                 <?php if($row['agreement']=='CB Health Insurance'){?>
									<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$row['section_id']);?>(<?php echo $row['woreda_id'];?>)</u></a></span>
                                
								<?php } else { ?>
								
								<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$row['section_id']);?></u></a></span>
                                 <?php }?>
								</div>
                            </div>
							
							
							<div class="form-group"  style="height:14px">
                               
                              	   <div class="col-sm-5">
                                 <?php if($row['agreement']=='CB Health Insurance'){?>
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"> <u><?php echo get_phrase('kebele');?>:</u></a></span>
                                
								<?php } else { ?>
								
								<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"> <u><?php echo get_phrase('address');?>: </u></a></span>
                                 <?php }?>
							
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b><?php if($row['kebele']!=''){ echo $row['kebele'];} else { echo "----";}?></b></a></span>
                                </div>
                            </div>
							

							
		                 	<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('date_of_birth');?>&nbsp;(YYYY-MM-DD)</u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo  $row['age'];?>&nbsp;&nbsp;E.C</b></u></a></span>
                                </div>
                            </div>
							
					  <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u><?php echo get_phrase('registered_by');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo ucwords(strtolower($name));?>(<?php echo $role;?>)</b></u></a></span>
                                </div>
                            </div>
							
												<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;<a href="#"><u> <?php echo get_phrase('agreement');?>:</u></a></span>
                                </div>
					
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php if($row['agreement']!=''){ echo $row['agreement'];} else { echo ".....................";}?></b></u></a></span>
                                </div>
                            </div>
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
            <!----EDITING FORM ENDS-->         <!----EDITING FORM ENDS-->
			


<!--password-->
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
	<ul class="nav nav-tabs bordered">

			<li class="active">

	  <button type="button" class="btn btn-block btn-primary btn-xs"><b> <i class="fa  fa-suitcase"></i>  &nbsp;&nbsp;<?php echo get_phrase('patient_history');?>  &nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
						
		</li>
		</ul>
		
		
		
		
		
		
		
		
    	<!------CONTROL TABS END------>
                             <?php
                         $sqlx ="select * from treatment where  mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1";
                         $resultx=mysql_query($sqlx) or die(mysql_error());
                         while($data =mysql_fetch_array($resultx)){
							  $status = $data['status'];
						 }

                            ?>
                             <tr>				
                              
	
		<div class="tab-content" >
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					
                      	 <div class="form-group" style="height:14px">
                   
                               <table class="hoverTable" id="table_export" style="background-color:#ccdbdc;">
							   
							   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5"><b><?php echo get_phrase('patient encounter status');?> (<u><?php echo  $status;?></u>)</b></td>
								  
							
                               
							       <td  colspan="9"><b><?php echo get_phrase('payment information by servics type');?></b></td>
								   
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead style="background-color:#ccdbdc;">
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div> <?php echo get_phrase('MRN');?></div></th>
							
						   <th><div> <?php  if($row['agreement']=='CB Health Insurance'){ echo "CBHI Code"; } else{ echo "Patient Code"; } ?></div></th>
                         
                            <th><div><?php echo get_phrase('date');?>:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>
							<th><div><?php echo get_phrase('diagnosis');?> </div></th>
							
							
                            <th><div><?php echo get_phrase('card');?></div></th>
							
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('procedure');?></div></th>
							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>
								
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							 
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
					 $re34 = mysql_query("select * from treatment where  mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
                      
                           while($data21 =mysql_fetch_array($re34)){
                           $visit     = $data21['encounter'];
					       $outcome   = $data21['outcome'];
						    }
									           
		             $new  = date('Y-m-d');
		           //$new3 = date('Y-m-d',strtotime($new. ' - 30 days'));
				   
				    if(trim($visit  =='IPD') and ($outcome ===NULL))
				    $sql ="select * from treatment where  mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1";
    		        else 
		            $sql ="select * from treatment where  CAST(final_date as  DATE) > CAST('$new'  AS DATE) and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1";
		
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:14px;" > <i class="fa fa-warning"></i>  <strong> &nbsp; No active encouter found!</strong></div>';
	 
                              }
						 echo'<div style="color:red;font-size:12px;" >  <i class="fa  fa-info-circle"></i> <strong> With the same case, two or more new encouter creation is not permitted!</strong> </div>';
	  
                         while($row2=mysql_fetch_array($result)){

                            ?>
                                <tr>				
                                <?php   $encounter_id  = $row2['encounter_id'];?>						
							    <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
							    <td><?php  if($row2['diagniss']===NULL) 
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
								 
								 <?php   $sql2 = "update treatment set total =$subtotal where encounter_id='$encounter_id'"; ?>
									  <?php  echo number_format($subtotal,2);?>
									
								     </u></b> </td>
									  
								        <?php if($row2['remark']===NULL){ ?>
											
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
                                        
                                
										<?php  $indigent = $row['indigent'];?>
										     <li>
											 
											
											
			
										  <?php if($outcome ===NULL){?>
                                        	 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_add_payment/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('add payment');?> 
                                               	</a>
										    <?php }
											   else{?>
										      <a href="#" onclick="">
                                            	<i class="entypo-plus-circled"></i>
													<del><?php echo get_phrase('add payment');?></del>
                                               	</a>
										      <?php }?>
                                              </li>
											  
											  
										  <?php if($outcome !== NULL){?>
                                        	 <li class="divider"></li>	
											      <li>
												
												  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_add_payment/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('exception');?>
                                               	</a>
										
                                              </li>
											  		
										      <?php }?>
											  
											  	<?php if ($type=='IPD'){?>
											   <li class="divider"></li>	
											       <li>
										     <?php if($outcome ===NULL){?>
                                        	 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_old_outcome/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-user"></i>
													<?php echo get_phrase('outcome');?> 
                                               	</a>
										    <?php }
											   else{?>
										      <a href="#" onclick="">
                                            	<i class="entypo-user"></i>
													Discharged
                                               	</a>
										      <?php }?>
                                              </li>
													<?php }?>
													
                                              <?php if(($outcome ===NULL) and ($indigent=='Letter' or $indigent=='Employee' or $indigent=='Prisoner' or $indigent=='Refuge' or $indigent=='Student')){?>
                                        	 <li class="divider"></li>
												      <li>
											<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_new_letter_no/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('new_letter_no');?> 
                                               	</a>
												 </li>
										    <?php } ?>
										         
												  	<?php if ($type=='IPD'){?>
										        <li class="divider"></li>
															<li>	  
											    <?php if($outcome ===NULL){?>
                                        	    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_returnable/<?php echo $row2['encounter_id'];?>');">
                                            	&nbsp;&nbsp;  <i class="fa fa-dollar"></i>
													 Calculate Bed Charge<?php //echo get_phrase('Returnable');?> 
                                                 	</a>
													  <?php }else{?> 
												<a href="#" onclick="">
                                            	    &nbsp;&nbsp;<i class="fa fa-dollar"></i>
													<del>Calculate Bed Charge </del>
                                                 	</a>
													  <?php } ?>	
													  
                                        				</li>	
												 <?php } ?>	
			                             	 <li class="divider"></li>	
                                            <li>
										     <?php if(($outcome ===NULL) and ($edited <=3)){?>
                                        	  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_edit/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?> (<?php echo $row2['edited'];?>)
                                               	</a>
													 <?php }
													 
											 else if(($role =='Super_admin') and ($outcome =='') and ($edited <=6)){?> 
												  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_edit/<?php echo $row2['encounter_id'];?>');">
                                            	   <i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?> (<?php echo $row2['edited'];?>)
                                               	  </a>
													 
										    <?php }else{?>
														<a href="#" onclick="">
                                            	<i class="entypo-pencil"></i>
													<del><?php echo get_phrase('edit');?></del> (<?php echo $row2['edited'];?> times edited )
                                               	 </a>
									        <?php }?>
                                        				</li>
														
					
                                   <?php if($role =='Super_admin'){?>
								 
                                        <li class="divider"></li>
										
                                        <li>
                                                 <?php if($outcome ===NULL){?>
											<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/encouter/delete/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>
                                               	</a>
												 <?php }else{?>  
												 
												 	<a href="#" onclick="">
                                            	<i class="entypo-trash"></i>
													<del><?php echo get_phrase('delete');?></del>
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
			  
			  if($type=='IPD' and $outcome ===NULL)
				  $result1 = mysql_query("SELECT sum(card) FROM treatment where   mrn_id  ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error()); 
    		 
			  else 
			  $result1 = mysql_query("SELECT sum(card) FROM treatment where  CAST(final_date as  DATE) > CAST('$new'  AS DATE)  and mrn_id  ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		    
			while ($row1 = mysql_fetch_array($result1)) {
				$card= $row1['sum(card)'];
    	?>
               <td >     <b> <u> <?php echo number_format($row1['sum(card)'],2); ?></u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
		 	
			if($type=='IPD' and $outcome ===NULL)
			$result2 = mysql_query("SELECT sum(lab) FROM treatment where mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		 
			  else
			 $result2 = mysql_query("SELECT sum(lab) FROM treatment where  CAST(final_date as  DATE) > CAST('$new'  AS DATE) and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	    
			
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab  =	$row2['sum(lab)'];
    	?>
           <td>
		   <b> <u> <?php echo number_format($row2['sum(lab)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
			 
			if($type=='IPD' and $outcome ===NULL)
			$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		 
			  else 
			 $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  CAST(final_date as  DATE) > CAST('$new'  AS DATE) and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	  
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging= $row3['sum(Imaging)'];
    	?>
           <td>
		  <b> <u> <?php echo number_format($row3['sum(Imaging)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
			 <?php
			 
	     	 if($type=='IPD' and $outcome ===NULL)
			 $result4 = mysql_query("SELECT sum(surgery) FROM treatment where mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		 
			  else
			$result4 = mysql_query("SELECT sum(surgery) FROM treatment where   CAST(final_date as  DATE) > CAST('$new'  AS DATE) and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	      
		  
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery= $row4['sum(surgery)'];
    	?>
           <td>
		  <b> <u>  <?php echo number_format($row4['sum(surgery)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
			 
			  	 if($type=='IPD' and $outcome ===NULL)
			 $result5 = mysql_query("SELECT sum(drugs) FROM treatment where  mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		    
			  else
			 $result5 = mysql_query("SELECT sum(drugs) FROM treatment where   CAST(final_date as  DATE) > CAST('$new'  AS DATE)  and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	      
			
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs= $row5['sum(drugs)'];
    	?>
           <td>
		   <b> <u> <?php echo number_format($row5['sum(drugs)'],2); ?></u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
					 
		    if($type=='IPD' and $outcome ===NULL)
			  $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		    
			  else 
			$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where   CAST(final_date as  DATE) > CAST('$new'  AS DATE) and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	      
			 
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee = $row6['sum(Bed_fee)'];
    	?>
           <td>
		   <b> <u> <?php  echo number_format($row6['sum(Bed_fee)'],2); ?></u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
		 <?php
		      if($type=='IPD' and $outcome ===NULL)
			$result7 = mysql_query("SELECT sum(other) FROM treatment where mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		    
			  else 
		     $result7 = mysql_query("SELECT sum(other) FROM treatment where   CAST(final_date as  DATE) > CAST('$new'  AS DATE)  and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	      
			
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other=  $row7['sum(other)'];
    	?>
           <td>
		  <b> <u> <?php  echo number_format($row7['sum(other)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
			 
			  if($type=='IPD' and $outcome ===NULL)
		     $result8 = mysql_query("SELECT sum(total) FROM treatment where  mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    		    
			  else
		   $result8 = mysql_query("SELECT sum(total) FROM treatment where   CAST(final_date as  DATE) > CAST('$new'  AS DATE)  and mrn_id ='$mrn_id' order by encounter_id DESC LIMIT 1") or die(mysql_error());
    	      
		
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
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
			<?php endforeach; ?>

					 						

					<?php  
					if(!$info){
					echo"<br><br><br><br><br><br>";
					echo $param2;
				
	echo '<div style="color:red;font-size:17px;" > <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;Does not exist with above MRN</div>';
 

            echo"<br><br>"
	            ?>
	
	   <a href="<?php echo base_url(); ?>index.php?admin/patient_add">
                        <span style="color:green;"><i class="fa  fa-hand-o-right"></i><u> <?php echo get_phrase('new_patient'); ?></u></span>
                    </a>
				<?php	
		echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";				
		}
		else{
						
						
		}
?>
<br><br><br><br>
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