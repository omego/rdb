-- MySQL dump 10.13  Distrib 5.5.33, for osx10.6 (i386)
--
-- Host: localhost    Database: rdb
-- ------------------------------------------------------
-- Server version	5.5.33

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
-- Table structure for table `Backup`
--

DROP TABLE IF EXISTS `Backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Backup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Backup_url` varchar(64) DEFAULT NULL,
  `Backup_date` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Backup`
--

LOCK TABLES `Backup` WRITE;
/*!40000 ALTER TABLE `Backup` DISABLE KEYS */;
INSERT INTO `Backup` VALUES (1,'/mysql_backup/backups/mysql_rdb_','13/01/2014 - 02:01:12'),(2,'/mysql_backup/backups/mysql_rdb_','13/01/2014 - 02:01:42'),(3,'/mysql_backup/backups/mysql_rdb1','13/01/2014 - 02:01:54'),(4,'/mysql_backup/backups/mysql_rdb1','14/01/2014 - 07:01:43'),(5,'/Applications/MAMP/htdocs/rdb/ba','rdb-2014-01-14-12.39.46.'),(6,'/rdb/backups/rdb-2014-01-14-12.4','rdb-2014-01-14-12.40.57.'),(7,'/rdb/backups/rdb-2014-01-14-12.4','rdb-2014-01-14-12.42.23.sql'),(8,'/rdb/backups/rdb-2014-01-14-12.42.45.sql','rdb-2014-01-14-12.42.45.sql'),(9,'/rdb/backups/rdb-.sql','2014-01-14-12.47.33'),(10,'/rdb/backups/rdb-2014-01-14-12.48.55.sql','2014-01-14-12.48.55'),(11,'/rdb/backups/rdb-2014-01-14-12.50.34.sql','2014-01-14-12.50.34'),(12,'/rdb/backups/rdb-2014-01-14-12.51.20.sql','2014-01-14-12.51.20'),(13,'/rdb/backups/rdb-2014-01-14-13.12.08.sql.gz','2014-01-14-13.12.08'),(14,'/rdb/backups/rdb-2014-01-14-13.12.57.sql.zip','2014-01-14-13.12.57'),(15,'/rdb/backups/rdb-2014-01-14-13.27.42.sql','2014-01-14-13.27.42');
/*!40000 ALTER TABLE `Backup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entry`
--

DROP TABLE IF EXISTS `entry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entry` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(30) DEFAULT NULL,
  `Father_Name` varchar(30) DEFAULT NULL,
  `Sure_Name` varchar(30) DEFAULT NULL,
  `Saudi_ID` int(20) DEFAULT NULL,
  `Cnum` varchar(15) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DOB_Day` varchar(24) DEFAULT NULL,
  `DOB_Month` varchar(24) DEFAULT NULL,
  `DOB_Year` varchar(24) DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `EPT_Date_Day` varchar(24) DEFAULT NULL,
  `EPT_Date_Month` varchar(24) DEFAULT NULL,
  `EPT_Date_Year` varchar(24) DEFAULT NULL,
  `EPT` int(10) DEFAULT NULL,
  `Specialty` varchar(30) DEFAULT NULL,
  `Experience` int(10) unsigned DEFAULT NULL,
  `Category` varchar(30) DEFAULT NULL,
  `GPA` int(10) DEFAULT NULL,
  `Qualifications` varchar(30) DEFAULT '',
  `Status` varchar(24) DEFAULT NULL,
  `Comments` longtext,
  `upload_name` varchar(128) DEFAULT NULL,
  `Creator` varchar(32) DEFAULT NULL,
  `Lastupdate` varchar(32) DEFAULT NULL,
  `Create_Day` int(11) DEFAULT NULL,
  `Create_Month` varchar(20) DEFAULT NULL,
  `Create_Year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entry`
--

LOCK TABLES `entry` WRITE;
/*!40000 ALTER TABLE `entry` DISABLE KEYS */;
INSERT INTO `entry` VALUES (14,'Salman','Salim','Yamani',1061790001,'C8843201','Male','12','11','1989',506103680,'27','4','2012',74,'Information Science  ',1,'IT',4,'High School','Approved','This is Test for new comment.','23122013061256',NULL,NULL,5,'3',2010),(15,'Hamza','Ahmed','Jaber',1071273890,'C7162543','Male','07','02','1985',547483647,'5','1','2010',84,'Admin',3,'Academic',3,'Diploma','Under Process','Hi','12122013101206',NULL,NULL,NULL,NULL,NULL),(16,'Abdulrahman','Sami','Alyami',1041672349,'C9923387','Male','05','05','1978',544423861,'20/03/2013',NULL,NULL,89,'IS',2,'Technical',4,'Bachelor','Disapproved','Mac user ?','12122013101206',NULL,NULL,NULL,NULL,NULL),(17,'Fatma','Mohammed','khalid',1054883721,'C2288473','Female','12/12/1998',NULL,NULL,563328853,'09/05/2013',NULL,NULL,10,'IT',3,'IT',2,'Master','Under Process','3 missing paper','12122013101248',NULL,NULL,NULL,NULL,NULL),(18,'Ali','Ahmed','Alghamdi',1081199862,'C3088783','Male','17/02/1988',NULL,NULL,501844132,'20/01/2013',NULL,NULL,66,'Asst.',2,'Administrative',77,'High School','Approved','Under review','12122013101248',NULL,NULL,NULL,NULL,NULL),(64,'hattan','Hattan','Alshawi',1061780966,'C912347','Male','12','01','1964',506103476,'12','01','1964',70,'',2,'IT',4,'PhD','Under Process','Hi','22122013101220',NULL,'123',NULL,NULL,NULL),(65,'Sulaiman','Abdullah','silly',1017263557,'846373572','Male','06/19/2013',NULL,NULL,2147483647,'12/01/2013',NULL,NULL,67,'IT',0,'IT',5,'Master','Under Process','applicant have an IELTS exam','23122013061256',NULL,NULL,NULL,NULL,NULL),(67,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'IT',0,'Bachelor','Under Process','','23122013071236',NULL,NULL,NULL,NULL,NULL),(68,'mohammed','taher','fadag',2147483647,'cxxxxxx','Male','12/23/2013',NULL,NULL,563678452,'12/23/2013',NULL,NULL,100,'english',9,'Administrative',3,'Bachelor','Under Process','to be interv','23122013101258',NULL,NULL,NULL,NULL,NULL),(69,'Razana ','Abdullatif','Maimani',1047349111,'C36688','Female','02/18/1985',NULL,NULL,540608037,'12/04/2013',NULL,NULL,90,'MBA',3,'Administrative',0,'Master','Under Process','Good Candidate ','23122013101249',NULL,NULL,NULL,NULL,NULL),(70,'daad','','',0,'Cmmmm','Male','12/11/2013',NULL,NULL,0,'12/07/2013',NULL,NULL,0,'',3,'Administrative',0,'High School','Under Process','','24122013121200',NULL,NULL,NULL,NULL,NULL),(71,'fgdgfdsg','gfdsg','fgfdgsdf',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013101246',NULL,NULL,NULL,NULL,NULL),(72,'fdsfasdfsdafds','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013101249',NULL,NULL,NULL,NULL,NULL),(73,'qqqqq','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013101244',NULL,NULL,NULL,NULL,NULL),(74,'hhhh','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013101203',NULL,NULL,NULL,NULL,NULL),(75,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013121259',NULL,NULL,NULL,NULL,NULL),(76,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013011256',NULL,NULL,NULL,NULL,NULL),(77,'','','',0,'','Female','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','30122013011248',NULL,NULL,NULL,NULL,NULL),(78,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','31122013011211',NULL,NULL,NULL,NULL,NULL),(79,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','01012014090151',NULL,NULL,NULL,NULL,NULL),(80,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','01012014100110',NULL,NULL,NULL,NULL,NULL),(81,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','05012014090111',NULL,NULL,NULL,NULL,NULL),(82,'','','',0,'','Female','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','05012014090118',NULL,NULL,NULL,NULL,NULL),(83,'','','',0,'','Male','',NULL,NULL,0,'',NULL,NULL,0,'',0,'Administrative',0,'High School','Under Process','','05012014090130',NULL,NULL,NULL,NULL,NULL),(84,'','','',0,'','Male','01','01','',0,'01','01','2011',0,'',0,'Administrative',0,'High School','Under Process','','05012014110111',NULL,NULL,NULL,NULL,NULL),(85,'','','',0,'','Female','01','01','',0,'01','01','2007',0,'',0,'Administrative',0,'High School','Under Process','','05012014110107',NULL,NULL,NULL,NULL,NULL),(86,'','','',0,'','Male','01','01','',0,'01','01','2007',0,'',0,'Administrative',0,'High School','Under Process','','05012014110136',NULL,NULL,NULL,NULL,NULL),(87,'','','',0,'','Male','01','01','2007',0,'01','01','2007',0,'',0,'Administrative',0,'High School','Under Process','','05012014110140',NULL,NULL,NULL,NULL,NULL),(88,'','','',0,'','Male','01','01','1974',0,'01','01','2007',0,'',0,'Administrative',0,'High School','Under Process','','05012014120157',NULL,NULL,NULL,NULL,NULL),(89,'dgdfsgfdsgfdsgsdf','fdsgdfsg','fdgsfdg',0,'fdgsdfgdfs','Female','01','12','1974',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','05012014010107',NULL,NULL,NULL,NULL,NULL),(90,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','05012014040105',NULL,NULL,NULL,NULL,NULL),(91,'<br /><b>Notice</b>:  Undefine','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','06012014100147',NULL,NULL,NULL,NULL,NULL),(92,'Sulaiman','Abdullah','Sulaimanx',1011216171,'12548754658','Female','10','12','1985',560966333,'01','01','2010',85,'IT',0,'IT',5,'Master','Under Process','Employee will be interviewed in 11/11/2014','07012014080109',NULL,NULL,NULL,NULL,NULL),(93,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014080103',NULL,NULL,NULL,NULL,NULL),(94,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014090104',NULL,NULL,NULL,NULL,NULL),(95,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014090120',NULL,NULL,NULL,NULL,NULL),(96,'asdasd','','',0,'','Female','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014090114',NULL,NULL,NULL,NULL,NULL),(97,'shfliahfljgfoua','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014090110',NULL,NULL,NULL,NULL,NULL),(98,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014100141',NULL,NULL,NULL,NULL,NULL),(99,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','07012014010151',NULL,NULL,NULL,NULL,NULL),(100,'AMRO ','FAROOQ','KATEB',1036940078,'377572','Male','10','04','1979',505610303,'08','10','2013',82,'Hospitality Management',3,'Administrative',3,'Master','Approved','Candidate has been employed & started on 05/1/2014\r\n\r\nJob Title: supervisor environmental services \r\n\r\nBadge:	4652483 \r\n','08012014060106',NULL,NULL,NULL,NULL,NULL),(101,'test','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014080101','',NULL,NULL,NULL,NULL),(102,'test2','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014080112','123',NULL,NULL,NULL,NULL),(103,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014090103','',NULL,NULL,NULL,NULL),(104,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014090149','',NULL,NULL,NULL,NULL),(105,'s','','',0,'','Female','01','01','1964',0,'01','01','2009',0,'',0,'Academic',0,'High School','Under Process','','08012014090151','',NULL,NULL,NULL,NULL),(106,'1111','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014090154','',NULL,NULL,NULL,NULL),(107,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014090137','',NULL,NULL,NULL,NULL),(108,'asd','','',0,'','Female','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014090122','123',NULL,NULL,NULL,NULL),(109,'test3','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014090100','Razana','Razana',NULL,NULL,NULL),(110,'123','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Academic',0,'High School','Under Process','','08012014090104','123','',NULL,NULL,NULL),(111,'sss','','',0,'','Female','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014010141','123','-',NULL,NULL,NULL),(112,'ssassfdsfdsfsd','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','08012014010155','123','123',NULL,NULL,NULL),(113,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','09012014120111','123','',NULL,NULL,NULL),(114,'','','',0,'','Male','01','01','1964',0,'01','01','2009',0,'',0,'Administrative',0,'High School','Under Process','','09012014120107','123','',NULL,NULL,NULL);
/*!40000 ALTER TABLE `entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `upload_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `upload_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (1,'02122013011250','upload/02122013011250.jpg','image/jpeg',13),(2,'11122013121249','upload/11122013121249.jpg','image/jpeg',99),(3,'11122013011230','upload/11122013011230.zip','application/x-zip-compressed',76),(4,'11122013021220','upload/11122013021220.jpg','image/jpeg',99),(5,'12122013101221','upload/12122013101221.jpg','image/jpeg',99),(6,'12122013101206','upload/12122013101206.jpg','image/jpeg',13),(7,'12122013101248','upload/12122013101248.jpg','image/jpeg',13),(8,'12122013111232','upload/12122013111232.jpg','image/jpeg',13),(9,'22122013101206','upload/22122013101206.jpg','image/jpeg',77),(10,'22122013101220','upload/22122013101220.jpg','image/jpeg',77),(11,'23122013061256','upload/23122013061256.jpg','image/jpeg',194),(12,'23122013061213','upload/23122013061213.jpg','image/jpeg',194),(13,'23122013071236','upload/23122013071236.jpg','image/jpeg',194),(14,'23122013101258','upload/23122013101258.jpg','image/jpeg',194),(15,'23122013101249','upload/23122013101249.jpg','image/jpeg',194),(16,'24122013121200','upload/24122013121200.jpg','image/jpeg',194),(17,'30122013101246','upload/30122013101246.jpg','image/jpeg',194),(18,'30122013101249','upload/30122013101249.jpg','image/jpeg',194),(19,'30122013101244','upload/30122013101244.jpg','image/jpeg',194),(20,'30122013101203','upload/30122013101203.pdf','application/pdf',87),(21,'30122013121259','upload/30122013121259.jpg','image/jpeg',194),(22,'30122013011256','upload/30122013011256.jpg','image/jpeg',194),(23,'30122013011248','upload/30122013011248.jpg','image/jpeg',194),(24,'31122013011211','upload/31122013011211.pdf','application/pdf',96),(25,'01012014090151','upload/01012014090151.jpg','image/jpeg',194),(26,'01012014100110','upload/01012014100110.jpg','image/jpeg',194),(27,'05012014090111','upload/05012014090111.jpg','image/jpeg',194),(28,'05012014090118','upload/05012014090118.pdf','application/pdf',260),(29,'05012014090130','upload/05012014090130.pdf','application/pdf',96),(30,'05012014100103','upload/05012014100103.png','image/png',307),(31,'05012014110131','upload/05012014110131.jpg','image/jpeg',194),(32,'05012014110111','upload/05012014110111.jpg','image/jpeg',194),(33,'05012014110107','upload/05012014110107.jpg','image/jpeg',194),(34,'05012014110136','upload/05012014110136.jpg','image/jpeg',194),(35,'05012014110140','upload/05012014110140.jpg','image/jpeg',194),(36,'05012014120157','upload/05012014120157.jpg','image/jpeg',194),(37,'05012014010107','upload/05012014010107.jpg','image/jpeg',194),(38,'05012014040105','upload/05012014040105.jpg','image/jpeg',194),(39,'06012014100147','upload/06012014100147.jpg','image/jpeg',194),(40,'07012014080109','upload/07012014080109.gif','image/gif',2),(41,'07012014080103','upload/07012014080103.pdf','application/pdf',65),(42,'07012014090104','upload/07012014090104.png','image/png',3190),(43,'07012014090120','upload/07012014090120.csv','text/csv',72),(44,'07012014090114','upload/07012014090114.dmg','application/x-apple-diskimage',940),(45,'07012014090110','upload/07012014090110.dmg','application/x-apple-diskimage',3135),(46,'07012014100141','upload/07012014100141.png','image/png',3190),(47,'07012014010151','upload/07012014010151.png','image/png',3190),(48,'08012014060106','upload/08012014060106.pdf','application/pdf',991),(49,'08012014080101','upload/08012014080101.gz','application/x-gzip',38),(50,'08012014080112','upload/08012014080112.zip','application/zip',72),(51,'08012014090103','upload/08012014090103.pdf','application/pdf',2511),(52,'08012014090149','upload/08012014090149.png','image/png',3190),(53,'08012014090151','upload/08012014090151.png','image/png',3190),(54,'08012014090154','upload/08012014090154.png','image/png',3190),(55,'08012014090137','upload/08012014090137.png','image/png',3190),(56,'08012014090122','upload/08012014090122.png','image/png',3190),(57,'08012014090100','upload/08012014090100.psd','image/x-photoshop',3852),(58,'08012014090104','upload/08012014090104.png','image/png',3190),(59,'08012014010141','upload/08012014010141.JPG','image/jpeg',457),(60,'08012014010155','upload/08012014010155.png','image/png',3190),(61,'09012014120111','upload/09012014120111.png','image/png',3190),(62,'09012014120107','upload/09012014120107.png','image/png',3190);
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpmysqlautobackup`
--

DROP TABLE IF EXISTS `phpmysqlautobackup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpmysqlautobackup` (
  `id` int(11) NOT NULL,
  `version` varchar(6) DEFAULT NULL,
  `time_last_run` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpmysqlautobackup`
--

LOCK TABLES `phpmysqlautobackup` WRITE;
/*!40000 ALTER TABLE `phpmysqlautobackup` DISABLE KEYS */;
INSERT INTO `phpmysqlautobackup` VALUES (1,'1.6.3',1389681451);
/*!40000 ALTER TABLE `phpmysqlautobackup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phpmysqlautobackup_log`
--

DROP TABLE IF EXISTS `phpmysqlautobackup_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phpmysqlautobackup_log` (
  `date` int(11) NOT NULL,
  `bytes` int(11) NOT NULL,
  `lines` int(11) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phpmysqlautobackup_log`
--

LOCK TABLES `phpmysqlautobackup_log` WRITE;
/*!40000 ALTER TABLE `phpmysqlautobackup_log` DISABLE KEYS */;
INSERT INTO `phpmysqlautobackup_log` VALUES (1389619508,46819,128),(1389619837,46968,129),(1389620154,47100,130),(1389681404,47232,131),(1389681449,47364,132),(1389681451,47364,132);
/*!40000 ALTER TABLE `phpmysqlautobackup_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `fullname` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'123','321','202cb962ac59075b964b07152d234b70'),(3,'Muneera','Muneera','202cb962ac59075b964b07152d234b70'),(4,'Razana','Razana','202cb962ac59075b964b07152d234b70'),(5,'Mohammed','Mohammed','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-14 14:25:27
