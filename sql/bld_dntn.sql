-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2017 at 07:24 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-1~dotdeb+8.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bld_dntn`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `town` varchar(20) DEFAULT NULL,
  `state` varchar(30) NOT NULL DEFAULT 'Madhya Pradesh',
  `lastdate` timestamp NOT NULL DEFAULT '2016-12-31 18:30:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `username`, `password`, `fullname`, `dob`, `sex`, `bloodgroup`, `mobile`, `email`, `town`, `state`, `lastdate`) VALUES
(2, 'Naruto', '21232f297a57a5a743894a0e4a801fc3', 'Utkarsh Utsav', '1997-05-03', 'male', 'O pos', 9431229986, 'utk.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(3, 'ashish', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'Ashish Kumar Anshu', '1997-11-09', 'male', 'B pos', 9179103906, 'ashish@gmail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(4, 'Sino', '21232f297a57a5a743894a0e4a801fc3', 'Sushant kr. Sinha', '1996-05-03', 'male', 'A pos', 9434589986, 'Sus.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(5, 'Gaurav', '21232f297a57a5a743894a0e4a801fc3', 'Gaurav Kumar', '1995-03-03', 'male', 'B pos', 9431224986, 'gaurav15@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(7, 'Sino', '21232f297a57a5a743894a0e4a801fc3', 'Sushant kr. Sinha', '1996-05-03', 'male', 'O pos', 9431229986, 'Sus.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(12, 'aman.yadav', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'aman yadav', '1997-11-09', 'male', 'A pos', 7679103906, 'aman.23@gmail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(14, 'Naruto', '21232f297a57a5a743894a0e4a801fc3', 'Utkarsh Utsav', '1997-05-03', 'male', 'O neg', 7412229986, 'utk.3@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(15, 'ashish', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'Ashish sharma', '1997-11-09', 'male', 'A pos', 9179103906, 'ashish.12@gmail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(16, 'sunita', '21232f297a57a5a743894a0e4a801fc3', 'sunita Sinha', '1996-05-03', 'female', 'B neg', 7849229986, 'Sus.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(17, 'mahesh', '21232f297a57a5a743894a0e4a801fc3', 'mahesh Kumar', '1995-03-03', 'male', 'O neg', 9438547986, 'mahesh.1@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(19, 'vishal', '21232f297a57a5a743894a0e4a801fc3', 'vishal kr. Sinha', '1996-05-03', 'male', 'A neg', 7849229986, 'vishal.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(20, 'Nitin', '21232f297a57a5a743894a0e4a801fc3', 'Nitin Kumar', '1997-05-03', 'male', 'B neg', 9431229986, 'nitin.45@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(21, 'ashish', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'Ashish Kumar', '1997-11-09', 'male', 'AB pos', 9100003906, 'ashish@gmail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(22, 'akash', '21232f297a57a5a743894a0e4a801fc3', 'akash kumar', '1996-05-03', 'male', 'B neg', 7894929986, 'akash.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(23, 'utsav12', '21232f297a57a5a743894a0e4a801fc3', 'Utsav Kumar sharma', '1995-03-03', 'male', 'A neg', 7511229986, 'utk.145@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(25, 'sunil', '21232f297a57a5a743894a0e4a801fc3', 'sunil sinha', '1996-05-03', 'male', 'B neg', 7485729986, 'sunil75@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(26, 'nishant', '21232f297a57a5a743894a0e4a801fc3', 'nishant', '1997-05-03', 'male', 'A neg', 9431229974, 'nishant.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(27, 'ayush', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'ayush kumar', '1997-11-09', 'male', 'A pos', 7489103906, 'ayush.123@mail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(28, 'shaan', '21232f297a57a5a743894a0e4a801fc3', 'shaan mahto', '1997-05-03', 'male', 'A neg', 9431229986, 'shaan.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(30, 'Manish', '21232f297a57a5a743894a0e4a801fc3', 'Manish pandey', '1996-05-03', 'male', 'AB neg', 8831229986, 'Manish.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(31, 'utsav123', '21232f297a57a5a743894a0e4a801fc3', 'Utsav Yadav', '1995-03-03', 'male', 'O neg', 9431229986, 'utk.155@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(33, 'Sushant', '21232f297a57a5a743894a0e4a801fc3', 'Sushant kr. Sinha', '1996-05-03', 'male', 'O neg', 7021229986, 'Sus.1243@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(41, 'utsav', '21232f297a57a5a743894a0e4a801fc3', 'Utsav Kumar', '1995-03-03', 'male', 'AB pos', 9801229986, 'utk.1@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(43, 'Sino', '21232f297a57a5a743894a0e4a801fc3', 'Sushant kr. Sinha', '1996-05-03', 'male', 'AB pos', 9448229986, 'Sus.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(46, 'sachin', '21232f297a57a5a743894a0e4a801fc3', 'sachin kr. Sinha', '1996-05-03', 'male', 'AB pos', 9431229986, 'sachin.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(47, 'manav', '21232f297a57a5a743894a0e4a801fc3', 'manav Kumar', '1995-03-03', 'male', 'AB neg', 7431245986, 'manav@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(50, 'sachin', '21232f297a57a5a743894a0e4a801fc3', 'Sushant kr. yadav', '1996-05-03', 'male', 'AB neg', 9795229986, 'Sus.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(53, 'Deepak', '21232f297a57a5a743894a0e4a801fc3', 'Deepak kr. Sinha', '1996-05-03', 'male', 'AB neg', 7021229986, 'Deepak.123@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(58, 'abhi', '21232f297a57a5a743894a0e4a801fc3', 'abhi kumar', '1995-03-03', 'male', 'AB pos', 7894529986, 'abhi.1@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(59, 'rohit', '2d235ace000a3ad85f590e321c89bb99', 'rohit', '1997-11-11', 'male', 'B pos', 9454724262, 'rohit@gmail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(60, 'rakesh', '2d235ace000a3ad85f590e321c89bb99', 'rakesh', '1997-11-11', 'male', 'B pos', 9004724262, 'rakesh@gmail.com', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(61, 'vaibhav', '310a87565a48526e9d096f917007dbfe', 'vaibhav singh', '1999-04-16', 'male', 'A neg', 9455231681, 'vaibhavsingh@live.in', 'Gwalior', 'Madhya Pradesh', '2016-12-31 18:30:00'),
(62, 'shubhy', '5d3145e1226fd39ee3b3039bfa90c95d', 'Shubham', '1997-11-02', 'male', 'A pos', 8989640853, 'dbkabdj@gmail.com', 'fkjsbi', 'fhsufi', '2016-12-31 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
