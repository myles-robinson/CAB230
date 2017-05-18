
<?php
    session_start();
    // Include the database configuration parameters
    require_once "./DBconfig.inc";
    // Inclue the database connection
    require_once "./Database.inc";
    require_once "./functions.inc";
?>
<!-- HEADER -->
  <div id="header">
    <a href="index.html">
      <img src="graphics/logo.png" id="logo" alt="ParkFindr Logo">
    </a>
    <ul id="navbar">
      <li><a href="index.php">Parks</a></li>
        <li><a href="search.php">Search</a></li>
      <li><a href="register.php">Register/LogIn</a></li>
    </ul>
  </div>
