<?php session_start();?>
<?php require_once('../include/connection.php');?>
<?php require_once('../include/functions.php');?>

<?php 
    //checking if a user is logged in
    if(!isset($_SESSION['user_id'])){
        header('Location:index.php');
    }
?>
<?php
        $errors=array();
        
        $title='';
        $price='';
        $auction='';
        $date='';
        $img='';
        $condition='';
        $category='';
        $description='';
        
        
        if(isset($_POST['submit'])){
            
        $email=$_SESSION['email'];
        $title=$_POST['title'];
        $price=$_POST['price'];
        // $auction=$_POST['check_au'];
        $date=$_POST['date'];
        // $img=$_POST['img'];
        $condition=$_POST['condition'];
        $category=$_POST['category'];
        $description=$_POST['description'];
        
        //checking required field
        $req_fields=array('title','price','condition','category','description');
        foreach($req_fields as $field){
            if(empty(trim($_POST[$field]))){
                $errors[]=$field.' is required';
            }
        }

        if(empty($errors)){
            //no errors
            $title=mysqli_real_escape_string($connection , $_POST['title']);
            $price=mysqli_real_escape_string($connection , $_POST['price']);
            // $auction=mysqli_real_escape_string($connection , $_POST['check_au']);
            $date=mysqli_real_escape_string($connection , $_POST['date']);
            // $img=mysqli_real_escape_string($connection , $_POST['type']);
            $condition=mysqli_real_escape_string($connection , $_POST['condition']);
            $category=mysqli_real_escape_string($connection , $_POST['category']);
            $description=mysqli_real_escape_string($connection , $_POST['description']);



            // $query1="INSERT INTO product(
            //     product_title,product_condition,product_category,product_type,price,p_description,is_deleted)
            //     VALUES (
            //     '{$title}', '{$condition}', '{$category}','{$price}', '{$description}', 0 )";
            
            // $result_set1=mysqli_query($connection,$query1);

            // if (isset($_POST['check_au'])) {
            //     // Checkbox is selected

            //     $query="INSERT INTO product(
            //         product_title,product_condition,product_category,product_type,end_time,price,p_description,is_deleted)
            //         VALUES (
            //         '{$title}', '{$condition}', '{$category}','{'auction'}','{$date}','{$price}', '{$description}', 0 )";
                


            //     // $query2="INSERT INTO advertisement(
            //     //     advertisement_type,end_time,is_deleted)
            //     //     VALUES (
            //     //     '{'auction'}', '{$date}', 0 )";
                
            // } else {
                echo $email;
                $query="INSERT INTO product(
                    email,product_title,product_condition,product_category,product_type,price,p_description,is_deleted)
                    VALUES (
                    '{$email}','{$title}', '{$condition}', '{$category}','fixed_price','{$price}', '{$description}', 0 )";
                
                // $query2="INSERT INTO advertisement(
                //     is_deleted)
                //     VALUES (
                //      0 )";
            // }

            $result_set=mysqli_query($connection,$query);

            if($result_set ){
                //query successful               
                header('Location:seller_advertisements.php');
            }
            else{
                $errors[]='Failed to add the product';
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
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/sell_item.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Sell Item</title>
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
    <div class="container_add">
        <div class="sidebar">
                <a href="#"><i class="fas fa-qrcode"></i> <span>Dashboard</span></a>
                <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i><span>Profile Settings</span></a>
                <a href="#"> <i class="fa fa-ad" aria-hidden="true"></i><span>Advertisements</span></a>
                <a class="current" href="#"> <i class="fa-solid fa-dollar-sign" aria-hidden="true"></i><span>Sell Item</span></a>
                <a href="#"> <i class="fa fa-comments"></i><span>Messages</span></a>       
        </div>
        <div class="advertisement">
        <?php
                if(!empty($errors)){
                    echo '<div class="error">';
                    foreach($errors as $error){
                        echo '-'.$error.'<br>';
                    }
                    echo '</div>';
                }

            ?>
            <div class="add">
                <div id="forms" class="form_seller">
                    <!-- <?php
                        if(!empty($errors)){
                            echo '<div class="error">';
                            foreach($errors as $error){
                                echo '-'.$error.'<br>';
                            }
                            echo '</div>';
                        }
        
                    ?> -->
                    <form action="sell_item.php" method="post">
                        <div class="input">
                            <label for="">Title&nbsp</label>
                            <input class="title" type="text" name="title"  required>
                        </div>
                        <div class="input">
                            <label for="">Price</label>
                            <input class="price" type="text" name="price"  required>
                        </div>
                        <div class="input">
                            <label for="check_au" >Auction(optional)</label>
                            <input type="checkbox"   name="check_au" id="check_au" >
                            <label class="date" for="date">Ending Date</label>
                            <input class="date" type="date" name="date"  >
                        </div>
                        <div class="input">
                            <div class="image">
                                <label for="image1">Image1:</label>
                                <input type="image" name="image1"  class="fa-solid" alt="&#xf03e" >
                            </div>
                            <div class="image">
                                <label for="image2">Image2:</label>
                                <input type="image" name="image2"  class="fa-solid" alt="&#xf03e">
                            </div>
                            <div class="image">
                                <label for="image3">Image3:</label>
                                <input type="image" name="image3" class="fa-solid " alt="&#xf03e">
                            </div>
                        </div>
                        <div class="input">
                            <label class="condition" for="">Condition</label>
                            <input class="condition" type="text" name="condition"  required>
                        </div>
                        <div class="input">
                            <label class="category" for="category">Catagory&nbsp</label>
                            <select name="category" id="category">
                              <option value="microphone">Microphone</option>
                              <option value="dj">DJ</option>
                              <option value="mixer">Mixer</option>
                              <option value="amplifier">Amplifier</option>                         
                            </select>
                        </div>
                        <div class="input">
                            <label class="descriptionl" for="">Description</label>
                            <input class="description" type="text" name="description"  required>
                        </div>
                        <div class="submit">
                            <input type="submit" name="submit" value="Post" class="post">
                            <input type="submit" name="submit" value="Cancel" class="cancel">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="../js/form.js"></script>
</html>
<?php mysqli_close($connection);?>
<!-- Closing the connection-->

