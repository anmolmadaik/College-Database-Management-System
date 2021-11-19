-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbms
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attends`
--

DROP TABLE IF EXISTS `attends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attends` (
  `Roll_no` int DEFAULT NULL,
  `Course_id` varchar(10) DEFAULT NULL,
  KEY `Roll_no` (`Roll_no`),
  KEY `Course_id` (`Course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attends`
--

LOCK TABLES `attends` WRITE;
/*!40000 ALTER TABLE `attends` DISABLE KEYS */;
INSERT INTO `attends` VALUES (195201,'EE-311'),(195201,'EE-312'),(195201,'EE-313'),(195201,'EE-314'),(195201,'EC-370'),(195213,'EE-311'),(195213,'EE-312'),(195213,'EE-313'),(195213,'EE-314'),(195213,'MS-370'),(195301,'ME-311'),(195301,'ME-312'),(195301,'ME-313'),(195301,'ME-314'),(195301,'CS-306'),(195406,'EC-311'),(195406,'EC-312'),(195406,'EC-313'),(195406,'EC-314'),(195406,'AR-370'),(195509,'CS-311'),(195509,'CS-312'),(195509,'CS-313'),(195509,'CS-314'),(195509,'CE-306'),(195510,'CS-311'),(195510,'CS-312'),(195510,'CS-313'),(195510,'CS-314'),(195510,'CE-306'),(195520,'CS-311'),(195520,'CS-312'),(195520,'CS-313'),(195520,'CS-314'),(195520,'CH-370'),(195522,'CS-311'),(195522,'CS-312'),(195522,'CS-313'),(195522,'CS-314'),(195522,'CE-306'),(195603,'CE-311'),(195603,'CE-312'),(195603,'CE-313'),(195603,'CE-314'),(195603,'EE-371'),(195414,'EC-311'),(195414,'EC-312'),(195414,'EC-313'),(195414,'EC-314'),(195414,'CH-370'),(195423,'EC-311'),(195423,'EC-312'),(195423,'EC-313'),(195423,'EC-314'),(195423,'AR-370'),(194004,'ME-311'),(194004,'ME-312'),(194004,'ME-313'),(194004,'ME-314'),(194004,'EE-371'),(196002,'AR-311'),(196002,'AR-312'),(196002,'AR-313'),(196002,'AR-314'),(196002,'ME-371'),(197027,'CH-311'),(197027,'CH-312'),(197027,'CH-313'),(197027,'CH-314'),(197027,'CS-306'),(198048,'MS-311'),(198048,'MS-312'),(198048,'MS-313'),(198048,'MS-314'),(198048,'EC-370'),(195602,'CE-311'),(195602,'CE-312'),(195602,'CE-313'),(195602,'CE-314'),(195602,'MS-370'),(195623,'CE-311'),(195623,'CE-312'),(195623,'CE-313'),(195623,'CE-314'),(195623,'AR-370'),(195513,'CS-311'),(195513,'CS-312'),(195513,'CS-313'),(195513,'CS-314'),(195513,'CE-306');
/*!40000 ALTER TABLE `attends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Instructor` varchar(10) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Instructor` (`Instructor`),
  KEY `Department` (`Department`),
  CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`Department`) REFERENCES `department` (`Name`),
  CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`Instructor`) REFERENCES `instructor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES ('AR-311','History of Architecture','bm','Architecture'),('AR-312','Landscape Design','vn','Architecture'),('AR-313','Building Services','is','Architecture'),('AR-314','Building Estimation','an','Architecture'),('AR-370','CAD','mj','Architecture'),('CE-223','Soil Mechanics','rs','Civil Engineering'),('CE-306','CPM and PERT','rs','Civil Engineering'),('CE-311','RCC Engineering','rp','Civil Engineering'),('CE-312','Water Supply and Treatment','rk','Civil Engineering'),('CE-313','Foundation Engineering','rkd','Civil Engineering'),('CE-314','Highway Engineering','vs','Civil Engineering'),('CH-311','Mass Transfer','sm','Chemical Engineering'),('CH-312','Chemical Reaction Engineering','tp','Chemical Engineering'),('CH-313','Process Equipment Design','ag','Chemical Engineering'),('CH-314','Process Dynamics and Control','sm','Chemical Engineering'),('CH-370','Nanoscience and NanoTechnology','ry','Chemical Engineering'),('CS-211','OOP\'s','kd','Computer Science and Engineering'),('CS-306','Data Structures','pa','Computer Science and Engineering'),('CS-311','Analysis and Design of Algorithm','kd','Computer Science and Engineering'),('CS-312','DBMS','vk','Computer Science and Engineering'),('CS-313','Compiler Design','dy','Computer Science and Engineering'),('CS-314','Computer Graphics','nc','Computer Science and Engineering'),('EC-224','VLSI Technology','ss','Electronics and Communication Engineering'),('EC-311','Microprocessor Theory and Applications','gk','Electronics and Communication Engineering'),('EC-312','Digital Communications and Systems','rc','Electronics and Communication Engineering'),('EC-313','Digital Signam Processing','ak','Electronics and Communication Engineering'),('EC-314','Microwave Devices and Systems','rd','Electronics and Communication Engineering'),('EC-370','MEMS Design','vi','Electronics and Communication Engineering'),('EC-411','VLSI Technology','rd','Electronics and Communication Engineering'),('EE-223','Power Electronics','zh','Electrical Engineering'),('EE-311','Protection and Switchgear','su','Electrical Engineering'),('EE-312','Electrical Machines','ra','Electrical Engineering'),('EE-313','Signals and Systems','rn','Electrical Engineering'),('EE-314','Electrical Machines','ac','Electrical Engineering'),('EE-371','Elements of Control System','ys','Electrical Engineering'),('ME-223','Mechanics of Solids','ps','Mechanical Engineering'),('ME-224','Industrial Eng.','ds','Mechanical Engineering'),('ME-311','Machine Design','rl','Mechanical Engineering'),('ME-312','Manufacturing Science and Technology','ap','Mechanical Engineering'),('ME-313','Thermal Power Engineering','ds','Mechanical Engineering'),('ME-314','Refridgeration and Air Conditioning','sk','Mechanical Engineering'),('ME-371','Product Design and Development','ps','Mechanical Engineering'),('MS-311','Characterization of Materials','nk','Material Science and Engineering'),('MS-312','Ceramics Science and Engineering','rv','Material Science and Engineering'),('MS-313','Iron and Steel Making','rm','Material Science and Engineering'),('MS-314','Metal Working Science and Engineering','vh','Material Science and Engineering'),('MS-370','Materials Characterization Technique','rb','Material Science and Engineering');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `Name` varchar(50) NOT NULL,
  `HOD` varchar(20) DEFAULT NULL,
  `no_of_student` int DEFAULT NULL,
  `no_of_courses` int DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES ('Architecture','Dr. I.P. Singh',500,25),('Chemical Engineering','Dr. Pamita Awasth',100,35),('Civil Engineering','Dr. R.S. Banshtu',400,30),('Computer Science and Engineering','Dr.Teek Sharma',300,40),('Electrical Engineering','Dr. Raj Jarial',300,35),('Electronics and Communication Engineering','Er. K.S. Pandey',200,30),('Material Science and Engineering','Dr. Ravi Kumar',233,32),('Mechanical Engineering','Dr.Ram Chauhan',250,35);
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor` (
  `id` varchar(10) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Mobile_no` bigint DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Department` (`Department`),
  CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`Department`) REFERENCES `department` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
INSERT INTO `instructor` VALUES ('ac','Prof. Ashwani Chandel','1969-06-30','Mumbai',254654,'Electrical Engineering'),('ag','Dr. Alok Garg','1967-01-22','Hamirpur',266329,'Chemical Engineering'),('ak','Dr. Ashok Kumar','1977-07-07','Hamirpur',257777,'Electronics and Communication Engineering'),('an','Dr. Aniket Sharma','1987-08-15','Shimla',210123,'Architecture'),('ap','Prof. Anoop Kumar','1979-07-19','Kolkata',259823,'Mechanical Engineering'),('bm','Bhanu M. Marwaha','1963-12-23','Bangalore',212239,'Architecture'),('ds','Dr. Siddhartha','1970-10-08','Himachal',251345,'Mechanical Engineering'),('dy','Dr. Divakar Yadav','1984-02-19','Ghaziabad',NULL,'Computer Science and Engineering'),('gk','Dr. Gargi Khanna','1974-04-07','Hamirpur',257744,'Electronics and Communication Engineering'),('is','Dr. Inderpal Singh','1977-07-13','Hamirpur',2101239,'Architecture'),('kd','Dr.Kamlesh Dutta','1970-10-08','Himachal Pradesh',NULL,'Computer Science and Engineering'),('lk','Prof. Lalit Kumar Awasthi','1964-09-01','Jalandhar',234383,'Computer Science and Engineering'),('mj','Prof. Minakshi Jain','1973-02-17','Patna',213742,'Architecture'),('nc','Dr. Naveen Chauhan','1975-10-05','Mandi',1972254432,'Computer Science and Engineering'),('nk','Dr. Nitesh Kumar','1961-11-01','Hamirpur',NULL,'Material Science and Engineering'),('pa','Prof. Pardeep Singh','1981-07-29','Amritsar',211123,'Computer Science and Engineering'),('pn','Dr. Puneet Sharma','1985-05-18','Hamirpur',210248,'Architecture'),('ps','Dr. P.K. Sood','1970-10-08','Himachal',289563,'Mechanical Engineering'),('ra','Prof. Ram Naresh Sharma','1974-01-04','Hamirpur',216784,'Electrical Engineering'),('rb','Dr. Raj Bahadur Singh','1967-02-13','Hamirpur',278312,'Material Science and Engineering'),('rc','Prof. Rajeevan Chandel','1985-05-23','Hamirpur',257363,'Electronics and Communication Engineering'),('rd','Dr. Rohit Dhiman','1970-03-12','Himachal',NULL,'Electronics and Communication Engineering'),('rk','Dr. Ravi Kumar','1968-03-03','Kangra',231118,'Civil Engineering'),('rkd','Prof. R.K. Dutta','1979-12-30','Delhi',223428,'Civil Engineering'),('rl','Prof. R.K. Sehgal','1976-06-27','Hamirpur',289324,'Mechanical Engineering'),('rm','Dr. Rita Maurya','1959-03-24','Luchnow',273109,'Material Science and Engineering'),('rn','Dr. Ravinder Nath','1981-07-05','U.P.',NULL,'Electrical Engineering'),('rp','Dr. Raman Puri','1975-02-13','Sirmour',253318,'Civil Engineering'),('rs','Dr. R.S. Banshtu','1974-11-05','Mandi',254336,'Civil Engineering'),('rv','Prof. Ravi Kumar','1978-08-17','Hamirpur',223190,'Material Science and Engineering'),('ry','Dr. Radhe Shyam','1986-10-02','Surat',282310,'Chemical Engineering'),('sk','Prof. Sunand Kumar','1983-03-08','Dehradun',257843,'Mechanical Engineering'),('sm','Dr. Subhajit Majumder','1987-02-27','Delhi',266319,'Chemical Engineering'),('ss','Dr. Surender Soni','1970-11-11','Punjab',234984,'Electronics and Communication Engineering'),('su','Prof. Sushil Chauhan','1959-11-04','Shimla',286763,'Electrical Engineering'),('tp','Dr. Tapas Palai','1976-10-12','Hamirpur',NULL,'Chemical Engineering'),('vh','Dr. Vishal Singh','1964-06-04','Srinagar',245710,'Material Science and Engineering'),('vi','Prof. Vinod Kumar','1980-03-13','Kullu',269601,'Electronics and Communication Engineering'),('vk','Dr. Vijay Kumar','1974-11-05','Himachal',NULL,'Computer Science and Engineering'),('vn','Dr. Vandna Sharma','1971-01-01','Hamirpur',210248,'Architecture'),('vs','Dr. Vijay Shankar','1979-01-22','Sirmour',264236,'Civil Engineering'),('ys','Prof. Y.R. Sood','1961-04-16','Hamirpur',223434,'Electrical Engineering'),('zh','Dr. Zakir Hussain','1976-09-20','hamirpur',254321,'Electrical Engineering');
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `Roll_no` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Mobile_no` bigint DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Roll_no`),
  KEY `Department` (`Department`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Department`) REFERENCES `department` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (194004,'Abhishek','2002-07-12',8629806773,'Palampur','Mechanical Engineering'),(195201,'Samarth','2001-11-15',9418903608,'Shimla','Electrical Engineering'),(195213,'Atharv','2001-09-22',8352050379,'Shimla','Electrical Engineering'),(195301,'Aayushi','2001-10-02',8629877371,'Shimla','Mechanical Engineering'),(195406,'Gaurav','2001-09-07',8894075989,'Shimla','Electronics and Communication Engineering'),(195414,'Arsh','2001-09-10',8219858089,'Palampur','Electronics and Communication Engineering'),(195423,'Pushkar','2001-09-01',9805583086,'Kinnaur','Electronics and Communication Engineering'),(195509,'Shivam','2001-07-09',9418277980,'Shimla','Computer Science and Engineering'),(195510,'Vani','2001-08-30',8278759599,'Shimla','Computer Science and Engineering'),(195513,'Anmol','2001-02-14',9805407008,'Solan','Computer Science and Engineering'),(195520,'Deepanshu','2000-05-02',8894833627,'Mandi','Computer Science and Engineering'),(195522,'Aman','2002-01-30',7018681214,'Mandi','Computer Science and Engineering'),(195602,'Nikhil','2002-02-11',7876083165,'Chamba','Civil Engineering'),(195603,'Hrithik','2000-09-28',8219935250,'Bilaspur','Civil Engineering'),(195623,'Tenzin','2000-02-26',7876692958,'Spiti','Civil Engineering'),(196002,'Royal','2000-04-13',9805774649,'Una','Architecture'),(197027,'Aryan','2001-09-22',8219622357,'Solan','Chemical Engineering'),(198048,'Shorya','2001-05-17',9418140498,'Solan','Material Science and Engineering');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teaches`
--

DROP TABLE IF EXISTS `teaches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teaches` (
  `Roll_no` int DEFAULT NULL,
  `instructor_id` varchar(10) DEFAULT NULL,
  KEY `Roll_no` (`Roll_no`),
  KEY `instructor_id` (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teaches`
--

LOCK TABLES `teaches` WRITE;
/*!40000 ALTER TABLE `teaches` DISABLE KEYS */;
INSERT INTO `teaches` VALUES (195201,'su'),(195201,'ra'),(195201,'rn'),(195201,'ac'),(195201,'vi'),(195213,'su'),(195213,'ra'),(195213,'rn'),(195213,'ac'),(195213,'rb'),(195301,'rl'),(195301,'ap'),(195301,'ds'),(195301,'sk'),(195301,'pa'),(195406,'gk'),(195406,'rc'),(195406,'ak'),(195406,'rd'),(195406,'mj'),(195509,'kd'),(195509,'vk'),(195509,'dy'),(195509,'nc'),(195509,'rs'),(195510,'kd'),(195510,'vk'),(195510,'dy'),(195510,'nc'),(195510,'rs'),(195520,'kd'),(195520,'vk'),(195520,'dy'),(195520,'nc'),(195520,'ry'),(195522,'kd'),(195522,'vk'),(195522,'dy'),(195522,'nc'),(195522,'rs'),(195603,'rp'),(195603,'rk'),(195603,'rkd'),(195603,'vs'),(195603,'ys'),(195414,'gk'),(195414,'rc'),(195414,'ak'),(195414,'rd'),(195414,'ry'),(195423,'gk'),(195423,'rc'),(195423,'ak'),(195423,'rd'),(195423,'mj'),(194004,'rl'),(194004,'ap'),(194004,'ds'),(194004,'sk'),(194004,'ys'),(196002,'bm'),(196002,'vn'),(196002,'is'),(196002,'an'),(196002,'ps'),(197027,'sm'),(197027,'tp'),(197027,'ag'),(197027,'sm'),(197027,'pa'),(198048,'nk'),(198048,'rv'),(198048,'rm'),(198048,'vh'),(198048,'vi'),(195602,'rp'),(195602,'rk'),(195602,'rkd'),(195602,'vs'),(195602,'rb'),(195623,'rp'),(195623,'rk'),(195623,'rkd'),(195623,'vs'),(195623,'mj'),(195513,'kd'),(195513,'vk'),(195513,'dy'),(195513,'nc'),(195513,'rs');
/*!40000 ALTER TABLE `teaches` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-25 20:10:26
