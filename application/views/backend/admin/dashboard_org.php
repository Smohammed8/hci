<?php
$Today = date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
//echo $new;

?>

                       <?php 
   
                          $user = $this->session->userdata('admin_id'); 	
	  
	                       $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						   } ?>
						   
						   
    <?php  $current_user = $this->session->userdata('admin_id'); ?>
	          
     		 	
			
		                             <?php
                     	            $my =mysql_query("SELECT * FROM `treatment` where region='$region' and zone='$zone' and  woreda='$woreda'");
								       $total = mysql_num_rows($my); 
									   ?>
									   
									<?php
									$p =mysql_query("SELECT * FROM `patients` where  region='$region' and zone='$zone' and  woreda='$woreda'");
                                     $patients = mysql_num_rows($p);
									 
									    $cbhi =mysql_query("SELECT * FROM `patients` where  region='$region' and zone='$zone' and  woreda='$woreda' && agreement='CB Health Insurance'");
                                        $cbh = mysql_num_rows($cbhi);
									 $ch =mysql_query("SELECT * FROM `patients` where  user ='$current_user' && agreement='Health Care finance'");
                                     $hcf = mysql_num_rows($ch);
									 	$cs =mysql_query("SELECT * FROM `patients` where  user ='$current_user' && agreement='Credit Service'");
                                        $css = mysql_num_rows($cs);
									 ?>
															   
	<div class="col-md-4">
		<div class="row">
        <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $total;?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3>  <i class="fa fa-users" style="color:white;"></i>&nbsp; <?php echo get_phrase('total');?> Woreda's <?php echo get_phrase('patient');?></h3>
					    <p>.........................................</p>
             	  <?php 
				
	         
                     	            $my = mysql_query("SELECT * FROM `patients` where class_id='$region' and section_id='$zone' and  woreda_id='$woreda'");
								    $total = mysql_num_rows($my); 
									   
						
                                 	$smale =mysql_query("SELECT * FROM `patients` where class_id='$region' and section_id='$zone' and  woreda_id='$woreda' and sex='M'");
                                    $male2 = mysql_num_rows($smale);
								
									$sfemale = mysql_query("SELECT * FROM `patients` where class_id ='$region' and section_id='$zone' and  woreda_id='$woreda' and sex ='F'");
                                    $female2 = mysql_num_rows($sfemale);
									
								    $kk =mysql_query("SELECT * FROM `patients` where class_id='$region' and section_id='$zone' and  woreda_id='$woreda' and indigent='K'");
                                    $k = mysql_num_rows($kk);
								
									$hh = mysql_query("SELECT * FROM `patients` where class_id ='$region' and section_id='$zone' and  woreda_id='$woreda' and indigent ='H'");
                                    $h = mysql_num_rows($hh);
									
									?>
						   
                   <p style=" font-size:14px;"> <i class="fa fa-male" ></i>&nbsp;<?php echo get_phrase('male');?>
				   :<?php echo $male2;?>
				   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <i class="fa fa-female"></i>&nbsp;<?php echo get_phrase('female');?>:<?php echo $female2; ?> 
				   
				   <br>
				   
				   
				   
				      <i class="entypo-user" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('H');?>:&nbsp;<?php echo $h;?> 
				   
				  	&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<i class="entypo-user" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('K');?>:&nbsp;<?php echo $k;?>
				   
				   
				   </p>
				   
			
				    
                </div>              
            </div>

							
					  <?php
               $my =mysql_query("SELECT * FROM `treatment` where region='$region' and zone='$zone' and  woreda='$woreda'");
		       $total3 = mysql_num_rows($my);
			   
               $mm =mysql_query("SELECT * FROM `treatment` where region='$region' and zone='$zone' and  woreda='$woreda' and sex='M'");
		       $tmal = mysql_num_rows($mm); 
			   
               $ff =mysql_query("SELECT * FROM `treatment` where region='$region' and zone='$zone' and  woreda='$woreda' and sex='F'");
		       $tfem = mysql_num_rows($ff); 
			   
               $op =mysql_query("SELECT * FROM `treatment` where region='$region' and zone='$zone' and  woreda='$woreda' and encounter='OPD'");
		       $opd = mysql_num_rows($op); 
			   $ip =mysql_query("SELECT * FROM `treatment` where region='$region' and zone='$zone' and  woreda='$woreda' and encounter='IPD'");
		       $ipd = mysql_num_rows($ip); 
			   
			   		
			$kk2 =mysql_query("SELECT * FROM `treatment` where region ='$region' and zone='$zone' and  woreda='$woreda' and indigent='K'");
             $k2 = mysql_num_rows($kk2);					
		    $hh2 = mysql_query("SELECT * FROM `treatment` where  region ='$region' and zone='$zone' and  woreda='$woreda' and indigent ='H'");
            $h2 = mysql_num_rows($hh2);
									   ?>  
             <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $total3;?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3>   <i class="fa fa-users"></i>&nbsp<?php echo get_phrase('encounter_status');?> per visit
					</h3>
             <p>.........................................</p>
                   <p style=" font-size:14px;"><i class="fa fa-male" ></i>&nbsp;
				   <?php echo get_phrase('male');?>:<?php echo $tmal;?>
				
				 &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-female"></i>&nbsp;
				 <?php echo get_phrase('female');?>:<?php echo $tfem;?><br>
		
				   <i class="fa fa-ambulance" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('IPD');?>:<?php echo $ipd;?> 
				   
				  	&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<i class="fa fa-user" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('OPD');?>:<?php echo $opd;?><br>
				   
				   
				   
				      <i class="entypo-user" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('H');?>:&nbsp;<?php echo $h2;?> 
				   
				  	&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<i class="entypo-user" style="color:white;"></i>&nbsp;
				   <?php echo get_phrase('K');?>:&nbsp;<?php echo $k2;?>
				   
				   </p>
				   
                </div>              
            </div>
							
					  

	    <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				$no =  $row8['sum(total)'];
			}
			$result9 = mysql_query("SELECT sum(total) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='Yes'") or die(mysql_error());
    		while ($row9 = mysql_fetch_array($result9)) {
				$yes=  $row9['sum(total)'];
			}
		  $resul = mysql_query("SELECT sum(total) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda'") or die(mysql_error());
    		while ($rows = mysql_fetch_array($resul)) {
				$totals =  $rows['sum(total)'];
			}
		
    	?>	
               <?php 
			    $yes ='Yes';					   
                   $pay	=	$this->db->get_where('payment' , array('region'=>$region,'zone'=>$zone,'woreda'=>$woreda))->result_array();
                 foreach($pay as $ro):?>
				 
				  <?php   $pamount = $ro['paid_amount'];           
				          $upaidamount =$ro['unpaid_amount']; 
						  $tototal = $pamount+$upaidamount;?>
				 <?php endforeach;?>
				  
             <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo  $tototal ;?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3> <i class="entypo-list" style="color:white;" ></i><?php //echo get_phrase('payment_status');?>Payment status</h3>
					    <p>.........................................</p>
             
                   <p style=" font-size:14px;"> <i class="fa  fa-check-square-o" style="color:white;" ></i>
				   <?php echo get_phrase('paid');?>: <u><?php echo number_format($pamount,2); ?></u>
				   &nbsp;&nbsp;<i class="fa fa-times" style="color:white;"></i>
				   <?php echo get_phrase('unpaid');?>: <u><?php echo number_format($upaidamount,2); ?></u></p>
				    
                </div>              
            </div>
			
			   
			
			

    	</div><br><br><br><br><br><br><br><br>
		 
    </div>
	
