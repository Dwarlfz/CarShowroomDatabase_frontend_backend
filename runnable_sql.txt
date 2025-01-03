-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 06:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMERID` int(11) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PHnum` int(10) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `STATE` varchar(50) NOT NULL,
  `COUNTRY` varchar(50) NOT NULL,
  `POSTALCODE` varchar(10) NOT NULL,
  `Order_id` int(10) NOT NULL,
  `EMPID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMERID`, `Fname`, `Lname`, `Email`, `PHnum`, `CITY`, `STATE`, `COUNTRY`, `POSTALCODE`, `Order_id`, `EMPID`) VALUES
(0, 'radha', 'krishna', 'krishn@gmail.com', 2147483647, '', '', '', '', 1234, 0),
(1, 'John', 'Doe', 'john.doe@example.com', 2147483647, 'New York', 'NY', 'USA', '10001', 101, 568),
(2, 'Jane', 'Doe', 'jane.doe@example.com', 2147483647, 'Los Angeles', 'CA', 'USA', '90001', 102, 583),
(3, 'David', 'Smith', 'david.smith@example.com', 2147483647, 'Chicago', 'IL', 'USA', '60601', 103, 568),
(4, 'Emily', 'Johnson', 'emily.johnson@example.com', 2147483647, 'Houston', 'TX', 'USA', '77001', 105, 586),
(5, 'John', 'Doe', 'john.doe2@example.com', 2147483647, 'New York', 'NY', 'USA', '10001', 104, 568),
(6, 'Jane', 'Doe', 'jane.doe2@example.com', 2147483647, 'Los Angeles', 'CA', 'USA', '90001', 106, 585),
(1212, 'Love', 'Quinn', 'QuinnL99@gmail.com', 1212121212, 'XYZ', 'XYZ', 'ABC', '11889', 10, 600);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Empid` int(4) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` char(3) NOT NULL,
  `PHnum` int(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `Postal code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Fname`, `Lname`, `Empid`, `Position`, `Salary`, `DOB`, `Gender`, `PHnum`, `City`, `State`, `Country`, `Postal code`) VALUES
('Ian', 'Gallager', 567, 'Sales Manager', 266200, '1995-08-08', 'M', 2147483647, 'Bangalore', 'Karnataka', 'India', 560065),
('Fiona', 'Coba', 568, 'Sales Associate', 252890, '1998-09-01', 'F', 2147483647, 'Bangalore', 'Karnataka', 'India', 560065),
('Anita', 'Sharma', 570, 'Finance Manager', 292820, '1987-02-20', 'F', 2147483647, 'Delhi', 'Delhi', 'India', 110001),
('Vikram', 'Singh', 571, 'Service Manager', 319440, '1983-12-10', 'M', 2147483647, 'Chennai', 'Tamil Nadu', 'India', 600001),
('Priya', 'Nair', 572, 'Customer Service Rep', 199650, '1990-03-30', 'F', 2147483647, 'Hyderabad', 'Telangana', 'India', 500001),
('Samir', 'Khan', 573, 'Marketing Manager', 266200, '1989-05-25', 'M', 2147483647, 'Pune', 'Maharashtra', 'India', 411001),
('Aditi', 'Reddy', 576, 'Administrative Assis', 212960, '1992-08-20', 'F', 2147483647, 'Jaipur', 'Rajasthan', 'India', 302001),
('Karan', 'Mehta', 577, 'General Manager', 399300, '1980-01-30', 'M', 2147483647, 'Lucknow', 'Uttar Pradesh', 'India', 226001),
('Sita', 'Choudhury', 578, 'Internet Sales Manag', 279510, '1986-06-18', 'F', 2147483647, 'Nagpur', 'Maharashtra', 'India', 440001),
('Meera', 'Kumar', 580, 'Business Development', 306130, '1988-03-14', 'F', 1098765432, 'Indore', 'Madhya Pradesh', 'India', 452001),
('Alice', 'Smith', 583, 'Sales Associate', 252890, '1995-01-15', 'F', 2147483647, 'Delhi', 'Delhi', 'India', 110001),
('Brian', 'Taylor', 584, 'Sales Associate', 252890, '1993-03-20', 'M', 2147483647, 'Mumbai', 'Maharashtra', 'India', 400001),
('Catherine', 'Johnson', 585, 'Sales Associate', 252890, '1994-05-10', 'F', 2147483647, 'Bangalore', 'Karnataka', 'India', 560001),
('David', 'Williams', 586, 'Sales Associate', 252890, '1992-07-25', 'M', 2147483647, 'Chennai', 'Tamil Nadu', 'India', 600001),
('Eva', 'Brown', 587, 'Sales Associate', 252890, '1996-09-05', 'F', 2147483647, 'Hyderabad', 'Telangana', 'India', 500001),
('Frank', 'Davis', 588, 'Sales Associate', 252890, '1991-11-30', 'M', 2147483647, 'Kolkata', 'West Bengal', 'India', 700001),
('Ivy', 'Martinez', 591, 'Sales Associate', 252890, '1988-06-14', 'F', 1098765432, 'Surat', 'Gujarat', 'India', 395001),
('joe', 'goldberg', 600, 'Sales Associate', 20000, '1997-08-15', 'M', 2147483647, 'LA', 'LA', 'USA', 111893),
('Beck', 'Willks', 601, 'Sales Associate', 25000, '2000-06-01', 'F', 2147483647, 'LA', 'LA', 'USA', 111098);

-- --------------------------------------------------------

--
-- Table structure for table `instock`
--

CREATE TABLE `instock` (
  `carid` int(10) NOT NULL,
  `car name` varchar(40) NOT NULL,
  `car model` varchar(50) NOT NULL,
  `car color` varchar(10) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instock`
--

INSERT INTO `instock` (`carid`, `car name`, `car model`, `car color`, `price`) VALUES
(1, 'Toyota', 'Corolla', 'White', 20000),
(2, 'Honda', 'Civic', 'Black', 22000),
(3, 'Ford', 'Fiesta', 'Blue', 18000),
(4, 'Chevrolet', 'Malibu', 'Red', 25000),
(5, 'BMW', 'X5', 'Black', 60000),
(6, 'Audi', 'A4', 'White', 35000),
(7, 'Tesla', 'Model S', 'Silver', 75000),
(8, 'Mercedes', 'C Class', 'Gray', 55000),
(9, 'Jaguar', 'XF', 'Blue', 70000),
(10, 'Hyundai', 'Elantra', 'Green', 22000),
(11, 'Nissan', 'Altima', 'Black', 26000),
(12, 'Kia', 'Optima', 'White', 24000),
(13, 'Mazda', '6', 'Gray', 23000),
(14, 'Lexus', 'ES', 'Red', 40000),
(15, 'Acura', 'TLX', 'Blue', 37000),
(16, 'Infiniti', 'Q50', 'Silver', 42000),
(17, 'Volvo', 'S60', 'Black', 35000),
(18, 'Alfa Romeo', 'Giulia', 'Green', 43000),
(19, 'Subaru', 'Impreza', 'White', 25000),
(20, 'Volkswagen', 'Passat', 'Blue', 27000),
(21, 'Toyota', 'Camry', 'Silver', 28000),
(22, 'Ford', 'Mustang', 'Yellow', 45000),
(23, 'Chevrolet', 'Impala', 'Red', 32000),
(24, 'BMW', '3 Series', 'Black', 41000),
(25, 'Audi', 'Q7', 'White', 65000),
(26, 'Tesla', 'Model 3', 'Gray', 35000),
(27, 'Mercedes', 'E Class', 'Blue', 67000),
(28, 'Jaguar', 'XE', 'Red', 51000),
(29, 'Hyundai', 'Sonata', 'Green', 23000),
(30, 'Nissan', 'Maxima', 'Silver', 33000),
(31, 'Kia', 'Sorento', 'White', 29000),
(32, 'Mazda', 'CX-5', 'Blue', 27000),
(33, 'Lexus', 'RX', 'Red', 45000),
(34, 'Acura', 'RDX', 'Black', 40000),
(35, 'Infiniti', 'QX60', 'Silver', 50000),
(36, 'Volvo', 'XC90', 'Blue', 62000),
(37, 'Alfa Romeo', 'Stelvio', 'Green', 47000),
(38, 'Subaru', 'Outback', 'White', 32000),
(39, 'Volkswagen', 'Tiguan', 'Gray', 34000),
(40, 'Toyota', 'RAV4', 'Blue', 26000),
(41, 'Ford', 'Explorer', 'Red', 45000),
(42, 'Chevrolet', 'Traverse', 'Black', 37000),
(43, 'BMW', 'X3', 'White', 50000),
(44, 'Audi', 'A6', 'Gray', 56000),
(45, 'Tesla', 'Model X', 'Blue', 80000),
(46, 'Mercedes', 'GLA', 'Silver', 35000),
(47, 'Jaguar', 'F-Pace', 'Black', 62000),
(48, 'Hyundai', 'Tucson', 'Red', 25000),
(49, 'Nissan', 'Rogue', 'Green', 30000),
(50, 'Kia', 'Telluride', 'White', 45000),
(51, 'Tesla', 'Model X', 'Blue', 80000),
(52, 'Ford', 'Fiesta', 'Blue', 18000),
(53, 'Jaguar', 'F-Pace', 'Black', 62000),
(54, 'Ford', 'Mustang', 'Yellow', 45000),
(55, 'Ford', 'Mustang', 'Green', 45000),
(56, 'Tesla', 'Model X', 'Blue', 80000),
(57, 'Tesla', 'Model X', 'Silver', 80000),
(58, 'Jaguar', 'F-Pace', 'Black', 62000),
(59, 'Volkswagen', 'Tiguan', 'Gray', 34000),
(60, 'Volkswagen', 'Tiguan', 'Gray', 34000),
(65, 'Subaru', 'Impreza', 'White', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) NOT NULL,
  `transid` int(10) NOT NULL,
  `car name` varchar(40) NOT NULL,
  `car model` varchar(50) NOT NULL,
  `car color` varchar(10) NOT NULL,
  `car id` int(10) NOT NULL,
  `amount` int(50) NOT NULL,
  `tax` int(10) NOT NULL,
  `deliver fee` int(10) NOT NULL,
  `total amount` int(50) NOT NULL,
  `order date` date NOT NULL,
  `delivery date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `transid`, `car name`, `car model`, `car color`, `car id`, `amount`, `tax`, `deliver fee`, `total amount`, `order date`, `delivery date`) VALUES
(1001, 1001, 'Toyota Camry', '2024', 'Black', 1, 3000000, 150000, 5000, 3155000, '2024-12-01', '2024-12-10'),
(1002, 1002, 'Honda Accord', '2023', 'White', 2, 2500000, 125000, 4000, 2629000, '2024-12-02', '2024-12-11'),
(1003, 1003, 'Maruti Swift', '2023', 'Red', 3, 800000, 40000, 2000, 842000, '2024-12-03', '2024-12-12'),
(1004, 1004, 'Ford Mustang', '2024', 'Blue', 4, 5000000, 250000, 6000, 5256000, '2024-12-04', '2024-12-13'),
(1005, 1005, 'Hyundai Elantra', '2024', 'Silver', 5, 2200000, 110000, 3000, 2313000, '2024-12-05', '2024-12-14'),
(1006, 1006, 'Tesla Model S', '2024', 'Black', 6, 7000000, 350000, 7000, 7357000, '2024-12-06', '2024-12-15'),
(1007, 1007, 'BMW 3 Series', '2024', 'White', 7, 4200000, 210000, 5000, 4415000, '2024-12-07', '2024-12-16'),
(1008, 1008, 'Audi A6', '2024', 'Gray', 8, 5300000, 265000, 6000, 5561000, '2024-12-08', '2024-12-17'),
(1009, 1009, 'Mercedes-Benz E-Class', '2024', 'Blue', 9, 6000000, 300000, 7000, 6307000, '2024-12-09', '2024-12-18'),
(1010, 1010, 'Jaguar XF', '2024', 'Red', 10, 6500000, 325000, 8000, 6828000, '2024-12-10', '2024-12-19'),
(0, 5678, 'hdcyryj', 'nhghy', 'jfvyt', 7895, 12345678, 1234, 12345, 23456, '2024-12-24', '2024-12-27'),
(0, 1212, 'Subaru', 'Impreza', 'White', 19, 25000, 200, 0, 25200, '2024-12-25', '2025-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transid` int(10) NOT NULL,
  `customerid` int(10) NOT NULL,
  `orderid` int(10) NOT NULL,
  `TRANSACTION_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transid`, `customerid`, `orderid`, `TRANSACTION_DATE`) VALUES
(201, 1, 101, '2024-01-15 04:30:00'),
(202, 2, 102, '2024-01-15 04:30:00'),
(203, 3, 103, '2024-01-16 04:30:00'),
(204, 5, 104, '2024-01-20 04:30:00'),
(205, 4, 105, '2024-01-25 04:30:00'),
(206, 6, 106, '2024-01-25 04:30:00'),
(1212, 1212, 10, '2024-12-25 13:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `user` varchar(25) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` int(8) NOT NULL,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `Email`, `password`, `register_date`) VALUES
(3, 'shaila', 'shaila@gmail.com', 2147483647, '0000-00-00 00:00:00'),
(4, 'yuvi', 'yuvi@gmail.com', 45678901, '0000-00-00 00:00:00'),
(6, 'Dhamini', 'adhamini06@gmail.com', 686686, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Empid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
