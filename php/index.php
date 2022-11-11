<?php session_start();?>
<?php require_once('../include/connection.php');?>
<?php require_once('../include/functions.php');?>


<?php
    //check form submission
    if(isset($_POST['submit'])){
        $errors=array();
        //check if username and password has been enterd
        if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
            $errors[]='Email is missing/invalid';
        }
        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
            $errors[]='Password is missing/invalid';
        }
        //check there are any errors
        if (empty($errors)){
            //save email and password into variables
            $email=mysqli_real_escape_string($connection,$_POST['email']);
            $password=mysqli_real_escape_string($connection,$_POST['password']);
            $hashed_password=sha1($password);
            $_SESSION['email']=$email;

            //database query
            $query="SELECT * FROM user WHERE 
                    email='{$email}'                     
                    AND 
                    password='{$hashed_password}' LIMIT 1";

            $result_set=mysqli_query($connection,$query);
            verify_query($result_set);
            //query successful
            if(mysqli_num_rows($result_set)==1){
                $user=mysqli_fetch_assoc($result_set);
                echo $user['email_active'];
                echo $user['is_deleted'];
                if($user['email_active']==1 && $user['is_deleted']==0){
                    $_SESSION['user_id']=$user['_id'];
                    $_SESSION['first_name']=$user['first_name'];

                    //updating last login
                    $query="UPDATE user SET last_login=NOW() WHERE
                            _id= {$_SESSION['user_id']} LIMIT 1";
                    $result_set=mysqli_query($connection,$query);
                    verify_query($result_set);

                    //header('Location:home.php');

                    // ADDED BY EPA FOR ROUTING ACTIONS

                    $user_type =  $user['user_type'];

                    // switch ($user_type) {
                    //     case 'service provider':
                    //         echo "service provider";
                    //         header('Location:service_provider_home.php');
                    //         break;

                    //     case 'seller':
                    //         header('Location:index.php'); //haduwata passe hari file eka methanata dapan
                    //         break;

                    //     case 'buyer':
                    //         header('Location:index.php');
                    //         break;

                    //     case 'admin':
                    //         header('Location:index.php');
                    //         break;
                        
                    //     default:
                    //         header('Location:index.php');
                    //         break;
                    // }



                }else if($user['email_active']==0){
                $errors[]='Email not verified';

                }
                else if($user['is_deleted']==1){
                    $errors[]='Had a previous account and deleted';
    
                }
            }//email/password invalid
            else{
                $errors[]='Invalid email/Password';
            }
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
    <link rel="stylesheet" href="../styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Login</title>
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
        <div id="forms" class="form">
            <h1>Login</h1>
            <?php
                if(isset($errors) && !empty($errors)){
                    echo '<div class="error">';
                    foreach($errors as $error){
                        echo '-'.$error.'<br>';
                    }
                    echo '</div>';
                }
                if(isset($_GET['logout'])){
                    echo '<div class="error">Successfully loged out</div>';
                }

            ?>

            <form action="index.php" method="post" >
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
                    <a href="register.php"> Register now</a>
                </div>
                <a href="register.html" class="forgot">Forgot password</a>
                <div class="submit">
                    <input type="submit" name="submit" value="Login" class="button">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../js/form.js"></script>
</html>
<?php mysqli_close($connection);?>
<!-- Closing the connection