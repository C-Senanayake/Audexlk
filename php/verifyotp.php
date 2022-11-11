<?php session_start();?>
<?php require_once('../include/connection.php');?>
<?php require_once('../include/functions.php');?>
<?php
        $errors=array();
        $otp1='';

    if(isset($_POST['submit'])){
        $email=$_SESSION['email'];

        $query="SELECT * FROM user WHERE email='{$email}' LIMIT 1";

        $result_set=mysqli_query($connection,$query);
        
        if($result_set){
            if(mysqli_num_rows($result_set)==1){
                $result=mysqli_fetch_assoc($result_set);
                $otp1=$result['otp'];
            }
        }
        else{
            $errors[]="Query failed";

        }

        $otp=$_POST['otp'];

        if($otp==$otp1){
            $active=1;
            $query="UPDATE user SET email_active='{$active}' WHERE email='{$email}' LIMIT 1";

            $result_set=mysqli_query($connection,$query);
            
            if($result_set){
                header('Location:index.php');
            }
        }
        else{
            $errors[]="Entered OTP value is wrong";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/verify.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Register</title>
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
    <div class="container">
        <div class="form">
            <h1>Register</h1>
            <?php
                if(!empty($errors)){
                    echo '<div class="error">';
                    foreach($errors as $error){
                        echo '-'.$error.'<br>';
                    }
                    echo '</div>';
                }

            ?>
            <form action="verifyotp.php" method="post">
                <label >OTP(sent to email address)</label>
                <div class="input">
                    <input type="number" name="otp"  class="otp1" placeholder="0" pattern="[0-9]{6}" onpaste="false" required>                   
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Finish Registration" id="button">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../js/form.js"></script>
</html>
<?php mysqli_close($connection);?>
<!-- Closing the connection