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
<?php
$new  = date('Y-m-d');
$day  = date('y:m:d');
$today = date('l, F d, Y',strtotime($day));
?>
	<hr>	
		<!--<meta http-equiv='refresh' content='120'>	-->	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
			 

			<!-----all_patient_info_print.php 
       <a href="<?php //echo base_url(); ?>index.php?admin/all_patients_print_pdf/"  class="btn btn-primary pull-right">
        <i class="entypo-print"></i> PDF <?php //echo get_phrase('add_new_patient'); ?> 
		
             </a> --->
			 
	    <a href="<?php echo base_url(); ?>index.php?admin/patient_add/"  class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i> <?php echo get_phrase('add_new_patient'); ?> 
		
             </a>
		
<br><br>
<h3> <i class="fa fa-flag"></i> <u><?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?> Regional State (Today registration)</u></h3>  


<table class="hoverTable" id="table_export">

    <thead>
        <tr class="header-tr" bgcolor="lightblue" height="30px;">
		  <th>#</th>
            <th width="80"><div><center><?php echo get_phrase('MRN');?></center></div></th>
      
              <th><div><?php echo get_phrase('fname');?></div></th>
		     <!-- <th><div><?php //echo get_phrase('class');?> </div></th> -->
			  <th><div><?php echo get_phrase('zone');?></div></th>
	          <th><div><?php echo get_phrase('woreda');?></div></th>
	      
		  	  <th><div><?php echo get_phrase('sex');?></div></th>
			  <th><div><center><?php echo get_phrase('phone');?></center></div></th>
	
	          <th><div><?php echo get_phrase('indigent');?></div></th>
			  <th><div><?php echo get_phrase('code');?></div></th>
			  
			  
			 
			
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        
		 
			<?php
			$i=0;
			 
                $patients	=	$this->db->get_where('patients' , array('class_id'=>$class_id, 'cdate'=>$today))->result_array();
                foreach($patients as $row):
				$i++;
				?>
				
			  <?php	$section_id = $row['section_id'];?>
           <tr>
		    <td><?php echo $i;?></td>
            <td width="5%"><?php echo $row['mrn_id'];?></td>

            <td><?php echo ucwords(strtolower($row['name']));?></td>
			
		  <!--  <td><?php //echo $this->crud_model->get_type_name_by_id('class',$row['class_id']);?></td>-->
			
			 
			<td><?php echo $this->crud_model->get_section_name_by_id($row['section_id'],$row['class_id']);?></td>
			

			
			    <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$row['section_id']);?></td>
			     
			     <td><?php echo $row['sex'];?></td>
		          <td><?php  if($row['phone']!='') {echo $row['phone'];}else {echo '-';}?></td>
				  
		
			      <td><?php echo $row['indigent'];?></td>
			  
		    
			      <td><?php echo $row['full_code'];?></td>
              <td> <div class="btn-group">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                        <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        
                        <!--PROFILE LINK -->
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_patient_profile/<?php echo $row['mrn_id'];?>');">
                                <i class="entypo-user"></i>
                                    <?php echo get_phrase('profile');?>
                                </a>
                               </li>
							
							   
							<li class="divider"></li>
							
						     <li>
                            <a href="<?php echo base_url();?>index.php?admin/report_sheet/<?php echo $row['mrn_id'];?>">
                                <i class="entypo-print"></i>
                                    <?php echo get_phrase('individual_report');?> 
                                </a>
                        </li>
						    <li class="divider"></li>
						
                
										          <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_status/<?php echo $row['mrn_id'];?>');">
                                <i class="fa  fa-usd"></i>
                                    <?php echo get_phrase('encounter_status');?> &nbsp; 
                                </a>
                                        </li>
                      
                        <li class="divider"></li>
                        
						 <?php
                     $current_user = $this->session->userdata('admin_id');
       
	   
						  $ss="SELECT * FROM `admin` where admin_id='$current_user'";
                          $re = mysql_query($ss) or die(mysql_error());
                           while($ro = mysql_fetch_array($re)){
                           $role = $ro['role']; 
			                }
					   ?>
					    <?php if($role=='Super_admin' ){?>
                        <!-- DELETION LINK -->
                        <li>
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/delete/<?php echo $row['mrn_id'];?>');">
                                <i class="entypo-trash"></i>
                                    <?php echo get_phrase('delete');?>
                                </a>
                            </li>
						<?php } else{?>
						      <li>
                            <a href="#" onclick="Access denied!">
                                <i class="entypo-trash"></i>
                                    <?php echo get_phrase('delete');?>
                                </a>
                            </li>
						<?php }?>
                    </ul>
                </div>
                
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>


	<label for="" class="col-sm-2 control-label"><b>Filter data by:</b></label>

	  
		  <?php //echo form_open(base_url().'index.php?admin/patient_info/filter/' . $row['class_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
             <form action="<?php echo base_url(); ?>index.php?admin/patient_info/<?php echo $row['class_id'];?>" method="post">    
			<div class="col-sm-2">
				 		<select name="class_id" class="form-control" required="required" id="class_id"  onchange="return get_class_sections(this.value)">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <?php 
								$classes = $this->db->get('class')->result_array();
								foreach($classes as $row):
									?>
                            		<option value="<?php echo $row['class_id'];?>"
									
									<?php if ($row['class_id'] ==$class_id)
                                				echo 'selected';?>>
											
											<?php echo $row['name'];?>
                                            </option>
                                <?php
								endforeach;
							  ?>
			                       
													
			                    </select>					
			                  </div>               
							<div class="col-sm-3">
				    <select name="section_id" class="form-control" id="section_selector_holder" 
								
								required="required" onchange="return get_zone_woredas(this.value)">
		                            <option value=""><?php echo get_phrase('select_region_first');?></option>
			                        
			                    </select>					
			                  </div> 	
						                 
							<div class="col-sm-3">
							
							
			          	<select name="woreda_id" class="form-control" id="woreda_code"  required="required">
                            <option value=""><?php echo get_phrase('select_zone_first');?></option>
                          </select>
										
			           </div> 						
					 
	
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-users"></i> <?php echo get_phrase('select');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
						"mColumns": [0,1, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0,1, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(12, false);
							
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
<?php
//echo strtolower("Hello WORLD.");

//echo strtoupper("Hello WORLD!");

    //strtolower() - converts a string to lowercase.
   // lcfirst() - converts the first character of a string to lowercase.
    //ucfirst() - converts the first character of a string to uppercase.
    //ucwords(strtolower() ) - converts the first character of each word in a string to uppercase. -->
?>