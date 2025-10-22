drop schema if exists `students_manager`;
create schema `students_manager`;
use`students_manager`;

create table `professor` (
  `email` varchar(100) not null primary key,
  `nome` varchar(100) not null,
  `password` varchar(20) not null
);

create table `sala` (
  `id` int not null primary key auto_increment,
  `nome` varchar(50) not null,
  `professor` varchar(100) not null,
  foreign key `fk_professor_sala` (`professor`) references `professor` (`email`),
  unique key `un_name` (`nome`, `professor`)
);

create table `aluno` (
  `email` varchar(100) not null primary key,
  `nome` varchar(100) not null,
  `sala` int not null,
  foreign key `fk_sala_aluno` (`sala`) references `sala` (`id`)
);


insert into `professor` values ("charles@senai.com", "Charles", "charles123");
