<?php

// Connect to the database
try {
    $pdo = new PDO('mysql:host=localhost;dbname=zntech', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Check if the user is logged in
// if (!isset($_SESSION['userID'])) {
//     echo "You must be logged in to buy products.";
//     exit;
// }

// Get the user's ID
$userID = $_SESSION['userID'];

// Create a new order
$stmt = $pdo->prepare("INSERT INTO `Order` (userID, orderDate) VALUES (:userID, NOW())");
$stmt->bindParam(':userID', $userID);
$stmt->execute();
$orderID = $pdo->lastInsertId();

// Add the product to the order
$productID = $_POST['productID'];
$stmt = $pdo->prepare("INSERT INTO OrderProduct (orderID, productID, quantity) VALUES (:orderID, :productID, 1)");
$stmt->bindParam(':orderID', $orderID);
$stmt->bindParam(':productID', $productID);
$stmt->execute();

// Redirect to order confirmation page
header('Location: order_confirmation.php');
exit;
?>