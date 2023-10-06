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
-- Table structure for table `tb_cards`
--

DROP TABLE IF EXISTS `tb_cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cards` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_titulo` varchar(45) NOT NULL,
  `car_resumo` varchar(1000) NOT NULL,
  `car_acessibilidade` varchar(45) NOT NULL,
  `car_necessidade` varchar(45) NOT NULL,
  `car_classificacao` varchar(45) NOT NULL,
  `car_plataforma` varchar(45) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cards`
--

LOCK TABLES `tb_cards` WRITE;
/*!40000 ALTER TABLE `tb_cards` DISABLE KEYS */;
INSERT INTO `tb_cards` VALUES (1,'Palavras cruzadas online','Trata-se de uma versÃ£o digital do clÃ¡ssico jogo de palavras cruzadas, adaptado para ser jogado na internet. O objetivo Ã© preencher as lacunas de um diagrama com palavras que se cruzam vertical e horizontalmente, utilizando as dicas fornecidas. Os jogadores tÃªm acesso a diferentes nÃ­veis de dificuldade, desde iniciante atÃ© avanÃ§ado, permitindo que sejam desafiados de acordo com seu conhecimento e habilidades linguÃ­sticas. O jogo oferece uma ampla variedade de temas, como esportes, cinema, mÃºsica, histÃ³ria, geografia e muito mais, proporcionando diversÃ£o e aprendizado ao mesmo tempo.','Gratuito','teclado e mouse','Para todos','App Mobile e Web PC','https://www.soportugues.com.br/secoes/jogos/palavrasCruzadas/index.php'),(2,'Rapid math','Um jogo de matemÃ¡tica feito para melhorar seu raciocÃ­nio rÃ¡pido relacionado Ã  contas bÃ¡sicas, nele vocÃª tem um determinado tempo para resolver algumas expressÃµes numÃ©ricas, quando resolvidas, passa ao prÃ³ximo nÃ­vel, o qual vai aumentando a dificuldade. Ao acertar vocÃª recebe um bÃ´nus de tempo e ao errar uma multa do mesmo, o jogo Ã© composto por 30 nÃ­veis com diferentes dificuldades, melhorando o raciocÃ­nio rÃ¡pido. ','Gratuito','mouse','Para maiores de 15 anos','Web PC, Mobile','https://www.coquinhos.com/calculos-mentais-matematicas/play/'),(3,'Limpar o laboratÃ³rio','O jogo consiste em limpar o laboratÃ³rio, depois de uma semana de aulas intensas que o deixou numa grande bagunÃ§a, organizando os utensÃ­lios em seus determinados lugares. O jogador precisa terminar antes que o tempo zere.','Gratuito','mouse','Para todos','Web PC','http://jogos360.com.br/limpar_o_laboratorio.html'),(4,'Prodigy Math Game','Ã‰ um jogo online educacional projetado para ajudar as crianÃ§as a aprender matemÃ¡tica de uma forma divertida e interativa. Desenvolvido pela Prodigy Education, o jogo combina elementos de aventura e fantasia com exercÃ­cios matemÃ¡ticos, tornando a aprendizagem mais envolvente. No Prodigy Math Game, os jogadores assumem o papel de um aprendiz de mago em um mundo mÃ¡gico chamado \"Prodigy\". Eles exploram terras cheias de personagens e criaturas mÃ¡gicas, embarcando em missÃµes e enfrentando desafios matemÃ¡ticos ao longo do caminho. Os jogadores podem personalizar seus personagens e animais de estimaÃ§Ã£o, alÃ©m de desbloquear habilidades especiais Ã  medida que progridem no jogo. A medida que avanÃ§am, eles encontram personagens nÃ£o-jogÃ¡veis (NPCs) que fornecem problemas matemÃ¡ticos para resolver.','Gratuito','mouse','Para todos','Web PC, Mobile','https://www.prodigygame.com/main-en/'),(5,'Math Blaster','O Math Blaster Ã© um popular jogo de matemÃ¡tica online que combina aÃ§Ã£o e aventura com exercÃ­cios matemÃ¡ticos divertidos. Ele foi desenvolvido com o objetivo de ajudar as crianÃ§as a desenvolverem suas habilidades matemÃ¡ticas de uma forma envolvente e estimulante. No Math Blaster, os jogadores embarcam em uma jornada espacial com um personagem chamado Blaster, que Ã© um membro de uma equipe de defesa intergalÃ¡ctica. Sua missÃ£o Ã© proteger a galÃ¡xia de ameaÃ§as alienÃ­genas usando habilidades matemÃ¡ticas para resolver problemas e completar desafios. O jogo apresenta uma variedade de atividades matemÃ¡ticas, como adiÃ§Ã£o, subtraÃ§Ã£o, multiplicaÃ§Ã£o, divisÃ£o, problemas de lÃ³gica e muito mais. Os jogadores sÃ£o incentivados a resolver esses problemas o mais rÃ¡pido possÃ­vel para ganhar pontos e progredir no jogo.','Gratuito','celular','Para todos','App Mobile','https://play.google.com/store/apps/details?id=com.monsterbraingames.mathblaster'),(6,'Grocery Cachier','Grocery Cashier, tambÃ©m conhecido como Cashier Simulator, Ã© um simulador de jogo que permite que os jogadores assumam o papel de um operador de caixa em um supermercado. O objetivo principal do jogo Ã© registrar e processar as compras dos clientes de forma rÃ¡pida e eficiente.','Gratuito','mouse','Para todos','Web PC, Mobile','https://www.jogos360.com.br/grocery_cashier.html'),(7,'Jogo English for Children','O jogo English for children Ã© voltado para o pÃºblico infantil com a finalidade do melhor aprendizado de um novo idioma(inglÃªs) de forma mais fluÃ­da e divertida, como tambÃ©m de forma interativa com a utilizaÃ§Ã£o de imagens para representar cada nova palavra aprendida. O jogo apresenta duas partes: As opÃ§Ãµes as quais vocÃª pode voltar para a pÃ¡gina inicial, colocar som ou desligÃ¡-lo. E alÃ©m disso, temos a parte â€œIniciarâ€ onde a crianÃ§a pode escolher o modo estudo onde dentro desse modo terÃ¡ alguns assuntos bÃ¡sicos para compreender a lÃ­ngua estrangeira como cores, animais, meios de transporte e etc.','Gratuito','mouse','Para todos','Web PC, Mobile','http://scratch.mit.edu/projects/314954539/.'),(9,'qualquer coisa','abb','a','asdasadasda','a','aaaaaa','aaaa.com');
/*!40000 ALTER TABLE `tb_cards` ENABLE KEYS */;
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
