-- Banco de dados --

DROP DATABASE IF EXISTS projetoCadastro;
CREATE DATABASE projetoCadastro;
USE projetoCadastro;

CREATE TABLE usuario
(
	id_user int(4) PRIMARY KEY auto_increment,
    name_user varchar(50) NOT NULL,
    email_user varchar(50) NOT NULL,
    fone_usuario varchar(30) NULL,
    senha varchar(30) NOT NULL
);