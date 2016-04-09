<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Project Team</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		
		<style>
				#header{
		 
		 width:100%;
		 height:100%;
  	 } 	
		</style>
	</head>
	<body>
	<div id="sidebar">
				<div class="inner">
					<nav  id="topnav">
				<ul>
				
					<li><a href="projectTeam.php">IT Service Help Desk</a>
					</li>
						<li class="selected">
						<a href="Search.php" class="sect">Search Tutorial</a>
					</li>
					<li>
						<a href="ProjectTeam.php">Post</a>
					</li>
					<li>
						<a href="#">View Response</a>
						<ul>
							<li>
								<a href="ViewResponse.php">Your Question</a>
							</li>
							<li>
								<a href="AllResponse.php">All Question</a>
							</li></ul>
							<li>
								<a href="index.html">Sign Out</a>
							</li>
						</ul>
					</li>
				</ul>
					</nav>
				</div>
			</div>
<?php
include("db.php");
session_start();
$uname=$_SESSION['uname'];
echo '<h2 align="center">IT Service Help Desk Blog</h2><br><div class="result">';
$sql1="select ques,ans from ticket where status='yes'";
$res3=mysql_query($sql1,$con);
while($res4=mysql_fetch_array($res3,MYSQL_BOTH))
 {
 echo '<h3>Question:';
 echo $res4['ques'];
 echo '<br>Answer:';
 echo $res4['ans'];
 echo '</h3><hr>';
 }
?>
</body>
</html>	
