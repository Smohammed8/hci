
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

<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo get_phrase('Health_Management_Information_Systems(HMIS)_Data_view');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo get_phrase('cachement_population');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
      <style>  
	       th { writing-mode: sideways-lr; /* +90°: use 'tb-rl' */
          text-align: left;          /* +90°: use 'right' */
          padding:0px 0px 0; }
		  table, th, tr ,td {
          border: 1px solid black;
           }

		  </style>
		       <?php
    		$result = mysql_query("SELECT sum(card),sum(lab),sum(Imaging),sum(surgery),sum(drugs),sum(Bed_fee),sum(other) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($rows = mysql_fetch_array($result)) {
								
				$incs  = $rows['sum(card)'];
				$inls  = $rows['sum(lab)'];
				$inms  = $rows['sum(Imaging)'];
				$inbs  = $rows['sum(Bed_fee)'];
			    $drugss  = $rows['sum(drugs)'];	
				$inss  = $rows['sum(surgery)'];
			    $inos  = $rows['sum(other)'];
				$tot   = ($incs+$inls+$inms+$inbs+$inos+$inss+$drugss);
			}
			
			?>
			 <?php         /*and paid='Yes' */    //where agreement='CB Health Insurance'
    		$result81 = mysql_query("SELECT sum(card) FROM treatment where paid='No'") or die(mysql_error());
    		 while ($row81 = mysql_fetch_array($result81)) {
				$card  = $row81['sum(card)'];
			   }
			   	$result82 = mysql_query("SELECT sum(lab) FROM treatment where paid='No' ") or die(mysql_error()); //where agreement='CB Health Insurance'
    		 while ($row82 = mysql_fetch_array($result82)) {
			    $lab = $row82['sum(lab)'];
			   }
			   	$result83 = mysql_query("SELECT sum(Imaging) FROM treatment where paid='No'") or die(mysql_error());//where agreement='CB Health Insurance'
    		 while ($row83 = mysql_fetch_array($result83)) {
			     $img = $row83['sum(Imaging)'];
			   }
			   	$result84 = mysql_query("SELECT sum(Bed_fee) FROM treatment where paid='No'") or die(mysql_error());//where agreement='CB Health Insurance'
    		 while ($row84 = mysql_fetch_array($result84)) {
	                 $bed = $row84['sum(Bed_fee)'];
			   }
			      	$result85 = mysql_query("SELECT sum(drugs) FROM treatment where paid='No'") or die(mysql_error());//where agreement='CB Health Insurance'
    		 while ($row85 = mysql_fetch_array($result85)) {
	               $drugs = $row85['sum(drugs)'];
			   }
			      	$result86 = mysql_query("SELECT sum(surgery) FROM treatment where paid='No'") or die(mysql_error());//where agreement='CB Health Insurance'
    		 while ($row86 = mysql_fetch_array($result86)) {
	               	$sur = $row86['sum(surgery)'];
			   }
			    	$result87 = mysql_query("SELECT sum(other) FROM treatment where paid='No'") or die(mysql_error()); //where agreement='CB Health Insurance'
    		 while ($row87 = mysql_fetch_array($result87)) {
	               	 $other = $row87['sum(other)'];
			   }
			   $total_claim  = ($card+$lab+$img+$bed+$drugs+$sur+$other);
			   ?>
				       <?php 
					   
					                $opd1 = mysql_query("SELECT * FROM `treatment` where encounter='OPD' and indigent ='K' and agreement='CB Health Insurance'");
                                    $opdk = mysql_num_rows($opd1);
									
								    $opd2 = mysql_query("SELECT * FROM `treatment` where encounter='OPD' and indigent ='H' and agreement='CB Health Insurance'");
                                    $opdh = mysql_num_rows($opd2);
									
									
								    $ipd1 = mysql_query("SELECT * FROM `treatment` where encounter='IPD' and indigent ='K' and agreement='CB Health Insurance'");
                                    $ipdk  = mysql_num_rows($ipd1);
									
								    $ipd2 = mysql_query("SELECT * FROM `treatment` where encounter='IPD' and indigent ='H' and agreement='CB Health Insurance'");
                                    $ipdh = mysql_num_rows($ipd2);
									
								    $md= mysql_query("SELECT * FROM treatment where reason='Medical service' and agreement='CB Health Insurance'");
                                    $medical = mysql_num_rows($md);
							    	$stock = mysql_query("SELECT * FROM treatment where reason='Drug stock-out' and agreement='CB Health Insurance'");
                                    $stock_out = mysql_num_rows($stock);
									
									
				                     $ip= mysql_query("SELECT * FROM treatment where encounter='IPD' and agreement='CB Health Insurance'");
                                     $ipd = mysql_num_rows($ip);
									
	                                 $op= mysql_query("SELECT * FROM treatment where encounter='OPD' and agreement='CB Health Insurance'");
                                     $opd = mysql_num_rows($op);
									
	                                 $total= mysql_query("SELECT * FROM treatment");
                                     $tt = mysql_num_rows($total);
						
                                 	 $smale =mysql_query("SELECT * FROM `treatment` where  sex='M'");
                                     $vmale = mysql_num_rows($smale);
								
								 	 $sfemale= mysql_query("SELECT * FROM treatment where  sex ='F'");
                                     $vfemale = mysql_num_rows($sfemale);
									
									?>
									<?php 	
									$tf = mysql_query("SELECT * FROM treatment where sex='M' and agreement='CB Health Insurance'");
                                    $m = mysql_num_rows($tf);
                                         
   
                                 	$tm=mysql_query("SELECT * FROM treatment where sex='F' and agreement='CB Health Insurance'");
                                    $f = mysql_num_rows($tm);
									?>
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
         


		 <table class="hoverTable" id="table_export">
                	<thead>
                		    <tr class="header-tr" bgcolor="lightblue">
                    		
                    		<th><div><?php echo get_phrase('Health_Facility_Name');?></div></th>
                    		<th><div><?php echo get_phrase('Type_of_Facility');?></div></th>
                    		<th><div><?php echo get_phrase('Catchment_Population');?></div></th>
							
							<th><div><?php echo get_phrase('OPD_Utilization-#of_Non_Paying');?> (C B H I)</div></th>
							<th><div><?php echo get_phrase('OPD_Utilization-#of_Paying');?> (C B H I)</div></th>
							<th><div><?php echo get_phrase('IPD_Utilization_#of_Non_Paying');?> (C B H I)</div></th>
							<th><div><?php echo get_phrase('IPD_Utilization_#of-Paying');?> (C B H I)</div></th>
							
                    		<th><div><?php echo get_phrase('Total_#of_visits_all_patients (H M I S)-Male');?> (A l l)</div></th>
                    		<th><div><?php echo get_phrase('Total-#of_visits_all_patients (H M I S)-Female');?> (A l l)</div></th>
							
							<th><div><?php echo get_phrase('Total-#of_visits_C B H I_clients-Male');?> (C B H I)</div></th>
                    		<th><div><?php echo get_phrase('Total-#of_visits_C B H I_clients-Female');?> (C B H I)</div></th>
							
                    		<th><div><?php echo get_phrase('Total-#of_O P D_claims');?> (C B H I)</div></th>
							<th><div><?php echo get_phrase('Total-#of_I P D_claims');?> (C B H I)</div></th>
							
                    		<th><div><?php echo get_phrase('Amount_claimed_for_card');?></div></th>			
						    <th><div><?php echo get_phrase('Amount_claimed_for_lab');?></div></th>
							<th><div><?php echo get_phrase('Amount_claimed_for_drugs & SS');?></div></th>
                    		<th><div><?php echo get_phrase('Amount_claimed_for_imaging');?></div></th>
						    <th><div><?php echo get_phrase('Amount_claimed_for_surgery');?></div></th>
							<th><div><?php echo get_phrase('Amount_claimed_for_bed_day');?></div></th>
                    		<th><div><?php echo get_phrase('Amount_claimed-other');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('Total_amount_claimed');?></div></th>
							<th><div><?php echo get_phrase('Patients_referred_for_medical_services');?></div></th>
                    		<th><div><?php echo get_phrase('Patients_referred_due_to_drug_stock-out');?></div></th>
							
						</tr>
					</thead>
                    <tbody>
					

	 
                    	<?php 
						//$count = 1;
						//$current_user =  $this->session->userdata('admin_id');
       
                        $notices = $this->db->get_where('facility')->result_array();
						foreach($notices as $row):?>
                        <tr>
                           <!-- <td><?php// echo $count++;?></td> -->
						   	<td><b><?php echo $row['name'];?></b></td>
							<td><b><?php echo $row['type'];?></b></td>
							<td><b><?php echo format($row['cachement']);?></b></td>
							<td style="background-color:pink;"><b><?php echo format($opdh);?></b></td>	
							<td style="background-color:pink;"><b><?php echo format($opdk);?></b></td>	
							
						    <td style="background-color:pink;"><b><?php echo format($ipdh);?></b></td>
						    <td style="background-color:pink;"><b><?php echo format($ipdk);?></b></td>
							
							<td style="background-color:gray;"><b><?php echo $vmale;?></b></td>
							<td style="background-color:gray;"><b><?php echo $vfemale;?></b></td>
							
							<td><b><?php echo $m;?></b></td> 
							<td><b><?php echo $f;?></b></td>
							
							<td style="background-color:#084184;color:white;"><b><?php echo $opdk+$opdh;?></b></td>
						    <td style="background-color:#084184;color:white;"><b><?php echo $ipdk+$ipdh;?></b></td>	
										
							<td style="background-color:lightblue;"><b> <?php echo number_format($card,2);?></b></td>
							<td style="background-color:lightblue;"><b><?php echo number_format($lab,2);?></b></td>
							<td style="background-color:lightblue;"><b><?php echo number_format($img,2);?></b></td>	
						    <td style="background-color:lightblue;"><b><?php echo number_format($sur,2);?></b></td>
							<td style="background-color:lightblue;"><b><?php echo number_format($drugs,2);?></b></td>
							<td style="background-color:lightblue;"><b><?php echo number_format($bed,2);?> </b></td>
							<td style="background-color:lightblue;"><b><?php echo number_format($other,2);?></b></td>
						    <td><b> <?php echo number_format($total_claim,2);?></b></td>	
						    
							<td><b><?php echo $medical;?></b></td>
							<td><b><?php echo $stock_out;?></b></td>
							
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
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