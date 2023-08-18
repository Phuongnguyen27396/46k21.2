-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 18, 2023 lúc 01:08 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `noidung` varchar(10000) NOT NULL,
  `stt` int(255) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `tieude`, `noidung`, `stt`, `hinhanh`, `link`) VALUES
(64, 'Sun Cosmo Residence Da Nang: Giá trị kết nối tạo nên sự khác biệt', '', 1, '1692356159_4246_228221946_550497939486560_5559808499518523630_n.jpg', 'https://cafeland.vn/tin-tuc/sun-cosmo-residence-da-nang-gia-tri-ket-noi-tao-nen-su-khac-biet-121637.html'),
(65, 'Đà Nẵng tìm nhà thầu xây đường ven biển gần 1.000 tỉ đồng chạy vào cảng Liên Chiểu', '', 2, '1692356191_duong-ven-bien-da-nang.jpg', 'https://cafeland.vn/tin-tuc/da-nang-tim-nha-thau-xay-duong-ven-bien-gan-1000-ti-dong-chay-vao-cang-lien-chieu-121696.html'),
(66, 'Tháng 10/2023 sẽ khởi công cao tốc 2.100 tỉ đồng qua Đà Nẵng', '', 3, '1692356210_la-son-hoa-lien-2.jpg', 'https://cafeland.vn/tin-tuc/thang-102023-se-khoi-cong-cao-toc-2100-ti-dong-qua-da-nang-121789.html'),
(67, 'Thấy gì từ làn sóng rao bán khách sạn tại Đà Nẵng?', '', 4, '1692356238_thay-gi-tu-lan-song-rao-ban-khach-san-tai-da-nang-1691232395.jpg', 'https://cafeland.vn/tin-tuc/thay-gi-tu-lan-song-rao-ban-khach-san-tai-da-nang-121873.html');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `sonha` varchar(100) NOT NULL,
  `duong` varchar(100) NOT NULL,
  `xa` varchar(100) NOT NULL,
  `huyen` varchar(100) NOT NULL,
  `ngang` varchar(100) NOT NULL,
  `dai` varchar(100) NOT NULL,
  `dientich` varchar(100) NOT NULL,
  `dorong` varchar(11) NOT NULL,
  `huong` varchar(100) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `bds` varchar(50) NOT NULL,
  `vitri` varchar(100) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `dang` varchar(50) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `ghichu` varchar(100) NOT NULL,
  `sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `sonha`, `duong`, `xa`, `huyen`, `ngang`, `dai`, `dientich`, `dorong`, `huong`, `gia`, `bds`, `vitri`, `ten`, `dang`, `hinhanh`, `ghichu`, `sdt`) VALUES
(186, 'tờ 82 thửa 263', 'Hoàng Thị Loan', 'P.Hoà Minh', '0', '5', '20', '100', '42m', 'Nam', '6990000000', '0', 'Mặt Tiền', 'CN Trung Hậu', '10/07/2023', '1692355567_c.jpg', '', '0256985123'),
(188, '	tờ 43 thửa 224', 'Bùi Tấn Diên', 'P.Hoà Hải', '0', '20', '50', '100', '60', 'Tây', '41000000000', '0', 'Mặt Tiền', 'C Quyên', '12/7/2023', '1692355750_h.jpg', '', '0258746326'),
(189, '07', 'An Hải 12', 'P.An Hải Bắc', '0', '50', '100', '150', '60', 'Bắc', '50000000000', '0', '2 Mặt Tiền', 'A Hoà', '15/8/2023', '1692355678_j.jpg', '', '0785123642'),
(191, '293', 'Nguyễn Phước Lan', 'P.Hoà Cường Bắc', '0', '20', '70', '140', '68', 'Đông Nam', '15000000000', '0', 'Mặt Tiền', 'C Thoa', '20/4/2023', '1692355930_e.jpeg', '', '0856957412'),
(192, '11', 'Thanh Long', 'P.Hoà Cường Bắc', '0', '50', '80', '140', '62', 'Nam', '35000000000', '0', 'Mặt Tiền', 'C ÁNH', '14/01/2023', '1692355772_b.jpeg', '', '0125643953'),
(193, 'Lô 17 khu 22', 'Trườngng Sa', 'P.Hoà Hải', '0', '50', '80', '140', '92', 'Bắc', '9000000000', '0', 'Mặt Tiền', 'C Mây', '02/7/2023', '1692355511_a.jpg', '', '0965842365'),
(194, '15', 'An Hải11', 'P.Hoà Cường Bắc', '0', '20', '80', '160', '80', 'Nam', '12000000000', '0', 'Mặt Tiền', 'C Thoa', '20/8/2023', '1692355801_g.jpg', '', '0978562145'),
(195, '08', 'Nguyễn Phước Lan', 'P.An Hải Bắc', '0', '51', '96', '186', '52', 'Tây Nam', '14000000000', '0', 'Hẻm', 'A Trí', '15/8/2023', '1692355955_e.jpeg', '', '0854632156'),
(196, 'k520/32', 'Lê Văn Hiến', 'Khuê Mỹ', '0', '25', '96', '158', '63', 'Tây', '16000000000', '0', 'Hẻm', 'A Trung', '12/2/2023', '1692355882_f.jpg', '', '0965874521'),
(198, '55', 'Ngũ Hành Sơn', 'P.Mỹ An', '0', '14', '85', '1190', '85', 'Đông Nam', '43000000000', '0', '3 Mặt Tiền', 'C. Minh', '15/8/2023', '1692355713_l.jpg', '', '0852146325'),
(199, '62', 'Ngô Thị Nhậm', 'Thuận Phước', '0', '52', '14', '728', '95', 'Nam', '19000000000', '0', 'Hẻm', 'CN Trung Hậu', '14/8/2023', '1692355848_f.jpg', '', '0913020092'),
(200, '92', 'Nguyễn Văn Linh', 'P.Hoà Cường Bắc', '0', '52', '96', '4992', '425', 'Bắc', '52000000000', '0', 'Mặt tiền', 'C Quyên', '12/7/2023', '1692355651_g.jpg', '', '0987542698'),
(202, '966 ', 'Ngô Quyền', 'P.An Hải', '0', '10', '14', '452', '461', 'Tây Nam', '7000000000', '0', 'Hẻm', 'A. Quang', '08/3/2023', '1692355534_b.jpeg', '', '0862451365'),
(204, '669', 'Trường Chinh', 'Hòa Phát', '0', '56', '71', '1523', '421', 'Bắc', '53000000000', '0', '3 Mặt Tiền', 'A. Mỹ', '21/4/2023', '1692355622_f.jpg', '', '08547953625'),
(205, '523', 'Trần Cao Vân', 'Xuân Hà', '0', '52', '61', '1542', '852', 'Tây Nam', '65000000000', '0', '2 mặt tiền', 'C Quyên', '02/7/2023', '1692355594_e.jpeg', '', '0987568969');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thanhvien`
--

CREATE TABLE `tbl_thanhvien` (
  `id_thanhvien` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vaitro` varchar(50) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `stt` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thanhvien`
--

INSERT INTO `tbl_thanhvien` (`id_thanhvien`, `hoten`, `email`, `vaitro`, `tinhtrang`, `stt`) VALUES
(107, '	Võ Yến Vy', '	Vyheo512@gmail.com', '58 Phạm Cự Lượng', 1, 871254621),
(108, 'Trần Vương Linh', '	linh25789@gmail.com', '	18 Thanh Long', 2, 582463251),
(109, '	Trần Thuý Hiền', '	Trần Thuý Hiền', '	Trần Thuý Hiền', 0, 15478526),
(110, '	Phan Thị Oanh', '	oanh452@gmail.com', '	82 Trần Cao Vân', 3, 89542361),
(111, '	Phan Thị Hồng', '	hong201220@gmai.com', '	12 Nguyễn Tất Thành', 2, 895632145),
(112, '	Phan Như Vy', '	vyhihai@gmail.com', '100 Nguyễn Văn Linh', 2, 95213642);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_thanhvien`
--
ALTER TABLE `tbl_thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT cho bảng `tbl_thanhvien`
--
ALTER TABLE `tbl_thanhvien`
  MODIFY `id_thanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
