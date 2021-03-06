﻿USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`Cliente` (
  `_i` INT NOT NULL AUTO_INCREMENT,
  `_s` VARCHAR(50) NOT NULL DEFAULT 'ativo',
  `_d` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `primeiroNome` VARCHAR(100) NOT NULL,
  `segundoNome` VARCHAR(100) NULL,
  `contrato` VARCHAR(50) NOT NULL,
  `cn` VARCHAR(14) NOT NULL DEFAULT '00000000000',
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`_i`),
  UNIQUE INDEX `_i_UNIQUE` (`_i` ASC))
ENGINE = InnoDB;
