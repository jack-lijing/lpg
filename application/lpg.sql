-- MySQL dump 10.14  Distrib 5.5.52-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: lpg
-- ------------------------------------------------------
-- Server version	5.5.52-MariaDB

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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `idCard` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `bottleId` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'冯筱乐','浙江省衢州市柯城区巨化花径二期71-2-302','330802199709214414','13967020327',NULL),(2,'魏航焘','浙江省金华市武义县白洋街道春江花园72幢2单元201','330723199806282159','15958427533',NULL),(3,'童姚瑞','浙江省永康市九铃西路1052-1辉煌建材','330722199806257934','15158908910',NULL),(4,'包焓凌','浙江省衢州市龙游县新华路58-4','330825199804010174','13567062833',NULL),(5,'杨兵','浙江省永康市城南路100号永康市第一中学','36232419980425181X','13777909251',NULL),(6,'马铱晴','浙江省桐乡市洲泉镇清河村北浜里8号马铱晴','330483199801064427','13819312363',NULL),(7,'叶文静','浙江省永嘉县瓯北镇阳光大道瓯城花苑1幢5E','330324199809231028','13758738242',NULL),(8,'范红儿','浙江省杭州市淳安县千岛湖镇排岭北路40号3幢2单元304室','330127199710240029','13175038968',NULL),(9,'应祎珺','浙江省金华市永康市五金城五金北路80号','330722199807235323','13758977100',NULL),(10,'曹冬妮','浙江省海宁市袁花镇红新村曹家场2号','330481199801181225','15968347621',NULL),(11,'汪纯佳','金华市婺城区竹马乡方下店村金竹路31号','330702199807263222','17757979569',NULL),(12,'曹媚媚','浙江省金华市武义县武阳东路190号同盟网吧（中医院旁）','330723199709147027','13819930714',NULL),(13,'郭仙哲','浙江省台州市温岭市新河镇潮观村4-10号','331081199806055120','15258606282',NULL),(14,'赵思佳','浙江省嘉兴市海宁市海昌街道金利三区48号','330481199710186223','13757364851',NULL),(15,'周婷婷','浙江省杭州市余杭区瓶窑镇凤溪路68号','330184199803235525','13706510852',NULL),(16,'周舒雯','浙江省杭州市余杭区乔司镇新三村朝阳一组248号','331125199809180028','13905783048',NULL),(17,'黄海君','浙江省温州市瑞安市安阳街道兴达路10幢1号','330381199709140425','15857780683',NULL),(18,'吴雨薇','浙江省台州市仙居县白塔镇井头垟村路东35号 父亲吴新标','332624199702182121','13750663036',NULL),(19,'尤晓妮','浙江省宁波市象山县鹤浦镇樊岙村二村上街241号','330225199809011288','13245608908',NULL),(20,'郑漪','浙江省杭州市余杭区塘栖镇丁山河村一组六庄60号','330184199804091826','18758129598',NULL),(21,'黄馨昱','浙江省平湖市乍浦镇天妃东苑58幢2单元402','330482199808070321','13586393368',NULL),(22,'陆琰敏','浙江省湖州市吴兴区三合家园20幢三单元505-506室','330501199808054425','15105722187',NULL),(23,'张丹妮','宁波市鄞州区姜山镇华山新村52幢295号','330227199711304421','15867808330',NULL),(24,'叶筱敏','浙江省海盐高级中学高三20班','330424199709052220','13957328253',NULL),(25,'吴小乐','浙江省湖州市吴兴区毕桂花园','329763692927744','188908667732','');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-15 16:38:29
