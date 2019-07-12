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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `puntos` bigint(20) NOT NULL DEFAULT '0',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fernando','fdileo24@gmail.com',NULL,'$2y$10$.u2h0GKrFf2rF01NAURRcelpqQkgKsw4z3BgpjE4f.rLGRuRxAeFC','3',18,NULL,NULL,'2019-07-09 21:45:12','2019-07-09 21:45:12'),(2,'fernando','fdileo24@gmail.co5',NULL,'$2y$10$4iL5cIzvFUPHw9DK/K4Afubbkq9raRyoH5mX4sWkUoQAaf3RR4biC','3',0,'storage/avatars/j5SC2xmQEiCPKFllXQcIPg4TIT3SHp3FcyTlvKFC.jpeg',NULL,'2019-07-10 06:19:21','2019-07-10 06:19:21'),(3,'fernando','fdileo26@gmail.com',NULL,'$2y$10$7HW0k7/gBCF8K98VGx908OZUBALacrOd8AbYCd3U1WF0j0O4yor76','3',0,'storage/app/public/avatars/4KJ8v0PquDfBgsKZfcA6xCoomLzHf3pt2xGxBpB0.jpeg',NULL,'2019-07-10 06:57:11','2019-07-10 06:57:11'),(4,'jorge','jorge1@gmail.com',NULL,'$2y$10$4FFPrS9PwYzyvVjc1GhLUO77Jp7IyckA7.y9ZAizIk/a8.m3..G32','3',0,'storage/avatars/f5vYH3oYZpCKODQxj7IY2O3ULSQyp5JQYlUM77ad.jpeg',NULL,'2019-07-11 06:47:12','2019-07-11 06:47:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-12  2:30:15
