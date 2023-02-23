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
	
	
	
	
	
	
	<hr>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<img src="uploads/1215.jpg" style="float:left;" height="70" width="80">
						
				</div>
				<h1><center><?php echo get_phrase('jimma_university ');?></center></h1>
<h2><center><?php echo get_phrase('jimma_university_specialized_hospital');?></center><p style='text-align:right;'> 
  <a href="<?php echo base_url(); ?>index.php?admin/all_finance_paid_print_pdf"><i class="fa fa-print"></i>&nbsp;PDF </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>&nbsp;Close </a> </p></h2>
            </div>
			

        </div>
    </div>
</div>



<table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5"><?php echo get_phrase('patient encounter status');?></td>
								  
							
                               
							       <td  colspan="9"><?php echo get_phrase('payment information by servics type');?></td>
								   						     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div> <?php echo get_phrase('mrn');?></div></th>
							<th><div> CBHI #Code</div></th>						
                            <th><div> <?php echo get_phrase('name');?></div></th>
                            <th><div><?php //echo get_phrase('join_date');?>Date:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>						
                            <th><div><?php echo get_phrase('card');?></div></th>						
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>														
							<th><div><?php echo get_phrase('procedure');?></div></th>							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>								
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
						    <th><div><?php echo get_phrase('paid');?></div></th>
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                   $sql="select * from treatment  where paid='Yes'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="16px"/>&nbsp; No payment made yet!!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id'];
                            ?>
							<?php
							  $sq = mysql_query("select  name from patients where mrn_id ='$mrn_id'"); 
				  	   while($d=mysql_fetch_array($sq)){
			         $name= $d['name'];  
					  $agreement= $d['agreement']; 
					   }
					 ?>
					   <?php   $encounter_id  =$row2['encounter_id'];?>	
                        <tr>					  
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								<td><?php echo $name;?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
							    <!--   <td><?php //echo $row2['diagniss'];?> </td> -->
								
								
							       <td style="text-align: right;"><?php echo number_format($row2['card'],2); ?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['lab'],2); ?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Imaging'],2); ?></td>
	    						   <td style="text-align: right;"><?php echo number_format($row2['surgery'],2); ?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['drugs'],2); ?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Bed_fee'],2); ?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['other'],2); ?></td>
							
	
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   //$sql2 =  mysql_query("update treatment set total = $subtotal where paid='Yes' and encounter_id='$encounter_id'"); ?>
									
								   <td style="text-align: right;"><b><u>
								   
								   <?php echo number_format($subtotal,2); ?></u></b> </td>
								  
								   
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                              <td>
							     <?php $paid= $row2['paid'];?>
								  <?php  if($paid=='Yes'){?>
                                
                                      <i class="fa fa-check-square-o"></i>
								  <?php } else{?>
                                <i class="fa fa-times"></i>
								  <?php }?>
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
           <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
			}
    	?>
   
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($card2,2); ?></u> </b> </td>
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab2  =	$row2['sum(lab)'];
			}
    	?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($lab2 ,2); ?></u> </b> </td>
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging2 = $row3['sum(Imaging)'];
			}
    	?>
          		  
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($Imaging2 ,2); ?></u> </b> </td>
				
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
			}
    	?>
      
		  
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			   <?php echo number_format($surgery2,2); ?></u> </b> </td>
				

							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
			}
    	?>
        	 		   
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			   <?php echo number_format($drugs2,2); ?></u> </b> </td>
				
					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2  = $row6['sum(Bed_fee)'];
			}
    	?>
          	   
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			<?php echo number_format($Bed_fee2,2); ?></u> </b> </td>
		   
		<?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other2 =  $row7['sum(other)'];
			}
    	?> 
		   <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($other2,2); ?></u> </b> </td>
		   
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where paid='Yes'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				
				$total2 =  $row7['sum(total)'];
			}
    	?>
		
   
		     <?php $grandtotal = $card2+$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			   <?php echo number_format($grandtotal,2); ?></u> </b> </td>
		
			</tr>
							    
                   </tfoot>							
                    </tbody>
                </table>
        
				 
                              <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                               $min_year = $row2['min_year'];   
                                
								endforeach;
							  ?>
				<label for="" class="col-sm-2 control-label"><b>Filter :</b></label>
	
        <form action="<?php echo base_url(); ?>index.php?admin/paid_service_charge/<?php echo $admin_id;?>" method="post">    
			<div class="col-sm-3">
				 		


			<select name="year" class="form-control" required="required" id="class_id">
                              <option value=""><?php echo get_phrase('year');?></option>
                               <?php
							
							for($i=$min_year;$i<=$year ;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>								
			                  </div>               
				
			              <div class="col-sm-3">
				 		<select name="qt" class="form-control" data-validate="required" id="class_id" required="required">
                              <option value=""><?php echo get_phrase('quarter');?></option>
                              
							  
							   
							   
					    <option value="1"><?php echo get_phrase('First Quarter');?>[ሐምሌ,ነሐሴ,ጳጉሜ,መስከረም]</option>
						<option value="2"><?php echo get_phrase('Second Quarter');?>[ጥቅምት,ሕዳር,ታሕሣስ]</option>
						<option value="3"><?php echo get_phrase('Third Quarter');?>[ጥር,የካቲት,መጋቢት]</option>
						<option value="4"><?php echo get_phrase('Fourth Quarter');?>[ሚያዚያ,ግንቦት,ሰኔ]</option>
							 
			                    </select>					
			                  </div> 
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-users"></i> <?php echo get_phrase('select');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
<br><br><br><br><br><br><br>

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
						"mColumns": [0,1, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0,1, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							//datatable.fnSetColumnVis(0, false);
							//datatable.fnSetColumnVis(7, false);
							
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