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
  CONSTRAINT `entrena_ibfk_1` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`),
  CONSTRAINT `entrena_ibfk_2` FOREIGN KEY (`identrenador`) REFERENCES `entrenador` (`identrenador`) ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT `entrena_ibfk_3` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrena`
--

LOCK TABLES `entrena` WRITE;
/*!40000 ALTER TABLE `entrena` DISABLE KEYS */;
INSERT INTO `entrena` VALUES (3,1,2),(1,2,3),(2,3,1);
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
  PRIMARY KEY (`identrenador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entrenador`
--

LOCK TABLES `entrenador` WRITE;
/*!40000 ALTER TABLE `entrenador` DISABLE KEYS */;
INSERT INTO `entrenador` VALUES (1,'Juan Diego','Perez Jimenez','12345678A','1989-01-25',2147483647,'654321987','Betis,34'),(2,'','','23456789B','0000-00-00',0,'',''),(3,'Higinio David','Jurado Palomino','345678901','1969-10-11',2147483647,'666252514','San Jacinto,44');
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
  PRIMARY KEY (`idequipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES (1,'Alevin masculino'),(2,'Cadete femenino'),(3,'Juvenil masculino');
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
  PRIMARY KEY (`idjugador`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugador`
--

LOCK TABLES `jugador` WRITE;
/*!40000 ALTER TABLE `jugador` DISABLE KEYS */;
INSERT INTO `jugador` VALUES (1,'Juan','Moreno Galbarro','47426785A','1997-09-05','675908260','Carlos III,10'),(2,'Daniel','Garcia Pelaez','48974125B','1997-04-10','636985220','Segundo Centenario,54'),(3,'manue','lebrato','53210879J','2019-01-10','666666666','calle triana');
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
  CONSTRAINT `pertenece_ibfk_1` FOREIGN KEY (`idjugador`) REFERENCES `jugador` (`idjugador`) ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT `pertenece_ibfk_2` FOREIGN KEY (`idtemporada`) REFERENCES `temporada` (`idtemporada`),
  CONSTRAINT `pertenece_ibfk_3` FOREIGN KEY (`idequipo`) REFERENCES `equipo` (`idequipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pertenece`
--

LOCK TABLES `pertenece` WRITE;
/*!40000 ALTER TABLE `pertenece` DISABLE KEYS */;
INSERT INTO `pertenece` VALUES (1,2,3,5),(2,3,1,8),(3,1,2,10);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'fdfds','fdsfdf','45855554a','2019-01-09','666666666','gfgfgdf','usuario','12345','juan_moreno_g@hotmail.com'),(2,'juan','moreno','45855554a','2019-01-17','688888888','gfgfgdf','usuario','12345','juan_moreno_g@hotmail.com'),(3,'juan','moreno','45855554a','2019-01-17','688888888','gfgfgdf','usuario','1','juan_moreno_g@hotmail.com'),(4,'pepe','moreno','45855554a','2019-01-17','688888888','gfgfgdf','usuario','1','juan_moreno_g@hotmail.com'),(5,'pepe','moreno','45855554a','2019-01-17','688888888','gfgfgdf','usuario','1','juan_moreno_g@hotmail.com'),(6,'Manue','Lebrato','4455','2019-01-11','666666666','gfgfgdf','usuario','12345','lebrato@gmail.com');
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

-- Dump completed on 2019-01-22  8:06:36
