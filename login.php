<?php
    session_start();
    $error='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./CSS/loginstyle.css">
    <link rel="stylesheet" href="./CSS/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up/Sign In</title>
</head>
<body>
    <?php
        require 'PHP/connect.php';
    ?>
    <header>
    	<?php
    		include 'PHP/header.php';
    	?>
    </header>
    <div class="background">
        <div class="login-area hide">
            <div class="container">
                <h1 class="signup-head">SIGN IN</h1>
                <form action="#" method='post' class="login-form">
                    <label for="login-email" class="input-label">Email</label>
                    <input type="email" name="login-email" id="login-email" class="input-box" placeholder='Email' title="Email" required="true">
                    <!--  -->
                    <span class="hide error login-email-error">Incorrect Email Id</span>
                   
                    <label for="log-pass" class="input-label">Password</label>
                    <div class="password-container flex">
                        <input type="password" name="login-password" id="log-pass" class="input-box" placeholder="Password" title='Password' required="true" oninput='signinVerify()'>
                        <div class="eye-in flex">
                            <span class="in-pass-hide hide-eye hide"></span>
                            <span class="in-pass-show show-eye"></span>
                        </div>
                    </div>
                    <!--  -->
                    <span class="hide error login-password-error">Password must have 2 capital and 2 small letters, special symbols, numbers and length>7</span>
                    <button class="submit-button submit" name='submit' disabled="true">SIGN IN</button>
                    <button class="new">New to this site?</button>
                </form>
                <div style = "font-size:0.9rem; color:#cc0000; margin-top:1em">
                    <?php echo $error; ?>
                </div>
            
            </div>
        </div>
        <div class="signup-area">
            <div class="container">
                <h1 class="signup-head">SIGN UP</h1>
                <form action="#" method='post' class="signup-form">
                    <!-- First Name -->
                    <label for="fname" class="input-label">First Name</label>
                    <input type="text" name="firstname" id="fname" class="input-box" placeholder="Firstname" title="Firstname" required="true" oninput='signupverify()'>
                    <span class="hide error signup-fname-error">Only text and length>2</span>
                    <!-- Last Name -->
                    <label for="lname" class="input-label">Last Name</label>
                    <input type="text" name="lastname" id="lname" class="input-box" placeholder="Lastname" title="Lastname" required="true" oninput='signupverify()'>
                    <span class="hide error signup-lname-error">Only text and length>2</span>
                    <!-- Email -->
                    <label for="new-email" class="input-label">Email</label>
                    <input type="email" name="signup-email" id="new-email" class="input-box" placeholder='Email' title="Email" required="true" >
                    <span class="hide error signup-email-error">Incorrect Email</span>
                    <!-- Password -->
                    <label for="new-pass" class="input-label">Password</label>
                    <div class="password-container flex">
                        <input type="password" name="signup-password" id="new-pass" class="input-box" placeholder="Password" title='Password' required="true" oninput='signupverify()'>
                        <div class="eye-up flex">
                            <span class="new-pass-hide hide-eye hide"></span>
                            <span class="new-pass-show show-eye"></span>
                        </div>
                    </div>
                    <span class="hide error signup-password-error">Password must have 2 capital and 2 small letters, special symbols, numbers and length>7</span>
                    <!-- Verify Password -->
                    <label for="re-pass" class="input-label">Re-enter Password</label>
                    <div class="password-container flex">
                        <input type="password" name="signupre-password" id="re-pass" class="input-box" placeholder="Re-enter Password" title='Password' required="true" oninput='signupverify()'>
                        <div class="eye-re flex">
                            <span class="re-pass-hide hide-eye hide"></span>
                            <span class="re-pass-show show-eye"></span>
                        </div>
                    </div>
                    <span class="hide error signup-repassword-error">Doesn't Match</span>
                    <div class="optional-area flex">
                        <span class="down-icon"></span>
                        <span class="up-icon hide"></span>
                        <span class="optional-text">Optional Inputs</span>
                    </div>
                    <!-- Phone -->
                    <div class="optional-fields hide">
                        <label for="phone" class="input-label">Mobile No.</label>
                        <input type="tel" name="phone" id="phone" class="input-box" placeholder="Mobile No." title="Mobile No.">
                        <span class="hide error signup-phone-error">Should be a number</span>
                    </div>
                    <button class="signup-submit-button submit" name='signup' disabled="true">SIGN UP</button>
                    <button class="already">Already have an account?</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src='./JS/loginscript.js'></script>
    <?php
        if(isset($_POST['signup'])){
            $FirstName=$_POST["firstname"];
            $LastName=$_POST["lastname"];
            $email=$_POST["signup-email"];
            $phone=$_POST["phone"];
            // $Address=$_POST["Address"];
            $pas=$_POST["signup-password"];  
            if(empty($phone)){
                $SQL = "INSERT INTO User (Firstname,Lastname,Email,password) VALUES ('". $FirstName ."','". $LastName ."','". $email ."','". $pas ."')";
            }else{
                $SQL = "INSERT INTO User (Firstname,Lastname,Email,password,phone) VALUES ('". $FirstName ."','". $LastName ."','". $email ."','". $pas ."','".$phone."')";
            }
            //echo("Yo".$FirstName);  
            
            $result = mysqli_query($connection,$SQL) or die('Invalid query:');
        }
        if(isset($_POST['submit'])){
            $loginEmail=$_POST["login-email"];
            $loginPass=$_POST["login-password"];
            $loginSQL="SELECT 'id' FROM USER WHERE 'Email'='$loginEmail'AND 'password'='$loginPass'";
            $loginresult=mysqli_query($connection,$loginSQL) or die('Invalid query:');
            $row = mysqli_fetch_array($loginresult,MYSQLI_ASSOC);
            $count = mysqli_num_rows($loginresult);
            if($count==1){
                $_SESSION['loggedin']=true;
                $_SESSION['userid']=count['id'];
                header('Location:./index.php');
            }else{
                $_SESSION['loggedin']=false;
                // $_SESSION['userid']=count['id'];
                $error='Invalid Email or Password';
            }
        }
    ?>
    
</body>
</html>