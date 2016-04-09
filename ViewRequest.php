<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Support Team</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
<body>
<?php
include("db.php");
session_start();
$uname=$_SESSION['uname'];
if(stristr($uname,'sat')==true)
{
echo '<section id="sidebar">
				<div class="inner">
					<nav>
					<ul>
					<li><a href="Analyst.php">IT Service Help Desk</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</li>
					<li>
						<a href="ViewRequest.php">Get Request</a>
					</li>
					<li>
						<a href="index.html">Sign Out</a>
					</li>
					
				</ul></nav>
				</div>
			</section>';
	echo '<div class="result"><marquee behavior="scroll" direction="up"  onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">';
	echo '<h2>';
$sql="select tid,ques from ticket where status='no' and domain='network'";
$res=mysql_query($sql,$con);
while($res1=mysql_fetch_array($res,MYSQL_BOTH))
{
	$ques=$res1['ques'];
	echo '<a href="Result.php?tid='.$res1['tid'].'">';
	echo $ques;
	echo '<br>';
}
echo '</h2></marquee></div>';
}
if(stristr($uname,'ste')==true)
{
echo '<section id="sidebar">
				<div class="inner">
					<nav>
					<ul>
					<li><a href="Technician.php">IT Service Help Desk</a>
					
					</li>
					<li>
						<a href="ViewRequest.php">Get Request</a>
					</li>
						<li>
							<a href="UploadTutorials.html">Upload tutorial</a>
						</li>
					<li>
						<a href="index.html">Sign Out</a>
					</li>
				</ul></nav>
				</div>
</section>';
	echo '<div class="result"><marquee behavior="scroll" direction="up"  onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">';
	echo '<h2>';
$sql="select tid,ques from ticket where status='no' and domain='peripheral'";
$res=mysql_query($sql,$con);
while($res1=mysql_fetch_array($res,MYSQL_BOTH))
{
	$ques=$res1['ques'];
	echo '<a href="Result.php?tid='.$res1['tid'].'">';
	echo $ques;
	echo '<br>';
}
echo '</h2></marquee></div>';
}
if(stristr($uname,'sst')==true)
{
echo '<section id="sidebar">
				<div class="inner">
					<nav>
					<ul>
					<li><a href="Specialist.php">IT Service Help Desk</a>
					</li>
					<li>
						<a href="ViewRequest.php">Get Request</a>
					</li>
					<li>
						<a href="index.html">Sign Out</a>
					</li>
					</li>
				</ul></nav>
				</div>
			</section>';
	echo '<div class="result"><marquee behavior="scroll" direction="up"  onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2">';
	echo '<h2>';
$sql="select tid,ques from ticket where status='no' and domain='software'";
$res=mysql_query($sql,$con);
while($res1=mysql_fetch_array($res,MYSQL_BOTH))
{
	$ques=$res1['ques'];
	echo '<a href="Result.php?tid='.$res1['tid'].'">';
	echo $ques;
	echo '<br>';
}
echo '</h2></marquee></div>';
}
?>
</body>
</html>