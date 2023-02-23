<hr />
<?php 	$re25 = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ross = mysql_fetch_array($re25)) {
				$fyear  = $ross['year'];
				$backyear  = $fyear-1;
				}
?>
<?php 
	$active_sms_service = $this->db->get_where('settings' , array('type' => 'active_sms_service'))->row()->description;
?>
<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical">
			<li class="active">
			<a href="#b-profile" data-toggle="tab">
			<i class="fa  fa-caret-right"></i>  Type of health organization</a></li>
				<li>
					<a href="#v-home" data-toggle="tab">
						<i class="fa  fa-caret-right"></i>  HMIS  Data:
						
					</a>
				</li>
				<li>
					<a href="#v-profile" data-toggle="tab">
					<i class="fa  fa-caret-right"></i>  Server Parameters
					
					</a>
				</li>
				
					<li>
					<a href="#mode" data-toggle="tab">
					<i class="fa  fa-caret-right"></i>  Maintenanc Mode
					
					</a>
				</li>
				
					<li>
					<a href="#pass" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Password Adminstration
					
					</a>
				</li>
					<li>
					<a href="#field" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Madatory Field Adminstration
					
					</a>
				</li>
				
		           <li>
					<a href="#indigent" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Option list for Indigent
					
					</a>
				</li>
				  <li>
					<a href="#agreement" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Option list for Agreement
					
					</a>
				</li>
				
					  <li>
					<a href="#Outcome" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Option list for Outcome
					
					</a>
				</li>
				
				  <li>
					<a href="#year" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Setup selction year
					
					</a>
				</li>
				
				 <li>
					<a href="#fyear" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Setup fisical year
					
					</a>
				</li>
					  <li>
					<a href="#service" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Add new service type
					
					</a>
				</li>
				  <li>
					<a href="#user" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Add user role
					
					</a>
				</li>
				  <li>
					<a href="#footer" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Add footer copy right
					
					</a>
				</li>
				
				  <li>
					<a href="#signUp" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Sign Up Setting
					
					</a>
				</li>
				  <li>
					<a href="#woreda" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Enable Master List feature
					
					</a>
				</li>
			</ul>
		
			
			
			<div class="tab-content">

                               <?php
                     $facility=	$this->db->get('facility')->result_array();
                                foreach($facility as $row1):?>
				<div class="tab-pane active" id="b-profile">

					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update1/'.$row1['Facility_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo get_phrase('facility type');?></label>
                        <div class="col-sm-5">
						
	                          
							<select name="type" class="form-control">
                            
                              <option value="Hospital" <?php if($row1['type'] == 'Hospital')echo 'selected';?>><?php echo get_phrase('hospital');?></option>
                              <option value="Health_center"<?php if($row1['type'] == 'Health_center')echo 'selected';?>><?php echo get_phrase('Health_center');?></option>
                             
                        	
                        	
                          </select>
						</div> 
					</div>
					
					      <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('Health Organiztion name');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="name"  value="<?php echo $row1['name'];?>">
	                        </div>
	                    </div>
						
						      <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('facility catchment population');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" readonly name="" value="<?php echo $row1['cachement'];?>">
	                        </div>
	                    </div>
						
						
			
					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo get_phrase('ownership');?></label>
                        <div class="col-sm-5">
							<select name="ownership" class="form-control">
                               
                               <option value="Private" <?php if($row1['ownership'] == 'Private')echo 'selected';?>><?php echo get_phrase('private_facility');?></option>
                               <option value="Public"<?php if($row1['ownership'] == 'Public')echo 'selected';?>><?php echo get_phrase('public_facility');?></option>
                             
							 
                          </select>
						</div> 
					</div>
					
						
						
					<div class="form-group">
	                    <div class="col-sm-offset-3 col-sm-5">
	                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
	                    </div>
	                </div>
	            <?php echo form_close();?>
				          
				</div>
				
	
			    
				<div class="tab-pane" id="v-home">
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update2/'.$row1['Facility_id'] ,array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php //echo get_phrase('clickatell_username');?> Male-Total #of visit(HMIS):</label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" id="tmale" name="tmale" value="<?php echo $row1['tmale'];?>"  required/>
	                      	</div>
	                  	</div>
	                  	<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php //echo get_phrase('clickatell_password');?>Female-Total #of visit(HMIS):</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" id="tfemale" name="tfemale" value="<?php echo $row1['tfemale'];?>"  required/>
	                        </div>
	                    </div>
						
						
						 	<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php //echo get_phrase('clickatell_password');?>#Total Cachment:</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" readonly id="cachement" name="" value="<?php echo $row1['cachement'];?>">
	                        </div>
	                    </div>
	                    
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
						
	                <?php echo form_close();?>
					 <?php endforeach;?>
				</div>
				
				       
				<div class="tab-pane" id="v-profile">
				   <?php
                     $server=	$this->db->get('server')->result_array();
                             foreach($server as $row2):?>
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update3/'.$row2['server_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('server_ID');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" readonly class="form-control" name="server_id" 
	                            	value="<?php echo $row2['server_id'];?>">
	                      	</div>
	                  	</div>
	                  	
						<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php  echo get_phrase('Server_IP');?> </label>
	                        <div class="col-sm-5">
	                            <input type="text" readonly class="form-control" name="ip" 
	                                value="<?php echo $row2['ip'];?>">
	                        </div>
	                    </div>
	                    
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('domain_name');?> </label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="domain_name" value="<?php echo $row2['domain_name'];?>">
	                        </div>
	                    </div>
							<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('link');?> </label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" name="link" value="<?php echo $row2['link'];?>">
	                        </div>
	                    </div>
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					 <?php endforeach;?>
				</div>
				
				
				
				
				        <?php
                     $m  =	$this->db->get('mode')->result_array();
                         foreach($m as $row3):?>
				
						<div class="tab-pane" id="mode">
					<?php echo form_open(base_url() . 'index.php?admin/maintenace_mode/change/'.$row3['maintainac_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						
					<!-- ///////////////////////////////////////////-->	
				<?php 
   $edit_data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($edit_data as $rowx):
          $roll =$rowx["role"];              
     ?>
	 <?php endforeach; ?>
	              <?php if (trim($roll =='Super_admin')){?>
					<div class="form-group">
					   <input type="hidden" class="form-control" name="maintainac_id" value="<?php echo $row3['maintainac_id'];?>">
						<label class="col-sm-3 control-label">Toggle(On/Off):</label>
                        <div class="col-sm-5">
							<select name="maintainac_mode" class="form-control">
   
								
                              <option value="0" <?php if($row3['maintainac_mode'] == '0')echo 'selected';?>><?php echo get_phrase('Off');?></option>
                              <option value="1"<?php if($row3['maintainac_mode'] == '1')echo 'selected';?>><?php echo get_phrase('On');?></option>
                             
                        	
                        	
                          </select>
						</div> 
					</div>	
				  <?php } 	
				 else{ ?>
					<div class="form-group">
					  
						<label class="col-sm-3 control-label" style="color:red;" >Access Denied Maintainace Mode change!</label>
                        <div class="col-sm-5">
						<input type="text" class="form-control"   readonly name="" value="<?php echo $row3['maintainac_mode'];?>">
						</div> 
					</div>
				  <?php }?>
					<!-- ///////////////////////////////////////////-->	
					
					
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					<?php endforeach;?>
					<?php if($row3['maintainac_mode']=='1'){ ?>
						
						
					<img src="uploads/mode.JPG" width="350" height="260">
					<?php } ?>

				
				</div>
				     
				
				
				
				
						<div class="tab-pane" id="pass">
					 <?php
                     $password=	$this->db->get('password')->result_array();
                             foreach($password as $row4):?>
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update4/'.$row4['password_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
				
					<div class="form-group">
						<label class="col-sm-3 control-label">Password Validity duration:</label>
                        <div class="col-sm-2">
						  <input type="text" class="form-control" name="duration" value="<?php echo $row4['duration'];?>">
						</div> days 
								</div> 
					
					
						<div class="form-group">
						<label class="col-sm-3 control-label">Warning time vailidity expiration:</label>
						<div class="col-sm-2">
						  <input type="text" class="form-control"   name="warning" value="<?php echo $row4['warning'];?>"> 
						</div> days
					</div>
					
						<div class="form-group">
						<label class="col-sm-3 control-label">Minimum number of characters:</label>
						<div class="col-sm-2">
						  <input type="text" class="form-control"   name="characters" value="<?php echo $row4['characters'];?>">
						</div> 
					</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Not -reusable password count:</label>
						<div class="col-sm-2">
						  <input type="text" class="form-control"   name="reusable" value="<?php echo $row4['reusable'];?>">
						</div> times					</div>
							<div class="form-group">
						
						<div class="col-sm-5">
						<?php echo get_phrase('Letters mandatory');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked" name="letter" >
						</div> 
					</div>		
							<div class="form-group">
						
						<div class="col-sm-5">
						<?php echo get_phrase('Uppercase letters mandatory');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;<input type="checkbox" checked="checked"  name="uppercase">
						</div> 
					</div>		
							<div class="form-group">
						
						<div class="col-sm-5">
						<?php echo get_phrase('Lowercase letters mandatory');?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked" name="lowercase">
						</div> 
					</div>		
					
					
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
			<?php endforeach;?>
				</div>
				
				
		<!--//////////////////////////////////////////////////////////////////////////////////////// -->		
				
					<div class="tab-pane" id="field">
					<?php
                     $mand=	$this->db->get('password')->result_array();
                             foreach($mand as $row5):?>
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update5/'.$row4['password_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
				   <h4> <u>Patients' Madatory Field Adminstration</u></h4>
			
					<div class="form-group">
						
                        <div class="col-sm-5">
						  <input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('full name');?> 
						</div> 
						
						 <div class="col-sm-5">
						  <input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('encouter');?> 
						</div> 
						</div> 
							<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('sex');?> 
						</div> 
								
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('indigent');?> 
						</div> 
					</div>		
					
					<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" >&nbsp;&nbsp;<?php echo get_phrase('phone');?> 
						</div> 
								
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('agreement');?> 
						</div> 
					</div>
							<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('region');?> 
						</div> 
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('section');?> 
						</div> 
					</div>
							<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('age');?> 
						</div> 
						
							<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('Woredas');?> 
						</div> 
					</div>
							<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('kebele');?> 
						</div> 
						
								
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('join_date');?> 
						</div>
					</div>
					
					
					  <div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('kebele_cod');?> 
						</div> 
						
							<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('cbhi_no');?> 
						</div> 
					</div>
					
					
					
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
								<?php endforeach;?>
					<!--//////////////////////////////////////////////////////////////////////////////////////// -->			
								<?php
                     $mand=	$this->db->get('password')->result_array();
                             foreach($mand as $row5):?>
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update6/'.$row4['password_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
								<h4> <u>Users' Madatory Field Adminstration</u></h4>
			
					<div class="form-group">
						
                        <div class="col-sm-5">
						  <input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('user_id');?> 
						</div> 
						
						 <div class="col-sm-5">
						  <input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('sex');?> 
						</div> 
						</div> 
							<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('firstname');?> 
						</div> 
								
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('lastname');?> 
						</div> 
					</div>		
					
					<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('role');?> 
						</div> 
								
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('email');?> 
						</div> 
					</div>
							<div class="form-group">
						
						<div class="col-sm-5">
						<input type="checkbox" >&nbsp;&nbsp;<?php echo get_phrase('photo');?> 
						</div> 
						<div class="col-sm-5">
						<input type="checkbox" checked="checked">&nbsp;&nbsp;<?php echo get_phrase('date');?> 
						</div> 
						
					</div>
							
					
					
					
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
								<?php endforeach;?>
				</div>
						
				
		<!--//////////////////////////////////////////////////////////////////////////////////////// -->	
				<div class="tab-pane" id="indigent">
				   
					<?php echo form_open(base_url() . 'index.php?admin/option_list/create1/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						
						
					  	       <div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><?php echo get_phrase('Agreement');?>:</label>
                        
						<div class="col-sm-5">
							<select name="agreement_id" class="form-control" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <option value=""><?php echo get_phrase('select');?></option>
                              		
									
						 
						 <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$agreement = $this->db->get('agreement')->result_array();
								foreach($agreement as $rowx):
									?>
                            		<option value="<?php echo $rowx['agreement_id'];?>">
											<?php echo $rowx['agreement'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
							  
                          </select>
						  
						  
						</div> 
					</div>
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('indigent');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" placeholder="type new patient type" name="name">
	                      	</div>
	                  	</div>
	                  	
					
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
				<!-- ////////////////////////////////////////////////////////////////////////////// -->
			
				

								<div class="tab-pane" id="agreement">
				 <?php echo form_open(base_url() . 'index.php?admin/option_list/create2/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
							
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('agreement');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" placeholder="type new agreement" name="agreement">
	                      	</div>
	                  	</div>
	                  	
						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
				
					<!-- ////////////////////////////////////////////////////////////////////////////// -->

								<div class="tab-pane" id="Outcome">
				 <?php echo form_open(base_url() . 'index.php?admin/option_list/create4/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
							
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('outcome');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" placeholder="type new outcome" name="name">
	                      	</div>
	                  	</div>
	                  	
						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>				
				<!-- ////////////////////////////////////////////////////////////////////////////// -->
	                           <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							
                                   $min_year = $row2['min_year'];       
                                   $max_year = $row2['max_year'];
								   $year_id  = $row2['year_id'];
								
								   endforeach;
							  ?>
				<div class="tab-pane" id="year">
				 <?php echo form_open(base_url() . 'index.php?admin/option_list/create5/'.$row2['year_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
							<input type="hidden" class="form-control" value="<?php echo $year_id;?>" name="year_id" required>
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('max_year');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="number" class="form-control"  min ="<?php echo $fyear;?>" value="<?php echo $max_year;?>" placeholder="type max year" name="max_year" required>
	                      	</div>
	                  	</div>
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('min_year');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="number" class="form-control" placeholder="type min year"  readonly value="<?php echo $backyear;?>" name="min_year" required>
	                      	</div>
	                  	</div>
	                  	
						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
				
				<!-- ////////////////////////////////////////////////////////////////////////////// -->
				
	                           <?php 
								$ye= $this->db->get('fiscal_year ')->result_array();
								foreach($ye as $rowx):
								
							
                                   $year = $rowx['year'];       
								   $id  = $rowx['id'];
								
								   endforeach;
							  ?>
				<div class="tab-pane" id="fyear">
				 <?php echo form_open(base_url() . 'index.php?admin/option_list/create7/'.$rowx['id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
							<input type="hidden" class="form-control" value="<?php echo $id;?>" name="id" required>
					
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('fiscal_year');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="number" class="form-control" placeholder="type fiscal year"  value="<?php echo $year ;?>" name="year" required>
	                      	</div>
	                  	</div>
	                  	
						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
			<!-- ////////////////////////////////////////////////////////////////////////////// -->		
					<div class="tab-pane" id="service">
				 <?php echo form_open(base_url() . 'index.php?admin/option_list/create6/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('service_type');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control"  placeholder="type service" name="services" required>
	                      	</div>
	                  	</div>
						
                         <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
				
		
				<!-- ////////////////////////////////////////////////////////////////////////////// -->
					<div class="tab-pane" id="user">
				 <?php echo form_open(base_url() . 'index.php?admin/option_list/create7/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('user_type');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control"  placeholder="type user role" name="role" required>
	                      	</div>
	                  	</div>
						
                         <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
				
				<!-- ////////////////////////////////////////////////////////////////////////////// -->
				
				 <?php if (trim($roll =='Super_admin')){?>		
            <?php  $mm  =	$this->db->get('copyright')->result_array();
                         foreach($mm as $row11):?>	

           
 
				<div class="tab-pane" id="footer">
				<?php echo form_open(base_url() . 'index.php?admin/option_list/create3/'.$row11['footer_id'] ,array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('copy_right');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" placeholder="Copy right footer" name="footer" value="<?php echo $row11['footer'];?> ">
	                      	</div>
	                  	</div>
	                  	
				
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					<?php endforeach;?>
					
				</div>
			    <?php }?>
				<!-- ////////////////////////////////////////////////////////////////////////////// -->
			
				        <?php
                     $mm  =	$this->db->get('signup')->result_array();
                         foreach($mm as $row33):?>
				
						<div class="tab-pane" id="signUp">
					<?php echo form_open(base_url() . 'index.php?admin/allowed/allow/'.$row33['signup_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
						
					<!-- ///////////////////////////////////////////-->	

					<div class="form-group">
					   <input type="hidden" class="form-control" name="signup_id" value="<?php echo $row33['signup_id'];?>">
						<label class="col-sm-3 control-label">Toggle(Allow/Disallow):</label>
                        <div class="col-sm-5">
							<select name="offset" class="form-control">
   
								
                              <option value="0" <?php if($row33['offset'] == '0')echo 'selected';?>><?php echo get_phrase('disabled');?> Sign Up</option>
                              <option value="1"<?php if($row33['offset'] == '1')echo 'selected';?>><?php echo get_phrase('allowed');?> Sign Up</option>
                             
                        	
                        	
                          </select>
						</div> 
					</div>	

				
					
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					<?php endforeach;?>
					<?php if($row33['offset']=='0'){ ?>
						
						<br>
					<center> <img src="uploads/disallow.jpg" width="350" height="260"> </center>
					<?php } ?>

				
				</div>
				
					<!-- ///////////////////////////////////////////-->	
					
					
				        <?php
                     $mm2  =	$this->db->get('survey')->result_array();
                         foreach($mm2 as $row34):?>
				
						<div class="tab-pane" id="woreda">
					<?php echo form_open(base_url() . 'index.php?admin/survey/allow/'.$row34['survey_id'], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
					<div class="form-group">
					   <input type="hidden" class="form-control" name="woreda" value="<?php echo $row34['survey_id'];?>">
						<label class="col-sm-3 control-label">Enable or Disable:</label>
                        <div class="col-sm-5">
							<select name="offset" class="form-control">	
                              <option value="0" <?php if($row34['offset'] == '0')echo 'selected';?>><?php echo get_phrase('disabled');?> Survey</option>
                              <option value="1"<?php if($row34['offset'] == '1')echo 'selected';?>><?php echo get_phrase('allowed');?> Survey</option>
                          </select>
						</div> 
					</div>
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					<?php endforeach;?>
					<?php if($row34['offset']=='0'){ ?>
						<br>
					<center> <img src="uploads/survey.jpg" width="370" height="200"> </center>
					<?php } ?>

				
				</div>
					     
			</div>
			
		</div>	
	
	</div>
</div>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery-1.4.2.min.js'></script>
<script>
$(function() {
    $("#tfemale, #tmale").on("keydown keyup", cachement);
	function sum() {
	$("#cachement").val(Number($("#tfemale").val()) + Number($("#tmale").val()));
	//$("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
	}
});
</script>
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 3) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }
  </script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>