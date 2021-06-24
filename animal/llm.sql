SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据�? `llm`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `gly` varchar(123) COLLATE utf8_bin NOT NULL,
  `password` varchar(123) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数�?`admin`
--

INSERT INTO `admin` (`id`, `gly`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `send`
--

CREATE TABLE IF NOT EXISTS `send` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) COLLATE utf8_bin NOT NULL,
  `email` varchar(123) COLLATE utf8_bin NOT NULL,
  `subject` varchar(123) COLLATE utf8_bin NOT NULL,
  `phone` varchar(123) COLLATE utf8_bin NOT NULL,
  `message` varchar(123) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;


-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) COLLATE utf8_bin NOT NULL,
  `price` varchar(123) COLLATE utf8_bin NOT NULL,
  `pic` varchar(123) COLLATE utf8_bin NOT NULL,
  `content` varchar(123) COLLATE utf8_bin NOT NULL,
  `username` varchar(123) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数�?`product`
--


-- --------------------------------------------------------

--
-- 表的结构 `yhb`
--

CREATE TABLE IF NOT EXISTS `yhb` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `username` varchar(123) COLLATE utf8_bin NOT NULL,
  `password` varchar(123) COLLATE utf8_bin NOT NULL,
  `tel` varchar(123) COLLATE utf8_bin NOT NULL,
  `email` varchar(123) COLLATE utf8_bin NOT NULL,
  `address` varchar(123) COLLATE utf8_bin NOT NULL,
  `Gender` varchar(123) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数�?`yhb`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
