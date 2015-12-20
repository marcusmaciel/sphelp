USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`ClienteContato` (
  `_i` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo' COMMENT '',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `Cliente_i` INT NOT NULL COMMENT '',
  `TipoContato_i` INT NOT NULL COMMENT '',
  `ClasseContato_i` INT NOT NULL COMMENT '',
  `descricao` VARCHAR(100) NOT NULL COMMENT '',
  `observacao` LONGTEXT NULL COMMENT '',
  PRIMARY KEY (`_i`)  COMMENT '',
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC)  COMMENT '',
  INDEX `FK_ClienteContato$TipoContato_i_idx` (`TipoContato_i` ASC)  COMMENT '',
  INDEX `FK_ClienteContato$ClasseContato_i_idx` (`ClasseContato_i` ASC)  COMMENT '',
  INDEX `FK_ClienteContato$Cliente_i_idx` (`Cliente_i` ASC)  COMMENT '',
  CONSTRAINT `FK_ClienteContato$TipoContato_i`
    FOREIGN KEY (`TipoContato_i`)
    REFERENCES `sphelp`.`TipoContato` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `FK_ClienteContato$ClasseContato_i`
    FOREIGN KEY (`ClasseContato_i`)
    REFERENCES `sphelp`.`ClasseContato` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `FK_ClienteContato$Cliente_i`
    FOREIGN KEY (`Cliente_i`)
    REFERENCES `sphelp`.`Cliente` (`_i`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
