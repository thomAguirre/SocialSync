-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: socialsync
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `socialsync`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `socialsync` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `socialsync`;

--
-- Table structure for table `Comment`
--

DROP TABLE IF EXISTS `Comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Comment` (
  `CommentID` int NOT NULL AUTO_INCREMENT,
  `PostID` int DEFAULT NULL,
  `UserID` int DEFAULT NULL,
  `Content` varchar(255) DEFAULT NULL,
  `CommentDate` datetime DEFAULT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `PostID` (`PostID`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `Comment_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `Post` (`PostID`),
  CONSTRAINT `Comment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comment`
--

LOCK TABLES `Comment` WRITE;
/*!40000 ALTER TABLE `Comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `Comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Post`
--

DROP TABLE IF EXISTS `Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Post` (
  `PostID` int NOT NULL AUTO_INCREMENT,
  `UserID` int DEFAULT NULL,
  `Content` varchar(255) DEFAULT NULL,
  `PostDate` datetime DEFAULT NULL,
  `Likes` int DEFAULT NULL,
  PRIMARY KEY (`PostID`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `Post_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Post`
--

LOCK TABLES `Post` WRITE;
/*!40000 ALTER TABLE `Post` DISABLE KEYS */;
INSERT INTO `Post` VALUES (12,2,'This is a test of typing a somewhat long post. I am just typing random stuff to see how the wrapping works when making posts. I am not sure how it will work, and I really hope it does not break everything. Right now I think the limit is 255 characters.','2023-12-10 15:32:17',0),(13,2,'making sure this works still','2023-12-10 17:17:43',0),(14,3,'Good evening, citizens!','2023-12-11 17:39:12',0),(15,4,'Im Batman','2023-12-11 17:40:31',0),(16,4,'Disregard my earlier post I didnt realize that was public','2023-12-11 17:42:08',0),(17,5,'Ran to Star City for my favorite pizza place, but by the time I ran back home, pizza was cold. I swear...','2023-12-11 17:46:39',0),(18,2,'Why are there so many superheroes on here?','2023-12-11 17:54:54',0);
/*!40000 ALTER TABLE `Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `User` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `PFP` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Bio` text,
  `Registered` date DEFAULT NULL,
  `Skill1` varchar(20) DEFAULT NULL,
  `Skill2` varchar(20) DEFAULT NULL,
  `Skill3` varchar(20) DEFAULT NULL,
  `Trait1` varchar(20) DEFAULT NULL,
  `Trait2` varchar(20) DEFAULT NULL,
  `Trait3` varchar(20) DEFAULT NULL,
  `Goal1` varchar(255) DEFAULT NULL,
  `Goal2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'user','test@test.com','pass','fname','lname','2000-01-01','Default.png','place','Sample Bio','2023-12-04',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'tagu','tagu@gmail.com','pass','Thomas','Aguirre','2000-09-11','tagu.jpg','Claremont, CA','Hey everyone, Im Thomas!','2023-12-09','Programming','Saxophone','Escape Artist','Kind','Helpful','Dog Lover','To protect the world from devestation','To unite all peoples within our nation'),(3,'superman','super@man.com','superpass','Clark','Kent','1939-02-28','superman.jpg','Metropolis','Sample Bio','2023-12-11','Strong','Heat Vision','Flight','Kind','Bashful','Stoic','To do whats right','To punch Nazis'),(4,'batman','bat@man.com','imbatman','Bruce','Wayne','1917-04-15','batman.jpg','Gotham','Sample Bio','2023-12-11','Rich','Lots of Money','Rich again','Not Batman','Still Not Batman','Nope','To free Gotham from corruption','Adopt strays'),(5,'flash','flash@toofast.com','toofast','Barry','Allen','1992-09-30','flash.webp','Central City','Sample Bio','2023-12-11','Fast','Intelligent','Observant','Kind','Brave','Helpful','To free my dad from prison','Gotta go fast');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-12 16:08:54
