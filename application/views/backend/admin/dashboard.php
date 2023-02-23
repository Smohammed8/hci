  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 


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
<?php
$Today = date('y:m:d');
  $new = date('l, F d, Y',strtotime($Today));
//echo $new;

?>
    				<?php 
        $data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
        foreach($data as $row3):
		 $role   =$row3["role"];                     
                   ?>
	 <?php endforeach; ?>                        

								   <?php
   
                                 	$tf=mysql_query("SELECT * FROM patients where sex='M'");
                                    $m = mysql_num_rows($tf);  
                                 	$tm=mysql_query("SELECT * FROM patients where sex = 'F'");
                                    $f = mysql_num_rows($tm);
								
                                           ?>
										
					   
										   
		
		
<head>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


</head> 
<meta charset="UTF-8">
<div class="row">

<script src="uploads/canvasjs.min.js"> </script>

	 <?php 
		
		    echo get_phrase('appication statistics overview');
		 
		 
			
			?>
			
      
		  
		
		
                            <?php
   
                       $ad = mysql_query("SELECT * FROM admin where role='Admin'");
                       $admin = mysql_num_rows($ad);  
                       $hd = mysql_query("SELECT * FROM admin where role = 'Head'");
                       $head = mysql_num_rows($hd);
					   
					   $ur = mysql_query("SELECT * FROM admin where role = 'User'");
                       $user = mysql_num_rows($ur);
				       $sur = mysql_query("SELECT * FROM admin where role = 'Super_admin'");
                       $sup_user = mysql_num_rows($sur);

                       $ac = mysql_query("SELECT * FROM admin where role = 'inactive' or active='no'");
                       $active = mysql_num_rows($ac);	
                       $onl = mysql_query("SELECT * FROM admin where status = '1'");
                       $online = mysql_num_rows($onl);	
                        $dt = mysql_query("SELECT * FROM admin where date_of_join = '$new'");
                       $today = mysql_num_rows($dt);						   
								
                       ?>
					   	<?php 
			$re2 = mysql_query("SELECT * FROM fiscal_year");
    		    while ($ross = mysql_fetch_array($re2)) {
				$year  = $ross['year'];
				$backyear  = $year-1;
				}
				?>
					   <?php
					     //////////////////////////Quarter dashboard income /////////////////////////////////////////////
	 $res1 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year = $backyear and month in (11,12,13)") or die(mysql_error());
    		
	 		while ($row11 = mysql_fetch_array($res1)) {
								
				$card1  = $row11['sum(card)'];
				$lab1   = $row11['sum(lab)'];
				$imag1  = $row11['sum(Imaging)'];
				$bed1   = $row11['sum(Bed_fee)'];
			    $drug1  = $row11['sum(drugs)'];	
				$sur1   = $row11['sum(surgery)'];
			    $other1 = $row11['sum(other)'];
				$tq1    = ($card1+$lab1+$imag1+$bed1+$drug1+$sur1+$other1);
			}
	 $res2= mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$year and month =1") or die(mysql_error());
    		
	 		while ($row2 = mysql_fetch_array($res2)) {
								
				$card2    = $row2['sum(card)'];
				$lab2     = $row2['sum(lab)'];
				$image2   = $row2['sum(Imaging)'];
				$bed2     = $row2['sum(Bed_fee)'];
			    $drug2    = $row2['sum(drugs)'];	
				$surg2    = $row2['sum(surgery)'];
			    $other2   = $row2['sum(other)'];
				$tq2      = ($card2+$lab2+$image2+$bed2+$drug2+$surg2+$other2);
				
			}
			$fist_quarter = ($tq1+$tq2);
			
			
			 $ress2= mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$year and month in (2,3,4)") or die(mysql_error());
    		
	 		while ($row2x = mysql_fetch_array($ress2)) {
								
				$card2x    = $row2x['sum(card)'];
				$lab2x     = $row2x['sum(lab)'];
				$image2x   = $row2x['sum(Imaging)'];
				$bed2x     = $row2x['sum(Bed_fee)'];
			    $drug2x    = $row2x['sum(drugs)'];	
				$surg2x    = $row2x['sum(surgery)'];
			    $other2x   = $row2x['sum(other)'];
				$second_quarter     = ($card2x+$lab2x+$image2x+$bed2x+$drug2x+$surg2x+$other2x);
				
			}
		
			 $ree2= mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$year and month in (5,6,7)") or die(mysql_error());
    		
	 		while ($roy = mysql_fetch_array($ree2)) {
								
				$card2y   = $roy['sum(card)'];
				$lab2y     = $roy['sum(lab)'];
				$image2y   = $roy['sum(Imaging)'];
				$bed2y     = $roy['sum(Bed_fee)'];
			    $drug2y    = $roy['sum(drugs)'];	
				$surg2y    = $roy['sum(surgery)'];
			    $other2y   = $roy['sum(other)'];
				$third_quarter     = ($card2y+$lab2y+$image2y+$bed2y+$drug2y+$surg2y+$other2y);
				
			}
			
			 $fnal2= mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$year and month in (8,9,10)") or die(mysql_error());
    		
	 		while ($data = mysql_fetch_array($fnal2)) {
								
				$card4    = $data['sum(card)'];
				$lab4     = $data['sum(lab)'];
				$imag4    = $data['sum(Imaging)'];
				$bed4     = $data['sum(Bed_fee)'];
			    $drug4    = $data['sum(drugs)'];	
				$surg4    = $data['sum(surgery)'];
			    $other4   = $data['sum(other)'];
				$fourth_quarter  = ($card4+$lab4+$imag4+$bed4+$drug4+$surg4+$other4);
				
			}
			?>		      
	<div class="col-md-8">
    	<div class="row">

            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading"> <br>
					
						<?php if($role=='User'){ ?>

	
					<div class="alert alert-success">

                           <h4>  <i class="fa fa-times"></i>
                            <?php //echo get_phrase('event_schedule');?> 
						 	<span style="color:red;">   <strong> <u>Warning</u>! &nbsp;እባከዎ ሂሳብ ሲደምሩ በጥንቃቄ ይስሩ! </strong>  </span>  </h4>
			
							
                     </div>
					  	<?php } else{ ?>
						
						<div class="alert alert-success">

                            <i class="fa fa-calendar"></i>
                            <?php //echo get_phrase('event_schedule');?> 
						  <strong>	<span style="color:red;"> Welcome to Integrated HCI Application! </span> </strong> Launched date:(ጥቅምት 01,2013 ዓ.ም) &nbsp;&nbsp;&nbsp;&nbsp; Fiscal year : <?php echo $backyear;?> /<?php echo $year;?> ዓ.ም
			
							
                     </div>
						
					<?php } ?>
                    </div>
		
		<?php if($role=='Super_admin' or $role=='Admin' or $role=='Head'){ ?>
				
        <!-- Dashboard quarter -->
		<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="tile-stats tile-aqua" style="color:white;">
            <span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content"  style="color:white;">
              <span class="info-box-text"><b>1<sup>st</sup> Quarter</b></span>
             <br> <span class="info-box-number">Birr  <?php echo number_format($fist_quarter,2); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="tile-stats tile-green" style="color:white;">
            <span class="info-box-icon bg-green"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>2<sup>nd</sup> Quarter</b></span>
              <br> <span class="info-box-number">Birr   <?php echo number_format($second_quarter,2); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats tile-yellow" style="color:white;">
            <span class="info-box-icon bg-yellow"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>3 <sup>rd</sup> Quarter </b></span>
			 
              <br> <span class="info-box-number"> Birr  <?php echo number_format($third_quarter,2); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="tile-stats tile-red" style="color:white;">
            <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content" >
             <span class="info-box-text"><b>4 <sup>th</sup> Quarter </b></span>
              <br> <span   class="info-box-number ">Birr  <?php echo number_format($fourth_quarter,2); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->   
				
		
	      <!--  Line graph  for monthly income -->
			<div id="chartContainer2021" style="width: 100%; height: 300px;display: inline-block;"></div>

			
			  <h3> Monthly Revenu using line graph  per fiscal year of <u><?php echo 	$backyear; ?>/<?php echo $year ;?></u> E.C </h3> 
                     <?php } else{ ?>         
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
        
          
					    <!--  comment this remove dashboard calendar  -->  
			            	<div id="notice_calendar"></div> 
							    <!--  	<div id="inlineDatepicker"></div>  
								   
							<?php //if($role=='User' or $role=='Head'){ ?>
								   <!--    <img src="uploads/cbhi.png" style="width:100%; height:100%; align:center;" /> --> 
							<?php// }else{ ?>
								
								    <!--   <img src="uploads/covid3.png" style="width:100%; height:100%; align:center;" /> --> 
						    <?php//	} ?>
									 

		
                            </div>
                        </div>
                    </div>
					 <?php } ?>
                </div>
					<?php if($role=='Super_admin' or $role=='Admin'){ ?>
		
		 <!-- <img src="uploads/mvc.png" style="width:100%; height:100%;" />-->
		<?php }?>
            </div>
			 
        </div>
    </div>
		
    	           
				   
				   <?php
   
                                 	$oro =mysql_query("SELECT * FROM  section where class_id='4'");
                                    $or = mysql_num_rows($oro);
                                           ?>
										   
		                             <?php
   
                                 	$gam=mysql_query("SELECT * FROM  section where class_id='8'");
                                    $gm = mysql_num_rows($gam);
                              ?>
										   
		                             <?php
   
                                 	$snnp = mysql_query("SELECT * FROM  section where class_id='7'");
                                    $snp  = mysql_num_rows($snnp);
                             ?>
	
	                        <?php
			 
			     if($role =='Head'){				 
			     include 'dashboard_head.php';
			     } 		
				 else if($role=='Super_admin' or $role=='Admin'){
					
			     include 'dashboard_admin.php';
				 } 				
			     else if($role=='Org'){
					include 'dashboard_org.php';
			     }
				 else if($role=='Adminstration'){
					include 'dashboard_adminstration.php';
			     }
				  else{
					include 'dashboard_user.php';
				 }
				 /* else{
                      redirect(base_url() . 'index.php?logout', 'refresh');
			         //echo "<meta http-equiv='refresh' content='2; url=index.php?login'>";
				
				  } */ ?>
      </div>
 <script>
  $(document).ready(function() {
	  
	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: true,
					firstDay: 1,
					height: 400,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
  </script>

  

                    <?php
     if(($role =='Head') or ($role=='Super_admin') or ($role=='Admin')){				 
			   
	?>
				 
 <script type="text/javascript" src="uploads/canvasjs.min.js"></script>


<div id="chartContainer3" style="width: 49%; height: 300px;display: inline-block;"></div>
<div id="chartContainer2" style="width: 49%; height: 300px;display: inline-block;"></div>
<hr>
     


         <?php
   
                                 	$tf=mysql_query("SELECT * FROM patients where sex='M' and agreement='CB Health Insurance'");
                                    $m = mysql_num_rows($tf);
                                         
   
                                 	$tm=mysql_query("SELECT * FROM  patients where sex='F' and agreement='CB Health Insurance'");
                                    $f = mysql_num_rows($tm);
									
									
                                 $tb=mysql_query("SELECT * FROM  patients where agreement='CB Health Insurance'");
                                 $b = mysql_num_rows($tb);
									
								 $tcs  = mysql_query("SELECT * FROM  patients where agreement='Credit Service'");
                                 $cs  = mysql_num_rows($tcs);
								 
								 $tcr=mysql_query("SELECT * FROM  patients where agreement='Health Care finance'");
                                 $hc = mysql_num_rows($tcr);
								 
								 $ip =mysql_query("SELECT * FROM  treatment where  encounter='IPD'");
                                 $admission = mysql_num_rows($ip);
							  
 							     $op  =  mysql_query("SELECT * FROM  treatment where encounter='OPD'");
                                 $visit =  mysql_num_rows($op);
									
                                ?>
		       <?php	
		        $re = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ros = mysql_fetch_array($re)) {
				$year  = $ros['year'];
				}
				?>
,

	 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where year =$year") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				
				$tot = $row8['sum(total)'];
			}
    
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where year =$year") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
    
              $card=   $row1['sum(card)'];
			  $tcard=  round((($card*100)/$tot),2);
			 
			}
    
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where year =$year") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
    
		     $lab=    $row2['sum(lab)'];
			  $tlab=  round((($lab*100)/$tot),2);
			}
		   
    
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where year =$year") or die(mysql_error());
    		while ($r3 = mysql_fetch_array($result3)) {
    	
              $Imaging =$r3['sum(Imaging)'];
			   $tImaging =  round((($Imaging*100)/$tot),2);
			}
		   

    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where year =$year") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
                $surgery= $row4['sum(surgery)'];
				 $tsurgery=  round((($surgery*100)/$tot),2);
			}
	
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where year =$year") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
                     $drugs= $row5['sum(drugs)'];
					  $tdrugs =  round((($drugs*100)/$tot),2);
			}

    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where year =$year") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
              $Bed_fee= $row6['sum(Bed_fee)'];
			   $tBed_fee=  round((($Bed_fee*100)/$tot),2);
			}
		   
  			$result7 = mysql_query("SELECT sum(other) FROM treatment where year =$year") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
    
           $other= $row7['sum(other)'];
		    $tother=  round((($other*100)/$tot),2);
			
			}
		   
                   ?>
   <?php //$grandtotal =$card +$lab+$Imaging+$surgery+$drugs+$Bed_fee+$other;?>
		   
<?php  $c  = get_phrase('cards');?> 
<?php  $d  = get_phrase('drug');?>
<?php  $l  = get_phrase('lab');?>
<?php  $p  = get_phrase('procedure');?>
<?php  $ig = get_phrase('imaging');?>
<?php  $bd  = get_phrase('bed');?>
<?php  $o  = get_phrase('other');?>


<?php  $tcbhi    = get_phrase('tcbhi');?> 
<?php  $hcare    = get_phrase('hcare');?> 
<?php  $crs      = get_phrase('crs');?> 
<?php  $tipd     = get_phrase('tipd');?> 
<?php  $topd     = get_phrase('topd ');?> 
<?php  $tfemale  = get_phrase('tfemale');?> 
<?php  $tmale    = get_phrase('tmale');?> 
<?php
  $dataPoints2 = array(
	array("y" => $tcard,   "legendText" => $c , "label" =>$c),
	array("y" => $tdrugs,  "legendText" => $d,  "label" => $d ),
	array("y" => $tlab,    "legendText" => $l,  "label" =>  $l),
	array("y" => $tsurgery,"legendText" => $p,  "label" => $p),
	array("y" => $tImaging,"legendText" => $ig, "label" =>$ig),
    array("y" => $tBed_fee,"legendText" => $bd ,"label" => $bd),
	array("y" => $tother,  "legendText" => $o,  "label" =>$o),
	);
 $dataPoints3 = array(

    array("y" => $b, "label" =>$tcbhi),
	array("y" => $hc, "label" =>$hcare),
	array("y" => $cs, "label" =>$crs),
    array("y" => $admission, "label" =>$tipd),
	array("y" => $visit, "label" =>$topd),
	
	array("y" => $f, "label" =>$tfemale),
	array("y" => $m, "label" =>$tmale)
    );
?>
<?php
 $r = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='1' and year=$year");
 	while ($rs = mysql_fetch_array($r)) {
	    $m1 = $rs['sum(card)'];
		$m2 = $rs['sum(lab)'];
		$m3 = $rs['sum(Imaging)'];
		$m4 = $rs['sum(surgery)'];
		$m5 = $rs['sum(drugs)'];
	    $m6 = $rs['sum(Bed_fee)'];
	    $m7 = $rs['sum(other)'];
	}
	$total1=($m1+$m2+$m3+$m4+$m5+$m6+$m7);
	
	 $r2 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='2' and year=$year");
 	while ($rs2 = mysql_fetch_array($r2)) {
	    $mc1 = $rs2['sum(card)'];
		$ml2 = $rs2['sum(lab)'];
		$mi3 = $rs2['sum(Imaging)'];
		$ms4 = $rs2['sum(surgery)'];
		$md5 = $rs2['sum(drugs)'];
	    $mb6 = $rs2['sum(Bed_fee)'];
	    $mo7 = $rs2['sum(other)'];
	}
	$total2=($mc1+$ml2+$mi3+$ms4+$md5+$mb6+$mo7);
	 $r3 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='3' and year=$year");
 	while ($rs3 = mysql_fetch_array($r3)) {
	    $mc3  = $rs3['sum(card)'];
		$ml3  = $rs3['sum(lab)'];
		$mi3  = $rs3['sum(Imaging)'];
		$ms3  = $rs3['sum(surgery)'];
		$md3  = $rs3['sum(drugs)'];
	    $mb3  = $rs3['sum(Bed_fee)'];
	    $mo3  = $rs3['sum(other)'];
	}
	$total3=($mc3+$ml3+$mi3+$ms3+$md3+$mb3+$mo3);
	
	 $r4 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='4' and year=$year");
 	while ($rs4 = mysql_fetch_array($r4)) {
	    $mc4  = $rs4['sum(card)'];
		$ml4  = $rs4['sum(lab)'];
		$mi4  = $rs4['sum(Imaging)'];
		$ms4  = $rs4['sum(surgery)'];
		$md4  = $rs4['sum(drugs)'];
	    $mb4  = $rs4['sum(Bed_fee)'];
	    $mo4  = $rs4['sum(other)'];
	}
	$total4=($mc4+$ml4+$mi4+$ms4+$md4+$mb4+$mo4);
	
	 $r5 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='5' and year=$year");
 	while ($rs5 = mysql_fetch_array($r5)) {
	    $mc5  = $rs5['sum(card)'];
		$ml5  = $rs5['sum(lab)'];
		$mi5  = $rs5['sum(Imaging)'];
		$ms5  = $rs5['sum(surgery)'];
		$md5  = $rs5['sum(drugs)'];
	    $mb5  = $rs5['sum(Bed_fee)'];
	    $mo5  = $rs5['sum(other)'];
	}
	$total5=($mc5+$ml5+$mi5+$ms5+$md5+$mb5+$mo5);
	
$r6 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='6' and year=$year");
 	while ($rs6 = mysql_fetch_array($r6)) {
	    $mc6  = $rs6['sum(card)'];
		$ml6  = $rs6['sum(lab)'];
		$mi6  = $rs6['sum(Imaging)'];
		$ms6  = $rs6['sum(surgery)'];
		$md6  = $rs6['sum(drugs)'];
	    $mb6  = $rs6['sum(Bed_fee)'];
	    $mo6  = $rs6['sum(other)'];
	}
	$total6=($mc6+$ml6+$mi6+$ms6+$md6+$mb6+$mo6);
	
	$r7 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='7' and year=$year");
 	while ($rs7 = mysql_fetch_array($r7)) {
	    $mc7  = $rs7['sum(card)'];
		$ml7  = $rs7['sum(lab)'];
		$mi7  = $rs7['sum(Imaging)'];
		$ms7  = $rs7['sum(surgery)'];
		$md7  = $rs7['sum(drugs)'];
	    $mb7  = $rs7['sum(Bed_fee)'];
	    $mo7  = $rs7['sum(other)'];
	}
	$total7 =($mc7+$ml7+$mi7+$ms7+$md7+$mb7+$mo7);
	$r8 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='8' and year=$year");
 	while ($rs8 = mysql_fetch_array($r8)) {
	    $mc8  = $rs8['sum(card)'];
		$ml8  = $rs8['sum(lab)'];
		$mi8  = $rs8['sum(Imaging)'];
		$ms8  = $rs8['sum(surgery)'];
		$md8  = $rs8['sum(drugs)'];
	    $mb8  = $rs8['sum(Bed_fee)'];
	    $mo8  = $rs8['sum(other)'];
	}
	$total8 =($mc8+$ml8+$mi8+$ms8+$md8+$mb8+$mo8);
	
	$r9 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='9' and year=$year");
 	while ($rs9 = mysql_fetch_array($r9)) {
	    $mc9  = $rs9['sum(card)'];
		$ml9  = $rs9['sum(lab)'];
		$mi9  = $rs9['sum(Imaging)'];
		$ms9  = $rs9['sum(surgery)'];
		$md9  = $rs9['sum(drugs)'];
	    $mb9  = $rs9['sum(Bed_fee)'];
	    $mo9  = $rs9['sum(other)'];
	}
	$total9 =($mc9+$ml9+$mi9+$ms9+$md9+$mb9+$mo9);
	
	$r10 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='10' and year=$year");
 	while ($rs10 = mysql_fetch_array($r10)) {
	    $mc10  = $rs10['sum(card)'];
		$ml10  = $rs10['sum(lab)'];
		$mi10  = $rs10['sum(Imaging)'];
		$ms10  = $rs10['sum(surgery)'];
		$md10  = $rs10['sum(drugs)'];
	    $mb10  = $rs10['sum(Bed_fee)'];
	    $mo10  = $rs10['sum(other)'];
	}
	$total0 =($mc10+$ml10+$mi10+$ms10+$md10+$mb10+$mo10);
	
$r11 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month='11' and year = $backyear");
 	while ($rs11 = mysql_fetch_array($r11)) {
	    $mc11  = $rs11['sum(card)'];
		$ml11  = $rs11['sum(lab)'];
		$mi11  = $rs11['sum(Imaging)'];
		$ms11  = $rs11['sum(surgery)'];
		$md11  = $rs11['sum(drugs)'];
	    $mb11  = $rs11['sum(Bed_fee)'];
	    $mo11  = $rs11['sum(other)'];
	}
	$total11 =($mc11+$ml11+$mi11+$ms11+$md11+$mb11+$mo11);
	
	$r12 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where (month='12' or month='13') and year = $backyear");
 	while ($rs12 = mysql_fetch_array($r12)) {
	    $mc12  = $rs12['sum(card)'];
		$ml12  = $rs12['sum(lab)'];
		$mi12  = $rs12['sum(Imaging)'];
		$ms12  = $rs12['sum(surgery)'];
		$md12  = $rs12['sum(drugs)'];
	    $mb12  = $rs12['sum(Bed_fee)'];
	    $mo12  = $rs12['sum(other)'];
	}
	$total12 =($mc12+$ml12+$mi12+$ms12+$md12+$mb12+$mo12);
 ?>
<?php
//$backyear;  $year  ዓ.ም
    $dataPoints = array(
	array("y" => $total11,  "label" => "ሐምሌ/$backyear ዓ.ም"),   
	array("y" => $total12, "label" => "ነሃሴ/$backyear ዓ.ም"),
	array("y" =>$total1, "label" => "መስከረም/$year ዓ.ም"),
	array("y" =>$total2, "label" => "ጥቅምት/$year ዓ.ም"),
	array("y" => $total3, "label" => "ህዳር፟/$year ዓ.ም"),
	array("y" => $total4, "label" => "ታህሳስ/$year ዓ.ም"),
	array("y" => $total5, "label" => "ጥር/$year ዓ.ም"),
	array("y" => $total6, "label" => "የካቲት/$year ዓ.ም"),
	array("y" => $total7, "label" => "መጋቢት/$year ዓ.ም"),
	array("y" => $total8, "label" => "ሚያዚያ/$year ዓ.ም"),
	array("y" => $total9 , "label" => "ግንቦት/$year ዓ.ም"),
	array("y" => $total0, "label" => "ሰኔ/$year ዓ.ም"),
    );
?>

<script type="text/javascript">

    $(function () {
        var chart = new CanvasJS.Chart("chartContainer2021", {
           theme: "light2",
			 //theme: "dark2",
            animationEnabled: true,
            title: {
               // text: "Revenu report per year 2013"
            },
            axisX: {
                title: " Months in fiscal year"
            },
            axisY: {
                title: "Revenu in ETB"
            },

            data: [
            {
                type: "spline",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });

        chart.render();
    });
</script>

			<!------ Service ------>
		<?php 
			$re = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ros = mysql_fetch_array($re)) {
				$year  = $ros['year'];
				$backyear  = $year-1;
				}
				?>
				
     <?php
	  ////////////////////////// Total fisical year income /////////////////////////////////////////////
	 $result1 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$backyear and month in (11,12,13)") or die(mysql_error());
    		
	 		while ($rowb = mysql_fetch_array($result1)) {
								
				$incsb  = $rowb['sum(card)'];
				$inlsb  = $rowb['sum(lab)'];
				$inmsb  = $rowb['sum(Imaging)'];
				$inbsb  = $rowb['sum(Bed_fee)'];
			    $drugssb  =$rowb['sum(drugs)'];	
				$inssb    = $rowb['sum(surgery)'];
			    $inosb    = $rowb['sum(other)'];
				$backtot  = ($incsb+$inlsb+$inmsb+$inbsb+$inosb+$inssb+$drugssb);
			}
			
		$result2 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year = $year and month in (1,2,3,4,5,6,7,8,9,10)") or die(mysql_error());
    		
			while ($rows = mysql_fetch_array($result2)) {
								
				$incs    = $rows['sum(card)'];
				$inls    = $rows['sum(lab)'];
				$inms    = $rows['sum(Imaging)'];
				$inbs    = $rows['sum(Bed_fee)'];
			    $drugss  = $rows['sum(drugs)'];	
				$inss    = $rows['sum(surgery)'];
			    $inos    = $rows['sum(other)'];
				$tot     = ($incs+$inls+$inms+$inbs+$inos+$inss+$drugss);
			}
		
			$total= $backtot +$tot;
			?>

<?php  $revenue  = get_phrase('revenue');?> 


<script type="text/javascript">

    $(function () {
  

<!-- Desktop Search engine percentage-->
    var chart2 = new CanvasJS.Chart("chartContainer2", {
        title: {
            text: "<?php echo $revenue ; ?>ብር <?php echo ''; ?><?php echo ''; ?><?php echo number_format($total,2); ?>"

			
        },
			
	
			exportEnabled: true,
        animationEnabled: true,
        legend: {
            verticalAlign: "center",
            horizontalAlign: "left",
            fontSize: 18,
            fontFamily: "Helvetica"
        },
        //theme: "dark2",
		theme: "light1",
        data: [
        {
            type: "pie",
            indexLabelFontFamily: "Garamond",
            indexLabelFontSize: 20,
            indexLabel: "{label} {y}%",
            startAngle: -20,
            showInLegend: true,
            toolTipContent: "{legendText} {y}%",
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        }
        ]
    });
    chart2.render();
	
	
<!-- Top oil reserver-->
    var chart3 = new CanvasJS.Chart("chartContainer3",
    {
        theme: "light1", 
		     // theme: "dark2",
			exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "Key Health Performance Indicators"
        },
        axisY: {
            title: "Patients total claim"
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Key Performance Indicators",
            dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart3.render();



    });
</script>
				
    <?php }?>
	<script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
	//$('#popupDatepicker').calendarsPicker({calendar: calendar}); // change ID into class
	
	$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
