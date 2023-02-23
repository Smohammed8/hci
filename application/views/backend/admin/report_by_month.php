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
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                                         
                                
								endforeach;
							  ?>
<div class="row">

	<div class="col-md-12">
	<h4> <b>What is a Report?</b></h4>
       <p>A report is a meaningful, well-defined, and summarized presentation of information. Usually, 
	   the routine activities are automated and data summarized into a decision-supporting "Reports". 
	   Reports represent usual messy data into charts, graphs, and other forms of graphical representations.</p>
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" data-toggle="tab"><i class="entypo-print"></i> 
					<?php echo get_phrase('Generate Monghly Report');?> 
                    	</a></b>
						
				</div>	<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
            </div>
			
			<div class="panel-body" >
			
                 <form action="<?php echo base_url(); ?>index.php?admin/report_per_month" method="post">              

	
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
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('Agreement');?>:</label>
                        
						<div class="col-sm-3">
							<select name="agreement" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
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
							<select name="yyyy" class="form-control" data-validate="required" id="class_id" 
								required="required">
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
							<i class="entypo-print"></i> <?php echo get_phrase('create_report');?></button>
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