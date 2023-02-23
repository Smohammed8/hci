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
	
<?php
$day = date('y:m:d');
$today = date('l, F d, Y',strtotime($day));
$new  = date('Y-m-d');
?>
                       <?php 
   
                          $user = $this->session->userdata('admin_id'); 	
	  
	                       $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                                $region = $row3["region"]; 
						        $zone   = $row3["zone"]; 
							    $woreda = $row3["woreda"]; 
						     } ?>
			   <form action="<?php echo base_url(); ?>index.php?admin/today_encounter_print_by_time_pdf/<?php echo $woreda;?>/<?php echo $qt; ?>" method="post">    	
				<input type="hidden" name="region"  value="<?php echo $region;?>"> 
                <input type="hidden" name="zone"    value="<?php echo  $zone; ?>"> 
				<input type="hidden" name="woreda"  value="<?php echo $woreda;?>"> 
                <input type="hidden" name="date"    value="<?php echo $new; ?>"> 				
			    <button type="submit" class="btn btn-primary pull-right" style="font-weight:bold;" name="print"><i class="fa fa-print"></i> PDF</button>      
            </form> 
			 
			 <br>
	
	   <hr>
	   <h4> <i class="fa  fa-ambulance"></i> Servics charge which are recorded today at <u> <?php echo $today ;?></u></h4>
<table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5">Patient Encounter Status</td>
								  
							
                               
							       <td  colspan="8">Payment information by servics type</td>
								   						     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div> MRN </div></th>
							
							<th><div> CBHI Code</div></th>
							
                         <th><div> Name</div></th>
                            <th><div><?php //echo get_phrase('join_date');?>Date:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>
							<!--<th><div><?php //echo get_phrase('diagnosis');?> </div></th> -->
							
							
                            <th><div><?php echo get_phrase('card');?></div></th>
							
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('procedure');?></div></th>
							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>
								
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							
                            
                        </tr>
                    </thead>
                    <tbody>
					<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
?>
					
					<?php 
                   $sql="select * from treatment where region='$region' and zone='$zone' and woreda='$woreda' and paid='No' and cdate='$new'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;">
						 <img src="uploads/invalid.PNG" width="17px" height="16px"/>&nbsp;No encounter found today!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             
							 $mrn_id= $row2['mrn_id'];
                            ?>
							<?php
							  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	   while($d=mysql_fetch_array($sq)){
			         $name= $d['name'];  
					  $agreement= $d['agreement']; 
					   }
					 ?>
                        <tr>					  
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								<td><?php echo $name;?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
								 
								 <!--   <td><?php $encounter_id= $row2['encounter_id'];?> </td> -->
							    <!--   <td><?php //echo $row2['diagniss'];?> </td> -->
							       <td style="text-align: right;"><?php echo number_format($row2['card'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['lab'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Imaging'],2);?></td>
	    						   <td style="text-align: right;"><?php echo number_format($row2['surgery'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['drugs'],2);?> </td>
								   <td style="text-align: right;"><?php echo number_format($row2['Bed_fee'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['other'],2);?></td>
								
	                                       <?php $encounter_id  = $row2['encounter_id'];?>
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = mysql_query("update treatment set total =$subtotal where encounter_id='$encounter_id' and region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'"); ?>
									
								   <td style="text-align: right;"><b><u>
								   
								   	<?php  echo number_format($subtotal,2); ?></u></b> </td>
								  
								   
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
           <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and  paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card= $row1['sum(card)'];
					 
    	?>
               <td style="text-align: right;">  <b> <u>
			   <?php echo number_format($row1['sum(card)'],2);?></u> </b></td>
    
			<?php }?>
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab  =	$row2['sum(lab)'];
			
    	?>
           <td style="text-align: right;">
		   <b> <u> <?php echo number_format($row2['sum(lab)'],2);?></u> </b> </td>
		   	<?php }?>
    	
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and  paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging= $row3['sum(Imaging)'];
			
    	?>
           <td style="text-align: right;">
		  <b> <u><?php echo number_format($row3['sum(Imaging)'],2);?></u> </b> </td>
		   	<?php }?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery = $row4['sum(surgery)'];
			
    	?>
           <td style="text-align: right;">
		  <b> <u><?php echo number_format($row4['sum(surgery)'],2);?></u> </b> </td>
		   
   	<?php }?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs= $row5['sum(drugs)'];
			
    	?>
           <td style="text-align: right;">
		   <b> <u> <?php echo number_format($row5['sum(drugs)'],2);?></u> </b> </td>
		   			<?php }?>		          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee = $row6['sum(Bed_fee)'];
				
			
    	?>
           <td style="text-align: right;">
		   <b> <u>  <?php echo number_format($row6['sum(Bed_fee)'],2);?></u> </b> </td>
		   		<?php }?>		   
									 
		<?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other=  $row7['sum(other)'];
			
    	?>
           <td style="text-align: right;">
		  <b> <u><?php echo number_format($row7['sum(other)'],2);?></u> </b> </td>
		   
	      <?php }?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where region='$region' and zone='$zone' and  woreda='$woreda' and paid='No' and cdate='$new'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				$total =  $row8['sum(total)'];
			}
    	?>
	

		     <?php $grandtotal =$card +$lab+$Imaging+$surgery+$drugs+$Bed_fee+$other;?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			      <?php echo number_format($grandtotal,2);?></u> </b> </td>
	
			      </tr>	    
                  </tfoot>							
           </tbody>
   </table>

<?php $admin_id = $this->session->userdata('admin_id'); ?>
                          <?php $years = $this->db->get('year')->result_array();
								foreach($years as $row2):		
							    $year = $row2['max_year'];
								endforeach;
							  ?>
  	<br>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class="entypo-print"></i> 
					Generate Report based on your need monthly,quarterly or any time Interval
                    	</a></b>
						
				</div>	<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
            </div>
			
			<div class="panel-body" >
			     
                 <form action="<?php echo base_url(); ?>index.php?admin/report_view_per_district" method="post">              
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label">Region Code:<?php //echo get_phrase('class');?></label>
                        
						<div class="col-sm-3">
							<input type="text" class="form-control" readonly value="<?php echo $region;?>" name="class_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div> 
					</div> 
                 
					
	     <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('year_interval');?>:</label>
                        
						<div class="col-sm-2">
							<select name="year1" class="form-control" data-validate="required" id="class_id" required="required">
                              <option value=""><?php echo get_phrase('initial_year');?></option>
                               <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select> 
						</div> 
						<div class="col-sm-2">
							<select name="year2" class="form-control" data-validate="required" id="class_id" 
								required="required">
                              <option value=""><?php echo get_phrase('final_year');?></option>
                               <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>
						  
						  
					
						  
						  
						</div>
					</div>	
				  	          
	               <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('zone');?> code:</label>
		                    <div class="col-sm-3">
		                     
								<input type="text" class="form-control" readonly value="<?php echo $zone;?>" name="section_id" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
			                </div>
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('month_interval');?>:</label>
                        
						<div class="col-sm-2">
								<select name="mm1" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('initial_month');?></option>
                          	<?php
						  
							  $mm=array("መስከረም/Fuulbana","ጥቅምት/Onkoleleessa","ሕዳር/Sadaasa","ታሕሣስ/Muddee","ጥር/Amajjii","የካቲት/Guraandhala","መጋቢት/Bitooteessa","ሚያዚያ/Elba","ግንቦት/Caamsa","ሰኔ/Waxabajjii","ሐምሌ/Adooleesa","ነሐሴ/Hagayya","ጳጉሜ/Qaamee");
                              //$mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
							  
                            $i=0;
                            foreach($mm as $mon){
                                $i++;
                                echo"<option value='$i'> $mon</option>";		
                            }
                        ?>
							 
                          </select>
						</div> 
						<div class="col-sm-2">
								<select name="mm2" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('final_month');?></option>
                          	<?php
						  
							   $mm=array("መስከረም/Fuulbana","ጥቅምት/Onkoleleessa","ሕዳር/Sadaasa","ታሕሣስ/Muddee","ጥር/Amajjii","የካቲት/Guraandhala","መጋቢት/Bitooteessa","ሚያዚያ/Elba","ግንቦት/Caamsa","ሰኔ/Waxabajjii","ሐምሌ/Adooleesa","ነሐሴ/Hagayya","ጳጉሜ/Qaamee");
                              //$mm=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","NOv","Dec");
							  
                            $i=0;
                            foreach($mm as $mon){
                                $i++;
                                echo"<option value='$i'> $mon</option>";		
                            }
                        ?>
							 
                          </select>
						</div> 
					</div>
					
				

								<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label">Woreda code:<?php //echo get_phrase('Woreda/Town/Organization');?></label>
                        
						<div class="col-sm-3">
							
						  
								<input type="text" class="form-control" readonly value="<?php echo $woreda;?>"  name="woreda_id"  data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						</div> 
					</div>
				
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('date_interval');?>:</label>
                        
								<div class="col-sm-2">
							<select name="dd1" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('intial_date');?> </option>
                          		<?php
                        for($i=1;$i<=30;$i++){
                        ?>
                        <option value="<?php echo $i; ?>">
                        <?php
                        if($i<10)
                            echo "0".$i;
                        else
                            echo"$i";	  
						?>
						</option>	
						<?php 
						}?>
							 
                          </select>
						 
						</div>
								<div class="col-sm-2">
							<select name="dd2" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('final_date');?> </option>
                          		<?php
                        for($i=1;$i<=30;$i++){
                        ?>
                        <option value="<?php echo $i; ?>">
                        <?php
                        if($i<10)
                            echo "0".$i;
                        else
                            echo"$i";	  
						?>
						</option>	
						<?php 
						}?>
							 
                          </select>
						</div>
						</div>
                    <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" style="font-weight:bold;" name="search" class="btn btn-primary pull-right"> 
							<i class="entypo-print"></i> <?php echo get_phrase('create_report');?></button>
						</div>
					</div>
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(7, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									 datatable.fnSetColumnVis(6, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>
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
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>