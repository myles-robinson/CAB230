<!--
	QUT Semester 1 2017
	CAB 230 Project 1

	Myles Robinson      N9891838
	Vanessa Gutierrez   N9890394
	Luke Martin         N9452362
-->
<?php require "./header.inc"; ?>
<?php require "./register.inc"; ?>
<?php echo "<link rel='stylesheet' type='text/css' href='./stylesheet.css' />"; ?>
<html>

	<!-- HEAD -->
	<head>
		<title>ParkFindr</title>
		<link rel="icon" href="graphics/icon.png" type="text/css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
	</head>


	<!-- BODY -->
	<body>

		<!-- CONTENT -->
		<div id="registerContent" id="regoform">
			<br><br><br><br><br>
			<form action ="register.php" method="post">
				<h2 style="font-size: 40px"><b>Register an account with ParkFindr:</b></h2>
				<br><br><br>
				<input type="text" name="first_name" id="registerInputHalf" placeholder="First Name" onfocus="this.placeholder = ''" required />
				<input type="text" name="last_name" id="registerInputHalf" placeholder="Last Name" required />
				<br><br><br>
				<input type="email" name="email" id="registerInput" placeholder="Email Address" required />
				<br><br><br>
				<input type="email" name="confirmemail" id="registerInput" placeholder="Confirm Email" required />
				<br><br><br>
				<input type="password" name="password" id="registerInputHalf" placeholder="Password" required />
				<input type="password" name="confirmpw" id="registerInputHalf" placeholder="Confirm Password" required />
				<br><br>
				<input type="submit" name="submit" value="Submit" id="submitButton">
			</form>
		</div>

		<br><br><br>

	<!-- FOOTER -->
		<div id="footer">
			CAB230 2017 Semester 1 Project
		</div>
	</body>

</html>
