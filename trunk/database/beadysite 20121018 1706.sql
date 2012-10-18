-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.8


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema beadysite
--

CREATE DATABASE IF NOT EXISTS beadysite;
USE beadysite;

--
-- Definition of table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `account_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `userpass` varchar(45) NOT NULL,
  `userlevel` varchar(45) NOT NULL,
  `stud_id` varchar(45) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`account_id`,`username`,`userpass`,`userlevel`,`stud_id`) VALUES 
 (1,'raffytatel','treseholder','student','1'),
 (2,'raprap','treseholder','student','2');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;


--
-- Definition of table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `member_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_lname` varchar(45) NOT NULL,
  `member_fname` varchar(45) NOT NULL,
  `member_mi` varchar(45) NOT NULL,
  `member_gender` varchar(45) NOT NULL,
  `member_address` varchar(45) NOT NULL,
  `member_contactno` varchar(45) NOT NULL,
  `member_payment` int(10) unsigned NOT NULL,
  `member_remarks` varchar(150) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`member_id`,`member_lname`,`member_fname`,`member_mi`,`member_gender`,`member_address`,`member_contactno`,`member_payment`,`member_remarks`) VALUES 
 (3,'Amban','Osias Jr.','J.','Male','Davao','09331191906',1000,'Paid'),
 (4,'Asuncion','Ralph','P.','Male','Davao','09223456789',500,'Partial'),
 (5,'Tatel','Raffy','E.','Male','Davao','09331191906',1000,'Paid');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;


--
-- Definition of table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `stud_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stud_lname` varchar(45) NOT NULL,
  `stud_fname` varchar(45) NOT NULL,
  `stud_mi` varchar(45) NOT NULL,
  `stud_gender` varchar(45) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`stud_id`,`stud_lname`,`stud_fname`,`stud_mi`,`stud_gender`) VALUES 
 (1,'Tatel','Raffy','M.','Male');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


--
-- Definition of table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `transaction_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_code` varchar(45) NOT NULL,
  `transaction_type` varchar(45) NOT NULL,
  `transaction_name` varchar(100) NOT NULL,
  `transaction_amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` (`transaction_id`,`transaction_code`,`transaction_type`,`transaction_name`,`transaction_amount`) VALUES 
 (11,'OR12345','Mortuary Fund','Mortuary fund','10000.00'),
 (12,'OR#76223440','Office Supplies','Cartolina, Manila Paper','134.66'),
 (13,'OR56789','Meals','Meals (Intramurals)','1678.75'),
 (14,'No OR','Transportation','Transportation (Intramural 2012)','1455.78'),
 (15,'No OR','Others','Refund','5678.00');
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
