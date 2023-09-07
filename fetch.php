<?php
require('connect.php');

$fetch = "SELECT * FROM product";
$query = mysqli_query($connect , $fetch);

if ($query) {
    if (mysqli_num_rowS($query) > 0 ) {
        
    
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
<body>

<table class = "table table-bordered text-center">
    <thead class = "table table-dark">
        <th>Name</th>
        <th>Category</th>
        <th>Description</th>
        <th>Image</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>

        <?php
while ($row = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td><?php echo $row ['Name']?></td>
            <td><?php echo $row ['Category']?></td>
            <td><?php echo $row ['Description']?></td>
            <td> <img src="<?php echo 'img/' . $row ['Image']?>" alt="img" width = "70px" height = "70px"> </td>
            <td> <a href="updatedata.php?id=<?php echo $row['Id'];?>" class = "btn btn-primary" > UPDATE </a> </td>
            <td> <a href="del.php?id=<?php echo $row['Id'];?>" class = "btn btn-danger" >Delete</a></td>
        </tr>

        <?php
}

        ?>

    </tbody>
</table>

<?php
    }
}
?>

</body>
</html>