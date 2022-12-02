-- Nombre de la Base de Datos

CREATE DATABASE id19950934_tienda_leanfrey;

--Uso de la Base de Datos

USE id19950934_tienda_leanfrey;

--Creación de las tablas

CREATE TABLE cliente(
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    documento VARCHAR(10) NOT NULL,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    fechaDeNacimiento DATE NOT NULL,
    direccion VARCHAR(60) NOT NULL,
    correo VARCHAR(45) NOT NULL,
    usuario VARCHAR(45) NOT NULL,
    contrasena VARCHAR(45) NOT NULL
);

CREATE TABLE admi(
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(45) NOT NULL,
    contrasena VARCHAR(45) NOT NULL
);

CREATE TABLE venta(
    idVenta INT(10) PRIMARY KEY AUTO_INCREMENT,
    cantidad INT(10) NOT NULL,
    precio DOUBLE(9,2)
);

CREATE TABLE facturaciontienda(
    idfacturacion INT(10) PRIMARY KEY AUTO_INCREMENT,
    cantidad INT(10) NOT NULL,
    precio_venta DOUBLE(9,2)
);

CREATE TABLE categoria(
    idCategoria INT(10) PRIMARY KEY AUTO_INCREMENT,
    nombre  VARCHAR(30) NOT NULL,
    descripcion TEXT
);

CREATE TABLE producto(
    id INT(10) PRIMARY KEY AUTO_INCREMENT,
    identificadorCategoria INT(10) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    precio DOUBLE (9,2) NOT NULL,
    stock INT(10) NOT NULL
);


-- Creación de las Foreing Key

ALTER TABLE producto ADD FOREIGN KEY(identificadorCategoria)
REFERENCES categoria(idCategoria);


-- Insertando información

INSERT INTO admi(usuario, contrasena)
VALUES('Frey','12345'),
('Lean', '12345');

INSERT INTO categoria(nombre, descripcion)
VALUES('Funko Pops','Figuras pequeñas de series, peliculas o videojuegos'),
('Figuras de Acción','Figuras de diferentes tamaños de series, peliculas o videojuegos'),
('Otros Acccesorios','Colecionables');

INSERT INTO producto(identificadorCategoria, nombre, precio, stock) 
VALUES ('1', 'Funko Pop Cell Full Power', '90000', '50'),
('1', 'Funko Pop Harry Potter', '74950', '50'),
('1', 'Funko Pop Moon Knight Personalidad de Steven', '125000', '50'), 
('1', 'Funko Pop Naruto & Sasuke Batalla Final', '250000', '50');

INSERT INTO producto(identificadorCategoria, nombre, precio, stock) 
VALUES ('2', 'Figura de Acción de Black Adam', '550000', '50'),
('2', 'Figura de Acción del personaje de Mortal Kombat', '475000', '50'),
('2', 'Figura de Acción de uno de los Zombies de los Videojuegos de Resident Evil', '315000', '50'), 
('2', 'Figura de la popular Serie de Star Wars', '398500', '50');

INSERT INTO producto(identificadorCategoria, nombre, precio, stock) 
VALUES ('3', 'Colección del Manga FullMetal Alchemist', '675500', '50'),
('3', 'Colección de anillos de Naruto Shippuden de la Organización Akatsuki', '985500', '50');