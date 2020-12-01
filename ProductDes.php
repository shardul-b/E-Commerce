<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./CSS/productstyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./CSS/header.css">
<link rel="stylesheet" href="./CSS/footer.css">
<title>PRODUCT DESCRIPTION</title>
</head>
<body>
	<header>
		<?php
			include('./PHP/header.php');
		?>
	</header>
	<?php
		include('./PHP/connect.php');
		$row='';
		$sql = "SELECT * FROM product where Pro_id=".$_GET['id']."";
		// $result = mysqli_query($conn, $sql);20
		// echo("ABC ".$result);
		if ($result = mysqli_query($connection,$sql)) {
		  $row = mysqli_fetch_assoc($result);
		  #echo($row['Pro_id']);
		  // Free result set
		  mysqli_free_result($result);
		}else{
			//query fails
			echo("Yo");
		}
?>
<div class="small-container single-product">
		<div class="row container mobile-row">
		<!-- Image -->
		<div class="image-container">
			 
			<img src ="<?php 
				echo $row['Pro_image'];
			
				?>" class="image">
		</div>
		<!-- Description-->
		<div class="product-desc col-2">
			<div class="container">
			<h1>  
				 <?php 
				echo $row['Pro_name'];
			
				?>
			</h1>
			<h3>
				Rs.
				 <?php 
				echo $row['Pro_cost'];
			
				?>
				
				<!-- Cost -->
			</h3>
			<p>Inclusive of all tax</p>
			<form method="post">
				<input type="number" class='quantity' value="1" max="2" min="1" name='quantity'>
				<button class="button" name="cartbutton"> Add to cart </button>
			</form>
			<h3 class="product-details-head"> Product Details:  </h3>
			<p class="product-details">
				<?php 
				echo $row['Pro_desc'];
				#desc
				?>
				
			</p>
		</div>
	</div>
</div>
	<div class="container-fluid">
		<div class="container">
		<h3 class="long-desc-head">Preview</h3>
		<p class="long-desc">
			
			<?php 
			#details
				echo $row['Pro_details'];
			?>
		</p>

</div> 
<footer>
	<?php
		require './PHP/footer.php';
	?>
</footer>

<?php
	if(isset($_POST['cartbutton'])){
        if(!isset($_SESSION['userid']) && !$_SESSION['loggedin']==true){
            echo "<script> location.href='./login.php'; </script>";
        }else{
        	$quantity=$_POST['quantity'];
            $SQL = "INSERT INTO Cart (user_id,product_id,quantity) VALUES ('". $_SESSION['userid'] ."','". $_GET['id'] ."','".$quantity."')";  
            $result = mysqli_query($connection,$SQL) or die('Invalid query:'.mysqli_error($connection));
        }
    }
?>
</body>
</html> 
