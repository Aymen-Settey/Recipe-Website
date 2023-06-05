<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>7ey's Kitchen</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/icon.png" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <img src="./assets/logo3.svg" alt="simply"
          /></a>
          <button type="button" class="btn nav-btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <!-- links -->
        <div class="nav-links show-links">
          <a href="index.php" class="nav-link">home</a>
          <a href="about.php" class="nav-link">about</a>
          <a href="tags.php" class="nav-link">tags</a>
          <a href="recipes.php" class="nav-link">recipes</a>
          <div class="nav-link contact-link">
          <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<a href='includes/logout.inc.php' class='btn'>Log out</a>";
                }
                else{
                    echo "<a href='SignIn.php' class='btn'>Sign In</a>";
                }
                ?>
          </div>
        </div>
      </div>
    </nav>