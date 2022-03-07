<?php require_once("includes/config.php"); ?>

<!DOCTYPE html>
<html>
  <head>    
    <title>VideoTube</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./assets/js/commonActions.js"></script>
    <style>
     <?php include "assets/css/style.css"; ?>
   </style>
  </head>
  <body>
    <div id="pageContainer">

      <div id="mastHeadContainer">

        <button class="navShowHide">
          <img src="./assets/images/icons/menu.png" alt="menu">
        </button>

        <a href="index.php" class="logoContainer">
        <img src="./assets/images/icons/VideoTubeLogo.png" alt="siteLogo" title="logo">          
        </a>

        <div class="searchBarContainer">
          <form action="search.php" method="GET">
            <input type="text" class="searchBar" name="term" placeholder="Search...">
            <button class="searchButton">
               <img src="./assets/images/icons/search.png" alt="search" >                        
            </button>
          </form>
        </div>

        <div class="rightIcons">
          <a href="upload.php">
           <img class="upload" src="./assets/images/icons/upload.png" alt="upload" >  
          </a>
          <a href="#">
           <img class="" src="./assets/images/profilePictures/default.png" alt="default profile icon" >  
          </a>
        </div>


      </div>

      <div id="sideNavContainer" style="display:none">

      </div>

      <div id="mainSectionContainer">
        <div id="mainContentContainer">