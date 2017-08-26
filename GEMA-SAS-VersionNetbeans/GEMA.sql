create database GEMA;
use GEMA;

create table registro(
email varchar(50) not null,
nombre varchar(50),
apellido varchar(50),
codigo int(50)not null 
-- codigo int not null primary key 
-- No puede ser primary key porque el digito se 
-- repite dentro del archivo txt pero desde 
-- mi punto de vista esta es la llave primaria

);




