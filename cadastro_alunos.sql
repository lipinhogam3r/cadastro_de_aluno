CREATE DATABASE IF NOT EXISTS cadastro_alunos;
USE cadastro_alunos;

CREATE TABLE IF NOT EXISTS alunos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  cgm INT(50),
  nome VARCHAR(100),
  email VARCHAR(100),
  turma VARCHAR(10),
  serie VARCHAR(10),
  celular VARCHAR(20),
  endereco VARCHAR(255),
  cep VARCHAR(10),
  cidade VARCHAR(50),
  estado VARCHAR(2)
);
