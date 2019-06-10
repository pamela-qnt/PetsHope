-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE nf_compra (
data_compra VARCHAR(50),
id_usuario VARCHAR(50),
hora_compra VARCHAR(50),
valor_compra VARCHAR(50)
)

CREATE TABLE produto (
id_produto VARCHAR(50) PRIMARY KEY,
qtd_estoque VARCHAR(50),
descricao VARCHAR(50),
valor VARCHAR(50),
id_classificacao VARCHAR(50)
)

CREATE TABLE animal (
nome_animal VARCHAR(50),
id_animal VARCHAR(50) PRIMARY KEY,
sexo VARCHAR(50)
)

CREATE TABLE especie (
id_animal VARCHAR(50),
especie VARCHAR(50),
descricao VARCHAR(50),
FOREIGN KEY(id_animal) REFERENCES animal (id_animal)
)

CREATE TABLE usuario (
id_usuario VARCHAR(50) PRIMARY KEY,
nome_usuario VARCHAR(50),
email VARCHAR(50),
tel_contato VARCHAR(50),
senha VARCHAR(50),
id_animal VARCHAR(50),
FOREIGN KEY(id_animal) REFERENCES animal (id_animal)
)

CREATE TABLE classificacao (
id_classificacao VARCHAR(50) PRIMARY KEY,
tipo_prod VARCHAR(50),
id_produto VARCHAR(50),
FOREIGN KEY(id_produto) REFERENCES produto (id_produto)
)

CREATE TABLE compra (
id_usuario VARCHAR(50),
id_produto VARCHAR(50),
PRIMARY KEY(id_usuario,id_produto)
)

