CREATE DATABASE  IF NOT EXISTS `queerchick_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `queerchick_db`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: queerchick_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

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
-- Table structure for table `gamequestions`
--

DROP TABLE IF EXISTS `gamequestions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gamequestions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gamequestions`
--

LOCK TABLES `gamequestions` WRITE;
/*!40000 ALTER TABLE `gamequestions` DISABLE KEYS */;
INSERT INTO `gamequestions` VALUES (1,'2019-07-12 00:00:24','2019-07-12 00:00:24','¿Cual fue la primera organizacion LGTB de Argentina?','Nuestro Mundo','FALGBT',1),(2,'2019-07-12 00:07:48','2019-07-12 00:07:48','¿Cual estacion de subte tiene el nombre de un referente en la lucha de derechos LGTB?','Jose Hernandez','Carlos Jauregui',2),(3,'2019-07-12 00:15:25','2019-07-12 00:15:25','¿Cuantas versiones hubo de la bandera LGTB ?','1','3',2),(4,'2019-07-12 00:19:45','2019-07-12 00:19:45','¿El primer pais en legalizar el matrimonio entre personas del mismo sexo fue?','Paises Bajos','Noruega',1),(5,'2019-07-12 00:25:17','2019-07-12 00:25:17','¿Quien es este famoso musico Argentino gay que escribio temas como Luna de Miel e Imagenes Paganas?','Federico Moura','Miguel Abuelo',1),(6,'2019-07-12 00:27:59','2019-07-12 00:27:59','¿En que año se promulgo la ley de matrimonio igualitario en Argentina?','2013','2010',2);
/*!40000 ALTER TABLE `gamequestions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-12  2:30:14
