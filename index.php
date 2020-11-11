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
            <div class="card">
                <div class="product-image-container">
                    <!-- <span class="tag">10% OFF</span> -->
                    <img src="./Assets/Images/cam5.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <!-- For product details -->
                        <a href="ProductDes.php?id=9"><span class="name">Canon Digital Camera</span></a>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <!-- ADD TO CART </a> -->

                        <!-- <form method='post'> -->
                        	<button class="cart-button" name='cart'>ADD TO CART</button>
                        	<!-- <input type="hidden" class="hidden-cart"> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="product-image-container">
                    <span class="tag">10% OFF</span>
                    <img src="./Assets/Images/j3.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <span class="name">Canon Digital Camera</span>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <button class="cart-button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="product-image-container">
                    <span class="tag">10% OFF</span>
                    <img src="./Assets/Images/j3.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <span class="name">Canon Digital Camera</span>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <button class="cart-button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="product-image-container">
                    <span class="tag">10% OFF</span>
                    <img src="./Assets/Images/j3.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <span class="name">Canon Digital Camera</span>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <button class="cart-button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="product-image-container">
                    <span class="tag">10% OFF</span>
                    <img src="./Assets/Images/j3.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <span class="name">Canon Digital Camera</span>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <button class="cart-button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </div>
        <h2>Some Products</h2>
        <div class="featured flex">
            <div class="card">
                <div class="product-image-container">
                    <span class="tag">10% OFF</span>
                    <img src="./Assets/Images/j3.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <span class="name">Canon Digital Camera</span>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <button class="cart-button">ADD TO CART</button>
                        
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="product-image-container">
                    <span class="tag">10% OFF</span>
                    <img src="./Assets/Images/j3.jpeg" alt="" class="product-img">
                </div>
                <div class="details">
                    <div class="container">
                        <span class="name">Canon Digital Camera</span>
                        <div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <span class="cost">&#8377;60,000</span>
                        <button class="cart-button">ADD TO CART</button>

                    </div>
                </div>
            </div>
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
