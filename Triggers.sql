-- Trigger to Log Product Stock Changes

DELIMITER //

CREATE TRIGGER trg_log_stock_changes
AFTER UPDATE ON Product
FOR EACH ROW
BEGIN
    INSERT INTO StockLog (productID, oldStock, newStock, changeDate)
    VALUES (OLD.productID, OLD.stockQuantity, NEW.stockQuantity, NOW());
END //

DELIMITER ;


CREATE TABLE StockLog (
    logID INT AUTO_INCREMENT PRIMARY KEY,
    productID INT,
    oldStock INT,
    newStock INT,
    changeDate TIMESTAMP,
    FOREIGN KEY (productID) REFERENCES Product(productID)
);


-- Trigger to Prevent Deletion of Delivered Orders

DELIMITER //

CREATE TRIGGER trg_prevent_delivered_order_deletion
BEFORE DELETE ON `Order`
FOR EACH ROW
BEGIN
    IF OLD.status = 'delivered' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Cannot delete a delivered order';
    END IF;
END //

DELIMITER ;

-- testing trg_prevent_delivered_order_deletion
DELETE FROM `Order` WHERE OrderID = 7;		-- order where status is not delivered is deleted sucessfully
DELETE FROM `Order` WHERE OrderID = 8;		-- order where status is delivered does not work

-- Trigger to Automatically Set Delivery Date

DELIMITER //

CREATE TRIGGER trg_set_delivery_date_on_status_change
BEFORE UPDATE ON Delivery
FOR EACH ROW
BEGIN
    IF NEW.deliveryStatus = 'delivered' THEN
        SET NEW.deliveryDate = CURDATE();
    END IF;
END //

DELIMITER ;

SELECT * FROM Delivery
INSERT INTO Delivery (deliveryAddress, deliveryStatus, deliveryDate, orderID)
VALUES ('reduit', 'shipped', '2024-08-20', 8);
