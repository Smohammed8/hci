<?php//error_reporting(E_ERROR  | E_PARSE);$con = mysql_connect("localhost","root","ok");$db = mysql_select_db("ims_db",$con);if(!$db){	echo"connection not working";}if(isset($_POST['submit'])){
$username = $_POST['mail'];
$sql_check = mysql_query("SELECT email FROM admin WHERE email ='$username'") or die(mysql_error());
if(mysql_num_rows($sql_check>0)){
echo '<font color="red"><STRONG>'.$username.'</STRONG> is already exist.</font>';
}else{$msg = 'OK';echo 'You can use this email';  }}?>