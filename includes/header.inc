
<?php
    session_start();
    // Include the database configuration parameters
    require_once "./includes/DBconfig.inc";
    // Inclue the database connection
    require_once "./includes/Database.inc";
    require_once "./includes/functions.inc";
?>
<!-- HEADER -->
  <div id="header">
    <!-- Navbar Logo (Left) -->
    <a href="index.php">
      <img src="../parkfindr/graphics/logo.png" id="logo" alt="ParkFindr Logo">
    </a>
    <!-- Navbar Menu (Right) -->
    <ul id="navbar">
      <li><a href="../parkfindr/index.php">Parks</a></li>
      <li> | </li>
      <li><a href="../parkfindr/search.php">Search</a></li>
      <li> | </li>
      <?php if (!isset($_SESSION['loggedIn'])) { ?>
        <li><a href="../parkfindr/register.php">Register</a></li>
        <li> | </li>
        <li><a href="../parkfindr/login.php">Log In</a></li>
      <?php } else { ?>
        <a href = "../parkfindr/logout.php">Logout</a>
      <?php } ?>
      <li>  </li>
    </ul>
  </div>
