<?php
    //session_start();
	echo'<div class="big container flex-space">
            <div class="logo-container">
                <img src="./Assets/Images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="search-box-container flex">
                <span class="search-icon"></span>
                <input type="text" class="search-box" placeholder="Search Products">
            </div>
            <nav class="flex-space">
                <ul class="nav-list nav-list-primary flex-space">
                    <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link">Shop</a></li>
                    <li class="nav-item"><a href="#footer" class="nav-link">About us</a></li>
                   <!-- <li class="nav-item"><a href="./Blog/index.php" class="nav-link">BLOG</a></li>-->
                </ul>
                <a href="./cart.php">
                <div class="cart-container flex">
                        <span class="cart-icon"></span>
                        <span class="cart">My Cart</span>
                    
                </div>
                </a>
                <ul class="nav-list nav-list-secondary flex-space">
                    '.((isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)?'<li class="nav-item"><a href="./AccountInfo.php" class="nav-link-button account">MY ACCOUNT</a></li>':'<li class="nav-item"><a href="./login.php" class="nav-link-button">Sign In</a></li>').'
                    <!-- <li class="nav-item"><a href="#" class="nav-link-button">Sign up</a></li> -->
                </ul>
            </nav>
        </div>
        <div class="mobile container flex-space">
            <div class="logo-container">
                <img src="./Assets/Images/logo.png" alt="Logo" class="logo">
            </div>
            <div class="search-box-container flex">
                <span class="search-icon"></span>
                <input type="text" class="search-box" placeholder="Search Products">
            </div>
            <span class="cart-icon"></span>
        </div>
        <div class="mobile-footer">
            <div class="container flex-space">
                <div class="footer-group">
                    <a href="./index.php" class="footer-link" title="Home"><span class="flex footer-icon home-icon"></span></a>
                    <span class="footer-desc">HOME</span>
                </div>
                <div class="footer-group">
                    <a href="./shop.php" class="footer-link" title="Shop"><span class="flex footer-icon shop-icon"></span></a>
                    <span class="footer-desc">SHOP</span>
                </div>
                <div class="footer-group">
                <a href="#footer" class="footer-link"title="About Us"><span class="flex footer-icon about-icon"></span></a>
                    <span class="footer-desc">ABOUT</span>
                </div>
                <div class="footer-group">
                <a href="./login.php" class="footer-link" title="Login" ><span class="flex footer-icon login-icon"></span></a>
                    <span class="footer-desc">LOGIN</span>
                </div>
            </div>
        </div>
        ';
?>

<script type="text/javascript">
    document.getElementsByClassName('search-box')[0].addEventListener("keyup",(event)=> {
        if (event.keyCode === 13 && document.getElementsByClassName('search-box')[0].value.length>0) {
            event.preventDefault();
            location.href=`./search.php?value=${document.getElementsByClassName('search-box')[0].value}`;
        }
    }); 
</script>