<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./CSS/search.css">
	<link rel="stylesheet" href="./CSS/header.css">
	<title>Your Search Result</title>
</head>
<body>
	<header>
		<?php
			include './PHP/header.php';
		?>
	</header>
	<div class="sort-column">
		<div class="container flex-space">	
			<span class="results">Showing Results for Camera</span>
			<div class="sort-container flex">
				<label for="sort">Sort By:</label>
				<select name="sort" id="sort">
					<option value="Name">Name</option>
					<option value="low">Price Low to High</option>
					<option value="low">Price High to Low</option>
				</select>
			</div>
		</div>
	</div>
	<div class="search-results">
		<div class="container">
			<div class="result-card">
				<div class="container flex">
					<div class="product-image-container">
						<img src="./Assets/Images/cam5.jpeg" alt="" class="product-image">
					</div>
					<div class="details">
						<span class="name">Canon Digital Camera</span>
						<div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
						<span class="cost">&#8377;60,000</span>
						<span class="offer">10% OFF</span>
						<span class="stock">In Stock</span>
					</div>
				</div>
			</div>
			<div class="result-card">
				<div class="container flex">
					<div class="product-image-container">
						<img src="./Assets/Images/cam5.jpeg" alt="" class="product-image">
					</div>
					<div class="details">
						<span class="name">Canon Digital Camera</span>
						<div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
						<span class="cost">&#8377;60,000</span>
						<span class="offer">10% OFF</span>
						<span class="stock limited">Only 3 left in Stock</span>
					</div>
				</div>
			</div>
			<div class="result-card no-stock">
				<div class="container flex">
					<div class="product-image-container">
						<img src="./Assets/Images/cam5.jpeg" alt="" class="product-image no-image">
					</div>
					<div class="details">
						<span class="name">Canon Digital Camera</span>
						<div class="rating-container flex">
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star-rate"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
						<span class="cost">&#8377;60,000</span>
						<span class="offer">10% OFF</span>
						<span class="stock out">OUT OF STOCK</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		(()=>{
		let out=document.querySelectorAll('.no-image').forEach((value)=>{
         	value.setAttribute('src','./Assets/Images/out.png');
		})})();
	</script>
</body>
</html>