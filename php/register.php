<?php session_start();?>
<?php require_once('../include/connection.php');?>
<?php require_once('../include/functions.php');?>
<?php
        $errors=array();

        $fname='';
        $lname='';
        $email='';
        $phone='';
        $password='';
        $otp='';

    if(isset($_POST['submit'])){
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        //checking required field
        $req_fields=array('fname','lname','email','phone','password');
        foreach($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field.' is required';
            }
        }
    
        //checking email address
        if(!is_email($_POST['email'])){
            $errors[]='Email address is invalid';
        }

        //checking whether email is entered
        $email=mysqli_real_escape_string($connection , $_POST['email']);
        $query="SELECT * FROM user WHERE email='{$email}' LIMIT 1";
        $result_set=mysqli_query($connection,$query);
        if($result_set){
            if(mysqli_num_rows($result_set)==1){
                $user=mysqli_fetch_assoc($result_set);
                if($user['email_active']==1){
                    $errors[]="Email address already exist";
                }
            }
        }

        if(empty($errors)){
            //no errors
            $fname=mysqli_real_escape_string($connection , $_POST['fname']);
            $lname=mysqli_real_escape_string($connection , $_POST['lname']);
            $email=mysqli_real_escape_string($connection , $_POST['email']);
            $phone=mysqli_real_escape_string($connection , $_POST['phone']);
            $type=mysqli_real_escape_string($connection , $_POST['type']);
            $password=mysqli_real_escape_string($connection , $_POST['password']);

            $otp=rand(111111,999999);
            $hashed_password=sha1($password);

            if($result_set){
                if(mysqli_num_rows($result_set)==1){
                    $user=mysqli_fetch_assoc($result_set);
                    if($user['email_active']==0){
                        $query="UPDATE user SET first_name='{$fname}',second_name='{$lname}',email='{$email}'
                                ,phone_number='{$phone}',user_type='{$type}',password='{$hashed_password}',otp='{$otp}' 
                                WHERE email='{$email}' LIMIT 1 ";

                        if($type=="seller"){
                            $query1="UPDATE seller SET(
                                email='{$email}',first_name='{$fname}',last_name='{$lname}')
                                WHERE email='{$email}' LIMIT 1 ";
                        $result_set1=mysqli_query($connection,$query1);
                                
                        }
                    }
                }
                else{
                    $query="INSERT INTO user(
                           first_name,second_name,email,phone_number,user_type,password,otp,email_active,is_deleted)
                           VALUES (
                           '{$fname}', '{$lname}', '{$email}','{$phone}', '{$type}', '{$hashed_password}', '{$otp}', 0, 0 )";
                    if($type=="seller"){
                        $query1="INSERT INTO seller(
                            email,first_name,last_name)
                            VALUES (
                            '{$email}','{$fname}', '{$lname}')";
                    $result_set1=mysqli_query($connection,$query1);
                    
                    }

                }
            }

            $result_set=mysqli_query($connection,$query);
            if($result_set && $result_set1){
                //query successful
                //otp sending by email
                

                $to=$email;
                $sender='chamath5000@gmail.com';
                $mail_subject='Verify Email Address';
                $email_body='<p>Dear '.$fname.',<br>Thank you for signing up to Audexlk. In order to'; 
                $email_body.=' validate your acoount you need enter the given OTP in the verification page.<br>';
                $email_body.='<h3>The OTP</h3><br><h1>'.$otp.'</h1><br>';
                $email_body.='Thank you,<br>Audexlk</p>';
                $header="From:{$sender}\r\nContent-Type:text/html;";
                $send_mail_result=mail($to,$mail_subject,$email_body,$header);
                if($send_mail_result){
                    $_SESSION['email']=$email;
                    header('Location:verifyotp.php?email='.$email);
                }
                else{
                }

            }
            else{
                $errors[]='Failed to add the user';
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
            <li><a href="index.php" class="nav_tags">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <div id="forms" class="form">
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
            <form action="register.php" method="post">
                <div class="input">
                    <label for="">First Name</label>
                    <input type="text" name="fname" placeholder="First Name" <?php echo 'value="'.$fname.'"';?> required>
                </div>
                <div class="input">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name" <?php echo 'value="'.$fname.'"';?> required>
                </div>
                <div class="input">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Email" <?php echo 'value="'.$email.'"';?> required>
                </div>
                <div class="input">
                    <label for="">Mobile Phone Number</label>
                    <input type="phone" name="phone" placeholder="0#########" <?php echo  'value="'.$phone.'"';?> required pattern="[0-9]{10}">
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
                    <input type="password" name="password" <?php echo 'value="'.$password.'"';?> required>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="Next" class="button">
                </div>
            </form>
        </div>
    </div>
</body>
<script src="../js/form.js"></script>
</html>
<?php mysqli_close($connection);?>
<!-- Closing the connection