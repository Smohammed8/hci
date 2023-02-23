<?php 
	$edit_data = $this->db->get_where('message' , array('message_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-edit"></i>
					Edit your message here
            	</div>
            </div>
	<div class="panel-body">		
    <?php echo form_open(base_url() . 'index.php?admin/message/edit/'.$row['message_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	<div class="mail-reply">
    <div class="compose-message-editor">
        <textarea row ="5" class="form-control wysihtml5"  data-stylesheet-url="assets/css/wysihtml5-color.css" name="message" id="sample_wysiwyg"><?php echo $row['message'];?></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-icon pull-right">
        <?php echo get_phrase('update'); ?>
        <i class="entypo-mail"></i>
    </button>
    <br><br>
    </div>		
    <?php echo form_close();?>
        </div>
        </div>
    </div>
</div>
<?php endforeach;?>