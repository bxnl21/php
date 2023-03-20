-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 07, 2020 lúc 02:50 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ndqvinh_ltw`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `slug`, `status`, `trash`) VALUES
(1, 'Steam', 'Steam', 1, 0),
(2, 'Battle.net', 'Battlenet', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`, `slug`, `parent`, `status`, `trash`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Game trên Steam', 'Steam', 0, 1, 0, '2020-06-14 10:53:41', '', '0000-00-00 00:00:00', ''),
(2, 'Game trên Origin', 'Origin', 0, 1, 0, '2020-06-14 10:53:41', '', '0000-00-00 00:00:00', ''),
(3, 'Game trên Battle.net', 'Battlenet', 0, 1, 0, '2020-06-14 11:29:46', '', '0000-00-00 00:00:00', ''),
(4, 'Steam Wallet', 'SteamWallet', 0, 1, 0, '2020-07-12 14:04:31', '', '2020-06-14 11:29:46', ''),
(6, 'Game Hành Động', 'gamehanhdong', 1, 1, 0, '2020-06-14 13:58:58', '', '2020-06-14 13:58:58', ''),
(7, 'Nạp Game Mobile', 'NapMobile', 0, 1, 0, '2020-06-14 14:14:17', '', '2020-06-14 14:14:17', ''),
(8, 'Tiện ích', 'Tienich', 0, 1, 0, '2020-06-14 14:14:17', '', '2020-06-14 14:14:17', ''),
(9, 'Game Chiến Thuật', 'ChienThuat', 2, 1, 0, '2020-06-14 19:18:25', '', '2020-06-14 19:18:25', ''),
(10, 'Game Kinh Dị', 'KinhDi', 3, 1, 0, '2020-07-06 02:52:53', '', '2020-06-14 19:20:16', ''),
(30, 'Game Giả Lập', 'game giả lập', 2, 1, 0, '2020-07-12 13:57:33', '', '0000-00-00 00:00:00', ''),
(31, 'Game Offline', 'Game-Offline', 1, 1, 0, '2020-07-12 14:03:40', '', '0000-00-00 00:00:00', ''),
(46, 'Code battle.net', 'code-battle.net', 3, 1, 0, '2020-08-06 18:02:01', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `delivered` tinyint(4) NOT NULL,
  `order_date` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_code`, `customer_id`, `product_id`, `qty`, `delivered`, `order_date`, `trash`) VALUES
(33, '', 6, 7, 1, 0, '2020-08-06 13:48:06', 0),
(34, '', 6, 10, 1, 0, '2020-08-06 13:52:03', 0),
(35, '', 6, 9, 1, 0, '2020-08-06 13:56:51', 0),
(36, '', 4, 7, 1, 0, '2020-08-06 14:00:49', 0),
(37, '', 6, 7, 1, 0, '2020-08-06 14:02:37', 0),
(38, '', 6, 8, 2, 0, '2020-08-06 14:03:13', 0),
(39, '', 4, 36, 1, 0, '2020-08-06 19:03:33', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(10) NOT NULL,
  `product_category` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `product_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `brand_id`, `product_category`, `avatar`, `image`, `quantity`, `price`, `product_detail`, `created_at`, `created_by`, `updated_at`, `updated_by`, `trash`, `status`) VALUES
(1, 'Batte.net', 'Battenet', 2, 46, '', '1.png', 1, 500000, 'code 1$', '2020-06-15 09:25:12', '', '2020-06-15 09:25:12', '', 0, 1),
(2, 'Win 10 Key', 'Win10', 0, 8, '', '2.png', 1, 500000, 'Key win 10', '2020-08-05 12:19:40', '', '2020-06-15 09:34:29', '', 0, 1),
(3, 'Discord Nitro', 'DiscordNitro', 0, 8, '', '3.png', 1, 100000, 'Discord Nitro', '2020-06-15 09:34:29', '', '2020-06-15 09:34:29', '', 0, 1),
(4, 'Fifa 20', 'Fifa20', 0, 8, '', '4.png', 1, 200000, 'Fifa 20', '2020-06-15 09:36:32', '', '2020-06-15 09:36:32', '', 0, 1),
(6, 'Steam Wallet 10$', 'steamwallet10$', 1, 4, '', 'wallet80HKD.png', 1, 250000, 'Steam Wallet Code không còn lạ lẫm gì nữa với cộng đồng game thủ nữa khi nó ngày một được ưa chuộng và thịnh hành hơn so với nạp card steam wallet bởi khả năng nạp nhanh, cơ hội được chiết khấu lớn và đặc biệt là khỏi cần nạp thẻ cào làm gì cho mất công lách nhách.\r\n\r\n \r\n\r\nSteam Wallet Code là dạng mã thẻ Steam Wallet dưới dạng code online dùng để nạp tiền mua game Steam hoặc mua đồ trong game online như DOTA 2, CSGO. Cũng giống như kiểu nạp thẻ điện thoại mà chỉ cần nạp mã thẻ cào thôi ấy mà, khỏi cần phải mua thẻ giấy mà vẫn được nạp tiền một cách nhanh chóng tiện lợi. \r\n\r\nCác bạn nạp Code Steam Wallet vào tài khoản và tài khoản sẽ có số dư được tính bằng VND.\r\n\r\n', '2020-06-21 15:48:07', '', '2020-06-21 15:48:13', '', 0, 1),
(7, 'The Escapists 2', 'TheEscapists2', 1, 6, '', 'theescapists2.jpg', 1, 190000, 'Cũng giống như phần đầu, Escapists 2 đưa người chơi nhập vai một tù nhân bị tống vào nhà tù an ninh tận răng. Nhiệm vụ của bạn là lên và thực hiện kế hoạch để đào thoát khỏi nơi đây. Nhưng để làm được điều đó, người chơi phải tốn nhiều thời gian tuân thủ và theo dõi lịch sinh hoạt ở nơi này. Song song với việc tuân thủ nội quy nhà tù, người chơi còn phải làm một số nhiệm vụ để lấy lòng bạn tù khác giúp bạn hoặc kiếm tiền mua các thứ cần thiết cho cuộc vượt ngục. Các nhiệm vụ này thường xoay quanh việc bí mật lấy cắp chìa khóa của cai ngục, tìm vật phẩm hoặc làm “đại bàng” ra oai với bạn tù khác v.v…', '2020-06-21 21:32:24', '', '2020-06-21 21:32:24', '', 0, 1),
(8, 'ARK: Survival Evolved', 'ArkSurvivalEvoled', 1, 6, '', 'ark.jpg', 1, 394000, 'ARK: Survival Evolved là tựa game sinh tồn lấy đề tài về thời kỳ khủng long. Khỏi phải nói về độ chân thực và hoàn mỹ của ARK: Survival Evolved, nó quá đẹp, đẹp đến nỗi xóa nhòa đi ranh giới giữa game và đời thực. Được đánh giá là một trong những tựa game sinh tồn hàng đầu trên thế giới hiện nay, ARK có thể giúp bạn có những giờ phút giải trí tuyệt vời nhất.\r\nCho những ai chưa biết, ARK: Survival Evolved là một game online có thế giới ảo vô cùng rộng lớn đang được phát hành dưới dạng free-to-play tại thị trường Châu Á. Game thủ sẽ được \"chơi đùa\" với những chú khủng long, bao gồm cả việc săn bắt, huấn luyện, chiến đấu với chúng cũng như thu thập các nguyên liệu khác để chế tạo vũ khí, xây dựng nhà cửa, đồ đạc…', '2020-06-22 21:32:24', '', '2020-06-21 21:32:24', '', 0, 1),
(9, 'Dying Light', 'DyingLight', 1, 6, '', 'dyinglight.jpg', 1, 376000, 'Nền tảng: Steam\r\n\r\nThông Tin: Dying Light là một game kinh dị hậu tận thế góc nhìn thứ nhất được sản xuất bởi Techland và được phát hành bởi Warner Bros. Interactive Entertainment. Game được phát hành cho PlayStation 4, Xbox One và Windows vào ngày 27 tháng 1 năm 2015 ở châu Mỹ và vào ngày 28 tháng 1 năm 2015 ở châu Âu và châu Đại Dương.\r\n\r\nThể loại: Zombies, Survival, Open World, Parkour, Co-op', '2020-06-22 10:52:01', '', '2020-06-22 10:52:01', '', 0, 1),
(10, 'Steam Wallet 5$', 'steamwallet5$', 1, 4, '', 'wallet118k.png', 1, 118000, 'Steam Wallet Code không còn lạ lẫm gì nữa với cộng đồng game thủ nữa khi nó ngày một được ưa chuộng và thịnh hành hơn so với nạp card steam wallet bởi khả năng nạp nhanh, cơ hội được chiết khấu lớn và đặc biệt là khỏi cần nạp thẻ cào làm gì cho mất công lách nhách.\r\n\r\nSteam Wallet Code là dạng mã thẻ Steam Wallet dưới dạng code online dùng để nạp tiền mua game Steam hoặc mua đồ trong game online như DOTA 2, CSGO. Cũng giống như kiểu nạp thẻ điện thoại mà chỉ cần nạp mã thẻ cào thôi ấy mà, khỏi cần phải mua thẻ giấy mà vẫn được nạp tiền một cách nhanh chóng tiện lợi. \r\n\r\nCác bạn nạp Code Steam Wallet vào tài khoản và tài khoản sẽ có số dư được tính bằng VND.\r\n\r\n', '2020-06-22 13:23:15', '', '2020-06-22 13:23:15', '', 0, 1),
(11, 'Steam Wallet 50$', 'steamwallet50$', 1, 4, '', 'wallet50$.png', 1, 1160000, 'Steam Wallet Code không còn lạ lẫm gì nữa với cộng đồng game thủ nữa khi nó ngày một được ưa chuộng và thịnh hành hơn so với nạp card steam wallet bởi khả năng nạp nhanh, cơ hội được chiết khấu lớn và đặc biệt là khỏi cần nạp thẻ cào làm gì cho mất công lách nhách.\r\n\r\nSteam Wallet Code là dạng mã thẻ Steam Wallet dưới dạng code online dùng để nạp tiền mua game Steam hoặc mua đồ trong game online như DOTA 2, CSGO. Cũng giống như kiểu nạp thẻ điện thoại mà chỉ cần nạp mã thẻ cào thôi ấy mà, khỏi cần phải mua thẻ giấy mà vẫn được nạp tiền một cách nhanh chóng tiện lợi. \r\n\r\nCác bạn nạp Code Steam Wallet vào tài khoản và tài khoản sẽ có số dư được tính bằng VND.\r\n\r\n', '2020-06-22 13:23:15', '', '2020-06-22 13:23:15', '', 0, 1),
(31, 'test update', 'text', 1, 0, '', 'emptycart.png', 1, 500, '<p>asd</p>\r\n', '2020-08-05 12:55:38', '', '0000-00-00 00:00:00', '', 1, 1),
(32, 'Tomb Raider', 'tomb-raider', 0, 9, '', 'tom.jpg', 1, 415000, 'Chi tiết sản phẩm\r\nNhững người hâm mộ dòng game Tomb Raider đã theo chân Lara Croft trong hơn 16 năm kể từ khi phiên bản Tomb Raider đầu tiên ra mắt vào năm 1996.  Cho đến nay, đã có hơn 13 tựa game Tomb Raider được ra mắt, cùng với doanh số 35 triệu bản bán ra, đã chứng minh rằng Tomb Raider là một trong những thương hiệu game ăn khách nhất toàn cầu.\r\n\r\nSau phiên bản Underworld ra mắt vào năm 2008, dòng game Tomb Raider bắt đầu “im hơi lặng tiếng” khi tự nhận thấy bản thân trở nên “già cỗi”, thiếu sự đổi mới. Cùng thời điểm này, ở mảng console, xuất hiện một ngôi sao mới – Uncharted: Drake’s Fortune, của hãng Naughty Dog, mà về sau đã trở thành một trong những dòng game độc quyền chủ lực cho PlayStation của Sony.\r\n\r\nChính đối thủ đáng gờm này đã thôi thúc Crystal Dynamics phải “đẻ” ra một phụ bản mang tên: Lara Croft and The Guardian of Light (2010) để “câu giờ”, còn bên trong nhà thì dồn hết nhân lực và tâm huyết để tái sinh lại thương hiệu Tomb Raider trứ danh, sao cho khi ra mắt phải xứng đáng là “đàn chị” của dòng game Uncharted kia.\r\n\r\nThế là phiên bản “reboot” (khởi động lại) mang cái tên “cộc lốc”: Tomb Raider ra đời. Một cuộc hành trình mới, cùng với một Lara Croft “thời niên thiếu” xuất hiện. Liệu niềm kiêu hãnh của thương hiệu Tomb Raider già đời có đánh bại được Uncharted trẻ trung, liệu nàng Lara quý tộc có giành lại được cảm tình của những cựu fan và thu hút các tân binh từ tay chàng Don Juan – Nathan Drake, sau ngần ấy năm “biệt tích giang hồ”?', '2020-08-05 12:19:40', '', '2020-06-15 09:34:29', '', 0, 1),
(33, 'Crysis 3', 'Crysis-3', 0, 9, '', 'Crysis.png', 1, 490000, 'Crysis 3', '2020-08-05 12:19:40', '', '2020-06-15 09:34:29', '', 0, 1),
(34, 'Saints Row: Gat out of Hell', 'Saints-Row-Gat-out-of-Hell', 0, 9, '', 'Saintrow.jpg', 1, 415000, 'Saints Row: Gat out of Hell', '2020-08-05 12:19:40', '', '2020-06-15 09:34:29', '', 0, 1),
(35, 'Battlefield 1', 'Battlefield-1', 0, 31, '', 'bf1.png', 1, 400000, 'Battlefield 1', '2020-08-05 12:19:40', '', '2020-06-15 09:34:29', '', 0, 1),
(36, 'Battlefield 3', 'Battlefield-3', 0, 31, '', 'bf3.png', 1, 300000, 'Chi tiết sản phẩm\r\nRượt đuổi và đấu súng trên nóc các toa tàu, đu mình và chuyền từ toa này sang toa khác bên ngoài một đoàn cao tốc đang chạy với tốc độ cao, đấu súng trong dường hầm tàu điện ngầm... chào mừng bạn đến với game hành động đỉnh cao Battlefield 3.\r\n\r\nBattlefield 3 rất gần gũi với Bad Company 2, nhưng vẫn giữ được những nét riêng và những đặc tính riêng của chính Battlefield 3. Cùng với bộ engine Frostbite 2.0 được viết lại hoàn toàn, khả năng phá hủy môi trường của Battlefield 3 khiến cho mọi vị trí ẩn nấp đều trở nên vô nghĩa, không một chỗ ẩn nấp nào được an toàn. Đồ họa đẹp, ánh sáng gần như thật, môi trường và âm thanh sống động.', '2020-08-06 23:55:43', '1', '2020-08-06 23:55:43', '', 0, 1),
(37, 'Battlefield 4', 'Battlefield-4', 0, 31, '', 'bf4.png', 1, 320000, 'Chi tiết sản phẩm\r\nMô tả\r\n\r\nVới Engine đồ họa Frostbite, Battlefield 4 sẽ khoác lên mình một lớp áo hào nhoáng với những hiệu ứng vật lí như va chạm, cháy nổ cũng như hình ảnh chân thực. Sẽ có những điểm mới lạ như thủy quân hay những nhân vật nữ. Multiplayer rất hoành tráng, quy mô và hấp dẫn hơn bao giờ hết.', '2020-08-06 23:55:43', '1', '2020-08-06 23:55:43', '1', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `address`, `created_at`, `modified_at`, `status`, `trash`, `role`) VALUES
(4, 'teo123@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'nguyen van teo', '0123654789', '123 abc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 'admin'),
(5, 'abcc@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'nguyen van a', '05656', '123 abc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, ''),
(6, 'teo1234@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'nguyen van b', '123', '231', '2020-07-20 04:21:49', '0000-00-00 00:00:00', 1, 0, ''),
(7, 'asd@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ark', '05656', '231', '2020-07-20 04:22:51', '0000-00-00 00:00:00', 1, 0, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
