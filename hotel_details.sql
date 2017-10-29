-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 06:59 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_details`
--

CREATE TABLE `hotel_details` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(100) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `cusine_type` varchar(50) NOT NULL,
  `non_veg_check` varchar(10) NOT NULL,
  `location` varchar(200) NOT NULL,
  `pay_for_two` varchar(20) NOT NULL,
  `cover_pic` varchar(20) NOT NULL,
  `logo_pic` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_details`
--

INSERT INTO `hotel_details` (`id`, `hotel_name`, `city_name`, `cusine_type`, `non_veg_check`, `location`, `pay_for_two`, `cover_pic`, `logo_pic`, `description`) VALUES
(1, 'Hotel Saravana Bhavan', 'Chennai', 'South Indian', 'Veg', 'Anna Nagar', '100', 'cover_pic_hsb.jpg', 'logo_pic_hsb.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dui sed dignissim fringilla. Quisque rhoncus metus vitae auctor pharetra. Suspendisse in leo sodales, pellentesque diam eget, lobortis turpis. Etiam rutrum sapien venenatis nibh maximus, et hendrerit velit convallis. In ut purus mauris. Donec id mi egestas justo dapibus vehicula. Suspendisse scelerisque mi non est scelerisque accumsan. Maecenas et turpis ligula.  Phasellus eget magna faucibus, efficitur sapien sit amet, i'),
(2, 'Hotel Dindgul Thalapakati', 'Chennai', 'South Indian', 'Non Veg', 'Mugappair West', '300', 'cover_pic_dt.jpg', 'logo_pic_dt.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dui sed dignissim fringilla. Quisque rhoncus metus vitae auctor pharetra. Suspendisse in leo sodales, pellentesque diam eget, lobortis turpis. Etiam rutrum sapien venenatis nibh maximus, et hendrerit velit convallis. In ut purus mauris. Donec id mi egestas justo dapibus vehicula. Suspendisse scelerisque mi non est scelerisque accumsan. Maecenas et turpis ligula.  Phasellus eget magna faucibus, efficitur sapien sit amet, i'),
(3, 'Wangs Kitchen', 'Thane', 'Chinese', 'Non Veg', 'Vasant Vihar', '450', 'cover_pic_wangs.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dui sed dignissim fringilla. Quisque rhoncus metus vitae auctor pharetra. Suspendisse in leo sodales, pellentesque diam eget, lobortis turpis. Etiam rutrum sapien venenatis nibh maximus, et hendrerit velit convallis. In ut purus mauris. Donec id mi egestas justo dapibus vehicula. Suspendisse scelerisque mi non est scelerisque accumsan. Maecenas et turpis ligula.  Phasellus eget magna faucibus, efficitur sapien sit amet, i'),
(4, 'Hotel Kurunji', 'Trichy', 'South Indian', 'Veg', 'Central Bus Stand', '80', 'cover_pic_k.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dui sed dignissim fringilla. Quisque rhoncus metus vitae auctor pharetra. Suspendisse in leo sodales, pellentesque diam eget, lobortis turpis. Etiam rutrum sapien venenatis nibh maximus, et hendrerit velit convallis. In ut purus mauris. Donec id mi egestas justo dapibus vehicula. Suspendisse scelerisque mi non est scelerisque accumsan. Maecenas et turpis ligula.  Phasellus eget magna faucibus, efficitur sapien sit amet, i'),
(5, 'Hotel Shagun', 'Thane', 'North Indian', 'Veg', 'Lok Upvan', '200', 'cover_pic_shagun.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dui sed dignissim fringilla. Quisque rhoncus metus vitae auctor pharetra. Suspendisse in leo sodales, pellentesque diam eget, lobortis turpis. Etiam rutrum sapien venenatis nibh maximus, et hendrerit velit convallis. In ut purus mauris. Donec id mi egestas justo dapibus vehicula. Suspendisse scelerisque mi non est scelerisque accumsan. Maecenas et turpis ligula.  Phasellus eget magna faucibus, efficitur sapien sit amet, i'),
(6, 'Hotel Southern Spice', 'Trichy', 'Tandoori', 'Non Veg', 'Cantonment', '350', 'cover_pic_spice.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dui sed dignissim fringilla. Quisque rhoncus metus vitae auctor pharetra. Suspendisse in leo sodales, pellentesque diam eget, lobortis turpis. Etiam rutrum sapien venenatis nibh maximus, et hendrerit velit convallis. In ut purus mauris. Donec id mi egestas justo dapibus vehicula. Suspendisse scelerisque mi non est scelerisque accumsan. Maecenas et turpis ligula.  Phasellus eget magna faucibus, efficitur sapien sit amet, i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_details`
--
ALTER TABLE `hotel_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_details`
--
ALTER TABLE `hotel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
