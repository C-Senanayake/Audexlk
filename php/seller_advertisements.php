<!-- <?php session_start();?>
<?php require_once('../include/connection.php');?>
<?php require_once('../include/functions.php');?> -->
<?php 
    //checking if a user is logged in
    if(!isset($_SESSION['user_id'])){
        header('Location:index.php');
    }
?>

<?php
    $email=$_SESSION['email'];
    $product_list='';

    $query="SELECT * FROM product WHERE is_deleted=0 AND email='{$email}' ORDER BY product_category";
    $result_set=mysqli_query($connection,$query);

    if($result_set){
        while($product=mysqli_fetch_assoc($result_set)){
            
            $product_list.="<div class=\"advertisements\">";
            $product_list.="<div class=\"image\"><img src=\"\" alt=\"photo\"></div>";
            $product_list.="<p class=\"one\">{$product['product_title']}</p>";
            $product_list.="<p class=\"two\">{$product['product_type']}</p>";
            $product_list.="<p class=\"three\">N/A</p>";
            $product_list.="<p class=\"two\">Rs.{$product['price']}</p>";
            $product_list.="<a class=\"five\" href=\"#?product_id={$product['product_id']}\">Edit</a>";
            $product_list.="<a class=\"six\" href=\"#?product_id={$product['product_id']}\">Preview</a>";
            $product_list.="</div>";
            
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
    <link rel="stylesheet" href="../styles/seller_advertisement.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" ></script> -->
    <script src="https://kit.fontawesome.com/128d66c486.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
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
            <li><a href="logout.php" class="nav_tags">Logout</a></li>
        </ul>
    </nav>
    <div class="container_add">
        <div class="sidebar">
                <a href="#"><i class="fas fa-qrcode"></i> <span>Dashboard</span></a>
                <a href="#"> <i class="fa fa-cog" aria-hidden="true"></i><span>Profile Settings</span></a>
                <a class="current" href="#"> <i class="fa fa-ad" aria-hidden="true"></i><span>Advertisements</span></a>
                <a href="sell_item.php"> <i class="fa-solid fa-dollar-sign" aria-hidden="true"></i><span>Sell Item</span></a>
                <a href="#"> <i class="fa fa-comments"></i><span>Messages</span></a>       
        </div>
        <div class="poster_advertisements">
            <h1>Posted Advertisements</h1>
            <div class="header">
                <div class="image">
                    <img  class="two" src="" alt="photo">
                </div>
                <p class="one">Title</p>
                <p class="two">Format</p>
                <p class="three">Bids/Offers</p>
                <p class="four">Price</p>
                <p class="five">Edit</p>
                <p class="six">Priview</p>

            </div>
            <!-- <div class="advertisements"> -->
                <!-- <img class="two" src="../img/Rectangle 100.png" alt="photo">
                <div class="image">
                    <img src="../img/Rectangle 100.png" alt="photo">
                </div>
                <p class="one">Title</p>
                <p class="two">Format</p>
                <p class="three">Bids/Offers</p>
                <p class="four">Price</p>
                <a class="five" href="#">Edit</a>
                <a class="six" href="#">Preview</a> -->
                <?php echo $product_list;?>
            <!-- </div> -->
        </div>

    </div>
</body>
<script src="../js/form.js"></script>
</html>
<!-- <?php mysqli_close($connection);?> -->
<!-- Closing the connection-->

