Como fazer nosso projeto funcionar em outro computador:

Fazer download e extrair a pasta do trabalho em sua pasta public_html/htdocs;
Abrir a pasta config.php e arrumar o usuário e senha do mysql;
Criar uma base de dados com o nome de ‘petsHope’ no phpMyAdmin;
Inserir nessa base seguintes os dados:

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
comprador int(8) NOT NULL,
produtos int(8) NOT NULL,
numero_cartao int(16) NOT NULL,
codigo_seguranca int(3) NOT NULL,
agencia varchar(20) NOT NULL,
nome_dono_cartao varchar(50) NOT NULL,
validade date NOT NULL,
id_produto int(8) NOT NULL
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
qtd_produto_est int(4) NOT NULL
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
('Anna Morais', 'annafmmorais@gmail.com', 997160345, 12345678),
('Pamela Quint', 'pamela.quint.ifc@gmail.com', 997773555, 12345678), 
('Gabriel Báo', 'gabbao63oli@gmail.com', 984744159, 87654321),
('Amábile Kniss', 'amabilekniss1@gmail.com', 997363660, 76543210);

insert into usuario_admin (nome_adm, senha) values 
('Anna_Morais', 'anna2401'),
('Pamela_Quint', 'pamela1410');


