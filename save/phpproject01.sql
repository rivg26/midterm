-- MariaDB dump 10.19  Distrib 10.4.18-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: phpproject01
-- ------------------------------------------------------
-- Server version	10.4.18-MariaDB

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
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `recordUser` varchar(240) NOT NULL,
  `recordHistory` varchar(240) NOT NULL,
  `recordDate` datetime NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
INSERT INTO `records` VALUES (36,'gregoriosamplecode26@gmail.com','Log In Authenticated','2021-04-20 23:03:13'),(61,'gregoriosamplecode26@gmail.com','Log In','2021-04-21 00:26:20'),(62,'gregoriosamplecode26@gmail.com','Log In Authenticated','2021-04-21 00:26:47'),(63,'gregoriosamplecode26@gmail.com','Log Out','2021-04-21 00:27:22'),(64,'gregoriosamplecode26@gmail.com','Forgot Password','2021-04-21 00:27:30'),(65,'gregoriosamplecode26@gmail.com ','Password Updated','2021-04-21 00:27:46'),(66,'gregoriosamplecode26@gmail.com','Log In','2021-04-21 00:27:59'),(67,'gregoriosamplecode26@gmail.com','Log In Authenticated','2021-04-21 00:28:17'),(68,'gregoriosamplecode26@gmail.com','Log Out','2021-04-21 00:28:57'),(69,'rivg26','Log In','2021-04-28 23:16:54'),(70,'gregoriosamplecode26@gmail.com','Log In Authenticated','2021-04-28 23:17:24'),(71,'gregoriosamplecode26@gmail.com','Log Out','2021-04-28 23:17:59'),(72,'kat26','Log In','2021-04-28 23:26:30'),(73,'kate26@gmail.com','Log In Authenticated','2021-04-28 23:27:02'),(74,'kate26@gmail.com','Log Out','2021-04-28 23:27:05'),(75,'michael99','Log In','2021-04-28 23:33:32'),(76,'michaelreboya@gmail.com','Log In Authenticated','2021-04-28 23:34:05'),(77,'michaelreboya@gmail.com','Log Out','2021-04-28 23:34:27'),(78,'michael99','Log In','2021-04-28 23:34:34'),(79,'michaelreboya@gmail.com','Log In Authenticated','2021-04-28 23:34:52'),(80,'michaelreboya@gmail.com','Log Out','2021-04-28 23:34:59'),(81,'michaelreboya@gmail.com','Forgot Password','2021-04-28 23:35:15'),(82,'michaelreboya@gmail.com ','Password Updated','2021-04-28 23:35:29'),(83,'michael99','Log In','2021-04-28 23:35:53'),(84,'michaelreboya@gmail.com','Log In Authenticated','2021-04-28 23:36:05'),(85,'michaelreboya@gmail.com','Log Out','2021-04-28 23:36:27'),(86,'admin','Log In','2021-05-11 23:32:22'),(87,'admin@gmail.com','Log In Authenticated','2021-05-11 23:32:34'),(88,'admin@gmail.com','Log Out','2021-05-11 23:32:37'),(89,'gregoriosamplecode26@gmail.com','Log In','2021-05-11 23:32:54'),(90,'gregoriosamplecode26@gmail.com','Log In Authenticated','2021-05-11 23:33:06'),(91,'gregoriosamplecode26@gmail.com','Log Out','2021-05-11 23:33:08'),(92,'admin','Log In','2021-05-11 23:33:15'),(93,'admin@gmail.com','Log In Authenticated','2021-05-11 23:33:30'),(94,'admin','Log In','2021-05-12 00:06:06'),(95,'admin@gmail.com','Log In Authenticated','2021-05-12 00:06:24'),(96,'admin','Log In','2021-05-12 00:29:01'),(97,'admin@gmail.com','Log In Authenticated','2021-05-12 00:29:17'),(98,'admin','Log In','2021-05-12 00:44:14'),(99,'admin@gmail.com','Log In Authenticated','2021-05-12 00:44:29'),(100,'admin','Log In','2021-05-12 01:19:06'),(101,'admin@gmail.com','Log In Authenticated','2021-05-12 01:19:20'),(102,'admin','Log In','2021-05-12 01:28:15'),(103,'admin','Log In','2021-05-12 01:28:23'),(104,'admin','Log In','2021-05-12 01:28:42'),(105,'admin@gmail.com','Log In Authenticated','2021-05-12 01:28:57'),(106,'admin','Log In','2021-05-12 01:36:06'),(107,'admin@gmail.com','Log In Authenticated','2021-05-12 01:36:21'),(108,'admin','Log In','2021-05-12 02:02:28'),(109,'admin@gmail.com','Log In Authenticated','2021-05-12 02:02:42');
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `usersId` int(11) NOT NULL AUTO_INCREMENT,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `userVcode` varchar(240) NOT NULL,
  `userVtoken` varchar(240) NOT NULL,
  `userDateTime` datetime NOT NULL,
  PRIMARY KEY (`usersId`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (50,'Ron Ivin Gregorio','gregoriosamplecode26@gmail.com','rivg26','$2y$10$TMQqPWmX5roiRvDimZdOA.h/41jwTvNJa/DuEjCnJR1uDPLm3Ksgu','egpfoKnE','1','2021-03-24 20:21:12'),(51,'Mary Jane Araza','arazajane@gmail.com','jane26','$2y$10$TMQqPWmX5roiRvDimZdOA.h/41jwTvNJa/DuEjCnJR1uDPLm3Ksgu','yPO7pXzU','1','2021-03-24 21:29:48'),(53,'Kate Casakit','katecasakit@gmail.com','kate26','$2y$10$TMQqPWmX5roiRvDimZdOA.h/41jwTvNJa/DuEjCnJR1uDPLm3Ksgu','DFO2fLj5','0','2021-04-06 08:54:56'),(54,'Ron Ivin Gregorio','gregorioron26@gmail.com','ronl08','$2y$10$TMQqPWmX5roiRvDimZdOA.h/41jwTvNJa/DuEjCnJR1uDPLm3Ksgu','HOQhD8cP','1','2021-04-28 23:27:47'),(55,'Kate Casakit','kate26@gmail.com','kat26','$2y$10$TMQqPWmX5roiRvDimZdOA.h/41jwTvNJa/DuEjCnJR1uDPLm3Ksgu','KI9hO42q','1','2021-04-28 23:31:09'),(56,'Michael Reboya','michaelreboya@gmail.com','michael99','$2y$10$TMQqPWmX5roiRvDimZdOA.h/41jwTvNJa/DuEjCnJR1uDPLm3Ksgu','Hnu7Z0eb','1','2021-04-28 23:37:24'),(57,'Ron Ivin','admin@gmail.com','admin','$2y$10$W8XhgJgVJz5IJFUMpCJOnuQ.XecwsTYzsnzptKxO96FUKZEV9xr3G','UL6C5pZo','1','2021-05-11 23:36:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userslogin`
--

DROP TABLE IF EXISTS `userslogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userslogin` (
  `usersLogInID` int(10) NOT NULL AUTO_INCREMENT,
  `usersID` int(11) NOT NULL,
  `usersEmail` varchar(240) NOT NULL,
  `usersLogInDate` datetime NOT NULL,
  `usersLogInCode` varchar(240) NOT NULL,
  `usersLogInExp` varchar(10) NOT NULL,
  PRIMARY KEY (`usersLogInID`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userslogin`
--

LOCK TABLES `userslogin` WRITE;
/*!40000 ALTER TABLE `userslogin` DISABLE KEYS */;
INSERT INTO `userslogin` VALUES (42,49,'katecasakit@gmail.com','2021-03-24 20:04:42','048591','1'),(43,49,'katecasakit@gmail.com','2021-03-24 20:05:05','942015','1'),(46,50,'gregoriosamplecode26@gmail.com','2021-03-24 20:17:35','796380','1'),(47,50,'gregoriosamplecode26@gmail.com','2021-03-24 20:18:00','057491','1'),(48,50,'gregoriosamplecode26@gmail.com','2021-03-24 20:19:20','890517','1'),(49,50,'gregoriosamplecode26@gmail.com','2021-03-24 20:20:22','903827','1'),(50,50,'gregoriosamplecode26@gmail.com','2021-03-24 20:21:56','361745','1'),(51,50,'gregoriosamplecode26@gmail.com','2021-04-06 15:28:41','780691','1'),(52,50,'gregoriosamplecode26@gmail.com','2021-04-06 15:31:36','341725','1'),(53,50,'gregoriosamplecode26@gmail.com','2021-04-06 16:52:20','312409','1'),(54,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:03:22','830219','1'),(55,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:10:30','789520','1'),(56,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:11:44','932670','1'),(57,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:13:53','738914','1'),(58,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:15:17','429160','1'),(59,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:16:12','906274','1'),(60,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:17:54','827064','1'),(61,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:18:24','725863','1'),(62,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:36:32','067214','1'),(63,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:41:58','842376','1'),(64,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:43:24','692145','1'),(65,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:53:39','507416','1'),(66,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:55:10','195368','1'),(67,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:58:24','693085','1'),(68,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:58:59','270581','1'),(69,50,'gregoriosamplecode26@gmail.com','2021-04-06 17:59:47','163845','1'),(70,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:02:54','513269','1'),(71,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:04:41','397815','1'),(72,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:08:25','538904','1'),(73,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:09:16','674981','1'),(74,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:13:58','925438','1'),(75,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:14:33','753098','1'),(76,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:15:36','371405','1'),(77,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:16:59','396514','1'),(78,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:24:52','561743','1'),(79,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:26:03','728364','1'),(80,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:27:29','158679','1'),(81,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:38:02','251769','1'),(82,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:38:45','671034','1'),(83,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:39:19','590417','1'),(84,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:40:07','624530','1'),(85,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:40:47','483095','1'),(86,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:42:48','213870','1'),(87,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:43:14','960731','1'),(88,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:52:18','629017','1'),(89,50,'gregoriosamplecode26@gmail.com','2021-04-06 18:59:31','821546','1'),(90,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:03:55','904385','1'),(91,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:04:58','937245','1'),(92,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:05:32','962387','1'),(93,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:08:42','201678','1'),(94,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:08:53','857640','1'),(95,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:21:20','056829','1'),(96,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:22:40','876293','1'),(97,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:23:55','720156','1'),(98,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:27:35','841036','1'),(99,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:35:24','139607','1'),(100,50,'gregoriosamplecode26@gmail.com','2021-04-06 19:58:16','130472','1'),(101,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:00:28','376829','1'),(102,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:01:04','243867','1'),(103,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:16:47','261570','1'),(104,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:18:41','803267','1'),(105,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:22:45','480972','1'),(106,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:24:03','658731','1'),(107,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:38:58','427516','1'),(108,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:39:05','469385','1'),(109,50,'gregoriosamplecode26@gmail.com','2021-04-06 20:39:16','241986','1'),(110,50,'gregoriosamplecode26@gmail.com','2021-04-20 15:35:44','348256','1'),(111,50,'gregoriosamplecode26@gmail.com','2021-04-20 20:39:33','630529','1'),(112,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:28:50','347195','1'),(113,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:41:26','981073','1'),(114,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:42:11','297310','1'),(115,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:45:37','527460','1'),(116,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:46:49','014865','1'),(117,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:48:13','498507','1'),(118,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:49:26','964021','1'),(119,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:50:59','546023','1'),(120,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:53:26','863597','1'),(121,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:56:44','415807','1'),(122,50,'gregoriosamplecode26@gmail.com','2021-04-20 21:59:33','630517','1'),(123,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:00:54','143592','1'),(124,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:03:08','648537','1'),(125,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:04:40','647891','1'),(126,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:44:03','562038','1'),(127,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:46:15','467283','1'),(128,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:48:02','873509','1'),(129,50,'gregoriosamplecode26@gmail.com','2021-04-20 22:49:05','301895','1'),(130,50,'gregoriosamplecode26@gmail.com','2021-04-20 23:04:01','243708','1'),(131,50,'gregoriosamplecode26@gmail.com','2021-04-20 23:20:33','203178','1'),(132,50,'gregoriosamplecode26@gmail.com','2021-04-20 23:56:53','469273','1'),(133,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:10:39','705496','1'),(134,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:15:41','675430','1'),(135,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:18:46','801924','1'),(136,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:20:06','943750','1'),(137,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:20:54','984523','1'),(138,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:27:20','513248','1'),(139,50,'gregoriosamplecode26@gmail.com','2021-04-21 00:29:00','352461','1'),(140,50,'gregoriosamplecode26@gmail.com','2021-04-28 23:17:54','049756','1'),(141,55,'kate26@gmail.com','2021-04-28 23:27:30','674032','1'),(142,56,'michaelreboya@gmail.com','2021-04-28 23:34:32','367142','1'),(143,56,'michaelreboya@gmail.com','2021-04-28 23:35:34','142987','1'),(144,56,'michaelreboya@gmail.com','2021-04-28 23:36:53','592138','1'),(145,57,'admin@gmail.com','2021-05-11 23:33:22','436102','1'),(146,50,'gregoriosamplecode26@gmail.com','2021-05-11 23:33:54','165023','1'),(147,57,'admin@gmail.com','2021-05-11 23:34:15','517238','1'),(148,57,'admin@gmail.com','2021-05-12 00:07:06','045681','1'),(149,57,'admin@gmail.com','2021-05-12 00:30:01','165087','1'),(150,57,'admin@gmail.com','2021-05-12 00:45:14','823916','1'),(151,57,'admin@gmail.com','2021-05-12 01:20:06','801456','1'),(152,57,'admin@gmail.com','2021-05-12 01:29:15','159360','1'),(153,57,'admin@gmail.com','2021-05-12 01:29:23','913867','1'),(154,57,'admin@gmail.com','2021-05-12 01:29:42','876531','1'),(155,57,'admin@gmail.com','2021-05-12 01:37:06','312795','1'),(156,57,'admin@gmail.com','2021-05-12 02:03:28','537048','0');
/*!40000 ALTER TABLE `userslogin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-12  2:40:57
