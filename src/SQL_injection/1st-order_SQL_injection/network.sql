-- DROP DATABASE network;

CREATE DATABASE network;

-- For MySQL.
USE network;

CREATE TABLE users (
    id INTEGER NOT NULL,
    username VARCHAR(191) NOT NULL,
    password VARCHAR(191) NOT NULL,
    CONSTRAINT users_id_pkey PRIMARY KEY (id),
    CONSTRAINT users_username_key UNIQUE (username)
);

INSERT INTO users
    (id, username, password)
VALUES
    (1, 'administrator', '123456'),
    (2, 'director', 'qwerty'),
    (3, 'economist', 'abc123');

-- SELECT * FROM users;
