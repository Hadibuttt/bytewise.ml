-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 11:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bytewise`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `ID` int(11) NOT NULL,
  `Name` varchar(1024) NOT NULL,
  `User_id` varchar(1024) NOT NULL,
  `Password` varchar(1024) NOT NULL,
  `designation` varchar(1024) NOT NULL,
  `About1` varchar(1024) NOT NULL,
  `image` text NOT NULL,
  `Address` varchar(1024) NOT NULL,
  `Email` varchar(1024) NOT NULL,
  `Phone` varchar(1024) NOT NULL,
  `Cell` varchar(1024) NOT NULL,
  `Skype` varchar(1024) NOT NULL,
  `City` text NOT NULL,
  `Company` text NOT NULL,
  `Country` text NOT NULL,
  `status` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`ID`, `Name`, `User_id`, `Password`, `designation`, `About1`, `image`, `Address`, `Email`, `Phone`, `Cell`, `Skype`, `City`, `Company`, `Country`, `status`) VALUES
(1, 'Abdul Hadi Butt', 'hadi', 'spartacus', 'Web Developer', 'Cigarettes after sex.', 'Cropped-Pics/Hadi.png', 'PO BOX 12988, Chaklala', 'hadibutt476@gmail.com', '+051 56221265', '+92-304-5260527', 'droopy_64', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'Mein acha bacha hu'),
(2, 'Usman Niazi', 'usman', 'spartacus', 'CEO Bytewise', 'Python guy with no chill!', 'Cropped-Pics/Usman.png', 'PO BOX 12988, Chaklala', 'usman@hotmail.com', '+051 56221265', '+92-304-5260527', 'Usman_Niazi', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'Just Logged in to bytewise dashboard.'),
(3, 'Muhammad Ahtisham', 'ahtisham', 'spartacus', 'Android Developer', 'My favourite dessert?Jelly Beans,Kit Kat etc.', 'Cropped-Pics/Ahtisham.png', 'PO BOX 12988, Chaklala', 'ahti@mughal.com', '+051 56221265', '+92-304-5260527', 'Ahti.Mughal', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'My result is 4CGPA in 3rd Semester!'),
(4, 'Obaid Ahmed Khan', 'obaid', 'spartacus', 'Graphic Designer', 'Art is an illustration of the soul embedded inside you.', 'Cropped-Pics/Obaid.png', 'PO BOX 12988, Chaklala', 'obaid@graphty.com', '+051 56221265', '+92-304-5260527', 'graphty_43', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'Just Posted a new Animation on Adobe!'),
(5, 'Abdullah Durrani', 'abdullah', 'spartacus', 'Python Engineer', 'One day or Day One you decide.', 'Cropped-Pics/Abdullah.png', 'PO BOX 12988, Chaklala', 'abdullah@durrani.com', '+051 56221265', '+92-304-5260527', 'Durrani_69', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'Mein class ka saab saey laik bacha hu!'),
(6, 'Zubair Qureshi', 'zubair', 'spartacus', 'Back-End Developer', 'Success is my bitch!', 'Cropped-Pics/Zubair.png', 'PO BOX 12988, Chaklala', 'zubi@hyper.com', '+051 56221265', '+92-304-5260527', 'zubi_hyper', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'Logo ko petrol daal ka aag lagao.'),
(7, 'Ubaid-ur-Rehman', 'ubaid', 'spartacus', 'Senior Editor', 'Everything is difficult until it finds me!', 'Cropped-Pics/Ubaid.png', 'PO BOX 12988, Chaklala', 'ubaid@rehman.com', '+051 56221265', '+92-304-5260527', 'ubaid.mola', 'Rawalpindi', '844 Bytewise,', 'Pakistan', 'Looking for new bacha''s in town!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
