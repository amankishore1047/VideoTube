<?php require_once("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTube</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/JS/commonAction.js"></script>
</head>
<body>
    <div id="pageContainer">
        
        <div id="mastHeadContainer">
            <button class="navShowHide">
                <img src="assets/Images/Icons/menu.png" alt="Menu">
            </button>

            <a class="logoContainer" href="index.php">
            <img style="height:25px; margin-left: 8px" src="assets/Images/Icons/VideoTubeLogo.png" alt="iTube">
            </a>

            <div class="searchBarContainer">
                <form action="search.php" method="GET"> 
                    <input type="text" class="searchBar" name="term" placeholder="Search...">
                    <button class="searchButton">
                    <img src="assets/Images/Icons/search.png" alt="Search">
                    </button>
                </form>
            </div>

            <div class="rightIcons">
                <a href="upload.php">
                   <img src="assets/Images/Icons/upload.png" alt="Upload">
                </a>
                <a href="#">
                   <img src="assets/Images/ProfilePictures/default.png" alt="SignIn/SignUp">
                </a>

            </div>

        </div>

        <div id="sideNavContainer" style="display:none;">


        </div>

        <div id="mainSectionContainer">

            <div id="mainContentContainer">
