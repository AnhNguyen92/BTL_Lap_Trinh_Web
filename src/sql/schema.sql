

--
-- Database: `company_intro`
--
CREATE DATABASE `company_intro`;
USE `company_intro`;
-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `youtube_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `google_map_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `educated_service_info`
--

CREATE TABLE `educated_service_info` (
  `id` int(11) NOT NULL,
  `time_to_dig` text NOT NULL,
  `adding_base` text NOT NULL,
  `compact_base` text NOT NULL,
  `gradding_and_pitch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `index_page`
--

CREATE TABLE `index_page` (
  `id` int(11) NOT NULL,
  `who_we_are` text NOT NULL,
  `our_service` text NOT NULL,
  `pricing` text NOT NULL,
  `contact_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `basic_content` text NOT NULL,
  `standard_content` text NOT NULL,
  `premium_content` text NOT NULL,
  `basic_price` double NOT NULL,
  `standard_price` double NOT NULL,
  `premium_price` double NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_info`
--

CREATE TABLE `service_info` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL COMMENT 'khóa chính của bảng users',
  `username` varchar(100) NOT NULL COMMENT 'tên tài khoản đăng nhập',
  `password` varchar(100) NOT NULL COMMENT 'mật khẩu',
  `first_name` varchar(50) NOT NULL COMMENT 'tên',
  `last_name` varchar(50) NOT NULL COMMENT 'họ và tên đệm',
  `is_active` tinyint(1) NOT NULL COMMENT 'trạng thái active của người dùng',
  `role` tinyint(1) NOT NULL COMMENT 'quyền của người dùng. có 2 giá trị là admin và regular_user',
  `birthday` date NOT NULL COMMENT 'ngày sinh của người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educated_service_info`
--
ALTER TABLE `educated_service_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_page`
--
ALTER TABLE `index_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_info`
--
ALTER TABLE `service_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educated_service_info`
--
ALTER TABLE `educated_service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `index_page`
--
ALTER TABLE `index_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_info`
--
ALTER TABLE `service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'khóa chính của bảng users';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
