
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
	<?php $_SESSION['park'] = $_GET['park'] ?>
	<?php require "./includes/header.inc"; ?>
	<?php require "./includes/reviews.inc";?>


	<!-- BODY -->
	<body class="bodyBg">
		<div id="container">
		<!-- CONTENT -->
		<?php echo"<h2 style = 'text-align: center; font-size: 36px;'> " . $_GET['park'] . " </h2>" ?>
		<?php echo"<h3 style = 'text-align: center; font-size: 20px;'> " . $_SESSION['street'][0] . ", BRISBANE</h3>" ?>
		<!--show street name -->

		<br>
		 <div id="map">
			 <?php
				 echo "<script>
					 function initMap() {
						 var nest = {lat: " . $_GET['lat'] . ",lng: " . $_GET['lon'] . "};
						 var map = new google.maps.Map(document.getElementById('map'), {
							 zoom: 14,
							 center: nest
						 });
						 var marker = new google.maps.Marker({
							 position: nest,
							 map: map
						 });
					 }
				 </script>
				 <script async defer
					src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAAWvUmj_1u-YvOzsblzpz_JqQ10t1yWEA&callback=initMap'>
				 </script>"
			 ?>
		 </div>
		<br>

		<!-- REVIEWS -->
		<div>
			<br>
      <div class="col-xs-12"><h2 style="text-align: center; font-weight: bold">Park Reviews:</div>
			<div style = "margin-left: auto; margin-right: auto; width: 60%">
				<?php
				if ($_SESSION['reviews'] == 'NONE'){
					echo "<h2>No reviews available for this park yet.</h2>";
				}
				else{
					foreach ($_SESSION['reviews'] as $review){ ?>
						<div id="singleReview"> <?php
							echo "<h2>" . $review[4] . " star </h2>";
							echo "<h3>" . $review[3] . "</h3>";
							echo "<p> by User " . $review[1] . " on " . $review[5] . "</p>"; ?>
						</div><br>
				<?php }}
				if (isset($_SESSION['loggedIn'])) {
					if ($_SESSION['loggedIn']) { ?>
						<div id="leaveReview">
						<h2> Have you been to this park? Write a review! </h2>
						<form id="searchForm" action="" method="post">
							How many stars would you rate this park? <br><br>
			  			<div style="padding-left: 15px">
								  <input type="radio" name="Rating" value=5 checked> 5 stars<br>
			  			    <input type="radio" name="Rating" value=4> 4 stars<br>
			  			    <input type="radio" name="Rating" value=3> 3 stars<br>
							    <input type="radio" name="Rating" value=2> 2 stars<br>
							    <input type="radio" name="Rating" value=1> 1 star<br>
							</div> <br>
							Share your experience at this park: <br><br>
							<textarea cols="45%" rows="5" style="color: #6ee06e; padding: 5px 10px; border-radius: 6px; border-style: none; font-size: 20px;" name="reviewText" value="<?php if(isset($_POST['reviewText'])) echo $_POST['reviewText']?>" required></textarea>
							<br><br>
							<input type="submit" name="submit" value="Submit" class="submitButton">
						</form>
					</div>
				<?php } }
				else {
					echo "<h3><a href=\"../parkfindr/login.php\">Log in</a> to leave a review.</h3>";
				}
				 ?>
			</div>



		<br><br><br>

		<?php require "./includes/footer.inc"; ?>
	</div>
	</body>

</html>
