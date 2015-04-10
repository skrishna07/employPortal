-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2015 at 09:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_document`
--

CREATE TABLE IF NOT EXISTS `emp_document` (
`doc_id` int(10) NOT NULL,
  `document` varchar(30) NOT NULL,
  `doc_uploadedby` varchar(30) NOT NULL,
  `createdate` varchar(30) NOT NULL,
  `updatedate` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_document`
--

INSERT INTO `emp_document` (`doc_id`, `document`, `doc_uploadedby`, `createdate`, `updatedate`) VALUES
(89, 'New Text Document.txt', 'srikrishna', '2015-04-10', '2015-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `emp_doc_tags`
--

CREATE TABLE IF NOT EXISTS `emp_doc_tags` (
`tag_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `tags` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_doc_tags`
--

INSERT INTO `emp_doc_tags` (`tag_id`, `doc_id`, `tags`) VALUES
(106, 89, 'aqa');

-- --------------------------------------------------------

--
-- Table structure for table `emp_helppage`
--

CREATE TABLE IF NOT EXISTS `emp_helppage` (
`page_id` int(10) NOT NULL,
  `content` text NOT NULL,
  `content_uploadedby` varchar(30) NOT NULL,
  `createdate` varchar(30) NOT NULL,
  `updateddate` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_helppage`
--

INSERT INTO `emp_helppage` (`page_id`, `content`, `content_uploadedby`, `createdate`, `updateddate`) VALUES
(28, 'ss', 'srikrishna', '2015-04-10', '2015-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `emp_helppage_tags`
--

CREATE TABLE IF NOT EXISTS `emp_helppage_tags` (
`tag_id` int(10) NOT NULL,
  `page_id` int(10) NOT NULL,
  `tags` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_helppage_tags`
--

INSERT INTO `emp_helppage_tags` (`tag_id`, `page_id`, `tags`) VALUES
(142, 28, '1'),
(143, 28, '1'),
(144, 28, '1'),
(145, 28, '1'),
(146, 28, '1'),
(147, 28, '1'),
(148, 28, '2'),
(149, 28, '555');

-- --------------------------------------------------------

--
-- Table structure for table `emp_registration`
--

CREATE TABLE IF NOT EXISTS `emp_registration` (
`emp_id` int(10) NOT NULL,
  `emp_username` varchar(30) NOT NULL,
  `emp_password` varchar(30) NOT NULL,
  `emp_firstname` varchar(30) NOT NULL,
  `emp_lastname` varchar(30) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_mobno` varchar(30) NOT NULL,
  `emp_gender` char(1) NOT NULL,
  `emp_father_hus_name` varchar(30) NOT NULL,
  `emp_dob` varchar(30) NOT NULL,
  `emp_image` varchar(30) NOT NULL,
  `emp_identityproof` varchar(30) NOT NULL,
  `emp_presentaddress` varchar(300) NOT NULL,
  `emp_permenentaddress` varchar(300) NOT NULL,
  `emp_pancard` text NOT NULL,
  `emp_passport` text NOT NULL,
  `emp_role` varchar(30) NOT NULL DEFAULT 'general',
  `createdate` varchar(30) NOT NULL,
  `updatedate` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_registration`
--

INSERT INTO `emp_registration` (`emp_id`, `emp_username`, `emp_password`, `emp_firstname`, `emp_lastname`, `emp_email`, `emp_mobno`, `emp_gender`, `emp_father_hus_name`, `emp_dob`, `emp_image`, `emp_identityproof`, `emp_presentaddress`, `emp_permenentaddress`, `emp_pancard`, `emp_passport`, `emp_role`, `createdate`, `updatedate`) VALUES
(18, 'srikrishna', 'srikrishna140', 'srikrishna', 'mekala', 'msrikrishna140@gmail.com', '9959167378', 'M', 'hanumaiah', '11/01/2008', 'a1.png', 'logo.png', 'jsbadh', 'asbdnabnsbn', 'dewd', 'sdsds', 'admin', '2015-03-30', '04-09-2015'),
(38, 'jdjmendj', 'password', 'xdwqdqwde', 'edw', 'njn@ded.cpm', '9959167378', 'M', 'hgdygqwy', '04/08/2015', 'SEO1.jpg', 'seo5.jpg', 'dwe', 'dw', 'dwd', 'dwdew', 'general', '2015-04-07', '04-07-2015'),
(40, 'jj', 'password', 'uwruiy3ry', 'u23r12y8347y7y', 'jnwj@gmail.com', '889999999', 'M', 'jjuhuh', '04/01/2015', 'logo.png', 'logo.png', 'hgygy6', 'nbh', 'hyugu', 'hgyugyu', 'general', '2015-04-07', '04-07-2015'),
(41, 'RBhattad', 'password', 'Rohit', 'Bhattad', 'rohitbhattad@gmail.com', '9966866886', 'M', 'hanumaiah', '05/14/2014', 'login.txt', 'a1.png', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '123466', '123456', 'general', '2015-04-08', '2015-04-08'),
(42, 'ndnwjdenwj', 'password', 'nfjdnjn', 'dnwjdenwj', 'msdj@gmm.com', '9959167378', 'M', 'wede', '04/21/2015', 'a1.png', 'a1.png', 'dwdew', 'dwdew', 'dwdew', 'dwdw', 'general', '2015-04-09', '2015-04-09'),
(43, 'kr', 'password', 'krish', 'r', 'masdr@jeh.com', '9959167378', 'M', 'fewf', '04/06/2015', 'a1.png', 'a1.png', 'fer', 'ded', 'dew3', 'ded', 'general', '2015-04-09', '2015-04-09'),
(44, 'ssss', 'password', 's', 'sss', 'sqsw@fed.com', '99591673783', 'M', 'sqs', '04/23/2015', 'a1.png', 'logo.png', 'edwed', 'dwdew', 'dwdew', 'dw', 'general', '2015-04-09', '2015-04-09'),
(45, 'ssqsq', 'password', 'sqs', 'sqsq', 'msrikrishna140@gmail.com', '9959167378', '0', 'kk', '29-03-2015', 'a1.png', 'logo.png', 'sd', 'dsd', 'dwd', 'dwede', 'general', '2015-04-09', '2015-04-09'),
(46, 'jjhwds', 'password', 'jc', 'jhwds', 'msrikrishna140@gmail.com', '9959167378', 'F', 'ws', '05-04-2015', 'a1.png', 'logo.png', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', 'dw', 'sw', 'general', '2015-04-09', '2015-04-09'),
(47, 'ssqs', 'password', 'sqs', 'sqs', 'msrikrishna140@gmail.com', '9959167378', 'F', 'assa', '06-04-2015', 'a1.png', 'logo.png', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', 'xxx', 'xxx', 'general', '2015-04-09', '2015-04-09'),
(48, 'ssqsw', 'password', 'sqsw', 'sqsw', 'msrikrishna140@gmail.com', '9959167378', 'M', 'tss', '05-04-2015', 'a1.png', 'a1.png', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', 'sq', 'sq', 'general', '2015-04-09', '2015-04-09'),
(49, 'sssssssssssssssssssssss', 'password', 'ss', 'ssssssssssssssssssssss', 'sqsw@fed.com', '99594566', 'F', 'd3w', '05-04-2015', 'a1.png', 'logo.png', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', 'bgt', 'swd', 'general', '2015-04-09', '2015-04-09'),
(50, 'sss', 'password', 'ss', 'ss', 'msrikrishna140@gmail.com', '9959167378', 'M', 'sss', '12-04-2015', 'a1.png', 'logo.png', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', 'ss', 'ss', 'general', '2015-04-09', '2015-04-09'),
(51, 'abbbbbbbbb', 'password', 'AAAA', 'BBBBBBBBB', 'msrikrishna140@gmail.com', '9959167378', 'M', 'SS', '05-04-2015', 'a1.png', 'a1.png', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', 'SS', 'SS', 'general', '2015-04-09', '2015-04-09'),
(52, 'rrrr', 'password', 'rr', 'rrr', 'msrikrishna140@gmail.com', '9959167378', 'M', 'dcds', '05-04-2015', 'a1.png', 'logo.png', '59-8-1/1, Gayatri Nagar\r\nLane- 2, Opposite Bhashyam Schoo', '501, Nandadeep Appartment\r\nL T Road No : 4, MG Road , Goregaon West', 'ss', 'ss', 'general', '2015-04-09', '2015-04-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_document`
--
ALTER TABLE `emp_document`
 ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `emp_doc_tags`
--
ALTER TABLE `emp_doc_tags`
 ADD PRIMARY KEY (`tag_id`), ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `emp_helppage`
--
ALTER TABLE `emp_helppage`
 ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `emp_helppage_tags`
--
ALTER TABLE `emp_helppage_tags`
 ADD PRIMARY KEY (`tag_id`), ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `emp_registration`
--
ALTER TABLE `emp_registration`
 ADD PRIMARY KEY (`emp_id`), ADD UNIQUE KEY `emp_username` (`emp_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_document`
--
ALTER TABLE `emp_document`
MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `emp_doc_tags`
--
ALTER TABLE `emp_doc_tags`
MODIFY `tag_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `emp_helppage`
--
ALTER TABLE `emp_helppage`
MODIFY `page_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `emp_helppage_tags`
--
ALTER TABLE `emp_helppage_tags`
MODIFY `tag_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `emp_registration`
--
ALTER TABLE `emp_registration`
MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_doc_tags`
--
ALTER TABLE `emp_doc_tags`
ADD CONSTRAINT `emp_doc_tags_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `emp_document` (`doc_id`);

--
-- Constraints for table `emp_helppage_tags`
--
ALTER TABLE `emp_helppage_tags`
ADD CONSTRAINT `emp_helppage_tags_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `emp_helppage` (`page_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
