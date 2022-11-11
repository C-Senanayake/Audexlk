<!-- <?php //require_once('./include/connection.php');?> -->
<?php include('header.php'); ?> 

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
    <div class="container">
        <div id="forms" class="form">
            <h1>Register</h1>
            <div class="error">Error</div>
            <form action="verifyotp.html" autocomplete="off">
                <div class="input">
                    <label for="">First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required>
                </div>
                <div class="input">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </div>
                <div class="input">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input">
                    <label for="">Mobile Phone Number</label>
                    <input type="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}">
                </div>
                <div class="input">
                    <label for="type">Account type</label>
                        <select name="type" id="type">
                          <option value="buyer">Buyer</option>
                          <option value="seller">Seller</option>
                          <option value="service_provider">Service Provider</option>                         
                        </select>
                </div>
                <div class="input">
                    <label for="">Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="submit">
                    <input type="submit" value="Next" class="button">
                </div>
            </form>
        </div>
    </div>

<?php include('footer.php'); ?> 