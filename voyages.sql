drop database if exists projetvoyage;
create database projetvoyage; 
use projetvoyage;

create table hotel 
(
    idh int (5) not null auto_increment,
    name_h varchar(20) not null,
    country_h varchar (20) not null,
    city_h varchar(20) not null,
    zip_h varchar(10) not null,
    mail_h varchar(20) not null,
    number_h varchar(20) not null,
    type_h varchar (10) not null,
    capacity_h varchar (10) not null,
    primary key (idh),
);

create table  trip

(
    idt int (5) not null auto_increment,
    country_t varchar (20) not null,
    city_t varchar(10) not null,
    duree_t varchar(20),
    descriptiv varchar(255),
    activity varchar(255),
    primary key (idt),

);
insert into proprietaire values (null,"Espagne","Barcelona","10 Jours ","Barcelone a tout pour votre escapade citadine idéale en Espagne. Cette ville catalane possède une grande richesse architecturale, d'art et de culture (musées) et n'est donc pas pour rien la ville la plus visitée d'Espagne, avec 7,5 millions de visiteurs par an.Barcelone est une ville remplie de musées, de parcs, de bâtiments de Gaudi et d'autres centres d'intérêt. Barcelone a davantage à offrir que les points forts que sont la Sagrada Familia, le Parc Guell et le Camp Nou. ","1.Sagrada Familia 2.Parc Guell 3.Camp Nou 4. CasaMilla 'La Pedrera'");

