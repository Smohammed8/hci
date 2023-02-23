<?php 	$re25 = mysql_query("SELECT year FROM fiscal_year");
    		    while ($ross = mysql_fetch_array($re25)) {
				$year  = $ross['year'];
				$backyear  = $year-1;
				}
?>
<?php
$Today = date('y:m:d');
//$new = date('l, F d, Y',strtotime($Today));

    $new  = date('Y-m-d');
	$new2 = date('Y-m-d',strtotime($new. ' + 30 days'));

    
?>

                               <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year2 = $row2['max_year'];
                               $min_year = $row2['min_year'];   
                                
								endforeach;
							  ?>
<?php   $current_user = $this->session->userdata('admin_id'); ?>
<?php 
$edit_data		=	$this->db->get_where('patients',array('mrn_id' =>$param2) )->result_array();
foreach($edit_data as $row):
?>

<div class="row" >
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading" style="background-color:#ccdbdc;">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('create_new_encounter');?>
            	</div>
            </div>
		
			<div class="panel-body" style="background-color:#ccdbdc;">
				
               
		         
					 <?php echo form_open(base_url() .'index.php?admin/encouter/create/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
					<input type="hidden" class="form-control"   value= "<?php echo $current_user;?>" name="user">
					<input type="hidden" class="form-control"   value= "<?php echo $new;?>" name="cdate">
					<input type="hidden" class="form-control"   value= "<?php echo $new2;?>" name="final_date">		
							
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['indigent'];?>" name="indigent"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['mrn_id'];?>" name="mrn_id"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['agreement'];?>" name="agreement"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
				
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['class_id'];?>" name="region"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
				
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['section_id'];?>" name="zone"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
					
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['woreda_id'];?>" name="woreda"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
				        	<input type="hidden" class="form-control" readonly  value= "<?php echo $row['sex'];?>" name="sex"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
					       
					         <input type="hidden" class="form-control" readonly  value= "<?php echo $row['full_code'];?>" name="CBHI_code"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                              <?php 
							$dob = $row['age'];
							$today = date("y-m-d");
							$diff = date_diff(date_create($dob),date_create($today));
							$age = $diff->format('%y')-7;
						
							?>
							<?php 
				                if($age >= 0){?>
								<input type="hidden" class="form-control"  name="age"  value="<?php echo $age;?>" required ="required">
							         
								<?php
								}else{ ?>
									
								<div class="form-group">
						       <label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label"> <?php echo get_phrase('age');?>:</label>
						     <div class="col-sm-5">	
							   <input type="text" class="form-control"  style="color:red;"name="age" readonly value="Invalid age!"  required ="required">
							     </div>
                                 </div>
							  <?php	}  ?>
                           <!--
 						    <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php //echo get_phrase('Main Diagniss(HMIS)');?>:</label>
                                <div class="col-sm-5">
                                   
									 <textarea type="textarea" class="form-control" name="diagniss" value=""/>    </textarea>
                                </div>
                            </div> -->	
				      <!--
				      <div class="form-group">
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label"> <?php //echo get_phrase('current date');?>:</label>
                        
						<div class="col-sm-5">
							
						 <input type="text" class="form-control"  id="popupDatepicker" data-validate="required" data-message-required="<?php //echo get_phrase('value_required');?>" name="age"/>
						
						</div>
					</div> -->
					
							<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('current date');?>: </label>
                        
						<div class="col-sm-3">
							<select name="dd" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?> </option>
                          		<?php
                        for($i=1;$i<=30;$i++){
                        ?>
                        <option value="<?php echo $i; ?>">
                        <?php
                        if($i<10)
                            echo "0".$i;
                        else
                            echo "$i";	
							
						?>
						</option>	
						<?php 
						}?>
							 
                          </select>
						</div> 
				
							<div class="col-sm-3">
								<select name="mm" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                          	<?php
						  
							  $mm=array("መስከረም/Fuulbana","ጥቅምት/Onkoleleessa","ሕዳር/Sadaasa","ታሕሣስ/Muddee","ጥር/Amajjii","የካቲት/Guraandhala","መጋቢት/Bitooteessa","ሚያዚያ/Elba","ግንቦት/Caamsa","ሰኔ/Waxabajjii","ሐምሌ/Adooleesa","ነሐሴ/Hagayya","ጳጉሜ/Qaamee");
                             // $mm=array("Sep","Oct","Nov","Dec","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Phagume");
                            $i=0;
                            foreach($mm as $mon){
                                $i++;
                                echo"<option value='$i'> $mon</option>";								
                            }
                        ?>
							 
                          </select>
						</div>
				
							<div class="col-sm-3">
							<select name="yyyy" class="form-control" required="required">
                           <!--   <option value=""><?php //echo get_phrase('select');?></option> -->
                               <?php
													
							for($i=$year ;$i<=$year2 ;$i++){	
							echo"<option value='$i'>$i</option>";
							}
							
						?>	 
                          </select>
						</div>
					</div>
					    <div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('encounter');?> type : </label>
                        
						<div class="col-sm-5">
							<select name="encounter" class="form-control" required="required">
							  <option value="OPD"><?php echo get_phrase('Visit(OPD)');?></option>
							  <option value="IPD"><?php echo get_phrase('Admission(IPD)');?></option>
                          </select>
						</div> 
					</div>
					  <?php  $mrn  = $row['mrn_id'];
					    $result = mysql_query("select * from treatment where mrn_id ='$mrn' order by encounter_id desc limit 1");
                         if(mysql_num_rows($result)>0){  
						
						 while ($row1 = mysql_fetch_array($result)){
			         	      $sdate = $row1['Date_of_service'];
				                } ?> 
						
						 <div class="form-group">
                                <div class="col-sm-12">
                                    <center  style="font-weight:bold;color:red;"> This patient had a last visit on <?php echo  $sdate;?> so that 0.00 birr will be paid for card </center> 
                                </div>
                              </div>
							  
						    <div class="form-group">
							
                                <label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label">Card fee: </label>
                                <div class="col-sm-5">
                                    <input type="text"  readonly class="form-control" name="treatment" required="required" value="Card"/>  
                                </div> <b><i class="fa fa-check-square-o"></i> </b> 
                              </div>
							   <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('Price(ETB)');?> :</label>
                                <div class="col-sm-5">
                                    <input type="number" readonly  class="form-control"  name="price" required="required" value="0"/>
                                </div> <b><i class="fa fa-check-square-o"></i> </b>
                                 </div>
							<?php } else{ ?>
					        
						    <input type="hidden"  name="treatment" class="form-control"  required="required" value="Card"/>
						   
						    <div class="form-group">
						    <label style="font-weight:bold;" class="col-sm-3 control-label">Card fee:</label>
						   <div class="col-sm-5">
							<select name="price"  class="form-control" required="required">
                              <option value="30">30 Birr</option>
					
                          </select>
					 
					       </div>
                                

							   <?php }?>
							<?php 
				           if($age >=0){?>
						  
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
						 <br> <br>
							<button type="submit" style="font-weight:bold;" class="btn btn-primary pull-right"> 
							<i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo get_phrase('check-in');?></button>
						</div>
					</div>
					
					
								<?php
								}else{ ?>
									
							
							  <?php	}  ?>
                           
					
                <?php echo form_close();?>

            </div>
        </div>
    </div>
</div>
				<?php
endforeach;
?>
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 5) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }


</script>
<script type="text/javascript">
  function numbers(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 2) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }


</script>
<script type="text/javascript">
  function number(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 9) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }
</script>
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 1) {
        return(false);
      }
	  
	  
      else {
        return(true);
      }
    };
    return(false);
  }
 
</script>

<script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
	$('#popupDatepicker').calendarsPicker({calendar: calendar}); // change ID into class
	
	//$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate});
});

//function showDate(date) {
//	alert('The date chosen is ' + date);
}
</script>
