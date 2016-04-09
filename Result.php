<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
<body>
<?php
session_start();
$_SESSION['tid']=$_GET['tid'];
echo '
<section id="signin" class="wrapper style1 fade-up">
						<div class="inner">
						
							<h2 class="hlogin">Type your Solution here....</h2>
							<div class="split style1">
								<section id="login">
									<form action="StoreResult.php" method="get">
										<div class="field half first">
											<textarea cols=70 rows=10 name="ans"></textarea>
										</div>
													<ul class="actions">
											<li><button onclick="validate();">Submit</button></li>
										</ul>
									</form>
								</section>
								</div>
							</div>
						</div>
					</section>';
?>
</body>
</html>
