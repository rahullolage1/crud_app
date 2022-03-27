<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];



$insertquery = "insert into test(name, age, gender) values('$name', '$age', '$gender')";

$query = mysqli_query($conn,$insertquery);

header('Location:index.php');

}

?>