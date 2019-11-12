-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: personals
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
-- Table structure for table `fio`
--

DROP TABLE IF EXISTS `fio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fio` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tab_namber` int(10) DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `for_fazer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `profesion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fio`
--

LOCK TABLES `fio` WRITE;
/*!40000 ALTER TABLE `fio` DISABLE KEYS */;
INSERT INTO `fio` VALUES (1,1000,'Ponomar','Igor','Leonidovich','engenia'),(2,1001,'Drozd','Irina','Sergeevna','buh'),(3,1002,'Kut','Irina','Vladimirovna','econ'),(4,1003,'Mostovoy','Sergey','Igorovich','disayn'),(5,1004,'Ponomarenko','Sergey','Aleksandrovich','PHP developer'),(6,1005,'Boyko','Boris','Leonidovich','glav buh');
/*!40000 ALTER TABLE `fio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shtat`
--

DROP TABLE IF EXISTS `shtat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shtat` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tab_namber` int(10) DEFAULT NULL,
  `profesion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oklad` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shtat`
--

LOCK TABLES `shtat` WRITE;
/*!40000 ALTER TABLE `shtat` DISABLE KEYS */;
INSERT INTO `shtat` VALUES (1,1000,'engenia','Ponomar Igor Leonidovich',5000),(2,1001,'buh','Drozd Irina Sergeevna',4600),(3,1002,'econ','Kut Irina Vladimirovna',4600),(4,1003,'disayn','Mostovoy Sergey Igorovich',6000),(5,1004,'PHP developer','Ponomarenko Sergey Aleksandrovich',9500),(6,1005,'glav buh','Boyko Boris Leonidovich',7600);
/*!40000 ALTER TABLE `shtat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ter_setka`
--

DROP TABLE IF EXISTS `ter_setka`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ter_setka` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oklad` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ter_setka`
--

LOCK TABLES `ter_setka` WRITE;
/*!40000 ALTER TABLE `ter_setka` DISABLE KEYS */;
INSERT INTO `ter_setka` VALUES (1,'engenia',5000),(2,'buh',4600),(3,'econ',4600),(4,'disayn',6000),(5,'PHP developer',9500),(6,'glav buh',7600);
/*!40000 ALTER TABLE `ter_setka` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-12 14:25:08
