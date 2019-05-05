CREATE DATABASE login;
USE login;

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fullname` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

insert into 'user' ('fullname', 'username', 'password') values
    ('Anna Morais', 'annafmmorais@gmail.com', '12345678'),
    ('Pamela Quint', 'pamela.quint.ifc@gmail.com', '87654321'),
    ('Gabriel Báo', 'gabbao.63oli@gmail.com', '23456789');
