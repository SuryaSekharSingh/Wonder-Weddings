-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 07:09 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `username`, `password`) VALUES
(1, 'suryasekharsingh00@gmail.com', 'Surya2001', '$2y$10$oTnmDKj9ldMnP5iQ58BkIeyfWjrNaHVRiLAu0tdpSlu/osy9M6ksu'),
(2, 's@gmail.com', 'surya', '$2y$10$wYgGPYJERDDSOM9QslJ/NOAKGeAkk48GXl99OIfKmD.iQ57aeRN6G'),
(3, 'prakashsaha77610@gmail.com', 'Prakash', '$2y$10$KLvS70paGVyYR4iPLTOjOOqI8QT9ULVDxDvKRXDSs1GFvr7AlwPb.'),
(4, 'sunita03@gmail.com', 'Sunita', '$2y$10$D2ss.fdFM8xLTi7DT11Vz.v47luMK1HErTmtF/zenMX/Se3t4GhHu'),
(5, 'alamimtiyaj751@gmail.com', 'Imtiyaj', '$2y$10$SnX/yO.nSSK2eeGMFHvYXOTy0FGBkR7eLZCaTt4UMkjQ5ISw76ZNS'),
(6, 's@gmail.com', 'suryasekhar', '$2y$10$KQUdGKckBnyWdaoFVm.hDO6gkMLC/lWGVKjv.WI0tQBfGEq5ndnAq');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `groom_name` varchar(50) NOT NULL,
  `bride_name` varchar(50) NOT NULL,
  `groom_parent` varchar(50) NOT NULL,
  `bride_parent` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hall_sno` smallint(6) NOT NULL,
  `wedding_date` date NOT NULL,
  `date_of_booking` datetime NOT NULL DEFAULT current_timestamp(),
  `package` varchar(20) NOT NULL,
  `payment_done` varchar(10) NOT NULL,
  `payment_due` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `groom_name`, `bride_name`, `groom_parent`, `bride_parent`, `contact`, `email`, `hall_sno`, `wedding_date`, `date_of_booking`, `package`, `payment_done`, `payment_due`) VALUES
(1, 1, 'Manav Sheth', 'Kamini Kumari', 'who cares', 'who cares', '8825238173', 'suryasekharsingh00@gmail.com', 20, '2023-12-25', '2023-10-30 18:51:38', 'absolute', '2000000', '0'),
(2, 5, 'Tom Ellis', 'lauren german', 'god', 'penelope', '8825238173', 'suryasekharsingh00@gmail.com', 28, '2023-11-11', '2023-10-31 16:58:38', 'absolute', '1550000', '450000'),
(5, 3, 'Rascal Sharma', 'Buddhi Kumari', 'Rascal Sr.', 'Buddhi Pro', '1111111111', 'rascal@gmail.com', 11, '2023-12-12', '2023-12-08 20:33:56', 'premium', '300000', '150000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Fname`, `Lname`, `Email`, `Phone`, `Address`, `Message`) VALUES
(1, 'Surya Sekhar', 'Singh', 'suryasekharsingh00@gmail.com', '8825238173', 'Kalaitalla Barharwa 816101', 'There are no good halls in barharwa. Please provide your facilities in here as well.... pretty please....'),
(2, 'Tanmay Tushar ', 'Singh', 'tanmay@gmail.com', '7481045754', 'Kalitalla Barharwa 816101', 'Just testing things out...'),
(3, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(4, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(5, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(6, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(7, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(8, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(9, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(10, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(11, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(12, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(13, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(14, 'Gufran ', 'Ali', 'gufran@gmail.com', '8888888888', 'Kendua', 'Just testing...'),
(15, 'Kriti', 'Anand', 'kriti@gmail.com', '8271998003', 'Ratanpur', 'Just testing things...'),
(16, 'Rascal', 'Sharma', 'rascal@gmail.com', '3434343434', 'Rascalas', 'Damn you popup...'),
(17, 'Rascal', 'Sharma', 'rascal@gmail.com', '3434343434', 'Rascalas', 'Damn you popup...'),
(18, 'Simi', 'one', 'simione@gmail.com', '8888888888', 'Italy', 'Shit...'),
(19, 'xxx', 'xxx', 'xxx@gmail.com', '1111111111', 'xxx ', 'xxx');

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
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` tinyint(4) DEFAULT NULL,
  `sno` smallint(6) NOT NULL,
  `hall` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `sno`, `hall`) VALUES
(1, 1, 'The Royal Plaza - Connaught Place, New Delhi'),
(1, 2, 'Hotel Jageer Palace - Mayapuri, New Delhi'),
(1, 3, 'Stellar Resorts - New Delhi'),
(1, 4, 'Pride Plaza - Aerocity, New Delhi'),
(1, 5, 'Jaypee Vasant Continental - Vasant Vihar, Delhi NCR'),
(2, 6, 'The Leela Palace - Bangaluru'),
(2, 7, 'Welcome Hotel'),
(2, 8, 'JW Marriott Hotel'),
(2, 9, 'ITC Gardenia '),
(2, 10, 'The Oberoi - Bangaluru'),
(3, 11, 'ICT Royal Bengal'),
(3, 12, 'The Park Hotel'),
(3, 13, 'The Lalit Great Eastern'),
(3, 14, 'Novotel Kolkata - Hotel & Residences'),
(3, 15, 'Hyatt  Regency - Kolkata'),
(4, 16, 'Snow Valley Resorts - Shimla'),
(4, 17, 'Welcome Heritage Elysium Resort & Spa'),
(4, 18, 'Wildflower Hall, An Oberoi Resort - Shimla'),
(4, 19, 'Viceregal Lodge & Indian institute of Advance Study'),
(5, 20, 'The Taj Mahal Palace - South Mumbai'),
(5, 21, 'Rainforest Resort And Spa - Igatpuri, Mumbai'),
(5, 22, 'Hilton Mumbai International Airport - Andheri East, Mumbai'),
(5, 23, 'Radisson Blu Mumbai International Airport - Andheri East, Mumbai'),
(5, 24, 'Mumbai Metro , The Executive Hotel - Suburbs, Mumbai'),
(6, 25, 'Azaya  Beach Resort - Goa'),
(6, 26, 'Leela Goa Beach Resort - Goa'),
(6, 27, 'Goa Marriott Resort And Spa - Goa'),
(6, 28, 'Planet Hollywood Beach Resort - Goa'),
(6, 29, 'ITC Grand - Goa'),
(7, 30, 'Rambagh Palace '),
(7, 31, 'Fairmont  Hotel'),
(7, 32, 'Marriott Hotel'),
(7, 33, 'Radison Blue - Jaipur'),
(7, 34, 'Hotel Diggi Palace'),
(4, 35, 'Koti Resorts');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` tinyint(4) DEFAULT NULL,
  `services` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `services`) VALUES
(1, 'Photography'),
(1, 'Decorations'),
(1, 'Wedding'),
(1, 'Dining'),
(2, 'Photography'),
(2, 'Decorations'),
(2, 'Wedding'),
(2, 'Dining'),
(2, 'Stays'),
(2, 'Sangeet'),
(3, 'Photography'),
(3, 'Decorations'),
(3, 'Wedding'),
(3, 'Dining'),
(3, 'Stays'),
(3, 'Designer Invitations'),
(3, 'Sangeet'),
(3, 'Bridal Care'),
(4, 'Photography'),
(4, 'Decorations'),
(4, 'Wedding'),
(4, 'Dining'),
(4, 'Stays'),
(4, 'Travels & Logistics'),
(4, 'Sangeet'),
(4, 'Bridal Care'),
(4, 'VIP Management'),
(4, 'Bachelor\'s Party'),
(4, 'Bachelorette\'s Party'),
(4, 'Live Streaming');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` tinyint(4) NOT NULL,
  `plan` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `plan`, `price`) VALUES
(1, 'basic', '200000'),
(2, 'premium', '450000'),
(3, 'ultimate', '900000'),
(4, 'absolute', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `review` varchar(511) NOT NULL,
  `stars` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `name`, `review`, `stars`) VALUES
(1, 3, 'Rahul Kandwaal', 'It was very good. The team of wonder weddings was really great. They had all the great facilities in such a decent price. Also the chef was very skilled in making various delicacies.', '5'),
(2, 3, 'Kabir Singh', 'I spent 2 days with everyone on Wonder Weddings and the way they treated all of us made us vough for them and refer them to everyone out there who wants to have a destination wedding.', '4'),
(5, 3, 'Tanmay Tushar Singh', 'Decently good facilities provided. Gotta hand it to them.', '4');

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
  `join_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`, `join_date`) VALUES
(1, 'SURYA SEKHAR SINGH', '8825238173', 'suryasekharsingh00@gmail.com', '$2y$10$srVwTdRmoVOU5zFRhSOEf.EF6neGDur42rtxv4T0kI4oPXnFr6Dam', '0000-00-00 00:00:00'),
(2, 'SURYA SEKHAR', '8825238172', 'surya2001sekhar@gmail.com', '$2y$10$BoHV5JBZXwKmbK6NhpRot.bX616O42fkh9IZ78aFR7PnikQ3ZxPe6', '0000-00-00 00:00:00'),
(3, 'Tanmay', '7481045754', 'tanmay@gmail.com', '$2y$10$WUjuoe3cPtdgxdjd/PUn/eO1j.D7dSyEo1xS0auVnHfozZyr0T4NC', '0000-00-00 00:00:00'),
(4, 'Tommy Shelby', '9876598765', 'tom_shelby1918@gmail.com', '$2y$10$uuY06Eu6EfnoMhKJyEOq2uLKXGaMFjgLJsTYE/C/mojhPNjDs96DG', '0000-00-00 00:00:00'),
(5, 'Tom Ellis', '9999999999', 'OGlucifer@gmail.com', '$2y$10$tySfjqybtLEzin8D/32CJeMrRZehlYjmOfUJnLfrzSNbCTgYMhBw2', '0000-00-00 00:00:00'),
(8, 'Surya ssddd', '48485184', 's@gmail.com', '$2y$10$WcUgrGfCp1h1dCILeo7DsuBi6MCQhcLl1k4KbsbwLVWq7LL8IQh4i', '0000-00-00 00:00:00'),
(9, 'Imtiyaj alam', '8294777363', 'alamimtiyaj751@gmail.com', '$2y$10$1iiQW1h6vIvKysSM1T0BJe90XmOevuJqrox2i.5EBmZoHRdWNZw12', '0000-00-00 00:00:00'),
(10, 'Ravan', '7899654254', 'ravan@gmail.com', '$2y$10$L2d0FHgrNytCXXRJMjNuKOSk./DzbGIOgyU4rRcm.Uq7k1I8PU5Iy', '0000-00-00 00:00:00'),
(11, 'ayush bhgat', '6207807915', 'bhagat@gmail.com', '$2y$10$L3jB4E8akvlzu3Pt3EoomeqKlV4DpUrnVj48QYPhrz462LOHMfNfK', '0000-00-00 00:00:00'),
(12, 'Surya Someone', '1111111111', 'surya@gmail.com', '$2y$10$Yg0.DG6iCdTSt/l3GqAESudq3p3PVPBZEqhU8JCVB8OEH.lkVbnBW', '2023-12-16 20:25:11');

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
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hall_sno` (`hall_sno`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD KEY `id` (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `sno` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`hall_sno`) REFERENCES `halls` (`sno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `halls`
--
ALTER TABLE `halls`
  ADD CONSTRAINT `halls_ibfk_1` FOREIGN KEY (`id`) REFERENCES `venue` (`id`),
  ADD CONSTRAINT `halls_ibfk_2` FOREIGN KEY (`id`) REFERENCES `venue` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pricing` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
