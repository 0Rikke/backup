create DATABASE arquivo;
use arquivo;

/*essa table aqui ja tem no laravel*/
create table user();
create table categories(
    id int not null auto_increment,
    id_user int not null,
    mercado binary not null,
    home binary not null,
    work binary not null,
    
    PRIMARY KEY(id),
    FOREIGN KEY (id_user) REFERENCES user(id)
);
