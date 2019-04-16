DROP DATABASE fp_db;
CREATE DATABASE fp_db;

CREATE TABLE IF NOT EXISTS `fp_db`.`user` (
  `userName` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `maxPrice` INT(11) NULL DEFAULT NULL,
PRIMARY KEY (`userName`));

CREATE TABLE IF NOT EXISTS `fp_db`.`game` (
  `name` VARCHAR(45) NOT NULL,
  `genre` VARCHAR(45) NULL DEFAULT NULL,
PRIMARY KEY (`name`));

CREATE TABLE IF NOT EXISTS `fp_db`.`parts` (
  `name` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NULL DEFAULT NULL,
  `price` INT(11) NULL DEFAULT NULL,
  `company` VARCHAR(45) NULL DEFAULT NULL,
  `link` VARCHAR(1000) NULL DEFAULT NULL,
PRIMARY KEY (`Name`));

INSERT INTO fp_db.user (name, userName, password, maxPrice) VALUES
("Dylan Cicale", "dylanc97", "The", 1200);

INSERT INTO fp_db.game (name, genre) VALUES
("Fortnite", "Battle Royale"),
("APEX Legends", "Battle Royale"),
("Playerunknown's Battlegrounds", "Battle Royale"),
("Call Of Duty", "Battle Royale"),
("Grand Theft Auto 5", "Open World"),
("World of Warcraft", "Open World"),
("Counter-Strike", "Standard"),
("Overwatch", "Standard"),
("Battlefield 5", "Standard"),
("Rainbow 6 siege", "Standard");

select * from fp_db.game;
select * from fp_db.user;
select * from fp_db.parts;