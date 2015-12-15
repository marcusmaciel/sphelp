USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`ClienteEndereco` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Cliente_i` INT NOT NULL,
  `TipoEndereco_i` INT NOT NULL,
  `cep` CHAR(8) NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `complemento` VARCHAR(150) NULL DEFAULT '00000000000',
  `bairro` VARCHAR(50) NOT NULL,
  `localidade` VARCHAR(50) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  PRIMARY KEY (`_i`),
  INDEX `FK_Endereco$TipoEndereco_i_idx` (`TipoEndereco_i` ASC),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC),
  INDEX `FK_ClienteEndereco$Cliente_i_idx` (`Cliente_i` ASC),
  CONSTRAINT `FK_ClienteEndereco$TipoEndereco_i`
    FOREIGN KEY (`TipoEndereco_i`)
    REFERENCES `sphelp`.`TipoEndereco` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `FK_ClienteEndereco$Cliente_i`
    FOREIGN KEY (`Cliente_i`)
    REFERENCES `sphelp`.`Cliente` (`_i`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;
