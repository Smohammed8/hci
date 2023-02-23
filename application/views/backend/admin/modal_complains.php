
				<?php 
   $data		=	$this->db->get_where('admin' , array('admin_id' =>$this->session->userdata('admin_id')))->result_array();
   foreach($data as $row3):


		 $role   =$row3["role"]; 
		  
                       
     ?>
	 <?php endforeach; ?>
	 
<?php 
$edit_data		=	$this->db->get_where('complain' , array('request_id' =>$param2) )->result_array();
foreach ($edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-user"></i>
					<?php //echo get_phrase('complain');?>
					<?php echo $this->crud_model->get_type_name_by_id('class', $row['region']);?>>>
					<?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?>>>
					<?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?> By 
					<?php echo $this->crud_model->get_type_name_by_id('admin', $row['request_by']);?>
            	</div>
            </div>
			<div class="panel-body">
                    <?php echo form_open(base_url() . 'index.php?admin/approved_request/accept/'.$row['request_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                             
                            	 <input type="hidden" class="form-control" readonly name="region" value="<?php echo $row['region'];?>"/>
							     <input type="hidden" class="form-control" readonly name="zone" value="<?php echo $row['zone'];?>"/>
							     <input type="hidden" class="form-control" readonly name="woreda" value="<?php echo $row['woreda'];?>"/>
							     <input type="hidden" class="form-control" readonly name="year" value="<?php echo $row['year'];?>"/>
								 <input type="hidden" class="form-control" readonly name="quarter" value="<?php echo $row['quarter'];?>"/>
						       	<input type="hidden" class="form-control" readonly name="request_id" value="<?php echo $row['request_id'];?>"/>
							       <div class="form-group">
                           
                                <div class="col-sm-12">
                                    <textarea rows="10" cols="50" class="form-control" readonly> <?php echo $row['comment'];?></textarea>
							     
                                </div>
                            </div>                 
                      <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
                               <button type="submit" class="btn btn-primary pull-right">   &nbsp; <i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('ok');?></button>
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