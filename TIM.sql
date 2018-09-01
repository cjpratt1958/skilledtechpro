-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipw22.eigbox.net
-- Generation Time: Jul 14, 2018 at 10:24 PM
-- Server version: 5.6.37
-- PHP Version: 4.4.9
-- 
-- Database: `tim_2017`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `Customers`
-- 

CREATE TABLE `Customers` (
  `Cust_ID` int(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `CellPhone` varchar(14) DEFAULT NULL,
  `HomePhone` varchar(14) DEFAULT NULL,
  `WorkPhone` varchar(14) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Terms` varchar(10) DEFAULT NULL,
  `BillsTo` varchar(10) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL,
  `Date` datetime NOT NULL,
  `Discount` int(2) NOT NULL,
  PRIMARY KEY (`Cust_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `Customers`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `Employees`
-- 

CREATE TABLE `Employees` (
  `EMP_ID` int(10) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `CellPhone` varchar(14) DEFAULT NULL,
  `HomePhone` varchar(14) DEFAULT NULL,
  `CellCompany` varchar(50) DEFAULT NULL,
  `Wage` int(10) DEFAULT NULL,
  `Salary` int(10) DEFAULT NULL,
  `Commisions` int(2) DEFAULT NULL,
  `HireDate` date NOT NULL,
  `Termination_Date` date DEFAULT NULL,
  `Supervisor` int(10) NOT NULL,
  `Goal` int(10) NOT NULL,
  `Truck_ID` int(10) DEFAULT NULL,
  PRIMARY KEY (`EMP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `Employees`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `Job`
-- 

CREATE TABLE `Job` (
  `Job_ID` int(10) NOT NULL,
  `Cust_ID` int(10) NOT NULL,
  `Sold_Date` datetime NOT NULL,
  `Disp_Date` datetime NOT NULL,
  `Start_Date` datetime NOT NULL,
  `End_Date` datetime NOT NULL,
  `Close_Date` datetime NOT NULL,
  `Paid_Date` datetime NOT NULL,
  `WorkOrder` int(20) NOT NULL,
  `Technician` varchar(20) NOT NULL,
  `Schedule_Date` date NOT NULL,
  `Schedule_Time` time NOT NULL,
  `JobEstTask` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `Job`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `LineItems`
-- 

CREATE TABLE `LineItems` (
  `Line_ID` int(10) NOT NULL,
  `Task_ID` int(10) NOT NULL,
  `Category` varchar(255) CHARACTER SET hp8 NOT NULL,
  `Name` varchar(255) CHARACTER SET hp8 NOT NULL,
  `Description` text CHARACTER SET hp8 NOT NULL,
  `MatLabEquip` int(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Cost` int(10) NOT NULL,
  `Units` int(10) NOT NULL,
  PRIMARY KEY (`Line_ID`),
  UNIQUE KEY `Category` (`Category`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `LineItems`
-- 

INSERT INTO `LineItems` VALUES (0, 0, '', '', '', 0, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `Tasks`
-- 

CREATE TABLE `Tasks` (
  `Task_ID` int(10) NOT NULL,
  `TaskName` varchar(50) NOT NULL,
  `TaskDescrip` varchar(255) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Hours` int(10) NOT NULL,
  `Material` int(10) NOT NULL,
  PRIMARY KEY (`Task_ID`),
  UNIQUE KEY `Task_ID` (`Task_ID`),
  KEY `Task_ID_2` (`Task_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `Tasks`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `Trucks`
-- 

CREATE TABLE `Trucks` (
  `Truck_ID` int(10) NOT NULL,
  `Emp_ID` int(10) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Year` year(4) NOT NULL,
  `Mileage` int(6) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  PRIMARY KEY (`Truck_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `Trucks`
-- 

