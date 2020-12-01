-- Drop `blog` database if exists.
DROP DATABASE IF EXISTS `tambal_ban`;

-- Create `tambal_ban` database.
CREATE DATABASE `tambal_ban`;

-- Drop `accounts` table if exists;
DROP TABLE IF EXISTS `accounts`;
-- Create `accounts` table.
CREATE TABLE `accounts` (
    `id`            CHAR(36)        NOT NULL PRIMARY KEY,
    `name`          VARCHAR(50)     NOT NULL,
    `email`         VARCHAR(255)    NOT NULL UNIQUE,
    `password`      VARCHAR(255)    NOT NULL,
    `created_at`    INT(10)         NOT NULL,
    `updated_at`    INT(10)         NULL,
    INDEX(`email`)
);

-- Drop `tire_patches` table if exists;
DROP TABLE IF EXISTS `tire_patches`;
-- Create `tire_patches` table.
CREATE TABLE `tire_patches` (
    `id`            	CHAR(36)        NOT NULL PRIMARY KEY,
    `account_id`    	CHAR(36)        NOT NULL,
    `name`          	VARCHAR(50)     NOT NULL,
    `address`			VARCHAR(255)	NOT NULL,
    `description`		TEXT			NULL,
    `picture`			VARCHAR(255)    NULL,
    `whatsapp_number`	VARCHAR(14)		NOT NULL,
    `created_at`    	INT(10) 		NOT NULL,
    `updated_at`    	INT(10) 		NULL,
	FOREIGN KEY (`account_id`) REFERENCES `accounts`(`id`) ON DELETE CASCADE
);

-- Drop `tire_patch_facilities` table if exists;
DROP TABLE IF EXISTS `tire_patch_facilities`;
-- Create `tire_patch_facilities` table.
CREATE TABLE `tire_patch_facilities` (
    `id`            	CHAR(36)	NOT NULL PRIMARY KEY,
    `tire_patch_id`    	CHAR(36)	NOT NULL,
    `name`          	VARCHAR(50)	NOT NULL,
    `description`		TEXT		NULL,
    `created_at`    	INT(10)		NOT NULL,
    `updated_at`    	INT(10) 	NULL,
	FOREIGN KEY (`tire_patch_id`) REFERENCES `tire_patches`(`id`) ON DELETE CASCADE
);

-- Drop `tire_patch_rates` table if exists;
DROP TABLE IF EXISTS `tire_patch_rates`;
-- Create `tire_patch_rates` table.
CREATE TABLE `tire_patch_rates` (
    `id`            	CHAR(36)	NOT NULL PRIMARY KEY,
    `tire_patch_id`    	CHAR(36)    NOT NULL,
    `account_id`    	CHAR(36)	NOT NULL,
    `rate`          	TINYINT		NOT NULL,
	`comment`			TEXT		NULL,
    `created_at`    	INT(10)		NOT NULL,
    `updated_at`    	INT(10)		NULL,
	FOREIGN KEY (`tire_patch_id`) REFERENCES `tire_patches`(`id`) ON DELETE CASCADE
);
