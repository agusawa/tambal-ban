-- drop 'blog' database if exists.
DROP DATABASE IF EXISTS 'tambalBan';

-- create 'tambalBan' database.
CREATE DATABASE 'tambalBan';

-- use 'tambalBan' database.
USE 'tambalBan';

-- drop 'user' table if exists.
DROP TABLE IF EXISTS 'user';

-- create 'user' table.
CREATE TABLE 'user' (
	'id' INT(10) NOT NULL AUTO_INCREMENT, 
	'name' VARCHAR(50) NOT NULL,
	'email' VARCHAR(50) NOT NULL UNIQUE,
	'password' VARCHAR(50) NOT NULL,
	'created' INT(10) NOT NULL,
	'updated' INT(10) NULL,
	PRIMARY KEY ('id')
	INDEX('email')
	)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- drop 'tire_patches' table if exists.
DROP TABLE IF EXISTS 'tire_patches';

-- create 'tire_patches' table.
CREATE TABLE 'tire_patches' (
	'id' INT(10) NOT NULL AUTO_INCREMENT,
	'user_id' INT(10) NOT NULL,
	'name' VARCHAR(50) NOT NULL,
	'address' VARCHAR(255) NOT NULL,
	'description' TEXT(500) NULL,
	'picture' VARCHAR(255) NULL,
	'whatsapp_number' VARCHAR(15) NOT NULL,
	'created' INT(10) NOT NULL,
	'updated' INT(10) NULL,
	PRIMARY KEY ('id'),
	FOREIGN KEY ('user_id') REFERENCES 'user'('id') ON DELETE CASCADE
	)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
