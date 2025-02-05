<?php
require 'fetch_products.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Product List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo number_format($row['price'], 2); ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="edit">Edit</button></a>
                <a href="delete_product.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">
                    <button class="delete">Delete</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <a href="index.php">Add New Product</a>

</body>
</html>
