<?php 
session_start();
require_once('./database.php');
require_once('./functions.php');



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
                    header('Location:home.php');
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


