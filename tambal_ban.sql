-- Drop `blog` database if exists.
DROP DATABASE IF EXISTS `tambal_ban`;

-- Create `tambal_ban` database.
CREATE DATABASE `tambal_ban`;

-- Use `tambal_ban` database.
USE `tambal_ban`;

-- Drop `users` table if exists;
DROP TABLE IF EXISTS `users`;
-- Create `users` table.
CREATE TABLE `users` (
    `id`            INT             NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name`          VARCHAR(50)     COLLATE utf8mb4_general_ci NOT NULL,
    `email`         VARCHAR(320)    COLLATE utf8mb4_general_ci NOT NULL UNIQUE,
    `password`      VARCHAR(255)    COLLATE utf8mb4_general_ci NOT NULL,
    `created`       INT(10)         NOT NULL,
    `modified`      INT(10)         NULL,
    INDEX(`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Drop `tire_patches` table if exists;
DROP TABLE IF EXISTS `tire_patches`;
-- Create `tire_patches` table.
CREATE TABLE `tire_patches` (
    `id`                INT             NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `user_id`    	    INT             NOT NULL,
    `name`          	VARCHAR(50)     COLLATE utf8mb4_general_ci NOT NULL,
    `address`			VARCHAR(255)	COLLATE utf8mb4_general_ci NOT NULL,
    `description`		TEXT(500)		COLLATE utf8mb4_general_ci NULL,
    `picture`			VARCHAR(255)    COLLATE utf8mb4_general_ci NULL,
    `whatsapp_number`	VARCHAR(14)     COLLATE utf8mb4_general_ci NOT NULL,
    `available`         ENUM('Bersedia', 'Tidak bersedia') NOT NULL DEFAULT 'Tidak bersedia',
    `created`           INT(10)         NOT NULL,
    `modified`          INT(10)         NULL,
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Drop `tire_patch_facilities` table if exists;
DROP TABLE IF EXISTS `tire_patch_facilities`;
-- Create `tire_patch_facilities` table.
CREATE TABLE `tire_patch_facilities` (
    `id`            	INT         NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `tire_patch_id`    	INT         NOT NULL,
    `name`          	VARCHAR(50)	COLLATE utf8mb4_general_ci NOT NULL,
    `description`		TEXT(500)	COLLATE utf8mb4_general_ci NULL,
    `created`           INT(10)     NOT NULL,
    `modified`          INT(10)     NULL,
	FOREIGN KEY (`tire_patch_id`) REFERENCES `tire_patches`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Drop `tire_patch_rates` table if exists;
DROP TABLE IF EXISTS `tire_patch_rates`;
-- Create `tire_patch_rates` table.
CREATE TABLE `tire_patch_rates` (
    `id`            	INT	        NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `tire_patch_id`    	INT         NOT NULL,
    `user_id`    	    INT	        NOT NULL,
    `rate`          	TINYINT(1)	NOT NULL,
	`comment`			TEXT(200)	COLLATE utf8mb4_general_ci NULL,
    `created`           INT(10)     NOT NULL,
    `modified`          INT(10)     NULL,
	FOREIGN KEY (`tire_patch_id`) REFERENCES `tire_patches`(`id`) ON DELETE CASCADE,
	FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
