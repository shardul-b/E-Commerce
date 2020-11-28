<?php
	session_start();
	require './PHP/connect.php';
	/*if(!isset($_SESSION['userid']) && !$_SESSION['loggedin']==true){
        echo "<script> location.href='./login.php'; </script>";
    }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Cart</title>
	<link rel="stylesheet" href="./CSS/cartStyle.css">
	<link rel="stylesheet" href="./CSS/header.css">
</head>
<body>
	<header>
		<?php
			include './PHP/header.php';
		?>
	</header>
	<h1 class="head">
		MY CART
	</h1>
	<div class="top">
		<div class="container">
			<span class="back"><a href="./index.php" class="back-link">Home</a> > <a href="./AccountInfo.php" class="back-link">MyAccount</a> > Cart</span>
		</div>
	</div>
	<div class="products">
		<div class="products-container container">
			<!-- First -->
			<?php
				if(!isset($_SESSION['userid']) && !$_SESSION['loggedin']==true){
                	echo "<script> location.href='./login.php'; </script>";
            		exit;
            	}
				$sql = "SELECT * FROM Cart WHERE user_id = ".$_SESSION['userid']."";
				$result=mysqli_query($connection,$sql) or die('Invalid query:');
				while($row = mysqli_fetch_assoc($result)){
			        //echo $row['product_id'];
			        $sql2="SELECT * FROM product WHERE Pro_id=".$row['product_id']."";
			        $result2=mysqli_query($connection,$sql2) or die('Invalid query:');
			        $row2 = mysqli_fetch_assoc($result2);
			        // while($row2 = mysqli_fetch_assoc($result2)){
			        	echo'
							<div class="product-card flex">
								<div class="product-image">
									<img src="'.$row2["Pro_image"].'" alt="Camera" class="image">
								</div>
								<div class="product-desc flex">
									<span class="name">
										'.$row2["Pro_name"].'
									</span>
									
									<span class="quantity">x'.$row["quantity"].'</span>
									<span class="cost">&#8377;'.$row["quantity"]*$row2["Pro_cost"].'</span>

								</div>
								<a href="./cart.php?id='.$row["product_id"].'" class="clear">
									<span class="remove-icon flex" title="Remove from cart"></span>
								</a>
							</div>
							';
			        // }
			    }
				
				/**/
			?>
			
		</div>
		<!-- ORDER -->
		<form method="post">
			<button class="order-button" name='order'>CONFIRM ORDER</button>
		</form>

		<?php
			if(isset($_POST['order'])){
				//Date after 6 days
				$datetime = new DateTime(date('Y-m-d'));
				$datetime->add(new DateInterval("P6D"));
				$format=$datetime->format('Ymd');
				//echo(date('Y-m-d').' '.$format);
				$sql = "SELECT * FROM Cart WHERE user_id = ".$_SESSION['userid']."";
				$result=mysqli_query($connection,$sql) or die('Invalid query:');
				while($row = mysqli_fetch_assoc($result)){
					$sql2="SELECT Pro_cost FROM product WHERE Pro_id=".$row['product_id']."";
			        $result2=mysqli_query($connection,$sql2) or die('Invalid query:');
			        $row2 = mysqli_fetch_assoc($result2);
			        // while($row2 = mysqli_fetch_assoc($result2)){
			        	$cost=$row['quantity']*$row2['Pro_cost'];
			        	$date=date('Ymd');
						$sql3='INSERT INTO `Order` (User_ID, Product_ID, Quantity, Total_Amount, Order_Date, Delivery_Date, Status) VALUES ('.$_SESSION["userid"].', '.$row["product_id"].', '.$row["quantity"].', '.$cost.', '.$date.', '.$format.',	"In Progress")';
						$result3=mysqli_query($connection,$sql3) or die('Invalid query:'.mysqli_error($connection));
						//echo "<script>location";
					// }
				}
			}
			if(isset($_GET['id'])){
				$sql= "DELETE FROM  Cart WHERE user_id=". $_SESSION['userid'] ." AND product_id=".$_GET['id'];
				$result=mysqli_query($connection,$sql) or die('Invalid query:'.mysqli_error($connection));
			}
		?>
	</div>
</body>
</html>