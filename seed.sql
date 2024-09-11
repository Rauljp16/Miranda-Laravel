-- CREATE DATABASE  IF NOT EXISTS `hotel_miranda` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
-- USE `hotel_miranda`;
-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: hotel_miranda
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `amenity` varchar(255) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities`
--

LOCK TABLES `amenities` WRITE;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
INSERT INTO `amenities` VALUES (1,'Wifi'),(2,'TV'),(3,'Minibar'),(4,'Aire Acondicionado'),(5,'Jacuzzi');
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(2,'https://images.unsplash.com/photo-1638121757833-274f0c93e3b0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(3,'https://images.unsplash.com/photo-1663911240934-c352569e3f57?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(4,'https://plus.unsplash.com/premium_photo-1682377521591-dd6fb21ec96e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_type`
--

DROP TABLE IF EXISTS `room_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_type` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_type`
--

LOCK TABLES `room_type` WRITE;
/*!40000 ALTER TABLE `room_type` DISABLE KEYS */;
INSERT INTO `room_type` VALUES (1,'Single Bed'),(2,'Double Bed'),(3,'Double Superior'),(4,'Suite');
/*!40000 ALTER TABLE `room_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Foto` varchar(255) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `RoomType` varchar(50) DEFAULT NULL,
  `Amenities` varchar(255) DEFAULT NULL,
  `Rate` decimal(10,2) DEFAULT NULL,
  `OfferPrice` decimal(10,2) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `RoomFloor` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','101','Single Bed','[\"TV\", \"WiFi\", \"Baño privado\"]',50.00,35.00,'Available','1'),(2,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','102','Double Bed','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\"]',80.00,20.00,'Booked','1'),(3,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','103','Double Superior','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\"]',120.00,10.00,'Available','1'),(4,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','104','Suite','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\", \"Vista al mar\"]',200.00,5.00,'Booked','1'),(5,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','105','Single Bed','[\"TV\", \"WiFi\", \"Baño privado\"]',55.00,20.00,'Available','1'),(6,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','106','Double Bed','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\"]',85.00,5.00,'Booked','1'),(7,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','107','Double Superior','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\"]',130.00,15.00,'Available','1'),(8,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','108','Suite','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\", \"Vista al mar\"]',210.00,10.00,'Booked','1'),(9,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','109','Single Bed','[\"TV\", \"WiFi\", \"Baño privado\"]',60.00,5.00,'Available','1'),(10,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','110','Double Bed','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\"]',90.00,10.00,'Booked','1'),(11,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','202','suite','Wifi,tv',133.00,23.00,'Booked','2'),(12,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','202','suite','Wifi,tv',133.00,23.00,'Booked','2'),(13,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','333','suite','Wifi,tv,minibar',333.00,33.00,'Available','3');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_amenities`
--

DROP TABLE IF EXISTS `rooms_amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_amenities` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `amenity_id` int NOT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `amenity_idx` (`amenity_id`),
  KEY `room_idx` (`room_id`),
  CONSTRAINT `amenity` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `room` FOREIGN KEY (`room_id`) REFERENCES `roomsmysql` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_amenities`
--

LOCK TABLES `rooms_amenities` WRITE;
/*!40000 ALTER TABLE `rooms_amenities` DISABLE KEYS */;
/*!40000 ALTER TABLE `rooms_amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_images`
--

DROP TABLE IF EXISTS `rooms_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_images` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `image_id` int NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `room_id_idx` (`room_id`),
  KEY `images_id_idx` (`image_id`),
  CONSTRAINT `images_img` FOREIGN KEY (`image_id`) REFERENCES `images` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `room_img` FOREIGN KEY (`room_id`) REFERENCES `roomsmysql` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_images`
--

LOCK TABLES `rooms_images` WRITE;
/*!40000 ALTER TABLE `rooms_images` DISABLE KEYS */;
INSERT INTO `rooms_images` VALUES (4,1,2),(6,3,2),(7,4,3);
/*!40000 ALTER TABLE `rooms_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roomsmysql`
--

DROP TABLE IF EXISTS `roomsmysql`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roomsmysql` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `Foto` int NOT NULL,
  `number` int NOT NULL,
  `RoomType` int NOT NULL,
  `Amenities` int NOT NULL,
  `Rate` int NOT NULL,
  `OfferPrice` int NOT NULL,
  `Status` varchar(255) NOT NULL,
  `RoomFloor` int NOT NULL,
  PRIMARY KEY (`_id`),
  KEY `room_type_idx` (`RoomType`),
  CONSTRAINT `room_type` FOREIGN KEY (`RoomType`) REFERENCES `room_type` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roomsmysql`
--

LOCK TABLES `roomsmysql` WRITE;
/*!40000 ALTER TABLE `roomsmysql` DISABLE KEYS */;
INSERT INTO `roomsmysql` VALUES (1,1,11,1,1,1,11,'Available',1),(3,2,12,2,5,46,87,'Available',4),(4,3,11,1,2,5,80,'Available',1);
/*!40000 ALTER TABLE `roomsmysql` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-09 11:35:06
