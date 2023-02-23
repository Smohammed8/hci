 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:3px; border:#4e95f4 1px solid;
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
<?php
 if(isset($_POST['search'])){ 

	$class_id    = $_POST["class_id"];
	$section_id  = $_POST["section_id"];
	$woreda_id   = trim($_POST["woreda_id"]);
     }
	?>
	
<br><br>


<p style="text-align:right;"> 
  
    <form action="<?php echo base_url(); ?>index.php?admin/unpaid_woreda_list_pdf" method="post">    
		        <input type="hidden" name="region" value="<?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?>"> 
                <input type="hidden" name="zone"   value="<?php echo $this->crud_model->get_section_name_by_id($section_id, $class_id);?>"> 
                <input type="hidden" name="woreda" value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda_id ,$section_id);?>"> 
				<input type="hidden" name="class_id"     value="<?php echo $class_id;  ?>"> 
                <input type="hidden" name="section_id"   value="<?php echo $section_id; ?>"> 
                <input type="hidden" name="woreda_id"    value="<?php echo  $woreda_id; ?>"> 				
			     <button type="submit" class="btn btn-primary pull-right" style="font-weight:bold;" name="search"><i class="fa fa-print"></i> PDF</button> 
          
  </form> 
  </p></h2>
  <p>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php?admin/dashboard" class="btn btn-primary pull-right"><i class="fa fa-times"></i>&nbsp;Close </a> </p>
  
<h3> <i class="fa fa-flag"></i><u> <?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?><i class="fa fa-angle-double-right"></i><?php echo $this->crud_model->get_section_name_by_id($section_id, $class_id);?> <i class="fa fa-angle-double-right"></i><?php echo $this->crud_model->get_woreda_name_by_id($woreda_id ,$section_id);?>(<?php echo $woreda_id;?>)</u></h3><p style="color:red;">Uncovered service payment</style>


<table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="6"><?php echo get_phrase('patient encounter status');?></td>
								  
							
                               
							       <td  colspan="8"><?php echo get_phrase('payment information by servics type');?></td>
								   						     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th><div>#</div></th>
					    	<th><div> <?php echo get_phrase('mrn');?></div></th>
							<th><div> CBHI #Code</div></th>						
                            <th><div> <?php echo get_phrase('name');?></div></th>
                            <th><div><?php //echo get_phrase('join_date');?>Date:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>						
                            <th style="text-align: right;"><div><?php echo get_phrase('card');?></div></th>						
                            <th style="text-align: right;"><div><?php echo get_phrase('lab');?> </div></th>
							<th style="text-align: right;"><div><?php echo get_phrase('imaging');?></div></th>														
							<th style="text-align: right;"><div><?php echo get_phrase('procedure');?></div></th>							
                            <th style="text-align: right;"><div><?php echo get_phrase('drug');?></div></th>
							<th style="text-align: right;"><div><?php echo get_phrase('bed');?></div></th>
						    <th style="text-align: right;"><div><?php echo get_phrase('other');?></div></th>								
							<th style="text-align: right;"><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th style="text-align: right;"><div><?php echo get_phrase('remark');?></div></th>
						   
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
				$i =1;
                   $sql="select * from treatment  where  region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No service charge found in this woreda!</div>'; 
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id']
                            ?>
							<?php
							  $sq = mysql_query("select  name from patients where mrn_id ='$mrn_id'"); 
				  	   while($d=mysql_fetch_array($sq)){
			                 $name= $d['name'];  
					         $agreement= $d['agreement']; 
					   }
					 ?>
					 
					 
					 
                                <tr>	
                                <td><?php echo $i++;?></td>								
							    <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								<?php  $agreement = $row2['agreement']; ?>
								<td><?php echo ucwords(strtolower($name));?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
							    <!--   <td><?php //echo $row2['diagniss'];?> </td> -->
								
							
							       <td style="text-align: right;"><?php echo number_format($row2['card'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['lab'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Imaging'],2);?></td>
	    						   <td style="text-align: right;"><?php echo number_format($row2['surgery'],2);?></td>
							       <td style="text-align: right;"><?php echo number_format($row2['drugs'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['Bed_fee'],2);?></td>
								   <td style="text-align: right;"><?php echo number_format($row2['other'],2);?></td>
								
	
								   
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = mysql_query("update treatment set total ='$subtotal' where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and  paid='No'"); ?>
									
								   <td style="text-align: right;"><b><u>
								   
								   	<?php echo number_format($subtotal,2);?></u></b> </td>
								  
								   
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="6" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
           <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and  paid='No'") or die(mysql_error());
    		while ($row11 = mysql_fetch_array($result1)) {
				$card2 = $row11['sum(card)'];
			}
    	?>
               

   
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			 	<?php echo number_format($card2,2);?></u> </b> </td>
					
		 <?php
    		$result21 = mysql_query("SELECT sum(lab) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row21 = mysql_fetch_array($result21)) {
			$lab2  =	$row21['sum(lab)'];
			
			}
    	?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			  <?php echo number_format($lab2,2);?></u> </b> </td>	   
    
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row31 = mysql_fetch_array($result3)) {
				$Imaging2 = $row31['sum(Imaging)'];
			}
    	?>
          		  
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($Imaging2,2);?></u> </b> </td>
				

			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row41 = mysql_fetch_array($result4)) {
				$surgery2 = $row41['sum(surgery)'];
			}
    	?>
      
		  
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($surgery2,2);?></u> </b> </td>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row51 = mysql_fetch_array($result5)) {
				$drugs2 = $row51['sum(drugs)'];
			}
    	?>
        	 		   
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($drugs2,2);?></u> </b> </td>
					
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row61 = mysql_fetch_array($result6)) {
				$Bed_fee2  = $row61['sum(Bed_fee)'];
			}
    	?>
          	   
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($Bed_fee2,2);?></u> </b> </td>			 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row71 = mysql_fetch_array($result7)) {
				
				$other2 =  $row71['sum(other)'];
			}
    	?>
        
		  
		   <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($other2,2);?></u> </b> </td>

		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where region='$class_id'  and zone ='$section_id' and woreda ='$woreda_id' and paid='No'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
				
				$total2 =  $row71['sum(total)'];
			}
    	?>
		     <?php $grandtotal =$card2 +$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php echo number_format($grandtotal,2);?></u> </b> </td>
		 </tr>
							    
          </tfoot>							
       </tbody>
</table>
  <?php $years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                                         
                                
								endforeach;
							  ?>
		
			       <p style="font-size:25px;text-align:right;" > ETB <u> <?php echo number_format($grandtotal,2);?></u> </p>

   <?php 
								$years = $this->db->get('year')->result_array();
								foreach($years as $row2):
								
							   $year = $row2['max_year'];
                               $min_year = $row2['min_year'];   
                                
								endforeach;
							  ?>
				<label for="" class="col-sm-2 control-label"><b>Filter :</b></label>
	
        <form action="<?php echo base_url(); ?>index.php?admin/paid_service_charge/<?php echo $admin_id;?>" method="post">   


  		        <input type="hidden" name="region" value="<?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?>"> 
                <input type="hidden" name="zone"   value="<?php echo $this->crud_model->get_section_name_by_id($section_id, $class_id);?>"> 
                <input type="hidden" name="woreda" value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda_id ,$section_id);?>"> 

				
				<input type="hidden" name="class_id"     value="<?php echo $class_id;  ?>"> 
                <input type="hidden" name="section_id"   value="<?php echo $section_id; ?>"> 
                <input type="hidden" name="woreda_id"    value="<?php echo  $woreda_id; ?>">
				
			<div class="col-sm-3">
			<select name="year" class="form-control" required="required" id="class_id">
                              <option value=""><?php echo get_phrase('year');?></option>
                               <?php
							
							for($i=$min_year;$i<=$year ;$i++){	
							echo"<option value='$i'>$i</option>";
							}
						?>
							 
                          </select>								
			                  </div>               
				
			              <div class="col-sm-3">
				 		<select name="qt" class="form-control" data-validate="required" id="class_id" required="required">
                         <option value=""><?php echo get_phrase('quarter');?></option>	   
					    <option value="1"><?php echo get_phrase('First Quarter');?>[ሐምሌ,ነሐሴ,ጳጉሜ,መስከረም]</option>
						<option value="2"><?php echo get_phrase('Second Quarter');?>[ጥቅምት,ሕዳር,ታሕሣስ]</option>
						<option value="3"><?php echo get_phrase('Third Quarter');?>[ጥር,የካቲት,መጋቢት]</option>
						<option value="4"><?php echo get_phrase('Fourth Quarter');?>[ሚያዚያ,ግንቦት,ሰኔ]</option>
							 
			                    </select>					
			                  </div> 
         <div class="form-group">
         
				   <div class="col-sm-2">
			 <button type="submit" class="btn btn-primary" style="font-weight:bold;" name="search"><i class="fa fa-users"></i> <?php echo get_phrase('select');?></button> 
             </div>
	 </div>					 
                
	  <?php //echo form_close();?>
  </form>
<br><br><br><br><br><br><br><br><br><br><br>