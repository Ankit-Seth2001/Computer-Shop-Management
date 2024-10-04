-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 05:12 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bname` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `bname`, `street`, `locality`, `city`, `pincode`) VALUES
(1, 2, 'Lotus Socity Flat No.239', 'Dindori road', 'Matoshiri Nagar', 'Mumbai', 432101),
(2, 3, 'Hariom Socity flat no.451', 'Tilk road opposite Inox ', 'Bhau Nagar', 'Mumbai', 432187);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `qty` mediumint(9) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Processor'),
(2, 'Mother Board'),
(3, 'Graphic Card'),
(4, 'Ram'),
(5, 'Storage'),
(6, 'Cabinate'),
(7, 'Moniter'),
(8, 'Keyboard'),
(9, 'Mouse'),
(10, 'Smps\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`) VALUES
(200, 'Intel'),
(201, 'AMD'),
(202, 'Asus'),
(203, 'Corsair'),
(204, 'Crucial'),
(205, 'HP'),
(206, 'Cooler Master'),
(207, 'LG'),
(208, 'Logitech'),
(209, 'Chiptronex'),
(210, 'Zotac'),
(211, 'Gigabyte'),
(212, 'Seagate'),
(213, 'Western Digital'),
(214, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `qty` mediumint(9) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `buy_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `mrp` int(11) DEFAULT NULL,
  `saleing_price` int(11) DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL,
  `long_desc` varchar(255) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `company_id`, `product_name`, `mrp`, `saleing_price`, `short_desc`, `long_desc`, `stock`, `add_date`, `product_status`) VALUES
(100, 1, 201, 'Ryson 5 5600X', 420000, 24824, 'AMD 5000 Series Ryson 5 5600X  Desktop Processor 6 cores 12 threads ', '6 Cores and 12 Threads, 35 MB Chache .\r\nBase clock 3.7Ghz, Max boost clock speed 4.6Ghz .\r\nMemory support DDR4 3200Mhz,Memory chanel 2,TDP 65W PCI Express Genaration PCIe Gen 4 ', 20, '2021-12-06 07:34:20', 1),
(101, 1, 201, 'AMD Ryzen 5 5600G Desktop Processor ', 34500, 25499, 'AMD Ryzen 5 5600G Desktop Processor (6-core/12-thread, 19MB Cache, up to 4.4 GHz max Boost) with Radeon Graphics', '6 Cores & 12 Threads, 19 MB Cache\r\n        Base Clock: 3.9 GHz, Max Boost Clock: up to 4.4 GHz\r\n        Memory Support: DDR4 3200 MHz, Memory Channels: 2, TDP: 65W\r\n        Compatible with Motherboards based on 500 series chipset, Socket AM4\r\n        Grap', 10, '2021-12-01 08:24:34', 1),
(102, 1, 201, 'AMD Ryzen 5 3600X Desktop Processor (100-100000022BOX)', 34000, 27990, 'AMD Ryzen 5 3600X Desktop Processor 6 cores up to 4.4GHz 35MB Cache AM4 Socket (100-100000022BOX)', '6 Cores & 12 Threads. Max Temps 95°C\r\n        Base Clock: 3.8GHz, Max Boost Clock: up to 4.4GHz, 35MB Cache, TDP: 95W\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard Compatibili', 10, '2021-12-01 08:27:32', 1),
(103, 1, 201, 'AMD Ryzen 5 3600 Desktop Processor 6 Cores', 27000, 18989, 'AMD Ryzen 5 3600 Desktop Processor 6 Cores up to 4.2 GHz 35MB Cache AM4 Socket (100-000000031)', '6 Cores & 12 Threads\r\n        Base Clock: 3.6GHz, Max Boost Clock: up to 4.2GHz, 35MB Cache, TDP: 95W. Platform : Boxed Processor\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard', 10, '2021-12-01 08:27:32', 1),
(104, 1, 201, 'AMD 5000 Series Ryzen 7 5800X ', 62000, 35390, 'AMD 5000 Series Ryzen 7 5800X Desktop Processor 8 cores 16 Threads 36 MB Cache 3.8 GHz Upto 4.7 GHz', '8 Cores & 16 Threads, 36 MB Cache\r\n        Base Clock: 3.8 GHz, Max Boost Clock: up to 4.7 GHz\r\n        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105W, PCI Express Generation : PCIe Gen 4\r\n        Compatible with Motherboards based on 500 Ser', 10, '2021-12-01 08:27:32', 1),
(105, 1, 201, 'AMD Ryzen 7 3700X Desktop Processor 8 Cores', 49440, 28490, 'AMD Ryzen 7 3700X Desktop Processor 8 Cores up to 4.4GHz 36MB Cache AM4 Socket (100-100000071BOX)', '8 Cores & 16 Threads. Max Temps : 95°C\r\n        Base Clock: 3.6GHz, Max Boost Clock: up to 4.4GHz, 36MB Cache, TDP: 65W\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard Compatibi', 10, '2021-12-01 08:27:32', 1),
(106, 1, 201, 'AMD Ryzen 5 3600X Desktop Processor (100-100000022BOX)', 34000, 27990, 'AMD Ryzen 5 3600X Desktop Processor 6 cores up to 4.4GHz 35MB Cache AM4 Socket (100-100000022BOX)', '6 Cores & 12 Threads. Max Temps 95°C\r\n        Base Clock: 3.8GHz, Max Boost Clock: up to 4.4GHz, 35MB Cache, TDP: 95W\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard Compatibili', 20, '2021-12-14 06:57:24', 1),
(107, 1, 201, 'AMD Ryzen 5 3600 Desktop Processor 6 Cores', 27000, 18989, 'AMD Ryzen 5 3600 Desktop Processor 6 Cores up to 4.2 GHz 35MB Cache AM4 Socket (100-000000031)', '6 Cores & 12 Threads\r\n        Base Clock: 3.6GHz, Max Boost Clock: up to 4.2GHz, 35MB Cache, TDP: 95W. Platform : Boxed Processor\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard', 10, '2021-12-01 08:28:13', 1),
(108, 1, 201, 'AMD 5000 Series Ryzen 7 5800X ', 62000, 35390, 'AMD 5000 Series Ryzen 7 5800X Desktop Processor 8 cores 16 Threads 36 MB Cache 3.8 GHz Upto 4.7 GHz', '8 Cores & 16 Threads, 36 MB Cache\r\n        Base Clock: 3.8 GHz, Max Boost Clock: up to 4.7 GHz\r\n        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105W, PCI Express Generation : PCIe Gen 4\r\n        Compatible with Motherboards based on 500 Ser', 10, '2021-12-01 08:28:13', 1),
(109, 1, 201, 'AMD Ryzen 7 3700X Desktop Processor 8 Cores', 49440, 28490, 'AMD Ryzen 7 3700X Desktop Processor 8 Cores up to 4.4GHz 36MB Cache AM4 Socket (100-100000071BOX)', '8 Cores & 16 Threads. Max Temps : 95°C\r\n        Base Clock: 3.6GHz, Max Boost Clock: up to 4.4GHz, 36MB Cache, TDP: 65W\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard Compatibi', 10, '2021-12-01 08:28:13', 1),
(110, 1, 201, 'AMD 5000 Series Ryzen 9 5900X Desktop Processor 12 Cores ', 79900, 53880, 'AMD 5000 Series Ryzen 9 5900X Desktop Processor 12 Cores 24 Threads 70 MB Cache 3.7 GHz up to 4.8 GHz AM4 Socket 500 Series chipset (100-100000061WOF)', '12 Cores & 24 Threads, 70MB Cache\r\n        Base Clock: 3.7 GHz, Max Boost Clock: up to 4.8 GHz\r\n        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105 W, PCI Express Generation : PCIe Gen 4\r\n        Compatible with Motherboards based on 500 Se', 10, '2021-12-01 08:32:56', 1),
(111, 1, 102, 'AMD 3rd Gen Ryzen 9 3900X Desktop Processor 12 Cores', 60990, 47490, 'AMD 3rd Gen Ryzen 9 3900X Desktop Processor 12 Cores up to 4.6GHz 70MB Cache AM4 Socket (100-100000023BOX)', '12 Cores & 24 Threads\r\n        Base Clock: 3.8GHz, Max Boost Clock: up to 4.6GHz, 70MB Cache, TDP: 105W\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard Compatibility: AMD 300, 4', 10, '2021-12-01 08:32:56', 1),
(112, 1, 102, 'AMD RYZEN 9 3950X 3rd Generation Desktop Processor', 106350, 79990, 'AMD RYZEN 9 3950X 3rd Generation Desktop Processor Upto 4.7 GHZ / 72 MB Cache (100-100000051WOF)', '16 Cores & 32 Threads\r\n         Base Clock: 3.5GHz, Max Boost Clock: up to 4.7GHz, 72MB Cache, TDP: 105W\r\n        System Memory Specification: 3200MHz, System Memory Type: DDR4, Memory Channels: 2\r\n        Socket: AM4, Motherboard Compatibility: AMD 400, ', 10, '2021-12-01 08:32:56', 1),
(113, 1, 102, 'AMD 3000 Series Ryzen 9 3900XT Desktop Processor 12 cores', 70000, 49990, 'AMD 3000 Series Ryzen 9 3900XT Desktop Processor 12 cores 24 Threads 70MB Cache 3.8GHz Upto 4.7GHz AM4 Socket 400 & 500 Series Chipset (100-100000277WOF)', '12 Cores & 24 Threads, 70MB Cache\r\n        Base Clock: 3.8GHz, Max Boost Clock: up to 4.7GHz.OS Support: Windows 10 - 64-Bit Edition,RHEL x86 64-Bit,Ubuntu x86 64-Bit\r\n        Memory Support: DDR4 3200MHz, Memory Channels: 2, TDP: 105W, PCI Express Genera', 10, '2021-12-01 08:32:56', 1),
(114, 1, 200, 'Intel Core i5-9400F Processor (9M Cache, up to 4.10 GHz)', 24000, 18248, 'Intel Core™ i5-9400F Processor (9M Cache, up to 4.10 GHz)', 'Intel Core i5-9400F Processor (9M Cache, up to 4.10 GHz). Instruction Set Extensions Intel SSE4.1, Intel SSE4.2, Intel AVX2. Max Memory Size (dependent on memory type) 128 GB\r\n        Intel Core i5-9400F Processor (9M Cache, up to 4.10 GHz)9th Generation ', 10, '2021-12-01 08:35:12', 1),
(115, 1, 200, 'Intel Core i5-10400 Processor ', 29990, 19354, 'Intel ® Core i5-10400 Processor (12M Cache, up to 4.30 GHz)', 'Engineered using the latest technology i5-10400\r\n        Intel Core i5-10400 Processor (12M Cache, up to 4.30 GHz)\r\n        Intel Core i5-10400 Processor (12M Cache, up to 4.30 GHz)10th Generation Intel Core i5 ProcessorsProducts formerly Comet LakeProces', 10, '2021-12-01 08:35:12', 1),
(116, 1, 200, 'Intel Core i5-11400 Desktop Processor 6 Cores', 39999, 19499, 'Intel Core i5-11400 Desktop Processor 6 Cores up to 4.4 GHz LGA1200 (Intel 500 Series & Select 400 Series Chipset) 65W', 'Compatible with Intel 500 series & select Intel 400 series chipset based motherboards\r\n        Intel Optane Memory Support\r\n        PCIe Gen 4.0 Support\r\n        Thermal solution included', 10, '2021-12-01 08:35:12', 1),
(117, 1, 200, 'Intel Core i5-11600KF Desktop Processor 6 ', 30000, 22740, 'Intel Core i5-11600KF Desktop Processor 6 Cores up to 4.9 GHz Unlocked LGA1200 (Intel 500 Series & Select 400 Series Chipset) 125W', 'Compatible with Intel 500 series & select Intel 400 series chipset based motherboards\r\n        Intel Optane Memory Support\r\n        PCIe Gen 4.0 Support\r\n        No thermal solution included', 10, '2021-12-01 08:35:12', 1),
(118, 1, 200, 'Intel Core i7-9700K Processor (12M Cache, up to 4.90 GHz)', 50000, 24999, 'Intel Core i7-9700K Processor (12M Cache, up to 4.90 GHz)', 'Intel Core i7-9700K Processor (12M Cache, up to 4.90 GHz)\r\n        9th Generation Intel Core i7 ProcessorsProducts formerly Coffee LakeDesktopi7-9700K14 nm3.60 GHz4.90 GHz12 MB Intel Smart Cache8 GT/s4.90 GHz95 WIntel UHD Graphics 630350 MHz', 10, '2021-12-01 08:35:12', 1),
(119, 1, 200, 'Intel Core i7 9700 Desktop 9th Gen Processor 8 Cores', 35000, 30199, 'Intel Core i7 9700 Desktop 9th Gen Processor 8 Cores up to 4.7 GHz LGA1151 Intel UHD Graphics 630 (BX80684I79700)', 'Compatible with Intel 300 Series chipset based motherboards\r\n        8 Cores /8 Threads ; Thermal Cooling solution included in the box\r\n        Processor Graphics : Intel UHD Graphics 630\r\n        DirectX Support 12\r\n        Intel Virtualization Technolog', 10, '2021-12-01 08:35:12', 1),
(120, 1, 200, 'Intel Core i7-10700K Desktop Processor 8 Cores ', 50000, 32591, 'Intel Core i7-10700K Desktop Processor 8 Cores up to 5.1 GHz Unlocked LGA1200 (Intel 400 Series chipset) 125W', '8 Cores / 16 Threads\r\n        Socket type LGA 1200\r\n        Up to 5.1 GHz unlocked\r\n        Compatible with Intel 400 series chipset based motherboards.Bus Speed: 8 GT/s\r\n        Intel Turbo Boost Max Technology 3.0 support\r\n        Intel Optane Memory su', 10, '2021-12-01 08:35:12', 1),
(121, 1, 200, 'Intel Core i7-11700 Desktop Processor 8 Cores ', 55000, 36499, 'Intel Core i7-11700 Desktop Processor 8 Cores up to 4.9 GHz LGA1200 (Intel 500 Series & Select 400 Series Chipset) 65W', 'Compatible with Intel 500 series & select Intel 400 series chipset based motherboards\r\n        Intel Turbo Boost Max Technology 3.0 Support\r\n        Intel Optane Memory Support\r\n        PCIe Gen 4.0 Support', 10, '2021-12-01 08:35:12', 1),
(122, 1, 200, 'Intel Core I7-10700K 10th Generation Desktop Processor', 54999, 33998, 'Intel Core I7-10700K 10th Generation Desktop Processor 16M Cache, up to 5.10 GHz LGA 1200 (Marvel Avengers Edition Packaging)', 'Integrated Intel UHD Graphics 630 chipset\r\n        LGA 1200 Socket Compatible\r\n        Supports upto 128GB of dual-channel 2933 MHz DDR4 RAM\r\n        Intel Turbo Boost Max Technology 3.0 support\r\n        8 Cores & 16 Threads and 5.1 GHz Maximum Turbo Freq', 10, '2021-12-01 08:35:12', 1),
(124, 3, 210, 'ZOTAC Gaming GeForce RTX 2060 6GB\r\n\r\n', 89999, 69650, 'ZOTAC Gaming GeForce RTX 2060 6GB GDDR6 192-bit Gaming Graphics Card, Super Compact, ZT-T20600H-10M', 'New turing architecture, real-time raytracing, dlss with deep learning ai\r\n6gb 192-bit gddr6\r\nDual slot, super compACt 8.3-inch card, fits 99% of systems\r\n4k, HDR, VR ready\r\n3 x DisplayPort 1.4, 1 x HDMI 2.0b\r\nBoost clock 1680 mhz', 13, '2022-02-21 04:05:47', 1),
(125, 3, 210, 'Zotac Gaming GeForce GTX 1660 Super Twin Fan', 69999, 53790, '1408 Cuda Cores\r\n6GB GDDR6 Memory\r\nEngine Clock Boost : 1785 MHz', 'Brand	‎Zotac\r\nManufacturer	‎ZOTAC, ZOTAC Technology Limited, 19/F, SHATIN GALLERIA, 18-24 Shan Mei St, Fo Tan, Hong Kong, Ph. +852 2799 8011\r\nItem Height	‎5.5 Centimeters\r\nItem Width	‎28 Centimeters\r\nProduct Dimensions	‎22 x 28 x 5.5 cm; 730 Grams\r\nItem m', 15, '2022-02-21 04:05:52', 1),
(126, 3, 210, 'Zotac Gaming GeForce GTX 1660 Super Twin Fan', 69999, 52790, '1408 Cuda Cores\r\n6GB GDDR6 Memory\r\nEngine Clock Boost : 1785 MHz', '\r\nBrand	‎Zotac\r\nItem Height	‎5.5 Centimeters\r\nItem Width	‎28 Centimeters\r\nProduct Dimensions	‎22 x 28 x 5.5 cm 730 Grams\r\nItem model number	‎ZT-T16620F-10L\r\nMemory Clock Speed	‎1785 MHz\r\nGraphics Coprocessor	‎NVIDIA GeForce GTX 1660\r\nGraphics Chipset Bran', 10, '2022-02-21 04:06:05', 1),
(127, 2, 202, 'ASUS Prime B560-PLUS LGA1200', 21000, 15750, 'ASUS Prime B560-PLUS LGA1200 (Intel 11th/10th Gen) ATX Motherboard (PCIe 4.0, 2xM.2 Slots, 8 Power Stages, 1 Gb LAN, DisplayPort, HDMI, USB 3.2 Gen 1 Type-C, USB 3.2 Gen 2, Thunderbolt 4 Support)', 'ntel LGA 1200 socket: Ready for 11th Gen Intel Core processors\r\nComprehensive cooling: VRM heatsink, flexible M.2 heatsink, PCH heatsink, hybrid fan headers and Fan Xpert 2+\r\nASUS OptiMem: Careful routing of traces and vias to preserve signal integrity fo', 20, '2022-02-14 14:08:27', 1),
(128, 2, 202, 'ASUS TUF Gaming Z690-PLUS WiFi D4 LGA 1700', 30000, 26700, 'ASUS TUF Gaming Z690-PLUS WiFi D4 LGA 1700(12th Gen Intel Core Processors) ATX Motherboard with PCIe 5.0, DDR4 RAM, Four M.2 Slots, 2.5Gb Ethernet, USB-C, Thunderbolt 4 Support and RGB Lighting, Black', 'The board is built with the PCIe 5.0 Ready supporting 4 x DIMM, up to 128GB DDR4 5333MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its peak.\r\nEquipped with next-gen technology of WIFI 6, PCIe 5.0, Realtek 2.5Gb Ethernet, US', 20, '2022-02-14 14:41:55', 1),
(129, 2, 202, 'ASUS TUF Gaming B560-Plus WiFi', 24500, 15000, 'ASUS TUF Gaming B560-Plus WiFi(Intel Socket LGA1200 for 11th Gen Intel Core & 10th Gen Intel Core, Pentium Gold and Celeron) ATX motherboard 8+1 DrMOS Power stages PCIe 4.0 support DDR4 5000 (OC) Dual M.2 slot with flexible heatsink HDMI 2.0 DisplayPort 1', 'Capable of taking in a max of 128GB of Dual channel DDR4 Memory Technology RAM across 4 x DDR4 DIMM slots which makes you PC faster and enhances your gaming experience. Comes with built-in RGB illumination which features onboard RGB headers and an address', 20, '2022-02-14 14:42:10', 1),
(130, 2, 202, 'ASUS ROG Strix B550-F Gaming WiFi 6', 30000, 26700, 'ASUS ROG Strix B550-F Gaming WiFi 6 (AMD AM4 Socket for 3rd Gen AMD Ryzen) ATX Gaming Motherboard with PCIe 4.0, teamed Power Stages, BIOS Flashback, Dual M.2 SATA 6 Gbps USB & Aura Sync', 'AMD AM4 Socket and PCIe 4. 0: The perfect pairing for 3rd Gen AMD Ryzen CPUs\r\nRobust Power Design: 12+2 DrMOS power stages with high-quality alloy chokes and durable capacitors to provide reliable power for the latest high-core-count AMD CPUsBest Gaming C', 20, '2022-02-14 15:21:51', 1),
(131, 2, 202, 'ASUS Rog Maximus Z690 Apex Motherboard', 83000, 75000, 'Suitable For Desktop\r\nIntel Z690\r\nData Rate DDR5\r\nMaximum RAM Capacity 64 GB\r\nForm Factor: ATX', '1 Motherboard, ARGB RGB Extension Cable, RGB Extension Cable, 6 SATA 6Gb/s Cables, 3 in 1 Thermistor Cables Pack, ROG DIMM.2 with Heatsink, ROG DIMM.2 with Heatsink, M.2 Pad for ROG DIMM.2, M.2 Screw Package for ROG DIMM.2, PCIe 5.0 M.2 Card, PCIe 5.0 M.2', 18, '2022-02-20 11:56:11', 1),
(132, 2, 202, 'ASUS Prime H610M-E D4 Intel H610', 10500, 7999, 'ASUS Prime H610M-E D4 Intel H610 (LGA 1700) mic-ATX motherboard with DDR4, PCIe 4.0, dual M.2 slots, Realtek 1 Gb Ethernet, DisplayPort, HDMI, D-Sub, USB 3.2 Gen 1 ports, SATA 6 Gbps, COM header, RGB header', 'The board is built with PCIe 4.0 Ready supporting 2 x DIMM, up to 64GB DDR4 3200MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its peak.\r\nEquipped with the next-gen Turbo boost max technology of PCIe 4.0, Two M.2 slots(PCIe ', 20, '2022-02-14 15:22:00', 1),
(133, 2, 202, 'ASUS Prime H610M-E D4 Intel H610', 10500, 7999, 'ASUS Prime H610M-E D4 Intel H610 (LGA 1700) mic-ATX motherboard with DDR4, PCIe 4.0, dual M.2 slots, Realtek 1 Gb Ethernet, DisplayPort, HDMI, D-Sub, USB 3.2 Gen 1 ports, SATA 6 Gbps, COM header, RGB header', 'The board is built with PCIe 4.0 Ready supporting 2 x DIMM, up to 64GB DDR4 3200MHz(OC) of memory and Intel Turbo Boost Technology to push your experience to its peak.\r\nEquipped with the next-gen Turbo boost max technology of PCIe 4.0, Two M.2 slots(PCIe ', 20, '2022-02-14 15:22:05', 1),
(134, 3, 211, 'Gigabyte Geforce GTX 1050 Ti 4GB Graphic Card (GV-N105TD5-4GD)', 33600, 22775, 'Gigabyte Geforce GTX 1050 Ti 4GB Graphic Card (GV-N105TD5-4GD)', 'This GIGABYTE Geforce GTX 1050 2GB OC graphic card is made for the gaming enthusiasts. Equipped with one of the advanced architecture, get ready to play some of the most graphic intensive games in HD quality.Resolution	8k\r\n        Graphics RAM Type	GDDR5\r', 20, '2022-02-14 16:32:00', 1),
(135, 3, 202, 'ASUS Cerberus GeForce GTX 1050 Ti 4GB OC Edition ', 21800, 21800, 'Roll over image to zoom in\r\nASUS Cerberus GeForce GTX 1050 Ti 4GB OC Edition GDDR5 Gaming Graphics Card (Cerberus-GTX1050Ti-O4G)', '1455 MHz Boost Clock in OC mode for outstanding performance and gaming experience.\r\nExtensively tested with the latest chart-topping game titles like League of Legends, Overwatch and PlayerUnknowns Battlegrounds.Dual fan design provides 2X greater air flo', 18, '2022-02-21 04:06:17', 1),
(136, 3, 211, 'Gigabyte GeForce GTX 1660 OC 6G Gaming Graphic Card GV-N1660OC-6GD', 57779, 42799, 'Features\r\nPowered by GeForce® GTX 1660\r\nIntegrated with 6GB GDDR5 192-bit memory interface\r\nWINDFORCE 2X Cooling System with alternate spinning fans\r\n90 mm unique blade fans\r\nProtection back plate\r\nCore Clock\r\n1830 MHz (Reference Card is 1785 MHz)', 'Core Clock	1830 MHz (Reference Card is 1785 MHz)\r\nCUDA® Cores	1408\r\nMemory Clock	8002 MHz\r\nMemory Size	6 GB\r\nMemory Type	GDDR5\r\nMemory Bus	192 bit\r\nMemory Bandwidth (GB/sec)	192 GB/s\r\nCard Bus	PCI-E 3.0 x 16\r\nDigital max resolution	7680×4320@60Hz\r\nMulti-v', 12, '2022-02-21 04:06:27', 1),
(137, 3, 211, 'Gigabyte GTX 1650 D6 OC 4GB low Profile Graphics Card GV-N1656OC-4GD', 37699, 2899, 'Powered by GeForce® GTX 1650\r\nNVIDIA Turing™ architecture and GeForce Experience™\r\nIntegrated with 4GB GDDR6 128bit memory interface\r\n90mm unique blade fan\r\n172 mm compact card size', 'CHIPSETNVIDIA GEFORCE\r\nGPUGTX 1650\r\nPCI EXPRESS3.0\r\nGPU BOOST CLOCK1635 MHz\r\nMEMORY CLOCK12 Gbps\r\nMEMORY SIZE4 GB\r\nMEMORY INTERFACE128-bit\r\nMEMORY TYPEGDDR6\r\nDIRECT X SUPPORT12\r\nOPEN GL4.6\r\nPORTS\r\nHDMI : Yes 1 x HDMI 2.0b\r\nDisplayPort : Yes 1 x DisplayPor', 20, '2022-02-21 04:06:32', 1),
(138, 3, 210, 'Zotac Gaming Geforce GTX 1650 OC 4GB GDDR6 Graphics Card', 34000, 26599, '896 Cuda Cores\r\n4GB GDDR6 Memory\r\nEngine Clock Boost: 1620 MHz', 'Item Height	5.5 Centimeters\r\nItem Width	22 Centimeters\r\nProduct Dimensions	28 x 22 x 5.5 cm; 640 Grams\r\nBatteries	1 A batteries required.\r\nItem model number	ZT-T16520F-10L\r\nMemory Clock Speed	1620 MHz\r\nGraphics Coprocessor	NVIDIA GeForce GTX 1650\r\nGraphic', 18, '2022-02-21 04:06:46', 1),
(139, 3, 202, 'ASUS TUF Gaming NVIDIA GeForce GTX 1650 OC Edition Graphics Card ', 37430, 3390, 'ASUS TUF Gaming NVIDIA GeForce GTX 1650 OC Edition Graphics Card (PCIe 3.0, 4GB GDDR6 Memory, HDMI, DisplayPort, DVI-D, 1x 6-pin Power Connector, IP5X Dust Resistance, Space-Grade Lubricant)', 'The ASUS TUF Gaming GeForce GTX 1650 is built with the breakthrough graphics performance of the award-winning NVIDIA Turing architecture to supercharge your favorite games.\r\nUltra-fast GDDR6 with over 50% more memory bandwidth for high-speed gaming.\r\nAuto', 9, '2022-02-21 04:06:51', 1),
(140, 4, 203, 'Corsair Vengeance LPX 8GB (1x8GB) DDR4 3200MHZ C16 Desktop RAM (Black)', 6975, 3020, 'XMP 2.0 SUPPORT: One setting is all it takes to automatically adjust to the fastest safe speed for your VENGEANCE LPX. Tested Voltage 1.35V', 'ALUMINUM HEAT SPREADER: The unique design of the VENGEANCE LPX heat spreader optimally pulls heat away from the ICs and into your system’s cooling path, so you can push it harder.\r\nDESIGNED FOR HIGH-PERFORMANCE OVERCLOCKING: Each VENGEANCE LPX module is b', 24, '2022-02-16 04:19:44', 1),
(141, 4, 203, 'CORSAIR Vengeance LPX DDR4 4 GB PC (CMK4GX4M1A2400C16 (1 x 4GB) 2400MHz)  (Black)', 4410, 2595, 'Data rate: DDR4\r\nCompatible Device: PC', '\r\nBrand\r\nCORSAIR\r\nMemory Type\r\n4 GB (1X4) 2400 MHz DDR4\r\nCompatible Device\r\nPC\r\nModel ID\r\nCMK4GX4M1A2400C16 (1 x 4GB) 2400MHz\r\nSeries\r\nVengeance LPX\r\nMemory\r\nMemory Clock\r\n2400 MHz\r\nPower\r\nTest Voltage\r\n1.2 V', 30, '2022-02-14 16:33:39', 1),
(142, 4, 203, 'CORSAIR Vengeance RGB RS DDR4 64 GB', 67500, 30000, 'Sales Package\r\n2 x 32GB Stick\r\nCORSAIR Vengeance RGB RS DDR4 64 GB (Dual Channel) PC DRAM (VENGEANCE RGB RS 64GB (2 x 32GB) DDR4 DRAM 3200MHz C16 Memory Kit)  (Black)', 'Memory Type\r\n64 GB (64) 3200 MHz DDR4 DIMM\r\nMemory Standard\r\nPC4-25600 (3200MHz)\r\nCompatible Device\r\nPC\r\nPins\r\n288\r\nModel ID\r\nVENGEANCE RGB RS 64GB (2 x 32GB) DDR4 DRAM 3200MHz C16 Memory Kit\r\nSeries\r\nVengeance RGB RS\r\nMemory\r\nMemory Clock\r\n3200 MHz\r\nCAS ', 20, '2022-02-14 16:33:39', 1),
(143, 4, 203, 'CORSAIR Vengeance DDR4 16 GB PC (CMK16GX4M1A2400C16)  (Black)', 12600, 6995, 'Data rate: DDR4\r\nCompatible Device: PC', '\r\nBrand\r\nCORSAIR\r\nMemory Type\r\n16 GB (1 x 16) 2400 MHz DDR4 DDR4 SDRAM\r\nCompatible Device\r\nPC\r\nModel ID\r\nCMK16GX4M1A2400C16\r\nSeries\r\nVengeance\r\nMemory\r\nFrequency\r\n2400 MHz (Specified), 2400 MHz (Test)\r\nMemory Configuration\r\nNA\r\nPower\r\nSpecified Voltage\r\n1', 20, '2022-02-14 16:33:39', 1),
(144, 4, 204, 'Crucial Basics 16GB DDR4 1.2v 2666Mhz', 8999, 4789, 'Crucial Basics 16GB DDR4 1.2v 2666Mhz CL19 SODIMM RAM Memory Module for Laptops and Notebooks, Green', 'The DDR4 RAM is rated at 1.2V and has a latency of CL19. It can operate at a max of 2666MT/s.\r\nA memory upgrade should enable you to load programs faster, improve responsiveness of your laptop and offer smooth multitasking and running data-intensive appli', 20, '2022-02-14 16:33:39', 1),
(145, 4, 204, 'Crucial RAM 16GB DDR4 2666 MHz ', 8999, 5199, 'Crucial RAM 16GB DDR4 2666 MHz CL19 Laptop Memory CT16G4SFRA266', 'Speeds up to 2666 MT/s and faster data rates are expected to be available as DDR4 technology matures\r\nIncrease bandwidth by up to 30%. PC speed - PC4-21300\r\nReduce power consumption by up to 40% and extend battery life\r\nFaster burst access speeds for impr', 20, '2022-02-14 16:33:39', 1),
(146, 4, 204, 'Crucial 16GB Single DDR4 3200 ', 11000, 5809, 'Crucial 16GB Single DDR4 3200 MT/s (PC4-25600) CL22 DR x8 Unbuffered DIMM 288-Pin Memory - CT16G4DFD832A, Green', 'Speeds up to 3200 MT/s and faster data rates are expected to be available as DDR4 technology matures\r\nIncrease bandwidth by up to 32%\r\nReduce power consumption by up to 40%\r\nFaster bursts access speeds for improved sequential data throughout\r\nOptimized fo', 20, '2022-02-14 16:33:39', 1),
(147, 4, 204, 'Crucial Ballistix RGB 3200 MHz DDR4 ', 13800, 5549, 'Crucial Ballistix RGB 3200 MHz DDR4 DRAM Desktop Gaming Memory 16GB CL16 BL16G32C16U4RL (Red), 40 Grams', '16 GB DDR4 DRAM\r\nMemory Speed-3200MT/s\r\nDIMM Desktop Gaming RAM\r\nXMP 2.0 support for automatic overclocking, or run at JEDEC default profile\r\neach module Compatible with ASUS Aura, MSI Mystic Light, Gigabyte AORUS Graphics Engine, and more\r\nModern aluminu', 20, '2022-02-14 16:33:39', 1),
(148, 4, 204, 'Crucial Ballistix 3200 MHz DDR4 DRAM Desktop Gaming Memory 8GB CL16 BL8G32C16U4B (Black) ', 3800, 2799, '8GB DDR4 3200MT/s ,CL16  Unbuffered DIMM 288pin.\r\nEngineered for the latest AMD and Intel platforms.', 'XMP 2. 0 support for automatic overclocking or run at JEDEC default profile.\r\nModern aluminum heat spreader available in multiple colors to match your system build or style.\r\nHigh-performance gaming-grade memory for workstations and laptops.', 20, '2022-02-14 16:33:39', 1),
(149, 5, 212, 'Seagate BarraCuda 1 TB Internal Hard Drive HDD ', 6500, 3049, 'Seagate BarraCuda 1 TB Internal Hard Drive HDD – 8.89 cm (3.5 Inch) SATA 6 Gb/s 7200 RPM 64 MB Cache for Computer Desktop PC (ST1000DM010)', 'Store all your games, music, movies and more with up to 1TB of storage\r\nSATA 6Gb/s interface optimizes burst performance; 64MB Cache ; Multi-Tier Caching\r\nSeagate Secure models for hardware-based data security\r\nInstant Secure Erase allows safe and easy dr', 20, '2022-02-14 17:03:22', 1),
(150, 5, 212, 'Seagate Barracuda 2 TB Internal Hard Drive HDD', 8000, 4289, 'Seagate Barracuda 2 TB Internal Hard Drive HDD – 3.5 Inch SATA 6 Gb/s 5400 RPM 256 MB Cache for Computer Desktop PC (ST2000DM005)', 'Advanced Power modes help save energy without sacrificing performance.Performance : Multi-Tier Caching technology\r\nSATA 6Gb/s interface optimizes burst performance\r\nCapacities up to 8TB for desktops, BarraCuda leads the market with the widest range of sto', 20, '2022-02-14 17:03:22', 1),
(151, 5, 212, 'Seagate Barracuda 1 TB Internal Hard Drive HDD – 2.5 Inch', 7500, 3649, 'Seagate Barracuda 1 TB Internal Hard Drive HDD – 2.5 Inch (6.3 cm) SATA 6 Gb/s 5400 RPM 128 MB Cache for PC Laptop (ST1000LM048)', 'Thinnest and lightest 2.5-inch hard drive\r\nBroadest 2.5-inch hard drive portfolio\r\nStandard SATA 6Gb/s interface for easy integration into existing mobile/laptop designs\r\nWarranty: 2years, TOLL Free Number : 0008004401392\r\nSpin Speed: 5400 rpm ; Interface', 20, '2022-02-14 17:02:47', 1),
(152, 5, 212, 'Seagate Barracuda Q5 SSD 1TB up to 2400 MB/s', 18000, 8550, 'Seagate Barracuda Q5 SSD 1TB up to 2400 MB/s - Internal M.2 NVMe PCIe Gen3 ×4, 3D QLC for Desktop or Laptop, 1-Year Rescue Services (ZP1000CV3A001)', 'FAST: NVMe SSD with speeds up to 2.5x faster than SATA SSDs and up to 50x faster than traditional HDDs; sequential read/write speeds up to 2,400/1,800 MB/s\r\nRESPONSIVE: Upgrade your PC for more efficient downloads, installs and multitasking\r\nVERSATILE: Sl', 20, '2022-02-14 17:02:48', 1),
(153, 5, 212, 'Seagate Barracuda 2TB Internal Hard Drive HDD – 8.89 cm (2.5 Inch)', 14500, 5999, 'Seagate Barracuda 2TB Internal Hard Drive HDD – 8.89 cm (2.5 Inch) SATA 6 Gb/s 5400 RPM 128MB Cache for PC Laptop (ST2000LM015)', 'The BarraCuda mobile internal hard drive is the go-to upgrade for on-the-go computing thanks to big capacity in a small form factor\r\nTackle projects, manoeuvre applications, and multitask like a pro with a wide range of available capacities\r\nFeatures spec', 20, '2022-02-14 17:02:48', 1),
(154, 5, 213, 'Western Digital WD10EZEX 1TB Internal Hard Drive for Desktop (Blue)', 4300, 3199, 'Upgrade and backup with ease\r\nFuture-proof storage\r\nImprove PC performance\r\n1TB capacity\r\n3.5-inch internal hard drive\r\n64MB buffer size\r\n7200 RPM Class', 'Boost your PC storage with WD Blue drives, the brand designed just for desktop and all-in-one PCs. The WD Blue family now delivers data storage capacities up to 6 TB.Pair a larger capacity drive with an SSD to give your desktop a performance and storage b', 20, '2022-02-14 17:02:48', 1),
(155, 5, 213, 'Western Digital 2TB WD Blue PC Hard Drive', 4300, 3199, 'Western Digital 2TB WD Blue PC Hard Drive - 7200 RPM Class, SATA 6 Gb/s, 256 MB Cache, 3.5 - WD20EZBX', 'Reliable everyday computing\r\nWestern Digital quality and reliability\r\nFree Acronis True Image WD Edition cloning software\r\nMassive capacity up to 6TB', 20, '2022-02-14 17:02:48', 1),
(156, 5, 213, '\r\nRoll over image to zoom in\r\nWestern Digital Purple 2TB SATA Internal Surveillance Hard Drive (WD20PURZ)', 17500, 4610, 'Engineered specifically for surveillance security systems\r\nSupports up to 180 TB per year work load rate\r\nPrioritized write-operations for maximized surveillance performance', 'Support for more than eight bays\r\nTuned for write-intensive, low bit-rate, high stream-count applications typical to most surveillance applications\r\nTLER and ATA streaming support', 20, '2022-02-14 17:02:48', 1),
(157, 5, 213, 'Western Digital WD Green 480 GB 2.5 inch ', 7200, 4097, 'Western Digital WD Green 480 GB 2.5 inch SATA III Internal Solid State Drive (WDS480G2G0A)', 'SLC (single-level cell) caching boosts write performance to quickly perform everyday tasks\r\nWith sequential read speeds up to 545 MB/s quickly boot your system, launch apps and open files.\r\nAvailable in 2.5”/7mm cased and M.2 2280 form factors to accommod', 20, '2022-02-14 17:02:48', 1),
(158, 5, 213, 'Western Digital WD Blue 2 TB cm 6.35 cm (2.5 inch) SATA III Internal Solid State Drive (WDS200T2B0A)', 28000, 18290, 'High capacity with enhanced reliability and superior performance for high end computing\r\nSequential read speeds up to 560MB/s and sequential write speeds up to 530MB/s.', 'Sequential read speeds up to 560MB/s and sequential write speeds up to 530MB/s.\r\nAn industry-leading 1.75M hours mean time to failure (MTTF) and up to 500 terabytes written (TBW) for enhanced reliability.\r\nAvailable in 2.5”/7mm cased and M.2 2280 form fac', 20, '2022-02-14 17:02:48', 1),
(159, 6, 206, 'Cooler Master NR200P MAX SFF Small Form Factor Mini-ITX Case', 44999, 34990, 'Cooler Master NR200P MAX SFF Small Form Factor Mini-ITX Case with Custom 280mm AIO, 850W SFX Gold PSU, Triple-Slot GPU, Premium PCIe Gen4 Riser, Tempered Glass or Vented Panel Option', 'Cooler Master’s First MAX: The MAX line delivers tailor-made building platforms with maximum performance and hardware compatibility.\r\nCustom 280mm Radiator: A custom 280mm radiator, two pre-installed SickleFlow PWM 140mm fans, and a highly acclaimed 3rd g', 20, '2022-02-18 16:56:43', 1),
(160, 6, 206, 'Cooler Master MasterBox MB511 ARGB MID-Tower ATX Airflow PC case', 9999, 7199, 'Cooler Master MasterBox MB511 ARGB MID-Tower ATX Airflow PC case with Three pre-Installed ARGB Fans, a Fine Mesh Front Panel, Mesh Side Intakes, & Tempered Glass Panel', 'Front Airflow – Fine front mesh and Large side intakes provide unmatched airflow while filtering out the dust\r\nARGB Lighting System – Three pre-installed ARGB fans can be managed by either the motherboard or an included controller to create a comprehensiv', 19, '2022-02-19 17:11:38', 1),
(161, 6, 206, '\r\nRoll over image to zoom in\r\nCooler Master MasterBox K501L RGB V2 Mid Tower Gaming Case', 5799, 4549, 'Cooler Master MasterBox K501L RGB V2 Mid Tower Gaming Case with Pre-Installed RGB Fan, PSU Shroud and Tempered Glass Side Panel', 'Made for gamers, the K501L comes with RGB fan at front, illuminated power button and a unique angled slat design that’s a testament to its gamer core.\r\nDemanding gaming systems will run cool thanks to the plethora of cooling options – 360mm AIO compatibil', 20, '2022-02-18 16:56:43', 1),
(162, 6, 209, 'CHIPTRONEX OMG RGB Mid Tower ATX Gaming Cabinet RGB Strip Tempered Glass USB 3.0 one Preinstalled 120mm RGB Fan', 3999, 2890, 'Motherboard Capatability - ATX, Micro ATX and Mini ITX\r\nThe case comes with front ARGB strip sync with rear one 120mm ARGB fan', 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.\r\nIt has one USB3.0, two USB2.0,and HD audio on top\r\nIt support 2 x 3.5 HDD, 2 x 2.5 SSD and no ODD', 20, '2022-02-18 16:56:44', 1),
(163, 6, 209, 'CHIPTRONEX MX5 RGB Mid Tower ATX Gaming Cabinet RGB Strip Tempered Glass USB 3.0 one Preinstalled 120mm RGB Fan', 3999, 2895, 'Motherboard Capatability - ATX, Micro ATX and Mini ITX\r\nThe case comes with front ARGB strip sync with rear one 120mm ARGB fan\r\nIt has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off', 'It has one USB3.0, two USB2.0,and HD audio on top\r\nIt support 2 x 3.5 HDD, 2 x 2.5 SSD and no ODD\r\nBrand	CHIPTRONEX\r\nManufacturer	CHIPTRONEX, CHIPTRONEX PRIVATE LIMITED\r\nModel	MX5 RGB\r\nProduct Dimensions	38.5 x 19.2 x 42.5 cm; 5.26 Kilograms\r\nItem model n', 20, '2022-02-18 16:56:44', 1),
(164, 6, 209, 'CHIPTRONEX Thunderstorm X3 RGB Mid Tower ATX Gaming Cabinet Preinstalled Front one 200mm ARGB Fan and Rear one 120mm ARGB Fan Tempered Glass USB3.0', 3399, 2795, 'The case comes with one 200mm ARGB fan on front and one 120mm ARGB fan on rear\r\nThe RGB color modes on fans can be controlled by 3 pin RGB header with motherboard software and with dedicated RGB control button on top', 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.\r\nMotherboard support ATX,Micro ATX and Mini ITX\r\nIt has one USB3.0, two USB2.0, RGB control button and HD au', 20, '2022-02-18 16:56:44', 1),
(165, 6, 209, 'CHIPTRONEX Viper RGB Mid Tower ATX Gaming Cabinet case Tempered Glass 4', 4900, 3599, 'CHIPTRONEX Viper RGB Mid Tower ATX Gaming Cabinet case Tempered Glass 4 preinstalled ARGB Fans Motherboard Sync USB 3.0 with Remote Control (Case Without SMPS)', 'Motherboard support - ATX, miniatx, micro ITX\r\n4 x 120 mm preinstalled argb fans\r\nTempered glass panel on side panel\r\nRgb control with motherboard sync and remote control\r\nIt supports 2 x 3.5 HDD , 2 x 2.5 SSD', 20, '2022-02-18 16:56:44', 1),
(166, 6, 209, 'Chiptronex Thunderstorm X2 RGB Mid Tower ATX Cabinet with 1 x 120 mm ARGB Fans and Dual ARGB Strip', 3460, 2395, 'The case comes with one 120mm ARGB fan and ARGB strip on front and one 120mm ARGB fan on rear\r\nThe RGB color modes on fans and strip can be controlled by 3 pin RGB header with motherboard software and with dedicated RGB control button on top', 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.\r\nMotherboard support ATX,Micro ATX and Mini ITX\r\nIt has one USB3.0, two USB2.0, RGB control button and HD au', 20, '2022-02-18 16:56:44', 1),
(167, 6, 209, 'CHIPTRONEX ZX1000 RGB Mid Tower ATX Gamimg Cabinet case Tempered Glass 3 preinstalled Automatic RGB Fans and USB 3.0 (Case Without SMPS)', 3999, 2895, 'The case comes with three 120mm Automatic RGB fans on front panel\r\nMotherboard support ATX,Micro ATX and Mini ITX', 'It has 4mm thick edge to edge tempered glass on side panel which give the case a unique outlook and various options to show off your build inside.\r\nIt has one USB3.0, two USB2.0 and HD audio on top\r\nIt support 3 x 3.5 HDD, 3 x 2.5 SSD and no ODD\r\nMaximum ', 20, '2022-02-18 16:56:44', 1),
(168, 6, 206, 'Cooler Master MasterBox TD500 Mesh Triple ARGB Mid Tower Gaming Cabinet with Dual 360mm Radiator Support and Crystalline Tempered Glass', 10999, 8799, 'Polygonal Mesh – Fine Polygonal Mesh features a three-dimensional contour and is also capable of simultaneously providing high airflow and dust filtration.\r\nCrystalline Tempered Glass – A crystalline design spans the edges of the tempered glass side panel', 'Triple ARGB Fans – Three addressable RGB fans flood the Polygonal Mesh front panel with lighting while providing considerable airflow to the system.\r\nDual 360mm Radiator Support – For enthusiast-grade cooling, two 360mm radiators are supported on the top ', 20, '2022-02-18 16:56:44', 1),
(169, 6, 206, 'Cooler Master MasterBox K501L RGB V2 Mid Tower Gaming Case with Pre-Installed RGB Fan, PSU Shroud and Tempered Glass Side Panel', 5799, 4549, 'Made for gamers, the K501L comes with RGB fan at front, illuminated power button and a unique angled slat design that’s a testament to its gamer core.\r\nDemanding gaming systems will run cool thanks to the plethora of cooling options – 360mm AIO compatibil', 'Supports all kind of gaming components – clearance of 410mm for Graphics card, 165mm for CPU cooler, and 180mm for PSU offering room for a powerful gaming build.\r\nAn edge-to-edge tempered glass side panel allows you to exhibit your system in its full glor', 20, '2022-02-18 16:56:44', 1),
(170, 6, 206, 'Cooler Master MasterBox MB520 RGB Steel/Plastic/Tempered Glass ATX Mid Tower Computer Case (Black)', 7699, 6499, 'Dark mirror front panel : Shade light through a transparent, tinted front panel\r\nPerformance Intake : Large intakes on each side of the front panel let the system breathe easy\r\nRGB LED Fans And Lighting Control : Three 120mm RGB LED fans in front are pre-', 'Excellent Thermal Performance : Optimized airflow due to the large intakes on each side of the front panel; Additional ventilation on the top panel adds thermal support\r\nFan and Radiator Support :Front: Three 120mm or two 140mm fans and up to a 360mm radi', 20, '2022-02-18 16:56:44', 1),
(171, 6, 202, 'Corsair 4000X Desktop Case - Black', 17800, 9999, 'Combining stylish tempered glass, customizable RGB lighting, innovative cable management and concentrated airflow, choose the 4000X RGB for a unique high-performance PC.\r\nShow off your components and RGB lighting with tempered glass side and front panels,', 'Fully control and synchronize the RGB lighting for up to six fans with the included iCUE Lighting Node CORE and CORSAIR iCUE software.\r\nA spacious interior fits up to 6x 120mm or 4x 140mm cooling fans, along with multiple radiators including 360mm in fron', 20, '2022-02-18 17:04:51', 1),
(172, 7, 207, 'LG 60 cm/24 inches Full HD IPS 1920 x 1080 Pixels LCD Monitor, Inbuilt Speaker, HDMI x 2, VGA Port, 75 Hz Refresh Rate, AMD Freesync, 3 Side Borderless Slim Design - 24ML600S-W (White)', 18000, 14799, '\r\nSpecific Uses For Product	Gaming\r\nRefresh Rate	75 Hz\r\nBrand	LG\r\nScreen Size	23.8 Inches\r\nScreen Surface 	Matte', '24 inch Full HD - Color Calibrated IPS Monitor (178/178 Degree Viewing Angle)\r\nSound: Inbuilt 5w Dual Channel Speaker with Maxx Audio\r\nPorts: Dual HDMI, D-Sub , Headphone Out, Audio In\r\n3 Side Virtually Borderless Screen Design\r\nGaming Features: 1ms MBR, ', 17, '2022-02-20 14:38:21', 1),
(173, 7, 207, 'LG 22 inch (55cm) Full HD (1920 x 1080) Slim IPS Panel Monitor, HDMI x 2 & VGA Port, 75 Hz, AMD Freesync, Color Calibrated, Made in India - 22MK600M-B.BTR (Black), Small', 14000, 11999, '\r\nSpecific Uses For Product	Education, Business\r\nRefresh Rate	75 Hz\r\nBrand	LG\r\nScreen Size	54.6 Centimetres\r\nScreen Surface 	Matte', 'Display: 22 inch (54.61 cm) Full HD (1920 X 1080) Borderless IPS Panel\r\nConnectivity: HDMI x 2 , VGA, Headphone Out\r\nColor Calibrated Screen for accurate Color Reproduction\r\nConnectivity: HDMI x 2 , D-Sub, Headphone Out\r\nGaming Features: AMD Freesync,Blac', 20, '2022-02-18 18:27:11', 1),
(174, 7, 207, 'LG Full HD 69 cm (27 Inch) IPS Monitor 3 Side Borderless Design - Dual HDMI & VGA Port - Reader Mode and Flicker Free Screen (Work & Education) - 27ML600', 22000, 17971, 'Anti Glare Screen, Built-in Speakers, Blue Light Filter, IPS Screen with HDR 10, Wall Mountable, Thin Bezel, Tilt Adjustment, Flicker-Free', '27 inch Full HD - Color Calibrated IPS Monitor (178/178 Degree Viewing Angle)\r\nInbuilt 5w Dual Channel Speaker with Maxx Audio\r\nPorts: Dual HDMI, D-Sub , Headphone Out, Audio In\r\n3 Side Virtually Borderless Screen Design\r\nGaming Features: 1ms MBR, 75 Hz, ', 20, '2022-02-18 18:27:15', 1),
(175, 7, 207, 'LG 60 cm (24 inches) IPS Monitor - Full HD, with VGA, HDMI, Audio Out Ports, AMD Freesync, 75 Hz, Made in India - 24MP400 (Black), Small', 16500, 12730, '\r\nSpecific Uses For Product	Education, Photo Editing, Business\r\nRefresh Rate	75 Hz\r\nBrand	LG\r\nScreen Size	60.4 Centimetres\r\nScreen Surface	M', 'Display: 24 inch (60.4 cm) Full HD (1920 X 1080) IPS Panel, Anti Glare\r\nConnectivity: VGA Port, HDMI Port, Headphone Port\r\nGaming Features: AMD Freesync , Motion Blur Reduction, Black Stablizer, Dynamic Action Sync\r\nStand: Tilt Stand and VESA 75 x 75 Wall', 20, '2022-02-18 18:27:19', 1),
(176, 7, 207, 'LG 22 inch (55cm) IPS Monitor - Full HD, IPS Panel with VGA, HDMI, DVI, Audio Out Ports - 22MP68VQ', 14250, 11851, 'Specific Uses For Product	Gaming\r\nRefresh Rate	60 Hz\r\nBrand	LG\r\nScreen Size	22 Inches\r\nSpecial Feature	Flicker-Free', 'Screen Size: 22 inch (54.61 cm) Full HD (1920 X 1080) Borderless IPS Panel. Input : 100-240Vac, 50/60Hz\r\nConnectivity Port: 1 VGA Port, 1 HDMI Port, 1 DVI Port, 1 Audio-Out Port, 1 Headphone Port\r\nAspect Ratio: 16:9, Brightness (Typical): 250 cd/m², Consu', 20, '2022-02-18 18:29:57', 1),
(177, 7, 207, 'LG 60 cm (24 inches) IPS Monitor - Full HD, with VGA, HDMI, Audio Out Ports, AMD Freesync, 75 Hz, Made in India - 24MP400 (Black), Small', 16550, 12730, 'Specific Uses For Product	Education, Photo Editing, Business\r\nRefresh Rate 75 Hz\r\nBrand	LG\r\nScreen Size	60.4 Centimetres\r\nScreen Surface	Matte', 'Display: 24 inch (60.4 cm) Full HD (1920 X 1080) IPS Panel, Anti Glare\r\nConnectivity: VGA Port, HDMI Port, Headphone Port\r\nGaming Features: AMD Freesync , Motion Blur Reduction, Black Stablizer, Dynamic Action Sync\r\nStand: Tilt Stand and VESA 75 x 75 Wall', 13, '2022-02-20 13:43:09', 1),
(178, 7, 207, 'LG Ultra-Gear 24 inches 1920 x 1080 Pixels 144Hz, Native 1ms Full HD LCD Gaming Monitor with Radeon Free-sync TN Panel with Display Port, HDMI, Height Adjust Stand - 24GL650F (Black)', 26000, 16999, '\r\nSpecific Uses For Product	Education, Programming, Gaming\r\nRefresh Rate	144 Hz\r\nBrand	LG\r\nScreen Size	59.8 Centimetres\r\nScreen Surface 	Matte', 'Gaming: 144Hz Refresh Rate, 1ms Native Response time, AMD Freesync\r\nDisplay: 24 (59.8 cm) Full HD Wide Angle (170/160) TN Panel Monitor, 300 nits Brightness\r\nConnectivity: HDMI x 2 , Display Port, Headphone Out\r\nStand: Height Adjustable Stand, Tilt, Pivot', 19, '2022-02-20 13:43:15', 1),
(179, 7, 207, 'LG Ultragear 69 cm (27-inch) IPS FHD, G-Sync Compatible, HDR 10, Gaming Monitor with Display Port, HDMI x 2, Height Adjust & Pivot Stand, 144Hz, 1ms - 27GL650F (Black)', 32000, 22499, 'G-Sync Compatible 1ms, 144 Hz, IPS Screen with HDR 10, Height Adjustment; Anti Glare Screen; Pivot Adjustment; Thin Bezel; Tilt Adjustment; Flicker-Free; Wall Mountable', 'Nvidia Certified G-Sync Compatible 144 Hz, 1ms Gaming Monitor\r\n27 Inch Full HD IPS Screen (sRGB 99%) with HDR 10, 400 nits Brightness\r\nPorts: Dual HDMI, Display Port, Headphone Out\r\nHeight Adjust, Pivot (Landscape & Portait), Tilt (+5, -15 deg) Stand\r\nWal', 20, '2022-02-18 18:29:57', 1),
(180, 7, 207, 'LG Ultragear 27 240Hz, 1ms, G-Sync Compatible, HDR 10, IPS Display Gaming Monitor, Height Adjust, Pivot Stand, Display Port, HDMI Port - 27GN750', 34580, 25499, '\r\nSpecific Uses For Product	Gaming\r\nRefresh Rate	240 Hz\r\nBrand	LG\r\nScreen Size	27 Inches\r\nScreen Surface 	Matte', '27 inch UltraGear Gaming Monitor - G-Sync Compatible, 240Hz Refresh Rate, 1ms Response Time\r\nFull HD IPS Screen with HDR 10 - 400 nits Brightness, sRGB 99%\r\nPorts: Display Port, HDMI x 2, Headphone Out, USB (1 Up 2 Down)\r\n3 Side Virtually Borderless Scree', 6, '2022-02-20 13:43:23', 1),
(181, 7, 207, 'LG UltraWide 73 cm (29 inch) 21:9 WFHD (2560 x 1080) IPS Display - HDR 10, AMD FreeSync, sRGB 99%, Slim Bezel, Multitasking Monitor, HDMI X 2, Made in India - 29WL500 (Black), Small', 23000, 19499, 'Specific Uses For Product	Video Editing, Photo Editing, Business\r\nRefresh Rate	75 Hz\r\nBrand	LG\r\nScreen Size	73 Centimetres\r\nScreen Surface 	Matte', 'Display: 29 (73 cm) WFHD (2560 x 1080) Resolution IPS Display with HDR 10\r\nConnectivity: HDMI x 2, Headphone Out\r\nStand: Tilt Adjustable Stand, VESA Wall Mount (100 x 100 mm)\r\nGaming Features: AMD Freesync , Black Stablizer, Dynamic Action Sync\r\nOther Dis', 15, '2022-02-20 13:43:32', 1),
(182, 8, 208, 'Logitech G512 Mechanical Gaming Keyboard,RGB Lightsync Backlit Keys,GX Brown Tactile Key Switches,Brushed Aluminum Case,Customizable F-Keys,USB Pass Through - Black', 10495, 9495, 'Keyboard Description	Gaming\r\nConnector Type	Usb\r\nSpecial Feature	Backlit\r\nMounting Hardware	G512 gaming mechanical keyboard User documentation\r\nBrand	Logitech', 'Personalize lighting for each individual key, customize lighting effects, and enjoy in-game integrations from a spectrum of ~16.8M colors with Logitech G HUB.1\r\nGX Brown is a traditional mechanical switch providing discernible actuation for gamers who pre', 20, '2022-02-18 18:29:57', 1),
(183, 8, 208, 'Logitech G PRO Mechanical Gaming Keyboard, Ultra Portable Tenkeyless Design, Detachable Micro USB Cable, 16.8 Million Color LIGHTSYNC RGB Backlit Keys,Black', 10995, 9995, 'Built with and for esports athletes for competition-level performance, speed and precision.\r\nKaihua high quality switches deliver an audible and tactile click for a solid, secure keypress.\r\nUltra-portable co', 'Ultra-portable compact tenkeyless design frees up table space for mouse movement. Its easy to pack up and transport to tournaments.\r\nUse LIGHTSYNC to highlight keys and program static lighting patterns to onboard memory for tournament systems that dont al', 20, '2022-02-18 18:29:57', 1),
(184, 8, 202, '\r\nASUS Membrane USB Gaming Keyboard for PC - TUF K1 Programmable, Onboard Memory with Dedicated Volume Knob, Aura Sync RGB and Side Lighting Detachable Wrist Rest Spill-Resistant (Black)', 9999, 3799, 'MECHANICAL GAMING KEYBOARD - ASUS TUF K1 Wired Computer Gaming Keyboard features silent tactile mechanical switches that deliver high precision keystrokes for responsive & reliable performance during intense gaming sessions\r\nANTI-GHOSTING - Anti-ghosting ', 'DESIGNED FOR COMMITTED GAMERS - TUF K1 keyboard features 5 individual lighting zones & striking RGB bars on the sides, with ASUS Aura Sync & latest Armoury Crate software support for centralized controls, and synchronized game profiles & lighting\r\nSPILL-R', 20, '2022-02-18 18:29:57', 1),
(185, 8, 203, '\r\nCorsair K55 RGB PRO - Dynamic RGB Backlighting Six Macro Keys Keyboard with Elgato Stream Deck Software Integration Detachable Palm Rest - Dedicated Media and Volume Keys', 6700, 3983, 'Dynamic RGB Backlighting: Light up your desktop with six onboard lighting effects, assign a color to each lighting zone, or program your own vibrant lighting effects across five RGB lighting zones with CORSAIR iCUE software.\r\nSix Dedicated Macro Keys: Act', 'Dust and Spill-Resistant Design: IP42-ratedprotection guards against accidents so your gameplay never has to stop.\r\nDetachable Palm Rest: A soft rubber palm rest reduces stress on your hands so you can play longer in comfort, with a textured surface to ke', 20, '2022-02-18 18:29:57', 1),
(186, 8, 208, '\r\nLogitech K580 Slim Multi-Device Wireless Keyboard for Chrome OS - Bluetooth/USB Receiver, Easy Switch, 24 Month Battery, Desktop, Tablet, Smartphone, Laptop Compatible - White (920-009211)', 3995, 3295, 'Chrome OS edition keyboard with Google Assistant, search, launcher and media keys for easy access\r\nThe slim profile and modern minimalist design transforms your keyboard into a visual statement that will elevate your desk setup\r\nEasy Switch lets you pair ', 'Slim keys offer a fluid, laptop-like comfortable typing experience thats whisper-quiet. Number pad and 15 FN keys available for easy data inputs and shortcuts\r\nEnjoy long battery life thanks to an auto-sleep feature that kicks in when youre not typing — p', 20, '2022-02-18 18:29:57', 1),
(187, 8, 208, '\r\nLogitech K480 Wireless Multi-Device Keyboard for Windows, Apple iOS android or Chrome, Wireless Bluetooth, Compact Space-Saving Design, PC/Mac/Laptop/Smartphone/Tablet- Black', 3295, 2595, 'Type on Any Device: A new type of wireless computer keyboard for your desk that also works with your tablet and smartphone; connect with any Bluetooth-enabled device with external keyboard support.\r\nEasy-Switch Dial: Simply turn the dial of the Logitech K', 'Durable and Spill-resistant: The wireless and compact keyboard K480 is also spill-resistant (1) to survive small accidents; its a reliable and durable partner for your desk at home, or at work.\r\nCOMPATIBLE DEVICES - PC: Windows 7, Windows 8, Windows 10, 1', 20, '2022-02-18 18:29:57', 1),
(188, 8, 208, '\r\nLogitech POP Keys Mechanical Wireless Keyboard with Customisable Emoji Keys, Durable Compact Design, Bluetooth or USB Connectivity, Multi-Device, OS Compatible - Heartbreaker', 9995, 9495, '', 'Fun bouncy typing: Experience typing that’s almost addictive on typewriter-style mechanical keys; feel your fingers bounce across the comfy, scooped keys as they click, clack and pop\r\nMulti-device: Pair POP Keys with up to 3 devices and hop between them u', 20, '2022-02-18 18:29:57', 1),
(189, 8, 208, '\r\nLogitech K230 Compact Wireless Keyboard for Windows, 2.4GHz Wireless with USB Unifying Receiver, Space-Saving Design, 2-Year Battery Life, PC/Laptop- Black', 1095, 845, 'WIRELESS KEYBOARD: Reliable connection up to 10 m . Virtually no delays or dropouts-even in the busiest wireless environments-thanks to the mini Logitech USB Unifying receiver with Advanced 2.4 GHz wireless connectivity. Small enough to stay in your lapto', 'PERSONIZABLE: Want to make this sleek little keyboard a little more you? The battery door on top of the keyboard doubles as a fun design element with light grey, pink and blue options you can swap to suit your mood or décor\r\nSYSTEM COMPATIBILITY: Windows-', 20, '2022-02-18 18:31:37', 1),
(190, 8, 209, '\r\nChiptronex COM X Wired Keyboard and Mouse Combo with 104 Keys and a USB Mouse with 1200 DPI', 1599, 799, 'Comfortable & Effortless Typing: Our wired keyboard and mouse combo is simple and effective. No fancy gadgets, or extra keys that will never be used. By using the standard layout of a pc keyboard and mouse wired with precision focus, you will be able to w', 'Precise and Comfortable mouse: 1200 dpi precision optical sensor for a precise and smooth control as well as ergonomic and ambidextrous design for maximum comfort\r\nClear and Convenient: The bold, bright white characters make the keys on this PC or laptopk', 20, '2022-02-18 18:31:37', 1),
(191, 8, 202, 'Asus TUF Gaming K1 Wired Gaming Keyboard (Aura Sync Technology, Black)', 4400, 2999, 'Keyboard, Ideal For: Laptop | Desktop\r\nLifestyle: Everyday Use | Home | Gaming\r\nConnection Type: Wired\r\nDynamic RGB Lighting\r\nDetachable Ergonomic Wrist Rest', 'Special Key FunctionsOn-the-Fly Macro Recording: Step 1: Fn + Right-ALT to Start Recording, Step 2: Fn + Right-ALT to End Recording, Step 3: Assign Macro Key, Macro Hot Keys : F1-F8 keys Programmable, On-the-Fly Macro Recording: Step 1: Fn + Right-ALT to ', 20, '2022-02-18 18:31:37', 1);
INSERT INTO `products` (`product_id`, `category_id`, `company_id`, `product_name`, `mrp`, `saleing_price`, `short_desc`, `long_desc`, `stock`, `add_date`, `product_status`) VALUES
(192, 8, 205, '\r\nHP USB Wireless/Cordless Spill Resistance Keyboard and Mouse Combo (4SC12PA)', 1999, 1299, 'Stylish Ultra-Slim design Keyboard & Mouse, Sealed membrane for overall protection, Brush metal finish, Advanced controls\r\n2.4G wireless technology with 10m working range and nano-receiver, Energy saving design standby function', 'Professional Optical sensor with direct DPI switch 800/1200/1600 dpi, High quality switches for over 2 million clicks supported\r\nStylish Ultra-Slim design Keyboard & Mouse, Sealed membrane for overall protection, Brush metal finish, Advanced controls\r\nNot', 20, '2022-02-18 18:31:37', 1),
(193, 7, 214, '\r\nSamsung 59.8 cm (23.5 inch) Curved LED Backlit Computer Monitor - Full HD, VA Panel with VGA, HDMI, Audio Ports - LC24F390FHWXXL (Black)', 14798, 12399, 'Screen Size: 23.5 inch (59.8 cm) Full HD (1920 x 1080) curved VA panel ,Connectivity Port: 1 VGA Port, 1 HDMI Port, 1 Headphone Port\r\nNote : Product is a computer monitor not a TV\r\nAspect Ratio: 16:9, Brightness (Typical): 250 cd/m2', 'Refresh Rate: 60 Hz, Response Time: 4 ms, Operation Conditions: Temperature ( 10 ~ 40 °C ), Humidity 10 ~ 80% (non-condensing); Power Supply: AC 100 ~ 240 V, Power Consumption (Max): 25 watts\r\nViewing Angle: 178 degree horizontal and 178 degree vertical, ', 20, '2022-02-18 18:31:37', 1),
(194, 7, 214, '\r\nSamsung 27 inch (68.5 cm) Curved LED Backlit Computer Monitor - Full HD, VA Panel with VGA, HDMI, Audio Ports - LC27F390FHWXXL (Black)', 24700, 16999, '\r\nRefresh Rate	60 Hz\r\nBrand	Samsung\r\nScreen Size	27 Inches\r\nSpecial Feature	Flicker-Free, Curved\r\nNumber 1 of HDMI Ports', 'Screen Size: 27 inch (68.6 cm) Full HD (1920 x 1080) curved VA panel\r\nConnectivity Port: 1 VGA Port, 1 HDMI Port, 1 Headphone Port\r\nAspect Ratio: 16:9, Brightness (Typical): 250 cd/m2\r\nRefresh Rate: 60 Hz, Response Time: 4 ms\r\nViewing Angle: 178 degree ho', 20, '2022-02-18 18:31:37', 1),
(195, 9, 208, 'Logitech G102 Light Sync Gaming Mouse', 1995, 1595, 'Logitech G102 Light Sync Gaming Mouse with Customizable RGB Lighting, 6 Programmable Buttons, Gaming Grade Sensor, 8 k dpi Tracking,16.8mn Color, Light Weight (Black)', 'COLORFUL LIGHTSYNC RGB : Play in colour with our most vibrant LIGHTSYNC RGB featuring colour wave effects that are customisable across 16.8 million colours. 8,000 DPI sensor.\r\nCLASSIC,GAMER TESTED DESIGN : Play comfortably and with total control. The simp', 20, '2022-02-20 12:28:36', 1),
(196, 9, 208, '\r\nLogitech G502 Lightspeed Wireless Gaming Mouse', 13495, 12489, 'Logitech G502 Lightspeed Wireless Gaming Mouse, Hero 25K Sensor, 25,000 DPI, RGB, Adjustable Weights, 11 Programmable Buttons, Long Battery Life, On-Board Memory, PC/Mac - Black (910005569)', 'Hero 25K sensor through a software update from G HUB, this upgrade is free to all players: Our most advanced, with 1:1 tracking, 400+ ips, and 100 - 25,600 max dpi sensitivity plus zero smoothing, filtering, or acceleration. PTFE Feet: 250-km range\r\n11 bu', 20, '2022-02-20 12:28:36', 1),
(197, 9, 208, '\r\nLogitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor', 3795, 2495, 'Logitech G304 Lightspeed Wireless Gaming Mouse, Hero Sensor, 12,000 DPI, Lightweight, 6 Programmable Buttons, 250h Battery Life, On-Board Memory, Compatible with PC/Mac - Black', 'HERO GAMING SENSOR : Next-gen Hero mouse sensor delivers up to 10x the power efficiency over other gaming mice with exceptional accuracy and responsiveness thanks to 400 IPS precision and up to 12000 DPI sensitivity. Durability : PTFE Feet: 250-km rangeUL', 20, '2022-02-20 12:28:37', 1),
(198, 9, 208, '\r\nLogitech G PRO Wireless Gaming Mouse, Hero 25K Sensor', 10995, 9995, 'Logitech G PRO Wireless Gaming Mouse, Hero 25K Sensor, 25,600 DPI, RGB, Ultra Lightweight, 4-8 Programmable Buttons, Long Battery Life, POWERPLAY-Compatible, Built for Esports, PC/Mac - Black', 'LIGHTSPEED Wireless With pro-grade wireless performance, LIGHTSPEED overcomes the limitations of latency, connectivity and power to provide rock-solid and super fast 1 ms report rate connection. This allows pro gamers to eliminate cord drag, which produce', 20, '2022-02-20 12:28:37', 1),
(199, 9, 208, '\r\nLogitech G604 Lightspeed Wireless Gaming Mouse', 8495, 6745, '15 PROGRAMMABLE CONTROLS: include six thumb buttons; fully programmable with G HUB software.\r\nDUAL CONNECTIVITY: Toggle between convenient Bluetooth and ultra-fast 1 ms LIGHTSPEED advanced wireless technology', 'DUAL MODE HYPERFAST SCROLL WHEEL: Durable metal scroll wheel switches between hyper-fast and ratchetted scrolling. Programmable scrolling lets you apply keybinds.\r\n240 HOURS WITH ONE AA: efficient HERO 25K allows for 240 hours in LIGHTSPEED mode or up to ', 20, '2022-02-20 12:28:37', 1),
(200, 9, 208, '\r\nLogitech M235 Wireless Mouse, 2.4 GHz with USB Unifying Receiver', 995, 799, 'Logitech M235 Wireless Mouse, 2.4 GHz with USB Unifying Receiver, 1000 DPI Optical Tracking, 12 Month Life Battery, Compatible with Windows, Mac, Chromebook/PC/Laptop - Blue', 'Youll enjoy smooth cursor control, precise tracking and easy text selection on the surfaces where you use your computer most.\r\nThe tiny Unifying receiver connects up to six Unifying-compatible devices with a powerful, reliable wireless connection (up to 2', 20, '2022-02-20 12:28:37', 1),
(201, 9, 209, '\r\nCHIPTRONEX Alpha Z RGB Wired Gaming Mouse 6400 DPI 6 Programmable Button & Breathing Light Ergonomic Design USB Computer Mice Desktop Laptop PC Gaming (Alpha Z)r', 995, 799, 'Logitech M235 Wireless Mouse, 2.4 GHz with USB Unifying Receiver, 1000 DPI Optical Tracking, 12 Month Life Battery, Compatible with Windows, Mac, Chromebook/PC/Laptop - Blue', 'Adjustable DPI switch between 800-1600-2400-3200-4800-6400 DPI using the built-in button to adjust your accuracy on the fly\r\nHighly accurate mouse with a high-precision positioning game engine for accurate positioning and stable transmission. 6 buttons te', 20, '2022-02-20 12:29:57', 1),
(202, 9, 205, '\r\nHP M100 Wired Gaming Optical Mouse (Black)', 599, 399, 'Interface: USB 3.0, USB 2.0, Wired 3.0 USB, Optical Mouse for Gaming, 1600 DPI Optical Mouse', 'With or without a mouse pad, the mouse moves easily for precise optical tracking, use the scroll wheel for fast, precise tracking to navigate through your work effortlessly\r\nJust plug the cord into your computers USB port and youre ready to go\r\nAdjust you', 20, '2022-02-20 12:29:57', 1),
(203, 9, 205, '\r\nHP G200 Gaming Mouse with Backlit, All Customizable Buttons, Adjustable 4000 DPI, Ergonomic Design & RGB Breathing LED Lighting, Anti-Slip Scroll Wheel USB Wired Mouse (7QV30AA)\r\n', 1999, 1349, 'Instantly switch between six DPI sensitivity settings to quickly respond to your gaming demands for targeting, maneuverability or speed\r\nCompatibility - Windows XP / Windows7 /Windows 8 / Windows10 and MacOS:10.3 or later', 'Instantly switch between six DPI sensitivity settings to quickly respond to your gaming demands for targeting, maneuverability or speed\r\nNote : In case of Wireless mouse, the USB receiver will be provided inside or along with the mouse\r\nGaming buttons rat', 20, '2022-02-20 12:29:57', 1),
(204, 9, 205, '\r\nHP G360 Gaming Mouse with RGB backlighting, 6 Programmable Buttons\r\n', 2499, 1490, 'HP G360 Gaming Mouse with RGB backlighting, 6 Programmable Buttons, Customizable 6200 DPI, Ergonomic Design, Non-Slip 3D Roller USB Wired Mouse (4QM92AA)', 'Compatibility - Windows XP / Windows7 /Windows 8 / Windows10\r\nInstantly switch between six DPI sensitivity settings for more precise targeting\r\nNote : In case of Wireless mouse, the USB receiver will be provided inside or along with the mouse\r\nThis drive ', 20, '2022-02-20 12:29:57', 1),
(205, 9, 205, 'HP M270 Gaming Mouse with Backlit, 6 Buttons, 4-Speed Customizable 2400 DPI', 699, 631, 'High-end optical engine for precise positioning. 4-speed DPI optional, adjustable mouse movement speed', 'Button life up to 3 million times, High definition(3200 DPI) optical tracking delivers more responsive cursor control.Recommend with a solid color mouse pad\r\nCompatibility - Windows XP / Windows7 /Windows 8 / Windows10\r\nHigh-end optical engine for precise', 20, '2022-02-20 12:29:57', 1),
(206, 9, 202, '\r\nASUS ROG Strix Impact II Wired Optical Ambidextrous Gaming Mouse , Black\r\n', 4250, 1999, 'Lightweight build and ambidextrous ergonomics co-designed with pro gamers for optimal performance.\r\nPivoted button mechanism for fast response and accurate performance, accompanied by a clean, tactile feel.', 'Fast, smooth and flexible glides with lightweight, soft-rubber cable.\r\n6,200 dpi optical sensor with four-level DPI switch for sensitivity adjustment.\r\nOn-the-fly DPI button for effortless accuracy adjustments.On-the-fly DPI button for effortless accuracy', 20, '2022-02-20 12:29:57', 1),
(207, 9, 202, '\r\nASUS ROG Strix Impact II Wired Optical Ambidextrous Gaming Mouse , Black\r\n', 4250, 1999, 'Lightweight build and ambidextrous ergonomics co-designed with pro gamers for optimal performance.\r\nPivoted button mechanism for fast response and accurate performance, accompanied by a clean, tactile feel.', 'Fast, smooth and flexible glides with lightweight, soft-rubber cable.\r\n6,200 dpi optical sensor with four-level DPI switch for sensitivity adjustment.\r\nOn-the-fly DPI button for effortless accuracy adjustments.On-the-fly DPI button for effortless accuracy', 20, '2022-02-20 12:29:57', 1),
(208, 10, 206, 'Cooler Master MWE 550 Bronze V2 230v, 80 Plus Bronze Certified, Non-Modular Power Supply – Black', 5999, 3999, 'Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.\r\nNew generation circuit design such as DC-to-DC + LLC circuits offer reliable, stable output to all connecte', 'Certified 80 PLUS Bronze Efficiency guarantees a typical efficiency of 88% under normal operating conditions thus saving energy.\r\nAll flat cables take up less space and are easier to manipulate within the chassis improving ease of build and air airflow.\r\n', 20, '2022-02-20 12:29:58', 1),
(209, 10, 206, 'Cooler Master MWE Gold 650 V2 80 Plus Gold Certified, Fully Modular Power Supply - Black, 80 Plus Bronze Certified, Non-Modular Power Supply  Black', 9999, 7499, 'ATX 24 PIN x1, EPS 4+4 PIN x1, EPS 8 PIN x1, PCI-E 6+2 PIN x4, SATA x8, Peripheral 4 pin x4\r\nThe MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.\r\nCompliance with latest ATX 1', 'Compliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphics card are properly met.\r\nAll MWE Gold models have 2 EPS connectors for universal current generation motherboard compatibility.\r\nAll ', 20, '2022-02-20 12:29:58', 1),
(210, 10, 206, 'Cooler Master MWE Gold 750 V2 80 Plus Gold Certified, Fully Modular Power Supply - Black, 750w', 12799, 9249, 'The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.\r\nCompliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphi', 'All MWE Gold models have 2 EPS connectors for universal current generation motherboard compatibility.\r\nATX 24 PIN x1, EPS 4+4 PIN x1, EPS 8 PIN x1, PCI-E 6+2 PIN x4, SATA x12, Peripheral 4 pin x4\r\nAll flat modular cables take up less space and are easier ', 20, '2022-02-20 12:29:58', 1),
(211, 10, 206, 'Cooler Master MWE Gold 850 V2 80 Plus Gold Certified, Fully Modular Power Supply - Black', 13999, 10599, 'The MWE Series comes with a standard limited manufacturing warranty of 5 years from the date of purchase for complete peace of mind.\r\nCompliance with latest ATX 12V V2.52 specification ensures power requirement for new age multi-core processors and Graphi', 'All MWE Gold models have 2 EPS connectors for universal current generation motherboard compatibility.\r\nATX 24 PIN x1, EPS 4+4 PIN x1, EPS 8 PIN x1, PCI-E 6+2 PIN x4, SATA x12, Peripheral 4 pin x4\r\nAll flat modular cables take up less space and are easier ', 20, '2022-02-20 12:29:58', 1),
(212, 10, 206, ' Cooler Master MWE 450W 80 Plus Non-Modular White Series SMPS Power Supply', 3899, 3499, 'Meeting the 80 plus certification for 230V, the MWE will guarantee a typical efficiency of at least 85 percentage during normal use\r\nMWE consumes less then 0.5 watt when your system is in standby mode, which not only reduces strain on the environment but ', 'Engineered to operate normally at 40 dgrees, providing added security and reliabilty to system operating in warm conditions\r\nQuiet and durable, Proven Thermal Resistance, the thermally controlled 120mm HDB fan operates smoothly without friction, enjoy you', 20, '2022-02-20 12:29:58', 1),
(213, 10, 203, 'Corsair VS500 80 Plus ATX Power Supply', 5300, 3250, 'CORSAIR VS power supplies are guaranteed to deliver their full rated wattage of continuous power.\r\nCertified 80 PLUS efficiency provides up to 85% operational efficiency, reducing heat and energy costs.', 'A 120mm low-noise cooling fan with a specially designed fan curve spins at higher speed when your power supply is under heavy load and slows down for quieter operation at lower loads.\r\nA comprehensive three-year warranty is your guarantee of reliable oper', 20, '2022-02-20 12:29:58', 1),
(214, 10, 203, 'Corsair CV550, CV Series, 80 Plus Bronze Certified, 550 Watt Non-Modular Power Supply - Black', 6900, 3610, '80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs. MTBF hours : 100,000 hours\r\nFull Continuous Power: CORSAIR CV Series power supplies are guaranteed to deliver their full rated wattag', 'Low-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads\r\nCompact Casing: 125 mm length ensures an easy fit in almost al', 20, '2022-02-20 12:30:34', 1),
(215, 10, 203, 'Corsair CV650, CV Series, 80 Plus Bronze Certified, 650 Watt Non-Modular Power Supply - Black', 8000, 4749, 'Model Name	CV\r\nBrand	Corsair\r\nAudio Wattage	650 Watts\r\nWattage	650 Watts\r\nItem Dimensions LxWxH	15\r\n80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs\r\nFull Continuous Power: CORSAIR CV', 'Low-Noise Cooling: A 120 mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads\r\nCompact Casing: 125 mm length ensures an easy fit in almost al', 20, '2022-02-20 12:30:34', 1),
(216, 10, 203, 'Corsair CV Series CV750 80 Plus Bronze ATX Power Supply', 9900, 5768, 'Model Name	CV750\r\nBrand	Corsair\r\nForm Factor	ATX\r\nItem Dimensions LxWxH	15 x 12.5 x 8.6 Centimeters\r\nItem Weight	1900 Grams\r\n80 PLUS Bronze Certified: Provides up to 88% operational efficiency, generating less heat and lowering your energy costs\r\nFull Con', 'Low-Noise Cooling: A 120mm thermally controlled low-noise cooling fan only spins at high speed when your power supply is under heavy stress, slowing down for quieter operation at lower loads.\r\nCompact Casing: 125mm length ensures an easy fit in almost all', 20, '2022-02-20 12:30:34', 1),
(217, 10, 211, 'GIGABYTE GP-P450B 80 Plus Bronze Power Supply', 5050, 2550, 'Brand	GIGABYTE\r\nOutput Wattage	450\r\nWattage	450 Watts\r\nItem Dimensions LxWxH	15 x 14 x 8.6 Centimeters\r\nItem Weight', '80 PLUS Bronze certified\r\n120mm Silent Hydraulic Bearing (HYB) Fan\r\nReliable flat cable\r\nSingle +12V rail\r\nOVP/OPP/SCP/UVP/OCP/OTP protection', 20, '2022-02-20 12:30:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `u_role` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `u_role`) VALUES
(1, 'ankit seth', 'ankit', 1),
(2, 'rohit sharma', 'rohit', 0),
(3, 'ruturaj giakwad', 'ruturaj', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145218;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
