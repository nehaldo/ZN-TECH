--  Add New User

DELIMITER //

CREATE PROCEDURE AddNewUser (
    IN p_firstName VARCHAR(50),
    IN p_lastName VARCHAR(50),
    IN p_email VARCHAR(100),
    IN p_password VARCHAR(255),
    IN p_category ENUM('customer', 'admin')
)
BEGIN
    INSERT INTO User (firstName, lastName, email, password, category)
    VALUES (p_firstName, p_lastName, p_email, p_password, p_category);
END //

-- executing AddNewUser
USE zntech;
CALL AddNewUser('Nehal', 'Dookheea', 'nehal.dookheea@umail.uom.ac.mu', 'web123', 'admin');
CALL AddNewUser('Zahiir', 'Peerbux', 'zahiir.peerbux@umail.uom.ac.mu', 'web456', 'admin');

-- checking if sp executed properly
SELECT * FROM User;

DELIMITER ;
-- Update Product Stock
DELIMITER //

CREATE PROCEDURE UpdateProductStock (
    IN p_productID INT,
    IN p_stockQuantity INT
)
BEGIN
    UPDATE Product
    SET stockQuantity = p_stockQuantity
    WHERE productID = p_productID;
END //

-- executing UpdateProductStock and trg_log_stock_changes
CALL UpdateProductStock(1, 16);
CALL UpdateProductStock(2, 4);
CALL UpdateProductStock(2, 7);

-- checking if sp and trigger executed properly
SELECT * FROM Product;
SELECT * FROM StockLog;


DELIMITER ;
-- Calculate Order Total

DELIMITER //

CREATE PROCEDURE CalculateOrderTotal (
    IN p_orderID INT,
    OUT p_total DECIMAL(10, 2)
)
BEGIN
    SELECT SUM(op.quantity * p.price)
    INTO p_total
    FROM OrderProduct op
    JOIN Product p ON op.productID = p.productID
    WHERE op.orderID = p_orderID;
END //

-- executing CalculateOrderTotal
CALL CalculateOrderTotal(1, @total);
-- checking if sp exected properly
SELECT @total AS OrderTotal;

DELIMITER ;
-- Add New Order

DELIMITER //

CREATE PROCEDURE AddNewOrder (
    IN p_orderDate DATE,
    IN p_status ENUM('pending', 'shipped', 'delivered', 'cancelled'),
    IN p_userID INT
)
BEGIN
    INSERT INTO `Order` (orderDate, status, userID)
    VALUES (p_orderDate, p_status, p_userID);
END //

DELIMITER ;

-- executing AddNewOrder
CALL AddNewOrder('2024-08-22', 'cancelled', 3);
CALL AddNewOrder('2024-08-21', 'delivered', 2);
-- checking is sp executed properly
SELECT * FROM `Order`


-- Add Product to Order

DELIMITER //

CREATE PROCEDURE AddProductToOrder (
    IN p_orderID INT,
    IN p_productID INT,
    IN p_quantity INT
)
BEGIN
    INSERT INTO OrderProduct (orderID, productID, quantity)
    VALUES (p_orderID, p_productID, p_quantity);
    
    -- Update stock quantity of the product
    UPDATE Product
    SET stockQuantity = stockQuantity - p_quantity
    WHERE productID = p_productID;
END //

DELIMITER ;

-- executing AddProductToOrder
CALL AddProductToOrder (2, 2, 4);
-- checking is sp and trigger executed properly
SELECT * FROM OrderProduct;
SELECT * FROM Product;
SELECT * FROM StockLog;



