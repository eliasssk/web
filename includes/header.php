<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/289849e991.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../res/main.css">

    <title>myCar</title>
</head>
<body>

<header>

   <a href="../sites/homepage.php" class="logo"><h1>mycar.</h1></a> <!-- Logo Navigationsleiste-->

   <ul class="navbar"> <!-- Anordnung Navigationsleiste mitte-->
       <li><a href="../sites/mietwagen_uebersicht.php">Mietautos</a></li>
       <li><a href="../sites/standorte.php">Standorte</a></li>
       <li><a href="../sites/kontakt.php">Über uns</a></li>
   </ul>
   <div class="side-navbar-btn"> <!-- Anordnung Navigationsleiste button rechts-->
       <a href=""><i class="fa-solid fa-user-large fa-xl"></i></a>
       <div class="side-nav-dropdown"> <!-- Navigationsleiste button rechts Dropdown-->

         <?php
         if(!isset($_SESSION["username"])){
         } else {?>
           <a href="../sites/meinebuchungen.php">Meine Buchungen</a>
           <?php
           }
           ?>

           <?php
           if(!isset($_SESSION["username"])){?>
           <a href="../sites/login-seite.php">Log In</a>
           <?php
         } else {}
           ?>

            <?php
            if(!isset($_SESSION["username"])){
            } else {?>
           <a href="../sites/logout.php">Log Out</a>
           <?php
           }
           ?>
       </div>
   </div>

</header>
