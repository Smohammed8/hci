<?php
$username = $_POST['mail'];
$sql_check = mysql_query("SELECT email FROM admin WHERE email ='$username'") or die(mysql_error());
if(mysql_num_rows($sql_check>0)){
echo '<font color="red"><STRONG>'.$username.'</STRONG> is already exist.</font>';
}