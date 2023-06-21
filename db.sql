CREATE DATABASE `assignment`;
CREATE TABLE `assignment`.`students_tbl` (`id` INT(11) NOT NULL AUTO_INCREMENT , `lname` VARCHAR(50) NOT NULL , `fname` VARCHAR(50) NOT NULL , `studno` VARCHAR(50) NOT NULL , `dept` VARCHAR(100) NOT NULL , `cgpa` VARCHAR(5) NOT NULL , `semester` VARCHAR(50) NOT NULL , `date_created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
