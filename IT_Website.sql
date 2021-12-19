-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2021 at 02:00 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IT_Website`
--

-- --------------------------------------------------------

--
-- Table structure for table `AWARDS`
--

CREATE TABLE `AWARDS` (
  `fID` int NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `AWARDS`
--

INSERT INTO `AWARDS` (`fID`, `details`) VALUES
(2, 'aqaqaq');

-- --------------------------------------------------------

--
-- Table structure for table `factulty`
--

CREATE TABLE `factulty` (
  `fID` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `designation` text NOT NULL,
  `emailID` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phoneNo` text,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `present` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `factulty`
--

INSERT INTO `factulty` (`fID`, `name`, `designation`, `emailID`, `phoneNo`, `image`, `type`, `present`) VALUES
(1, 'Dr Dananjay Kumar', 'HOD', 'dhananjay@annauniv.edu', '6020', 'Images/faculty/1_1.jpeg', 1, 1),
(1, 'Dr Vignesh', 'lab Staff-2', 'xyzxy@annauniv.edu', '6020', 'Images/faculty/0_1.jpeg', 0, 1),
(2, 'RSK', 'Professor', 'aucmitit@gmail.com', '6020', 'Images/faculty/1_2.jpeg', 1, 1),
(3, 'hey', 'wwa', 'aucmitit@gmail.com', '6020', 'Images/faculty/noImage.jpeg', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facultyDetails`
--

CREATE TABLE `facultyDetails` (
  `fID` int NOT NULL,
  `type` tinyint(1) NOT NULL,
  `areaOfSpec` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `personalSite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `acoeSite` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `extraCol` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facultyDetails`
--

INSERT INTO `facultyDetails` (`fID`, `type`, `areaOfSpec`, `personalSite`, `acoeSite`, `extraCol`) VALUES
(1, 1, 'Augmented reality & Virtual Reality ,Video Analysis ,Multimedia Systems,Video Processing,Mobile Communications and Computing', '#', 'https://www.aukdc.edu.in/fis/facultyprofile.php?ch=60746', '#QUALIFICATION'),
(1, 0, 'lab work', '#', '#', 'WORK'),
(2, 1, 'ml', '#', '#', 'AWARDS');

-- --------------------------------------------------------

--
-- Table structure for table `facultyDetails_`
--

CREATE TABLE `facultyDetails_` (
  `fID` int NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facultyDetails_`
--

INSERT INTO `facultyDetails_` (`fID`, `details`) VALUES
(0, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(1, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[\"welcome\"],\"name\":\"shankar\",\"emailID\":\"\",\"welcome\":[\"hello\",\"thanks\",\"good\",\"bye\",\"goodnight\"]}'),
(2, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}\r\n'),
(3, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(4, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(5, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(6, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(7, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(8, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(9, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(10, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}'),
(11, '{\"areaOfSpec\":\"\",\"presonalSite\":\"#\",\"acoeSite\":\"\",\"extraCol\":[]}');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_`
--

CREATE TABLE `faculty_` (
  `fID` int NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty_`
--

INSERT INTO `faculty_` (`fID`, `details`) VALUES
(0, '{\"fID\":0,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(1, '{\"fID\":1,\"name\":\"Dr. Dhananjay Kumar\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/1.jpeg\",\"type\":1,\"present\":1}'),
(2, '{\"fID\":2,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(3, '{\"fID\":3,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(4, '{\"fID\":4,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(5, '{\"fID\":5,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(6, '{\"fID\":6,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(7, '{\"fID\":7,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(8, '{\"fID\":8,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(9, '{\"fID\":9,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}'),
(10, '{\"fID\":10,\"name\":\"\",\"designation\":\"\",\"emailID\":\"\",\"phoneNo\":\"\",\"image\":\"Images/faculty/noImage.jpeg\",\"type\":1,\"present\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `flashNews`
--

CREATE TABLE `flashNews` (
  `newsID` int NOT NULL,
  `news` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `link` text,
  `expDate` datetime NOT NULL,
  `isLink` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `initData`
--

CREATE TABLE `initData` (
  `fields` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `initData`
--

INSERT INTO `initData` (`fields`, `details`) VALUES
('extraCol', 'AWARDS#TEST#WORK#QUALIFICATION');

-- --------------------------------------------------------

--
-- Table structure for table `QUALIFICATION`
--

CREATE TABLE `QUALIFICATION` (
  `fID` int NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `QUALIFICATION`
--

INSERT INTO `QUALIFICATION` (`fID`, `details`) VALUES
(1, 'Ph.D.  in  Mobile  Computing  from  Faculty  of  Information  and  Communication  Engineering,CEG Campus, Anna University, Chennai (2004 - 2009).#AMIE. in  ELECTRONICS AND COMMUNICATION ENGG ,The Institution of Engineers,Calcutta, The Institution of Engineers, Calcutta (1993 - 1997)');

-- --------------------------------------------------------

--
-- Table structure for table `TEST`
--

CREATE TABLE `TEST` (
  `fID` int NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `WORK`
--

CREATE TABLE `WORK` (
  `fID` int NOT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `WORK`
--

INSERT INTO `WORK` (`fID`, `details`) VALUES
(1, '123qweasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AWARDS`
--
ALTER TABLE `AWARDS`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `flashNews`
--
ALTER TABLE `flashNews`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `QUALIFICATION`
--
ALTER TABLE `QUALIFICATION`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `TEST`
--
ALTER TABLE `TEST`
  ADD PRIMARY KEY (`fID`);

--
-- Indexes for table `WORK`
--
ALTER TABLE `WORK`
  ADD PRIMARY KEY (`fID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
