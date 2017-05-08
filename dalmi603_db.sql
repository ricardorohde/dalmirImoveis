# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-05-07 21:28:37
# Generator: MySQL-Front 6.0  (Build 1.157)


#
# Structure for table "bairros"
#

DROP TABLE IF EXISTS `bairros`;
CREATE TABLE `bairros` (
  `cod_bairro` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) DEFAULT '11',
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_bairro`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

#
# Data for table "bairros"
#

/*!40000 ALTER TABLE `bairros` DISABLE KEYS */;
INSERT INTO `bairros` VALUES (1,1,'Machados'),(2,1,'Centro'),(3,1,'Gravatá'),(4,1,'São Pedro'),(5,2,'Centro'),(6,3,'Centro'),(7,1,'São Domingos'),(8,1,'São Paulo'),(9,1,'Nossa Senhora das Graças'),(10,1,'Meia Praia'),(11,1,'São Domingos'),(12,1,'São Pedro'),(13,1,'Volta Grande'),(14,1,'Pedreiras'),(15,2,'Armação'),(16,2,'Bela Vista'),(17,2,'Conceição'),(18,2,'Furadinho'),(19,2,'Itacolomi'),(20,2,'Jardim Flamboyant'),(21,2,'Jardim Tânia'),(22,2,'Morretes'),(23,2,'Morro Alto'),(24,2,'Norte'),(25,2,'Nossa Senhora da Conceição'),(26,2,'Nossa Senhora da Paz'),(27,2,'Nossa Senhora Paz'),(28,2,'Penha'),(29,2,'Piçarras'),(30,2,'Pintora Jaques'),(31,2,'Rio Furado'),(32,2,'Rio Novo'),(33,2,'Santo Antônio'),(34,2,'Tapera'),(35,2,'Variante'),(42,4,'Pioneiros'),(43,4,'Centro'),(44,4,'Bairro das Nações');
/*!40000 ALTER TABLE `bairros` ENABLE KEYS */;

#
# Structure for table "cidades"
#

DROP TABLE IF EXISTS `cidades`;
CREATE TABLE `cidades` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "cidades"
#

/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
INSERT INTO `cidades` VALUES (1,'Navegantes'),(2,'Piçarras'),(3,'Penha'),(4,'Balneário Camboriú'),(5,'Camboriú');
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;

#
# Structure for table "diferencial_imovel"
#

DROP TABLE IF EXISTS `diferencial_imovel`;
CREATE TABLE `diferencial_imovel` (
  `cod_diferencial` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_diferencial`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "diferencial_imovel"
#

/*!40000 ALTER TABLE `diferencial_imovel` DISABLE KEYS */;
INSERT INTO `diferencial_imovel` VALUES (1,'Ar Condicionado'),(2,'Home Theater'),(3,'Tv Lounge'),(4,'Dragão de Comodo');
/*!40000 ALTER TABLE `diferencial_imovel` ENABLE KEYS */;

#
# Structure for table "imagens"
#

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE `imagens` (
  `cod_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `caminho_img` varchar(500) DEFAULT NULL,
  `cod_imovel` int(11) DEFAULT NULL,
  `caminho_thumb` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cod_imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "imagens"
#

/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (1,'upload/foto.png',2,'upload/thumb_foto.png'),(3,'upload/C671ghsXEAEwgN0.jpg',1,'upload/thumb_C671ghsXEAEwgN0.jpg'),(4,'upload/equipe_filmagem_inovartebc.jpg',3,'upload/thumb_equipe_filmagem_inovartebc.jpg'),(5,'upload/post estetica.png',3,'upload/thumb_post estetica.png'),(6,'upload/11722516_10204442867501779_1548510482858879671_o.jpg',67,'upload/thumb_11722516_10204442867501779_1548510482858879671_o.jpg');
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;

#
# Structure for table "imoveis"
#

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE `imoveis` (
  `cod_imovel` int(11) NOT NULL AUTO_INCREMENT,
  `cod_tipo` int(11) DEFAULT NULL,
  `cod_bairro` int(11) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `quartos` int(11) DEFAULT '0',
  `suite` int(11) DEFAULT '0',
  `garagem` int(11) DEFAULT '0',
  `area` varchar(200) DEFAULT '0',
  `banheiro` int(11) DEFAULT NULL,
  `descricao` text,
  `deletado` int(11) DEFAULT NULL,
  `oculto` int(11) DEFAULT NULL,
  `valor` float(10,2) DEFAULT NULL,
  `cod_transacao` int(11) DEFAULT NULL,
  `data_insert` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `video` text,
  PRIMARY KEY (`cod_imovel`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;

#
# Data for table "imoveis"
#

/*!40000 ALTER TABLE `imoveis` DISABLE KEYS */;
INSERT INTO `imoveis` VALUES (1,1,1,'teste1','teste12',3,3,3,'3',3,'32434234<div><br></div><div>324</div><div>32</div><div>432</div><div>423</div>',0,0,200.00,1,'2017-05-07 11:17:01',''),(2,1,1,'324324','32432432',3,3,3,'3',3,'343242',0,0,200.00,1,'2017-05-07 11:17:28',''),(3,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(67,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33',''),(68,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(69,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(70,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(71,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(72,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(73,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(74,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(75,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(76,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(77,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(78,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(79,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(80,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(81,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(82,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(83,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(84,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(85,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(86,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(87,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(88,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(89,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(90,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(91,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(92,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(93,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(94,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(95,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(96,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(97,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(98,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(99,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(100,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(101,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(102,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(103,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(104,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(105,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(106,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(107,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(108,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(109,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(110,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(111,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(112,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(113,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(114,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(115,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(116,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(117,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(118,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423'),(119,1,1,'erewre','erwrew',324324,23423432,42424,'423423',32432423,'3242323',0,0,200.00,1,'2017-05-07 12:47:33','3242423423');
/*!40000 ALTER TABLE `imoveis` ENABLE KEYS */;

#
# Structure for table "rel_imovel_dif"
#

DROP TABLE IF EXISTS `rel_imovel_dif`;
CREATE TABLE `rel_imovel_dif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_imovel` int(11) DEFAULT NULL,
  `cod_dif` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "rel_imovel_dif"
#

INSERT INTO `rel_imovel_dif` VALUES (5,2,1),(6,2,3),(11,1,1),(12,1,2),(13,3,4),(14,67,2);

#
# Structure for table "tipo_imovel"
#

DROP TABLE IF EXISTS `tipo_imovel`;
CREATE TABLE `tipo_imovel` (
  `cod_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_tipo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "tipo_imovel"
#

/*!40000 ALTER TABLE `tipo_imovel` DISABLE KEYS */;
INSERT INTO `tipo_imovel` VALUES (1,'Apartamento'),(2,'Casa'),(3,'Chácara'),(4,'Sobrado'),(5,'Mansão'),(6,'Sítio');
/*!40000 ALTER TABLE `tipo_imovel` ENABLE KEYS */;

#
# Structure for table "transacao"
#

DROP TABLE IF EXISTS `transacao`;
CREATE TABLE `transacao` (
  `cod_transacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_transacao`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "transacao"
#

/*!40000 ALTER TABLE `transacao` DISABLE KEYS */;
INSERT INTO `transacao` VALUES (1,'Venda'),(2,'Aluguel');
/*!40000 ALTER TABLE `transacao` ENABLE KEYS */;

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "usuario"
#

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'dalmir','Dalmir Demarch','123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
