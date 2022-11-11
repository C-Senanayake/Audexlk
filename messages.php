<?php include('./header.php') ?>

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
        <a href="my_profile.php" ><i class="fas fa-address-card"></i> <span>My Profile</span></a>
        <a href="#"> <i class="far fa-calendar-check" aria-hidden="true"></i><span>Watch List</span></a>
        <a href="#"> <i class="fa fa-comments-o" aria-hidden="true"></i><span>Feedback</span></a>
        <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Reactions</span></a>
        <a href="#" id="now"> <i class="fa fa-envelope"></i><span>Messages</span></a>       
    </div>
    <div class="message-content">
        
    </div>
    


<?php include('./footer.php') ?>