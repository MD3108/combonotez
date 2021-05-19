-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: combonotez
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `combonotez`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `combonotez` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `combonotez`;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Auto-Combo'),(2,'Universal'),(3,'BnB'),(4,'ToD'),(5,'SPARK');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_note`
--

DROP TABLE IF EXISTS `category_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_note` (
  `category_id` bigint unsigned NOT NULL,
  `note_id` bigint unsigned NOT NULL,
  KEY `category_note_category_id_foreign` (`category_id`),
  KEY `category_note_note_id_foreign` (`note_id`),
  CONSTRAINT `category_note_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_note_note_id_foreign` FOREIGN KEY (`note_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_note`
--

LOCK TABLES `category_note` WRITE;
/*!40000 ALTER TABLE `category_note` DISABLE KEYS */;
INSERT INTO `category_note` VALUES (5,1),(1,1),(3,1),(4,1),(3,2),(3,3),(5,3),(1,3),(5,4),(4,5),(1,5),(3,5),(5,5),(2,5),(1,6),(2,6),(2,7),(4,7),(5,7),(4,8),(5,8),(2,8),(4,9),(5,10),(1,10),(4,10),(1,11),(1,12),(2,13),(3,13),(4,13),(1,13),(5,13),(3,14),(4,14),(5,14),(1,14),(2,14),(1,15),(5,15),(2,15),(5,16),(1,16),(4,16),(4,17),(3,18),(5,18),(3,19),(1,19),(4,19),(5,19),(4,20),(2,20),(1,20),(3,20),(5,21),(1,21),(3,21),(3,22),(2,22),(5,23),(3,23),(5,24),(2,25),(4,25),(5,25),(1,26),(3,26),(4,26),(3,27),(1,27),(4,28),(3,29),(4,29),(5,29),(1,30),(3,30),(4,30),(2,30),(5,30),(4,31),(5,32),(2,33),(3,33),(4,33),(1,33),(3,34),(5,35),(1,35),(3,36),(2,36),(4,36),(2,38),(3,38);
/*!40000 ALTER TABLE `category_note` ENABLE KEYS */;
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
-- Table structure for table `favorite_note`
--

DROP TABLE IF EXISTS `favorite_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorite_note` (
  `favorite_id` bigint unsigned NOT NULL,
  `note_id` bigint unsigned NOT NULL,
  KEY `favorite_note_favorite_id_foreign` (`favorite_id`),
  KEY `favorite_note_note_id_foreign` (`note_id`),
  CONSTRAINT `favorite_note_favorite_id_foreign` FOREIGN KEY (`favorite_id`) REFERENCES `favorites` (`id`) ON DELETE CASCADE,
  CONSTRAINT `favorite_note_note_id_foreign` FOREIGN KEY (`note_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite_note`
--

LOCK TABLES `favorite_note` WRITE;
/*!40000 ALTER TABLE `favorite_note` DISABLE KEYS */;
INSERT INTO `favorite_note` VALUES (1,1);
/*!40000 ALTER TABLE `favorite_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorite_user`
--

DROP TABLE IF EXISTS `favorite_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorite_user` (
  `favorite_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  KEY `favorite_user_favorite_id_foreign` (`favorite_id`),
  KEY `favorite_user_user_id_foreign` (`user_id`),
  CONSTRAINT `favorite_user_favorite_id_foreign` FOREIGN KEY (`favorite_id`) REFERENCES `favorites` (`id`) ON DELETE CASCADE,
  CONSTRAINT `favorite_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite_user`
--

LOCK TABLES `favorite_user` WRITE;
/*!40000 ALTER TABLE `favorite_user` DISABLE KEYS */;
INSERT INTO `favorite_user` VALUES (1,1);
/*!40000 ALTER TABLE `favorite_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
INSERT INTO `favorites` VALUES (1,1,'2021-05-15 04:53:22','2021-05-15 04:53:22');
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fighter_note`
--

DROP TABLE IF EXISTS `fighter_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fighter_note` (
  `fighter_id` bigint unsigned NOT NULL,
  `note_id` bigint unsigned NOT NULL,
  KEY `fighter_note_fighter_id_foreign` (`fighter_id`),
  KEY `fighter_note_note_id_foreign` (`note_id`),
  CONSTRAINT `fighter_note_fighter_id_foreign` FOREIGN KEY (`fighter_id`) REFERENCES `fighters` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fighter_note_note_id_foreign` FOREIGN KEY (`note_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fighter_note`
--

LOCK TABLES `fighter_note` WRITE;
/*!40000 ALTER TABLE `fighter_note` DISABLE KEYS */;
INSERT INTO `fighter_note` VALUES (6,1),(38,1),(9,1),(25,2),(27,2),(33,3),(39,3),(4,4),(23,4),(17,4),(9,5),(22,5),(25,5),(4,6),(13,6),(16,7),(42,7),(7,8),(4,8),(42,8),(33,9),(43,10),(8,11),(20,11),(7,12),(31,12),(40,12),(42,13),(38,13),(24,13),(6,14),(41,14),(10,15),(18,16),(16,16),(10,17),(39,17),(25,18),(41,18),(24,18),(13,19),(7,19),(3,19),(5,20),(30,21),(15,21),(24,21),(22,22),(23,22),(4,23),(31,23),(1,24),(33,24),(7,25),(9,25),(40,25),(40,26),(9,27),(42,28),(36,29),(27,30),(38,30),(3,31),(11,31),(13,31),(30,32),(4,33),(32,34),(22,34),(31,35),(26,36),(36,38);
/*!40000 ALTER TABLE `fighter_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fighters`
--

DROP TABLE IF EXISTS `fighters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fighters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fighters`
--

LOCK TABLES `fighters` WRITE;
/*!40000 ALTER TABLE `fighters` DISABLE KEYS */;
INSERT INTO `fighters` VALUES (1,'SSJ Goku','/images/fighters/ssj-goku.png'),(2,'SSJ Vegeta','/images/fighters/ssj-vegeta.png'),(3,'SSJ Trunks','/images/fighters/ssj-trunks.png'),(4,'Gohan (Teen)','/images/fighters/gohan-teen.png'),(5,'Freezer','/images/fighters/freezer.png'),(6,'Majin Buu','/images/fighters/majin-buu.png'),(7,'Cell','/images/fighters/cell.png'),(8,'Krillin','/images/fighters/krillin.png'),(9,'Piccolo','/images/fighters/piccolo.png'),(10,'Android 16','/images/fighters/android_16.png'),(11,'Android 18','/images/fighters/android-18.png'),(12,'SSB Goku','/images/fighters/ssb-goku.png'),(13,'SSB Vegeta','/images/fighters/ssb-vegeta.png'),(14,'Yamcha','/images/fighters/yamcha.png'),(15,'Tien Shinhan','/images/fighters/tien-shinhan.png'),(16,'Nappa','/images/fighters/nappa.png'),(17,'Ginyu','/images/fighters/ginyu.png'),(18,'Gotenks','/images/fighters/gotenks.png'),(19,'Gohan (Adult)','/images/fighters/gohan-adult.png'),(20,'Kid Buu','/images/fighters/kid-buu.png'),(21,'Beerus','/images/fighters/beerus.png'),(22,'Hit','/images/fighters/hit.png'),(23,'Goku Black','/images/fighters/goku-black.png'),(24,'Android 21','/images/fighters/android-21.png'),(25,'Bardock','/images/fighters/bardock.png'),(26,'Broly','/images/fighters/broly.png'),(27,'Zamasu','/images/fighters/zamasu.png'),(28,'SSB Vegeto','/images/fighters/ssb-vegeto.png'),(29,'Goku','/images/fighters/goku.png'),(30,'Vegeta','/images/fighters/vegeta.png'),(31,'Cooler','/images/fighters/cooler.png'),(32,'Android 17','/images/fighters/android-17.png'),(33,'Jiren','/images/fighters/jiren.png'),(34,'Videl','/images/fighters/videl.png'),(35,'Goku GT','/images/fighters/goku-gt.png'),(36,'Janemba','/images/fighters/janemba.png'),(37,'SSB Gogeta','/images/fighters/ssb-gogeta.png'),(38,'Broly (Super)','/images/fighters/broly-super.png'),(39,'Kefla','/images/fighters/Kefla.png'),(40,'UI Goku','/images/fighters/ui-goku.png'),(41,'Master Roshi','/images/fighters/master-roshi.png'),(42,'Super Baby 2','/images/fighters/super-baby-2.png'),(43,'SSJ4 Gogeta','/images/fighters/ssj4-gogeta.png');
/*!40000 ALTER TABLE `fighters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `like_note`
--

DROP TABLE IF EXISTS `like_note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `like_note` (
  `like_id` bigint unsigned NOT NULL,
  `note_id` bigint unsigned NOT NULL,
  KEY `like_note_like_id_foreign` (`like_id`),
  KEY `like_note_note_id_foreign` (`note_id`),
  CONSTRAINT `like_note_like_id_foreign` FOREIGN KEY (`like_id`) REFERENCES `likes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `like_note_note_id_foreign` FOREIGN KEY (`note_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `like_note`
--

LOCK TABLES `like_note` WRITE;
/*!40000 ALTER TABLE `like_note` DISABLE KEYS */;
INSERT INTO `like_note` VALUES (1,1),(2,1);
/*!40000 ALTER TABLE `like_note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `like_user`
--

DROP TABLE IF EXISTS `like_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `like_user` (
  `like_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  KEY `like_user_like_id_foreign` (`like_id`),
  KEY `like_user_user_id_foreign` (`user_id`),
  CONSTRAINT `like_user_like_id_foreign` FOREIGN KEY (`like_id`) REFERENCES `likes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `like_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `like_user`
--

LOCK TABLES `like_user` WRITE;
/*!40000 ALTER TABLE `like_user` DISABLE KEYS */;
INSERT INTO `like_user` VALUES (1,1),(1,2);
/*!40000 ALTER TABLE `like_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `likes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likes`
--

LOCK TABLES `likes` WRITE;
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` VALUES (1,1,'2021-05-15 04:53:22','2021-05-15 04:53:22'),(2,2,'2021-05-15 04:53:22','2021-05-15 04:53:22');
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_04_12_114143_create_fighters_table',1),(5,'2021_04_12_161047_create_categories_table',1),(6,'2021_04_12_164019_create_likes_table',1),(7,'2021_04_12_205841_create_favorites_table',1),(8,'2021_04_13_055344_notes',1),(9,'2021_04_30_114716_create_fighter_notes_table',1),(10,'2021_04_30_162653_create_category_notes_table',1),(11,'2021_04_30_164555_create_like_notes_table',1),(12,'2021_04_30_201418_create_like_users_table',1),(13,'2021_04_30_210049_create_favorite_users_table',1),(14,'2021_04_30_211218_create_favorite_notes_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notations` json NOT NULL,
  `assistOne` int NOT NULL DEFAULT '1',
  `assistTwo` int NOT NULL DEFAULT '1',
  `damage` int NOT NULL,
  `ki_start` double(3,2) NOT NULL,
  `ki_end` double(3,2) NOT NULL,
  `difficulty` int NOT NULL DEFAULT '1',
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notes_user_id_foreign` (`user_id`),
  CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'Retha Goldner MD','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"4x\", \"S\", \"sep\", \"2\", \"M\"]}',1,3,6194,0.00,7.00,2,'https://www.youtube.com/embed/ljsLFv43r7',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(2,'Abigale Bernhard DDS','{\"inputs\": [\"2\", \"L\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"A2\"]}',1,3,9196,5.00,0.00,4,'https://www.youtube.com/embed/NcJxMhUwYc',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(3,'Dr. Sam Bergstrom','{\"inputs\": [\"3x\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',3,3,1400,5.00,3.00,3,'https://www.youtube.com/embed/2eamnjDxdg',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(4,'Dr. Orlando Hettinger DDS','{\"inputs\": [\"7x\", \"L\", \"sep\", \"VN\", \"sep\", \"236\", \"4x\", \"L\", \"sep\", \"A1\", \"sep\", \"DR\"]}',2,3,8918,1.00,5.00,4,'https://www.youtube.com/embed/YEQLQSTDc5',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(5,'Terrance Wuckert DVM','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"2x\", \"H\"]}',2,3,2358,1.00,7.00,2,'https://www.youtube.com/embed/EkW8xH2SgM',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(6,'Nico Lynch Sr.','{\"inputs\": [\"2\", \"2x\", \"M\", \"sep\", \"9\", \"M\", \"sep\", \"L\", \"sep\", \"9\", \"2x\", \"L\", \"sep\", \"H\", \"sep\", \"A1\", \"sep\", \"2\", \"2x\", \"M\", \"sep\", \"2\", \"S\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"2x\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"DL\", \"7\", \"L\", \"sep\", \"DL\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',1,2,7419,1.00,3.00,4,'https://www.youtube.com/embed/rEIdpa5wMh',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(7,'Prof. Schuyler Stroman Sr.','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"4x\", \"S\", \"sep\", \"2\", \"M\"]}',3,1,1997,7.00,5.00,2,'https://www.youtube.com/embed/oAe1q4gNJD',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(8,'Dr. Tony Pollich DDS','{\"inputs\": [\"236\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"VN\", \"sep\", \"DR\"]}',3,1,10233,7.00,5.00,4,'https://www.youtube.com/embed/iqJOVOOlrO',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(9,'Tavares Kemmer','{\"inputs\": [\"3x\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',2,2,5195,2.00,0.00,3,'https://www.youtube.com/embed/BbnB7rBLg3',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(10,'Taurean Green','{\"inputs\": [\"7x\", \"L\", \"sep\", \"VN\", \"sep\", \"236\", \"4x\", \"L\", \"sep\", \"A1\", \"sep\", \"DR\"]}',3,2,81,0.00,3.00,2,'https://www.youtube.com/embed/9oGCbKFA2C',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(11,'Torey Dooley','{\"inputs\": [\"2\", \"L\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"A2\"]}',3,1,2569,2.00,5.00,4,'https://www.youtube.com/embed/U0brD07K7s',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(12,'Joshua Williamson','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"4x\", \"S\", \"sep\", \"2\", \"M\"]}',3,1,898,0.00,5.00,3,'https://www.youtube.com/embed/4eJd5wzy3c',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(13,'Mauricio Johnson','{\"inputs\": [\"236\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"VN\", \"sep\", \"DR\"]}',3,1,20,6.00,0.00,3,'https://www.youtube.com/embed/gkbrkIm0kX',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(14,'Hazle Orn','{\"inputs\": [\"2\", \"2x\", \"M\", \"sep\", \"9\", \"M\", \"sep\", \"L\", \"sep\", \"9\", \"2x\", \"L\", \"sep\", \"H\", \"sep\", \"A1\", \"sep\", \"2\", \"2x\", \"M\", \"sep\", \"2\", \"S\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"2x\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"DL\", \"7\", \"L\", \"sep\", \"DL\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',1,1,355,5.00,5.00,2,'https://www.youtube.com/embed/SQgaVuc7gu',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(15,'Rupert Weber','{\"inputs\": [\"3x\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',2,3,2331,1.00,6.00,1,'https://www.youtube.com/embed/0rrQNsCxbG',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(16,'Jamaal Gislason III','{\"inputs\": [\"2\", \"2x\", \"M\", \"sep\", \"9\", \"M\", \"sep\", \"L\", \"sep\", \"9\", \"2x\", \"L\", \"sep\", \"H\", \"sep\", \"A1\", \"sep\", \"2\", \"2x\", \"M\", \"sep\", \"2\", \"S\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"2x\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"DL\", \"7\", \"L\", \"sep\", \"DL\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',1,2,1417,7.00,4.00,2,'https://www.youtube.com/embed/J7KTzJgA0l',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(17,'Van Bauch V','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"2x\", \"H\"]}',1,2,7228,3.00,3.00,3,'https://www.youtube.com/embed/XV8RD4X6qy',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(18,'Rick Gutkowski','{\"inputs\": [\"2\", \"2x\", \"M\", \"sep\", \"8\", \"2\", \"H\", \"sep\", \"214\", \"3x\", \"H\", \"sep\", \"2x\", \"L\", \"sep\", \"2\", \"2x\", \"M\", \"sep\", \"H\", \"sep\", \"S\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"9\", \"M\", \"sep\", \"A1\", \"sep\", \"L\", \"sep\", \"H\", \"sep\", \"214\", \"2x\", \"H\", \"sep\", \"2x\", \"6\", \"2x\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\", \"sep\", \"A2\", \"sep\", \"DR\"]}',1,3,9627,3.00,7.00,3,'https://www.youtube.com/embed/UC5o6nVrBr',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(19,'Akeem Hyatt','{\"inputs\": [\"236\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"VN\", \"sep\", \"DR\"]}',1,3,8770,0.00,0.00,3,'https://www.youtube.com/embed/zd1HU4UhSr',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(20,'Kaylie Kerluke II','{\"inputs\": [\"2\", \"2x\", \"M\", \"sep\", \"9\", \"M\", \"sep\", \"L\", \"sep\", \"9\", \"2x\", \"L\", \"sep\", \"H\", \"sep\", \"A1\", \"sep\", \"2\", \"2x\", \"M\", \"sep\", \"2\", \"S\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"2x\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"DL\", \"7\", \"L\", \"sep\", \"DL\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',3,2,8981,7.00,5.00,4,'https://www.youtube.com/embed/iaPz4u42gL',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(21,'Alberta Senger','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"3\", \"H\", \"sep\", \"H\"]}',1,3,1787,4.00,1.00,3,'https://www.youtube.com/embed/UkbGYi8Ct1',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(22,'Dr. Rory Dach','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"2x\", \"H\"]}',2,3,10073,7.00,0.00,1,'https://www.youtube.com/embed/arvzNJaKGO',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(23,'Dr. Pascale Borer','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"3\", \"H\", \"sep\", \"H\"]}',2,2,3580,5.00,5.00,4,'https://www.youtube.com/embed/FwpCLLBWU4',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(24,'Prof. Darrel Ratke','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"3\", \"H\", \"sep\", \"H\"]}',1,2,1853,3.00,7.00,3,'https://www.youtube.com/embed/5z7NNS8gGM',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(25,'Dr. Dandre Schmitt','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"2x\", \"H\"]}',3,1,2563,2.00,5.00,3,'https://www.youtube.com/embed/tvQr8J0cMY',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(26,'Kiera Langworth','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"2x\", \"H\"]}',3,1,9669,5.00,0.00,4,'https://www.youtube.com/embed/eAjghscD6I',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(27,'Casandra Krajcik','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"3\", \"H\", \"sep\", \"H\"]}',2,2,7432,3.00,7.00,2,'https://www.youtube.com/embed/9cJ5JYA4wk',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(28,'Mr. Jamey McClure','{\"inputs\": [\"236\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"VN\", \"sep\", \"DR\"]}',1,2,6268,0.00,3.00,3,'https://www.youtube.com/embed/h4Qqkhqwg0',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(29,'Arvel Dickinson','{\"inputs\": [\"3x\", \"L\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"S\", \"sep\", \"236\", \"L\"]}',3,2,8082,7.00,1.00,3,'https://www.youtube.com/embed/RfmONMBKb0',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(30,'Aurelio Wehner','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"2x\", \"H\"]}',2,3,10216,6.00,0.00,1,'https://www.youtube.com/embed/DUKytcYPq6',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(31,'Eugenia Abshire','{\"inputs\": [\"2\", \"L\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"A2\"]}',3,3,5480,6.00,3.00,3,'https://www.youtube.com/embed/tUPcKfEyn8',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(32,'Salma Bechtelar Sr.','{\"inputs\": [\"2\", \"L\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"A2\"]}',2,3,2375,2.00,0.00,2,'https://www.youtube.com/embed/fye0lBqr6R',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(33,'Prof. Edward Kassulke DDS','{\"inputs\": [\"2\", \"L\", \"sep\", \"H\", \"sep\", \"SD\", \"sep\", \"A2\"]}',2,2,2324,0.00,6.00,2,'https://www.youtube.com/embed/7wXPJ59ccq',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(34,'Mrs. Anahi Yundt','{\"inputs\": [\"6\", \"3x\", \"L\", \"sep\", \"SD\", \"sep\", \"H\"]}',1,2,2444,1.00,3.00,4,'https://www.youtube.com/embed/Y5zzRTnCeW',1,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(35,'Nicole Simonis Jr.','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"3\", \"H\", \"sep\", \"H\"]}',3,3,3822,5.00,4.00,2,'https://www.youtube.com/embed/SbMgicW9Cf',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(36,'Toby Gerhold','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2x\", \"M\", \"sep\", \"3\", \"H\", \"sep\", \"H\"]}',2,3,2628,0.00,0.00,2,'https://www.youtube.com/embed/pNmEXdJIiA',2,'2021-05-15 04:53:21','2021-05-15 04:53:21'),(38,'Minipinho BnB','{\"inputs\": [\"2x\", \"L\", \"sep\", \"2\", \"2x\", \"M\", \"sep\", \"9\", \"M\", \"sep\", \"2\", \"H\", \"sep\", \"SD\", \"sep\", \"M\", \"sep\", \"L\", \"sep\", \"9\", \"M\", \"sep\", \"L\", \"sep\", \"2\", \"H\", \"sep\", \"4x\", \"S\", \"sep\", \"2\", \"M\"]}',0,0,3600,0.00,1.00,1,NULL,1,'2021-05-15 22:32:25','2021-05-15 22:32:25');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.com',NULL,'$2y$10$C6KIOpju0F0uQvchKdAkduxLIEf3rPXzljmOQKbvp.JyZuQ/6sy/C',NULL,'2021-05-15 04:53:20','2021-05-15 04:53:20'),(2,'random','random@random.com',NULL,'$2y$10$g1pOyCBWqhUoAKMkOgjy2.Z0o.UofgRdMGvlJblTNuEYqxVexRCb6',NULL,'2021-05-15 04:53:20','2021-05-15 04:53:20'),(3,'admin','admin@heaj.be',NULL,'$2y$10$yYoxDRbBN8QQp0kfawa/PuOtVYB8J3YnM8GcUI0JVx5z6nVNGP4Ze',NULL,'2021-05-15 15:10:00','2021-05-15 15:10:00');
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

-- Dump completed on 2021-05-18  0:00:16
