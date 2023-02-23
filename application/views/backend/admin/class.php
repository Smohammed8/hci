

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
<style>
tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<div class="row">
	<div class="col-md-12">
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
			<li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo get_phrase('class_list');?>
                    	</a></li>
			<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo get_phrase('Add Region');?>
                    	</a></li>
		</ul>
    	<!------CONTROL TABS END------>
        
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
				
                <table class="hoverTable" id="table_export">
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
                    		<th><div><?php echo get_phrase('code');?></div></th>
                    		<th><div>&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo get_phrase('college');?></div></th>
							<th><div>&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo get_phrase('note');?>&nbsp;&nbsp;&nbsp;source: https://www.ethiovisit.com/</div></th>
							<th><div><?php echo get_phrase('flag');?></div></th>
                    	
                    		<th><div><?php echo get_phrase('options');?></div></th>
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;
							$regions= $this->db->get('class')->result_array();
						foreach($regions as $row):?>
                        <tr>
                            <td><?php //echo $count++;?><?php echo $row['class_id'];?></td>
							<?php $id=$row['class_id']; ?>
							
							<td><b><?php echo $row['name'];?></b></td>
							<td><?php echo $row['note'];?></td>
							<?php if($id=='1'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/1.jpg" width="50" height="25"></a></td>
							<?php } if($id=='2'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/2.jpg" width="50" height="25"></a></td>
							<?php }if($id=='3'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/3.jpg" width="50" height="25"></a></td>
							<?php }if($id=='4'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/4.jpg" width="50" height="25"></a></td>
							<?php }if($id=='5'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/5.jpg" width="50" height="25"></a></td>
							<?php }if($id=='6'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/6.jpg" width="50" height="25"></a></td>
							<?php }if($id=='7'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/7.jpg" width="50" height="25"></a></td>
							<?php } if($id=='8'){?>
							<td> <a href=""  target="_blank"><img src="uploads/flag/8.jpg" width="50" height="25"></a></td>
							
							<?php }if($id=='9'){?>
							
							<td> <a href=""  target="_blank"><img src="uploads/flag/9.jpg" width="50" height="28"></a></td>
							
							
							<?php }if($id=='10'){?>
							
							<td> <a href=""  target="_blank"><img src="uploads/flag/10.jpg" width="60" height="50"></a></td>
							
							<?php }if($id >10){?>			
							<td> <a href=""  target="_blank"><img src="" alt="No flag uploaded yet" width="50" height="28"></a></td>
							<?php }?>
							<td>
							
							
							
							
							<div class="btn-group">
		                                <button type="button" class="btn btn-primary pull-right" data-toggle="dropdown">
		                                     <i class="fa fa-list"></i>&nbsp;Action <span class="caret"></span>
		                                </button>
		                                <ul class="dropdown-menu dropdown-primary pull-right" role="menu">
		                                               <!-- STUDENTS IN THE DORM -->
                               

		                                    <!-- EDITING LINK -->
		                                    <li>
		                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_state_details/<?php echo $row['class_id'];?>');">
                                <i class="entypo-flag"></i>
                                    <?php echo get_phrase('detials');?>
                                </a>
		                                       </li>
											   
		                                    <li class="divider"></li>
											     <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_state/<?php echo $row['class_id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo get_phrase('edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>
									
		                                    
		                                    <!-- DELETION LINK -->
		                                    <li>
		                                          <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/classes/delete/<?php echo $row['class_id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo get_phrase('delete');?>
                                            </a>
		                                    </li>
		                                </ul>
		                            </div>
									
	
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
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
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4,5]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(5, false);
							
							this.fnPrint(true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									 datatable.fnSetColumnVis(5, true);
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
            
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add" style="padding: 5px">
                <div class="box-content">
                	<?php //echo form_open('teacher/classes/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
					  <?php echo form_open(base_url() . 'index.php?admin/classes/create' ,array('class' => 'form-horizontal form-groups-bordered validate', 'target'=>'_top'));?>
                        <div class="padded">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php// echo get_phrase('name');?>Region:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"/>
                                </div>
                            </div>
							
						
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('note');?>:</label>
                                <div class="col-sm-5">
                                    <textarea type="text" class="form-control" name="note"/>   </textarea>
                                </div>
                            </div>  
                  
                        </div>
                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('submit');?></button>
                              </div>
							</div>
                    </form>                
                </div>                
			</div>
			<!----CREATION FORM ENDS-->
		</div>
	</div>
</div>

<br><b><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

