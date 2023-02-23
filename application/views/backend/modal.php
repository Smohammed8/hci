   
   <script type="text/javascript">
	function showAjaxModal(url)
	{
		// SHOWING AJAX PRELOADER IMAGE
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="uploads/preloader.gif"/></div>');
		
		// LOADING THE AJAX MODAL
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
		
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
	}
	</script>



    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"> <img src="uploads/1215.jpg" width="20"height="20"> <?php echo $system_name;?></h4>
                </div>
                
                <div class="modal-body" style="height:500px; overflow:auto;">
                
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
				
				
            </div>
        </div>
    </div>
    
    
    <script>
$(function() {
	 var calendar = $.calendars.instance('ethiopian','am');
	$('#popupDatepicker').calendarsPicker({calendar: calendar}); // change ID into class
	
	//$('#inlineDatepicker').calendarsPicker({calendar: calendar, onSelect: showDate});
});

///function showDate(date) {
	//alert('The date chosen is ' + date);
}
</script>
    
    <script type="text/javascript">
	function confirm_modal(delete_url)
	{
		jQuery('#modal-4').modal('show', {backdrop: 'static'});
		document.getElementById('delete_link').setAttribute('href' , delete_url);
	}
	</script>

    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
                </div>
                
                
                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link"><?php echo get_phrase('delete');?></a>
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo get_phrase('cancel');?></button>
                </div>
            </div>
        </div>
    </div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css2/redmond.calendars.picker.css">
<script  src="<?php echo base_url()?>assets/js/jquery.plugin.js"></script>
<script  src="<?php echo base_url()?>assets/js/jquery.calendars.js"></script>
<script  src="<?php echo base_url()?>assets/js/jquery.calendars.plus.js"></script>
<script  src="<?php echo base_url()?>assets/js/jquery.calendars.picker.js"></script>
<script  src="<?php echo base_url()?>assets/js/jquery.calendars.ethiopian.js"></script>
<script  src="<?php echo base_url()?>assets/js/jquery.calendars.ethiopian-am.js"></script>
<script  src="<?php echo base_url()?>assets/js/jquery.calendars.picker-am.js"></script>