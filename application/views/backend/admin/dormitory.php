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

img.profile-user-img {
    margin: 0 auto;
    width: 100px;
    padding: 3px;
    border: 3px solid 
#d2d6de;
}

table, th, tr ,td {
  border: 1px solid blue;
}
</style>
<?php  /*
if(isset($_POST['query'])){ 
  $inputText  =$_POST["query"];
  //$conn = new mysqli('localhost', 'root', 'ok' , 'ims_db');
   $query=" SELECT * FROM `patients` where name like='%$inputText%' or phone='$inputText' or cbhi='$inputText'";
   $result6 =mysql_query($query) or die(mysql_error());
                 if(mysql_num_rows($result)>0){
				  while($row6 = mysql_fetch_array($result6)) {
					 
					 echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row6['name']."</a>";
			    	 }
				 }
           else{
	
	   echo "<p class='list-group-item list-group-item-action border-1' style='color:red;'> No patient found! </p>";
    }			                             
}
*/
?>  

<?php


if(isset($_POST['search'])){ 

	$param2  = trim($_POST["id"]);



//$info  =	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
//foreach($info as $row):
 if($param2!='')
 
 
$results = mysql_query("SELECT * FROM patients  WHERE mrn_id ='$param2' or full_code='$param2' or phone='$param2'");
$no_of_row = mysql_num_rows($results);
 

 if($no_of_row <=0){
	 
	 echo"<br><br><br><br><br><br>";
	 if($param2==''){ echo 'Nothing Entered!';
	 
	 	echo "<meta http-equiv='refresh' content='2; url=?admin/dashboard'>";
	 
	 } 
	 //else{ echo $param2;}
	 else{ echo '';}
				
	echo '<div style="color:red;font-size:17px;" > <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp;The record does\'t exist!</div>';
    echo"<br><br><br>";
                   ?>
	
	   <a href="<?php echo base_url(); ?>index.php?admin/patient_add/<?php echo $param2;?>">
	   <input type="hidden" class="form-control"  name=""  value="<?php echo $param2;?>">
                        <span style="color:green;"><i class="fa  fa-hand-o-right"></i><u> <?php echo get_phrase('new_patient'); ?></u></span>
                    </a>
				<?php
            echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		
		echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";				
		}
 else{
while($row = mysql_fetch_assoc($results)) {
   $mrn_id = $row['mrn_id'];
   $user   = $row['user'];
   $cbhi   = $row['cbhi'];

   ?>
<br><br>


	                   <?php
	
						  $s="SELECT name,role FROM `admin` where admin_id='$user'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>


 
							   
							   
<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<hr>
		<ul class="nav nav-tabs bordered" >

			<li class="active" >
			<img src="<?php echo $this->crud_model->get_image_url('student' , $row['mrn_id']);?>" width="100px" height="90px" class="profile-user-img" border="3px" >&nbsp;&nbsp;&nbsp;<b><u style="font-size:15px;"><?php echo $row['name'];?></u></b><br>
      <button type="button" style="text-align:left; width:100%" class="btn btn-block btn-primary btn-xs"><b> <i class="fa fa-user" ></i> &nbsp;&nbsp;<?php echo get_phrase('personal_information');?>&nbsp;&nbsp;&nbsp;&nbsp;</b></button>
				
			
				</li>
						
		</ul>
		  
    	<!------CONTROL TABS END------>
                 <a href="#" title="update patient profile" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_patient_edit2/<?php echo $row['mrn_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="entypo-pencil"></i>
            	 <?php echo get_phrase('edit_profile');?>  
                </a>
   
					
				      <a href="#" title="use servic calculator" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_calculator/<?php echo $row['mrn_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="fa fa-dollar"></i>
            	 <?php echo get_phrase('Calculator');?> 
                </a>
				
				
				      <a href="<?php echo base_url();?>index.php?admin/report_sheet/<?php echo $row['mrn_id'];?>" title=" view medical_history" class="btn btn-primary pull-right">
          <i class="fa fa-print"></i>
            	 <?php echo get_phrase('report');?> 
                </a>
				    
                          
                    
						
				   <a href="#" title=" view appointment" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_old_case/<?php echo $row['mrn_id'];?>');"
            	class="btn btn-primary pull-right">
                <i class="entypo-user"></i>
            	<?php echo get_phrase('Old case');?> 
                </a> 
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <a href="#" title="start new treatment" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_new_enconter/<?php echo $row['mrn_id'];?>');" 
            	class="btn btn-primary pull-right">
          <i class="entypo-plus-circled"></i>
            	 <?php echo get_phrase('add_new_encounter');?> 
                </a>
	
                <br>
				
			
	
		<div class="tab-content" style="margin-right:420px;">
        	<!----EDITING FORM STARTS-->
			<div class="tab-pane box active"  id="list" style="padding: 5px">
                <div class="box-content">
				
                        <?php echo form_open(base_url() . 'index.php?admin/manage_profile/update_profile_info' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            
							
			
					              <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><u><?php echo get_phrase('cbhi');?> </u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo  $row['cbhi'];?></b></u></a></span>
                                </div>
                            </div>
					<?php $mrn =    $row['mrn_id'];  $cbhi = $row['cbhi'];  $code2 = $row['full_code'];?>
					
					         <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u> <?php echo get_phrase('MRN');?></u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;
									<a href="#"><u><b><?php echo $row['mrn_id'];?></b></u></a></span>
                                </div>
                            </div>
			                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('patient_type');?></u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['indigent'];?></b></u></a></span>
                                </div>
                            </div>
							             
                                <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;<u><a href="#"> <?php echo get_phrase('phone');?></a></u></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b><?php if($row['phone']!=''){ echo $row['phone'];} else { echo ".......................";}?></b></a></span>
                                </div>
                            </div>

                                <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('gender');?>:</u></a></span>
                                </div>
								   <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php if($row['sex']=='F'){ echo 'Female'; } else{ echo 'Male';}?></b></u></a></span>
                                </div>
                            </div>

                     

                             <div class="form-group" style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('date_of_registration');?>:</u></a></span>
                                </div>
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $row['cdate'];?> G.C.</b></u></a></span>
                                </div>
                            </div>

                             <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#"><?php echo get_phrase('region');?></a></u></span>
                                </div>
								<div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<u><a href="#"><?php echo $this->crud_model->get_class_name($row['class_id']);?></a></u></span>
                                </div>
                            </div>

                              <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('zone');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_section_name_by_id($row['section_id'],$row['class_id']);?>(<?php echo $row['section_id'];?>)</u></a></span>
                                </div>
                            </div>

                         <div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
								<i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('woreda_town_organization');?> </u></a></span>
                                </div>
								 <div class="col-sm-6">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda_id'],$row['section_id']);?>(<?php echo $row['woreda_id'];?>)</u></a></span>
                                </div>
                            </div>
							
							    	<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('address_or_kebele');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><b><?php if($row['kebele']!=''){ echo $row['kebele'];} else { echo ".....................";}?></b></a></span>
                                </div>
                            </div>
							
		                 	<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('date_of_birth');?>&nbsp;(YYYY-MM-DD)</u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo  $row['age'];?>&nbsp;&nbsp;E.C</b></u></a></span>
                                </div>
                            </div>
							
					<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><?php echo get_phrase('registered_by');?></u></a></span>
                                </div>
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo $name;?>(<?php echo $role;?>)</b></u></a></span>
                                </div>
                            </div>
							
						<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u> <?php echo get_phrase('agreement');?>:</u></a></span>
                                </div>
					
								 <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php if($row['agreement']!=''){ echo $row['agreement'];} else { echo ".....................";}?></b></u></a></span>
                                </div>
                            </div>
							
							
																 <?php
                        
       				       $ssss= mysql_query("SELECT * FROM patients where mrn_id='$mrn'") or die(mysql_error());
                   
                           while($data = mysql_fetch_array($ssss)){
                           $renewal= $data['renewal']; 
						   $setup_year= $data['setup_year'];
			                }
					   ?>
							
							     <?php $type = $row['agreement'];?>
				     <?php if (trim($type =='CB Health Insurance')){?>
							<div class="form-group"  style="height:14px">
                               
                                <div class="col-sm-5">
								
                                 
									<span><i class="fa  fa-caret-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u> <?php echo get_phrase('renewal_status');?>:</u></a></span>
                                </div>
					              <?php if($renewal==$setup_year){?>
								
								  <div class="col-sm-5">
                                 
									<span><b>:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><u><b><?php echo 'Renewed';?>(<?php echo $row['renewal'];?>)</b></u></a></span>
                                </div>
								
				               <?php }else{?>
                              <div class="col-sm-5">
                                 
									<b>: </b><span style="color: #dd4b39 !important;" id="blinker"> </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color: #dd4b39 !important;"><u><b><?php echo 'Last renewed';?>(<?php echo $row['renewal'];?>),<?php echo 'now expired';?> ! </b></u></a></span>
                                </div>						   
				                    <?php }?>
                            </div>
								<?php }?>
							
                             <br>


                            <div class="form-group" style="background-color:#3c8dbc;">
                                <div class="col-sm-offset-3 col-sm-5" style="background-color:lightblue">
                                   
                                </div>
							</div>
                        </form>
				
                </div>
			</div>
    
            
		</div>
	</div>
</div>

      <?php $type = $row['agreement'];?>
				<?php if (trim($type =='CB Health Insurance')){?>

          	
					

            <!----EDITING FORM ENDS-->         <!----EDITING FORM ENDS-->
			
 <i class="fa  fa-users"></i>  &nbsp;&nbsp;<?php echo get_phrase('family');?> 
 	

           <table class="hoverTable" id="" width="100%">
		   
		   <?php	 $sqlx="SELECT * FROM  patients where cbhi ='$cbhi' and mrn_id !='$mrn'";
                      $resultx = mysql_query($sqlx) or die(mysql_error());
                        if(mysql_num_rows($resultx)>0){ ?>
	             
						
                	<thead>
                		<tr class="header-tr" bgcolor="lightblue" height="30px;">
							<th><div>#</div></th>
                    	
						    <th><div><?php echo get_phrase('MRN');?></div></th>
                    		<th><div><?php echo get_phrase('fname');?></div></th>
                    		<th><div><?php echo get_phrase('encounter');?></div></th>
                    		<th><div><?php echo get_phrase('servics_charge');?></div></th>
							<th><div><?php echo get_phrase('sex');?></div></th>
							<th><div><?php echo get_phrase('CBHI_#code');?></div></th>
                    		<th><div><?php echo get_phrase('registered_by');?></div></th>
						    <th><div><?php echo get_phrase('date_of_registration');?></div></th>
						</tr>
					</thead>
						<?php }?>
                    <tbody>
            <?php 
		  $fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY);
		
              //;extension=php_intl.dll  :- enable this function in  php.ini by removing semi-colon then retart
             ?>
	 
                    	<?php $count = 1;
						
						
						 $sqlx="SELECT * FROM  patients where cbhi ='$cbhi' and mrn_id !='$mrn'";
                      $resultx = mysql_query($sqlx) or die(mysql_error());
                        if(mysql_num_rows($resultx)<1)
                           {
	             
						 echo'<div style="color:red;font-size:14px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No family registered yet!</div>';
	 
                              }
                         while($rows=mysql_fetch_array($resultx)){
                              $mrn_id2 =  $rows['mrn_id'];
							  //$cbhi2 =  $rows['cbhi'];
							 ?> 
							 <?php
							 $res = mysql_query("SELECT sum(total) FROM treatment where mrn_id = $mrn_id2") or die(mysql_error());
    		          while ($rowm = mysql_fetch_array($res)) {
		
			             $totalx  =	$rowm['sum(total)'];
					  }
			       
	
			                $rest = mysql_query("SELECT * FROM treatment where mrn_id = $mrn_id2") or die(mysql_error());
			                $num  =	mysql_num_rows($rest);
			                ?>
							 
                        <tr>
                            <td><?php echo $count++;?></td>
							<td><?php echo $rows['mrn_id'];?></td>
							<td><?php echo $rows['name'];?></td>
							<td><?php echo $num ;?> time(s)</td>
							<td style="text-align: right;" > 
			                 <?php  echo   substr($fmt->formatCurrency($totalx, "ETB"),3); ?> </td>	 
							<td><?php echo $rows['sex'];   ?> </td>
						    <td><?php echo $rows['full_code'];?> </td>
						    <td><?php echo $this->crud_model->get_type_name_by_id('admin',$rows['user']);?></td>
						    <td><?php echo $rows['cdate'];?> </td>
						
                        </tr>
						 <?php }?>
                    </tbody>
                </table>
				
				
				
				
				<?php }?>
				
		
<!--password-->
<div class="row">
	<div class="col-md-12">
	
	
    
    	<!------CONTROL TABS START------>
	<ul class="nav nav-tabs bordered">

			<li class="active">

	  <button type="button" class="btn btn-block btn-primary btn-xs"><b> <i class="fa  fa-suitcase"></i>  &nbsp;&nbsp;<?php echo get_phrase('patient_history');?>  &nbsp;&nbsp;&nbsp;&nbsp;</b></button>
						
						
		</li>
		</ul>
		
		
		
		
		
		
		
		
    	<!------CONTROL TABS END------>
        
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px">
                <div class="box-content padded">
					
                        <?php echo form_open(base_url() . 'index.php?student/manage_profile/change_password' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                            
							
							 <div class="form-group" style="height:14px">
                   
                               <table class="hoverTable" id="table_export">
							   
							   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							       <td  colspan="5"> <b><?php echo get_phrase('patient encounter status');?></b></td> 
								  
							
                               
							   <td  colspan="9"> <b><?php echo get_phrase('payment information by servics type');?></b></td>  
								   
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div> <?php echo get_phrase('MRN');?></div></th>
							
							<th><div> <?php echo get_phrase('CBHI Code');?></div></th>
                         
                            <th><div><?php echo get_phrase('date');?>:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>
							<th><div><?php echo get_phrase('diagnosis');?> </div></th>
							
							
                            <th><div><?php echo get_phrase('card');?></div></th>
							
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('procedure');?></div></th>
							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>
								
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							 
                            <th><div><?php echo get_phrase('options');?></div></th>
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                   $sql="select * from treatment where mrn_id ='$mrn_id' order by encounter_id desc ";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No encouter found!!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){

                            ?>
                        <tr>				
                                 <?php   $encounter_id  =$row2['encounter_id'];?>						
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
							       <td><?php echo $row2['diagniss'];?> </td>
							       <td><?php echo $row2['card'];?></td>
							       <td><?php echo $row2['lab'];?></td>
								   <td><?php echo $row2['Imaging'];?></td>
	    						   <td><?php echo $row2['surgery'];?></td>
							       <td><?php echo $row2['drugs'];?></td>
								   <td><?php echo $row2['Bed_fee'];?></td>
								   <td><?php echo $row2['other'];?></td>
								   
								   <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								   <td style="text-align: right;"> <b><u>
								 
								 <?php   $sql2 = mysql_query("update treatment set total =$subtotal where encounter_id='$encounter_id'"); ?>
									 	  <?php 	$fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
									  <?php echo substr($fmt->formatCurrency($subtotal, "ETB"),3); ?>
								     </u></b> </td>
									  
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  <?php $outcome =  $row2['outcome'];
								        $edited  =  $row2['edited'];  ?>
              
                          										 <?php
                           $current_user = $this->session->userdata('admin_id');
       				       $ss="SELECT * FROM `admin` where admin_id='$current_user'";
                           $re = mysql_query($ss) or die(mysql_error());
                           while($da = mysql_fetch_array($re)){
                           $role = $da['role']; 
			                }
					   ?>
						  <td>
                                
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                                       <i class="fa fa-list"></i>&nbsp;  Action <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu" >
                                        
                                
										 
										     <li>
										  <?php if($outcome ==''){?>
                                        	 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_add_payment/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('add payment');?> 
                                               	</a>
										    <?php }
											   else{?>
										      <a href="#" onclick="">
                                            	<i class="entypo-plus-circled"></i>
													<?php echo get_phrase('add payment');?>(Closed)
                                               	</a>
										      <?php }?>
                                              </li>
											   <li class="divider"></li>	
											       <li>
										  <?php if($outcome ==''){?>
                                        	 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_old_outcome/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-user"></i>
													<?php echo get_phrase('evolution');?> 
                                               	</a>
										    <?php }
											   else{?>
										      <a href="#" onclick="">
                                            	<i class="entypo-user"></i>
													<?php echo get_phrase('evolution');?>(Closed)
                                               	</a>
										      <?php }?>
                                              </li>
												
														
											<?php if($row2['Bed_fee']!='0'){?>
										        <li class="divider"></li>	
														 
														  <li>
														  
											    <?php if($outcome ==''){?>
                                        	    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_returnable/<?php echo $row2['encounter_id'];?>');">
                                            	&nbsp;&nbsp;  <i class="fa fa-dollar"></i>
													<?php echo get_phrase('Returnable');?> 
                                                 	</a>
													  <?php }else{?> 
												<a href="#" onclick="">
                                            	    &nbsp;&nbsp;<i class="fa fa-dollar"></i>
													<?php echo get_phrase('Returnable');?> (Closed)
                                                 	</a>
													  <?php } ?>	
													  
                                        				</li>	
														
													<?php } else {?>
													    <li class="divider"></li>	
														 
														  <li>
														 
												  <?php if($outcome ==''){?>
                                        	    <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_deposite_amount/<?php echo $row2['encounter_id'];?>');">
                                            	&nbsp;&nbsp;  <i class="fa fa-dollar"></i>
													<?php echo get_phrase('deposit_for_bed');?> 
                                                   </a>
												    <?php }else{?> 

                                                  <a href="#" onclick="">
                                            	&nbsp;&nbsp;  <i class="fa fa-dollar"></i>
													<?php echo get_phrase('deposit_for_bed');?> (Closed)
                                                   </a>
                                                           <?php } ?>													
												   
                                        				</li>	
				          		                    <?php } ?>
			                             	 <li class="divider"></li>	
                                        <li>
										     <?php if(($outcome =='') and ($edited =='0')){?>
                                        	  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_edit/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>
                                               	</a>
													 <?php }
													 
													 else if(($role =='Super_admin') and ($outcome !='') and ($edited =='1')){?> 
												  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_encounter_edit/<?php echo $row2['encounter_id'];?>');">
                                            	   <i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>
                                               	  </a>
													 
													 <?php }else{?>
														<a href="#" onclick="">
                                            	<i class="entypo-pencil"></i>
													<?php echo get_phrase('edit');?>(Closed)
                                               	 </a><?php }?>
                                        				</li>
														
					
                                   <?php if($role =='Super_admin'){?>
								 
                                        <li class="divider"></li>
										
                                        <li>
                                                 <?php if($outcome ==''){?>
											<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/encouter/delete/<?php echo $row2['encounter_id'];?>');">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>
                                               	</a>
												 <?php }else{?>  
												 
												 	<a href="#" onclick="">
                                            	<i class="entypo-trash"></i>
													<?php echo get_phrase('delete');?>(Closed)
                                               	</a>
												 <?php }?>
                                        </li>
								   <?php }?>
										
										
										
									
                                    </ul>
                                </div>
                                
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
	<td  colspan="5" style="text-align:right;"><b> #<?php echo get_phrase('subtotal_amount(in ETB)');?>:</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card= $row1['sum(card)'];
    	?>
               <td >     <b> <u><?php echo $row1['sum(card)'];?><?php if($row1['sum(card)']==''){?>.00 <?php }?></u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab  =	$row2['sum(lab)'];
    	?>
           <td>
		   <b> <u><?php echo $row2['sum(lab)'];?><?php if($row2['sum(lab)']==''){?>.00 <?php }?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging= $row3['sum(Imaging)'];
    	?>
           <td>
		  <b> <u> <?php  echo $row3['sum(Imaging)'];?><?php if($row3['sum(Imaging)']==''){?>.00 <?php }?></u> </b> </td>
		   
    	<?php } ?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery= $row4['sum(surgery)'];
    	?>
           <td>
		  <b> <u>  <?php echo $row4['sum(surgery)'];?><?php if($row4['sum(surgery)']==''){?>.00 <?php }?></u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs= $row5['sum(drugs)'];
    	?>
           <td>
		   <b> <u> <?php echo $row5['sum(drugs)'];?><?php if($row5['sum(drugs)']==''){?>.00 <?php }?></u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee = $row6['sum(Bed_fee)'];
    	?>
           <td>
		   <b> <u> <?php  echo $row6['sum(Bed_fee)'];?><?php if($row6['sum(Bed_fee)']==''){?>.00 <?php }?></u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other=  $row7['sum(other)'];
    	?>
           <td>
		  <b> <u> <?php echo $row7['sum(other)'];?> <?php if($row7['sum(other)']==''){?>.00 <?php }?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
		  <?php 	$fmt = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
  
		     <?php $grandtotal =$card +$lab+$Imaging+$surgery+$drugs+$Bed_fee+$other;?>
		    <td style="background-color:gray;text-align: right;" > <b> 
			 <u><?php echo substr($fmt->formatCurrency($grandtotal, "ETB"),3); ?></u> </b> </td>
		   
    	<?php } ?>
						
							         
								       </tr>
							    
                             </tfoot>							
                    </tbody>			
                </table>
								   			
                            </div>              
                </div>
			</div>

            
		</div>
		
	</div>
</div>
 <?php }}//endforeach;?>					 				

				
<?php } ?>
	
	<script>

  
var blink_speed = 500;
var t = setInterval(function () {
    var ele = document.getElementById('blinker');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

</script>		
<?php 
function format($value) {
	if ($value > 1) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}

?>