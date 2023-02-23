 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:70%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: #ffff99;
    }
	.asad{
		background-color:pink;
		
	}




	</style>
	
<?php
function timeAgo($time_ago){
$cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	=  $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60 ){
	echo "$seconds seconds ago";	
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		echo "1 minute ago";
	}
	else{
		echo "$minutes minutes ago";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		echo "1 hour ago";
	}else{
		echo "$hours hours ago";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "yesterday";
	}else{
		echo "$days days ago";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		echo "1 week ago";
	}else{
		echo "$weeks weeks ago";
	}
}
//Months
else if($months <=12){
	if($months==1){
		echo "1 month ago";
	}else{
		echo "$months months ago";
	}
}
//Years
else{
	if($years==1){
		echo "1 year ago";
	}else{
		echo "$years years ago";
	}
}
}

?>
	<meta http-equiv='refresh' content='60'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-plus-circled"></i>
            	<?php echo get_phrase('Add_new_user');?>
                </a> 
                <br><br>
					

               <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					 
							 <th width="80"><div><?php echo get_phrase('NO');?></div></th>
                           
                            <th><div><?php echo get_phrase('user');?></div></th>
                            <th><div><?php echo get_phrase('last_login');?></div></th>
							
							<th><div><?php echo get_phrase('username');?></div></th>
                            <th><div><?php echo get_phrase('status');?></div></th>
							
                          
							<th><div><?php echo get_phrase('profile');?> </div></th>
							 
             
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$i=1;
                                $u	=	$this->db->get('admin' )->result_array();
                                foreach($u as $row):?>
                        <tr>
						      <td><?php echo $i++;?></td>
							  
							  
							   
                           
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['last_login'];?></td>
					       <?php $status = $row['status'];?>
						     <?php $sex = $row['Sex'];?>
							   <td><?php echo $row['email'];?></td>
							   <?php if($status =='1'){?>
							    <td> <img src="uploads/online.png"></td>
							   <?php }
							    else {?>
								
								   <?php if($sex=='Male'){?>
								   
								   
							      <td>     <i class="fa fa-male"></i>&nbsp; He was active   <?php $curenttime = $row['logout']; $time_ago =strtotime($curenttime); echo timeAgo($time_ago);?>                               </td>
								   <?php }
								   else{ ?>
								    <td><i class="fa fa-female"></i>&nbsp; She was active    <?php $curenttime = $row['logout']; $time_ago =strtotime($curenttime); echo timeAgo($time_ago);?> </td>
								
							     <?php }}?>
								   <td><?php echo $row['role'];?></td>
              
                  
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
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
						"mColumns": [1,2]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
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

