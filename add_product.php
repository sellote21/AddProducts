<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";
    if ($conn->query($sql) === TRUE) {
        header("Location: table.php?success=add");
        exit();
    }
}
?>
