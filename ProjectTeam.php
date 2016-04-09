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
				
					<li><a href="#projectTeam">IT Service Help Desk</a>
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
			<div class="wrapper">
			<section id="projectTeam">
			<span class="image fit">
		<img src="images/hardware.jpg"/>
		</span>
				</section>
			
	<section id="raiseQues">
	<h2 id="heading">Post your question</h2>
<div class="accordian">
	<ul>		
	<li id="liacc">
			<div class="image_title">
				<a href="#">peripherals</a>
			</div>
				<img src="images/hardware2.jpg" id="myBtn">
				<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Raise your question here</h2>
    </div>
    <div class="modal-body">
      <form  class="form-inline" action="Ticket.php" method="post">
       <select name="domain">
       <option value="selected">Select your domain</option>
      <option value="peripheral">Peripheral</option>
      <option value="Network">Network and server</option>
      <option value="Software">Software</option>
      </select><br>
      <textarea rows=5 name="ques"></textarea><br>
        </div>
    <div class="modal-footer">
      <button>Send</button>
      </form>
    </div>
  </div>
</div>
				
		</li>
		<li id="liacc">
			<div class="image_title">
				<a href="#">Software</a>
			</div>
			<img src="images/software.jpg" id="myBtn1"/>
					<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Raise your question here</h2>
    </div>
    <div class="modal-body">
      <form  class="form-inline" action="Ticket.php" method="post">
       <select name="domain">
       <option value="selected">Select your domain</option>
      <option value="peripheral">Peripheral</option>
      <option value="Network">Network and server</option>
      <option value="Software">Software</option>
      </select><br>
      <textarea rows=5 cols=50 name="ques"></textarea><br>
        </div>
    <div class="modal-footer">
      <button>Send</button>
      </form>
    </div>
  </div>
</div>
		</li>
		<li id="liacc">
			<div class="image_title">
				<a href="#">Networks</a>
			</div>
				<img src="images/network.jpg" id="myBtn2"/>
				<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Raise your question here</h2>
    </div>
    <div class="modal-body">
      <form  class="form-inline" action="Ticket.php" method="post">
      <select name="domain">
       <option value="selected">Select your domain</option>
      <option value="peripheral">Peripheral</option>
      <option value="Network">Network and server</option>
      <option value="Software">Software</option>
      </select><br>
      <textarea rows=5 cols=50 name="ques"></textarea><br>
        </div>
    <div class="modal-footer">
      <button>Send</button>
      </form>
    </div>
  </div>
</div>
</section>
</div>		
		
				</li></ul>
<script>
// first
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//second
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn1");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


//Third
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn2");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

 </body>
</html>