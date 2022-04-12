--
-- Database: `dbdisc`
--

--
-- Table structure for table `disc`
--

CREATE TABLE IF NOT EXISTS `disc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `année` int(50) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `gender` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
) 

-- --------------------------------------------------------