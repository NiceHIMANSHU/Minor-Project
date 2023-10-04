<?php
$user=$_POST['user'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
//database connection
$conn=new mysqli('localhost','root','','form');
if($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration (user,phone,email,password,confirm) values (?,?,?,?,?)");
    $stmt->bind_param("sisss",$user,$phone,$email,$password,$confirm);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        echo "Booked successfully, Now you can login the website as per your informations, Thank you for visiting our site.....";
    }
    $stmt->close();
    $conn->close();
}
?>