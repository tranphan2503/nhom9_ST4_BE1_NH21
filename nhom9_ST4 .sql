-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2022 lúc 06:11 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom9`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(100) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'LG'),
(4, 'Xiaomi'),
(5, 'Vivo'),
(6, 'Oppo'),
(7, 'Huawei'),
(8, 'Motorola'),
(9, 'Realme');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`, `qty`) VALUES
(1, 'Điện thoại di động Apple iPhone 13 Pro Max - 1TB - Chính hãng VN/A', 1, 1, 42990000, 'Điện thoại di động Apple iPhone 13 Pro Max - 1TB - Chính hãng VNA.png', 'Công nghệ màn hình: OLED\r\nĐộ phân giải: 1284 x 2778 Pixels, 3 camera 12 MP, 12 MP\r\nHệ điều hành: iOS 15\r\nChip xử lý (CPU): Apple A15 Bionic 6 nhân\r\nBộ nhớ trong (ROM): 1 TB\r\nRAM: 6 GB\r\nMạng di động: Hỗ trợ 5G\r\nSố khe sim: 1 Nano SIM & 1 eSIM', 1, '2021-10-20 03:47:36', 30),
(2, 'Điện thoại di động Samsung Galaxy Z Fold2 5G - chính hãng', 2, 1, 30890000, 'Điện thoại di động Samsung Galaxy Z Fold2 5G - chính hãng.png', 'Công nghệ màn hình: Chính: Dynamic AMOLED, Phụ: Super AMOLED\r\nĐộ phân giải: Full HD+ (1768 x 2208 Pixels), 3 camera 12 MP, 10 MP\r\nMàn hình rộng: Chính 7.59\" & Phụ 6.23\"\r\nBộ nhớ trong (ROM): 256 GB\r\nRAM: 12 GB\r\nMạng di động: Hỗ trợ 5G\r\nSố khe sim: 1 Nano SIM & 1 eSIM\r\nTrọng lượng: 282 g\r\nDung lượng pin: 4500 mAh', 1, '2021-10-20 04:32:16', 0),
(3, 'Điện thoại di động OPPO Find X3 Pro 5G - Chính hãng', 6, 1, 23890000, 'image-removebg-preview.png', 'Công nghệ màn hình: AMOLED\r\nĐộ phân giải: Đang cập nhật, Đang cập nhật, 32 MP\r\nHệ điều hành: Android 11\r\nChip xử lý (CPU): Snapdragon 888 8 nhân\r\nBộ nhớ trong (ROM): 256 GB\r\nRAM: 12 GB\r\nMạng di động: Hỗ trợ 5G\r\nSố khe sim: 2 Nano SIM\r\nDung lượng pin: 4500 mAh', 0, '2021-10-20 04:35:42', 0),
(4, 'Realme 8 Pro - Chính hãng', 9, 1, 7490000, 'image-removebg-preview-12.png', 'Công nghệ màn hình: Super AMOLED\r\nĐộ phân giải: Full HD+ (1080 x 2400 Pixels), Chính 108 MP & Phụ 8 MP, 2 MP, 2 MP, 16 MP\r\nHệ điều hành: Android 11\r\nChip xử lý (CPU): Snapdragon 720G 8 nhân\r\nBộ nhớ trong (ROM): 128 GB\r\nRAM: 8 GB\r\nMạng di động: Hỗ trợ 4G\r\nSố khe sim: 2 Nano SIM\r\nDung lượng pin: 4500 mAh', 0, '2021-10-20 04:38:11', 0),
(5, 'Điện thoại di động Xiaomi 11 Lite 5G NE - 8GB/128GB - Chính hãng DGW', 4, 1, 9490000, 'image-removebg-preview-21.png', 'Công nghệ màn hình: AMOLED\r\nĐộ phân giải: Đang cập nhật, Đang cập nhật, Đang cập nhật\r\nHệ điều hành: Android 11\r\nChip xử lý (CPU): Snapdragon 778G 5G 8 nhân\r\nBộ nhớ trong (ROM): 128 GB\r\nRAM: 6 GB\r\nMạng di động: Hỗ trợ 5G', 1, '2021-10-20 04:43:09', 0),
(6, 'Đồng hồ thông minh Samsung Galaxy Watch 4 Classic 42mm LTE - (R885) - Chính hãng', 2, 4, 9490000, 'watch-4-classic-smail-6.png', 'CPU: Exynos W920\r\nDung lượng pin: 247 mAh', 1, '2021-10-20 04:46:39', 0),
(7, 'Laptop Macbook Pro 16\" 2021 - M1 Max 32 Core GPU/1TB - Chính hãng Apple VN', 1, 2, 89990000, 'sliver-macbook-2021-5.png', '16\" 2021 - M1 Max 32 Core GPU/1TB', 1, '2021-10-20 04:50:41', 21),
(8, 'Máy tính bảng Samsung Galaxy Tab S7 - Chính Hãng', 2, 3, 15290000, 'image-removebg-preview (10).png', 'Hệ điều hành: Android 10\r\nChip xử lý (CPU): Snapdragon 865+ 8 nhân\r\nTốc độ CPU: 1 nhân 3.2 GHz, 3 nhân 2.4 GHz & 4 nhân 1.8 GHz\r\nChip đồ hoạ (GPU): Adreno 650\r\nKích thước: Dài 253.8 mm - Ngang 165.3 mm - Dày 6.3 mm\r\nTrọng lượng: 500 g\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nBộ nhớ còn lại (khả dụng): Khoảng 102 GB\r\nWiFi: Có\r\nBluetooth: Có', 1, '2021-10-20 04:52:42', 0),
(9, 'Máy in Laser không dây đa chức năng Samsung SL-M2070FW', 2, 5, 4350000, 'p_11877_SAMSUNG-SL-M2070FW.jpg', ' Máy in Laser đa chức năng: Print, Copy, Scan, Fax.\r\n\r\n-       Kết nối không dây Wifi.\r\n\r\n-       Tốc độ in: 20 trang/phút A4, 21 trang/phút letter.\r\n\r\n-       Thời gian in trang đầu tiên: ít hơn 8,5 giây.\r\n\r\n-       Độ phân giải in: 1200x1200dpi.\r\n\r\n-       Tốc độ Copy: 20 bản/phút A4, 21 bản/phút letter.\r\n\r\n-       Tỷ lệ phóng to, thu nhỏ: 25-400%.\r\n\r\n-       Chức năng Copy nhiều trang: 99 trang.\r\n\r\n-       Khay nạp tài liệu bản gốc ADF, khay Platen.\r\n\r\n-       Các chức năng Copy: ID Copy / N-UP Copy.\r\n\r\n-       Phương pháp quét: Color CIS\r\n\r\n-       Độ phân giải quét quang học: 1200 x 1200dpi\r\n\r\n-       Độ phân giải quét nâng cao: 4800 x 4800dpi\r\n\r\n-       Chức năng Scan to PC\r\n\r\n-       Tương thích: TWAIN Standard / WIA Standard\r\n\r\n-       Tính năng Fax: Mult- Send / Delayed Send / Priority Send / Secure Receive / Fax Forwarding.\r\n\r\n-       Tương thích: ITU-T G3 / ECM\r\n\r\n-       Tốc độ Modem: 33.6Kbps\r\n\r\n-       Độ phân giải Fax: 300 x 300dpi\r\n\r\n-       Bộ nhớ Fax: 500 trang.\r\n\r\n-       Quay số tự động: Có (209 locations).\r\n\r\n-       Khay giấy vào: 150 tờ.\r\n\r\n-       Khay giấy ra: 100 tờ.\r\n\r\n-       Khay nạp tài liệu bản gốc ADF: 40 tờ.\r\n\r\n-       Khổ giấy: A4 / A5 / Letter / Legal / Executive / Folio / Oficio / ISO B5 / JIS B5 / Envelope (Monarch, Com10, DL, C5) / Custom (76 x 127 mm - 216 x 356 mm / 3\' x 5\' - 8.5\' x 14\').\r\n\r\n-       Loại giấy in: Plain / Thick / Thin / Cotton / Colour / Preprinted / Recycled / Lables / CardStock / Bond / Archive / Envelope.\r\n\r\n-       Sử dụng mực in: Average Cartridge Yield 1,000 *Standard pages (Ships with 500 pages Starter Toner Cartridge) *Declared cartridge yield in accordance with ISO / IEC 19752.\r\n\r\n-       Công suất in: 10.000 trang/tháng.\r\n\r\n-       Bộ vi xử lý: 600MHz.\r\n\r\n-       Bộ nhớ: 128MB.\r\n\r\n-       Cổng kết nối: Hi-Speed USB 2.0 / Ethernet 10/100 Base TX / Wireless 802.11 b/g/n\r\n\r\n-       Hệ điều hành tương thích: Windows 8 / 7 / Vista / XP / 2000 / 2008R2 / 2008 / 2003, Mac OS X 10.5 - 10.8, Various Linux.\r\n\r\n-       Kích thước: 406 x 359.6 x 308.7 mm\r\n\r\n-       Trọng lượng: 8,55 kg.', 0, '2021-10-02 04:52:50', 0),
(10, 'Đồng hồ thông minh Apple Watch Series 7 4G, 45mm – Viền thép dây thép - Chính hãng VN/A', 1, 4, 20490000, 's7-thep-3.png', 'Thương hiệu: Apple\r\nXuất xứ thương hiệu: Mỹ\r\nChống nước: Có\r\nĐộ chịu nước: 50m\r\nPhụ kiện đi kèm: Dây cáp sạc\r\nLoại dây: Cao su\r\nXuất xứ: Trung Quốc', 1, '2021-09-07 05:00:49', 10),
(11, 'Đồng hồ thông minh realme Watch - Chính hãng', 9, 4, 1390000, 'Realme Watch 2.png', 'CPU: Apollo 3.5\r\nDung lượng pin: 160 mAh\r\nKích thước: 36,5 mm x 11,8 mm x 2,56 mm\r\nTrọng lượng: 31 gram', 0, '2019-12-04 04:52:50', 0),
(12, 'Đồng hồ thông minh Realme Band 2 - Chính hãng', 9, 4, 990000, 'realme-band-2-4.png', 'Dung lượng pin: 204mAh\r\nTrọng lượng: 27.3g\r\nKích thước: 259.8 x 24.6 x 12.1mm, Bề rộng dây: 18mm', 0, '2018-01-24 07:29:48', 0),
(13, 'Đồng hồ thông minh Samsung Galaxy Watch Active 2 44mm Aluminum (SM-R820) - Chính hãng', 2, 4, 2690000, 'image-removebg-preview (16).png', 'CPU: Exynos 9110\r\nDung lượng pin: 340 mAh\r\nKích thước: Đang cập nhật\r\nTrọng lượng: 42 gram', 0, '2019-12-10 04:52:50', 0),
(14, 'Laptop Macbook Pro 16', 1, 2, 62990000, 'gray-macbook-2021-1.png', '<p>16\" 2021 - M1 Pro 16 Core GPU/512GB <span style=\"font-size: 1rem;\">Thiết kế đẹp, sang trọng, gọn nhẹ dễ dàng mang theo sử dụng Bộ vi xử lý Apple M1 cho hiệu năng mạnh mẽ, mượt mà Màn hình Retina 13 inch hiển thị hình ảnh sắc nét chân thực Thời lượng pin vượt trội, lướt web liên tục 15 giờ, xem video 18 giờ GPU tích hợp mạnh mẽ, xử lý mượt mà các phần mềm đồ họa Mở khóa nhanh với một chạm, bảo vệ an toàn dữ liệu trên máy Trải nghiệm gõ phím tốt nhất với bàn phím Magic Keyboard Bộ tản nhiệt với những lá nhôm tản nhiệt tốt, hoạt động êm ái</span></p>', 0, '2021-03-18 07:39:20', 15),
(15, 'Máy tính bảng Samsung Galaxy Tab A7 Lite (T225) - Chính hãng', 2, 3, 4150000, 'xam.png', 'Hệ điều hành: Android 11\r\nChip xử lý (CPU): MediaTek MT8768T 8 nhân\r\nTốc độ CPU: 4 nhân 2.3 GHz & 4 nhân 1.8 GHz\r\nChip đồ hoạ (GPU): IMG PowerVR GE8320\r\nRAM: 3 GB\r\nBộ nhớ trong: 32 GB\r\nBộ nhớ còn lại (khả dụng): 22 GB\r\nWiFi: Dual-band, Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Wi-Fi hotspot\r\nBluetooth: A2DP, LE, v5.0', 0, '2017-02-08 07:39:20', 0),
(16, 'Vòng đeo tay thông minh Huawei Band 6 - Chính hãng', 7, 4, 1250000, 'image-removebg-preview-1.png', 'Dung lượng pin: 180 mAh\r\nTrọng lượng: 18 g\r\nKích thước: 43 mm x 25.4 mm x 11.45 mm', 0, '2019-01-09 07:51:11', 0),
(17, 'Điện thoại di động Xiaomi Redmi 9C - 4GB/128GB - Chính hãng DGW', 4, 1, 3190000, '9c212.png', 'Công nghệ màn hình: IPS LCD\r\nĐộ phân giải: HD+ (720 x 1600 Pixels), Chính 13 MP & Phụ 2 MP, 2 MP, 5 MP\r\nMàn hình rộng: 6.53\"\r\nHệ điều hành: Android 10\r\nChip xử lý (CPU): MediaTek Helio G35 8 nhân\r\nBộ nhớ trong (ROM): 128 GB\r\nRAM: 4 GB\r\nMạng di động: Hỗ trợ 4G\r\nSố khe sim: 2 Nano SIM\r\nTrọng lượng: 196 g\r\nDung lượng pin: 5000 mAh', 0, '2019-04-22 07:51:11', 0),
(18, 'Oppo A12 - 3GB/32GB - Chính hãng', 6, 1, 2550000, 'A12 (8).png', 'Công nghệ màn hình: IPS LCD\r\nĐộ phân giải: HD+ (720 x 1520 Pixels), Chính 13 MP & Phụ 2 MP, 5 MP\r\nMàn hình rộng: 6.22\"\r\nBộ nhớ trong (ROM): 32 GB\r\nRAM: 3 GB\r\nMạng di động: Hỗ trợ 4G\r\nSố khe sim: 2 Nano SIM\r\nTrọng lượng: 165 g\r\nDung lượng pin: 4230 mAh', 0, '2021-04-13 07:51:11', 0),
(19, 'motorola edge (2021)', 8, 1, 13615160, '160766-800-auto.png', 'Color: Nebula Blue\r\nStorage: 256GB\r\nULTRA HIGH-RES CAMERA.\r\nULTRA-SMOOTH DISPLAY.\r\nCapture your most true-to-life photos ever with a 108 MP high-resolution sensor.', 1, '2021-06-16 07:51:11', 0),
(20, 'Laptop MacBook Air M1 2020 13 inch 256GB MGN63SA/A Xám', 1, 2, 27490000, '10048356-laptop-macbook-air-m1-13-3-inch-256gb-mgn63sa-a-xam-1.jpg', 'Thiết kế đẹp, sang trọng, gọn nhẹ dễ dàng mang theo sử dụng\r\nBộ vi xử lý Apple M1 cho hiệu năng mạnh mẽ, mượt mà\r\nMàn hình Retina 13 inch hiển thị hình ảnh sắc nét chân thực\r\nThời lượng pin vượt trội, lướt web liên tục 15 giờ, xem video 18 giờ\r\nGPU tích hợp mạnh mẽ, xử lý mượt mà các phần mềm đồ họa\r\nMở khóa nhanh với một chạm, bảo vệ an toàn dữ liệu trên máy\r\nTrải nghiệm gõ phím tốt nhất với bàn phím Magic Keyboard \r\nBộ tản nhiệt với những lá nhôm tản nhiệt tốt, hoạt động êm ái', 0, '2020-07-30 05:54:22', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Đồng hồ thông minh'),
(5, 'Máy in');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'editor'),
(4, 'menber');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'lehieu', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'tranphan', '2e74aaf0cc4f180c2476f2026a000fc5'),
(4, 'beoanh', 'e0dc2f15714f8a122a4e7ba090a0edab'),
(5, 'caodai', '4297f44b13955235245b2497399d7a93');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
