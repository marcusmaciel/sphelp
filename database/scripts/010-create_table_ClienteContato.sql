USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`ClienteContato` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cliente_i` INT NOT NULL,
  `TipoContato_i` INT NOT NULL,
  `ClasseContato_i` INT NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  `observacao` LONGTEXT NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC),
  INDEX `FK_ClienteContato$TipoContato_i_idx` (`TipoContato_i` ASC),
  INDEX `FK_ClienteContato$ClasseContato_i_idx` (`ClasseContato_i` ASC),
  INDEX `FK_ClienteContato$Cliente_i_idx` (`Cliente_i` ASC),
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
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;
