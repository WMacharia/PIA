USE ics_e;

CREATE TABLE uzerz(
    userId bigint(10) not null auto_increment,
    fullname varchar(50) not null default "",
    email varchar(50) not null default "",
    username varchar(50) not null default "",
    password varchar(60) not null default "",
    updated datetime() not null default current_timestamp() on update,
    created datetime() not null default current_timestamp(),
    genderId tinyint(1) not null default 0,
    roleId tinyint(1) not null default 0,
    UNIQUE KEY ('username'),
    UNIQUE KEY ('email'),
    PRIMARY KEY ('userId')
)