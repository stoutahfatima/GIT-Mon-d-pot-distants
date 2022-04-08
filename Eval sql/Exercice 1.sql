
-Database: `clicom`



-- Table structure for table `client`


CREATE TABLE IF NOT EXISTS `client` (
  `cli_num` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cli_nom` varchar(50) NOT NULL,,
  `cli_adresse` varchar(50) NOT NULL,
  `cli_tel` varchar(30) NOT NULL
)

-- --------------------------------------------------------


-- Table structure for table `commande`


CREATE TABLE IF NOT EXISTS `commande` (
  `com_num` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `cli_num` int(11) NOT NULL ,
  `com_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `com_obs` varchar(50) NOT NULL,
  FOREIGN KEY (`com_num`) REFERENCES `commande` (`com_num`),
)

-- --------------------------------------------------------


-- Table structure for table `est_compose`


CREATE TABLE IF NOT EXISTS `est_compose` (
  `com_num` int(11) NOT NULL PRIMARY KEY,
  `pro_num` int(11) NOT NULL ,
  `est_qte` int(11) NOT NULL ,
   FOREIGN KEY (`com_num`) REFERENCES `commande` (`com_num`),
   FOREIGN KEY (`pro_num`) REFERENCES `produit` (`pro_num`)
)

-- --------------------------------------------------------


-- Table structure for table `produit`


CREATE TABLE IF NOT EXISTS `produit` (
  `pro_num` int(11) NOT NULL AUTO_INCREMENT  PRIMARY KEY ,
  `pro_libelle` varchar(50) NOT NULL,
  `pro_description` varchar(50) NOT NULL,
 
)

2) creation index

CREATE INDEX index_1 ON client(cli_nom); 
