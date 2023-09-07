<?php
require('connect.php');

$user_id = $_GET['id']; 

$del = "update `product` set where id = '$user_id'";

$rest = mysqli_query($connect , $del);

if (!$rest) {
     die("query failed");
}

// header('location:http://localhost:82/restore/alluser.php');

?>