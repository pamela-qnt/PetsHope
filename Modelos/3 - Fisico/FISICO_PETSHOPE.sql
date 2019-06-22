-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE nf_compra (
data_compra date,
id_usuario int(11),
hora_compra time,
valor_compra decimal(10,2),
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE produto (
id_produto int(11) PRIMARY KEY AUTO_INCREMENT,
qtd_estoque int(11),
desc_produto varchar(300),
valor decimal(10,2),
desc_tipo_prod varchar(50)
);

CREATE TABLE animal (
nome_animal varchar(50),
id_animal int(11) PRIMARY KEY AUTO_INCREMENT,
sexo char(1)
);

CREATE TABLE carrinho (
id_pedido int(11) PRIMARY KEY AUTO_INCREMENT, 
id_usuario int(11), 
data_pedido date, 
total_compra decimal(10,2),
FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);


CREATE TABLE especie_animal (
id_animal int(11),
desc_especie varchar(300),
FOREIGN KEY(id_animal) REFERENCES animal (id_animal)
);

CREATE TABLE usuario (
id_usuario int(11) PRIMARY KEY AUTO_INCREMENT,
nome_usuario varchar(100),
email varchar(100),
tel_contato int(11),
senha varchar(50),
desc_tipo_usuario varchar(50)
);

CREATE TABLE tipo_produto (
id_tipo_prod int(11) PRIMARY KEY AUTO_INCREMENT,
desc_tipo_prod varchar(50),
);

CREATE TABLE tipo_usuario (
id_tipo_usuario int(11), 
desc_tipo_usuario varchar(50)
);


//CREATE TABLE compra (
id_usuario int(11),
id_produto int(11),
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario),
FOREIGN KEY(id_produto) REFERENCES produto (id_produto)
);
