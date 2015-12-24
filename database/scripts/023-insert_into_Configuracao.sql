USE sphelp;
/*inserts*/
INSERT INTO `sphelp`.`Configuracao` (`descricao`, `observacao`, `chave`, `valor`) VALUES 
{'Tempo limite para SLA (em segundos)','por padrão o sistema contém 72 horas de sla, que são suficientes para um chamado cobrir um final de semana','chamadoSlaMaxTime','259200'},
('Protocolo de envio de emails','Normalmente a maioria dos emails utiliza o protocolo de envio de emails smtp. Caso seu servidor utilize outro protocolo, altere esta opção.','sendmailProtocol','smtp'),
('Endereço de envio de email(smtp)','Aqui deve ser informado o endereço do domínio de envio de emails do seu host. Ex: Google -> "mail.google.com".','sendmailSmtpHost',null),
('Usuario do email','Aqui deve ser informado o usuário que é usado para acessar o email. Ex: "usuario@dominio.com"','sendmailSmtpUser',null),
('Senha do email','Aqui deve ser inserida a senha para autenticação.','sendmailSmtpPass',null),
('Porta de envio de emails','Como padrão, a maioria dos e-mails atualmente utiliza a porta 587(SSL) ou a porta 465(TLS). Caso seu servidor de email utilize uma porta diferente, informe a mesma aqui.','sendmailSmtpPort','587'),
('Quebra de linha no modo CRLF','Formato de quebra de linha computacional, que simboliza a chegada do fim da linha e o retorno para o início da linha. (veja referências na wikipedia ao procurar por "CRLF")','sendmailCrlf','\r\n'),
('Quebra de linha ao digitar','Formato de quebra de linha criado ao utilizar a tecla "Enter" no teclado','sendmailNewline','\r\n'),
