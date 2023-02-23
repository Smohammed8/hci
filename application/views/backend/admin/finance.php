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


table, th, tr ,td {
  border: 1px solid blue;
}

	</style>
	<hr>
<?php
$new  = date('Y-m-d');
$day  = date('y:m:d');
$today = date('l, F d, Y',strtotime($day));
?>
   <?php	
		        $re = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ros = mysql_fetch_array($re)) {
				$year  = $ros['year'];
				}
				?>
<br>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<img src="uploads/1215.jpg" style="float:left;" height="70" width="80">
						
				</div>
				
				<h1><center><?php echo get_phrase('jimma_university ');?></center></h1>
   <h2><center><?php echo get_phrase('jimma_university_specialized_hospital');?></center>
   
   <p style="text-align:right;"> 
 
 <b>Fisical year: <?php echo $year;?></b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php?admin/all_finance_print_pdf"><i class="fa fa-print"></i>&nbsp;PDF </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>&nbsp;Close </a> </p></h2>
            </div>
			

        </div>
    </div>
</div>



<table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="5"><?php echo get_phrase('patient encounter status');?></td>
								  
							
                               
							       <td  colspan="8"><?php echo get_phrase('payment information by servics type');?></td>
								   						     
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
                            <th ><div><?php echo get_phrase('card');?></div></th>						
                            <th ><div><?php echo get_phrase('lab');?> </div></th>
							<th ><div><?php echo get_phrase('imaging');?></div></th>														
							<th ><div><?php echo get_phrase('procedure');?></div></th>							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th ><div><?php echo get_phrase('bed');?></div></th>
						    <th ><div><?php echo get_phrase('other');?></div></th>								
							<th ><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th ><div><?php echo get_phrase('remark');?></div></th>
						   
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                   $sql="select * from treatment  where paid='No' and cdate='$new' and year='$year'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No new service charge found today!</div>';
	 
                              }
                          while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id'];
                            ?>
							<?php
							  $sq = mysql_query("select  name,agreement from patients where mrn_id ='$mrn_id'"); 
				  	       while($d=mysql_fetch_array($sq)){
			                 $name= $d['name'];  
					         $agreement= $d['agreement']; 
					   }
					 ?>
					  <?php   $encounter_id  =$row2['encounter_id'];?>	
					  
					  
                        <tr>					  
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								   <td><?php echo ucwords(strtolower($name));?></td>
							       <td><?php echo $row2['Date_of_service'];?> </td>
						           <td><?php echo $row2['encounter'];?> </td>
							       <td style="text-align: right;"><?php echo  number_format($row2['card'],2);?></td>
							       <td style="text-align: right;"><?php echo  number_format($row2['lab'],2);?></td>
								   <td style="text-align: right;"><?php echo  number_format($row2['Imaging'],2);?></td>
	    						   <td style="text-align: right;"><?php echo  number_format($row2['surgery'],2);?></td>
							       <td style="text-align: right;"><?php echo  number_format($row2['drugs'],2);?></td>
								   <td style="text-align: right;"><?php echo  number_format($row2['Bed_fee'],2);?></td>
								   <td style="text-align: right;"><?php echo  number_format($row2['other'],2);?></td>
								   
								   
		
	
								   
								    <?php $subtotal2 =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = mysql_query("UPDATE treatment SET total = $subtotal2 where paid ='No' and year='$year' and encounter_id='$encounter_id'") or die(mysql_error());?>
				                     
									
								   <td style="text-align: right;"><b><u>
								   
								   	<?php  echo number_format($subtotal2,2); ?></u></b> </td>
									
								
								   
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
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card2 = $row1['sum(card)'];
				} 
    	     ?>
          	   

		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    	<?php  echo number_format($card2,2); ?> </u> </b> </td>
				
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab2  =	$row2['sum(lab)'];
			} 
    	?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($lab2,2);?></u> </b> </td>	   
    	
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging2 = $row3['sum(Imaging)'];
				}
    	?>
          		  
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			  <?php  echo number_format($Imaging2,2);?></u> </b> </td>
				
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery2 = $row4['sum(surgery)'];
				}
    	?>
      
		  
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			<?php  echo number_format($surgery2,2);?></u> </b> </td>
			
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs2 = $row5['sum(drugs)'];
				}
    	?>
        	 		   
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    	<?php  echo number_format($drugs2,2);?> </u> </b> </td>
				
				
		   
  					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee2  = $row6['sum(Bed_fee)'];
				}
    	?>
          	   
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($Bed_fee2,2);?></u> </b> </td>
		   
    			   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other2 =  $row7['sum(other)'];
				}
    	?>
        
		  
		   <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($other2,2);?></u> </b> </td>
		   

		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where paid='No' and cdate='$new' and year='$year'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				$total =  $row7['sum(total)'];
			}
    	?>

		     <?php $grandtotal =$card2 +$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($grandtotal,2);?></u> </b> </td>
		
    	
						
		



			         
								       </tr>
							    
                             </tfoot>							
                    </tbody>
					
</table>



   <p style="font-size:20px;text-align:right;" > <b>Collected on, <u><?php echo $today;?> </u> </b></p>

	 
 
	  
	<label for="" class="col-sm-2 control-label"><b>Filter data by:</b></label>

	      <form action="<?php echo base_url(); ?>index.php?admin/service_charge/<?php echo $row['class_id'];?>" method="post">    
			<div class="col-sm-2">
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
							<div class="col-sm-3">
				    <select name="section_id" class="form-control" required="required" id="section_selector_holder" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>					
			                  </div> 	
						                 
							<div class="col-sm-3">
							
							
			          	<select name="woreda_id" class="form-control" id="woreda_code" required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
										
			           </div> 						
					 
	
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-users"></i> <?php echo get_phrase('select');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
   
<br><br>
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