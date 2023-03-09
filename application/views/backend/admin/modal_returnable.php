

<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $Today;
?>




<?php 
$edit_data		=	$this->db->get_where('treatment' , array('encounter_id' => $param2) )->result_array();
foreach($edit_data as $row):

$Bed_fee= $row['Bed_fee'];
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">

			<div class="panel-body" style="background-color:#ccdbdc;">
				
               <?php echo form_open(base_url() . 'index.php?admin/deposit_amount/do_return/', array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top','name'=>'addem', 'enctype' => 'multipart/form-data'));?>
		       
			
				 
                                    <input type="hidden" class="form-control" readonly name=""  size="20" maxlength="10" value="<?php echo $row['Date_of_service'];?>" onFocus="this.blur();"  >
                             
							  <div class="form-group">
                                <label class="col-sm-3 control-label">Existing bed charge<?php //echo get_phrase('deposited_amount');?>:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" readonly  name="deposit" value="<?php echo $Bed_fee ?>"/>
                                </div>
                            </div>
							 
     							     <input type="hidden" class="form-control" readonly name="mrn_id"  size="20" maxlength="10" value="<?php echo $row['mrn_id'];?>" >
                                
                            
                                    <input type="hidden" class="form-control" readonly name="encounter_id"  size="20" maxlength="10" value="<?php echo $row['encounter_id'];?>" >
                                
                            
							   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('number of days');?>:</label>
						
                                <div class="col-sm-5">
										<small style="color:red;"> If you have a patient with more than 90 days duration in bed, please devide  and add service charge </small>
                                    <input type="number" min ="1"  max ="90" placeholder ="max 90 days" class="form-control" name="input1" value=""  onkeypress="return numbersOnly(event,this.value)" onChange="addition(addem)"  required/>
                                </div>
                            </div>
							
								
								   <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo get_phrase('fee_per day');?>:</label>
                                <div class="col-sm-5">
                                    <input type="number"  min ="44"  max="44" value="44"  placeholder ="Birr 44" class="form-control" name="input2"   onkeypress="return numbersOnly(event,this.value)" onChange="addition(addem)" required/>
                                </div>.00
                            </div>
						
								<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('service_charge');?>: </label>
						<div class="col-sm-5">
							<input type="text" class="form-control"  name="Bed_fee"  onFocus="this.blur();" size="20" maxlength="10" \>
						</div>.00
					</div>
					
					<!--
			 	<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label"><?php //echo get_phrase('service_charge');?>: </label>
						<div class="col-sm-5">
							<input type="text" class="form-control"  readonly name="" value="<?php //echo substr('Birr 125',5); ?>"  size="20" maxlength="10" >
						</div>.00
					</div> -->
                    
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
				<?php
endforeach;
?>
<script language="javascript" type="text/javascript">
function addthem() {
    //ADD FIRST INPUT VALUE
    var add1 = document.addem.input1.value
    var add1 = parseFloat(add1, 10)
    add1 = (isNaN(add1))?0:add1;
    
    //ADD SECOND INPUT VALUE
    var add2 = document.addem.input2.value
    var add2 = parseFloat(add2, 10)
    add2 = (isNaN(add2))?0:add2;
    
    //ADD THEM TOGETHER
    return eval(add1) * eval(add2);
}

  
function subtractthem() {
    //SUBTRACT FIRST INPUT VALUE
    var add01 = document.addem.input01.value
    var add01 = parseFloat(add01, 10)
    add01 = (isNaN(add01))?0:add01;

    //SUBTRACT SECOND INPUT VALUE
    var add02 = document.addem.input02.value
    var add02 = parseFloat(add02, 10)
    add02 = (isNaN(add02))?0:add02;
    
    //SUBTRACT THEM TOGETHER
    return eval(add01) + eval(add02);
}

//FUNCTION WILL PARSE THE TOTAL AS DOLLAR FORMAT
function dollarformat(num) {
    num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num)) num = "0";
        cents = Math.floor((num*100+0.5)%100);
        num = Math.floor((num*100+0.5)/100).toString();
    if(cents < 10) cents = "0" + cents;
        for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
            num = num.substring(0,num.length-(4*i+3)) +num.substring(num.length-(4*i+3));
		   // num = num.substring(0,num.length-(4*i+3))+','+num.substring(num.length-(4*i+3));
     //return ('Birr ' + num + '.' + cents);
	  return ('' + num + '.' + cents);
}

//CALCUATES THE ADD/SUBTRACT VALUES
function calculate() {
   var x = addthem()
   var y = subtractthem()            
   if(x>y) {
    max = x+y
    document.addem.total.value = dollarformat(max)
   }
   if(x<y) {
    max = dollarformat(y-x)
    max = "-" + max
    document.addem.total.value = max    
   }
   if (x==y) {
    max = x-y
    document.addem.total.value = dollarformat(max)
   }  
}

function addition() {
    document.addem.Bed_fee.value = addthem()
    document.addem.Bed_fee.value = dollarformat(document.addem.Bed_fee.value)
    calculate()
}

function subtration() {
   document.addem.answer2.value = subtractthem()
   document.addem.answer2.value = dollarformat(document.addem.answer2.value)
   calculate()
}

function calculating() {
   document.addem.total.value = calculate()
   document.addem.total.value = dollarformat(document.addem.total.value)
}
</script>
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
  </script>
