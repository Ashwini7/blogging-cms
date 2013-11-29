-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2010 at 08:12 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mera_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `blog` (
  `title` varchar(25) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

<html>
	<body> 
		<a href="index.html">Go Blogger Home Page</a>";
	</body>
</html>


--
-- Dumping data for table `blog`
--

/*INSERT INTO `blog` (`title`, `body`) VALUES
('bha', 'bha'),
('Hardik', 'hi this is hardiks first blog....'),
('Vish', 'hi'),
('Ekta', 'Hi this is Ekta Vashishth'),
('Ekta', 'hi dis is ekta... how r u?'),
('Ekta', 'hi i m from abad'),
('Vish', 'hi this is Vish'),
('Vish', 'hi all'),
('BHavin', 'hi this is the first blog '),
('vish', 'hi'),
('vish', 'hi'),
('amit', 'jain');
*/

