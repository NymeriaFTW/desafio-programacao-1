CREATE SCHEMA `TesteProg` ;

CREATE TABLE IF NOT EXISTS `TesteProg`.`Compras` (
  `idCompras` INT NOT NULL AUTO_INCREMENT,
  `purchaser_name` VARCHAR(45) NULL,
  `item_description` VARCHAR(45) NULL,
  `item_price` DOUBLE NULL,
  `purchase_count` INT NULL,
  `merchant_address` VARCHAR(45) NULL,
  `merchant_name` VARCHAR(45) NULL,
  PRIMARY KEY (`idCompras`))
ENGINE = InnoDB