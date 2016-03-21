-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 07:09 AM
-- Server version: 10.0.23-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpa23db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `author_id`, `date`) VALUES
(1, 'Test Blog 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '2016-03-12 11:08:43'),
(2, 'Test Blog 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, '2016-03-12 11:09:12'),
(3, 'Test Blog 3', '<p>This is text blog 3</p>', 0, '2016-03-13 12:00:09'),
(4, 'Test Blog 4', '<p>This is test 4. Bla Bla Bla</p>', 0, '2016-03-19 10:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_category` text NOT NULL,
  `product_description` text NOT NULL,
  `min_quantity` int(11) NOT NULL,
  `max_quantity` int(11) NOT NULL,
  `product_dept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_quantity`, `product_category`, `product_description`, `min_quantity`, `max_quantity`, `product_dept`) VALUES
(8, 'asdasd', 2, 'a:9:{i:0;s:3:"asd";i:1;s:4:" asd";i:2;s:4:" asd";i:3;s:4:" asd";i:4;s:4:" asd";i:5;s:3:" as";i:6;s:2:" d";i:7;s:4:" asd";i:8;s:7:" adsasd";}', 'adasdasd', 1, 1, 1),
(10, '5evsf', 3, 'a:6:{i:0;s:2:"sd";i:1;s:5:" sdgf";i:2;s:4:" dsg";i:3;s:4:" dsg";i:4;s:4:" sdg";i:5;s:4:" sdg";}', 'sfdsf sdfsdfsdf sf sdf sdf sdf sdf sfsdf sdf', 4, 6, 1),
(11, '456556', 3, 'a:6:{i:0;s:2:"sd";i:1;s:5:" sdgf";i:2;s:4:" dsg";i:3;s:4:" dsg";i:4;s:4:" sdg";i:5;s:4:" sdg";}', 'sfdsf sdfsdfsdf sf sdf sdf sdf sdf sfsdf sdf', 4, 6, 1),
(12, 'r5dfrfdg', 3, 'a:6:{i:0;s:2:"sd";i:1;s:5:" sdgf";i:2;s:4:" dsg";i:3;s:4:" dsg";i:4;s:4:" sdg";i:5;s:4:" sdg";}', 'sfdsf sdfsdfsdf sf sdf sdf sdf sdf sfsdf sdf', 4, 6, 1),
(13, 'btrttwef', 3, 'a:6:{i:0;s:2:"sd";i:1;s:5:" sdgf";i:2;s:4:" dsg";i:3;s:4:" dsg";i:4;s:4:" sdg";i:5;s:4:" sdg";}', 'sfdsf sdfsdfsdf sf sdf sdf sdf sdf sfsdf sdf', 4, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
