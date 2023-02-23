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
<hr>
<?php 
    $user2 = $this->session->userdata('admin_id'); 
     $data		=	$this->db->get_where('admin' , array('admin_id' =>$user2))->result_array();
   foreach($data as $rows):
          $role = $rows["role"]; 
?>		  
   <?php endforeach; ?>
	<?php  if($role=='Head' or $role=='Admin' or $role=='Super_admin'){?>
	 <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_woreda_add/');" 
	class="btn btn-primary pull-right">
    	<i class="entypo-plus-circled"></i>
			<?php echo get_phrase('Add new Woreda');?>
     </a> 
	 
	 <?php } else{  ?>
	   <a href="javascript:;" onclick="" class="btn btn-primary pull-right">
    	<i class="fa fa-flag"></i>
			Clients Information
    </a> 
	 	 <?php }  ?>
		 

<br><br><br>

<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical" >
			
			<?php 
				$zones = $this->db->get('section')->result_array();
				foreach($zones as $row):
			?>
				<li class="<?php if ($row['section_id'] == $section_id) echo 'active'?>" style="background-color:lightblue;">
					<a href="<?php echo base_url();?>index.php?admin/woreda/<?php echo $row['section_id'];?>" >
					 <i class="fa  fa-caret-right"></i> 
						
					<?php echo $row['name'];?> (<?php echo $row['section_id'];?> )	
						
					</a>
				</li>
			<?php endforeach;?>
			</ul>
			
			<div class="tab-content">

				<div class="tab-pane active">
				    <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
						
								<th><?php echo get_phrase('code');?> </th>
								<th><?php echo get_phrase('woreda');?> </th>
							
								<th><?php echo get_phrase('zone_code');?></th>
							
								<th><?php echo get_phrase('agreement');?></th>
								<th><?php echo get_phrase('options');?></th>
							</tr>
						</thead>

						<?php
							//$count    = 1;
							$parent = $this->db->get_where('parent' , array('section_id' =>$section_id))->result_array();
							foreach ($parent as $row):
						?>
							<tr> 
						
								<td><?php echo $row['woreda_id'];?></td>
								<td><?php echo $row['name'];?></td>
							    <td><?php echo $row['section_id'];?> </td>
								
									<td><?php echo $row['agreemenrt_type'];?></td>
							
								<td>
									<div class="btn-group">
		                                <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
		                                    Action <span class="caret"></span>
		                                </button>
										
												<?php  if($role=='Head' or $role=='Admin' or $role=='Super_admin'){?>
												
												  <ul class="dropdown-menu dropdown-primary pull-right" role="menu">
		                                               
                                    <li>
									
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_woreda_details/<?php echo $row['district_id'];?>');">
                                            <i class="entypo-users"></i>
                                                <?php echo get_phrase('detials');?> 
                                            </a>
                                                    </li>
                                    <li class="divider"></li>

		                                    <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_woreda_edit/<?php echo $row['district_id'];?>');">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo get_phrase('edit');?>
		                                            </a>
		                                       </li>
											   
		                                    <li class="divider"></li>
		                                    
		                                    <!-- DELETION LINK -->
		                                    <li>
		                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/woredas/delete/<?php echo $row['district_id'];?>');">
		                                            <i class="entypo-trash"></i>
		                                                <?php echo get_phrase('delete');?>
		                                            </a>
		                                    </li>
		                                </ul>
		                         
										<?php } else{?>
										
										
										       <ul class="dropdown-menu dropdown-primary pull-right" role="menu">
		                                            
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_woreda_details/<?php echo $row['district_id'];?>');">
                                            <i class="entypo-users"></i>
                                                <?php echo get_phrase('detials');?> 
                                            </a>
                                                    </li>
											
                                         <li class="divider"></li>
		                                    <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo get_phrase('edit');?>
		                                            </a>
		                                       </li>
											   
		                                    <li class="divider"></li>
		                                    
		                                 
		                                </ul>
										
										
		                              
										<?php }?>	
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
<br><b><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>