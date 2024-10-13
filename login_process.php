<?php
session_start();

// PDO Connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=zntech', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $stmt = $pdo->prepare("SELECT * FROM User WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'password' => $password]);

    // Fetch the result
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists
    if ($user) {
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['category'] = $user['category'];

        // Redirect the user to the home page
        header("location: index.php");
    } else {
        $error = "Invalid email or password";
    }
}
?>
