CREATE DATABASE  IF NOT EXISTS `db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `tblcommentary`
--

DROP TABLE IF EXISTS `tblcommentary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblcommentary` (
  `idCommentary` int NOT NULL AUTO_INCREMENT,
  `idPost` int DEFAULT NULL,
  `author` varchar(200) DEFAULT NULL,
  `commentary` text,
  `dateCommentary` varchar(200) DEFAULT NULL,
  `hourCommentary` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idCommentary`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcommentary`
--

LOCK TABLES `tblcommentary` WRITE;
/*!40000 ALTER TABLE `tblcommentary` DISABLE KEYS */;
INSERT INTO `tblcommentary` VALUES (1,8,'a','a','22/05/2022','19:21'),(2,8,'Artur','Livro Excelente!','22/05/2022','21:10'),(3,3,'Kabum','Nice Intel!!','22/05/2022','21:46');
/*!40000 ALTER TABLE `tblcommentary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbllike`
--

DROP TABLE IF EXISTS `tbllike`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbllike` (
  `idLike` int NOT NULL AUTO_INCREMENT,
  `idPost` int DEFAULT NULL,
  PRIMARY KEY (`idLike`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbllike`
--

LOCK TABLES `tbllike` WRITE;
/*!40000 ALTER TABLE `tbllike` DISABLE KEYS */;
INSERT INTO `tbllike` VALUES (1,3),(2,3),(3,3),(4,3),(5,3),(6,8),(7,8);
/*!40000 ALTER TABLE `tbllike` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpost`
--

DROP TABLE IF EXISTS `tblpost`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblpost` (
  `idPost` int NOT NULL AUTO_INCREMENT,
  `titlePost` varchar(200) DEFAULT NULL,
  `descPost` text,
  `imagePost` varchar(200) DEFAULT NULL,
  `datePost` varchar(200) DEFAULT NULL,
  `hourPost` varchar(200) DEFAULT NULL,
  `authorPost` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idPost`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpost`
--

LOCK TABLES `tblpost` WRITE;
/*!40000 ALTER TABLE `tblpost` DISABLE KEYS */;
INSERT INTO `tblpost` VALUES (2,'Monitor LED 23,8','Cupcake ipsum dolor sit amet dragée cake. Donut I love sesame snaps lemon drops macaroon. Tiramisu candy canes bonbon croissant gingerbread cupcake sesame snaps sweet. Sugar plum brownie biscuit chupa chups dessert I love dessert jelly-o chocolate. Lemon drops jujubes cake jelly-o candy canes pie sweet roll. Oat cake icing apple pie donut lollipop gummies.','https://i.imgur.com/vAd9Ltj.jpege','22/05/2022','04:04','ArtD14'),(3,'Processador Intel Core i9-9820X','Cupcake ipsum dolor sit amet dragée cake. Donut I love sesame snaps lemon drops macaroon. Tiramisu candy canes bonbon croissant gingerbread cupcake sesame snaps sweet. Sugar plum brownie biscuit chupa chups dessert I love dessert jelly-o chocolate. Lemon drops jujubes cake jelly-o candy canes pie sweet roll. Oat cake icing apple pie donut lollipop gummies.','https://i.imgur.com/XWllwEk.jpeg','22/05/2022','04:07','ArtD14'),(8,'O Cortiço','O Cortiço é um romance naturalista do brasileiro Aluísio Azevedo publicado em 1890 que denuncia a exploração e as péssimas condições de vida dos moradores das estalagens ou dos cortiços cariocas do final do século XIX.','images/uploads/56b2c7fef64f37a5a5efa0c7195289ba22052022180145ocortico.jpg','22/05/2022','18:01','ArtD14'),(9,'LinkedIn','UEPA','images/uploads/7ae8651df8f5dd43e9d3d6ece83d088222052022220048blueLagoon.jpg','22/05/2022','22:00','ArtD14');
/*!40000 ALTER TABLE `tblpost` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbluser` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `nameUser` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `userPassword` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (1,'Artur','ArtD14','123');
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nivel` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Thiago Sales','thsales061','123456',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-22 23:18:14
