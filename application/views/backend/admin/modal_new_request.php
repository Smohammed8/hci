  
  
                      <?php  $user = $this->session->userdata('admin_id'); 	?>
	                              <?php
	                       $sql = "SELECT * FROM `link_tbl` where user_id = '$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                             $region = $row3["region"]; 
						     $zone = $row3["zone"]; 
							 $woreda = $row3["woreda"]; 
						   } ?>

	 
                                  <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                               $min_year = $row2['min_year'];   
                                
								endforeach;
							  ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-envelope"></i>
					<?php echo get_phrase('send_complain_message');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/send_complain/send/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                    
						     <input type="hidden" class="form-control" readonly name="region" value="<?php echo $region;?>">
							 <input type="hidden" class="form-control" readonly name="zone" value="<?php echo $zone;?>">
							 <input type="hidden" class="form-control" readonly name="woreda" value="<?php echo $woreda;?>">
                             
							 <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('woreda');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="" value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda,$zone);?>"/>
                                </div>
                            </div>
							
                            	
                       		<div class="form-group">
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('year');?></label>
                        
								<div class="col-sm-5">
							<select name="year" class="form-control" required="required" >
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
						<label for="field-2" style="font-weight:bold;color:black;" class="col-sm-3 control-label"><?php echo get_phrase('quarter');?></label>
                        
						<div class="col-sm-5">
								<select name="quarter" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                        <option value="1"><?php echo get_phrase('First Quarter');?>[ሐምሌ,ነሐሴ,ጳጉሜ,መስከረም]</option>
						<option value="2"><?php echo get_phrase('Second Quarter');?>[ጥቅምት,ሕዳር,ታሕሣስ]</option>
						<option value="3"><?php echo get_phrase('Third Quarter');?>[ጥር,የካቲት,መጋቢት]</option>
						<option value="4"><?php echo get_phrase('Fourth Quarter');?>[ሚያዚያ,ግንቦት,ሰኔ]</option>
					    <!--  where date like %-1-% and %-2-% and %-3-%
							  where date like %-4-% and %-5-% and %-6-%
							  where date like %-7-% and %-8-% and %-9-%
							  where date like %-10-% and %-11-% and %-12-%    -->
                          </select>
						</div> 
					</div>
							
                             <div class="form-group">
                           
                                <div class="col-sm-12">
                                    <textarea placeholder="Writer your comment here..." rows="5"  cols="40" name="comment" class="form-control" required="required" ></textarea>
							     
                                </div>
                            </div>     
                            
                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                               <button type="submit" class="btn btn-primary pull-right">   &nbsp; 
							   <i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('send_comment');?></button>
                            </div>
                        </div>
						
						
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

