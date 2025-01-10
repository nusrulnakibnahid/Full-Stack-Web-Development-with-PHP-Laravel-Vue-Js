-- 📋 1️⃣ Select all customers from the Customer table
SELECT * FROM customer;

-- 📋 2️⃣ Retrieve only the names and phone numbers of all customers
SELECT customer_name,customer_id FROM customer;

-- 📋 3️⃣ Find all accounts with a balance greater than 5,000
SELECT * FROM `account` WHERE balance > 5000;

-- 📋 4️⃣ Select all transactions that happened in the last 10 days
SELECT * FROM transaction
WHERE transaction_date >= CURDATE() - INTERVAL 10 DAY;

-- 🏦 5️⃣ List all customers along with their account details
SELECT c.customer_name, a.account_id, a.account_type, a.balance
FROM customer c
JOIN ACCOUNT a ON c.customer_id = a.customer_id;


-- 🏦 6️⃣ List all employees who work in a specific branch (e.g., branch_id = 1)
SELECT employee.employee_id, e.employee_name, b.branch_name
FROM EMPLOYEE e
JOIN BRANCH b ON e.branch_id = b.branch_id
WHERE b.branch_id = 1;