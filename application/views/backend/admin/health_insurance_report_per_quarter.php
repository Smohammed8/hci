
 <style>
 body{
  font-family: sans-serif;
  color:black;
  font-size:10px;

}
  	.hoverTable{
		width:100%; 
		border-collapse:collapse; 
	}
	.hoverTable td{ 
		padding:7px; border:#4e95f4 1px solid;
	}
	

	
    .hoverTable tr:hover {
          background-color: white;
    }
	.asad{
		background-color:pink;	
	}
	
table, th, tr ,td {
  border: 1px solid blue;
 font-size:13px; 
  	width:100%; 
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}

	</style>
<?php 
function format($value) {
	if ($value > 0) {
		$result =  number_format($value,0, ",",",");
	}
	else {
		$result = 0; 
	}
	return $result;
}

?>	
                               <?php 
								$ye= $this->db->get('fiscal_year ')->result_array();
								foreach($ye as $rowx):
                                   $year = $rowx['year'];       
								   $backyear = $year-1;
								   endforeach;
							    ?>
<?php
 if(isset($_POST['search'])){ 
	$class_id    = $_POST["class_id"];
	$section_id  = $_POST["section_id"];
	$woreda_id   = $_POST["woreda_id"];
	$qt          = $_POST["qt"];
	$ag          = $_POST["agreement"];
	$yyyy        = $_POST["yyyy"];
	
    $backyear    = $yyyy-1;   
    $mm1=11; $dd1=1; $mm2=1; $dd2=30;
    $byear = trim($backyear.'-'.$mm1.'-'.$dd1);
    $fyear = trim($yyyy.'-'.$mm2.'-'.$dd2);
   }
	?>
<div class="row">
	<div class="col-md-12">
    
   


		<br><br>
		<h1> <center> Jimma Medical Ceneter  </center></h1>
		<h2>  <center>Jimma Zone Health Insurace Office Report - 2<sup> nd</sup> Quarter/ <?php echo $yyyy ;?>ዓ.ም </center></h2>
		<hr>
		<div class="tab-content" style="width:100%;">
		
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" style="width:100%;" id="thisyear">
          <table class="hoverTable" id="table_export" width="100%">

   
							       <thead style="width:100%;">
								       <tr class="header-tr" bgcolor="#f2f2f2" >
				
                                    <td  colspan="3" style="text-align:right;"> <i class="fa fa-flag"></i> <b>Client Information by address location</b></td>	
                                    <td  colspan="6" style="text-align:right;"> <b>Beneficiary classification based on gender and indigent type</b></td>									
						            <td  colspan="6" style="text-align:right;"><b><i class="fa fa-group"></i> Patient classification based By Visit of encounter type such as IPD and OPD </b></td>		
						             <td  colspan="6" style="text-align:right;"> <b><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<?php echo get_phrase('quarters_of_fisical_year');?>-<?php echo $backyear;?>/<?php echo $year;?></td>	
								       </tr>
                                  <tr class="header-tr" bgcolor="" width="100%" >
					
							          <td   width ="20%" colspan="3"> Client <?php echo get_phrase('Details');?></td>
								  
							
                               
							        <td  colspan="3" style="background-color:black;color:white;"><i class="fa fa-female"></i>&nbsp;<i class="fa fa-male"></i><b>&nbsp;By Gender </b></td>
									<td  colspan="3" style="background-color:black;color:white;"><i class="fa fa-group"></i><b>&nbsp;By Indigent </b></td>
									
								   	<td  colspan="3" style="background-color:#084184;color:white;"><i class="fa fa-ambulance"></i><b>&nbsp;  IPD</b></td>
								    <td  colspan="3" style="background-color:#084184;color:white;"><i class="fa fa-flag"></i><b>&nbsp;  OPD</b></td>
									
                                    <td  colspan="5" style="background-color:gray;color:white;"><b> &nbsp;<i class="fa fa-check-square-o"></i> Montly division</b></td>
                                   
							   <td></td>
								       </tr>
							    
                             </thead>
					
				
                    <thead>
                        <tr class="header-tr" bgcolor="lightblue" height="30px;">
					    	<th  style="width:3%;"><div>#</div></th>
							<th ><div><?php  //echo get_phrase('Region/Zone');?><b> Woreda in different zones</b></div></th>						
                            <th style=""><div> <?php// echo get_phrase('woreda');?> Zone</div></th>
							
                            <th bgcolor="pink"><div><?php  echo get_phrase('M');?></div></th>
							<th bgcolor="pink"><div><?php  echo get_phrase('F');?></div></th>
                            <th bgcolor="pink"><div><?php  echo get_phrase('total');?></div></th>
							
                            <th bgcolor="grey;"><div><?php  echo get_phrase('K');?></div></th>
							  <th bgcolor="grey;"><div><?php  echo get_phrase('H');?></div></th>
                            <th bgcolor="grey;"><div><?php  echo get_phrase('total');?> </div></th>
							
							<th bgcolor="orange"><div><?php  echo get_phrase('K');?></div></th>	
							<th bgcolor="orange"><div><?php  echo get_phrase('H');?></div></th>
						    <th bgcolor="orange"><div><?php  echo get_phrase('total');?></div></th>
							 
							 
							<th bgcolor="lightblue"><div><?php  echo get_phrase('K');?></div></th>	
							<th bgcolor="lightblue"><div><?php  echo get_phrase('H');?></div></th>
						    <th bgcolor="lightblue"><div><?php  echo get_phrase('total');?></div></th>
							
                         
							
						    <th bgcolor="white"><div>  July</div></th>	
							<th bgcolor="white"><div>  August</div></th>
						    <th bgcolor="white"><div> September</div></th>
							 <th bgcolor="white"><div> October</div></th>
							 
						
							
				
							
						    <th><div><?php  echo get_phrase('total');?></div></th>
                            
                        </tr>
                    </thead>
                    <tbody>
					
					
				
							
					<?php 
					
					        $count = 1;
					         $agreed='Yes';   
							 $agreement='CB Health Insurance';
							//$regions = $this->db->get('parent')->result_array();
							 $woreda  = $this->db->get_where('parent' , array('agreed'=>$agreed, 'agreemenrt_type'=>$agreement))->result_array();
						     foreach($woreda as $row2):?>
                        <tr>					  
							   <td style="width:3%;"><?php echo $count++;?></td>
							   
							   
							   <?php $pay = $row2['name'];?>  
							 
							  <?php $section_id  = $row2['section_id'];?>   
							  <?php $class_id    = $row2['class_id'];?>  
							  <?php $woreda_id   = $row2['woreda_id'];?>  \\\\\\\
							  
							  <td style="width:10%;"> <?php echo $row2['name'];?>(<?php echo $row2['woreda_id'];?>)</td>
								
	                           <td style="width:5%;"><?php //echo $this->crud_model->get_type_name_by_id('class',$row2['class_id']);?><?php echo $this->crud_model->get_section_name_by_id($row2['section_id'],$row2['class_id']);?></td>
			                         
									
										
										 
		
				    <?php
                     	            $fm =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and sex='F' and agreement='CB Health Insurance'");
								       $fmt = mysql_num_rows($fm); 
									    $m =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  sex='M' and agreement='CB Health Insurance'");
								       $mt = mysql_num_rows($m); 
									 $allsex= $fmt+ $mt;
									 
									    $h =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='H' and agreement='CB Health Insurance'");
								       $th = mysql_num_rows($h); 
									    $k =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='K' and agreement='CB Health Insurance'");
								       $tk = mysql_num_rows($k); 
									   $allindident=$th+$tk;
									   
									   
									    $ipd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='H' and agreement='CB Health Insurance' and encounter='IPD'");
								        $hipd = mysql_num_rows($ipd); 
										
									    $opd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='K' and agreement='CB Health Insurance' and encounter='IPD'");
								        $kipd= mysql_num_rows($opd); 
									   
									   $totalvisit =$hipd+$kipd;
									   
									   
									     $opdh =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='H' and agreement='CB Health Insurance' and encounter='OPD'");
								        $hopd = mysql_num_rows($opdh); 
										
									     $opdk =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  indigent='K' and agreement='CB Health Insurance' and encounter='OPD'");
								        $kopd= mysql_num_rows($opdk); 
									   
									    $hkopd =$hopd+$kopd;
										
										
										// Fiscal year quarters
										$st =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  agreement='CB Health Insurance' and  month in(11,12,13,1) and year= $backyear");
								        $fst = mysql_num_rows($st); 
										
									    $nd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and agreement='CB Health Insurance' and  month in(2,3,4) and year= $year");
								        $snd = mysql_num_rows($nd); 
									    
										$rd =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and  agreement='CB Health Insurance' and  month in(5,6,7)  and  year= $year");
								        $thrd = mysql_num_rows($rd); 
										
									     $ths =mysql_query("SELECT * FROM `treatment` where region ='$class_id' and zone='$section_id' and woreda='$woreda_id' and agreement='CB Health Insurance' and  month in(8,9,10) and year= $year");
								        $forth= mysql_num_rows($ths); 
										
									    $all=$fst+$snd +$thrd+$forth;
										
										 
									   
			  
				 ?>
  
								   <td style="text-align: right;"> <?php echo $fmt;?> </td> 
								   <td style="text-align: right;"> <?php echo $mt;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($allsex);?> </u></td> 
								   
								   <td style="text-align: right;"> <?php echo $tk;?></td> 
								   <td style="text-align: right;"> <?php echo $th;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($allindident);?> </u></td>  
								   
								   <td style="text-align: right;"> <?php echo $kipd;?> </td> 
								   <td style="text-align: right;"> <?php echo $hipd;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($totalvisit);?></u></td> 
								   
                                   <td style="text-align: right;"> <?php echo $hopd;?> </td> 
								   <td style="text-align: right;"> <?php echo $kopd;?> </td> 
								   <td style="text-align: right;"> <u><?php echo format($hkopd);?></u></td> 
								   
								   
                                   <td style="text-align: right;"> <?php echo $fst; ?></td>
								   <td style="text-align: right;"> <?php echo $snd;?> </td> 
								   <td style="text-align: right;"> <?php echo $thrd;?> </td> 
								   <td style="text-align: right;"> <?php echo $forth;?> </td> 
								   
                                   <td style="text-align: right;"> <u><?php echo format($all);?></u> </td>
								   
								       <!--<i class="fa fa-times">-->
                        </tr>
						
                   <?php endforeach;?>
			 
				
				   
							      						
                    </tbody>
					
                </table>
		</div>
		<br><br>
<!----Begin of report-->
<hr>
	<p style="font-size:14px;text-align:right;"> ከሰላምታ ጋር </p>
	 
<!----Begin of 2014
         <div class="tab-pane box active"  id="2014">
		 	 <img src="uploads/2014.jpg" title="2014 is yet comming!">		
        
		</div>
	
			<!----End of 2014-->
		</div>
	</div>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
