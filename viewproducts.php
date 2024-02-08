<?php
    include "conn.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    </head>
<body>


<div class="navigation" style="margin-bottom:30px; font-size:30px;">

<a href="addproducts.php">Add Products </a> &nbsp;|
<a href="view_products.php">View Products </a>
</div>

<h1> Product Lists</h1>

<table border="3px solid">
    <tr>
        <th> IMAGE </th>
        <th> PRODUCTS NAME</th>
        <th> PRICE</th>
    </tr>

    <?php
    $get_products = mysqli_query($conn, "SELECT * FROM products");
    while($row = mysqli_fetch_array($get_products)){

    ?>

    <tr>
        <td> <img src="upload/<?php echo $row['pic']?> " width="150px" heigth="100px"></td>
        <td><?php echo $row['name']?> </td>
        <td><?php echo $row['price']?> </td>
    </tr>
    <?php } ?>
</table>


</body>
</html>
