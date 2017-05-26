
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
		<meta>
		<link rel="icon" href="./graphics/icon.png" type="text/css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		</meta>
	</head>

	<!-- HEADER -->
	<?php require "./includes/header.inc"; ?>

	<!-- BODY -->
	<body>

		<!-- CONTENT -->
		<br><br>
		<?php echo"<p style = 'text-align: center; font-size: 36px;'> " . $_GET['park'] . " </p>" ?>

    <center><img src="./graphics/parklands map.png" alt="parklands map" width="45%"></center>

		<br><br>
		<div class="container">
			<br>
      <div class="col-xs-12"><h2 style="text-align: center; font-weight: bold">Park Reviews:</div>
			<div style = "margin-left: auto; margin-right: auto; width: 60%">
				<h3> 5 stars </h3>
				<p>Review</p>
				<br>
			</div>
		</div>

		<br><br><br>

		<?php require "./includes/footer.inc"; ?>
	</body>

</html>
