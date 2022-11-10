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
        <a href="#" id="now"><i class="fas fa-address-card"></i> <span>My Profile</span></a>
        <a href="#"> <i class="far fa-calendar-check" aria-hidden="true"></i><span>Watch List</span></a>
        <a href="#"> <i class="fa fa-comments-o" aria-hidden="true"></i><span>Feedback</span></a>
        <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i><span>Reactions</span></a>
        <a href="#"> <i class="fa fa-envelope"></i><span>Messages</span></a>       
    </div>
    <div class="content-box">
        <div class="name-field">
            <img src="img/icons/healthicons_ui-user-profile.png" alt="profile_pic" srcset="">
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
    


<?php include('./footer.php') ?>