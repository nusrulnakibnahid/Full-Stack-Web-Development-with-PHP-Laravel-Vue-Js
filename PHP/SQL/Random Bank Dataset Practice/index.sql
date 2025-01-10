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


-- 🏦 6️⃣ Show employees working in a branch (e.g., branch_id = 1)
SELECT employee_id, branch_id 
FROM employee
WHERE branch_id = 1;

-- 🏦 7️⃣ Show transactions for a specific customer (e.g., customer_id = 101)
SELECT t.transaction_type, t.transaction_id, t.transaction_date, t.amount
FROM transaction t
JOIN ACCOUNT a ON t.account_id = a.account_id
WHERE a.customer_id = 101;

-- 📊 8️⃣ Show total balance in each branch
SELECT branch_id, SUM(balance) AS total_balance
FROM 'account'
GR

-- 📊 9️⃣ Show the number of accounts each customer has
SELECT customer_id, COUNT(*) AS account_count
FROM `account`
GROUP BY customer_id;

-- 📊 🔟 Show the highest transaction amount for each account
SELECT account_id, MAX(amount) AS max_transaction
FROM transaction
GROUP BY account_id;

-- 🔎 1️⃣1️⃣ Show customers with balance greater than the average
SELECT customer.customer_name
FROM customer
JOIN `account` ON customer.customer_id = `account`.customer_id
WHERE `account`.balance > (SELECT AVG(balance) FROM `account`);


-- 🔎 1️⃣2️⃣ Show the branch with the highest total balance
SELECT branch_id
FROM `account`
GROUP BY branch_id
ORDER BY SUM(balance) DESC
LIMIT 7;


-- 🧑‍💻 1️⃣3️⃣ Add a new customer
INSERT INTO customer (customer_id, customer_name, branch_id)
VALUES (21, 'John Doe', '3');


-- 🧑‍💻 1️⃣4️⃣ Update an account balance
UPDATE `account`
SET balance = balance + 1000
WHERE account_id = 1;


-- 🧑‍💻 1️⃣5️⃣ Delete a transaction
DELETE FROM transaction
WHERE transaction_id = 1001;


-- 🔎 1️⃣6️⃣ Show customers with transactions over 10,000 in the last 6 months
SELECT DISTINCT customer.customer_name
FROM customer
JOIN `account` ON customer.customer_id = `account`.customer_id
JOIN transaction ON ACCOUNT.account_id = transaction.account_id
WHERE transaction.amount > 10000
AND transaction.transaction_date >= NOW() - INTERVAL 6 MONTH;
 