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
	

				
            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo get_phrase('Add_new_user');?>
                </a> 
                <br><br>
               <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					 
							 <th width="80"><div><?php echo get_phrase('user_id');?></div></th>
                           <!-- <th width="80"><div><?php //echo get_phrase('photo');?></div></th> -->
                            <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('registered_on');?></div></th>
							<th><div><?php echo get_phrase('active');?></div></th>
							<th><div>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_phrase('username');?></div></th>
                         
							
                            <th><div><?php echo get_phrase('phone');?></div></th>
							<th><div><?php echo get_phrase('account_type');?> </div></th>
						     <th><div><?php echo get_phrase('registered_by');?> </div></th>
							 
                            <th><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$i=1;
                                $users	=	$this->db->get('admin' )->result_array();
                                foreach($users as $row): $rol =$row['role'];?>
							
                                  <tr >		  
							     <td ><?php echo $row['admin_id'];?></td>
                              <!--  <td> <img src="<?php //echo $this->crud_model->get_image_url('admin',$row['admin_id']);?>" class="img-circle" width="50" /></td>-->
                                 <td><?php echo $row['name'];?></td>
                                 <td><?php echo $row['date_of_join'];?></td>
							     <td><?php echo $row['active'];?></td>
							     <td><?php echo $row['email'];?></td>
							     
							     <td><?php echo $row['phone'];?></td>
								 <td><?php echo $row['role'];?></td>
								 
								 <?php  $self =$row['registered_by'];?>
								
								<?php if($self=='self'){?>
								<td><?php echo $self =$row['registered_by'];?></td>
								
								<?php } else{?>
								
								<td> <?php echo $this->crud_model->get_type_name_by_id('admin', $row['registered_by']);?> </td>
								
							      <?php  }?> 
								
                                 <?php  $roll  = $row['role'];
							   
							     if(trim($roll=='Super_admin')){ 
							   
							   ?>
							    <td >
								  <button  type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                                      <i class="entypo-user"></i>&nbsp;Root user
                                    </button> </td>
			                    <?php
								 }							
					  
					  
				          	else{


			             ?>

						 <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                                       <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu" >
                                        
										
										     <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_profile/<?php echo $row['admin_id'];?>');">
                                            	<i class="entypo-user"></i>
													<?php echo get_phrase('profile');?>
                                               	</a>
                                        				</li>
                                     
                                        <li class="divider"></li>
										
										  <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_reinitialize/<?php echo $row['admin_id'];?>');">
                                            	<i class="fa fa-wrench"></i>
													 <?php echo get_phrase('Reinitialize_password');?>
                                               	</a>
                                        				</li>
							            <?php 
							           $rol  =$row['role'];
			                  
				
									     if($rol=='Org'){ 
							   
							                     ?>		
														
                                          <li class="divider"></li>
									   
										 <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_link_user/<?php echo $row['admin_id'];?>');">
                                         <i class="fa fa-check-square-o"></i>
										<?php echo get_phrase('link_user');?>
                                         </a>
										</li>
											
					
										 <?php }?>
											
														
                                        <li class="divider"></li>
                                        <!-- user EDITING LINK -->
                                        <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_edit/<?php echo $row['admin_id'];?>');">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>
                                               	</a>
                                        				</li>
                                     
                                        <li class="divider"></li>
										
										        <!-- user enable/disable LINK -->
											
			<?php
			$admin_id  =$row['admin_id'];
			$result8 = mysql_query("SELECT  * FROM admin where admin_id ='$admin_id'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				
				$active = $row8['active'];
			}
			?>
    
	
	                             <?php if($active=='yes'){?>
                                        <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_disable/<?php echo $row['admin_id'];?>');">
                                            	<i class="fa  fa-times"></i>
													&nbsp;<?php echo get_phrase('disable');?>
                                               	</a>
                                        	</li>
								 <?php } else{?>	
											 
                                     
                                        <li class="divider"></li>
											        <!-- user enable/disable LINK -->
                                        <li>
                                        	<a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_enable/<?php echo $row['admin_id'];?>');">
                                            	<i class="fa fa-check-square-o"></i>
													&nbsp;<?php echo get_phrase('enable');?>
                                               	</a>
                                        	</li>
								 <?php } ?>
														
							
                                     
                                        <li class="divider"></li>
										
                                        
                                        <!-- user DELETION LINK -->
                                        <li>
                                        	<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/users/delete/<?php echo $row['admin_id'];?>');">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>
                                               	</a>
                                        </li>
										
										
										
										
									
                                    </ul>
                                </div>
                                
                            </td>
							<?php
						
						     }
						?>
                   								
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
							datatable.fnSetColumnVis(8, false);
							
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

