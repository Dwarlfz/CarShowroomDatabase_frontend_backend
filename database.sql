-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 04:38 PM
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
(12, 'Lia', 'Salmanez', 'liasam@gmail.com', 2147483647, 'LA', 'LA', 'USA', '111898', 0, 567),
(20, 'Sia', 'Salmanez', 'Sliasam@gmail.com', 2147483647, 'LA', 'LA', 'USA', '111898', 0, 567),
(22, 'Love', 'goldberg', 'gold@gmail.com', 1122334455, 'LA', 'LA', 'USA', '111898', 0, 567),
(44, 'Love', 'goldberg', 'gold@gmail.com', 1122334455, 'LA', 'LA', 'USA', '111898', 0, 567),
(66, 'Lia', 'Salmanez', 'liasam@gmail.com', 2147483647, 'LA', 'LA', 'USA', '111898', 0, 567),
(1212, 'Love', 'Quinn', 'QuinnL99@gmail.com', 1212121212, 'XYZ', 'XYZ', 'ABC', '11889', 10, 600);

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `dealerid` int(11) NOT NULL,
  `dealer_name` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`dealerid`, `dealer_name`, `contact_name`, `contact_email`, `contact_phone`, `address`, `city`, `state`, `country`, `postal_code`) VALUES
(1, 'Prime Cars', 'John Doe', 'john.doe@primecars.com', '123-456-7890', '123 Main St', 'New York', 'NY', 'USA', '10001'),
(2, 'Luxury Wheels', 'Jane Smith', 'jane.smith@luxurywheels.com', '234-567-8901', '456 Park Ave', 'Los Angeles', 'CA', 'USA', '90001'),
(3, 'Auto Galaxy', 'Peter Brown', 'peter.brown@autogalaxy.com', '345-678-9012', '789 Sunset Blvd', 'San Francisco', 'CA', 'USA', '94101'),
(4, 'Elite Motors', 'Emily Davis', 'emily.davis@elitemotors.com', '456-789-0123', '101 Maple St', 'Chicago', 'IL', 'USA', '60601'),
(5, 'Speedster Auto', 'Michael Johnson', 'michael.johnson@speedsterauto.com', '567-890-1234', '202 Oak St', 'Houston', 'TX', 'USA', '77001'),
(6, 'Car Haven', 'Linda White', 'linda.white@carhaven.com', '678-901-2345', '303 Pine St', 'Miami', 'FL', 'USA', '33101'),
(7, 'Urban Autos', 'David Harris', 'david.harris@urbanautos.com', '789-012-3456', '404 Elm St', 'Atlanta', 'GA', 'USA', '30301'),
(8, 'Drive City', 'Sarah Miller', 'sarah.miller@drivecity.com', '890-123-4567', '505 Birch St', 'Dallas', 'TX', 'USA', '75201'),
(9, 'Motor World', 'Chris Wilson', 'chris.wilson@motorworld.com', '901-234-5678', '606 Cedar St', 'Seattle', 'WA', 'USA', '98101'),
(10, 'Auto Connect', 'Anna Clark', 'anna.clark@autoconnect.com', '012-345-6789', '707 Spruce St', 'Boston', 'MA', 'USA', '02101');

-- --------------------------------------------------------

--
-- Table structure for table `deal_order`
--

CREATE TABLE `deal_order` (
  `deal_order_id` int(11) NOT NULL,
  `dealerid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `part_or_car_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deal_order`
--

INSERT INTO `deal_order` (`deal_order_id`, `dealerid`, `carid`, `part_or_car_name`, `quantity`, `order_date`) VALUES
(1, 1, 1, 'Toyota Corolla', 5, '2025-01-01'),
(2, 2, 2, 'Honda Civic', 3, '2025-01-02'),
(3, 3, 3, 'Ford Fiesta', 4, '2025-01-03'),
(4, 4, 4, 'Chevrolet Malibu', 2, '2025-01-04'),
(5, 5, 5, 'BMW X5', 1, '2025-01-05'),
(6, 1, 6, 'Audi A4', 6, '2025-01-06'),
(7, 2, 7, 'Tesla Model S', 7, '2025-01-07'),
(8, 3, 8, 'Mercedes C Class', 5, '2025-01-08'),
(9, 4, 9, 'Jaguar XF', 2, '2025-01-09'),
(10, 5, 10, 'Hyundai Elantra', 3, '2025-01-10'),
(11, 1, 11, 'Nissan Altima', 4, '2025-01-11'),
(12, 2, 12, 'Kia Optima', 2, '2025-01-12'),
(13, 3, 13, 'Mazda 6', 1, '2025-01-13'),
(14, 4, 14, 'Lexus ES', 3, '2025-01-14'),
(15, 5, 15, 'Acura TLX', 2, '2025-01-15'),
(16, 1, 16, 'Infiniti Q50', 4, '2025-01-16'),
(17, 2, 17, 'Volvo S60', 3, '2025-01-17'),
(18, 3, 18, 'Alfa Romeo Giulia', 2, '2025-01-18'),
(19, 4, 19, 'Subaru Impreza', 5, '2025-01-19'),
(20, 5, 20, 'Volkswagen Passat', 4, '2025-01-20'),
(21, 1, 21, 'Toyota Camry', 3, '2025-01-21'),
(22, 2, 22, 'Ford Mustang', 2, '2025-01-22'),
(23, 3, 23, 'Chevrolet Impala', 1, '2025-01-23'),
(24, 4, 24, 'BMW 3 Series', 6, '2025-01-24'),
(25, 5, 25, 'Audi Q7', 7, '2025-01-25'),
(26, 1, 26, 'Tesla Model 3', 5, '2025-01-26'),
(27, 2, 27, 'Mercedes E Class', 4, '2025-01-27'),
(28, 3, 28, 'Jaguar XE', 3, '2025-01-28'),
(29, 4, 29, 'Hyundai Sonata', 2, '2025-01-29'),
(30, 5, 30, 'Nissan Maxima', 1, '2025-01-30'),
(31, 1, 31, 'Kia Sorento', 3, '2025-01-31'),
(32, 2, 32, 'Mazda CX-5', 2, '2025-02-01'),
(33, 3, 33, 'Lexus RX', 4, '2025-02-02'),
(34, 4, 34, 'Acura RDX', 3, '2025-02-03'),
(35, 5, 35, 'Infiniti QX60', 2, '2025-02-04'),
(36, 1, 36, 'Volvo XC90', 5, '2025-02-05'),
(37, 2, 37, 'Alfa Romeo Stelvio', 3, '2025-02-06'),
(38, 3, 38, 'Subaru Outback', 2, '2025-02-07'),
(39, 4, 39, 'Volkswagen Tiguan', 4, '2025-02-08'),
(40, 5, 40, 'Toyota RAV4', 3, '2025-02-09'),
(41, 1, 41, 'Ford Explorer', 2, '2025-02-10'),
(42, 2, 42, 'Chevrolet Traverse', 4, '2025-02-11'),
(43, 3, 43, 'BMW X3', 1, '2025-02-12'),
(44, 4, 44, 'Audi A6', 3, '2025-02-13'),
(45, 5, 45, 'Tesla Model X', 2, '2025-02-14'),
(46, 1, 46, 'Mercedes GLA', 5, '2025-02-15'),
(47, 2, 47, 'Jaguar F-Pace', 3, '2025-02-16'),
(48, 3, 48, 'Hyundai Tucson', 2, '2025-02-17'),
(49, 4, 49, 'Nissan Rogue', 4, '2025-02-18'),
(50, 5, 50, 'Kia Telluride', 3, '2025-02-19'),
(51, 1, 51, 'Tesla Model X', 2, '2025-03-01'),
(52, 2, 52, 'Ford Fiesta', 3, '2025-03-02'),
(53, 3, 53, 'Jaguar F-Pace', 4, '2025-03-03'),
(54, 4, 54, 'Ford Mustang', 2, '2025-03-04'),
(55, 5, 55, 'Ford Mustang', 3, '2025-03-05'),
(56, 1, 56, 'Tesla Model X', 1, '2025-03-06'),
(57, 2, 57, 'Tesla Model X', 4, '2025-03-07'),
(58, 3, 58, 'Jaguar F-Pace', 5, '2025-03-08'),
(59, 4, 59, 'Volkswagen Tiguan', 2, '2025-03-09'),
(60, 5, 60, 'Volkswagen Tiguan', 3, '2025-03-10'),
(61, 1, 65, 'Subaru Impreza', 6, '2025-03-11');

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
('Beck', 'Willks', 601, 'Sales Associate', 25000, '2000-06-01', 'F', 2147483647, 'LA', 'LA', 'USA', 111098),
('Love', 'Quinn', 998, 'Sales Associate', 20000, '2000-07-09', 'M', 1212121212, 'XYZ', 'XYZ', 'India', 111898);

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
(1, 1001, 'Toyota Camry', '2024', 'Black', 1, 3000000, 150000, 5000, 3155000, '2024-12-01', '2024-12-10'),
(2, 1002, 'Honda Accord', '2023', 'White', 2, 2500000, 125000, 4000, 2629000, '2024-12-02', '2024-12-11'),
(3, 1003, 'Maruti Swift', '2023', 'Red', 3, 800000, 40000, 2000, 842000, '2024-12-03', '2024-12-12'),
(4, 1004, 'Ford Mustang', '2024', 'Blue', 4, 5000000, 250000, 6000, 5256000, '2024-12-04', '2024-12-13'),
(5, 1005, 'Hyundai Elantra', '2024', 'Silver', 5, 2200000, 110000, 3000, 2313000, '2024-12-05', '2024-12-14'),
(6, 1006, 'Tesla Model S', '2024', 'Black', 6, 7000000, 350000, 7000, 7357000, '2024-12-06', '2024-12-15'),
(7, 1007, 'BMW 3 Series', '2024', 'White', 7, 4200000, 210000, 5000, 4415000, '2024-12-07', '2024-12-16'),
(8, 1008, 'Audi A6', '2024', 'Gray', 8, 5300000, 265000, 6000, 5561000, '2024-12-08', '2024-12-17'),
(9, 1009, 'Mercedes-Benz E-Class', '2024', 'Blue', 9, 6000000, 300000, 7000, 6307000, '2024-12-09', '2024-12-18'),
(10, 1010, 'Jaguar XF', '2024', 'Red', 10, 6500000, 325000, 8000, 6828000, '2024-12-10', '2024-12-19'),
(11, 5678, 'hdcyryj', 'nhghy', 'jfvyt', 7895, 12345678, 1234, 12345, 23456, '2024-12-24', '2024-12-27'),
(12, 1212, 'Subaru', 'Impreza', 'White', 19, 25000, 200, 0, 25200, '2024-12-25', '2025-02-01'),
(13, 0, 'Subaru', 'Impreza', 'White', 0, 25000, 200, 0, 25200, '2025-01-02', '2025-02-02'),
(14, 0, 'Subaru', 'Impreza', 'White', 0, 25000, 200, 0, 25200, '2025-01-02', '2025-02-02'),
(15, 0, 'Subaru', 'Impreza', 'White', 0, 25000, 200, 0, 25200, '2025-01-04', '2025-02-11'),
(16, 0, 'Subaru', 'Impreza', 'White', 0, 25000, 200, 0, 25200, '2025-01-03', '2025-02-21');

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
(201, 1, 101, '2024-01-14 23:00:00'),
(202, 2, 102, '2024-01-14 23:00:00'),
(203, 3, 103, '2024-01-15 23:00:00'),
(204, 5, 104, '2024-01-19 23:00:00'),
(205, 4, 105, '2024-01-24 23:00:00'),
(206, 6, 106, '2024-01-24 23:00:00'),
(1212, 1212, 10, '2024-12-25 07:38:08'),
(1213, 12, 13, '2025-01-02 16:34:40'),
(1214, 20, 14, '2025-01-02 16:39:47'),
(1215, 44, 15, '2025-01-02 17:29:16'),
(1216, 22, 16, '2025-01-03 05:47:21');

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
  ADD PRIMARY KEY (`CUSTOMERID`),
  ADD KEY `EMPID` (`EMPID`),
  ADD KEY `EMPID_2` (`EMPID`),
  ADD KEY `Order_id` (`Order_id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`dealerid`);

--
-- Indexes for table `deal_order`
--
ALTER TABLE `deal_order`
  ADD PRIMARY KEY (`deal_order_id`),
  ADD KEY `dealerid` (`dealerid`),
  ADD KEY `carid` (`carid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Empid`);

--
-- Indexes for table `instock`
--
ALTER TABLE `instock`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `transid` (`transid`,`car id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transid`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `dealerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `deal_order`
--
ALTER TABLE `deal_order`
  MODIFY `deal_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1217;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deal_order`
--
ALTER TABLE `deal_order`
  ADD CONSTRAINT `deal_order_ibfk_1` FOREIGN KEY (`dealerid`) REFERENCES `dealers` (`dealerid`),
  ADD CONSTRAINT `deal_order_ibfk_2` FOREIGN KEY (`carid`) REFERENCES `instock` (`carid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
