-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE TABLE animal (
id_animal int(11) PRIMARY KEY AUTO_INCREMENT,
nome_animal varchar(50),
sexo char(1)
);

CREATE TABLE especie_animal (
id_animal int(11),
desc_especie varchar(300),
FOREIGN KEY(id_animal) REFERENCES animal (id_animal)
);

CREATE TABLE tipo_usuario (
id_tipo_usuario int(11) PRIMARY KEY AUTO_INCREMENT, 
desc_tipo_usuario varchar(50)
);

CREATE TABLE usuario (
id_usuario int(11) PRIMARY KEY AUTO_INCREMENT,
nome_usuario varchar(100),
email varchar(100),
tel_contato int(11),
senha varchar(50),
id_tipo_usuario int(11),
FOREIGN KEY(id_tipo_usuario) REFERENCES tipo_usuario (id_tipo_usuario)
);

CREATE TABLE tipo_produto (
id_tipo_prod int(11) PRIMARY KEY AUTO_INCREMENT,
desc_tipo_prod varchar(50)
);

CREATE TABLE produto (
id_produto int(11) PRIMARY KEY AUTO_INCREMENT,
nome_produto varchar(100),
qtd_estoque int(11),
desc_produto varchar(300),
valor decimal(10,2),
img_produto varchar(200),
id_tipo_prod_fk int(11), 
FOREIGN KEY(id_tipo_prod_fk) REFERENCES tipo_produto (id_tipo_prod)
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