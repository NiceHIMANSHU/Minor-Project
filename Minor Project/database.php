<?php
$user=$_POST['user'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
//database connection
$conn=new mysqli('localhost','root','','form');
if($conn->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into register (user,phone,email,password) values (?,?,?,?)");
    $stmt->bind_param("siss",$user,$phone,$email,$password);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        echo "Booked successfully, Now you can login the website as per your informations, Thank you for visiting our site.....";
    }
    $stmt->close();
    $conn->close();
}
?>