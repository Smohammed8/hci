

<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered" >

			<li class="active" >
            	<a href="#list" data-toggle="tab" style="background-color:#3c8dbc; color:white;" style="color:white;font-size:17px;"><i class="fa fa-wrench"></i> 
					<?php echo get_phrase('manage_profile');?><b> </b>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS-->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content">
					<?php 
					
                   // foreach($edit_data as $row):
                        ?>
                        <?php echo form_open(base_url() . 'index.php?admin/manage_profile/update_profile_info' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
                            <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="">Password adminstration</a></u></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="">Maintanance mode </a></u></span>
                                </div>
								
                            </div>
							    <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="">College fee adminstration</a></u></span>
                                </div>
								<div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="">Language adminstration</a></u></span>
                                </div>
                            </div>

                                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href=""> Manage date format</a></u></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href=""> Setup competency time</a></u></span>
                                </div>
                            </div>

                                <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Core parameters</u></a></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>User adminstration</u></a></span>
                                </div>
                            </div>

                     

                             <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>System Statistics</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>System Statistics</u></a></span>
                                </div>
                            </div>

                         <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Server adminstration</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Server adminstration</u></a></span>
                                </div>
                            </div>

                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Salary adminstration</u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Salary adminstration</u></a></span>
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
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>


<!--password-->
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
	<ul class="nav nav-tabs bordered">

			<li class="active">
            	<a href="#list" data-toggle="tab" style="background-color:#3c8dbc; color:white;" style="color:white;font-size:17px;"><i class="fa fa-wrench"></i>  
					<?php //echo get_phrase('manage_profile');?><b> System Adminstration Panel</b>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					
                        <?php echo form_open(base_url() . 'index.php?student/manage_profile/change_password' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>User permission</u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Password adminstration</u></a></span>
                                </div>
								
                            </div>
							    <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i> &nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Database Backup</u></a></span> 
                                </div>
								<div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Student Mark adminstration</u></a></span>
                                </div>
                            </div>
                                <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Excute Queries</u></a></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>User adminstration</u></a></span>
                                </div>
                            </div>

                       <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Configure core parameter</u></a></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>User adminstration</u></a></span>
                                </div>
                            </div>
                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Monitor Active Users</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Monitor Active Users</u></a></span>
                                </div>
                            </div>

                             <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>System Statistics</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>System Statistic</u></a></span>
                                </div>
                            </div>

                             <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Server adminstration</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Server adminstration</u></a></span>
                                </div>
                            </div>

                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Salary adminstration</u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u>Salary adminstration</u></a></span>
                                </div>
                            </div>
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
