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


tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>


<hr/>
<?php 
  $user2 = $this->session->userdata('admin_id'); 
     $data		=	$this->db->get_where('admin' , array('admin_id' =>$user2))->result_array();
   foreach($data as $rows):
          $role =$rows["role"];              
     ?>
	 <?php endforeach; ?>
	 	 <?php  if($role=='Head' or $role=='Admin' or $role=='Super_admin'){?>
       <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_zone_add/');" 
	      class="btn btn-primary pull-right">
    	<i class="entypo-plus-circled"></i>
			<?php echo get_phrase('Add new Zone');?>
        </a> 
	   <?php } else{  ?>
		 <a href="javascript:;" onclick="" class="btn btn-primary pull-right">
    	<i class="fa fa-flag"></i>
		Zones Information
    </a> 
	 	 <?php }  ?>
<br><br><br>

<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical" >
			
			
			<?php 		
				$i=1;
				$classes = $this->db->get('class')->result_array();
				foreach ($classes as $row):
			?>
				<li class="<?php if ($row['class_id'] == $class_id) echo 'active';?>" style="background-color:lightblue;">
					<a href="<?php echo base_url();?>index.php?admin/section/<?php echo $row['class_id'];?>" >
					
						
					<?php echo $i++;?>.&nbsp;&nbsp;<?php echo $row['name'];?> 
						
					</a>
				</li>
			<?php endforeach;?>
			</ul>
			
			
			
			<div class="tab-content">

				<div class="tab-pane active">
				    <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
							
									<th><?php echo get_phrase('code');?></th>
									
								<th><?php echo get_phrase('section_name');?></th>
				
							    <th><?php echo get_phrase('No of_woreda/org');?></th>
								<th><?php echo get_phrase('note');?></th>
								<th><?php echo get_phrase('options');?></th>
							</tr>
						</thead>
						<tbody>
						  
						<?php
							$count    = 1;
							$sections = $this->db->get_where('section' , array('class_id' => $class_id))->result_array();
							foreach ($sections as $row):
						  ?>
						      <?php $section_id =$row['section_id'];?>
                              <?php $kfa=mysql_query("SELECT * FROM  parent where section_id ='$section_id'");
                                    $woreda = mysql_num_rows($kfa);	 ?>					  
							<tr>
							<td><?php echo $row['section_id'];?></td>
							
							
								<td style="background-color:lightblue;"><?php echo $row['name'];?></td>
		
							   <td><b><?php  echo $woreda;?></b> districts are made agreement</td>
								<td><?php echo $row['note'];?></td>
							
							
								<td>
									<div class="btn-group">
		                                <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
		                                   <i class="fa fa-list"></i>&nbsp;  Action <span class="caret"></span>
		                                </button>
										
									 <?php  if($role=='Head' or $role=='Admin' or $role=='Super_admin'){?>
		                                 <ul class="dropdown-menu dropdown-primary pull-right" role="menu">
		                                            
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_zone_details/<?php echo $row['zone_id'];?>');">
                                           &nbsp; <i class="fa fa-flag"></i>
                                                <?php echo get_phrase('detials');?>  
                                            </a>
                                                    </li>
											
                                         <li class="divider"></li>
		                                    <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_zone_edit/<?php echo $row['zone_id'];?>');">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo get_phrase('edit');?>
		                                            </a>
		                                       </li>
											   
		                                    <li class="divider"></li>
		                                    
		                                    <!-- DELETION LINK -->
		                                    <li>
		                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/sections/delete/<?php echo $row['zone_id'];?>');">
		                                            <i class="entypo-trash"></i>
		                                                <?php echo get_phrase('delete');?>
		                                            </a>
		                                    </li>
		                                </ul>
										

										<?php } else{?>
										  
									   <ul class="dropdown-menu dropdown-primary pull-right" role="menu">
		                                            
                                    <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_zone_details/<?php echo $row['zone_id'];?>');">
                                           &nbsp; <i class="fa fa-flag"></i>
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