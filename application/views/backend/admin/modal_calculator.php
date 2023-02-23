
<script type="text/javascript">
  function numbersOnly(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 3) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }
  function card(evt, val) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
    if ( (charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 9 || charCode == 13) {
      if (val.length > 1) {
        return(false);
      }
      else {
        return(true);
      }
    };
    return(false);
  }
  function getTotal(form) {
    var count = 0;
    var obj;
    var val;
    for (var i=0; i<form.elements.length; i++) {
      obj = form.elements[i];
      if (obj.type == "text" && obj.name.substring(0,5) == "field") {
        if (obj.value.length > 0) {
          val = parseInt(obj.value);
          count += val;
        }
      }
    }
    form.total.value = count.toString();

  }
</script>

<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $Today;
?>
<?php 
$edit_data		=	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
foreach($edit_data as $row):

$mrn_id= $row['mrn_id'];
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">

			<div class="panel-body" style="">
				
               <?php echo form_open(base_url() . '', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
		       
					<p><b><u> Service charge Calculator</u><b></p>
					
				
				 
							     <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('card');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return card(event,this.value)" required/>
                                </div>.00
                            </div>
							
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('lab');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return numbersOnly(event,this.value)" required/>
                                </div>.00
                            </div>
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('drug');?> :</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return numbersOnly(event,this.value)"  required/>
                                </div>.00
                            </div>
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('procedure');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return numbersOnly(event,this.value)" required/>
                                </div>.00
                            </div>
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('imaging');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return numbersOnly(event,this.value)" required/>
                                </div>.00
                            </div>
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('bed');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return numbersOnly(event,this.value)" required/>
                                </div>.00
                            </div>
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('other');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="field1" value="" onBlur="getTotal(this.form)" onkeypress="return numbersOnly(event,this.value)" required/>
                                </div>.00
                            </div>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php //echo get_phrase('username');?>ETB #Total: </label>
						<div class="col-sm-5">
							<input type="text" class="form-control"  readonly name="total" value="" >
						</div>.00
					</div>  
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
				<?php
endforeach;
?>