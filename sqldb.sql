CREATE DATABASE topicos
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'Spanish_Spain.1252'
    LC_CTYPE = 'Spanish_Spain.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

CREATE TABLE registro(
	id serial primary key,
	nombre varchar(50) NOT NULL,
	correo varchar(100) NOT NULL,
	contrasena varchar(250) NOT NULL,
	celular varchar(8) NOT NULL,
	edad smallint NOT NULL
);