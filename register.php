<?php
require_once "db.php";
session_start();

if (  isset($_POST['username']) && isset($_POST['password']) && isset($_POST['username'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);
	$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
	mysql_query($sql);
	$_SESSION['success'] = 'User Added';
	header( 'Location: upload.php' ) ;
	return;
	}
?>

<html>
<head>



<!-- main style sheet -->
<link href = "style.css" media= "screen" rel="stylesheet" />

<!-- some javascript we probably won't need -->
<script language="JavaScript" type="text/javascript" src="ahahLib.js"></script> 
<script language="JavaScript" type="text/javascript"> 
function makeactive(tab) { document.getElementById("tab1").className = ""; document.getElementById("tab2").className = ""; document.getElementById("tab3").className = ""; document.getElementById("tab"+tab).className = "active"; 
callAHAH('content.php?content= '+tab, 'content', 'getting content for tab '+tab+'. Wait...', 'Error'); } 
</script>
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
		<span>Register!</span>  
		
		Enter your information on this form to become a new user.
	</p>
	<p>
		<span>Already registered? </span> 
		Click here to <a href="login.php"> log in</a>.
	</p>
	<div class="clear">&nbsp;</div>
	</div>
<!-- END STUFF ON THE LEFT-->

<!-- ADD USER STUFF ON RIGHT-->
	<div class ="g612">

<script type="text/javascript">
<!-- JAVASCRIPT FOR FORM VALIDATION -->
function Validate()
{
  var IsValid = true;

  document.getElementById("UserNameERR").innerHTML = "";
  document.getElementById("PasswordERR").innerHTML = "";
  document.getElementById("EmailERR").innerHTML = "";

  // Check for a name
  if (document.getElementById("username").value == "") {
    document.getElementById("UserNameERR").innerHTML = "Missing name";
    IsValid = false;
  }
  // Check for an address
  if (document.getElementById("password").value == "") {
    document.getElementById("PasswordERR").innerHTML = "Missing password";
    IsValid = false;
  }	
  // Check for a valid email address
  var ValidEmail = false;
  for (i=0; i<document.getElementById("email").value.length; i++) {
    if (document.getElementById("email").value.charAt(i) == "@") {
      ValidEmail = true;
      break;
    }
  }
  if (ValidEmail == false) {		
    document.getElementById("EmailERR").innerHTML = "Incorrect email format";
    IsValid = false;
  }	

  return IsValid;

}

</script>

<fieldset>
<legend>Add a new user account:</legend>

<form name="MyForm" method="post" onsubmit="return Validate()">
<p>Username:
<input type="text" name="username" id="username" <?php 
	echo 'value="' .htmlentities($_POST['username']) .'"';
	?>><span id="UserNameERR" style="color:red"></span></p>
<p>Password:
<input type="password" name="password" id="password"<?php 
	echo 'value="' .htmlentities($_POST['password']) .'"';
	?>><span id="PasswordERR" style="color:red"></span></p>
<p>Email: 
<input type="text" name="email" id="email"<?php 
	echo 'value="' .htmlentities($_POST['email']) .'"';
	?>><span id="EmailERR" style="color:red"></span></p>
	
	<p><input type="submit" value="Submit"/>
<input type="reset" name="Cancel" value="Cancel" onclick="window.location = 'upload.php' " /> 

<!--for later: <span id="EmailERR" style="color:red"></span> -->
</form>
</fieldset>

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
</html>
