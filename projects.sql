create table projects(
	title varchar(50) not null,
	money int,
	distime timestamp,
	period varchar(10),
	state boolean not null,
	description text not null
);

insert into projects values("我的项目",1000,null,"1个月",false,"做一些东西吧");

create table admin(
	name text not null,
	password text not null
);