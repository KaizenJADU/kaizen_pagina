drop database if exists kaizen;
create database kaizen;
use kaizen;

create table Usuario(idUsuario int not null auto_increment primary key,
        nombreUsuario varchar (50),email varchar(50),contra varchar(50));
        
select * from Usuario;
