
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
	</head>
	<link rel="icon" href="graphics/icon.png" type="text/css">
	<link rel="stylesheet" href="stylesheet.css" type="text/css">

	<!-- HEADER -->
	<?php require "./header.inc"; ?>

	<!-- BODY -->
	<body>
		<br><br>
		<div id="banner">
			<h1 class = "bannertitle">Find a park</h1>
		</div>

		<!-- CONTENT -->
		<div id="searchcontent">

			<form id = "searchForm">
				<br><br><br><br><br><br><br><br>
				<div id = "geosearch"><h4>Use my location to find parks near me </h4>
				<button class = "button" onclick="getLocation()">Search Near Me</button></div>

				<h4> - or - </h4>

				<p id="searchPage"></p>

				<script>
					var x = document.getElementById("searchPage");

					function getLocation() {
			   		if (navigator.geolocation) {
								/*Returns current position*/
			       		navigator.geolocation.getCurrentPosition();
			   		} else {
			       		x.innerHTML = "Sorry, we're having trouble finding parks near you. Try allowing your web browser to access your location, or search by suburb instead.";
			   		}
					}

				</script>
				<h4>Use a custom search </h4>
  			Park name:
  			<input type="text" name="parkName"><br>
				<br>

				Suburb:
				<select name="suburbs">
  				<option value="CBD">City Business District</option>
  				<option value="South Brisbane">South Brisbane</option>
  				<option value="South Bank">South Bank</option>
  				<option value="West End">West End</option>
					<option value="Woolongabba">Woolongabba</option>
				</select>
				<br><br>

				Rating: <br>
  			<div style="padding-left: 15px">
					  <input type="radio" name="rating" value="5up" checked> 5 stars & up<br>
  			    <input type="radio" name="rating" value="4up"> 4 stars & up<br>
  			    <input type="radio" name="rating" value="3up"> 3 stars & up<br>
				    <input type="radio" name="rating" value="2up"> 2 stars & up<br>
				    <input type="radio" name="rating" value="1up"> 1 star & up<br>
				</div>
			</form>


			<br>
			<a href = "results.php"><button class = "button" type="button">Search</button></a>

		</div>

		<br><br><br>

	<!-- FOOTER -->
		<div id="footer">
			CAB230 2017 Semester 1 Project
		</div>
	</body>

	</html>
