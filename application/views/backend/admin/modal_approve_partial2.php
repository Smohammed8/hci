
	 
<?php 
$edit_data		=	$this->db->get_where('payment' , array('payment_id' =>$param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-user"></i>
					<?php echo get_phrase('payment_details');?>
            	</div>
            </div>
			<div class="panel-body">
                          
						<p style="font-size:17px;font-weight:bold;"><u>	<?php echo $this->crud_model->get_type_name_by_id('class', $row['region']);?>/<?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?>/<?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></u></p>
							  
						                       	
                             <div class="form-group">
							 
                               	  <h4> <?php echo get_phrase('paid_amount');?>:
                              
                                  <?php echo number_format($row['paid_amount'],2); ?>.......................... <?php echo round($row['paid'],2);?>% out  of <u><?php echo number_format($row['total'],2); ?></u> </h4>
                           
                                    <h4> <?php echo get_phrase('unpaid_amount');?>:
                       
                                 <?php echo number_format($row['unpaid_amount'],2); ?>.......................<?php echo round($row['remain'],2);?>% out  of  <u><?php echo number_format($row['total'],2); ?></u> </h4>
                          
							<p>_______________________________________________________________________</p>	
                       
							   
							   <h3> <?php echo get_phrase('total_amount');?>: 
                         
                          <u> ETB   <?php echo number_format($row['total'],2); ?></u></h3>
                               

						
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>
<?php $Today = date('y:m:d');
       $new  =date('l, F d, Y',strtotime($Today)); ?>
         
 <?php echo form_open(base_url() . 'index.php?admin/approved_request/fully_monthly/'.$row['payment_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                        		
                      		  

	
							     <div class="form-group">
								    <input type="hidden" name="payment_id" class="form-control"  value="<?php echo $row['payment_id'];?>">
								   <input type="hidden" name="paid_amount" class="form-control"  value="<?php echo $row['paid_amount'];?>">
								   <input type="hidden" name="unpaid_amount" class="form-control"  value=" <?php echo $row['unpaid_amount'];?>">
								    <input type="hidden" name="approval_date" class="form-control"  value=" <?php echo $new ;?>">
								   
						     <div class="col-sm-5">
							<select name="fully_covered" class="form-control" required="required">
                              <option value=""><?php echo get_phrase('select');?></option>
                              <option value="fully_paid"><?php echo get_phrase('fully_paid');?></option>
                          </select>
						</div> 
			
			
						<div class="col-sm-offset-2 col-sm-3">
							<button type="submit" style="font-weight:bold;" name="search" class="btn btn-primary pull-right"> 
					<i class="fa fa-check-square-o"></i>&nbsp;<?php echo get_phrase('finished');?></button>
						</div>
					</div>					
		<?php echo form_close();?>
			
			