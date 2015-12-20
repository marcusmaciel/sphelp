USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`Configuracao` (
  `_i` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(100) NOT NULL COMMENT '',
  `chave` VARCHAR(100) NOT NULL COMMENT '',
  `valor` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`_i`)  COMMENT '',
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC)  COMMENT '')
ENGINE = InnoDB