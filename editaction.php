<?php
include 'db.php';
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$city = $_POST['city'];
$country = $_POST['country'];

$sql = "UPDATE details SET fname ='$fname', lname = '$lname', username = '$username' , pass = '$pass', city = '$city', country = '$country' WHERE id = $id";
$result = mysqli_query($con, $sql);

if($result){
    header("Location: signup.php");
}

?>