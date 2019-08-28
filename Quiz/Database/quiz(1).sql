-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 03:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblquiz`
--

CREATE TABLE `tblquiz` (
  `_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) NOT NULL,
  `correctanswer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquiz`
--

INSERT INTO `tblquiz` (`_id`, `question`, `answer1`, `answer2`, `answer3`, `correctanswer`) VALUES
(1, 'Which is the most abundant gas in the earth\'s atmosphere?', 'Helium', 'Hydrogen', 'Carbon-di-oxide', 'Nitrogen'),
(2, 'Which toxic element present in automobile exhausts?', 'Iron', 'Copper', 'Tustin', 'Lead'),
(3, 'Which metal is used in the making of microchips?', 'Lead', 'Copper', 'Tustin', 'Silicon'),
(4, 'What is the toxicity caused by silicon called?', 'Silicon', 'Oxygen', 'Carbon', 'Silicosis'),
(5, 'Which gas evolved from paddy fields and marshes?', 'Hydrogen', 'Carbon-di-oxide', 'Helium', 'Methane');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `repassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `email`, `password`, `repassword`) VALUES
(1, 'charuni', 'charunirathnayake1995@gmail.co', 'fc86cc9a48fcdafefcd01d3f38a7dc', '0724064997'),
(2, 'isuru', 'charunirathnayake1995@gmail.co', 'e10adc3949ba59abbe56e057f20f88', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblquiz`
--
ALTER TABLE `tblquiz`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblquiz`
--
ALTER TABLE `tblquiz`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
