USE sphelp;
/*inserts*/
INSERT INTO `sphelp`.`Usuario` (`login`, `senha`) SELECT * FROM (SELECT 'admin', '123') AS tmp WHERE NOT EXISTS (SELECT `login` FROM `sphelp`.`Usuario` WHERE `login` = 'admin') LIMIT 1;
