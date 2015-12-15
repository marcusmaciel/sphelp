USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`Atendimento` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Chamado_i` INT NOT NULL,
  `Usuario_i` INT NOT NULL,
  `relatorio` LONGTEXT NOT NULL,
  `dataRetorno` VARCHAR(250) NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC),
  INDEX `FK_Atendimento$Chamado_i_idx` (`Chamado_i` ASC),
  INDEX `FK_Atendimento$Usuario_i_idx` (`Usuario_i` ASC),
  CONSTRAINT `FK_Atendimento$Chamado_i`
    FOREIGN KEY (`Chamado_i`)
    REFERENCES `sphelp`.`Chamado` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `FK_Atendimento$Usuario_i`
    FOREIGN KEY (`Usuario_i`)
    REFERENCES `sphelp`.`Usuario` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;
