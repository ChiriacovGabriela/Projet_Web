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
    


)