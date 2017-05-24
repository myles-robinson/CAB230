
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
		<link rel="icon" href="graphics/icon.png" type="text/css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		</meta>
	</head>

	<!-- HEADER -->
	<?php require "./header.inc"; ?>

	<!-- BODY -->
	<body>

		<!-- CONTENT -->
		<div id="content">
		<!-- <br><br><br>
			<img src="graphics/ferris_wheel.jpg" alt="street beach" width="100%" height="450px">
		<h1 style="font-size: 35px; text-align: center;">Southbank Parklands</h1>
		<h3 style="text-align: center"><i class="fa fa-camera-retro fa-2x"></i>South Brisbane</h3>
		<br><br>
		<img src="graphics/streetsbeach.jpg" alt="Streets Beach, South Bank" style = "width:100%; height:auto;" id="itemPageBanner">
		<br><br><br><br><br><br><br><br><br><br><br><br><br>
		-->

		<br><br>
		<?php echo"<p style = 'text-align: center; font-size: 36px;'> " . $_GET['park'] . " </p>" ?>

		<!--
		<span class="col-md-6" style="margin-left: 18%; width: 25%; float: left; ">
		<p style = "font-size: 30px">Features: </p>
		<ul style = "font-size: 20px">
				<li>Family Friendly</li>
				<li>Pet Friendly</li>
				<li>Nearby Restaurants</li>
				<li>Playground</li>
				<li>Swimming</li>
				<li>Life Guards on Duty</li>
			</ul>
		</span>
		-->

    <center><img src="graphics/parklands map.png" alt="parklands map" width="45%"></center>

		<br><br>
		<div class="container">
			<br>
      <div class="col-xs-12"><h2 style="text-align: center; font-weight: bold">Park Reviews:</div>
			<div style = "margin-left: auto; margin-right: auto; width: 60%">
				<h3> 5 stars </h3>
				<p>Review</p>
				<br>
				<h3> 5 stars </h3>
				<p>Review</p>
				<br>
				<h3> 5 stars </h3>
				<p>Review</p>
				<br>
				<h3> 5 stars </h3>
				<p>Review</p>
			</div>
		</div>

		<br><br><br>

		<?php require "./footer.inc"; ?>
	</body>

</html>
