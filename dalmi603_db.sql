# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2017-05-10 20:52:59
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
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

#
# Data for table "bairros"
#

/*!40000 ALTER TABLE `bairros` DISABLE KEYS */;
INSERT INTO `bairros` VALUES (1,1,'Machados'),(2,1,'Centro'),(3,1,'Gravatá'),(4,1,'São Pedro'),(5,2,'Centro'),(6,3,'Centro'),(7,1,'São Domingos'),(8,1,'São Paulo'),(9,1,'Nossa Senhora das Graças'),(10,1,'Meia Praia'),(11,1,'São Domingos'),(12,1,'São Pedro'),(13,1,'Volta Grande'),(14,1,'trytrytryrt'),(15,2,'Armação'),(16,2,'Bela Vista'),(17,2,'Conceição'),(18,2,'Furadinho'),(19,2,'Itacolomi'),(20,2,'Jardim Flamboyant'),(21,2,'Jardim Tânia'),(22,2,'Morretes'),(23,2,'Morro Alto'),(24,2,'Norte'),(25,2,'Nossa Senhora da Conceição'),(26,2,'Nossa Senhora da Paz'),(27,2,'Nossa Senhora Paz'),(28,2,'Penha'),(29,2,'Piçarras'),(30,2,'Pintora Jaques'),(31,2,'Rio Furado'),(32,2,'Rio Novo'),(33,2,'Santo Antônio'),(34,2,'Tapera'),(35,2,'Variante'),(42,4,'Pioneiros'),(43,4,'Centro'),(44,4,'Bairro das Nações'),(58,7,'Não Disponível');
/*!40000 ALTER TABLE `bairros` ENABLE KEYS */;

#
# Structure for table "cidades"
#

DROP TABLE IF EXISTS `cidades`;
CREATE TABLE `cidades` (
  `cod_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "cidades"
#

/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
INSERT INTO `cidades` VALUES (1,'Navegantes'),(2,'Piçarras'),(3,'Penha'),(4,'Balneário Camboriú'),(5,'Camboriú'),(6,'Florianópolis'),(7,'Não Disponível');
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;

#
# Structure for table "diferencial_imovel"
#

DROP TABLE IF EXISTS `diferencial_imovel`;
CREATE TABLE `diferencial_imovel` (
  `cod_diferencial` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod_diferencial`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Data for table "diferencial_imovel"
#

/*!40000 ALTER TABLE `diferencial_imovel` DISABLE KEYS */;
INSERT INTO `diferencial_imovel` VALUES (1,'Ar Condicionado'),(2,'Home Theater'),(3,'Tv Lounge'),(4,'Piscina'),(5,'Averbada'),(6,'Varanda'),(7,'Canil'),(8,'Churrasqueira'),(9,'Lavabo'),(10,'Patio'),(11,'cozinha'),(12,'sacada'),(13,'Jardim'),(14,'Lavação'),(15,'Copa'),(16,'Sala'),(17,'Suite com Closet');
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "imagens"
#

/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
INSERT INTO `imagens` VALUES (1,'upload/018.JPG',1,'upload/018.JPG'),(2,'upload/001.JPG',1,'upload/001.JPG'),(3,'upload/002.JPG',1,'upload/002.JPG'),(4,'upload/003.JPG',1,'upload/003.JPG'),(5,'upload/005.JPG',1,'upload/005.JPG'),(6,'upload/009.JPG',1,'upload/009.JPG'),(7,'upload/011.JPG',1,'upload/011.JPG'),(8,'upload/012.JPG',1,'upload/012.JPG'),(9,'upload/013.JPG',1,'upload/013.JPG'),(10,'upload/015.JPG',1,'upload/015.JPG'),(11,'upload/017.JPG',1,'upload/017.JPG'),(12,'upload/018.JPG',1,'upload/018.JPG'),(13,'upload/020.JPG',1,'upload/020.JPG'),(14,'upload/050.JPG',2,'upload/050.JPG'),(15,'upload/032.JPG',2,'upload/032.JPG'),(16,'upload/033.JPG',2,'upload/033.JPG'),(17,'upload/034.JPG',2,'upload/034.JPG'),(18,'upload/035.JPG',2,'upload/035.JPG'),(19,'upload/037.JPG',2,'upload/037.JPG'),(20,'upload/038.JPG',2,'upload/038.JPG'),(21,'upload/039.JPG',2,'upload/039.JPG'),(22,'upload/040.JPG',2,'upload/040.JPG'),(23,'upload/041.JPG',2,'upload/041.JPG'),(24,'upload/042.JPG',2,'upload/042.JPG'),(25,'upload/043.JPG',2,'upload/043.JPG'),(26,'upload/044.JPG',2,'upload/044.JPG'),(27,'upload/045.JPG',2,'upload/045.JPG'),(28,'upload/046.JPG',2,'upload/046.JPG'),(29,'upload/047.JPG',2,'upload/047.JPG'),(30,'upload/048.JPG',2,'upload/048.JPG'),(31,'upload/DSC07168.JPG',3,'upload/DSC07168.JPG'),(32,'upload/DSC07170.JPG',3,'upload/DSC07170.JPG'),(33,'upload/DSC07163.JPG',3,'upload/DSC07163.JPG'),(34,'upload/DSC07169.JPG',3,'upload/DSC07169.JPG'),(35,'upload/DSC07172.JPG',3,'upload/DSC07172.JPG'),(36,'upload/DSC07173.JPG',3,'upload/DSC07173.JPG'),(37,'upload/DSC07174.JPG',3,'upload/DSC07174.JPG'),(38,'upload/DSC07176.JPG',3,'upload/DSC07176.JPG'),(39,'upload/ea1400161730.jpg',4,'upload/ea1400161730.jpg'),(40,'upload/ea1400159570.jpg',4,'upload/ea1400159570.jpg'),(41,'upload/ea1400159674.jpg',4,'upload/ea1400159674.jpg'),(42,'upload/ea1400159788.jpg',4,'upload/ea1400159788.jpg'),(43,'upload/ea1400159947.jpg',4,'upload/ea1400159947.jpg'),(44,'upload/ea1400159999.jpg',4,'upload/ea1400159999.jpg'),(45,'upload/ea1400160115.jpg',4,'upload/ea1400160115.jpg'),(46,'upload/ea1400160285.jpg',4,'upload/ea1400160285.jpg'),(47,'upload/ea1400160369.jpg',4,'upload/ea1400160369.jpg'),(48,'upload/ea1400160440.jpg',4,'upload/ea1400160440.jpg'),(49,'upload/ea1400160647.jpg',4,'upload/ea1400160647.jpg'),(50,'upload/ea1400161171.jpg',4,'upload/ea1400161171.jpg'),(51,'upload/ea1400161470.jpg',4,'upload/ea1400161470.jpg'),(52,'upload/ea1400161515.jpg',4,'upload/ea1400161515.jpg'),(53,'upload/ea1400161573.jpg',4,'upload/ea1400161573.jpg'),(54,'upload/ea1400161775.jpg',4,'upload/ea1400161775.jpg'),(55,'upload/463-132wwwwwwwwwwwwwwwwwwww.jpg',5,'upload/463-132wwwwwwwwwwwwwwwwwwww.jpg'),(56,'upload/463-3.jpg',5,'upload/463-3.jpg'),(57,'upload/473.jpg',6,'upload/473.jpg'),(58,'upload/473.jpg',8,'upload/473.jpg'),(59,'upload/231519d41bd62a23ac8dcdbc33a40437.jpg',9,'upload/231519d41bd62a23ac8dcdbc33a40437.jpg'),(60,'upload/391b2081e88e4bae31df201dcc1f84a6.jpg',9,'upload/391b2081e88e4bae31df201dcc1f84a6.jpg'),(61,'upload/92fcf094c8f197310aa8bb86e0047afe.jpg',9,'upload/92fcf094c8f197310aa8bb86e0047afe.jpg'),(62,'upload/7bc00c86f4b62cddfc5f4648386ce1fa.jpg',9,'upload/7bc00c86f4b62cddfc5f4648386ce1fa.jpg'),(63,'upload/06ab2326572fe2904b26882c5c908669.jpg',9,'upload/06ab2326572fe2904b26882c5c908669.jpg'),(64,'upload/4dffb2bfd6c912bb656afbc64429b6cf.jpg',9,'upload/4dffb2bfd6c912bb656afbc64429b6cf.jpg'),(65,'upload/239032aa135ae7470deea2187dcd23f9.jpg',9,'upload/239032aa135ae7470deea2187dcd23f9.jpg'),(66,'upload/2708039d1587bf9628bde4548c0f2a0e.jpg',9,'upload/2708039d1587bf9628bde4548c0f2a0e.jpg'),(67,'upload/481.jpg',7,'upload/481.jpg'),(68,'upload/013.JPG',10,'upload/013.JPG'),(69,'upload/015.JPG',10,'upload/015.JPG'),(70,'upload/016.JPG',10,'upload/016.JPG'),(71,'upload/017.JPG',10,'upload/017.JPG'),(72,'upload/018.JPG',10,'upload/018.JPG'),(73,'upload/019.JPG',10,'upload/019.JPG'),(74,'upload/020.JPG',10,'upload/020.JPG'),(75,'upload/021.JPG',10,'upload/021.JPG'),(76,'upload/022.JPG',10,'upload/022.JPG'),(77,'upload/024.JPG',10,'upload/024.JPG'),(78,'upload/023.JPG',10,'upload/023.JPG'),(79,'upload/026.JPG',10,'upload/026.JPG'),(80,'upload/027.JPG',10,'upload/027.JPG'),(81,'upload/028.JPG',10,'upload/028.JPG'),(82,'upload/029.JPG',10,'upload/029.JPG'),(83,'upload/030.JPG',10,'upload/030.JPG'),(84,'upload/031.JPG',10,'upload/031.JPG'),(85,'upload/032.JPG',10,'upload/032.JPG'),(86,'upload/007.JPG',11,'upload/007.JPG'),(87,'upload/008.JPG',11,'upload/008.JPG'),(88,'upload/009.JPG',11,'upload/009.JPG'),(89,'upload/010.JPG',11,'upload/010.JPG'),(90,'upload/011.JPG',11,'upload/011.JPG'),(91,'upload/012.JPG',11,'upload/012.JPG'),(92,'upload/014.JPG',11,'upload/014.JPG'),(93,'upload/015.JPG',11,'upload/015.JPG'),(94,'upload/016 (2).JPG',11,'upload/016 (2).JPG'),(95,'upload/016.JPG',11,'upload/016.JPG'),(96,'upload/019.JPG',11,'upload/019.JPG'),(97,'upload/023.JPG',11,'upload/023.JPG'),(98,'upload/024.JPG',11,'upload/024.JPG'),(99,'upload/025.JPG',11,'upload/025.JPG'),(100,'upload/026.JPG',11,'upload/026.JPG'),(101,'upload/027.JPG',11,'upload/027.JPG'),(102,'upload/028.JPG',11,'upload/028.JPG'),(103,'upload/029.JPG',11,'upload/029.JPG'),(104,'upload/031.JPG',11,'upload/031.JPG'),(105,'upload/032.JPG',11,'upload/032.JPG'),(106,'upload/331.jpg',12,'upload/331.jpg'),(107,'upload/331.jpg',13,'upload/331.jpg'),(108,'upload/487.jpg',14,'upload/487.jpg'),(109,'upload/489.jpg',15,'upload/489.jpg'),(110,'upload/492.jpg',16,'upload/492.jpg'),(111,'upload/519.jpg',17,'upload/519.jpg'),(112,'upload/519a.jpg',17,'upload/519a.jpg'),(113,'upload/519b.jpg',17,'upload/519b.jpg'),(114,'upload/519.jpg',18,'upload/519.jpg'),(115,'upload/519a.jpg',18,'upload/519a.jpg'),(116,'upload/519b.jpg',18,'upload/519b.jpg'),(117,'upload/521.jpg',19,'upload/521.jpg'),(118,'upload/523a.jpg',20,'upload/523a.jpg'),(119,'upload/531.jpg',21,'upload/531.jpg'),(127,'upload/53233.jpg',22,'upload/53233.jpg'),(128,'upload/533.jpg',23,'upload/533.jpg'),(129,'upload/20161217_160511.jpg',24,'upload/20161217_160511.jpg'),(130,'upload/20161217_160608.jpg',24,'upload/20161217_160608.jpg'),(131,'upload/20161217_160647.jpg',24,'upload/20161217_160647.jpg'),(132,'upload/20161217_160655.jpg',24,'upload/20161217_160655.jpg'),(133,'upload/20161217_160705.jpg',24,'upload/20161217_160705.jpg'),(134,'upload/20161217_160711.jpg',24,'upload/20161217_160711.jpg'),(135,'upload/20161217_160742.jpg',24,'upload/20161217_160742.jpg'),(136,'upload/20161217_160750.jpg',24,'upload/20161217_160750.jpg'),(137,'upload/20161217_160818.jpg',24,'upload/20161217_160818.jpg'),(138,'upload/20161217_161004.jpg',24,'upload/20161217_161004.jpg'),(139,'upload/20161217_161120.jpg',24,'upload/20161217_161120.jpg'),(140,'upload/20161217_161147.jpg',24,'upload/20161217_161147.jpg'),(141,'upload/20161217_160511.jpg',25,'upload/20161217_160511.jpg'),(142,'upload/20161217_160608.jpg',25,'upload/20161217_160608.jpg'),(143,'upload/20161217_160647.jpg',25,'upload/20161217_160647.jpg'),(144,'upload/20161217_160655.jpg',25,'upload/20161217_160655.jpg'),(145,'upload/20161217_160705.jpg',25,'upload/20161217_160705.jpg'),(146,'upload/20161217_160711.jpg',25,'upload/20161217_160711.jpg'),(147,'upload/20161217_160742.jpg',25,'upload/20161217_160742.jpg'),(148,'upload/20161217_160750.jpg',25,'upload/20161217_160750.jpg'),(149,'upload/20161217_160818.jpg',25,'upload/20161217_160818.jpg'),(150,'upload/20161217_161004.jpg',25,'upload/20161217_161004.jpg'),(151,'upload/20161217_161120.jpg',25,'upload/20161217_161120.jpg'),(152,'upload/20161217_161147.jpg',25,'upload/20161217_161147.jpg'),(153,'upload/535.jpg',26,'upload/535.jpg'),(154,'upload/535.jpg',27,'upload/535.jpg'),(155,'upload/536.jpg',28,'upload/536.jpg'),(156,'upload/undefined',28,'upload/undefined'),(157,'upload/undefined',28,'upload/undefined'),(158,'upload/undefined',28,'upload/undefined'),(159,'upload/undefined',28,'upload/undefined'),(160,'upload/undefined',28,'upload/undefined'),(161,'upload/undefined',28,'upload/undefined'),(162,'upload/undefined',28,'upload/undefined'),(163,'upload/undefined',28,'upload/undefined'),(164,'upload/undefined',28,'upload/undefined'),(165,'upload/undefined',28,'upload/undefined'),(166,'upload/undefined',28,'upload/undefined'),(167,'upload/undefined',28,'upload/undefined'),(168,'upload/undefined',28,'upload/undefined'),(169,'upload/undefined',28,'upload/undefined'),(170,'upload/undefined',28,'upload/undefined'),(171,'upload/undefined',28,'upload/undefined'),(172,'upload/537.jpg',29,'upload/537.jpg'),(173,'upload/537.jpg',30,'upload/537.jpg');
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
  `valor` float(12,2) DEFAULT '0.00',
  `cod_transacao` int(11) DEFAULT NULL,
  `data_insert` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `video` text,
  PRIMARY KEY (`cod_imovel`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;

#
# Data for table "imoveis"
#

/*!40000 ALTER TABLE `imoveis` DISABLE KEYS */;
INSERT INTO `imoveis` VALUES (1,2,1,'REF: 107  VENDE 100 M DO MAR','desconhecido',4,2,6,'0',2,'<blockquote><span style=\"color: rgb(230, 145, 56); font-weight: bold; font-size: medium;\">CASA NA QUADRA DO MAR</span></blockquote><div><span style=\"color: rgb(102, 102, 102);\">02 QUARTOS, + 02 SEPARADOS&nbsp;</span></div><div><span style=\"color: rgb(102, 102, 102);\">SALA, COZINHA, &nbsp;AREA DE FESTAS, GARAGEM P/ 6 CARROS,&nbsp;</span></div><div><span style=\"color: rgb(102, 102, 102);\">02 BANHEIROS, VARANDA, CHURRASQUEIRA, E CANIL,</span></div><div><span style=\"font-weight: bold; color: rgb(68, 68, 68);\"><br></span></div><div><span style=\"font-weight: bold; color: rgb(153, 153, 153);\">VALOR R$ 380.000,00&nbsp;</span></div><div><span style=\"color: rgb(103, 78, 167); font-size: medium; font-weight: bold;\">TROCA POR CASA DE MENOR VALOR</span></div>',0,0,380000.00,1,'2017-05-10 12:25:10',''),(2,2,1,'REF:331  VENDE-SE CASA GERMINADA','',2,1,1,'0',2,'<blockquote><span style=\"font-weight: bold; color: rgb(246, 178, 107);\">REF:331 &nbsp;VENDE-SE CASA GEMINADA</span></blockquote><div><span style=\"color: rgb(68, 68, 68);\">COM PISCINA, 01 SUITE COM CLOSET E SACADA, + 02 QUARTOS COM SACADA, COZINHA, COPA, SALA + 02 BANHEIRO, + 01 LAVABO, &nbsp; GARAGEM, PATIO, LAVAÇÃO, PISCINA COM CHURRASQUEIRA.</span><br></div><div><br></div><div>TROCA POR IMÓVEL DE MENOR VALOR</div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR:R$ 350,000 NEGOCIÁVEL</span></div>',0,0,350000.00,1,'2017-05-10 13:06:27',''),(3,2,1,'REF:456  CASA BOM PARA PONTO COMERCIAL','desconhecido',2,0,1,'0',2,'<blockquote><span style=\"font-weight: bold; color: rgb(246, 178, 107);\">REF:456&nbsp;<span style=\"font-size: 15px;\">CASA BOM PARA PONTO COMERCIAL</span></span></blockquote><div><span style=\"font-weight: bold;\"><br></span></div><div>COM 02 QUARTOS, COZINHA E SALA INTEGRADAS</div><div>02 BANHEIROS, LAVAÇÃO, VARANDA, E PATIO</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: R$ 300.000,00 &nbsp; &nbsp;</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL</span></div><div><br></div>',0,0,300000.00,1,'2017-05-10 13:13:20',''),(4,2,1,'REF:417 - VENDE-SE DUAS ÓTIMAS CASAS','',3,1,3,'',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF:417 &nbsp; &nbsp; &nbsp; &nbsp;VENDE-SE DUAS ÓTIMAS CASAS</span></blockquote><div>A 400 M DO MAR, CASA BAIXA CONTEM 03 QUARTOS 02 BANHEIROS MAIS DEPENFDÊNCIAS<br></div><div>CASA DE 02 PISOS CONTEM, 01 SUITE, 01 LAVABO, CHURRASQUEIRA, GARAGEM 03 CARROS, PISO EM PORCELANATO, SALÃO DE FESTAS</div><div><br></div><div>DE: R$ 480,000,00</div><div>PARA NEGOCIAÇÃO &nbsp;ATE 60 MESES, &nbsp; FINANCIAMENTO DIRETO COM PROPRIETÁRIO</div><div><span style=\"font-weight: bold; color: rgb(153, 153, 153);\"><br></span></div><div><span style=\"font-weight: bold; color: rgb(153, 153, 153);\">DE: R$ 450.000,00 &nbsp;ESTUDA-SE PROPOSTA &nbsp;</span></div><div><span style=\"font-weight: bold; color: rgb(153, 153, 153);\">(A/C CARRO OU TERRENO) COMO ENTRADA</span></div>',0,0,480000.00,1,'2017-05-10 13:18:15',''),(5,2,58,'REF: 463   LINDA CASA COSTÃO FRENTE PRAIA','desconhecido',4,0,3,'640',2,'<blockquote><span style=\"font-weight: bold; color: rgb(249, 203, 156); font-size: medium;\">REF: 463 &nbsp; LINDA CASA COSTÃO FRENTE PRAIA</span></blockquote><div>COM PISCINA, TERRAÇO, SACADAS, 02 BANHEIROS<br></div><div>04 QUARTOS &nbsp;01 COM HIDRO MASSAGEM</div><div>AREA DE FESTAS, SALA, COZINHA, LAVAÇÃO</div><div>GARAGEM P/03 CARROS</div><div><br></div><div>Casa 280 m² &nbsp;lote 640 m²</div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: 1.200,000,00</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">ACEITA TROCA POR APARTAMENTO</span></div>',0,0,1200000.00,1,'2017-05-10 14:03:32',''),(6,2,6,'REF: 473  CASA  AVERBADA PARA FINANCIAMENTO','gravatá Penha',2,0,1,'0',1,'<blockquote><span style=\"font-weight: bold; font-size: medium; color: rgb(246, 178, 107);\">REF: 473 &nbsp; NO GRAVATA DE PENHA -&nbsp;</span><span style=\"font-weight: bold; font-size: 15px;\">AVERBADA PARA FINANCIAMENTO</span></blockquote><div><span style=\"font-weight: bold;\">BEM LOCALIZADA</span></div><div><span style=\"font-weight: bold;\">COM 02 &nbsp;QUARTOS &nbsp; &nbsp;01 BANHEIRO</span></div><div><span style=\"font-weight: bold;\">SALA, COZINHA, LAVAÇÃO</span></div><div><span style=\"font-weight: bold;\">AREA DE FESTA COM CHURRASQUEIRA E GARAGEM</span></div><div><span style=\"font-weight: bold;\">AVERBADA PARA FINANCIAMENTO</span></div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: 230.000,00&nbsp;</span></div><div><span style=\"color: rgb(103, 78, 167);\">OU TROCA POR CASA DE MENOR VALOR&nbsp;</span></div><div><span style=\"color: rgb(103, 78, 167);\">NEGOCIA-SE</span></div>',0,0,230000.00,1,'2017-05-10 14:55:38',''),(7,2,2,'REF 481 - CASA FRENTE P/AVENIDA','Descocnhecido',4,0,2,'0',2,'<blockquote><span style=\"font-size: medium; color: rgb(249, 203, 156);\">REF 481 &nbsp;CASA FRENTE P/AVENIDA JUVENAL MAFRA PONTO COMERCIAL</span></blockquote><div>COM &nbsp;04 QUARTO 01 SUITE + 02 BWC SOCIAL<br></div><div>SALA DE ESTAR E JANTAR, COZINHA, VARANDA, GARAGEM P/ 02 CARROS, CHURRASQUEIRA, SISTERNA 03 MIL LITROS DE ÁGUA MOTOR AUTOMÁTICO, ESTRUTURA PARA + 01 PISO&nbsp;</div><div>FICAM ALGUMAS MOBÍLIAS</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: R$ 590.000,00 &nbsp; &nbsp;</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">PONTO COMERCIAL E RESIDENCIAL</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL TROCA POR CASA OU APARTAMENTO DE MENOR VALOR</span></div>',0,0,590000.00,1,'2017-05-10 15:13:52',''),(8,2,2,'REF 481 - CASA FRENTE P/AVENIDA','Descocnhecido',4,0,2,'0',2,'<blockquote><span style=\"font-size: medium; color: rgb(249, 203, 156);\">REF 481 &nbsp;CASA FRENTE P/AVENIDA JUVENAL MAFRA PONTO COMERCIAL</span></blockquote><div>COM &nbsp;04 QUARTO 01 SUITE + 02 BWC SOCIAL<br></div><div>SALA DE ESTAR E JANTAR, COZINHA, VARANDA, GARAGEM P/ 02 CARROS, CHURRASQUEIRA, SISTERNA 03 MIL LITROS DE ÁGUA MOTOR AUTOMÁTICO, ESTRUTURA PARA + 01 PISO&nbsp;</div><div>FICAM ALGUMAS MOBÍLIAS</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: R$ 590.000,00 &nbsp; &nbsp;</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">PONTO COMERCIAL E RESIDENCIAL</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL TROCA POR CASA OU APARTAMENTO DE MENOR VALOR</span></div>',0,0,590000.00,1,'2017-05-10 15:16:31',''),(9,2,1,'REF 492  MARAVILHOSA CASA ','',4,0,2,'0',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(246, 178, 107);\">REF 492 &nbsp;MARAVILHOSA CASA&nbsp;</span></blockquote><div>&nbsp; &nbsp;&nbsp;</div><div>04 QUARTOS, 02 BANHEIROS</div><div>COZINHA E SALA</div><div>LAVAÇÃO E CHURRASQUEIRA</div><div>GARAGEM 02 CARROS, PATIO</div><div><br></div><div>VALOR: R$ 300.000,00</div><div><br></div>',0,0,300000.00,1,'2017-05-10 15:32:09',''),(10,2,1,'REF: 346   CASA   NA QUADRA DO MAR','0',2,1,3,'0',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF: 346 &nbsp; &nbsp; CASA &nbsp; NA QUADRA DO MAR</span></blockquote><div><br></div><div>COM 01 SUITE COM AMPLO TERRAÇO</div><div>MAIS 02 QUARTOS, + 02 BANHEIROS,</div><div>COZINHA, SALA, ESCADA CARACOL,&nbsp;</div><div>SALÃO DE FESTAS COM CHURRASQUEIRA,</div><div>GARAGEM P/ 03 CARROS, AMPLO TERRAÇO NOS FUNDOS, LAVAÇÃO E &nbsp;JARDIM.</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: 500.000,00&nbsp;</span></div>',0,0,500000.00,1,'2017-05-10 15:38:31',''),(11,2,1,'PRÉ FABRICADA NA “QUADRA  DO MAR”','Não Disponível',2,0,1,'0',1,'<div><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF : 302 VENDE- SE CASA PRÉ FABRICADA NA “QUADRA &nbsp;DO MAR”</span></div><div><br></div><div>COM 02 QUARTOS, COZINHA E SALA CONJUGADAS, + BANHEIRO,GARAGEM, QUIOSQUE COM CHURRASQUEIRA,+ COZINHA &nbsp; &nbsp;+ BANHEIRO&nbsp;</div><div><br></div><div><span style=\"font-weight: bold; font-size: medium; color: rgb(102, 102, 102);\">VALOR:R$ 350.000,00</span></div>',0,0,350000.00,1,'2017-05-10 16:35:13',''),(12,2,58,'REF:331  VENDE-SE CASA GEMINADA COM PISCINA','Não Disponível ',2,1,1,'0',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF:331 &nbsp;VENDE-SE CASA GEMINADA COM PISCINA</span></blockquote><div>01 SUITE COM CLOSET E SACADA, + 02 QUARTOS COM SACADA, COZINHA, COPA, SALA + 02 BANHEIRO, + 01 LAVABO, &nbsp; GARAGEM, PATIO, LAVAÇÃO, PISCINA COM CHURRASQUEIRA.<br></div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">TROCA POR IMÓVEL DE MENOR VALOR</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR:R$ 350.000,0</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL</span></div>',0,0,350000.00,1,'2017-05-10 17:12:09',''),(13,2,58,'REF:331  VENDE-SE CASA GEMINADA COM PISCINA','Não Disponível ',2,1,1,'0',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF:331 &nbsp;VENDE-SE CASA GEMINADA COM PISCINA</span></blockquote><div>01 SUITE COM CLOSET E SACADA, + 02 QUARTOS COM SACADA, COZINHA, COPA, SALA + 02 BANHEIRO, + 01 LAVABO, &nbsp; GARAGEM, PATIO, LAVAÇÃO, PISCINA COM CHURRASQUEIRA.<br></div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">TROCA POR IMÓVEL DE MENOR VALOR</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR:R$ 350.000,0</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL</span></div>',0,1,350000.00,1,'2017-05-10 17:13:20',''),(14,2,58,'','AV JOAQUIM COUTO',2,0,0,'325',1,'<blockquote><span style=\"font-weight: bold; color: rgb(249, 203, 156); font-size: medium;\">REF: 487 &nbsp;VENDE CASA MISTA</span></blockquote><div><br></div><div>AV JOAQUIM COUTO</div><div>02 QUARTOS, 01 BANHEIRO</div><div>COZINHA E SALA</div><div>LOTE 13 X 25=325 M²</div><div><br></div><div>Nos fundos mais construção</div><div>Valor: R$ 180.000</div>',0,0,180000.00,1,'2017-05-10 17:27:47',''),(15,2,58,'REF: 489 SITIO EM PEDREIRAS','',0,0,0,'28,20 ',0,'<blockquote><span style=\"font-weight: bold; font-size: medium; color: rgb(249, 203, 156);\">REF: 489 SITIO EM PEDREIRAS</span></blockquote><div>COM 19.815,00 M²</div><div>COM UMA CASA DE ALVENARIA</div><div>AREA DE 28,20 METROS DE FRENTE POR 700,00 METROS DE FUNDOS</div><div>ACEITA TROCA POR CASA OU TERRENO NA REGIÃO</div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\"><br></span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: A CONSULTAR&nbsp;</span></div>',0,0,0.00,1,'2017-05-10 17:30:58',''),(16,2,58,'REF 492   CASA FAMILIAR BAIRRO TRANQUILO  ','',2,0,2,'0',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 492 &nbsp;</span><span style=\"color: rgb(249, 203, 156); font-size: medium; font-weight: bold;\">CASA FAMILIAR BAIRRO TRANQUILO &nbsp;</span></blockquote><div>04 QUARTOS, 02 BANHEIROS</div><div>COZINHA E SALA</div><div>LAVAÇÃO E CHURRASQUEIRA</div><div>GARAGEM 02 CARROS, PATIO</div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\"><br></span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: R$ 300.000,00</span></div><div><br></div>',0,0,300000.00,1,'2017-05-10 17:33:52',''),(17,2,58,'REF:519 VENDE OU TROCA  CASA NOVA','',2,1,0,'360 ',2,'<blockquote><span style=\"font-weight: bold; font-size: medium; color: rgb(249, 203, 156);\">REF:519 VENDE OU TROCA &nbsp;CASA NOVA</span></blockquote><div>03 QUARTOS SENDO 01 SUITE + UM BWC SOCIAL<br></div><div>SALA, COZINHA, REBAIXO EM GESSO, PORCELANATO, HIDRO MASSAGEM, ARMÁRIOS IMBUTIDOS, TIJOLO ESTRUTURAL PARA + 02 PISOS</div><div>SISTERNA PARA 20 MIL LITROS DE ÁGUA,&nbsp;</div><div>LOTE &nbsp;12,00 X 30,00- 360 M² &nbsp; - &nbsp; CASA 168,00 M²</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: 350.000,00</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL, TROCA POR CASA DE MENOR VALOR, ESTUDA-SE PROPOSTA</span><br></div>',0,0,350000.00,1,'2017-05-10 17:39:44',''),(18,2,58,'REF:519 VENDE OU TROCA  CASA NOVA','',2,1,0,'168',2,'<blockquote><span style=\"font-weight: bold; font-size: medium; color: rgb(249, 203, 156);\">REF:519 VENDE OU TROCA &nbsp;CASA NOVA</span></blockquote><div>03 QUARTOS SENDO 01 SUITE + UM BWC SOCIAL<br></div><div>SALA, COZINHA, REBAIXO EM GESSO, PORCELANATO, HIDRO MASSAGEM, ARMÁRIOS IMBUTIDOS, TIJOLO ESTRUTURAL PARA + 02 PISOS</div><div>SISTERNA PARA 20 MIL LITROS DE ÁGUA,&nbsp;</div><div>LOTE &nbsp;12,00 X 30,00- 360 M² &nbsp; - &nbsp; CASA 168,00 M²</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: 350.000,00</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">NEGOCIÁVEL, TROCA POR CASA DE MENOR VALOR, ESTUDA-SE PROPOSTA</span><br></div>',0,0,350000.00,1,'2017-05-10 17:44:39',''),(19,2,58,'REF: 521 VENDE CASA OU TROCA','Não disponível',3,0,2,'360',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF: 521 VENDE CASA OU TROCA</span></blockquote><div>03 QUARTOS, 02 BWC SOCIAL, SALA&nbsp;<br></div><div>HALL DE ENTRADA</div><div>COZINHA, GARAGEM 02 CARROS&nbsp;</div><div>MAIS UMA EDICULA ,PATIO, JARDIM&nbsp;</div><div>LOTE 15 X 24= 360 M²</div><div><br></div><div><span style=\"color: rgb(102, 102, 102); font-weight: bold;\">AREA UTIL CONSTROIDA 384 M²</span></div><div><span style=\"color: rgb(102, 102, 102); font-weight: bold;\">VALOR R$ 380,000,00 &nbsp; TROCA POR OUTRO IMÓVEL DE MENOR VALOR A/C CARRO</span></div>',0,0,380000.00,1,'2017-05-10 17:49:12',''),(20,2,58,'REF 523 VENDE TERRENO COM DUAS  CASAS','',3,0,3,'0',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 523 VENDE TERRENO COM DUAS &nbsp;CASAS</span></blockquote><div>FUNDOS 01 QUARTO COZINHA E 01 BANHEIRO<br></div><div>FRENTE 02 QUARTOS, SALA COZINHA 01 BANHEIRO E GARAGEM</div><div><span style=\"font-weight: bold; font-size: medium;\"><br></span></div><div><span style=\"font-weight: bold; font-size: medium;\">VALOR: 212.000,00&nbsp;</span><br></div>',0,0,212000.00,1,'2017-05-10 17:53:54',''),(21,2,58,'REF: 531  VENDE CASA  A 100 METROS DO MAR','',3,1,5,'99,97',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF: 531 &nbsp;VENDE CASA &nbsp;A 100 METROS DO MAR</span></blockquote><div>04 QUARTOS, SENDO 01 SUITE, 01 SALA, COZINHA, + 01 BWC SOCIAL, LAVAÇÃO, DISPENSA AREA DE FESTAS, GARAGEM PARA 05 CARROS</div><div>ENTRADA PARA 02 RUAS</div><div>CASA &nbsp; 99,97 M² &nbsp; &nbsp; &nbsp; LOTE &nbsp; 11,00X 25,00= 275,00 M² &nbsp; MAIS SOBRA</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: &nbsp;R$ &nbsp;370.000,00&nbsp;</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">AC TROCA POR APARTAMENTO</span></div><div><br></div>',0,0,370000.00,1,'2017-05-10 18:04:43',''),(22,2,2,'REF: 532 VENDE CASA A 180 METROS DO MAR','Não disponível',1,1,2,'',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF: 532 &nbsp; &nbsp;VENDE CASA A 180 METROS DO MAR</span></blockquote><div>COM 01 SUITE + &nbsp;01 QUARTO, 01 LAVABO<br></div><div>SALA, COPA, COZINHA, DISPENSA, GARAGEM &nbsp;02 &nbsp;CARROS</div><div>FUNDOS: EDICULA COM 01 QUARTO, 01 BANHEIRO</div><div>SALA , COZINHA, LAVAÇÃO</div><div>AVERBADA COM 117,32 M² &nbsp; &nbsp;&nbsp;</div><div>EDICULA COM 40,42 M²&nbsp;</div><div>LOTE 15X24=360M²</div><div><br></div><div><span style=\"font-weight: bold; font-size: medium; color: rgb(102, 102, 102);\">VALOR: 420.000,00</span></div><div><span style=\"font-weight: bold; font-size: medium; color: rgb(102, 102, 102);\">ESTUDA-SE ´PROPOSTA &nbsp; ACEITA VEICULO</span></div>',0,0,420000.00,1,'2017-05-10 18:10:32',''),(23,2,58,'REF 533  VENDE CASA GEMINADA','AV. JOAQUIM COUTO 1371',2,0,2,'84',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 533 &nbsp;VENDE CASA GEMINADA</span></blockquote><div>02 QUARTOS, SALA E COZINHA INTEGRADAS<br></div><div>01 BANHEIRO – UNIDAS PELA GARAGEM</div><div>LAVAÇÃO, GARAGEM 02 CARROS, PATIO</div><div>COM MÓVEIS<br></div><div>AV. JOAQUIM COUTO 1371 - TERRENO 174 M²</div><div><br></div><div><span style=\"font-weight: bold; font-size: medium; color: rgb(102, 102, 102);\">VALOR R$ 295.000,00 &nbsp;</span></div><div><span style=\"font-weight: bold; font-size: medium; color: rgb(102, 102, 102);\">R$ 265.000,00</span></div><div>COZINHA SOB MEDIDA E MÓVEIS DO BANHEIRO<br></div><div>ACEITA TERRENO NO NEGÓCIO.</div>',0,0,295000.00,1,'2017-05-10 18:20:05',''),(24,2,58,'REF 534 VENDE  02 CASAS','',2,1,2,'84',2,'<blockquote><span style=\"font-weight: bold; color: rgb(249, 203, 156); font-size: medium;\">REF 534 VENDE &nbsp;02 CASAS</span></blockquote><div>UMA EM ALVENARIA COM 01 SUITE + 02 QUARTOS, SALA, COZINHA, LAVAÇÃO, AREA DE FESTAS COM CHURRASQUEIRA<br></div><div>CASA MISTA COM 03 QUARTOS, SALA, 01 BANHEIRO, COZINHA, LAVAÇÃO, &nbsp;GARAGEM COBERTA</div><div>LOTE &nbsp;1035 M² &nbsp;CASA ALVENARIA 114 M² &nbsp;&nbsp;</div><div>CASA MISTA 84 M²</div><div><br></div><div><span style=\"font-size: medium; font-weight: bold; color: rgb(102, 102, 102);\">VALOR DE R$ 400.000,00&nbsp;</span></div><div><span style=\"font-size: medium; font-weight: bold; color: rgb(102, 102, 102);\">TROCA POR CASA EM CAMBORIÚ</span></div><div><span style=\"font-size: medium; font-weight: bold; color: rgb(102, 102, 102);\">DOCUMENTO ESCRITURA DE POSSE NO CARTÓRIO FIGUEIREDO PENHA-SC&nbsp;</span></div>',0,0,400000.00,1,'2017-05-10 19:08:14',''),(25,2,58,'REF 534 VENDE  02 CASAS','',2,1,2,'84',2,'<blockquote><span style=\"font-weight: bold; color: rgb(249, 203, 156); font-size: medium;\">REF 534 VENDE &nbsp;02 CASAS</span></blockquote><div>UMA EM ALVENARIA COM 01 SUITE + 02 QUARTOS, SALA, COZINHA, LAVAÇÃO, AREA DE FESTAS COM CHURRASQUEIRA<br></div><div>CASA MISTA COM 03 QUARTOS, SALA, 01 BANHEIRO, COZINHA, LAVAÇÃO, &nbsp;GARAGEM COBERTA</div><div>LOTE &nbsp;1035 M² &nbsp;CASA ALVENARIA 114 M² &nbsp;&nbsp;</div><div>CASA MISTA 84 M²</div><div><br></div><div><span style=\"font-size: medium; font-weight: bold; color: rgb(102, 102, 102);\">VALOR DE R$ 400.000,00&nbsp;</span></div><div><span style=\"font-size: medium; font-weight: bold; color: rgb(102, 102, 102);\">TROCA POR CASA EM CAMBORIÚ</span></div><div><span style=\"font-size: medium; font-weight: bold; color: rgb(102, 102, 102);\">DOCUMENTO ESCRITURA DE POSSE NO CARTÓRIO FIGUEIREDO PENHA-SC&nbsp;</span></div>',0,0,400000.00,1,'2017-05-10 19:41:34',''),(26,1,58,'REF 535  APARTAMENTO mEGA CONFORTÁVEL ','',2,0,1,'0',1,'<div>REF 535 &nbsp;VENDE APARTAMENTO</div><div><br></div><div>02 QUARTOS &nbsp;&nbsp;</div><div>SALA E COZINHA&nbsp;</div><div>01 BANHEIRO&nbsp;</div><div>SACADA COM CHURRASQUEIRA</div><div>01 VAGA DE ESTACIONAMENTO</div><div>VALOR R$ 160.000,00</div>',0,0,160000.00,1,'2017-05-10 19:45:07',''),(27,1,58,'REF 535  APARTAMENTO mEGA CONFORTÁVEL ','',2,0,1,'0',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 535 &nbsp;VENDE APARTAMENTO</span></blockquote><div>02 QUARTOS &nbsp;&nbsp;<br></div><div>SALA E COZINHA&nbsp;</div><div>01 BANHEIRO&nbsp;</div><div>SACADA COM CHURRASQUEIRA</div><div>01 VAGA DE ESTACIONAMENTO</div><div><br></div><div><span style=\"font-weight: bold; font-size: medium; color: rgb(102, 102, 102);\">VALOR R$ 160.000,00</span></div>',0,0,160000.00,1,'2017-05-10 19:48:18',''),(28,2,6,'REF 536  VENDE CASA  COM VISTA PARA O MAR','',2,1,3,'0',1,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 536 &nbsp;VENDE CASA EM SÃO MIGUEL PENHA COM VISTA PARA O MAR</span></blockquote><div>01 SUITE, 02 QUARTOS, 01 BWC, SOCIAL, AREA DE FESTA, 01 BWC, FOGÃO A LENHA, E GAS, CHURRASQUEIRA, DESPENSA, GARAGEM P/ 03 CARROS<br></div><div>FICAM ALGUNS MÓVEIS</div><div><br></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">VALOR: R$ 430.000,00 TROCA POR APARTAMENTO EM ITAJAÍ</span></div><div><span style=\"font-weight: bold; color: rgb(102, 102, 102);\">DE 03 QUARTOS PODE SER DE MAIS VALOR, ESTUDA PROPOSTA</span></div>',0,0,430000.00,1,'2017-05-10 20:04:07',''),(29,4,58,'REF 537  SOBRADO:  FINO ACABAMENTO','',2,1,2,'0',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 537 &nbsp; SOBRADO: &nbsp;FINO ACABAMENTO</span></blockquote><div>PISO SUPERIOR: 01 SUITE + 01 BWC SOCIAL + 2 QUARTOS + DUAS SACADAS<br></div><div>PISO TÉRREO: SALA + COZINHA + LAVAÇÃO + LAVABO + DISPENSA + COZINHA EXTERNA + CHURRASQUEIRA</div><div>GARAGEM PARA DOIS CARROS</div><div><br></div><div>VALOR: R$ 360.000,00</div><div>FINANCIA &nbsp;P/BANCO</div>',0,0,360000.00,1,'2017-05-10 20:10:46',''),(30,4,58,'REF 537  SOBRADO:  FINO ACABAMENTO','',2,1,2,'0',2,'<blockquote><span style=\"font-size: medium; font-weight: bold; color: rgb(249, 203, 156);\">REF 537 &nbsp; SOBRADO: &nbsp;FINO ACABAMENTO</span></blockquote><div>PISO SUPERIOR: 01 SUITE + 01 BWC SOCIAL + 2 QUARTOS + DUAS SACADAS<br></div><div>PISO TÉRREO: SALA + COZINHA + LAVAÇÃO + LAVABO + DISPENSA + COZINHA EXTERNA + CHURRASQUEIRA</div><div>GARAGEM PARA DOIS CARROS</div><div><br></div><div>VALOR: R$ 360.000,00</div><div>FINANCIA &nbsp;P/BANCO</div>',0,0,360000.00,1,'2017-05-10 20:17:42','');
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "rel_imovel_dif"
#

INSERT INTO `rel_imovel_dif` VALUES (4,3,6),(5,3,9),(8,4,8),(9,4,9),(10,2,4),(11,2,8),(12,2,9),(13,5,9),(14,5,11),(27,6,5),(28,6,8),(29,6,9),(30,6,11),(34,8,6),(35,8,8),(36,8,11),(37,9,8),(38,9,9),(39,9,10),(40,9,11),(41,7,6),(42,7,8),(43,7,11),(44,10,9),(45,10,10),(46,11,8),(47,11,9),(48,11,10),(49,11,11),(50,12,4),(51,12,8),(52,12,9),(53,12,10),(54,12,11),(55,12,12),(56,13,4),(57,13,8),(58,13,9),(59,13,10),(60,13,11),(61,13,12),(62,14,11),(63,14,16),(64,16,8),(65,16,10),(66,16,11),(67,16,14),(68,16,16),(69,17,1),(70,17,11),(71,17,16),(72,17,17),(73,18,1),(74,18,11),(75,18,16),(76,18,17),(77,19,10),(78,19,11),(79,19,13),(80,19,16),(81,20,11),(82,20,16),(83,21,11),(84,21,14),(85,21,16),(98,22,9),(99,22,11),(100,22,14),(101,22,16),(102,23,10),(103,23,11),(104,23,16),(105,24,8),(106,24,10),(107,24,11),(108,24,14),(109,24,16),(110,25,8),(111,25,10),(112,25,11),(113,25,14),(114,25,16),(115,26,11),(116,26,16),(117,27,11),(118,27,16),(119,28,8),(120,28,11),(121,28,14),(122,28,16),(123,29,8),(124,29,9),(125,29,11),(126,29,12),(127,29,14),(128,29,16),(129,30,8),(130,30,9),(131,30,11),(132,30,12),(133,30,14),(134,30,16);

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
INSERT INTO `usuario` VALUES (1,'admin','Dalmir Demarch','admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
