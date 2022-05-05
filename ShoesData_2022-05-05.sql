# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: ShoesData
# Generation Time: 2022-05-05 11:56:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table product_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_photos`;

CREATE TABLE `product_photos` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `p_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `product_photos` WRITE;
/*!40000 ALTER TABLE `product_photos` DISABLE KEYS */;

INSERT INTO `product_photos` (`id_photo`, `p_photo`, `product_id`, `created_at`, `updated_at`)
VALUES
	(1,'165168112616.jpg',1471980045,'2022-05-04 23:18:46','2022-05-04 23:18:46'),
	(2,'165168112619.jpg',1471980045,'2022-05-04 23:18:46','2022-05-04 23:18:46'),
	(3,'165168112679.jpg',1471980045,'2022-05-04 23:18:46','2022-05-04 23:18:46'),
	(4,'165168128978.jpg',1240771872,'2022-05-04 23:21:29','2022-05-04 23:21:29'),
	(5,'165168128912.jpg',1240771872,'2022-05-04 23:21:29','2022-05-04 23:21:29'),
	(6,'165168128921.jpg',1240771872,'2022-05-04 23:21:29','2022-05-04 23:21:29'),
	(7,'165168156151.jpg',389907849,'2022-05-04 23:26:01','2022-05-04 23:26:01'),
	(8,'165168156155.jpg',389907849,'2022-05-04 23:26:01','2022-05-04 23:26:01'),
	(9,'16516815613.jpg',389907849,'2022-05-04 23:26:01','2022-05-04 23:26:01'),
	(10,'165168212578.jpg',1599254427,'2022-05-04 23:35:25','2022-05-04 23:35:25'),
	(11,'16516821258.jpg',1599254427,'2022-05-04 23:35:25','2022-05-04 23:35:25'),
	(12,'165168212597.jpg',1599254427,'2022-05-04 23:35:25','2022-05-04 23:35:25'),
	(13,'165168232351.jpg',120283047,'2022-05-04 23:38:43','2022-05-04 23:38:43'),
	(14,'165168232327.jpg',120283047,'2022-05-04 23:38:43','2022-05-04 23:38:43'),
	(15,'16516823237.jpg',120283047,'2022-05-04 23:38:43','2022-05-04 23:38:43'),
	(16,'165168253048.jpg',1766972608,'2022-05-04 23:42:10','2022-05-04 23:42:10'),
	(17,'165168253038.jpg',1766972608,'2022-05-04 23:42:10','2022-05-04 23:42:10'),
	(18,'165168253095.jpg',1766972608,'2022-05-04 23:42:10','2022-05-04 23:42:10'),
	(19,'165168270861.jpg',104268990,'2022-05-04 23:45:08','2022-05-04 23:45:08'),
	(20,'165168270882.jpg',104268990,'2022-05-04 23:45:08','2022-05-04 23:45:08'),
	(21,'165168270865.jpg',104268990,'2022-05-04 23:45:08','2022-05-04 23:45:08'),
	(22,'165168299149.jpg',660793406,'2022-05-04 23:49:51','2022-05-04 23:49:51'),
	(23,'1651682991100.jpg',660793406,'2022-05-04 23:49:51','2022-05-04 23:49:51'),
	(24,'165168299127.jpg',660793406,'2022-05-04 23:49:51','2022-05-04 23:49:51'),
	(25,'16516831656.jpg',1956632820,'2022-05-04 23:52:45','2022-05-04 23:52:45'),
	(26,'165168316583.jpg',1956632820,'2022-05-04 23:52:45','2022-05-04 23:52:45'),
	(27,'165168316564.jpg',1956632820,'2022-05-04 23:52:45','2022-05-04 23:52:45'),
	(28,'165168350241.jpg',837615914,'2022-05-04 23:58:22','2022-05-04 23:58:22'),
	(29,'165168350241.jpg',837615914,'2022-05-04 23:58:22','2022-05-04 23:58:22'),
	(30,'165168350259.jpg',837615914,'2022-05-04 23:58:22','2022-05-04 23:58:22'),
	(31,'165168383272.jpg',511975504,'2022-05-05 00:03:52','2022-05-05 00:03:52'),
	(32,'165168383230.jpg',511975504,'2022-05-05 00:03:52','2022-05-05 00:03:52'),
	(33,'16516838328.jpg',511975504,'2022-05-05 00:03:52','2022-05-05 00:03:52'),
	(34,'165168468629.jpg',470293349,'2022-05-05 00:18:06','2022-05-05 00:18:06'),
	(35,'165168468647.jpg',470293349,'2022-05-05 00:18:06','2022-05-05 00:18:06'),
	(36,'165168468633.jpg',470293349,'2022-05-05 00:18:06','2022-05-05 00:18:06'),
	(37,'165168477299.jpg',1269472070,'2022-05-05 00:19:32','2022-05-05 00:19:32'),
	(38,'165168477279.jpg',1269472070,'2022-05-05 00:19:32','2022-05-05 00:19:32'),
	(39,'165168477247.jpg',1269472070,'2022-05-05 00:19:32','2022-05-05 00:19:32'),
	(40,'165168744055.jpg',1916978283,'2022-05-05 01:04:00','2022-05-05 01:04:00'),
	(41,'165168744082.jpg',1916978283,'2022-05-05 01:04:00','2022-05-05 01:04:00'),
	(42,'165168744086.jpg',1916978283,'2022-05-05 01:04:00','2022-05-05 01:04:00');

/*!40000 ALTER TABLE `product_photos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type_shoes_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `thumbnails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`product_id`, `type_id`, `brand_id`, `caption`, `size`, `type_shoes_id`, `description`, `price`, `discount`, `quantity`, `thumbnails`, `status`, `deleted_at`, `created_at`, `updated_at`, `address`)
VALUES
	(104268990,1,9,'Giày Thể Thao MLB JOGGER-50B Chính Hãng','42',1,'Đặc điểm nổi bật của MLB Chunky Jogger New York Yankees\r\nMLB Chunky Jogger New York Yankees không chỉ mang kiểu dáng độc đáo, thu hút, đôi giày với phong cách chunky còn giúp người mang có được những sự lựa chọn đa dạng outfit để phối cùng. Bạn sẽ nổi bật giữa đám đông với một đôi giày chunky vì kiểu dáng của nó không thể lẫn với bất kỳ đôi nào khác được. Mặc dù khi chạm vào bạn có thể thấy phần đế này khá cứng. Nhưng khi mang sẽ tạo độ đàn hồi mang lại cảm giác cực kỳ thoải mái, nhẹ nhàng và dễ chịu. Phần đế của đôi giày nếu nhìn kỹ bạn sẽ nhận thấy họa tiết chữ MLB được cách điệu vô cùng tinh tế.',1341000,5,5,'165168270865.jpg',0,NULL,'2022-05-04 23:45:08','2022-05-04 23:45:08',NULL),
	(120283047,1,2,'Giày Thể Thao AIR JORDAN 1 MID \"GYM RED\" DJ4695-122(GS)-554724-122 Chính Hãng - Tặng Mũ Nike 399k','43',3,'Giày Sneaker Thể Thao Nike Jordan 1 Mid Gym Red Black White DJ4695 122 (GS) / 554724 122 – Chính Hãng 100%\r\n\r\nNike Air Jordan 1 High ra mắt lần đầu tiên vào năm 1985 với tư cách là đôi giày chữ ký đầu tiên của Michael Jordan, mở đường cho một sự nghiệp thành công và mang tính biểu tượng. Được thiết kế bởi Peter Moore, Jordan 1 có thiết kế lấy cảm hứng từ Nike Dunk được trang trí bằng biểu tượng Nike Swoosh và Jordan Wings.\r\nSau Air Jordan 1 High retro thứ hai vào những năm 2000, Jordan 1 Mid cũng được phát hành. Với phiên bản mid, Jordan muốn có được chỗ đứng trong phân khúc lifestyle, với mức giá tốt và dễ tiếp cận hơn với người tiêu dùng.',3890000,5,2,'16516823237.jpg',0,NULL,'2022-05-04 23:38:43','2022-05-04 23:38:43',NULL),
	(389907849,1,2,'(NEW) Giày ASICS ONITSUKA TIGER MEXICO 66 1183B671-101 - CHÍNH HÃNG 100%','38',3,'(NEW) Giày ASICS ONITSUKA TIGER MEXICO 66 1183B671-101 - CHÍNH HÃNG 100%\r\n- Tình trạng:\r\nGiày mới 100% + Full box \r\nForm giày ôm, cần tăng 1 size so với size chuẩn của chân',2199999,5,3,'16516815613.jpg',0,NULL,'2022-05-04 23:26:01','2022-05-04 23:26:01',NULL),
	(470293349,1,1,'(AUTHENTIC 100%) Giày Sneaker Thể Thao Nike Blazer Mid Jumbo University Blue DD3111-103 - NEW 100%','40.5',3,'(AUTHENTIC 100%) Giày Sneaker Thể Thao Nike Blazer Mid Jumbo University Blue DD3111-103 - NEW 100%\r\n\r\nCODE: DD3111-103\r\n\r\nGiày chuẩn size',2650000,12,2,'165168468633.jpg',0,NULL,'2022-05-05 00:18:06','2022-05-05 00:18:06',NULL),
	(511975504,1,9,'(AUTHENTIC 100%) Giày Sneaker Thể Thao New Balance 550 Black Red BB550SG1 - NEW 100%','41',4,'Giày New Balance BB550SG1 ban đầu được phát hành vào năm 1989 dưới dạng giày bóng rổ và không được thay đổi kể từ đó. Trong BB550SG1, chúng tôi đã tạo lại mô hình mang tính biểu tượng của mình để tri ân những cầu thủ bóng rổ chuyên nghiệp và những người chơi bóng bầu dục đường phố những năm 1980, những người đã định hình nên một thế hệ vô địch.',2750000,15,2,'16516838328.jpg',0,NULL,'2022-05-05 00:03:52','2022-05-05 00:03:52',NULL),
	(660793406,1,2,'Giày Thể Thao NIKE REACT VISION MULTICOLOR Chính Hãng','42',3,'Sản phẩm mới nhất của Nike dựa trên cộng nghệ cực kỳ thành công “REACT” được phát triển trong năm 2018. Giờ đây, đôi sneaker với công nghệ đình đám này lại được Nike nâng lên một tầng cao mới đó chính là Nike react Vision D/MS/X .\r\n\r\nĐây là mẫu giày chạy bộ / stylelife cực kỳ thông dụng, bạn có thể sử dụng như một đôi RUNNING cao cấp, có thể training hoặc đơn giản có thể mang đi chơi vẫn rất đẹp.',1199000,5,10,'165168299127.jpg',0,NULL,'2022-05-04 23:49:51','2022-05-04 23:49:51',NULL),
	(837615914,1,9,'(NEW) Giày VANS OLD SKOOL RETRO COURT VN0A38G19EJ - CHÍNH HÃNG 100%','40',3,'- Chính sách đổi trả: Trường hợp người mua nhận sản phẩm không vừa size hoặc lỗi thì có thể liên hệ shop để được hỗ trợ đổi trong vòng 24H.\r\n\r\nLưu ý: Chính sách đổi hàng sẽ không áp dụng cho trường hợp khách hàng đã sử dụng sản phẩm, khách hàng đổi ý sau khi nhận sản phẩm.\r\n\r\n- Chính sách bảo hành: Shop cam kết bảo hành keo và lỗi trong vòng 30 ngày sử dụng. Cam Kết Chính Hãng Trọn Đời Sản Phẩm',1350000,5,3,'165168350259.jpg',0,NULL,'2022-05-04 23:58:22','2022-05-04 23:58:22',NULL),
	(1240771872,1,2,'Giày TRAINING REEBOK NANO X PRIDE FZ4263 Chính Hãng - Tặng Mũ Nike 399K','42',3,'Giày TRAINING REEBOK NANO X PRIDE FZ4263 Chính Hãng\r\n\r\nNano X là một trong những dòng sản phẩm giày thể thao chuyên dụng trong phòng tập tốt và được ưa chuộng nhất của Reebok. Với nhiều công nghệ và chất lượng vượt bật, người tiêu dùng không cần phải bỏ ra khoản tiền quá cao nhưng vẫn nhận được chất lượng và hiệu năng tốt.\r\n\r\nCam kết chính hãng, bao check trọn đời sản phẩm.',1399999,15,3,'165168128921.jpg',0,NULL,'2022-05-04 23:21:29','2022-05-04 23:21:29',NULL),
	(1269472070,1,1,'(AUTHENTIC 100%) Giày Sneaker Thể Thao Nike Blazer Mid Jumbo University Blue DD3111-103 - NEW 100%','41',3,'(AUTHENTIC 100%) Giày Sneaker Thể Thao Nike Blazer Mid Jumbo University Blue DD3111-103 - NEW 100%\r\n\r\nCODE: DD3111-103\r\n\r\nGiày chuẩn size',2650000,12,5,'165168477247.jpg',0,NULL,'2022-05-05 00:19:32','2022-05-05 00:19:32',NULL),
	(1471980045,1,1,'Giày TRAINING REEBOK NANO X PRIDE FZ4263 Chính Hãng - Tặng Mũ Nike 399K','43',3,'Giày TRAINING REEBOK NANO X PRIDE FZ4263 Chính Hãng\r\n\r\nNano X là một trong những dòng sản phẩm giày thể thao chuyên dụng trong phòng tập tốt và được ưa chuộng nhất của Reebok. Với nhiều công nghệ và chất lượng vượt bật, người tiêu dùng không cần phải bỏ ra khoản tiền quá cao nhưng vẫn nhận được chất lượng và hiệu năng tốt.\r\n\r\nCam kết chính hãng, bao check trọn đời sản phẩm.',1399999,18,3,'165168112679.jpg',0,NULL,'2022-05-04 23:18:46','2022-05-04 23:18:46',NULL),
	(1599254427,1,1,'[2hand]  GIÀY Adidas D.O.N. Issue 1 GCA - Red/Black EF9961  HÀNG CŨ CHÍNH HÃNG','43',3,'[2hand]  GIÀY Adidas D.O.N. Issue 1 GCA - Red/Black EF9961  HÀNG CŨ CHÍNH HÃNG\r\n\r\n- Condition: Giày chính hãng đã qua sử dụng. \r\n\r\n- Giá tiền của sản phẩm sẽ phụ thuộc vào độ mới của từng đôi\r\n\r\nLưu ý: Các bạn trước khi đặt nên nhắn cho shop để xem ảnh chi tiết hoặc video đôi đó nhé, vì mỗi đôi giày 2hand sẽ có ngoại hình khác nhau.',899000,15,3,'165168212597.jpg',0,NULL,'2022-05-04 23:35:25','2022-05-04 23:35:25',NULL),
	(1766972608,1,2,'Giày Thể Thao JORDAN 1 RETRO HIGH OG ELECTRO ORANGE 555088-180 Chính hãng','42',2,'Giày JORDAN 1 RETRO HIGH OG \' ELECTRO ORANGE \" 555088-180\r\n\r\nMã giày: 555088-180\r\nPhát hành: Tháng 7 năm 2021\r\nPhối màu: White/Electro Orange/Black\r\nFull Box &Tag\r\n\r\nĐược khoác lên mình tông màu Trắng, Cam và Đen, Air Jordan 1 này có đế bằng da màu trắng với lớp phủ màu đen ở bàn chân trước, khoen và Swoosh. \r\nĐiểm nhấn màu cam được áp dụng trên cổ áo, lưỡi gà, đế và đế ngoài bằng cao su để hoàn thiện thiết kế.',5500000,5,2,'165168253095.jpg',0,NULL,'2022-05-04 23:42:10','2022-05-04 23:42:10',NULL),
	(1916978283,1,1,'(AUTHENTIC 100%) Giày Sneaker Thể Thao Nike Blazer Mid Jumbo University Blue DD3111-103 - NEW 100%','45',3,'(AUTHENTIC 100%) Giày Sneaker Thể Thao Nike Blazer Mid Jumbo University Blue DD3111-103 - NEW 100%\r\n\r\nCODE: DD3111-103\r\n\r\nGiày chuẩn size',2650000,5,3,'165168744086.jpg',0,NULL,'2022-05-05 01:04:00','2022-05-05 01:07:06','Thái thị bôi,Đà Nẵng'),
	(1956632820,1,9,'Giày Thể Thao FILA DISRUPTOR 2 Chính hãng','38',3,'Giày Thể Thao FILA DISRUPTOR 2 Chính hãng\r\n\r\nNOTE: - BẨN NHẸ VÀI CHỖ KHÔNG ĐÁNG KỂ DO TRƯNG BÀY\r\n            - ĐỘ MỚI 98-99%\r\n           - CHUẨN AUTH 100%\r\n       - CAM KẾT BẢO HÀNH CHÍNH HÃNG TRỌN ĐỜI SẢN PHẨM\r\n- Lưu ý chọn Size: Fit xuống 1 size vì form giày khá ôm. Ví dụ chân của bạn là size 240 (38) thì các bạn nên chọn 245 hoặc 250 (tương tứng 38.5 đến 39). Lên 0.5 đến 1 size tùy vào chân nhé.',890000,11,2,'165168316564.jpg',0,NULL,'2022-05-04 23:52:45','2022-05-04 23:52:45',NULL);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table show_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `show_products`;

CREATE TABLE `show_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `sale_week` int(11) NOT NULL,
  `best_seller` int(11) NOT NULL,
  `hot_car` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `show_products` WRITE;
/*!40000 ALTER TABLE `show_products` DISABLE KEYS */;

INSERT INTO `show_products` (`id`, `product_id`, `sale_week`, `best_seller`, `hot_car`, `created_at`, `updated_at`)
VALUES
	(1,1471980045,1,0,0,'2022-05-04 23:18:46','2022-05-04 23:18:46'),
	(2,1240771872,0,1,1,'2022-05-04 23:21:29','2022-05-04 23:21:29'),
	(3,389907849,0,1,1,'2022-05-04 23:26:01','2022-05-04 23:26:01'),
	(4,1599254427,1,1,0,'2022-05-04 23:35:25','2022-05-04 23:35:25'),
	(5,120283047,0,0,1,'2022-05-04 23:38:43','2022-05-04 23:38:43'),
	(6,1766972608,1,1,0,'2022-05-04 23:42:10','2022-05-04 23:42:10'),
	(7,104268990,0,1,0,'2022-05-04 23:45:08','2022-05-04 23:45:08'),
	(8,660793406,1,1,1,'2022-05-04 23:49:51','2022-05-04 23:49:51'),
	(9,1956632820,1,1,1,'2022-05-04 23:52:45','2022-05-04 23:52:45'),
	(10,837615914,1,1,1,'2022-05-04 23:58:22','2022-05-04 23:58:22'),
	(11,511975504,1,1,1,'2022-05-05 00:03:52','2022-05-05 00:03:52'),
	(12,470293349,1,1,1,'2022-05-05 00:18:06','2022-05-05 00:18:06'),
	(13,1269472070,0,1,1,'2022-05-05 00:19:32','2022-05-05 00:19:32'),
	(14,1916978283,1,1,1,'2022-05-05 01:04:00','2022-05-05 01:04:00');

/*!40000 ALTER TABLE `show_products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
