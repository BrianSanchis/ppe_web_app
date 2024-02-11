-- MariaDB dump 10.19  Distrib 10.5.18-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: web_app_db
-- ------------------------------------------------------
-- Server version	10.5.18-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `Cart`
--

LOCK TABLES `Cart` WRITE;
/*!40000 ALTER TABLE `Cart` DISABLE KEYS */;
INSERT INTO `Cart` VALUES (1,'2024-01-31 14:03:53','2024-01-31 14:03:53',4),(2,'2024-01-31 14:11:52','2024-01-31 14:11:52',4),(3,'2024-01-31 14:13:56','2024-01-31 14:13:56',4),(4,'2024-01-31 14:18:53','2024-01-31 14:18:53',4),(5,'2024-01-31 14:22:18','2024-01-31 14:22:18',4),(6,'2024-01-31 14:22:45','2024-01-31 14:22:45',4),(7,'2024-01-31 14:26:42','2024-01-31 14:26:42',4),(8,'2024-01-31 14:30:17','2024-01-31 14:30:17',4),(9,'2024-02-02 11:23:08','2024-02-02 11:23:08',4),(10,'2024-02-02 11:41:37','2024-02-02 11:41:37',4),(11,'2024-02-02 11:52:23','2024-02-02 11:52:23',4),(12,'2024-02-02 11:58:56','2024-02-02 11:58:56',4),(13,'2024-02-02 12:10:08','2024-02-02 12:10:08',4),(14,'2024-02-02 12:36:51','2024-02-02 12:36:51',4),(15,'2024-02-02 14:46:39','2024-02-02 14:46:39',4),(16,'2024-02-02 14:51:19','2024-02-02 14:51:19',4),(17,'2024-02-05 13:27:23','2024-02-05 13:27:23',4),(18,'2024-02-05 13:28:03','2024-02-05 13:28:03',4),(19,'2024-02-07 12:01:37','2024-02-07 12:01:37',4),(20,'2024-02-07 14:57:42','2024-02-07 14:57:42',4);
/*!40000 ALTER TABLE `Cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `CartLine`
--

LOCK TABLES `CartLine` WRITE;
/*!40000 ALTER TABLE `CartLine` DISABLE KEYS */;
INSERT INTO `CartLine` VALUES (1,7,31),(1,8,32),(1,9,32),(1,10,32),(1,11,31),(1,12,30),(1,13,35),(20,14,31),(1,15,32),(1,16,32),(10,17,32),(1,18,29),(1,19,30),(11,20,54);
/*!40000 ALTER TABLE `CartLine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Category`
--

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;
INSERT INTO `Category` VALUES (1,'Machine'),(2,'Medicament');
/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Order`
--

LOCK TABLES `Order` WRITE;
/*!40000 ALTER TABLE `Order` DISABLE KEYS */;
/*!40000 ALTER TABLE `Order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `OrderLine`
--

LOCK TABLES `OrderLine` WRITE;
/*!40000 ALTER TABLE `OrderLine` DISABLE KEYS */;
/*!40000 ALTER TABLE `OrderLine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Product`
--

LOCK TABLES `Product` WRITE;
/*!40000 ALTER TABLE `Product` DISABLE KEYS */;
INSERT INTO `Product` VALUES (29,'Paracétamol',5.99,'Soulage la douleur et réduit la fièvre',100,500,2),(30,'Scanner Médical',1500.00,'Scanner haute résolution pour diagnostics médicaux',10,NULL,1),(31,'Ibuprofène',7.49,'Anti-inflammatoire non stéroïdien',80,400,2),(32,'ECG Machine',2500.00,'Enregistre l activité électrique du cœur',5,NULL,1),(33,'Aspirine',4.99,'Réduit la douleur et l inflammation',120,300,2),(34,'Imagerie par Résonance Magnétique (IRM)',5000.00,'Technologie avancée pour imagerie médicale',8,NULL,1),(35,'Ventilateur Médical',3000.00,'Assistance respiratoire pour les patients',15,NULL,1),(36,'Antibiotique',12.99,'Traitement des infections bactériennes',50,NULL,2),(37,'Tomographe Axial Computé (TAC)',8000.00,'Imagerie médicale avancée en coupe transversale',7,NULL,1),(38,'Anti-allergique',9.99,'Réduit les réactions allergiques',60,NULL,2),(39,'Échographe',4000.00,'Imagerie par ultrasons pour visualiser les organes internes',12,NULL,1),(40,'Antalgique',6.49,'Réduit la sensation de douleur',90,NULL,2),(41,'Stéthoscope électronique',120.00,'Amplifie les sons corporels pour l auscultation',25,NULL,1),(42,'Antiémétique',8.99,'Previent les nausees',40,NULL,2),(43,'IRM fonctionnelle',6000.00,'Imagerie cérébrale pour étudier l activité cérébrale',6,NULL,1),(44,'Antipyrétique',5.49,'Réduit la fièvre',80,NULL,2),(45,'Dialyseur',3500.00,'Appareil pour la dialyse rénale',10,NULL,1),(46,'Vaccin',18.99,'Immunisation contre les maladies infectieuses',30,NULL,2),(47,'Laser médical',7000.00,'Utilisé en chirurgie et thérapie',8,NULL,1),(48,'Sérum physiologique',3.99,'Solution saline pour divers usages médicaux',100,NULL,2),(49,'Chirurgie robotique',12000.00,'Utilisation de robots pour des interventions chirurgicales',5,NULL,1),(50,'Antifongique',11.49,'Traitement des infections fongiques',35,NULL,2),(51,'Endoscope',2500.00,'Instrument pour l exploration visuelle des cavités internes',15,NULL,1),(52,'Vitamine C',7.99,'Supplément vitaminique essentiel',70,NULL,2),(53,'Lit médicalisé',2000.00,'Lit conçu pour les patients malades ou convalescents',20,NULL,1),(54,'Cathéter',15.99,'Tube médical pour l administration de fluides',45,NULL,2),(55,'Oxymètre de pouls',50.00,'Mesure la saturation en oxygène dans le sang',30,NULL,1),(56,'Antiseptique',4.49,'Désinfectant pour les plaies et la peau',60,NULL,2),(57,'Paracétamol',5.99,'Soulage la douleur et réduit la fièvre',100,500,2),(58,'Scanner Médical',1500.00,'Scanner haute résolution pour diagnostics médicaux',10,NULL,1),(59,'Ibuprofène',7.49,'Anti-inflammatoire non stéroïdien',80,400,2),(60,'ECG Machine',2500.00,'Enregistre l activité électrique du cœur',5,NULL,1),(61,'Aspirine',4.99,'Réduit la douleur et l inflammation',120,300,2),(62,'Imagerie par Résonance Magnétique (IRM)',5000.00,'Technologie avancée pour imagerie médicale',8,NULL,1),(63,'Ventilateur Médical',3000.00,'Assistance respiratoire pour les patients',15,NULL,1),(64,'Antibiotique',12.99,'Traitement des infections bactériennes',50,NULL,2),(65,'Tomographe Axial Computé (TAC)',8000.00,'Imagerie médicale avancée en coupe transversale',7,NULL,1),(66,'Anti-allergique',9.99,'Réduit les réactions allergiques',60,NULL,2),(67,'Échographe',4000.00,'Imagerie par ultrasons pour visualiser les organes internes',12,NULL,1),(68,'Antalgique',6.49,'Réduit la sensation de douleur',90,NULL,2),(69,'Stéthoscope électronique',120.00,'Amplifie les sons corporels pour l auscultation',25,NULL,1),(70,'Antiémétique',8.99,'Previent les nausees',40,NULL,2),(71,'IRM fonctionnelle',6000.00,'Imagerie cérébrale pour étudier l activité cérébrale',6,NULL,1),(72,'Antipyrétique',5.49,'Réduit la fièvre',80,NULL,2),(73,'Dialyseur',3500.00,'Appareil pour la dialyse rénale',10,NULL,1),(74,'Vaccin',18.99,'Immunisation contre les maladies infectieuses',30,NULL,2),(75,'Laser médical',7000.00,'Utilisé en chirurgie et thérapie',8,NULL,1),(76,'Sérum physiologique',3.99,'Solution saline pour divers usages médicaux',100,NULL,2),(77,'Chirurgie robotique',12000.00,'Utilisation de robots pour des interventions chirurgicales',5,NULL,1),(78,'Antifongique',11.49,'Traitement des infections fongiques',35,NULL,2),(79,'Endoscope',2500.00,'Instrument pour l exploration visuelle des cavités internes',15,NULL,1),(80,'Vitamine C',7.99,'Supplément vitaminique essentiel',70,NULL,2),(81,'Lit médicalisé',2000.00,'Lit conçu pour les patients malades ou convalescents',20,NULL,1),(82,'Cathéter',15.99,'Tube médical pour l administration de fluides',45,NULL,2),(83,'Oxymètre de pouls',50.00,'Mesure la saturation en oxygène dans le sang',30,NULL,1),(84,'Antiseptique',4.49,'Désinfectant pour les plaies et la peau',60,NULL,2),(85,'Scanner Portable',1200.00,'Scanner médical portable pour diagnostics rapides',15,NULL,1),(86,'Anti-hypertenseur',9.49,'Contrôle la pression artérielle',40,NULL,2),(87,'Électrocardiographe (ECG)',1800.00,'Mesure l activité électrique du cœur',12,NULL,1),(88,'Anti-diabétique',10.99,'Traitement du diabète',25,NULL,2),(89,'Moniteur de Pression Artérielle',75.00,'Mesure la pression artérielle',30,NULL,1);
/*!40000 ALTER TABLE `Product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `Role`
--

LOCK TABLES `Role` WRITE;
/*!40000 ALTER TABLE `Role` DISABLE KEYS */;
/*!40000 ALTER TABLE `Role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_reset_tokens_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',2),(3,'2019_12_14_000001_create_personal_access_tokens_table',2),(4,'2024_01_12_154859_create_Category_table',2),(5,'2024_01_12_154859_create_Order_table',3),(6,'2024_01_12_154859_create_Product_table',3),(7,'2024_01_12_154859_create_Role_table',3),(8,'2024_01_12_154859_create_User_table',3),(9,'2024_01_12_154909_create_foreign_keys',3),(10,'2024_01_22_125005_create_permission_tables',4),(11,'2024_01_12_154859_create_Cart_table',5),(12,'2024_01_12_154859_create_CartLine_table',6),(13,'2024_01_26_145925_create_shoppingcart_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',2),(2,'App\\Models\\User',4),(3,'App\\Models\\User',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Administrateur','web','2024-01-22 12:18:37','2024-01-22 12:18:37'),(2,'Client','web','2024-01-22 12:18:37','2024-01-22 12:18:37'),(3,'Gestion','web','2024-01-22 14:56:43','2024-01-22 14:56:43');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,2),(3,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrateur','web','2024-01-22 12:15:41','2024-01-22 12:15:41'),(2,'Client','web','2024-01-22 12:15:41','2024-01-22 12:15:41'),(3,'Gestion','web','2024-01-22 14:56:18','2024-01-22 14:56:18');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'admin','admin@admin.com',NULL,'$2y$12$CciyXMH64n0mJJZEE2VhnOKpW9UxEPgxuENKlU7b6vmwHUayOnJsq','QfK9zLEnHGbzswac3wGcpDcHIwZCxmlJO05zPKwgsGuoir1YPHWlKLqoF4Eo','2024-01-21 14:21:54','2024-01-21 14:21:54'),(3,'gestion','gestion@gestion.com',NULL,'$2y$12$3IxWvqToghrXs629fjXHVeOGeIXLDd3S8QmWkezaNoAI2D.XC3T3C','LEY6sRhSLywYBfxm5rjwyHV3I3BwlMMzbaY7JSUb3oqRgtv1KwvlwrQWDLS4','2024-01-21 14:22:33','2024-01-21 14:22:33'),(4,'client','client@client.com',NULL,'$2y$12$Pt5pct/bROnztbIdUYacceMKIvqlrWJr3DH29xHvMUoNqJKRB0ebC','yW48UERjPqSsa4sS77oqxGK2aVyd7I6i2BbL6oN9kvcenn0RvLoL2eVeRT2e','2024-01-21 14:23:11','2024-01-21 14:23:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-11 13:22:40
