DROP DATABASE IF EXISTS readit_mysqli;
CREATE DATABASE readit_mysqli;

use readit_mysqli;

CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    username VARCHAR(30) UNIQUE KEY NOT NULL,
    email VARCHAR(50) UNIQUE KEY NOT NULL,
    activation_code VARCHAR(255),
    userpassword VARCHAR(255) NOT NULL,
    active BOOLEAN DEFAULT false,
    userlocation VARCHAR(50),
    bio TEXT,
    datejoined datetime DEFAULT CURRENT_TIMESTAMP,
    ALTER TABLE users ADD forgotten_password_token VARCHAR(50) NOT NULL;
);

CREATE TABLE usersbooks (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL,
    rating INT(11) NOT NULL
);