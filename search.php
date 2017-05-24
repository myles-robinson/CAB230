
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
	<?php require "./search.inc"; ?>

	<!-- BODY -->
	<body style="background: #85f185;">
		<!--
		<div id="banner">
		</div>
		-->

		<!-- CONTENT -->
		<div id="formContainer">
			<form id="searchForm" action="search.php" method="post">
				<div id = "geosearch">
					<img src="graphics/searchIcon.png" alt="ParkFindr" style="height: 100px; width: 100px;">
					<p class="searchTitle"><b>Use my location to find parks near me</b></p>
					<button class="submitButton" onclick="getLocation()">Search Near Me</button></div>

<!--
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

				</script> -->

				<br><br><p class="searchTitle"><b>Use a custom search</b></p>
  			Park name:
  			<input type="text" name="Name" class="registerInput"><br>
				<br>

				Suburb:
				<select name="Suburb" class="registerInput">
					<option value="ALL">ALL</option>
					<option value="ACACIA RIDGE">ACACIA RIDGE</option>
					<option value="ALBION">ALBION</option>
					<option value="ALDERLEY">ALDERLEY</option>
					<option value="ALGESTER">ALGESTER</option>
					<option value="ANNERLEY">ANNERLEY</option>
					<option value="ANSTEAD">ANSTEAD</option>
					<option value="ARCHERFIELD">ARCHERFIELD</option>
					<option value="ASCOT">ASCOT</option>
					<option value="ASHGROVE">ASHGROVE</option>
					<option value="ASPLEY">ASPLEY</option>
					<option value="AUCHENFLOWER">AUCHENFLOWER</option>
					<option value="BALD HILLS">BALD HILLS</option>
					<option value="BALMORAL">BALMORAL</option>
					<option value="BANYO">BANYO</option>
					<option value="BARDON">BARDON</option>
					<option value="BELLBOWRIE">BELLBOWRIE</option>
					<option value="BELMONT">BELMONT</option>
					<option value="BOONDALL">BOONDALL</option>
					<option value="BOWEN HILLS">BOWEN HILLS</option>
					<option value="BRACKEN RIDGE">BRACKEN RIDGE</option>
					<option value="BRIDGEMAN DOWNS">BRIDGEMAN DOWNS</option>
					<option value="BRIGHTON">BRIGHTON</option>
					<option value="BRISBANE">BRISBANE</option>
					<option value="BRISBANE CITY">BRISBANE CITY</option>
					<option value="BROOKFIELD">BROOKFIELD</option>
					<option value="BULIMBA">BULIMBA</option>
					<option value="BULWER">BULWER</option>
					<option value="BURBANK">BURBANK</option>
					<option value="CALAMVALE">CALAMVALE</option>
					<option value="CAMP HILL">CAMP HILL</option>
					<option value="CANNON HILL">CANNON HILL</option>
					<option value="CAPALABA WEST">CAPALABA WEST</option>
					<option value="CARINA">CARINA</option>
					<option value="CARINA HEIGHTS">CARINA HEIGHTS</option>
					<option value="CARINDALE">CARINDALE</option>
					<option value="CAROLE PARK">CAROLE PARK</option>
					<option value="CARSELDINE">CARSELDINE</option>
					<option value="CHANDLER">CHANDLER</option>
					<option value="CHAPEL HILL">CHAPEL HILL</option>
					<option value="CHELMER">CHELMER</option>
					<option value="CHERMSIDE">CHERMSIDE</option>
					<option value="CHERMSIDE WEST">CHERMSIDE WEST</option>
					<option value="CHUWAR">CHUWAR</option>
					<option value="CLAYFIELD">CLAYFIELD</option>
					<option value="COOPERS PLAINS">COOPERS PLAINS</option>
					<option value="COORPAROO">COORPAROO</option>
					<option value="CORINDA">CORINDA</option>
					<option value="COWAN COWAN">COWAN COWAN</option>
					<option value="DARRA">DARRA</option>
					<option value="DEAGON">DEAGON</option>
					<option value="DOOLANDELLA">DOOLANDELLA</option>
					<option value="DREWVALE">DREWVALE</option>
					<option value="DURACK">DURACK</option>
					<option value="DUTTON PARK">DUTTON PARK</option>
					<option value="EAGLE FARM">EAGLE FARM</option>
					<option value="EAST BRISBANE">EAST BRISBANE</option>
					<option value="EIGHT MILE PLNS">EIGHT MILE PLNS</option>
					<option value="ELLEN GROVE">ELLEN GROVE</option>
					<option value="ENOGGERA">ENOGGERA</option>
					<option value="ENOGGERA RESVR">ENOGGERA RESVR</option>
					<option value="EVERTON PARK">EVERTON PARK</option>
					<option value="FAIRFIELD">FAIRFIELD</option>
					<option value="FERNY GROVE">FERNY GROVE</option>
					<option value="FIG TREE POCKET">FIG TREE POCKET</option>
					<option value="FITZGIBBON">FITZGIBBON</option>
					<option value="FOREST LAKE">FOREST LAKE</option>
					<option value="GAYTHORNE">GAYTHORNE</option>
					<option value="GEEBUNG">GEEBUNG</option>
					<option value="GORDON PARK">GORDON PARK</option>
					<option value="GRACEVILLE">GRACEVILLE</option>
					<option value="GRANGE">GRANGE</option>
					<option value="GREENSLOPES">GREENSLOPES</option>
					<option value="GUMDALE">GUMDALE</option>
					<option value="HAMILTON">HAMILTON</option>
					<option value="HAWTHORNE">HAWTHORNE</option>
					<option value="HEATHWOOD">HEATHWOOD</option>
					<option value="HEMMANT">HEMMANT</option>
					<option value="HENDRA">HENDRA</option>
					<option value="HERSTON">HERSTON</option>
					<option value="HIGHGATE HILL">HIGHGATE HILL</option>
					<option value="HOLLAND PARK">HOLLAND PARK</option>
					<option value="HOLLAND PK WEST">HOLLAND PK WEST</option>
					<option value="INALA">INALA</option>
					<option value="INDOOROOPILLY">INDOOROOPILLY</option>
					<option value="JAMBOREE HTS">JAMBOREE HTS</option>
					<option value="JINDALEE">JINDALEE</option>
					<option value="KANGAROO POINT">KANGAROO POINT</option>
					<option value="KARANA DOWNS">KARANA DOWNS</option>
					<option value="KARAWATHA">KARAWATHA</option>
					<option value="KEDRON">KEDRON</option>
					<option value="KELVIN GROVE">KELVIN GROVE</option>
					<option value="KENMORE">KENMORE</option>
					<option value="KENMORE HILLS">KENMORE HILLS</option>
					<option value="KEPERRA">KEPERRA</option>
					<option value="KHOLO">KHOLO</option>
					<option value="KOORINGAL">KOORINGAL</option>
					<option value="KURABY">KURABY</option>
					<option value="LAKE MANCHESTER">LAKE MANCHESTER</option>
					<option value="LOTA">LOTA</option>
					<option value="LUTWYCHE">LUTWYCHE</option>
					<option value="LYTTON">LYTTON</option>
					<option value="MACGREGOR">MACGREGOR</option>
					<option value="MACKENZIE">MACKENZIE</option>
					<option value="MANLY">MANLY</option>
					<option value="MANLY WEST">MANLY WEST</option>
					<option value="MANSFIELD">MANSFIELD</option>
					<option value="MCDOWALL">MCDOWALL</option>
					<option value="MIDDLE PARK">MIDDLE PARK</option>
					<option value="MILTON">MILTON</option>
					<option value="MITCHELTON">MITCHELTON</option>
					<option value="MOGGILL">MOGGILL</option>
					<option value="MOOROOKA">MOOROOKA</option>
					<option value="MORNINGSIDE">MORNINGSIDE</option>
					<option value="MT COOT-THA">MT COOT-THA</option>
					<option value="MT CROSBY">MT CROSBY</option>
					<option value="MT GRAVATT">MT GRAVATT</option>
					<option value="MT GRAVATT EAST">MT GRAVATT EAST</option>
					<option value="MT OMMANEY">MT OMMANEY</option>
					<option value="MURARRIE">MURARRIE</option>
					<option value="NEW FARM">NEW FARM</option>
					<option value="NEWMARKET">NEWMARKET</option>
					<option value="NEWSTEAD">NEWSTEAD</option>
					<option value="NORMAN PARK">NORMAN PARK</option>
					<option value="NORTHGATE">NORTHGATE</option>
					<option value="NUDGEE">NUDGEE</option>
					<option value="NUDGEE BEACH">NUDGEE BEACH</option>
					<option value="NUNDAH">NUNDAH</option>
					<option value="OXLEY">OXLEY</option>
					<option value="PADDINGTON">PADDINGTON</option>
					<option value="PALLARA">PALLARA</option>
					<option value="PARKINSON">PARKINSON</option>
					<option value="PINJARRA HILLS">PINJARRA HILLS</option>
					<option value="PINKENBA">PINKENBA</option>
					<option value="PULLENVALE">PULLENVALE</option>
					<option value="RANSOME">RANSOME</option>
					<option value="RED HILL">RED HILL</option>
					<option value="RICHLANDS">RICHLANDS</option>
					<option value="RIVERHILLS">RIVERHILLS</option>
					<option value="ROBERTSON">ROBERTSON</option>
					<option value="ROCHEDALE">ROCHEDALE</option>
					<option value="ROCKLEA">ROCKLEA</option>
					<option value="RUNCORN">RUNCORN</option>
					<option value="SALISBURY">SALISBURY</option>
					<option value="SANDGATE">SANDGATE</option>
					<option value="SEVEN HILLS">SEVEN HILLS</option>
					<option value="SHERWOOD">SHERWOOD</option>
					<option value="SHORNCLIFFE">SHORNCLIFFE</option>
					<option value="SINNAMON PARK">SINNAMON PARK</option>
					<option value="SOUTH BRISBANE">SOUTH BRISBANE</option>
					<option value="SPRING HILL">SPRING HILL</option>
					<option value="ST LUCIA">ST LUCIA</option>
					<option value="STAFFORD">STAFFORD</option>
					<option value="STAFFORD HTS">STAFFORD HTS</option>
					<option value="STRETTON">STRETTON</option>
					<option value="SUMNER">SUMNER</option>
					<option value="SUNNYBANK">SUNNYBANK</option>
					<option value="SUNNYBANK HILLS">SUNNYBANK HILLS</option>
					<option value="SVTN MILE ROCKS">SVTN MILE ROCKS</option>
					<option value="TAIGUM">TAIGUM</option>
					<option value="TARINGA">TARINGA</option>
					<option value="TARRAGINDI">TARRAGINDI</option>
					<option value="TENNYSON">TENNYSON</option>
					<option value="THE GAP">THE GAP</option>
					<option value="TINGALPA">TINGALPA</option>
					<option value="TOOWONG">TOOWONG</option>
					<option value="UPR BROOKFIELD">UPR BROOKFIELD</option>
					<option value="UPR KEDRON">UPR KEDRON</option>
					<option value="UPR MT GRAVATT">UPR MT GRAVATT</option>
					<option value="VALLEY">VALLEY</option>
					<option value="VIRGINIA">VIRGINIA</option>
					<option value="WACOL">WACOL</option>
					<option value="WAKERLEY">WAKERLEY</option>
					<option value="WAVELL HEIGHTS">WAVELL HEIGHTS</option>
					<option value="WEST END">WEST END</option>
					<option value="WESTLAKE">WESTLAKE</option>
					<option value="WILLAWONG">WILLAWONG</option>
					<option value="WILSTON">WILSTON</option>
					<option value="WINDSOR">WINDSOR</option>
					<option value="WISHART">WISHART</option>
					<option value="WOOLLOONGABBA">WOOLLOONGABBA</option>
					<option value="WOOLOOWIN">WOOLOOWIN</option>
					<option value="WYNNUM">WYNNUM</option>
					<option value="WYNNUM WEST">WYNNUM WEST</option>
					<option value="YEERONGPILLY">YEERONGPILLY</option>
					<option value="YERONGA">YERONGA</option>
					<option value="ZILLMERE">ZILLMERE</option>
				</select>
				<br><br>

				Rating: <br>
  			<div style="padding-left: 15px">
						<input type="radio" name="Rating" value="ANY" checked> Any Rating<br>
					  <input type="radio" name="Rating" value=5> 5 stars & up<br>
  			    <input type="radio" name="Rating" value=4> 4 stars & up<br>
  			    <input type="radio" name="Rating" value=3> 3 stars & up<br>
				    <input type="radio" name="Rating" value=2> 2 stars & up<br>
				    <input type="radio" name="Rating" value=1> 1 star & up<br>
				</div>
				<br><input class="submitButton" name="submit" type="submit" value="Search" /><br>
			</form>

		</div>

	<!-- FOOTER -->
		<?php require "./footer.inc"; ?>
	</body>

	</html>
