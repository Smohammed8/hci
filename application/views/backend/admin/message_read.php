
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
	 }  else{
		echo "$hours hours ago";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "Yesterday";
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
		echo "A month ago";
	}else{
		echo "$months months ago";
	}
}
//Years
else{
	if($years==1){
		echo "One year ago";
	}else{
		echo "$years years ago";
	}
}
}

?>
<?php echo form_open(base_url() . 'index.php?admin/message/send_reply/' . $current_message_thread_code, array('enctype' => 'multipart/form-data')); ?>
<div class="mail-reply">
    <div class="compose-message-editor">
        <textarea row="5" class="form-control wysihtml5" data-stylesheet-url="assets/css/wysihtml5-color.css" name="message" placeholder="<?php echo get_phrase('reply_message'); ?>" id="sample_wysiwyg"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-icon pull-right">
        <?php echo get_phrase('send'); ?>
        <i class="entypo-mail"></i>
    </button>
    <br><br>
</div>
<?php echo form_close();?>
<?php

//$messages = $this->db->get_where('message', array('message_thread_code' => $current_message_thread_code ))->result_array();
	   
	  $ress  = mysql_query("SELECT * FROM `message` where message_thread_code ='$current_message_thread_code' order by message_id DESC limit 3") or die(mysql_error());
                     
           while($row = mysql_fetch_array($ress)){
							   							   
//foreach ($messages as $row):

    $sender = explode('-', $row['sender']);
    $sender_account_type = $sender[0];
    $sender_id = $sender[1];
    ?>
    <div class="mail-info">

        <div class="mail-sender " style="padding:7px;" >

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                <?php //if( $sender_account_type = 'admin' ) { ?>
                    <img src="<?php echo $this->crud_model->get_image_url($sender_account_type, $sender_id); ?>" class="img-circle" width="30"> 
                <?php //} else{ ?>
                <span style="color:green;font-wieght:bold;"><?php echo $this->db->get_where($sender_account_type, array($sender_account_type . '_id' => $sender_id))->row()->name; ?></span>
				<?php //}?>
			</a>
        </div>
<div class="mail-date" style="padding:7px;">
		
		
          

  <?php //echo to_time_ago(strtotime($row['timestamp'])); ?> 
  
  <?php
  $curenttime = $row['timestamp'];
  $time_ago =strtotime($curenttime); ?>
    <i class="entypo-clock"></i>  
	<?php echo timeAgo($time_ago);
?>

        </div>

    </div>

    <div class="mail-text">			
        <p style="font-size:13px;font-weight:bold"> <strong><?php echo $row['message']; ?></strong></p>
		
		
		
    </div>
	    <div class="btn btn-sm btn-default pull-right">
	
		
			 <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/message/delete/<?php echo $row['message_id'];?>');" 	
		style="color:red;font-wieght:bold"><i class="fa fa-trash-o"></i> <?php echo get_phrase('delete');?> </a>
		
        </div>
		<div class="btn btn-sm btn-default pull-right">
	
			 <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_message_edit/<?php echo $row['message_id'];?>');" 	
		style="color:black;font-wieght:bold"><i class="fa fa-edit"></i> <?php echo get_phrase('edit');?> </a>
		
        </div>

		   <?php } //endforeach; ?>

