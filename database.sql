CREATE DATABASE task_manager;

USE task_manager;

CREATE TABLE tasks(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    status ENUM('Pending','Completed') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO tasks(title,description,status)
VALUES
('Learn PHP','Complete PHP MySQL project','Pending'),
('Practice HTML','Make responsive pages','Completed');