CREATE DATABASE IF NOT EXISTS vuln_lab;
USE vuln_lab;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO users (username, email, password) VALUES
('admin', 'admin@site.com', 'admin123'),
('john', 'john@site.com', 'passjohn'),
('trhacknon', 'hacker@street.com', '0xdeadbeef');
