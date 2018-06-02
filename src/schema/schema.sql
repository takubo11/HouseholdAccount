CREATE TABLE `expence` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `expence_name` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

CREATE TABLE `income` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `income_name` varchar(100) NOT NULL,
 PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

CREATE TABLE `accounts` (
 `id` bigint NOT NULL AUTO_INCREMENT,
 `account_type` int(1) NOT NULL,
 `item_name` varchar(1000) NOT NULL ,
 `account_id` int(11) NOT NULL,
 `amount` bigint,
 `created_time` timestamp NOT NULL,
 PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;