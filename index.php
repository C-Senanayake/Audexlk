
<?php session_start();
 require_once('./model/database.php');
 require_once('./model/functions.php');

    //checking if a user is logged in
    if(!isset($_SESSION['user_id'])){
        header('Location:./view/login.php');
    }
    else{
        echo "loggd in";
    }
?>


