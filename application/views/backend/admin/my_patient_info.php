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
   if(isset($_POST['search'])){ 

	$class_id  = $_POST["class_id"];
	$section_id  =$_POST["section_id"];
	$woreda_id  =trim($_POST["woreda_id"]);
}
	?>


	<hr>	
		<meta http-equiv='refresh' content='120'>		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
			 
									
	    <a href="<?php echo base_url(); ?>index.php?admin/patient_add"  class="btn btn-primary pull-right">
        <i class="entypo-plus-circled"></i> <?php echo get_phrase('add_new_patient'); ?> 
		
      </a>
		
<br><br>
<h3> <i class="fa fa-users"></i><u> <?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?>/<?php echo $this->crud_model->get_section_name_by_id($section_id, $class_id);?>/<?php echo $this->crud_model->get_woreda_name_by_id($woreda_id ,$section_id);?>(<?php echo $woreda_id;?>)</h3></u>
<table class="hoverTable" id="table_export">

    <thead>
        <tr class="header-tr" bgcolor="lightblue" height="30px;">
            <th width="80"><div><?php echo get_phrase('MRN');?></div></th>
      
              <th><div><?php echo get_phrase('fname');?></div></th>
		    
			  <th><div><?php echo get_phrase('zone');?></div></th>
	          <th><div><?php echo get_phrase('woreda');?></div></th>
	    
		  	  <th><div><?php echo get_phrase('sex');?></div></th>
			  <th><div><?php echo get_phrase('phone');?></div></th>
			  <th><div><?php echo get_phrase('CBHI #ID');?></div></th>
	          <th><div><?php echo get_phrase('indigent');?></div></th>
		  	  <th><div><?php echo get_phrase('date');?> </div></th>
	
			  <th><div><?php echo get_phrase('code');?>:</div></th>
			  
			  
			 
			
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
       <?php $current_user = $this->session->userdata('admin_id'); ?>
									
			<?php
			  
               $full_info	=	$this->db->get_where('patients' , array('class_id'=>$class_id, 'section_id'=>$section_id, 'woreda_id'=>$woreda_id, 'user'=>$current_user))->result_array();
                foreach($full_info as $row):?>
			
           <tr>
            <td><?php echo $row['mrn_id'];?></td>

            <td><?php echo ucwords(strtolower($row['name']));?></td>
		
			
		      <td><?php echo $this->crud_model->get_section_name_by_id($section_id, $class_id);?></td>
			

			
			    <td><?php echo $this->crud_model->get_woreda_name_by_id($woreda_id ,$section_id);?></td>
			     
		
			
			     <td><?php echo $row['sex'];?></td>
		              <td><?php if($row['phone']==''){ echo '-';} else { echo $row['phone'];}?></td>
				  
				  <td><?php echo $row['cbhi'];?></td>
			      <td><?php echo $row['indigent'];?></td>
			     <td><?php echo $row['cdate'];?></td>

			      <td><?php echo $row['full_code'];?></td>
              <td> <div class="btn-group">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                        <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        
                        <!-- STUDENT PROFILE LINK -->
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
                                    <?php echo get_phrase('report');?> 
                                </a>
                        </li>
						    <li class="divider"></li>
						
                         <!-- EDITING LINK 
                        <li>
                            <a href="#" onclick="showAjaxModal('<?php //echo base_url();?>index.php?modal/popup/modal_patient_edit/<?php echo $row['mrn_id'];?>');">
                                <i class="entypo-pencil"></i>
                                    <?php //echo get_phrase('edit');?>
                                </a>

                                        </li>
										<li class="divider"></li> -->
										          <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_status/<?php echo $row['mrn_id'];?>');">
                                <i class="fa  fa-usd"></i>
                                    <?php echo get_phrase('encounter_status');?> &nbsp; 
                                </a>
                                        </li>
                      
                        <li class="divider"></li>
                        
                        <!-- DELETION LINK -->
                        <li>
                            <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/student/<?php echo $class_id;?>/delete/<?php echo $row['mrn_id'];?>');">
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
		
					<?php  
		if(!$full_info){
					echo"<br><br>";
				
	echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;No patient Registered with this Information!</div>';


		}
	            ?>
<?php
//echo strtolower("Hello WORLD.");

//echo strtoupper("Hello WORLD!");

    //strtolower() - converts a string to lowercase.
   // lcfirst() - converts the first character of a string to lowercase.
    //ucfirst() - converts the first character of a string to uppercase.
    //ucwords() - converts the first character of each word in a string to uppercase. -->
?> 
   
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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