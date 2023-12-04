-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: projeto_livro
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
-- Current Database: `projeto_livro`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `projeto_livro` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `projeto_livro`;

--
-- Table structure for table `cadastro_componentes`
--

DROP TABLE IF EXISTS `cadastro_componentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_componentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `genero` varchar(30) DEFAULT NULL,
  `imagem` text DEFAULT NULL,
  `sinopse` text DEFAULT NULL,
  `data_registro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_componentes`
--

LOCK TABLES `cadastro_componentes` WRITE;
/*!40000 ALTER TABLE `cadastro_componentes` DISABLE KEYS */;
INSERT INTO `cadastro_componentes` VALUES (4,'Harry Potter e a Pedra Filofal','Filmes','Fantasia',NULL,'Harry Potter é um garoto órfão de 10 anos que vive infeliz com seus tios, os Dursley. Até que, repentinamente, ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Harry e seus amigos descobrem que um professor da escola está tentando roubar a pedra filosofal e decidem guardá-la eles mesmos.','2023-12-04');
/*!40000 ALTER TABLE `cadastro_componentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro_usuario`
--

DROP TABLE IF EXISTS `cadastro_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) DEFAULT NULL,
  `email_usuario` varchar(120) DEFAULT NULL,
  `endereco_usuario` varchar(120) DEFAULT NULL,
  `telefone_usuario` char(20) DEFAULT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_usuario`
--

LOCK TABLES `cadastro_usuario` WRITE;
/*!40000 ALTER TABLE `cadastro_usuario` DISABLE KEYS */;
INSERT INTO `cadastro_usuario` VALUES (5,'adrian','teste23@gmail.com',NULL,NULL,'1234');
/*!40000 ALTER TABLE `cadastro_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-04 20:13:02
