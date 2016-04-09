<html>
<body>
<?php
		session_start();
include("db.php");
$ques=$_POST['ques'];
$domain=$_POST['domain'];
$sql="insert into ticket (ques,status,domain,ans) values('$ques','no','$domain','no')";
$res=mysql_query($sql,$con);
if($res)
{
$sql1="select tid from ticket where status='no'";
$res1=mysql_query($sql1,$con);
while($res2=mysql_fetch_array($res1,MYSQL_BOTH))
{
	$qid=$res2['tid'];
}
$uname=$_SESSION['uname'];
$sql2="insert into raise values('$uname','$qid')";
$res3=mysql_query($sql2,$con);
if($res3)
{
echo '<script>
window.location="ProjectTeam.php";
</script>';
}
}
?>
</body>
</html>