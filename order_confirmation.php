<?php
// Start the session
session_start();

// Connect to the database
try {
    $pdo = new PDO('mysql:host=localhost;dbname=zntech', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Check if the order ID is set in the session
if (isset($_SESSION['orderID'])) {
    $orderID = $_SESSION['orderID'];

    // Retrieve the order details from the database
    $stmt = $pdo->prepare("SELECT * FROM `Order` WHERE orderID = :orderID");
    $stmt->bindParam(':orderID', $orderID);
    $stmt->execute();
    $order = $stmt->fetch();

    // Retrieve the order products from the database
    $stmt = $pdo->prepare("SELECT * FROM OrderProduct WHERE orderID = :orderID");
    $stmt->bindParam(':orderID', $orderID);
    $stmt->execute();
    $orderProducts = $stmt->fetchAll();

    // Display the order confirmation page
    ?>
    <h1>Order Confirmation</h1>
    <p>Thank you for your order! Your order details are below:</p>

    <table>
        <tr>
            <th>Order ID</th>
            <td><?php echo $order['orderID']; ?></td>
        </tr>
        <tr>
            <th>Order Date</th>
            <td><?php echo $order['orderDate']; ?></td>
        </tr>
        <tr>
            <th>Products</th>
            <td>
                <ul>
                    <?php foreach ($orderProducts as $product) { ?>
                        <li>
                            <?php echo $product['productID']; ?> x <?php echo $product['quantity']; ?>
                        </li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
    </table>

    <p>We will send you an email with the order details and shipping information.</p>

    <?php
} else {
    // Handle the case when the order ID is not set
    echo "Order ID is not set. Please try again.";
}
?>