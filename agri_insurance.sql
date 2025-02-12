-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2020 at 12:30 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agri_insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `applying`
--

CREATE TABLE `applying` (
  `id` int(5) NOT NULL,
  `fid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `proof` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `land` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applying`
--

INSERT INTO `applying` (`id`, `fid`, `fname`, `proof`, `account`, `land`, `amnt`, `status`) VALUES
(1, '1', 'admin', 'doctors.sql', 'emp.sql', 'garbage.sql', '10000', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `fregister`
--

CREATE TABLE `fregister` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `land` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fregister`
--

INSERT INTO `fregister` (`id`, `name`, `gender`, `age`, `email`, `phone`, `address`, `zip`, `land`, `uname`, `psw`) VALUES
(1, 'vinoth', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', '620008', 'testing', 'admin', '111'),
(2, 'admin', 'male', '21', 'test@gmail.com', '9087408475', 'trichy', '620008', '2', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `insurence`
--

CREATE TABLE `insurence` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `crop` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurence`
--

INSERT INTO `insurence` (`id`, `name`, `type`, `crop`, `details`, `amnt`) VALUES
(1, 'test', 'tests', 'Wheet', 'test ters and conddtions', '10000 per acr');
