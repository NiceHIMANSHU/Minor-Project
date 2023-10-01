<?php
//$number = $_POST['number'];
$user= $_POST['User-name'];
//$email = $_POST['email'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$password= $_POST['password'];
// Database connection
$conn = new mysqli('localhost', 'root', '', 'project');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into minor (Name,Number,Email,Password) values (?,?,?,?)");
    $stmt->bind_param("siss",$user, /*$email*/$phone,$email,$password); 
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "Register Successfully...";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>