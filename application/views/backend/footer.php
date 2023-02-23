
<style>

#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 5.5rem;            /* Footer height */
}
</style>
                        <?php         
	   
						   $s="SELECT * FROM `copyright`";
                           $ress = mysql_query($s) or die(mysql_error());
                           while($row = mysql_fetch_array($ress)){
                           $footer = $row['footer']; 
			                }
					   ?>
					   
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
    <center><div  id="footer" style="background-color: #084184; margin-left: -17px; color:white;"><br>
       <i class="fa fa-copyright"></i>&nbsp; 
	   <center>© 2019-<script>document.write(new Date().getFullYear())</script>  Jimma Medical Center. All Rights Reserved | Design & Developed by <?php echo $footer;?></center>
    </div></center>
