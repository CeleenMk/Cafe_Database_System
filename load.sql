-- Load data into Employee table
LOAD DATA INFILE 'employee.csv'
INTO TABLE Employee
FIELDS TERMINATED BY ',' --column
LINES TERMINATED BY '\n' --row
IGNORE 1 LINES -- t oavoid the header of the table
(employee_id, first_name, last_name, role, manager_id);

- Load data into Customer table
LOAD DATA INFILE 'customer.csv'
INTO TABLE Customer
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(customer_id, first_name, last_name, loyalty_points);

-- Load data into Transaction table
LOAD DATA INFILE 'transaction.csv'
INTO TABLE Transaction
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(transaction_id, customer_id, employee_id, order_id);

-- Load data into Orders table
LOAD DATA INFILE 'orders.csv'
INTO TABLE Orders
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(order_id, product_id, order_date);

-- Load data into Product table
LOAD DATA INFILE 'product.csv'
INTO TABLE Product
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(product_id, inventory_id, product_name, product_price, product_type);

--load data into Inventory table
LOAD DATA INFILE 'inventory.csv'
INTO TABLE Inventory
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(inventory_id, inventory_name, inventory_type, stock_quantity, inventory_price);

--load data into Supplier table
LOAD DATA INFILE 'supplier.csv'
INTO TABLE Supplier
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(supplier_id, supplier_name, phone_number, stock_purchase_id);

-- Load data into Stock purchases table
LOAD DATA INFILE 'stock_purchases.csv'
INTO TABLE Stock_Purchases
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(stock_purchase_id, inventory_id, supplier_id, purchase_quantity, purchase_date, received_by);

