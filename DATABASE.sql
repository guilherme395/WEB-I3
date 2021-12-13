CREATE DATABASE  IF NOT EXISTS `login` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `login`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: login
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
-- Table structure for table `arquivo`
--

DROP TABLE IF EXISTS `arquivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arquivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path_arquivo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo`
--

LOCK TABLES `arquivo` WRITE;
/*!40000 ALTER TABLE `arquivo` DISABLE KEYS */;
INSERT INTO `arquivo` VALUES (1,'upload/d3b1cb30e6b31c16c80170995076c7c9 . jpg','2021-11-10 10:43:32'),(2,'upload/a2f22d714dc10e8ef6330b32655469a1 . jpg','2021-11-10 10:46:49'),(3,'upload/f14098941814746b5c4ec0db5a68598b.jpg','2021-11-10 10:48:08'),(4,'upload/105c5d59cebeba23c7447895cbccfb2e.jpg','2021-11-10 10:48:25'),(5,'upload/b199f493fcdcd008aa437489b01d4da1.jpg','2021-11-10 10:56:37'),(6,'upload/ef95db62f60b519c865d72343de57a52.jpg','2021-11-10 11:15:40'),(7,'upload/b5c31020707d877159c8edaf508bcb7c.jpg','2021-11-10 11:18:31'),(8,'upload/f9e238d8f9bcc9231b2c99a4794d7a55.jpg','2021-11-10 11:19:14'),(9,'upload/6c4ef97d8bf9430165a72d9b7f1a59dd.jpg','2021-11-10 11:19:35'),(10,'upload/707b9e7c376d3237ec3ccfc221768a41.jpg','2021-11-10 11:20:20');
/*!40000 ALTER TABLE `arquivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_cliente` (
  `id_cli` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo_pessoa` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fantasia` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf_cnpj` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `indereco` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (8,' TREVOR PHILIPS   ','F','   I3 SISTEMAS EIRIELI ME              ','   749.531.730-23   ','   LOTE 03              ','   (63)98500-9315       ','   MORADA DO SOL 2      ','   PALMAS               ','   TOCANTINS               '),(10,' MICHAEL DE SANTA ','F',' QUANTUM EIRIELI ME ',' 073.069.141-11 ',' LOTE 03 ',' (63)98500-9315 ',' BELA VISTA  ',' CAMPINAS ',' SÃO PAULO '),(11,'FRANKLIN CLINTON','j','AGUIA NORTE ME','13.058.559/0001-14','LOTE 03','(63)98500-9315','MARIA ROSA ','NATAL','RIO GRADE DO SUL ');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_itens_pedido`
--

DROP TABLE IF EXISTS `tb_itens_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_itens_pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_item` int DEFAULT NULL,
  `id_produto` int DEFAULT NULL,
  `quantidade` float(8,2) NOT NULL,
  `preco_unitario` float(8,2) DEFAULT NULL,
  `desconto` float(8,2) DEFAULT NULL,
  `total` float(8,2) NOT NULL,
  `id_pedido` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produto` (`id_produto`),
  KEY `FK_ID_PEDIDO` (`id_pedido`),
  CONSTRAINT `FK_ID_PEDIDO` FOREIGN KEY (`id_pedido`) REFERENCES `tb_pedido` (`id`),
  CONSTRAINT `tb_itens_pedido_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `tb_produto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_itens_pedido`
--

LOCK TABLES `tb_itens_pedido` WRITE;
/*!40000 ALTER TABLE `tb_itens_pedido` DISABLE KEYS */;
INSERT INTO `tb_itens_pedido` VALUES (10,0,121,3.00,NULL,NULL,812.58,25);
/*!40000 ALTER TABLE `tb_itens_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pedido`
--

DROP TABLE IF EXISTS `tb_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `data_pedido` date NOT NULL,
  `id_cli` int DEFAULT NULL,
  `total_custo` float(8,2) DEFAULT NULL,
  `total_pedido` float(8,2) DEFAULT NULL,
  `status_pedido` int DEFAULT NULL,
  `observacao` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `tb_pedido_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `tb_cliente` (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pedido`
--

LOCK TABLES `tb_pedido` WRITE;
/*!40000 ALTER TABLE `tb_pedido` DISABLE KEYS */;
INSERT INTO `tb_pedido` VALUES (25,'2021-12-13',10,NULL,812.58,0,NULL);
/*!40000 ALTER TABLE `tb_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_produto`
--

DROP TABLE IF EXISTS `tb_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_produto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_custo` float(8,2) NOT NULL,
  `preco_venda` float(8,2) NOT NULL,
  `path_arquivo` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_produto`
--

LOCK TABLES `tb_produto` WRITE;
/*!40000 ALTER TABLE `tb_produto` DISABLE KEYS */;
INSERT INTO `tb_produto` VALUES (120,'ICOMÉRCIO','Solução completa para a gestão do seu negócio! Mais controle interno, gestão financeira e organização contábil em um só sistema!',250.66,352.00,'upload/952cb089014768caaa65c0c947cabbdc.png'),(121,'  ICOMÉRCIO LITE','A solução perfeita para pequenos negócios! Emissão de documentos fiscais, gestão de estoque e integração contábil. Conheça a versão Lite!',256.80,270.86,'upload/ca234c36e4508bf6c2c770b740b842e0.png'),(122,' ICHEF COMANDAS','Otimize gestão e atendimento de bares e restaurantes com uma solução sob medida. Sistema de comanda eletrônica e muito mais!',130.90,200.96,'upload/c287bbacbfcf8025b86840bfca2a6120.png');
/*!40000 ALTER TABLE `tb_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'guilhermell@live.com','12e086066892a311b752673a28583d3f');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'login'
--

--
-- Dumping routines for database 'login'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-13 15:27:33
