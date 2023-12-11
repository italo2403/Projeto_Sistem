
create database teste;

use teste;

create table usuario(
id_usu int primary key auto_increment,
email varchar(150),
nome varchar(255), 
senha varchar(22),
confsenha varchar(22));

select * from usuario;