 <?php //require_once('./include/connection.php');?> 
<?php include('./view/header.php'); ?> 

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
    <div class="container">
        <div id="forms" class="form">
            <h1>Login</h1>
            <div class="error">Error</div>
            <form action="verifyotp.html" autocomplete="off">
                <div class="input">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter password" required>
                </div>
                <div class="reg_now">
                    <p>Do not have an account?&nbsp&nbsp</p>
                    <a href="./register.php"> Register now</a>
                </div>
                <a href="register.html" class="forgot">Forgot password</a>
                <div class="submit">
                    <input type="submit" value="Login" class="button">
                </div>
            </form>
        </div>
    </div>

    <?php include('./view/footer.php'); ?> 
