<?php
	session_start();
	require './PHP/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./CSS/search.css">
	<link rel="stylesheet" href="./CSS/header.css">
	<link rel="stylesheet" href="./CSS/footer.css">
	<title>All Products</title>
</head>
<body>
	<header>
		<?php
			include './PHP/header.php';
		?>
	</header>
	<div class="sort-column">
		<div class="container flex-space">
			<?php
				$sql="SELECT * FROM product";
				$result=mysqli_query($connection,$sql);
			?>	
			<span class="results">Showing All Products</span>
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
			<?php
				$rate='';
                $non='';
                $sale='';
				if(mysqli_num_rows($result)<=0){
					echo 'No products found...';
				}else{
					
				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$rate='';
                    $non='';
                    $sale='';
                    $stock='';
                    $link='';
                    $image='';
                    for($i=0;$i<5;$i++){
                        if($i<$row["Pro_ratings"]){
                            $rate.='<span class="star-rate"></span>';
                        }else{
                            $non.='<span class="star"></span>';
                        }
                    }
                    if($row["Pro_offer"]>0){
                        $sale.='<span class="offer">'.$row["Pro_offer"].'% OFF</span>';
                    }else{
                        $sale.='';
                    }
                    if($row["Pro_stock"]>4){
                    	$stock.='<span class="stock">In Stock</span>';
                    	$image.='<img src="'.$row["Pro_image"].'" alt="Image" class="product-image">';
                    	$link.='<a href="ProductDes.php?id='.$row["Pro_id"].'"><span class="name">'.$row["Pro_name"].'</span></a>';
                    }elseif ($row["Pro_stock"]<1) {
                    	$image.='<img src="./Assets/Images/out.png" alt="Image" class="product-image no-image">';
                    	$stock.='<span class="stock out">OUT OF STOCK</span>';
                    	$link.='<span class="name">'.$row["Pro_name"].'</span>';
                    }else{
                    	$stock.='<span class="stock limited">Only '.$row["Pro_stock"].' left in Stock</span>';
                    	$image.='<img src="'.$row["Pro_image"].'" alt="Image" class="product-image">';
                    	$link.='<a href="ProductDes.php?id='.$row["Pro_id"].'"><span class="name">'.$row["Pro_name"].'</span></a>';
                    }
					echo '
						<div class="result-card">
							<div class="container flex">
								<div class="product-image-container">
									'.$image.'
								</div>
								<div class="details">
									'.$link.'
									<div class="rating-container flex">
			                            '.$rate.'
			                            '.$non.'
			                        </div>
									<span class="cost">&#8377;'.$row["Pro_cost"].'</span>
									'.$sale.'
									'.$stock.'
								</div>
							</div>
						</div>

					';
				
				}
			}
			
			?>
		</div>
	</div>
			
	<footer>
		<?php
			require './PHP/footer.php';
		?>
	</footer>
	<!-- <script>
		(()=>{
		let out=document.querySelectorAll('.no-image').forEach((value)=>{
         	value.setAttribute('src','./Assets/Images/out.png');
		})})();
	</script> -->
</body>
</html>