create database blog;

use blog;

create table posts(
    id int(11) auto_increment,
    title varchar(255) not null,
    body TEXT,
    author varchar(255) not null,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);



SELECT * FROM posts;
INSERT INTO posts(title, body, author, date_created) VALUES ('Post One','THis is Post One','Winstone Maquiz', now());