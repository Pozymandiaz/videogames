drop DATABASE if exists videogames;

CREATE DATABASE videogames;

USE videogames;

CREATE TABLE game(
    id tinyint unsigned primary key auto_increment,
    title varchar(50) not null,
    description text(200) not null,
    release_date DATE,
    poster VARCHAR(50) not null,
    price decimal(5,2)
)

insert into game (id,title,description,release_date,poster,price)
values  (null, "Destiny 2","meilleur jeu au monde", "2017-08-28","img/Destiny_2_(artwork).jpg",0),
        (null, "Warframe","space ninjas", "2013-03-25","img/warframe-metacard.png",0);