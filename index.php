<!DOCTYPE html>                                                                                                                                                                                                                                           
<html lang="en" class="no-js">
<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="Style.css" />
		
  	<script type="text/javascript">
function validate()
{
var uname=document.getElementById('uname').value;
if(!validateProjectteam(uname))
		window.alert("Please check your user name");
	
	if(!validateTechnician(uname))
		window.alert("Please check your user name");
if(!validateAnalyst(uname))
	window.alert("Please check your user name");
if(!validateSpecialist(uname))
	window.alert("Please check your user name");
if(!validateManager(uname))
	window.alert("Please check your user name");
}
function validateProjectteam()
var un=new RegExp("^\\d{0,3}\pt\\d{3,6}$");
if(!un.test(uname))
	return false;
else
	return true;
}
function validateProjectteam()
var un=new RegExp("^\\d{0,3}\pt\\d{3,6}$");
if(!un.test(uname))
	return false;
else
	return true;
}
function validateTechnician()
var un=new RegExp("^\\d{0,3}\ste\\d{3,6}$");
if(!un.test(uname))
	return false;
else
	return true;
}
function validateAnalyst()
var un=new RegExp("^\\d{0,3}\sat\\d{3,6}$");
if(!un.test(uname))
	return false;
else
	return true;
}
function validateSpecialist()
var un=new RegExp("^\\d{0,3}\sst\\d{3,6}$");
if(!un.test(uname))
	return false;
else
	return true;
}
function validateManager()
var un=new RegExp("^\\d{0,3}\sma\\d{3,6}$");
if(!un.test(uname))
	return false;
else
	return true;
}

function validatePassword()
{
var pwd=document.getElementById('pwd').value;
var n=pwd.length;
 if(n<7)
	window.alert("Password length should greater than 6");
}
</script>
	</head>
	<body>
	


<section id="sidebar">
				<div class="inner">
					<nav>
					<ul>
					<li><a href="#homet">IT Service Help Desk</a>
					</li>
					<li>
						<a href="#index">home</a>
					</li>
					<li>
						<a href="#signin">Sign In</a>
					</li>
					<li>
						<a href="#change">Change Password</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>	
				</ul></nav>
				</div>
			</section>
				<section id="index">
				<h1 align="center">IT Service Help Desk</h1>
				</section>
						<div id="wrapper">
						<section id="signin" class="wrapper style1 fade-up">
						<div class="inner">
						
							<h2 class="hlogin">Login to Continue</h2>
							<div class="split style1">
								<section id="login">
									<form action="Login.php" method="post">
										<div class="field half first">
											<input type="text" class="form-control" size="25" placeholder="User Name" name="uname" required>
										</div>
										<div class="field half">
											<input type="password" class="form-control" size="25" placeholder="Password" name="pwd" onblur="validatePassword();" required>
												</div>
													<ul class="actions">
											<li><button onclick="validate();">Login</button></li>
										</ul>
									</form>
								</section>
								</div>
							</div>
						</div>
					</section>
					
					<section id="change" class="wrapper style1 fade-up">
						<div class="inner">
							<h2 class="hlogin">Change Password</h2>
							
							<div class="split style1">
								<section id="login">
									<form method="post" action="ChangePass.php">
										<div class="field half first">
											<input type="text" class="form-control" size="25" placeholder="User Name" name="uname" required>
										</div>
										<div class="field half">
											<input type="password" class="form-control" size="25" placeholder="Old Password" name="opwd" onblur="validatePassword();" required>
												</div>
												<div class="field half last">
											<input type="password" class="form-control" size="25" placeholder="ew Password" name="npwd" onblur="validatePassword();" required>
												</div>
										
													<ul class="actions">
											<li><button>Login</button></li>
										</ul>
									</form>
								</section>
								
							</div>
						</div>
					</section>
					
					</div>
		</body>
</html>
