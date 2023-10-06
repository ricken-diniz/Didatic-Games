-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pi
-- ------------------------------------------------------
-- Server version	5.6.13

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
-- Table structure for table `tb_progressos`
--

DROP TABLE IF EXISTS `tb_progressos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_progressos` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descricao` varchar(500) NOT NULL,
  `pro_validacao` tinyint(1) NOT NULL,
  `pro_usu_id` int(11) NOT NULL,
  `pro_car_id` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `pro_usu_id` (`pro_usu_id`),
  KEY `pro_car_id` (`pro_car_id`),
  CONSTRAINT `tb_progressos_ibfk_1` FOREIGN KEY (`pro_usu_id`) REFERENCES `tb_usuarios` (`usu_id`),
  CONSTRAINT `tb_progressos_ibfk_2` FOREIGN KEY (`pro_car_id`) REFERENCES `tb_cards` (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_progressos`
--

LOCK TABLES `tb_progressos` WRITE;
/*!40000 ALTER TABLE `tb_progressos` DISABLE KEYS */;
INSERT INTO `tb_progressos` VALUES (4,'ss',1,2,2),(8,'ss',0,2,2);
/*!40000 ALTER TABLE `tb_progressos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-06 13:35:19
