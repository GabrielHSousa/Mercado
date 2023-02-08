create database Mercado;
use Mercado;

create table Controle(
produto varchar(50) not null,
quantidade varchar (50) not null,
valor varchar (50) not null

) Engine = InnoDB;

create table Endereco(
codigo int not null auto_increment primary key, 
rua varchar(100) not null,
numero int(50) not null,
cep varchar(50) not null
) Engine = InnoDB;

create table Cliente(	
codigo int not null auto_increment primary key, 
nome varchar(100) not null,
telefone varchar(30) not null,
endereco varchar(50) not null,
cpf varchar(11) not null,
quantidade varchar(30) not null,
valorTotal varchar(30) not null

) Engine = InnoDB;

create table Funcionario(	
codigo int primary key auto_increment not null,
nome varchar(150) not null,
endereco varchar(150) not null,
telefone varchar(11) not null,
sexo varchar(20) not null,
funcao varchar(150) not null,
salario decimal(10,2) not null
)Engine = InnoDB;

create table Atualizar(	
codigo int primary key auto_increment not null,
novoDado varchar(150) not null,
nomeTabela varchar(150) not null

)Engine = InnoDB;

create table Consultar(	
codigo int primary key auto_increment not null,
nomeTabela varchar(150) not null

)Engine = InnoDB;

create table Excluir(	
codigo int primary key auto_increment not null,
nomeTabela varchar(150) not null

)Engine = InnoDB;

select * from Funcionario;


drop table Atualizar;