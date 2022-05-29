<?php
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM details WHERE id = $id";
$result = mysqli_query($con, $sql);

if($result){
    header("Location: signup.php");
}

?>