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
	                        $user = $this->session->userdata('admin_id'); 
						   $s = "SELECT * FROM `admin` where admin_id ='$user'";
                           $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
						   $role = $rows['role']; 	
						   }
					    	 $admin_id = $this->session->userdata('admin_id'); 
	                        $re = mysql_query("SELECT  * FROM link_tbl where user_id ='$admin_id'") or die(mysql_error());;
                            while($row3 = mysql_fetch_array($re)){
                             $region =  $row3['region']; 
						     $zone   =   $row3['zone']; 
							 $woreda = $row3['woreda']; 
						      } 
							?>
							
				                <?php    
				         
						    if($role =='Org'){  ?>
               <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_kebele_org_add/');" 
                class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
                <?php echo get_phrase('add_your_kebele');?>
                </a> 
				<?php } else{ ?>
			    <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_kebele_add/');" 
                class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
                <?php echo get_phrase('add_new_kebele');?>
                </a> 
					
				<?php }?>
				
                <br><br>
				
				
             <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="gray" height="30px;">
                      
							 <th><div><?php echo get_phrase('kebele_code');?></div></th>
                             <th><div><?php echo get_phrase('kebele');?></div></th>
							 <th><div><?php echo get_phrase('woreda');?> </div></th>
							 <th><div><?php echo get_phrase('zone');?> </div></th>
							  <th><div><?php echo get_phrase('region');?> </div></th>
							
                       
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
						   
							     $kebele = $this->db->get_where('kebele' , array('region_id'=>$region ,'zone_id'=>$zone, 'woreda_id'=>$woreda))->result_array();
							   					   
						   foreach($kebele as $row):?>
                            <tr>
							<td><?php echo $row['kebele_code'];?> </td>
                            <td style="background-color:lightblue;"><?php echo $row['name'];?></td>
				           <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$zone);?></td>
				          <td><?php echo $this->crud_model->get_section_name_by_id($row['zone_id'],$region);?></td>
						   <td><?php echo $this->crud_model->get_type_name_by_id('class',$row['region_id']);?></td>

                        	<td>
									<div class="btn-group">
		                                <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
		                                    Action <span class="caret"></span>
		                                </button>
		                                <ul class="dropdown-menu dropdown-primary pull-right" role="menu">
		                                               <!-- STUDENTS IN THE DORM -->
                               

                                      <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_kebele_details/<?php echo $row['kebele_id'];?>');">
		                                            <i class="entypo-users"></i>
		                                                <?php echo get_phrase('details');?>
		                                            </a>
		                                       </li>
											   
		                                    <li class="divider"></li>
		                                    <!-- EDITING LINK -->
		                                    <li>
											<?php  if($role =='Org'){ ?>
		                                           <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_kebele_org_edit/<?php echo $row['kebele_id'];?>');">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo get_phrase('edit');?> 
		                                            </a>
											<?php } else{ ?>
												
												   <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_kebele_edit/<?php echo $row['kebele_id'];?>');">
		                                            <i class="entypo-pencil"></i>
		                                                <?php echo get_phrase('edit');?>
		                                            </a>
												
										       <?php }?>
		                                       </li>
											   
		                                    <li class="divider"></li>
		                                    
		                                    <!-- DELETION LINK -->
		                                    <li>
		                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/manege_kebele/delete/<?php echo $row['kebele_id'];?>');">
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

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>






