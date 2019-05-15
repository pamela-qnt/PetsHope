-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE animais  (
nome_doador varchar(50) NOT NULL,
especie varchar(20),
vacinado int(1),
sexo int(1),
nome_animal varchar(50) NOT NULL,
id_animal  int(8)  AUTO_INCREMENT PRIMARY KEY,
descricao varchar(80)
);

CREATE TABLE compra (
id_compra  int(8) AUTO_INCREMENT PRIMARY KEY,
id_comprador int(8),
numero_cartao int(16) NOT NULL,
codigo_seguranca int(3) NOT NULL,
validade date NOT NULL,
id_produto int(8),
FOREING KEY(id_comprador) REFERENCES usuario (id_usuario)
); 

CREATE TABLE usuario (
id_usuario int(8) AUTO_INCREMENT PRIMARY KEY,
nome varchar(50) NOT NULL,
email varchar(30) NOT NULL,
tel_contato int(11),
senha varchar(8) NOT NULL,
compra_efetuada int(16),
id_animal  int(8),
FOREIGN KEY(compra_efetuada) REFERENCES compra (id_compra),
FOREIGN KEY(id_animal ) REFERENCES animais  (id_animal)
);

CREATE TABLE usuario_admin (
id_admin int(8) AUTO_INCREMENT PRIMARY KEY,
nome_adm varchar(50) NOT NULL,
senha varchar(8) NOT NULL,
id_produto  int(8) NOT NULL,
id_animal  int(8) NOT NULL,
FOREIGN KEY(id_animal ) REFERENCES animais  (id_animal)
);

CREATE TABLE produtos (
id_produto  int(8) AUTO_INCREMENT PRIMARY KEY,
nome_produto varchar(50) NOT NULL, 
descricao varchar(80),
preco decimal(6) NOT NULL,
qtd_produto_est int(4) NOT NULL,
img_produto varchar(100)
);

ALTER TABLE compra ADD FOREIGN KEY(id_produto ) REFERENCES produtos (id_produto);
ALTER TABLE usuario_admin ADD FOREIGN KEY(id_produto ) REFERENCES produtos (id_produto);




insert into produtos (nome_produto, preco, qtd_produto_est) values
('Guia com amortecedor para cachorros', 125.00, 5),
('Guia para cachorros Salina', 79.00, 10),
('Guia para cachorros Florida', 79.00, 4),
('Guia para cachorros Patagonia', 79.00, 6), 
('Guia para cachorros Game of Thrones', 99.00, 3),
('Coleira para cachorros Florida', 45.00, 2), 
('Coleira para cachorros Salina', 45.00, 7),
('Coleira para cachorros Patagonia', 45.00, 5),
('Coleira para cachorros Donna', 45.00, 6),
('Coleira para cachorros Neopro Verde Limao', 59.00, 3),
('Comedouro para cachorros Zig Zag', 59.00, 10),
('Comedouro para cachorros Zee.Bowl Preto', 70.00, 4),
('Comedouro para cachorros Brooklyn', 80.00, 4),
('Comedouro para cachorros Old School', 59.00, 8),
('Comedouro para cachorros Zee.Bowl Branco', 70.00, 4);

insert into usuario (nome, email, tel_contato, senha) values
('Gabriel B�o', 'gabbao63oli@gmail.com', 984744159, 87654321),
('Am�bile Kniss', 'amabilekniss1@gmail.com', 997363660, 76543210),
('Michael L. Deluna', 'MichaelLDeluna@armyspy.com', 25223344, 'iugh9XohT'), 
('Carla Castro Alves', 'CarlaCastroAlves@teleworm.us', 51356843, 'iSaey9itoo'),
('Diogo Ribeiro Carvalho', 'DiogoRibeiroCarvalho@dayrep.com',  78696077, 'Eeb8JieG3eZ'),
('Sarah Dias Alves', 'SarahDiasAlves@armyspy.com', 51908989, 'oaj8Aeyie'),
('Gabrielly Almeida Souza', 'GabriellyAlmeidaSouza@dayrep.com', 54908442);


insert into usuario_admin (nome_adm, senha) values 
('Anna Morais', 12345678),
('Pamela Quint',12345678);

insert into compra (numero_cartao, codigo_seguranca, validade) values 
(4508 9984 8857 4231, 208, 12/2022),
(4916 6805 3836 3163, 562, 12/2020), 
(5591 9374 2956 1217, 904, 03/2020),
(5168 1069 9527 0776, 587, 02/2022), 
(5546 1846 0161 7618, 697, 05/2020), 
(5296 6632 6278 6533, 728, 03/2024), 
(4929 8514 4570 9211, 141, 04/2023), 
(4916 9314 5771 0581, 968, 10/2020), 
(5336 2664 5619 3490, 661, 10/2024), 
(4916 7944 3065 5152, 050, 05/2020);



  
