-- Database: `obituary_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`) VALUES
(10, 1, 'Anantapur'),
(8, 1, 'Eluru'),
(3, 1, 'Guntur'),
(9, 1, 'Kadapa'),
(5, 1, 'Kurnool'),
(4, 1, 'Nellore'),
(7, 1, 'Rajahmundry'),
(6, 1, 'Tirupati'),
(2, 1, 'Vijayawada'),
(1, 1, 'Visakhapatnam'),
(18, 2, 'Along'),
(16, 2, 'Bomdila'),
(11, 2, 'Itanagar'),
(14, 2, 'Naharlagun'),
(13, 2, 'Pasighat'),
(17, 2, 'Roing'),
(20, 2, 'Seppa'),
(12, 2, 'Tawang'),
(19, 2, 'Tezu'),
(15, 2, 'Ziro'),
(28, 3, 'Bongaigaon'),
(22, 3, 'Dibrugarh'),
(30, 3, 'Diphu'),
(21, 3, 'Guwahati'),
(24, 3, 'Jorhat'),
(25, 3, 'Nagaon'),
(23, 3, 'Silchar'),
(29, 3, 'Sivasagar'),
(26, 3, 'Tezpur'),
(27, 3, 'Tinsukia'),
(39, 4, 'Ara'),
(37, 4, 'Begusarai'),
(33, 4, 'Bhagalpur'),
(36, 4, 'Darbhanga'),
(32, 4, 'Gaya'),
(38, 4, 'Munger'),
(34, 4, 'Muzaffarpur'),
(31, 4, 'Patna'),
(35, 4, 'Purnia'),
(40, 4, 'Saharsa'),
(48, 5, 'Ambikapur'),
(46, 5, 'Bhilai'),
(42, 5, 'Bilaspur'),
(43, 5, 'Durg'),
(45, 5, 'Jagdalpur'),
(50, 5, 'Kanker'),
(44, 5, 'Korba'),
(47, 5, 'Raigarh'),
(41, 5, 'Raipur'),
(49, 5, 'Rajnandgaon'),
(56, 6, 'Bicholim'),
(57, 6, 'Curchorem'),
(60, 6, 'Madgaon'),
(54, 6, 'Mapusa'),
(52, 6, 'Margao'),
(51, 6, 'Panaji'),
(55, 6, 'Ponda'),
(58, 6, 'Quepem'),
(59, 6, 'Sanquelim'),
(53, 6, 'Vasco da Gama'),
(61, 7, 'Ahmedabad'),
(69, 7, 'Anand'),
(65, 7, 'Bhavnagar'),
(67, 7, 'Gandhinagar'),
(66, 7, 'Jamnagar'),
(68, 7, 'Morbi'),
(70, 7, 'Navsari'),
(64, 7, 'Rajkot'),
(62, 7, 'Surat'),
(63, 7, 'Vadodara'),
(78, 8, 'Ambala'),
(80, 8, 'Bahadurgarh'),
(72, 8, 'Faridabad'),
(71, 8, 'Gurugram'),
(79, 8, 'Hisar'),
(75, 8, 'Karnal'),
(73, 8, 'Panipat'),
(77, 8, 'Rohtak'),
(74, 8, 'Sonipat'),
(76, 8, 'Yamunanagar'),
(89, 9, 'Bilaspur'),
(90, 9, 'Chamba'),
(82, 9, 'Dharamshala'),
(85, 9, 'Kullu'),
(83, 9, 'Mandi'),
(88, 9, 'Nahan'),
(87, 9, 'Palampur'),
(81, 9, 'Shimla'),
(84, 9, 'Solan'),
(86, 9, 'Una'),
(94, 10, 'Bokaro Steel City'),
(98, 10, 'Chatra'),
(95, 10, 'Deoghar'),
(93, 10, 'Dhanbad'),
(100, 10, 'Dumka'),
(97, 10, 'Giridih'),
(96, 10, 'Hazaribagh'),
(92, 10, 'Jamshedpur'),
(99, 10, 'Ramgarh'),
(91, 10, 'Ranchi'),
(107, 11, 'Ballari'),
(105, 11, 'Belgaum'),
(101, 11, 'Bengaluru'),
(108, 11, 'Bijapur'),
(106, 11, 'Davangere'),
(110, 11, 'Gulbarga'),
(104, 11, 'Hubli'),
(103, 11, 'Mangalore'),
(102, 11, 'Mysuru'),
(109, 11, 'Shimoga'),
(115, 12, 'Alappuzha'),
(117, 12, 'Kannur'),
(112, 12, 'Kochi'),
(118, 12, 'Kollam'),
(113, 12, 'Kozhikode'),
(119, 12, 'Malappuram'),
(116, 12, 'Palakkad'),
(111, 12, 'Thiruvananthapuram'),
(114, 12, 'Thrissur'),
(120, 12, 'Vatakara'),
(122, 13, 'Bhopal'),
(129, 13, 'Dewas'),
(123, 13, 'Gwalior'),
(121, 13, 'Indore'),
(124, 13, 'Jabalpur'),
(130, 13, 'Ratlam'),
(128, 13, 'Rewa'),
(126, 13, 'Sagar'),
(127, 13, 'Satna'),
(125, 13, 'Ujjain'),
(138, 14, 'Amravati'),
(136, 14, 'Aurangabad'),
(140, 14, 'Kolhapur'),
(131, 14, 'Mumbai'),
(133, 14, 'Nagpur'),
(139, 14, 'Nanded'),
(134, 14, 'Nashik'),
(132, 14, 'Pune'),
(137, 14, 'Solapur'),
(135, 14, 'Thane'),
(145, 15, 'Bishnupur'),
(149, 15, 'Chandel'),
(143, 15, 'Churachandpur'),
(141, 15, 'Imphal'),
(148, 15, 'Kakching'),
(150, 15, 'Kamjong'),
(146, 15, 'Senapati'),
(147, 15, 'Tamenglong'),
(142, 15, 'Thoubal'),
(144, 15, 'Ukhrul'),
(156, 16, 'Baghmara'),
(154, 16, 'Jowai'),
(160, 16, 'Nongpoh'),
(153, 16, 'Nongstoin'),
(159, 16, 'Pynursla'),
(157, 16, 'Resubelpara'),
(151, 16, 'Shillong'),
(152, 16, 'Tura'),
(155, 16, 'Williamnagar'),
(161, 17, 'Aizawl'),
(163, 17, 'Champhai'),
(167, 17, 'Khawzawl'),
(169, 17, 'Kolasib'),
(170, 17, 'Lawngtlai'),
(162, 17, 'Lunglei'),
(165, 17, 'Mamit'),
(168, 17, 'Sairang'),
(166, 17, 'Saitual'),
(164, 17, 'Serchhip'),
(172, 18, 'Dimapur'),
(180, 18, 'Kiphire'),
(171, 18, 'Kohima'),
(179, 18, 'Longleng'),
(173, 18, 'Mokokchung'),
(178, 18, 'Mon'),
(176, 18, 'Phek'),
(174, 18, 'Tuensang'),
(175, 18, 'Wokha'),
(177, 18, 'Zunheboto'),
(187, 19, 'Balasore'),
(188, 19, 'Baripada'),
(184, 19, 'Berhampur'),
(190, 19, 'Bhadrak'),
(181, 19, 'Bhubaneswar'),
(182, 19, 'Cuttack'),
(189, 19, 'Jharsuguda'),
(186, 19, 'Puri'),
(183, 19, 'Rourkela'),
(185, 19, 'Sambalpur'),
(191, 20, 'Amritsar'),
(195, 20, 'Bathinda'),
(197, 20, 'Chandigarh'),
(198, 20, 'Hoshiarpur'),
(193, 20, 'Jalandhar'),
(192, 20, 'Ludhiana'),
(200, 20, 'Moga'),
(196, 20, 'Mohali'),
(199, 20, 'Pathankot'),
(194, 20, 'Patiala'),
(205, 21, 'Ajmer'),
(206, 21, 'Alwar'),
(209, 21, 'Bharatpur'),
(210, 21, 'Bhilwara'),
(204, 21, 'Bikaner'),
(201, 21, 'Jaipur'),
(203, 21, 'Jodhpur'),
(207, 21, 'Kota'),
(208, 21, 'Sikar'),
(202, 21, 'Udaipur'),
(211, 22, 'Gangtok'),
(212, 22, 'Geyzing'),
(214, 22, 'Mangan'),
(213, 22, 'Namchi'),
(215, 22, 'Pakyong'),
(216, 22, 'Rangpo'),
(217, 22, 'Rhenock'),
(219, 22, 'Singtam'),
(220, 22, 'Soreng'),
(218, 22, 'Yuksom'),
(221, 23, 'Chennai'),
(222, 23, 'Coimbatore'),
(230, 23, 'Dindigul'),
(226, 23, 'Erode'),
(223, 23, 'Madurai'),
(225, 23, 'Salem'),
(229, 23, 'Thoothukudi'),
(224, 23, 'Tiruchirappalli'),
(227, 23, 'Tirunelveli'),
(228, 23, 'Vellore'),
(238, 24, 'Adilabad'),
(231, 24, 'Hyderabad'),
(240, 24, 'Jagtial'),
(234, 24, 'Karimnagar'),
(235, 24, 'Khammam'),
(237, 24, 'Mahbubnagar'),
(233, 24, 'Nizamabad'),
(236, 24, 'Ramagundam'),
(239, 24, 'Suryapet'),
(232, 24, 'Warangal'),
(241, 25, 'Agartala'),
(246, 25, 'Amarpur'),
(245, 25, 'Belonia'),
(250, 25, 'Bishalgarh'),
(243, 25, 'Dharmanagar'),
(244, 25, 'Kailasahar'),
(249, 25, 'Khowai'),
(248, 25, 'Sabroom'),
(247, 25, 'Teliamura'),
(242, 25, 'Udaipur'),
(254, 26, 'Agra'),
(258, 26, 'Aligarh'),
(256, 26, 'Ghaziabad'),
(252, 26, 'Kanpur'),
(251, 26, 'Lucknow'),
(259, 26, 'Mathura'),
(255, 26, 'Meerut'),
(257, 26, 'Noida'),
(260, 26, 'Saharanpur'),
(253, 26, 'Varanasi'),
(270, 27, 'Almora'),
(261, 27, 'Dehradun'),
(265, 27, 'Haldwani'),
(262, 27, 'Haridwar'),
(266, 27, 'Kashipur'),
(264, 27, 'Nainital'),
(269, 27, 'Pithoragarh'),
(263, 27, 'Rishikesh'),
(268, 27, 'Rudrapur'),
(267, 27, 'Udham Singh Nagar'),
(276, 28, 'Asansol'),
(278, 28, 'Bardhaman'),
(277, 28, 'Berhampore'),
(272, 28, 'Darjeeling'),
(274, 28, 'Durgapur'),
(280, 28, 'Haldia'),
(275, 28, 'Howrah'),
(271, 28, 'Kolkata'),
(279, 28, 'Malda'),
(273, 28, 'Siliguri'),
(282, 29, 'Havelock Island'),
(283, 29, 'Neil Island'),
(281, 29, 'Port Blair'),
(284, 30, 'Chandigarh'),
(287, 31, 'Dadra'),
(286, 31, 'Daman'),
(285, 31, 'Silvassa'),
(289, 32, 'Delhi'),
(288, 32, 'New Delhi'),
(292, 33, 'Anantnag'),
(293, 33, 'Baramulla'),
(291, 33, 'Jammu'),
(295, 33, 'Kupwara'),
(294, 33, 'Pulwama'),
(290, 33, 'Srinagar'),
(297, 34, 'Kargil'),
(296, 34, 'Leh'),
(298, 35, 'Kavaratti'),
(300, 36, 'Karaikal'),
(301, 36, 'Mahe'),
(299, 36, 'Puducherry'),
(302, 36, 'Yanam');

-- --------------------------------------------------------

--
-- Table structure for table `obituaries`
--

CREATE TABLE `obituaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `dod` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `caste` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `sabha_date` date DEFAULT NULL,
  `sabha_time` time DEFAULT NULL,
  `sabha_venue` varchar(255) DEFAULT NULL,
  `map_link` varchar(255) DEFAULT NULL,
  `prarthna_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `template` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obituaries`
--

INSERT INTO `obituaries` (`id`, `full_name`, `relation`, `gender`, `dob`, `dod`, `age`, `religion`, `caste`, `address`, `country`, `state_id`, `city_id`, `photo`, `bio`, `sabha_date`, `sabha_time`, `sabha_venue`, `map_link`, `prarthna_text`, `created_at`, `published`, `template`) VALUES
(1, 'Harjit Singh', 'Other', 'Male', '1960-05-18', '2025-02-04', 65, 'Sikh', 'Other', 'Village Mehal Kalan, Barnala', 'India', 20, 195, '1754973832_unknown.jpg', 'Remembered for their generosity, strength, and unwavering kindness towards everyone.', '2025-02-08', '18:00:00', 'Gurudwara Sahib, Barnala', 'https://maps.google.com/?q=Gurudwara+Sahib+Barnala', 'Please attend the Antim Ardas in loving memory of Harjit Singh.', '2025-08-12 04:43:52', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country`) VALUES
(1, 'Andhra Pradesh', 'India'),
(2, 'Arunachal Pradesh', 'India'),
(3, 'Assam', 'India'),
(4, 'Bihar', 'India'),
(5, 'Chhattisgarh', 'India'),
(6, 'Goa', 'India'),
(7, 'Gujarat', 'India'),
(8, 'Haryana', 'India'),
(9, 'Himachal Pradesh', 'India'),
(10, 'Jharkhand', 'India'),
(11, 'Karnataka', 'India'),
(12, 'Kerala', 'India'),
(13, 'Madhya Pradesh', 'India'),
(14, 'Maharashtra', 'India'),
(15, 'Manipur', 'India'),
(16, 'Meghalaya', 'India'),
(17, 'Mizoram', 'India'),
(18, 'Nagaland', 'India'),
(19, 'Odisha', 'India'),
(20, 'Punjab', 'India'),
(21, 'Rajasthan', 'India'),
(22, 'Sikkim', 'India'),
(23, 'Tamil Nadu', 'India'),
(24, 'Telangana', 'India'),
(25, 'Tripura', 'India'),
(26, 'Uttar Pradesh', 'India'),
(27, 'Uttarakhand', 'India'),
(28, 'West Bengal', 'India'),
(29, 'Andaman and Nicobar Islands', 'India'),
(30, 'Chandigarh', 'India'),
(31, 'Dadra and Nagar Haveli and Daman and Diu', 'India'),
(32, 'Delhi', 'India'),
(33, 'Jammu and Kashmir', 'India'),
(34, 'Ladakh', 'India'),
(35, 'Lakshadweep', 'India'),
(36, 'Puducherry', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `remember_token`) VALUES
(1, 'Martin Smith', 'smith@gmail.com', '$2y$10$EZGID4HxzchE1pAOSrX8p.rrdFF.Np4KfyLPw2Fd7iyhqizAU1pam', '2025-08-02 10:50:27', 'f7e6935e78f7a1644784d6c6491db5a2');

--

--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `state_city_unique` (`state_id`,`name`);

--
-- Indexes for table `obituaries`
--
ALTER TABLE `obituaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
--