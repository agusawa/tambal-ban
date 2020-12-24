-- Drop 'blog' database if exists 
DROP DATABASE IF EXISTS 'tambal_ban';


-- Create 'tambal_ban' database
CREATE DATABASE 'tambal_ban';


-- Use 'tambal_ban database'
USE 'tambal_ban';


-- Drop 'accounts' table if exists
DROP TABLE IF EXISTS 'accounts';


-- Create 'accounts' table
CREATE TABLE 'accounts' (
	'id' INT NOT NULL AUTO_INCREMENT,
	'email' VARCHAR(50) NOT NULL UNIQUE,
	'password' VARCHAR(10) NOT NULL,
	'created' INT(10) NOT NULL,
	'updated' INT(10) NULL,
	PRIMARY KEY ('id')
	INDEX('email')
	)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- Drop `tire_patches` table if exists
DROP TABLE IF EXISTS 'tire_patches';


-- Create `tire_patches` table
CREATE TABLE 'tire_patches' (
	'id' INT(10) NOT NULL AUTO_INCREMENT,
	'account_id' INT(10) NOT NULL, 
	'name' VARCHAR(50) NOT NULL,
	'address' VARCHAR(255) NOT NULL,
	'description' TEXT(255) NULL,
	'picture' VARCHAR(255) NULL,
	'whatsapp_number' VARCHAR(15) NOT NULL,
	'created' INT(10) NOT NULL,
	'updated' INT(10) NULL,
	PRIMARY KEY ('id'),
	FOREIGN KEY ('account_id') REFERENCES 'accounts'('id') ON DELETE CASCADE
	)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
