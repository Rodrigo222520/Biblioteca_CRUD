CREATE DATABASE biblioteca_dp
USE biblioteca_dp

CREATE TABLE autores (
	id_autor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nacionalidade VARCHAR(100) NOT NULL,
    ano_nascimento VARCHAR(10) NOT NULL
);

CREATE TABLE livros (
	id_livro INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    ano_publicacao VARCHAR(100) NOT NULL,
    FOREIGN KEY (id_autor) REFERENCES autor(id)
);

CREATE TABLE leitores (
	id_leitor INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL
);

CREATE TABLE emprestimos (
	id_emprestimo INT AUTO_INCREMENT PRIMARY KEY,
    FOREIGN KEY (id_livro) REFERENCES autor(id),
    FOREIGN KEY (id_leitor) REFERENCES autor(id),
    data_emprestimo VARCHAR(100) NOT NULL,
    data_devolucao VARCHAR(100) NOT NULL
);