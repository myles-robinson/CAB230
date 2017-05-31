
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
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyAAWvUmj_1u-YvOzsblzpz_JqQ10t1yWEA"
          type="text/javascript"></script>
	</head>
	<!-- HEADER -->
	<?php require "./includes/header.inc"; ?>


	<!-- BODY -->
	<body>
<br><br><br><br><br>
		<div id="map"></div>
		<?php
		echo "
		<script type='text/javascript'>
		var locations =[
		foreach($_SESSION['results'] as $value) {
		[<?php echo $_value['lat'] . $_value['lon'] ?>]		<?php}  ?>
		]
	];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-27.4698, 153.0251),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][0], locations[i][1]),
        map: map
      });

    }
  </script>
	    	"
				?>

		<br><br><br>
		<h2 id = "resultsTitle">Search Results </h2>

		<div id="resultsDiv">
			<ul id="resultsList">
				<!-- Print the park name of parks from search results -->
				<?php if ($_SESSION['results'] == 'NONE') {
					echo "<h2>Hmm, we couldn't find any parks to fit your search. </h2>", "<h2><a href = \"search.php\"> Try again! </a></h2>";
				} else {
					foreach ($_SESSION['results'] as &$searchResult) {
						//Dispay each result as a link, the url of which contains the park name to be passed
						//to the itemPage contained in a variable named 'park'.
						echo "<p><li>
										<a href = \"item.php?park=" . $searchResult['Name'] . "&lat=" . $searchResult['Latitude'] . "&lon=" . $searchResult['Longitude'] . "\">", $searchResult['Name'] ,"</a>
									</li></p>";
								}
								?>
				<?php }  ?>
			</ul>
		</div>

		<br><br><br>

	<!-- FOOTER -->
	<?php require "./includes/footer.inc"; ?>

	</body>

</html>
