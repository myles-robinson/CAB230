
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

		<!-- CONTENT -->
		<div id="content">
			<p id = "title"> Results for "South Bank" </p>
			<p id = "sortby"> Sort by closest </p>

    		<table>
				<tr>
        		<td> <a href = "item.html"> <div class = "cell"> <img src = "graphics/southbank1.jpg"/> </div> <span class = "ParkName" ></a> South Bank Parklands </span> <span class = "ParkDistance"> <br> 1 km </br> </span></td>
           	<td> <div class = "cell"> <img src = "graphics/southbank2.jpg"> </div>  <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 1.3 km </br> </span> </td>
						<td> <div class = "cell"> <img src = "graphics/southbank3.jpg"> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 1.6 km </br> </span> </td>
        </tr>
				<tr>
						<td> <div class = "cell"> <img src = "graphics/southbank1.jpg"/> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 1.8 km </br> </span> </td>
						<td> <div class = "cell"> <img src = "graphics/southbank2.jpg"> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 2 km </br> </span> </td>
						<td> <div class = "cell"> <img src = "graphics/southbank3.jpg"> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 2.1 km </br> </span> </td>
				</tr>
				<tr>
						<td> <div class = "cell"> <img src = "graphics/southbank1.jpg"/> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 2.5 km </br> </span> </td>
						<td> <div class = "cell"> <img src = "graphics/southbank2.jpg"> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 2.9 km </br> </span> </td>
						<td> <div class = "cell"> <img src = "graphics/southbank3.jpg"> </div> <span class = "ParkName" > South Bank Parklands </span> <span class = "ParkDistance"> <br> 3.5 km </br> </span> </td>
      	</tr>
      	</table>
		</div>

		<br><br><br>

	<!-- FOOTER -->
		<div id="footer">
			CAB230 2017 Semester 1 Project
		</div>
	</body>

</html>
