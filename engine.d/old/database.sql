-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: lima
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB-0+deb9u1

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
-- Table structure for table `cloto_dados`
--

DROP TABLE IF EXISTS `cloto_dados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_dados` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user` int(8) NOT NULL,
  `dado` blob NOT NULL,
  `tag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_dados`
--

LOCK TABLES `cloto_dados` WRITE;
/*!40000 ALTER TABLE `cloto_dados` DISABLE KEYS */;
INSERT INTO `cloto_dados` VALUES (1,0,'Exemplo de dado','exempmlo'),(2,1,'asdfa+sfasdf+asdfaasdfg','asdf'),(3,1,'asdfasdf','adsfasdf');
/*!40000 ALTER TABLE `cloto_dados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_file`
--

DROP TABLE IF EXISTS `cloto_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_file` (
  `cloto_file_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cloto_file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_file`
--

LOCK TABLES `cloto_file` WRITE;
/*!40000 ALTER TABLE `cloto_file` DISABLE KEYS */;
/*!40000 ALTER TABLE `cloto_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_form`
--

DROP TABLE IF EXISTS `cloto_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_form` (
  `cloto_form_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cloto_form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_form`
--

LOCK TABLES `cloto_form` WRITE;
/*!40000 ALTER TABLE `cloto_form` DISABLE KEYS */;
/*!40000 ALTER TABLE `cloto_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_id`
--

DROP TABLE IF EXISTS `cloto_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_id` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user` int(8) NOT NULL,
  `uso` int(11) NOT NULL DEFAULT '0',
  `criacao` datetime DEFAULT NULL,
  `tipo` varchar(100) NOT NULL DEFAULT 'object',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_id`
--

LOCK TABLES `cloto_id` WRITE;
/*!40000 ALTER TABLE `cloto_id` DISABLE KEYS */;
INSERT INTO `cloto_id` VALUES (16,1,0,'2001-01-01 00:00:00','object'),(17,1,1,'2001-01-01 00:00:00','object');
/*!40000 ALTER TABLE `cloto_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_label`
--

DROP TABLE IF EXISTS `cloto_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_label` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='utf8mb4_general_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_label`
--

LOCK TABLES `cloto_label` WRITE;
/*!40000 ALTER TABLE `cloto_label` DISABLE KEYS */;
/*!40000 ALTER TABLE `cloto_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_number`
--

DROP TABLE IF EXISTS `cloto_number`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_number` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='utf8mb4_general_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_number`
--

LOCK TABLES `cloto_number` WRITE;
/*!40000 ALTER TABLE `cloto_number` DISABLE KEYS */;
/*!40000 ALTER TABLE `cloto_number` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_text`
--

DROP TABLE IF EXISTS `cloto_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_text` (
  `cloto_text_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cloto_text_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_text`
--

LOCK TABLES `cloto_text` WRITE;
/*!40000 ALTER TABLE `cloto_text` DISABLE KEYS */;
/*!40000 ALTER TABLE `cloto_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_type`
--

DROP TABLE IF EXISTS `cloto_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT 'none',
  `criterios` varchar(1000) DEFAULT 'nome,',
  `list` longtext,
  `view` longtext,
  `edit` longtext,
  `short` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='utf8mb4_general_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_type`
--

LOCK TABLES `cloto_type` WRITE;
/*!40000 ALTER TABLE `cloto_type` DISABLE KEYS */;
INSERT INTO `cloto_type` VALUES (1,'label','','{{value}} as label({{id}})',NULL,NULL,NULL),(2,'nome','label','{{c1.value}} | id {{c1.id}}',NULL,NULL,NULL),(3,'pessoa','nome[p],idade','{{c1}} {{c2}}','',NULL,NULL),(4,'idade','number','{{c1.v}} | of {{c1.a}}','Idade igual a {{c1.v}}','Idade: {{c1.e}}','{{c1.v}}'),(5,'number','nome,','{{c1.v}} | of {{c1.a}}',NULL,NULL,NULL),(6,'livro','titulo, titulo original, titulo portugues, autor, ano de publicação, ','',NULL,NULL,NULL),(7,'none','nome,',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `cloto_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloto_user`
--

DROP TABLE IF EXISTS `cloto_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cloto_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `nick` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `poder` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloto_user`
--

LOCK TABLES `cloto_user` WRITE;
/*!40000 ALTER TABLE `cloto_user` DISABLE KEYS */;
INSERT INTO `cloto_user` VALUES (1,'asdf','asdf@asdf','asdf',0);
/*!40000 ALTER TABLE `cloto_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_atos`
--

DROP TABLE IF EXISTS `ew_atos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_atos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atos` text NOT NULL,
  `inicio` int(8) NOT NULL,
  `limit` int(8) NOT NULL,
  `tag` varchar(100) NOT NULL DEFAULT 'empty',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_atos`
--

LOCK TABLES `ew_atos` WRITE;
/*!40000 ALTER TABLE `ew_atos` DISABLE KEYS */;
INSERT INTO `ew_atos` VALUES (21,'me.id',1538342216,0,'empty');
/*!40000 ALTER TABLE `ew_atos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_dialogo`
--

DROP TABLE IF EXISTS `ew_dialogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_dialogo` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `entrada` varchar(255) DEFAULT '',
  `saida` varchar(255) NOT NULL,
  `personagem` int(8) NOT NULL,
  `uso` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=248 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_dialogo`
--

LOCK TABLES `ew_dialogo` WRITE;
/*!40000 ALTER TABLE `ew_dialogo` DISABLE KEYS */;
INSERT INTO `ew_dialogo` VALUES (205,'SDF','Empty!',0,0),(206,'WORD','Empty!',0,0),(207,'ME]','Empty!',0,0),(2,'LIFE','grimorio.dizer(he );\nme.life();',0,0),(3,'LIFE','grimorio.dizer(seu life he);\nme.life();',0,123),(4,'MANA','gri.dizer(este E seu mana);\nme.magi();',0,29),(29,'A','Empty!',0,29),(0,'','grimorio.perceber();',0,533),(39,'[LOGUED=]','Empty!',0,0),(203,'LFIE','Empty!',0,3),(204,'OLIFE','Empty!',0,0),(41,'USAR','Empty!',0,0),(42,'JUREMA','Empty!',0,37),(43,'JUEMA','Empty!',0,0),(44,'GANGORRA','Empty!',0,0),(45,'HUNTER','Empty!',0,4),(46,'D','Empty!',0,13),(47,'DF','Empty!',0,1),(48,'JURE','Empty!',0,8),(49,'MINERVA','Empty!',0,19),(50,'LIDO','Empty!',0,0),(51,'[LOGUED=TRUE]','grimorio.dizer(Bem vindo de volta );\nuser.nick;grimorio.dizer(! Parece que a pancada foi feia. Lembra-se de alguma coisa?);\ngrimorio.setWeit(quest_noob-se_lembra?);',0,53),(52,'JRUEMA','Empty!',0,3),(53,'AMANDA','grimorio.dizer(Aquela deusa!!!)',0,53),(54,'MADMA','Empty!',0,0),(55,'MANDA','Empty!',0,5),(56,'MADNA','Empty!',0,1),(57,'ALINE','Empty!',0,5),(58,'CIBELE','Empty!',0,5),(59,'ANA','Empty!',0,1),(60,'ANDERSOM','Empty!',0,0),(61,'ANDERSON','Empty!',0,0),(62,'ANDERS','Empty!',0,0),(63,'DIZER','Empty!',0,0),(64,'AMORA','Empty!',0,2),(65,'MIZERVA','Empty!',0,0),(66,'AMOR','Empty!',0,0),(102,'[AMORA=VERDE][LOGUED=FALSE]','Empty!',0,1),(67,'AJUMA','Empty!',0,0),(68,'ARJUMA','Empty!',0,0),(69,'ADSF','Empty!',0,0),(70,'G','Empty!',0,2),(71,'ASDF','Empty!',0,2),(72,'AE','Empty!',0,0),(73,'ASD','Empty!',0,0),(74,'SDFG','Empty!',0,1),(75,'S','Empty!',0,6),(76,'FDH','Empty!',0,0),(77,'FGH','Empty!',0,0),(78,'FSE','Empty!',0,0),(79,'RT','Empty!',0,0),(80,'SGJ','Empty!',0,0),(81,'F','Empty!',0,14),(82,'UI','Empty!',0,0),(83,'YU','Empty!',0,0),(84,'KGHJ','Empty!',0,0),(85,'RET','Empty!',0,0),(86,'S DF','Empty!',0,0),(87,'GS','Empty!',0,0),(88,'Y','Empty!',0,0),(89,'DN','Empty!',0,0),(90,'TU','Empty!',0,0),(91,'MFTI','Empty!',0,0),(92,'HD','Empty!',0,0),(93,'GFH','Empty!',0,0),(94,'DFGH','Empty!',0,0),(95,'TGF','Empty!',0,0),(96,'TUY','Empty!',0,0),(97,'DGH','Empty!',0,0),(98,'MILENA','grimorio.dizer(deve ser uma garota bonita!);',0,8),(99,'.','Empty!',0,1),(100,'ME','grimorio.dizer(voce Ã© );\nme.nome();',0,34),(101,'USER','user;',0,1),(103,'JUREGUE','Empty!',0,1),(104,'[WEIT=USER][LOGUED=FALSE]','Empty!',0,95),(105,'[WEIT=USER][LOGUED=TRUE]','Empty!',0,29),(106,'ASDFASDFAG','Empty!',0,4),(107,'SVCBXRFRT','Empty!',0,0),(108,'AZUL','Empty!',0,8),(109,'VERDE','Empty!',0,0),(110,'PURPLE','Empty!',0,9),(111,'ANDE','me.andar();',0,73),(112,'CORRA','Empty!',0,0),(113,'ATAQUE','Empty!',0,1),(114,'VEJA','Empty!',0,0),(115,'O QUE TEM AI?','Empty!',0,1),(116,'O QUE TEM AI','Empty!',0,4),(117,'IFE','Empty!',0,1),(118,'MNAA','Empty!',0,0),(119,'QUAL O MEU MANA','Empty!',0,0),(120,'QUANTO ESTA O MEU MANA','Empty!',0,3),(121,'QUAL O MEU MANA?','Empty!',0,1),(122,'QUANTO ESTA O MEU MANA?','Empty!',0,0),(123,'VER','Empty!',0,5),(124,'BELONA','gri.dizer(Cidade simples e pequena. Banhada pelo rio tinto. Famosa por causa da floresta negra);',0,11),(125,'JULETE','Empty!',0,0),(126,'SIBELE','Empty!',0,2),(127,'AVANI','Empty!',0,0),(128,'JSON','Empty!',0,13),(141,'QUANTO ESTA MEU MANA','me.mana();',0,3),(138,'MANNA','Empty!',0,0),(139,'QUNTO ESTA O MEU MANA','Empty!',0,0),(140,'QUANTO ESTA MEU MEN','Empty!',0,0),(142,'O QUE TEM AIW','Empty!',0,0),(143,'O QUE TEM IN','Empty!',0,0),(144,'MAN','Empty!',0,0),(145,'CIBELEE','Empty!',0,0),(146,'MOLLY','Empty!',0,7),(147,'MOLU','Empty!',0,0),(148,'`','Empty!',0,5),(149,'UJUREMA','Empty!',0,0),(150,'JULIETE','Empty!',0,1),(151,'MOLLLY','Empty!',0,0),(152,'NANDA','Empty!',0,0),(153,'NANAD','Empty!',0,0),(154,'AMADNA','Empty!',0,3),(155,'AMDNA','Empty!',0,24),(156,'LIFEE','Empty!',0,3),(157,'JUDITE','Empty!',0,3),(158,'ALIZABETH','Empty!',0,0),(159,'BETH','Empty!',0,0),(160,'ALCIONE','Empty!',0,0),(161,'MANA','gri.dizer(Seu mana e: );\nme.magi();',0,70),(162,'SFA','Empty!',0,0),(163,'AD','Empty!',0,1),(164,'ADF','Empty!',0,1),(165,'ADFFADFF','Empty!',0,3),(166,'DFA','Empty!',0,0),(167,'JUDIE','Empty!',0,0),(168,'JUDE','Empty!',0,0),(169,'ALUCARD','Empty!',0,0),(170,'ALICE','Empty!',0,6),(171,'DIGO NADA','Empty!',0,0),(172,'ALANA','Empty!',0,2),(173,'HUTNER','Empty!',0,1),(174,'SIBELLE','Empty!',0,0),(175,'NAO','Empty!',0,6),(176,'SIM','Empty!',0,1),(177,'TALVEL','Empty!',0,0),(178,'TALVEZ','Empty!',0,1),(179,'COMO?','Empty!',0,0),(180,'JREMA','Empty!',0,0),(181,'JULIETA','Empty!',0,4),(182,'UMBRELA','Empty!',0,0),(183,'JUREGE','Empty!',0,0),(184,'JUTRMS','Empty!',0,0),(185,'SLIVR','Empty!',0,0),(186,'MINRTBS','Empty!',0,0),(187,'SINECE','Empty!',0,0),(188,'SINELE','Empty!',0,0),(189,'SOMETE','Empty!',0,0),(190,'ALANDDA','Empty!',0,0),(191,'RAUNNP','Empty!',0,0),(192,'RARUNO','Empty!',0,0),(193,'JULIEETE','Empty!',0,0),(194,'[WEIT=RESPOSTA][]','Empty!',0,4),(195,'[WEIT=RESPOSTA][P]','Empty!',0,0),(196,'[WEIT=RESPOSTA][UOIUO]','Empty!',0,0),(197,'[WEIT=RESPOSTA][RESPOSTA=0][VALOR=]','gri.dizer(Ammmm?)',0,88),(198,'[WEIT=RESPOSTA][RESPOSTA=0]','gri.dizer(ok. entÃ£o vamos continuar. prescisamos chegar ae belona);\ngri.respondido();',0,74),(199,'JURERMA','Empty!',0,0),(200,'CCIBELEE','Empty!',0,0),(201,'DFSGADFG','Empty!',0,0),(202,'LI','Empty!',0,0),(208,'MINHA POSICAO','gri.dizer(Minha posiÃ§Ã£o Ã©: );\nme.getPosition(x);\ngri.dizer(|);\nme.getPosition(y);',0,22),(209,'MINHA POSICCAO','Empty!',0,0),(210,'MINHA PISICAO','Empty!',0,0),(211,'MINHA POSICOA','Empty!',0,0),(212,'MANDE','Empty!',0,0),(213,'ANDAR','gri.ouvir(ande);',0,33),(214,'AMDE','Empty!',0,1),(215,'MDA','Empty!',0,0),(216,'ADNE','Empty!',0,0),(217,'ANDA','Empty!',0,3),(218,'ME.MAGI','Empty!',0,0),(219,'ANDEE','Empty!',0,0),(220,'ANE','Empty!',0,0),(221,'AANDE','Empty!',0,0),(222,'ONDE ESTOU','Empty!',0,1),(223,'PARA','Empty!',0,0),(224,'PARAR','Empty!',0,1),(225,'MINHA POSCAO','Empty!',0,0),(226,'LIFW','Empty!',0,7),(227,'LIRFE','Empty!',0,0),(228,'COIFE','Empty!',0,0),(229,'LOIFW','Empty!',0,0),(230,'JUREGUER','Empty!',0,0),(231,'ANLINE','Empty!',0,0),(232,'ULIETE','Empty!',0,0),(233,'MEU NOME','Empty!',0,1),(234,'MEE','Empty!',0,0),(235,'NE','Empty!',0,3),(236,'ROMERO','Empty!',0,0),(237,'RROMEU','Empty!',0,0),(238,'JUREGUEE','Empty!',0,0),(239,'MIM','Empty!',0,3),(240,'JULIERA','Empty!',0,0),(241,'MILENTA','Empty!',0,0),(242,'AMNADA','Empty!',0,0),(243,'RAFFA','Empty!',0,0),(244,'RAFAELA','Empty!',0,1),(245,'RAFALEA','Empty!',0,0),(246,'DEFR','Empty!',0,1),(247,'E','Empty!',0,2);
/*!40000 ALTER TABLE `ew_dialogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_inert`
--

DROP TABLE IF EXISTS `ew_inert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_inert` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_inert`
--

LOCK TABLES `ew_inert` WRITE;
/*!40000 ALTER TABLE `ew_inert` DISABLE KEYS */;
INSERT INTO `ew_inert` VALUES (1,'Casa Das Armas','strBegin\"Casa debelona\"strEnd'),(2,'O machaado do anÃ£o','strBegin\"Loja pequena\"strEnd'),(0,'strBegin\"\"strEnd',''),(11,'PortÃ£o de Hermes','PortÃ£o dimencional para outra cidade'),(12,'Ervas da eva','\"strEnd'),(13,'PenÃ§Ã£o Hinata','\"strEnd\"strEnd'),(14,'Rio ira de Leto','strBegin\"s\"strEnd'),(15,'Floresta negra','\"strEnd\"strEnd'),(16,'Coliseum','strBegin\"\"strEnd'),(17,'Rolos do Hobs','strBegin\"\"strEnd'),(18,'SalÃ£o do soluÃ§o','\"strEnd\"strEnd');
/*!40000 ALTER TABLE `ew_inert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_object`
--

DROP TABLE IF EXISTS `ew_object`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_object` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `x` int(8) NOT NULL,
  `y` int(8) NOT NULL,
  `w` int(8) NOT NULL,
  `h` int(8) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `a` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_object`
--

LOCK TABLES `ew_object` WRITE;
/*!40000 ALTER TABLE `ew_object` DISABLE KEYS */;
INSERT INTO `ew_object` VALUES (1,-25,-77,50,50,'inert',0),(2,2,29,6,10,'inert',0),(3,10,10,1,1,'personagem',0),(11,-1,-1,2,2,'inert',0),(12,27,-25,5,5,'inert',0),(13,-42,0,15,10,'inert',0),(14,-200,-200,400,9,'inert',0),(15,-452,-150,400,300,'inert',0),(16,-52,29,50,50,'inert',0),(17,27,0,15,5,'inert',0),(18,10,29,15,10,'inert',0),(19,10,-10,1,1,'personagem',0);
/*!40000 ALTER TABLE `ew_object` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_personagem`
--

DROP TABLE IF EXISTS `ew_personagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_personagem` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL,
  `speed` int(3) NOT NULL,
  `intelligence` int(8) NOT NULL,
  `strong` int(8) NOT NULL,
  `lifeA` int(3) NOT NULL,
  `lifeM` int(3) NOT NULL,
  `manaA` int(3) NOT NULL,
  `manaM` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_personagem`
--

LOCK TABLES `ew_personagem` WRITE;
/*!40000 ALTER TABLE `ew_personagem` DISABLE KEYS */;
INSERT INTO `ew_personagem` VALUES (3,'ApoKrifo',1,2,2,2,10,10,10,10),(19,'GodOfNeet',0,2,2,2,10,10,10,10);
/*!40000 ALTER TABLE `ew_personagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_quests`
--

DROP TABLE IF EXISTS `ew_quests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_quests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `descricao` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_quests`
--

LOCK TABLES `ew_quests` WRITE;
/*!40000 ALTER TABLE `ew_quests` DISABLE KEYS */;
INSERT INTO `ew_quests` VALUES (1,'noob','Primeira quest do jogo'),(2,'nao logado','Para nao jogadores');
/*!40000 ALTER TABLE `ew_quests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_user`
--

DROP TABLE IF EXISTS `ew_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `idm` int(16) NOT NULL DEFAULT '0',
  `config` varchar(1000) NOT NULL DEFAULT '',
  `nick` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `tipo` int(8) NOT NULL,
  `personagem` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_user`
--

LOCK TABLES `ew_user` WRITE;
/*!40000 ALTER TABLE `ew_user` DISABLE KEYS */;
INSERT INTO `ew_user` VALUES (1,0,'','CubeBlack','danie_nerd@hotmail.com','Ragnarok13',4,2),(2,0,'','asdf','danie_nerd@hotmail.com','asdf',1,3),(3,0,'asdf','zxcv','zxcv','zxcv',2,19);
/*!40000 ALTER TABLE `ew_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_wiki`
--

DROP TABLE IF EXISTS `ew_wiki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_wiki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `tipo` varchar(100) NOT NULL DEFAULT '',
  `descricao` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_wiki`
--

LOCK TABLES `ew_wiki` WRITE;
/*!40000 ALTER TABLE `ew_wiki` DISABLE KEYS */;
INSERT INTO `ew_wiki` VALUES (1,'LIFE','dialogo','Empty!'),(2,'Introducao','system','asdfasdfasd asdf ds');
/*!40000 ALTER TABLE `ew_wiki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ew_wikipage`
--

DROP TABLE IF EXISTS `ew_wikipage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ew_wikipage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ew_wikipage`
--

LOCK TABLES `ew_wikipage` WRITE;
/*!40000 ALTER TABLE `ew_wikipage` DISABLE KEYS */;
INSERT INTO `ew_wikipage` VALUES (1,'Life','Dialogo','Esta a pagina da entrada Life'),(3,'Mana','a','Pergunta curta para saber o mana');
/*!40000 ALTER TABLE `ew_wikipage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-28 13:12:20
