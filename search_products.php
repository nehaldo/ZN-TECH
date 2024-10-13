<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="styles.css">
    <body>
      
   
        <div class="logo-search">
                <form class="search-bar" action="search_products.php" method="get">
                    <input type="text" name="query" placeholder="Search for products...">
                    <button type="submit">Search</button>
                </form>

            </div>
            </body>
            </html>




<?php
// Connect to the database
try {
    $pdo = new PDO('mysql:host=localhost;dbname=zntech', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Get the search query from the URL
$query = '';
if (isset($_GET['query'])) {
    $query = $_GET['query'];
}

// Prepare and execute the SQL query
$stmt = $pdo->prepare("SELECT * FROM Product WHERE name LIKE :query OR description LIKE :query");
$stmt->bindValue(':query', '%' . $query . '%');
$stmt->execute();

// Get the results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the results
if (count($results) > 0) {
    echo "<h2>Search Results:</h2>";
    foreach ($results as $result) {
        echo "<p>Product Name: " . $result['name'] . "<br>Product Description: " . $result['description'] . "</p>";
        echo "<form action='' method='post'>";
        echo "<label for='rating'>Rating:</label>";
        echo "<select id='rating' name='rating'>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
        echo "<option value='5'>5</option>";
        echo "</select>";
        echo "<br>";
        echo "<label for='comment'>Comment:</label>";
        echo "<textarea id='comment' name='comment'></textarea>";
        echo "<br>";
        echo "<input type='hidden' name='productID' value='" . $result['productID'] . "'>";
        echo "<input type='submit' name='submit_review' value='Submit Review'>";
        echo "</form>";
        echo "<form action='buy_now.php' method='post'>";

        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='productID' value='" . $result['productID'] . "'>";
        echo "<input type='submit' name='buy_now' value='Buy Now'>";
        echo "</form>";
        
    }
} else {
    echo "<p>No results found.</p>";
}

// search_products.php

// ...



// ...

if (isset($_POST['buy_now'])) {
  $productID = $_POST['productID'];

  // Check if the user is logged in
  if (!isset($_SESSION['userID'])) {
    echo "You must be logged in to buy products.";
    exit;
  }

  // Get the user's ID
  $userID = $_SESSION['userID'];

  // Create a new order
  $stmt = $pdo->prepare("INSERT INTO `Order` (userID, orderDate) VALUES (:userID, NOW())");
  $stmt->bindParam(':userID', $userID);
  $stmt->execute();
  $orderID = $pdo->lastInsertId();

  // Add the product to the order
  $stmt = $pdo->prepare("INSERT INTO OrderProduct (orderID, productID, quantity) VALUES (:orderID, :productID, 1)");
  $stmt->bindParam(':orderID', $orderID);
  $stmt->bindParam(':productID', $productID);
  $stmt->execute();

  // Redirect to order confirmation page
  header('Location: order_confirmation.php');
  exit;
}



if (isset($_POST['submit_review'])) {


  if (!isset($_SESSION['userID'])) {
    echo "You must be logged in to submit a review.";
    exit;
}


    $productID = $_POST['productID'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Check if the productID exists in the product table
    $stmt = $pdo->prepare("SELECT * FROM Product WHERE productID = :productID");
    $stmt->bindParam(':productID', $productID);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        // Insert the review into the review table
        $stmt = $pdo->prepare("INSERT INTO Review (reviewDate, rating, comment, productID) VALUES (NOW(), :rating, :comment, :productID)");
        $stmt->bindParam(':rating', $rating);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':productID', $productID);

        try {
            $stmt->execute();
            echo "Review added successfully!";
        } catch (PDOException $e) {
            echo "Failed to add review: " . $e->getMessage();
        }
    } else {
        echo "Product not found.";
    }
}
?>