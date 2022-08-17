CREATE DATABASE IF NOT EXISTS IFriend;
USE IFriend;
CREATE TABLE IF NOT EXISTS users(
    `username` varchar(16) NOT NULL PRIMARY KEY,
    `password` varchar(255) NOT NULL,
    `age` INT NOT NULL CHECK (age > 0),
    `bio` VARCHAR(255),
    `started_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS post(
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `likes` INT NOT NULL,
    `body` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    `created_by` VARCHAR(16) NOT NULL,
    FOREIGN KEY (created_by) 
        REFERENCES users(username)
)ENGINE=INNODB;

INSERT INTO users(username, password, age, bio) VALUES("yoel3iamri", "", "22","web developer");

