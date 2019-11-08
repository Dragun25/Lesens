-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: kinogo
-- ------------------------------------------------------
-- Server version	10.3.13-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aktor`
--

DROP TABLE IF EXISTS `aktor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aktor` (
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aktor`
--

LOCK TABLES `aktor` WRITE;
/*!40000 ALTER TABLE `aktor` DISABLE KEYS */;
INSERT INTO `aktor` VALUES ('Kiano Rivz',50,'m'),('Dgeki Chan',56,'m'),('Dget Li',45,'m');
/*!40000 ALTER TABLE `aktor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cinima`
--

DROP TABLE IF EXISTS `cinima`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cinima` (
  `name_cinema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ganr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prodolgitelnost` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regisor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cinima`
--

LOCK TABLES `cinima` WRITE;
/*!40000 ALTER TABLE `cinima` DISABLE KEYS */;
INSERT INTO `cinima` VALUES ('Matrix','fantesi','3:30','brather Vachovski','Kiano Rivth, Kerri En-Moss, Laurons Fishborn'),('Matrix 2','fantesi','3:30','brather Vachovski','Kiano Rivth, Kerri En-Moss, Laurons Fishborn'),('Matrix 3','fantesi','3:30','brather Vachovski','Kiano Rivth, Kerri En-Moss, Laurons Fishborn');
/*!40000 ALTER TABLE `cinima` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-08 18:59:23
