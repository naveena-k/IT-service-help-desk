<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Project Team</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	
	</head>
<body>
<section id="sidebar">
				<div class="inner">
					<nav>
					<ul>
					<li><a href="Technician.php">IT Service Help Desk</a>
					</li>
					<li>
						<a href="ViewRequest.php">Get Request</a>
					</li>
						<li>
							<a href="#fileupload">Upload tutorial</a>
						</li>
					<li>
						<a href="index.html">Sign Out</a>
					</li>
				</ul></nav>
				</div>
			</section>

					<div id="wrapper">
						<section id="fileupload" class="wrapper style1 fade-up">
						<div class="inner">
							<h2 class="hlogin">Tutorials</h2>
							
							<div class="split style1">
								<section id="login">
									<form method="post" action="Upload.php">
										<div class="field half first">
											<input type="text" class="form-control" size="25" placeholder="Tutorial name" name="name" required>
										</div>
										<div class="field half">
													<textarea rows=20 cols=100 name="file"></textarea>
													</div>
													<ul class="actions">
											<li><button>Upload</button></li>
										</ul>
									</form>
								</section>
								
							</div>
						</div>
					</section>
					
	
</body>
</html>