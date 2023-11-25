<?php
$conn = mysqli_connect('localhost', 'root', '', 'gravity');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM gravity_registrations WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] == $password) {
                    echo "<script> alert('Successfully logged in'); window.location.href = 'index.html'; </script>";
                    die;
                }
            }
        }
        echo "<script> alert('Wrong email and password')</script>";
    } else {
        echo "<script> alert('Wrong email and password')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Gravity</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <!--Login & Register page section -->
    <video class="video-slide" src="image/Project.mp4" autoplay muted loop></video>
    <div class="wrapper" id="login">
        <div class="text">Login to Discover Gravity</div>
        <div class="form-box-login">
            <a href="login.html">
                <div class="title"><img src="image/Screenshot_2023-09-30_173002-removebg-preview.png"></div>
            </a>
            <!--Login form start-->
            <form action="" id="login-form" method="POST">
                <input type="text" id="email" name="email" placeholder="E-mail or phone number" required>
                <input type="Password" name="password" id="password" placeholder="Password" required>
                <input type="text" name="Social-name" id="user" placeholder="User name" required>
                <button type="submit" onclick="auth()"><span>login</span></button>
                <div class="option">OR</div>
            </form>
            <div class="fblink">
                <span class=""></span>
                <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i>Log in with Facebook</a><br><br>
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i>Log in with Twitter</a>
            </div>
            <div class="forget-id">
                <a href="#">Forget Password?</a>
            </div>
            <div class="sign-up">
                <p>Don't have an account?<a href="register.php" class="register-link" id="show-registration" onclick="registration()">Create account</a></p>
            </div>
        </div>
    </div>
    <!--Login form end -->
</body>

</html>