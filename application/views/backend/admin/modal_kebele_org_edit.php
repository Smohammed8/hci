  
<script>
jQuery(document).ready(function() {
	
	// 1 FIRST NAME  - convert textbox user entered text to uppercase
	jQuery('#txtuppercase').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
		// 1 MIDDLE NAME  - convert textbox user entered text to uppercase
	jQuery('#txtuppercase1').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
		// 1 LAST NAME - convert textbox user entered text to uppercase
	jQuery('#txtuppercase2').keyup(function() {
		$(this).val($(this).val().toUpperCase());
	});	
	
	// 1 First name Capitalize string first character to uppercase
	jQuery('#txtcapital').keyup(function() {
		var caps = jQuery('#txtcapital').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital').val(caps);
	});
		// 1 Middle name Capitalize string first character to uppercase
	jQuery('#txtcapital2').keyup(function() {
		var caps = jQuery('#txtcapital2').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital2').val(caps);
	});
		
	// 2 Last name Capitalize string first character to uppercase
	jQuery('#txtcapital3').keyup(function() {
		var caps = jQuery('#txtcapital3').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital3').val(caps);
	});
		// 2 Kebele Capitalize string first character to uppercase
	jQuery('#txtcapital4').keyup(function() {
		var caps = jQuery('#txtcapital4').val(); 
		caps = caps.charAt(0).toUpperCase() + caps.slice(1);
        jQuery('#txtcapital4').val(caps);
	});
	
	// 3 Last Name Capitalize string every 1st chacter of word to uppercase
	jQuery('#txt_firstCapital').keyup(function() 
	{
		var str = jQuery('#txt_firstCapital').val();
       
		
		var spart = str.split(" ");
		for ( var i = 0; i < spart.length; i++ )
		{
			var j = spart[i].charAt(0).toUpperCase();
			spart[i] = j + spart[i].substr(1);
		}
      jQuery('#txt_firstCapital').val(spart.join(" "));
	
	});
});

</script>



                          <?php
	                        $user = $this->session->userdata('admin_id'); 
						   $s = "SELECT * FROM `admin` where admin_id ='$user'";
                           $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
						   $role = $rows['role']; 	
						   }
						 $admin_id = $this->session->userdata('admin_id'); 
	                       $re = mysql_query("SELECT  * FROM link_tbl where user_id ='$admin_id'") or die(mysql_error());;
                            while($row3 = mysql_fetch_array($re)){
                             $region =   $row3['region']; 
						     $zone   =   $row3['zone']; 
							 $woreda =   $row3['woreda']; 
						      } 
							?>
      
						    
						    
<?php 
	$edit_data = $this->db->get_where('kebele' , array('kebele_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title">
            		<i class="fa fa-edit"></i>
					<?php echo get_phrase('edit kebele');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url().'index.php?admin/manege_kebele/edit/'.$row['kebele_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
                    
			<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('code');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control"  name="kebele_code" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['kebele_code'];?>">
						</div>
					</div>  	   
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('kebele_name');?></label>
                        
						<div class="col-sm-5">
							<input type="text" class="form-control" id="txt_firstCapital" name="name" data-validate="required" data-message-required="<?php echo get_phrase('value_required');?>"
                            	value="<?php echo $row['name'];?>">
						</div>
					</div>
					
	                 	<input type="hidden"  name="region" class="form-control"  value="<?php echo $row['region_id'];?>">
						<input type="hidden"  name="zone"   class="form-control"  value="<?php echo $row['zone_id'];?>">
						<input type="hidden"  name="woreda" class="form-control"  value="<?php echo $row['woreda_id'];?>">  
					
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-primary pull-right"><?php echo get_phrase('update');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
