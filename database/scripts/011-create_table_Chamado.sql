USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`Chamado` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuario_i` INT NOT NULL,
  `Cliente_i` INT NOT NULL,
  `dataEnd` DATETIME NULL,
  `descricao` VARCHAR(250) NOT NULL,
  `tag` VARCHAR(250) NULL,
  `emailFeedback` VARCHAR(100) NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC),
  INDEX `FK_Chamado$Cliente_i_idx` (`Cliente_i` ASC),
  INDEX `FK_Chamado$Usuario_i_idx` (`Usuario_i` ASC),
  CONSTRAINT `FK_Chamado$Cliente_i`
    FOREIGN KEY (`Cliente_i`)
    REFERENCES `sphelp`.`Cliente` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Chamado$Usuario_i`
    FOREIGN KEY (`Usuario_i`)
    REFERENCES `sphelp`.`Usuario` (`_i`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
