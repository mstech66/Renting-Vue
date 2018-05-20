-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2018 at 01:13 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `model` varchar(10) NOT NULL,
  `no` varchar(15) NOT NULL,
  `time1` varchar(15) NOT NULL,
  `time2` varchar(15) NOT NULL,
  `fare` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`model`, `no`, `time1`, `time2`, `fare`, `address`, `descr`, `image`) VALUES
('Swift', 'GJ27A0527', '03:20', '09:45', 2500, 'Jila Gali, Chunchi F', 'The car is in good condition and should be like that until the renter returns the car. I am looking ', 'cars3.png'),
('Alto', 'GJ23D3823', '00:00', '04:30', 2000, 'Subah Gali, Shaam Ch', 'Renter should not ruin the interior of the car if he/she ruins anything than I will fine him charges', 'asd.jpg'),
('Tesla P100', 'CALIFORNIA', '00:00', '06:00', 1200, 'New Orelans, South S', 'A good P100D in the south street area looking for active renters', 'car1.png'),
('Ciaz', 'GJ08AA2730', '05:25', '10:00', 1200, 'Golden Chokdi', 'A ciaz with good condition. Looking for renters near Unjha to Mehsana.', 'c2.png'),
('Mercedes B', 'GJ24A1081', '11:00', '00:00', 2000, 'Ugamni Sheri, Suthar', 'A Mercedes Benz GLE I want to rent for right now', 'PNGPIX-COM-Brown-Mercedes-Benz-GLE-Coupe-Front-View-Car-PNG-Image.png'),
('Maruti 800', 'GJ27A2730', '00:00', '04:20', 1250, 'Unjha', 'Maruti 800 2012', 'Color_M_800_white-201183616-1.png'),
('some', 'some', '09:45', '10:50', 123, 'some', 'some', 'asd123.jpg'),
('Maruti Nah', 'GJNAHIHAIJA', '11:55', '09:46', 1200, 'Jaldi Gali, Chunchi ', 'Aur batao kya haal hai!', 'i10.png'),
('Renault Du', 'GJ09AA2222', '06:00', '09:01', 1200, 'Patan', 'Must not be damaged!', 'renault.png'),
('Some1', 'Some1', '11:55', '09:45', 1200, 'Somewhere', '123', 'renault-.png'),
('some2', 'some2', '10:50', '11:55', 1200, 'Patan', 'Just go with it!', 'some2.png');

-- --------------------------------------------------------

--
-- Table structure for table `registertwo`
--

CREATE TABLE IF NOT EXISTS `registertwo` (
  `model` varchar(10) NOT NULL,
  `no` varchar(15) NOT NULL,
  `time1` varchar(15) NOT NULL,
  `time2` varchar(15) NOT NULL,
  `fare` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertwo`
--

INSERT INTO `registertwo` (`model`, `no`, `time1`, `time2`, `fare`, `address`, `descr`, `image`) VALUES
('Bike', 'GJ27A1732', '11:00', '12:00', 200, 'Mehsana', 'Good condition', '4.png'),
('Activa 4G', 'GJ47A4746', '11:00', '01:00', 300, 'Unjha', 'Good condition. Ready to be Rented Activa', 'blue-bike.png'),
('Splender', 'GJ10B1080', '11:30', '13:30', 250, 'Unjha', 'Good condition and ready to honk', 'honda_2.png'),
('Pulsar', 'GJ08A1080', '10:01', '11:00', 100, 'Mehsana', 'Good condition and Better Mileage.', 'pulsar.png');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `bdate` varchar(10) NOT NULL,
  `no` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `password`, `email`, `aadhar`, `pan`, `bdate`, `no`, `address`) VALUES
('Manthan Mevada', 'manthan123', 'manthanmevada66@gmail.com', '123456789012', '1234567890', '1998-06-30', '8153965844', 'Ugamni Sheri, Sutharvas, Jagana');
