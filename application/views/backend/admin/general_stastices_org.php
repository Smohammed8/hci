
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
          background-color: white;
    }
	.asad{
		background-color:pink;	
	}
	
table, th, tr ,td {
  border: 1px solid blue;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

	</style>
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


		
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="thisyear">
          <table class="hoverTable" id="table_export">

   
							      <thead>
								       <tr class="header-tr" bgcolor="" >
				
                                    <td  colspan="21" style="text-align:right;">Note:- &nbsp;Paid:&nbsp;<i class="fa fa-check-square-o">&nbsp;&nbsp;Unpaid:&nbsp;<i class="fa fa-times"></i>&nbsp;&nbsp;&nbsp; <b><?php echo get_phrase('quarters_of_fisical_year');?>-<?php echo $backyear;?>/<?php echo $year;?></b></td>		
						
								       </tr>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="2"><?php echo get_phrase('Details');?></td>
								  
							
                               
							        <td  colspan="5" style="background-color:black;color:white;"><b><?php echo get_phrase('quarter-I');?> &nbsp;<i class="fa fa-check-square-o"></i></b></td>
								   	<td  colspan="4" style="background-color:#084184;color:white;"><b><?php echo get_phrase('quarter-II');?>&nbsp;<i class="fa fa-check-square-o"></i></b></td>
                                    <td  colspan="4" style="background-color:gray;color:white;"><b><?php echo get_phrase('quarter-III');?>&nbsp;<i class="fa fa-check-square-o"></i></b></td>
                                    <td  colspan="4" style="background-color:green;color:white;"><b><?php echo get_phrase('quarter-IV');?>&nbsp;<i class="fa fa-check-square-o"></i></b></td>		
									
							   <td></td>
								       </tr>
							    
                             </thead>
					
				
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div>#</div></th>
													
                            <th><div> <?php echo get_phrase('woreda');?> </div></th>
							
                            <th bgcolor="pink"><div><?php  echo get_phrase('July');?></div></th>
							<th bgcolor="pink"><div><?php  echo get_phrase('Aug');?></div></th>
                            <th bgcolor="pink"><div><?php  echo get_phrase('Puag');?></div></th>						
                            <th bgcolor="pink"><div><?php  echo get_phrase('Sep');?></div></th>
							 <th bgcolor="orange"><div>#Total</div></th>
                            <th><div><?php  echo get_phrase('Oct');?> </div></th>
							<th><div><?php  echo get_phrase('Nov');?></div></th>														
							<th><div><?php  echo get_phrase('Dec');?></div></th>
							 <th bgcolor="orange"><div>#Total</div></th>
                            <th><div><?php  echo get_phrase('Jan');?></div></th>
							<th><div><?php  echo get_phrase('Feb');?></div></th>
						   <th><div><?php   echo get_phrase('Mar');?></div></th>
						    <th bgcolor="orange"><div>#Total</div></th>
							<th><div><?php  echo get_phrase('Apr');?></div></th>
							<th><div><?php  echo get_phrase('May');?></div></th>
							<th><div><?php  echo get_phrase('Jun');?></div></th>
							 <th bgcolor="orange"><div>#Total</div></th>
						    <th><div>#G<?php  echo get_phrase('total');?></div></th>
                        </tr>
                    </thead>
                    <tbody>	
                       <?php 
   
                           $user = $this->session->userdata('admin_id'); 	
	                       $sql2 = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql2) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone   = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						   } ?>	
					    <?php $count = 1;
						 $sql="select * from parent where class_id='$region' and section_id='$zone' and woreda_id='$woreda'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;"><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;No woreda registered !</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){		
					//	$regions = $this->db->get_where('parent' ,array('class_id'=>$region, 'section_id'=>$zone, 'woreda_id'=>$woreda))->result_array()
					//	foreach($regions as $row2):
					 	 ?>
                             <tr>					  
					        <td>  <?php echo $count++;?>          </td>
							  <?php $pay          = $row2['name'];?>  
                               <?php $section_id  = $row2['section_id'];?>   
							   <?php $class_id    = $row2['class_id'];?>  
							   <?php $woreda_id   = $row2['woreda_id'];?>							  
							 	
	                        <!--  <td><?php // echo $this->crud_model->get_type_name_by_id('class',$row2['class_id']);?>/<?php //echo $this->crud_model->get_section_name_by_id($row2['section_id'],$row2['class_id']);?></td> -->
			                  <td><?php echo $row2['name'];?>(<?php echo $row2['woreda_id'];?>)</td>
								
								 <?php	

               //////////////////////////////////////////////////////////////////////
                  $result1 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month =11 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year= $backyear") or die(mysql_error()); 
                while ($rows1 = mysql_fetch_array($result1)) { 
				    $m11  = $rows1['sum(card)'] + $rows1['sum(lab)']+$rows1['sum(Imaging)'] +$rows1['sum(surgery)'] +$rows1['sum(drugs)'] + $rows1['sum(Bed_fee)']+ $rows1['sum(other)'];
	                  }
				////////////////////////////////////////////////////////////	  
				  $result2 = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month= 12 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$backyear") or die(mysql_error()); 
    	
                while ($rows2 = mysql_fetch_array($result2)) { 
				    $m12 = $rows2['sum(card)'] + $rows2['sum(lab)']+$rows2['sum(Imaging)'] +$rows2['sum(surgery)'] +$rows2['sum(drugs)'] + $rows2['sum(Bed_fee)']+ $rows2['sum(other)'];
				
				}
				/////////////////////////////////////////////////////////////////////
			  $result3= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=13 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$backyear") or die(mysql_error()); 
                while ($rows32 = mysql_fetch_array($result3)) { 
				    $m13 = $rows32['sum(card)'] + $rows32['sum(lab)']+$rows32['sum(Imaging)'] +$rows32['sum(surgery)'] +$rows32['sum(drugs)'] +$rows32['sum(Bed_fee)']+$rows32['sum(other)'];
				
				}
				/////////////////////////////////////////////////////////////////////////
				$res= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=1 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                while ($rows4x = mysql_fetch_array($res)) { 
				    $m1 = $rows4x['sum(card)'] + $rows4x['sum(lab)']+$rows4x['sum(Imaging)'] +$rows4x['sum(surgery)'] +$rows4x['sum(drugs)'] +$rows4x['sum(Bed_fee)']+$rows4x['sum(other)'];
				
				}
				/////////////////////////////////////////////////////////////////////////
					$res2= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month =2 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                  while ($rows5x = mysql_fetch_array($res2)) { 
				    $m2  = $rows5x['sum(card)'] + $rows5x['sum(lab)']+$rows5x['sum(Imaging)'] +$rows5x['sum(surgery)'] +$rows5x['sum(drugs)'] +$rows5x['sum(Bed_fee)']+$rows5x['sum(other)'];
				
				}
				////////////////////////////////////////////////////////////////////////////
					$res3= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=3 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                while ($rows3 = mysql_fetch_array($res3)) { 
				    $m3 = $rows3['sum(card)'] + $rows3['sum(lab)']+$rows3['sum(Imaging)'] +$rows3['sum(surgery)'] +$rows3['sum(drugs)'] +$rows3['sum(Bed_fee)']+$rows3['sum(other)'];
				}
				/////////////////////////////////////////////////////////////////////////////
					$res4= mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month= 4 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                while ($rows4 = mysql_fetch_array($res4)) { 
				    $m4 = $rows4['sum(card)'] + $rows4['sum(lab)']+$rows4['sum(Imaging)'] +$rows4['sum(surgery)'] +$rows4['sum(drugs)'] +$rows4['sum(Bed_fee)']+$rows4['sum(other)'];
				}
				/////////////////////////////////////////////////////////////////////////////
					$res5= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=5 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                   while($rows5 = mysql_fetch_array($res5)) { 
				       $m5 = $rows5['sum(card)'] + $rows5['sum(lab)']+$rows5['sum(Imaging)'] +$rows5['sum(surgery)'] +$rows5['sum(drugs)'] +$rows5['sum(Bed_fee)']+$rows5['sum(other)'];
				
				   }
				   ////////////////////////////////////////////////////////////////////////////
					$res6= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=6 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                   while($rows6 = mysql_fetch_array($res6)) { 
				       $m6 = $rows6['sum(card)'] + $rows6['sum(lab)']+$rows6['sum(Imaging)'] +$rows6['sum(surgery)'] +$rows6['sum(drugs)'] +$rows6['sum(Bed_fee)']+$rows6['sum(other)'];
				}
				////////////////////////////////////////////////////////////////////////////
					$res7= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=7 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                   while($rows7 = mysql_fetch_array($res7)) { 
				       $m7 = $rows7['sum(card)'] + $rows7['sum(lab)']+$rows7['sum(Imaging)'] +$rows7['sum(surgery)'] +$rows7['sum(drugs)'] +$rows7['sum(Bed_fee)']+$rows7['sum(other)'];
				      }
			     /////////////////////////////////////////////////////////
				    $res8= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=8 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                   while($rows8 = mysql_fetch_array($res8)) { 	
				       $m8 = $rows8['sum(card)'] + $rows8['sum(lab)']+$rows8['sum(Imaging)'] +$rows8['sum(surgery)'] +$rows8['sum(drugs)'] +$rows8['sum(Bed_fee)']+$rows8['sum(other)'];
			     	}
					///////////////////////////////////////////////////////////////////////
					$res9= mysql_query(" SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where  month=9 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                   while($rows9 = mysql_fetch_array($res9)) { 
				       $m9 = $rows9['sum(card)'] + $rows9['sum(lab)']+$rows9['sum(Imaging)'] +$rows9['sum(surgery)'] +$rows9['sum(drugs)'] +$rows9['sum(Bed_fee)']+$rows9['sum(other)'];
				
				    }
				/////////////////////////////////////////////////////////////////////////////
					$res10= mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where month =10 and region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and year=$year") or die(mysql_error()); 
    	
                   while($rows10 = mysql_fetch_array($res10)) { 
				       $m10 = $rows10['sum(card)'] + $rows10['sum(lab)']+$rows10['sum(Imaging)'] +$rows10['sum(surgery)'] +$rows10['sum(drugs)'] +$rows10['sum(Bed_fee)']+$rows10['sum(other)'];
						
				   }
				 ?>
			
							     	
							
							       <td style="text-align: right;"> <?php  echo  number_format($m11,2); ?></td> <!--  11 -->
								   <td style="text-align: right;"> <?php  echo  number_format($m12,2); ?></td> <!--  12 -->
								   <td style="text-align: right;"> <?php  echo  number_format($m13,2); ?></td> <!--  13 -->
								   <td style="text-align: right;"> <?php  echo  number_format($m1,2); ?></td> <!--  01 -->
								   <td style="text-align: right;"> <u><?php echo number_format($m1+$m13+$m12+$m11,2);?> </u></td>
								   
								   <td style="text-align: right;"> <?php  echo  number_format($m2,2); ?></td>  <!--02 -->
						           <td style="text-align: right;"> <?php  echo  number_format($m3,2); ?></td>  <!--03 -->
								   <td style="text-align: right;"> <?php  echo  number_format($m4,2); ?></td>  <!--04  --> 
								   <td style="text-align: right;"><u><?php echo number_format($m4+$m3+$m2,2);?> </u></td>
								   
							       <td style="text-align: right;"> <?php  echo  number_format($m5,2); ?></td> <!--05 -->
						           <td style="text-align: right;"> <?php  echo  number_format($m6,2); ?></td> <!--06  -->
								   <td style="text-align: right;"> <?php  echo  number_format($m7,2); ?></td> <!--07 -->
								   <td style="text-align: right;"> <u><?php echo number_format($m5+$m6+$m7,2);?></u> </td>

								   <td style="text-align: right;"> <?php  echo  number_format($m8,2); ?></td> <!--08  -->
						           <td style="text-align: right;"> <?php  echo  number_format($m9,2); ?></td> <!--09  -->
								   <td style="text-align: right;"> <?php  echo  number_format($m10,2); ?></td> <!--10 -->
								   <td style="text-align: right;"> <u><?php echo number_format($m8+$m9+$m10,2);?></u> </td>
								  
								   <?php $total= ($m11+$m12+$m13+$m1+$m2+$m3+$m4+$m5+$m6+$m7+$m8+$m9+$m10);?>
								   <td style="text-align: right;"><?php  echo number_format($total,2); ?></i></td> <!--<i class="fa fa-times">-->
                        </tr>
						
						 <?php }//endforeach;?>
			
				
				   
							      						
                    </tbody>
					
                </table>
		</div>
		
	
	 <!----TABLE LISTING STARTS-->
	 
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
      
            <!----TABLE LISTING ENDS--->
                    <?php
                     $facility=	$this->db->get('facility')->result_array();
                                foreach($facility as $row1):?>
								
								<br><br><br>
								
								
								
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update8/'.$row1['Facility_id'] ,array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						 
						 
						 
						 	 <div class="form-group">
                                <label class="col-sm-3 control-label">#<?php echo get_phrase('health_facility_name');?>:</label>
                                <div class="col-sm-5">
	                          	<input type="text" class="form-control" id="tmale" name="name" value="<?php echo $row1['name'];?>"  required/>
	                      	    </div>
                            </div>
						 
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
						<label class="col-sm-3 control-label"><?php echo get_phrase('ownership');?></label>
                        <div class="col-sm-5">
							<select name="ownership" class="form-control">
                               
                               <option value="Private" <?php if($row1['ownership'] == 'Private')echo 'selected';?>><?php echo get_phrase('private_facility');?></option>
                               <option value="Public"<?php if($row1['ownership'] == 'Public')echo 'selected';?>><?php echo get_phrase('public_facility');?></option>
                             
							 
                          </select>
						</div> 
				     	</div>				
					
					<!------------------------------------------------------------------------->
						 <div class="form-group">
                                <label class="col-sm-3 control-label">#<?php echo get_phrase('Male-Total_#of_visit(HMIS)');?>:</label>
                                <div class="col-sm-5">
	                          	<input type="text" class="form-control" id="tmale" name="tmale" value="<?php echo $row1['tmale'];?>"  required/>
	                      	    </div>
                            </div>
						 <div class="form-group">
                                <label class="col-sm-3 control-label">#<?php echo get_phrase('Female-Total_#of_visit(HMIS)');?>:</label>
                                <div class="col-sm-5">
	                            <input type="text" class="form-control" id="tfemale" name="tfemale" value="<?php echo $row1['tfemale'];?>"  required/>
	                            </div>
                            </div>
			         <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('facility catchment population');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" readonly name="" value="<?php echo $row1['cachement'];?>">
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
			</div>
				
			
			<!----CREATION FORM ENDS-->
            
		</div>
	</div>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>