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


    <div class="sidebar">
        <a href="#"><i class="fas fa-qrcode" id="dashboard"></i> <span>Dashboard</span></a>
        <a href="./service_provider_profile_settings.php" id="profile-settings" > <i class="fa fa-cog" aria-hidden="true"></i><span>Profile Settings</span></a>
        <a href="#" id="advertisements"> <i class="fa fa-ad" aria-hidden="true"></i><span>Advertisements</span></a>
        <a href="#" id="calender"> <i class="fa fa-calendar" aria-hidden="true"></i><span>Calender</span></a>
        <a href="#" id="messages"> <i class="fa fa-comments"></i><span>Messages</span></a>       
    </div>

    <div class="service-provider-profile">
        
    </div>






    <script>

        //keeping the sidebar button clicked at the page

        link = document.querySelector('#profile-settings');
        link.style.background = "white";
        link.style.color = "red";

    </script>

</body>
</html>