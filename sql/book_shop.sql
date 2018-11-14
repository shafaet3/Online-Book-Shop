-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 07:41 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin@email.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_isbn` bigint(100) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_category_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_image_name` varchar(100) NOT NULL,
  `book_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_id`, `book_category_id`, `book_title`, `book_author`, `book_image_name`, `book_price`) VALUES
(9789849295907, 1, 3, 'Paradoxical Sazid', 'Arif Azad', 'paradoxical_sazid.jpg', '225.00'),
(9789849018346, 2, 3, 'Black Holer Baccha', 'Md. Zafar Ikbal', 'black_holer_baccha.jpg', '176.00'),
(9789845021272, 3, 3, 'Deyal', 'Humayun Ahmed', 'deyal.jpg', '323.00'),
(9789848875865, 4, 3, 'Ganiter Range', 'Chamak Hasan', 'ganiter_range.jpg', '213.00'),
(9789381753552, 5, 3, 'Grow Rich While You Sleep', 'Ben Sweetland', 'grow_rich_while_you_sleep.jpg', '351.00'),
(9789849206637, 6, 3, 'Habluder Jonno Programming', 'Jhankar Mahbub', 'habluder_janya_programming.jpg', '204.00'),
(9780091947460, 7, 3, 'How to Win Friends and Influence People', 'Dale Carnegie', 'how_to_win_friends.jpg', '1258.00'),
(9780671652500, 8, 3, 'Light From Many Lamps', 'Lillian Eichler Watson', 'light_from_many_lamps.jpg', '898.00'),
(9789849216414, 9, 3, 'Programming Contest DataStructure And Algorithm', 'Md. Mahbubul Hasan', 'programming_contest.jpg', '306.00'),
(9847009602238, 10, 1, 'Outsourcing Shuruta Jevabe', 'Md. Aminur Rahman', 'outsourcing-shuruta-jevabe-and-shuru-korar-por.jpg', '141.00'),
(9789849216407, 11, 1, '52-programming-problem-and-solution', 'Tamim Shahriar Subin', '52-programming-problem-and-solution.jpg', '204.00'),
(9848682767, 12, 1, 'Jochna O Jononir Golpo', 'Humayun Ahmed', 'jochna-o-jononir-golpo.jpg', '638.00'),
(9789849213079, 13, 1, 'Markin Documente Bangladesher Muktijuddho-71', 'Pinaki Vattachargo', 'markin-documente-bangladesher-muktijuddho--71.jpg', '200.00'),
(9789843390769, 14, 1, 'Python Porichiti', 'Tamim Shahriar Subin', 'python-porichiti.jpg', '221.00'),
(9789849216438, 15, 1, 'Graph Algorithm', 'Shafaet Ashraf', 'graph-algorithm.jpg', '187.00'),
(9789843390541, 16, 1, 'Double Standard', 'Dr. Shamsul Arifin', 'double-standard.jpg', '143.00'),
(9847010501261, 17, 1, 'Misir Ali Samagra-1', 'Humayun Ahmed', 'misir-ali-samagra-1.jpg', '680.00'),
(9789843391902, 18, 1, 'Laravel Php Web Framework', 'Nurujjam Milon', 'aravel-php-web-framework.jpg', '298.00');

-- --------------------------------------------------------

--
-- Table structure for table `books_category`
--

CREATE TABLE `books_category` (
  `book_category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_category`
--

INSERT INTO `books_category` (`book_category_id`, `category_name`) VALUES
(1, 'New Arrival'),
(2, 'Top Rated'),
(3, 'Best Seller'),
(4, 'Science'),
(5, 'Comics'),
(6, 'Travel'),
(7, 'Health'),
(8, 'Cooking'),
(9, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `message`, `contact_id`) VALUES
('shafaet', 'shafaethossain16@yahoo.com', 1961343996, 'This is test message', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `phone`, `password`, `address`) VALUES
('shafaet', 'shafaethossain16@yahoo.com', 1961343996, 'zxc123', '123 asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_name`,`password`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_isbn` (`book_isbn`),
  ADD KEY `book_category_id` (`book_category_id`);

--
-- Indexes for table `books_category`
--
ALTER TABLE `books_category`
  ADD PRIMARY KEY (`book_category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `books_category`
--
ALTER TABLE `books_category`
  MODIFY `book_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`book_category_id`) REFERENCES `books_category` (`book_category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
