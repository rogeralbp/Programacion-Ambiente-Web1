drop table usuarios if exists;
drop table vehiculos if exists;

create table vehiculos(
  id serial primary key,
  marca varchar not null,
  modelo int not null
);

create table usuarios(
  id serial primary key,
  email varchar not null,
  password varchar not null
);

create table ventas(
	id serial primary key,
  usuario_id integer not null,
  fecha timestamp without time zone not null default now(),
  monto double precision not null
);

ALTER TABLE ventas
ADD CONSTRAINT fk_venta_usuario
foreign key (usuario_id)
references usuarios(id);


INSERT INTO usuarios(email, password) VALUES ('juanito@utn.ac.cr', md5('12345'));

select * from usuarios;

