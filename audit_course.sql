-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 02:11 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audit_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `FNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `RNO` int(11) NOT NULL,
  `EMAILID` varchar(30) NOT NULL,
  `CNAME` varchar(30) NOT NULL,
  `CID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`FNAME`, `MNAME`, `LNAME`, `RNO`, `EMAILID`, `CNAME`, `CID`) VALUES
('Yash', 'Gulab', 'Rathod', 1711044, 'yash.gr@somaiya.edu', 'Machine_Learning', 'UCEC401'),
('Umang', 'Rajesh', 'Savla', 1711046, 'u.savla@somaiya.edu', 'Robotics', 'UCEC405'),
('Aashay', 'Dharmesh', 'Shah', 1711047, 'aashay.shah@somaiya.edu', 'Fundamentals of Python', 'UCEC407');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `sem` int(11) NOT NULL,
  `DEPT` varchar(40) DEFAULT NULL,
  `MIN` int(11) DEFAULT NULL,
  `MAX` int(11) DEFAULT NULL,
  `ALLOTED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `NAME`, `sem`, `DEPT`, `MIN`, `MAX`, `ALLOTED`) VALUES
('UCEC401', 'Machine_Learning', 3, 'Computer_Engineering', NULL, 1, 1),
('UCEC402', 'Android', 3, 'Computer_Engineering', NULL, 1, 0),
('UCEC403', 'Web Programming', 3, 'Information_Technology', NULL, 1, 0),
('UCEC404', 'Javascript', 4, 'Information_Technology', NULL, 1, 0),
('UCEC405', 'Robotics', 4, 'Mechanical_Engineering', NULL, 1, 1),
('UCEC406', 'German', 4, 'Mechanical_Engineering', NULL, 1, 0),
('UCEC407', 'Fundamentals of Python', 5, 'Electronic_and_Telecommunication', NULL, 1, 1),
('UCEC408', 'Django Framework', 5, 'Electronic_and_Telecommunication', NULL, 1, 0),
('UCEC409', 'Eyantra', 5, 'Electronic_Engineering', NULL, 1, 0),
('UCEC410', 'French', 5, 'Electronic_Engineering', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FNAME` varchar(40) DEFAULT NULL,
  `MNAME` varchar(40) DEFAULT NULL,
  `LNAME` varchar(40) DEFAULT NULL,
  `POST` varchar(40) DEFAULT NULL,
  `DEPT` varchar(40) DEFAULT NULL,
  `EDUCATION` varchar(255) DEFAULT NULL,
  `COURSE` varchar(30) NOT NULL,
  `EMAILID` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FNAME`, `MNAME`, `LNAME`, `POST`, `DEPT`, `EDUCATION`, `COURSE`, `EMAILID`) VALUES
('Anjali', 'Santoshkumar', 'Chachra', 'Assistant Professor', 'Computer_Engineering', 'Master of Engineering-Computer Engineering, Bachelor of Engineering-Information Technology', 'Android', 'fac2android@somaiya.edu'),
('Rupali', 'Pankaj', 'Patil', 'Assistant Professor', 'Electronic_and_Telecommunication', 'Master of Engineering-Electronic Engineering, Bachelor of Engineering-Electronic and Telecommuincation', 'Django Framewrok', 'fac7df@somaiya.edu'),
('Parul', 'Viresh', 'Sindhwad', 'Assistant Professor', 'Electronic_Engineering', 'Master of Engineering-Electronic and Telecommuincation, Bachelor of Engineering-Electronic and Telecommuincation', 'E-Yantra', 'fac9eyantra@somaiya.edu'),
('Deepa', ' ', 'Jain', 'Assistant Professor', 'Electronic_Engineering', 'Master of Engineering-Embedded System, Bachelor of Engineering-Information Technology', 'French', 'fac10french@somaiya.edu'),
('Ruchira', 'A', 'Jadhav', 'Associate Professor', 'Electronic_and_Telecommuincation', 'Master of Engineering-Electrical Engineering, Bachelor of Engineering-Electronic and Telecommuincation', 'Fundamentals of Python', 'fac8fop@somaiya.edu'),
('Chithra', 'Biju', 'Menon', 'Assistant Professor', 'Mechanical_Engineering', 'Bachelor of Engineering-Mechanical Engineering', 'German', 'fac6ger@somaiya.edu'),
('Sagar', 'Damodarrao', 'Korde', 'Assistant Professor', 'Information_Technology', 'Master of Engineering-Computer Engineering, Bachelor of Engineering-Information Technology', 'Javasvript', 'fac4javascr@somaiya.edu'),
('Mansi', 'Manoj', 'Kambli', 'Assistant Professor', 'Computer_Engineering', 'Master of Engineering-Computer Engineering, Bachelor of Engineering-Electronics', 'Machine Learning', 'fac1ml@somaiya.edu'),
('Kashinath', 'Nimba', 'Patil', 'Professor', 'Mechanical_Engineering', 'Master of Engineering-Energy Sciences, Bachelor of Engineering-Mechanical Engineering', 'Robotics', 'fac5robo@somaiya.edu'),
('Ravindra', ' ', 'Divakar', 'Associate Professor', 'Information_Technology', 'Master of Science-Computer Science, Bachelor of Engineering-Electronics and Telecommunication', 'Web Programming', 'fac3wp@somaiya.edu');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `FNAME` varchar(30) DEFAULT NULL,
  `MNAME` varchar(30) DEFAULT NULL,
  `LNAME` varchar(30) DEFAULT NULL,
  `DEPT` varchar(40) NOT NULL,
  `EDUCATION` varchar(255) DEFAULT NULL,
  `EMAILID` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`FNAME`, `MNAME`, `LNAME`, `DEPT`, `EDUCATION`, `EMAILID`) VALUES
('Deepak', 'H', 'Sharma', 'Computer_Engineering', NULL, 'hod_comp@somaiya.edu'),
('Ameya', 'K', 'Naik', 'Electronic_and_Telecommunication', NULL, 'hod_extc@somaiya.edu'),
('Jagannath', 'A', 'Nirmal', 'Electronic_Engineering', NULL, 'hod_etrx@somaiya.edu'),
('Irfan', 'A', 'Siddavatam', 'Information_Technology', NULL, 'hod_it@somaiya.edu'),
('Ramesh', 'R', 'Lekurwale', 'Mechanical_Engineering', NULL, 'hod_mech@somaiya.edu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `EMAILID` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL,
  `ROLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EMAILID`, `PASSWORD`, `ROLE`) VALUES
('aashay.shah@somaiya.edu', 'aashayshah', 'student'),
('admin@somaiya.edu', 'admin', 'admin'),
('advaith.m@somaiya.edu', 'advaithmahesh', 'student'),
('anisha.sinha@somaiya.edu', 'anishasinha', 'student'),
('anvil.m@somaiya.edu', 'anvilmahajan', 'student'),
('dharmil.shah@somaiya.edu', 'dharmilshah', 'student'),
('dheer.k@somaiya.edu', 'dheerkachalia', 'student'),
('fac10french@somaiya.edu', 'french', 'faculty'),
('fac1ml@somaiya.edu', 'machinelearn', 'faculty'),
('fac2android@somaiya.edu', 'android', 'faculty'),
('fac3wp@somaiya.edu', 'webprogram', 'faculty'),
('fac4javascr@somaiya.edu', 'javascript', 'faculty'),
('fac5robo@somaiya.edu', 'robotics', 'faculty'),
('fac6ger@somaiya.edu', 'german', 'faculty'),
('fac7df@somaiya.edu', 'django', 'faculty'),
('fac8fop@somaiya.edu', 'python', 'faculty'),
('fac9eyantra@somaiya.edu', 'eyantra', 'faculty'),
('harsh.vasa@somaiya.edu', 'harshvasa', 'student'),
('hitamnsh.mehta@somaiya.edu', 'hitanshmehta', 'student'),
('hod_comp@somaiya.edu', 'computer', 'hod'),
('hod_etrx@somaiya.edu', 'electronic', 'hod'),
('hod_extc@somaiya.edu', 'telecommunication', 'hod'),
('hod_it@somaiya.edu', 'informationtech', 'hod'),
('hod_mech@somaiya.edu', 'mechanical', 'hod'),
('kinnari.tanna@somaiya.edu', 'kinnaritanna', 'student'),
('mohill.k@somaiya.edu', 'mohillkhona', 'student'),
('nipun.shah@somaiya.edu', 'nipunshah', 'student'),
('prithvi.shah@somaiya.edu', 'prithvishah', 'student'),
('priyam.j@somaiya.edu', 'priyamjain', 'student'),
('rahil.thakker@somaiya.edu', 'rahilthakker', 'student'),
('saiyam.shah@somaiya.edu', 'saiyamshah', 'student'),
('shakshi.g@somaiya.edu', 'shakshigandhi', 'student'),
('tirth.jhaveri@somaiya.edu', 'tirthjhaveri', 'student'),
('u.savla@somaiya.edu', 'umangsavla', 'student'),
('vraj.b@somaiya.edu', 'vrajb', 'student'),
('yash.gr@somaiya.edu', 'yashrathod', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `FNAME` varchar(30) DEFAULT NULL,
  `MNAME` varchar(30) DEFAULT NULL,
  `LNAME` varchar(30) DEFAULT NULL,
  `RNO` int(11) NOT NULL,
  `PREF1` varchar(40) DEFAULT NULL,
  `PREF2` varchar(40) DEFAULT NULL,
  `PREF3` varchar(40) DEFAULT NULL,
  `EMAILID` varchar(40) DEFAULT NULL,
  `TIME` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`FNAME`, `MNAME`, `LNAME`, `RNO`, `PREF1`, `PREF2`, `PREF3`, `EMAILID`, `TIME`) VALUES
('Yash', 'Gulab', 'Rathod', 1711044, 'UCEC401', 'UCEC402', 'UCEC403', 'yash.gr@somaiya.edu', '2019-11-09 15:49:36'),
('Umang', 'Rajesh', 'Savla', 1711046, 'UCEC405', 'UCEC404', 'UCEC406', 'u.savla@somaiya.edu', '2019-11-09 15:50:08'),
('Aashay', 'Dharmesh', 'Shah', 1711047, 'UCEC401', 'UCEC402', 'UCEC403', 'aashay.shah@somaiya.edu', '2019-11-12 13:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `student_detail`
--

CREATE TABLE `student_detail` (
  `FNAME` varchar(30) DEFAULT NULL,
  `MNAME` varchar(30) DEFAULT NULL,
  `LNAME` varchar(30) DEFAULT NULL,
  `RNO` varchar(10) NOT NULL,
  `DEPT` varchar(100) DEFAULT NULL,
  `EMAILID` varchar(40) DEFAULT NULL,
  `currsem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_detail`
--

INSERT INTO `student_detail` (`FNAME`, `MNAME`, `LNAME`, `RNO`, `DEPT`, `EMAILID`, `currsem`) VALUES
('Yash', 'Gulab', 'Rathod', '1711044', 'Computer Engineering', 'yash.gr@somaiya.edu', 3),
('Umang', 'Rajesh', 'Savla', '1711046', 'Computer Engineering', 'u.savla@somaiya.edu', 3),
('Aashay', 'Dharmesh', 'Shah', '1711047', 'Computer Engineering', 'aashay.shah@somaiya.edu', 3),
('Prithvi', 'Vipul', 'Shah', '1711052', 'Computer Engineering', 'prithvi.shah@somaiya.edu', 3),
('Vraj', 'Aniruddh', 'Brahmbhatt', '1712007', 'Electronic Engineering', 'vraj.b@somaiya.edu', 3),
('Nipun', 'Sanjay', 'Shah', '1712050', 'Electronic Engineering', 'nipun.shah@somaiya.edu', 3),
('Rahil', 'Binal', 'Thakker', '1712059', 'Electronic Engineering', 'rahil.thakker@somaiya.edu', 3),
('Mohill', 'Mayur', 'Khona', '1712087', 'Electronic Engineering', 'mohill.k@somaiya.edu', 3),
('Saiyam', 'Nimesh', 'Shah', '1713115', 'Electronic and Telecommunication Engineering', 'saiyam.shah@somaiya.edu', 3),
('Advaith', ' ', 'Mahesh', '1714003', 'Information Technology', 'advaith.m@somaiya.edu', 3),
('Shakshi', 'Alkesh', 'Gandhi', '1714018', 'Information Technology', 'shakshi.g@somaiya.edu', 3),
('Priyam', 'Manojkumar', 'Jain', '1714022', 'Information Technology', 'priyam.j@somaiya.edu', 3),
('Harsh', 'Paras', 'Vasa', '1714062', 'Information Technology', 'harsh.vasa@somaiya.edu', 3),
('Tirth', 'Jignesh', 'Jhaveri', '1715093', 'Mechanical Engineering', 'tirth.jhaveri@somaiya.edu', 3),
('Dheer', 'Apurva', 'Kachalia', '1715094', 'Mechanical Engineering', 'dheer.k@somaiya.edu', 3),
('Anvil', 'Vijay', 'Mahajan', '1715101', 'Mechanical Engineering', 'anvilm@somaiya.edu', 3),
('Hitansh', 'Sanjay', 'Mehta', '1715103', 'Mechanical Engineering', 'hitasnh.mehta@somaiya.edu', 3),
('Dharmil', 'Vipul', 'Shah', '1715112', 'Electronic and Telecommunication Engineering', 'dharmil.shah@somaiya.edu', 3),
('Kinnari', 'Manoj', 'Tanna', '1715119', 'Electronic and Telecommunication Engineering', 'kinnari.tanna@somaiya.edu', 3),
('Anisha', ' ', 'Sinha', '1715125', 'Electronic and Telecommunication Engineering', 'anisha.sinha@somaiya.edu', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotment`
--
ALTER TABLE `allotment`
  ADD UNIQUE KEY `RNO` (`RNO`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`,`NAME`),
  ADD UNIQUE KEY `NAME` (`NAME`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`COURSE`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`DEPT`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`EMAILID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`RNO`),
  ADD UNIQUE KEY `EMAILID` (`EMAILID`);

--
-- Indexes for table `student_detail`
--
ALTER TABLE `student_detail`
  ADD PRIMARY KEY (`RNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
