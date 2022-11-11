<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>AUDEX</title>
</head>
<body>
<nav>
    <input type="checkbox" name="check" id="check" onchange="docheck()">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <img src="../img/image 1.png" alt="">
    <ul>
        <li><a href="home.php" class="nav_tags">Home</a></li>
        <li><a href="#" class="nav_tags">Shop</a></li>
        <li><a href="#" class="nav_tags">Sound Engineers</a></li>
        <li><a href="#" class="nav_tags">Events</a></li>
        <li><a href="index.php" class="nav_tags">Login</a></li>
    </ul>
</nav>


    <div class="sidebar">
        <a href="my_profile.php" ><i class="fas fa-address-card"></i> <span>My Profile</span></a>
        <a href="#"> <i class="far fa-calendar-check" aria-hidden="true"></i><span>Watch List</span></a>
        <a href="#"> <i class="fa fa-comments-o" aria-hidden="true"></i><span>Feedback</span></a>
        <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Reactions</span></a>
        <a href="#" id="now"> <i class="fa fa-envelope"></i><span>Messages</span></a>       
    </div>
    <div class="message-content">
        
    </div>
    


    </body>
<script src="js/form.js"></script>
</html>
<!-- <?php //mysqli_close($connection);?> -->