-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: galeria
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB

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
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id_imagenes` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `anio` varchar(30) NOT NULL,
  `fuente` varchar(120) NOT NULL,
  `ruta_miniatura` varchar(200) NOT NULL,
  `parrafo` varchar(800) NOT NULL,
  `fecha_create` date NOT NULL,
  PRIMARY KEY (`id_imagenes`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (1,'titulo','img/1.jpg','Archivo ','1598','Archivo Regional Puno - Archivo Historico','img-thumbail/1.jpg','','2021-07-25'),(3,'Rieles','img/2.jpg','Puerto de Puno al costado de la via ferrea','APROX 1942','Archivo Regional Puno - Archivo Historico','img-thumbail/2.jpg','','2021-07-25'),(4,'Pareja','img/3.jpg','Fotografia de pareja indigena','SIN FECHA EXACTA','Archivo Regional Puno - Archivo Historico','img-thumbail/3.jpg','','2021-07-25'),(5,'LLamas Esquina de la Plaza de Armas de Puno','img/4.jpg','Grupo de Llamas de carga al costado de la Catedral de Puno','SIN FECHA','Archivo Regional Puno - Archivo Historico','img-thumbail/4.jpg','La casa con Balcon corresponde a la Case del Conde de Lemus','2021-07-25');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-25 16:43:38
