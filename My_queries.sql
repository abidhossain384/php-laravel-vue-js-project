-- A) find 3 second lowest salary from employee table

SELECT DISTINCT salary
FROM employee
ORDER BY salary ASC
LIMIT 3 OFFSET 1;



-- B) find second lowest salary from employee table using sub query

SELECT MIN(salary) AS second_lowest_salary
FROM employee
WHERE salary > (
    SELECT MIN(salary)
    FROM employee
);



-- C) find pending balance from account table where result fulfill following conditions
-- a. show average pending balance

SELECT AVG(PENDING_BALANCE) AS avg_pending_balance
FROM account;


-- b. account should be active

SELECT PENDING_BALANCE
FROM account
WHERE STATUS = 'ACTIVE';



-- c. grouping should be on open branch id

SELECT OPEN_BRANCH_ID, SUM(PENDING_BALANCE) AS total_pending_balance
FROM account
GROUP BY OPEN_BRANCH_ID;



-- d. the branches on where PENDING_BALANCE is bellow 4300

SELECT OPEN_BRANCH_ID
FROM account
WHERE PENDING_BALANCE < 4300;



-- D) Write a pagination query and explain it.

SELECT ACCOUNT_ID, CUST_ID, AVAIL_BALANCE, OPEN_DATE
FROM account
ORDER BY ACCOUNT_ID
LIMIT 5 OFFSET 10;



-- E) Think you have a bank and many branches . You have a account table where multiple account from multiple branch. table contains OPEN_BRANCH_ID . Write a query to find total number of branch including head branch

SELECT COUNT(DISTINCT OPEN_BRANCH_ID) AS branchID
FROM account;