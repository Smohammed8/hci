 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:3px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}

	</style>	
	<style>


tr:nth-child(even) {
  background-color: #f2f2f2;
}


</style>
	<hr>	
		<!--<meta http-equiv='refresh' content='120'>		-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
			<h4> <i class="fa fa-align-justify"></i> <u> <b><?php echo get_phrase('partially_made_cash');?></b></u> </h4>
				

	
	

 <?php
 
 //echo strtolower("Hello WORLD.");

//echo strtoupper("Hello WORLD!");

    //strtolower() - converts a string to lowercase.
   // lcfirst() - converts the first character of a string to lowercase.
    //ucfirst() - converts the first character of a string to uppercase.
    //ucwords() - converts the first character of each word in a string to uppercase. -->
	
						  $s="SELECT name FROM `admin` where admin_id='$admin_id'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>

<table class="hoverTable" id="table_export">

    <thead>
        <tr class="header-tr" bgcolor="lightblue" height="30px;">
    
      
              <th><div><?php //echo get_phrase('request_id');?>#</div></th>
		      <th><div><?php echo get_phrase('region');?> </div></th>
			  <th><div><?php echo get_phrase('zone');?></div></th>
	          <th><div><?php echo get_phrase('woreda');?>/Organization</div></th>   
		  	  
			
			  <th><div><?php echo get_phrase('request_year');?></div></th>
			  <th><div><?php echo get_phrase('per_time');?></div></th>
					  
		
			   <th><div><?php echo get_phrase('paid');?></div></th>
			  <th><div><?php echo get_phrase('remain');?></div></th>
	          
			  <th><div><?php echo get_phrase('total');?></div></th>
			  <th><div><?php echo get_phrase('fully_covered');?></div></th>
			  <th><div><?php echo get_phrase('status');?></div></th>
			 
			
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        
		 
			<?php
			   // $pend     = 'Pending';
				$i=0;
				$sql = mysql_query("SELECT * FROM `payment` ORDER BY `payment`.`payment_id`  DESC");  
			  
               // $sqr	=	$this->db->get_where('payment' , array('fully_covered'=>$pend))->result_array();
               // foreach($sql as $row):
                      while($row =mysql_fetch_array($sql)){ 
					  $i++;
                          ?>
						  <?php $pend =  $row['fully_covered'];?>
            <tr>
             <td><?php echo $i;?></td>
			 <td><?php echo $this->crud_model->get_type_name_by_id('class', $row['region']);?></td>
			
			  
			  
			       <td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?></td>
					
			       <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></td>
			     	    
				  <td><?php echo $row['year'];?></td>
				     <?php
					  $time = $row['per_time'];
					    $status =  $row['status'];
			      if($status=='quarterly'){
					   if($time=='1') {?>
						   <td><?php echo $row['per_time'];?><sup>st </sup> Quarter</td>
					     <?php }
					    else if($time=='2') {?>
					   <td><?php echo $row['per_time'];?> <sup>nd </sup> Quarter</td> 
					  <?php  } 
					    else if($time=='3') {?>
						 <td><?php echo $row['per_time'];?> <sup>rd </sup> Quarter</td>	
                      <?php } else	{?>
                      <td><?php echo $row['per_time'];?> <sup>th </sup> Quarter</td>	
				          <?php }?>
		             <?php } else{ 
					    if($time=='1') {?>
					   <td><?php echo $row['per_time'];?> <sup>st </sup> Month(መስከረም)</td>
					   <?php }
					    else if($time=='2') {?>
					   <td><?php echo $row['per_time'];?> <sup>nd </sup> Month (ጥቅምት)</td> 
					    <?php  } 
					    else if($time=='3') {?>
						 <td><?php echo $row['per_time'];?> <sup>rd </sup> Month (ህዳር)</td>	
                      
					    <?php } 
					  
					   else if($time=='4') {?>
						 <td><?php echo $row['per_time'];?> <sup>th  </sup> Month (ታህሳስ)</td>	
                      <?php } 
					  
					   else if($time=='5') {?>
						 <td><?php echo $row['per_time'];?> <sup>th </sup> Month (ጥር)</td>	
                      <?php } 
					  
					   else if($time=='6') {?>
						 <td><?php echo $row['per_time'];?> <sup>th  </sup> Month (የካቲት)</td>	
                      <?php } 
					  
					   else if($time=='7') {?>
						 <td><?php echo $row['per_time'];?> <sup>th </sup> Month (መጋቢት)</td>	
                      <?php }
					  
					   else if($time=='8') {?>
						 <td><?php echo $row['per_time'];?> <sup>th </sup> Month (ሚያዚያ)</td>	
                      <?php } 
					  
					   else if($time=='9') {?>
						 <td><?php echo $row['per_time'];?> <sup>th  </sup> Month (ግንቦት)</td>	
                     
                      <?php } 
					  
					   else if($time=='10') {?>
						 <td><?php echo $row['per_time'];?> <sup>th  </sup> Month (ሰኔ)</td>	
                     
       
					   <?php } 
					  
					   else if($time=='11') {?>
						 <td><?php echo $row['per_time'];?> <sup>th  </sup> Month (ሐምሌ)</td>	
                     
                      <?php } 		  
					  
					   else if($time=='12') {?>
						 <td><?php echo $row['per_time'];?> <sup>th  </sup> Month (ኔሐሴ)</td>	
                     
                      <?php } 
					  else	{?>
					  
                      <td><?php echo $row['per_time'];?> <sup>th </sup> Month (ጷግሜ)</td>
					        <?php }?>
		           <?php } ?>
				  <td><?php echo round($row['paid'],2);?>%</td>  
				  <td><?php echo round($row['remain'],2);?>%</td> 
				  <td><?php echo number_format($row['total'],2);?></td>
				  <td> <?php echo $row['fully_covered'];?></td>
				  <td><?php echo $row['status'];?></td>
                   <td> <div class="btn-group">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                        <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        
                        <!-- Payment status LINK -->
          
						<?php if($row['paid']=='100')  {?>
                  
										          <li>
                            <a href="#" onclick="">
                                &nbsp; <i class="fa fa-check-square-o"></i>
                                <del>    <?php echo get_phrase('closed');?>  </del>   
                                </a>
                                        </li>
										
										
						<?php }  else{?>
						
						
							          <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_approve_partial2/<?php echo $row['payment_id'];?>');">
                                &nbsp; <i class="fa fa-check-square-o"></i>
                                    <?php echo get_phrase('fully_approve');?>(100%) &nbsp; 
                                </a>
                                        </li>
						
						
						<?php }?>
                      
                        <li class="divider"></li>
					
					            <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_approve_partial/<?php echo $row['payment_id'];?>');">
                                &nbsp; <i class="fa fa-flag"></i>
                                    <?php echo get_phrase('details');?>
                                </a>
                               </li>

							       
								<?php if($row['fully_covered']=='Pending')  {?>
								 <li class="divider"></li>
								    <li>
                  
								
								 <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/payment_request/cancel/<?php echo $row['payment_id'];?>');" 	
		                         style="color:red;font-wieght:bold">&nbsp;&nbsp;&nbsp;<i class="fa fa-trash-o"></i> <?php echo get_phrase('cancel');?> </a>
                               </li>
							   		<?php }?>
                      
                        <li class="divider"></li>
						
						
                 
                    </ul>
                </div>
                
            </td>
        </tr>
					  <?php } //endforeach;?>
    </tbody>
	<?php 
	$result10 = mysql_query("SELECT sum(paid_amount),sum(unpaid_amount) FROM payment") or die(mysql_error());
    		while ($row10 = mysql_fetch_array($result10)) {
				
				//$cs  = $row10['sum(total)'];
				
			    $paid_amount   = $row10['sum(paid_amount)'];
				$unpaid_amount = $row10['sum(unpaid_amount)'];
				$all           = $paid_amount+$unpaid_amount; 
				 	
			
			}
			?>
<p style="font-size:14px;text-align:right;">#Uncovered amount&nbsp;&nbsp; <u>  <?php echo number_format($unpaid_amount,2); ?> </u>&nbsp;&nbsp;&nbsp;&nbsp;  #Covered amount&nbsp;&nbsp;<u><?php echo number_format($paid_amount,2); ?></u> &nbsp;&nbsp;&nbsp;  #Total &nbsp;&nbsp;<u> <?php echo number_format($all,2); ?></u> </p>


	  
		 
</table>
	      <form action="<?php echo base_url(); ?>index.php?admin/payment_history_print_pdf/" method="post">    
						     <?php 
								$years = $this->db->get('year')->result_array();
								//$years=    $this->db->order_by('request_id', 'DESC');
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                                         
                                
								endforeach;
							  ?>
							<div class="col-sm-2">
							

				    <select name="yr" class="form-control"  required="required">
		                            <option value=""><?php echo get_phrase('select_year');?></option>
			                                <?php
							
							for($i=2012;$i<=$year;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
			                    </select>					
			                  </div> 	
						                 
							<div class="col-sm-2">
							
							

			          	<select name="qtr" class="form-control"   required="required">
                               <option value=""><?php echo get_phrase('select_quarter');?></option> 
							     
						<option value="1"><?php echo get_phrase('First Quarter');?>[ሐምሌ,ነሐሴ,ጳጉሜ,መስከረም]</option>
						<option value="2"><?php echo get_phrase('Second Quarter');?>[ጥቅምት,ሕዳር,ታሕሣስ]</option>
						<option value="3"><?php echo get_phrase('Third Quarter');?>[ጥር,የካቲት,መጋቢት]</option>
						<option value="4"><?php echo get_phrase('Fourth Quarter');?>[ሚያዚያ,ግንቦት,ሰኔ]</option>
                          </select>
										
			           </div>		 
                    <div class="form-group">
					
					 
						<div class="col-sm-2">
							<button type="submit" style="font-weight:bold;" name="search" class="btn btn-primary pull-right"> 
							<i class="entypo-print"></i> <?php echo get_phrase('create_report');?></button>
						</div>
					</div>
	  <?php //echo form_close();?>
  </form>
   
<br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0,1, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0,1, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(7, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									 datatable.fnSetColumnVis(6, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>


<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>


<script type="text/javascript">

	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>

<script>

  
var blink_speed = 500;
var t = setInterval(function () {
    var ele = document.getElementById('blinker');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);

</script>
