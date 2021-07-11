-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 05:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voiceup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_password`) VALUES
(1, 'admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(500) NOT NULL,
  `c_subject` varchar(100) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`c_id`, `c_name`, `c_mobile`, `c_email`, `c_address`, `c_subject`, `c_message`) VALUES
(1, 'Faheem Ahmad', '7042757708', 'faheemahmad@gmail.com', 'Main city, Patna', 'Regarding registration at your portal', 'I am not able to upload my document. Can you please help me out regarding same.'),
(2, 'Mahesh Babu', '9852364178', 'maheshbabu213@gmail.com', 'Fish street, Chennai main Road, Tamil Nadu', 'Feedback', 'This portal helped me in resolution of my problem. Thankyou for giving such a nice platform. We are really grateful.'),
(3, 'Deepak Singh', '9745256321', 'deepaksingh356@gmail.com', '8th Main Cross, Davangere, Karnataka', 'I am facing problem in posting my issue', 'Can you please help me out in posting my issue. I am no able to see the concern department related to my issue.');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `d_id` int(11) NOT NULL,
  `d_type` varchar(100) NOT NULL,
  `d_mobile` varchar(100) NOT NULL,
  `d_street` varchar(500) NOT NULL,
  `d_city` varchar(100) NOT NULL,
  `d_state` varchar(100) NOT NULL,
  `d_pincode` varchar(100) NOT NULL,
  `d_cpname` varchar(100) NOT NULL,
  `d_photo` varchar(100) NOT NULL,
  `d_cppos` varchar(100) NOT NULL,
  `d_cpeid` varchar(100) NOT NULL,
  `d_cpepdf` varchar(100) NOT NULL,
  `d_aadhar` varchar(100) NOT NULL,
  `d_aadharpdf` varchar(100) NOT NULL,
  `d_password` varchar(100) NOT NULL,
  `d_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`d_id`, `d_type`, `d_mobile`, `d_street`, `d_city`, `d_state`, `d_pincode`, `d_cpname`, `d_photo`, `d_cppos`, `d_cpeid`, `d_cpepdf`, `d_aadhar`, `d_aadharpdf`, `d_password`, `d_approve`) VALUES
(1, 'Police', '9672836724', 'Near Post Office, Brahmavara', 'Udupi', 'Karnataka', '576213', 'Ganpat Patel', '../dept/photos/9672836724-ganpat.jpeg', 'Inspector ', 'PL-6583939', '../dept/epdf/9672836724.png', '897876543467', '../dept/aadhar/9672836724-Ganpat-AADHAR.pdf', 'Demo@123', '2'),
(2, 'Panchayat', '7834672728', 'Road behind Market', 'Banglore', 'Karnataka', '560004', 'Udit Narayan', '../dept/photos/7834672728-Udit Narayan-logo.png', 'Social Interaction Incharge', 'VL-678389322', '../dept/epdf/7834672728-Udit Narayan-logo.png', '767876543467', '../dept/aadhar/7834672728-Udit Narayan-AADHAR.pdf', 'Demo@123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `i_id` int(11) NOT NULL,
  `i_u_id` varchar(100) NOT NULL,
  `i_type` varchar(100) NOT NULL,
  `i_title` varchar(100) NOT NULL,
  `i_sum` varchar(100) NOT NULL,
  `i_des` text NOT NULL,
  `i_exactloc` varchar(500) NOT NULL,
  `i_date` varchar(100) NOT NULL,
  `i_img1` varchar(100) NOT NULL,
  `i_img2` varchar(100) NOT NULL,
  `i_img3` varchar(100) NOT NULL,
  `i_upvote` varchar(100) NOT NULL DEFAULT '0',
  `i_downvote` varchar(100) NOT NULL DEFAULT '0',
  `i_privacy` varchar(100) NOT NULL,
  `i_status` varchar(100) NOT NULL DEFAULT '0',
  `i_d_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`i_id`, `i_u_id`, `i_type`, `i_title`, `i_sum`, `i_des`, `i_exactloc`, `i_date`, `i_img1`, `i_img2`, `i_img3`, `i_upvote`, `i_downvote`, `i_privacy`, `i_status`, `i_d_id`) VALUES
(1, '2', 'Police', 'Thief in my house', 'There was a thief in my house. And You just need to do something with it, You should help Up Please', 'Near Petrol Pump', 'There was a thief in my house.', '2021/07/10', 'issue/57219-theif-1.jpg', 'issue/39617-theif-2.jpg', 'issue/42407-theif-3.jpg', '0', '0', 'Personal', '0', ''),
(2, '3', 'Municipal', 'Improper garbage collection', 'We are seeing it for a long. Please solve it.', 'There is so much garbage in the city market. We want that you people take care of it. And make it better for future.', 'City Market', '2021/07/10', 'issue/85206-garbage-1.jpg', 'issue/34163-garbage-2.jpg', 'issue/35690-garbage-3.png', '57', '14', 'Public', '0', ''),
(3, '2', 'Municipal', 'Potholes on the road', 'We are raising this for a long.', 'Please try to solve it. We saw many accidents due to these potholes. Please look into the matter.', 'Main Road', '2021/07/10', 'issue/73817-pathhole-1.jpg', 'issue/96958-pathhole-2.jpg', 'issue/20733-pathhole-3.jpg', '21', '12', 'Public', '0', ''),
(4, '1', 'Police', 'Bike Theft', 'Someone took my bike without my permission.', 'Just help me to get back my bike numbered KA20CA6754. I am looking for your support.', 'Panchayat Office', '2021/07/10', 'issue/48987-bike-1.jpg', 'issue/52496-bike-2.jpg', 'issue/89298-bike-3.jpg', '0', '0', 'Personal', '0', ''),
(5, '3', 'Police', 'Covid Rules Violation ', 'Everyone should take care of rules.', 'This can\'t be acceptable that people are showing so much negligence about covid rules in the market. Police should take some action.', 'Market', '2021/07/10', 'issue/75867-covid-1.jpg', 'issue/13959-covid-2.jpg', 'issue/20269-covid-3.jpg', '7', '2', 'Public', '0', ''),
(6, '2', 'Police', 'Frequently burglars in the shop', 'It\'s heartbreaking that no one cares about it.', 'I hope you really understand this issue and take action so we can live with peace and pride. I am sure you will help all of us.', 'Temple Road', '2021/07/10', 'issue/23692-burglar-1.jpg', 'issue/91313-burglar-2.png', 'issue/63760-burglar-3.jpg', '70', '35', 'Public', '0', ''),
(7, '1', 'Municipal', 'Tax Document Fault', 'I am just wondering how my documents are not proper.', 'I have contacted some officials several times but I am not able to get satisfactory answer so please help me to get resolved my issue.', 'NA', '2021/07/10', 'issue/29442-tax-1.jpg', 'issue/96740-tax-2.jpg', 'issue/27512-tax-3.jpg', '0', '0', 'Personal', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_mobile` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_gender` varchar(100) NOT NULL,
  `u_age` varchar(100) NOT NULL,
  `u_street` varchar(500) NOT NULL,
  `u_city` varchar(100) NOT NULL,
  `u_state` varchar(100) NOT NULL,
  `u_pincode` varchar(100) NOT NULL,
  `u_aadhar` varchar(100) NOT NULL,
  `u_aadharpdf` varchar(500) NOT NULL,
  `u_photo` varchar(500) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_approve` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_mobile`, `u_name`, `u_gender`, `u_age`, `u_street`, `u_city`, `u_state`, `u_pincode`, `u_aadhar`, `u_aadharpdf`, `u_photo`, `u_password`, `u_approve`) VALUES
(1, '9672836724', 'Ganpat Patel', 'Male', '21', '202, Laxmi Plaza', 'Brahmavara', 'Karnataka', '576213', '799721133696', 'aadhar/9672836724-Ganpat-AADHAR.pdf', 'photos/9672836724-ganpat.jpeg', 'Demo@123', '2'),
(2, '9672836721', 'Arvind', 'Male', '25', 'Main Road', 'Udupi', 'Karnataka', '560004', '784392939232', 'aadhar/9672836721-Arvind-AADHAR.pdf', 'photos/9672836721-Arvind-img3.jpg', 'Demo@123', '1'),
(3, '9672836728', 'Rajesh', 'Male', '29', 'Side Vali Galli', 'Brahmavara', 'Karnataka', '576213', '345692939278', 'aadhar/9672836728-Rajesh-AADHAR.pdf', 'photos/9672836728-bhavani.jpg', 'Demo@123', '2'),
(4, '9672835678', 'Himanshu', 'Male', '27', 'Round Building', 'Bidar', 'Karnataka', '585401', '784838288193', '../user/aadhar/9672835678-Himanshu-AADHAR.pdf', '../user/photos/9672835678-Himanshu-img2.jpg', 'Demo@123', '3');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `v_id` int(11) NOT NULL,
  `v_u_mobile` varchar(100) NOT NULL,
  `v_i_id` varchar(100) NOT NULL,
  `v_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`v_id`, `v_u_mobile`, `v_i_id`, `v_type`) VALUES
(114, '9672836724', '2', '1'),
(116, '9672836724', '6', '2'),
(117, '9672836724', '5', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_mobile` (`d_mobile`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_mobile` (`u_mobile`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
