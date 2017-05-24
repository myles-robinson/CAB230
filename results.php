
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
		<link rel="icon" href="graphics/icon.png" type="text/css">
		<link rel="stylesheet" href="stylesheet.css" type="text/css">
	</head>
	<!-- HEADER -->
	<?php require "./header.inc"; ?>


	<!-- BODY -->
	<body>

		<br><br><br>
		<h2 id = "resultsTitle">Search Results </h2>

		<!--
		 <br><b> @BOTH: FIGURE OUT WHO WORKS ON THIS PAGE FIRST TO AVOID GIT CONFLICTS <br>@MYLES: ADD MAP WITH ALL RESULTS <br>@LUKE: THIS PAGE NEEDS TO BE PRETTYFIED & INFO FROM SELECTED PARK SAVED FOR ITEM PAGE!</b></h2>
		-->

		<div id="resultsDiv">
			<ul id="resultsList">
				<!-- Print the park name of parks from search results -->
				<?php if ($_SESSION['results'] == 'NONE') {
					echo "<h2>Hmm, we couldn't find any parks to fit your search. </h2>", "<h2><a href = \"search.php\"> Try again! </a></h2>";
				} else {
					foreach ($_SESSION['results'] as &$searchResult) {
						//NEED TO BE ABLE TO SAVE $searchResult -- the info of the park clicked on -- to send/use to generate item.php
						echo "<p><li>
										<a href = \"item.php\">", $searchResult['Name'] ,"</a>
									</li></p>";
									?>
				<?php } }?>
			</ul>
		</div>

		<br><br><br>

	<!-- FOOTER -->
	<?php require "./footer.inc"; ?>

	</body>

</html>
