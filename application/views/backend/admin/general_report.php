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
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  font-size:12px;
}

th, td {
  text-align: left;
  padding: 3px;
   border: 1px solid #ddd;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
#total{
	text-decoration:underline;
	text-decoration-style:double;
	
}
</style>
	<hr>
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
    		$result8 = mysql_query("SELECT sum(total) FROM treatment ") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				
				$tot = $row8['sum(total)'];
			}
    
    		$result1 = mysql_query("SELECT sum(card) FROM treatment ") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
    
              $card=   $row1['sum(card)'];
			  $tcard=  round((($card*100)/$tot),2);
			 
			}
    
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment ") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
    
		     $lab=    $row2['sum(lab)'];
			  $tlab=  round((($lab*100)/$tot),2);
			}
		   
    
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment ") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
    	
              $Imaging =$row3['sum(Imaging)'];
			   $tImaging =  round((($Imaging*100)/$tot),2);
			}
		   

    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment ") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
                $surgery= $row4['sum(surgery)'];
				 $tsurgery=  round((($surgery*100)/$tot),2);
			}
	
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
                     $drugs= $row5['sum(drugs)'];
					  $tdrugs =  round((($drugs*100)/$tot),2);
			}

    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
              $Bed_fee= $row6['sum(Bed_fee)'];
			   $tBed_fee=  round((($Bed_fee*100)/$tot),2);
			}
		   
  			$result7 = mysql_query("SELECT sum(other) FROM treatment ") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
    
           $other= $row7['sum(other)'];
		    $tother=  round((($other*100)/$tot),2);
			
			}
		   
                   ?>
 <?php
 
 $result80 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row80 = mysql_fetch_array($result80)) {
				
				//$hc = $row8['sum(total)'];
			    $inc80  = $row80['sum(card)'];
				$inl80  = $row80['sum(lab)'];
				$inm80  = $row80['sum(Imaging)'];
				$inb80  = $row80['sum(Bed_fee)'];
			    $drug80  = $row80['sum(drugs)'];	
				$ins80  = $row80['sum(surgery)'];
			    $ino80 = $row80['sum(other)'];
				
				$paid    =($inc80+$inl80+$inm80+$inb80+$ino80+$ins80+$drug80);
				
			}
			
			$result81 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  paid='No'") or die(mysql_error());
    		while ($row81 = mysql_fetch_array($result81)) {
				
				//$hc = $row8['sum(total)'];
			    $inc81  = $row81['sum(card)'];
				$inl81  = $row81['sum(lab)'];
				$inm81  = $row81['sum(Imaging)'];
				$inb81  = $row81['sum(Bed_fee)'];
			    $drug81  = $row81['sum(drugs)'];	
				$ins81  = $row81['sum(surgery)'];
			    $ino81  = $row81['sum(other)'];
				
				$unpaid     =($inc81+$inl81+$inm81+$inb81+$ino81+$ins81+$drug81);
				
				
			}
			 $tunpaid =  round((($unpaid*100)/$tot),2);
			/////////////////////////////////////////////////////////
    		$result8 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where agreement='Health Care finance'") or die(mysql_error());
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
			$thc  =  round((($hc *100)/$tot),2);
				$result9 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where agreement='CB Health Insurance'") or die(mysql_error());
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
				$tin  =  round((($total_in*100)/$tot),2);
				$result10 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other)FROM treatment where agreement='Credit Service'") or die(mysql_error());
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
				$tcsx =$cs;
			}
					$tcs  =  round((($tcsx*100)/$tot),2);
			?>
  <?php
    		$result = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment") or die(mysql_error());
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
	   	   
               $op =mysql_query("SELECT * FROM `treatment` where  encounter='OPD'");
		       $opd = mysql_num_rows($op); 
			   
			    $ag =mysql_query("SELECT * FROM `treatment` where  age < 14");
		        $less14 = mysql_num_rows($ag);
				
			    $age =mysql_query("SELECT * FROM `treatment` where  age >14 and age <19");
		        $less1518 = mysql_num_rows($age);
				
				$age18 =mysql_query("SELECT * FROM `treatment` where  age >18 and age <33");
		        $less1933 = mysql_num_rows($age18);
				
			    $age33 =mysql_query("SELECT * FROM `treatment` where  age >32");
		        $exceeds33 = mysql_num_rows($age33);
				
			   $ip =mysql_query("SELECT * FROM `treatment` where encounter='IPD'");
		       $ipd = mysql_num_rows($ip); 
			   
	                          	$kf=mysql_query("SELECT * FROM patients where indigent='K'");
                                    $k = mysql_num_rows($kf);
                                 $hf=mysql_query("SELECT * FROM  patients where indigent ='H'");
                                    $h = mysql_num_rows($hf);
   
                                $tf=mysql_query("SELECT * FROM patients where sex='M'");
                                    $m = mysql_num_rows($tf);
                                         
   
                                 	$tm=mysql_query("SELECT * FROM  patients where sex='F'");
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
				
	                                 $totalx= mysql_query("SELECT * FROM treatment");
                                    $tt = mysql_num_rows($totalx);
						
                                 	$smale =mysql_query("SELECT * FROM `treatment` where  sex='M'");
                                    $male = mysql_num_rows($smale);
								
									$sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'");
                                    $female = mysql_num_rows($sfemale);
									
									?>
<style>
div#img {
    border: 0px solid black;
    padding: 0px;
	background-image: url(uploads/img.jpg);
background-repeat: repeat, repeat;
} 
</style>
<div class="row" >

	<div class="col-md-12"  >
	<h4> <b>What is a Report?</b></h4>
       <p>A report is a meaningful, well-defined, and summarized presentation of information. Usually, 
	   the routine activities are automated and data summarized into a decision-supporting "Reports". 
	   Reports represent usual messy data into charts, graphs, and other forms of graphical representations.</p>
		<div class="panel panel-primary" data-collapsed="0">
		
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title" >
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class=" fa fa-users"></i> 
					<?php //echo get_phrase('generate_customed_report');?> Patient registration information and Age classification per visits
                    	</a></b>
						
				</div>	<br>
				  <form action="#">  
				  
				<button type="submit"  name="" class="btn btn-primary pull-right"> 
							<i class="fa fa-times" style="color:white;"></i> Close<?php //echo get_phrase('next');?></button>
            </div>
			</form>
			    
				<i class=" entypo-menu " style="color:black;"></i>  Under this report, you will get the following patient registration information based on listed topics;
		

		<div class="panel-body" id="img">
			
                 <form action="<?php echo base_url(); ?>index.php?admin/customed_report_view" method="post">              


				<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						
						<i class="fa  fa-caret-right"></i>Total #No of Patients ____<u><?php echo format($this->db->count_all('patients'));?></u>___</div></label>
                        
				<div class="col-sm-3">
								 
							<i class="fa  fa-caret-right"></i> Patient by gender M:_<u><?php echo $m;?></u>, F: <u><?php echo $f;?></u>_
						</div> 
					

					
	     <div class="form-group">
				
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i>  Indigents  H:_<u><?php echo $h;?></u>, K: <u><?php echo $k;?></u>_
						  
						  
						</div> 
					</div>	
				  	          
		<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						
         <i class="fa  fa-caret-right"></i>  Patients exceeds 33 years old_<u> <?php echo $exceeds33;?></u>__</label>
		                    <div class="col-sm-3">
		              <i class="fa  fa-caret-right"></i>  Credit Service Patients ___<u> <?php echo $cs;?></u>___
			                </div>
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i>  Health care finace patient  __<u> <?php echo  $hc;?></u>__</label>
                        
						<div class="col-sm-3">
							   <i class="fa  fa-caret-right"></i> Patient death  M:_<u><?php echo '0';?></u>, F: <u><?php echo '0';?></u>_
						</div> 
					</div>
					
				
	
				<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i>  Patients b/n 19 and 32 years old_<u> <?php echo  $less1933;?></u>_</label>
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> CBHI Patients __<u> <?php echo  $b;?></u>___
						</div> 
					</div>
				   
					<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">  
						<i class="fa  fa-caret-right"></i> Patients less than 14 years old_<u> <?php echo  $less14;?></u>_</label>
                        
								<div class="col-sm-3">
						   <i class="fa  fa-caret-right"></i>  Patients b/n 15 and 18 years old _<u> <?php echo $less1518;?></u>_
						</div>
				</div>
                    
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
			
			
			
        </div>
    </div>
</div>

  	<!------ Service ------>
		<?php 
			$re = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ros = mysql_fetch_array($re)) {
				$year  = $ros['year'];
				$backyear  = $year-1;
				}
				?>
				
     <?php
	 $result1 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where year =$backyear and month in (11,12,13)") or die(mysql_error());
    		
	 		while ($rowb = mysql_fetch_array($result1)) {
								
				$incsb  = $rowb['sum(card)'];
				$inlsb  = $rowb['sum(lab)'];
				$inmsb  = $rowb['sum(Imaging)'];
				$inbsb  = $rowb['sum(Bed_fee)'];
			    $drugssb  =$rowb['sum(drugs)'];	
				$inssb  = $rowb['sum(surgery)'];
			    $inosb  = $rowb['sum(other)'];
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
		
			$gtotal=$backtot +$tot;
			?>
<div class="row" >

	<div class="col-md-12"  >

		<div class="panel panel-primary" data-collapsed="0">
		
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title" >
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class=" fa fa-usd"></i> 
					<?php //echo get_phrase('generate_customed_report');?>Annual revenue report based on fiscal years
                    	</a></b>
						
				</div>	<br>
				  <form action="#">  
				  
				<button type="submit"  name="" class="btn btn-primary pull-right"> 
							<i class="fa fa-times" style="color:white;"></i> Close<?php //echo get_phrase('next');?></button>
            </div>
			</form>
			    
				<i class=" entypo-menu " style="color:black;"></i>  Under this report, you will get general revenue from all agreements based fisical year;
		

		<div class="panel-body" id="img">
			
                 <form action="<?php echo base_url(); ?>index.php?admin/customed_report_view" method="post">              


				<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						
						<i class="fa  fa-caret-right"></i> Fisical year(2012/2013) : <u><?php echo number_format($gtotal,2);?></u></div></label>
                        
				<div class="col-sm-3">
								 
							<i class="fa  fa-caret-right"></i> Fisical year(2013/2014) :_<u><?php echo number_format(0,2);?></u>_
						</div> 
					

					
	     <div class="form-group">
				
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Fisical year(2014/2015) :_<u><?php echo number_format(0,2);?></u>_
						  
						  
						</div> 
					</div>	
				  	          
		<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						
                     <i class="fa  fa-caret-right"></i>  Fisical year(2015/2016): _<u><?php echo number_format(0,2);?></u>__</label>
		                    <div class="col-sm-3">
		              <i class="fa  fa-caret-right"></i> Fisical year(2016/2017): ___<u><?php echo number_format(0,2);?></u>___
					  
		
					  <br> <i class ="fa fa-caret-right"></i> Fisical year(2017/2018): ___<u><?php echo number_format(0,2);?></u>___
			             </div>   
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i> Fisical year(2018/2019)  __<u> <?php echo number_format(0,2);?></u>__</label>
                        
						<div class="col-sm-3">
							   <i class="fa  fa-caret-right"></i> Fisical year(2019/2020):_<u><?php echo number_format(0,2);?></u>_
						</div> 
					</div>
					
				
	
				<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i> Fisical year(2020/2021)_<u> <?php echo number_format(0,2);?></u>_</label>
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Fisical year(2021/2022) __<u> <?php echo number_format(0,2);?></u>___
						</div> 
					</div>
				   
					<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">  
						<i class="fa  fa-caret-right"></i> Fisical year(2022/2023)_<u><?php echo number_format(0,2);?></u>_</label>
                        
								<div class="col-sm-3">
						   <i class="fa  fa-caret-right"></i> Fisical year(2023/2024) _<u> <?php echo number_format(0,2);?></u>_
						</div>
				</div>
                    
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
			
			
			
        </div>
    </div>
</div>

  	<!------ Service charge and patient encounter information------>
	
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class=" fa fa-user"></i> 
					Service charge and patient encounter information
                    	</a></b>
						
				</div>	<br>
	  
				 
            </div>
		
			    
				<i class=" entypo-menu " style="color:black;"></i>  Under this report, you will get the following service charge and patient encounter information based on listed topics;
	<div class="panel-body" id="img" >
			
                 <form action="<?php echo base_url(); ?>index.php?admin/customed_report_view" method="post">              


							<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i>Total income _<u> <?php echo  number_format($tot,2);?></u>_</label>
                        
						<div class="col-sm-3">
								 
							<i class="fa  fa-caret-right"></i> Paid amount  _<u> <?php echo  number_format($paid,2);?></u>_
						</div> 
					</div>    
	     <div class="form-group"> 
				
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Uncovered amount _<u> <?php echo  number_format($unpaid,2);?></u>_
						  
						  
						</div> 
					</div>	
				  	          
		<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i> <?php //echo get_phrase('initial_month');?>#No of Male per enconter _<u> <?php echo $male;?></u>_</label>
		                    <div class="col-sm-3">
		              <i class="fa  fa-caret-right"></i> Service charge per CS  _<u> <?php echo  number_format($cs,2);?></u>_
			                </div>
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i>  Service charge per HCF  _<u> <?php echo  number_format($hc,2);?></u>_ </label>
                        
						<div class="col-sm-3">
							   <i class="fa  fa-caret-right"></i> Total enconter (Visits)_<u> <?php echo $tt;?></u>_
						</div> 
					</div>
					
				
	
								<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i> <?php //echo get_phrase('initial_date');?>#No of Female per enconter  _<u> <?php echo $female;?></u>_ </label>
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Service charge per CBHI  _<u> <?php echo  number_format($total_in,2);?></u>_ 
						</div> 
					</div>
				
				
				
					<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">  
						<i class="fa  fa-caret-right"></i> OPD patients _<u> <?php echo $opd;?></u>_</label>
                        
								<div class="col-sm-3">
						   <i class="fa  fa-caret-right"></i>  IPD patients _<u> <?php echo $ipd;?></u>_
						</div>
				</div>
				<!--
					<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">  
						<i class="fa  fa-caret-right"></i> Lowest enconter frequency_______?</label>
                        
								<div class="col-sm-3">
						   <i class="fa  fa-caret-right"></i>Highest enconter frequency______?
						</div>
						</div> -->
                    
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
			
			
			
        </div>
    </div>
</div>

<br>


	
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class=" fa fa-usd"></i> 
					Total income with percenatage per Service charge type
                    	</a></b>
						
				</div>	<br>
	  
				 
            </div>
		
			    
				<i class=" entypo-menu " style="color:black;"></i>  Under this report, you will get the following total income with percenatage per Service charge type based on listed topics;
		<div class="panel-body" id="img" >
			
                 <form action="<?php echo base_url(); ?>index.php?admin/customed_report_view" method="post">              


							<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i> Income from card _<u> <?php echo $tcard;?>%</u>_ </label>
                        
						<div class="col-sm-3">
								 
							<i class="fa  fa-caret-right"></i> Income from Imaging_<u> <?php echo  $tImaging;?>%</u>_
						</div> 
					</div>    
					
	     <div class="form-group">
				
                   
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i>  Income from others _<u> <?php echo  $tother;?>%</u>_
						  
						  
						</div> 
					</div>	
				  	          
		<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i> Income from HCF patients_<u> <?php echo $thc;?>%</u>_</label>
		                    <div class="col-sm-3">
		              <i class="fa  fa-caret-right"></i> Income from Laboratory _<u> <?php echo $tlab;?>%</u>_
			                </div>
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">
						<i class="fa  fa-caret-right"></i> Income from drug and SS_<u> <?php echo $tdrugs;?>%</u>_</label>
                        
						<div class="col-sm-3">
							   <i class="fa  fa-caret-right"></i> Uncovered service charge _<u> <?php echo $tunpaid;?>%</u>_  
						</div> 
					</div>
			<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i> Income from CBHI patients_<u> 
						<?php if($tin >100) {echo '100' ;} else {echo  number_format($tin,2);}?>%</u>_</label>
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Income from Procedure _<u> <?php echo $tsurgery;?>%</u>_
						</div> 
					</div>
				
					<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">   
						<i class="fa  fa-caret-right"></i> Income from Bed _<u> <?php echo $tBed_fee;?>%</u>_</label>
                        
								<div class="col-sm-3">
								<?php $cst = round((100-($tin-0.26 +$thc)),2);?>
						   <i class="fa  fa-caret-right"></i> Income from CS patients _<u><?php echo $cst;?>%</u>_
						</div>
						</div>
							
                    
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
			
			
			
        </div>
    </div>                       <?php // $query = $this->db->query('SELECT * FROM my_table');
                                       //echo $query->num_rows(); ?>

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
                                    $par = mysql_query("SELECT * FROM  parent");
                                    $all = mysql_num_rows($par);
									
                                 	$rg = mysql_query("SELECT * FROM  parent where woreda_id between 01 and 100");
                                    $dis = mysql_num_rows($rg);
									
									$org = $all- $dis;
                                 	$kfa=mysql_query("SELECT * FROM  parent where section_id='21'");
                                    $kf = mysql_num_rows($kfa);
																	
                                 	$sc = mysql_query("SELECT * FROM `section`");
                                    $sc2 = mysql_num_rows($sc);
                                      ?>
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
<!------Per agreement report------>
	
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class=" fa fa-flag"></i> 
					Client information by Location
                    	</a></b>
						
				</div>	<br>
	  
				 
            </div>
		
			    
				<i class=" entypo-menu " style="color:black;"></i>  Under this report, you will get the following clients information by Location based on listed topics;
			<div class="panel-body" id="img" >
			
                 <form action="<?php echo base_url(); ?>index.php?admin/customed_report_view" method="post">              

							<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i> Total #No of regions___<u><?php echo $this->db->count_all('class');?></u>__</label>
                        
						<div class="col-sm-3">
								 
							<i class="fa  fa-caret-right"></i> Total #No of zones___<u><?php echo $sc2;?></u>__
						</div> 
					</div>    
	     <div class="form-group">
				
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Total #No of districts(coded) __<u><?php echo $dis ;?></u>___
						  
						  
						</div> 
					</div>	
				  	          
		<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i>Districts in Kaffa ___<u><?php echo $kf;?></u>__ </label>
		                    <div class="col-sm-3">
		              <i class="fa  fa-caret-right"></i>   Zones in Gambel ___<u><?php echo $gm ;?></u>__
			                </div>
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i> Zones in Oromia___<u><?php echo $or;?></u>__</label>
                        
						<div class="col-sm-3">
							   <i class="fa  fa-caret-right"></i> Zones in SNNP ___<u><?php echo $snp;?></u>__
						</div> 
					</div>
					
				
	
								<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label"><i class="fa  fa-caret-right"></i>Total #No of Organizations___<u><?php echo $org;?></u>__</label>
                        
						<div class="col-sm-3">
						<i class="fa  fa-caret-right"></i> Districts in Jimma___<u><?php echo $jm;?></u>__
						</div> 
					</div>
				
					<div class="form-group">
						<label for="field-2" style="" class="col-sm-3 control-label">   <i class="fa  fa-caret-right"></i> Districts in Bunobedele___<u><?php echo $bn;?></u>__  </label>
                        
								<div class="col-sm-3">
						   <i class="fa  fa-caret-right"></i> Districts in Elubabor___<u><?php echo $eb ;?></u>__
						</div>
						</div>
                    
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
			
		
			
        </div>
    </div>
</div>

<br>


