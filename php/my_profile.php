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
    <img src="img/image 1.png" alt="">
    <ul>
        <li><a href="home.php" class="nav_tags">Home</a></li>
        <li><a href="#" class="nav_tags">Shop</a></li>
        <li><a href="#" class="nav_tags">Sound Engineers</a></li>
        <li><a href="#" class="nav_tags">Events</a></li>
        <li><a href="index.php" class="nav_tags">Login</a></li>
    </ul>
</nav>


<div class="sidebar">
        <a href="#" id="now"><i class="fas fa-address-card"></i> <span>My Profile</span></a>
        <a href="#"> <i class="far fa-calendar-check" aria-hidden="true"></i><span>Watch List</span></a>
        <a href="#"> <i class="fa fa-comments-o" aria-hidden="true"></i><span>Feedback</span></a>
        <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Reactions</span></a>
        <a href="messages.php"> <i class="fa fa-envelope"></i><span>Messages</span></a>       
    </div>
    <div class="content-box">
        <div class="name-field">
            <img src="../img/icons/healthicons_ui-user-profile.png" alt="profile_pic" srcset="">
            <h1>Mr. User Name</h1>
        </div>
        <div class="details">
            <div class="details-description">
                <h3>Who I Am? Dinesh</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque delectus voluptatibus odit 
                corrupti mollitia sint libero? Nobis provident qui placeat autem magni enim! Corporis nobis, odio tempore itaque esse iure.
                </p>
            </div>
            <div class="details-info">
                <table>
                    <tr>
                        <th>First Name:</th>
                        <td>Tharindu</td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td>Epasinghe</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>tharindu@gmail.com</td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td>dnskln</td>
                    </tr>
                    <tr>
                        <th>Address Line 1:</th>
                        <td>Wickrama Stores, Dolamulla</td>
                    </tr>
                    <tr>
                        <th>Address Line 2:</th>
                        <td>Maliduwa, Akuressa</td>
                    </tr>
                    <tr>
                        <th>Mobile:</th>
                        <td>0763183464</td>
                    </tr>
                    <tr>
                        <th>User Type:</th>
                        <td>Buyer</td>
                    </tr>
                </table>
                <button type="submit">Edit Details</button>
            </div>
        </div>


    </div>
    

    </body>
<script src="js/form.js"></script>
</html>
<!-- <?php //mysqli_close($connection);?> -->