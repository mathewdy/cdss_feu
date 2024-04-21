-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 04:44 PM
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `house_number` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `subdivision` varchar(150) NOT NULL,
  `brgy` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `region` varchar(150) NOT NULL,
  `zip_code` int(100) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fifth_month`
--

CREATE TABLE `fifth_month` (
  `id` int(11) NOT NULL,
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `account_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `suffix` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `id_mother_parent` int(11) NOT NULL,
  `id_father_parent` int(11) NOT NULL,
  `id_remarks` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mothers`
--

CREATE TABLE `mothers` (
  `id` int(11) NOT NULL,
  `id_infant` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `street` varchar(110) NOT NULL,
  `subdivision` varchar(150) NOT NULL,
  `brgy` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `region` varchar(150) NOT NULL,
  `zip_code` int(50) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `modified_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ninth_month`
--

CREATE TABLE `ninth_month` (
  `id` int(11) NOT NULL,
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `id_infant` int(11) NOT NULL,
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
  `account_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `role` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `house_number` varchar(150) NOT NULL,
  `street` varchar(150) NOT NULL,
  `subdivision` varchar(150) NOT NULL,
  `brgy` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `region` varchar(150) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eighth_month`
--
ALTER TABLE `eighth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `eleventh_month`
--
ALTER TABLE `eleventh_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `fathers`
--
ALTER TABLE `fathers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `fifth_month`
--
ALTER TABLE `fifth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `first_month`
--
ALTER TABLE `first_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `fourth_month`
--
ALTER TABLE `fourth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
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
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `ninth_month`
--
ALTER TABLE `ninth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `second_month`
--
ALTER TABLE `second_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `seventh_month`
--
ALTER TABLE `seventh_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `sixth_month`
--
ALTER TABLE `sixth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `tenth_month`
--
ALTER TABLE `tenth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `thrid_month`
--
ALTER TABLE `thrid_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
  ADD KEY `modified_by` (`modified_by`);

--
-- Indexes for table `twelfth_month`
--
ALTER TABLE `twelfth_month`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_infant` (`id_infant`,`modified_by`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mothers`
--
ALTER TABLE `mothers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eighth_month`
--
ALTER TABLE `eighth_month`
  ADD CONSTRAINT `eighth_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eighth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `eleventh_month`
--
ALTER TABLE `eleventh_month`
  ADD CONSTRAINT `eleventh_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eleventh_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fathers`
--
ALTER TABLE `fathers`
  ADD CONSTRAINT `fathers_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fathers_ibfk_2` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fifth_month`
--
ALTER TABLE `fifth_month`
  ADD CONSTRAINT `fifth_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fifth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `first_month`
--
ALTER TABLE `first_month`
  ADD CONSTRAINT `first_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `first_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fourth_month`
--
ALTER TABLE `fourth_month`
  ADD CONSTRAINT `fourth_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fourth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infants`
--
ALTER TABLE `infants`
  ADD CONSTRAINT `infants_ibfk_1` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `infants_ibfk_2` FOREIGN KEY (`id_mother_parent`) REFERENCES `mothers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `infants_ibfk_3` FOREIGN KEY (`id_father_parent`) REFERENCES `fathers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mothers`
--
ALTER TABLE `mothers`
  ADD CONSTRAINT `mothers_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mothers_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ninth_month`
--
ALTER TABLE `ninth_month`
  ADD CONSTRAINT `ninth_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ninth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `second_month`
--
ALTER TABLE `second_month`
  ADD CONSTRAINT `second_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `second_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seventh_month`
--
ALTER TABLE `seventh_month`
  ADD CONSTRAINT `seventh_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seventh_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sixth_month`
--
ALTER TABLE `sixth_month`
  ADD CONSTRAINT `sixth_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sixth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tenth_month`
--
ALTER TABLE `tenth_month`
  ADD CONSTRAINT `tenth_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tenth_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thrid_month`
--
ALTER TABLE `thrid_month`
  ADD CONSTRAINT `thrid_month_ibfk_1` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thrid_month_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `twelfth_month`
--
ALTER TABLE `twelfth_month`
  ADD CONSTRAINT `twelfth_month_ibfk_1` FOREIGN KEY (`id`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `twelfth_month_ibfk_2` FOREIGN KEY (`id_infant`) REFERENCES `infants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `twelfth_month_ibfk_3` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
