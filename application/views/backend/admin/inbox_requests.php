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
			 
		  <a href="" onclick="" 
            	class="btn btn-primary pull-right">
                <i class="fa fa-download"></i>
            	<?php echo get_phrase('complain_list');?>
                </a> 
        

				
	
		
<br>
 <?php
	
						  $s="SELECT name FROM `admin` where admin_id='$admin_id'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>
<h4> <i class="fa fa-align-justify"></i> <u> <b>Inbox of districts comment</b></u> </h4>
<table class="hoverTable" id="table_export">

    <thead>
        <tr class="header-tr" bgcolor="lightblue" height="30px;">
            <th width="">#<div></div></th>
      
              <th><div><?php echo get_phrase('request_by');?></div></th>
		      <th><div><?php echo get_phrase('region');?> </div></th>
			  <th><div><?php echo get_phrase('zone');?></div></th>
	          <th><div><?php echo get_phrase('woreda');?></div></th>   
		  	  
			
			  <th><div><?php echo get_phrase('year');?></div></th>
			  <th><div><?php echo get_phrase('quarter');?></div></th>
					  
		
		
			  <th><div><?php echo get_phrase('view');?></div></th>
	          
		
			  
			 
			
            <th><div><?php echo get_phrase('options');?></div></th>
        </tr>
    </thead>
    <tbody>
        
		 
			<?php


			    $seen     = 'New';
                $sqr	=	$this->db->get_where('complain' , array('view'=>$seen))->result_array();
                

					 
					 
			   foreach($sqr as $row):   ?>
                
           <tr>
            <td><?php echo $row['request_id'];?></td>

			<td><?php echo $this->crud_model->get_type_name_by_id('admin', $row['request_by']);?></td>

			 <td><?php echo $this->crud_model->get_type_name_by_id('class', $row['region']);?></td>
			
			  
			  
			  <td><?php echo $this->crud_model->get_section_name_by_id($row['zone'],$row['region']);?></td>
			

			
			    <td><?php echo $this->crud_model->get_woreda_name_by_id($row['woreda'],$row['zone']);?></td>
			     
		
		
			
 
		    
				  <td><?php echo $row['year'];?></td>
		          <td><?php echo $row['quarter'];?></td>
				  
		  
			
				   <td> <?php echo $row['view'];?></td>
						
			
              <td> <div class="btn-group">
                    <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
                        <i class="fa fa-list"></i>&nbsp; Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-default pull-right" style="background-color:lightblue" role="menu">
                        
                        <!-- Payment status LINK -->
                      

						
                  <!--
								 <li>
                            <a href="#" onclick="showAjaxModal('<?php //echo base_url();?>index.php?modal/popup/modal_approve_request/<?php //echo $row['request_id'];?>');">
                                &nbsp; <i class="fa fa-check-square-o"></i>
                                   I have <?php //echo get_phrase('seen');?>&nbsp;it&nbsp; 
                                </a>
                                        </li> -->
                      
                        <li class="divider"></li> 
                        
                        <!-- DELETION LINK -->
                     		 <li>
                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_complains/<?php echo $row['request_id'];?>');">
                                &nbsp; <i class="fa fa-envelope"></i>&nbsp;
                                    <?php echo get_phrase('message_details');?> &nbsp; 
                                </a>
                           </li>
						    <li class="divider"></li> 
                    </ul>
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