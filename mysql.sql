-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: project2021
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `yo_categories`
--

DROP TABLE IF EXISTS `yo_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yo_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yo_categories`
--

LOCK TABLES `yo_categories` WRITE;
/*!40000 ALTER TABLE `yo_categories` DISABLE KEYS */;
INSERT INTO `yo_categories` VALUES (2,'Автомобили'),(3,'Бытовая техника'),(1,'Компьютерная техника');
/*!40000 ALTER TABLE `yo_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yo_cities`
--

DROP TABLE IF EXISTS `yo_cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yo_cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yo_cities`
--

LOCK TABLES `yo_cities` WRITE;
/*!40000 ALTER TABLE `yo_cities` DISABLE KEYS */;
INSERT INTO `yo_cities` VALUES (2,'Брянск'),(1,'Москва'),(3,'Самара');
/*!40000 ALTER TABLE `yo_cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yo_product`
--

DROP TABLE IF EXISTS `yo_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yo_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `place_date` date DEFAULT NULL,
  `city_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `type_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `city_id` (`city_id`),
  KEY `category_id` (`category_id`),
  KEY `type_id` (`type_id`,`user_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `yo_product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `yo_users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `yo_product_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `yo_types` (`id`) ON DELETE SET NULL,
  CONSTRAINT `yo_product_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `yo_cities` (`id`) ON DELETE SET NULL,
  CONSTRAINT `yo_product_ibfk_4` FOREIGN KEY (`category_id`) REFERENCES `yo_categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yo_product`
--

LOCK TABLES `yo_product` WRITE;
/*!40000 ALTER TABLE `yo_product` DISABLE KEYS */;
INSERT INTO `yo_product` VALUES (1,'Геймпад PS7 RAZER HYPER PRO','Что-то написано','url на картинку',1337,'2021-04-21',1,1,1,2),(2,'Стирашка','Что-то написано','url на img',228,'2020-08-04',3,3,2,1),(3,'Гоночная машина из NEED FOR SPEED','Что-то написано','ссылка на img',11002,'2019-04-06',1,2,3,2);
/*!40000 ALTER TABLE `yo_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yo_types`
--

DROP TABLE IF EXISTS `yo_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yo_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yo_types`
--

LOCK TABLES `yo_types` WRITE;
/*!40000 ALTER TABLE `yo_types` DISABLE KEYS */;
INSERT INTO `yo_types` VALUES (1,'Джойстик'),(2,'Стиральная машина'),(3,'BMW');
/*!40000 ALTER TABLE `yo_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yo_users`
--

DROP TABLE IF EXISTS `yo_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yo_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `age` int DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yo_users`
--

LOCK TABLES `yo_users` WRITE;
/*!40000 ALTER TABLE `yo_users` DISABLE KEYS */;
INSERT INTO `yo_users` VALUES (1,'Андрей','Андреев','Андреевич','andrey.andreev@gmail.com','1998-09-03',6.3,23,'2020-04-05','80000000000'),(2,'Иван','Иванов','Иванович','ivan.ivanov@gmail.com','1973-04-05',9.4,43,'2018-02-01','80000000000');
/*!40000 ALTER TABLE `yo_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-22 13:05:27
