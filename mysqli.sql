CREATE DATABASE project_accounts_system;

USE project_accounts_system;

CREATE TABLE accounts (
	idUser INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(140) NOT NULL,
    fullName VARCHAR(140) NOT NULL,
    age varchar(3) NOT NULL,
    password VARCHAR(64) NOT NULL
);

DROP TABLE accounts;

SELECT * FROM accounts;

DELETE FROM accounts;

SET SQL_SAFE_UPDATES = 0;