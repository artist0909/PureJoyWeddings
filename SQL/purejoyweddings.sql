-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 12:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purejoyweddings`
--

-- --------------------------------------------------------

--
-- Table structure for table `bridewear_detail`
--

CREATE TABLE `bridewear_detail` (
  `bridewear_sno` int(20) NOT NULL,
  `bridewear_name` varchar(100) NOT NULL,
  `bridewear_location` varchar(100) NOT NULL,
  `bridewear_charges` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bridewear_detail`
--

INSERT INTO `bridewear_detail` (`bridewear_sno`, `bridewear_name`, `bridewear_location`, `bridewear_charges`, `email`, `contact_number`) VALUES
(1, 'Pandya Brothers', 'Vadodara', '10000-150000', 'l@u.com', '9874561230'),
(2, 'Jyoti Wears', 'Rajkot', '20000-150000', 'vara@gmail.com', '9876543210'),
(3, 'Bridal wears', 'Gandhinager', '15000-150000', 'vara@gmail.com', '9874563210'),
(4, 'Aone bridal wear', 'Amreli', '15000-150000', 'jay@123.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `decorater_detail`
--

CREATE TABLE `decorater_detail` (
  `decor_sno` int(11) NOT NULL,
  `decor_name` varchar(30) NOT NULL,
  `decor_location` varchar(30) NOT NULL,
  `decor_charges` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `decorater_detail`
--

INSERT INTO `decorater_detail` (`decor_sno`, `decor_name`, `decor_location`, `decor_charges`, `email`, `contact_number`) VALUES
(1, 'Kings DecoraterWala', 'Mumbai, Maharashtra', '50000', 'abc@g.com', '9876543210'),
(2, 'Golden Gala Decor', 'Mohali, Panjab', '60000', 'sds@thi.com', '9876543210'),
(3, 'Vintage Decor', 'Gandhinagar, Gujrat', '40000', 'd@b.com', '9876543210'),
(4, 'Graceful weddings', 'Rajkot, Gujrat', '100000', 'dev@gmail.com', '9876543210'),
(5, 'Elegant Weddings', 'Pune, Maharashtra', '70000', 'c@c.com', '9876543210'),
(6, 'Raju Mandap Service', 'Pune', '60000', 'manan@gmail.com', '9876543210'),
(8, 'Parag Mandap Service', 'Modera', '50000', 'v@u.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `decor_feedback`
--

CREATE TABLE `decor_feedback` (
  `feed_user_id` int(11) NOT NULL,
  `feed_username` varchar(30) NOT NULL,
  `feed_feedback` text NOT NULL,
  `feed_sno` int(11) NOT NULL,
  `feed_send_user_id` int(11) NOT NULL,
  `event_service_date` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `recommendation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `decor_feedback`
--

INSERT INTO `decor_feedback` (`feed_user_id`, `feed_username`, `feed_feedback`, `feed_sno`, `feed_send_user_id`, `event_service_date`, `rating`, `recommendation`) VALUES
(1, 'user', 'lnsnlnslknskn', 1, 0, '2024-02-05 00:00:00', 5, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `dj_details`
--

CREATE TABLE `dj_details` (
  `sno` int(15) NOT NULL,
  `dj_name` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `charges` int(100) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dj_details`
--

INSERT INTO `dj_details` (`sno`, `dj_name`, `area`, `charges`, `experience`, `email`, `contact_number`) VALUES
(1, 'DJ Chetan', 'Prince Palace, Jamnagar(Gujrat)', 100000, '5', 'sds@thi.com', '9876543210'),
(2, 'DJ Raj', 'Rajkot(Gujarat)', 200000, '5', 'abc@g.com', '9876543210'),
(3, 'Rockstar Varad', 'Rajkot(Gujarat)', 53000, '2', 'dev@gmail.com', '9876543210'),
(4, 'DJ arijit', 'mumbai', 100, '1', 'd@b.com', '9876543210'),
(5, 'DJ alok', 'Delhi', 150000, '2', 'c@c.com', '9876543210'),
(6, 'Dj Abhi', 'Punjab', 80000, '4', 'manan@gmail.com', '9876543210'),
(7, 'Dj Munna', 'Bhuvneshwar', 150000, '4', 'v@u.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `dj_feedback`
--

CREATE TABLE `dj_feedback` (
  `feed_user_id` int(10) NOT NULL,
  `feed_username` varchar(30) NOT NULL,
  `feed_feedback` text NOT NULL,
  `feed_sno` int(10) NOT NULL,
  `feed_send_user_id` int(10) NOT NULL,
  `event_service_date` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `recommendation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dj_feedback`
--

INSERT INTO `dj_feedback` (`feed_user_id`, `feed_username`, `feed_feedback`, `feed_sno`, `feed_send_user_id`, `event_service_date`, `rating`, `recommendation`) VALUES
(1, 'Karan ravani', 'Incredible DJ! Seamless mixes, diverse track selection, and a fantastic ability to read the crowd. Elevated the energy and made the event unforgettable. Can\'t wait for the next performance!', 1, 0, '0000-00-00 00:00:00', 0, ''),
(2, 'Brijesh vasiyar', 'Outstanding DJ! Masterful mixes, diverse playlist, and a keen sense of the crowd\'s vibe. Elevated the atmosphere and made the event unforgettable. Highly recommended!', 1, 0, '0000-00-00 00:00:00', 0, ''),
(3, 'Aman santani', '\"Outstanding DJ! Perfect mix, great energy, and seamless transitions kept the party alive. Highly recommend for a memorable event. Thank you for making our celebration unforgettable!\"', 1, 0, '0000-00-00 00:00:00', 0, ''),
(4, 'manan shukla', 'outstanding!', 1, 0, '0000-00-00 00:00:00', 4, 'yes'),
(5, 'varad shukla', 'we enjoy it', 1, 0, '0000-00-00 00:00:00', 4, 'yes'),
(6, 'Abhishek kumar', 'wbgrujbhjervijsbfv', 2, 0, '0000-00-00 00:00:00', 3, 'yes'),
(7, 'varad shukla', 'jdfjk', 2, 0, '0000-00-00 00:00:00', 4, 'yes'),
(8, 'varad shukla', 'dsbhjs', 2, 0, '0000-00-00 00:00:00', 4, 'yes'),
(9, 'user', 'sdgiusushfjk', 3, 0, '0000-00-00 00:00:00', 3, 'no'),
(10, 'ram', 'sdkbjksdbvkjs,d', 3, 0, '2024-02-04 00:00:00', 5, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `user_sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `eventDate` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `recommend` varchar(5) NOT NULL,
  `feed_id` int(11) NOT NULL,
  `feed_send_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`user_sno`, `name`, `eventDate`, `rating`, `comments`, `recommend`, `feed_id`, `feed_send_user_id`) VALUES
(1, 'dev', '2024-02-03 05:57:30', 4, 'Outstanding DJ! Perfect mix, great energy, and seamless transitions kept the party alive. Highly recommend for a memorable event. Thank you for making our celebration unforgettable!', 'yes', 0, 0),
(2, 'Raj', '2024-02-08 00:00:00', 4, 'Outstanding DJ! Perfect mix, great energy, and seamless transitions kept the party alive. Highly recommend for a memorable event. Thank you for making our celebration unforgettable!', 'yes', 0, 0),
(10, 'manan', '2024-02-15 00:00:00', 3, 'Outstanding DJ! Perfect mix, great energy, and seamless transitions kept the party alive. Highly recommend for a memorable event. ', 'no', 1, 0),
(20, 'manan', '2024-02-15 00:00:00', 3, 'Outstanding DJ! Perfect mix, great energy, and seamless transitions kept the party alive. Highly recommend for a memorable event. ', 'no', 1, 0),
(21, 'arman', '2024-02-06 00:00:00', 1, 'khoto mans', 'no', 1, 0),
(22, 'sahil', '2024-02-01 00:00:00', 3, 'sav khoto mans', 'no', 2, 0),
(23, 'farhan', '2024-02-01 00:00:00', 2, 'nabdon mans', 'no', 3, 0),
(24, 'raju', '2024-02-03 00:00:00', 4, 'dfjs', 'yes', 2, 0),
(26, 'suresh', '2024-02-01 00:00:00', 3, '       ', 'yes', 2, 0),
(30, 'harsh', '2024-01-31 00:00:00', 1, 'gujji', 'no', 2, 0),
(32, 'harsh', '2024-01-31 00:00:00', 1, 'gujji', 'no', 2, 0),
(33, 'rocky', '2024-02-04 00:00:00', 4, 'your amazing photographer', 'yes', 1, 0),
(34, 'Manan shukla', '2024-02-05 00:00:00', 4, 'Outstanding!', 'yes', 1, 0),
(35, 'Manan shukla', '2024-02-05 00:00:00', 4, 'Outstanding!', 'yes', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `food_detail`
--

CREATE TABLE `food_detail` (
  `food_sno` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_location` varchar(30) NOT NULL,
  `food_charges` varchar(10) NOT NULL,
  `food_max` varchar(10) NOT NULL,
  `food_min` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_detail`
--

INSERT INTO `food_detail` (`food_sno`, `food_name`, `food_location`, `food_charges`, `food_max`, `food_min`, `email`, `contact_number`) VALUES
(1, 'Pure Catering', 'Rajkot, Gujrat', '499', '2000', '50', 'sds@thi.com', '9876543210'),
(2, 'Marriage Morsels', 'Pune, Maharashtra', '599', '2000', '50', 'abc@g.com', '9812345608'),
(3, 'Love\'s Banquet Catering', 'Ranchi, Jharkhand', '799', '1500', '50', 'd@b.com', '9123456780'),
(4, 'Annapurna catering', 'Jamnagar, Gujrat', '599', '2000', '100', 'dev@gmail.com', '9123456708'),
(5, 'Divine catering', 'Mumbai, Maharashtra', '499', '1500', '100', 'c@c.com', '9345678102'),
(10, 'Rameshwar Bhojanalay', 'tamilnadu', '499', '2000', '200', 'v@u.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `food_feedback`
--

CREATE TABLE `food_feedback` (
  `feed_user_id` int(11) NOT NULL,
  `feed_username` varchar(30) NOT NULL,
  `feed_feedback` text NOT NULL,
  `feed_sno` int(11) NOT NULL,
  `feed_send_user_id` int(11) NOT NULL,
  `event_service_date` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `recommendation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_feedback`
--

INSERT INTO `food_feedback` (`feed_user_id`, `feed_username`, `feed_feedback`, `feed_sno`, `feed_send_user_id`, `event_service_date`, `rating`, `recommendation`) VALUES
(1, 'user', 'kdfnbkndflkbn', 1, 0, '2024-02-05 00:00:00', 5, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `groomwear_detail`
--

CREATE TABLE `groomwear_detail` (
  `groomwear_sno` int(20) NOT NULL,
  `groomwear_name` varchar(100) NOT NULL,
  `groomwear_location` varchar(100) NOT NULL,
  `groomwear_charges` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groomwear_detail`
--

INSERT INTO `groomwear_detail` (`groomwear_sno`, `groomwear_name`, `groomwear_location`, `groomwear_charges`, `email`, `contact_number`) VALUES
(1, 'My Perfect Fit', 'Khodiyar colony,Jamanager', '10000-150000', 'vara@gmail.com', '9876543210'),
(2, 'Palav', 'Ahmedabad', '20000-150000', 'l@m.com', '9865471230'),
(3, 'Blue Club', 'Rajkot', '15000-200000', 'v@u.com', '9475861247'),
(4, 'Rangoli art', 'Morbi', '10000-150000', 'amir@gmail.com', '9578641023'),
(5, 'Green Fiber', 'Surat', '20000-200000', 'vara@gmail.com', '9874563210'),
(7, 'Jyoti Wears', 'Rajkot', '20000-200000', 'vara@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `pandit_detail`
--

CREATE TABLE `pandit_detail` (
  `pandit_sno` int(11) NOT NULL,
  `pandit_name` varchar(30) NOT NULL,
  `pandit_location` varchar(30) NOT NULL,
  `pandit_charges` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pandit_detail`
--

INSERT INTO `pandit_detail` (`pandit_sno`, `pandit_name`, `pandit_location`, `pandit_charges`, `email`, `contact_number`) VALUES
(1, 'Bhatt Ji', 'Goa', '15000', 'sds@thi.com', '9876543210'),
(2, 'Shukla Ji', 'Jamnagar', '17000', 'abc@g.com', '9876543210\r\n'),
(3, 'Pandit Ji', 'Delhi', '18000', 'd@b.com', '9876543210'),
(4, 'Acharya Ji', 'Pune', '20000', 'dev@gmail.com', '9876543210'),
(5, 'Narendra Pandit', 'Chennai', '21000', 'c@c.com', '9876543210'),
(6, 'Ramkrushan Ji', 'Gandhinagar', '22000', 'manan@gmail.com', '9876543210'),
(8, 'kalyan Ji', 'Banglore', '50000', 'v@u.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `pandit_feedback`
--

CREATE TABLE `pandit_feedback` (
  `feed_user_id` int(11) NOT NULL,
  `feed_username` varchar(30) NOT NULL,
  `feed_feedback` varchar(255) NOT NULL,
  `feed_sno` int(11) NOT NULL,
  `feed_send_user_id` int(11) NOT NULL,
  `event_service_date` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `recommendation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pandit_feedback`
--

INSERT INTO `pandit_feedback` (`feed_user_id`, `feed_username`, `feed_feedback`, `feed_sno`, `feed_send_user_id`, `event_service_date`, `rating`, `recommendation`) VALUES
(1, 'user', 'ksdjvksdksnj', 1, 0, '2024-02-05 00:00:00', 4, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_detail`
--

CREATE TABLE `photographer_detail` (
  `photo_sno` int(10) NOT NULL,
  `photo_name` varchar(30) NOT NULL,
  `photo_location` varchar(30) NOT NULL,
  `photo_charges` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photographer_detail`
--

INSERT INTO `photographer_detail` (`photo_sno`, `photo_name`, `photo_location`, `photo_charges`, `email`, `contact_number`) VALUES
(1, 'The Wedding Studio', 'Hyderabad', '40000', 'sds@thi.com', '9276481346'),
(2, 'Pepper Green', 'Jamnagar, Gujrat', '30000', 'abc@g.com', '9427365184'),
(3, 'Balaji Photography', 'New Delhi', '20000', 'd@b.com', '9847156287'),
(4, 'Soham studio', 'Rachi, Jharkhand', '50000', 'dev@gmail.com', '9418479684'),
(5, 'Crazy studio', 'Mumbai, Maharashtra', '55000', 'c@c.com', '9574152634'),
(6, 'mohan studios', 'baroda', '35000', 'manan@gmail.com', '9687456321'),
(7, 'rohan studio', 'rajkot', '25000', 'manan@gmail.com', '9876543210'),
(12, 'Shyam Studios', 'morbi', '35000', 'v@u.com', '9876543210'),
(14, 'chirag photographer', 'rajkot', '50000', 'chirag@gmai.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_feedback`
--

CREATE TABLE `photographer_feedback` (
  `feed_user_id` int(11) NOT NULL,
  `feed_username` varchar(30) NOT NULL,
  `feed_feedback` text NOT NULL,
  `feed_sno` int(11) NOT NULL,
  `feed_send_user_id` int(11) NOT NULL,
  `event_service_date` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `recommendation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photographer_feedback`
--

INSERT INTO `photographer_feedback` (`feed_user_id`, `feed_username`, `feed_feedback`, `feed_sno`, `feed_send_user_id`, `event_service_date`, `rating`, `recommendation`) VALUES
(1, 'user', 'bsekfbskjdvbjkvbxkj', 1, 0, '2024-02-05 00:00:00', 4, 'yes'),
(2, 'dev', 'achha he', 6, 0, '2024-02-07 00:00:00', 5, 'yes'),
(3, 'Aman santani', 'moabjivbjibsdivnm nkadv', 1, 0, '2024-03-10 13:03:08', 4, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `registration_detail`
--

CREATE TABLE `registration_detail` (
  `sno` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pnumber` text NOT NULL,
  `register_as` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_detail`
--

INSERT INTO `registration_detail` (`sno`, `fullname`, `email`, `gender`, `pnumber`, `register_as`) VALUES
(1, 'devahsish bhatt', '', 'male', '987654321', 'user'),
(2, 'Devashish bhatt', '', 'male', '9874563210', 'user'),
(3, 'arti bhatt', '', 'female', '9876543210', 'serpro'),
(7, 'raj', 'l@m.com', 'male', '9876543210', 'user'),
(8, 'karan', 'l@m.com', 'male', '9876543210', 'serpro'),
(9, 'junaid', 'v@u.com', 'male', '9876543210', 'serpro'),
(10, 'vimal k bhatt', 'vbhatt_010@yahoo.com', 'male', '9874563210', 'serpro'),
(11, 'Amir Dhobi', 'amir@gmail.com', 'male', '9876543210', 'serpro'),
(13, 'Manan shukla', 'vara@gmail.com', 'male', '9876543210', 'serpro'),
(14, 'chirag sir', 'chirag@gmai.com', 'male', '9876543210', 'serpro'),
(15, 'shajan', 'shejan@gmail.com', 'other', '9876543210', 'serpro'),
(16, 'Jay Shah', 'jay@123.com', 'male', '9874562130', 'serpro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `uname`, `password`) VALUES
(1, 'raj', '$2y$10$R'),
(2, 'raj2', '$2y$10$U'),
(3, 'aman', '$2y$10$h'),
(4, 'manan', '456'),
(5, 'a@b.com', '123'),
(6, 'ramesh', '123'),
(7, 'varad@shukla.com', '123'),
(8, '', ''),
(9, 'd@b.com', '123'),
(10, 'd@c.com', '123'),
(11, 'c@a.com', '123'),
(13, 'vimal123@gmail.com', '123'),
(15, 'raj@gmail.com', '123'),
(19, 'v@b.com', '123'),
(20, 'l@m.com', '$2y$10$7cF5hbN42tRdGHAJ3C8JsO0uIbSLS1HQ7HG1C0Ag/cc9e/NqRSa2S'),
(21, 'v@u.com', '$2y$10$fFhtyt2i5vdOgsZux5x3iu04Y3ij308o.ZWy7i9fVferNszRkgidG'),
(22, 'vbhatt_010@yahoo.com', '$2y$10$fzIV1Mmq5sg31VAsP3rTCuJqi2XPp7HVzhw0mdp8CWCJhCweRTxr.'),
(23, 'parth@gmail.comm', '$2y$10$P24b8fdFFdV0iVBLAfpHSeOn49jBYXLWIIR/JhtFsx8PKix17k5Vm'),
(24, 'amir@gmail.com', '$2y$10$7ZAEEuwrmsCXmw7Ybb0Rw.Hsbyz35wFSpwMHE1tJChazy7EEq7Z6C'),
(25, 'abcd@efg.com', '$2y$10$ValbEgIaSXfldSZCulZlAe5LXO1iR2yk29ugbyqY2K5vsetkW.8Fu'),
(26, 'vara@gmail.com', '$2y$10$sZw2UkCz62mi9nQDWqja8Or9pTwG4k4ClaUWCP8o7WAjFZAee..va'),
(27, 'chirag@gmai.com', '$2y$10$L/SrWwxJDzF5mdNWxNEDSOXj6x5zbcRDgA1rJic6n1IcgY2fYrqQS'),
(28, 'shejan@gmail.com', '$2y$10$bZs1j5ftuSzgdDF1yO25Bu6ap/Bu3R6x9J/S/Wejzw26Z36tZSBsy'),
(29, 'jay@123.com', '$2y$10$3sqCu7q4mbQEUzMSi41UKuHJ8IxhTZp6qA5hUsl6pUmeiFyucrKzC');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_sno` int(15) NOT NULL,
  `venue_name` varchar(30) NOT NULL,
  `venue_place` varchar(50) NOT NULL,
  `venue_veg_price` int(7) NOT NULL,
  `venue_room` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_sno`, `venue_name`, `venue_place`, `venue_veg_price`, `venue_room`, `email`, `contact_number`) VALUES
(1, 'King Hotel', 'Lakshadweep', 1000, '500', 'sds@thi.com', '9876543210'),
(2, 'Prince palace', 'div, daman', 1500, '500', 'abc@g.com', '9876543210'),
(3, 'Pavitra hotel', 'rajkot', 2000, '400', 'd@b.com', '9876543210'),
(4, 'Honest Palace', 'vadodra', 2000, '200', 'dev@gmail.com', '9876543210'),
(5, 'Hotel Grand', 'Chennai, Tamil Nadu', 1600, '100', 'c@c.com', '9876543210'),
(6, 'Hotel Celebration', 'Jamnager', 60000, '100', 'manan@gmail.com', '9876543210'),
(7, 'king hotel', 'rajkot', 20000, '5', 'manan@gmail.com', '9876543210'),
(8, 'Hotel Josh', 'Baroda', 1500, '300', 'v@u.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `venue_feedback`
--

CREATE TABLE `venue_feedback` (
  `feed_user_id` int(11) NOT NULL,
  `feed_username` varchar(30) NOT NULL,
  `feed_feedback` text NOT NULL,
  `feed_sno` int(11) NOT NULL,
  `feed_send_user_id` int(11) NOT NULL,
  `event_service_date` datetime NOT NULL,
  `rating` int(5) NOT NULL,
  `recommendation` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue_feedback`
--

INSERT INTO `venue_feedback` (`feed_user_id`, `feed_username`, `feed_feedback`, `feed_sno`, `feed_send_user_id`, `event_service_date`, `rating`, `recommendation`) VALUES
(1, 'user', 'ljsfvbslfjn', 1, 0, '2024-02-05 00:00:00', 5, 'yes'),
(2, 'raj', 'smsflkgmrlk', 1, 0, '2024-02-05 00:00:00', 5, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bridewear_detail`
--
ALTER TABLE `bridewear_detail`
  ADD PRIMARY KEY (`bridewear_sno`);

--
-- Indexes for table `decorater_detail`
--
ALTER TABLE `decorater_detail`
  ADD PRIMARY KEY (`decor_sno`);

--
-- Indexes for table `decor_feedback`
--
ALTER TABLE `decor_feedback`
  ADD PRIMARY KEY (`feed_user_id`);

--
-- Indexes for table `dj_details`
--
ALTER TABLE `dj_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dj_feedback`
--
ALTER TABLE `dj_feedback`
  ADD PRIMARY KEY (`feed_user_id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`user_sno`);

--
-- Indexes for table `food_detail`
--
ALTER TABLE `food_detail`
  ADD PRIMARY KEY (`food_sno`);

--
-- Indexes for table `food_feedback`
--
ALTER TABLE `food_feedback`
  ADD PRIMARY KEY (`feed_user_id`);

--
-- Indexes for table `groomwear_detail`
--
ALTER TABLE `groomwear_detail`
  ADD PRIMARY KEY (`groomwear_sno`);

--
-- Indexes for table `pandit_detail`
--
ALTER TABLE `pandit_detail`
  ADD PRIMARY KEY (`pandit_sno`);

--
-- Indexes for table `pandit_feedback`
--
ALTER TABLE `pandit_feedback`
  ADD PRIMARY KEY (`feed_user_id`);

--
-- Indexes for table `photographer_detail`
--
ALTER TABLE `photographer_detail`
  ADD PRIMARY KEY (`photo_sno`);

--
-- Indexes for table `photographer_feedback`
--
ALTER TABLE `photographer_feedback`
  ADD PRIMARY KEY (`feed_user_id`);

--
-- Indexes for table `registration_detail`
--
ALTER TABLE `registration_detail`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_sno`);

--
-- Indexes for table `venue_feedback`
--
ALTER TABLE `venue_feedback`
  ADD PRIMARY KEY (`feed_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bridewear_detail`
--
ALTER TABLE `bridewear_detail`
  MODIFY `bridewear_sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `decorater_detail`
--
ALTER TABLE `decorater_detail`
  MODIFY `decor_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `decor_feedback`
--
ALTER TABLE `decor_feedback`
  MODIFY `feed_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dj_details`
--
ALTER TABLE `dj_details`
  MODIFY `sno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dj_feedback`
--
ALTER TABLE `dj_feedback`
  MODIFY `feed_user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `user_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `food_detail`
--
ALTER TABLE `food_detail`
  MODIFY `food_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food_feedback`
--
ALTER TABLE `food_feedback`
  MODIFY `feed_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groomwear_detail`
--
ALTER TABLE `groomwear_detail`
  MODIFY `groomwear_sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pandit_detail`
--
ALTER TABLE `pandit_detail`
  MODIFY `pandit_sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pandit_feedback`
--
ALTER TABLE `pandit_feedback`
  MODIFY `feed_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photographer_detail`
--
ALTER TABLE `photographer_detail`
  MODIFY `photo_sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `photographer_feedback`
--
ALTER TABLE `photographer_feedback`
  MODIFY `feed_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration_detail`
--
ALTER TABLE `registration_detail`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_sno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `venue_feedback`
--
ALTER TABLE `venue_feedback`
  MODIFY `feed_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
