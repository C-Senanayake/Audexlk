<?php session_start();?>
<?php require_once('../include/connection.php');?>
<?php require_once('../include/functions.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <nav>
        <input type="checkbox" name="check" id="check" onchange="docheck()">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img src="../img/image 1.png" alt="">
        <ul>
            <li><a href="#" class="nav_tags">Home</a></li>
            <li><a href="#" class="nav_tags">Shop</a></li>
            <li><a href="#" class="nav_tags">Sound Engineers</a></li>
            <li><a href="#" class="nav_tags">Events</a></li>
            <li><a href="#" class="nav_tags">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="sidebar">
            <div class="side">
                <i class="fas fa-qrcode"></i>
                <a href="#">Dashboard</a>
            </div>
            <div class="side">
                <i class="fa fa-cog"></i>
                <a href="#">Profile Settings</a>

            </div>
            <div class="side">
                <i class="fa fa-ad" ></i>
                <a href="#">Advertisements</a>
            </div>
            <div class="side">
                <i class="fa fa-calendar" ></i>
                <a href="#">Sell Item</a>

            </div>
            <div class="side">
                <i class="fa fa-comments"></i>
                <a href="#">Messages</a>

            </div>
        </div>
    </div>
</body>
<script src="../js/form.js"></script>
</html>
<?php mysqli_close($connection);?>
<!-- Closing the connection-->

