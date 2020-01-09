-- ===================================================================
-- DoorCrash-DatabaseBuild
-- This script builds the dbFoodItems database and its table.  It also 
-- inserts data into the tables.
-- ===================================================================

-- -------------------------------------------------------------------
-- Save selected MySQL settings
-- -------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -------------------------------------------------------------------
-- Delete and create database
-- -------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbFoodItems` ;
CREATE SCHEMA IF NOT EXISTS `dbFoodItems` DEFAULT CHARACTER SET utf8;

-- -------------------------------------------------------------------
-- Switch to dbFoodItems database
-- -------------------------------------------------------------------
USE dbFoodItems;

-- -------------------------------------------------------------------
-- Delete and create table `dbFoodItems`.`tbFoodItems `
-- -------------------------------------------------------------------
DROP TABLE IF EXISTS `dbFoodItems`.`tbFoodItems` ;
CREATE TABLE IF NOT EXISTS `dbFoodItems`.`tbFoodItems` (
  `FoodItemID` INT NOT NULL AUTO_INCREMENT,
  `Restaurant` VARCHAR(45) NOT NULL,
  `FoodItem` VARCHAR(45) NOT NULL,
  `Price` DECIMAL(12,2) NOT NULL,
  `QuantitySold` INT NOT NULL,
  `OrdersSold` INT NOT NULL,
  PRIMARY KEY (`FoodItemID`))
ENGINE = MyISAM;

-- -------------------------------------------------------------------
-- Insert data into table `dbFoodItems`.`tbFoodItems`
-- -------------------------------------------------------------------
INSERT INTO tbFoodItems(Restaurant, FoodItem, Price, QuantitySold, OrdersSold) VALUES 
  ("Taste of India Tandoori","Pakoda",3,7, 2),
  ("Taste of India Tandoori","Chatt",6.99,6, 1),
  ("Taste of India Tandoori","Tandori Masala",13.99,12, 1),
  ("Taste of India Tandoori","Chicken tikka",13.99,11, 2),
  ("ZamZam","Pakoda",5,12, 3),
  ("ZamZam","Samosa Chatt",13.99,13, 2),
  ("ZamZam","Tandori Masala",5.99,5, 3),
  ("ZamZam","biryani",10.25,12, 3),
  ("Aladdin Sweets & Cafe","Vegetable Curry",11,8, 3),
  ("Aladdin Sweets & Cafe","Samosa",3.99,4, 3),
  ("Aladdin Sweets & Cafe","chicken wrap",13.9,12, 3),
  ("Aladdin Sweets & Cafe","Biryani Veg\/Egg",13.99,17, 3),
  ("Phulkari Punjabi Kitchen","RAJ KACHORI",11,16, 3),
  ("Phulkari Punjabi Kitchen","PYAAZ PAKORA",3.99,10, 3),
  ("Phulkari Punjabi Kitchen","PANEER wrap",13.99,8, 3),
  ("Phulkari Punjabi Kitchen","veg Egg Birayani",13.99,16, 3);
SELECT * FROM tbFoodItems;

-- -----------------------------------------------------
-- Restore saved MySQL settings
-- -----------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
