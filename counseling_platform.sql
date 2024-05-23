-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counseling_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `counselor_id` int(11) DEFAULT NULL,
  `starttime` varchar(50) NOT NULL,
  `endtime` date NOT NULL,
  `appointmentDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `client_id`, `counselor_id`, `starttime`, `endtime`, `appointmentDate`) VALUES
(2, 1, 1, '2024-05-08', '0000-00-00', '2024-05-15 23:03:38'),
(3, 1, 1, '15/06/2024', '0000-00-00', '2024-05-15 23:28:02'),
(4, 1, 1, '', '0000-00-00', '2024-05-15 23:29:34'),
(5, 1, 1, '15/06/2024', '0000-00-00', '2024-05-15 23:52:28'),
(6, 1, 1, '', '0000-00-00', '2024-05-18 06:43:25'),
(7, 1, 1, '', '0000-00-00', '2024-05-18 06:53:41'),
(8, 4, 1, '2024-05-15', '0000-00-00', '2024-05-19 13:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `assessments`
--

CREATE TABLE `assessments` (
  `assessment_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `assessmentDate` varchar(50) NOT NULL,
  `score` varchar(100) NOT NULL,
  `result` varchar(100) DEFAULT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assessments`
--

INSERT INTO `assessments` (`assessment_id`, `client_id`, `counselor_id`, `assessmentDate`, `score`, `result`, `createAt`) VALUES
(1, 1, 1, '2024-05-09', '1233', 'well patient', '2024-05-15 23:31:12'),
(2, 3, 1, '2024-05-02', '1233 score', 'well patient to day', '2024-05-15 23:32:50'),
(3, 1, 1, '2024-05-16', '11223', 'werrrrrty', '2024-05-22 08:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `yearbirth` varchar(11) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `user_id`, `gender`, `yearbirth`, `telephone`, `createAt`) VALUES
(1, 3, 'Female', '22', '0789654321', '2024-05-15 21:39:50'),
(2, 2, 'Female', '2023', '0789654321', '2024-05-15 21:42:51'),
(3, 1, 'Female', '0', '0789654321', '2024-05-15 21:46:52'),
(4, 2, 'Female', '0', '0789654321', '2024-05-15 21:48:43'),
(5, 2, 'Female', '2002', '0789654321', '2024-05-15 21:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `counselors`
--

CREATE TABLE `counselors` (
  `counselor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `specialization` varchar(15) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counselors`
--

INSERT INTO `counselors` (`counselor_id`, `user_id`, `telephone`, `specialization`, `createAt`) VALUES
(1, 1, '0789654321', 'Programmer', '2024-05-15 21:30:56'),
(2, 2, '0723456722', 'Cancel', '2024-05-22 15:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `transactionDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `client_id`, `amount`, `transactionDate`) VALUES
(1, 1, '1000000', '2024-05-18 08:03:00'),
(2, 3, '1000000 RWF', '2024-05-18 08:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `birthDay` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `craeteAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `firstname`, `lastname`, `birthDay`, `country`, `City`, `telephone`, `craeteAt`) VALUES
(1, 1, 'CLAUDETTE', '', '', '', 'Kigali', '', '2024-05-15 22:09:19'),
(2, 2, 'CLAUDETTE', '', '2024-05-15', '', 'Kigali', '0789654321', '2024-05-15 22:13:23'),
(3, 3, 'CLAUDETTE', 'MWIZERWA', '2024-05-15', '', 'Kigali', '0789654321', '2024-05-15 22:19:28'),
(4, 2, 'Gtabazi', 'Antoinette', '2024-05-10', '', 'Kigali', '0723456722', '2024-05-22 08:26:25'),
(5, 1, 'Gatabazi', 'Antoinette Official', '2024-05-16', 'Rwanda', 'Kigali', '0723456722', '2024-05-22 08:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `recovery`
--

CREATE TABLE `recovery` (
  `recovery_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `planDescription` varchar(250) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `creatAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recovery`
--

INSERT INTO `recovery` (`recovery_id`, `client_id`, `planDescription`, `startDate`, `end_date`, `creatAt`) VALUES
(1, 1, 'i apologize that i am late', '2024-05-08', '2024-05-22', '2024-05-18 07:36:10'),
(2, 3, 'i apologize that i am late', '2024-05-02', '2024-05-23', '2024-05-18 07:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `reportText` varchar(250) NOT NULL,
  `reportdate` varchar(50) NOT NULL,
  `createAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `client_id`, `counselor_id`, `reportText`, `reportdate`, `createAt`) VALUES
(1, 1, 1, 'reply all you wants', '2024-05-30', '2024-05-15 23:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `duration_minutes` varchar(50) NOT NULL,
  `notesText` varchar(250) NOT NULL,
  `sessionDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `client_id`, `counselor_id`, `duration_minutes`, `notesText`, `sessionDate`) VALUES
(1, 1, 1, '20hours', 'the factors that affecting the human deprissions', '2024-05-18 06:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `registeredAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `registeredAt`) VALUES
(1, 'Antog Gatabazi', 'cheriseirahari@gmail.com', '$2y$10$FxmgYw.UbtzQpOP8v7VHyus27qXTTB7HvP7bSPPAyHlfxkmLNogly', '2024-05-15 14:58:31'),
(2, 'Antog Gatabazi', 'bobo@gmail.com', '$2y$10$R65syX/4qkL9uE7omipKP.ablMBZ1sooxML6wJD0zrz.PkbY9iq66', '2024-05-15 15:00:45'),
(3, 'Antog Gatabazi', 'murazeyesujackson@gmail.com', '$2y$10$CrSSPthiUY/ucrfaG96b1ujBUrfj/GD5nEk320tacE6egEr9K3R1S', '2024-05-15 20:20:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `counselor_id` (`counselor_id`);

--
-- Indexes for table `assessments`
--
ALTER TABLE `assessments`
  ADD PRIMARY KEY (`assessment_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `counselor_id` (`counselor_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `counselors`
--
ALTER TABLE `counselors`
  ADD PRIMARY KEY (`counselor_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `recovery`
--
ALTER TABLE `recovery`
  ADD PRIMARY KEY (`recovery_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `counselor_id` (`counselor_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `counselor_id` (`counselor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `assessments`
--
ALTER TABLE `assessments`
  MODIFY `assessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counselors`
--
ALTER TABLE `counselors`
  MODIFY `counselor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recovery`
--
ALTER TABLE `recovery`
  MODIFY `recovery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`counselor_id`);

--
-- Constraints for table `assessments`
--
ALTER TABLE `assessments`
  ADD CONSTRAINT `assessments_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `assessments_ibfk_2` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`counselor_id`);

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `counselors`
--
ALTER TABLE `counselors`
  ADD CONSTRAINT `counselors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `recovery`
--
ALTER TABLE `recovery`
  ADD CONSTRAINT `recovery_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`counselor_id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`counselor_id`) REFERENCES `counselors` (`counselor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
