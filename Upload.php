<html>
<body>
<?php
include("db.php");
session_start();
$uname=$_SESSION['uname'];
$cont=$_POST['file'];
$name=$_POST['name'];
$sql="insert into tutorials values('$uname','$name','$cont')";
$res=mysql_query($sql,$con);
if($res)
{
echo '<script>
window.location="Technician.php";
</script>';
}
?>
</body>
</html>
