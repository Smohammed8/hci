
				<?php 
   $data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($data as $row3):


		 $role   =$row3["role"]; 
		  
                       
     ?>
	 <?php endforeach; ?>
	 
<?php 
$edit_data		=	$this->db->get_where('complain' , array('request_id' =>$param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-user"></i>
					<?php echo get_phrase('payment_approval');?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/approved_request/accept/'.$row['request_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                             
                            
							
							       <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('class');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="" value="<?php echo $this->crud_model->get_type_name_by_id('class', $row['region']);?>"/>
                                </div>
                            </div>
							
							    <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('zone');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="" value="<?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?>"/>
                                </div>
                            </div>
							 <input type="hidden" class="form-control" readonly name="region" value="<?php echo $row['region'];?>"/>
							 <input type="hidden" class="form-control" readonly name="zone" value="<?php echo $row['zone'];?>"/>
							 <input type="hidden" class="form-control" readonly name="woreda" value="<?php echo $row['woreda'];?>"/>
                             
							 <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('woreda');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="" value="<?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?>"/>
                                </div>
                            </div>
							
                            	
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('year');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="year" value="<?php echo $row['year'];?>"/>
                                </div>
                            </div>
								
                             <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('quarter');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly name="quarter" value="<?php echo $row['quarter'];?>"/>
                                </div>
                            </div>
							
							
                            
                            
                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                               <button type="submit" class="btn btn-primary pull-right">   &nbsp; <i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('approve_request');?></button>
                            </div>
                        </div>
						
						
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
?>