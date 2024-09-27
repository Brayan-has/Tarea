CREATE  clinic;

USE clinic;

CREATE TABLE usuarios (

  id int primary key AUTO_INCREMENT,
    nombre VARCHAR(30),
    contraseña VARCHAR(255)

);

INSERT INTO usuarios(nombre,apellido,contraseña)
VALUES ('andres','123');