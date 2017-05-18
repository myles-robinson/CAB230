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
	<body>
		<?php require "./header.inc"; ?>
		<?php require "./register.inc"; ?>
		<!-- CONTENT -->

		<div id="formContainer">
		<!-- Login form -->
		<div class="registerContent">
			<form action="register.php" method="post">
				<h2 class="registerHeading"><b>Already have a ParkFindr account? Log in here.</b></h2>
				<br>
        <input class="registerInput" id="registerInputHalf" type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" required/>
				<br><br>
				<input class="registerInput" type="password" class="registerInput" name="password" placeholder="Password" onfocus="this.placeholder = ''" required/>
				<br><br>
				<input class="submitButton" name="submit" type="submit" value="Submit" />
			</form>
		</div>
		<br>
		<div class="registerContent">
			<!-- Registration Form -->
			<form action ="register.php" method="post">
				<h2 class="registerHeading"><b>Register an account with ParkFindr:</b></h2>
				<br>
				<input type="text" name="first_name" class="registerInputHalf" placeholder="First Name" onfocus="this.placeholder = ''" required />
				<input type="text" name="last_name" class="registerInputHalf" placeholder="Last Name" required />
				<br><br>
				<input type="email" name="email" class="registerInput" placeholder="Email Address" required />
				<br><br>
				<input type="email" name="confirmemail" class="registerInput" placeholder="Confirm Email" required />
				<br><br>
				<input type="password" name="password" class="registerInputHalf" placeholder="Password" required />
				<input type="password" name="confirmpw" class="registerInputHalf" placeholder="Confirm Password" required />
				<br><br>
				<input type="submit" name="submit" value="Submit" class="submitButton">
			</form>
		</div>
	</div>
	<!-- FOOTER -->
		<div id="footer">
			CAB230 2017 Semester 1 Project
		</div>
	</body>

</html>
