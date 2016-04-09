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
						<a href="#raiseQues" >Post</a>
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
<h2 align="center">IT Service Help Desk</h2><br><div class="tutorial">
<?php
include("db.php");
$sql="select tname,content from tutorials";
$res=mysql_query($sql,$con);
while($res1=mysql_fetch_array($res,MYSQL_BOTH))
{
echo '<h3>Tutorial Name :';
echo $res1['tname'];
echo '<br>Answer:';
echo $res1['content'];
echo '</h3><hr>';
}
echo '</div>';
?>
