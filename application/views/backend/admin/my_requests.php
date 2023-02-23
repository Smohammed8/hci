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

table, th, td {
  border: 1px solid gray;
}
</style>
	<hr>
	

		                     <?php 
                 		     $current_user = $this->session->userdata('admin_id'); 
	                         $sql = "SELECT * FROM `link_tbl` where user_id ='$current_user'";
                             $ress = mysql_query($sql) or die(mysql_error());
                             while($row3 = mysql_fetch_array($ress)){
                             $region    = $row3["region"]; 
						     $zone      = $row3["zone"]; 
							 $woreda    = $row3["woreda"]; 
						   } ?>
 <?php
	
						  $s="SELECT name FROM `admin` where admin_id='$admin_id'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>	
					   
			
		<!--<meta http-equiv='refresh' content='120'>		-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		
			 
			<!--  <a href="javascript:;" onclick="showAjaxModal('<?php //echo base_url();?>index.php?modal/popup/modal_new_request/');" 
		  
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php //echo get_phrase('send_comment');?>
                </a>  -->		
               <br>
<h4> <i class="fa fa-users"></i>Payament History  from your district -Current user :<u> <?php echo  $name;?> </u></h4>
<table class="hoverTable" id="table_export">
    <thead>
        <tr class="header-tr" bgcolor="lightblue" style="bordercolor:black;" height="30px;">
            <th width="">#<div></div></th>
		      <th><div><?php echo get_phrase('zone');?> </div></th>
			  <th><div><?php echo get_phrase('woreda');?>/Organization</div></th>		  
    	  
			  <th><div><?php echo get_phrase('pre_paid');?></div></th>
			  <th><div><?php echo get_phrase('unpaid_amount');?></div></th>
			  <th><div><?php echo get_phrase('paid_amount');?></div></th>
					  
			 
			   <th><div><?php echo get_phrase('paid');?></div></th>
			  <th><div><?php echo get_phrase('unpaid');?></div></th>
	          

		  	  <th><div><?php echo get_phrase('quarter');?></div></th> 
			    <th><div>Fiscal <?php echo get_phrase('year');?></div></th>
			  <th><div><?php echo get_phrase('status');?></div></th>
		
			  <th><div><?php echo get_phrase('fully_covered');?></div></th>
					  
			 
			 
			  <th><div><?php echo get_phrase('approved_by');?></div></th>
	          
			  
			 
			
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        
		 
					   <?php  
                       $count=1;	
                    $yes ='Yes';					   
                   $sqr	=	$this->db->get_where('payment' , array('region'=>$region,'zone'=>$zone,'woreda'=>$woreda,'fully_covered'=>$yes))->result_array();
                 foreach($sqr as $row):?>

           <tr>
                  <td><?php echo $count++;?>  </td>
			        
			      <td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?></td>			
			      <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></td>
				  <td> <?php  echo  number_format($row['paid_amount'],2); ?></td>
				  <td> <?php  echo  number_format($row['unpaid_amount'],2); ?></td>
				  
				  <td> <?php  echo  number_format($row['total'],2); ?></td>
				  
		          <td><?php echo $row['paid'];?>%</td>
				  <td><?php echo $row['remain'];?>%</td>
		          <td><?php echo $row['per_time'];?></td>
				   <td><?php echo $row['year']-1;?>/<?php echo $row['year'];?></td>
				  <td><?php echo $row['status'];?></td>
			
				  <?php $app = $row['fully_covered'];?>
				  <td> <?php if($app=='Yes'){ ?> <i class="fa fa-check-square-o"></i>&nbsp;<?php echo $row['fully_covered'];} else {echo 'Pending';}?></td>
				   <?php $name= $row['approved_by'];?>
				  <td> <?php   if($name!=''){ ?><u><?php echo $this->crud_model->get_type_name_by_id('admin', $row['approved_by']);?></u><?php }else {echo '............';}?></td>
                  <td> <div class="btn-group">
                 <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                   <i class="fa fa-list"></i>&nbsp; More <span class="caret"></span>
                 </button>
					
					    <?php if($app=='Yes'){ ?>
						
                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        

							 <li>
                            <a href="#" onclick="">
                                &nbsp;<i class="fa fa-check-square-o"></i>
                                    Payament Approved 
                                </a>
                                        </li>
									<li class="divider"></li>
                        	
							 <li>
                            <a href="#" onclick="">
                                &nbsp;<i class="fa  fa-calendar"></i>  &nbsp;
                                      On <?php echo $row['approval_date'];?>
                                </a>
                                        </li>
                      
                        <li class="divider"></li>
													 <li>
                            <a href="#" onclick="">
                                &nbsp;<i class="fa fa-user"></i>  &nbsp;
                                      By <?php echo $this->crud_model->get_type_name_by_id('admin', $row['approved_by']);?>
                                </a>
                                        </li>
                        
                                              <li class="divider"></li>
                    </ul>
					
						<?php } else{ ?>
					
					    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        
                        <!-- Payment status LINK -->
                 
						
                  
										          <li>
                            <a href="#" onclick="" style="color:red;">
                                &nbsp;<i class="fa  fa-edit"></i>
                                   <?php echo get_phrase('pending');?> 
                                </a>
                                        </li>
                      
                        <li class="divider"></li>
                        
                  
                    </ul>
					
						<?php }?>
					
					
                </div>
                
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
	
   
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
<?php
//echo strtolower("Hello WORLD.");

//echo strtoupper("Hello WORLD!");

    //strtolower() - converts a string to lowercase.
   // lcfirst() - converts the first character of a string to lowercase.
    //ucfirst() - converts the first character of a string to uppercase.
    //ucwords() - converts the first character of each word in a string to uppercase. -->
?>