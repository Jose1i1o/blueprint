CREATE DATABASE IF NOT EXISTS `globe_bank`;

SHOW DATABASES;

USE `globe_bank`;

CREATE USER 'webuser'@'localhost' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON globe_bank.*
TO 'webuser'@'localhost';

SHOW GRANTS FOR `root`@`localhost`;

USE globe_bank;

CREATE TABLE subjects (
  id INT(11) NOT NULL AUTO_INCREMENT,
  menu_name VARCHAR(255),
  position INT(3),
  visible TINYINT(1),
  PRIMARY KEY (id)
);


SHOW COLUMNS FROM subjects;

SHOW * FROM subjects;

INSERT INTO subjects (id, menu_name, position, visible) VALUES (1, 'About Globe Bank', 1, 1);

SELECT * FROM subjects;


