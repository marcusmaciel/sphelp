USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`TipoContato` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC))
ENGINE = InnoDB;
