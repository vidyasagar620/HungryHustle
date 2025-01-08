<?php
session_start();
include "cart-con.php"; // Include the database connection script

// Get product details from the form or AJAX request
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO cart (product_name, price, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $product_name, $price, $quantity);

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "Product added to cart successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
