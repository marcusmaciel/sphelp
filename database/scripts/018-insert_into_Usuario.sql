USE sphelp;
/*inserts*/
INSERT INTO `sphelp`.`Usuario` (`login`, `senha`, `nome`) SELECT * FROM (SELECT 'admin', '123', 'Super User') AS tmp WHERE NOT EXISTS (SELECT `login` FROM `sphelp`.`Usuario` WHERE `login` = 'admin') LIMIT 1;
