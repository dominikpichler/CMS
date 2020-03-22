-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: cms
-- ------------------------------------------------------
-- Server version	8.0.13

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_category_id` varchar(45) NOT NULL DEFAULT 'default',
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL DEFAULT 'admin',
  `post_date` datetime DEFAULT NULL,
  `post_image` varchar(255) DEFAULT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_tags` varchar(255) NOT NULL DEFAULT ' ',
  `post_comment_count` int(11) NOT NULL DEFAULT '0',
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (38,'2','PHP 101','Dominik','2020-03-22 12:35:13','../img/php.jpg','Hallo Freunde\r\n        ','php,course',4,'draft'),(39,'3','Java 101','Dominik','2020-03-22 12:35:41','../img/java.jpeg','Hallo Freunde\r\n\r\n        ','java, course',4,'draft'),(40,'15','JavaScript 101','Dominik','2020-03-22 12:36:11','../img/javascript.jpg','Dominik Pichler\r\n@klickbar.at\r\n\r\n        ','javascript, course',4,'draft'),(41,'20','Python101','Thomas','2020-03-22 12:42:49','../img/python.png','Webtwo ipsum gsnap blekko edmodo cotweet twones zlio, zoodles orkut lijit omgpop. Zynga lala chartly napster mog twitter reddit, vuvox zoosk geni knewton. zoodles lanyrd joukuu. Joost boxbe kaboodle movity zoosk, ','python',4,'draft'),(42,'18','Your own Agency in 2020','Dominik','2020-03-22 12:50:59','../img/Screen Shot 2020-03-19 at 22.50.34.png','I will show you how to build your own agency in 2020\r\n        ','agency,javascript',4,'draft');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-22 16:26:48
