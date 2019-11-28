-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE TABLE tipo_usuario (
id_tipo_usuario int(11) PRIMARY KEY AUTO_INCREMENT, 
desc_tipo_usuario varchar(50)
);

CREATE TABLE tipo_produto (
id_tipo_prod int(11) PRIMARY KEY AUTO_INCREMENT,
desc_tipo_prod varchar(50)
);

CREATE TABLE usuario (
id_usuario int(11) PRIMARY KEY AUTO_INCREMENT,
nome_usuario varchar(100),
email varchar(100),
tel_contato int(11),
senha varchar(50),
estado varchar(200),
cidade varchar(200),
bairro varchar(200),
desc_tipo_logradouto varchar(300),
id_tipo_usuario int(11),
FOREIGN KEY(id_tipo_usuario) REFERENCES tipo_usuario (id_tipo_usuario)
);

CREATE TABLE cartao_usuario (
id_pagamento int(11) PRIMARY KEY AUTO_INCREMENT,
id_usuario int(11),
num_cartao varchar(19),
nome_propri_cartao varchar(100),
validade_cartao varchar(7), 
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE produto (
id_produto int(11) PRIMARY KEY AUTO_INCREMENT,
nome_produto varchar(100),
qtd_estoque int(11),
desc_produto varchar(300),
valor decimal(10,2),
img_produto varchar(200),
id_tipo_prod int(11), 
FOREIGN KEY(id_tipo_prod) REFERENCES tipo_produto (id_tipo_prod)
);

CREATE TABLE nf_compra (
data_compra date,
id_usuario int(11),
hora_compra time,
valor_compra decimal(10,2),
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE carrinho (
id_pedido int(11) PRIMARY KEY AUTO_INCREMENT, 
id_usuario int(11), 
data_pedido date, 
total_compra decimal(10,2),
FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);


insert into produto (nome_produto, valor, qtd_estoque, id_tipo_prod_fk) values
('Guia com amortecedor para cachorros', 125.00, 5, 2),
('Guia para cachorros Salina', 79.00, 10, 2),
('Guia para cachorros Florida', 79.00, 4, 2),
('Guia para cachorros Patagonia', 79.00, 6, 2), 
('Guia para cachorros Game of Thrones', 99.00, 3, 2),
('Coleira para cachorros Florida', 45.00, 2, 1), 
('Coleira para cachorros Salina', 45.00, 7, 1),
('Coleira para cachorros Patagonia', 45.00, 5, 1),
('Coleira para cachorros Donna', 45.00, 6, 1),
('Coleira para cachorros Neopro Verde Limao', 59.00, 3, 1),
('Comedouro para cachorros Zig Zag', 59.00, 10, 3),
('Comedouro para cachorros Zee.Bowl Preto', 70.00, 4, 3),
('Comedouro para cachorros Brooklyn', 80.00, 4, 3),
('Comedouro para cachorros Old School', 59.00, 8, 3),
('Comedouro para cachorros Zee.Bowl Branco', 70.00, 4, 3);

insert into usuario (nome_usuario, email, tel_contato, senha) values
('Gabriel Báo', 'gabbao63oli@gmail.com', 984744159, 87654321),
('Amábile Kniss', 'amabilekniss1@gmail.com', 997363660, 76543210),
('Michael L. Deluna', 'MichaelLDeluna@armyspy.com', 25223344, 'iugh9Xoh'), 
('Carla Castro Alves', 'CarlaCastroAlves@teleworm.us', 51356843, 'iSaey9it'),
('Diogo Ribeiro Carvalho', 'DiogoRibeiroCarvalho@dayrep.com',  78696077, 'Eeb8JieG'),
('Sarah Dias Alves', 'SarahDiasAlves@armyspy.com', 51908989, 'oaj8Aeyi'),
('Gabrielly Almeida Souza', 'GabriellyAlmeidaSouza@dayrep.com', 54908442, 'hduaoGaj'), 
('Enzo Fernandes Costa', 'EnzoFernandesCosta@armyspy.com', 995632147, 'Nasaethe'),
('Luiz Rodrigues Correia', 'LuizRodriguesCorreia@rhyta.com', 945632178, 'Oozaefie'),
('Bruno Araujo Martins', 'BrunoAraujoMartins@teleworm.us', 932146587, 'AhyeXae6'),
('Tiago Carvalho Rodrigues', 'TiagoCarvalhoRodrigues@dayrep.com', 945876321, 'voviquae'),
('Matheus Sousa Alves', 'MatheusSousaAlves@rhyta.com', 932587461, 'Iequ2quo'),
('Vitor Santos Ribeiro', 'VitorSantosRibeiro@jourrapide.com', 924568734, 'Xeixoo8a'),
('Emilly Goncalves Barbosa', 'EmillyGoncalvesBarbosa@jourrapide.com', 931578624, 'a5369842'),
('Matilde Oliveira Goncalves', 'MatildeOliveiraGoncalves@teleworm.us', 915786324, 'sd72jdb3');

insert into animal (nome_animal, sexo) values 
('Tobi', 'M'),
('Belinha', 'F'),
('Luke', 'M'),
('Boris', 'M'),
('Barth', 'M'),
('Pingo', 'M'),
('Floquinho', 'F'),
('Bolota', 'F'),
('Berenice', 'F'),
('Abigail', 'F'),
('Colombo', 'M'),
('Ox', 'M'),
('Dusty', 'M'),
('Dora', 'F'),
('Armando', 'M');

insert into tipo_produto (desc_tipo_prod) values
('Coleira'),
('Guia'),
('Comedouro'),
('Para Morder'),
('Para Vestir'),
('Camas'),
('Peitorais');

insert into tipo_usuario (desc_tipo_usuario) values 
('Comum'), 
('Admin');

insert into cartao_usuario (num_cartao, nome_propri_cartao, validade) values 
('1234.5678.9101.1121', 'Gabriel Báo', '12/2022'),
('2458.1965.6582.6578', 'Amábile Kniss', '08/2020'),
('1525.9854.6964.7584', 'Michael L. Deluna', '02/2021'),
('7856.3215.2152.2552', 'Carla Castro Alves','03/2020'),
('2365.6984.9541.4154', 'Diogo Ribeiro Carvalho','07/2019'),
('5789.2146.6548.2310', 'Sarah Dias Alves','05/2022'), 
('4563.6987.6203.1345', 'Gabrielly Almeida Souza','02/2020'),
('4569.8210.5464.5882', 'Enzo Fernandes Costa','06/2022'),
('7236.5963.4521.2032', 'Luiz Rodrigues Correia','05/2023'),
('3659.9854.6215.0123', 'Bruno Araujo Martins','01/2023'),
('4562.3126.0213.5563', 'Tiago Carvalho Rodrigues','09/2020'),
('2369.5874.9621.2023', 'Matheus Sousa Alves','04/2019'),
('1234.5698.4568.3210', 'Vitor Santos Ribeiro','06/2020'),
('6842.1596.3574.1346', 'Emilly Goncalves Barbosa','06/2019'),
('7894.5612.3021.7536', 'Matilde Oliveira Goncalves','02/2021);