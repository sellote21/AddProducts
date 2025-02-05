<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET name='$name', price='$price', description='$description' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: table.php?success=update");
        exit();
    }
}
?>
