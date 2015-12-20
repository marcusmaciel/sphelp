USE sphelp;
/*inserts*/
INSERT INTO `sphelp`.`TipoEndereco` (`_i`, `descricao`) SELECT * FROM (SELECT 1, 'comercial') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`TipoEndereco` WHERE `_i` = 1) LIMIT 1;
INSERT INTO `sphelp`.`TipoEndereco` (`_i`, `descricao`) SELECT * FROM (SELECT 2, 'particular') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`TipoEndereco` WHERE `_i` = 2) LIMIT 1;

