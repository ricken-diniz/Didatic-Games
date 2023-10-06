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
-- Table structure for table `tb_desenvolvedores`
--

DROP TABLE IF EXISTS `tb_desenvolvedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_desenvolvedores` (
  `des_id` int(11) NOT NULL AUTO_INCREMENT,
  `des_nome` varchar(45) CHARACTER SET latin1 NOT NULL,
  `des_idade` int(11) NOT NULL,
  `des_endereco` varchar(45) CHARACTER SET latin1 NOT NULL,
  `des_descricao` varchar(500) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`des_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_desenvolvedores`
--

LOCK TABLES `tb_desenvolvedores` WRITE;
/*!40000 ALTER TABLE `tb_desenvolvedores` DISABLE KEYS */;
INSERT INTO `tb_desenvolvedores` VALUES (1,'Emily Nogueira de Araújo',18,'Caicó - RN','Amo a leitura e me identifico com a área de bando de dados, atuando na modelagem e análise de requisitos do sistema.'),(2,'Paloma Dantas de Oliveira',17,'Jardim do Seridó - RN','Gosto muito de escutar música e a linguagem de programação que mais me identifico é Banco de Dados. Sobre o projeto, tive participação direta na análise de requisitos.'),(3,'Ricken Diniz',17,' Caicó - RN','Gosto de jogar futebol e ir à academia. Programo principalmente em back-end, com python ou php, mas também sei lidar com o front, quando necessário. No projeto, participei em boa parte do desenvolvimento dos códigos e na estruturação do sistema.'),(4,'Maria das Graças Meira Garcia',18,'São Fernando - RN','Gosto de ler livros e assitir séries, me identifico com a área do design e trabalhei na área da modelagem do banco de dados e no design do site.'),(5,'Kaiane Maia',17,'São Fernando - RN','Gosto de cozinhar e escutar músicas. Me identifico com a área do design e participei, na maior parte do tempo, da modelagem do banco e do design das páginas do site.'),(6,'Cristian Ryan',19,'Jardim de Piranhas - RN','Amo a culinária e o Design Web. Atuei na análise de requisitos e tive uma breve participação na revisão do design do sistema.'),(7,'Humberto Victo',18,'Cruzeta - RN','Gosto bastante de apreciar a arte e de praticar atividades ao ar livre. Me identifico com a modelagem do banco de dados, mas atuei principalmente como analista do sistema.'),(8,'Miguel Arcanjo',17,'Caicó - RN','Me identifico bastante com a modelagem de banco de dados voltada para sistema Linux e participei do grupo de analistas do sistema.');
/*!40000 ALTER TABLE `tb_desenvolvedores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-06 13:35:18
