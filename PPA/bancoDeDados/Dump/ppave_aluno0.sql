-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: ppave
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `aluno` (
  `matricula` varchar(15) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` smallint(6) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `id_turma` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  PRIMARY KEY (`matricula`),
  KEY `id_turma` (`id_turma`),
  CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno`
--

LOCK TABLES `aluno` WRITE;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` VALUES ('1910002','Cristiano de Souza Pereira',20,NULL,NULL,NULL,1,2019),('1910008','Amanda Moura dos Santos',20,NULL,NULL,NULL,1,2019),('1910010','Caroline Magalhães Rezende',20,NULL,NULL,NULL,1,2019),('1910013','Erasmo Rodrigues de Miranda Júnior',20,NULL,NULL,NULL,1,2019),('1910020','Gabriel Phillipi Machado Caldeira Pacheco',20,NULL,NULL,NULL,1,2019),('1910032','João Alexandre Souza da Silva',20,NULL,NULL,NULL,1,2019),('1910046','Luís Ricardo Santos de Lima',20,NULL,NULL,NULL,1,2019),('1910048','Pedro Henrique da Silva Almeida',20,NULL,NULL,NULL,1,2019),('1910050','Eduardo Henrique de Souza Silva',20,NULL,NULL,NULL,1,2019),('1910051','Genilson Silva de Araújo Júnior',20,NULL,NULL,NULL,1,2019),('1910055','Caroline Ayane dos Santos Regis',20,NULL,NULL,NULL,1,2019),('1910057','Gustavo Escobar Freire',20,NULL,NULL,NULL,1,2019),('1910059','Emanuel Henrique Guedes Batista',20,NULL,NULL,NULL,1,2019),('1910060','Elias Saile Alves da Silva',20,NULL,NULL,NULL,1,2019),('1910063','Fernanda Bispo Novaes',20,NULL,NULL,NULL,1,2019),('1910067','Suyanne Vitória Xavier da Costa Barbosa',20,NULL,NULL,NULL,1,2019),('1910075','Bruno de Sousa Guimarães',20,NULL,NULL,NULL,1,2019),('1910076','Felipe Magalhães Rezende',20,NULL,NULL,NULL,1,2019);
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-17 13:23:43
