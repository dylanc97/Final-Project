DROP DATABASE fp_db;
CREATE DATABASE fp_db;

CREATE TABLE IF NOT EXISTS `fp_db`.`user` (
  `userName` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `maxPrice` INT(11) NULL DEFAULT NULL,
PRIMARY KEY (`userName`));

CREATE TABLE IF NOT EXISTS `fp_db`.`game` (
  `name` VARCHAR(45) NOT NULL,
  `publisher` VARCHAR(45) NULL DEFAULT NULL,
  `matchSize` INT(11) NULL DEFAULT NULL,
  `genre` VARCHAR(45) NULL DEFAULT NULL,
  `imgLink` VARCHAR(1000) NULL DEFAULT NULL,
PRIMARY KEY (`name`));

CREATE TABLE IF NOT EXISTS `fp_db`.`parts` (
  `name` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NULL DEFAULT NULL,
  `price` INT(11) NULL DEFAULT NULL,
  `company` VARCHAR(45) NULL DEFAULT NULL,
  `link` VARCHAR(1000) NULL DEFAULT NULL,
PRIMARY KEY (`Name`));


INSERT INTO fp_db.game (name, publisher, genre) VALUES
("Fortnite", "Epic Games", "Battle Royale");

select * from fp_db.game;