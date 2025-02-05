<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2>Add Product</h2>
    <form method="POST" action="add_product.php">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <div style="display: flex; flex-direction:column">
            <button type="submit" style="margin-bottom:10px">Add Product</button>
            <a href="table.php">
                View Products
            </a>
        </div>
    </form>


</body>

</html>