<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$city = $_POST['city'];
$country = $_POST['country'];


echo "First name is: " .$fname .  "Last name is: " .$lname  ."Username is : " .$username ."Password is: " .$pass ."City is:" .$city 
."country is:" .$country;

include 'db.php';

$sql = "INSERT INTO details(fname, lname, username, pass, city, country)VALUES('$fname','$lname','$username','$pass','$city','$country')";
$result = mysqli_query($con, $sql);

if($result){
    header('Location: signup.php'); 
}

?>