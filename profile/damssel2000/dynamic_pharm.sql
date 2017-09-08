-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2017 at 11:39 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dynamic_pharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `SN` int(3) NOT NULL AUTO_INCREMENT,
  `First_Name` char(30) DEFAULT NULL,
  `Middle_Name` char(30) DEFAULT NULL,
  `Last_Name` char(30) DEFAULT NULL,
  `Date_Of_Birth` int(6) DEFAULT NULL,
  `Gender` char(30) DEFAULT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`SN`, `First_Name`, `Middle_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Phone_Number`, `Email`) VALUES
(1, 'Humlat', 'Rejoice', 'Uzo', 29, 'male', '08036515424', 'damssel2000@yahoo.com'),
(2, 'Humlat', 'Rejoice', 'Uzo', 29, 'male', '08036515424', 'damssel2000@yahoo.com'),
(3, 'Humlat', 'Rejoice', 'Uzo', 29, 'male', '08036515424', 'damssel2000@yahoo.com'),
(4, 'Humlat', 'Rejoice', 'Uzo', 29, 'male', '08036515424', 'damssel2000@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `SN` int(3) NOT NULL AUTO_INCREMENT,
  `Product_Name` char(30) DEFAULT NULL,
  `PD_Date` varchar(30) DEFAULT NULL,
  `EXP_Number` int(15) DEFAULT NULL,
  `Price` int(30) DEFAULT NULL,
  `Quantity` int(50) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`SN`, `Product_Name`, `PD_Date`, `EXP_Number`, `Price`, `Quantity`) VALUES
(1, 'Loratid', '02-Jan-2016', 2, 30, 10),
(6, 'Panadol', '02-Jan-2016', 2, 30, 10),
(7, 'Paracetamol', '02-Jan-2016', 2, 30, 20),
(8, 'Ibubrofen', '02-Jan-2016', 2, 30, 30),
(9, 'Coateim', '02-Jan-2016', 2, 30, 40);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(3) NOT NULL AUTO_INCREMENT,
  `First_Name` char(30) NOT NULL,
  `Middle_Name` char(30) DEFAULT NULL,
  `Last_Name` char(30) DEFAULT NULL,
  `Date_Of_Birth` int(6) DEFAULT NULL,
  `Gender` char(30) DEFAULT NULL,
  `Phone_Number` int(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Home_Address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Phone_Number`, `Email`, `Home_Address`) VALUES
(1, 'Cynthia', 'Nkechi', 'Emenike', 29, 'Female', 2147483647, 'damssel2000@yahoo.com', 'Federal_Housing_Kubwa'),
(2, 'Cynthia', 'Nkechi', 'Emenike', 29, 'Female', 2147483647, 'damssel2000@yahoo.com', 'Federal_Housing_Kubwa'),
(3, 'Cynthia', 'Nkechi', 'Emenike', 29, 'Female', 2147483647, 'damssel2000@yahoo.com', 'Federal_Housing_Kubwa'),
(4, 'Cynthia', 'Nkechi', 'Emenike', 29, 'Female', 2147483647, 'damssel2000@yahoo.com', 'Federal_Housing_Kubwa');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `SN` int(3) NOT NULL AUTO_INCREMENT,
  `Supplier_Name` char(30) DEFAULT NULL,
  `Supplier_Address` char(30) DEFAULT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`SN`, `Supplier_Name`, `Supplier_Address`, `Phone_Number`, `Email`) VALUES
(1, 'Glascosmithkline', 'Lekki Lagos', '08188718348', 'damssel2000@yahoo.com'),
(2, 'Emzor', 'Lekki Lagos', '08188718348', 'damssel2000@yahoo.com'),
(3, 'West Drugs', 'Lekki Lagos', '08188718348', 'damssel2000@yahoo.com'),
(4, 'Mooney Pharmacy', 'Lekki Lagos', '08188718348', 'damssel2000@yahoo.com'),
(5, 'GSK', 'Maitama, Abuja', '08188718348', 'damssel2000@gmail.com'),
(6, NULL, NULL, NULL, NULL);
