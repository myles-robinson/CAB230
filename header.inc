
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
    <a href="index.php">
      <img src="graphics/logo.png" id="logo" alt="ParkFindr Logo">
    </a>
    <ul id="navbar">
      <li><a href="index.php">Parks</a></li>
      <li> | </li>
      <li><a href="search.php">Search</a></li>
      <li> | </li>
      <?php if (!isset($_SESSION['loggedIn'])) { ?>
      <li><a href="register.php">Register</a></li>
      <li> | </li>
      <li><a href="login.php">Log In</a></li>
      <?php } else { ?>
      <a href = "logout.php">Logout</a>
      <?php } ?>
      <li>  </li>
    </ul>
  </div>
