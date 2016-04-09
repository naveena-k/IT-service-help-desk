<?php
$host="us-cdbr-iron-east-03.cleardb.ne";
$user="b9572436191b5a";
$pwd="a77f9285";
$db="ad_bf4db8025db01d6";
$con=mysql_connect($host,$user,$pwd);
if(!$con)
 die('Could not connect:'.mysql_error());
$c1=mysql_select_db($db,$con);
 if(!$c1)
   echo "Not Selected<br/>";

?>