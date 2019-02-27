DROP SCHEMA IF EXISTS university;
CREATE SCHEMA university;
USE university;



DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `accessibility` INT(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (`username`)

) ENGINE=InnoDB AUTO_INCREMENT=4080 DEFAULT CHARSET=latin1;

INSERT INTO account VALUES
    ('usernameadmin01','passadmin01',0);
    


DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
    `id` VARCHAR(255) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT fk_username FOREIGN KEY (`username`) REFERENCES `account`(`username`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4080 DEFAULT CHARSET=latin1;

INSERT INTO admins VALUES
    ('adminid01','usernameadmin01');



