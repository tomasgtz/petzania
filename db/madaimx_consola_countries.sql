-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: cadcam-mty.com.mx    Database: madaimx_consola
-- ------------------------------------------------------
-- Server version	5.6.32-78.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `iso_code_2` char(2) NOT NULL DEFAULT '',
  `iso_code_3` char(3) NOT NULL DEFAULT '',
  `created` datetime DEFAULT NULL,
  `created_user_id` int(11) NOT NULL DEFAULT '1',
  `modified` datetime DEFAULT NULL,
  `modified_user_id` int(11) NOT NULL DEFAULT '1',
  `status_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `created_user_id` (`created_user_id`),
  KEY `modified_user_id` (`modified_user_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`created_user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `countries_ibfk_2` FOREIGN KEY (`modified_user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `countries_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','AF','AFG','2018-04-27 13:30:16',1,'2018-04-28 09:10:57',1,1),(2,'Albania','AL','ALB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(3,'Algeria','DZ','DZA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(4,'American Samoa','AS','ASM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(5,'Andorra','AD','AND','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(6,'Angola','AO','AGO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(7,'Anguilla','AI','AIA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(8,'Antarctica','AQ','ATA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(9,'Antigua and Barbuda','AG','ATG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(10,'Argentina','AR','ARG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(11,'Armenia','AM','ARM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(12,'Aruba','AW','ABW','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(13,'Australia','AU','AUS','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(14,'Austria','AT','AUT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(15,'Azerbaijan','AZ','AZE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(16,'Bahamas','BS','BHS','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(17,'Bahrain','BH','BHR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(18,'Bangladesh','BD','BGD','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(19,'Barbados','BB','BRB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(20,'Belarus','BY','BLR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(21,'Belgium','BE','BEL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(22,'Belize','BZ','BLZ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(23,'Benin','BJ','BEN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(24,'Bermuda','BM','BMU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(25,'Bhutan','BT','BTN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(26,'Bolivia','BO','BOL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(28,'Botswana','BW','BWA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(29,'Bouvet Island','BV','BVT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(30,'Brazil','BR','BRA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(32,'Brunei Darussalam','BN','BRN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(33,'Bulgaria','BG','BGR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(34,'Burkina Faso','BF','BFA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(35,'Burundi','BI','BDI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(36,'Cambodia','KH','KHM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(37,'Cameroon','CM','CMR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(38,'Canada','CA','CAN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(39,'Cape Verde','CV','CPV','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(40,'Cayman Islands','KY','CYM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(41,'Central African Republic','CF','CAF','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(42,'Chad','TD','TCD','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(43,'Chile','CL','CHL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(44,'China','CN','CHN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(45,'Christmas Island','CX','CXR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(46,'Cocos (Keeling) Islands','CC','CCK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(47,'Colombia','CO','COL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(48,'Comoros','KM','COM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(49,'Congo','CG','COG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(50,'Cook Islands','CK','COK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(51,'Costa Rica','CR','CRI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(52,'Cote D\'Ivoire','CI','CIV','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(53,'Croatia','HR','HRV','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(54,'Cuba','CU','CUB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(55,'Cyprus','CY','CYP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(56,'Czech Republic','CZ','CZE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(57,'Denmark','DK','DNK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(58,'Djibouti','DJ','DJI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(59,'Dominica','DM','DMA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(60,'Dominican Republic','DO','DOM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(61,'East Timor','TP','TMP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(62,'Ecuador','EC','ECU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(63,'Egypt','EG','EGY','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(64,'El Salvador','SV','SLV','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(65,'Equatorial Guinea','GQ','GNQ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(66,'Eritrea','ER','ERI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(67,'Estonia','EE','EST','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(68,'Ethiopia','ET','ETH','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(70,'Faroe Islands','FO','FRO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(71,'Fiji','FJ','FJI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(72,'Finland','FI','FIN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(73,'France','FR','FRA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(74,'France, Metropolitan','FX','FXX','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(75,'French Guiana','GF','GUF','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(76,'French Polynesia','PF','PYF','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(78,'Gabon','GA','GAB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(79,'Gambia','GM','GMB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(80,'Georgia','GE','GEO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(81,'Germany','DE','DEU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(82,'Ghana','GH','GHA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(83,'Gibraltar','GI','GIB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(84,'Greece','GR','GRC','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(85,'Greenland','GL','GRL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(86,'Grenada','GD','GRD','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(87,'Guadeloupe','GP','GLP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(88,'Guam','GU','GUM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(89,'Guatemala','GT','GTM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(90,'Guinea','GN','GIN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(91,'Guinea-bissau','GW','GNB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(92,'Guyana','GY','GUY','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(93,'Haiti','HT','HTI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(95,'Honduras','HN','HND','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(96,'Hong Kong','HK','HKG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(97,'Hungary','HU','HUN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(98,'Iceland','IS','ISL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(99,'India','IN','IND','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(100,'Indonesia','ID','IDN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(102,'Iraq','IQ','IRQ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(103,'Ireland','IE','IRL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(104,'Israel','IL','ISR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(105,'Italy','IT','ITA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(106,'Jamaica','JM','JAM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(107,'Japan','JP','JPN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(108,'Jordan','JO','JOR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(109,'Kazakhstan','KZ','KAZ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(110,'Kenya','KE','KEN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(111,'Kiribati','KI','KIR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(113,'Korea, Republic of','KR','KOR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(114,'Kuwait','KW','KWT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(115,'Kyrgyzstan','KG','KGZ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(117,'Latvia','LV','LVA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(118,'Lebanon','LB','LBN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(119,'Lesotho','LS','LSO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(120,'Liberia','LR','LBR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(121,'Libyan Arab Jamahiriya','LY','LBY','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(122,'Liechtenstein','LI','LIE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(123,'Lithuania','LT','LTU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(124,'Luxembourg','LU','LUX','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(125,'Macau','MO','MAC','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(127,'Madagascar','MG','MDG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(128,'Malawi','MW','MWI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(129,'Malaysia','MY','MYS','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(130,'Maldives','MV','MDV','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(131,'Mali','ML','MLI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(132,'Malta','MT','MLT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(133,'Marshall Islands','MH','MHL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(134,'Martinique','MQ','MTQ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(135,'Mauritania','MR','MRT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(136,'Mauritius','MU','MUS','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(137,'Mayotte','YT','MYT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(138,'Mexico','MX','MEX','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(140,'Moldova, Republic of','MD','MDA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(141,'Monaco','MC','MCO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(142,'Mongolia','MN','MNG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(143,'Montserrat','MS','MSR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(144,'Morocco','MA','MAR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(145,'Mozambique','MZ','MOZ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(146,'Myanmar','MM','MMR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(147,'Namibia','NA','NAM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(148,'Nauru','NR','NRU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(149,'Nepal','NP','NPL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(150,'Netherlands','NL','NLD','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(151,'Netherlands Antilles','AN','ANT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(152,'New Caledonia','NC','NCL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(153,'New Zealand','NZ','NZL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(154,'Nicaragua','NI','NIC','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(155,'Niger','NE','NER','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(156,'Nigeria','NG','NGA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(157,'Niue','NU','NIU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(158,'Norfolk Island','NF','NFK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(159,'Northern Mariana Islands','MP','MNP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(160,'Norway','NO','NOR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(161,'Oman','OM','OMN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(162,'Pakistan','PK','PAK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(163,'Palau','PW','PLW','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(164,'Panama','PA','PAN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(165,'Papua New Guinea','PG','PNG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(166,'Paraguay','PY','PRY','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(167,'Peru','PE','PER','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(168,'Philippines','PH','PHL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(169,'Pitcairn','PN','PCN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(170,'Poland','PL','POL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(171,'Portugal','PT','PRT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(172,'Puerto Rico','PR','PRI','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(173,'Qatar','QA','QAT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(174,'Reunion','RE','REU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(175,'Romania','RO','ROM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(176,'Russian Federation','RU','RUS','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(177,'Rwanda','RW','RWA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(178,'Saint Kitts and Nevis','KN','KNA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(179,'Saint Lucia','LC','LCA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(181,'Samoa','WS','WSM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(182,'San Marino','SM','SMR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(183,'Sao Tome and Principe','ST','STP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(184,'Saudi Arabia','SA','SAU','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(185,'Senegal','SN','SEN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(186,'Seychelles','SC','SYC','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(187,'Sierra Leone','SL','SLE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(188,'Singapore','SG','SGP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(189,'Slovakia (Slovak Republic)','SK','SVK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(190,'Slovenia','SI','SVN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(191,'Solomon Islands','SB','SLB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(192,'Somalia','SO','SOM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(193,'South Africa','ZA','ZAF','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(195,'Spain','ES','ESP','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(196,'Sri Lanka','LK','LKA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(197,'St. Helena','SH','SHN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(198,'St. Pierre and Miquelon','PM','SPM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(199,'Sudan','SD','SDN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(200,'Suriname','SR','SUR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(202,'Swaziland','SZ','SWZ','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(203,'Sweden','SE','SWE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(204,'Switzerland','CH','CHE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(205,'Syrian Arab Republic','SY','SYR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(206,'Taiwan','TW','TWN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(207,'Tajikistan','TJ','TJK','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(208,'Tanzania, United Republic of','TZ','TZA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(209,'Thailand','TH','THA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(210,'Togo','TG','TGO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(211,'Tokelau','TK','TKL','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(212,'Tonga','TO','TON','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(213,'Trinidad and Tobago','TT','TTO','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(214,'Tunisia','TN','TUN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(215,'Turkey','TR','TUR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(216,'Turkmenistan','TM','TKM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(217,'Turks and Caicos Islands','TC','TCA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(218,'Tuvalu','TV','TUV','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(219,'Uganda','UG','UGA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(220,'Ukraine','UA','UKR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(221,'United Arab Emirates','AE','ARE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(222,'United Kingdom','GB','GBR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(223,'United States','US','USA','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(225,'Uruguay','UY','URY','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(226,'Uzbekistan','UZ','UZB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(227,'Vanuatu','VU','VUT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(228,'Vatican City State (Holy See)','VA','VAT','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(229,'Venezuela','VE','VEN','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(230,'Viet Nam','VN','VNM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(231,'Virgin Islands (British)','VG','VGB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(232,'Virgin Islands (U.S.)','VI','VIR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(233,'Wallis and Futuna Islands','WF','WLF','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(234,'Western Sahara','EH','ESH','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(235,'Yemen','YE','YEM','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(236,'Yugoslavia','YU','YUG','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(237,'Zaire','ZR','ZAR','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(238,'Zambia','ZM','ZMB','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1),(239,'Zimbabwe','ZW','ZWE','2018-04-27 13:30:16',1,'2018-04-27 13:30:16',1,1);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`madaimx_consola`@`187.160.11.%`*/ /*!50003 TRIGGER `CountriesBeforeInsert` BEFORE INSERT ON `countries` FOR EACH ROW BEGIN
   SET NEW.created = NOW();
   SET NEW.modified = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`madaimx_consola`@`187.160.11.%`*/ /*!50003 TRIGGER `CountriesBeforeUpdate` BEFORE UPDATE ON `countries` FOR EACH ROW BEGIN
   SET NEW.modified = NOW();
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-12 15:59:54
