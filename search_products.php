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
    echo "<p>Product Name: " . $result['name'] . "<br>Product Description: " . $result['description']  . "</p>";
  }
} else {
  echo "<p>No results found.</p>";
}
?>

<!-- Search form -->
<form action="search_products.php" method="get">
  <input type="text" name="query" placeholder="Search for products...">
  <button type="submit">Search</button>
</form>