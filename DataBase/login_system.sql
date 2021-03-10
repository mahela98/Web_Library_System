-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 05:02 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklikes`
--

CREATE TABLE `booklikes` (
  `likeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `liked` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(15) NOT NULL,
  `bookName` varchar(150) NOT NULL,
  `authorName` varchar(150) NOT NULL,
  `publishedDate` date DEFAULT NULL,
  `price` int(13) DEFAULT NULL,
  `amount` int(10) DEFAULT 1,
  `category` varchar(54) NOT NULL,
  `discription` longtext DEFAULT NULL,
  `bookAvailability` tinyint(1) NOT NULL DEFAULT 1,
  `likes` int(128) NOT NULL DEFAULT 0,
  `bookImage` varchar(255) NOT NULL DEFAULT 'default-Book.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `bookName`, `authorName`, `publishedDate`, `price`, `amount`, `category`, `discription`, `bookAvailability`, `likes`, `bookImage`) VALUES
(24, 'Harry Potter and the Philosopher\'s Stone', 'J. K. Rowling', '1997-06-26', 360, 2, 'Other', 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling. The first novel in the Harry Potter serie\'s and Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry\'s parents, but failed to kill Harry when he was just 15 months old.', 1, 0, 'SorcerersStone_2017.png'),
(25, 'Fantastic Beasts and Where to Find Them', 'J. K. Rowling', '2001-06-20', 350, 1, 'Other', 'Fantastic Beasts and Where to Find Them is a 2001 guide book written by British author J. K. Rowling about the magical creatures in the Harry Potter universe.', 1, 0, 'fantasticb001.jpeg'),
(26, 'Pro Git', 'Ben Straub and Scott Chacon', '2009-08-26', 500, 1, 'Information Tec', 'Git is the version control system developed by Linus Torvalds for Linux kernel development. It took the open source world by storm since its inception in 2005, and is used by small development shops and giants like Google, Red Hat, and IBM, and of course many open source projects. ', 1, 0, 'progit0001.jpeg'),
(33, 'The Lord of the Rings: The Return of the King', ' Peter Jackson', '2021-03-17', 350, 2, 'Other', 'The former Fellowship members prepare for the final battle. While Frodo and Sam approach Mount Doom to destroy the One Ring, they follow Gollum, unaware of the path he is leading them to.', 1, 0, 'The_Lord_of_the_Rings_-_The_Return_of_the_King_(2003).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `borrowbooks`
--

CREATE TABLE `borrowbooks` (
  `borrowId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `borrowDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `returned` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `bookId` int(12) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(13) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `vkey` varchar(255) NOT NULL DEFAULT '0',
  `verified` tinyint(3) NOT NULL DEFAULT 0,
  `fullName` varchar(128) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `adminOrNot` tinyint(1) NOT NULL DEFAULT 0,
  `imageURL` varchar(255) NOT NULL DEFAULT 'profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklikes`
--
ALTER TABLE `booklikes`
  ADD PRIMARY KEY (`likeId`),
  ADD KEY `booklikes_ibfk_1` (`userId`),
  ADD KEY `booklikes_ibfk_2` (`bookId`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `borrowbooks`
--
ALTER TABLE `borrowbooks`
  ADD PRIMARY KEY (`borrowId`),
  ADD KEY `borrowbooks_ibfk_1` (`userId`),
  ADD KEY `borrowbooks_ibfk_2` (`bookId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booklikes`
--
ALTER TABLE `booklikes`
  MODIFY `likeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `borrowbooks`
--
ALTER TABLE `borrowbooks`
  MODIFY `borrowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booklikes`
--
ALTER TABLE `booklikes`
  ADD CONSTRAINT `booklikes_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booklikes_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `books` (`bookId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrowbooks`
--
ALTER TABLE `borrowbooks`
  ADD CONSTRAINT `bookId` FOREIGN KEY (`bookId`) REFERENCES `books` (`bookId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowbooks_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
