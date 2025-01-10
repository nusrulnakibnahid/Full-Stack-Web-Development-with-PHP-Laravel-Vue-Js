-- Active: 1736184373844@@127.0.0.1@3306@random_bank_dataset
-- Create Database
CREATE DATABASE BankDataset;
USE BankDataset;

-- Table: BRANCH
CREATE TABLE BRANCH (
    branch_id INT PRIMARY KEY AUTO_INCREMENT,
    branch_name VARCHAR(50),
    branch_city VARCHAR(50),
    assets DECIMAL(15, 2)
);

INSERT INTO BRANCH (branch_name, branch_city, assets)
VALUES
    ('Downtown', 'New York', 5000000.00),
    ('Uptown', 'New York', 3000000.00),
    ('Central', 'Los Angeles', 7000000.00),
    ('Suburban', 'Chicago', 4500000.00),
    ('Eastside', 'Houston', 3500000.00);

-- Table: CUSTOMER
CREATE TABLE CUSTOMER (
    customer_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_name VARCHAR(100),
    contact_number VARCHAR(15),
    address VARCHAR(255),
    branch_id INT,
    FOREIGN KEY (branch_id) REFERENCES BRANCH(branch_id)
);

INSERT INTO CUSTOMER (customer_name, contact_number, address, branch_id)
VALUES
    ('Aider', '1234567890', '123 Main St, NY', 1),
    ('Airareddy', '2345678901', '456 Elm St, LA', 3),
    ('Amarigrace', '3456789012', '789 Oak St, Chicago', 4),
    ('Ameliajames', '4567890123', '101 Pine St, NY', 1),
    ('Ameliamarie', '5678901234', '202 Maple St, Houston', 5),
    ('Amirus', '6789012345', '303 Birch St, LA', 3),
    ('Amiryon', '7890123456', '404 Cedar St, Chicago', 4),
    ('Anggy', '8901234567', '505 Spruce St, NY', 1),
    ('Ansor', '9012345678', '606 Redwood St, Houston', 5),
    ('Anthonela', '0123456789', '707 Aspen St, LA', 3),
    ('Arelyz', '1123456789', '808 Alder St, NY', 1),
    ('Arjunkrishna', '2123456789', '909 Beech St, Chicago', 4),
    ('Asukulu', '3123456789', '1010 Fir St, Houston', 5),
    ('Atheia', '4123456789', '1111 Hemlock St, LA', 3),
    ('Kai', '5123456789', '1212 Willow St, Chicago', 4),
    ('Olivia', '6123456789', '1313 Oakwood St, NY', 1),
    ('Liam', '7123456789', '1414 Pinewood St, LA', 3),
    ('Amelia', '8123456789', '1515 Cedarwood St, Chicago', 4),
    ('Noah', '9123456789', '1616 Redwood Lane, Houston', 5),
    ('Mia', '1234512345', '1717 Birch Lane, NY', 1);

-- Table: ACCOUNT
CREATE TABLE ACCOUNT (
    account_id INT PRIMARY KEY AUTO_INCREMENT,
    account_type VARCHAR(50),
    balance DECIMAL(15, 2),
    customer_id INT,
    branch_id INT,
    FOREIGN KEY (customer_id) REFERENCES CUSTOMER(customer_id),
    FOREIGN KEY (branch_id) REFERENCES BRANCH(branch_id)
);

INSERT INTO ACCOUNT (account_type, balance, customer_id, branch_id)
VALUES
    ('Savings', 1500.00, 1, 1),
    ('Current', 5000.00, 2, 3),
    ('Savings', 2000.00, 3, 4),
    ('Fixed Deposit', 10000.00, 4, 1),
    ('Savings', 3000.00, 5, 5),
    ('Current', 4000.00, 6, 3),
    ('Savings', 2500.00, 7, 4),
    ('Fixed Deposit', 12000.00, 8, 1),
    ('Savings', 3500.00, 9, 5),
    ('Current', 6000.00, 10, 3);

-- Table: TRANSACTION
CREATE TABLE TRANSACTION (
    transaction_id INT PRIMARY KEY AUTO_INCREMENT,
    transaction_date DATE,
    transaction_type VARCHAR(50),
    amount DECIMAL(15, 2),
    account_id INT,
    FOREIGN KEY (account_id) REFERENCES ACCOUNT(account_id)
);

INSERT INTO TRANSACTION (transaction_date, transaction_type, amount, account_id)
VALUES
    ('2025-01-01', 'Deposit', 1000.00, 1),
    ('2025-01-02', 'Withdrawal', 500.00, 2),
    ('2025-01-03', 'Deposit', 200.00, 3),
    ('2025-01-04', 'Transfer', 1000.00, 4),
    ('2025-01-05', 'Deposit', 800.00, 5);

-- Table: BUSINESS
CREATE TABLE BUSINESS (
    business_id INT PRIMARY KEY AUTO_INCREMENT,
    business_name VARCHAR(100),
    owner_name VARCHAR(100),
    branch_id INT,
    FOREIGN KEY (branch_id) REFERENCES BRANCH(branch_id)
);

INSERT INTO BUSINESS (business_name, owner_name, branch_id)
VALUES
    ('Tech Solutions', 'Olivia', 1),
    ('Green Energy', 'Liam', 2),
    ('Foodies Inc.', 'Amelia', 3),
    ('Urban Designs', 'Noah', 4),
    ('Elite Corp.', 'Mia', 5);

-- Table: PRODUCT TYPE
CREATE TABLE PRODUCT_TYPE (
    product_type_id INT PRIMARY KEY AUTO_INCREMENT,
    product_type_name VARCHAR(50)
);

INSERT INTO PRODUCT_TYPE (product_type_name)
VALUES
    ('Loan'), ('Credit Card'), ('Insurance');

-- Table: PRODUCT
CREATE TABLE PRODUCT (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(100),
    product_type_id INT,
    FOREIGN KEY (product_type_id) REFERENCES PRODUCT_TYPE(product_type_id)
);

INSERT INTO PRODUCT (product_name, product_type_id)
VALUES
    ('Home Loan', 1),
    ('Car Loan', 1),
    ('Travel Insurance', 3),
    ('Gold Credit Card', 2);

-- Table: EMPLOYEE
CREATE TABLE EMPLOYEE (
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    employee_name VARCHAR(100),
    designation VARCHAR(50),
    salary DECIMAL(15, 2),
    branch_id INT,
    FOREIGN KEY (branch_id) REFERENCES BRANCH(branch_id)
);

INSERT INTO EMPLOYEE (employee_name, designation, salary, branch_id)
VALUES
    ('Michael Scott', 'Manager', 60000.00, 1),
    ('Jim Halpert', 'Officer', 40000.00, 1),
    ('Pam Beesly', 'Clerk', 30000.00, 3),
    ('Dwight Schrute', 'Assistant Manager', 50000.00, 2),
    ('Ryan Howard', 'Trainee', 25000.00, 4);


-- Table: DEPARTMENT
CREATE TABLE DEPARTMENT (
    department_id INT PRIMARY KEY AUTO_INCREMENT,
    department_name VARCHAR(50)
);

INSERT INTO DEPARTMENT (department_name)
VALUES
    ('Loans'),
    ('Customer Support'),
    ('Accounts'),
    ('IT'),
    ('Operations');


-- Table: OFFICER
CREATE TABLE OFFICER (
    officer_id INT PRIMARY KEY AUTO_INCREMENT,
    officer_name VARCHAR(100),
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES DEPARTMENT(department_id)
);

-- Insert sample data into OFFICER
INSERT INTO OFFICER (officer_name, department_id)
VALUES
    ('Michael Scott', 1),
    ('Dwight Schrute', 2),
    ('Angela Martin', 3),
    ('Oscar Martinez', 4),
    ('Toby Flenderson', 5);

    
-- Expanded EMPLOYEE Table Data
INSERT INTO EMPLOYEE (employee_name, designation, salary, branch_id)
VALUES
    ('Angela Martin', 'Accountant', 45000.00, 1),
    ('Kevin Malone', 'Accountant', 42000.00, 1),
    ('Stanley Hudson', 'Sales Representative', 38000.00, 1),
    ('Oscar Martinez', 'Accountant', 47000.00, 2),
    ('Meredith Palmer', 'HR Specialist', 36000.00, 2),
    ('Creed Bratton', 'Quality Assurance', 32000.00, 3),
    ('Andy Bernard', 'Regional Sales Manager', 52000.00, 3),
    ('Phyllis Vance', 'Sales Representative', 39000.00, 4),
    ('Karen Filippelli', 'Sales Representative', 40000.00, 4),
    ('Erin Hannon', 'Receptionist', 28000.00, 5),
    ('Toby Flenderson', 'HR Manager', 48000.00, 5);


-- Expanded BUSINESS Table Data
INSERT INTO BUSINESS (business_name, owner_name, branch_id)
VALUES
    ('Digital Horizons', 'James', 1),
    ('EcoSave Technologies', 'Ava', 2),
    ('Culinary Delights', 'Emma', 3),
    ('Urban Ventures', 'Charlotte', 4),
    ('Luxe Interiors', 'Mila', 5),
    ('Stellar Education', 'Aria', 1),
    ('GreenEarth Projects', 'Luna', 2),
    ('TechWave Solutions', 'Luca', 3),
    ('Golden Harvest', 'Evelyn', 4),
    ('Dynamic Marketing', 'Sophia', 5),
    ('Ace Retailers', 'Maeve', 1),
    ('Elite Builders', 'Kai', 2),
    ('Blue Horizon Tours', 'Olivia', 3);
