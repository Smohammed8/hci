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

///function showDate(date) {
	//alert('The date chosen is ' + date);
}
</script>
<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $Today;
?>
                               <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                               $min_year = $row2['min_year'];   
                                
								endforeach;
							  ?>
<?php   $current_user = $this->session->userdata('admin_id'); ?>
<?php 
$edit_data		=	$this->db->get_where('beneficiary',array('beneficiary_id' =>$param2) )->result_array();


foreach($edit_data as $row):
?>


                         <?php  $wor    = $row['woreda'];
						        $zo     = $row['zone'];
								$family = $row['family_code'];
						        $reg    = $row['region']; 
		   	 $resultx = mysql_query("SELECT * FROM family where  region ='$reg' and zone='$zo' and  woreda='$wor' and family_code='$family'") or die(mysql_error());
                   
                        $num = mysql_num_rows($resultx); ?>
							
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo get_phrase('add_yearly_payment');?>
            	</div>
            </div>
			<div class="panel-body">
				
               
		         
					 <?php echo form_open(base_url() . 'index.php?admin/encouter/create/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
					
					
					<input type="hidden" class="form-control"   value= "<?php echo $current_user;?>" name="user">
					<input type="hidden" class="form-control"   value= "<?php echo $new;?>" name="cdate">
							
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['family_code'];?>" name="family_code"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
						
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['region'];?>" name="region"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
				
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['zone'];?>" name="zone"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
					
							<input type="hidden" class="form-control" readonly  value= "<?php echo $row['woreda'];?>" name="woreda"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
					         <input type="hidden" class="form-control" readonly  value= "<?php echo $row['full_code'];?>" name="CBHI_code"  placeholder="" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>">
                            
                           
 						    <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('cbhi');?>:</label>
                                <div class="col-sm-5">
                                   
									
							<input type="text" class="form-control" readonly  value ="<?php echo $row['full_code'];?>" name="family_code"> 
						
                                </div>
                            </div>	
									    <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('no_of_family');?>:</label>
                                <div class="col-sm-5">
                                   
									
							<input type="text" class="form-control" readonly  value= "<?php echo $num;?>" name="full_code">
						
                                </div>
                            </div>
				<!--
				      <div class="form-group">
						<label for="field-1" style="font-weight:bold;" class="col-sm-3 control-label"> <?php //echo get_phrase('current date');?>:</label>
                        
						<div class="col-sm-5">
							
						 <input type="text" class="form-control"  id="popupDatepicker" data-validate="required" data-message-required="<?php //echo get_phrase('value_required');?>" name="age"/>
						
						</div>
					</div>  -->
					
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
                            echo"$i";	  
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
						  
							  $mm=array("መስከረም","ጥቅምት","ሕዳር","ታሕሣስ","ጥር","የካቲት","መጋቢት","ሚያዚያ","ግንቦት","ሰኔ","ሐምሌ","ነሐሴ","ጳጉሜ");
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
                              <option value=""><?php echo get_phrase('select');?></option>
                               <?php
													
							for($i=$min_year;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
							
						?>
							 
                          </select>
						</div>
						
					</div>
					

					
					<div class="form-group">
						<label for="field-2" style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('year');?>: </label>
                        
						<div class="col-sm-5">
								<select name="yyyy" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                               <?php
													
							for($i=$min_year;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
							
						?>
							 
                          </select>
					      	</div> 
					       </div>
							     <div class="form-group">
                                <label style="font-weight:bold;" class="col-sm-3 control-label"><?php echo get_phrase('ETB');?> :</label>
                                <div class="col-sm-5">
                                    <input type="text"   maxlength="2" class="form-control" onkeypress="return numbersOnly(event,this.value)" name="price" required="required" value="0"/>
                                </div>.00
                            </div>
							
							<?php 
				                if($age >=0){?>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('submit');?></button>
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
