1. Create a database named task_manager.

    - A database named task_manager has been created.


2. Create two tables inside the database:
· users (columns: id, name, email, created_at)
· tasks (columns: id, user_id, title, description, status, created_at)

    - Two tables inside the database named users and tasks has been created


3. Set a 1:M relationship between users and tasks (one user can have many tasks).

    - Relationship between users and tasks has been created while creating tasks table.


4. Insert at least 3 users and multiple tasks for each user.

    - 3 users and multiple tasks has been inserted in the table.


5. Write and execute SQL queries to:

    · Select all tasks

        -   SELECT * FROM tasks;


    · Update a task’s status

        -   UPDATE tasks
            SET status = 'Completed'
            WHERE id = 2;


    · Delete a task

        -   DELETE FROM tasks
            WHERE id = 5;


    · Show tasks with Sorting and Limit/Pagination

        -   SELECT * FROM tasks
            ORDER BY created_at DESC
            LIMIT 3;


    · Use Aggregator Functions (COUNT, MAX, etc.) to display how many tasks each user has

        -   SELECT u.name, COUNT(t.id) AS total_tasks
            FROM users u
            LEFT JOIN tasks t ON u.id = t.user_id
            GROUP BY u.id, u.name;


    · Perform Inner Join, Left Join, and Right Join between users and tasks

        -- INNER JOIN

                SELECT u.name, t.title, t.status
                FROM users u
                INNER JOIN tasks t ON u.id = t.user_id;

        --  LEFT JOIN

                SELECT u.name, t.title, t.status
                FROM users u
                LEFT JOIN tasks t ON u.id = t.user_id;

        --  RIGHT JOIN

                SELECT u.name, t.title, t.status
                FROM users u
                RIGHT JOIN tasks t ON u.id = t.user_id;


6. Export the database as a .sql file and submit it.

    - task_manager.sql file has been submited.


7. Create a README.md file and describe what you have done (database name, tables created, relationships, queries used, etc.).

    - README.md file has been created and all the things I have done has been described.





