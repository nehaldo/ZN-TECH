USE zntech;

INSERT INTO User (firstName, lastName, email, password, category)
VALUES	('John', 'Doe', 'johndoe@gmail.com', 'password123', 'customer'),
		('Jane', 'Do', 'janedo@gmail.com', 'password456', 'admin');

SELECT * FROM User

INSERT INTO Product (name, description, price, stockQuantity)
VALUES	('Samsung Galaxy S24 256GB', 'Size-6.2" / 50mp back camera / 8GB RAM / 4000mah battery', 44990, 8),
		('iPhone 15 512GB', 'size-6.1" / 48mp back camera / 6GB RAM / 3349mah battery', 71999, 6);

SELECT * FROM Product

INSERT INTO `Order` (orderDate, status, userID)
VALUES	('2024-08-15', 'pending', 1),
		('2024-06-12', 'shipped', 2);

SELECT * FROM `Order`

INSERT INTO OrderProduct (quantity, orderID, productID)
VALUES (5, 1, 1)

	