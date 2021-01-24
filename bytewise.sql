-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 01:26 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `About_us` text NOT NULL,
  `Team_Bytewise` text NOT NULL,
  `Our_vision` text NOT NULL,
  `A` text NOT NULL,
  `About_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `About_us`, `Team_Bytewise`, `Our_vision`, `A`, `About_2`) VALUES
(1, 'Opening lines about us how we came to being, challangs faced uptil now how things were. Much more within two lines.\r\nOpening lines about us how we came to being, challangs faced uptil now how things.', 'Abilities and skills of team bytewise. Abilities and skills of team bytewise. Abilities and skills of team bytewise. Abilities and skills of team bytewise. Abilities and skills of team bytewise. Abilities and skills of team bytewise Abilities and skills of team bytewise Abilities and skills of team bytewise Abilities and skills of team bytewise Abilities and skills of team bytewise Abilities and skills of team bytewise Abilities and skills of team bytewise like this. Gratitude for all our team efforts etc etc. Gratitude for all our team efforts etc further.', 'Write about our goals for the future Write about our goals for the future Write about our goals for the future Write about our goals for the future Write about our goals.', 'Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision. Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision and accomplishments. Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi vision and accomplishment. Mr. Usman Niazi vision and accomplishments Mr. Usman Niazi and accomplishments Mr. Usman Niazi vision and accomplishments.', 'How things work in Bytewise? Managment, Skills, Etc. How things work in Bytewise? Managment, Skills, Etc.How things work in Bytewise? Managment, Skills, Etc.How things work in Bytewise? Managment, Skills, Etc. How things work in Bytewise? Managment, Skills, Etc. How things work in Bytewise? Managment, Skills, Etc.How things work in Bytewise? Managment, Skills. How things work in Bytewise? Managment, Skills, Etc. How things work in Bytewise? Managment, Skills, Etc.How things work in Bytewise? Managment, How things work in Bytewise? Managment, Skills, Etc. How things work in Bytewise? Managment, Skills.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(18) NOT NULL,
  `E_mail` varchar(1024) NOT NULL,
  `Name` varchar(1024) NOT NULL,
  `Subject` varchar(1024) NOT NULL,
  `Message` text NOT NULL,
  `Waqt` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `E_mail`, `Name`, `Subject`, `Message`, `Waqt`) VALUES
(1, 'hadibutt476@gmail.com', 'Abdul Hadi', 'Bytewise Testing', 'It is stated that i need to test the website of bytewise so i need some time.', '18:19:13'),
(2, 'butthadi461@gmail.com', 'Hamza Iftikhar', 'Exam Marks', 'Please find the following message.', '13:14:30'),
(3, 'spartacus@gmail.com', 'Usman Khan', 'Fee Issue', 'Kindly find the fee slip provided.', '08:09:23'),
(4, 'zubihyper@gmail.com', 'Zubair Qureshi', 'CGPA', 'Congragulations dude i got 4 CGPA!', '05:42:13'),
(5, 'usman@hotmail.com', 'Usman Niazi', 'Logout Issue', 'Dear I can not logout of the site with the respected ID you provided please help!', '15:16:35'),
(6, 'umair@yahoo.com', 'Umair Malik', 'Internship Program', 'I''d like to be a part of your team.', '07:16:32'),
(7, 'hadibutt476@gmail.com', 'Abdul Hadi', 'Fivver Issue', 'Kindly upload a Gig for further support of the program.', '05:11:30'),
(8, 'sajid@munir.com', 'Sajid Munir', 'Final Result', 'Please find the result below attached copy.', '02:14:22'),
(9, 'zubihyper@gmail.com', 'Zubair Qureshi', 'Marriage Leaves', 'Dear, as you know about my marriage so i need leaves for 7 days.', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `ID` int(18) NOT NULL,
  `Vision` text NOT NULL,
  `Color_Variants` text NOT NULL,
  `Parallex_Background` text NOT NULL,
  `Clean_Code` text NOT NULL,
  `About2` text NOT NULL,
  `Unlimited_Variant` text NOT NULL,
  `Responsive_Layout` text NOT NULL,
  `Clean_Design` text NOT NULL,
  `Animated_Elements` text NOT NULL,
  `Many_More` text NOT NULL,
  `About` varchar(1050) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`ID`, `Vision`, `Color_Variants`, `Parallex_Background`, `Clean_Code`, `About2`, `Unlimited_Variant`, `Responsive_Layout`, `Clean_Design`, `Animated_Elements`, `Many_More`, `About`) VALUES
(1, 'Our vision is to reduce the remarkably high rate of software project failures worldwide, by transforming the way companies manage them.', 'Our Goal is to make the clients projects even more attractive based upon the experience of our qualified UI/UX Developers skills.', 'Enhancing the graphics quality to the best is our vision, a more attractive site corresponds to more customers as We Make IT Happen!', 'Cleaner the code brighter the way of success, implementing such means to reduce the code complexity so that even a novice feels like a professional.', 'Founded in 2019 by Mr.Usman Niazi. Bytewise has come a long way from its beginnings in NUML. When Mr.Usman Niazi first started out, his passion for "We Make IT Happen" drove them to start their own business.', 'Enhancing the overlook of your product with variety of colors to make it look even more attractive than the usual products.', 'Making your product compatible to the users device in order to increase the reliabilty.', 'Utilizing the skills and designs provided by our UI/UX to enhance the design of your product even more & to give it a more cleaner look.', 'Making the Users Experience about your product blissful by adding numerious animations.', 'We hope you enjoy our products as much as we enjoy offering them to you!', 'Welcome to Bytewise, your number one source for all things. We''re dedicated to providing you the very best of IT Technology, with an emphasis on Design, Development, Graphics and much more. We Make IT Happen.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Our_Products` text NOT NULL,
  `Finest_Work` text NOT NULL,
  `Color_Variants` text NOT NULL,
  `Parallax_Background` text NOT NULL,
  `Clean_Code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Our_Products`, `Finest_Work`, `Color_Variants`, `Parallax_Background`, `Clean_Code`) VALUES
(1, 'Write about the products Write about the products Write about the products Write about the products Write about the products.\r\nWrite about the products Write about the products Write about the products Write about the products.', 'Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work. Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work. Write your finest work Write your finest work Write your finest work Write your finest work Write your finest work.', 'Our Goal is to make the clients projects even more attractive based upon the experience of our qualified UI/UX Developers designs.', 'Enhancing the graphics quality to the best is our vision, a more attractive site corresponds to more customers as We Make IT Happen!', 'Cleaner the code brighter the way of success, implementing such means to reduce the code complexity so that even a novice feels like a proffessional.');

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
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `ID` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
