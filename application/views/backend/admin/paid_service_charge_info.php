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

	$year  = $_POST["year"];
	$qt    =$_POST["qt"];
	
		    $region    =$_POST["region"];
			$zone      =$_POST["zone"];
	    	$woreda    =$_POST["woreda"];
			$class_id      =$_POST["class_id"];
			$section_id    =$_POST["section_id"];
			$woreda_id     =$_POST["woreda_id"];
    $backyear    =$year -1;   
    $mm1=11; $dd1=1; $mm2=1; $dd2=30;
    $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
    $fyear = trim($year .'-'.$mm2.'-'.$dd2);    
       
	?>
	<br><br>
	<p style="text-align:right;"> 
            <form action="<?php echo base_url(); ?>index.php?admin/finance_paid_print_by_time_pdf/<?php echo $year;?>/<?php echo $qt; ?>" method="post">    	
				 
				<input type="hidden" name="class_id" value="<?php echo $class_id;?>">		
				<input type="hidden" name="section_id" value="<?php echo $section_id;?>">
				<input type="hidden" name="woreda_id" value="<?php echo $woreda_id ;?>">
			
				 <input type="hidden" name="woreda" value="<?php echo $this->crud_model->get_woreda_name_by_id($woreda_id,$section_id);?>"> 
				 <input type="hidden" name="zone" value="<?php echo $this->crud_model->get_section_name_by_id($section_id,$class_id);?>">   
				 <input type="hidden" name="region" value="<?php echo $this->crud_model->get_type_name_by_id('class',$class_id);?>"> 
				 
				<input type="hidden" name="year"  value="<?php echo $year;?>"> 
                <input type="hidden" name="qt"  value="<?php echo $qt; ?>"> 				
			    <button type="submit" class="btn btn-primary pull-right" style="font-weight:bold;" name="print"><i class="fa fa-print"></i> PDF</button>      
            </form> 
  </p></h2>
  <p>
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php?admin/dashboard" class="btn btn-primary pull-right"><i class="fa fa-times"></i>&nbsp;Close </a> </p>
      

<h3> <i class="fa fa-flag"></i>  <?php echo $year;?><i class="fa fa-angle-double-right"></i><?php echo $woreda;?> <i class="fa fa-angle-double-right"></i>Quarter-<?php echo $qt;?></h3> 
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
                            <th><div><?php echo get_phrase('card');?></div></th>						
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>														
							<th><div><?php echo get_phrase('procedure');?></div></th>							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>								
							<th><div>#<?php echo get_phrase('total');?>(ETB)</div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
						
                            
                        </tr>
                    </thead>
                    <tbody>
					
			  <?php 
			      $backyear    =$year-1;   
                  $mm1=11; $dd1=1; $mm2=1; $dd2=30;
                  $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
                  $fyear = trim($year .'-'.$mm2.'-'.$dd2); 
              if($qt ==1) 
		        $sql="select * from treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')";     
			  if($qt ==2)
	            $sql="select * from treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')";     
			  if($qt ==3)
	            $sql="select * from treatment where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')";    
		      if($qt ==4)
                $sql="select * from treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year='$year')";  
			  		   
			  
					   $count = 1;
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No covered service payment in this year or quarter!</div>'; 
	 
                              }
                         while($row2=mysql_fetch_array($result)){
                             $mrn_id= $row2['mrn_id'];
                            ?>
							<?php
							  $sq = mysql_query("select  name from patients where mrn_id ='$mrn_id'"); 
				  	   while($d=mysql_fetch_array($sq)){
			                 $name= $d['name'];  
					   }
					 ?>
                        <tr>	
						 
						   <td><?php echo $count++;?></td>
							   <td><?php echo $row2['mrn_id'];?></td>
							    <td><?php echo $row2['CBHI_code'];?></td>
								
								<td><?php echo $name;?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
							    <!--   <td><?php //echo $row2['diagniss'];?> </td> -->
							       <td style="text-align: right;"><?php echo $row2['card'];?></td>
							       <td style="text-align: right;"><?php echo $row2['lab'];?></td>
								   <td style="text-align: right;"><?php echo $row2['Imaging'];?></td>
	    						   <td style="text-align: right;"><?php echo $row2['surgery'];?></td>
							       <td style="text-align: right;"><?php echo $row2['drugs'];?></td>
								   <td style="text-align: right;"><?php echo $row2['Bed_fee'];?></td>
								   <td style="text-align: right;"><?php echo $row2['other'];?></td>
								    <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								  <td style="text-align: right;"><b><u>
								   
								   	<?php  echo number_format($subtotal,2); ?></u></b> </td>
								  
								   
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
    		
			if($qt =='1')
		      $result1 = mysql_query("SELECT sum(card) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result1 = mysql_query("SELECT sum(card) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result1 = mysql_query("SELECT sum(card) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result1 = mysql_query(" SELECT sum(card) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
			while ($row11 = mysql_fetch_array($result1)) {
				$card2 = $row11['sum(card)'];
    	?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($card2,2); ?></u> </b> </td>
				
    	<?php } ?>			
		 <?php
		 
		   if($qt =='1')
		      $result12 = mysql_query("SELECT sum(lab) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result12 = mysql_query("SELECT sum(lab) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result12 = mysql_query("SELECT sum(lab)FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result12 = mysql_query(" SELECT sum(lab) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
    		while ($row21 = mysql_fetch_array($result12)) {
			$lab2  =	$row21['sum(lab)'];
			
		
    	?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($lab2,2); ?></u> </b> </td>	   
    	<?php } ?> 
			 <?php
			 
			 if($qt =='1')
		      $result13 = mysql_query("SELECT sum(Imaging) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result13 = mysql_query("SELECT sum(Imaging) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result13 = mysql_query("SELECT sum(Imaging) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result13 = mysql_query("SELECT sum(Imaging) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
    		while ($row31 = mysql_fetch_array($result13)) {
				$Imaging2 = $row31['sum(Imaging)'];
    	?>
          		  
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($Imaging2,2); ?></u> </b> </td>
				
		   
    	     <?php } ?>
			 <?php
			 
			  if($qt =='1')
		      $result14 = mysql_query("SELECT sum(surgery) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result14 = mysql_query("SELECT sum(surgery) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result14 = mysql_query("SELECT sum(surgery) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result14 = mysql_query(" SELECT sum(surgery) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
			   
    		while ($row41 = mysql_fetch_array($result14)) {
				$surgery2 = $row41['sum(surgery)'];
    	?>
      
		  
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($surgery2,2); ?></u> </b> </td>
				
		   
    	<?php } ?>				         
			 <?php
			 
			 if($qt =='1')
		      $result15 = mysql_query("SELECT sum(drugs) FROM treatment where  Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result15 = mysql_query("SELECT sum(drugs) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result15 = mysql_query("SELECT sum(drugs) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result15 = mysql_query(" SELECT sum(drugs) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    		
			while ($row51 = mysql_fetch_array($result15)) {
				$drugs2 = $row51['sum(drugs)'];
    	?>
        	 		   
		      <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($drugs2,2); ?></u> </b> </td>
				
				
		   
    	      <?php } ?>	
	
					 <?php
					 
			if($qt =='1')
		      $result16 = mysql_query(" SELECT sum(Bed_fee) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result16 = mysql_query(" SELECT sum(Bed_fee) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result16  = mysql_query(" SELECT sum(Bed_fee) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result16 = mysql_query(" SELECT sum(Bed_fee) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    		
	         while ($row61 = mysql_fetch_array($result16)) {
				$Bed_fee2  = $row61['sum(Bed_fee)'];
    	?>
          	   
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($Bed_fee2,2); ?></u> </b> </td>
		   
    	<?php } ?>				   
			 			 
									 
		<?php
										 
			if($qt =='1')
		      $result17 = mysql_query("SELECT sum(other) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result17 = mysql_query("SELECT sum(other) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result17 = mysql_query("SELECT sum(other) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result17 = mysql_query(" SELECT sum(other) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    	
    		while ($row71 = mysql_fetch_array($result17)) {
				
				$other2 =  $row71['sum(other)'];
    	?>
        
		  
		   <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($other2,2); ?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
			 
			 if($qt =='1')
		      $result18 = mysql_query("SELECT sum(total) FROM treatment where Date_of_service BETWEEN  CAST('$byear'  AS DATE) and CAST('$fyear'  AS DATE) and (region='$class_id' and paid='No' and  zone='$section_id' and woreda='$woreda_id')") or die(mysql_error());  
		 		   
		    if($qt =='2')
	           $result18 = mysql_query("SELECT sum(total) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());  
			     
			if($qt =='3')
	          $result18 = mysql_query("SELECT sum(total) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error());
			     
		    if($qt =='4')
               $result18 = mysql_query(" SELECT sum(total) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and paid='No' and woreda='$woreda_id' and year ='$year')") or die(mysql_error()); 
    	
             while ($row8 = mysql_fetch_array($result18)) {
    	?>

   
		     <?php $grandtotal =$card2 +$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		    <td style="background-color:gray;text-align: right;" > <b>  <u>
		
			    <?php  echo number_format($grandtotal,2); ?></u> </b> </td>
		
    	<?php } ?>
							         
	 </tr>
							    
        </tfoot>							
       </tbody>
</table>
    <p style="font-size:25px;text-align:right;" > #ETB  <u><?php  echo number_format($grandtotal,2); ?></u> </p>
	<?php }?>
<br><br>
<br><br><br><br><br><br><br>