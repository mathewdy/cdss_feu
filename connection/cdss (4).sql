-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 08:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdss`
--

-- --------------------------------------------------------

--
-- Table structure for table `eighth_month`
--

CREATE TABLE `eighth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eleventh_month`
--

CREATE TABLE `eleventh_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fathers`
--

CREATE TABLE `fathers` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fathers`
--

INSERT INTO `fathers` (`id`, `account_id`, `patient_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `address`, `image`, `date_created`, `date_updated`, `modified_by`) VALUES
(8, 20242953, 61955, 'Erich', 'Kerry', 'Clark', '1981-05-23', '50 First Freeway', '', '2024-04-23', '2024-04-23', 20243457),
(9, 20242953, 40754, 'Erich', 'Kerry', 'Clark', '1981-05-23', '50 First Freeway', '', '2024-04-23', '2024-04-23', 20243457),
(10, 20242953, 54610, 'Erich', 'Kerry', 'Clark', '1981-05-23', '50 First Freeway', '', '2024-04-23', '2024-04-23', 20243457);

-- --------------------------------------------------------

--
-- Table structure for table `fifth_month`
--

CREATE TABLE `fifth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `first_month`
--

CREATE TABLE `first_month` (
  `id` int(11) NOT NULL,
  `patien` int(11) NOT NULL,
  `vital_signs` varchar(250) NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fourth_month`
--

CREATE TABLE `fourth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infants`
--

CREATE TABLE `infants` (
  `id` int(11) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `suffix` varchar(100) NOT NULL,
  `date_of_birth` varchar(150) NOT NULL,
  `gender` int(11) NOT NULL,
  `marital_status` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `id_mother_parent` int(11) NOT NULL,
  `id_father_parent` int(11) NOT NULL,
  `id_remarks` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infants`
--

INSERT INTO `infants` (`id`, `patient_id`, `first_name`, `middle_name`, `last_name`, `suffix`, `date_of_birth`, `gender`, `marital_status`, `image`, `id_mother_parent`, `id_father_parent`, `id_remarks`, `date_created`, `date_updated`, `modified_by`) VALUES
(215, 61955, 'Derek', 'Jerome', 'Camden', 'Griffin', '1987-10-31', 2, '4', '', 20243943, 20242953, 0, '2024-04-23', '2024-04-23', '20243457'),
(216, 40754, 'Yasir', 'Garrett', 'Naida', 'Jesse', '1994-03-09', 1, '4', '', 20243943, 20242953, 0, '2024-04-23', '2024-04-23', '20243457'),
(217, 54610, 'Imelda', 'Yvette', 'Whitney', 'Jakeem', '2015-11-04', 2, '4', '', 20243943, 20242953, 0, '2024-04-23', '2024-04-23', '20243457');

-- --------------------------------------------------------

--
-- Table structure for table `mothers`
--

CREATE TABLE `mothers` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mothers`
--

INSERT INTO `mothers` (`id`, `account_id`, `patient_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `address`, `image`, `date_created`, `date_updated`, `modified_by`) VALUES
(40, 20243943, 61955, 'Desirae', 'Bert', 'August', '1981-08-24', '50 First Freeway', '', '2024-04-23', '2024-04-23', 20243457),
(41, 20243943, 40754, 'Desirae', 'Bert', 'August', '1981-08-24', '50 First Freeway', '', '2024-04-23', '2024-04-23', 20243457),
(42, 20243943, 54610, 'Desirae', 'Bert', 'August', '1981-08-24', '50 First Freeway', '', '2024-04-23', '2024-04-23', 20243457);

-- --------------------------------------------------------

--
-- Table structure for table `ninth_month`
--

CREATE TABLE `ninth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `second_month`
--

CREATE TABLE `second_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seventh_month`
--

CREATE TABLE `seventh_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sixth_month`
--

CREATE TABLE `sixth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenth_month`
--

CREATE TABLE `tenth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thrid_month`
--

CREATE TABLE `thrid_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` text NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `twelfth_month`
--

CREATE TABLE `twelfth_month` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `vital_signs` varchar(5000) NOT NULL,
  `lab_values` text NOT NULL,
  `medication` text NOT NULL,
  `milestone_development` text NOT NULL,
  `deviation_intervention` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `account_id` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `role` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `house_number` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `subdivision` varchar(150) NOT NULL,
  `brgy` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `region` varchar(150) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `image` text NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `account_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `role`, `date_of_birth`, `house_number`, `street`, `subdivision`, `brgy`, `city`, `region`, `zipcode`, `image`, `date_created`, `date_updated`) VALUES
(15, 20249732, 'nydetihamo', '$2y$10$xJUxKleXl6NL7uJlgDe/uu9/hJ67zhjsObyTEebmWpBXsAaBxrmYe', 'Lane', 'Marsden Fields', 'Webb', 1, '1980-01-19', '189', '18-May-1997', '01-Dec-2015', '26-Feb-2015', '30-May-1991', '20-Sep-2008', 10384, '', '2024-04-23', '2024-04-23'),
(16, 20245819, 'silin', '$2y$10$PrDuxIw6M9.qQm7B86wFIOhQ7jT41RNVySdW0SQ0fvRJRThVa2bOC', 'Gillian', 'Cassandra Rios', 'Lucas', 2, '1997-10-16', '843', '14-May-1973', '08-Feb-2013', '22-May-1991', '02-Apr-2005', '27-Apr-1999', 99085, '', '2024-04-23', '2024-04-23'),
(17, 202410018, 'dejegadeh', '$2y$10$YLSqD3JrQP3hR3E/U6I7O.Wfw19ibk7.nXKhm.m55mmysOtMMgT5O', 'Nasim', 'Callum Richmond', 'Roberts', 2, '2021-07-30', '290', '13-Sep-2006', '27-Jul-1992', '10-Jan-1999', '14-Sep-1995', '23-Aug-2017', 95549, '', '2024-04-23', '2024-04-23'),
(18, 20243457, 'mathew', '$2y$10$3xsZzqbp6/wnhr1xX9BImOadgzbJvme6IQr0vVwTTLnANoHTA1vlS', 'Chloe', 'Faith Lewis', 'Foreman', 2, '2020-05-19', '134', '14-Mar-2023', '20-Mar-2012', '03-Oct-2018', '05-Mar-1973', '02-Dec-1981', 90232, '', '2024-04-23', '2024-04-23'),
(19, 20249067, 'lasig', '$2y$10$Y3XO7hwrKayn5GwUQ8wSbObLlSn9Lmj2D0HVR4HsJYinC4pKghTZm', 'Declan', 'Hakeem Abbott', 'Guthrie', 1, '2018-10-29', '273', '23-Sep-1997', '07-Jul-1994', '14-May-1990', '21-Jan-1974', '21-Oct-1995', 19219, '', '2024-04-23', '2024-04-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eighth_month`
--
ALTER TABLE `eighth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `eleventh_month`
--
ALTER TABLE `eleventh_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `fathers`
--
ALTER TABLE `fathers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `fifth_month`
--
ALTER TABLE `fifth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `first_month`
--
ALTER TABLE `first_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patien`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `fourth_month`
--
ALTER TABLE `fourth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `infants`
--
ALTER TABLE `infants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mother_parent` (`id_mother_parent`,`id_father_parent`,`id_remarks`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `id_father_parent` (`id_father_parent`);

--
-- Indexes for table `mothers`
--
ALTER TABLE `mothers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `ninth_month`
--
ALTER TABLE `ninth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `second_month`
--
ALTER TABLE `second_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `seventh_month`
--
ALTER TABLE `seventh_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `sixth_month`
--
ALTER TABLE `sixth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `tenth_month`
--
ALTER TABLE `tenth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `thrid_month`
--
ALTER TABLE `thrid_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `twelfth_month`
--
ALTER TABLE `twelfth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`patient_id`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eighth_month`
--
ALTER TABLE `eighth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eleventh_month`
--
ALTER TABLE `eleventh_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fathers`
--
ALTER TABLE `fathers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fifth_month`
--
ALTER TABLE `fifth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `first_month`
--
ALTER TABLE `first_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fourth_month`
--
ALTER TABLE `fourth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infants`
--
ALTER TABLE `infants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `mothers`
--
ALTER TABLE `mothers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ninth_month`
--
ALTER TABLE `ninth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `second_month`
--
ALTER TABLE `second_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seventh_month`
--
ALTER TABLE `seventh_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sixth_month`
--
ALTER TABLE `sixth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenth_month`
--
ALTER TABLE `tenth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thrid_month`
--
ALTER TABLE `thrid_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `twelfth_month`
--
ALTER TABLE `twelfth_month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eighth_month`
--
ALTER TABLE `eighth_month`
  ADD CONSTRAINT `eighth_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eighth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `eleventh_month`
--
ALTER TABLE `eleventh_month`
  ADD CONSTRAINT `eleventh_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eleventh_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fifth_month`
--
ALTER TABLE `fifth_month`
  ADD CONSTRAINT `fifth_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fifth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `first_month`
--
ALTER TABLE `first_month`
  ADD CONSTRAINT `first_month_ibfk_1` FOREIGN KEY (`patien`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `first_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fourth_month`
--
ALTER TABLE `fourth_month`
  ADD CONSTRAINT `fourth_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fourth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ninth_month`
--
ALTER TABLE `ninth_month`
  ADD CONSTRAINT `ninth_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ninth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `second_month`
--
ALTER TABLE `second_month`
  ADD CONSTRAINT `second_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `second_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seventh_month`
--
ALTER TABLE `seventh_month`
  ADD CONSTRAINT `seventh_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seventh_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sixth_month`
--
ALTER TABLE `sixth_month`
  ADD CONSTRAINT `sixth_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sixth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tenth_month`
--
ALTER TABLE `tenth_month`
  ADD CONSTRAINT `tenth_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tenth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thrid_month`
--
ALTER TABLE `thrid_month`
  ADD CONSTRAINT `thrid_month_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thrid_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `twelfth_month`
--
ALTER TABLE `twelfth_month`
  ADD CONSTRAINT `twelfth_month_ibfk_1` FOREIGN KEY (`id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `twelfth_month_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `twelfth_month_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
