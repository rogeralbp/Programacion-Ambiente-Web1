create table usuarios(
	id serial primary key,
	email varchar not null,
	password varchar not null
);

INSERT INTO usuarios(email, password) VALUES ('juanito@utn.ac.cr', md5('12345'));

select * from usuarios;

