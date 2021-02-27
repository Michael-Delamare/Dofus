-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: dofus
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `information_portails`
--

DROP TABLE IF EXISTS `information_portails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `information_portails` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisation` int(11) NOT NULL,
  `serveur_id` bigint(20) unsigned NOT NULL,
  `portail_id` bigint(20) unsigned NOT NULL,
  `users_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `information_portails_serveur_id_foreign` (`serveur_id`),
  KEY `information_portails_portail_id_foreign` (`portail_id`),
  KEY `information_portails_users_id_foreign` (`users_id`),
  CONSTRAINT `information_portails_portail_id_foreign` FOREIGN KEY (`portail_id`) REFERENCES `portails` (`id`),
  CONSTRAINT `information_portails_serveur_id_foreign` FOREIGN KEY (`serveur_id`) REFERENCES `serveurs` (`id`),
  CONSTRAINT `information_portails_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `information_portails`
--

LOCK TABLES `information_portails` WRITE;
/*!40000 ALTER TABLE `information_portails` DISABLE KEYS */;
INSERT INTO `information_portails` VALUES (1,'-1/50',10,1,1,2,'2020-11-07 14:16:43','2020-11-07 16:25:25'),(2,'74/-50',80,1,2,2,'2020-11-07 14:16:43','2020-11-07 16:27:13'),(3,'-19/-50',119,1,3,2,'2020-11-07 14:16:43','2020-11-12 17:50:07'),(4,'-40/10',14,1,4,1,'2020-11-07 14:16:43','2020-11-07 14:16:43');
/*!40000 ALTER TABLE `information_portails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-27 18:02:59
