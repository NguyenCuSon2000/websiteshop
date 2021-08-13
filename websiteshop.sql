-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 
-- Thời gian đã tạo: Th8 13, 2021 lúc 12:17 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websiteshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `image`, `price`, `origin`) VALUES
(1, 'PC Gaming i3 10100F | GTX 1050Ti | RAM 8GB | SSD 120GB', 'PC Gaming abc', 'Mainboard: ASROCK H470M-HDV CPU: CPU Intel Core i3-10100F (3.7GHz up to 4.3Ghz, 4 nhân 8 luồng, 6MB Cache, 65W) - Socket LGA 1200 VGA: Colorful GeForce GTX 1050Ti NE 4G-V RAM: DDR4 Apacer RP World Wide 8GB 2666MHz', '38777_02mini.png', 2000, 'America '),
(3, 'PC Gaming Zotac MEK1-S23060 i7-8700/RTX 3060/RAM ', 'PC Gaming', 'Chip xử lý CPU: Intel Core  i7-8700 Bộ nhớ RAM: DDR4 16GB bus 2666MHz Ổ cứng: 240GB M.2 NVMe SSD + 1TB HDD Đồ họa: Card rời GeForce RTX 3060 12GB', '5296_1.png', 150, 'Italy'),
(4, 'PC Gaming CHAMPA Ryzen 5 5600X ', 'PC Gaming', 'CPU: AMD Ryzen 5 5600X (6 nhân/4.6GHz) Mainboard: Chipset B550 RAM: 16GB DDR4 3200MHz RGB (8GBx2) VGA: GeForce RTX 3060Ti GDDR6 8GB', '7302_pc_gaming_champa_ryzen_5_5600x_rtx_3060ti_2.jpg', 100, 'China'),
(5, 'PC Gaming i5 10400F', 'PC Gaming', 'Main: ASROCK B460M PRO4 (Intel B460, Socket 1200, m-ATX, 4 khe Ram DDR4) CPU: Intel Core i5-10400F (12M Cache, 2.90 GHz up to 4.30 GHz, 6C12T, Socket 1200, Comet Lake-S) VGA: Asus TUF GeForce RTX 3060 OC TUF-RTX3060-O12G-GAMING RAM: Apacer Panther Golden ', '6155_msi_mag_shield_110r.png', 85, 'Japan'),
(6, 'Surface Laptop 4 Ryzen 5 / 8GB / 256 GB / 13.5 inches Chính Hãng', 'Laptop', 'Sau Microsoft Surface Laptop 3 thì Surface laptop 4 cũng đã chính thức được ra mắt. Tuy thiết kế không có nhiều thay đổi nhưng người dùng sẽ cảm nhận được sự mạnh mẽ trong cấu hình cũng như dung lượng pin vô cùng ấn tượng. Chắc chắn, bạn sẽ thấy được nhiề', 'laptop-surface-4-01.jpg', 250, 'Singapo'),
(7, 'Laptop Dell Inspiron 15 3502', 'Laptop', 'Laptop Dell Inspiron 15 3502 mang đến một thiết kế nhẹ nhàng, giúp bạn dễ dàng di chuyển hơn kết hợp cùng sức mạnh vượt trội của bộ vi xử lý cùng bộ nhớ có dung lượng cao giúp cải thiện hiệu suất tối ưu.', 'laptop-dell-inspiron-15-3502-pent-2.jpg', 120, 'American'),
(8, 'Laptop ASUS Gaming F15 FX506LH-BQ046T', 'Laptop', 'Để được xướng tên trong hàng laptop dành cho game thủ, laptop Asus Gaming F15 FX506LH BQ046T đã phải trải qua rất nhiều cuộc thử nghiệm độ bền MIL-STD-810H. Trải qua các hoạt động thả rơi, rung lắc,.. thực hiện nâng cấp, hoàn thiện và cập nhật các tính nă', 'laptop-asus-gaming-f15-fx506lh-bq046t-4.jpg', 220, 'America'),
(9, 'Laptop MSI Modern 14 B10MW', 'Laptop', 'Laptop MSI Modern 14 B10MW là một trong những thiết kế của thương hiệu MSI. Đây có lẽ là dòng thương hiệu đã không còn xa lạ gì đối với những người dùng khi nằm trong Top 4 dòng laptop chất lượng nhất thế giới. Và với thiết kế siêu mỏng nhẹ laptop MSI Mod', 'laptop-msi-modern-14-b10mw-605vn-1.jpg', 230, 'Singapo'),
(10, 'PC Gaming-Máy tính chơi game PCAP PRO', 'PC Gaming', 'CPUI0100 - CPU Intel Core i5-10400 MAAS0193 - Mainboard ASUS TUF GAMING B460M-PLUS RAPN0001 x 2 - Ram PNY XLR8 Gaming 16GB (2x8GB) DDR4 3200MHz OCPN0002 - SSD PNY XLR8 Gaming CS3030 250GB NVMe M.2 2280 PCIe Gen 3.0 x4 VGAS0248 - VGA ASUS Dual GeForce RTX ', '34019_dsc09480.jpg', 450, 'America'),
(11, 'PC Gaming-Máy tính chơi game PCAP ELITE', 'PC Gaming', 'CPUI0099 - CPU Intel Core i5-10400F MAAS0193 - Mainboard ASUS TUF GAMING B460M-PLUS RAKT0086 x 2 - Ram Kingston HyperX Fury 16GB (2x8GB) DDR4 Bus 2666Mhz Black OCPN0002 - SSD PNY XLR8 Gaming CS3030 250GB NVMe M.2 2280 PCIe Gen 3.0 x4 VGAS0198 - VGA ASUS T', '34031_g562.jpg', 350, 'America'),
(12, 'PC Gaming-Máy tính chơi game PCAP Mini Pro', 'PC Gaming', 'CPUIT0122 - CPU Intel Core i7-11700 MAAS0256 - Mainboard ASUS ROG STRIX B560-I GAMING WIFI RAGK0079 - RAM G.Skill TRIDENT Z Neo RGB 32GB (2x16GB) DDR4 3600MHz OCSS0066 - SSD Samsung 980 PRO 500GB M.2 NVMe Gen4.0 x4 VGAS0268 - VGA ASUS DUAL GeForce RTX 306', '38777_02mini.png', 450, 'America'),
(13, 'Laptop ASUS VivoBook Flip TM420IA-EC155T', 'Laptop', 'Asus VivoBook Flip 14 TM420IA (EC155T) là dòng laptop với thiết kế gập 360 độ vô cùng độc đáo, có thể chuyển đổi nhanh chóng giữa laptop và tablet mang đến trải nghiệm tuyệt vời. Trở thành sự lựa chọn lý tưởng đối với bất kỳ ai yêu thích những mẫu laptop ', 'laptop-asus-vivobook-flip-14-tm420ia-ryzen-5-ram-4gb-ssd-256gb_5_.jpg', 140, 'Singapo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'abc', '123', 'Nguyen Van A', 'a@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
