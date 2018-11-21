drop database if exists testdb;
create database testdb;
use testdb;

create table users(
	user_id int primary key auto_increment,
	user_name vachar(255),
	passeord varchar(255),
);

insert into user values(1,"taro","123"),
insert into user values(2,"jiro","456"),
insert into user values(3,"hanako","789");

create table inquiry(
	name varchar(255),
	qtype varchar(255),
	body varchar(255)
);