-- DROP DATABASE network;

CREATE DATABASE network;

-- For MySQL.
USE network;

-- For Microsoft SQL Server: id INT NOT NULL IDENTITY(1, 1) PRIMARY KEY.
-- For MySQL: id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT.
-- For PostgreSQL: id SERIAL.
-- For SQLite: id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT.
CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(191) NOT NULL,
    password VARCHAR(60) NOT NULL,
    CONSTRAINT users_username_key UNIQUE (username)
);
