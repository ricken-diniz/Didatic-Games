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
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(45) NOT NULL,
  `usu_email` varchar(45) NOT NULL,
  `usu_senha` varchar(300) NOT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` VALUES (2,'2','2','$argon2i$v=19$m=65536,t=4,p=1$SDhEQS9Pa3hwUTkwbmFneg$kNHjFMxiBPm/MwG3u8eeHcUDHQB32JMtqQg5qBqwHAM'),(4,'cris','kk','$argon2i$v=19$m=65536,t=4,p=1$aUhMYXkybmxMdzdINkMyVw$mOsM4sSMT05fHSDHy69pviZq77kfxHmr/eGr9+dd734'),(5,'aaa','kk','$argon2i$v=19$m=65536,t=4,p=1$S3hqVVg5b1ZpVmptMi9EMg$lKjYNwKk3A6o1se4vKM1OJSrAglde/LXDLVIcGa/IQE'),(6,'aaa','kk','$argon2i$v=19$m=65536,t=4,p=1$eUc3U3BFTmxCVGhvQzdKeg$LAIIfNS2cX8upLf8byTPGcGpvPsVBB5KYTMJs9oYhA8'),(7,'aaa','aa','$argon2i$v=19$m=65536,t=4,p=1$NVVET01IUDRkdzVhWFN3VA$WEJpWs8zjNGGqzDTeAFWUBIJvUQMB3ihcqqoYWcjk4w'),(12,'Kaiane','kaiane','$argon2i$v=19$m=65536,t=4,p=1$VUpTaDkud1JwRTMyTi5qWQ$XnUM1hDOwxGlB+Wzfscl37Iz43x8Vpwy7yP6Aot2qH8'),(13,'gagaÃ§a','gaga','$argon2i$v=19$m=65536,t=4,p=1$Y3VOa1VLWExjbFJNNHVNZA$FE7lxmbXTa6hssG0VWgDXtbJmI79KpP/kPX7ExA5TTQ'),(14,'4rd4r','edxrdx','$argon2i$v=19$m=65536,t=4,p=1$R1NrT0d5RW10Rk41TmNGbw$xnWA1dmiyuk6AtxScCT4iKvB0dlVdOnkOQ1h/C6lbKU'),(15,'rick','ricken@email.com','$argon2i$v=19$m=65536,t=4,p=1$Rk1UWGhoOWJqc2Q3WmFiYg$+TDkDrshnZFbZglk8A+x+jZI4/9bvDscwggznS1P6Es'),(16,'kaiane','kai','$argon2i$v=19$m=65536,t=4,p=1$dmh5ZVFWWHpUOHNFQXdRNQ$UHWquGI6dEME2gJFP1Gd9jjJmxFhSgWiFlYZaEJh0L4'),(17,'ricken','ricken','$argon2i$v=19$m=65536,t=4,p=1$WkxqQ3hmcHBWQ1RRczU5Sw$/ErdsoqxoQuY2DkIxfZJJkw7tGPsLe5ziPz60V6JyxI'),(18,'e','e','$argon2i$v=19$m=65536,t=4,p=1$NTRpNkluSTI4eHpkWWpicg$Xx6RSO7QH0EH4AUAs1IVkFgBGlESRMLAEOI3cmieCfM'),(19,'hugo','hugo','$argon2i$v=19$m=65536,t=4,p=1$ckFmMWlmbmVSQ0dtT09BRw$RfeqvcD0ZHxCYg8IepOme43d+Csz8fN9SbS836jmhdw');
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
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
