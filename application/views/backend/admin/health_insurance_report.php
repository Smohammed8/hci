
 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: white;
    }
	.asad{
		background-color:pink;	
	}
	
table, th, tr ,td {
  border: 1px solid blue;
 /* font-size:11px; */
  	width:100%; 
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

	</style>
<?php 
function format($value) {
	if ($value > 0) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}

?>	
                               <?php 
								$ye= $this->db->get('fiscal_year ')->result_array();
								foreach($ye as $rowx):
                                   $year = $rowx['year'];       
								   $backyear = $year-1;
								   endforeach;
							    ?>
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered" style="">
			<li class="active" >
            	<a href="#thisyear" data-toggle="tab"><i class="fa  fa-caret-right"></i> 
						<?php echo $backyear;?>/<?php echo $year ;?>
                    	</a></li>
						
			       <li>
            	<a href="#2014" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
					
					<?php echo $year+1-1;?>/<?php echo $year+1 ;?>
                    	</a>
					</li>
					
					     <li>
            	<a href="#2015" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
					
					<?php echo $year+2-1;?>/<?php echo $year+2 ;?>
                    	</a>
					</li>
					     <li>
            	<a href="#2016" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
				
					<?php echo $year+3-1;?>/<?php echo $year+3 ;?>
                    	</a>
					</li>
					     <li>
            	<a href="#2017" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
				
					<?php echo $year+4-1;?>/<?php echo $year+4 ;?>
                    	</a>
					</li>
						     <li>
            	<a href="#2018" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
					
					<?php echo $year+5-1;?>/<?php echo $year+5 ;?>
                    	</a>
					</li>
				
					     <li>
            	<a href="#2019" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
					
					<?php echo $year+6-1;?>/<?php echo $year+6 ;?>
                    	</a>
					</li>
					     <li>
            	<a href="#2020" data-toggle="tab"> <i class="fa  fa-caret-right"></i>
				
					<?php echo $year+7-1;?>/<?php echo $year+7 ;?>
                    	</a>
					</li>
				
				
			 
            	
		      </ul>


		
		<div class="tab-content" style="width:100%;">
		
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" style="width:100%;" id="thisyear">
          <table class="hoverTable" id="table_export" width="100%">

   
							       <thead style="width:100%;">
								       <tr class="header-tr" bgcolor="#f2f2f2" >
				
                                    <td  colspan="3" style="text-align:right;"> <i class="fa fa-flag"></i> <b>Client Information by address location</b></td>	
                                    <td  colspan="6" style="text-align:right;"> <b>Beneficiary classification based on gender and indigent type</b></td>									
						            <td  colspan="6" style="text-align:right;"><b><i class="fa fa-group"></i> Patient classification based By Visit of encounter type such as IPD and OPD </b></td>		
						             <td  colspan="6" style="text-align:right;"> <b><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp; <b><?php echo get_phrase('quarters_of_fisical_year');?>-<?php echo $backyear;?>/<?php echo $year;?></b></td>	
								       </tr>
                                  <tr class="header-tr" bgcolor="" width="100%" >
					
							          <td   width ="20%" colspan="3"> Client <?php echo get_phrase('Details');?></td>
								  
							
                               
							        <td  colspan="3" style="background-color:black;color:white;"><i class="fa fa-female"></i>&nbsp;<i class="fa fa-male"></i><b>&nbsp;By Gender </b></td>
									<td  colspan="3" style="background-color:black;color:white;"><i class="fa fa-group"></i><b>&nbsp;By Indigent </b></td>
									
								   	<td  colspan="3" style="background-color:#084184;color:white;"><i class="fa fa-ambulance"></i><b>&nbsp;  IPD</b></td>
								    <td  colspan="3" style="background-color:#084184;color:white;"><i class="fa fa-flag"></i><b>&nbsp;  OPD</b></td>
									
                                    <td  colspan="5" style="background-color:gray;color:white;"><b> &nbsp;<i class="fa fa-check-square-o"></i>  Visit per Quarter</b></td>
                                   
							   <td></td>
								       </tr>
							    
                             </thead>
					
				
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th  style="width:3%;"><div>#</div></th>
							<th ><div><?php  //echo get_phrase('Region/Zone');?><b> Woreda in different zones</b></div></th>						
                            <th style="width:10%;"><div> <?php// echo get_phrase('woreda');?> Zone </div></th>
							
                            <th bgcolor="pink"><div><?php  echo get_phrase('M');?></div></th>
							<th bgcolor="pink"><div><?php  echo get_phrase('F');?></div></th>
                            <th bgcolor="pink"><div><?php  echo get_phrase('total');?></div></th>
							
                            <th bgcolor="grey;"><div><?php  echo get_phrase('K');?></div></th>
							  <th bgcolor="grey;"><div><?php  echo get_phrase('H');?></div></th>
                            <th bgcolor="grey;"><div><?php  echo get_phrase('total');?> </div></th>
							
							<th bgcolor="orange"><div><?php  echo get_phrase('K');?></div></th>	
							<th bgcolor="orange"><div><?php  echo get_phrase('H');?></div></th>
						    <th bgcolor="orange"><div><?php  echo get_phrase('total');?></div></th>
							 
							 
							<th bgcolor="lightblue"><div><?php  echo get_phrase('K');?></div></th>	
							<th bgcolor="lightblue"><div><?php  echo get_phrase('H');?></div></th>
						    <th bgcolor="lightblue"><div><?php  echo get_phrase('total');?></div></th>
							
                         
							
						    <th bgcolor="white"><div>  1<sup>st</sup> Quar</div></th>	
							<th bgcolor="white"><div>  2<sup>nd</sup> Quar</div></th>
						    <th bgcolor="white"><div>  3<sup>rd</sup> Quar</div></th>
							 <th bgcolor="white"><div> 4<sup>th</sup> Quar</div></th>
							 
						
							
				
							
						    <th><div><?php  echo get_phrase('total');?></div></th>
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
				
							
					<?php 
					
					        $count = 1;
					         $agreed='Yes';   
							 $agreement='CB Health Insurance';
							//$regions = $this->db->get('parent')->result_array();
							 $woreda  = $this->db->get_where('parent' , array('agreed'=>$agreed, 'agreemenrt_type'=>$agreement))->result_array();
						     foreach($woreda as $row2):?>
                        <tr>					  
							   <td style="width:3%;"><?php echo $count++;?></td>
							   
							   
							   <?php $pay = $row2['name'];?>  
							 
							  <?php $section_id  = $row2['section_id'];?>   
							  <?php $class_id    = $row2['class_id'];?>  
							  <?php $woreda_id   = $row2['woreda_id'];?>  \\\\\\
							  
							  <td style="width:10%;"> <?php echo $row2['name'];?>(<?php echo $row2['woreda_id'];?>)</td>
								
	                           <td style="width:5%;"><?php //echo $this->crud_model->get_type_name_by_id('class',$row2['class_id']);?><?php echo $this->crud_model->get_section_name_by_id($row2['section_id'],$row2['class_id']);?></td>
			                         
									
										
										 
		
				    <?php
                     	            $fm =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and sex='F' and agreement='CB Health Insurance'");
								       $fmt = mysql_num_rows($fm); 
									    $m =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  sex='M' and agreement='CB Health Insurance'");
								       $mt = mysql_num_rows($m); 
									 $allsex= $fmt+ $mt;
									 
									    $h =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='H' and agreement='CB Health Insurance'");
								       $th = mysql_num_rows($h); 
									    $k =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='K' and agreement='CB Health Insurance'");
								       $tk = mysql_num_rows($k); 
									   $allindident=$th+$tk;
									   
									   
									    $ipd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='H' and agreement='CB Health Insurance' and encounter='IPD'");
								        $hipd = mysql_num_rows($ipd); 
										
									    $opd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='K' and agreement='CB Health Insurance' and encounter='IPD'");
								        $kipd= mysql_num_rows($opd); 
									   
									   $totalvisit =$hipd+$kipd;
									   
									   
									     $opdh =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='H' and agreement='CB Health Insurance' and encounter='OPD'");
								        $hopd = mysql_num_rows($opdh); 
										
									     $opdk =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='K' and agreement='CB Health Insurance' and encounter='OPD'");
								        $kopd= mysql_num_rows($opdk); 
									   
									    $hkopd =$hopd+$kopd;
										
										
										// Fiscal year quarters
										$st =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  agreement='CB Health Insurance' and  month in(11,12,13,1) and year= $backyear");
								        $fst = mysql_num_rows($st); 
										
									    $nd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and agreement='CB Health Insurance' and  month in(2,3,4) and year= $year");
								        $snd = mysql_num_rows($nd); 
									    
										$rd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  agreement='CB Health Insurance' and  month in(5,6,7)  and  year= $year");
								        $thrd = mysql_num_rows($rd); 
										
									     $ths =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and agreement='CB Health Insurance' and  month in(8,9,10) and year= $year");
								        $forth= mysql_num_rows($ths); 
										
									    $all=$fst+$snd +$thrd+$forth;
										
										 
									   
			  
				 ?>
  
								   <td style="text-align: right;"> <?php echo $fmt;?> </td> 
								   <td style="text-align: right;"> <?php echo $mt;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($allsex);?> </u></td> 
								   
								   <td style="text-align: right;"> <?php echo $tk;?></td> 
								   <td style="text-align: right;"> <?php echo $th;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($allindident);?> </u></td>  
								   
								   <td style="text-align: right;"> <?php echo $kipd;?> </td> 
								   <td style="text-align: right;"> <?php echo $hipd;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($totalvisit);?></u></td> 
								   
                                   <td style="text-align: right;"> <?php echo $hopd;?> </td> 
								   <td style="text-align: right;"> <?php echo $kopd;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($hkopd);?></u></td> 
								   
								   
                                   <td style="text-align: right;"> <?php echo $fst; ?></td>
								   <td style="text-align: right;"> <?php echo $snd;?> </td> 
								   <td style="text-align: right;"> <?php echo $thrd;?> </td> 
								   <td style="text-align: right;"> <?php echo $forth;?> </td> 
								   
                                   <td style="text-align: right;"> <u><?php echo format($all);?></u> </td>
								   
								       <!--<i class="fa fa-times">-->
                        </tr>
						
                   <?php endforeach;?>
			 
				
				   
							      						
                    </tbody>
					
                </table>
		</div>
		<br><br>
<!----Begin of report-->
<hr>
	<div class="panel-body" >
				
		
				    <form action="<?php echo base_url(); ?>index.php?admin/health_insurance_report_per_quarter" method="post"> 

							
					
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('region');?></label>
                        
						<div class="col-sm-3">
							<select name="class_id" class="form-control" required="required" id="class_id"
									onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['class_id'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>
					
						  	               <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('Agreement');?></label>
                        
						<div class="col-sm-3">
							<select name="agreement" class="form-control" required="required">
                             
                              
                              <?php 
								$agre = $this->db->get('agreement')->result_array();
								foreach($agre as $rows):
									?>
                            		<option value="<?php echo $rows['agreement'];?>">
											<?php echo $rows['agreement'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
							  
                         
                          </select>			  
						</div> 
					</div>
					

				    		<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('zone');?></label>
		                    <div class="col-sm-3">
		                        <select name="section_id" class="form-control" id="section_selector_holder" 
								
								required="required" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('quarter');?></label>
                        
						<div class="col-sm-3">
								<select name="qt" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                     
						<option value="1"> 1 <sup> st</sup> Quarter [ሐምሌ,ነሐሴ,ጳጉሜ,መስከረም]</option>
						<option value="2"> 2 <sup> nd</sup> Quarter [ጥቅምት,ሕዳር,ታሕሣስ]</option>
						<option value="3"> 3 <sup> rd</sup> Quarter [ጥር,የካቲት,መጋቢት]</option>
						<option value="4"> 4 <sup> th</sup> Quarter [ሚያዚያ,ግንቦት,ሰኔ]</option>
					
                          </select>
						</div> 
					</div>
					
								<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('woreda');?></label>
                        
						<div class="col-sm-3">
							<select name="woreda_id" class="form-control" id="woreda_code"  required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('year');?></label>
                        
								<div class="col-sm-3">
							<select name="yyyy" class="form-control" required="required" id="class_id">
                              <option value=""><?php echo get_phrase('select');?></option>
                               <?php
							
							for($i=2013;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>
						</div>
						</div>

			    <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" style="font-weight:bold;" name="search" class="btn btn-primary pull-right"> 
							<i class="entypo-print"></i> <?php echo get_phrase('proceed');?></button>
						</div>
					</div>
				</form>
            </div>
	 <!----End of  report-->
	 
<!----Begin of 2014
         <div class="tab-pane box active"  id="2014">
		 	 <img src="uploads/2014.jpg" title="2014 is yet comming!">		
        
		</div>
			<!----End of 2014-->
			
            <!----Begin of 2014-->
         <div class="tab-pane box active"  id="2015">
		 		
         <!--- <img src="uploads/2015.jpg" title="2015 is yet comming!">	-->
		</div>
			<!----End of 2014-->
			
			
			<!----Begin of 2014-->
         <div class="tab-pane box active"  id="2016">
		 		
         <!--- <img src="uploads/2016.jpg" title="2016 is yet comming!">	-->
		</div>
			<!----End of 2014-->
			
			
			<!----Begin of 2014-->
         <div class="tab-pane box active"  id="2017">
		 	 		
        <!---  <img src="uploads/2017.jpg" title="2017 is yet comming!"> -->		
        
		</div>
			<!----End of 2014-->
			
			
			<!----Begin of 2014-->
         <div class="tab-pane box active"  id="2018">
		 		
         <!--- <img src="uploads/2018.jpg" title="2018 is yet comming!">	-->
		</div>
			<!----End of 2014-->
			
			
			<!----Begin of 2014-->
         <div class="tab-pane box active"  id="2019">
		 	<!-- <img src="uploads/2019.jpg" title="2019 is yet comming!">	-->
        
		</div>
			<!----End of 2014-->
			
			<!----Begin of 2014-->
         <div class="tab-pane box active"  id="2020">
		 		
     <!----   <img src="uploads/2020.jpg" title="2020 is yet comming!"> -->
		</div> 
			<!----End of 2014-->
		</div>
	</div>
</div>


<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>


<script type="text/javascript">

	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda2/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
