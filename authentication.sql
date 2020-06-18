-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category`
(
  `Category_ID` int
(5) NOT NULL,
  `Category_Name` varchar
(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`
Category_ID`,
`Category_Name
`) VALUES
(1, 'Cardio'),
(2, 'Barbells&Weights'),
(3, 'FitnessAccessories'),
(4, 'StrengthEquipment'),
(5, 'Boxing&MMA');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout`
(
  `ID` int
(12) NOT NULL,
  `FullName` varchar
(35) NOT NULL,
  `Email` varchar
(35) NOT NULL,
  `Address` varchar
(35) NOT NULL,
  `City` varchar
(35) NOT NULL,
  `State` varchar
(20) NOT NULL,
  `zip` int
(7) NOT NULL,
  `NameOnCard` varchar
(30) NOT NULL,
  `Credit/DebitNumber` int
(25) NOT NULL,
  `ExpiryMonth` int
(5) NOT NULL,
  `ExpiryYear` year
(4) NOT NULL,
  `CVV` int
(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product`
(
  `prod_id` int
(10) NOT NULL,
  `prod_title` varchar
(255) NOT NULL,
  `prod_price` int
(10) NOT NULL,
  `prod_description` varchar
(255) NOT NULL,
  `prod_image` varchar
(100) NOT NULL,
  `prod_category` int
(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`
prod_id`,
`prod_title
`, `prod_price`, `prod_description`, `prod_image`, `prod_category`) VALUES
(101, 'Commercial cardio equipment', 1006, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Commercial cardio equipment.png', 1),
(102, 'bicycle cardio-equipment', 1050, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'bicycle cardio-equipment.jpg', 1),
(103, 'Bike-cardio', 1025, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Bike-cardio.jpg', 1),
(104, 'cardio equipment', 1200, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'cardio equipment.png', 1),
(105, 'BoxingGloves', 500, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'BoxingGloves.jpg', 5),
(106, 'Boxing bag', 130, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Boxing bag.jpg', 5),
(107, 'Boxing stands', 449, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Boxing stands.jpg', 5),
(108, 'Puch and Kick pads', 129, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Puch and Kick pads.jpg', 5),
(109, 'Barbells', 199, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Barbells.jpg', 2),
(110, 'Dumbells', 36, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Dumbells.jpg', 2),
(111, 'Rubber Dumbbells', 25, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Rubber Dumbbells.jpg', 2),
(112, 'Weight plates', 120, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Weight plates.png', 2),
(113, 'Pedometers and Stopwatches', 49, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Pedometers and Stopwatches.jpg', 3),
(114, 'MedicineBalls', 75, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'MedicineBalls.jpg', 3),
(115, 'Foam Rollers', 20, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Foam Rollers.jpg', 3),
(116, 'Body fat and weight scales', 32, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Body fat and weight scales.jpg', 3),
(117, 'Benches', 295, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Benches.jpg', 4),
(118, 'Leg machine', 1000, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Leg machine.jpg', 4),
(119, 'Single station machine', 1020, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Single station machine.jpg', 4),
(120, 'Power racks', 1225, 'Lorem ipsum is a dummy text used to replace text in some areas just for the purpose of an example. It can be used in publishing and graphic design. It is used to demonstrate the graphics elements of a document, such as font, typography, and layout.', 'Power racks.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users`
(
  `ID` int
(11) NOT NULL,
  `Firstname` varchar
(40) NOT NULL,
  `Lastname` varchar
(40) NOT NULL,
  `Email` varchar
(50) NOT NULL,
  `Password` varchar
(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`
ID`,
`Firstname
`, `Lastname`, `Email`, `Password`) VALUES
(9, 'test', 'test', 'test@gmail.com', '$2y$10$hVu7u8D/9gqJk7Y10hfneeUl6ZHxdToVuCTbDIOo.SzwjzZNnXhc.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
ADD PRIMARY KEY
(`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
