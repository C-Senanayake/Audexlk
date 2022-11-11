<?php //require_once('./include/connection.php');?> 
<?php include('header.php'); ?> 

    <nav>
        <input type="checkbox" name="check" id="check" onchange="docheck()">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img src="img/image 1.png" alt="">
        <ul>
            <li><a href="#" class="nav_tags">Home</a></li>
            <li><a href="#" class="nav_tags">Shop</a></li>
            <li><a href="#" class="nav_tags">Sound Engineers</a></li>
            <li><a href="#" class="nav_tags">Events</a></li>
            <li><a href="index.php" class="nav_tags">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="search">
            <div class="heading">
                <h1>Find the best <br>Audio Equipment</h1>
            </div>
            <div class="search-bar">
                <input type="search" name="search-item" placeholder="|">
                <button type="button" class="btn-search"><img src="img/icons/bxs_search-alt-2.png" alt="search"></input></button>
            </div>
        </div>
        <div class="explore">
            <div class="explore-line">
                <h3>Explore Popular Categories</h3>
            </div>
            <div class="explore-btn">
                <button><img src="img/icons/bi_speaker.png" alt="sp"></button>
                <button><img src="img/icons/bxs_guitar-amp.png" alt="am"></button>
                <button><img src="img/icons/nimbus_guitar.png" alt="gu"></button>
                <button><img src="img/icons/jam_dj.png" alt="dj"></button>
                <button><img src="img/icons/Group.png" alt="grp"></button>
            </div>
        </div>

    </div>

    <?php include('footer.php'); ?> 
