-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:26 PM
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
-- Database: `genie`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_salary`
--

CREATE TABLE `advance_salary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `advanced_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `att_date` varchar(255) NOT NULL,
  `att_year` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `edit_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `att_date`, `att_year`, `attendance`, `edit_date`, `created_at`, `updated_at`) VALUES
(11, 1, '26/05/24', '2024', 'Present', '26_05_24', NULL, NULL),
(12, 2, '26/05/24', '2024', 'Present', '26_05_24', NULL, NULL),
(13, 4, '26/05/24', '2024', 'Present', '26_05_24', NULL, NULL),
(14, 5, '26/05/24', '2024', 'Absent', '26_05_24', NULL, NULL),
(15, 7, '26/05/24', '2024', 'Present', '26_05_24', NULL, NULL),
(16, 8, '26/05/24', '2024', 'Present', '26_05_24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('lemonahmde065@gmail.com|127.0.0.1', 'i:2;', 1716738628),
('lemonahmde065@gmail.com|127.0.0.1:timer', 'i:1716738628;', 1716738628);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `created_at`, `updated_at`) VALUES
(1, 'occaecati', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(2, 'saepe', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(3, 'exercitationem', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(4, 'optio', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(5, 'nihil', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(9, 'ut', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(11, 'molestias', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(12, 'sunt', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(13, 'sit', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(14, 'illo', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(15, 'perspiciatis', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(17, 'saepe', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(19, 'perspiciatis', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(20, 'soluta', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(22, 'Foods', NULL, NULL),
(23, 'Foods', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `city`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'Emmalee Veum', 'shaun.blick@example.org', '917-846-6477', '421 O\'Reilly Mountain\nWest Ara, MT 40293-3095', 'Dr. Golda Kulas', '0738485797', 'Bauch PLC', 'South Guy', 'Elouiseberg', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(6, 'Jacquelyn O\'Conner', 'bhegmann@example.net', '+1-650-236-2772', '752 Renner Hills Suite 514\nSouth Janie, KS 18793-0847', 'Brain McGlynn', '95784628602015', 'Hermiston LLC', 'Lake Brendanview', 'Ondrickaton', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(7, 'Amparo Hills III', 'jacobi.braeden@example.com', '+1.727.824.4717', '26998 Kutch Tunnel Apt. 276\nRichiemouth, MD 97288-9240', 'Adele Ebert', '85501512562', 'Wyman PLC', 'Aniyahmouth', 'Port Leif', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(8, 'Lauretta Altenwerth', 'albina83@example.org', '1-279-725-2582', '425 Garfield Turnpike\nNorth Jamaalton, WA 38229-7899', 'Lavina Haley', '7530415', 'Wintheiser, Turcotte and Orn', 'Lambertton', 'Oralmouth', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(9, 'Jaime Turcotte', 'lue30@example.com', '(731) 824-5692', '5767 Gunner Harbors Suite 305\nWest Natashaville, ME 35888', 'Columbus Schiller', '3565708657', 'Tromp Ltd', 'Lolamouth', 'Grahamchester', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(10, 'Mr. Rafael Reilly IV', 'corwin.stan@example.net', '01234567890', '8147 Kristopher WayLake Lynn, DE 97666-7868', 'Dr. Lorenzo Crona MD', '6349474', 'Bernier, Leuschke and Wilkinson', 'Lake Clairebury', 'New Lamar', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(11, 'Aryanna Lind', 'iheathcote@example.com', '754-599-0401', '375 Danika Center\nEast Hiram, AK 55708-5898', 'Alta Brekke DVM', '019042958', 'Borer, McKenzie and Schmitt', 'East Lilianemouth', 'Pfannerstillmouth', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(12, 'Evert Erdman', 'jolson@example.com', '(202) 385-4107', '1241 Timothy Well\nMertzfort, VT 23981', 'Alexanne Wolff', '7485866658171', 'Brekke, West and Gibson', 'West Cecilia', 'South Pearlstad', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(13, 'Tierra Pouros', 'brando18@example.org', '346-242-8080', '8238 Kaci Walk\nFlatleyside, WY 18438-4033', 'Jane Renner', '98317389042', 'Abshire, Carter and Runolfsson', 'Jaskolskiburgh', 'Celestinehaven', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(14, 'Mrs. Roberta Collier', 'vkemmer@example.com', '1-904-396-2207', '426 Murray Burgs Apt. 859\nSchusterport, PA 41655', 'Dale Leannon DDS', '85907119', 'Stoltenberg LLC', 'East Aronmouth', 'Carletonview', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(15, 'D\'angelo Huel', 'smith.drew@example.org', '1-321-705-0363', '190 Tavares Corners Apt. 879\nBraunburgh, SD 87022-0854', 'Dr. Libbie Zulauf', '828757456600', 'Oberbrunner-Bergstrom', 'Mortonstad', 'Lake Ivory', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(16, 'Robb Rippin', 'alivia.vonrueden@example.com', '1-256-301-5352', '3413 Kian Junctions\nHermistonland, AR 75966-9759', 'Oda Steuber', '84775058193', 'Heathcote and Sons', 'North Preston', 'Lake Tyrique', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(17, 'Prof. Darien Doyle', 'wcummings@example.com', '(870) 725-1857', '195 Harvey Trail\nPort Karenbury, TX 84148', 'Howard Wehner', '692192730758', 'Tremblay-Daugherty', 'Daughertymouth', 'Ziemeside', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(18, 'Mr. Everardo Jast', 'rodrick.turner@example.org', '+1-515-815-9810', '460 Toy Road\nSporerbury, NV 66466-8016', 'Missouri Cummerata', '3163392068692', 'Zulauf LLC', 'Creminport', 'Lake Lilliana', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(19, 'Quentin Beier III', 'rlangosh@example.org', '1-540-754-7460', '23746 Mraz Motorway\nNew Goldaport, NC 65620-5795', 'Polly Jones', '9778763268670', 'Harvey Ltd', 'Rohanview', 'Port Dawn', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(20, 'Dr. Kyle Wiegand V', 'larue.rempel@example.net', '1-920-297-2619', '89417 Bayer Throughway Suite 497\nKrisborough, WY 38048', 'Miss Eula Conn Jr.', '76442161004', 'Hudson PLC', 'New Russell', 'Stefanstad', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(21, 'Murphy Pfannerstill', 'mraz.gordon@example.org', '419.544.3553', '624 Bednar Turnpike Suite 565\nSouth Emmettbury, TX 66223', 'Ms. Katlynn Morar II', '080545022', 'Brown, Schowalter and Anderson', 'West Roelberg', 'Lake Rey', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(22, 'Shaylee Cremin', 'sophie.klocko@example.net', '(727) 897-4959', '680 Micaela Junctions\nLegrosshire, WV 10405-9240', 'Astrid Eichmann', '6612548813', 'Nicolas-Harvey', 'Port Danielle', 'North Devonport', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(23, 'Derick Shields', 'jarred.ondricka@example.com', '+15173567815', '21523 Cruickshank Light Suite 867\nErnserside, TN 45862', 'Dr. Merlin Quigley Jr.', '838189751', 'Ankunding LLC', 'North Chanelbury', 'Fredaborough', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(24, 'Mr. Riley Anderson MD', 'brigitte80@example.net', '856.310.0211', '779 Aiden Mall Apt. 251\nJoshton, IN 89843-0660', 'Amos Gorczany', '12304855810', 'Rath-Brekke', 'O\'Reillymouth', 'Jaysonhaven', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(25, 'Marjorie Gleason', 'brian06@example.net', '1-351-863-0826', '284 Jensen Views Suite 125\nGaylordton, KY 20588', 'Prof. Ronny Heathcote DDS', '32022492789', 'Hettinger, Bartoletti and Lakin', 'North Josh', 'Kossmouth', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(26, 'Candace Gottlieb II', 'glover.isidro@example.net', '+1.757.946.9247', '3585 Juston Overpass Suite 545\nChetchester, MD 12311-5901', 'Adolphus Lueilwitz', '02735958625315', 'Terry-Kshlerin', 'Kailynside', 'New Icie', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(27, 'Albina Goldner', 'bertram.hammes@example.com', '201.663.8767', '40912 Francesca Trail Suite 887\nClemmiestad, MA 74654', 'Hertha Trantow', '594702785004', 'Torp, Keebler and Davis', 'VonRuedenfurt', 'Charlieview', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(28, 'Garland Friesen Jr.', 'collins.arnold@example.org', '1-484-641-3776', '82864 Stamm Lights Apt. 405\nMyraton, MI 26010', 'Dr. Kevin Fay Jr.', '718893257892', 'McGlynn PLC', 'South Lamar', 'North Enoshaven', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(29, 'Prof. Kiarra Hoppe II', 'vance.barrows@example.org', '1-586-577-4499', '320 Cara Club Suite 100\nPort Camilaborough, HI 12975', 'Lupe Macejkovic DDS', '0780105325', 'Crona, Quigley and Hodkiewicz', 'New Torranceborough', 'Cronaton', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(30, 'Dr. Mekhi Bashirian Sr.', 'dusty68@example.org', '+1.847.775.2602', '22256 Vanessa Trail Suite 922\nDurwardport, MA 06599', 'Mr. Justyn McLaughlin', '9992400106', 'Brakus, Jakubowski and Hoeger', 'Riceport', 'East Caleb', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(31, 'Aglae Marquardt PhD', 'kihn.corrine@example.org', '+1-661-578-6757', '904 Alysa Crossing Suite 713\nSouth Lilliana, KS 47462', 'Mr. Arlo Kozey', '082105355', 'Brakus-Goldner', 'Krishaven', 'New Delaney', '', '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(32, 'Eddie Waelchi', 'weston.murazik@example.net', '+1-253-717-2485', '56116 Welch Fort Apt. 321\nPort Marielleton, CA 31906-8685', 'Obie Kshlerin', '574892794', 'Hintz Ltd', 'West Allanbury', 'Anahibury', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(33, 'Prof. Andre Watsica', 'lula.marvin@example.net', '1-865-837-7957', '1343 Ettie Summit\nEmmiemouth, CT 54659', 'Bria Sawayn Sr.', '9715118189112', 'Jakubowski-Waelchi', 'New Florida', 'New Macie', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(34, 'Providenci Cremin', 'natalie98@example.net', '1-973-333-1479', '68353 Trantow Springs Apt. 973\nLeaberg, NM 85966-4972', 'Antonina Herzog III', '883561167514', 'Hamill PLC', 'West Nicholasland', 'New Greyson', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(35, 'Aracely DuBuque', 'irwin23@example.org', '+1-726-970-5188', '718 Reynolds Mountain\nEast Lue, MT 53320-6698', 'Grayson Hansen', '7443014260', 'Russel-Mayert', 'Port Autumnberg', 'Esmeraldatown', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(36, 'Godfrey Parisian I', 'mosciski.iliana@example.net', '+1-762-971-2140', '181 Elmira Shore Suite 974\nFerryton, OK 41834-3775', 'Nora Botsford', '12056669228880', 'Brown Ltd', 'South Joseton', 'East Gwenview', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(37, 'Lori Crooks', 'ucrooks@example.org', '312-895-2545', '564 Erdman Branch\nPort Helene, AK 00805-5589', 'Garnett Williamson', '248029495', 'Ankunding Inc', 'Othoshire', 'West Pete', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(38, 'Angel Ruecker', 'xschaefer@example.com', '(606) 789-6659', '651 Ryan Inlet Apt. 780\nJaniyaborough, KY 85913', 'Jettie Leffler', '0401517913', 'Keeling, Gislason and Blick', 'Lake Tania', 'New Clifford', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(39, 'Cayla Bernier', 'flavio48@example.org', '985-613-2266', '4848 Weissnat Ports\nPort Mackenzieville, NV 30462-8783', 'Rita Jast', '69378516713718', 'Toy, Leuschke and Kuhn', 'Loyalville', 'Lindabury', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(40, 'Jewell Dickinson Sr.', 'joey.steuber@example.net', '925-708-7478', '715 Quigley Throughway\nPort Anna, FL 16726-9707', 'Elena Waters', '604935667566', 'Kuhic Group', 'New Christophe', 'West Alberta', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(41, 'Genesis Kutch', 'kareem42@example.net', '603-652-3199', '6760 Ratke Meadow Apt. 798\nBeerville, ME 10610-0091', 'Prof. Skylar Schiller', '92147048855', 'Adams Group', 'Connorview', 'North Bethelmouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(42, 'Jovani Blanda', 'mparker@example.net', '415.652.1607', '587 Ayla Glen Suite 522\nBradenshire, CA 29393-6218', 'Emery Spinka', '9272630440', 'Cronin Ltd', 'Floridatown', 'Joelside', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(43, 'Maybell Dach', 'kenya.kub@example.net', '+1.954.430.7144', '6864 Arne Creek\nZemlakfort, CA 17730', 'Oscar Hills', '108043600221', 'Schinner Group', 'Zemlakshire', 'Lake Ubaldoborough', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(44, 'Jerad Zemlak', 'uharber@example.com', '812.773.1755', '61653 Wisoky Flat Suite 570\nPort Brionnabury, WY 76274-0702', 'Marianna Hill Jr.', '1602583401716', 'Lynch, Conn and Hilpert', 'North Shawnchester', 'East Anaside', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(45, 'Darby Konopelski', 'zgulgowski@example.org', '1-934-995-1185', '60560 Boyer Route Suite 120\nKallieberg, MS 26078', 'Ms. Ardith Reinger PhD', '807829272', 'Ryan-Bechtelar', 'Verntown', 'Deannashire', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(46, 'Ryder Schoen', 'howe.deshaun@example.com', '+1 (931) 951-8004', '734 Senger Locks\nSouth Katherinebury, NH 39148-7698', 'Joe Johns', '5067035445250', 'Pagac, Wisoky and Kshlerin', 'North Orlandmouth', 'Jaskolskihaven', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(47, 'Brianne Kuhlman', 'lreilly@example.net', '(330) 515-4791', '7354 Ernser Drive\nNorth Elenor, MO 93558-8656', 'Mr. Dereck Pacocha', '92967703342131659', 'Cummerata Inc', 'West Evestad', 'West Idella', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(48, 'Belle Koss', 'uwuckert@example.org', '1-339-929-8680', '74476 Parisian Ports Apt. 159\nMertieberg, IN 74965-4222', 'Hyman Carter', '537544339077911', 'Schuster, McCullough and McCullough', 'Beierburgh', 'Lake Eddmouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(49, 'Telly Gerhold Jr.', 'fmurazik@example.com', '+1 (541) 964-2667', '632 Bechtelar Lodge\nLontown, WI 29495', 'Nayeli Dare', '640099264508', 'Hoppe, Torp and Nicolas', 'Schmittville', 'New Gavintown', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(50, 'Miss Kylee Reichel Jr.', 'rwalter@example.com', '1-352-750-0461', '75494 Leffler Lodge\nEast Roseport, CA 05408', 'Dr. Stephany Shields PhD', '3199588668813', 'Nader, Lueilwitz and Murazik', 'East Destiney', 'Haleyview', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(51, 'Raquel Kunde', 'ewald81@example.org', '(432) 361-1008', '1591 Marisa Loaf\nPort Russell, KS 46155', 'Albina Welch', '7244878764805', 'Howell, Shields and Yost', 'Kuhlmanfort', 'South Erikamouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(52, 'Evan Walsh', 'proberts@example.org', '1-210-554-8897', '75487 Kuvalis Avenue Apt. 196\nTerrymouth, KY 18481-6897', 'Lavonne Torphy', '7881361303', 'Mueller, Beahan and Lemke', 'South Mariam', 'Franciscaburgh', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(53, 'Prof. Edythe Ruecker V', 'hwaelchi@example.org', '774.263.0642', '24271 Newton Crest\nLake Marioshire, MS 92699', 'Prof. Torrey Heathcote Jr.', '7151914', 'Wilderman-Stark', 'New Murlville', 'Kristoferborough', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(54, 'Dr. Roberta Strosin', 'fbreitenberg@example.org', '(708) 319-7596', '162 Palma Squares\nSouth Yvettefurt, IA 83055-8415', 'Mae Stark', '62972937971', 'Bode and Sons', 'West Paxton', 'East Chloefort', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(55, 'Miss Elsa Kling Sr.', 'vromaguera@example.net', '930.863.1877', '5412 Lehner Lights Apt. 852\nSchambergermouth, VA 69616', 'Miss Leta Marquardt', '251497611', 'Johnson Ltd', 'South Jessika', 'Port Everardoburgh', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(56, 'Myriam Keeling', 'tess.abbott@example.com', '+1.909.468.8160', '34395 Bernita Station\nPort Shanna, OH 41735-7763', 'Prof. Napoleon McClure', '42330148517', 'Bins, Ortiz and Dach', 'Port Alfonzo', 'South Merlin', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(57, 'Maegan Smith', 'michele.weimann@example.com', '(218) 696-8165', '6849 Torphy Gardens Suite 928\nEast Irma, MT 87023-7358', 'Dominique Volkman Sr.', '094408629267', 'Weissnat, Cummerata and Rogahn', 'Lake Maciberg', 'South Wilma', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(58, 'Hilton Ankunding', 'jarrett16@example.net', '1-272-698-9469', '8571 Eddie Plains Suite 327\nWuckertborough, LA 41601-8740', 'Graciela Green', '09627020547', 'Sanford Ltd', 'Schuppechester', 'Schroederfurt', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(59, 'Darlene Wyman', 'gloria35@example.net', '913.326.4716', '8634 Urban River\nKatrinamouth, MT 04160-9197', 'Emie Goldner', '59952683097373', 'Herzog-Kuhn', 'North Sharon', 'North Eden', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(60, 'Mr. Cedrick Ritchie DDS', 'epollich@example.com', '+1.458.856.0701', '5185 Okuneva Neck\nBradtkestad, CT 22630-0232', 'Prof. Haley Macejkovic II', '708253165', 'Schaefer-Cartwright', 'East Marques', 'South Bethanyport', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(61, 'Carolanne Rolfson', 'esauer@example.com', '1-364-428-9704', '48968 Beer Keys\nNew Violetmouth, AZ 00731-7382', 'Andrew Beier', '693284677714', 'Osinski-Goodwin', 'Seanland', 'Ezrashire', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(62, 'Mr. Lawson Vandervort', 'cgibson@example.net', '(626) 487-8900', '947 Beatty Parkways Suite 482\nDenesikburgh, WY 73599-5598', 'Moses O\'Connell', '78688593', 'Gottlieb Group', 'Tatyanatown', 'Leannonberg', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(63, 'Idell Brekke IV', 'mueller.reid@example.net', '+12609448458', '26278 August Roads Apt. 358\nPablofurt, WY 53368-4749', 'Mckayla Beatty', '347689091421', 'Jacobs-Harvey', 'Port Joana', 'Khalilmouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(64, 'Roger Ruecker', 'qroob@example.org', '+1 (954) 618-9830', '13788 Wade Drive\nOberbrunnerville, UT 22645', 'Teresa Hand', '0544334366', 'Weissnat-Tromp', 'Davonteburgh', 'Elisabethview', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(65, 'Kirstin Donnelly', 'west.willis@example.net', '1-234-710-0841', '1599 Hegmann Summit Suite 710\nO\'Reillytown, ND 88196', 'Dr. Diamond Gerhold', '88387937', 'Tromp, Hills and Harris', 'Lake Sincereberg', 'Hauckstad', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(66, 'Karolann Bruen', 'kreiger.sedrick@example.com', '831.235.5253', '78315 Bogisich Keys Apt. 406\nReillyview, TN 30509-9741', 'Spencer Kuhic', '905270600853', 'Gibson-Labadie', 'New Anastasiaside', 'East Alexandriatown', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(67, 'Danyka Runte DDS', 'tadams@example.net', '(213) 661-6367', '963 Padberg Shoals Suite 702\nNoeliahaven, IN 71610', 'Vern Connelly', '4878996618', 'Bauch Ltd', 'Jaquelineton', 'North Harold', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(68, 'Scarlett Mayer', 'abby.wintheiser@example.com', '947.508.8084', '102 Kautzer Trail Apt. 474\nPort Aiyanaburgh, IN 74029-0487', 'Justen Bednar', '9210945406', 'Kautzer-Mante', 'West Barton', 'New Adrienneburgh', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(69, 'Mrs. Eugenia Witting', 'clementina.jakubowski@example.org', '847.740.4883', '8403 Marcus Manor Suite 566\nNew Cruz, AK 23452', 'Estel Willms DDS', '8657499671', 'Jones-Trantow', 'Hauckberg', 'Mohrmouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(70, 'Tanner Shanahan', 'stephanie.zboncak@example.net', '+1.609.230.8771', '1427 Leland Plaza\nLuisaton, WV 57233', 'Meghan Bailey', '0082159353', 'Fahey, Little and Pouros', 'New Maynardburgh', 'New Royce', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(71, 'Dr. Adriana Purdy Jr.', 'felicity.gusikowski@example.org', '1-574-984-0085', '425 Runolfsson Roads Apt. 014\nNew Lavernborough, VA 27514-6886', 'Dr. Russ Sauer I', '955831992945', 'Franecki LLC', 'Ratkeland', 'South Chynamouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(72, 'Diana Upton', 'jast.faye@example.org', '1-864-200-6962', '65143 Mann Mountains\nNorth Demarcus, DC 96972-7545', 'Telly Keebler', '522938887048', 'Doyle-Okuneva', 'DuBuqueland', 'Katrineville', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(73, 'Forest Bins', 'hamill.nestor@example.com', '+1.682.574.6369', '741 Anthony Trafficway\nLucileton, CO 60818-1990', 'Miss Lori Zieme IV', '102745732117', 'Thiel Ltd', 'Obiefort', 'Zanderland', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(74, 'Sasha Mayer I', 'vincenza.altenwerth@example.net', '+1-628-777-9334', '556 Lehner Mews\nRodriguezside, SC 01367-1249', 'Ms. Liliane Gulgowski', '3524298759759', 'Hansen, Wisozk and Bechtelar', 'North Damariston', 'Norwoodstad', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(75, 'Dr. Ocie Little', 'christy99@example.net', '1-651-375-7017', '68660 Cummings Villages Apt. 298\nJazlynstad, VA 72451-9316', 'Prof. Trudie Roberts PhD', '2974668503404', 'Corwin, Kautzer and Littel', 'East Martine', 'New Dante', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(76, 'Pat Quigley MD', 'rosamond84@example.com', '708.289.3750', '5238 Erika Rue\nLake Jennings, MA 28148-8733', 'Dr. Dallas Steuber', '0657597', 'Aufderhar, Koch and Reynolds', 'O\'Haramouth', 'Lambertmouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(77, 'Toney Hyatt', 'xondricka@example.net', '+1 (240) 813-0240', '5023 Autumn Hills Suite 326\nEast Sadye, MN 19398-5795', 'Casper Smitham', '39380718441', 'Simonis and Sons', 'West Eulaliahaven', 'Lake Ociefurt', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(78, 'Marcus Rohan', 'odessa.halvorson@example.org', '435.503.4427', '252 Ashleigh Pass Suite 747\nHeidenreichborough, TN 82085', 'Prof. Jamie Williamson III', '8207400743', 'Mueller-Morar', 'Juniorborough', 'Janicktown', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(79, 'Arch Frami', 'schmitt.aleen@example.net', '1-830-712-6635', '21911 Estelle Course\nOpalhaven, TN 25583-9375', 'Carmine Farrell PhD', '0483573', 'Conn-Kessler', 'Joymouth', 'North Scotty', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(80, 'Albina Buckridge', 'lmann@example.net', '+1 (234) 545-8725', '101 Alexane Pike\nLake Camille, MS 02234', 'Daryl O\'Reilly', '21749413', 'Schmidt Group', 'North Cristina', 'New Krystalmouth', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(81, 'Astrid Heidenreich', 'ava05@example.org', '+14694857148', '93242 Beer Oval Apt. 862\nWest Gage, AR 58547', 'Maximilian Bins', '5687139414', 'Howell, Marquardt and Beahan', 'Shanonville', 'West Zola', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(82, 'Buddy Morar', 'gabriella75@example.org', '(463) 292-4500', '537 Erdman Park Apt. 448\nZemlakfurt, IA 82978', 'Valerie Becker', '708127272117', 'Miller and Sons', 'South Greg', 'Wisozkburgh', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(83, 'Vaughn Feil DVM', 'johan.rutherford@example.org', '(947) 890-2675', '720 Otha Turnpike\nAbshireland, DC 35476-7229', 'Grant Bechtelar', '868893949753', 'Schaden-Towne', 'South Otis', 'South Bobby', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(84, 'Augusta Homenick', 'bhoppe@example.com', '1-567-204-2083', '3778 Skiles Locks\nWest Demario, FL 68032', 'Mrs. Susanna Block', '3616551279', 'Stanton Group', 'West Lolita', 'Lake Cletafort', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(85, 'Irwin Gleason', 'gbins@example.com', '+1 (325) 345-1611', '6241 Giovanni Lake Apt. 741\nMaryland, NH 70973-3457', 'Jamie Christiansen', '326244743', 'Veum, Tillman and Kozey', 'Petemouth', 'North Corine', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(86, 'Mr. Jakob Toy III', 'pmitchell@example.com', '(781) 785-5100', '43548 Janae Parks\nDamonville, NV 47941-3738', 'Prof. Kaia Feeney', '8542479864', 'Weissnat and Sons', 'West Chaunceymouth', 'Tomtown', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(87, 'Wilton Jacobs', 'rico.gleichner@example.org', '1-909-319-7564', '67981 McGlynn Square Suite 497\nDenesikview, NJ 68900', 'Dr. Stephen Zieme', '0216339903', 'Lubowitz Group', 'Yundtton', 'New Alexane', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(88, 'Eileen Kuhic IV', 'pemmerich@example.com', '1-830-309-7779', '35677 Tremayne Ridge Apt. 144\nSouth Tonyborough, CA 37862-1362', 'Kayli Lesch', '656011294667', 'Orn, Bogisich and Frami', 'Melyssaton', 'Port Ima', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(89, 'Brian Bartoletti', 'cjohnson@example.org', '(785) 224-0538', '4422 Haley Loop\nWest Einoborough, AR 09465-9066', 'Randal Ebert', '556043292813993', 'Ruecker, Kunze and Jacobs', 'Cummingsview', 'Wiegandton', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(90, 'Ms. Anne Beahan III', 'anne.turcotte@example.com', '1-762-369-8555', '98968 Gutkowski Forks Apt. 085\nNorth Erick, WY 59777', 'Dr. Howard McCullough', '203145805', 'Carter-Zboncak', 'Port Gustave', 'Kleinstad', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(91, 'Pansy Block', 'dillon.hayes@example.com', '928.299.9461', '1589 Arvel Freeway\nSouth Maverickside, WA 26437-4127', 'Mrs. Destiny Conn MD', '8135364331514', 'Haag, Wisozk and Rodriguez', 'Hammeston', 'Schmittshire', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(92, 'Adolfo McGlynn', 'pbailey@example.org', '1-562-787-6982', '232 Jacobs Avenue Apt. 100\nCrooksmouth, TN 17565', 'Floyd Halvorson', '9598387030', 'Reilly-Sawayn', 'Hellerfort', 'Stantonville', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(93, 'Claude VonRueden', 'pacocha.gunner@example.net', '(256) 961-8825', '654 Tillman Tunnel\nEvertstad, MI 11095', 'Abdiel Schiller', '852454', 'Cassin-Bechtelar', 'Lake Brooklynshire', 'Port Connerland', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(94, 'Anthony Harber', 'abosco@example.org', '(458) 505-4988', '670 Leola Course Suite 051\nWandaburgh, VT 73640', 'Leanne Lind', '8562871083', 'Rodriguez Ltd', 'Gretchenton', 'East Annieburgh', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(95, 'Zack Kuhic', 'anne.smith@example.com', '(906) 638-8612', '591 Veum Manors\nNorth D\'angelotown, MT 95087', 'Miss Lulu Terry', '980596011591', 'Kreiger-Corkery', 'Port Amara', 'Schulistbury', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(96, 'Ms. Isabel Stokes', 'hoppe.constantin@example.org', '(720) 448-0110', '63121 Crawford Cape\nAntoniafort, ME 53275-5656', 'Lurline Bartoletti', '193336011486', 'Ryan-Pouros', 'Grantview', 'Rutherfordview', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(97, 'Raina Bashirian DDS', 'wstokes@example.net', '+1-928-983-4226', '252 Hal Mills Apt. 935\nSouth Dina, NM 48501', 'Imani Gibson Sr.', '722280780778', 'Kuhlman Inc', 'West Fredrick', 'New Michelechester', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(98, 'Leopold Koelpin', 'dibbert.carey@example.org', '+1-878-896-8604', '324 Owen Shore Suite 035\nWilhelmineside, OH 41813-6781', 'Prof. Edison Macejkovic', '58210259', 'Grady-Jacobson', 'South Dylantown', 'West Briastad', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(99, 'Cydney Schmitt Jr.', 'lehner.gisselle@example.org', '725-591-8022', '41188 Hermann Junction\nNew Celestinofurt, GA 66987-1367', 'Dr. Thora Gleichner Jr.', '3860883959', 'Emmerich, Conroy and Yundt', 'West Korystad', 'Lake Johnpaulburgh', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(100, 'Nolan Champlin', 'rodrick35@example.com', '412.524.0871', '59069 Mayert Locks\nMargaretton, NY 70147-7318', 'Elwin Will II', '20376544109', 'Kiehn-Kuphal', 'Constancehaven', 'Boehmside', '', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(101, 'leon', 'lemon@gmail.com', '02212345555', 'XYZ, JatraBark, Dhaka 1204', NULL, NULL, NULL, NULL, 'faridpur', NULL, NULL, NULL),
(102, 'redoy', NULL, '02212345558', NULL, NULL, NULL, NULL, NULL, 'dhaka', NULL, NULL, NULL),
(103, 'abu', 'ask.asmlhote@gmail.com', '0198977645', 'XYZ, JatraBark, Dhaka 1204', NULL, NULL, NULL, NULL, 'dhaka', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` int(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `vacation` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `nid` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `experience`, `photo`, `salary`, `vacation`, `city`, `nid`, `created_at`, `updated_at`) VALUES
(1, 'Hans Marquardt', 'oking@example.org', '1-785-273-9700', '34998 Alisa Circle\nJonesport, ND 65414-9504', 12, '', '65835', '19', 'New Rae', 765785032, '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(2, 'Margaret Breitenberg', 'rosendo.ernser@example.org', '+1-765-283-0845', '47956 Boehm Run\nEast Quentinshire, TX 65124', 26, '', '74636', '12', 'Port Clifford', 6969358712, '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(4, 'Lane Haley', 'larkin.helga@example.net', '312.948.1966', '1053 Kobe Wall Apt. 920\nMillsburgh, WI 78857', 13, '', '23739', '12', 'Port Celestinochester', 7877085817, '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(5, 'Easton Dibbert III', 'vlesch@example.net', '1-478-862-9157', '5009 Monahan Ramp\nRoweview, DE 66245-7640', 18, '', '74315', '27', 'Port Johnpaul', 174858956, '2024-05-17 04:16:06', '2024-05-17 04:16:06'),
(7, 'Md. Musha', 'musha@gmail.com', '02212345555', 'XYZ, JatraBark, Dhaka 1204', 3, 'image/employee/1715941385.png', '12000', '4', 'Dhaka', 123456123456789, NULL, NULL),
(8, 'lemon', 'lemon@gmail.com', '02212345556', 'XYZ, JatraBark, Dhaka 1204', 3, 'image/employee/1716737340.png', '12000', '4', 'Dhaka', 1234567890, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `amount`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Employe Salary', '200000', '17/05/24', 'May', '2024', NULL, NULL),
(2, 'Employe Salary', '200000', '26/05/24', 'May', '2024', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(493, '0001_01_01_000000_create_users_table', 1),
(494, '0001_01_01_000001_create_cache_table', 1),
(495, '0001_01_01_000002_create_jobs_table', 1),
(496, '2024_03_29_054246_create_employees_table', 1),
(497, '2024_03_31_052739_create_customers_table', 1),
(498, '2024_03_31_085408_create_suppliers_table', 1),
(499, '2024_04_01_045947_create_salary_table', 1),
(500, '2024_04_01_054843_create_advance_salary_table', 1),
(501, '2024_04_01_180926_create_categories_table', 1),
(502, '2024_04_02_032950_create_products_table', 1),
(503, '2024_04_02_173738_create_expenses_table', 1),
(504, '2024_04_03_075155_create_attendances_table', 1),
(505, '2024_04_16_071654_create_pos_table', 1),
(506, '2024_04_20_072346_create_order_table', 1),
(507, '2024_04_20_072410_create_order_details_table', 1),
(508, '2024_04_23_045214_laratrust_setup_tables', 1),
(509, '2024_05_01_080931_create_settings_table', 1),
(510, '2024_05_03_123441_create_dashboards_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_month` varchar(255) NOT NULL,
  `order_year` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `pay` varchar(255) DEFAULT NULL,
  `due` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `order_date`, `order_month`, `order_year`, `order_status`, `total_products`, `sub_total`, `vat`, `total`, `payment_status`, `pay`, `due`, `created_at`, `updated_at`) VALUES
(1, 102, '17-05-24', 'May', '2024', 'success', '5', '2,927.49', '614.78', '3,542.27', 'HandCase', '3542.27', '0.00', NULL, NULL),
(2, 101, '17-05-24', 'May', '2024', 'success', '6', '8,532.79', '1,791.90', '10,324.69', 'HandCase', '10324', '0', NULL, NULL),
(3, 5, '17-05-24', 'May', '2024', 'success', '2', '1,232.47', '258.82', '1,491.29', 'HandCase', '1491.29', '0.00', NULL, NULL),
(4, 5, '19-05-24', 'May', '2024', 'success', '7', '7,009.19', '1,471.94', '8,481.13', 'HandCase', '8481.13', '0.00', NULL, NULL),
(5, 103, '26-05-24', 'May', '2024', 'success', '8', '3,262.75', '685.18', '3,947.93', 'HandCase', '3947.93', '0.00', NULL, NULL),
(6, 101, '26-05-24', 'May', '2024', 'success', '15', '14,283.31', '2,999.53', '17,282.84', 'HandCase', '17282', '0', NULL, NULL),
(7, 102, '26-05-24', 'May', '2024', 'success', '2', '1,232.47', '258.82', '1,491.29', 'HandCase', '1491', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitcost` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `unitcost`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 3, 338, 1228, NULL, NULL),
(2, 1, 5, 1, 1825, 2208, NULL, NULL),
(3, 1, 6, 1, 87, 106, NULL, NULL),
(4, 2, 3, 1, 894, 1082, NULL, NULL),
(5, 2, 4, 1, 338, 409, NULL, NULL),
(6, 2, 5, 4, 1825, 8833, NULL, NULL),
(7, 3, 3, 1, 894, 1082, NULL, NULL),
(8, 3, 4, 1, 338, 409, NULL, NULL),
(9, 4, 3, 3, 894, 3246, NULL, NULL),
(10, 4, 4, 2, 338, 819, NULL, NULL),
(11, 4, 5, 2, 1825, 4417, NULL, NULL),
(12, 5, 3, 1, 894, 1082, NULL, NULL),
(13, 5, 4, 7, 338, 2866, NULL, NULL),
(14, 6, 3, 5, 894, 5409, NULL, NULL),
(15, 6, 4, 1, 338, 409, NULL, NULL),
(16, 6, 5, 5, 1825, 11042, NULL, NULL),
(17, 6, 6, 4, 87, 422, NULL, NULL),
(18, 7, 3, 1, 894, 1082, NULL, NULL),
(19, 7, 4, 1, 338, 409, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cat_id` varchar(255) NOT NULL,
  `sup_id` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_garage` varchar(255) NOT NULL,
  `product_route` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `buy_date` varchar(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL,
  `buying_price` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `cat_id`, `sup_id`, `product_code`, `product_garage`, `product_route`, `product_image`, `product_qty`, `buy_date`, `expire_date`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(3, 'qui', '6', '2', '56528428', 'est', 'nesciunt', '', '10', '2023-06-13 07:37:13', '2024-07-30 14:18:25', '397.48', '894.09', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(4, 'quos', '1', '9', '34379189', 'minima', 'enim', '', '98', '2023-07-24 19:07:20', '2025-02-15 02:35:37', '690.58', '338.38', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(5, 'aperiam', '6', '3', '36238958', 'rerum', 'animi', '', '61', '2023-07-08 13:23:29', '2024-07-28 23:45:45', '989.24', '1825.08', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(6, 'quis', '7', '9', '26345772', 'quia', 'recusandae', '', '21', '2024-01-19 23:53:42', '2025-02-28 15:11:07', '305.21', '87.27', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(7, 'distinctio', '8', '10', '94118148', 'ratione', 'et', '', '60', '2023-09-12 12:25:40', '2024-07-30 17:52:23', '694.42', '999.93', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(8, 'autem', '5', '4', '45325168', 'nisi', 'vero', '', '58', '2024-03-12 14:05:40', '2025-01-21 06:47:13', '633.05', '503.63', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(9, 'deleniti', '10', '4', '76190483', 'sapiente', 'tempora', '', '3', '2024-05-02 14:51:14', '2024-08-07 10:01:04', '870.52', '80.57', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(10, 'voluptas', '4', '2', '34165751', 'id', 'qui', '', '72', '2023-06-08 07:26:33', '2024-10-19 05:32:14', '514.4', '739.86', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(11, 'aspernatur', '1', '6', '02032511', 'dolorem', 'accusamus', '', '24', '2023-06-14 06:27:19', '2024-12-08 01:08:58', '815.27', '1954.4', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(12, 'nesciunt', '4', '6', '50101559', 'architecto', 'repellat', '', '60', '2024-03-06 06:09:01', '2024-11-14 00:45:20', '115.45', '350.94', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(13, 'voluptas', '10', '7', '53473271', 'consectetur', 'voluptatum', '', '36', '2023-11-21 03:03:45', '2024-09-14 09:41:45', '140.77', '555.65', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(14, 'aliquid', '8', '8', '04333975', 'ea', 'natus', '', '35', '2023-11-21 00:39:20', '2024-07-28 08:25:30', '49.91', '682.56', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(15, 'incidunt', '8', '4', '29848485', 'sapiente', 'adipisci', '', '99', '2024-01-08 04:33:19', '2025-03-27 20:48:04', '771.1', '1483.54', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(16, 'amet', '2', '1', '62673495', 'eaque', 'nihil', '', '33', '2024-01-02 02:29:23', '2024-10-30 16:14:42', '456.55', '250.61', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(17, 'sed', '9', '4', '94505733', 'est', 'perferendis', '', '44', '2023-07-12 19:10:26', '2024-07-30 12:21:33', '300.4', '1579.73', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(18, 'omnis', '10', '7', '47065147', 'incidunt', 'quod', '', '61', '2024-03-28 20:57:22', '2025-02-19 01:58:01', '822.07', '1634.24', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(19, 'et', '2', '1', '76835506', 'atque', 'provident', '', '12', '2024-03-09 15:44:39', '2025-03-21 09:17:18', '856.7', '804.12', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(20, 'repellendus', '3', '4', '26068244', 'quia', 'inventore', '', '41', '2023-05-23 22:18:08', '2025-02-27 10:34:33', '966.91', '1420.66', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(21, 'quos', '1', '3', '92115101', 'modi', 'aut', '', '91', '2024-04-27 04:36:42', '2024-10-11 13:08:24', '423.52', '346.75', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(22, 'corrupti', '2', '8', '62256872', 'ratione', 'rerum', '', '53', '2023-06-28 14:20:36', '2024-10-20 13:32:27', '804.08', '1222.24', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(23, 'itaque', '1', '9', '80475583', 'quos', 'vel', '', '60', '2024-04-06 20:57:39', '2024-05-24 06:09:36', '206.43', '122.95', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(24, 'facere', '9', '1', '26443812', 'expedita', 'voluptas', '', '80', '2023-06-21 20:08:40', '2024-10-29 15:33:52', '166.72', '1967.67', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(25, 'maiores', '3', '2', '73227823', 'ducimus', 'blanditiis', '', '9', '2023-05-22 21:56:13', '2025-04-08 00:43:36', '129.52', '1336.42', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(26, 'consectetur', '9', '6', '39635167', 'excepturi', 'ipsam', '', '61', '2024-02-03 10:48:22', '2024-12-26 22:53:55', '310.17', '1642.78', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(27, 'sunt', '9', '3', '84853721', 'explicabo', 'vel', '', '81', '2023-10-10 22:37:48', '2024-08-11 12:11:16', '745.61', '1068.41', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(28, 'nobis', '7', '9', '37134730', 'recusandae', 'dolor', '', '92', '2023-06-20 23:50:24', '2025-03-25 09:11:38', '408.9', '1581.9', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(29, 'ut', '2', '7', '88610672', 'eos', 'aspernatur', '', '76', '2023-12-08 01:16:40', '2025-04-22 20:46:50', '615.2', '339.1', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(30, 'vel', '4', '4', '72708446', 'cum', 'tenetur', '', '31', '2023-06-26 04:32:42', '2025-04-18 22:04:49', '991.3', '1667.84', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(31, 'fuga', '6', '10', '53865472', 'rerum', 'et', '', '18', '2024-01-29 07:38:40', '2024-10-07 22:04:17', '482.93', '373.04', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(32, 'distinctio', '5', '2', '22288776', 'distinctio', 'asperiores', '', '7', '2024-04-17 09:45:21', '2024-08-28 07:32:44', '206.8', '1906.3', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(33, 'consequatur', '3', '9', '91836823', 'qui', 'sit', '', '83', '2024-01-10 23:47:18', '2024-12-17 19:53:22', '685.59', '1553.9', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(34, 'eveniet', '7', '7', '77812179', 'aperiam', 'aspernatur', '', '27', '2024-02-07 09:03:10', '2024-06-06 23:02:46', '824.75', '1359.69', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(35, 'animi', '3', '6', '69679179', 'impedit', 'quisquam', '', '68', '2023-07-16 05:31:39', '2024-07-25 08:47:21', '385.21', '553.98', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(36, 'harum', '2', '6', '52842689', 'beatae', 'sit', '', '44', '2024-01-11 20:10:24', '2025-01-02 01:05:18', '973.52', '1035.17', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(37, 'provident', '9', '6', '92900707', 'sunt', 'ex', '', '23', '2023-08-19 20:07:56', '2024-12-06 02:21:29', '403.91', '1684.48', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(38, 'hic', '4', '2', '96638941', 'aut', 'nobis', '', '90', '2024-05-06 23:59:17', '2024-06-04 06:49:18', '735.93', '1527.93', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(39, 'voluptatem', '9', '1', '18049336', 'quae', 'incidunt', '', '64', '2023-12-02 05:04:16', '2024-06-24 22:01:45', '710.04', '1389.43', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(40, 'saepe', '8', '10', '84189509', 'voluptatem', 'et', '', '16', '2023-09-09 14:28:14', '2024-05-19 00:20:22', '367.78', '1392.09', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(41, 'ipsam', '8', '6', '58931936', 'dolorem', 'saepe', '', '99', '2024-03-24 13:20:18', '2025-03-26 05:52:06', '656.18', '1090.54', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(42, 'ut', '7', '3', '43443314', 'soluta', 'adipisci', '', '48', '2023-10-19 02:34:08', '2024-07-20 22:40:45', '314.47', '1220.06', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(43, 'unde', '1', '4', '50809868', 'ex', 'necessitatibus', '', '41', '2023-07-13 14:12:29', '2024-05-19 13:19:26', '588.55', '27.45', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(44, 'necessitatibus', '1', '3', '60446985', 'placeat', 'dignissimos', '', '87', '2023-06-26 19:55:15', '2024-07-04 18:01:55', '151.99', '1841.16', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(45, 'incidunt', '8', '2', '02318554', 'quia', 'neque', '', '77', '2023-11-14 10:56:02', '2025-04-10 08:59:12', '301.41', '1098.62', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(46, 'et', '8', '4', '76580772', 'aut', 'non', '', '74', '2023-12-13 01:33:49', '2024-08-18 05:54:17', '781.77', '20.61', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(47, 'facilis', '4', '1', '27336625', 'alias', 'dolore', '', '82', '2024-04-05 06:56:53', '2025-04-23 09:11:59', '499.06', '83.77', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(48, 'ut', '1', '5', '32743845', 'ex', 'rerum', '', '22', '2023-08-27 18:07:20', '2024-09-12 06:48:50', '494.64', '819.09', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(49, 'libero', '2', '4', '44275044', 'ut', 'corporis', '', '17', '2023-09-24 02:10:38', '2024-10-01 06:23:26', '285.56', '1120.79', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(50, 'quo', '5', '1', '34325315', 'rem', 'excepturi', '', '18', '2023-10-11 20:13:12', '2024-06-11 14:49:05', '821.33', '946.57', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(51, 'et', '5', '6', '03410707', 'fuga', 'ut', '', '61', '2024-03-28 09:57:49', '2025-03-29 21:22:15', '708.62', '115.63', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(52, 'est', '1', '4', '51518875', 'est', 'earum', '', '36', '2024-03-24 02:46:38', '2024-08-08 11:23:53', '835.81', '759.2', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(53, 'ea', '9', '1', '87070668', 'aut', 'ea', '', '67', '2024-04-09 10:54:09', '2024-06-17 16:08:03', '595.09', '1660.3', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(54, 'enim', '9', '8', '19296531', 'magnam', 'corrupti', '', '28', '2023-12-25 08:55:51', '2024-12-11 23:03:43', '467.88', '673.76', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(55, 'saepe', '10', '5', '73765646', 'corrupti', 'similique', '', '91', '2023-11-30 03:22:10', '2025-05-01 14:15:07', '605.63', '1459.63', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(56, 'itaque', '6', '1', '20919863', 'dolorum', 'et', '', '18', '2024-04-08 22:41:10', '2024-05-18 03:10:51', '523.49', '80.33', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(57, 'perferendis', '3', '6', '77749512', 'ducimus', 'quia', '', '93', '2023-06-07 01:18:39', '2025-01-01 21:37:39', '981.97', '1506.84', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(58, 'velit', '2', '7', '62528788', 'vero', 'ut', '', '71', '2024-04-07 06:55:27', '2025-01-29 20:04:04', '762.69', '1544.47', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(59, 'et', '2', '2', '70353587', 'ipsa', 'facilis', '', '37', '2024-04-21 18:32:01', '2025-04-24 08:30:24', '196.96', '278.89', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(60, 'nisi', '6', '2', '39234438', 'non', 'ut', '', '99', '2024-03-16 22:23:39', '2024-12-17 10:45:52', '496.38', '816.62', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(61, 'qui', '10', '7', '37693398', 'qui', 'delectus', '', '90', '2023-08-03 02:17:48', '2024-10-23 02:45:16', '19.87', '1333.89', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(62, 'rem', '3', '2', '23483866', 'sit', 'error', '', '19', '2024-01-30 09:20:49', '2025-05-04 05:59:29', '353.55', '583.59', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(63, 'quia', '6', '4', '01460360', 'voluptatem', 'aliquam', '', '4', '2023-07-14 08:50:02', '2024-07-29 18:22:08', '871.7', '1258.1', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(64, 'ipsum', '8', '7', '81628537', 'perspiciatis', 'molestiae', '', '13', '2023-06-08 14:41:49', '2024-08-15 18:31:44', '27.86', '1914.46', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(65, 'libero', '2', '8', '36982721', 'officia', 'sunt', '', '91', '2023-11-13 09:39:31', '2024-11-29 13:36:09', '68.21', '1394.93', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(66, 'sunt', '3', '1', '51735982', 'voluptatem', 'enim', '', '55', '2023-12-09 09:57:07', '2025-04-03 10:55:32', '809.53', '86.76', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(67, 'aut', '2', '4', '05793006', 'omnis', 'dolor', '', '52', '2024-04-12 08:44:16', '2024-12-25 15:29:39', '884.44', '1587.35', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(68, 'a', '1', '7', '01856491', 'facere', 'saepe', '', '177', '2023-07-10 22:06:38', '2025-02-01 16:47:55', '391.32', '1943.83', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(69, 'nulla', '10', '9', '78218413', 'et', 'ut', '', '11', '2023-06-09 22:14:39', '2025-01-24 01:02:42', '346.22', '349.74', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(70, 'quaerat', '2', '6', '39067197', 'nobis', 'eveniet', '', '43', '2023-07-10 14:09:51', '2024-10-20 05:11:05', '876.91', '1936.36', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(71, 'voluptate', '2', '5', '77440846', 'illo', 'perferendis', '', '26', '2023-09-10 19:14:22', '2025-05-06 00:20:57', '92.5', '1827.13', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(72, 'veniam', '4', '9', '02732053', 'voluptas', 'eligendi', '', '81', '2024-01-11 06:01:41', '2024-10-28 21:29:28', '215.36', '1281.12', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(73, 'dolor', '7', '8', '74201099', 'et', 'consequuntur', '', '97', '2024-05-05 11:53:40', '2024-06-11 21:54:34', '256.86', '1925.23', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(74, 'aliquid', '9', '8', '30716728', 'earum', 'beatae', '', '111', '2024-02-18 20:23:04', '2025-02-25 00:22:33', '68.49', '739.12', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(75, 'ab', '2', '3', '62256049', 'sint', 'natus', '', '75', '2023-11-11 04:25:53', '2024-09-25 00:23:28', '409.95', '1191.78', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(76, 'qui', '7', '7', '19850689', 'perferendis', 'voluptate', '', '7', '2023-06-28 08:53:41', '2025-04-21 22:04:20', '941.21', '1663.64', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(77, 'commodi', '5', '3', '70792874', 'et', 'voluptates', '', '53', '2023-08-25 11:38:44', '2025-02-10 22:04:09', '188.92', '905.95', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(78, 'officiis', '5', '4', '11657293', 'a', 'asperiores', '', '37', '2023-06-22 19:23:40', '2024-11-11 04:48:12', '251.13', '247.87', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(79, 'laboriosam', '6', '2', '16946170', 'quia', 'aliquid', '', '10', '2023-08-12 17:55:07', '2024-09-09 17:03:57', '814.26', '1660.86', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(80, 'cum', '3', '8', '69535383', 'sapiente', 'sit', '', '35', '2023-09-14 20:54:11', '2024-07-30 07:38:02', '619.71', '1443.68', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(81, 'ullam', '1', '3', '36460090', 'eos', 'fugit', '', '6', '2024-03-25 18:34:36', '2025-02-28 17:49:21', '203.92', '714.41', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(82, 'qui', '5', '1', '78433137', 'quo', 'facilis', '', '88', '2024-02-25 06:41:03', '2024-07-05 04:00:32', '270.26', '718.74', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(83, 'qui', '2', '1', '15703385', 'accusantium', 'fuga', '', '98', '2024-04-24 22:16:13', '2024-07-24 11:29:03', '609.56', '1651.81', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(84, 'qui', '10', '2', '91272706', 'praesentium', 'occaecati', '', '99', '2024-01-11 08:22:19', '2025-05-15 14:23:22', '144.53', '227.59', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(85, 'assumenda', '5', '1', '52808753', 'autem', 'reprehenderit', '', '8', '2024-03-20 05:40:42', '2024-10-23 11:59:39', '367.65', '1562.55', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(86, 'id', '4', '5', '11124238', 'sed', 'neque', '', '31', '2023-12-27 08:17:49', '2025-04-02 02:00:33', '594.64', '154.61', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(87, 'facilis', '2', '8', '68382520', 'ipsum', 'ea', '', '8', '2024-02-16 14:33:10', '2025-05-16 23:54:39', '296.35', '366.8', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(88, 'ex', '10', '6', '10123232', 'velit', 'aut', '', '81', '2024-03-18 16:43:53', '2024-07-15 22:20:19', '683.08', '905.09', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(89, 'vero', '4', '6', '30493797', 'repudiandae', 'voluptatum', '', '5', '2024-04-28 14:11:10', '2025-05-02 20:01:17', '508.15', '485.89', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(90, 'dolorum', '9', '8', '11537045', 'doloremque', 'et', '', '70', '2023-09-26 03:44:05', '2025-01-24 20:01:46', '57.93', '862.25', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(91, 'praesentium', '2', '8', '26108902', 'distinctio', 'dignissimos', '', '29', '2024-03-20 06:43:17', '2025-01-27 16:33:16', '119.65', '1137.83', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(92, 'reprehenderit', '1', '9', '58657898', 'quia', 'odit', '', '54', '2024-02-26 23:08:45', '2025-01-03 05:56:23', '996.79', '1165.71', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(93, 'nihil', '4', '9', '66900894', 'consectetur', 'qui', '', '77', '2023-07-19 00:30:29', '2024-11-29 09:10:11', '508.64', '493.62', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(94, 'voluptas', '8', '8', '34757451', 'quia', 'illo', '', '47', '2023-10-21 00:03:47', '2025-03-09 14:15:59', '247.03', '436.25', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(95, 'sint', '5', '1', '10349021', 'ut', 'similique', '', '33', '2023-07-22 18:20:20', '2025-03-18 21:00:18', '987.25', '945.15', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(96, 'est', '9', '9', '24811859', 'quia', 'dolores', '', '93', '2024-03-26 14:59:22', '2024-08-02 05:52:30', '413.25', '1966.87', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(97, 'nostrum', '10', '5', '56197563', 'facere', 'aut', '', '26', '2023-09-27 00:12:58', '2025-04-30 09:14:02', '62.16', '377.74', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(98, 'recusandae', '5', '3', '40170084', 'dolorem', 'veritatis', '', '37', '2023-08-03 18:55:45', '2024-12-16 14:07:01', '639.78', '268.07', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(99, 'distinctio', '3', '8', '72660232', 'numquam', 'iure', '', '78', '2023-07-08 08:21:19', '2024-07-10 14:07:57', '311.18', '1900.07', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(100, 'quos', '7', '4', '72640937', 'ut', 'rerum', '', '46', '2023-10-13 16:33:08', '2025-05-07 10:19:47', '952', '934.19', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(101, 'Rice', '22', '51', '123', 'A4', 'B13', 'image/product/1715941686.jpg', '200', '2024-05-17', '2024-05-31', '230', '250', NULL, NULL),
(102, 'Rice', '3', '19', '123123', 'A4', 'B13', 'image/product/1716737592.jpg', '200', '2024-05-26', '2024-06-08', '200', '200', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `advanced_salary` varchar(255) DEFAULT NULL,
  `paid_salary` varchar(255) NOT NULL,
  `due_salary` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kiiYCB67SYh5VjP8WxoTbQwaAVNKkltVyzCN633v', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiREdHblN2RkJLT2RORWxOcUR3WFpvbVpESzN1YWxhYUdORVhTTElNZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2luZGV4LnBocCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvaW5kZXgucGhwL2xvZ2luIjt9fQ==', 1716739786);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `name` varchar(255) NOT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `shopeName` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `type`, `photo`, `shopeName`, `account_holder`, `account_number`, `bank_name`, `bank_branch`, `city`, `created_at`, `updated_at`) VALUES
(3, 'Md. Emmerich', 'nayeli31@example.net', '88017320788709', '176 Hershel Loop Apt. 523Kshlerinmouth, ID 34225-6465', 'Broker', '', 'Zboncak-Leuschke', 'Tianna Farrell', '42595524691068', 'nisi', 'impedit', 'Willmsside', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(4, 'Edd Little', 'tcorwin@example.org', '88000294614970', '32372 Volkman Square Apt. 845\nSouth Sammouth, MD 30718-7016', 'Whole Seller', '', 'Wyman and Sons', 'Chandler Torp', '252904', 'quia', 'exercitationem', 'New Hallieburgh', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(5, 'Eliza Larkin PhD', 'rebekah.leuschke@example.com', '88035065612055', '689 Franz Trail\nSouth Izabella, MN 23024-9805', 'Whole Seller', '', 'Boyer-Gutmann', 'Mrs. Marquise Wunsch', '81275439', 'corporis', 'consequuntur', 'O\'Connermouth', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(6, 'Verna Abernathy', 'vmosciski@example.net', '88033241075086', '2203 Weissnat Burgs\nGoldnermouth, MI 41565-8226', 'Distributer', '', 'Fay Ltd', 'Andrew Leannon', '14965383095', 'consequatur', 'eos', 'Port Bridiebury', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(7, 'Reta Abshire', 'kris.leola@example.org', '88026860518866', '22169 Haleigh Overpass\nAmaraside, ND 18686', 'Whole Seller', '', 'Zieme, Hoeger and Kiehn', 'Mr. Baylee Gulgowski III', '6131466093', 'voluptas', 'et', 'South Dorothea', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(8, 'Mr. Afton Nikolaus II', 'adelia.goldner@example.com', '88055400497962', '54122 Wehner Greens\nLake Marilieshire, PA 62862-5165', 'Distributer', '', 'Leuschke, McGlynn and McKenzie', 'Sedrick Barrows', '790580547673', 'repellendus', 'explicabo', 'West Christianaport', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(9, 'Elsie Ferry', 'maybelle61@example.net', '88053596939159', '883 May Green\nWest Marguerite, UT 51253-8656', 'Broker', '', 'Hauck-VonRueden', 'Raphaelle Harris', '98201495931', 'eaque', 'cumque', 'Evangelinemouth', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(10, 'Lexus Sanford V', 'kerluke.alicia@example.net', '88065840923982', '2926 Bernadette Courts Apt. 262\nDeclanborough, NH 83800', 'Whole Seller', '', 'Gusikowski-Bogisich', 'Dr. June Reichert', '5475901699503', 'id', 'labore', 'Lake Dorcas', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(11, 'Kacey Little', 'wlittel@example.com', '88059054856381', '495 Parisian Road Apt. 202\nPort Zoey, KS 92176-3585', 'Distributer', '', 'Quitzon Ltd', 'Dr. Greyson Zulauf', '002980291313', 'et', 'ipsam', 'Carleyton', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(12, 'Dr. Jettie Turcotte I', 'rolando.haag@example.net', '88087096653867', '44092 Leannon Ville Apt. 563\nAlyshamouth, NV 88759', 'Distributer', '', 'Upton-Hodkiewicz', 'Raegan Hane', '28694555798038', 'expedita', 'facere', 'Champlinport', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(13, 'Amiya Lehner', 'grady.leora@example.net', '88028666479057', '56647 Walker Shoals\nPort Irmamouth, IN 51614', 'Broker', '', 'Hoppe-Jacobi', 'Jaunita Macejkovic', '591147', 'sit', 'veritatis', 'Carolanneshire', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(14, 'Johnathon Koss', 'juston72@example.org', '88018635809543', '4640 Schulist Hill Suite 301\nKeonside, MS 60855-6053', 'Whole Seller', '', 'Klocko Group', 'Gloria Effertz', '37920374486', 'sequi', 'minima', 'East Jovanyland', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(15, 'Rashad Bauch III', 'jamir19@example.com', '88068211636514', '321 Kaylin Creek\nSouth Landen, KS 09801', 'Broker', '', 'D\'Amore, Jones and Little', 'Jaleel Boyle', '002915386', 'fuga', 'sed', 'Juanaborough', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(16, 'Sigmund Daugherty', 'wjaskolski@example.org', '88034200259767', '463 Wellington Stravenue\nShieldstown, WA 17029', 'Broker', '', 'Stracke Ltd', 'Howell Kunze', '22880551142620', 'tenetur', 'et', 'Port Jeffereyview', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(17, 'Karine Feest', 'kris.vernice@example.com', '88061417076671', '698 Kulas Path\nNew Jermainefurt, WI 33561-9042', 'Whole Seller', '', 'Dach-Boehm', 'Otto Kiehn', '93617018', 'numquam', 'aut', 'Jonesside', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(18, 'Adrien Moen', 'goodwin.brandi@example.org', '88073177129544', '9773 Allie Squares\nDonnellymouth, AR 49596', 'Broker', '', 'Murphy PLC', 'Tracy Pollich', '2167151', 'similique', 'et', 'Stehrland', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(19, 'Miss Briana Blick V', 'reyes82@example.net', '88053852943226', '8143 Dejon Haven Apt. 397\nArnoldoville, WA 69170', 'Broker', '', 'Zieme LLC', 'Amie Klocko III', '5713108043030', 'voluptates', 'facere', 'Murrayview', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(20, 'Miss Alia Nolan', 'magdalena.fritsch@example.com', '88005973980714', '15795 Beier Parkway\nWest Hendersonmouth, AZ 50645', 'Distributer', '', 'Graham, Yost and Gutkowski', 'Royce Larson', '800030447999', 'sed', 'nemo', 'Port Bretton', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(21, 'Lisette Jenkins', 'aullrich@example.net', '88016928919665', '792 Lorenz Inlet Suite 071\nMacejkovicfurt, ME 65552', 'Broker', '', 'Herman LLC', 'Alana Greenfelder', '5564304646', 'ipsum', 'nostrum', 'Douglasfurt', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(22, 'Dr. Breana Erdman IV', 'janiya.kuhic@example.com', '88072295236643', '730 Burley Coves\nJacklynchester, OH 99229', 'Distributer', '', 'Haley, Kulas and Kshlerin', 'Isai Murphy', '47352823381', 'qui', 'facilis', 'Erickhaven', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(23, 'Carli Reilly', 'jared65@example.com', '88022099302449', '4204 Kerluke Course\nSouth Ashleighside, TX 56818', 'Whole Seller', '', 'Johns LLC', 'Lenna Keebler DVM', '34052542514', 'quas', 'voluptatem', 'East Verona', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(24, 'Nicklaus Breitenberg', 'pstroman@example.org', '88082255405054', '41204 Kihn Freeway Suite 918\nJordynstad, NY 92289-9885', 'Distributer', '', 'Hand, Lockman and Greenfelder', 'Dr. Stan Herzog', '585628304', 'nihil', 'assumenda', 'Hilberthaven', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(25, 'Jamaal Bednar', 'hermann.caroline@example.org', '88031871720954', '23914 Caroline Lock\nKacieton, AL 29636-5482', 'Broker', '', 'Gulgowski LLC', 'Lesley Hills', '3062413494890', 'temporibus', 'et', 'Rowehaven', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(26, 'Brendan Reichert', 'efrain.gleason@example.com', '88030294660174', '34499 Ariane Park\nWest Nash, NC 35697', 'Distributer', '', 'Hessel, Goodwin and Bogisich', 'Frankie Auer', '00630297856348', 'doloremque', 'ducimus', 'North Berneicehaven', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(27, 'Dr. Dillon Lubowitz', 'tania.stroman@example.org', '88029962818559', '64045 Lavinia Causeway Apt. 873\nMertzberg, ND 01321', 'Broker', '', 'Miller, Parisian and Corkery', 'Kacie Bartell', '71681786', 'aliquid', 'autem', 'Haskellfort', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(28, 'Garrison Hartmann', 'jason.beier@example.net', '88036989640219', '6735 Kareem Squares Apt. 265\nGreenberg, TX 34890-1973', 'Distributer', '', 'Conn, Yost and Christiansen', 'Mr. Madison Hammes PhD', '89605847214549', 'voluptatibus', 'tempore', 'Katherinemouth', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(29, 'Esmeralda Orn', 'clark04@example.com', '88030373710136', '90244 Kassulke Expressway\nEast Nicholeville, AL 58112-3587', 'Whole Seller', '', 'Schuster Group', 'Vita Collins PhD', '4257747139', 'ipsam', 'sit', 'Bergeshire', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(30, 'Alan Nikolaus', 'zander.schinner@example.com', '88078316619051', '1366 Karson Mount\nNew Marquismouth, WY 38133', 'Whole Seller', '', 'Langworth, Stamm and Mertz', 'Angela Kunde', '08094019425466', 'vel', 'fuga', 'Abernathyberg', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(31, 'Dr. Jeanette Johns', 'betty79@example.org', '88093398766153', '3540 Anais Way\nForrestborough, UT 78592', 'Whole Seller', '', 'Senger, Gottlieb and Murray', 'Keagan Connelly', '7945096172', 'qui', 'qui', 'Margaritafort', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(32, 'Yasmeen Dickens', 'jacky.nitzsche@example.org', '88083272214461', '9186 Ondricka Path Suite 483\nWest Kalliefort, ND 74782', 'Distributer', '', 'Carter, Balistreri and Stiedemann', 'Cydney Schowalter', '550685524679', 'rerum', 'natus', 'West Brycenbury', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(33, 'Mr. Eriberto Cole II', 'haley.bartell@example.net', '88041534817647', '78397 Davin Ridges Suite 040\nBuckridgeberg, ND 11926-4170', 'Whole Seller', '', 'Vandervort-Brown', 'Leora Kessler', '35613607693', 'facere', 'et', 'South Kade', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(34, 'Corbin Zieme', 'vince98@example.com', '88049961057444', '70889 Alford Freeway Suite 677\nSibylhaven, UT 49023', 'Broker', '', 'Deckow Group', 'Blair Anderson', '6248947762546', 'eaque', 'ea', 'Liamfort', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(35, 'Chester Schaden Sr.', 'cleo94@example.org', '88074713472739', '9907 Mills Place\nWest Alanaborough, IL 34633-3570', 'Distributer', '', 'Bernhard Ltd', 'Dr. Luna Schamberger', '8807498534', 'ab', 'vel', 'New Margaretefort', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(36, 'Darby Bogisich Sr.', 'ashly.bogan@example.net', '88063787666552', '299 Mante Gardens Apt. 042\nEast Norbertotown, NH 93328-8546', 'Whole Seller', '', 'Bechtelar-Wisozk', 'Kamren Jaskolski', '96455068696', 'est', 'quis', 'Audraburgh', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(37, 'Laurine Nicolas', 'crona.april@example.org', '88001276186226', '7361 Aletha Lane Suite 648\nTurnerfurt, MD 85910-8398', 'Broker', '', 'Kub-Jerde', 'Lonnie Sporer I', '4065907751122', 'aut', 'consequatur', 'Robertshaven', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(38, 'Joan Hamill MD', 'jgleason@example.com', '88020146657996', '2294 Goodwin Mall\nEast Andres, OK 72238-3282', 'Whole Seller', '', 'Murphy and Sons', 'Lawrence O\'Connell MD', '14888630208', 'ea', 'ipsam', 'South Mariana', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(39, 'Prof. Jose Keebler II', 'stroman.roxane@example.net', '88046144930342', '335 Schaden Ford Apt. 011\nGulgowskitown, DC 68742', 'Broker', '', 'Stamm, Eichmann and Kihn', 'Marilou O\'Connell', '817915920928', 'ad', 'aut', 'Giaberg', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(40, 'Ethan Pfannerstill', 'deondre.wuckert@example.com', '88030490466669', '34182 Hirthe Island Suite 577\nVonRuedenberg, VA 35125', 'Broker', '', 'Lowe Inc', 'Dorothy Rohan', '74492875', 'autem', 'quidem', 'Virgieville', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(41, 'Hobart Kulas', 'myrl37@example.net', '88021021686739', '506 Hoppe Divide Apt. 231\nSouth Vernice, VA 73444', 'Whole Seller', '', 'Gulgowski, Heidenreich and Kihn', 'Dr. Liliane McLaughlin Sr.', '464729312531', 'tempore', 'illo', 'Ernserland', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(42, 'Dr. Keanu Morar IV', 'harvey.trycia@example.com', '88018925976285', '87616 Torphy Island\nPagacside, NE 27484-5540', 'Whole Seller', '', 'Haag, Marvin and Conroy', 'Frances Mueller', '12092078', 'voluptatem', 'adipisci', 'Port Daren', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(43, 'Eveline Lakin', 'uswift@example.net', '88030364348274', '92323 Stanford Ramp Apt. 994\nEmmerichport, LA 67594-2760', 'Broker', '', 'Lakin and Sons', 'Prof. Kallie Schaden MD', '1893932144', 'laboriosam', 'qui', 'Handbury', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(44, 'Jerod Turcotte', 'von.robin@example.org', '88080513816516', '950 Jacobs Harbor\nEast Moshe, MO 78220', 'Distributer', '', 'Abernathy PLC', 'Jessyca Conroy', '5736803907', 'natus', 'vitae', 'Freemanland', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(45, 'Lamar Rempel', 'alycia74@example.com', '88030393306669', '4542 Alden Crescent Apt. 750\nLake Darryl, OH 70651-9537', 'Whole Seller', '', 'Goldner-Hickle', 'Marquise Shanahan', '499126344952', 'ut', 'error', 'South Zola', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(46, 'Trent Fadel', 'habbott@example.org', '88084382370672', '26496 Schmeler Spur\nWest Devonte, TN 35232', 'Distributer', '', 'Erdman-Moore', 'Janiya Gusikowski', '15248285770', 'omnis', 'eum', 'Katlynshire', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(47, 'Prof. Anibal Emard', 'xswift@example.com', '88060707627227', '556 Marisa Track\nPort Esteban, LA 50758', 'Whole Seller', '', 'McClure, Fay and Kshlerin', 'Dr. Orville Johns', '0638286649131', 'minima', 'nesciunt', 'Williamsonstad', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(48, 'Sallie Runolfsdottir IV', 'hettie83@example.net', '88096697544389', '81704 Hartmann Court Apt. 908\nStrackefort, ID 04116', 'Broker', '', 'Ruecker-Heaney', 'Joannie Howell V', '0881764270010', 'nemo', 'ut', 'Port Trudiemouth', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(49, 'Elza Rohan V', 'camilla.davis@example.org', '88077414731190', '46855 Jewell Cove Apt. 908\nEast Heber, MT 94859-9639', 'Distributer', '', 'Nienow, Nolan and Hilpert', 'Constantin Gutkowski I', '7439505131', 'cumque', 'sunt', 'East Macy', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(50, 'Jolie Gaylord MD', 'rhoda56@example.com', '88033337157186', '43972 Rowena Via Apt. 765\nWest Ilianaport, OK 10785', 'Broker', '', 'Leffler-Veum', 'Kaylin Williamson Sr.', '6302389903', 'eos', 'accusantium', 'West Hailie', '2024-05-17 04:16:07', '2024-05-17 04:16:07'),
(51, 'Lemon Ahmed', 'lemon@gmail.com', '02212345555', 'XYZ, JatraBark, Dhaka 1204', 'Distributer', NULL, 'ASM Lab', NULL, NULL, NULL, NULL, 'dhaka', NULL, NULL),
(52, 'lemon lemon', 'lemon23@gmail.com', '02212345559', 'XYZ, JatraBark, Dhaka 1204', 'Distributer', NULL, 'ASM Lab', NULL, NULL, NULL, NULL, 'Dhaka', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lemon', 'lemonahmed065@gmail.com', NULL, '$2y$12$Z0Wf2wCDCSy/FWlUUKGtJekGwx1yE8Qz.xeLnArOzaUI4mcHYytfi', NULL, '2024-05-17 04:16:44', '2024-05-17 04:16:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advance_salary`
--
ALTER TABLE `advance_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_account_number_unique` (`account_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advance_salary`
--
ALTER TABLE `advance_salary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
