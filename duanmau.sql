-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2022 lúc 01:40 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `name_cate` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `status`, `name_cate`) VALUES
(18, 0, 'New Product');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `position` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `first_name`, `last_name`, `email`, `pass`, `position`) VALUES
(1, 'Đặng', 'Hiep', 'hiepdtps25254@fpt.edu.vn', '123', 1),
(17, 'Hồ', 'Minh thành2', 'peghost9@gmail', '123', 0),
(28, '1', 'asd', 'assd', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_pro` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(300) NOT NULL,
  `name_cate` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name_pro`, `price`, `img`, `name_cate`, `status`) VALUES
(54, 'Sacrificial Chair Design', 260, 'https://cdn.shopify.com/s/files/1/1573/5553/products/14-1_360x.jpg?v=1601694510', 'New Product', 1),
(55, 'Sacrificial Chair Design', 1145, 'https://cdn.shopify.com/s/files/1/1573/5553/products/5_360x.jpg?v=1509980327', 'New Product', 0),
(57, '', 150, 'https://cdn.shopify.com/s/files/1/1573/5553/products/12_360x.jpg?v=1509980861', 'New Product', 1),
(59, '', 137, 'https://cdn.shopify.com/s/files/1/1573/5553/products/1_af8ffcd4-baeb-4d08-b738-4bf02973df0a_360x.jpg?v=1509980329', 'New Product', 1),
(61, '', 11.29, 'https://cdn.shopify.com/s/files/1/1573/5553/products/13-1_360x.jpg?v=1601694813', 'New Product', 1),
(62, '', 160, 'https://cdn.shopify.com/s/files/1/1573/5553/products/11_63e20b3b-21f2-49ff-93f8-2179551f43e0_360x.jpg?v=1591760332', 'New Product', 1),
(63, '', 132, 'https://cdn.shopify.com/s/files/1/1573/5553/products/13_1c04d432-a1ba-4e9b-88a1-b9c3aecbab9d_360x.jpg?v=1591760416', 'New Product', 1),
(64, '', 0, 'https://product.hstatic.net/1000280685/product/xamdam__068f423aa6234627a19934369765ce87_large.png', 'New Product', 1),
(65, '', 0, 'https://file.hstatic.net/1000280685/collection/2_16b84acbefe24232a46fbf952a107bbd_medium.jpg', 'New Product', 1),
(66, '', 0, 'https://file.hstatic.net/1000280685/collection/combo4_2c3f226c8d194979804f74444b5e061e_grande_f8b6dd79863643ed94d68b7cfedd092f_medium.jpg\r\n', 'New Product', 1),
(67, '', 0, 'https://file.hstatic.net/1000280685/collection/file_xavierplus_chanden_matden_b27602820e3d49418f1efec60e4bf30f_grande_57baf13a6c884a819c70a0984808f65d_medium.png', 'New Product', 1),
(68, '', 0, 'https://file.hstatic.net/1000280685/collection/ban-goc-den-30-do_1f90a4e9e0f14c26b9def7a7220de6c6_medium.png', 'New Product', 1),
(69, '', 0, 'https://file.hstatic.net/1000280685/collection/chin_s__d_244149290f304a1b8b60f4cae8918022_medium.png', 'New Product', 1),
(70, '', 0, 'https://file.hstatic.net/1000280685/collection/p1_b9a19b1533f94e95b2fbde4393a4e964_medium.png', 'New Product', 1),
(71, '', 0, 'https://file.hstatic.net/1000280685/collection/a_d_1_27bb90719bcd4878b6ce5cbfafcbc5bc_medium.png', 'New Product', 1),
(72, '', 0, 'https://file.hstatic.net/1000280685/collection/sufficent_756097ed29fb4d55a2ab4770d231874e_medium.jpg', 'New Product', 1),
(73, '', 0, 'https://file.hstatic.net/1000280685/collection/1_392b63f270c94fa68f7a052a498b1f10_medium.jpg', 'New Product', 1),
(74, '', 0, 'https://file.hstatic.net/1000280685/collection/qino_d_1_89d79e2a25f344a2ac8f3fce0050e80b_medium.jpg', 'New Product', 1),
(75, '', 0, 'https://file.hstatic.net/1000280685/collection/d_2_d7371de4ff0c4dd796edc4e91791418f_medium.jpg', 'New Product', 1),
(76, '', 0, 'https://file.hstatic.net/1000280685/collection/tuki_30_do_fe5156c737d74584b91f7362436ba9b0_medium.jpg', 'New Product', 1),
(77, '', 0, 'https://file.hstatic.net/1000280685/collection/p12_1d4172b3ddc64d77942c05ede79ed0cb_medium.png', 'New Product', 1),
(78, '', 0, 'https://file.hstatic.net/1000280685/collection/a071_01_6d94d6aade12437a9fdfde2daf92a1ce_medium.jpg', 'New Product', 1),
(79, '', 0, 'https://file.hstatic.net/1000280685/collection/p1_21425c04ee1f41608a49c9eb88cedebe_medium.png', 'New Product', 1),
(80, '', 0, 'https://file.hstatic.net/1000280685/collection/xam_ke-febri-18-04_8d75492079b74dcea528d50650e3fb0f_medium.jpg', 'New Product', 1),
(81, '', 0, 'https://file.hstatic.net/1000280685/collection/p1_fb0231d995604c51a951c4a04e9eb45e_medium.png', 'New Product', 1),
(82, '', 0, 'https://file.hstatic.net/1000280685/collection/p1_9a8ae3aaaa5b4f65ab79d58c1cd355aa_medium.png', 'New Product', 1),
(83, 'asd', 0, 'https://file.hstatic.net/1000280685/collection/p1-12_4300479cb1c54a918799045264ecb490_medium.png', 'New Product', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_cate` (`name_cate`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name_cate` (`name_cate`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`name_cate`) REFERENCES `category` (`name_cate`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
