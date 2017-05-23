<!--
	QUT Semester 1 2017
	CAB 230 Project 1

	Myles Robinson      N9891838
	Vanessa Gutierrez   N9890394
	Luke Martin         N9452362
-->
<html>

	<!-- HEAD -->
	<head>
		<title>ParkFindr</title>
		<link rel="icon" href="graphics/icon.png" type="text/css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
	</head>


	<!-- BODY -->
	<body style="background: #85f185;">
		<?php require "./header.inc"; ?>
		<?php require "./login.inc"; ?>
		<!-- CONTENT -->

		<div id="formContainer">
      <img src="graphics/icon.png" alt="ParkFindr">
  		<!-- Login form -->
  		<div class="registerContent">
  			<form action="login.php" method="post">
  				<h2 class="registerHeading"><b>Already have a ParkFindr account?<br> Log in here.</b></h2>
  				<br>
          <input class="registerInput" type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" required/>
  				<br><br>
  				<input class="registerInput" type="password" class="registerInput" name="password" placeholder="Password" onfocus="this.placeholder = ''" required/>
  				<br><br><br>
  				<input class="submitButton" name="submit" type="submit" value="Log In" />
  			</form>
      </div>
    </div>

    <?php require "./footer.inc"; ?>
  </body>
</html>
