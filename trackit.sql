-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 03:52 PM
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
-- Database: `trackit`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `tittle` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `tittle`, `content`) VALUES
(23, 'Vision', 'The transformational leader in the technical education and skills development of the Filipino workforce.'),
(24, 'Mission', 'TESDA sets direction, promulgates relevant standards, and implements programs geared towards a quality-assured and inclusive technical education and skills development and certification system.'),
(25, 'Values Statement', 'We believe in demonstrated competence, institutional integrity, personal commitment, culture of innovativeness and a deep sense of nationalism.'),
(26, 'Quality Policy', '\"We measure our worth by the satisfaction of the customers we serve\"'),
(33, 'Mandate', 'The Technical Education and Skills Development Authority (TESDA) is the government agency tasked to manage and supervise technical education and skills development (TESD) in the Philippines. It was created by virtue of Republic Act 7796, otherwise known as the “Technical Education and Skills Development Act of 1994”. The said Act integrated the functions of the former National Manpower and Youth Council (NMYC), the Bureau of Technical-Vocational Education of the Department of Education, Culture and Sports (BTVE-DECS) and the Office of Apprenticeship of the Department of Labor and Employment (DOLE).');

-- --------------------------------------------------------

--
-- Table structure for table `accredit_tbl`
--

CREATE TABLE `accredit_tbl` (
  `id` int(11) NOT NULL,
  `course` text NOT NULL,
  `accredited` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accredit_tbl`
--

INSERT INTO `accredit_tbl` (`id`, `course`, `accredited`, `address`) VALUES
(6, 'Aquarian Training and Review Center', 'Marinduque Man Power and Trade Skills', 'asssasdasd'),
(7, 'Aquarian Training and Review Center', 'Marinduque Man Power and Trade Skills', ' asdsaaaaa'),
(8, 'Mogpog International Culinary School Inc.', 'DMDC Farm', ' asdsad'),
(9, '', 'Select accredited', ' asd'),
(10, 'DMDC Farm', 'Select accredited', ' asdddd'),
(11, '', 'Select accredited', ' asd'),
(13, 'Buyabod School of Art and Trades', 'Select accredited', ' asd'),
(14, 'Buyabod School of Art and Trades', 'Buyabod School of Art and Trades', ' asd'),
(15, 'Marinduque Man Power and Trade Skills', 'Buyabod School of Art and Trades', ' asd'),
(16, '', 'Automotive Servicing NC II', ' asd'),
(17, 'Computer Systems Servicing NC II', 'Organic Agriculture Production NC II', ' asdddd'),
(18, '', 'AGREA Agricultural Community International Foundation, Inc.', ' hehe'),
(19, '', 'AGREA Agricultural Community International Foundation, Inc.', ' hahaha'),
(20, 'Bartending NC II', 'AGREA Agricultural Community International Foundation, Inc.', ' sasa');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `username`, `password`) VALUES
(1, 'renanglesosa@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `createdTime` time NOT NULL DEFAULT current_timestamp(),
  `createdDate` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `what_ancmt` text NOT NULL,
  `where_ancmt` text NOT NULL,
  `when_ancmt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `createdTime`, `createdDate`, `description`, `what_ancmt`, `where_ancmt`, `when_ancmt`) VALUES
(12, '11:44:02', '2023-10-26', 'asdas asdas', 'update edit', 'bayan edit', '2023-10-26'),
(13, '11:57:04', '2023-10-26', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', '', '0000-00-00'),
(14, '12:05:31', '2023-10-26', 'asd', '', '', '0000-00-00'),
(15, '12:06:08', '2023-10-26', '', '', '', '0000-00-00'),
(16, '12:06:39', '2023-10-26', 'daddd', '', '', '0000-00-00'),
(17, '00:00:00', '2023-10-25', 'lorem descrription', 'anouncement', 'bayanan city', '0000-00-00'),
(18, '00:05:08', '2023-10-26', '', 'dsadsa', '', '2023-10-26'),
(19, '11:44:00', '2023-10-26', 'asdas asdas', 'salamin', 'bayan', '2023-10-26'),
(20, '11:44:02', '2023-10-26', 'asdas asdas', 'salamin', 'bayan', '2023-10-26'),
(21, '11:57:04', '2023-10-26', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', '', '0000-00-00'),
(22, '12:05:31', '2023-10-26', 'asd', '', '', '0000-00-00'),
(23, '12:06:08', '2023-10-26', '', '', '', '0000-00-00'),
(24, '12:06:39', '2023-10-26', 'da', '', '', '0000-00-00'),
(25, '00:00:00', '2023-10-25', 'lorem descrription', 'anouncement', 'bayanan city', '0000-00-00'),
(26, '00:05:08', '2023-10-26', '', 'dsadsa', '', '2023-10-26'),
(27, '11:44:00', '2023-10-26', 'asdas asdas', 'salamin', 'bayan', '2023-10-26'),
(28, '11:44:02', '2023-10-26', 'asdas asdas', 'salamin', 'bayan', '2023-10-26'),
(29, '11:57:04', '2023-10-26', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '', '', '0000-00-00'),
(30, '12:05:31', '2023-10-26', 'asd', '', '', '0000-00-00'),
(31, '12:06:08', '2023-10-26', '', '', '', '0000-00-00'),
(32, '12:06:39', '2023-10-26', 'da', '', '', '0000-00-00'),
(33, '16:35:48', '2023-11-11', 'news', 'asd', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_tbl`
--

CREATE TABLE `enrolled_tbl` (
  `id` int(11) NOT NULL,
  `student_num2` int(100) NOT NULL,
  `school_yr2` text NOT NULL,
  `created_yr` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrolled_tbl`
--

INSERT INTO `enrolled_tbl` (`id`, `student_num2`, `school_yr2`, `created_yr`) VALUES
(9, 800, '2023', '2023'),
(10, 1, '2023', '2023'),
(11, 3, '2023', '2024'),
(12, 20201011, '2024', '2024'),
(13, 345, '2024', '2024'),
(14, 232323, '2025', '2024'),
(15, 232323, '2026', '2024'),
(16, 232323, '2027', '2024'),
(17, 232323, '2028', '2024'),
(18, 23232323, '2025', '2024'),
(19, 23232323, '2026', '2024'),
(20, 23232323, '2027', '2024'),
(21, 0, '2026', '2024'),
(22, 0, '2027', '2024'),
(23, 345, '2025', '2024'),
(24, 345, '2026', '2024'),
(25, 345, '2027', '2024'),
(26, 345, '2026', '2024'),
(27, 345, '2027', '2024'),
(28, 23, '2026', '2024'),
(29, 23, '2026', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `form_course`
--

CREATE TABLE `form_course` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course` text NOT NULL,
  `rand_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_course`
--

INSERT INTO `form_course` (`id`, `user_id`, `course`, `rand_num`) VALUES
(1, 0, 'Bread and Pastry Production', '75852'),
(2, 0, 'Housekeeping', '75852'),
(3, 0, 'Electrical Installation and Maintenance', '75852'),
(4, 0, 'Automotive Servicing', '75852'),
(5, 0, 'Agriculture', '75852'),
(6, 0, 'Bread and Pastry Production', '24259'),
(7, 0, 'Bread and Pastry Production', '15027'),
(8, 0, 'Housekeeping', '15027'),
(9, 0, 'Electrical Installation and Maintenance', '15027');

-- --------------------------------------------------------

--
-- Table structure for table `form_graduate`
--

CREATE TABLE `form_graduate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `syg` text NOT NULL,
  `rand_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_graduate`
--

INSERT INTO `form_graduate` (`id`, `user_id`, `syg`, `rand_num`) VALUES
(1, 0, '2022', '75852'),
(2, 0, '2023', '75852'),
(3, 0, '2024', '75852'),
(4, 0, '2022', '24259'),
(5, 0, '2022', '15027'),
(6, 0, '2023', '15027'),
(7, 0, '2024', '15027');

-- --------------------------------------------------------

--
-- Table structure for table `graduates_tbl`
--

CREATE TABLE `graduates_tbl` (
  `id` int(11) NOT NULL,
  `student_num` int(100) NOT NULL,
  `school_yr` text NOT NULL,
  `created_yr` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graduates_tbl`
--

INSERT INTO `graduates_tbl` (`id`, `student_num`, `school_yr`, `created_yr`) VALUES
(1, 3, '2025', '2023'),
(2, 88, '2023', '2023'),
(3, 2, '2024', '2024'),
(4, 5, '2023', '2023'),
(5, 0, '2023', '2023'),
(6, 4, '2023', '2023'),
(7, 20261011, '2026', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `report_tbl`
--

CREATE TABLE `report_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `syg` text NOT NULL,
  `fn` text NOT NULL,
  `gender` text NOT NULL,
  `age` text NOT NULL,
  `birthdate` date NOT NULL,
  `civilstatus` text NOT NULL,
  `course` text NOT NULL,
  `created_mnth` text NOT NULL,
  `ncii` text NOT NULL,
  `cag` text NOT NULL,
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `created_yrs` text NOT NULL,
  `q8` text NOT NULL,
  `employed` text NOT NULL,
  `dcrptn` text NOT NULL,
  `created_yr` year(4) NOT NULL DEFAULT current_timestamp(),
  `student_type` text NOT NULL,
  `rand_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_tbl`
--

INSERT INTO `report_tbl` (`id`, `email`, `syg`, `fn`, `gender`, `age`, `birthdate`, `civilstatus`, `course`, `created_mnth`, `ncii`, `cag`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `created_yrs`, `q8`, `employed`, `dcrptn`, `created_yr`, `student_type`, `rand_num`) VALUES
(38, 'kkit8588@gmail.com', '', 'Troilus Sedoguio', 'Select your gender', '', '0000-00-00', 'Select your civil status', '', '', 'none', 'none', '', '', 'none', '', '', '', '', '', '', '', '2024', '', '71130'),
(39, 'kkit8588@gmail.com', '', 'asdasdasdasd', 'Select your gender', '', '0000-00-00', 'Select your civil status', '', '', 'none', 'none', '', '', 'none', '', '', '', '', '', '', '', '2024', '', '75852'),
(40, 'kkit8588@gmail.com', '', 'Troilus Sedoguio', 'Select your gender', '', '0000-00-00', 'Select your civil status', '', '', 'none', 'none', '', '', 'none', '', '', '', '', '', 'Yes', '', '2024', '', '26817'),
(41, 'troilussedoguio@gmail.com', '', 'TROILUS', 'male', '7', '2016-07-31', 'Single', '', '', 'NCIII', 'none', '', '', 'none', '', '', '', '', '', 'No', '', '2024', '', '24259'),
(42, 'troilussedoguio@gmail.com', '', 'TROILUS', 'male', '9', '2014-04-30', 'Single', '', '2 months', 'NCII', 'Higher Education', 'Yes', 'f Enterpreneurshi', 'Regular permanent', 'After graduation', 'your job related', ' your job ', '1 year', '60,000 - 70,000', 'Yes', 'WHAT IS YOUR JOB DESCRIPTION', '2024', '', '15027');

-- --------------------------------------------------------

--
-- Table structure for table `req_name`
--

CREATE TABLE `req_name` (
  `id` int(11) NOT NULL,
  `rn` text NOT NULL,
  `req_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `req_name`
--

INSERT INTO `req_name` (`id`, `rn`, `req_num`) VALUES
(1, 'TOR', '13423'),
(2, 'COR', '13423'),
(3, 'COE', '13423');

-- --------------------------------------------------------

--
-- Table structure for table `req_tbl`
--

CREATE TABLE `req_tbl` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `course` text NOT NULL,
  `yg` text NOT NULL,
  `email` text NOT NULL,
  `rn` text NOT NULL,
  `request_date` date NOT NULL DEFAULT current_timestamp(),
  `req_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `req_tbl`
--

INSERT INTO `req_tbl` (`id`, `name`, `course`, `yg`, `email`, `rn`, `request_date`, `req_num`) VALUES
(1, 'asd', '', '', '', '', '2024-01-20', ''),
(2, 'Troilus Sedoguio', 'BSIT', '2023', 'troilussedoguio@gmail.com', 'TOR', '2024-01-20', ''),
(3, 'JCYRUS', 'STEM', '2023', 'jcyrus8588@gmail.com', '', '2024-01-31', '76586'),
(4, 'JCYRUS', 'STEM', '2023', 'jcyrus8588@gmail.com', '', '2024-01-31', '71225'),
(5, 'JCYRUS', 'STEM', '2023', 'jcyrus8588@gmail.com', '', '2024-01-31', '13423');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  `student_no` int(250) NOT NULL,
  `created_yr` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `fullname`, `email`, `student_no`, `created_yr`) VALUES
(9, 'TROILUS SEDOGUIO', 'troilussedoguio@gmail.com', 20231011, '2024'),
(10, 'JOHNY DOE', 'JOHNY@gmail.com', 20231012, '2024'),
(11, 'JCYRUS', 'jcyrus8588@gmail.com', 0, '2023'),
(12, '', '', 0, '2025'),
(13, '', '', 0, '2023'),
(14, 'ASDASD', 'troilussedoguio@gmail.com', 345, '2026');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `profile` text NOT NULL,
  `status` text NOT NULL DEFAULT 'unregistered',
  `yg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `fullname`, `username`, `email`, `password`, `profile`, `status`, `yg`) VALUES
(14, 'JCYRUS', 'jcyrus8588', 'jcyrus8588@gmail.com', '$2y$10$geJOs9YtNRFefRn5JILqce7YOgfk98i27KXRt0dPhOj600hi5FREK', '', 'registered', '2023'),
(15, 'KKIT', 'troilus', 'kkit8588@gmail.com', '$2y$10$geJOs9YtNRFefRn5JILqce7YOgfk98i27KXRt0dPhOj600hi5FREK', '', 'registered', '2024'),
(16, 'TROILUS', 'troilus', 'troilussedoguio@gmail.com', '$2y$10$geJOs9YtNRFefRn5JILqce7YOgfk98i27KXRt0dPhOj600hi5FREK', '', 'registered', '2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accredit_tbl`
--
ALTER TABLE `accredit_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_tbl`
--
ALTER TABLE `enrolled_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_course`
--
ALTER TABLE `form_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_graduate`
--
ALTER TABLE `form_graduate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduates_tbl`
--
ALTER TABLE `graduates_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_tbl`
--
ALTER TABLE `report_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_name`
--
ALTER TABLE `req_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_tbl`
--
ALTER TABLE `req_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `accredit_tbl`
--
ALTER TABLE `accredit_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `enrolled_tbl`
--
ALTER TABLE `enrolled_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `form_course`
--
ALTER TABLE `form_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form_graduate`
--
ALTER TABLE `form_graduate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `graduates_tbl`
--
ALTER TABLE `graduates_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report_tbl`
--
ALTER TABLE `report_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `req_name`
--
ALTER TABLE `req_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `req_tbl`
--
ALTER TABLE `req_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
