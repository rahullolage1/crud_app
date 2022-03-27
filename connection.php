<?php

$server="localhost";
$username="root";
$password="root";
$dbname="crud";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn){
    // echo "connection succesful";
}else{
    die("connection failed");
}



?>