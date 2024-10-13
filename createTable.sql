-- Create database
CREATE DATABASE IF NOT EXISTS zntech;
USE zntech;

-- create tables
CREATE TABLE User (
	userID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    category ENUM('customer', 'admin') NOT NULL
);

CREATE TABLE Product (
	productID INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,    -- DECIMAL(precision, scale) precision->total no of digits, scale->no of digits after decimal point
    stockQuantity INT NOT NULL
);

CREATE TABLE `Order` (		-- backsticks ``` are used to escape identifiers
	orderID INT AUTO_INCREMENT PRIMARY KEY,
    orderDate DATE NOT NULL,
    status ENUM('pending', 'shipped', 'delivered', 'cancelled') NOT NULL,
	userID INT,
    FOREIGN KEY (userID) REFERENCES User(userID)
);

CREATE TABLE Delivery (
	deliveryID INT AUTO_INCREMENT PRIMARY KEY,
    deliveryAddress VARCHAR(255) NOT NULL,
    deliveryStatus ENUM('pending', 'ongoing', 'delivered') NOT NULL,
    deliveryDate DATE,
    orderID INT,
    FOREIGN KEY (orderID) REFERENCES `Order`(orderID)
);

CREATE TABLE OrderProduct (
	orderProductID INT AUTO_INCREMENT PRIMARY KEY,
    quantity INT NOT NULL,
    orderID INT,
    productID INT,
    FOREIGN KEY (orderID) REFERENCES `Order`(orderID),
    FOREIGN KEY (productID) REFERENCES Product(productID)
);

CREATE TABLE Review (
	reviewID INT AUTO_INCREMENT PRIMARY KEY,
    reviewDate DATE NOT NULL,
    rating INT CHECK(rating >=1 AND rating <=5),
    comment TEXT,
    productID INT,
    FOREIGN KEY (productID) REFERENCES Product(productID)
);
	
CREATE TABLE StockLog (
    logID INT AUTO_INCREMENT PRIMARY KEY,
    productID INT,
    oldStock INT,
    newStock INT,
    changeDate TIMESTAMP,
    FOREIGN KEY (productID) REFERENCES Product(productID)
);
    
