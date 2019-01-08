CREATE DATABASE cbmontellano;
 

CREATE TABLE jugador (
	idjugador int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    dni varchar(9) NOT NULL,
    fechanacimiento date NOT NULL,
    telefono varchar(9),
    direccion varchar(100)
    
    );
    
CREATE TABLE entrenador (
	identrenador int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    dni varchar(9) NOT NULL,
    fechanacimiento date NOT NULL,
    numerolicencia int(10) NOT NULL,
    telefono varchar(9),
    direccion varchar(100)
    
    );

CREATE TABLE equipo (
	idequipo int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL
    
    );

CREATE TABLE temporada (
	idtemporada int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    fechainicio date NOT NULL,
    fechafin date NOT NULL
    
    );
CREATE TABLE entrena (
	idtemporada int(11) UNSIGNED ,
    identrenador int(11) UNSIGNED ,
    idequipo int(11) UNSIGNED ,
	PRIMARY KEY(idtemporada,identrenador,idequipo),
    FOREIGN KEY (idtemporada) REFERENCES temporada(idtemporada),
    FOREIGN KEY (identrenador) REFERENCES entrenador(identrenador),
    FOREIGN KEY (idequipo) REFERENCES equipo(idequipo)
    );
CREATE table pertenece (
	idjugador int(11) UNSIGNED,
    idtemporada int(11) UNSIGNED,
    idequipo int(11) UNSIGNED,
    numerocamiseta int(2),
    PRIMARY KEY(idjugador,idtemporada,idequipo),
    FOREIGN KEY (idjugador) REFERENCES jugador(idjugador),
    FOREIGN KEY (idtemporada) REFERENCES temporada(idtemporada),
    FOREIGN KEY (idequipo) REFERENCES equipo(idequipo)
    
);
    
CREATE TABLE usuario (
	idusuario int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nombreusuario varchar(50) NOT NULL,
    password varchar(128) NOT NULL,
    tipo varchar(50) NOT NULL
    
);

