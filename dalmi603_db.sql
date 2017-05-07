# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-05-06 23:15:36
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
INSERT INTO `bairros` VALUES (1,1,'Machados'),(2,1,'Centro'),(3,1,'Gravatá'),(4,1,'São Pedro'),(5,2,'Centro'),(6,3,'Centro'),(7,1,'São Domingos'),(8,1,'São Paulo'),(9,1,'Nossa Senhora das Graças'),(10,1,'Meia Praia'),(11,1,'São Domingos'),(12,1,'São Pedro'),(13,1,'Volta Grande'),(14,1,'Pedreiras'),(15,2,'Armação'),(16,2,'Bela Vista'),(17,2,'Conceição'),(18,2,'Furadinho'),(19,2,'Itacolomi'),(20,2,'Jardim Flamboyant'),(21,2,'Jardim Tânia'),(22,2,'Morretes'),(23,2,'Morro Alto'),(24,2,'Norte'),(25,2,'Nossa Senhora da Conceição'),(26,2,'Nossa Senhora da Paz'),(27,2,'Nossa Senhora Paz'),(28,2,'Penha'),(29,2,'Piçarras'),(30,2,'Pintora Jaques'),(31,2,'Rio Furado'),(32,2,'Rio Novo'),(33,2,'Santo Antônio'),(34,2,'Tapera'),(35,2,'Variante');
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

#
# Data for table "imagens"
#

/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (23,'upload/Physiotherapy-7-1030x701.jpg',7,'upload/thumb_Physiotherapy-7-1030x701.jpg'),(53,'upload/post estetica.png',3,'upload/thumb_post estetica.png'),(54,'upload/mulher-fazendo-pilates-1468591615525_v2_1920x1281.jpg',3,'upload/thumb_mulher-fazendo-pilates-1468591615525_v2_1920x1281.jpg'),(55,'upload/doutora.png',4,'upload/thumb_doutora.png'),(56,'upload/imageshdh-2-220459.jpg',4,'upload/thumb_imageshdh-2-220459.jpg'),(57,'upload/Self-Storage-para-estúdios-de-filmagem.jpg',5,'upload/thumb_Self-Storage-para-estúdios-de-filmagem.jpg'),(58,'upload/103305-casas-bonitas-fachada-haus-arquitetura-viva-decora.jpg',5,'upload/thumb_103305-casas-bonitas-fachada-haus-arquitetura-viva-decora.jpg'),(59,'upload/5-motivos-para-gravar-em-chroma-key.jpg',5,'upload/thumb_5-motivos-para-gravar-em-chroma-key.jpg'),(60,'upload/imageshdh-2-220459.jpg',7,'upload/thumb_imageshdh-2-220459.jpg'),(61,'upload/imgres.jpg',7,'upload/thumb_imgres.jpg'),(62,'upload/foto.png',8,'upload/thumb_foto.png'),(63,'upload/Fotolia_41826629_Subscription_Monthly_XXL-1.png',8,'upload/thumb_Fotolia_41826629_Subscription_Monthly_XXL-1.png'),(64,'upload/C671ghsXEAEwgN0.jpg',8,'upload/thumb_C671ghsXEAEwgN0.jpg'),(69,'upload/balada.jpg',11,'upload/thumb_balada.jpg'),(70,'upload/PARTO-com.jpg',11,'upload/thumb_PARTO-com.jpg'),(71,'upload/C671ghsXEAEwgN0.jpg',9,'upload/thumb_C671ghsXEAEwgN0.jpg'),(72,'upload/braquioplastia-cirurgia-plástica-no-braço.jpg',10,'upload/thumb_braquioplastia-cirurgia-plástica-no-braço.jpg'),(73,'upload/caixa-grandee.gif',10,'upload/thumb_caixa-grandee.gif'),(74,'upload/18010656_1325909667490736_7745100726617073275_n.png',2,'upload/thumb_18010656_1325909667490736_7745100726617073275_n.png'),(75,'upload/17862867_1372908952765945_4966851231135071626_n.png',2,'upload/thumb_17862867_1372908952765945_4966851231135071626_n.png'),(76,'upload/18010656_1325909667490736_7745100726617073275_n.png',6,'upload/thumb_18010656_1325909667490736_7745100726617073275_n.png'),(77,'upload/18222248_1298856370151212_6259003498444618124_n.jpg',6,'upload/thumb_18222248_1298856370151212_6259003498444618124_n.jpg'),(80,'upload/17862867_1372908952765945_4966851231135071626_n.png',1,'upload/thumb_17862867_1372908952765945_4966851231135071626_n.png'),(81,'upload/18010656_1325909667490736_7745100726617073275_n.png',1,'upload/thumb_18010656_1325909667490736_7745100726617073275_n.png');
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "imoveis"
#

/*!40000 ALTER TABLE `imoveis` DISABLE KEYS */;
INSERT INTO `imoveis` VALUES (1,5,29,'imovel 1','endereço 1',2,2,1,'12432',3,'',0,0,2568.00,2,'2017-05-06 13:51:58',''),(2,1,4,'titulo 2','edenreço 2',2,2,2,'2',2,'2132321321312',0,0,4656.00,1,'2017-05-06 15:05:01',''),(3,4,9,'titulo 3','32312321',2,1,2,'2',2,'35454543',0,0,21321.00,1,'2017-05-06 15:05:30',NULL),(4,4,9,'titulo 3','32312321',2,1,2,'2',2,'35454543',0,0,21321.00,1,'2017-05-06 15:05:33',NULL),(5,2,11,'teste','teste 3',3,1,2,'1',4,'<span style=\"font-weight: bold;\">3432etertret</span><div><span style=\"font-weight: bold;\">erter</span></div><div><span style=\"font-weight: bold;\">t</span></div><div><span style=\"font-weight: bold;\">erwtew</span></div><div><span style=\"font-weight: bold;\">rt</span></div><div><span style=\"font-weight: bold;\">erw</span></div>',0,0,3434343.00,1,'2017-05-06 15:06:26',NULL),(6,3,14,'teste 2wewew','teste 2 ',3,3,3,'3',3,'33443434343',0,0,3343.00,2,'2017-05-06 15:19:22',''),(7,3,5,'534534','3453453',4,4,4,'4',4,'<span style=\"text-decoration-line: underline;\">45345345345</span><div><span style=\"text-decoration-line: underline;\">345</span></div><div><span style=\"text-decoration-line: underline;\">34</span></div><div><span style=\"text-decoration-line: underline;\">534534</span></div>',0,0,345345.00,1,'2017-05-06 15:22:17',NULL),(8,1,4,'4354','345345',4,4,4,'4',4,'45345345',0,0,453453.00,1,'2017-05-06 15:22:40',NULL),(9,4,13,'ewrew','ewrewr',3,3,3,'3',3,'<span style=\"font-weight: bold;\">324</span><div><span style=\"font-weight: bold;\">34</span></div><div><span style=\"font-weight: bold;\">324432</span></div><div><span style=\"font-weight: bold;\">43</span></div><div><span style=\"font-weight: bold;\">243</span></div><div><span style=\"font-weight: bold;\">2</span></div>',0,0,32432.00,2,'2017-05-06 15:50:38','<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/FYH8DsU2WCk\" frameborder=\"0\" allowfullscreen></iframe>'),(10,1,1,'11111','111',1,1,1,'1',1,'ewrwrew',0,0,111.00,1,'2017-05-06 15:51:18',''),(11,3,1,'2343423','342342',23432,32423,234,'32423',32423423,'234324',0,0,23423424.00,1,'2017-05-06 15:53:03',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

#
# Data for table "rel_imovel_dif"
#

INSERT INTO `rel_imovel_dif` VALUES (8,4,2),(9,4,3),(19,3,2),(20,3,3),(21,5,1),(22,5,3),(23,7,1),(24,7,2),(25,8,1),(28,11,1),(29,3,4),(30,3,1),(31,9,1),(32,10,1),(33,10,2),(34,10,4),(35,2,1),(36,2,2),(37,6,1),(50,1,1),(51,1,2);

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
