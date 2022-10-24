drop database if exists projetvoyages;
create database projetvoyages;
use projetvoyages;

create table client 
(
    idc int(5) not null auto_increment,
    surname_c varchar(20) not null,
    name_c varchar (20) not null,
    tel_c varchar (15) not null, 
    mail_c varchar (40) not null,
    dof_c date not null,
    number_c varchar (15) not null,
    city_c varchar (30) not null,
    zip_c varchar (10) not null,
    country_c varchar(30) not null,
    password_c varchar(255) not null,
    primary key (idc)

);

create table reservation
(
    idr int (5) not null auto_increment,
    idc int(5) not null,
    destination_r varchar (30) not null,
    date_debr date not null,
    date_finr date not null,
    tarif_r decimal (10,2),
    idh int (5) not null,
    nbchildren_r int(2) not null,
    nbroom_r int (2) not null,
    primary key(idr),
    foreign key (idc) references client(idc),
    foreign key (idh) references hotel(idh)
);

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
    primary key (idh)
);

create table  trip

(
    idt int (5) not null auto_increment,
    country_t varchar (20) not null,
    city_t varchar(10) not null,
    duree_t varchar(20),
    primary key (idt)
    


);
insert into trip values (null,"Espagne","Barcelona","10 Jours ","Barcelone a tout pour votre escapade citadine idéale en Espagne. Cette ville catalane possède une grande richesse architecturale, d'art et de culture (musées) et n'est donc pas pour rien la ville la plus visitée d'Espagne, avec 7,5 millions de visiteurs par an.Barcelone est une ville remplie de musées, de parcs, de bâtiments de Gaudi et d'autres centres d'intérêt. Barcelone a davantage à offrir que les points forts que sont la Sagrada Familia, le Parc Guell et le Camp Nou. ","1.Sagrada Familia 2.Parc Guell 3.Camp Nou 4. CasaMilla 'La Pedrera'");



