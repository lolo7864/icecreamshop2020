-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 14, 2020 at 04:23 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icecream`
--

-- --------------------------------------------------------

--
-- Table structure for table `addicecream`
--

DROP TABLE IF EXISTS `addicecream`;
CREATE TABLE IF NOT EXISTS `addicecream` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `ingredients` varchar(255) DEFAULT NULL,
  `expirydate` varchar(150) DEFAULT NULL,
  `discount` varchar(150) DEFAULT NULL,
  `calories` varchar(200) DEFAULT NULL,
  `nutrition` varchar(250) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `imagename` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addicecream`
--

INSERT INTO `addicecream` (`id`, `name`, `ingredients`, `expirydate`, `discount`, `calories`, `nutrition`, `price`, `imagename`) VALUES
(7, 'Sorbet Mango Ice Cream', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'top3.jpg'),
(9, 'vanilla', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'top1.jpg'),
(10, 'choco lava', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'top2.jpg'),
(11, 'Mango Ice Cream', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'middle1.jpg'),
(12, 'butter stoch', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'middle3.jpg'),
(13, 'choclate', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'middle2.jpg'),
(14, 'strwaberry', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'lower1.jpg'),
(15, 'vanilla', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'lower2.jpg'),
(16, 'vanilla', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'lower3.jpg'),
(17, 'vanilla', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'lower4.jpg'),
(18, 'vanilla', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'lower5.jpg'),
(19, 'vanilla', 'able cream 2 litres (2 US quarts) Instant skim-milk powder 350 ml (1.5 cups) Sugar 450 ml (2 cups),Gelatin one 7 g (1/4 oz.) pkg Egg one med or large,Vanilla 10 ml (2 teaspons) Calories per 100 g 230', '3-3-2020', '10% Off', '207 calories per 100 grams', 'Total Fat 11 g Cholesterol 44 mg Sodium 80 mg Potassium 199 mg Total Carbohydrate 24 g Protein 3.5 g', '40', 'lower6.jpg'),
(20, 'test icecream', 'test', '10/10/1993', '10', '207 calories per 100 grams', 'test', '40', 'top3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `productid`, `userid`) VALUES
(4, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE IF NOT EXISTS `orderdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `orderid`, `productid`, `quantity`, `rating`, `comment`) VALUES
(24, 16, 7, 2, 5, 'test test test');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `friendName` varchar(255) DEFAULT NULL,
  `friendCountry` varchar(255) DEFAULT NULL,
  `friendRegion` varchar(255) DEFAULT NULL,
  `friendAddress` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `country`, `region`, `friendName`, `friendCountry`, `friendRegion`, `friendAddress`, `notes`, `total`, `date`, `userid`) VALUES
(16, 'test', 'test@gmail.com', 'USA', 'mp', '', '', '', '', '', '80', '2020-04-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(4, NULL, 'test@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
