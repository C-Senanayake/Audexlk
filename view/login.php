
<?php include('header.php'); ?> 

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

<?php include('footer.php'); ?> 
