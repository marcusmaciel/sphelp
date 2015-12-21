USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`Versao` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `numero` VARCHAR(50) NOT NULL,
  `implementacao` LONGTEXT NULL,
  `correcao` LONGTEXT NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC))
ENGINE = InnoDB