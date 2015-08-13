-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2015 at 05:08 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL,
  `title` mediumtext NOT NULL,
  `content` longtext NOT NULL,
  `blog_day` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `blog_day`) VALUES
(1, 'Việt Nam là thị trường màu mỡ của smartphone ''hết thời''', 'Ra mắt tại thị trường quốc tế trước khi bán chính thức tại thị trường trong nước cả năm, những mẫu smartphone như HTC One E8 hay sắp tới là Butterfly 2 vẫn được nhiều người quan tâm.\r\nNhững smartphone kén khách nửa đầu 2015 / 5 smartphone cao cấp đắt khách ở thị trường xách tay / 5 smartphone hàng xách tay có giá giảm mạnh\r\nHTC One E8 2 sim là một trong 10 mẫu smartphone bán tốt nhất trong tháng 6 vừa rồi theo thống kê của VnExpress, dù thực tế, khi xuất hiện lần đầu trên thị trường năm ngoái, phiên bản một sim của model này thuộc dạng ế ẩm. Sau One E8, một mẫu smartphone "hết thời" khác, Buttefly 2, chuẩn bị được HTC đưa vào thị trường trong nước.\r\n\r\nĐiểm chung của hai smartphone trên đều ra mắt từ năm 2014 nhưng chưa được bán chính thức tại Việt Nam cho tới gần đây với mức giá rẻ bằng nửa lúc mới ra mắt. Theo một số đại lý, hai mẫu trên hiện tại là hàng tồn từ các thị trường nước ngoài nên giá mới rẻ như vậy. \r\n\r\nNhiều người dùng giờ tìm đến các smartphone cao cấp đời cũ giá rẻ, thay vì mua smartphone đời mới vừa ra.\r\nNhiều người dùng giờ tìm đến các smartphone cao cấp đời cũ giá rẻ, thay vì mua smartphone đời mới vừa ra.\r\nViệt Nam là thị trường để "xả hàng" những smartphone đời cũ bán "ế" không phải là điều mới mẻ. Trước One E8 hay Butterfly, HTC từng đưa về lại những mẫu Windows Phone 8X, 8X sau một thời gian dừng bán và gây sốt. BlackBerry cũng tung ra những đợt Z10 với giá giảm một nửa hay mới đây là Q10 bàn phím tiếng Thái với giá chỉ bằng một phần ba mức công bố chính hãng ban đầu. \r\n\r\nTrong khi phân khúc chính hãng chỉ có một vài mẫu được cho là "hàng tồn" thì phân khúc xách tay mới thực sự sôi động. Nhiều cửa hàng giờ chuyển sang kinh doanh chủ yếu các dòng smartphone đời cũ, còn các dòng máy mới ra chỉ làm cho có, không phải để bán chính như trước. Vì thế, những model thuộc dạng "lỗi mốt" như HTC One M7, Samsung Galaxy S4 hay Sony Xperia Z1, Z2, thậm chí cả iPhone 4S vẫn được bày bán ở khắp nơi mà vẫn có nhiều người mua. \r\n\r\nVấn đề trước tiên khiến người dùng quan tâm là giá rẻ. Những model như HTC One E8 hay Butterfly 2 khi bán chính hãng đều có giá chỉ còn một nửa so với lúc ra mắt. Trong khi ở thị trường xách tay, những smartphone cao cấp một thời như Sony Xperia Z2, Galaxy S5 hay HTC One M8 có giá chỉ 5 đến 6 triệu đồng, ngang với những chiếc smartphone tầm trung giá thấp đời mới. \r\n\r\nThêm nữa, người ta còn quan tâm bởi cấu hình máy cũ không khác biệt quá nhiều với smartphone đời mới cùng tầm giá.\r\n\r\nNếu so với những model tầm trung mới ra như Xperia C4, M4 của Sony, những model như Butterfly 2 hay One E8 của HTC cũng chạy hệ điều hành Android mới, nhưng còn có hiệu năng cao hơn nhờ dùng vi xử lý cao cấp. Riêng với dòng Xperia, độ phân giải camera, màn hình cũng như thiết kế của ba đời mẫu Z1, Z2, Z3 cho tới Z3+ (ra mắt năm nay) gần như giống hệt nhau.\r\n\r\nNhững chiếc smartphone Android cao cấp ra một hay 2 năm trước giá bán hiện giờ chỉ còn một nửa hoặc một phần ba.\r\nViệc "đổ bộ" của hàng loạt smartphone hết thời ở Việt Nam đang ảnh hưởng nhiều tới doanh số của sản phẩm cao cấp mới ra mắt. Cụ thể, những model như HTC One M9 hay Sony Xperia Z3+ đều bán rất kém vì theo các cửa hàng, người tiêu dùng đang có tâm lý chờ đợi smartphone cao cấp giảm giá sâu mới mua.\r\n\r\nBên cạnh đó, việc chọn mua những chiếc smartphone đời cũ giá rẻ ở thị trường xách tay cũng tiềm ẩn rủi ro và hỏng hóc, khi phần nhiều được thu gom và nhập về thông qua các đầu nậu nước ngoài, không còn bảo hành của hãng và có thể không còn là hàng mới.', '2015-08-04 10:01:18'),
(2, 'NASA xác nhận ''siêu Trái Đất'' gần nhất ngoài Hệ Mặt Trời', 'Cơ quan Hàng không Vũ trụ Mỹ (NASA) xác nhận hành tinh HD 219134b cách Trái Đất 21 năm ánh sáng là hành tinh đá gần nhất ngoài Hệ Mặt Trời.\r\nNhờ sử dụng kính viễn vọng không gian Spitzer của NASA, các nhà khoa học phát hiện hành tinh đá gần nhất bên ngoài Hệ Mặt Trời, cách chúng ta 21 năm ánh sáng. Nó có kích thước lớn hơn Trái Đất và được đặt tên là HD 219134b.\r\n\r\nQuỹ đạo của HD 219134b quá gần so với ngôi sao mẹ để duy trì sự sống. Chúng ta không thể quan sát HD 219134b trực tiếp bằng kính thiên văn. Tuy nhiên, ngôi sao mà nó quay xung quanh có thể nhìn thấy bằng mắt thường vào ban đêm, tại vị trí chòm sao Thiên Hậu, gần sao Bắc Đẩu.\r\n\r\nHD 219134b cũng là hành tinh gần Trái Đất nhất được phát hiện bằng phương pháp đo ánh sáng. Khi hành tinh di chuyển qua phía trước ngôi sao mẹ, nó sẽ ngăn chặn một phần ánh sáng của ngôi sao này. Kính thiên văn quan sát những thay đổi nhỏ trong độ sáng của ngôi sao để phát hiện ra hành tinh mới.\r\n\r\n"Hành tinh ngoài Hệ Mặt Trời nói trên sẽ là một trong những thứ được nghiên cứu nhiều nhất trong vài thập kỷ tới," NASA hôm 30/7 dẫn lời Michael Werner thuộc Phòng thí nghiệm Sức đẩy phản lực (JPL) ở Pasadena, California (Mỹ), nói.\r\n\r\nCác nhà khoa học lần đầu tiên ghi nhận HD 219134b nhờ thiết bị HARPS-North trên Kính Thiên văn Quốc gia Galileo, tại quần đảo Canary, Italia. HARPS-North sử dụng phương pháp "kỹ thuật vận tốc xuyên tâm", theo đó có thể tính toán khối lượng và quỹ đạo hành tinh dựa trên lực kéo trọng trường mà nó tác động lên ngôi sao mẹ. Đây cũng là chủ đề của một nghiên cứu công bố trên tạp chí Astronomy & Astrophysics.\r\n\r\nNhững phép đo hồng ngoại của Kính viễn vọng không gian Spitzer cho thấy, HD 219134b là một hành tinh đá có kích thước gấp 1,6 lần so với Trái Đất, với tỷ trọng 6 g/cm3.\r\n\r\nCác hành tinh đá lớn hơn Trái Đất như HD 219134b còn được gọi là siêu Trái Đất. Con người ngày càng phát hiện thấy chúng nhiều hơn trong vũ trụ.\r\n\r\n"Nhờ sứ mệnh Kepler của NASA, chúng ta biết siêu Trái Đất xuất hiện ở khắp nơi trong thiên hà, nhưng lại biết rất ít về chúng. Bây giờ chúng ta có một hành tinh mẫu để nghiên cứu chi tiết hơn", Michael Gillon thuộc Đại học Liege, Bỉ, nói.', '2015-08-04 04:35:32'),
(3, 'Bé gái 12 tuổi có IQ cao hơn Einstein và Stephen Hawking', 'Với chỉ số thông minh 162, Nicole Barr 12 tuổi vượt qua hai nhà khoa học lỗi lạc thế giới và gia nhập tổ chức dành cho những người siêu thông minh Mensa.\r\n8 thực phẩm bà bầu cần ăn để sinh con thông minh\r\n\r\nKết quả các bài kiểm tra trí tuệ cho thấy Nicole Barr, 12 tuổi (Essex, Anh) có chỉ số thông minh là 162, cao hơn 2 điểm so với hai thiên tài Albert Einstein và Stephen Hawking.\r\n\r\n“Khi biết mình đạt điểm cao như thế, em rất sốc”, Nicole vẫn còn ngỡ ngàng. Bố mẹ cô bé lại không quá ngạc nhiên. Mẹ em lý giải: “Từ khi còn rất nhỏ, con bé đã suốt ngày chỉ ra lỗi sai trong các quyển sách và tạp chí. Nicole rất vui vẻ và luôn yêu cầu thêm bài tập về nhà”. Theo tờ Hindustan Times, Nicole đã giải được các bài toán đại số cực kỳ phức tạp từ khi 10 tuổi và có trí nhớ siêu phàm.\r\n\r\nNhờ IQ vượt trội, Nicole gia nhập Mensa, tổ chức dành cho những người siêu thông minh. Những người này chỉ chiếm 2% dân số thế giới. Mensa hiện có 120.000 thành viên. Đại diện Mensa là Ann Clarkson cho biết Nicole nằm trong số 1% người thông minh nhất thế giới.\r\n\r\nIQ hay chỉ số thông minh là một khái niệm được nhà khoa học người Anh Francis Galton đưa ra vào cuối thế kỷ 19, dùng để kiểm tra năng lực trí tuệ. Người bình thường có IQ trong khoảng từ 90 đến 109, 110-119 được coi là thông minh, 120-140 là cực kỳ thông minh và từ 140 trở lên là thiên tài.', '2015-08-04 10:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL,
  `cart_day` datetime DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `status` tinytext,
  `products_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `comment` mediumtext NOT NULL,
  `comment_day` datetime NOT NULL,
  `blogs_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `comment_day`, `blogs_id`) VALUES
(6, 'Vô Danh', 'Bài viết rất hay!!! Mong có thêm  nhiều bài như thế này nữa!!', '2015-08-02 18:40:30', 1),
(7, 'Nguyễn Lâm', 'Thật không thể tin được', '2015-08-04 10:02:53', 2),
(8, 'Vinamilk', 'Hâm mộ quá đi', '2015-08-04 10:03:23', 3),
(9, 'Hư Cấu', 'Thật không thể tin được!', '2015-08-04 11:10:23', 1),
(10, 'Chém gió tiên sinh', 'lựa chọn thông minh', '2015-08-04 11:12:41', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `image` mediumtext,
  `description` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `role`) VALUES
(1, 'nguyenphi@email.com', '202cb962ac59075b964b07152d234b70', 'Nguyen Viet Phi', '', 1),
(2, 'khach@gmail.com', '202cb962ac59075b964b07152d234b70', 'Khách', '0987654321', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`,`products_id`,`users_id`),
  ADD KEY `fk_carts_products1_idx` (`products_id`),
  ADD KEY `fk_carts_users1_idx` (`users_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`,`blogs_id`),
  ADD KEY `fk_comments_blogs_idx` (`blogs_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_carts_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_carts_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_blogs` FOREIGN KEY (`blogs_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
