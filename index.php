
<!DOCTYPE html>

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
		<link rel="icon" href="./graphics/icon.png" type="text/css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
	</head>

	<!-- BODY -->
	<body id="homePage">
		<!-- HEADER -->
		<?php require "./includes/header.inc"; ?>

		<!-- CONTENT -->
		<br><br><br><br><br>
			<div id="homePageContent">
				<h2 style="text-align: center; font-size: 50px;"> Find your perfect park </h2>
				<center><input type="text" id="searchInput"><br></center>
				<center><a href="results.php"><input type="button" onclick="" value="Search" id="searchButton"></a></center>
				<h2 style="text-align: center; font-size: 30px;"> Brisbane, QLD </h2>
			</div>

		<br><br><br>

		<?php require "./includes/footer.inc"; ?>
	</body>
</html>
