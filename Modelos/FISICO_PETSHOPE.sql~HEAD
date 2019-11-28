-- Gera��o de Modelo f�sico
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
estado varchar(100), 
cidade varchar(100), 
bairro varchar(100),
desc_tipo_logradouro varchar (300),
imagem_usuario varchar(200),
id_tipo_usuario_fk int(11),
FOREIGN KEY(id_tipo_usuario_fk) REFERENCES tipo_usuario (id_tipo_usuario)
);

CREATE TABLE cartao_usuario (
id_pagamento int(11) PRIMARY KEY AUTO_INCREMENT,
id_usuario_fk int(11),
num_cartao varchar(19),
validade_cartao varchar(7), 
FOREIGN KEY(id_usuario_fk) REFERENCES usuario (id_usuario)
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
id_compra int(11) PRIMARY KEY AUTO_INCREMENT,
data_compra date,
id_usuario int(11),
hora_compra time,
valor_compra decimal(10,2),
FOREIGN KEY(id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE carrinho (
id_carrinho int(11) PRIMARY KEY AUTO_INCREMENT,
id_usuario_fk int(11),
id_produto_fk int(11),
qtd_produto int(11),
valor_final decimal(10,2),
FOREIGN KEY (id_usuario_fk) REFERENCES usuario (id_usuario),
FOREIGN KEY (id_produto_fk) REFERENCES produto (id_produto)
);

insert into tipo_usuario (desc_tipo_usuario) values
('Comum'),
('Administrador');

insert into tipo_produto (desc_tipo_prod) values
('Coleira'),
('Guia'),
('Comedouro'),
('Para Morder'),
('Para Vestir'),
('Camas'),
('Peitorais');

insert into produto (nome_produto, valor, qtd_estoque, id_tipo_prod_fk, img_produto) values
('Guia com amortecedor para cachorros', 125.00, 5, 2, 'images/guia1.webp'),
('Guia para cachorros Salina', 79.00, 10, 2, 'images/guia_salina.webp'),
('Guia para cachorros Florida', 79.00, 4, 2, 'images/guia_florida.webp'),
('Guia para cachorros Patagonia', 79.00, 6, 2, 'images/guia_patagonia.webp'),
('Guia para cachorros Game of Thrones', 99.00, 3, 2, 'images/guia_game-of-thrones.webp'),
('Coleira para cachorros Florida', 45.00, 2, 1, 'images/coleira_florida.webp'),
('Coleira para cachorros Salina', 45.00, 7, 1, 'images/coleira_salina.webp'),
('Coleira para cachorros Patagonia', 45.00, 5, 1, 'images/coleira_patagonia.webp'),
('Coleira para cachorros Donna', 45.00, 6, 1, 'images/coleira_donna.webp'),
('Coleira para cachorros Neopro Verde Limao', 59.00, 3, 1, 'images/coleira_verde_limao.webp'),
('Comedouro para cachorros Zig Zag', 59.00, 10, 3, 'images/comedouro_zigzag.webp'),
('Comedouro para cachorros Zee.Bowl Preto', 70.00, 4, 3, 'images/comedouro_zeebow_preto.webp'),
('Comedouro para cachorros Brooklyn', 80.00, 4, 3, 'images/comedouro_brooklyn.webp'),
('Comedouro para cachorros Old School', 59.00, 8, 3, 'images/comedouro_old-school.webp'),
('Comedouro para cachorros Zee.Bowl Branco', 70.00, 4, 3, 'images/comedouro_zeebow_branco.webp'),
('Mordedor para cachorros Xaman', 59.90, 2, 4, 'images/mordedor_xaman.webp'),
('Mordedor para cachorros Seapork', 65.00, 4, 4, 'images/mordedor_seapork.webp'),
('Mordedor para cachorros Little Green Man Petisco', 99.00, 3, 4, 'images/mordedor_little_green.webp'),
('Mordedor para cachorros Bottle Buddy Tunga', 39.00, 5, 4, 'images/mordedor_buddy_tunga.webp'),
('Mordedor para cachorros Viserion', 79.00, 3, 4, 'images/mordedor_viserion.webp'),
('Moletom para cachorro Monstros SA - Sulley', 169.00, 5, 5, 'images/vestir_sulley.webp'),
('Moletom para cachorro Clássico', 99.00, 3, 5, 'images/vestir_moletom.webp'), 
('Camiseta para cachorro Área 51', 45.00, 5, 5, 'images/vestir_area51.webp'), 
('Camiseta para cachorro Toy Story', 75.00, 3, 5, 'images/vestir_toyStory.webp'),
('Camiseta para cachorro Camisa 10 Brasil', 45.00, 5, 5, 'images/vestir_camiseta_brasil.webp'),
('Cama para cachorro Clássica', 359.00, 5, 6, 'images/cama_classica.webp'),
('Cama para cachorro Colchonete Nirvana', 219.00, 3, 6, 'images/cama_colchonete.webp'), 
('Cama para cachorro Toy Story', 319.00, 2, 6, 'images/cama_toyStory.webp'), 
('Cama para cachorro Game Of Thrones', 319.00, 3, 6, 'images/cama_game_of_thrones.webp'), 
('Cama para cachorro Wave', 359.00, 2, 6, 'images/cama_wave.webp'), 
('Peitoral para cachorros FatBoy', 89.00, 5, 7, 'images/peitoral_fatboy.webp'), 
('Peitoral para cachorros Gotham', 89.00, 3, 7, 'images/peitoral_gotham.webp'),
('Peitoral para cachorros Vega', 89.00, 2, 7, 'images/peitoral_vega.webp'),
('Peitoral para cachorros Citrus', 79.00, 3, 7, 'images/peitoral_citrus.webp'),
('Peitoral para cachorros Wave', 89.00, 2, 7, 'images/peitoral_wave.webp');

insert into usuario (nome_usuario, email, tel_contato, senha, id_tipo_usuario_fk, imagem_usuario) values
('Gabriel Bao', 'gabbao63oli@gmail.com', 984744159, 87654321, 1, 'images/perfil_gabriel.jpg'),
('Amabile Kniss', 'amabilekniss1@gmail.com', 997363660, 76543210, 1, 'images/perfil_amabile.jpg'),
('Michael L. Deluna', 'MichaelLDeluna@armyspy.com', 25223344, 'iugh9Xoh', 1, 'images/perfil_michael.png'), 
('Carla Castro Alves', 'CarlaCastroAlves@teleworm.us', 51356843, 'iSaey9it', 1, 'images/perfil_carla.jpg'),
('Diogo Ribeiro Carvalho', 'DiogoRibeiroCarvalho@dayrep.com',  78696077, 'Eeb8JieG', 1, 'images/perfil_diogo.png'),
('Sarah Dias Alves', 'SarahDiasAlves@armyspy.com', 51908989, 'oaj8Aeyi', 1, 'images/perfil_sarah.jpg'),
('Gabrielly Almeida Souza', 'GabriellyAlmeidaSouza@dayrep.com', 54908442, 'hduaoGaj', 1, 'images/perfil_gabrielly.jpg'), 
('Enzo Fernandes Costa', 'EnzoFernandesCosta@armyspy.com', 995632147, 'Nasaethe', 1, 'images/perfil_enzo.jpg'),
('Luiz Rodrigues Correia', 'LuizRodriguesCorreia@rhyta.com', 945632178, 'Oozaefie', 1, 'images/perfil_luiz.jpg'),
('Bruno Araujo Martins', 'BrunoAraujoMartins@teleworm.us', 932146587, 'AhyeXae6', 1, 'images/perfil_bruno.jpg'),
('Tiago Carvalho Rodrigues', 'TiagoCarvalhoRodrigues@dayrep.com', 945876321, 'voviquae', 1, 'images/perfil_tiago.jpg'),
('Matheus Sousa Alves', 'MatheusSousaAlves@rhyta.com', 932587461, 'Iequ2quo', 1, 'images/perfil_tiago.jpg'),
('Vitor Santos Ribeiro', 'VitorSantosRibeiro@jourrapide.com', 924568734, 'Xeixoo8a', 1, 'images/perfil_vitor.jpg'),
('Emilly Goncalves Barbosa', 'EmillyGoncalvesBarbosa@jourrapide.com', 931578624, 'a5369842', 1, 'images/perfil_emilly.jpg'),
('Matilde Oliveira Goncalves', 'MatildeOliveiraGoncalves@teleworm.us', 915786324, 'sd72jdb3', 1, 'images/perfil_matilde.jpg'),
('Anna Francine Molinari de Morais', 'annafmmorais@gmail.com', 997160345, 12345678, 2, 'images/Anna.jpg'),
('Pamela Quint', 'pamela.quint.ifc@gmail.com', 997773555, 12345678, 2, 'images/Pamela.jpg'),
('Raissa Damasceno', 'raisssa.damasceno@gmail.com', 991745059, 12345678, 2, 'images/Raissa.jpg');


insert into cartao_usuario (num_cartao, id_usuario_fk, validade_cartao) values 
('1234.5678.9101.1121', 1, '12/2022'),
('2458.1965.6582.6578', 2, '08/2020'),
('1525.9854.6964.7584', 3, '02/2021'),
('7856.3215.2152.2552', 4,'03/2020'),
('2365.6984.9541.4154', 5,'07/2019'),
('5789.2146.6548.2310', 6,'05/2022'), 
('4563.6987.6203.1345', 7,'02/2020'),
('4569.8210.5464.5882', 8,'06/2022'),
('7236.5963.4521.2032', 9,'05/2023'),
('3659.9854.6215.0123', 10,'01/2023'),
('4562.3126.0213.5563', 11,'09/2020'),
('2369.5874.9621.2023', 12,'04/2019'),
('1234.5698.4568.3210', 13,'06/2020'),
('6842.1596.3574.1346', 14,'06/2019'),
('7894.5612.3021.7536', 15,'02/2021');
