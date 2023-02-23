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
	
		<div class="panel panel-primary" data-collapsed="0">
       
			

			
<br>
<!------Per User report------>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class="entypo-print"></i> 
					Generate report based your Kebele and Renewal status(Kebele and Activeness)
                    	</a></b>
						
				</div>	<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
            </div>
			
			<div class="panel-body" >
			
                 <form action="" method="post">              
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('kebele');?>:</label>
                        
						<div class="col-sm-2">
							<select name="user" class="form-control" required="required" id="class_id">
                           <option value=""><?php echo get_phrase('select');?></option>
                       
							     <?php 
								 $kebele = $this->db->get_where('kebele' , array('region_id'=>$region ,'zone_id'=>$zone,'woreda_id'=>$woreda))->result_array();
								foreach($kebele as $row):
									?>
                            		<option value="<?php echo $row['name'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>     
	    		<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('active');?>:</label>
                        
						<div class="col-sm-2">
					
                          	<select name="status" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                             
                            		<option value="active"> Active</option>
                                    <option value="noactive"> Non-active</option>
			                    </select>
						</div> 
					</div> 
			
		
				<br><br><br>


                    <div class="form-group">
					
					 
							<div class="col-sm-offset-3 col-sm-7">
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

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class="entypo-print"></i> 
					Generate report based your Kebele and Indigent (Kebele and Indigent)
                    	</a></b>
						
				</div>	<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
            </div>
			
			<div class="panel-body" >
			
                 <form action="" method="post">              
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('kebele');?>:</label>
                        
						<div class="col-sm-2">
							<select name="user" class="form-control" required="required" id="class_id">
                           <option value=""><?php echo get_phrase('select');?></option>
                       
							     <?php 
								 $kebele = $this->db->get_where('kebele' , array('region_id'=>$region ,'zone_id'=>$zone,'woreda_id'=>$woreda))->result_array();
								foreach($kebele as $row):
									?>
                            		<option value="<?php echo $row['name'];?>">
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
                          </select>
						</div> 
					</div>     
	    		<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('indigent');?>:</label>
                        
						<div class="col-sm-2">
					
                          	<select name="indigent" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                             
                            		<option value="K"> K </option>
                                    <option value="H"> H </option>
			                    </select>
						</div> 
					</div> 
			
		
				<br><br><br>


                    <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-7">
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


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class="entypo-print"></i> 
					Compare your revenue and Service charge expence per Year (revenue vs Service charge )
                    	</a></b>
						
				</div>	<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
            </div>
			
			<div class="panel-body" >
			
                 <form action="" method="post">              
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('fiscal_year');?>:</label>
                        
						<div class="col-sm-2">
						
						<select name="year2" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('year');?></option>
                               <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>
						  
						
						</div> 
					</div>     
	    		<div class="form-group">
						
						<div class="col-sm-2">
					
                          	<select name="income" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                             
                            		<option value="income"> Revenue</option>
                                  
			                    </select>
						</div> 	 
					</div> 
				
			
				<div class="form-group">
						
						<div class="col-sm-2">
					
                          	<select name="expence" class="form-control" required="required">
                              <option value=""><?php echo get_phrase(' select');?></option>
                             
                            		<option value="expence"> Service charge </option>
                                 
			                    </select>
						</div> 
					</div> 
				<br><br><br>


                    <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-7">
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



<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
       
						  	<!------CONTROL TABS START------>
		<div  class="panel-heading" style="background-color:lightblue;">

			<div  class="panel-title">
            	<b><a href="#list" style="font-size:13px;" data-toggle="tab"><i class="entypo-print"></i> 
					Report by your revenue  and Expence per Year (Income or Expence)
                    	</a></b>
						
				</div>	<br>
				<p style='text-align:right;'>  <a href="index.php?admin/dashboard"><i class="fa fa-times"></i>Close </a></p>
            </div>
			
			<div class="panel-body" >
			
                 <form action="" method="post">              
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label"><?php echo get_phrase('fiscal_year');?>:</label>
                        
						<div class="col-sm-3">
						
						<select name="year2" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('year');?></option>
                               <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>
						  
						
						</div> 
					</div>     
	    		<div class="form-group">
						
						<div class="col-sm-3">
					
                          	<select name="inex" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                             
                            		<option value="income"> Revenue</option>
									<option value="expence"> Expence</option>
                                  
			                    </select>
						</div> 	 
					</div> 
				
			
			 
				<br><br><br>


                    <div class="form-group">
					
					 
						<div class="col-sm-offset-3 col-sm-7">
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

     </div>
    </div>
</div>
   <br><br><br><br><br><br><br><br>
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
