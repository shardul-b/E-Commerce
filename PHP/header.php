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
                    <li class="nav-item"><a href="./about.html" class="nav-link">About us</a></li>
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