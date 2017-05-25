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
		<?php require "./includes/header.inc"; ?>
		<?php require "./includes/register.inc"; ?>
		<!-- CONTENT -->

		<div id="formContainer">
			<img src="graphics/icon.png" alt="Park Finder Logo">
			<div class="registerContent">
				<!-- Registration Form -->
				<form action ="register.php" method="post">
					<h2 class="registerHeading"><b>Register for a ParkFindr account,<br> it's a walk in the park.</b></h2>
					<br>
					<input type="text" name="first_name" class="registerInput" placeholder="First Name" onfocus="this.placeholder = ''" value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>" required />
					<br><br>
					<input type="text" name="last_name" class="registerInput" placeholder="Last Name" value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name']?>" required />
					<br><br>
					<input type="email" name="email" class="registerInput" placeholder="Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email']?>" required />
					<br><br>
					<input type="password" name="password" class="registerInput" placeholder="Password" required />
					<br><br><br>
					<input type="submit" name="submit" value="Register" class="submitButton">
				</form>
			</div>
	</div>
  <?php require "./includes/footer.inc"; ?>
</body>

</html>
