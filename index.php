<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/header.css">
</head>
<body>
    <header>
      <?php
        include'./PHP/header.php';
        require './PHP/connect.php';
      ?>
    </header>

<!-- Advertisement Box -->
<div class="advert-box">
      <div class="left-arrow-box flex">
            <span class="left-arrow arrow"></span>
      </div>
      <div class="right-arrow-box flex">
            <span class="right-arrow arrow"></span>
      </div>
      <div class="advert flex">

      </div>  
</div>
<div class="products-section">
    <div class="container">
        <h2 class="head">Featured Gadget Deals</h2>
        <div class="featured flex">
            <?php
                $sql = "SELECT * FROM product WHERE Pro_category = 'phone'";
                $rate='';
                $non='';
                $sale='';
                            if($result = mysqli_query($connection, $sql)){
                                //$row = mysqli_fetch_all($result, MYSQLI_NUM);
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $rate='';
                                    $non='';
                                    $sale='';
                                    for($i=0;$i<5;$i++){
                                        if($i<$row["Pro_ratings"]){
                                            $rate.='<span class="star-rate"></span>';
                                        }else{
                                            $non.='<span class="star"></span>';
                                        }
                                    }
                                    if($row["Pro_offer"]>0){
                                        $sale.='<span class="tag">'.$row["Pro_offer"].'% OFF</span> ';
                                    }else{
                                        $sale.='';
                                    }
                                    echo '
                                        <div class="card">
                                            <div class="product-image-container">
                                                '.$sale.'
                                                <img src="'.$row["Pro_image"].'" alt="'.$row["Pro_name"].'" class="product-img">
                                            </div>
                                            <div class="details">
                                                <div class="container">
                                                    <!-- For product details -->
                                                    <a href="ProductDes.php?id='.$row["Pro_id"].'"><span class="name">'.$row["Pro_name"].'</span></a>
                                                    <div class="rating-container flex">
                                                        '.
                                                            $rate.
                                                            $non
                                                        .'
                                                          
                                                    </div>
                                                    <span class="cost">&#8377;'.$row["Pro_cost"].'</span>
                                                    <!-- ADD TO CART </a> -->

                                                    <!-- <form method="post"> -->
                                                        <a href="./index.php?id='.$row["Pro_id"].'"><button class="cart-button" name="cart">ADD TO CART</button></a>
                                                        <!-- <input type="hidden" class="hidden-cart"> -->
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
        
                            }
            ?>
            
        </div>
        <h2 class="head">Featured Camera Deals</h2>
        <div class="featured flex">
            <?php
                $sql = "SELECT * FROM product WHERE Pro_category = 'camera'";
                $rate='';
                $non='';
                            if($result = mysqli_query($connection, $sql)){
                                //$row = mysqli_fetch_all($result, MYSQLI_NUM);
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $rate='';
                                    $non='';
                                    for($i=0;$i<5;$i++){
                                        if($i<$row["Pro_ratings"]){
                                            $rate.='<span class="star-rate"></span>';
                                        }else{
                                            $non.='<span class="star"></span>';
                                        }
                                    }
                                    echo '
                                        <div class="card">
                                            <div class="product-image-container">
                                                <!-- <span class="tag">'.$row["Pro_offer"].'OFF</span> -->
                                                <img src="'.$row["Pro_image"].'" alt="'.$row["Pro_name"].'" class="product-img">
                                            </div>
                                            <div class="details">
                                                <div class="container">
                                                    <!-- For product details -->
                                                    <a href="ProductDes.php?id='.$row["Pro_id"].'"><span class="name">'.$row["Pro_name"].'</span></a>
                                                    <div class="rating-container flex">
                                                        '.
                                                            $rate.
                                                            $non
                                                        .'
                                                          
                                                    </div>
                                                    <span class="cost">&#8377;'.$row["Pro_cost"].'</span>
                                                    <!-- ADD TO CART </a> -->

                                                    <!-- <form method="post"> -->
                                                        <button class="cart-button" name="cart">ADD TO CART</button>
                                                        <!-- <input type="hidden" class="hidden-cart"> -->
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
        
                            }
            ?>
        </div>
        <h2 class="head">Featured Women's Fashion Deals</h2>
        <div class="featured flex">
            <?php
                $sql = "SELECT * FROM product WHERE Pro_category = 'clothingwomen'";
                $rate='';
                $non='';
                            if($result = mysqli_query($connection, $sql)){
                                //$row = mysqli_fetch_all($result, MYSQLI_NUM);
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    $rate='';
                                    $non='';
                                    for($i=0;$i<5;$i++){
                                        if($i<$row["Pro_ratings"]){
                                            $rate.='<span class="star-rate"></span>';
                                        }else{
                                            $non.='<span class="star"></span>';
                                        }
                                    }
                                    echo '
                                        <div class="card">
                                            <div class="product-image-container">
                                                <!-- <span class="tag">'.$row["Pro_offer"].'OFF</span> -->
                                                <img src="'.$row["Pro_image"].'" alt="'.$row["Pro_name"].'" class="product-img">
                                            </div>
                                            <div class="details">
                                                <div class="container">
                                                    <!-- For product details -->
                                                    <a href="ProductDes.php?id='.$row["Pro_id"].'"><span class="name">'.$row["Pro_name"].'</span></a>
                                                    <div class="rating-container flex">
                                                        '.
                                                            $rate.
                                                            $non
                                                        .'
                                                          
                                                    </div>
                                                    <span class="cost">&#8377;'.$row["Pro_cost"].'</span>
                                                    <!-- ADD TO CART </a> -->

                                                    <!-- <form method="post"> -->
                                                        <button class="cart-button" name="cart">ADD TO CART</button>
                                                        <!-- <input type="hidden" class="hidden-cart"> -->
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
        
                            }
            ?>
        </div>
    </div>
</div>
<!-- Footer -->
    <footer>
        <?php
            include './PHP/footer.php';
        ?>
    </footer>
    <script src="./JS/script.js"></script>
</body>
</html>
