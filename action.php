<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];



$insertquery = "insert into test(name, email, mobile, age, gender) values('$name', '$email', '$mobile', '$age', '$gender')";

$query = mysqli_query($conn,$insertquery);

header('Location:index.php');

}

?>