

<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered" >

			<li class="active" >
            	<a href="#list" data-toggle="tab" style="background-color:#dd4b39;; color:white;" style="color:white;font-size:17px;"><i class="fa  fa-exclamation-triangle "></i> 
					<?php //echo get_phrase('manage_profile');?><b>Patient Profile errors (0)</b>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
                <!--  Errors Related patient Profile 
		-----------------------------------------
		Agreement mismatch
		invalid card number
		Card duplicate
		Phone duplicate
		Invalid CBHI
		Invalid Phone
		Invalid Birth date
		Invalid name
		--------------------------------------->
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS-->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content">
					
                        <?php echo form_open(base_url() . 'index.php?admin/auding/error_checking' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                         <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-12" style="background-color: #f39c12;">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><u>Patient Name </u></a>
									</span>
                          
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
									<span ><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><u>Card No</u></a>
									</span>
                            
                                 
									<span>
				
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href=""><i class="fa  fa-info"></i> <u>Issue detected</u></a>
									</span>
                           
                                 
									<span >
									
								
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
									<a href="" style="text-align:right;"><i class="fa  fa-user"></i> <u>User</u></a>
									</span>
                                </div>
								
                            </div>	
					    <?php
			             $i=0;
				       $res = mysql_query("SELECT * FROM patients  order by patient_id DESC LIMIT 5") or die(mysql_error());                  
                       while($row = mysql_fetch_array($res)){
			         	$i++;
			         	?>
				
			           <div class="form-group"  style="height:12px">
                               
                                <div class="col-sm-5">
                             
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><?php echo ucwords(strtolower($row['name']));?></a>
									</span>
                                </div>
								
								  <div class="col-sm-12">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><?php echo $row['mrn_id'];?></a>
									</span>
                            
                                 
									<span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
									<a href=""> <?php echo 'Agreement mismatch';?> </a>
									</span>
                           
                                 
									<span >
									
									&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
									<a href="" style="text-align:right;"><?php echo ucwords(strtolower($this->crud_model->get_type_name_by_id('admin', $row['user'])));?></a>
									</span>
                                </div>
								
                            </div>
							
					   <?php }?>
			  
							<br>


                            <div class="form-group" style="background-color:#3c8dbc;">
                                <div class="col-sm-offset-3 col-sm-5" style="background-color:lightblue">
                                   
                                </div>
							</div>
                       
				
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>


<!--password-->
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
	<ul class="nav nav-tabs bordered">

	<li class="active" >
            	<a href="#list" data-toggle="tab" style="background-color:#dd4b39; color:white;" style="color:white;font-size:17px;"><i class="fa  fa-exclamation-triangle "></i> 
					<?php //echo get_phrase('manage_profile');?><b>Patient Encounter errors (0)</b>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					
                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-12" style="background-color: #f39c12;">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><u>Patient Name </u></a>
									</span>
                          
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
									<span ><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><u>Card No</u></a>
									</span>
                            
                                 
									<span>
				
									
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a href=""><i class="fa  fa-info"></i> <u>Issue detected</u></a>
									</span>
                           
                                 
									<span >
									
								
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
									<a href="" style="text-align:right;"><i class="fa  fa-user"></i> <u>User</u></a>
									</span>
                                </div>
								
                            </div>	
					    <?php
			             $i=0;
				       $res = mysql_query("SELECT * FROM patients  order by patient_id DESC LIMIT 5") or die(mysql_error());                  
                       while($row = mysql_fetch_array($res)){
			         	$i++;
			         	?>
				
			           <div class="form-group"  style="height:12px">
                               
                                <div class="col-sm-5">
                             
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><?php echo ucwords(strtolower($row['name']));?></a>
									</span>
                                </div>
								
								  <div class="col-sm-12">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;<a href=""><?php echo $row['mrn_id'];?></a>
									</span>
                            
                                 
									<span>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
									<a href=""> <?php echo 'Agreement mismatch';?> </a>
									</span>
                           
                                 
									<span >
									
									&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
									<a href="" style="text-align:right;"><?php echo ucwords(strtolower($this->crud_model->get_type_name_by_id('admin', $row['user'])));?></a>
									</span>
                                </div>
								
                            </div>
							
					   <?php }?>
							<br>
                              <div class="form-group" style="background-color:#3c8dbc;">
                                <div class="col-sm-offset-3 col-sm-5" style="background-color:lightblue">
                                   
                                </div>
							</div>
                   
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>
