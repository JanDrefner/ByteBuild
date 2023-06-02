-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 04:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bytebuilddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttbl`
--

CREATE TABLE `producttbl` (
  `ProductID` int(11) NOT NULL,
  `ProductType` text NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductCode` varchar(255) NOT NULL,
  `ProductPrice` double(9,2) NOT NULL,
  `ProductImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttbl`
--

INSERT INTO `producttbl` (`ProductID`, `ProductType`, `ProductName`, `ProductCode`, `ProductPrice`, `ProductImage`) VALUES
(2, 'PARTS', 'Ryzen 5 3600', 'R53600', 95.00, 'imgs/product1.jpg'),
(3, 'PARTS', 'RTX 4090', 'RTX4090', 1559.00, 'imgs/product2.png'),
(4, 'PARTS', 'Core i9-13900K', 'I91390', 589.00, 'imgs/product3.png'),
(5, 'PARTS', 'Adata Legend 960 NVMe SSD', 'AL960SSD', 129.00, 'imgs/product4.png'),
(6, 'PARTS', 'G.Skill Trident Z5 Neo RGB DDR5-6000', 'GSKTRI', 179.00, 'imgs/product5.png'),
(7, 'PARTS', 'Corsair CX450', 'CORCX450', 60.00, 'imgs/product6.png'),
(8, 'PARTS', 'Fractal Design Meshify 2 Compact', 'FRACDME', 84.00, 'imgs/product7.png'),
(9, 'PARTS', 'Radeon RX 7900 XTX', 'RX7900', 999.00, 'imgs/product8.png'),
(11, 'PARTS', 'Intel Core i5-13400', 'I5134', 230.00, 'imgs/product9.png'),
(12, 'PARTS', 'WD Black SN850X', 'WDBSN', 85.00, 'imgs/product10.png'),
(13, 'PARTS', 'Samsung DDR5-4800', 'DDR548', 40.00, 'imgs/product11.png'),
(14, 'PARTS', 'Rog Strix B550-F Gaming', 'B550FS', 130.00, 'imgs/product12.png'),
(15, 'PARTS', 'ASRock Z690 Taichi', 'ASRZ690', 589.00, 'imgs/product13.png'),
(16, 'PARTS', 'Corsair RM550x', 'RM550X', 120.00, 'imgs/product14.png'),
(17, 'PERIPHERALS', 'SteelSeries Arctis 5', 'SSARC5', 225.00, 'imgs/product15.png'),
(18, 'PERIPHERALS', 'Razer Ornata', 'ORNATA', 85.00, 'imgs/product16.png'),
(19, 'PERIPHERALS', 'Alienware 34 QD-OLED', '34QDLED', 1300.00, 'imgs/product17.png'),
(20, 'PERIPHERALS', 'Logitech G502 LIGHTSPEED', 'G502LS', 90.00, 'imgs/product18.png'),
(21, 'PERIPHERALS', 'A4Tech Mouse-“OP620D”', 'OP620D', 5.00, 'imgs/product19.png'),
(22, 'PERIPHERALS', 'Razer Basilisk V3', 'BASLV3', 60.00, 'imgs/product20.png'),
(23, 'PERIPHERALS', 'Razer Kraken V3 X', 'KRAKV3X', 40.00, 'imgs/product21.png'),
(24, 'PERIPHERALS', 'Audeze Maxwell', 'AUDMAX', 300.00, 'imgs/product22.png'),
(25, 'PERIPHERALS', 'Nvision N190HD', 'N190HD', 45.00, 'imgs/product23.png'),
(26, 'PERIPHERALS', 'HyperX SoloCast', 'HYPEXSOLO', 60.00, 'imgs/product24.png'),
(27, 'PERIPHERALS', 'Focusrite Scarlett 2I2 Studio Bundle', 'FSCAR2I2', 330.00, 'imgs/product25.png'),
(28, 'PERIPHERALS', 'Logitech G715', 'LOGIG715', 220.00, 'imgs/product26.png'),
(31, 'PERIPHERALS', 'Logitech G915 Lightspeed RGB Mechanical Keyboard', 'LOG915', 249.00, 'imgs/product27.png'),
(32, 'PERIPHERALS', 'MSI Optix G241', 'OPG241', 180.00, 'imgs/product28.png');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Password_Hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`UserID`, `Email`, `FirstName`, `LastName`, `Password_Hash`) VALUES
(1, 'wepp@gmail.com', 'Jan Drefner', 'Santos', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttbl`
--
ALTER TABLE `producttbl`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `ProductCode` (`ProductCode`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttbl`
--
ALTER TABLE `producttbl`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
