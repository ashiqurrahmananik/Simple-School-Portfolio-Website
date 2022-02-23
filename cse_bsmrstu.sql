-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 08:42 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_bsmrstu`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `blog` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_members`
--

CREATE TABLE `faculty_members` (
  `id` int(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_members`
--

INSERT INTO `faculty_members` (`id`, `img`, `name`, `title`) VALUES
(12, 'MKBaow pic.jpg', 'Dr. Mrinal Kanti Baowaly', 'Associate Professor'),
(13, 'saleh Ahmed Pic.jpg', 'Dr. Saleh Ahmed', 'Associate Professor'),
(14, '5bbc2b0673e94-Akkas Ali.jpg', 'Engr. Md. Akkas Ali', 'Associate Professor'),
(15, 'Md. jamal.jpg', 'Md. Jamal Uddin', 'Associate Professor'),
(16, 'Nesarul.jpg', 'Md. Nesarul Hoque', 'Associate Professor'),
(17, 'Md. monowar.jpg', 'Md. Monowar Hossain', 'Associate Professor'),
(18, 'Rahat Hasan.jpg', 'F. M. Rahat Hasan Robi', 'Associate Professor'),
(19, 'Husnul Ajra.jpg', 'Husnul Ajra', 'Associate Professor'),
(20, 'Tumpa Rani Shaha.jpg', 'Tumpa Rani Shaha', 'Associate Professor'),
(21, 'Md. Martuza Ahamad.jpg', 'Md. Martuza Ahamad', 'Associate Professor'),
(22, 'IMG_20180926_223119 (2).jpg', 'Abu Bakar Muhammad Abdullah', 'Lecturer'),
(23, 'Maloy Devnath.jfif', 'Maloy Kumar Devnath', 'Lecturer'),
(24, 'Faruk Hossen.jpg', 'Faruk Hossen', 'Lecturer'),
(25, 'Nasif Ahmed.jpg', 'Nasif Ahmed', 'Lecturer'),
(26, 'sakifa.jpg', 'Sakifa Aktar', 'Lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `filename` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(100) NOT NULL,
  `logo_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `blog` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `blog`, `img`) VALUES
(7, 'বাংলাদেশ ক্রিকেট দলের ব্যাটিং কোচ জেমি সিডন্স করোনা আক্রান্ত', 'বাংলাদেশে এসে পরদিন থেকেই বিপিএলের ম্যাচ দেখতে নিয়মিত মাঠে যাচ্ছেন অস্ট্রেলিয়ান কোচ সিডন্স। মিরপুর শেরেবাংলা স্টেডিয়ামে তো যাচ্ছেনই, গিয়েছেন সিলেটেও। ঢাকায় ফিরে গতকালও ছিলেন মাঠে। প্রথম আলোর সঙ্গে কথোপকথনে এ-ও বলেছিলেন, খেলোয়াড়দের নিয়ে অনুশীলনে নামতে উদ্‌গ্রীব হয়ে আছেন তিনি। বিপিএল শেষে আর দেরি করতে চান না।  কিন্তু করোনা পজিটিভ হওয়ায় আপাতত হোটেলে বন্দীই থাকতে হবে সিডন্সকে। চিকিৎসকের পরামর্শ অনুযায়ী হোটেলেই চলবে তাঁর চিকিৎসা।  ২০০৭ থেকে ২০১১ সাল পর্যন্ত বাংলাদেশ জাতীয় দলের কোচ ছিলেন জেমি সিডন্স। এবার এসেছেন বিসিবির ব্যাটিং পরামর্শক হয়ে। তবে অ্যাশওয়েল প্রিন্স পদত্যাগ করায় তিনিই এখন বাংলাদেশ দলের ব্যাটিং কোচের দায়িত্ব নেবেন।', 'prothomalo-bangla_2022-02_53ed3e55-3e21-493d-a58d-ebbc60b358da_RMP_0509.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `blog` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `f_name` varchar(1000) NOT NULL,
  `l_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `f_name`, `l_name`, `email`, `pass`) VALUES
(5, 'Tanvir', '2022-1-60-89', 'tanvir@gmail.com', '5db85fe4d7c285f5b49749b7a411daf6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `userid` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `pass`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_members`
--
ALTER TABLE `faculty_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_members`
--
ALTER TABLE `faculty_members`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
