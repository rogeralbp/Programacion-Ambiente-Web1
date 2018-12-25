drop table usuarios if exists;
drop table vehiculos if exists;

create table vehiculos(
  id serial primary key,
  marca varchar not null,
  modelo int not null,
  kilometraje int not null
);

create table usuarios(
	id serial primary key,
	email varchar not null,
	password varchar not null
);

INSERT INTO usuarios(email, password) VALUES ('juanito@utn.ac.cr', md5('12345'));

select * from usuarios;

