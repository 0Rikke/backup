create DATABASE arquivo;
use arquivo;

drop table if exists categories, tasks;

create table categories(
    id int not null auto_increment,
    id_user int not null,
    projectName varchar(30) not null,
    mercado binary not null,
    home binary not null,
    work binary not null,

    PRIMARY KEY(id)

);

create table tasks(
    id int auto_increment not null,
    id_user int not null,
    categories enum ('home','shop','work'),
    nome varchar(100) not null,
    priority enum('low','medium','high'),
    PRIMARY KEY (id)

);


insert into categories (id_user,mercado,home,work) value(15,1,0,0),
(16,1,1,0),
(17,1,0,1),
(18,1,1,1)

insert into tasks (nome,priority,categories,id_user) values
('shop1', 'high','home',1),
('shop2', 'medium','shop',2),
('work1', 'low','work',3),
('work2', 'high','home',3),
('home1', 'medium','shop',2),
('home1', 'low','work',1)
