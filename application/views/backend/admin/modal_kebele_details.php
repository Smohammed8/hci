
<style>
h1{
	
	color:white;
	
}

</style>
<?php 
	$edit_data = $this->db->get_where('kebele' , array('kebele_id' => $param2))->result_array();
	foreach ($edit_data as $row):
?>
<?php endforeach;?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="fa fa-flag"></i>
			
					<span style="padding:5px; border:#4e95f4 2px solid; font-size:16px;font-weight:bold;"> <?php echo $row['name'];?> <?php echo get_phrase('kekebe_details');?> </span>
            	</div>
            </div>
	
			         <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('student');?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
							   <hr>
                    
                    <h1><?php echo get_phrase('Health care finance beneficiary');?></h1>
         
				    
                </div>
                
            </div>
			
			           <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher');?>" data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                      <hr>
                    <h2><?php echo get_phrase('CBHI Beneficiary');?></h2>
         
				     
                </div>
              
            </div>
			  <div class="col-md-12">
            
                <div class="tile-stats tile-while">
                    <div class="icon"><i class="fa fa-flag"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher');?>" data-postfix="" data-duration="800" data-delay="0">80</div>
                    
                     <hr>
                    <h1>#<?php echo get_phrase('total_beneficiary');?> </h1>
         
				     
                </div>
              
            </div>
			   
        </div>
    </div>
</div>



