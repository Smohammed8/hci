
	<div class="col-md-4">
		<div class="row">
		
          
		   <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('patients');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3> <?php echo get_phrase('Total Patients');?></h3>
             
                   <p style=" font-size:14px;"> <i class="fa fa-male" style="" ></i>&nbsp;
				   <?php echo get_phrase('male');?>:<?php echo format($m);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <i class="fa fa-female" style=""></i>&nbsp;<?php echo get_phrase('female');?>:<?php echo format($f);?></p>
				    
                </div>              
            </div>
			          
		
			   <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('admin');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3> <i class="fa fa-users"></i>&nbsp;<?php echo get_phrase('total_users');?></h3>
                                 <p style="color:white;">.......................................</p>
                   <p style=" font-size:16px;">
				    <?php echo get_phrase('super_admins');?>: <?php echo $sup_user;?> <br>
				    <?php echo get_phrase('admins');?>: <?php echo $admin;?><br>
				  
				    <?php echo get_phrase('heads');?>: <?php echo $head;?> <br>
					 <?php echo get_phrase('users');?>: <?php echo $user;?></p>
				    
                </div>              
            </div>
				  <div class="col-md-12">
            
                <div class="tile-stats tile-yellow">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('admin');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3> <i class="entypo-users"></i>&nbsp; <?php echo get_phrase('user stastices');?></h3>
					 <p style="color:white;">.......................................</p>
             
                   <p style=" font-size:16px;">
				    <i class="entypo-plus-circled" ></i><?php echo get_phrase('new_registrations');?>:<?php echo $today;?> <br>
				    <i class="fa fa-user"></i>&nbsp;<?php echo get_phrase('online_users');?>:<?php echo $online;?>&nbsp;
				    <i class="fa fa-male" style="color:white;" ></i>&nbsp;<?php echo get_phrase('inactive_users');?>:<?php echo $active;;?>
				   
                </div>              
            </div>
			
	
		
			
				 
				 
				 
				 
				 

			
			        <?php
   
                                 	$jma =mysql_query("SELECT * FROM  parent where section_id='10'");
                                    $jm = mysql_num_rows($jma);
                                           ?>
										   
		                             <?php
   
                                 	$bno=mysql_query("SELECT * FROM  parent where section_id='19'");
                                    $bn = mysql_num_rows($bno);
                                           ?>
										   
		                             <?php
   
                                 	$elib=mysql_query("SELECT * FROM  parent where section_id='09'");
                                    $eb = mysql_num_rows($elib);
                                           ?>
									<?php
   
                                 	$kfa=mysql_query("SELECT * FROM  parent where section_id='21'");
                                    $kf = mysql_num_rows($kfa);
                                           ?>
         <!--   <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                 
                    <div class="num" data-start="0" data-end="<?php echo format($this->db->count_all('parent'));?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>			 
                        <hr>
                    <h3>#<?php //echo get_phrase('Total Woreda');?></h3>		
				  <p style="font-size:14px;"><?php //echo get_phrase('In Jimma Zone');?> :<?php //echo format($jm);?>  &nbsp; <?php //echo get_phrase('In Bunobedele ');?>: <?php //echo format($bn);?>  &nbsp; <?php //echo get_phrase('Elibabora');?> :<?php //echo format($eb);?> &nbsp; <?php //echo get_phrase('Kaffa Zone');?> :<?php //echo format($kf);?> </p>
                </div>
       
            </div>  -->

    	</div>
		 
    </div>
