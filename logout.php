<?php
session_start();
unset($_SESSION['username']);
?>

<html>
<head>
<!-- main style sheet -->
<link href = "style.css" media= "screen" rel="stylesheet" />


<title>CardioGeni</title>
</head>


<body>
<div class="main">
	<div class="page">
<!-- BEGIN PAGE HEADER AND NAVIGATION -->
		<div class="g918">	
			<div class="top">
				<div id ="name"><a href="index.php"><span>Home</span></a></div>
				<h1> CardioGeniDB</h1>	
				<div id="navcontainer">
					<ul id="tabmenu">
						<li id ="tab1" > <a href="upload.php" >Upload</a></li>
						<li id ="tab2"> <a href="query.php" >Query </a></li>
					</ul>
				</div>
			</div>
		</div>
<!-- END PAGE HEADER AND NAVIGATION -->

<!-- BEGIN PAGE CONTENT  -->
	<div class ="content">

<!-- BEGIN STUFF ON THE LEFT-->
		<div class = "g306">
			<p>
			<span>Need help?</span> 
			Return to the CardioGeni <a href="index.php" >homepage</a>.
			</p>
			<div class="clear">&nbsp;</div>
		</div>
<!-- END STUFF ON THE LEFT-->

<!--LOGOUT MESSAGE FORM-->
		<div class="g612">
			<p>Logged out...</p>
			<p><a href="login.php">Login Again</a></p>
		</div >
		<div class="clear">&nbsp;</div>


<!-- BEGIN BOTTOM SECTION-->
		<div class="g918">
			<div id="line"></div>
		</div>	
		<div class="clear">&nbsp;</div>
	</div>
<!-- END BOTTOM SECTION-->	
</div> 
<!-- end page content -->

			
</div >

</body>

	
	




<!-- BEGIN BOTTOM SECTION-->
	<div class="g918">
	
	</div>	



	<div class="clear">&nbsp;</div>
	

	</div>
<!-- END BOTTOM SECTION-->

	
	</div> 
<!-- end page content -->

			
</div >

</body>
</html>

	