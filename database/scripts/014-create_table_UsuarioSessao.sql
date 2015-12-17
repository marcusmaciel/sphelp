USE sphelp;
/*create table*/
CREATE TABLE IF NOT EXISTS `sphelp`.`UsuarioSessao` (
    `id` varchar(40) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
    PRIMARY KEY (id),
    KEY `ci_sessions_timestamp` (`timestamp`)
)ENGINE = InnoDB;

