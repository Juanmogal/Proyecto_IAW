INSERT INTO jugador (nombre,apellidos,dni,fechanacimiento,telefono,direccion) VALUES 
('Juan', 'Moreno Galbarro', '47426785A', '1997-09-05',675908260,'Carlos III,10'), 
('Daniel', 'Garcia Pelaez', '48974125B', '1997-04-10',636985220,'Segundo Centenario,54'), 
('Higinio David', 'Jurado Palomino', '53210879J', '1997-11-04',652478930,'San Jacinto,93');


INSERT INTO entrenador (nombre,apellidos,dni,fechanacimiento,numerolicencia,telefono,direccion) VALUES 
('Juan Diego', 'Perez Jimenez', '12345678A', '1989-01-25',7778889990,654321987,'Betis,34'), 
('Jose Antonio', 'Gomez Garcia', '23456789B', '1983-02-14',8889990001,632145877,'Sierpes,4 izquierda'), 
('Higinio David', 'Jurado Palomino', '345678901C', '1969-10-11',9990001112,666252514,'San Jacinto,44');

INSERT INTO equipo (nombre) VALUES 
('Alevin masculino'),
('Cadete femenino'),
('Juvenil masculino');

INSERT INTO temporada (nombre,fechainicio,fechafin) VALUES 
('2016/2017','2016-04-23','2017-02-16'),
('2017/2018','2017-03-29','2018-03-01'),
('2018/2019','2018-04-11','2019-02-22');

INSERT INTO pertenece (idjugador,idtemporada,idequipo,numerocamiseta) VALUES
(1,2,3,5), 
(2,3,1,8),  
(3,1,2,10);

INSERT INTO entrena (idtemporada,identrenador,idequipo) VALUES
(1,2,3), 
(3,1,2),  
(2,3,1);

select * from temporada;
select * from equipo;
select * from jugador;
select * from entrenador;
select * from pertenece;
select * from entrena;
