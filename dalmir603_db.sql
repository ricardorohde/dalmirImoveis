# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-05-03 20:41:58
# Generator: MySQL-Front 6.0  (Build 1.124)


#
# Structure for table "bairros"
#

DROP TABLE IF EXISTS `bairros`;
CREATE TABLE `bairros` (
  `cod_bairro` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cidade` int(11) DEFAULT '11',
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_bairro`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "bairros"
#

/*!40000 ALTER TABLE `bairros` DISABLE KEYS */;
INSERT INTO `bairros` VALUES (1,1,'Machados'),(2,1,'Centro'),(3,1,'Gravatá'),(4,1,'São Pedro'),(5,2,'Centro'),(6,3,'Centro');
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
INSERT INTO `cidades` VALUES (1,'Navegantes'),(2,'Piçarras'),(3,'Penha');
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;

#
# Structure for table "diferencial_imovel"
#

DROP TABLE IF EXISTS `diferencial_imovel`;
CREATE TABLE `diferencial_imovel` (
  `cod_diferencial` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_diferencial`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "diferencial_imovel"
#

/*!40000 ALTER TABLE `diferencial_imovel` DISABLE KEYS */;
INSERT INTO `diferencial_imovel` VALUES (1,'Ar Condicionado'),(2,'Home Theater'),(3,'Tv Lounge');
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "imagens"
#

/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (1,'upload/la edcora papel parede0.png',1,'upload/thumb_la edcora papel parede0.png'),(2,'upload/via house.png',1,'upload/thumb_via house.png'),(3,'upload/17862867_1372908952765945_4966851231135071626_n.png',2,'upload/thumb_17862867_1372908952765945_4966851231135071626_n.png'),(4,'upload/17862867_1372908952765945_4966851231135071626_n.png',3,'upload/thumb_17862867_1372908952765945_4966851231135071626_n.png'),(5,'upload/caixa-grandee.gif',3,'upload/thumb_caixa-grandee.gif'),(6,'upload/via house.png',4,'upload/thumb_via house.png'),(7,'upload/la edcora papel parede0.png',4,'upload/thumb_la edcora papel parede0.png');
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
  PRIMARY KEY (`cod_imovel`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "imoveis"
#

/*!40000 ALTER TABLE `imoveis` DISABLE KEYS */;
INSERT INTO `imoveis` VALUES (1,3,1,'321321312','312312312',3,3123,3,'3',3,'12312312',0,0,3.00,1,'2017-04-30 20:17:30'),(2,3,2,'MMUDAR','teste',4,4,4,'4',4,'<span style=\"font-weight: bold;\">43534543</span><div><span style=\"font-weight: bold;\">345</span></div><div><span style=\"font-weight: bold;\">34</span></div><div><span style=\"font-weight: bold;\">534</span></div><div><span style=\"font-weight: bold;\">534</span></div><div><span style=\"font-weight: bold;\">534</span></div><div><span style=\"font-weight: bold;\">5</span></div><div><span style=\"font-weight: bold;\">43</span></div><div><span style=\"font-weight: bold;\">5</span></div>',0,0,3.00,1,'2017-04-30 20:21:56'),(3,3,1,'teste','teste',3,32432,3,'3',3,'32432432<div><span style=\"font-weight: bold;\">ewrfweraqe</span></div><div><span style=\"font-weight: bold;\"><br></span></div><div><span style=\"font-weight: bold;\">ew<span style=\"color: rgb(255, 217, 102);\">rewqrqwer</span><span style=\"text-decoration-line: underline; background-color: rgb(255, 153, 0);\">erqwerqew</span></span></div>',0,0,3.00,1,'2017-05-01 15:05:06'),(4,3,4,'teste','teste',3,32432,3,'3',3,'assasdas',0,0,3.00,2,'2017-05-01 17:19:42'),(5,3,4,'333333','33333',3,32432,3,'3',3,'',0,0,3.00,1,'2017-05-01 17:20:09'),(6,3,4,'333333','33333',3,32432,3,'3',3,'',0,0,3.00,2,'2017-05-01 17:20:42');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

#
# Data for table "rel_imovel_dif"
#

INSERT INTO `rel_imovel_dif` VALUES (4,3,1),(5,3,2),(6,3,3),(7,4,2),(24,2,2),(25,2,3);

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
INSERT INTO `tipo_imovel` VALUES (1,'Apartamento'),(2,'Casa'),(3,'Chácara'),(4,'Sobrado'),(5,'Mansão Teste');
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
