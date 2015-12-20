USE sphelp;
/*inserts*/
INSERT INTO `sphelp`.`TipoContato` (`_i`, `descricao`) SELECT * FROM (SELECT 1, 'comercial') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`TipoContato` WHERE `_i` = 1) LIMIT 1;
INSERT INTO `sphelp`.`TipoContato` (`_i`, `descricao`) SELECT * FROM (SELECT 2, 'financeiro') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`TipoContato` WHERE `_i` = 2) LIMIT 1;
INSERT INTO `sphelp`.`TipoContato` (`_i`, `descricao`) SELECT * FROM (SELECT 3, 'particular') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`TipoContato` WHERE `_i` = 3) LIMIT 1;
