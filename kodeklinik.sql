
DROP DATABASE IF EXISTS `kodeklinik`;
CREATE SCHEMA `kodeklinik`;
use `kodeklinik`;
CREATE TABLE `users` (
	`user_id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`role_id` int(3) NOT NULL,
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` DATETIME ,
	`deleted_at` DATETIME ,
	`password` varchar(150) NOT NULL,
	`email` varchar(60) NOT NULL UNIQUE,
	PRIMARY KEY (`user_id`)
);

CREATE TABLE `user_roles` (
	`role_id` int(3) NOT NULL AUTO_INCREMENT,
	`code` varchar(50) NOT NULL,
	PRIMARY KEY (`role_id`)
);

CREATE TABLE `mails` (
	`mail_id` int NOT NULL AUTO_INCREMENT,
	`heading` TEXT(1000),
	`sender` varchar(100) NOT NULL,
	`message` TEXT(10000) NOT NULL,
	`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`viewed_at` DATETIME ,
	`deleted_at` DATETIME ,
	PRIMARY KEY (`mail_id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `user_roles`(`role_id`);

