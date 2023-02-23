 <style>
 body{
  font-family: sans-serif;
  color:black;

}
  	.hoverTable{
		width:70%; 
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
	
  <?php 
   
                          $user = $this->session->userdata('admin_id'); 	
	                       $sql = "SELECT * FROM `link_tbl` where user_id ='$user'";
                            $ress = mysql_query($sql) or die(mysql_error());
                            while($row3 = mysql_fetch_array($ress)){
                                $region = $row3["region"]; 
						        $zone   = $row3["zone"]; 
							    $woreda = $row3["woreda"]; 
						     } ?>	
<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
?>
<?php   $admin_id = $this->session->userdata('admin_id'); ?>	
<?php
   if(isset($_POST['search'])){ 
	$class_id      = $_POST["region"];
	$section_id    = $_POST["zone"];
	$woreda_id     = $_POST["woreda"];
	$yyyy          = $_POST["year"];
	$qt            = $_POST["quarter"];
   // $backyear     = $yyyy-1;
    $backyear     = $yyyy;
  	
	?>	
                      	
                           <?php
						  $s="SELECT name FROM `admin` where admin_id='$admin_id'";
                          $ress = mysql_query($s) or die(mysql_error());
                           while($rows = mysql_fetch_array($ress)){
                           $name = $rows['name']; 
						    $role = $rows['role']; 
			                }
					   ?>
            <form action="<?php echo base_url(); ?>index.php?admin/my_finance_print_pdf/<?php echo $woreda_id ;?>" method="post">    	
				<input type="hidden" name="region"  value="<?php echo $class_id ;?>"> 
                <input type="hidden" name="zone"    value="<?php echo $section_id ; ?>"> 
				<input type="hidden" name="woreda"  value="<?php echo $woreda_id ;?>">
				<input type="hidden" name="year"    value="<?php echo $yyyy ;?>">
				<input type="hidden" name="quarter"  value="<?php echo $qt;?>">		
			    <button type="submit" class="btn btn-primary pull-right" style="font-weight:bold;" name="print">
				            <i class="fa fa-print"></i> Print PDF</button>      
            </form> 
			
			 
			 <br> <br>
	
	   <hr>

<h4>  <i class="fa  fa-user"> </i> You have selected  <b> Year: </b> <u> <?php echo $yyyy ;?></u> &nbsp;&nbsp;&nbsp;<b> Quarter:</b> <u> <?php echo $qt; ?></u></h4>

<table class="hoverTable" id="table_export">

   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							      
								   
							          <td  colspan="7">Patient Encounter Status</td>
								  
							
                               
							       <td  colspan="9">Payment information by servics type</td>
								   
				 
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
							<th><div>#</div></th>
					    	<th><div><?php echo get_phrase('MRN');?></div></th>
							
							<th><div><?php echo get_phrase('CBHI ID');?></div></th>
							
                         <th><div><?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('date');?>:</div></th>
							<th><div><?php echo get_phrase('encounter');?></div></th>
							<th><div><?php echo get_phrase('diagnosis');?> </div></th>
							
							
                            <th><div><?php echo get_phrase('card');?></div></th>
							
                            <th><div><?php echo get_phrase('lab');?> </div></th>
							<th><div><?php echo get_phrase('imaging');?></div></th>
							
							
							
							<th><div><?php echo get_phrase('procedure');?></div></th>
							
                            <th><div><?php echo get_phrase('drug');?></div></th>
							<th><div><?php echo get_phrase('bed');?></div></th>
						   <th><div><?php echo get_phrase('other');?></div></th>
								
							<th><div>#<?php echo get_phrase('total');?></div></th>
							<th><div><?php echo get_phrase('remark');?></div></th>
							 
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
					<?php 
                 
				   
             if($qt ==1)
		       $sql="select * from treatment where (month='1' or month='11' or month='12' or month='13') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')";  
		 		   
		     if($qt ==2)
	           $sql="select * from treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year ='$yyyy')";  
			     
			 if($qt ==3)
	           $sql="select * from treatment where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year ='$yyyy')"; 
			     
		     if($qt ==4)
               $sql="select * from treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')";  
			  
			  
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1){
							
						 echo'<div style="color:red;font-size:17px;" >
						 <img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No encounter were created at this moment!</div>';
	                        
                              }
							  $i=1;
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
								
								<td><?php echo $name;?></td>
							    <td><?php echo $row2['Date_of_service'];?> </td>
						        <td><?php echo $row2['encounter'];?> </td>
	
								     <?php if($row2['diagniss']==''){ ?>
									      <td>-</td>
										  
									    <?php } 
										else{?>
										  <td><?php echo $row2['diagniss'];?> </td>
										  <?php
										}
										?>
								  
							       <td><?php echo $row2['card'];?></td>
							       <td><?php echo $row2['lab'];?></td>
								   <td><?php echo $row2['Imaging'];?></td>
	    						   <td><?php echo $row2['surgery'];?></td>
							       <td><?php echo $row2['drugs'];?></td>
								   <td><?php echo $row2['Bed_fee'];?></td>
								   <td><?php echo $row2['other'];?></td>
								    
							 <?php  $total2 = ($row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other']); ?>
                           
								   <td>ETB <b><u><?php echo $total2 ;?></u></b> </td>
								        <?php if($row2['remark']==''){ ?>
											
								     <td>......</td>
									 
									    <?php } 
										else{?>
										  <td><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                            <td>
                                
                              
                                
                            </td>
                        </tr>
						
                   <?php }?>
			
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="7" style="text-align:right;"><b>#<?php echo get_phrase('subtotal_amount(in ETB)');?>:</b></td>
								  
				
				   
            <?php
			if($qt ==1)
		      $result1 = mysql_query("SELECT  sum(card) FROM treatment  where (month='1' or month='11' or month='12' or month='13') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());     
		    if($qt ==2)
	           $result1 = mysql_query("SELECT sum(card) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());     
			if($qt ==3)
	          $result1 = mysql_query("SELECT  sum(card) FROM treatment  where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());   
		    if($qt ==4)
               $result1 = mysql_query("SELECT sum(card) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 

				while ($row1 = mysql_fetch_array($result1)) {
				$card = $row1['sum(card)'];
			}
    	    ?>		   
			 
		      <td style="text-align: right;" > <b> <u><?php  echo number_format($card,2);?> </u> </b> 
				
			  
		 <?php
		 
		 	if($qt ==1)
		     $result2 = mysql_query("SELECT sum(lab) FROM treatment  where  (month='1' or month='11' or month='12' or month='13') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result2 = mysql_query("SELECT sum(lab) FROM treatment  where (month='2' or  month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());  
			     
			if($qt ==3)
	         $result2 = mysql_query("SELECT  sum(lab) FROM treatment  where (month='5' or  month='6' or month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());
			     
		    if($qt ==4)
              $result2 = mysql_query("SELECT sum(lab) FROM treatment  where (month='8' or  month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 
    		while ($row22 = mysql_fetch_array($result2)) {
				$lab2  =	$row22['sum(lab)'];
				}
    	     ?>
           
		      <td style="text-align: right;" > <b> <u> <?php  echo  number_format($lab2,2);?></u> </b> 
			  
			 <?php
			 
			 if($qt ==1)
		     $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where   (month='1' or month='11' or month='12' or month='13')  and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());  
			     
			if($qt ==3)
	         $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where   (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());
			     
		    if($qt ==4)
              $result3 = mysql_query("SELECT sum(Imaging) FROM treatment where  (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 
			  
    		while ($row32 = mysql_fetch_array($result3)) {
				$Imaging2 = $row32['sum(Imaging)'];
				
			}	
    	?>
          
		      <td style="text-align: right;"> <b> <u> <?php  echo  number_format($Imaging2,2);?></u> </b> 
		   
			 <?php
			 
			 
			if($qt ==1)
		     $result4 = mysql_query("SELECT sum(surgery) FROM treatment   where (month='1' or month='11' or month='12' or month='13') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result4 = mysql_query("SELECT sum(surgery) FROM treatment  where (month='2' or month='3' or month='4')  and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());  
			    
			if($qt ==3)
	         $result4 = mysql_query("SELECT sum(surgery) FROM treatment   where (month='5' or month='6' or month='7')  and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());
			     
		    if($qt ==4)
              $result4 = mysql_query("SELECT sum(surgery) FROM treatment  where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 
			    
    		
    		while ($row42 = mysql_fetch_array($result4)) {
				$surgery2 = $row42['sum(surgery)'];
			}
    	   ?>

		      <td style="text-align: right;" > <b> <u> <?php  echo  number_format($surgery2,2);?></u> </b> 
			   
							         
			 <?php
			if($qt ==1)
		     $result5 = mysql_query("SELECT sum(drugs) FROM treatment where (month='1' or month='11' or month='12' or month='13') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result5 = mysql_query("SELECT sum(drugs) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());  
			    
			if($qt ==3)
	         $result5 = mysql_query("SELECT sum(drugs) FROM treatment where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());
			     
		    if($qt ==4)
              $result5 = mysql_query("SELECT sum(drugs) FROM treatment where (month='8' or month='9' or month='10' or month='13')  and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 
			   
    		while ($row52 = mysql_fetch_array($result5)) {
				$drugs2 = $row52['sum(drugs)'];
				}
    	?>
           
		   
		      <td style="text-align: right;" > <b> <u> <?php  echo  number_format($drugs2,2);?></u> </b>  				          
		     <?php
					 
		    if($qt ==1)
		     $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where (month='1' or month='11' or month='12' or month='13')  and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());  
			    
			if($qt ==3)
	         $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where (month='5' or month='6' or month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());
			     
		    if($qt ==4)
              $result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 
			    
    		while ($row62 = mysql_fetch_array($result6)) {
				$Bed_fee2 = $row62['sum(Bed_fee)'];
			}
    	?>
         
		      <td style="text-align: right;" > <b> <u> <?php  echo  number_format($Bed_fee2,2);?></u> </b> 
					 
			 <?php
			 if($qt ==1)
		     $result7 = mysql_query("SELECT sum(other) FROM treatment where (month='1' or month='11' or month='12' or month='13') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$backyear')") or die(mysql_error());  
		 		   
		    if($qt ==2)
	          $result7 = mysql_query("SELECT sum(other) FROM treatment where (month='2' or month='3' or month='4') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());  
			    
			if($qt ==3)
	         $result7 = mysql_query("SELECT sum(other) FROM treatment where (month='5' or month='6' or  month='7') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error());
			     
		    if($qt ==4)
              $result7 = mysql_query("SELECT sum(other) FROM treatment where (month='8' or month='9' or month='10') and (region='$class_id' and  zone='$section_id' and woreda='$woreda_id' and  paid='No' and year='$yyyy')") or die(mysql_error()); 
			 
    		while ($row72 = mysql_fetch_array($result7)) {
				$other2 =  $row72['sum(other)'];
			}
    	  ?>
          
		 <td style="text-align: right;" > <b> <u> <?php  echo  number_format($other2,2);?></u> </b> </td>
		
		<?php $grand = $card+$lab2+$Imaging2+$surgery2+$drugs2+$Bed_fee2+$other2;?>
		  
		    <td style="background-color:pink;text-align: right;" > <b> <u> <?php  echo  number_format($grand,2);?></u> </b> </td>
		   
    						         
			</tr>
       <?php }?>
		    
             </tfoot>							
                    </tbody>
</table>
  
<br><br><br><br><br><br><br>

<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [0, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4,5,6,7,8]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(7, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									 datatable.fnSetColumnVis(6, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
		
</script>
<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>


<script type="text/javascript">

	function get_zone_woredas(section_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_zone_woreda/' + section_id,
            success: function(response)
            {
                jQuery('#woreda_code').html(response);
            }
        });

    }

</script>