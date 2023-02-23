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
		<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
	

<?php 
$admin_id		= $this->session->userdata('admin_id');
             
     ?>
<?php
	
	 $s="SELECT name FROM `admin` where admin_id='$admin_id'";
       $ress = mysql_query($s) or die(mysql_error());
        while($rows = mysql_fetch_array($ress)){
        $name = $rows['name']; 
		$role = $rows['role']; 
			      }
					   ?>
				
            <a href="javascript:;" onclick="" 
            	class="btn btn-primary pull-right">
                <i class="entypo-users"></i>
            	<?php echo get_phrase('user_deligations');?>
                </a> 
                <br><br>
               <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					 
							 <th width="80"><div><?php echo get_phrase('user_id');?></div></th>
                         
                            <th><div>&nbsp;<?php echo get_phrase('deligated_user');?></div></th>
                            <th><div>&nbsp;<?php echo get_phrase('region');?></div></th>
							<th><div>&nbsp;<?php echo get_phrase('zone');?></div></th>
							
							
                            <th><div>&nbsp;<?php echo get_phrase('woreda');?></div></th>
							<th><div>&nbsp;<?php echo get_phrase('deligated by');?> </div></th>
						 
							 
                            <th><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$i=1;
                                $users	=	$this->db->get('link_tbl' )->result_array();
                                foreach($users as $row): ?>
							
                                  <tr >		
							 	 <td ><?php echo $row['link_id'];?></td> 
				    
                                 <td><?php echo $this->crud_model->get_type_name_by_id('admin', $row['user_id']);?></td>
			                          
			      <td><?php echo $this->crud_model->get_type_name_by_id('class', $row['region']);?></td>	  
			      <td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?></td>		
			      <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></td>
			     
		
		
						
								  <td><?php echo $this->crud_model->get_type_name_by_id('admin', $row['linked_by']);?></td>
								
								
								
                              

						 <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                                       <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu" >
                            
										
                                        
                                        <!-- user DELETION LINK -->
                                        <li>
                                        	<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/users/terminate/<?php echo $row['user_id'];?>');">
                                            	<i class="fa fa-times"></i>
													<?php echo get_phrase('cancel_deligation');?>
                                               	</a>
                                        </li>
										
										
										
										
									
                                    </ul>
                                </div>
                                
                            </td>
						
                   								
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
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
						"mColumns": [1,2]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
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

