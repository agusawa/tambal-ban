-- drop 'tambalBan' if exists.
DROP DATABASE IF EXISTS 'tambalBan';

-- create 'tambalBan' database.
CREATE DATABASE 'tambalBan';

-- use 'tambalBan'.
USE 'tambalBan';

-- drop 'user' table if exists.
DROP TABLE IF EXISTS 'user';

-- create 'user' table.
CREATE TABLE 'user' (
	'id' INT NOT NULL AUTO_INCREMENT,
	'username' VARCHAR(100) NOT NULL,
	'email' VARCHAR(50) NOT NULL UNIQUE,
	'password' VARCHAR(100) NOT NULL,
	'created' INT(10) NOT NULL,
	'modified' INT(10) NULL,
	PRIMARY KEY('id'),
	INDEX('email')
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-- drop 'tirePatch' table if exists.
DROP TABLE IF EXISTS 'tirePatch';

-- create tirePatch table.
CREATE TABLE 'tirePatch' (
	'id' INT(10) NOT NULL AUTO_INCREMENT,
	'userId' INT(10) NOT NULL,
	'whatsappNumber' INT(15) NOT NULL,
	'description' VARCHAR(110) NULL,
	'picture' VARCHAR(200) NOT NULL,
	'address' VARCHAR(200) NOT NULL,
	'available' VARCHAR(20) NOT NULL, -- layanan bersedia ke lokasi atau tidak
	'created' INT(10) NOT NULL,
	PRIMARY KEY ('id'),
	FOREIGN KEY ('userId') REFERENCES 'user' ('id') ON DELETE CASCADE
)ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

