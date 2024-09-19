CREATE DATABASE  IF NOT EXISTS `laravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laravel`;
-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: laravel
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
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('surf','windsurf','kayak','atv','hot air balloon') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `date` datetime NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `notes` text COLLATE utf8mb4_unicode_ci,
  `satisfaction` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_user_id_foreign` (`user_id`),
  CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (10,'atv',2,'2024-09-11 00:00:00',1,'Actividad fantastica.',5,'2024-09-10 07:02:35','2024-09-11 08:09:28'),(14,'atv',2,'2024-09-13 00:00:00',1,'Good Activivty',4,'2024-09-10 07:05:34','2024-09-10 07:05:34');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amenity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `checkIn` datetime NOT NULL,
  `checkOut` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `room_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id_idx` (`room_id`),
  CONSTRAINT `fk_room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'2024-09-17 00:00:00','2024-09-19 00:00:00','Raúl Jerez Pagán',1,'2024-09-17 16:45:38','2024-09-17 16:45:38'),(2,'2024-09-24 00:00:00','2024-09-25 00:00:00','test',1,'2024-09-17 21:53:31','2024-09-17 21:53:31'),(3,'2024-09-17 00:00:00','2024-09-18 00:00:00','Hugo',8,'2024-09-17 21:54:00','2024-09-17 21:54:00'),(4,'2024-09-17 00:00:00','2024-09-18 00:00:00','Daniel Ruíz',10,'2024-09-17 21:58:28','2024-09-17 21:58:28'),(5,'2024-09-17 00:00:00','2024-09-22 00:00:00','Raúl Jerez Pagán',6,'2024-09-17 21:59:06','2024-09-17 21:59:06'),(6,'2024-09-17 00:00:00','2024-09-18 00:00:00','Raúl Jerez Pagán',4,'2024-09-18 07:13:01','2024-09-18 07:13:01'),(7,'2024-09-17 00:00:00','2024-09-18 00:00:00','Daniel Ruíz',9,'2024-09-18 07:13:28','2024-09-18 07:13:28'),(8,'2024-09-17 00:00:00','2024-09-18 00:00:00','Paula',7,'2024-09-18 07:13:50','2024-09-18 07:13:50'),(9,'2024-09-17 00:00:00','2024-09-18 00:00:00','Marina',3,'2024-09-18 07:14:09','2024-09-18 07:14:09'),(10,'2024-09-17 00:00:00','2024-09-18 00:00:00','Pepito',5,'2024-09-18 07:14:29','2024-09-18 07:14:29'),(11,'2024-10-04 00:00:00','2024-10-05 00:00:00','Pedro Picapiedra',9,'2024-09-18 22:03:52','2024-09-18 22:03:52'),(12,'2024-09-21 00:00:00','2024-09-22 00:00:00','Mario',9,'2024-09-18 22:06:41','2024-09-18 22:06:41'),(13,'2024-10-05 00:00:00','2024-10-06 00:00:00','Raúl',1,'2024-09-19 09:53:22','2024-09-19 09:53:22');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(2,'https://images.unsplash.com/photo-1638121757833-274f0c93e3b0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(3,'https://images.unsplash.com/photo-1663911240934-c352569e3f57?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(4,'https://plus.unsplash.com/premium_photo-1682377521591-dd6fb21ec96e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),(5,'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'Raúl Jerez Pagán','test@test.com','676676676','Aire acondicionado','El aire acondicionado se detiene a los pocos minutos de encenderlo.','2024-09-17 21:24:15','2024-09-17 21:24:15'),(2,'Pedro García','pedro@pedro.es','999888777','Colchón','El colchón esta muy duro.','2024-09-17 22:01:23','2024-09-17 22:01:23'),(3,'Marina','mar@mar.es','23123123121','Vistas','Me encantan las vistas que tiene la Suite.','2024-09-18 21:53:20','2024-09-18 21:53:20'),(4,'Raúl H','raulH@raul.es','3333333','ksdhjjasd','kjh kjdhkjas jhjjk asjkhsdk','2024-09-19 10:28:22','2024-09-19 10:28:22');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_09_03_224231_create_activities_table',1),(6,'2024_09_05_214749_create_activities_table',2),(7,'2024_09_17_204908_messages',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_type`
--

DROP TABLE IF EXISTS `room_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_type`
--

LOCK TABLES `room_type` WRITE;
/*!40000 ALTER TABLE `room_type` DISABLE KEYS */;
INSERT INTO `room_type` VALUES (1,'Single Bed'),(2,'Double Bed'),(3,'Double Superior'),(4,'Suite'),(5,'Family'),(6,'Deluxe');
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
  `Foto` int NOT NULL,
  `number` int NOT NULL,
  `RoomType` int NOT NULL,
  `Amenities` int NOT NULL,
  `Rate` int NOT NULL,
  `OfferPrice` int NOT NULL,
  `Status` varchar(255) NOT NULL,
  `RoomFloor` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_type_idx` (`RoomType`),
  CONSTRAINT `room_type` FOREIGN KEY (`RoomType`) REFERENCES `room_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,1,11,1,1,1,75,'Available',1),(3,2,12,4,5,30,120,'Available',4),(4,3,11,3,2,10,80,'Available',1),(5,4,13,1,3,1,75,'Available',3),(6,3,13,4,4,1,120,'Available',2),(7,2,12,2,2,20,90,'Available',1),(8,1,14,4,5,1,120,'Booked',2),(9,4,12,3,1,1,80,'Booked',3),(10,2,14,4,3,1,120,'Booked',1);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_amenities`
--

DROP TABLE IF EXISTS `rooms_amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_amenities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amenity_id` int NOT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `amenity_idx` (`amenity_id`),
  KEY `room_idx` (`room_id`),
  CONSTRAINT `amenity` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `room` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
-- Table structure for table `rooms_ant`
--

DROP TABLE IF EXISTS `rooms_ant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_ant` (
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
-- Dumping data for table `rooms_ant`
--

LOCK TABLES `rooms_ant` WRITE;
/*!40000 ALTER TABLE `rooms_ant` DISABLE KEYS */;
INSERT INTO `rooms_ant` VALUES (1,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','101','Single Bed','[\"TV\", \"WiFi\", \"Baño privado\"]',50.00,35.00,'Available','1'),(2,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','102','Double Bed','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\"]',80.00,20.00,'Booked','1'),(3,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','103','Double Superior','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\"]',120.00,10.00,'Available','1'),(4,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','104','Suite','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\", \"Vista al mar\"]',200.00,5.00,'Booked','1'),(5,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','105','Single Bed','[\"TV\", \"WiFi\", \"Baño privado\"]',55.00,20.00,'Available','1'),(6,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','106','Double Bed','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\"]',85.00,5.00,'Booked','1'),(7,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','107','Double Superior','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\"]',130.00,15.00,'Available','1'),(8,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','108','Suite','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\", \"Minibar\", \"Vista al mar\"]',210.00,10.00,'Booked','1'),(9,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','109','Single Bed','[\"TV\", \"WiFi\", \"Baño privado\"]',60.00,5.00,'Available','1'),(10,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','110','Double Bed','[\"TV\", \"WiFi\", \"Baño privado\", \"Aire acondicionado\"]',90.00,10.00,'Booked','1'),(11,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','202','suite','Wifi,tv',133.00,23.00,'Booked','2'),(12,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','202','suite','Wifi,tv',133.00,23.00,'Booked','2'),(13,'https://images.unsplash.com/photo-1631049552057-403cdb8f0658?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D','333','suite','Wifi,tv,minibar',333.00,33.00,'Available','3');
/*!40000 ALTER TABLE `rooms_ant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_images`
--

DROP TABLE IF EXISTS `rooms_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_id` int NOT NULL,
  `image_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id_idx` (`room_id`),
  KEY `images_id_idx` (`image_id`),
  CONSTRAINT `images_img` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `room_img` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_images`
--

LOCK TABLES `rooms_images` WRITE;
/*!40000 ALTER TABLE `rooms_images` DISABLE KEYS */;
INSERT INTO `rooms_images` VALUES (4,1,5),(6,3,1),(7,4,3),(8,5,5),(9,6,1),(10,7,2),(11,8,3),(12,9,4),(13,10,2);
/*!40000 ALTER TABLE `rooms_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John Doe','john@example.com',NULL,'password',NULL,'2024-09-06 10:48:52','2024-09-06 10:48:52'),(2,'Raúl','raul_astra16@hotmail.com',NULL,'$2y$12$Uh8eXR4eeLBOm389iapyMeVm8ADc6lt3FbX3KuFRPM5jKUIkZZw.q','Hv9O5kXvmlfoCuB8iaxVcsTgOOJROCsFDm99DnheTAzKIVQ2RupSaKnkZLV2','2024-09-09 10:58:53','2024-09-09 10:58:53');
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

-- Dump completed on 2024-09-19 15:29:58
