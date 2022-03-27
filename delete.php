<?php
include 'connection.php';

$Id = $_GET['id']; 

$deletequery = "delete from test where id=$Id";

$query = mysqli_query($conn,$deletequery);

header('location:show.php');

?>