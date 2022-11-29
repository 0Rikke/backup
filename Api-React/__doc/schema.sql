create DATABASE arquivo;
use arquivo;


create table categories(
    id int not null auto_increment,
    id_user int not null,
    mercado binary not null,
    home binary not null,
    work binary not null,
    
    PRIMARY KEY(id),
    -- FOREIGN KEY (id_user) REFERENCES user(id)
);

create table tasks(
    id int auto_increment not null,
    nome 
)

insert into categories (id_user,mercado,home,work) value(15,1,0,0),
(16,1,1,0),
(17,1,0,1),
(18,1,1,1)