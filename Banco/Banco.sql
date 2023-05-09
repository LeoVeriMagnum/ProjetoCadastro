-- Banco de dados --

DROP DATABASE IF EXISTS projetoCadastro;
CREATE DATABASE projetoCadastro;
USE projetoCadastro;

CREATE TABLE usuario
(
	id_user int(4) PRIMARY KEY auto_increment,
    name_user varchar(50) NOT NULL,
    email_user varchar(50) NOT NULL,
    fone_user varchar(30) NULL,
    senha varchar(30) NOT NULL
);

/*
use projetoCadastro;
insert into usuario
(name_user, fone_user, email_user, senha)
values ('Leonardo','(18) 3622-9046', 'leo@proton.me', '123456');

select * from usuario;
*/