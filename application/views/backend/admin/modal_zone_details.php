
<style>
h1{
	
	color:white;
	
}

</style>

<?php
				$tb=mysql_query("SELECT * FROM  patients where agreement='CB Health Insurance'");
                                    $b = mysql_num_rows($tb);
									
								//$tc=mysql_query("SELECT * FROM  patients where agreement='Credit Service'");
                                 //$cs = mysql_num_rows($tc);
								 
								 $tcr=mysql_query("SELECT * FROM  patients where agreement='Health Care finance'");
								 ?>
								 
								 
<?php 
$edit_data		=	$this->db->get_where('section' , array('zone_id' => $param2) )->result_array();
foreach ($edit_data as $row2):
?>
<?php endforeach;?>
	
		                	<?php
			                $s="SELECT  * FROM  section where zone_id ='$param2'";
                            $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $class_id = $rows['class_id']; 
						    $section_id = $rows['section_id'];
			                }
							
								$cb = mysql_query("SELECT * FROM  patients where section_id ='$section_id' and class_id='$class_id' and agreement='CB Health Insurance'");
			                    $cbh = mysql_num_rows($cb);
			 
			 	                $cs=   mysql_query("SELECT * FROM  patients where section_id ='$section_id' and class_id='$class_id' and agreement='Health Care finance'");
			                    $css= mysql_num_rows($cs);
							
			 $tcrx=mysql_query("SELECT * FROM  parent where section_id ='$section_id' and class_id='$class_id'");
			 $s = mysql_num_rows($tcrx);
								 ?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-flag"></i>
			
					<span style="padding:5px; border:#4e95f4 2px solid; font-size:16px;font-weight:bold;"> <?php echo $row2['name'];?> Information </span>
            	</div>
            </div>
	
			         <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo  $css;?>" data-postfix="" data-duration="500" data-delay="0">0</div>
							   <hr>
                    
                       <h1><?php echo get_phrase('health_care_finance');?></h1>
         
				    
                </div>
                
            </div>
			
			           <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-users"></i></div>
       
                    <div class="num" data-start="0" data-end="<?php echo  $cbh;?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                      <hr>
                    <h2><?php echo get_phrase('CBHI_beneficiary');?></h2>
         
				     
                </div>
              
            </div>
		
								 
			  <div class="col-md-12">
            
                <div class="tile-stats tile-while">
                    <div class="icon"><i class="fa fa-flag"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $s;?>" data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                     <hr>
                    <h1><?php echo get_phrase('#Total Disrricts');?> </h1>
         
				     
                </div>
              
            </div>
			   
        </div>
    </div>
</div>



