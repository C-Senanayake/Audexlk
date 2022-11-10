
<?php require('./header.php') ?>
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
        <a href="#"><i class="fas fa-qrcode"></i> <span>Dashboard</span></a>
        <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i><span>Profile Settings</span></a>
        <a href="#"> <i class="fa fa-ad" aria-hidden="true"></i><span>Advertisements</span></a>
        <a href="#"> <i class="fa fa-calendar" aria-hidden="true"></i><span>Calender</span></a>
        <a href="#"> <i class="fa fa-comments"></i><span>Messages</span></a>       
    </div>
    
    <?php require('./footer.php') ?>