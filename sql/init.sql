CREATE DATABASE test;
 use test;
CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       firstname VARCHAR(30) NOT NULL,
                       lastname VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       age INT(3),
                       location VARCHAR(50),
                       date TIMESTAMP
);

use hotel;
    create table booking(
        id int(11) unsigned auto_increment primary key,
        date timestamp,
        number int(30) not null,
        roomtype varchar(30) not null,
        duration int(365) not null
    );
create table guest(
    id int(11) unsigned auto_increment primary key,
    userFname varchar(30) not null,
    userLname varchar(30) not null,
    userNum int(50) not null,
    userAddress varchar(255) not null
);
