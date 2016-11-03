-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 12:22 AM
-- Server version: 5.7.16-0ubuntu0.16.10.1
-- PHP Version: 7.0.12-1+deb.sury.org~yakkety+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lafitte`
--

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id`, `name`, `target`) VALUES
(1, '10 Push Ups', '2016-12-31'),
(2, '10 Pull Ups', '2016-12-31'),
(3, '20 Back Squats', '2016-12-31'),
(4, '45 Bench Press', '2016-12-31'),
(5, '30 Plate Cocoons\n', '2016-12-31'),
(6, '40 Push Press', '2016-12-31'),
(7, '30 Chest Pull for Wings', '2016-12-31'),
(8, '20 Sumo Dead Lift', '2016-12-31'),
(9, '40 Inclined Arm Raise', '2016-12-31'),
(10, '20 Sideways Arm Raise', '2016-12-31'),
(11, '30 Incllined Bench Press', '2016-12-31'),
(12, '2km on a Treadmill', '2016-12-31'),
(13, '2km on a Treadmill with 10% intensity.', '2016-12-31');

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`eno`, `name`, `trainee`) VALUES
(1, 'Machine Tricep Extension', 5),
(2, 'Pull up', 1),
(3, 'Push Up', 5),
(4, 'Bench Press', 10),
(5, 'Dips', 6),
(6, 'Close Grip Bench Press', 9),
(7, 'Dumbell Curl', 4),
(8, 'Barbell Curl', 2),
(9, 'T-Bar Row', 8),
(10, 'Inclined Bench Press', 5),
(11, 'Declined Bench Press', 8),
(12, 'Incline Bench Dumbell Fly', 4),
(13, 'Chest Dips', 10),
(14, 'Calf Machine', 6),
(15, 'Barbell Squat', 7),
(16, 'Sumo Squat', 5),
(17, 'Lat Pull Down\'s', 1),
(18, 'Dumbell Rows', 3),
(19, 'Bent over barbell Row', 2),
(20, 'Dumbell Extension', 6);

--
-- Dumping data for table `trainees`
--

INSERT INTO `trainees` (`id`, `name`, `experience`, `height`) VALUES
(1, 'Joel Ninan Varghese', 5, 173),
(2, 'Hrishikesh P. Menon', 2, 165),
(3, 'Hames Rodriguez', 10, 170),
(4, 'Rahul Krishna', 5, 165),
(5, 'James  Lionel', 7, 167),
(6, 'Tim Peck', 4, 175),
(7, 'Kim Level', 3, 180),
(8, 'Pordi Remenndem', 20, 166),
(9, 'Steffi Richards', 10, 144),
(10, 'Popi Stimula', 20, 187);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
('hrishikesh', 'Hrishikesh P. Menon', 'thepasswordofjoel'),
('joelninan', 'Joel Ninan Varghese', 'thepasswordofjoel'),
('rahulakrishna', 'Rahul A. Krishna', 'thepasswordofrahul');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
