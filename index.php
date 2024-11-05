<?php
		include 'config.php';

		/* $username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, md5($_POST['password']));
		$confirmp = mysqli_real_escape_string($conn, md5($_POST['confirmp'])); */

		if (isset($_POST['register'])){
				
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmp = $_POST['confirmp'];

			if ($password === $confirmp){
			$hashed_password = password_hash($password,PASSWORD_DEFAULT);
		
			$sql = "INSERT INTO user(username, email, password) VALUES('$username', '$email', '$hashed_password')";
				
						if (mysqli_query($conn, $sql)) {
							/* header('Location: login.php'); */
							/* exit; */
                            /*  echo "Registration successful"; */
						} else {
							$error_message = "Error: " . mysqli_error( $conn);
						}
			}else {
				$error_message = "Passwords do not match.";
			} 
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipping Card - Signup & Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="bg-body">
        <div class="card">
            <div class="front">
                <form id="signupForm" method="POST">
                    <div class="container">
                       <!--  <form method="POST"> -->
                            <h1><b>SIGN UP</b></h1>
                            <input type="text" name="username" class="input-field" placeholder="Enter Username" required>
                            <input type="email" name="email" class="input-field" placeholder="Enter Email" required>
                            <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                            <input type="password" name="confirmp" class="input-field" placeholder="Confirm Password" required>
                            <div class="checkbox">
                                <input type="checkbox" id="terms" required>
                                <label for="terms">I agree to the <b>Terms & Conditions</b></label>
                            </div>
                            <button class="btn" name="register" type="register">REGISTER</button>
                        <!-- </form> -->
                    </div>
                    <p class="flip-text1">Already have an account? <span id="flipToLogin">Login here</span></p>
                </form>
            </div>
<?php
		    /* Login Code */
            session_start();
			        if (isset($_POST['login'])){

						$email =$_POST['email'];    /* Admin Login Detail */
						$password =$_POST['password'];
						$admin_email = 'admin@sample.com';
						$admin_password = 'admin@123';
						
						$sql = "SELECT * FROM user WHERE email='{$email}'AND password='{$password}' ";
						$result = mysqli_query($conn, $sql);
					
                            if ($email === $admin_email && $password === $admin_password) {					
                                    $_SESSION['email'] = $admin_email;      /* Admin Login Validation */
                                    $_SESSION['username'] = 'admin';
                                    $_SESSION['is_admin'] = true;

                                    header('Location: admin/dashboard.php');
                                   
                            }else{					
                                    $sql = "SELECT * FROM user WHERE email='$email' ";
                                    $result = mysqli_query($conn, $sql);
                                    $user = mysqli_fetch_assoc($result);

                                    if ($email && password_verify($password, $user['password'])) {

                                        $_SESSION['email'] = $user['email'];        /* User Login Validation */
                                        $_SESSION['username'] = $user['username'];
                                        $_SESSION['is_admin'] = false;
                                        echo " User login Successful";
                                        header('Location: nutri.php');
                                        exit; 
                                    }else {
                                        $error_message = "Incorrect Username or password.";
                                        echo $error_message;
                                    }
                                 
                            }
                    }
?>

            <div class="back">
                <form id="loginForm" method="POST">
                        <div class="login-container">
                                <h1><b> LOG IN </b></h1>
                                <input type="email" name="email"class="input-field" placeholder="Enter Email" required>
                                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                            
                                <div class="checkbox1">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">Remember Me</label>
                                    
                                    <a href="">Forgot Password?</a>
                                </div>
                                <button class="btn" name="login" type="login">LOG IN</button>
                                                  
                                <p class="lwith"><strike>----------------------</strike>  Login With  <strike>----------------------</strike></p>
                                
                                <div class="social-media-links">
                                    <div class="circle">
                                    <!-- <img src="" alt="Facebook"> -->
                                    </div>
                                    <div class="circle">
                                    <!-- <img src="" alt="Twitter"> -->
                                    </div>
                                    <div class="circle">
                                    <!-- <img src="" alt="Instagram"> -->
                                    </div>
                                 </div>
                            <p class="flip-text1">Don't have an account? <span id="flipToSignup">Register here</span></p>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
