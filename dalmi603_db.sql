# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-05-07 11:15:23
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
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

#
# Data for table "imagens"
#


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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "imoveis"
#


#
# Structure for table "rel_imovel_dif"
#

DROP TABLE IF EXISTS `rel_imovel_dif`;
CREATE TABLE `rel_imovel_dif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_imovel` int(11) DEFAULT NULL,
  `cod_dif` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

#
# Data for table "rel_imovel_dif"
#


#
# Structure for table "tipo_imovel"
#

DROP TABLE IF EXISTS `tipo_imovel`;
CREATE TABLE `tipo_imovel` (
  `cod_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_tipo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
INSERT INTO `usuario` VALUES (1,'admin','Dalmir ','admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
