<?php
require("connect.php");

$user_id = $_GET['id']; 
// echo ("$user_data");
$query = "select * from `product` where id = '{$user_id}'";

$retl = mysqli_query($connect , $query);
// print_r($retl);
if(!$retl){
    die("query fail");
}

if (mysqli_num_rows($retl) > 0 ) {
     while($row = mysqli_fetch_assoc($retl)) {
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<style>
    .container{
        background-color: teal;
        color:white;        
        border: 5px groove black;         
    }
    .form-control{
        background-color: pink;
        border : 5px solid black;
    }
</style>
<body>

<div class="container">

<!-- <h1>Form validation</h1> -->
<hr>

<form action="update.php" class="form-group" method ="post">
    <!-- get request server post -->

    <label for="Name">Id</label>
<input type="number" name="id" class="form-control "value = "<?php echo $row['Id']?>">
<br>
<label for="Name">Name</label>
<input type="text" name="name" class="form-control" value = "<?php echo $row['Name']?>">
<br>
<label for="Name">Category</label>
<input type="text" name="category" class="form-control" value = "<?php echo $row['Category']?>">
<br>
<label for="Name">Descripition</label>
<input type="text" name="description" class="form-control" value = "<?php echo $row['Description']?>">
<br>
<input type="submit" name="submit" class="btn btn-dark">

</form>
</div>
<?php

};
};


?>

</html>
</body>