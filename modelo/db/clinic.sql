CREATE DATABASE clinic;

USE clinic;

CREATE TABLE usuarios ()
{
    id int primary key AUTO_INCREMENT,
    nombre VARCHAR(30),
    apellido VARCHAR(30),
    contraseña VARCHAR(255)
}

INSERT INTO usuarios(nombre,apellido,contraseña)
VALUES ('andres','Juarez','123');