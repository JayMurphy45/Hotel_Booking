CREATE DATABASE test;
 use test;
CREATE TABLE users (
                       id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       firstname VARCHAR(30) NOT NULL,
                       lastname VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       age INT(3),
                       location VARCHAR(50),
                       date TIMESTAMP
);
create database hotel;
use hotel;
    create table booking(
        book_ID int(30) unsigned auto_increment primary key,
        book_date timestamp foreign key,
        num_people int(30) not null,
        room_type varchar(30) not null,
        book_duration int(365) not null
    );
create table customer(
    cust_ID int(30) unsigned auto_increment primary key,
    cust_Fname varchar (30) not null foreign key,
    cust_Lname varchar(30) not null,
    cust_num int(30) not null,
    cust_address varchar(255) not null
);
create table staff(
    staff_ID int(30) unsigned auto_increment primary key,
    staff_Fname varchar(30) not null foreign key,
    staff_Lname varchar(30) not null
);
create table manager(
    admin_ID int(30) unsigned auto_increment primary key,
    admin_Fname varchar(30) not null foreign key,
    admin_Lname varchar(30) not null,
    admin_access varchar(255)
);
create table orders(
    orders_ID int(11) unsigned auto_increment primary key,
    pay_method varchar(255) foreign key,
    pay_amount double not null,
    pay_date int not null
);
create table room(
    room_ID int(30) unsigned auto_increment primary key ,
    room_avail varchar(255) not null ,
    room_code int(30) not null ,
    room_type varchar(255) not null
);

