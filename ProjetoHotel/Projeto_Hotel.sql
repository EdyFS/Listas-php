create database Projeto_hotel;

use Projeto_hotel;

create table Hospede(
id_hospede int auto_increment not null,
nome_hospede varchar(45),
telefone varchar(45),
data_checkin date,
primary key (id_hospede)
);

create table Quartos(
id_quarto int auto_increment not null,
numero_quarto int,
tipo varchar(45),
preco_por_noite double,
primary key (id_quarto)
);

create table Reserva(
id_reserva int auto_increment not null,
data_reserva date,
id_hospede int,
id_quarto int,
primary key (id_reserva),
foreign key (id_hospede) references Hospede (id_hospede),
foreign key (id_quarto) references Quartos (id_quarto)
);

create table Servicos(
id_servico int auto_increment not null,
nome_servico varchar(45),
custo double,
id_reserva int,
primary key (id_servico),
foreign key (id_reserva) references Reserva (id_reserva)
);

select * from Hospede;
select * from Quartos;
select id_reserva, data_reserva, id_hospede, id_quarto from Reserva r inner join Hospede h on r.id_hospede = h.id_hospede inner join Quartos q on r.id_quarto = q.id_quarto;
alter table Reserva change id_hospede hospede int;
alter table Reserva change id_quarto quarto int;
select * from Reserva;
alter table Servicos change id_reserva reserva int;
select * from Servicos;