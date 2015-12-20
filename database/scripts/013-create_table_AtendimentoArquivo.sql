USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`AtendimentoArquivo` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Atendimento_i` INT NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `url` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC),
  INDEX `FK_AtendimentoArquivo$Atendimento_i_idx` (`Atendimento_i` ASC),
  CONSTRAINT `FK_AtendimentoArquivo$Atendimento_i`
    FOREIGN KEY (`Atendimento_i`)
    REFERENCES `sphelp`.`Atendimento` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;
