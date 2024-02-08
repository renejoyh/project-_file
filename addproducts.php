<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>

</head>
<body>
    <div class="navigation" style="margin-bottom:30px; front-size:30px;">
        <a href="addproducts.php">Add Product</a> &nbsp;| &nbsp;
        <a href="viewproducts.php">View Product</a>
    </div>

    <h1> ADD PRODUCTS </h1>

<form action="process.php" method="POST" enctype="multipart/form-data">
 
    <labe> Picture </label> </br>
    <input type="file" name="pic" accept=".jpg, .png, .gif, .jpeg, .jfif" required> </p>

    <labe> Product Name </label> </br>
    <input type="text" name="name" required> </p>

    <labe> Price </label> </br>
    <input type="text" name="price" required> </p>

    <input type="submit" name="add" value="ADD">

</form>  
</body>
</html>