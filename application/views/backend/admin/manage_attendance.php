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
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}




	</style>

<?php
$Today = date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
//echo $new;
?>

<hr />
<<a href="" 

	class="btn btn-primary pull-right">
    	<i class=" fa  fa-calendar"></i>
			<?php echo $new;?>
</a> 
<br><br><br>


<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical" >
			
			
			<?php 
			
		
				
				


				$classes = $this->db->get('class')->result_array();
				foreach ($classes as $row):
				$x= $row['class_id'];
			?>
				<li class="<?php if ($row['class_id'] == $class_id) echo 'active';?>"   >
					<a href="<?php echo base_url();?>index.php?admin/manage_attendance/<?php echo $row['class_id'];?>"   >
               <?php echo $x;?>. 
						
					 	 <?php echo $row['name'];?> <?php //echo get_phrase('class');?>
						
					</a> 	
				</li>
			<?php endforeach;?>
			</ul>
			
			<div class="tab-content">

				<div class="tab-pane active">
			
				    <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
								<th>#</th>
								
						
								 <th><?php // echo get_phrase('nick_name');?>Competency&nbsp;&nbsp;&nbsp;&nbsp;</th>
								 <th><?php// echo get_phrase('section_name');?>Dept & Level&nbsp;&nbsp;&nbsp;&nbsp;</th>
								  <th><?php// echo get_phrase('section_name');?>Instructor&nbsp;&nbsp;&nbsp;&nbsp;</th>
							
							    <th><?php //echo get_phrase('teacher');?> Start date&nbsp;&nbsp;&nbsp;&nbsp;</th>
								<th><?php //echo get_phrase('teacher');?> End date&nbsp;&nbsp;&nbsp;&nbsp;</th>
						
								<th><?php //echo get_phrase('teacher');?> Status&nbsp;&nbsp;</th>
								<th><?php echo get_phrase('options');?></th>
							</tr>
						</thead>
						<tbody>


						<?php
						  
							$count    = 1;
							//$assign_cours = $this->db->get_where('assign_course', array('class_id' =>$class_id))->result_array();
							$assign_cours = $this->db->get_where('assign_course')->result_array();
							foreach ($assign_cours as $row):
						?>
							<tr>
								<td><?php echo $count++;?></td>
									
							
								
		                            <td><?php echo $row['course'];?></td>
								    <td width="20%" ><?php echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?>&nbsp;&nbsp;<b>(<?php echo $row['level'];?>)</b></td>
							

								
								<td><?php echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></td>
                           
							
								
								<td><?php echo $row['start_date'];?> </td>
								
								<td><?php echo $row['end_date'];?>-</td>
								<td><?php echo $row['status'];?></td>
							
								
								
								<td>
									<div class="btn-group">
		                                <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
		                                    Action <span class="caret"></span>
		                                </button>
		                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
		                                    
		                                    <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/assignment_edit/<?php echo $row['assign_course_id'];?>');">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo get_phrase('edit');?>
		                                            </a>
		                                                </li>
		                                    <li class="divider"></li>
											
											     <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/grade_submit/<?php echo $row['assign_course_id'];?>');">
		                                            <i class="fa fa-user"></i>
		                                                <?php //echo get_phrase('edit');?> &nbsp;Submit course
		                                            </a>
		                                                </li>
		                                    <li class="divider"></li>
											
		                                    
		                                    <!-- DELETION LINK -->
		                                    <li>
		                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/sections/delete/<?php echo $row['section_id'];?>');">
		                                            <i class="entypo-trash"></i>
		                                                <?php echo get_phrase('delete');?>
		                                            </a>
		                                    </li>
		                                </ul>
		                            </div>
								</td>
							</tr>
						<?php endforeach;?>
							
						</tbody>
					</table>

				</div>

			</div>
			
		</div>	
	
	</div>
</div>
<br><b><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
							
							this.fnPrint(true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									 datatable.fnSetColumnVis(7, true);
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