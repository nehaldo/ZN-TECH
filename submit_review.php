<?php
$dsn = 'mysql:host=localhost;dbname=zntech';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

if (isset($_POST['submit_review'])) {
    $productID = $_POST['productID'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Validate input
    if (empty($rating) || empty($comment)) {
        echo "Please fill in all fields.";
        exit();
    }

    if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
        echo "Invalid rating.";
        exit();
    }

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
}
?>