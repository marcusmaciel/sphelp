USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`Historico` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuario_i` INT NOT NULL,
  `acao` VARCHAR(50) NOT NULL,
  `conteudo` LONGTEXT NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC),
  INDEX `FK_Historico$Usuario_i_idx` (`Usuario_i` ASC),
  CONSTRAINT `FK_Historico$Usuario_i`
    FOREIGN KEY (`Usuario_i`)
    REFERENCES `sphelp`.`Usuario` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;
