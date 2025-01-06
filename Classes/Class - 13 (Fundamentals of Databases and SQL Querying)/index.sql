-- Active: 1736110313181@@127.0.0.1@3306@ostad
-- Creating Table

-- Creating Departments Table
CREATE TABLE departments(
    id INT PRIMARY KEY,
    name VARCHAR(100) NULL UNIQUE
)


-- Creating Employees Table
CREATE TABLE employees(
    id INT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    salary DECIMAL(10,2) NOT NULL,
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES departments(id) ON DELETE CASCADE ON UPDATE CASCADE
)

-- How to write Insert Query

-- Insert into departments
INSERT INTO departments(id, name) VALUES(1, "IT")

INSERT INTO departments(id, name) VALUES
(2, "HR"),
(3, "Finance")


-- Insert into employees
INSERT INTO employees (id, name, department_id, salary) VALUES
(1, 'Alice', 2, 60000),
(2, 'Bob', 3, 45000),
(3, 'Charlie', 1, 70000),
(4, 'Diana', 1, 52000),
(5, 'Eve', 2, 80000);

-- How to write Delete Query
DELETE FROM employees WHERE id = 5


-- How to write Update Query
UPDATE employees SET salary = 60000 WHERE id = 4

-- How to write SELECT query all
SELECT * FROM departments

SELECT * FROM employees


-- How to write write condtional SELECT query with Where
SELECT * FROM employees WHERE name = "Bob"

SELECT salary FROM employees WHERE name = "Bob"

-- How to write SELECT with SORT
SELECT name, salary FROM employees ORDER BY salary ASC

SELECT name, salary FROM employees ORDER BY salary DESC


-- How to write SELECT with LIMIT
SELECT * FROM employees LIMIT 3


-- Selecting specific IDs from a table
SELECT * FROM employees WHERE id IN (1,3,5)

-- How to write SELECT with Unique
SELECT DISTINCT name FROM employees 


-- -- How to write SELECT with GROUP BY
SELECT department_id, COUNT(*) AS employee_count
FROM employees
WHERE salary > 15000
GROUP BY department_id


-- **SUM**: Calculates the total of a column.
SELECT SUM(salary) as total_salary FROM employees

-- **AVG**: Calculates the average value.
SELECT AVG(salary) as avg_salary FROM employees

-- **COUNT**: Counts the number of rows.
SELECT COUNT(*) as total_employees FROM employees

-- **MAX**: Finds the largest value in a column.
SELECT MAX(salary) as max_salary FROM employees


-- **MIN**: Finds the smallest value in a column.
SELECT MIN(salary) as min_salary FROM employees


-- Query Sequence
SELECT department_id, COUNT(*) AS employee_count
FROM employees
WHERE salary > 50000
GROUP BY department_id
HAVING employee_count > 1
ORDER BY employee_count DESC
LIMIT 2;


-- Modifying Colums

-- Add a New Column
ALTER TABLE employees
ADD email VARCHAR(100) NULL UNIQUE


-- Drop a Column
ALTER TABLE employees
DROP COLUMN employee_email

-- Rename a Column
ALTER TABLE employees
RENAME COLUMN email TO employee_email