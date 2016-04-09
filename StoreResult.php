<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
<body>
<?php
include("db.php");
session_start();
$uname=$_SESSION['uname'];
$tid=$_SESSION['tid'];
$ans=$_GET['ans'];
$sql="update ticket set ans='$ans',status='yes' where tid='$tid'";
$res=mysql_query($sql,$con);
if($res)
{
$sql1="insert into solves values('$tid','$uname')";
$res1=mysql_query($sql1,$con);
if($res1)
{
echo '<script>
window.location="Technician.php";
</script>';
}
}
?>
</body>
</html>