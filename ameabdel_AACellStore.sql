-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2018 at 09:44 PM
-- Server version: 5.6.36-82.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ameabdel_AACellStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` varchar(7) NOT NULL DEFAULT '',
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
('ar', 'aristo'),
('em', 'emerge');



CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, 'brush-ss', 'LG-Aristo Silver', 'Aristo Silver', 50, 1, 50, '2018-03-16 16:50:29', 'l@gmail.com'),
(13, 'b-emerge', 'Samsung-J3 Blue Emerge', 'Blue Samsung Emerge', 10, 1, 10, '2018-03-16 16:50:29', 'l@gmail.com'),
(14, 'brush-ss', 'LG-Aristo Silver', 'Aristo Silver', 50, 1, 50, '2018-03-16 16:54:31', 'last_fantasy1017@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `cat_id` varchar(7) DEFAULT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'aristo', 'ar', 'brush-ss', 'LG-Aristo Silver', 'Aristo Silver', 'aristo-ss.jpg', 2, '50.00'),
(2, 'aristo', 'ar', 'brush-pk', 'LG-Aristo Pink', 'Aristo Pink', 'aristo-pk.jpg', 5, '20.00'),
(3, 'aristo', 'ar', 'brush-bk', 'LG-Aristo Black', 'Aristo Black', 'aristo-bk.jpg', 6, '20.00'),
(4, 'aristo', 'ar', 'brush-blue', 'LG-Aristo Blue', 'Aristo Blue', 'aristo-bl.jpg', 6, '20.00'),
(5, 'aristo', 'ar', 'brush-g', 'LG-Aristo Gold', 'Aristo Gold', 'aristo-g.jpg', 7, '20.00'),
(6, 'aristo', 'ar', 'brush-rb', 'LG-Aristo Red/Black', 'Aristo Red-Black', 'aristo-rb.jpg', 7, '20.00'),
(7, 'aristo', 'ar', 'brush-bk', 'LG-Black/Gold', 'Aristo Black-Gold', 'aristo-bg.jpg', 7, '20.00'),
(8, 'aristo', 'ar', 'DSY-Wallet-bt', 'DSY-BT', 'BT-Wallet', 'DSY-Wallet-bt.jpg', 2, '20.00'),
(9, 'aristo', 'ar', 'DSY-Wallet-H', 'DSY-H', 'H-Wallet', 'DSY-Wallet-H.jpg', 1, '20.00'),
(10, 'aristo', 'ar', 'DSY-Wallet-T', 'DSY-Wallet-T', 'T-Wallet', 'DSY-Wallet-T.jpg', 1, '20.00'),
(11, 'emerge', 'em', 'b-emerge', 'Samsung-J3 Blue Emerge', 'Blue Samsung Emerge', 'blue-emerge.jpg', 6, '10.00'),
(12, 'emerge', 'em', 'Bla-emerge', 'Samsung-J3 Black Emerge', 'Black Samsung Emerge', 'black-emerge.jpg', 7, '10.00'),
(13, 'emerge', 'em', 'pink-emerge', 'Samsung-J3 Pink Emerge', 'Samsung Pink Emerge', 'pink-emerge.jpg', 20, '9.00'),
(14, 'emerge', 'em', 'camo-emerge', 'Samsung-J3 Camo Emerge', 'Samsung Camo Emerge', 'camo-emerge.jpg', 20, '9.00'),
(15, 'emerge', 'em', 'red-emerge', 'Samsung-J3 Red Emerge', 'Red Samsung Emerge', 'red-emerge.jpg', 20, '99.00');


-- INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
-- ('be','bunny-ears');

-- 1. id
  -- 2. category
        -- 3. category id
             -- 4. product code
                  -- 5. product name
                       -- 6. product desc
                              -- 7. product image name
                                                                      -- 8. qty  -- 9. price

-- STYLO --
INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(16,'stylo','sty','bunny-gold','Stylo Bunny Ears Gold','STYLO-BEG', 'beg.jpg', 20, ''),
(17,'stylo','sty','bunny-pink','Stylo Bunny Ears Pink','STYLO-BEPK',  'bepk.jpg', 20, ''),
(18,'stylo','sty','bunny-rose','Stylo Bunny Ears Rose', 'STYLO-BER',  'ber.jpg', 20, ''),
(19,'stylo','sty','bunny-silver', 'Stylo Bunny Ears Silver', 'STYLO-BES', 'bes.jpg', 20, ''),
-- brush clip--
(20,'stylo','sty','brush-clip-s', 'Brush Clip Silver', '', 'bcs.jpg', 20, ''),
(21,'stylo','sty','brush-clip-blk', 'Brush Clip Black', '', 'bcblk.jpg', 20, ''),
(22,'stylo','sty','brush-clip-blue', 'Brush Clip Blue', '', 'bcb.jpg', 20, ''),
(23,'stylo','sty','bunny-silver', 'Brush Clip Camo', '', 'bcamo.jpg', 20, ''),
-- reg clip--
(24,'stylo','sty','reg-clip-blue', 'Regular Clip Blue', '', 'rcb.jpg', 20, ''),
(25,'stylo','sty','reg-clip-blk', 'Regular Clip Black', '', 'rcblk.jpg', 20, ''),
(26,'stylo','sty','reg-clip-red', 'Regular Clip Red', '', 'rcr.jpg', 20, ''),
-- hard clip--
(27,'stylo','sty','hard-clip-blue', 'Hard Clip Blue', '', 'hb.jpg', 20, ''),
(28,'stylo','sty','hard-clip-blk', 'Hard Clip Black', '', 'hblk.jpg', 20, ''),
(29,'stylo','sty','hard-clip-red', 'Hard Clip Red', '', 'hr.jpg', 20, ''),
-- new brush clip (7)--
(30,'stylo','sty','new-brush-blue', 'New Brush Blue', '', 'nbb.jpg', 20, ''),
(31,'stylo','sty','new-brush-blk', 'New Brush Black', '', 'nbblk.jpg', 20, ''),
(32,'stylo','sty','new-brush-gold', 'New Brush Gold', '', 'nbg.jpg', 20, ''),
(33,'stylo','sty','new-brush-purple', 'New Brush Purple', '', 'nbp.jpg', 20, ''),
(34,'stylo','sty','new-brush-pink', 'New Brush Pink', '', 'nbpk.jpg', 20, ''),
(35,'stylo','sty','new-brush-silver', 'New Brush Purple', '', 'nbs.jpg', 20, ''),
(36,'stylo','sty','new-brush-teal', 'New Brush Purple', '', 'nbt.jpg', 20, '');



-- Tribute --
INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(37,'tribute','tri','reg-clip-blue', 'Regular Clip Blue', '', 'reg-clip-blue.jpg', 20, ''),
(38,'tribute','tri','reg-clip-black', 'Regular Clip Black', '', 'reg-clip-black.jpg', 20, ''),
(39,'tribute','tri','reg-clip-red', 'Regular Clip Red', '', 'reg-clip-red.jpg', 20, ''),
(40,'tribute','tri','h-clip-black', 'Hard Clip Black', '', 'h-clip-black.jpg', 20, '');


-- XPower --
INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(41,'xpower','xpo','reg-clip-blue', 'Regular Clip Blue', '', 'reg-clip-blue.jpg', 20, ''),
(42,'xpower','xpo','reg-clip-red', 'Regular Clip Red', '', 'reg-clip-red.jpg', 20, ''),
(43,'xpower','xpo','reg-clip-black', 'Regular Clip Black', '', 'reg-clip-black.jpg', 20, ''),
(44,'xpower','xpo','dual-wallet-red', 'Dual Wallet Red', '', 'dual-wallet-red.jpg', 20, '');





-- e4 --
INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
('','e4','moto','glitter-pink-rose', 'Glitter Pink Rose', '', 'glitter-pink-rose.jpg', 20, ''),
('','e4','moto','glitter-blue-rose', 'glitter-blue-rose', '', 'glitter-blue-rose.jpg', 20, ''),


('','e4','moto','dsy-c-rby', 'Design Wallet Case-Rose/Butterfly ', '', 'dsyc-rby.jpg', 20, ''),
('','e4','moto','dsy-c-pkf', 'Design Wallet Case-Pink/Flowers ', '', 'dsyc-pkf.jpg', 20, ''),
('','e4','moto','dsy-c-rf', 'Design Wallet Case-Red Flowers ', '', 'dsyc-rf.jpg', 20, ''),

('','e4','moto','reg-clip-blue', 'Regular Clip Blue', '', 'reg-clip-blue.jpg', 20, ''),
('','e4','moto','reg-clip-red', 'Regular Clip Red', '', 'reg-clip-red.jpg', 20, ''),
('','e4','moto','reg-clip-black', 'Regular Clip Black', '', 'reg-clip-blk.jpg', 20, ''),

('','e4','moto','heavy-clip-black', 'Hard Clip Black', '', 'h-clip-blk.jpg', 20, '');



-- i8 --
INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES

('','i8','ip-8','clear-red', 'i8 Transparent Red', '', 'i8-tr.jpg', 20, ''),
('','i8','ip-8','clear-gold', 'i8 Transparent Gold', '', 'i8-g.jpg', 20, ''),
('','i8','ip-8','clear-blk', 'i8 Transparent Black', '', 'i8-blk.jpg', 20, ''),

('','i8','ip-8','crblk-sil', 'i8 Crystal Black/Silver Trim', '', 'crys-blk.jpg', 20, ''),
('','i8','ip-8','crblk-gl', 'i8 Crystal Black/Gold Trim', '', 'crys-gold.jpg', 20, ''),


('','i8','ip-8','ring-pk', 'i8 Ring Case Pink', '', 'ring-pk.jpg', 20, ''),
('','i8','ip-8','ring-g', 'i8 Ring Case Gold', '', 'ring-g.jpg', 20, ''),
('','i8','ip-8','ring-s', 'i8 Ring Case Silver', '', 'ring-s.jpg', 20, ''),
('','i8','ip-8','ring-blk', 'i8 Ring Case Black', '', 'ring-blk.jpg', 20, '');




-- XPower --
INSERT INTO `products` (`id`, `cat_name`, `cat_id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
('','i5','iphone','sprk-silver', 'Sparkling Silver', '', 'i5-spark-sil.jpg', 20, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(3, 'Ahmed', 'Abdellatif', 'jaja', 'sunny', 12345, 'last_fantasy1017@hotmail.com', 'ahmed', 'user'),
(4, 'Ahmed', 'Abdellatif', '412 summit townes way', 'columbia', 29229, 'l@gmail.com', 'ahmed', 'user');


ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
