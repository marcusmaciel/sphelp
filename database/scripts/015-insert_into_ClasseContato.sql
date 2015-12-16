USE sphelp;
/*inserts*/
INSERT INTO `sphelp`.`ClasseContato` (`_i`, `descricao`) SELECT * FROM (SELECT 1, 'email') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`ClasseContato` WHERE `_i` = 1) LIMIT 1;
INSERT INTO `sphelp`.`ClasseContato` (`_i`, `descricao`) SELECT * FROM (SELECT 2, 'celular') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`ClasseContato` WHERE `_i` = 2) LIMIT 1;
INSERT INTO `sphelp`.`ClasseContato` (`_i`, `descricao`) SELECT * FROM (SELECT 3, 'telefone') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`ClasseContato` WHERE `_i` = 3) LIMIT 1;
INSERT INTO `sphelp`.`ClasseContato` (`_i`, `descricao`) SELECT * FROM (SELECT 4, 'website') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`ClasseContato` WHERE `_i` = 4) LIMIT 1;
INSERT INTO `sphelp`.`ClasseContato` (`_i`, `descricao`) SELECT * FROM (SELECT 5, 'skype') AS tmp WHERE NOT EXISTS (SELECT `_i` FROM `sphelp`.`ClasseContato` WHERE `_i` = 5) LIMIT 1;
