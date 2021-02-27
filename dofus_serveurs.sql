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
-- Table structure for table `serveurs`
--

DROP TABLE IF EXISTS `serveurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `serveurs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serveurs`
--

LOCK TABLES `serveurs` WRITE;
/*!40000 ALTER TABLE `serveurs` DISABLE KEYS */;
INSERT INTO `serveurs` VALUES (1,'Pandore','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(2,'Ush','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(3,'Agride','image-serveur-agride.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(4,'Atcham','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(5,'Beta I','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(6,'Beta II','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(7,'Brumen','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(8,'Crocabulia','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(9,'Echo','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(10,'Furye','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(11,'Ilyzaelle','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(12,'Jahash','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(13,'Julith','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(14,'Merianna','image-serveur.png','2020-11-07 14:16:42','2020-11-07 14:16:42'),(15,'Merkator','image-serveur.png','2020-11-07 14:16:43','2020-11-07 14:16:43'),(16,'Nidas','image-serveur.png','2020-11-07 14:16:43','2020-11-07 14:16:43'),(17,'Ombre','image-serveur-ombre.png','2020-11-07 14:16:43','2020-11-07 14:16:43'),(18,'Oto Mustam','image-serveur-otoMustam.png','2020-11-07 14:16:43','2020-11-07 14:16:43'),(19,'Rubilax','image-serveur.png','2020-11-07 14:16:43','2020-11-07 14:16:43'),(20,'Temporis I','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(21,'Temporis II','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(22,'Temporis III','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(23,'Temporis IV','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(24,'Temporis V','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(25,'Temporis VI','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(26,'Temporis VII','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(27,'Temporis VIII','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(28,'Temporis X','image-serveur-temporis.jpg','2020-11-07 14:16:43','2020-11-07 14:16:43'),(29,'Thanatena','image-serveur.png','2020-11-07 14:16:43','2020-11-07 14:16:43');
/*!40000 ALTER TABLE `serveurs` ENABLE KEYS */;
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
