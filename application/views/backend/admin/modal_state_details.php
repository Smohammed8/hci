<?php 
$edit_data		=	$this->db->get_where('class' , array('class_id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>

<div class="profile-env">
	
                 <?php
					   
 	                   $tf = mysql_query("SELECT * FROM `section` where class_id ='$param2'");
					   
                                    $number = mysql_num_rows($tf);
									
					  $w = mysql_query("SELECT * FROM `woreda` where class_id ='$param2'");
					   
                                    $num = mysql_num_rows($w);
          	  ?>
                 
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="">
            		<br>
					
                <table class="table table-striped" border="0px;" style="font-weight:bold;">
                   <fieldset  >
					<legend style="padding:3px; border:#4e95f4 2px solid;"> <?php echo $row['name'];?> Information </legend>
                    
					
					
					
		
                    <tr>
                        <td>Code:</td>
                        <td><b><?php echo $row['class_id'];?></b></td>
                    </tr>
                 
					
					
					
					
                    <tr>
                        <td>Name:</td>
                        <td><b><?php echo $row['name'];?></b></td>
                    </tr>
            
					
			
					
                    <tr>
                        <td>No of Zone:</td>
                        <td><b><?php echo $number;?></b></td>
                    </tr>
          
					
                  <tr>
                        <td>No of Woreda:</td>
                        <td><b><?php echo   $num  ;?></b></td>
                    </tr>
                   
                    <tr>
                        <td>Registered by:</td>
                        <td><b><?php echo 'Admin';?></b>
                        </td>
                    </tr>
                   
					
                  </fieldset> 
                </table> 
				
			</div>
		</div>	 	
	</section>
	
	
	
</div>


<?php endforeach;?>