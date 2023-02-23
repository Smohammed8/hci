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
	<meta http-equiv='refresh' content='30'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_user_add/');" 
            	class="btn btn-primary pull-right">
                <i class="entypo-user"></i>
            	<?php echo get_phrase('block_user');?>
                </a> 
                <br><br>
				<?php require('user_info-master/UserInfo.php');?>
               <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					 
							 <th width="80"><div><?php echo get_phrase('NO');?></div></th>
                           
                   
                            <th><div><?php echo get_phrase('last_login_trial');?></div></th>
							
							
					
                            <th><div><?php echo get_phrase('browser');?></div></th>
							<th><div><?php echo get_phrase('device');?></div></th>
						 <th><div><?php echo get_phrase('operating_system');?></div></th>
							<th><div><?php echo get_phrase('iP_address');?></div></th>
								<th><div><?php echo get_phrase('trial');?></div></th>
				
							 
             
                        </tr>
                    </thead>
                    <tbody>
					<?php
$Today = date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
//echo $new;
?>
                        <?php 
						$i=1;
                           
								 $sql="SELECT * FROM ci_sessions order by timestamp desc";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No one tried to accessed!</div>';
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             $tm = $row2['timestamp'];
							 $tm2=time();
							 ?>
								
                                   <tr>
						         <td><?php echo $i++;?></td>
							    
                                 <td><?php echo date('F j,20y H:m:s A',$tm);?></td>
				          
								   <!--  <td><?php //echo $row2['ip_address'];?> </td>-->
								 	 <!--  <td><?php //echo UserInfo::get_ip();?></td> -->
			
	
		                	        
									   
									   <?php if(UserInfo::get_browser()=='Firefox'){
										   ?>
										   <td> <img src="uploads/mozila.JPG" width="20" height="20" >&nbsp;Firefox 71.0</td>
									   <?php	   
										 }
										
										  if(UserInfo::get_browser()=='Chrome'){
											  ?>
											   <td> <img src="uploads/chrome.JPG" width="20" height="20" >&nbsp;chrome 58.0</td>
										<?php
										  }
								 
										  if(UserInfo::get_browser()=='Internet Explorer'){
											  ?>
											   <td> <img src="" alt="No image" width="20" height="20" >&nbsp;Internet Explorer</td>
										<?php
										  }
									 
										  if(UserInfo::get_browser()=='Safari'){
											  ?>
											  <td> <img src="" alt="No image" width="20" height="20" >&nbsp;Safari</td>
										<?php
										  }
							
										  if(UserInfo::get_browser()=='Opera'){
											  ?>
											  <td> <img src="" alt="No image" width="20" height="20" >&nbsp;Opera</td>
										<?php
										  }
									 
										  if(UserInfo::get_browser()=='UC Browser'){
											  ?>
											  <td> <img src="" alt="No image" width="20" height="20" >&nbsp;UC Browser</td>
										<?php
										  }
										
										  if(UserInfo::get_browser()=='Edge'){
											  ?>
											   <td> <img src="" alt="No image" width="20" height="20" >&nbsp;Edge</td>
										<?php
										  }
							
										  if(UserInfo::get_browser()=='Unknown'){
											  ?>
											  <td> <img src="" alt="No image" width="20" height="20" >&nbsp;Unknown</td>
										<?php
										  }
										?>
			
								<td><?php echo UserInfo::get_device();?></td>
									<td><?php echo UserInfo::get_os();?></td>
							     <td><?php echo $row2['ip_address'];?> </td>
								 <td><?php echo '<span style="color:green;font-weight:bold;"> Success! </span>';?><!--<p style="color:red;font-weight:bold;">Failed!</p>--></td>
                        </tr>
						 <?php }?>
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

