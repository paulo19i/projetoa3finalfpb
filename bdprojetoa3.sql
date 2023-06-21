CREATE DATABASE bdprojetoa3;
USE bdprojetoa3;
CREATE TABLE login(
nome VARCHAR(300),
login VARCHAR(100),
senha VARCHAR(100),
PRIMARY KEY(login)
);
bdprojetoa3
INSERT INTO
login(nome, login, senha)
VALUES
('Administrador','Admin','Admin@2023');
