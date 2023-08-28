-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 12:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` tinyint(4) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'What is the easiest way to get to and from your wedding venue(s)?', 'If there\'s a shuttle, public transportation, drop-off area, taxi stand or the venue(s) are within walking distance, give your guests all the details so they can plan ahead.'),
(2, 'Is there parking available near your wedding venue(s)?', 'Fill your guests in on all the parking info and options available including whether they can leave their car overnight if they\'d like to take a taxi home after a few drinks.'),
(3, 'Will your wedding be indoors or outdoors?', 'Help your guests further prepare for the weather conditions. Let them know whether your wedding reception, cocktail hour and reception will be indoors or outdoors. You could also provide some details about your Plan B in case of rain.'),
(4, 'Have you reserved blocks of rooms at one or more hotels?', 'Out-of-town guests will need to arrange accommodations and so give them options. We\'ve got everything you need to know about reserving hotel room blocks.'),
(5, 'Will there be a shuttle to and/or from the hotel(s)?', 'If you have a lot of out-of-town guests, consider providing a shuttle service to get them to and from the venue(s). If not, that\'s okay, simply suggest their best transportation options for getting there.'),
(6, 'Are there any colors or styles you\'d prefer me to wear?', 'If your wedding theme lends itself to a particular clothing style or color, give your guests as much direction as possible so they can feel part of it (and comfortable). For example, if it\'s a beach wedding, you could suggest a flowy frock or dress shorts and sandals.'),
(7, 'What is the weather like in the area?', 'Similarly, share any local weather knowledge. This is especially important for a destination wedding or for out-of-town guests less familiar with your region.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` tinyint(4) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` tinyint(4) DEFAULT NULL,
  `hall` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `hall`) VALUES
(1, 'The Royal Plaza - Connaught Place, New Delhi'),
(1, 'Hotel Jageer Palace - Mayapuri, New Delhi'),
(1, 'Stellar Resorts - New Delhi'),
(1, 'Pride Plaza - Aerocity, New Delhi'),
(1, 'Jaypee Vasant Continental - Vasant Vihar, Delhi NCR'),
(2, 'The Lila Palace - Bangaluru'),
(2, 'Welcome Hotel'),
(2, 'JW Marriott Hotel'),
(2, 'ITC Gardenia '),
(2, 'The Oberoi - Bangaluru'),
(3, 'ICT Royal Bengal'),
(3, 'The Park Hotel'),
(3, 'The Lalit Great Eastern'),
(3, 'Novotel Kolkata - Hotel & Residences'),
(3, 'Hyatt  Regency - Kolkata'),
(4, 'Snow Valley Resorts - Shimla'),
(4, 'Welcome Heritage Elysium Resort & Spa'),
(4, 'Koti Resorts'),
(4, 'Wildflower Hall, An Oberoi Resort - Shimla'),
(4, 'Viceregal Lodge & Indian institute of Advance Study'),
(5, 'The Taj Mahal Palace - South Mumbai'),
(5, 'Rainforest Resort And Spa - Igatpuri, Mumbai'),
(5, 'Hilton Mumbai International Airport - Andheri East, Mumbai'),
(5, 'Radisson Blu Mumbai International Airport - Andheri East, Mumbai'),
(5, 'Mumbai Metro , The Executive Hotel - Suburbs, Mumbai'),
(6, 'Azaya  Beach Resort - Goa'),
(6, 'Leela Goa Beach Resort - Goa'),
(6, 'Goa Marriott Resort And Spa - Goa'),
(6, 'Planet Hollywood Beach Resort - Goa'),
(6, 'ITC Grand - Goa'),
(7, 'Rambagh Palace '),
(7, 'Fairmont  Hotel'),
(7, 'Marriott Hotel'),
(7, 'Radison Blue - Jaipur'),
(7, 'Hotel Diggi Palace');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `review` varchar(511) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` tinyint(4) NOT NULL,
  `service` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`) VALUES
(1, 'Photography'),
(2, 'Haldi Ceremony'),
(3, 'wedding registry'),
(4, 'sangeet'),
(5, 'guest management'),
(6, 'wedding cake'),
(7, 'wedding ceremony'),
(8, 'entertainment'),
(9, 'fine dining'),
(10, 'bridal care'),
(11, 'bachelor parties'),
(12, 'bachelorette parties');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `join_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`, `join_date`) VALUES
(1, 'SURYA SEKHAR SINGH', '8825238173', 'suryasekharsingh00@gmail.com', '$2y$10$srVwTdRmoVOU5zFRhSOEf.EF6neGDur42rtxv4T0kI4oPXnFr6Dam', '0000-00-00 00:00:00'),
(2, 'SURYA SEKHAR', '8825238172', 'surya2001sekhar@gmail.com', '$2y$10$BoHV5JBZXwKmbK6NhpRot.bX616O42fkh9IZ78aFR7PnikQ3ZxPe6', '0000-00-00 00:00:00'),
(3, 'Tanmay', '7481045754', 'tanmay@gmail.com', '$2y$10$WUjuoe3cPtdgxdjd/PUn/eO1j.D7dSyEo1xS0auVnHfozZyr0T4NC', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` tinyint(4) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `city`) VALUES
(1, 'Delhi'),
(2, 'Bangalore'),
(3, 'Kolkata'),
(4, 'Shimla'),
(5, 'Mumbai'),
(6, 'Goa'),
(7, 'Jaipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD KEY `id` (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `halls`
--
ALTER TABLE `halls`
  ADD CONSTRAINT `halls_ibfk_1` FOREIGN KEY (`id`) REFERENCES `venue` (`id`),
  ADD CONSTRAINT `halls_ibfk_2` FOREIGN KEY (`id`) REFERENCES `venue` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
