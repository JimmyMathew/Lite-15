-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2015 at 02:32 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lite`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
`id` int(10) NOT NULL,
  `amount` int(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `amount`, `balance`) VALUES
(1, 15000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
`id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `add1` varchar(200) NOT NULL,
  `add2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pin` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `add1`, `add2`, `city`, `pin`) VALUES
(4, ' Stella Maris', ' Chinnababu St', ' Nammalwarpet', ' Chennai', 600012),
(5, ' Loyola College', ' No-34', ' Nungambakkam', ' Chennai', 600034);

-- --------------------------------------------------------

--
-- Table structure for table `event1`
--

CREATE TABLE IF NOT EXISTS `event1` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event1`
--

INSERT INTO `event1` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`, `event`) VALUES
(1, 'fas', 'a', 'b', 'c', 'd', 'c', 'Web Designing'),
(2, 'feafqwaf', 'a', 'b', 'c', 'd', 'a', 'Web Designing'),
(3, 'fdsd', 'ji', 'mo', 'fds', 'fsd', 'mo', 'Web Designing'),
(4, 'safsa', 'a', 'b', 'c', 'd', 'd', 'Web Designing'),
(5, 'fsa', 'fds', 'sdf', 'dfs', 'fsd', 'fsd', 'Web Designing'),
(6, 'fds', 'fds', 'fds', 'fds', 'fds', 'fds', 'Web Designing'),
(7, 'gfd', 'hf', 'tr', 'rt', 'tr', 'tr', 'Web Designing'),
(8, 'hfds', 'hfs', 'hgr', 'rhr', 'rht', 'rhr', 'Web Designing'),
(9, 'fda', 'dsf', 'fds', 'wq', 'dwq', 'dsf', 'Web Designing'),
(10, 'feafqwaffew', 'fwe', 'few', 'w', 'fwe', 'fwe', 'Web Designing'),
(11, 'vwe', 'fweg', 'gew', 'gwe', 'gwe', 'fweg', 'Web Designing'),
(12, 'jh', 'ku', 'ty', 'yut', 'yut', 'yut', 'Web Designing'),
(13, 'hrt', 'tw', 'q', 'eq', 'qe', 'tw', 'Web Designing'),
(14, 'vdsa', 'qfw', 'fwe', 'fwe', 'fwe', 'qfw', 'Web Designing'),
(15, 'jfj', 'he', 'er', 'her', 'hre', 'her', 'Web Designing'),
(16, 'few', 'wef', 'ew', 'ewd', 'dedew', 'ew', 'Web Designing'),
(17, 'fwe', 'EWQ', 'WS', 'ss', 's', 'EWQ', 'Web Designing'),
(18, 'yam', '1', '2', '3', '4', '1', 'Web Designing'),
(19, 'fsad', '2r', 'erw', 'rew', 'rwe', 'erw', 'Web Designing'),
(20, 'weg', 'fw', 'few', 'few', 'e2', 'few', 'Web Designing'),
(21, 'few', 'Ewq', 'dewq', 'dqw', 'wqde', 'wqde', 'Web Designing'),
(22, 'wqdfwq', 'eqwe', 'fsdfa', 'dasd', 'asdas', 'dasd', 'Web Designing'),
(23, 'yrhebsdva', 'csacas', 'csa', 'csacevw', 'wsbw', 'csa', 'Web Designing'),
(24, 't5jt', 'fef', 'reqr', 'reqrq', 'rqwerq', 'fef', 'Web Designing'),
(25, 'rwgw3r', 'gwrgwe', 'gwgwgw', 'gwgw', 'gwgwe', 'gwgwgw', 'Web Designing'),
(26, 'ijrtrhh', 'egerger', 'gregq', 'gregre', 'regreqgeqr', 'gregre', 'Web Designing'),
(27, 'ynnd', 'bfdbda', 'fdbd', 'fdgd', 'gassa', 'fdgd', 'Web Designing'),
(28, 'few', 'f', 'gregq', 'ges', 'we', 'ges', 'Web Designing'),
(29, 'hreheh', 'regqegre', 'gre', 'greq', 'greq', 'gre', 'Web Designing'),
(30, 'fdweh', 'heq', 'herq', 'geqr', 'gqree', 'geqr', 'Web Designing');

-- --------------------------------------------------------

--
-- Table structure for table `event2`
--

CREATE TABLE IF NOT EXISTS `event2` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event2`
--

INSERT INTO `event2` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`, `event`) VALUES
(1, 'fas', 'a', 'b', 'c', 'd', 'c', 'Quiz'),
(2, 'feafqwaf', 'a', 'b', 'c', 'd', 'a', 'Quiz'),
(3, 'fdsd', 'ji', 'mo', 'fds', 'fsd', 'mo', 'Quiz'),
(4, 'safsa', 'a', 'b', 'c', 'd', 'd', 'Quiz'),
(5, 'fsa', 'fds', 'sdf', 'dfs', 'fsd', 'fsd', 'Quiz'),
(6, 'fds', 'fds', 'fds', 'fds', 'fds', 'fds', 'Quiz'),
(7, 'gfd', 'hf', 'tr', 'rt', 'tr', 'tr', 'Quiz'),
(8, 'hfds', 'hfs', 'hgr', 'rhr', 'rht', 'rhr', 'Quiz'),
(9, 'fda', 'dsf', 'fds', 'wq', 'dwq', 'dsf', 'Quiz'),
(10, 'feafqwaffew', 'fwe', 'few', 'w', 'fwe', 'fwe', 'Quiz'),
(11, 'vwe', 'fweg', 'gew', 'gwe', 'gwe', 'fweg', 'Quiz'),
(12, 'jh', 'ku', 'ty', 'yut', 'yut', 'yut', 'Quiz'),
(13, 'hrt', 'tw', 'q', 'eq', 'qe', 'tw', 'Quiz'),
(14, 'vdsa', 'qfw', 'fwe', 'fwe', 'fwe', 'qfw', 'Quiz'),
(15, 'jfj', 'he', 'er', 'her', 'hre', 'her', 'Quiz'),
(16, 'few', 'wef', 'ew', 'ewd', 'dedew', 'ew', 'Quiz'),
(17, 'fwe', 'EWQ', 'WS', 'ss', 's', 'EWQ', 'Quiz'),
(18, 'sa', 'sa', 'sa', 'sa', 's', 's', 'Quiz'),
(19, 'fsad', '2r', 'erw', 'rew', 'rwe', 'erw', 'Quiz'),
(20, 'weg', 'fw', 'few', 'few', 'e2', 'few', 'Quiz'),
(21, 'yam', '1', '2', '3', '4', '2', 'Quiz'),
(22, 'wqdfwq', 'eqwe', 'fsdfa', 'dasd', 'asdas', 'dasd', 'Quiz'),
(23, 'yrhebsdva', 'csacas', 'csa', 'csacevw', 'wsbw', 'csa', 'Quiz'),
(24, 't5jt', 'fef', 'reqr', 'reqrq', 'rqwerq', 'fef', 'Quiz'),
(25, 'rwgw3r', 'gwrgwe', 'gwgwgw', 'gwgw', 'gwgwe', 'gwgwgw', 'Quiz'),
(26, 'ijrtrhh', 'egerger', 'gregq', 'gregre', 'regreqgeqr', 'gregre', 'Quiz'),
(27, 'ynnd', 'bfdbda', 'fdbd', 'fdgd', 'gassa', 'fdgd', 'Quiz'),
(28, 'few', 'f', 'gregq', 'ges', 'we', 'ges', 'Quiz'),
(29, 'hreheh', 'regqegre', 'gre', 'greq', 'greq', 'gre', 'Quiz'),
(30, 'fdweh', 'heq', 'herq', 'geqr', 'gqree', 'geqr', 'Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `event3`
--

CREATE TABLE IF NOT EXISTS `event3` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event3`
--

INSERT INTO `event3` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`, `event`) VALUES
(1, 'fas', 'a', 'b', 'c', 'd', 'c', 'Reverse Coding'),
(2, 'feafqwaf', 'a', 'b', 'c', 'd', 'a', 'Reverse Coding'),
(3, 'fdsd', 'ji', 'mo', 'fds', 'fsd', 'mo', 'Reverse Coding'),
(4, 'safsa', 'a', 'b', 'c', 'd', 'd', 'Reverse Coding'),
(5, 'fsa', 'fds', 'sdf', 'dfs', 'fsd', 'fsd', 'Reverse Coding'),
(6, 'fds', 'fds', 'fds', 'fds', 'fds', 'fds', 'Reverse Coding'),
(7, 'gfd', 'hf', 'tr', 'rt', 'tr', 'tr', 'Reverse Coding'),
(8, 'hfds', 'hfs', 'hgr', 'rhr', 'rht', 'rhr', 'Reverse Coding'),
(9, 'fda', 'dsf', 'fds', 'wq', 'dwq', 'dsf', 'Reverse Coding'),
(10, 'feafqwaffew', 'fwe', 'few', 'w', 'fwe', 'fwe', 'Reverse Coding'),
(11, 'vwe', 'fweg', 'gew', 'gwe', 'gwe', 'fweg', 'Reverse Coding'),
(12, 'jh', 'ku', 'ty', 'yut', 'yut', 'yut', 'Reverse Coding'),
(13, 'hrt', 'tw', 'q', 'eq', 'qe', 'tw', 'Reverse Coding'),
(14, 'vdsa', 'qfw', 'fwe', 'fwe', 'fwe', 'qfw', 'Reverse Coding'),
(15, 'jfj', 'he', 'er', 'her', 'hre', 'her', 'Reverse Coding'),
(16, 'few', 'wef', 'ew', 'ewd', 'dedew', 'ew', 'Reverse Coding'),
(17, 'fwe', 'EWQ', 'WS', 'ss', 's', 'EWQ', 'Reverse Coding'),
(18, 'sa', 'sa', 'sa', 'sa', 's', 's', 'Reverse Coding'),
(19, 'fsad', '2r', 'erw', 'rew', 'rwe', 'erw', 'Reverse Coding'),
(20, 'weg', 'fw', 'few', 'few', 'e2', 'few', 'Reverse Coding'),
(21, 'few', 'Ewq', 'dewq', 'dqw', 'wqde', 'wqde', 'Reverse Coding'),
(22, 'wqdfwq', 'eqwe', 'fsdfa', 'dasd', 'asdas', 'dasd', 'Reverse Coding'),
(23, 'yrhebsdva', 'csacas', 'csa', 'csacevw', 'wsbw', 'csa', 'Reverse Coding'),
(24, 't5jt', 'fef', 'reqr', 'reqrq', 'rqwerq', 'fef', 'Reverse Coding'),
(25, 'rwgw3r', 'gwrgwe', 'gwgwgw', 'gwgw', 'gwgwe', 'gwgwgw', 'Reverse Coding'),
(26, 'ijrtrhh', 'egerger', 'gregq', 'gregre', 'regreqgeqr', 'gregre', 'Reverse Coding'),
(27, 'ynnd', 'bfdbda', 'fdbd', 'fdgd', 'gassa', 'fdgd', 'Reverse Coding'),
(28, 'few', 'f', 'gregq', 'ges', 'we', 'ges', 'Reverse Coding'),
(29, 'hreheh', 'regqegre', 'gre', 'greq', 'greq', 'gre', 'Reverse Coding'),
(30, 'fdweh', 'heq', 'herq', 'geqr', 'gqree', 'geqr', 'Reverse Coding');

-- --------------------------------------------------------

--
-- Table structure for table `event4`
--

CREATE TABLE IF NOT EXISTS `event4` (
  `id` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event4`
--

INSERT INTO `event4` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`, `event`) VALUES
(1, 'fas', 'a', 'b', 'c', 'd', 'c', 'Software Marketing'),
(2, 'feafqwaf', 'a', 'b', 'c', 'd', 'a', 'Software Marketing'),
(3, 'fdsd', 'ji', 'mo', 'fds', 'fsd', 'mo', 'Software Marketing'),
(4, 'safsa', 'a', 'b', 'c', 'd', 'd', 'Software Marketing'),
(5, 'fsa', 'fds', 'sdf', 'dfs', 'fsd', 'fsd', 'Software Marketing'),
(6, 'fds', 'fds', 'fds', 'fds', 'fds', 'fds', 'Software Marketing'),
(7, 'gfd', 'hf', 'tr', 'rt', 'tr', 'tr', 'Software Marketing'),
(8, 'hfds', 'hfs', 'hgr', 'rhr', 'rht', 'rhr', 'Software Marketing'),
(9, 'fda', 'dsf', 'fds', 'wq', 'dwq', 'dsf', 'Software Marketing'),
(10, 'feafqwaffew', 'fwe', 'few', 'w', 'fwe', 'fwe', 'Software Marketing'),
(11, 'vwe', 'fweg', 'gew', 'gwe', 'gwe', 'fweg', 'Software Marketing'),
(12, 'jh', 'ku', 'ty', 'yut', 'yut', 'yut', 'Software Marketing'),
(13, 'hrt', 'tw', 'q', 'eq', 'qe', 'tw', 'Software Marketing'),
(14, 'vdsa', 'qfw', 'fwe', 'fwe', 'fwe', 'qfw', 'Software Marketing'),
(15, 'jfj', 'he', 'er', 'her', 'hre', 'her', 'Software Marketing'),
(16, 'few', 'wef', 'ew', 'ewd', 'dedew', 'ew', 'Software Marketing'),
(17, 'yam', '1', '2', '3', '4', '1', 'Software Marketing'),
(18, 'sa', 'sa', 'sa', 'sa', 's', 's', 'Software Marketing'),
(19, 'fsad', '2r', 'erw', 'rew', 'rwe', 'erw', 'Software Marketing'),
(20, 'weg', 'fw', 'few', 'few', 'e2', 'few', 'Software Marketing'),
(21, 'few', 'Ewq', 'dewq', 'dqw', 'wqde', 'wqde', 'Software Marketing'),
(22, 'wqdfwq', 'eqwe', 'fsdfa', 'dasd', 'asdas', 'dasd', 'Software Marketing'),
(23, 'yrhebsdva', 'csacas', 'csa', 'csacevw', 'wsbw', 'csa', 'Software Marketing'),
(24, 't5jt', 'fef', 'reqr', 'reqrq', 'rqwerq', 'fef', 'Software Marketing'),
(25, 'rwgw3r', 'gwrgwe', 'gwgwgw', 'gwgw', 'gwgwe', 'gwgwgw', 'Software Marketing'),
(26, 'ijrtrhh', 'egerger', 'gregq', 'gregre', 'regreqgeqr', 'gregre', 'Software Marketing'),
(27, 'ynnd', 'bfdbda', 'fdbd', 'fdgd', 'gassa', 'fdgd', 'Software Marketing'),
(28, 'few', 'f', 'gregq', 'ges', 'we', 'ges', 'Software Marketing'),
(29, 'hreheh', 'regqegre', 'gre', 'greq', 'greq', 'gre', 'Software Marketing'),
(30, 'fdweh', 'heq', 'herq', 'geqr', 'gqree', 'geqr', 'Software Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
`id` int(50) NOT NULL,
  `date` date NOT NULL,
  `expense` varchar(200) NOT NULL,
  `cost` int(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `date`, `expense`, `cost`, `category`, `imgpath`) VALUES
(1, '2015-09-15', 'Hall', 5000, 'decoration', '1443413874_1362918763_palani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
`id` int(11) NOT NULL,
  `team` varchar(50) NOT NULL,
  `member1` varchar(50) NOT NULL,
  `member2` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `points` varchar(50) NOT NULL,
  `score` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `team`, `member1`, `member2`, `type`, `username`, `password`, `points`, `score`) VALUES
(84, ' Jimmy Mathew', '', '', 'Administrator', 'jimmy', 'jimmy', '4', 0),
(86, ' Sharon Mary Barron ', '', '', 'Administrator', 'sharon', 'sharon', '', 0),
(87, ' Praveen Kumar', '', '', 'Administrator', 'praveen', 'praveen', '', 0),
(91, ' Vijaya Peter Raj', '', '', 'Staff', 'vijaya', 'vijaya', '', 0),
(92, ' Alex', '', '', 'Staff', 'alex', 'alex', '', 0),
(93, ' Kanageswari', '', '', 'Staff', 'kanageswari', 'kanageswari', '', 0),
(94, ' Joshua', '', '', 'Registration', 'joshua', 'joshua', '', 0),
(95, ' Suresh', '', '', 'Registration', 'suresh', 'suresh', '', 0),
(99, ' HYGIN', '', '', 'Administrator', 'hu', 'hu', '', 0),
(100, 'test', '  Nimesh Nirmal Choudhary U', '  Hyginus Fernandez B', 'Reverse Coding', 'rev01', 'rev01', '2', 45),
(101, 'blah', '  Dominic Rodriguz', '  Gowtham L', 'Quiz', 'q1', 'q1', '0', 30),
(103, 'ymc', '  Jithendar S', '  Gowtham L', 'Quiz', 're', 'wq', '', 0),
(104, 'dqoiw', '  Nimesh Nirmal Choudhary U', '  Siva Kumar', 'Software Marketing', 'ewf', 'fw', '', 35),
(105, 'loyola', '  Dominic Rodriguz', '  Gowtham L', 'Web Design', 're', 'tre', '3', 25),
(107, ' Kevin', '', '', 'Documentation', 'kevin', 'kevin', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(50) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `event`) VALUES
(101, 'Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `event1` varchar(50) NOT NULL,
  `event2` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `college`, `email`, `mobile`, `event1`, `event2`) VALUES
(50, ' Nimesh Nirmal Choudhary U', 'Pondicherry University', 'nimesh24@gmail.com', '9840882166', 'Web Design', 'Stress Interview'),
(52, ' Gowtham L', 'Madras University', 'gow@refiffmail.com', '8634567453', 'Quiz', 'Mobile Application'),
(53, ' Jithendar S', 'DG Vaishnva College', 'jithu@gmail.com', '9600345676', 'Quiz', 'Mobile Application'),
(54, ' Dominic Rodriguz', 'Madras University', 'dominic@gmail.com', '984567876', 'Reverse Coding', 'Gaming'),
(55, ' Siva Kumar', 'DG Vaishnva College', 'siva@gmail.com', '8765897656', 'Software Marketing', 'Gaming'),
(56, ' jimmy', 'loyola', 'sdds', '523432', 'Mobile Application', 'Gaming');

-- --------------------------------------------------------

--
-- Table structure for table `rev_coding`
--

CREATE TABLE IF NOT EXISTS `rev_coding` (
  `id` int(50) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rev_coding`
--

INSERT INTO `rev_coding` (`id`, `event`) VALUES
(100, 'Reverse'),
(100, 'Reverse');

-- --------------------------------------------------------

--
-- Table structure for table `swmarket`
--

CREATE TABLE IF NOT EXISTS `swmarket` (
  `id` int(50) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swmarket`
--

INSERT INTO `swmarket` (`id`, `event`) VALUES
(104, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `web_design`
--

CREATE TABLE IF NOT EXISTS `web_design` (
  `id` int(50) NOT NULL,
  `event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_design`
--

INSERT INTO `web_design` (`id`, `event`) VALUES
(105, 'Web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event1`
--
ALTER TABLE `event1`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `event2`
--
ALTER TABLE `event2`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `event3`
--
ALTER TABLE `event3`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `event4`
--
ALTER TABLE `event4`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
