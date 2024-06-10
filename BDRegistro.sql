CREATE DATABASE BDRegistro; --Crea una base de datos 

BDRegistro
--Crear tabla 
CREATE TABLE usuarios (
  id INT (11) AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  correo VARCHAR(100),
  contrasenia VARCHAR(100)
);

CREATE TABLE mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    paisc VARCHAR(255),
    comentarios TEXT
);


busqueda de datos 

SELECT * FROM usuarios; 

SELECT nombre FROM usuarios;

SELECT nombre, apellido FROM usuarios; 
