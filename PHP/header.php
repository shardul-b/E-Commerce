<?php
    //session_start();
	echo'<div class="container flex-space">
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
                    <li class="nav-item"><a href="#" class="nav-link">Shop</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About us</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">BLOG</a></li>
                </ul>
                <div class="cart-container flex">
                    <span class="cart-icon"></span>
                    <span class="cart">My Cart</span>
                </div>
                <ul class="nav-list nav-list-secondary flex-space">
                    '.((isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true)?'<li class="nav-item"><a href="./AccountInfo.php" class="nav-link-button account">MY ACCOUNT</a></li>':'<li class="nav-item"><a href="./login.php" class="nav-link-button">Sign In</a></li>').'
                    <!-- <li class="nav-item"><a href="#" class="nav-link-button">Sign up</a></li> -->
                </ul>
            </nav>
        </div>';
?>