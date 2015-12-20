USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`ClienteEndereco` (
  `_i` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `Cliente_i` INT NOT NULL COMMENT '',
  `TipoEndereco_i` INT NOT NULL COMMENT '',
  `cep` CHAR(8) NOT NULL COMMENT '',
  `logradouro` VARCHAR(100) NOT NULL COMMENT '',
  `complemento` VARCHAR(150) NULL DEFAULT '00000000000' COMMENT '',
  `bairro` VARCHAR(50) NOT NULL COMMENT '',
  `localidade` VARCHAR(50) NOT NULL COMMENT '',
  `uf` CHAR(2) NOT NULL COMMENT '',
  PRIMARY KEY (`_i`)  COMMENT '',
  INDEX `FK_Endereco$TipoEndereco_i_idx` (`TipoEndereco_i` ASC)  COMMENT '',
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC)  COMMENT '',
  INDEX `FK_ClienteEndereco$Cliente_i_idx` (`Cliente_i` ASC)  COMMENT '',
  CONSTRAINT `FK_ClienteEndereco$TipoEndereco_i`
    FOREIGN KEY (`TipoEndereco_i`)
    REFERENCES `sphelp`.`TipoEndereco` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `FK_ClienteEndereco$Cliente_i`
    FOREIGN KEY (`Cliente_i`)
    REFERENCES `sphelp`.`Cliente` (`_i`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB