-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: life3car
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id_cars` int(11) NOT NULL AUTO_INCREMENT,
  `marka` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `model` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `generacja` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_cars`)
) ENGINE=InnoDB AUTO_INCREMENT=384 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Alfa Romeo','147','I'),(2,'Alfa Romeo','147','II'),(3,'Alfa Romeo','156',''),(4,'Alfa Romeo','159',''),(5,'Alfa Romeo','166',''),(6,'Alfa Romeo','4C',''),(7,'Alfa Romeo','Brera',''),(8,'Alfa Romeo','Crosswagon',''),(9,'Alfa Romeo','Giulia',''),(10,'Alfa Romeo','Giulietta',''),(11,'Alfa Romeo','GT',''),(12,'Alfa Romeo','MiTo',''),(13,'Alfa Romeo','Stelvio',''),(14,'Aston Martin','DB','DB9'),(15,'Aston Martin','V8 Vantage',''),(16,'Aston Martin','Vanquish',''),(17,'Audi','A1','I'),(18,'Audi','A1','II'),(19,'Audi','A2',''),(20,'Audi','A3','8L'),(21,'Audi','A3','8P'),(22,'Audi','A3','8V'),(23,'Audi','A3','8Y'),(24,'Audi','A4','B5'),(25,'Audi','A4','B6'),(26,'Audi','A4','B7'),(27,'Audi','A4','B7'),(28,'Audi','A4','B8'),(29,'Audi','A4','B9'),(30,'Audi','A5','I'),(31,'Audi','A5','II'),(32,'Audi','A6','C4'),(33,'Audi','A6','C5'),(34,'Audi','A6','C6'),(35,'Audi','A6','C7'),(36,'Audi','A6','C8'),(37,'Audi','A7','4G'),(38,'Audi','A7','4K'),(40,'Audi','A8','D2'),(41,'Audi','A8','D3'),(42,'Audi','A8','D4'),(43,'Audi','A8','D5'),(44,'Audi','Coupe','B4'),(45,'Audi','Q2',''),(46,'Audi','Q3','I'),(47,'Audi','Q3','II'),(48,'Audi','Q5','I'),(49,'Audi','Q5','II'),(50,'Audi','Q7','4L'),(51,'Audi','Q7','4M'),(52,'Audi','Q8',''),(53,'Audi','R8','I'),(54,'Audi','R8','II'),(55,'Audi','RS3',''),(56,'Audi','RS4','B5'),(57,'Audi','RS4','B7'),(58,'Audi','RS4','B8'),(59,'Audi','RS5',''),(60,'Audi','RS7',''),(61,'Audi','RSQ3',''),(62,'Audi','S2',''),(63,'Audi','S3','8L'),(64,'Audi','S3','8P'),(65,'Audi','S3','8V'),(66,'Audi','S3','8Y'),(67,'Audi','S4','B5'),(68,'Audi','S4','B6'),(69,'Audi','S4','B7'),(70,'Audi','S4','B7'),(71,'Audi','S4','B8'),(72,'Audi','S4','B9'),(73,'Audi','S5',''),(74,'Audi','S6','C4'),(75,'Audi','S6','C5'),(76,'Audi','S6','C6'),(77,'Audi','S6','C7'),(78,'Audi','S6','C8'),(79,'Audi','S7','C8'),(80,'Audi','S8','D2'),(81,'Audi','S8','D3'),(82,'Audi','TT','8J'),(83,'Audi','TT','8N'),(84,'Audi','TT','8S'),(85,'Bentley','Arnage',''),(86,'Bentley','Continental GT',''),(87,'BMW','1','E81/E82/E87/E88'),(88,'BMW','1','F20'),(89,'BMW','1','F40'),(90,'BMW','1M','E82'),(91,'BMW','1M','F20'),(92,'BMW','2','F22/F23/F45/F'),(93,'BMW','2','F44'),(94,'BMW','3','E36'),(95,'BMW','3','E46'),(96,'BMW','3','E90/E91/E92/E93'),(97,'BMW','3','F30'),(98,'BMW','3','G20'),(99,'BMW','4','F32'),(100,'BMW','4','G22'),(101,'BMW','5','E34'),(102,'BMW','5','E39'),(103,'BMW','5','E60/61'),(104,'BMW','5','F10/11'),(105,'BMW','5','G30/31'),(106,'BMW','6','E63/64'),(107,'BMW','6','F06/12/13'),(108,'BMW','7','E38'),(109,'BMW','7','E65/66/67'),(110,'BMW','7','F01/02'),(111,'BMW','7','G11/12'),(112,'BMW','8','E31'),(113,'BMW','8','G15'),(114,'BMW','M2',''),(115,'BMW','M3','E46'),(116,'BMW','M3','E90/92/93'),(117,'BMW','M3','F80'),(118,'BMW','M4','F82'),(119,'BMW','M4','G82'),(120,'BMW','M5','E93'),(121,'BMW','M5','E60/61'),(122,'BMW','M5',''),(123,'BMW','M6','E63/63'),(124,'BMW','M6','F12/13'),(125,'BMW','X1','E84'),(126,'BMW','X1','F48'),(127,'BMW','X2',''),(128,'BMW','X3','E83'),(129,'BMW','X3','F25'),(130,'BMW','X3','G01'),(131,'BMW','X4','F26'),(132,'BMW','X4','G02'),(133,'BMW','X5','E53'),(134,'BMW','X5','E70'),(135,'BMW','X5','F15'),(136,'BMW','X5','G05'),(137,'BMW','X6','E71'),(138,'BMW','X6','F16'),(139,'BMW','X6','G06'),(140,'BMW','X7','G07'),(141,'BMW','Z3','E36'),(142,'Bugatti','Veyron',''),(143,'Chevrolet','Aveo','T300'),(144,'Chevrolet','Camaro','V'),(145,'Chevrolet','Captiva',''),(146,'Chevrolet','Cruze',''),(147,'Chevrolet','Epica',''),(148,'Chevrolet','Lacetti',''),(149,'Chevrolet','Malibu',''),(150,'Chevrolet','Orlando',''),(151,'Ford','C-Max','MK1'),(152,'Ford','C-Max','MK2'),(153,'Ford','Escort',''),(154,'Ford','Expiorer','IV'),(155,'Ford','Fiesta','V'),(156,'Ford','Fiesta','VI'),(157,'Ford','Fiesta','VII'),(158,'Ford','Fiesta','VIII'),(159,'Ford','Focus','MK1'),(160,'Ford','Focus','MK2'),(161,'Ford','Focus','MK3'),(162,'Ford','Focus','MK4'),(163,'Ford','Galaxy','I'),(164,'Ford','Galaxy','II'),(165,'Ford','Galaxy','III'),(166,'Ford','Kuga','I'),(167,'Ford','Kuga','II'),(168,'Ford','Kuga','III'),(169,'Ford','Mondeo','MK3'),(170,'Ford','Mondeo','MK4'),(171,'Ford','Mondeo','MK5'),(172,'Ford','Mondeo','MK5(FL)'),(173,'Ford','Mustang',''),(175,'Ford','Probe',''),(176,'Ford','Puma','Puma(ECT)'),(177,'Ford','Puma','Puma'),(178,'Ford','Ranger','II'),(179,'Ford','Ranger','III'),(180,'Ford','Ranger','III(FL)'),(181,'Ford','Sierra',''),(182,'Ford','S-Max','I'),(183,'Ford','S-Max','II'),(189,'Honda','Accord','VI'),(190,'Honda','Accord','VII'),(191,'Honda','Accord','VIII'),(192,'Honda','Accord','X'),(193,'Honda','Civic','VII'),(194,'Honda','Civic','VIII'),(195,'Honda','Civic','IX'),(196,'Honda','Civic','X'),(197,'Honda','CR-V','II'),(198,'Honda','CR-V','III'),(199,'Honda','CR-V','IV'),(200,'Honda','CR-V','V'),(201,'Honda','FR-V',''),(202,'Honda','HR-V','I'),(203,'Honda','HR-V','II'),(204,'Honda','S2000',''),(205,'Hyundai','Accent',''),(206,'Hyundai','Getz',''),(207,'Hyundai','i20','I'),(208,'Hyundai','i20','II'),(209,'Hyundai','i30','I'),(210,'Hyundai','i30','II'),(211,'Hyundai','i30','III'),(212,'Hyundai','i40','I'),(213,'Hyundai','i40','I(FL)'),(214,'Hyundai','ix20',''),(215,'Hyundai','ix35',''),(216,'Hyundai','ix55',''),(217,'Hyundai','Sonata',''),(218,'Hyundai','Terracan','II'),(219,'Hyundai','Tuscon','I'),(220,'Hyundai','Tuscon','II'),(221,'Hyundai','Tuscon','III'),(222,'Kia','Ceed','I'),(223,'Kia','Ceed','II'),(224,'Kia','Ceed','III'),(225,'Kia','Mohave',''),(226,'Kia','Optima','TF'),(227,'Kia','Optima','JF'),(228,'Kia','Optima','IV'),(229,'Kia','Picanto','I'),(230,'Kia','Picanto','II'),(231,'Kia','Picanto','III'),(232,'Kia','Picanto','III(FL)'),(233,'Kia','Rio','III'),(234,'Kia','Rio','IV'),(235,'Kia','Soul','II'),(236,'Kia','Soul','III'),(237,'Kia','Sportage','I'),(238,'Kia','Sportage','II'),(239,'Kia','Sportage','III'),(240,'Kia','Sportage','IV'),(241,'Kia','Venga',''),(242,'Kia','Stonic',''),(243,'Lamborghini','Galardo',''),(244,'Lamborghini','Murcielago',''),(245,'Mazda','2','DY'),(246,'Mazda','2','DE'),(247,'Mazda','2','DJ'),(248,'Mazda','3','BK'),(249,'Mazda','3','BL'),(250,'Mazda','3','BM'),(251,'Mazda','3','IV'),(252,'Mazda','6','I'),(253,'Mazda','6','II'),(254,'Mazda','6','III'),(255,'Mazda','CX3',''),(256,'Mazda','CX-5','I'),(257,'Mazda','CX-5','II'),(258,'Mazda','CX-7',''),(259,'Mazda','MX-5',''),(260,'Mazda','Premacy','I'),(261,'Mazda','RX-8',''),(263,'Mercedes','A','W176'),(264,'Mercedes','A','W177'),(265,'Mercedes','AMG-GT',''),(266,'Mercedes','CLA','I'),(267,'Mercedes','CLA','II'),(268,'Mercedes','CLS','C219'),(269,'Mercedes','CLS','C218'),(270,'Mercedes','CLS','C257'),(271,'Mercedes','E','W212'),(272,'Mercedes','E','W213'),(273,'Mercedes','E','W213(FL)'),(274,'Mercedes','G','W463'),(275,'Mercedes','G','W464'),(276,'Mercedes','GLA',''),(277,'Mercedes','CLC','I'),(278,'Mercedes','GLC','I(FL)'),(279,'Mercedes','GLE','W166'),(280,'Mercedes','GLE','W167'),(281,'Mercedes','GLS',''),(282,'Mercedes','S','W220'),(283,'Mercedes','S','W221'),(284,'Mercedes','S','W222'),(285,'Mercedes','R','W251'),(286,'Opel','Astra','G'),(287,'Opel','Astra','H'),(288,'Opel','Astra','J'),(289,'Opel','Astra','K'),(290,'Opel','Corsa','C'),(291,'Opel','Corsa','D'),(292,'Opel','Corsa','E'),(293,'Opel','Corsa','F'),(294,'Opel','GT',''),(295,'Opel','Insignia','I'),(296,'Opel','Insignia','II'),(297,'Opel','Insignia','II(FL)'),(298,'Opel','Mokka',''),(299,'Opel','Mokka','X'),(300,'Opel','Mokka','B'),(301,'Opel','Signum',''),(302,'Opel','Tigra','B TwinTop'),(303,'Opel','Vectra','C'),(304,'Renault','Clio','III'),(305,'Renault','Clio','IV'),(306,'Renault','Clio','V'),(307,'Renault','Laguna','III'),(308,'Renault','Latitude',''),(309,'Renault','Talisman',''),(310,'Seat','Altea',''),(311,'Seat','Cordoba','6L'),(312,'Seat','Ibiza','III'),(313,'Seat','Ibiza','IV'),(314,'Seat','Ibiza','V'),(315,'Seat','Ibiza','V(FL)'),(316,'Seat','Leon','1M'),(317,'Seat','Leon','1P'),(318,'Seat','Leon','5F'),(319,'Seat','Leon','IV'),(320,'Skoda','Fabia','II'),(321,'Skoda','Fabia','III'),(322,'Skoda','Octavia','II'),(323,'Skoda','Octavia','III'),(324,'Skoda','Octavia','IV'),(325,'Skoda','Rapid',''),(326,'Skoda','Superb','I'),(327,'Skoda','Superb','II'),(328,'Skoda','Superb','III'),(329,'Skoda','Superb','III(FL)'),(330,'Subaru','BRZ',''),(331,'Subaru','Impreza','III'),(332,'Subaru','Impreza','IV'),(333,'Subaru','Impreza','V'),(334,'Volkswagen','Arteon','I'),(335,'Volkswagen','Arteon','I(FL)'),(336,'Volkswagen','Bora',''),(337,'Volkswagen','Golf','IV'),(338,'Volkswagen','Golf','V'),(339,'Volkswagen','Golf','VI'),(340,'Volkswagen','Golf','VII'),(341,'Volkswagen','Golf','VIII'),(342,'Volkswagen','Jetta','V'),(343,'Volkswagen','Jetta','VI'),(344,'Volkswagen','Jetta','VI FL'),(345,'Volkswagen','Jetta','VII'),(346,'Volkswagen','Passat','B5'),(347,'Volkswagen','Passat','B6'),(348,'Volkswagen','Passat','CC'),(349,'Volkswagen','Passat','B7'),(350,'Volkswagen','Passat','B8'),(351,'Volkswagen','Passat','B8(FL)'),(352,'Volkswagen','Phaeton',''),(353,'Volkswagen','Polo','6R'),(354,'Volkswagen','Polo','6C'),(355,'Volkswagen','Polo','VI'),(356,'Volkswagen','Scirocco',''),(357,'Volkswagen','Tiguan','I'),(358,'Volkswagen','Tiguan','II'),(359,'Volkswagen','Tiguan','II(FL)'),(360,'Volvo','C30',''),(361,'Volvo','C70','II'),(362,'Volvo','S40','I'),(363,'Volvo','S40','II'),(364,'Volvo','S60','I'),(365,'Volvo','S60','II'),(366,'Volvo','S60','III'),(367,'Volvo','S70',''),(368,'Volvo','S80','I'),(369,'Volvo','S80','II'),(370,'Volvo','S90',''),(371,'Volvo','V40','II'),(372,'Volvo','V50',''),(373,'Volvo','V60','I'),(374,'Volvo','V60','II'),(375,'Volvo','V70','III'),(376,'Volvo','V90',''),(377,'Volvo','XC40',''),(378,'Volvo','XC60','I'),(379,'Volvo','XC60','II'),(380,'Volvo','XC70','I'),(381,'Volvo','XC70','II'),(382,'Volvo','XC90','I'),(383,'Volvo','XC90','II');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `czesci`
--

DROP TABLE IF EXISTS `czesci`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `czesci` (
  `id_czesci` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_czesci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `czesci`
--

LOCK TABLES `czesci` WRITE;
/*!40000 ALTER TABLE `czesci` DISABLE KEYS */;
/*!40000 ALTER TABLE `czesci` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disneypluses`
--

DROP TABLE IF EXISTS `disneypluses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disneypluses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `show_name` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `lead_actor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disneypluses`
--

LOCK TABLES `disneypluses` WRITE;
/*!40000 ALTER TABLE `disneypluses` DISABLE KEYS */;
/*!40000 ALTER TABLE `disneypluses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `employees_id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `stanowisko` varchar(100) NOT NULL,
  PRIMARY KEY (`employees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Jan','Kowalski','Mechanik'),(2,'Michał','Polakowski','Mechanik'),(3,'Piotr','Nowak','Mechanik'),(4,'Dawid','Kowalski','Mechanik'),(5,'Krzysztof','Florek','Mechanik'),(6,'Kacper','Sroka','Mechanik'),(7,'Kondrad','Twaróg','Mechanik-elektryk'),(8,'Aleksander','Nowak','Mechanik-elektryk'),(9,'Jan','Banach','Detailingowiec'),(10,'Radosław','Strug','Detailingowiec'),(11,'Dominik','Więcek','Manager\r\n'),(12,'Zuzanna','Curzydło','Obsługa klienta\r\n'),(13,'Rafał ','Woźniak','Obsługa klienta\r\n'),(14,'Hubert','Młynarczyk','Obsługa klienta\r\n'),(15,'Karolina','Czachura','Sekretarka\r\n\r\n'),(16,'Teresa','Mirek','Księgowa\r\n');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(8,'2022_05_03_215920_add_phone_number_and_surname_columns_to_users_table',2),(10,'2022_05_09_203631_add_role_column_to_users_table',3),(11,'2022_05_23_224433_create_disneypluses_table',4),(20,'2022_06_07_140323_add_foreign_key_to_profiles',8),(21,'2022_05_14_212235_create_profiles_table',9),(23,'2022_06_05_163116_create_order_services_table',10),(26,'2022_06_05_153746_create_orders_table',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mistake`
--

DROP TABLE IF EXISTS `mistake`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mistake` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mistake_user_id_foreign` (`user_id`),
  CONSTRAINT `mistake_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mistake`
--

LOCK TABLES `mistake` WRITE;
/*!40000 ALTER TABLE `mistake` DISABLE KEYS */;
/*!40000 ALTER TABLE `mistake` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_uslugi`
--

DROP TABLE IF EXISTS `order_uslugi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_uslugi` (
  `order_id` bigint(20) unsigned NOT NULL,
  `uslugi_id` bigint(20) unsigned NOT NULL,
  `liczba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_uslugi`
--

LOCK TABLES `order_uslugi` WRITE;
/*!40000 ALTER TABLE `order_uslugi` DISABLE KEYS */;
INSERT INTO `order_uslugi` VALUES (1,2,1),(1,6,5),(2,9,1);
/*!40000 ALTER TABLE `order_uslugi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'złożono',
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,6,5120.00,'Zatwierdzone','2024-02-16 02:58:00','2024-01-19 18:05:00','2024-01-17 14:49:46','2024-01-17 15:52:31',17),(2,1,250.00,'Zatwierdzone','2024-01-17 17:35:00','2024-01-17 17:35:00','2024-01-17 15:33:39','2024-01-17 17:35:36',17);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `car_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `houseNumber` bigint(20) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_id` (`car_id`),
  CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id_cars`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (5,17,12,NULL,'Cieniawa','Cieniawa',281,'33-333','2024-01-17 14:30:15','2024-01-17 14:30:17');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (17,'Michał','Badowski','662111231','mimi2222@vp.pl','user','2024-01-17 14:28:33','$2y$10$yfVEAsoPf5PoaUqGZLz1EOYjrIJcvaadYZfYcUSopapHBGfWbPtoi',NULL,'2024-01-17 14:28:10','2024-01-17 14:28:33'),(18,'Andzej','Duda','312123111','tiger12369@onet.pl','admin','2024-01-17 14:33:52','$2y$10$A5SrJ6PI7pCptD402I9fzeiqCGHjQfR.IWPTzd5ZLuDRVZXhJ9YKG',NULL,'2024-01-17 14:31:58','2024-01-17 14:33:52');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uslugi`
--

DROP TABLE IF EXISTS `uslugi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typ_uslugi` varchar(255) NOT NULL,
  `nazwa_uslugi` varchar(255) NOT NULL,
  `czas_realizacji` varchar(255) NOT NULL,
  `cena_brutto` bigint(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uslugi`
--

LOCK TABLES `uslugi` WRITE;
/*!40000 ALTER TABLE `uslugi` DISABLE KEYS */;
INSERT INTO `uslugi` VALUES (2,'detailing','Czyszczenie komory silnika','2-3h',1234,NULL,'2024-01-17 15:17:25'),(3,'detailing','Renowacja reflektorów i lamp','2h',150,NULL,NULL),(4,'detailing','1 etapowe polerowanie lakieru','8-12h',400,NULL,NULL),(5,'detailing','2 etapowe polerowanie lakieru ','	\r\n24-48h',700,NULL,NULL),(6,'detailing','3 etapowe polerowanie lakieru','48-72h',1000,NULL,NULL),(7,'detailing','Przygotowanie samochodu do sprzedaży','48h',500,NULL,NULL),(8,'detailing','Sprzątanie wnętrza','1-2h',40,NULL,NULL),(9,'detailing','Pranie tapicerki z materiału','2-4h',250,NULL,NULL),(10,'detailing','Czyszczenie skórzanej tapicerki','3-4h',250,NULL,NULL),(11,'detailing','Pielęgnacja wnętrza(komplet)','7-8h',400,NULL,NULL),(12,'detailing','Ozonowanie','1h',100,NULL,NULL),(13,'detailing','Wosk premium ZYMOL','3-4h',300,NULL,NULL),(14,'detailing','Wosk syntetyczny SOFT99','3-4h',200,NULL,NULL),(15,'detailing','Powłoka 2 letnia na lakier Q-GLYM AIO+','24h',1400,NULL,NULL),(16,'detailing','Powłoka 3 letnia na lakier Q-GLYM PREMIUM EVOLUTION','24h',1800,NULL,NULL),(17,'detailing','Powłoka 5 letnia na lakier Q-GLYM PREMIUM PRESTIGE','24h',2400,NULL,NULL),(18,'detailing','Powłoka ceramiczna na felgi Q-GLYM WHEEL PROTECTOR','5-6h',300,NULL,NULL),(19,'detailing','Powłoka hydrofobowa na szyby Q-GLYM CRYSTALCOAT PRO','5-6h',250,NULL,NULL),(20,'detailing','Powłoka na zewnętrzne elementy plastikowe Q-GLYM PLASTIC PROTECTOR','4-5h',150,NULL,NULL),(21,'detailing','Powłoka na wewnętrzne elementy skórzane GYEON LEATHERSHIELD','2-3h',250,NULL,NULL),(22,'detailing','Folia ochronna na relfektory/lampy PREMIUMSHIELD','6h',350,NULL,NULL),(23,'detailing','Folia ochronna na parapet bagażnika PREMIUMSHIELD','6h',300,NULL,NULL),(24,'detailing','Folia ochronna na wnęki klamek PREMIUMSHIELD','6h',150,NULL,NULL),(25,'detailing','Folia ochronna na lusterka PREMIUMSHIELD','6h',250,NULL,NULL),(26,'chip-tuning','Chiptuning - silniki benzynowe','6h',1300,NULL,NULL),(27,'chip-tuning','Chiptuning - silniki diesla','6h',1350,NULL,NULL),(28,'chip-tuning','Elektroniczne wyłączenie filtra cząstek stałych FAP/DPF/SCR','2h',800,NULL,NULL),(29,'chip-tuning','Mechaniczny demontaż filtra cząstek stałych','8h',200,NULL,NULL),(30,'chip-tuning','Korekta dawki rozruchowej w samochodach osobowych','1h',350,NULL,NULL),(31,'chip-tuning','Elektroniczne usunięcie EGR.','2h',350,NULL,NULL),(32,'chip-tuning','Przeprogramowanie skrzyni DSG','5h',1200,NULL,NULL),(33,'chip-tuning','Usunięcie limitera, drugiej sondy lambda','8h',700,NULL,NULL),(34,'chip-tuning','Chiptuning z elektronicznym wyłączeniem filtra cząstek stałych FAP/DPF/SCR','24h',2000,NULL,NULL),(35,'chip-tuning','Zakładanie/przesuwanie limitera prędkości','6h',700,NULL,NULL),(36,'chip-tuning','Wgranie oprogramowania','5h',300,NULL,NULL),(38,'malowanie','Maska','1-2h',150,NULL,NULL),(39,'malowanie','Błotnik','24h',250,NULL,NULL),(40,'malowanie','Próg','48h',120,NULL,NULL),(41,'malowanie','Drzwi','24h',400,NULL,NULL),(44,'Typ usługi2','Nazwa usługi2','3',2132,'2022-05-23 17:54:26','2022-05-23 17:54:26'),(45,'Typ usługi','Nazwa usługi','Czas realizacji',0,'2022-05-23 17:54:52','2022-05-23 17:54:52'),(46,'Typ usługi','Nazwa usługi','Czas realizacji',0,'2022-05-23 17:55:52','2022-05-23 17:55:52'),(47,'Typ usługi','Nazwa usługi','Czas realizacji',0,'2022-05-23 17:56:02','2022-05-23 17:56:02'),(48,'Typ usługi1','Nazwa usługi1','3',123,'2022-05-25 19:02:57','2022-05-25 19:02:57'),(49,'Typ usługi1','Nazwa usługi1','3',123,'2022-05-25 19:03:27','2022-05-25 19:03:27'),(50,'Typ usługi1','Nazwa usługi1','3',123,'2022-05-25 19:03:30','2022-05-25 19:03:30'),(51,'Typ usługi1','Nazwa usługi1','3',123,'2022-05-25 19:04:44','2022-05-25 19:04:44'),(52,'Typ usługi1','Nazwa usługi1','23',123312,'2022-05-25 19:08:32','2022-05-25 19:08:32'),(53,'Typ usługi1','Nazwa usługi1','123',123123,'2022-05-25 19:08:49','2022-05-25 19:08:49'),(54,'Typ usługi111','Nazwa usługi1','3',312,'2022-05-25 19:09:32','2022-05-25 19:09:32');
/*!40000 ALTER TABLE `uslugi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-17 19:39:08
