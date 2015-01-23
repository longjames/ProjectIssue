create table projects(
	id int primary key not null auto_increment,
	title varchar(50) not null,
	money int,
	distime timestamp,
	period varchar(10),
	description text not null
);

insert into projects values(null,"我的项目",1000,null,"1个月","做一些东西吧");

create table admin(
	name text not null,
	password text not null
);