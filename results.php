
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
		<br><br><br><br>
		<!-- CONTENT - NEEDS TO BE PRETTYFIED!
		<div id="searchResults">-->
			<h2 id = "title"> <h2>Search Results </h2> <br><b> @BOTH: FIGURE OUT WHO WORKS ON THIS PAGE FIRST TO AVOID GIT CONFLICTS <br>@MYLES: ADD MAP WITH ALL RESULTS <br>@LUKE: THIS PAGE NEEDS TO BE PRETTYFIED & INFO FROM SELECTED PARK SAVED FOR ITEM PAGE!</b></h2>

			<!-- Print the park name of parks from search results -->
			<?php if ($_SESSION['results'] == 'NONE') {
				echo "<h2>Hmm, we couldn't find any parks to fit your search. </h2>", "<h2><a href = \"search.php\"> Try again! </a></h2>";
			}
			else {
				foreach ($_SESSION['results'] as &$searchResult) {
					//NEED TO BE ABLE TO SAVE $searchResult -- the info of the park clicked on -- to send/use to generate item.php
					echo "<p><h3><a href = \"item.php\">", $searchResult['Name'] ,"</a></h3></p>"; ?>

			<?php } }?>

		<!--</div>!-->

		<br><br><br>

	<!-- FOOTER -->
	<?php require "./footer.inc"; ?>

	</body>

</html>
