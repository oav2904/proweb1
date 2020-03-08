
create table users (

	id serial primary key,
	f_name text not null,
	s_name text default ' ',
	f_lastname text not null,
	s_lastname text default ' ',
	email text not null,
	password text not null,
	birthday date not null,
	img bytea not null,
	about text not null,
	position text not null,
	location text not null,
	unique(email)
);

create table skills (
	id serial primary key,
	name text not null,
	value int not null,
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (name, id_user)
);

create table experience(

	id serial primary key,
	company text not null,
	position text not null,
	description text not null,
	timeperiod text not null,
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (company, timeperiod)
);	


create table projects (

	id serial primary key,
	name text not null,
	platform text not null,
	description text not null,
	url text default '',
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (name, id_user)

);

create table education (

	id serial primary key,
	degree text not null,
	timeperiod text not null,
	description text not null,
	website text default '',
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (degree, id_user)
);

create table knowleadge (
	id serial primary key,
	name text not null,
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (name, id_user)
);

create table hobbies (
	id serial primary key,
	name text not null,
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (name, id_user)
);

create table contributions (

	id serial primary key,
	name text not null,
	description text not null,
	url text default '',
	id_user int not null,
	FOREIGN KEY (id_user) REFERENCES users (id),
	unique (name, id_user)
);
