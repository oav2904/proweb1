
create table users (

	id serial primary key,
	f_name text not null,
	s_name text default ' ',
	f_lastname text not null,
	s_lastname text default ' ',
	email text not null,
	password text not null,
	birthday date not null,
	img bytea ,
	about text not null,
	position text not null,
	location text not null 
);