/*CREATE  clinic;*/

USE clinic;

CREATE TABLE usuarios (

  id int primary key AUTO_INCREMENT,
    nombre VARCHAR(30),
    contraseña VARCHAR(255)

);

INSERT INTO usuarios(nombre,apellido,contraseña)
VALUES ('andres','123');

CREATE TABLE productos(

id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(50),
descripción VARCHAR(255),
precio FLOAT
);