-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 12:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicalclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `desc1`, `desc2`, `desc3`, `desc4`) VALUES
(1, 'About Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `entertext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `city`, `gender`, `entertext`) VALUES
(3, 'Test', 'test@test.com', 'prishtina', 'male', 'Hello world!'),
(8, 'Odeta', 'odeta.cocaj27@gmail.com', 'prishtina', 'female', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `telephone` text NOT NULL,
  `entertext` text NOT NULL,
  `imageurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `telephone`, `entertext`, `imageurl`) VALUES
(3, 'Pediatry', '+38345674238', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'pediatry.jpg'),
(4, 'Dermatology', '+38349008762', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'dermatology.jpg'),
(5, 'Stomatology', '+38348186280', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'stomatology.jpg'),
(6, 'Gynecology', '+38345423762', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'gynecologist.jpg'),
(7, 'Cardiology', '+383463246178', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'cardiology.jpg'),
(8, 'Ophthalmology', '+38345619890', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'eyedoctor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ourservices`
--

CREATE TABLE `ourservices` (
  `id` int(11) NOT NULL,
  `ourservicesmaintitle` text NOT NULL,
  `ourservicestitleone` text NOT NULL,
  `ourservicesdescone` text NOT NULL,
  `ourservicestitletwo` text NOT NULL,
  `ourservicesdesctwo` text NOT NULL,
  `ourservicestitlethree` text NOT NULL,
  `ourservicesdescthree` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourservices`
--

INSERT INTO `ourservices` (`id`, `ourservicesmaintitle`, `ourservicestitleone`, `ourservicesdescone`, `ourservicestitletwo`, `ourservicesdesctwo`, `ourservicestitlethree`, `ourservicesdescthree`) VALUES
(1, 'Our Service', '24 Hour    Support', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Emergency Services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Medical Counseling', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');

-- --------------------------------------------------------

--
-- Table structure for table `ourstaff`
--

CREATE TABLE `ourstaff` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `staff1name` text NOT NULL,
  `staff1position` text NOT NULL,
  `staff2Name` text NOT NULL,
  `staff2position` text NOT NULL,
  `staff3name` text NOT NULL,
  `staff3position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourstaff`
--

INSERT INTO `ourstaff` (`id`, `title`, `staff1name`, `staff1position`, `staff2Name`, `staff2position`, `staff3name`, `staff3position`) VALUES
(1, 'Our Staff', 'Denisë Demaku', 'Doctor', 'Odeta Çoçaj', 'Nurse', 'Hana Macula', 'Nurse');

-- --------------------------------------------------------

--
-- Table structure for table `section1`
--

CREATE TABLE `section1` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `smalltitle` text NOT NULL,
  `button1` text NOT NULL,
  `button2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section1`
--

INSERT INTO `section1` (`id`, `title`, `smalltitle`, `button1`, `button2`) VALUES
(1, 'Medical Clinic', 'Care For Your Health', 'Learn More', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `section2`
--

CREATE TABLE `section2` (
  `id` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section2`
--

INSERT INTO `section2` (`id`, `title`, `description`) VALUES
(1, 'Making Health Care Better Together', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book');

-- --------------------------------------------------------

--
-- Table structure for table `section3`
--

CREATE TABLE `section3` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section3`
--

INSERT INTO `section3` (`id`, `title`, `description`) VALUES
(1, 'We care for you health', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(5, 'Normal', 'normal@normal.com', '$2y$10$832Gtp8isVOFSy4QTo9ZI..dMLTOuIaaOhbYY1aLg4HXmaGFaF24i', 'normal'),
(62, 'denisa', 'denisademaku1@gmail.com', '$2y$10$iSfaynCsL2D6e0nOyolTzOeCX1OnlVzXIlcoXXxNL6wsFVl.Da49C', 'admin'),
(63, 'denisa', 'denisademaku2@gmail.com', '$2y$10$Uqgdje5YgdcBiKWnABd8iehpfvPjFmVgNXrNYCX/fm3Ss7GmXSZJW', 'normal'),
(64, 'Erza', 'erzacocaj@hotmail.com', '$2y$10$HA4br60BDkLhsWIk6g9svO9NgupBkrWrQ0t64h.S.E1SX9OmqIQSq', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourstaff`
--
ALTER TABLE `ourstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section1`
--
ALTER TABLE `section1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section2`
--
ALTER TABLE `section2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section3`
--
ALTER TABLE `section3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourstaff`
--
ALTER TABLE `ourstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section1`
--
ALTER TABLE `section1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section2`
--
ALTER TABLE `section2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section3`
--
ALTER TABLE `section3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
