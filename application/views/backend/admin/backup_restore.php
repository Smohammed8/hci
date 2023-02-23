<style> body{  font-family: sans-serif;  color:black;}  	.hoverTable{		width:70%; 		border-collapse:collapse; 	}	.hoverTable td{ 		padding:3px; border:#4e95f4 1px solid;	}		    .hoverTable tr:hover {          background-color: #ffff99;    }	.asad{		background-color:pink;			}	</style><div class="box">
	<div class="box-header">
    
    	<!------CONTROL TABS START------->
		<ul class="nav nav-tabs nav-tabs-left">
			<li class="active">
            	<a href="#backup" data-toggle="tab"><i class="fa fa-dashboard (alias)"></i> 
					<?php echo get_phrase('database');?> tables
                    	</a></li>
			<li class="">
            	<a href="#restore" data-toggle="tab"><i class="fa fa-upload" ></i> 
					<?php echo get_phrase('restore');?>
                    	</a></li>													<li class="">                             <?php    $db ="all_backup";?>                	<a href="<?php echo base_url();?>index.php?admin/backup/<?php echo $db;?>"> <i class="fa fa-download" ></i>									<?php echo get_phrase('backup');?>                    	</a>											</li>
		</ul>
    	<!------CONTROL TABS END------->
        
	</div>
	<div class="box-content padded">
		<div class="tab-content">            
            <!----TABLE LISTING STARTS--->
             <div class="tab-pane box active span7" id="backup">				<center>                <table cellpadding="0" cellspacing="0" border="0" class="table table-normal" >									       
                    	<?php 
						for($i = 1; $i<= 22; $i++):
						
							if($i	==	    1)	$type	='admin';
							else if($i	==	2)$type	=	'ci_sessions';
							else if($i	==	3)$type	=	'class';
							else if($i	==	4)$type	=	'encounter';
							else if($i	==	5)$type	=	'document';             											else if($i	==	6) $type=	'exam';
							else if($i	==	7)$type=	'kebele';
							else if($i	==	8)$type=	'noticeboard';
							else if($i	==	9)$type=	'language';														else if($i	==	10)$type	='log';							else if($i	==	11)$type	='message';							else if($i	==	12)$type=	'message_thread';							else if($i	==	13)$type=	'parent';							else if($i	==	14)$type=	'patients';							else if($i	==	15)$type=	'section';							else if($i	==	16)$type=	'settings';							else if($i	==	17)$type=	'region';							else if($i	==	18)$type=	'services';							else if($i	==	19)$type=	'treatment';																			else if($i	==	20)$type=	'woreda';							else if($i	==	21)$type=	'zones';							else if($i	==	22)$type=	'all';
						
							?>
						 <tr class="header-tr" bgcolor="lightblue" height="30px;">
								<td><?php echo get_phrase($type);?></td>
								<td align="center">
									<a href="<?php echo base_url();?>index.php?admin/backup_restore/create/<?php echo $type;?>" 
										class="btn btn-success" title="Backup this table" rel="tooltip" data-original-title="download backup"><i class="fa fa-download" ></i>
											</a>
									<a href="<?php echo base_url();?>index.php?admin/backup_restore/delete/<?php echo $type;?>" 
										class="btn btn-danger" title="Trancate this table" rel="tooltip" data-original-title="delete data" onclick="return confirm('delete confirm?');"><i class="fa fa-times"></i>
											</a>
								</td>
							</tr>
							<?php 
						endfor;
						?>
                    </tbody>
                </table>
                </center>
			</div>
            <!----TABLE LISTING ENDS--->
            
            <!----RESTORE--->
            <div class="tab-pane box  span6" id="restore">

                <?php echo form_open('admin/backup_restore/restore' , array('enctype' => 'multipart/form-data'));?>
                    <input name="userfile" type="file" />
                    <center><input type="submit" class="btn btn-blue" value="<?php echo get_phrase('upload_&_restore_from_backup');?>" /></center>
                    <br />                    <br /><br />                    <br /><br />					<br /><br /> <br />					<br /><br /><br /> 					<br /><br /> 					<br /><br />					<br /><br />					<br /><br />                    <br /><br />                    <br /><br />                    <br/><br />                    <br/><br />                    <br /><br />                    <br /><br />                    <br /><br />                    <br /><br />                    <br /><br />                    <br /><br />                    <br /><br />
                <?php echo form_close();?>
			</div>
            <!----RESTORE ENDS--->
		</div>
	</div>
</div>           <br /><br />		              <br /><br />