
CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `content_1` text NOT NULL,
  `content_2` text NOT NULL,
  `content_3` text NOT NULL,
  `youtube_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `google_map_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `educated_service_info` (
  `id` int(11) NOT NULL,
  `time_to_dig` text NOT NULL,
  `adding_base` text NOT NULL,
  `compact_base` text NOT NULL,
  `grading_and_pitch` text NOT NULL,
  `laying_field_pavers` text NOT NULL,
  `cutting_in_the_border` text NOT NULL,
  `brick_paver_border` text NOT NULL,
  `final_compacting_sand` text NOT NULL,
  `dry_sweeping_sand` text NOT NULL,
  `finishing_touches` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `index_page` (
  `id` int(11) NOT NULL,
  `who_we_are_p1` text NOT NULL,
  `who_we_are_p2` text NOT NULL,
  `who_we_are_p3` text NOT NULL,
  `who_we_are_p4` text NOT NULL,
  `our_service` text NOT NULL,
  `pricing` text NOT NULL,
  `contact_us` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `basic_content` text NOT NULL,
  `standard_content` text NOT NULL,
  `premium_content` text NOT NULL,
  `basic_price` double NOT NULL,
  `standard_price` double NOT NULL,
  `premium_price` double NOT NULL,
  `note_1` text NOT NULL,
  `note_2` text NOT NULL,
  `note_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `service_info` (
  `id` int(11) NOT NULL,
  `page` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL COMMENT 'khóa chính của bảng users',
  `username` varchar(100) NOT NULL COMMENT 'tên tài khoản đăng nhập',
  `password` varchar(100) NOT NULL COMMENT 'mật khẩu',
  `first_name` varchar(50) NOT NULL COMMENT 'tên',
  `last_name` varchar(50) NOT NULL COMMENT 'họ và tên đệm',
  `status` enum('active','in_active','','') NOT NULL COMMENT 'trạng thái active của người dùng',
  `role` enum('admin','regular_user','','') NOT NULL COMMENT 'quyền của người dùng. có 2 giá trị là admin và regular_user',
  `birthday` date NOT NULL COMMENT 'ngày sinh của người dùng',
  `gender` enum('male','female','other','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `educated_service_info`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `index_page`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `service_info`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `educated_service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `index_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `service_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'khóa chính của bảng users', AUTO_INCREMENT=10;
INSERT INTO `about_us` (`id`, `content_1`, `content_2`, `content_3`, `youtube_link`) VALUES
(1, '- Our extensive knowledge and comprehensive approach can help guide you through a wide range of options such as concrete pavers, retaining walls.', '- Our extensive knowledge and comprehensive approach can help guide you through a wide range of options such as concrete pavers, retaining walls.', '- Our extensive knowledge and comprehensive approach can help guide you through a wide range of options such as concrete pavers, retaining walls.', 'https://www.youtube.com/embed/51w0hhkCYFI');

INSERT INTO `contact_us` (`id`, `google_map_link`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15677.757357141427!2d106.7116703!3d10.777624099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f4138cf4909%3A0xaa966d5f7d098671!2sTh%C3%A1p%20Bitexco%20Financial%20Tower!5e0!3m2!1svi!2s!4v1613718835332!5m2!1svi!2s');

INSERT INTO `educated_service_info` (`id`, `time_to_dig`, `adding_base`, `compact_base`, `grading_and_pitch`, `laying_field_pavers`, `cutting_in_the_border`, `brick_paver_border`, `final_compacting_sand`, `dry_sweeping_sand`, `finishing_touches`) VALUES
(1, '- Remove Existing Concrete and Excavate 4-5 inches of dirt.', '- Here we are adding 3-4 inches of Concrete Base. Concrete base screenings are made from recycled concrete. (from the driveways and walkways we remove everyday) <br> (This Project Took 4 Tons of Concrete Base) <br> - This is what the brick pavers will be laid on. Base makes the patio area stable and is workable enough to be compacted and graded to ensure the correct pitch for water flow.', '- Here Ronnie is compacting the Concrete Base to stop it from settling over time. By compacting the Concrete Base it almost turns it into hardened concrete. Its hard enough to walk on or even drive on. This is the final process of our base for the Brick Pavers.', '- Here we have completed Grading and checking the proper pitch. This is the final step before we start to lay brick. Having the correct pitch will make sure any water will be directed and ran away from any permanent structures.(keeps the water out of your house and off the patio)', '- Now that the base has been prepared we Snap a chalk line to make sure the bricks are laid straight and the pattern can continue their pattern around the corner to the patio area. Below we are laying Flagstones Patriot Brick. This is a two brick combination one small square and one larger rectangle. The customer decided on the T-Pattern for this project.', '- Now we are starting to cut the excess brick leaving just enough room for our one brick border. We are simply Cutting away the excess from where the series left us extra brick pavers outside the desired area.', '- Above you will see the Brick Paver Border laid in. Under this border is 4 inches of concrete acting like a wall holding the inside pavers in place by not allowing them to move. The concrete combined with the compacted base and sanding the joints is where the pavers get their durability and missing any of these will limit the life of the work.', '- Now we are doing our final compacting using sand as a buffer so we do not scratch the brick pavers. Doing this we help set the bricks in place and make sure they are level without any uneven edges. It is often a over looked step that most people see as not needed. We like to take as many extra steps we can to help extend the life of your pavers.', '- Above we are first dry sweeping the sand into the joints to fill the interlocking gaps in the Brick Pavers. After we sweep in the dry sand we will then add water to help drag the sand under the pavers and down the joints.this is the final locking process to secure the brick pavers and make sure they are made to last.', '- Below you will see the customer asked us to lay a 4 inch drainage pvc under the base and connect the gutter so the roof rain water did not drag tree debris from the roof onto his new Brick Pavers.');

INSERT INTO `index_page` (`id`, `who_we_are_p1`, `who_we_are_p2`, `who_we_are_p3`, `who_we_are_p4`, `our_service`, `pricing`, `contact_us`) VALUES
(1, 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it look better it also adds a longer life than concrete without cracking or fading', 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it look better it also adds a longer life than concrete without cracking or fading', 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it  look better it also adds a longer life than concrete without carcking or fading', '- Whether you entertain social gatherings, Sunday Night Football or relaxing family dinner by the pool, we can build an outdoor kitchen that accomodates all your needs. With our design and construction skills, we can work with any space, large or small, to build the outdoor experience that you and your family will enjoy for years to come. Our designed kitchens are made to fit into your outside hardscape. A patio kitchen can be built with many of the same amenities of an indoor kitchen along with wood grills and smokers.', 'FREE consultations and guaranteed pricing contracts knowing your projects exact cost just got easier.', 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it look better it also adds a longer life than concrete without cracking or fading.', 'What to expect at your paver estimate, we will be able to tell you the exact price to complete your job without surprise and extras. Our qualified staff will offer you a price guarantee and schedule your project to be completed on a date that works for you. We tailor to our customers and make adding new hardscapes to your home as easy an affordable as possible.');

INSERT INTO `prices` (`id`, `basic_content`, `standard_content`, `premium_content`, `basic_price`, `standard_price`, `premium_price`, `note_1`, `note_2`, `note_3`) VALUES
(1, 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it look better it also adds a longer life than concrete without cracking or fading', 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it look better it also adds a longer life than concrete without cracking or fading', 'With amazing pricing, its now time to get that tired old driveway replaced with Elegant Brick Pavers. The timeless look and durability of quality brick pavers your home will get the attention. It deserves along with that curb appeal it needs. Replacing your Driveway with Brick Pavers doesn\'t just make it  look better it also adds a longer life than concrete without carcking or fading', 3, 6, 12, 'Including Installation and Materials', 'Custom brick paver hardscape designs: Pools, Patios, Walkways, Outdoor Kitchens, and even your Porch or Hot Tub Area', 'FREE consultations and guaranteed pricing contracts knowing your projects exact cost just got easier.');

INSERT INTO `service_info` (`id`, `page`, `title`) VALUES
(1, 'CUSTOM OUTDOOR KITCHEN', 'CUSTOM OUTDOOR KITCHEN'),
(2, 'CUSTOM DRIVEWAY', 'CUSTOM DRIVEWAY'),
(3, 'CUSTOM PATIO', 'CUSTOM PATIO'),
(4, 'CUSTOM POOLDECK', 'CUSTOM POOLDECK');

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `status`, `role`, `birthday`, `gender`) VALUES
(1, 'canh123', '123456', 'canh', 'Le huu', 'active', 'admin', '1992-09-02', 'male'),
(2, 'admin1', '123456', 'testao', 'testas', 'in_active', 'regular_user', '1996-03-10', 'male'),
(3, 'admin3', '123456', '1234asdf', 'admin', 'active', 'admin', '2021-03-01', 'other'),
(4, 'admin4', '123456', 'testao', 'admin', 'active', 'admin', '2020-12-06', 'female'),
(5, 'admin45', '123456', 'testao', 'admin', 'active', 'admin', '2021-03-01', 'female'),
(6, 'anh.nguyen', '123456', 'testao', 'testas', 'active', 'regular_user', '2021-03-19', 'male'),
(7, 'anh.nguyen123', '123456', 'yfghtg', 'awertv', 'active', 'regular_user', '2021-03-11', 'other'),
(8, 'admin333', '123456', 'testao', 'testas', 'in_active', 'regular_user', '2021-03-10', 'male'),
(9, 'admin7', '123456', 'testao', 'testas', 'active', 'regular_user', '2021-03-17', 'male');

