-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cbmontellano
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `entrena`
--

DROP TABLE IF EXISTS `entrena`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrena` (
  `idtemporada` int(11) unsigned NOT NULL DEFAULT '0',
  `identrenador` int(11) unsigned NOT NULL DEFAULT '0',
  `idequipo` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idtemporada`,`identrenador`,`idequipo`),
  KEY `identrenador` (`identrenador`),
  KEY `idequipo` (`idequipo`),
  CONSTRAINT `entrena_ibfk_1` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entrena_ibfk_2` FOREIGN KEY (`identrenador`) REFERENCES `entrenador` (`identrenador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entrena_ibfk_3` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrena`
--

LOCK TABLES `entrena` WRITE;
/*!40000 ALTER TABLE `entrena` DISABLE KEYS */;
INSERT INTO `entrena` VALUES (3,1,13),(3,8,14),(2,9,17),(3,10,18);
/*!40000 ALTER TABLE `entrena` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entrenador`
--

DROP TABLE IF EXISTS `entrenador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entrenador` (
  `identrenador` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `numerolicencia` int(10) NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`identrenador`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrenador`
--

LOCK TABLES `entrenador` WRITE;
/*!40000 ALTER TABLE `entrenador` DISABLE KEYS */;
INSERT INTO `entrenador` VALUES (1,'Juan Diego','Perez Jimenez','12345678A','1989-01-25',2147483647,'654321987','Betis,34','../img/entrenadores/jd.jpeg'),(8,'Sergio ','Scariolo','12345678A','1963-04-06',12345,'669885740','Calle triana','../img/entrenadores/entrenador1.jpg'),(9,'Pablo','Laso','12345678B','1958-11-01',23456,'669330254','Madrid','../img/entrenadores/entrenador2.jpg'),(10,'Alfonso Alonso','Blanco','12345678C','1971-01-21',34567,'632587410','Barcelona','../img/entrenadores/entrenador3.jpg');
/*!40000 ALTER TABLE `entrenador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo` (
  `idequipo` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idequipo`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (13,'Alevin Masculino','../img/equipos/equipo1.jpg'),(14,'Infantil Masculino','../img/equipos/equipo2.jpg'),(15,'Infantil Femenino','../img/equipos/equipo3.jpg'),(16,'Cadete Masculino','../img/equipos/equipo4.jpg'),(17,'Juvenil Masculino','../img/equipos/equipo5.png'),(18,'Senior Masculino','../img/equipos/equipo6.jpg'),(19,'Senior Femenino','../img/equipos/equipo7.jpg');
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jugador`
--

DROP TABLE IF EXISTS `jugador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugador` (
  `idjugador` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `foto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idjugador`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugador`
--

LOCK TABLES `jugador` WRITE;
/*!40000 ALTER TABLE `jugador` DISABLE KEYS */;
INSERT INTO `jugador` VALUES (12,'Juan','Moreno Galbarro','89765412A','1997-05-05','613558741','Calle Tambre, 3','../img/jugadores/jugador1.png'),(13,'Ismael','Gomez Luque','23987651C','1998-08-02','600000000','los palacios y villafranca','../img/jugadores/jugador2.png'),(16,'Manuel ','Garcia Lebrato','58967412H','1995-05-26','633200589','Mairena','../img/jugadores/jugador3.png'),(17,'Ivan','Triguero Curado','55896203D','1999-02-09','675986231','los palacios y villafranca','../img/jugadores/jugador4.png'),(18,'Carlos ','De Cires','12349876F','1992-09-08','669332001','Hontoria del Pinar','../img/jugadores/jugador5.png');
/*!40000 ALTER TABLE `jugador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pertenece`
--

DROP TABLE IF EXISTS `pertenece`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pertenece` (
  `idjugador` int(11) unsigned NOT NULL DEFAULT '0',
  `idtemporada` int(11) unsigned NOT NULL DEFAULT '0',
  `idequipo` int(11) unsigned NOT NULL DEFAULT '0',
  `numerocamiseta` int(2) DEFAULT NULL,
  PRIMARY KEY (`idjugador`,`idtemporada`,`idequipo`),
  KEY `idtemporada` (`idtemporada`),
  KEY `idequipo` (`idequipo`),
  CONSTRAINT `pertenece_ibfk_1` FOREIGN KEY (`idjugador`) REFERENCES `jugador` (`idjugador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pertenece_ibfk_2` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pertenece_ibfk_3` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pertenece`
--

LOCK TABLES `pertenece` WRITE;
/*!40000 ALTER TABLE `pertenece` DISABLE KEYS */;
INSERT INTO `pertenece` VALUES (12,3,13,10),(13,2,14,5),(16,1,17,8),(17,3,18,13),(18,3,18,9);
/*!40000 ALTER TABLE `pertenece` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temporada`
--

DROP TABLE IF EXISTS `temporada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temporada` (
  `idtemporada` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  PRIMARY KEY (`idtemporada`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temporada`
--

LOCK TABLES `temporada` WRITE;
/*!40000 ALTER TABLE `temporada` DISABLE KEYS */;
INSERT INTO `temporada` VALUES (1,'2016/2017','2016-04-23','2017-02-16'),(2,'2017/2018','2017-03-29','2018-03-01'),(3,'2018/2019','2018-04-11','2019-02-22');
/*!40000 ALTER TABLE `temporada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `telefono` varchar(9) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (7,'juan','moreno','123456789','2019-01-09','666666666','jdsjdfsdf','admin','827ccb0eea8a706c4c34a16891f84e7b','admin@admin'),(8,'juan','moreno','45855554a','2019-03-30','666666666','calle triana','usuario','827ccb0eea8a706c4c34a16891f84e7b','juan@gmail.com'),(11,'manue','garcia','329439','2019-03-09','666666666','calle triana','usuario','827ccb0eea8a706c4c34a16891f84e7b','lebrato@gmail'),(12,'ivancito','gomez','45855554a','2019-03-22','666666663','calle betis','admin','827ccb0eea8a706c4c34a16891f84e7b','ivan@gmail'),(14,'carmen','carmen','65854485v','2019-01-01','5585666','sssss','usuario','827ccb0eea8a706c4c34a16891f84e7b','carmen@carmen');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-06 12:38:09
