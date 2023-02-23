 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:100%; 
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


tr:nth-child(even) {
  background-color: #f2f2f2;
}


</style>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
                            <?php 
   
                          $user = $this->session->userdata('admin_id'); 	
	  
	                       $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						   } ?>
						 
	  
			   <form action="<?php echo base_url(); ?>index.php?admin/our_client_pdf/<?php echo $woreda;?>" method="post">    	
				<input type="hidden" name="region"  value="<?php echo $region;?>"> 
                <input type="hidden" name="zone"    value="<?php echo  $zone; ?>"> 
				<input type="hidden" name="woreda"  value="<?php echo $woreda;?>"> 
                <input type="hidden" name="woredaName"  value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda,$zone);?>"> 						
			    <button type="submit" class="btn btn-primary pull-right" style="font-weight:bold;" name="print">
				<i class="fa fa-print"></i> PDF</button>      
                    </form>
	 
	    <a href="<?php echo base_url(); ?>index.php?admin/beneficiary_add/"  class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i> <?php echo get_phrase('add_new_beneficiary'); ?> 
		
             </a>
		
              <br><br>

                        <?php
	
						  $s="SELECT name FROM `admin` where admin_id='$admin_id'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>
<h4> <i class="fa fa-users"></i> Beneficiary those who are recorded in <u><?php echo $this->crud_model->get_woreda_name_by_id($woreda,$zone);?></u></h4>
<table class="hoverTable" id="table_export">

    <thead>
        <tr class="header-tr" bgcolor="lightblue" height="30px;">
            <th ><div>#</div></th>
      
              <th><div>&nbsp;<?php echo get_phrase('fname');?></div></th>
		      <th><div>&nbsp;<?php echo get_phrase('relation');?> </div></th>
			  <th><div>&nbsp;<?php echo get_phrase('family_code');?></div></th>
			  

		  	  <th><div>&nbsp;<?php echo get_phrase('zone');?></div></th>
			  <th><div>&nbsp;<?php echo get_phrase('woreda');?></div></th>
			  <th><div>&nbsp;<?php echo get_phrase('sex');?></div></th>
	          
			  
			  
			  <th><div>&nbsp;<?php echo get_phrase('CBHI #ID');?></div></th>
		  	  <th><div>&nbsp;<?php echo get_phrase('indigent');?></div></th>
			  <th><div>&nbsp;<?php echo get_phrase('kebele');?></div></th>
			  <th><div>&nbsp;<?php echo get_phrase('age');?></div></th>
	          
		  	
	
			  <th><div>CBHI #<?php echo get_phrase('code');?>:</div></th>
			  
			  
			 
			
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        
		 
			<?php
			$i=1;
                $sqr=$this->db->get_where('beneficiary' , array('region'=>$region ,'zone'=>$zone,'woreda'=>$woreda))->result_array();
                foreach($sqr as $row):?>
			 
                   <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $row['name'];?></td>
				  
				   <td><?php echo $row['relation'];?></td>
				    
					 <td><?php echo $row['family_code'];?></td>
				
				  
			     <!-- <td><?php //echo $this->crud_model->get_type_name_by_id('class', $row['region']);?></td> -->
			      <td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?></td>
		          <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></td>
				  
			      <td><?php if($row['sex']=='F'){ echo 'Female'; } else{ echo 'Male';}?></td>

				  <td><?php echo $row['cbhi'];?></td>
			      <td><?php echo $row['indigent'];?></td>
				  <td><?php echo $row['kebele'];?></td>
				   <?php 	  
				            $dob = $row['dob']; 
							$today = date("y-m-d");
							$diff = date_diff(date_create($dob),date_create($today));
							$age = $diff->format('%y')-7;
						
							?>
				   <td> <?php echo $age;?> years old </td>
			      <td><?php echo $row['full_code'];?></td>
                  <td> <div class="btn-group">
                   <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                  <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                   </button>
                  <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        
                        <!-- STUDENT PROFILE LINK -->
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_beneficiary_profile/<?php echo $row['beneficiary_id'];?>');">
                                <i class="entypo-user"></i>
                                    <?php echo get_phrase('profile');?>
                                </a>
                             </li>
						 
							 <li class="divider"></li>
										
							<?php $mrn  = $row['mrn_id'];
						
						   $s2= mysql_query("SELECT * FROM patients where mrn_id='$mrn'") or die(mysql_error());
                   
                           while($data2 = mysql_fetch_array($s2)){
                           $renewal= $data2['renewal']; 
						   $setup_year= $data2['setup_year'];
			                }
						 
						 $current_user = $this->session->userdata('admin_id');
       				       $sss="SELECT * FROM  admin where admin_id='$current_user'";
                           $res = mysql_query($sss) or die(mysql_error());
                           while($data = mysql_fetch_array($res)){
                           $role2 = $data['role']; 
			                }
					   ?>
					   
		          <?php $type = $row['agreement'];
			     	if (trim($type =='CB Health Insurance') and ($role2=='Org')){?>
                         <!-- renewal-->
                                        <li>
										
									<?php if($renewal >=$setup_year){?>
                            		<a href="#" style="color:green;" title="renewal status" onclick="#">
                                      <i class="fa fa-check-square-o"></i>
            	                    <?php echo get_phrase('renewed');?>-<?php echo $setup_year;?>
                                       </a> 
									   
									      <?php }else{?>
										  
										  	<a href="#"  style="color:red;" title="renewal status" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_renewal_insurance/<?php echo $row['mrn_id'];?>');">
                                      <i class="fa fa-check-square-o"></i>
            	                    <?php echo get_phrase('renew');?> for <?php echo $setup_year;?>
                                       </a> 
										   <?php }?>
									   
                                        </li>
						               <?php }?>
										
										
										
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_beneficiary_edit/<?php echo $row['beneficiary_id'];?>');">
                                <i class="entypo-pencil"></i>
                                    <?php echo get_phrase('edit');?> Profile
                                </a>

                                        </li>
										<li class="divider"></li> 
										  
                      
					  
					   <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/Renewal/<?php echo $row['beneficiary_id'];?>');">
                                <i class="fa fa-check-square-o"></i>
                                    <?php //echo get_phrase('renewal status');?> Renewal status
                                </a>

                                        </li>
                        <li class="divider"></li>
                        
                        <!-- DELETION LINK -->
                        <li>
                           <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/beneficiary/remove/<?php echo $row['beneficiary_id'];?>');">
                               
                                <i class="entypo-trash"></i>
                                    <?php echo get_phrase('delete');?>
                                </a>
                                        </li>
										    <li class="divider"></li>
                    </ul>
                </div>
                
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
	  
	                          <?php
						     $results = mysql_query("SELECT agreemenrt_type FROM `parent` where section_id='$zone' and class_id='$region' and woreda_id='$woreda'") or die(mysql_error());
                             while($row4 = mysql_fetch_array($results)){
                             $agree = $row4["agreemenrt_type"]; 
						     }
						    ?>
		  <?php if($agree=='Health Insurance'){?>	   
	      <label for="" class="col-sm-2 control-label"><b>Filter data by indigent:</b></label>
	     <form action="<?php echo base_url(); ?>index.php?admin/our_client_pdf_by_indigent/<?php echo $row['indigent'];?>" method="post">    
			<div class="col-sm-2">
			
				<input type="hidden" name="region"  value="<?php echo $region;?>"> 
                <input type="hidden" name="zone"    value="<?php echo  $zone; ?>"> 
				<input type="hidden" name="woreda"  value="<?php echo $woreda;?>"> 
                <input type="hidden" name="woredaName"  value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda,$zone);?>"> 						
				 		<select name="indigent" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                             
                            		<option value="K"> K </option>
                                    <option value="H"> H </option>
			                    </select>					
			                  </div>               
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="print"><i class="fa  fa-hand-o-right"></i> 
			 <?php echo get_phrase('select');?></button> 
             </div>
	 </div>					 
                
              </form>
  
         
                       <form action="<?php echo base_url(); ?>index.php?admin/our_client_pdf_by_kebele/<?php echo $row['kebele'];?>" method="post">    				 
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-2 control-label">Filter data by Kebele:</label>
                        
						<div class="col-sm-2">
				<input type="hidden" name="region"  value="<?php echo $region;?>"> 
                <input type="hidden" name="zone"    value="<?php echo  $zone; ?>"> 
				<input type="hidden" name="woreda"  value="<?php echo $woreda;?>"> 
                <input type="hidden" name="woredaName"  value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda,$zone);?>"> 
					<select name="kebele" class="form-control" required="required">
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
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="print"><i class="fa  fa-hand-o-right"></i> 
			 <?php echo get_phrase('select');?></button> 
             </div>
	             </div>
			
			  </form>
   
            
   

		  <?php }?>
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

