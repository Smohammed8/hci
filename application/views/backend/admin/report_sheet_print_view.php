
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
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  font-size:12px;
}

th, td {
  text-align: left;
  padding: 3px;
   border: 1px solid #ddd;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
#total{
	text-decoration:underline;
	text-decoration-style:double;
	
}
</style>
	
	
<?php
	$class_name		 	= 	$this->db->get_where('class' , array('class_id' => $class_id))->row()->name;
	$exam_name  		= 	$this->db->get_where('section' , array('section_id' => $section_id))->row()->name;
	$system_name        =	$this->db->get_where('facility' , array('Facility_id'=>'1'))->row()->name;
?>

<?php 
$edit_data		=	$this->db->get_where('patients' , array('mrn_id' => $param2) )->result_array();
foreach ($edit_data as $row):
?>
<?php
endforeach;
?>

<div id="print">

	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<style type="text/css">
		td {
			padding: 5px;
			
		}
	</style>



<input type="button" onClick="window.print() ;" value="Print" size="20"/>
 <a href="<?php echo base_url(); ?>index.php?admin/dashboard/">
                                    <span>  Back</span>
									
                                </a>
							
	<center>
		<img src="uploads/1215.jpg" style="max-height : 127px;" wi> <br><br>
		

		<b>Treatment history of <u><?php echo $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->name;?></u></b><br><br>
		
		 <?php $cl=  $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->class_id;?>
		 <?php $section = $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->section_id;?>
		 <?php $ds = $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->woreda_id;?>
		 
		 		 <?php $cbhi = $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->cbhi;?>
				 <?php $full_code= $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->full_code;?>
				 <?php $agreement 	 = $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->agreement;?>
               <?php $sex 	 = $this->db->get_where('patients' , array('mrn_id' => $mrn_id))->row()->sex;?>
		
		<b><?php echo get_phrase('hospital');?>:</b> <u><?php echo $system_name ;?></u> &nbsp;&nbsp;&nbsp;&nbsp;
		<b><?php echo get_phrase('region'); ?>:</b> <u><?php echo $this->crud_model->get_type_name_by_id('class',$cl);?> </u>&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		
		<b><?php echo get_phrase('section');?>:</b> <u><?php echo $this->crud_model->get_section_name_by_id($section,$cl);?>(<?php echo $section;?>)</u></b> &nbsp;&nbsp;&nbsp;&nbsp;
		<b><?php echo get_phrase('Woreda/Town/Organization');?>:</b> <u> <?php echo $this->crud_model->get_woreda_name_by_id($ds,$section);?>(<?php echo $ds;?>)</b> </u><br><br>
		<b><?php echo $exam_name;?></b> 
		
			<?php if($agreement=='CB Health Insurance'){ ?>  
		   <b>CBHI #Code : <?php echo $full_code;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> 
			<?php }else{ ?>  
			  <b>Patient #Code : <?php echo $full_code;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> 
			<?php } ?>
		
		<?php if($agreement=='Letter'){ ?>  
	    <b> Letter No: <?php echo $cbhi ;?> </b> 
		<?php }
		  else if($agreement=='Credit Service') { ?> 
		
		<b> Patient #ID: <?php echo $cbhi ;} 
              else{ ?>
			 CBHI #ID: <?php echo $cbhi ;}?>&nbsp;&nbsp;&nbsp;&nbsp </b> 
		
		
	    <b> Agreement :<?php if($agreement=='Letter') { echo 'Health care finance';}

		
		        else{ echo $agreement;} ;?> </b> &nbsp;&nbsp;&nbsp
        <b> Sex :<?php echo $sex;?> </b> 
	</center>
	<br>
	<center>
	     <table class="hoverTable" id="table_export" style="width:85%">
							   
							   
							       <thead>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="8"> <?php echo get_phrase('patient encounter status');?></td>
								  
							
                               
							       <td  colspan="9"> <?php echo get_phrase('payment information by servics type');?></td>
								   
								     
							     
						
							     
							   <td></td>
								       </tr>
							    
                             </thead>
					
								
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					        <th><div>#</div></th>
					    	<th><div><?php echo get_phrase('MRN');?></div></th>
							
							<th><div> <?php echo get_phrase('Code');?></div></th>
							
                            <th><div> <?php echo get_phrase('name');?></div></th>
                            <th><div><?php echo get_phrase('date');?>:</div></th>
							<th ><div><?php echo get_phrase('encounter');?></div></th>
								<th ><div><?php echo get_phrase('age');?></div></th>
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
					$i=0;
                   $sql="select * from treatment  where mrn_id = '$mrn_id'";
                   $result=mysql_query($sql) or die(mysql_error());
                        if(mysql_num_rows($result)<1)
                           {
	             
						 echo'<div style="color:red;font-size:17px;" ><img src="uploads/invalid.PNG" width="17px" height="17px"/>&nbsp; No treatment found!!</div>';
	 
                              }
                         while($row2 =mysql_fetch_array($result)){
							  $i++;
                             $mrn_id = $row2['mrn_id'];
                            ?>
							<?php
							
							  $sq = mysql_query("select * from patients where mrn_id ='$mrn_id'"); 
				  	   while($d = mysql_fetch_array($sq)){
						  
			         $name= $d['name'];  
					 $agreement= $d['agreement']; 
					 $age= $d['age']; 
					   }
					 ?>
                        <tr>	
                          		   <td width=""><?php echo $i;?></td>		
							       <td width=""><?php echo $row2['mrn_id'];?></td>
							       <td width=""><?php echo $row2['CBHI_code'];?></td>
								   <td width=""><?php echo $name;?></td>
							       <td width=""><?php echo $row2['Date_of_service'];?> </td>
						           <td width=""><?php echo $row2['encounter'];?> </td>
								   <td width=""><?php echo $row2['age'];?> </td>
							       <td width=""><?php echo $row2['diagniss'];?> </td>
							       
								   
								   <td width=""><?php echo number_format($row2['card'],2); ?></td>
							       <td width=""><?php echo number_format($row2['lab'],2); ?></td>
								   <td width=""><?php echo number_format($row2['Imaging'],2); ?></td>
	    						   <td width=""><?php echo number_format($row2['surgery'],2); ?></td>
							       <td width=""><?php echo number_format($row2['drugs'],2); ?></td>
								   <td width=""><?php echo number_format($row2['Bed_fee'],2); ?></td>
								   <td width=""><?php echo number_format($row2['other'],2); ?></td>
								     
								   <?php $subtotal =$row2['card']+ $row2['lab']+$row2['Imaging']+$row2['surgery']+$row2['drugs']+$row2['Bed_fee']+$row2['other'];?>
								   
								    <?php   $sql2 = "update treatment set total =$subtotal where mrn_id ='$mrn_id'"; ?>
									
								   <td width="8%" style="text-align: right;"> <b><u>
								   
								   	<?php  echo number_format($subtotal,2); ?>
								   
								    </u></b> </td>
								   
								       
									   <?php if($row2['remark']==''){ ?>
											
								     <td width="4%">-</td>
									 
									    <?php } 
										else{?>
										  <td width="4%"><?php echo $row2['remark'];?></td>
										  <?php
										}
										?>
								  
              
                            <td>
                                
                                
                                
                            </td>
                        </tr>
						
                   <?php }?>
			
				
				   
							       <tfoot>
                           <tr class="header-tr" bgcolor="" >
					
							          <td  colspan="8" style="text-align:right;"><b>#Subtotal amount(in ETB):</b></td>
								  
							
            <?php
    		$result1 = mysql_query("SELECT sum(card) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row1 = mysql_fetch_array($result1)) {
				$card= $row1['sum(card)'];
    	?>
               <td><b> <u> <?php  echo number_format($row1['sum(card)'],2); ?></u> </b></td>
    	<?php } ?>
		 
		 
		 <?php
    		$result2 = mysql_query("SELECT sum(lab) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row2 = mysql_fetch_array($result2)) {
			$lab  =	$row2['sum(lab)'];
    	?>
           <td>
		   <b> <u> <?php  echo number_format($row2['sum(lab)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
		
			 <?php
    		$result3 = mysql_query("SELECT sum(Imaging) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row3 = mysql_fetch_array($result3)) {
				$Imaging= $row3['sum(Imaging)'];
    	?>
           <td>
		  <b> <u> <?php  echo number_format($row3['sum(Imaging)'],2); ?> </u> </b> </td>
		   
    	<?php } ?>
			 <?php
    		$result4 = mysql_query("SELECT sum(surgery) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row4 = mysql_fetch_array($result4)) {
				$surgery= $row4['sum(surgery)'];
    	?>
           <td>
		  <b> <u>  <?php  echo number_format($row4['sum(surgery)'],2); ?></u> </b> </td>
		   
    	<?php } ?>
							         
			 <?php
    		$result5 = mysql_query("SELECT sum(drugs) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row5 = mysql_fetch_array($result5)) {
				$drugs= $row5['sum(drugs)'];
    	?>
           <td>
		   <b> <u> <?php  echo number_format($row5['sum(drugs)'],2); ?> </u> </b> </td>
		   
    	<?php } ?>					          
					 <?php
    		$result6 = mysql_query("SELECT sum(Bed_fee) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row6 = mysql_fetch_array($result6)) {
				$Bed_fee = $row6['sum(Bed_fee)'];
    	?>
           <td>
		   <b> <u> <?php  echo number_format($row6['sum(Bed_fee)'],2); ?></u> </b> </td>
		   
    	<?php } ?>				   
									 
									 
									 	 <?php
    		$result7 = mysql_query("SELECT sum(other) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row7 = mysql_fetch_array($result7)) {
				
				$other=  $row7['sum(other)'];
    	?>
           <td>
		  <b> <u> <?php  echo number_format($row7['sum(other)'],2); ?></u> </b> </td>
		  
		  
		   
    	<?php } ?>
		
			 <?php
    		$result8 = mysql_query("SELECT sum(total) FROM treatment where mrn_id ='$mrn_id'") or die(mysql_error());
    		while ($row8 = mysql_fetch_array($result8)) {
    	?>
		
   
		     <?php $grandtotal =$card +$lab+$Imaging+$surgery+$drugs+$Bed_fee+$other;?>
		    <?php 	//$am = new NumberFormatter('ETB', NumberFormatter::CURRENCY); ?>
		   <td style="text-align: right;" > <b> <u>
	
			
				<?php  echo number_format($grandtotal,2); ?>
	
		   
		   </u> </b> </td>
		   
    	<?php } ?>
						
							         
			</tr>
							    
                      </tfoot>							
                    </tbody>			
                </table>
					</center>
					<?php
$Today = date('y:m:d');
$new = date('l, F d, Y',strtotime($Today));
//echo $new;
?>

							     <?php
            $current_user = $this->session->userdata('admin_id');
  
	   
						  $s="SELECT name FROM `admin` where admin_id='$current_user'";
                          $ress = mysql_query($s) or die(mysql_error());
                           $rows = mysql_fetch_array($ress);
                           $name = $rows['name']; 
			                
					   ?>
					  
				<br><br>
	<p style="margin-left:1000px;font-size:12px;"><?php echo $new;?></p>
	
	<p style="margin-left:1000px;font-size:12px;">User  <u> <?php echo $name;?></u></p> 		   
          </div>


<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		var elem = $('#print');
		PrintElem(elem);
		Popup(data);

	});

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        //mywindow.document.write('<link rel="stylesheet" href="assets/css/print.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        //mywindow.document.write('<style>.print{border : 1px;}</style>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>