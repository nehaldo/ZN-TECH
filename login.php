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

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZN TECH</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <section id="header">
        <div class="logo-search">
            <a href="#"><img src="img/ZNlogo-nobg.png" class="logo" alt=""></a>
            <form class="search-bar">
                <input type="text" placeholder="Search for products..." id="search-input">
                <button onclick="searchProducts()"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if (isset($_SESSION['userID'])) { ?>
                        <li><a href="logout.php">Logout</a></li>
                    <?php } else { ?>
                        <li><a href="login.php">Login</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </section>

    <section id="login-section">
        <div class="login-container">

            <h1>Login</h1>

            <?php if (isset($error)) : ?>
                <p style="color: red;"><?= htmlspecialchars($error) ?></p>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <button type="submit">Login</button>
                </div>

                <p>Don't have an account? <a href="signup.php">Sign up</a></p>

            </form>

        </div>
    </section>

</body>

</html>