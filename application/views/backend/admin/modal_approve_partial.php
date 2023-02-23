
	 
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
                              
                                   <?php echo number_format($row['paid_amount'],2); ?>..........................  <?php echo round($row['paid'],2);?>% out  of <u><?php echo number_format($row['total'],2); ?> </u></h4>
                           
                                    <h4> <?php echo get_phrase('unpaid_amount');?>:
                       
                                    <?php echo number_format($row['unpaid_amount'],2); ?>.......................<?php echo round($row['remain'],2);?>% out  of <u><?php echo number_format($row['total'],2); ?></u> </h4>
                          
							<hr>
                       
                               <h3> <?php echo get_phrase('total_amount');?>: 
                         
                          <u> ETB   <?php echo number_format($row['total'],2); ?></u></h3>
                               
            <p>.......................................................................................................................................</p>
				<p style="font-size:15px;"> Approved by: <br><u><b><?php  echo $this->crud_model->get_type_name_by_id('admin', $row['approved_by']);?></b></u> on  <?php echo $row['approval_date'];?> G. C</p>		
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>
         

			
			