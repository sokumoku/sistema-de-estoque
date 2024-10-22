create table produtos (
id int auto_increment primary key,
nome varchar (100) not null, 
preco decimal (10, 2) not null,
descricao varchar (1000),
codigo_barras varchar (30),
imagem varchar (200) not null,
data_cadastro timestamp default current_timestamp
);