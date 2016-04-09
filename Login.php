<html>
<body>
<?php
include("db.php");
$uname=$_POST['uname'];
$pwd=$_POST['pwd']; 
$count=0;
$sql="select * from login";
$res=mysql_query($sql,$con);
while($res1=mysql_fetch_array($res,MYSQL_BOTH))
{
	$tuid=$res1['uname'];
	$tpwd=$res1['pwd'];
	if($uname==$tuid && $pwd==$tpwd)
	{
		$count++;
		break;
	}
}
if($count==0)
{
echo '<script>alert("Invalid username or password!");
window.location="index.php";
</script>';
}
else
{
		session_start();
$_SESSION['uname']=$uname;
if(stristr($uname,'pt')==true)
{
echo '<script>
window.location="ProjectTeam.php";
</script>';
}
if(stristr($uname,'sat')==true)
{
echo '<script>
window.location="Analyst.php";
</script>';
}
if(stristr($uname,'ste')==true)
{
echo '<script>
window.location="Technician.php";
</script>';
}
if(stristr($uname,'sst')==true)
{
echo '<script>
window.location="Specialist.php";
</script>';
}

}
?>
</body>
</html>

