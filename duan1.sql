-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2023 lúc 11:36 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ph39893_wd18321`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE IF NOT EXISTS `binhluan` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `noidung` varchar(255) NOT NULL,
    `iduser` int(10) NOT NULL,
    idpro int(10) NOT NULL,
    ngaybinhluan DATE,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'Sản phẩm rất đang trải nghiệm', 2, 1, '2023-09-22'),
(2, 'Sản phẩm rất tốt', 3, 1, '2023-09-22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Giày NIKE'),
(2, 'Giày ADIDAS'),
(3, 'Giày MIZUNO'),
(4, 'Giày PUMA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL,
  `sale` int(10),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `sale`) VALUES
(1, 'Nike Tiempo Legend 9 Academy ', 30000, 'sanpham1.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 100, 1,20),
(2, 'Nike React Phantom GX Pro TF ', 40000, 'sanpham2.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 10, 1,35),
(3, 'Nike Tiempo  ', 10000, 'sanpham3.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 99, 1,45),
(4, 'Adidas X Crazyfast 7TF ', 20000, 'sanpham4.jpg', 'Giày đá bóng sân cỏ tự nhiên', 14, 2,22),
(5, 'Adidas X Crazyfast 4TF', 13200, 'sanpham5.jpg', 'Giày đá bóng sân có tự nhiên  ', 12, 2,64),
(6, 'Adidas X Crazyfast 10TF', 40000, 'sanpham6.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 18, 2,44),
(7, 'Mizuno Monarcida Neo ', 43142, 'sanpham7.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 55, 3,33),
(8, 'Mizuno Monarcida Neo', 43274, 'sanpham8.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 19, 3,55),
(9, 'Puma Future 4.3 Netfit ', 95468, 'sanpham9.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 133,4,77),
(10, 'Puma Future 4.3 Netfit  ', 274324, 'sanpham10.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 1030, 4,53),
(11, 'Tiempo Legend 9 Academy ', 90000, 'sanpham11.jpg', 'Giày đá bóng sân cỏ nhân tạo ', 10330, 4,25);


-- Cấu trúc bảng cho bảng `taikhoan`


CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', '123456', 'admin1@gmail.com', 'Hà Nội ', '0826226209',1),
(2, 'minhthiet', '1221', 'minhthiet@gmail.com', 'Ha Nam', '081880892',0),
(3, 'Thanhdat', '12345', 'Thanhdat@gmail.com', 'PhuTho', '081880892',0);

-- --------------------------------------------------------


----------------------------------------------------



CREATE TABLE dia_chi (
  id INT PRIMARY KEY AUTO_INCREMENT,
  id_user INT,
  name NVARCHAR(255),
  tel NVARCHAR(20),
  email NVARCHAR(255),
  addressother NVARCHAR(255)
);


INSERT INTO dia_chi (id, id_user, name, tel, email, addressother)
VALUES 
  (1, 1, 'Nguyen Anh Tuan', '0987654321', 'tuan@gmail.com', '123/45 Duong Ba Trac'), 
  (2, 2, 'Le Thi Bich Phuong', '0123456789', 'phuong@gmail.com', '123/2 Le Duan'), 
  (3, 3, 'Tran Van Nam', '0909090909', 'nam@gmail.com', '456/3 Nguyen Trai');


CREATE TABLE giohang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idsp INT,
    id_user INT,
    name VARCHAR(255),
    price DECIMAL(10,2),
    hinh VARCHAR(255),
    mota TEXT,
    soluong INT,
    size VARCHAR(10),
    pricesale DECIMAL(10,2)
);


CREATE TABLE dathang (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT,
    name VARCHAR(255),
    tongtien DECIMAL(10, 2),
    address VARCHAR(255),
    ngaymua DATE,
    trangthai int,
    trangthaidon int,
    loaithanhtoan int
);

  CREATE TABLE chitietdonhang (
      idsp INT,
      iddh INT,
      name VARCHAR(255),
      price DECIMAL(10,2),
      soluong INT,
      hinh VARCHAR(255),
      size VARCHAR(10),
      pricesale DECIMAL(10,2),
      trangthai int,
      FOREIGN KEY (iddh) REFERENCES dathang(id)
  );

CREATE TABLE product_sizes (
    idsp INT,
    size38 INT,
    size39 INT,
    size40 INT,
    size41 INT,
    size42 INT,
    FOREIGN KEY (idsp) REFERENCES sanpham(id)
);

INSERT INTO product_sizes (idsp, size38, size39, size40, size41, size42) 
VALUES 
(1, 10, 2, 20, 25, 30),
(2, 11, 16, 0, 26, 31),
(3, 12, 17, 22, 27, 32),
(4, 13, 0, 23, 28, 33),
(5, 14, 19, 24, 29, 34),
(6, 15, 20, 0, 0, 35),
(7, 16, 21, 26, 31, 36),
(8, 17,4, 27, 32, 37),
(9, 18, 23, 28, 33, 38),
(10, 19, 24, 29, 34, 39),
(11, 20, 25, 30, 35, 40);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;