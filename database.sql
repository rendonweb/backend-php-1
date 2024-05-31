CREATE DATABASE my_database;

USE my_database;

CREATE TABLE people (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    date_of_entry DATE NOT NULL,
    comments TEXT
);
