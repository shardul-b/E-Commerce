<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
    <link href="./CSS/account.css" rel="stylesheet" type="text/css">    
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <header>
        <?php
            include './PHP/header.php';
        ?>
    </header>
    <div class="top">
        <div class="container-box">
            <h2> Profile Details</h2>
            <form action="" method="post">
                <?php
                // if(!isset($_SESSION['userid']) && !$_SESSION['loggedin']==true){
                //     header('Location:./login.php');
                // }
                    $sql = "SELECT * FROM User WHERE  id= ".$_SESSION['userid']."";
                            if($result = mysqli_query($connection, $sql)){
                                //$row = mysqli_fetch_all($result, MYSQLI_NUM);
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo'
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="fname">First Name:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" class="text-input" id="fname" name="firstname" value="'.$row["Firstname"].'">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="lname">Last Name:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" class="text-input" id="lname" name="lastname" value="'.$row["Lastname"].'">
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-25">
                                                <label for="email">E-mail Address:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="text" class="text-input" name="email" id="email" value="'.$row["Email"].'">
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-25">
                                                <label for="phone">PHONE:</label>
                                            </div>
                                            <div class="col-75">
                                                <input type="tel" class="text-input" name="phone" id="phone" value="'.$row["Phone"].'">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-25">
                                                <label for="address">Address:</label>
                                            </div>
                                            <div class="col-75">
                                                <textarea id="address" name="address" style="height:200px">
                                                    '.
                                                        $row["Address"]
                                                    .'
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <input type="button" name="edit" value="Edit">
                                        </div>
                                    ';
                                }
                            }

                ?>
            </form>
        </div>
    </div>

    <div class="mid">
        <div class="container-box">
            <!-- Order DB -->
            <h2>Order Details</h2>
            <?php

            ?>
            <div class="row">
                <div class="col-25">
                    <label for="RecentOrders">Recent Orders*</label>
                </div>
                <div class="col-75">
                    <textarea id="address" name="address" style="height:200px"></textarea>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['name'])){
            $FirstName=$_POST["firstname"];
            $LastName=$_POST["lastname"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
            $Address=$_POST["address"];
            $sql='Update User SET "Firstname"='.$FirstName.',"Lastname"='.$LastName.',"Email="'.$email.',"Phone"='.$phone.',"Address="'.$Address.'WHERE id='.$_SESSION["userid"].'';
            $result = mysqli_query($connection,$sql) or die('Invalid query:');
        }
    ?>
    <footer>
        <?php
            include './PHP/footer.php';
        ?>
    </footer>
</body>
</html>