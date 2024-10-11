CREATE TABLE Employee (
    employee_id INT PRIMARY KEY,
    first_name VARCHAR(15) NOT NULL,
    last_name VARCHAR(15) NOT NULL,
    role VARCHAR(25),
    manager_id INT
);

CREATE TABLE Customer(
    customer_id INT,
    first_name VARCHAR(15) NOT NULL,
    last_name VARCHAR(15) NOT NULL,
    points INT NOT NULL DEFAULT 0 ,
    PRIMARY KEY (customer_id)
);

CREATE TABLE Transaction (
    transaction_id INT ,
    customer_id INT DEFAULT NULL,
    employee_id INT NOT NULL,
    order_id INT DEFAULT NULL,
    PRIMARY KEY (transaction_id),
    FOREIGN KEY (customer_id) REFERENCES Customer(customer_id)
     ON DELETE SET NULL,
    FOREIGN KEY (employee_id) REFERENCES Employee(employee_id),
    FOREIGN KEY (order_id) REFERENCES Orders(order_id)
                 ON DELETE SET NULL 
);

CREATE TABLE Orders (
    order_id INT,
    product_id INT NOT NULL,
    order_date DATETIME NOT NULL,
    PRIMARY KEY (order_id),
    FOREIGN KEY (product_id) REFERENCES Product(product_id) 
                ON DELETE NO ACTION
);

CREATE TABLE Products (
    product_id INT NOT NULL,
    inventory_id INT NOT NULL,
    product_name VARCHAR(15) NOT NULL,
    product_price DECIMAL(5,2) NOT NULL,
    product_type VARCHAR(15) NOT NULL,
    PRIMARY KEY (product_id),
    FOREIGN KEY (inventory_id) REFERENCES Inventory(inventory_id) 
                  ON DELETE CASCADE
);

CREATE TABLE Inventory (
    inventory_id INT NOT NULL,
    inventory_name VARCHAR(15) NOT NULL,
    inventory_type VARCHAR(15) NOT NULL,
    stock_quantity INT NOT NULL DEFAULT 0,
    inventory_price DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (inventory_id)
);

CREATE TABLE Supplier (
    supplier_id INT NOT NULL UNIQUE,
    supplier_name VARCHAR(15) NOT NULL UNIQUE,
    phone_number VARCHAR(15) UNIQUE DEFAULT NULL,
    stock_purchase_id INT NOT NULL UNIQUE,
    PRIMARY KEY (supplier_id),
    FOREIGN KEY (stock_purchase_id) REFERENCES Stock_Purchases(stock_purchase_id) 
);

CREATE TABLE Stock_Purchases (
    stock_purchase_id INT NOT NULL UNIQUE,
    inventory_id INT NOT NULL,
    supplier_id INT NOT NULL UNIQUE,
    purchase_quantity INT NOT NULL DEFAULT 0,
    purchase_date DATETIME NOT NULL,
    received_by DATETIME NOT NULL,
    PRIMARY KEY (stock_purchase_id),
    FOREIGN KEY (inventory_id) REFERENCES Inventory(inventory_id)
                ON DELETE NO ACTION,
    FOREIGN KEY (supplier_id) REFERENCES Supplier(supplier_id)
                 ON DELETE NO ACTION
);
