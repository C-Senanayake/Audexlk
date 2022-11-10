<?php include('./header.php') ?>

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
        <li><a href="#" class="nav_tags">Login</a></li>
    </ul>
</nav>


    <div class="sidebar">
        <a href="#"><i class="fas fa-qrcode"></i> <span>My Profile</span></a>
        <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i><span>Watch List</span></a>
        <a href="#"> <i class="fa fa-ad" aria-hidden="true"></i><span>Feedback</span></a>
        <a href="#"> <i class="fa fa-calendar" aria-hidden="true"></i><span>Reactions</span></a>
        <a href="#"> <i class="fa fa-comments"></i><span>Messages</span></a>       
    </div>
    <div class="content-box">
        <div class="name-field">
            <img src="img/icons/healthicons_ui-user-profile.png" alt="profile_pic" srcset="">
            <h1>Mr. User Name</h1>
        </div>
        <div class="details">
            <div class="details-description">
                <h3>Who I Am?</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque delectus voluptatibus odit 
                corrupti mollitia sint libero? Nobis provident qui placeat autem magni enim! Corporis nobis, odio tempore itaque esse iure.
                </p>
            </div>
            <div class="details-info">
                details-info
            </div>
        </div>


    </div>
    


<?php include('./footer.php') ?>