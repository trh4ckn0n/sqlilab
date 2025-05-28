CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO users (username, password) VALUES
('admin', 'admin123'),
('user', 'pass123'),
('trhacknon', 'ultra_h4ck3r');
