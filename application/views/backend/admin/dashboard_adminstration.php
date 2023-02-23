

								   <?php
   
                                 	$oro =mysql_query("SELECT * FROM  section where class_id='4'");
                                    $or = mysql_num_rows($oro);
                                           ?>
										   
		                             <?php
   
                                 	$gam=mysql_query("SELECT * FROM  section where class_id='8'");
                                    $gm = mysql_num_rows($gam);
                                           ?>
										   
		                             <?php
   
                                 	$snnp=mysql_query("SELECT * FROM  section where class_id='7'");
                                    $snp = mysql_num_rows($snnp);
                                           ?>
			<?php 
			$re = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ros = mysql_fetch_array($re)) {
				$year  = $ros['year'];
				}
				?>
				
     <?php
    		$result = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$year") or die(mysql_error());
    		while ($rows = mysql_fetch_array($result)) {
								
				$incs  = $rows['sum(card)'];
				$inls  = $rows['sum(lab)'];
				$inms  = $rows['sum(Imaging)'];
				$inbs  = $rows['sum(Bed_fee)'];
			  $drugss  = $rows['sum(drugs)'];	
				$inss  = $rows['sum(surgery)'];
			    $inos  = $rows['sum(other)'];
				$tot  = ($incs+$inls+$inms+$inbs+$inos+$inss+$drugss);
			}
			
			?>

			
			 <?php
    		$result8 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where agreement='Health Care finance' and year=$year") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				
				//$hc = $row8['sum(total)'];
			    $inc8  = $row8['sum(card)'];
				$inl8  = $row8['sum(lab)'];
				$inm8  = $row8['sum(Imaging)'];
				$inb8  = $row8['sum(Bed_fee)'];
			    $drug8  = $row8['sum(drugs)'];	
				$ins8  = $row8['sum(surgery)'];
			    $ino8  = $row8['sum(other)'];
				
				$hc    =($inc8+$inl8+$inm8+$inb8+$ino8+$ins8+$drug8);
				
			}
				$result9 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where agreement='CB Health Insurance' and year=$year") or die(mysql_error());
    		while ($row9 = mysql_fetch_array($result9)) {
				
				$inc = $row9['sum(card)'];
				$inl = $row9['sum(lab)'];
				$inm = $row9['sum(Imaging)'];
				$inb = $row9['sum(Bed_fee)'];
				$drugs = $row9['sum(drugs)'];	
				$ins = $row9['sum(surgery)'];
			    $ino = $row9['sum(other)'];
				
				$total_in  = ($inc+$inl+$inm+$inb+$ino+$ins+$drugs);
			}
				$result10 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other)FROM treatment where agreement='Credit Service' and year=$year") or die(mysql_error());
    		while ($row10 = mysql_fetch_array($result10)) {
				
				//$cs  = $row10['sum(total)'];
				
			    $inx = $row10['sum(card)'];
				$inlx = $row10['sum(lab)'];
				$inmx = $row10['sum(Imaging)'];
				$inbx = $row10['sum(Bed_fee)'];
				$drugsx = $row10['sum(drugs)'];	
				$insx = $row10['sum(surgery)'];
			    $inox = $row10['sum(other)'];
				
				$cs   = ($inx+$inlx+$inmx+$inbx+$inox+$insx+$drugsx);
			}
			?>
	<div class="col-md-4">
		<div class="row">
            <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                  
                   <!-- <div class="num" data-start="0" data-end="<?php //echo $tot; ?>" data-postfix="" data-duration="1500" data-delay="0">0 <p></p></div> -->
                  
                    <div class="num"> <small>  <?php echo  number_format($tot,2); ?>  </small>  </div>
                   
				 
				   <hr>
                    <h3 style="color:white;"> Total revenue in #ETB  <?php //echo get_phrase('total_revenue(');?></h3>
                          <p>.........................................</p>
                   <p style=" font-size:14px;"> <i class="fa fa-flag" style="" ></i>&nbsp;
				   <?php echo get_phrase('credit_service');?>:&nbsp;ETB&nbsp;<u><?php echo number_format($cs,2); ?></u><br><br>
				   
				   <i class="entypo-vcard" style=""></i>&nbsp;
				   <?php echo get_phrase('health_care');?>:&nbsp;ETB&nbsp;<u> <?php echo number_format($hc,2); ?> </u><br><br>
				
				   <i class="fa fa-book" style=""></i>&nbsp;
				   <?php echo get_phrase('insurance');?>:&nbsp;ETB&nbsp;<u><?php echo number_format($total_in,2); ?>  </u>
				   </p>
				   
				   
                </div>
                
            </div>
	                    	  <?php 
				
	                                 $total= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($total);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'");
                                    $male = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'");
                                    $female = mysql_num_rows($sfemale);
									
									?>
  <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('patients');?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3> <?php echo get_phrase('Total Patients');?></h3>
                          <p>.........................................</p>
                   <p style=" font-size:14px;"> <i class="fa fa-male" style="" ></i>&nbsp;
				   <?php echo get_phrase('male');?>:<?php echo format($m);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <i class="fa fa-female" style=""></i>&nbsp;
				   <?php echo get_phrase('female');?>:<?php echo format($f);?></p>
				    
                </div>              
            </div>
			  <div class="col-md-12">
            
                <div class="tile-stats tile-black">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $tt;?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <hr>
                    <h3> #<?php echo get_phrase('total_encounter');?></h3>
                          <p>.........................................</p>
                   <p style=" font-size:14px;"> <i class="fa fa-male" style="" ></i>&nbsp;
				   <?php echo get_phrase('male');?>:<?php echo format($male);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <i class="fa fa-female" style=""></i>&nbsp;
				   <?php echo get_phrase('female');?>:<?php echo format($female);?></p>
				    
                </div>              
            </div>
			<!--
            <div class="col-md-12">
            
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="fa fa-sitemap"></i></div>
                    <div class="num" data-start="0" data-end="<?php //echo format($this->db->count_all('section'));?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    <hr>
                    <h3>#<?php //echo get_phrase('Total Zones');?></h3>
					             <p>.........................................</p>
         
				     <p style=" font-size:14px;"> <?php //echo get_phrase('In Gambela');?> :<?php //echo format($gm);?>  &nbsp; <?php //echo get_phrase('In Oromia');?>: <?php //echo format($or);?>  &nbsp; <?php //echo get_phrase('In SNNP');?> :<?php //echo format($snp);?> </p>
					 
					
                </div>
                
            </div> -->
			
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
										   
			<!--							   
										   
            <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                  
                    <div id="inlineDatepicker"></div>  
            </div>

    	</div> -->
		 
    </div>
	

 