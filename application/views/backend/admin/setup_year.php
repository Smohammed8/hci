<hr/>
<?php 
	$active_sms_service = $this->db->get_where('settings' , array('type' => 'active_sms_service'))->row()->description;
?>
				
		
	                          <?php 
   
                          $user = $this->session->userdata('admin_id'); 	
	  
	                       $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						   } ?>
<div class="row">
	<div class="col-md-12">
	
		<div class="tabs-vertical-env">
		
			<ul class="nav tabs-vertical">
			<li class="active">
			<a href="#b-profile" data-toggle="tab">
			<i class="fa  fa-caret-right"></i>  Type of health organization</a></li>
				<li>
					<a href="#v-home" data-toggle="tab">
						<i class="fa  fa-caret-right"></i>  HMIS  Data:
						
					</a>
				</li>
				
				
				  <li>
					<a href="#year" data-toggle="tab">
					<i class="fa  fa-caret-right"></i> Setup  year
					
					</a>
				</li>
					 
			</ul>
		
			
			
			<div class="tab-content">

                               <?php
                     $facility=	$this->db->get('facility')->result_array();
                                foreach($facility as $row1):?>
				<div class="tab-pane active" id="b-profile">

					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update1/'.$row1['Facility_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo get_phrase('facility type');?></label>
                        <div class="col-sm-5">
						
	                           <input type="text" readonly class="form-control" name="type"  value="<?php echo $row1['type'];?>">
							   
				
						</div> 
					</div>
					
					      <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('Health Organiztion name');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" readonly class="form-control" name="name"  value="<?php echo $row1['name'];?>">
	                        </div>
	                    </div>
						
						      <div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('facility catchment population');?></label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" readonly name="" value="<?php echo $row1['cachement'];?>">
	                        </div>
	                    </div>
						
						
			
					<div class="form-group">
						<label class="col-sm-3 control-label"><?php echo get_phrase('ownership');?></label>
                        <div class="col-sm-5">
						 <input type="text" class="form-control" readonly name="ownership" value="<?php echo $row1['ownership'];?>">
					
						
						</div> 
					</div>
					
						
					<!--	
					<div class="form-group">
	                    <div class="col-sm-offset-3 col-sm-5">
	                        <button type="submit" class="btn btn-primary pull-right"><?php //echo get_phrase('save');?></button>
	                    </div>
	                </div> -->
	            <?php echo form_close();?>
				          
				</div> 
				
	
			    
				<div class="tab-pane" id="v-home">
					<?php echo form_open(base_url() . 'index.php?admin/sms_settings/update2/'.$row1['Facility_id'] ,array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php //echo get_phrase('clickatell_username');?> Male-Total #of visit(HMIS):</label>
	                      	<div class="col-sm-5">
	                          	<input type="text" class="form-control" readonly id="tmale" name="tmale" value="<?php echo $row1['tmale'];?>"  required/>
	                      	</div>
	                  	</div>
	                  	<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php //echo get_phrase('clickatell_password');?>Female-Total #of visit(HMIS):</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" readonly id="tfemale" name="tfemale" value="<?php echo $row1['tfemale'];?>"  required/>
	                        </div>
	                    </div>
						
						
						 	<div class="form-group">
	                        <label  class="col-sm-3 control-label"><?php //echo get_phrase('clickatell_password');?>#Total Cachment:</label>
	                        <div class="col-sm-5">
	                            <input type="text" class="form-control" readonly id="cachement" name="" value="<?php echo $row1['cachement'];?>">
	                        </div>
	                    </div>
	                    
	                  	<!--	
					<div class="form-group">
	                    <div class="col-sm-offset-3 col-sm-5">
	                        <button type="submit" class="btn btn-primary pull-right"><?php //echo get_phrase('save');?></button>
	                    </div>
	                </div> -->
						
	                <?php echo form_close();?>
					 <?php endforeach;?>
				</div>
				
	<?php  if(isset($_POST['set'])){ 
	
    $year  =$_POST["setup_year"];
	} 
	
	     $sql24 = mysql_query("update patients set setup_year ='$year' WHERE woreda_id='$woreda' and class_id='$region' and section_id ='$zone'") or die(mysql_error());  
            
			if($sql24==true){
           // $this->session->set_flashdata('flash_message' , get_phrase('data_updated'));
			}
     
	     ?>
			
							   
							   <?php 
						    $re = mysql_query("SELECT setup_year, mrn_id FROM patients WHERE woreda_id='$woreda' and class_id='$region' and section_id='$zone' LIMIT 1") or die(mysql_error());
                          
                            while($ro = mysql_fetch_array($re)){
                             $setup_year    = $ro["setup_year"]; 
						   							 
							 }	
							  ?>
				<div class="tab-pane" id="year">
				 <?php echo form_open(base_url().'index.php?admin/set_up_year/setup/'.$ro["mrn_id"], array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
						
							
						<div class="form-group">
	                      <label  class="col-sm-3 control-label"><?php echo get_phrase('set_expiry_year');?></label>
	                      	<div class="col-sm-5">
	                          	<input type="number" class="form-control"  value="<?php echo $setup_year;?>" placeholder="Set renewal year" name="setup_year" required>
	                      	</div> 
	                  	</div>
				
	                  	
						
	                    <div class="form-group">
		                    <div class="col-sm-offset-3 col-sm-5">
		                        <button type="submit" name="set" class="btn btn-primary pull-right"><?php echo get_phrase('save');?></button>
		                    </div>
		                </div>
	                <?php echo form_close();?>
					
				</div>
				
							
			
			</div>
			
		</div>	
	
	</div>
</div>

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery-1.4.2.min.js'></script>
<script>
$(function() {
    $("#tfemale, #tmale").on("keydown keyup", cachement);
	function sum() {
	$("#cachement").val(Number($("#tfemale").val()) + Number($("#tmale").val()));
	//$("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
	}
});
</script>
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 3) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }
  </script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>