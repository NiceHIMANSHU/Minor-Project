<?php
$conn=mysqli_connect('localhost','root','','gravity');

if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM gravity_registrations WHERE email='$email' && password='$password' ";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exist!';
    } else {
        $insert = "INSERT INTO gravity_registrations(user, phone, email, password) VALUES('$user','$phone','$email','$password')";
        mysqli_query($conn, $insert);
        echo "<script> alert('Successfully registered'); window.location.href = 'login.php'; </script>";
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
    <!--Register page-->
    <video class="video-slide" src="image/Project.mp4" autoplay muted loop></video>
    <div class="wrapper" id="registration" >
        <div class="text">Regsiter to Discover Gravity</div>
        <div class="form-box-login">
            <div class="title"><img src="image/Screenshot_2023-09-30_173002-removebg-preview.png"></div>
            <form action="" id="login-form" method="POST">
                <input type="text" id="name" name="user" placeholder="Name" required>
                <input type="text" id="phone" name="phone" placeholder="Phone number" required>
                <input type="text" id="email" name="email" placeholder="Email-Id" required>
                <input type="password" name="password" id="password" placeholder="Make a strong Password" required>
                <button type="submit" name="submit"><span>Register</span></button>
                <div class="option">OR</div>
            </form>
            <div class="fblink">
                <span class=""></span>
                <a href="#"><i class="fa-brands fa-facebook"></i>Log in with Facebook</a><br><br>
                <a href="#"><i class="fa-brands fa-twitter"></i>Log in with Twitter</a>
            </div>
            <div class="forget-id">
                <a href="#">Forget Password?</a>
            </div>
            <div class="sign-up">
                <p>Already have an account?<a href="login.php" class="register-link" id="show-registration"
                        onclick="login()">Log in</a></p>
            </div>
        </div>
    </div>
</body>

</html>