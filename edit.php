<?php
require 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Edit Product</h2>
    <form method="POST" action="update_product.php">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
        <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" required>
        <textarea name="description" required><?php echo $product['description']; ?></textarea>
        <div style="display: flex; flex-direction:column">
            <button type="submit" style="margin-bottom: 10px;">Update Product</button>
            <a href="table.php">Back to Product List</a>
        </div>
    </form>


</body>
</html>
