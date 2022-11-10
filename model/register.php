<?php session_start();?>
<?php require_once('./database.php');?>
<?php require_once('./functions.php');?>

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
                    }
                }
                else{
                    $query="INSERT INTO user(
                           first_name,second_name,email,phone_number,user_type,password,otp,email_active,is_deleted)
                           VALUES (
                           '{$fname}', '{$lname}', '{$email}','{$phone}', '{$type}', '{$hashed_password}', '{$otp}', 0, 0 )";

                }
            }

            $result_set=mysqli_query($connection,$query);
            if($result_set){
                //query successful
                //otp sending by email
                

                $to=$email;
                $sender='chamath5000@gmail.com';
                $mail_subject='Verify Email Address';
                $email_body='<p>Dear'.$fname.'<br>Thank you for signing up to Audexlk. In order to'; 
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