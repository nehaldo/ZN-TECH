<?php
// Connect to the database
session_start();

// PDO Connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=zntech', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if account with same email already exists
    $stmt = $pdo->prepare("SELECT * FROM User WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        // Account already exists, set error message and redirect to login page
        $_SESSION['error'] = "Account with this email already exists. Please try again.";
        header("Location: login.php");
        exit;
    } else {
        // Prepare and execute the SQL query
        $sql = "INSERT INTO User (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            // Registration successful, set success message and redirect to login page
            $_SESSION['success'] = "Registration successful!";
            header("Location: login.php");
            exit;
        } else {
            // Registration failed, set error message and redirect to registration page
            $_SESSION['error'] = "Registration failed. Please try again.";
            header("Location: signup.php");
            exit;
        }
    }
}
?>