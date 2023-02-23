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
								$years = $this->db->get('year')->result_array();
								//$years=    $this->db->order_by('request_id', 'DESC');
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                                         
                                
								endforeach;
							  ?>
							  
							  
							  
							  
							  
	
<!---------------------------------- Verify payment by quarter --------------------------------------------->
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

				<div  class="panel-title">
            	<b><a href="#list" data-toggle="tab"><i class="fa fa-list"></i> 
					<?php echo get_phrase('verify_payment_organization_payments_quarterly');?> 
                    	</a></b>
						
				</div>
				<br>
				     <a href="#" title="use servic calculator" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_calculator_percentage/');" 
            	class="btn btn-primary pull-right">
            	Calculate Total
      
                </a>
            </div>
			
			<div class="panel-body" >
				
		
				  	<!------  <form action="<?php //echo base_url(); ?>index.php?admin/verfiy_payment/byquarter" method="post"> --->
                      <form action="<?php echo base_url(); ?>index.php?admin/report_per_quarter_preview" method="post">
							
					
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('class');?></label>
                        
						<div class="col-sm-3">
							<select name="class_id" class="form-control" required="required" id="class_id"
									onchange="return get_class_sections2(this.value)">
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
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"> Paid amount in ETB<?php //echo get_phrase('remaining');?></label>
                        
						<div class="col-sm-3">
							 <input type="number" class="form-control"  step="0.01" placeholder="Birr 45,000.00" name="remaining" value="" required> 
	  
						</div> 
						
					</div>
					
					
					
				    		<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('zone');?></label>
		                    <div class="col-sm-3">
		                        <select name="section_id" class="form-control" id="section_selector_holder2" 
								
								required="required" onchange="return get_zone_woredas2(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
				<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('quarter');?></label>
                        
						<div class="col-sm-3">
								<select name="qt" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
					    <option value="1"><?php echo get_phrase('First Quarter');?>[ሐምሌ,ነሐሴ,ጳጉሜ,መስከረም]</option>
						<option value="2"><?php echo get_phrase('Second Quarter');?>[ጥቅምት,ሕዳር,ታሕሣስ]</option>
						<option value="3"><?php echo get_phrase('Third Quarter');?>[ጥር,የካቲት,መጋቢት]</option>
						<option value="4"><?php echo get_phrase('Fourth Quarter');?>[ሚያዚያ,ግንቦት,ሰኔ]</option>
						
						
					    <!--  where date like %-1-% and %-2-% and %-3-%
							  where date like %-4-% and %-5-% and %-6-%
							  where date like %-7-% and %-8-% and %-9-%
							  where date like %-10-% and %-11-% and %-12-%    -->
                          </select>
						</div> 
					</div>
					
								<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('woreda');?></label>
                        
						<div class="col-sm-3">
							<select name="woreda_id" class="form-control" id="woreda_code2"  required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('year');?></label>
                        
								<div class="col-sm-3">
							<select name="year" class="form-control" required="required" id="class_id">
                              <option value=""><?php echo get_phrase('select');?></option>
                               <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>
						</div>
						</div>

			 <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" style="font-weight:bold;" name="search" class="btn btn-primary pull-right"> 
					<i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('summary_preview');?></button>
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
</div>
						  
							  
							  
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" data-toggle="tab"><i class="fa fa-list"></i> 
					<?php echo get_phrase('verify_payment_organization_payments_monthly');?> 
                    	</a></b>
						
				</div>
				<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
				
            </div>
			
			<div class="panel-body" >
			
                 <form action="<?php echo base_url(); ?>index.php?admin/report_per_month_preview" method="post">              

	
					  <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('class');?>:</label>
                        
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
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"> Paid amount in ETB <?php //echo get_phrase('remaining');?></label>
                        
						<div class="col-sm-3">
							 <input type="number" class="form-control" placeholder="Birr 15,000.00" name="remaining" value="" required/> 
	  
						</div> 
						
					</div>
		 
	
				  	          
		<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('zone');?>:</label>
		                    <div class="col-sm-3">
		                        <select name="section_id" class="form-control" id="section_selector_holder" 
								
								required="required" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>
			                </div>
					</div>
					
			
			
			<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('Month');?>:</label>
                        
						<div class="col-sm-3">
								<select name="mm" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                          	<?php
						  
							   $mm=array("መስከረም","ጥቅምት","ሕዳር","ታሕሣስ","ጥር","የካቲት","መጋቢት","ሚያዚያ","ግንቦት","ሰኔ","ሐምሌ","ነሐሴ","ጳጉሜ");
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
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('Woreda/Town/Organization');?>:</label>
                        
						<div class="col-sm-3">
							<select name="woreda_id" class="form-control" id="woreda_code"  required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
						</div> 
					</div>
				
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('year');?>:</label>
                        
								<div class="col-sm-3">
							<select name="yyyy" class="form-control" data-validate="required"  
								required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                               <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>
						</div>
						</div>
                    <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" style="font-weight:bold;" name="search" class="btn btn-primary pull-right"> 
					<i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('summary_preview');?></button>
						</div>
					</div>
                <?php //echo form_close();?>
			
			  </form>
   
            </div>
        </div>
    </div>
</div>





<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
/////////////// by  month /////////////////////
	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

/////////////// by  quarter/////////////////////
function get_class_sections2(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder2').html(response);
            }
        });

    }
//////////////////////////////////////////////////////	
</script>


<script type="text/javascript">
/////////////// by  month //////////////////////////////////////
	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }
/////////////// by quarter /////////////////////////////////////	
	function get_zone_woredas2(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code2').html(response);
            }
        });

    }
///////////////////////////////////////////////////////////////////////	
</script>