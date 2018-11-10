-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2018 lúc 12:46 PM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cdio_travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `tenblog` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_nho` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_lon` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayviet` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitet_dattour`
--

CREATE TABLE `chitet_dattour` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_dattour` int(10) DEFAULT NULL,
  `id_tour` int(10) DEFAULT NULL,
  `soluong_nguoi` int(11) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dattour`
--

CREATE TABLE `dattour` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kh` int(10) DEFAULT NULL,
  `ngay_dat` date DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `thanhtoan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `ghichu` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dattour`
--

INSERT INTO `dattour` (`id`, `id_kh`, `ngay_dat`, `tongtien`, `thanhtoan`, `ghichu`, `created_at`, `updated_at`) VALUES
(26, NULL, '2018-11-07', 12345, NULL, NULL, '2018-11-07 16:28:33', '2018-11-07 16:28:33'),
(27, NULL, '2018-11-07', NULL, NULL, NULL, '2018-11-07 16:32:50', '2018-11-07 16:32:50'),
(28, NULL, '2018-11-07', NULL, NULL, NULL, '2018-11-07 16:33:07', '2018-11-07 16:33:07'),
(29, NULL, '2018-11-07', 8, NULL, NULL, '2018-11-07 16:34:05', '2018-11-07 16:34:05'),
(30, NULL, '2018-11-08', NULL, NULL, NULL, '2018-11-08 02:29:43', '2018-11-08 02:29:43'),
(31, NULL, '2018-11-08', NULL, NULL, NULL, '2018-11-08 02:37:07', '2018-11-08 02:37:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `ten_kh`, `gioitinh`, `email`, `diachi`, `sdt`, `ghichu`, `created_at`, `updated_at`) VALUES
(4, 'Việt', 'nam', 'tonquocviet159753@gmail.com', '232 Hoàng Diệu Đà Nẵng, 232/11', '1234567', 'ko', '2018-11-07 10:16:41', '2018-11-07 10:16:41'),
(5, 'Việt', 'nam', 'tonquocviet159753@gmail.com', '232 Hoàng Diệu Đà Nẵng, 232/11', '1234567', 'ko', '2018-11-07 10:17:14', '2018-11-07 10:17:14'),
(6, 'sadsad', 'nam', 'tonquocviet159753@gmail.com', '232 Hoàng Diệu Đà Nẵng, 232/11', '1234567', 'sdsad', '2018-11-07 10:25:38', '2018-11-07 10:25:38'),
(7, 'sadsad', 'nam', 'tonquocviet159753@gmail.com', '232 Hoàng Diệu Đà Nẵng, 232/11', '1234567qq', 'ko', '2018-11-07 10:27:04', '2018-11-07 10:27:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_mien` int(10) UNSIGNED DEFAULT NULL,
  `ten_ks` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieuchuan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`id`, `id_mien`, `ten_ks`, `diachi`, `tieuchuan`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 'Khách Sạn Nesta Hà Nội', '30 Nguyễn Thượng Hiền, Hai Bà Trưng, Hà Nội', '05 sao', NULL, '2018-10-28 16:02:40', '2018-11-02 13:31:47'),
(2, 1, 'Khách Sạn London Hanoi', 'ngõ 45, đường Trần Thái Tông, quận Cầu Giấy, Hà Nội, Việt Nam, Cầu Giấy, Hà Nội', '04 sao', NULL, '2018-10-28 16:03:26', '2018-11-02 13:31:41'),
(5, 1, 'Khách Sạn New Era Hotel & Villa', '112 Nguyễn Khánh Toàn, Cầu Giấy, Hà Nội, Cầu Giấy, Hà Nội, Cầu Giấy, Hà Nội', '03 Sao', NULL, '2018-10-30 04:43:31', '2018-11-02 13:30:28'),
(12, 2, 'Khách Sạn Lavender Riverside', '198, 2 Tháng 9, Hoà Cường Bắc, Hải Châu, Đà Nẵng', '05 Sao', NULL, '2018-10-30 05:48:30', '2018-11-02 13:31:24'),
(13, 2, 'Boutique Hotels Cocobay Đà Nẵng', 'Đường Trường Sa, Ngũ Hành Sơn, Đà Nẵng, Ngũ Hành Sơn, Đà Nẵng', '05 Sao', NULL, '2018-10-30 12:24:21', '2018-11-02 13:32:11'),
(14, 2, 'Khách Sạn Hilary', '128 Hồ Nghinh - Sơn Trà - TP Đà Nẵng, Sơn Trà, Đà Nẵng', '04 Sao', NULL, '2018-11-02 13:32:36', '2018-11-02 13:32:36'),
(15, 2, 'Khách Sạn Aria Đà Nẵng', '134 - 136 - 138 Trần Bạch Đằng, P. Mỹ An, Ngũ Hành Sơn, Đà Nẵng', '04 Sao', NULL, '2018-11-02 13:32:59', '2018-11-02 13:32:59'),
(16, 2, 'Khách Sạn Sunrise Ocean Đà Nẵng', '32 Hà Chương , Phường Phước Mỹ, Sơn Trà, Đà Nẵng, Sơn Trà, Đà Nẵng, Sơn Trà, Đà Nẵng', '05 Sao', NULL, '2018-11-02 13:33:19', '2018-11-02 13:33:19'),
(17, 3, 'Khách Sạn Rosa Hotel & Spa', '55 Thủ Khoa Huân, Phường Bến Thành, Quận 1, Hồ Chí Minh', '04 Sao', NULL, '2018-11-02 13:56:55', '2018-11-02 13:56:55'),
(18, 3, 'Khách Sạn Palace Saigon', '56 - 66 Nguyễn Huệ, Quận 1, Hồ Chí Minh', '05 Sao', NULL, '2018-11-02 13:57:27', '2018-11-02 13:57:27'),
(19, 3, 'Khách Sạn Cititel Parkview Sài Gòn', '51-55 Cách Mạng Tháng 8, Phường Bến Thành, Quận 1, Hồ Chí Minh', '05 Sao', NULL, '2018-11-02 13:57:53', '2018-11-02 13:57:53'),
(20, 3, 'Khách Sạn Tân Sơn Nhất Sài Gòn', '202 Hoàng Văn Thụ, phường 9, Phú Nhuận, Hồ Chí Minh', '04 Sao', NULL, '2018-11-02 13:58:11', '2018-11-02 13:58:11'),
(21, 3, 'Victory Sai Gon Hotel', '141 Nam Kỳ Khởi Nghĩa ( 14 Võ Văn Tần - Mặt sau ), Quận 3, Hồ Chí Minh', '03 Sao', NULL, '2018-11-02 13:59:01', '2018-11-02 13:59:01'),
(22, 3, 'Montana Resort Phú Quốc', 'tổ 7 ấp suối Lớn, xã Dương Tơ, Huyện Phú Quốc, Tỉnh Kiên Giang', '04 Sao', NULL, '2018-11-02 14:44:40', '2018-11-02 14:44:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_lienhe` date DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieude` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mien_khachsan`
--

CREATE TABLE `mien_khachsan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_mien` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mien_khachsan`
--

INSERT INTO `mien_khachsan` (`id`, `ten_mien`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'Miền Bắc', 'Gồm 25 tỉnh thành phố', '2018-10-28 14:14:19', '2018-10-28 14:14:19'),
(2, 'Miền Trung', '<p>Gồm 19 tỉnh thành phố</p>', '2018-10-28 14:14:56', '2018-10-28 16:52:25'),
(3, 'Miền Nam', 'Gồm 19 tỉnh thành phố', '2018-10-28 14:16:32', '2018-10-28 14:16:32'),
(6, 'Miền Tây', '<p>4352435sà</p>', '2018-10-28 16:48:55', '2018-10-28 16:52:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mien_tour`
--

CREATE TABLE `mien_tour` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_mien` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mien_tour`
--

INSERT INTO `mien_tour` (`id`, `ten_mien`, `mota`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'Miền Bắc', '<p>a</p>', 'by7v_mienbac.jpg', NULL, '2018-10-30 16:02:53'),
(2, 'Miền Trung', '<p>b</p>', '88pv_mientrung.jpg', NULL, '2018-10-30 16:05:43'),
(3, 'Miền Nam', '<p>c</p>', 'bndW_miennam.jpg', NULL, '2018-10-30 16:05:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(10) UNSIGNED NOT NULL,
  `tentour` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_mien` int(10) UNSIGNED DEFAULT NULL,
  `ngay_khoihanh` date DEFAULT NULL,
  `ngay_ketthuc` date DEFAULT NULL,
  `thoigian_tour` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem_khoihanh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem_den` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phuongtien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_ks` int(10) DEFAULT NULL,
  `ten_ks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `soluong_nguoi` int(11) DEFAULT NULL COMMENT 'số lượng người cho phép trong 1 tour',
  `gia` float DEFAULT NULL COMMENT 'giá gốc',
  `gia_km` float DEFAULT NULL COMMENT 'giá khuyến mãi',
  `noibat` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `tentour`, `id_mien`, `ngay_khoihanh`, `ngay_ketthuc`, `thoigian_tour`, `diem_khoihanh`, `diem_den`, `phuongtien`, `id_ks`, `ten_ks`, `hinh_1`, `hinh_2`, `hinh_3`, `noidung`, `soluong_nguoi`, `gia`, `gia_km`, `noibat`, `created_at`, `updated_at`) VALUES
(2, 'Tour Du Lịch Sapa', 1, '2018-11-02', '2018-11-05', '3 ngày 2 đêm', 'Hà Nội', 'SaPa - Lào Cai', 'Ô tô', 2, NULL, 'CGeE_dasd.jpg', 'PDm3_du-lich-sapa.jpg', 'Lyuf_2489.jpg', '<p><span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 1: HÀ NỘI – SAPA – LAO CHẢI –TẢ VAN ( Ăn Trưa, tối)</strong></span><br />\r\n<br />\r\n<strong>Sáng: 6h30</strong><span style=\"font-family:open sans,sans-serif\">&nbsp; Xe và hướng dẫn viên của công ty đón quý khách tại điểm hẹn khởi hành đi</span><strong>&nbsp;Lào Cai</strong><span style=\"font-family:open sans,sans-serif\">, bắt đầu chuyến du lịch Sapa - Lao Chải - Cát Cát - Hàm Rồng trong 3 ngày 2 đêm, chạy theo đường cao tốc Nội Bài – Lào Cai dài 245Km với chưa đầy 5h đồng hồ. Quý khách có cơ hội ngắm phong cảnh tuyệt đẹp trên cung đường này.&nbsp;</span><br />\r\n<br />\r\n<strong>12h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đưa du khách đến&nbsp;</span><strong>Sapa:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách ăn trưa tai sapa sau đó Đoàn tiếp tục hành trình thăm quan&nbsp;</span><br />\r\n<br />\r\n<strong>13h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Du khách bắt đầu hành trình 4h đi bộ thăm</span><strong>&nbsp;Lao Chải - Tả Van</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;và&nbsp;</span><strong>Giang Tà chải</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;, tìm hiểu cuộc sống của đồng bào các dân tộc thiểu số, chiêm ngưỡng khung cảnh thiên nhiên hùng vĩ với những thửa ruộng bậc thang tầng tầng lớp lớp. Thăm bãi đá cổ Sapa với những tảng đá to – nhỏ khắc nhiều hình ảnh, hoa văn độc đáo của người xưa;….Thăm quan&nbsp;</span><strong>Bản Giang Tà Chải.</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;&nbsp;</span><br />\r\n<br />\r\n<strong>Chiều</strong><span style=\"font-family:open sans,sans-serif\">: Quý khách về</span><strong>&nbsp;Sapa</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;nghỉ ngơi, ăn tối.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Quý khách tự do khám phá&nbsp;</span><strong>Sapa</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;về đêm. Nghỉ ngơi tại&nbsp;</span><strong>khách sạn.</strong><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 2: CÁT CÁT – HÀM RỒNG&nbsp; ( Ăn&nbsp; Sáng ,Trưa, tối)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Sau khi ăn sáng, thưởng thức vẻ đẹp của&nbsp;</span><strong>Sapa</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Hướng dẫn viên đón khách thăm quan khu du lịch&nbsp;</span><strong>Hàm Rồng</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;với khung cảnh hoang sơ, kỳ vĩ; thăm vườn lan Đông Dương với đủ loại, muôn sắc màu; đầu Rồng Thạch Lâm kì vĩ, vượt qua Cổng trời 1, Cổng trời 2, du khách sẽ được đặt chân đến nơi cao nhất của&nbsp;</span><strong>Hàm Rồng</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;đó là</span><strong>&nbsp;sân Mây</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;- nơi giao thoa của đất trời, ngắm toàn cảnh Sapa từ trên cao,…</span><br />\r\n<br />\r\n<strong>Trưa:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách ngủ&nbsp; trở về ăn trưa tại Nhà hàng.</span><br />\r\n<br />\r\n<strong>Chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đón quý khách ngủ bản trở về sapa nhập đoàn ngủ&nbsp; khách sạn để cùng đi thăm quan&nbsp;</span><strong>Bản Cát Cát</strong><span style=\"font-family:open sans,sans-serif\">. Đoàn đi bộ bắt đầu hành trình khám phá bản làng</span><strong>&nbsp;Cát Cát - Sin Chải</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;của người H’Mông - do người Pháp phát hiện và chọn nơi đây làm khu nghỉ dưỡng cho các quan chức từ đầu thế kỷ XX. Đến với bản Cát Cát, du khách sẽ được thăm bản làng Cát Cát, trạm thủy điện Cát Cát, thác nước Cát Cát, tìm hiểu văn hóa, phong tục độc đáo của người dân nơi đây với nghề truyền thống như dệt vải, chạm trổ bạc, rèn nông cụ, tục kéo vợ,...</span><br />\r\n<br />\r\n<strong>Tối:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách ăn tối. tự do khám phá thị trấn&nbsp;</span><strong>Sapa</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;về đêm. Nghỉ đêm tại</span><strong>&nbsp;Sapa</strong><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 3: SAPA – LÀO CAI – HÀ NỘI&nbsp; ( Ăn Sáng ,trưa)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách ăn sáng tại khách sạn và tự do thăm quan mua sắm tại&nbsp;</span><strong>Sapa.</strong><br />\r\n<br />\r\n<strong>Trưa: 12h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách trả phòng khách sạn.</span><br />\r\n<br />\r\n<strong>Chiều: 16h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đón Quý khách về tới&nbsp;</span><strong>Hà Nội.</strong><br />\r\n<br />\r\n<strong>20h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách về đến Hà nội, chia tay đoàn. Kết thúc chuyến du lịch Sapa - Lao Chải - Cát Cát - Hàm Rồng trong 3 ngày 2 đêm.</span><br />\r\n&nbsp;</p>', 20, 3000000, 2790000, 1, '2018-11-02 10:34:01', '2018-11-03 14:32:15'),
(5, 'Tour Du Lịch Hà Nội -  Lũng Cú', 1, '2018-11-02', '2018-11-06', '4 Ngày 3 Đêm', 'Hà Nội', 'Hà Giang', 'Ô tô', 5, NULL, '77jd_hg.jpg', 'CQ8U_3.jpg', 'IGlD_2.jpg', '<p><strong>Ngày 01: HÀ NỘI – TUYÊN QUANG – QUẢNG BẠ - YÊN MINH (Ăn trưa, tối)</strong><br />\r\n<br />\r\n<strong>Sáng: 05h15</strong>&nbsp;Xe và Hướng dẫn viên đón Quý khách tại điểm hẹn trong thành phố khởi hành đi&nbsp;<strong>Tuyên Quang</strong>&nbsp;(138 km), trên đường đoàn dừng chân nghỉ ngơi ăn sáng (tự túc), sau đó tiếp tục hành trình đi Hà Giang.<br />\r\n<br />\r\n<strong>12h30</strong>&nbsp;Đoàn nghỉ ăn trưa tại&nbsp;<strong>TP Hà Giang</strong><br />\r\n<br />\r\n<strong>Chiều: 13h45</strong>&nbsp;Quý khách lên xe tiếp tục đi&nbsp;<strong>Hà Giang,– Cổng Trời&nbsp; Quản Bạ - Núi Đôi Cô Tiên</strong>. Trên đường đi đoàn chinh phục và ngắm dốc Bắc Xum dài 7km, đứng từ trên đỉnh núi ngắm toàn cảnh cung đường của Dốc vô cũng kỳ vỹ. Sau đó đoàn tiếp tục khởi hành đi Quản Bạ, Quý khách có dịp chiêm ngưỡng Núi Đôi Cô Tiên - “tác phẩm nghệ thuật” của tạo hoá ban tặng cho vùng đất này, ngoài ra còn có dịp nghe kể về truyền thuyết của ngọn núi này, vô vùng hấp dẫn và thú vị. Sau đó Quý khách đến khách sạn nhận phòng nghỉ ngơi.&nbsp;<br />\r\n<br />\r\n<strong>Tối:</strong>&nbsp;Quý khách tự do dạo chơi thư giãn tại<strong>&nbsp;thị trấn Yên Minh</strong>&nbsp;về đêm, và thưởng thức các món đặc sản núi rừng Đông Bắc: thắng cố (thịt bò hầm), mèn mén (bánh bột ngô), cháo Ấu Tẩu… Nghỉ đêm tại khách sạn– Thị trấn Yên Minh.<br />\r\n<br />\r\n<strong>Ngày 02: YÊN MINH – ĐỒNG VĂN – LŨNG CÚ – MÈO VẠC (Ăn sáng, trưa, tối)</strong><br />\r\n<br />\r\n<strong>Sáng:</strong>&nbsp;Đoàn dùng bữa sáng. Trả phòng khách sạn, sau đó&nbsp; xe đưa đoàn đi tham quan&nbsp;<strong>Cao nguyên đá Đồng Văn.</strong>&nbsp;Trên đường đi, Đoàn ghé thăm thung lũng Sủng Là – được ví như một “Ốc Đảo” huyền bí. Sủng Là (huyện Đồng Văn, Hà Giang) được nhiều người biết và tìm đến qua bộ phim “Chuyện của Pao”. Từ một “ốc đảo” lọt thỏm trong thung lũng nằm gọn trong quần thể&nbsp;<strong>Cao nguyên đá Đồng Văn</strong>, Sủng Là đã trở thành một “đóa hồng” trong tim không ít kẻ xê dịch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đến đây Quý khách sẽ được thăm ngôi nhà cổ, đây là bối cảnh trong phim truyền hình nổi tiếng đạt giải Cánh Diều Vàng 2005 –&nbsp; Chuyện Của Pao. Ngắm thiên nhiên hùng vĩ nơi địa đầu tổ quốc. Một khung cảnh mà du khách đến một lần sẽ không thể nào quên được. Sau đó đoàn tiếp tục khởi hành đi Lũng Cú – điểm Cực Bắc của Tổ quốc – được coi là “nóc nhà của Việt Nam”, thăm Dinh Thự Họ Vương -&nbsp; nơi ở của vua Mèo Vương Chí Sình nổi tiếng về phong cảnh thiên nhiên, trái ngon, dược liệu Quý…<br />\r\n<br />\r\nĂn trưa tại&nbsp;<strong>thị trấn Đồng Văn.</strong><br />\r\n<br />\r\n<strong>Chiều:</strong>&nbsp;Tham quan chợ Đồng Văn Quý khách được tiếp xúc với các nền văn hoá của các dân tộc như:&nbsp;<strong>Mông Hoa, Lô Hoa, Lôlô, Choang</strong>… tham quan phố cổ Đồng Văn. Nhận phòng nghỉ ngơi.<br />\r\n<br />\r\n<strong>Tối:</strong>&nbsp;Quý khách ăn tối, tự do tản bộ, thư giãn giải trí tại&nbsp;<strong>thị trấn Đồng Văn</strong>. Nghỉ đêm tại&nbsp;<strong>Đồng Văn.</strong><br />\r\n<br />\r\n<strong>Ngày 03: ĐỒNG VĂN – HÀ GIANG (Ăn sáng, trưa, tối)</strong><br />\r\n<br />\r\n<strong>Sáng:</strong>&nbsp;Đoàn dùng bữa sáng. Quý khách lên xe chinh phục một trong&nbsp;<strong>“Tứ Đại Đỉnh Đèo”</strong>&nbsp;nổi tiếng nhất của Việt Nam – Đèo Mã Pí Lèng,có độ cao 2000m so với mực nước biển với những dốc, khúc cua tay áo quanh co..đem lại cho Quý khách một trải nghiệm vô cùng thú vị. Vượt qua 20km đường đèo, đoàn dừng chân chụp ảnh bên điểm dừng chân của đèo Mã Pì Lèng, từ đây nhìn xuống sông Nho Quế như một dải lụa uốn theo sườn đèo. Đoàn có dịp ghé qua Mèo Vạc, có dịp tham quan chợ Phiên Mèo Vạc.&nbsp;<br />\r\n<br />\r\n<strong>Trưa:</strong>&nbsp;Đoàn ăn trưa tại&nbsp;<strong>Yên Minh</strong><br />\r\n<br />\r\n<strong>Chiều:</strong>&nbsp;Về lại&nbsp;<strong>TP Hà Giang</strong>. Nhận phòng khách sạn nghỉ ngơi, ăn tối tại nhà hàng<br />\r\n<br />\r\n<strong>Ngày 04: HÀ GIANG – NẬM TY – HOÀNG SU PHÌ– HÀ NỘI (ăn sáng, trưa)</strong><br />\r\n<br />\r\n<strong>Sáng:</strong>&nbsp;Quý khách ăn sáng, trả phòng khách sạn khởi hành đi<strong>&nbsp;Hoàng Su Phì</strong>, Chiêm ngưỡng vẻ đẹp của ruộng bậc thang và sắc màu dân tộc của người Mán Tả Pan, Dao Áo Dài, Dao áo đỏ tại Thông Nguyên.&nbsp;<br />\r\n<br />\r\n<strong>Trưa:</strong>&nbsp;Đoàn ăn trưa tại&nbsp;<strong>Thông Nguyên.</strong>&nbsp;Sau khi ăn trưa Quý khách thăm quan những cánh đồng ruộng bậc thang trải dài trên sườn núi, thăm quan làng dân tộc Dao Áo Dài tại xã Nậm Ty – Hoàng Su Phì.&nbsp;<br />\r\n<br />\r\n<strong>Chiều: 21h00:</strong>&nbsp;Đoàn về đến&nbsp;<strong>Hà Nội,</strong>&nbsp;HDV chia tay Quý khách, kết thúc chương trình du lịch, hẹn gặp lại</p>', 25, 6000000, 0, 1, '2018-11-02 14:13:19', '2018-11-03 14:33:00'),
(6, 'Tour Du Lịch Đà Nẵng - Hạ Long - Ninh Bình', 1, '2018-11-11', '2018-11-14', '4 Ngày 3 Đêm', 'Đà Nẵng', 'Hạ Long', 'Ô tô,Du thuyền', 5, NULL, '9Obm_halong.jpg', 'MPpr_nb.jpg', 'MF5B_12.jpg', '<p><span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 1: CITY – HÀ NỘI (Ăn: T)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đón Qúy khách tại điểm hẹn đưa Qúy khách thăm&nbsp;</span><strong>Chùa Trấn Quốc</strong><span style=\"font-family:open sans,sans-serif\">. Viếng&nbsp;</span><strong>Lăng chủ tich Hồ Chí Minh</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;– Nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu, Thăm&nbsp;</span><strong>nhà sàn Bác Hồ</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;- Nơi bác ở và làm việc từ năm 1958 đến 1969. Điểm dừng chân tiếp theo là chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của một đài sen giữa lòng hồ, ăn trưa tại nhà hàng. Bắt đầu chuyến du lịch du lịch Hà Nội - Hạ Long - Ninh Bình trong 4 ngày 3 đêm</span><br />\r\n<br />\r\n<strong>Chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Điểm dừng chân tiếp theo là&nbsp;</span><strong>Văn miếu Quốc Tử Giám</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;– Trường đại học đầu tiên của Việt Nam thờ Khổng Tử. Tiếp đến Qúy khách thăm Hồ Hoàn Kiếm, đền Ngọc Sơn., Về lại khách sạn nhận phòng , nghỉ ngơi, tự do ăn tối hoặc dạo đêm&nbsp;</span><strong>phố cổ Hà Nội.</strong><br />\r\n<br />\r\n<strong>Thứ 3,5,7 và chủ nhật:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Thêm chương trình đi Bảo tàng dân tộc học</span><br />\r\n<br />\r\n<strong>Thứ 2,4,6</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Thêm chương trình đi Làng gốm Bát Tràng</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 2: HÀ NỘI – HẠ LONG (Ăn: S/T/C)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách dùng bữa sáng, trả phòng khởi hành đi&nbsp;</span><strong>Hạ Long</strong><span style=\"font-family:open sans,sans-serif\">. Tới&nbsp;</span><strong>Vịnh Hạ Long</strong><span style=\"font-family:open sans,sans-serif\">, Qúy khách lên tàu nhận phòng, ăn trưa.&nbsp;</span><br />\r\n<br />\r\n<strong>Chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Tàu đưa Qúy khách đi Tham quan&nbsp;</span><strong>hang Sửng Sốt</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;- một hang động rộng và đẹp vào bậc nhất của vịnh Hạ Long, nơi có muôn vàn mang nhũ đá kỳ ảo khiến du khách phải trầm trồ ngạc nhiên vì vẻ đẹp lung linh của chúng. Tàu tới</span><strong>&nbsp;Đảo Ti Tốp</strong><span style=\"font-family:open sans,sans-serif\">. Quý khách dành 1 giờ đồng hồ tham quan đảo, tắm biển, tắm nắng hoặc leo lên đỉnh núi trên đảo ngắm toàn cảnh vịnh Hạ Long. Quý khách tham gia chèo thuyền kayak khám phá hang Bồ Nâu và những vùng nước xanh màu ngọc bích của vịnh Hạ Long. Tàu thả neo tại khu vực nước lặng, Quý khách lên boong tàu chiêm ngưỡng hoàng hôn đang dần buông xuống trên vịnh. Ăn tối Thư giãn với các hoạt động giải trí buổi tối như câu mực, hát karaoke. Tự do vui chơi và ngủ đêm trên tàu.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 3:&nbsp; HẠ LONG – HÀ NỘI (Ăn: S/T)</strong></span><br />\r\n<br />\r\n<strong>Sáng: 07h30</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Chào đón ngày mới, Quý khách được phục vụ trà và cà phê miễn phí. Ngắm bình minh trên Vịnh, Trải nghiệm cảm giác khó quên khi thuyền tre đưa Quý khách đi qua một hang luồn hẹp uốn khúc quanh co để đến với Hồ Ba Hầm hoang sơ, bốn bề núi cao dựng đứng. Trả phòng tàu, Quý khách thư giãn, tắm nắng, chụp ảnh trên boong tàu trong khi tàu dần quay trở lại bến. Trả phòng, về lại bến tàu ăn trưa</span><br />\r\n<br />\r\n<strong>Chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đưa Quý khách về Hà Nội, dọc đường dừng chân nghỉ ngơi tham quan phòng trưng bày đồ thủ công mỹ nghệ.. Quay trở lại xe, khởi hành về Hà Nội– nhận phòng khách sạn nghỉ ngơi.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 4: BÁI ĐÍNH – TRÀNG AN – HÀ NỘI (Ăn: S/T)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Qúy khách, ăn sáng khởi hành đi Ninh Bình. Tới</span><strong>&nbsp;Ninh Bình</strong><span style=\"font-family:open sans,sans-serif\">, Qúy khách viếng và thăm quan</span><strong>&nbsp;chùa Bái Đính</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;với tượng Phật Thích ca bằng đồng cao và nặng nhất Viêt Nam, Chùa có bộ Tam Thế bằng đồng lớn nhất Việt Nam, Chùa có nhiều tượng La Hán nhất Việt Nam…..Qúy khách quay trở lại nhà hang ăn trưa với các món đặc sản thịt dê…</span><br />\r\n<br />\r\n<strong>Chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Qúy khách tiếp tục thăm quan&nbsp;</span><strong>khu du lịch Tràng An</strong><span style=\"font-family:open sans,sans-serif\">, đoàn xuống thuyền du ngoạn khám phá vẻ đẹp hoang sơ được ví như&nbsp;</span><strong>Vịnh Hạ Long</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;trên cạn với vô vàn các hạng động bằng những con thuyền nhỏ. Qúy khách ghé thăm và dâng hương lên thần thánh tại các ngôi đền thờ ở hai bên dòng sông của&nbsp;</span><strong>khu du lịch Tràng An</strong><span style=\"font-family:open sans,sans-serif\">. Kết thúc, Qúy khách lên xe về lại Hà Nội, kết thúc chương trình du lịch Hà Nội - Hạ Long - Ninh Bình trong 4 ngày 3 đêm.</span></p>', 20, 5200000, 0, 1, '2018-11-02 14:16:31', '2018-11-03 14:33:27'),
(7, 'Tour Hà Nội - Hạ Long', 1, '2018-11-06', '2018-11-08', '2 ngày 2 đêm', 'Hà Nội', 'Hạ Long', 'Ô tô,Du thuyền', 1, NULL, 'hHk8_hn.jpg', 'iIFi_halong.jpg', 'QCbW_hk.jpg', '<p><strong>HÀ NỘI – HẠ LONG( Ăn Trưa, Tối )</strong></p>\r\n\r\n<p><strong>07:30 - 08:30</strong>&nbsp; HDV và lái xe đón Quý khách tại điểm hẹn khởi hành đi&nbsp;<strong>Hạ Long</strong>. Dừng chân nghỉ ngơi tại Hải Dương 20 phút ghé thăm phòng trưng bày đồ thủ công mỹ nghệ.</p>\r\n\r\n<p><strong>12:30</strong><span style=\"font-family:open sans,sans-serif\">&nbsp; Tới bến tàu Hạ Long, Quý khách lên tàu&nbsp;</span><strong>Dragon Cruise</strong><span style=\"font-family:open sans,sans-serif\">. Đắm mình trong khung cảnh non nước hữu tình của&nbsp;</span><strong>vịnh Hạ Long</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;và chụp lại cho mình những bức hình ấn tượng về muôn vàn hòn đảo lớn nhỏ mang nhiều hình dạng kỳ thú mọc lên trên làn nước xanh màu ngọc bích của vịnh.</span></p>\r\n\r\n<p><strong>13:30</strong><span style=\"font-family:open sans,sans-serif\">&nbsp; Quý khách ăn trưa trên tàu. Cùng thời gian này thì tàu đưa Quý khách đi ngang qua&nbsp;</span><strong>hòn Chó Đá, hòn Lư Hương</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>14:00</strong>&nbsp; Tàu dừng tại&nbsp;<strong>làng chài</strong>, Quý khách gặp gỡ ngư dân địa phương, tìm hiểu cuộc sống thường nhật của họ nơi biển khơi. Tàu tiếp tục đưa Quý khách băng qua&nbsp;<strong>hòn Trống Mái&nbsp;</strong>- biểu tượng của vịnh Hạ Long.</p>\r\n\r\n<p><strong>15:00</strong>&nbsp; Tham quan&nbsp;<strong>động Thiên Cung</strong>&nbsp;với muôn vàn măng nhũ đá lung linh sắc màu.</p>\r\n\r\n<p><strong>16:30</strong>&nbsp; Dời tàu&nbsp;<strong>Dragon Cruise</strong>, Quý khách lên xe di chuyển tới&nbsp;<strong>đảo Tuần Châu&nbsp;</strong>(10 phút) - hòn đảo lớn nhất và đẹp nhất tại Hạ Long.&nbsp;<strong>Đảo Tuần Châu&nbsp;</strong>là điểm đến không thể bỏ qua cho tất cả du khách có dịp đặt chân tới di sản thiên nhiên thế giới -&nbsp;<strong>vịnh Hạ Long</strong>.</p>\r\n\r\n<p><strong>17:00</strong>&nbsp; Quý khách nhận phòng khách sạn tại&nbsp;<strong>Tuần Châu</strong>, tự do nghỉ ngơi trong khách sạn hoặc đi dạo xung quanh hòn đảo xinh đẹp.</p>\r\n\r\n<p><strong>19:00</strong>&nbsp; Ăn tối tại nhà hàng. Sau bữa tối, Quý khách tự do lựa chọn:</p>\r\n\r\n<p>Tới bờ biển ngắm biển đêm và tận hưởng bầu không khí trong lành trên biển, thư giãn sau một ngày dài với nhiều hoạt động khám phá vịnh.</p>\r\n\r\n<p>Tham quan&nbsp;<strong>khu vui chơi - giải trí Tuần Châu</strong>, xem biểu diễn xiếc của những chú cá heo và sư tử biển, thưởng thức màn trình diễn&nbsp;<strong>nhạc nước</strong>&nbsp;trên sân khấu hoành tráng. ( chi phí tự túc)</p>\r\n\r\n<p>Nghỉ đêm tại khách sạn.</p>\r\n\r\n<p><strong>NGÀY 2:&nbsp; TUẦN CHÂU - HÀ NỘI&nbsp; &nbsp;(Ăn: Sáng, Trưa)</strong></p>\r\n\r\n<p><strong>08:00</strong>&nbsp; Quý khách ăn sáng, tự do nghỉ ngơi trong khách sạn hoặc tham quan khám phá&nbsp;<strong>đảo Tuần Châu</strong>&nbsp;theo cách của riêng mình.&nbsp;</p>\r\n\r\n<p><strong>12:00</strong>&nbsp; Quý khách ăn trưa tại khách sạn. Sau đó trả phòng và lên xe trở về&nbsp;<strong>Hà Nội</strong>.</p>\r\n\r\n<p><strong>17:30</strong>&nbsp; Về tới&nbsp;<strong>Hà Nội</strong>, xe trả khách tại điểm hẹn ban đầu. Kết thúc tour.</p>', 40, 4199000, 4000000, 1, '2018-11-02 14:20:15', '2018-11-02 16:07:19'),
(8, 'Tour Du Lịch Cù Lao Chàm', 2, '2018-11-08', '2018-11-08', '1 ngày', 'Đà Nẵng', 'Hội An', 'Ô tô,Du thuyền', 2, NULL, 'NSHv_1.jpg', 'O5W7_12.jpg', 'Y77b_culao.jpg', '<p><em>Cách bờ biển Cửa Đại (Hội An, Quảng Nam) 15km,&nbsp;</em><strong><em>Cù Lao Chàm</em></strong><em>&nbsp;là một cụm đảo bao gồm 8 đảo với khí hậu quanh năm mát mẻ, hệ động thực vật phong phú, đặc biệt là nguồn hải sản và nguồn tài nguyên yến sào. Các rạn san hô ở khu vực biển Cù Lao Chàm được các nhà khoa học đánh giá cao và đưa vào danh sách bảo vệ. Cù Lao Chàm được UNESCO công nhận là khu dự trữ sinh quyển thế giới.</em></p>\r\n\r\n<p><em>Du khách đến với Cù Lao Chàm sẽ trải qua những giờ phút thi vị, bồng bềnh trên sông nước. Đặc biệt, ở Cù Lao Chàm có nhiều bãi tắm tự nhiên đẹp và hấp dẫn.</em></p>\r\n\r\n<p><strong>07h30:</strong>&nbsp;Xe đón khách tại&nbsp;<strong>KHÁCH SẠN</strong>&nbsp;đưa đến bến Cửa Đại</p>\r\n\r\n<p><strong>08h00:</strong>&nbsp;Ngồi tàu Cao tốc đi&nbsp;<strong>Cù Lao Chàm</strong></p>\r\n\r\n<p><strong>08h30:</strong>&nbsp;Tham quan&nbsp;<strong>chùa Hải Tạng</strong>,&nbsp;<strong>Âu thuyền</strong>&nbsp;&amp;&nbsp;<strong>các lăng miếu cổ</strong>, mua sắm đặc sản khô trên đảo. Thăm&nbsp;<strong>khu bảo tồn biển tại Bãi Bắc</strong></p>\r\n\r\n<p><strong>10h30:</strong>&nbsp;Tham gia hoạt động lặn biển (<strong>Snokelling</strong>) ngắm san hô</p>\r\n\r\n<p><strong>12h00:</strong>&nbsp;Ăn trưa trên đảo</p>\r\n\r\n<p><strong>14h00:</strong>&nbsp;Tạm biệt&nbsp;<strong>Cù Lao Chàm</strong></p>\r\n\r\n<p><strong>15h00:</strong>&nbsp;Trả khách tại&nbsp;<strong>KHÁCH SẠN</strong></p>', 12, 1500000, 0, 1, '2018-11-02 14:24:03', '2018-11-03 02:37:36'),
(9, 'Tour Du Lịch Bà Nà - Hội An', 2, '2018-11-15', '2018-11-18', '3 ngày 2 đêm', 'Đà Nẵng', 'Đà Nẵng', 'Ô tô', 13, NULL, 'Z7Vf_2ls.jpg', 'm3Yi_13.jpg', 'yiFn_22.jpg', '<p><span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 01: TP.HCM/ HÀ NỘI – NGŨ HÀNH SƠN – HỘI AN – ĐÀ NẴNG (Ăn tối)</strong></span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Xe đón quý khách tại&nbsp;</span><strong>sân bay Đà Nẵng</strong><span style=\"font-family:open sans,sans-serif\">, đưa về khách sạn, nhận phòng nghỉ ngơi. Chuẩn bị cho chuyến du lịch Đà Nẵng - Bà Nà - Hội An - Sơn Trà trong 3 ngày 2 đêm</span><br />\r\n<br />\r\n<strong>Chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đón quý khách đi tham quan danh thắng</span><strong>&nbsp;Ngũ Hành Sơn</strong><span style=\"font-family:open sans,sans-serif\">. Quý khách thăm động Huyền Không,&nbsp;</span><strong>động Tàng Chơn, chùa Tam Thai, Cổng trời</strong><span style=\"font-family:open sans,sans-serif\">. Thăm&nbsp;</span><strong>làng đá Non nước</strong><span style=\"font-family:open sans,sans-serif\">, mua quà lưu niệm. Sau đó, tiếp tục đi Hội An.&nbsp;</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Đến&nbsp;</span><strong>phố cổ</strong><span style=\"font-family:open sans,sans-serif\">, HDV dẫn đoàn đi tham quan các danh thắng:&nbsp;</span><strong>Hội quán Phúc Kiến, Nhà cổ Tấn Ký, Chùa Cầu Nhật Bản</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;và Trung tâm mỹ nghệ Hội An. Ăn tối tại</span><strong>&nbsp;Hội An</strong><span style=\"font-family:open sans,sans-serif\">.</span><br />\r\n<br />\r\n<strong>20h30:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Trở lại&nbsp;</span><strong>Đà Nẵng</strong><span style=\"font-family:open sans,sans-serif\">. Nghỉ đêm tại</span><strong>&nbsp;Đà Nẵng</strong><span style=\"font-family:open sans,sans-serif\">.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 02: ĐÀ NẴNG - BÀ NÀ – NÚI CHÚA – ĐÀ NẴNG (Ăn sáng/ trưa)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Điểm tâm tại khách sạn. Sau đó, xe đón quý khách lúc&nbsp;</span><strong>08h00</strong><span style=\"font-family:open sans,sans-serif\">, khởi hành đi&nbsp;</span><strong>Bà Nà.</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">(Vé cáp treo Bà Nà quý khách tự thanh toán).</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Đến chân núi, quý khách lên cáp treo, ngắm cảnh rừng nguyên sinh, tận hưởng không khí mát mẻ, đến Ga 2 để tham quan&nbsp;</span><strong>Chùa Linh Ứng – Thích ca Phật đài</strong><span style=\"font-family:open sans,sans-serif\">, Hầm rượu cũ Debay, thăm vườn hoa và trải nghiệm tàu hỏa leo núi.</span><br />\r\n<br />\r\n<strong>Trưa:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Ăn trưa buffet. Sau đó, tự do vui chơi tại&nbsp;</span><strong>Công viên Giải trí Fantasy Park</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;với các trò chơi mạo hiểm, cảm giác mạnh, xem phim 4D, 5D, khám phá công viên khủng long.</span><br />\r\n<br />\r\n<strong>14h30:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;HDV tập trung đoàn, đưa quý khách xuống cáp treo, trở về lại&nbsp;</span><strong>Đà Nẵng</strong><span style=\"font-family:open sans,sans-serif\">. Trả khách tại khách sạn. Quý khách tự do tắm biển. Ăn tối tự do. Nghỉ đêm tại&nbsp;</span><strong>Đà Nẵng</strong><span style=\"font-family:open sans,sans-serif\">.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 03: BÁN ĐẢO SƠN TRÀ – CHỢ HÀN – TIỄN SÂN BAY (Ăn sáng/ trưa)</strong></span><br />\r\n<br />\r\n<strong>Sáng:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Điểm tâm tại khách sạn. Sau đó, xe đón quý khách lúc</span><strong>&nbsp;08h00,</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;khởi hành đi tham quan Bán đảo Sơn Trà, dân hương cầu sức khỏe - may mắn tại</span><strong>&nbsp;chùa Linh Ứng</strong><span style=\"font-family:open sans,sans-serif\">, ngắm tượng Phật Bà Quan Âm cao nhất Việt Nam hiện nay. Sau đó, đoàn tham quan &amp; mua đặc sản tại&nbsp;</span><strong>chợ Hàn</strong><span style=\"font-family:open sans,sans-serif\">. Ăn trưa. Tiễn sân bay.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Kết thúc chương trình du lịch Đà Nẵng - Bà Nà - Hội An - Sơn Trà trong 3 ngày 2 đêm.</span></p>', 15, 1900000, 1600000, 1, '2018-11-02 14:26:55', '2018-11-03 14:34:26'),
(10, 'Tour Du Lịch Ngũ Hành Sơn - Hội An', 2, '2018-11-23', '2018-11-23', '1 ngày', 'Đà Nẵng', 'Hội An', 'Ô tô', 14, NULL, 'ak4D_12.jpg', 'FbQv_13.jpg', '4sRN_12.jpg', '<ul>\r\n	<li><strong><em>Ngũ Hành Sơn</em></strong><em>&nbsp;với năm ngọn núi được nằm theo hệ Ngũ Hành là một kiệt tác của thiên nhiên ban tặng cho thành phố Đà Nẵng. Nhìn từ trên cao Ngũ Hành Sơn giống như một bàn tay của Trời ấn định nơi đây là vùng đất thiêng. Tại đây trên ngon Thuỷ Sơn còn có hai ngôi Chùa cổ Tam Thai, Linh Ứng.</em></li>\r\n	<li><strong><em>Hội An</em></strong><em>&nbsp;đã có một thời nổi tiếng với tên gọi Faifo mà các thương nhân Nhật Bản, Trung Quốc, Bồ Ðào Nha, Italia v.v.. đã biết đến từ thế kỷ 16, 17. Hội&nbsp; An có những dãy phố cổ gần như nguyên vẹn, đó là loại nhà hình ống xuyên suốt từ phố nọ sang phố kia. Trong đó có một dãy phố nằm sát ngay bờ sông Hội An. Nhà ở đây toàn bằng gỗ quý, trong nhà treo hoành phi, câu đối, cột nhà trạm trổ hoa văn rất cầu kỳ... Khu phố cổ đã được UNESCO công nhận là Di sản văn hoá thế giới.</em></li>\r\n</ul>\r\n\r\n<p><strong>15h00 - 15h30</strong>: Đón khách tại&nbsp;<strong>KHÁCH SẠN</strong></p>\r\n\r\n<p><strong>16h15</strong>: Thăm&nbsp;<strong>làng nghề điêu khắc đá Non Nước</strong>.Chinh phục&nbsp;<strong>Ngũ Hành</strong>, khám phá vẻ đẹp của các hang động, viếng&nbsp;<strong>chùa Linh Ứng</strong>,&nbsp;<strong>Tam Thai</strong>.</p>\r\n\r\n<p><strong>17h30</strong>: Tiếp tục khởi hành đi&nbsp;<strong>Hội An</strong></p>\r\n\r\n<p><strong>18h00</strong>: Ăn tối tại Hội An</p>\r\n\r\n<p><strong>19h30</strong>: Bách bộ tham quan mua sắm tại&nbsp;<strong>Phố cổ</strong></p>\r\n\r\n<p><strong>21h00</strong>: Lên xe về lại thành phố Đà Nẵng. Trả khách tại&nbsp;<strong>KHÁCH SẠN</strong></p>', 25, 450000, 399000, 1, '2018-11-02 14:30:17', '2018-11-03 14:35:00'),
(11, 'Tour Nha Trang- Vinpearland', 2, '2018-11-23', '2018-11-23', '1 ngày', 'Nha Trang', 'Nha Trang', 'Ô tô', 17, NULL, '8kCG_vin2.jpg', 'I9LX_ort.jpg', '5DFS_00.jpg', '<p style=\"text-align:justify\"><strong>08h</strong><strong>00</strong><strong>:</strong>&nbsp;Xe và hướng dẫn viên đón Quý khách tại điểm hẹn, đoàn khởi hành tham quan:</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>CHÙA LONG SƠN –&nbsp;</strong></em><em>là</em>&nbsp;trung tâm chính của hương hội phật giáo của tỉnh Khánh Hòa được xây dựng từ năm 1886. Chùa hiện nay là điểm tham quan thu hút rất đông du khách tham quan và cúng bái. Quý khách sẽ cảm nhận được sự yên bình, thanh tịnh ngay trong lòng thành phố cũng như tận mắt chiêm ngưỡng bức tượng&nbsp;<strong>Phật Trắng cao 24m</strong>&nbsp;nằm ở vị trí cao nhất tại Tp. Nha Trang.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Nhà Yến</strong><strong>&nbsp;–&nbsp;</strong>nơi tìm hiểu về ngành nghề khai thác, chế biến và kinh doanh yến sào tại Nha Trang. Một trong tám món ăn cao lương mỹ vị dùng cho vua chúa ngày xưa.</p>\r\n\r\n<p style=\"text-align:justify\"><em><strong>THÁP BÀ PONAGA</strong></em><em><strong>&nbsp;–&nbsp;</strong></em>danh thắng bậc nhất Tp. Nha Trang – Khánh Hòa. Tháp được xây dựng từ thế kỷ 8 đến thế kỷ 13, thời kỳ đạo Hindu (Ấn Độ Giáo) cường thịnh tại vương quốc Chăm Pa Cổ. Đây là một quần thể đền thờ tiêu biểu cho nghệ thuật kiến trúc xây dựng và điêu khắc tuyệt mỹ của dân tộc Chăm. Nó còn là minh chứng cho sự giao thoa tín ngưỡng giữa hai nền văn hóa Chăm – Việt.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp; Tiếp tục xe đưa Quý khách đến&nbsp;<strong>khu du lịch suối khoáng nóng Tháp Bà</strong>&nbsp;– nơi đầu tiên phát triển liệu pháp ngâm tắm bùn khoáng tại Tp. Nha Trang vào năm 2000, là dịch vụ vừa thư giãn vừa tốt cho sức khỏe . Đặc biệt, đây là liệu pháp tốt hơn hết cho những ai mắc chứng bệnh thấp khớp hay chị em phụ nữ muốn có làn da săn chắc mịn màng hơn.&nbsp;<strong><em>(chi phí tự túc)</em></strong><strong><em>.</em></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Trưa:</strong>&nbsp;Quý khách thưởng thức&nbsp;<strong>“Nem Nướng Ninh Hòa”</strong>&nbsp;– một món ăn dân dã nổi tiếng từ lâu của phố biển Nha Trang được đông đảo du khách biêt đến mỗi khi ghé qua nơi đây.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;<strong>14h30:</strong>&nbsp; Quý khách vượt 3320m đường biển bằng hệ thống cáp treo dài nhất Thế Giới để đến với&nbsp;<strong><em>thiên đường du lịch và giải trí Vinpearland</em></strong>. Tại đây, Quý khách thỏa sức khám phá thiên đường giải trí xinh đẹp với khu trò chơi mạo hiểm ngoài trời như đu quay lộn đầu, sky drop, tàu lượn siêu tốc, đường hầm xuyên núi... xem phim 4D, tham gia các trò chơi trong nhà với dàn game hiện đại như xe điện dụng, bắn súng, đua xe... chiêm ngưỡng gần 10.000 loài sinh vật biển hết sức đa dạng tại thủy cung Vinpearl, tham gia hệ thống trò chơi trượt ống cảm tử quân tại khu công viên nước. Thưởng thức màn ảo thuật đường phố đặc sắc hay màn xiếc cá heo dễ thương và ngộ nghĩnh. Đặc biệt, quý khách sẽ vỡ òa với nhiều cung bậc cảm xúc trước màn trình diễn nhạc nước sống động, đầy màu sắc ngang tầm Thế Giới của Vinpearland Nha Trang.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Tối:</strong>&nbsp;Xe và HDV đón quý khách về lại khách sạn nghỉ ngơi. Kết thúc chương trình. Chào thân ái tiễn khách!</p>', 25, 1500000, 1299000, 1, '2018-11-02 14:32:42', '2018-11-06 11:58:08'),
(12, 'Tour Du Ngoạn 4 Đảo Vịnh Nha Trang', 2, '2018-11-17', '2018-11-17', '1 ngày', 'Nha Trang', 'Nha Trang', 'Ô tô,Du thuyền', 14, NULL, '9Rcw_sody.jpg', 'wV0k_p.jpg', 'Ia28_2.jpg', '<p><strong>08h30:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Đón khách tại khách sạn và đưa xuống&nbsp;</span><strong>Cảng Cầu Đá</strong><span style=\"font-family:open sans,sans-serif\">. Bắt đầu chuyến du ngoạn 4 đảo vịnh Nha Trang trong 1 ngày.</span><br />\r\n<br />\r\n<strong>09h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách lên tàu và bắt đầu cuộc hành trình khám phá&nbsp;</span><strong>vịnh Nha Trang</strong><span style=\"font-family:open sans,sans-serif\">. Sau nửa giờ trên thuyền từ&nbsp;</span><strong>cảng Cầu Đá</strong><span style=\"font-family:open sans,sans-serif\">, du khách sẽ đến với Khu du lịch&nbsp;</span><strong>Hồ Cá Trí Nguyên</strong><span style=\"font-family:open sans,sans-serif\">. Đến đây, du khách có thể đi dạo quanh hồ hay ngồi đón gió ngay trên nhà thuỷ tạ vẫn có thể quan sát cảnh sinh hoạt của đủ loại sinh vật biển với những sắc màu rực rỡ dưới làn nước trong xanh như pha lê ngay dưới chân mình.</span><br />\r\n<br />\r\n<strong>Khu Thủy Cung</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;có đủ các loại cá và đặc biệt là các sinh vật biển quý hiếm. Nơi đây du khách có thể&nbsp; thư giãn, giải trí và ngắm nhìn sự sống của các loài thuỷ tộc cùng các nàng tiên cá… Trên đảo còn có khu Bãi Sạn là một bãi tắm được nhiều người yêu thích. ( tự túc chi phí)</span><br />\r\n<br />\r\n<strong>10h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Tàu sẽ đưa quý khách tham quan&nbsp;</span><strong>Hòn Mun</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;– Khu bảo tồn sinh vật biển trong&nbsp;</span><strong>vịnh Nha Trang</strong><span style=\"font-family:open sans,sans-serif\">. Tại đây quý khách sẽ được chiêm ngưỡng các loại sinh vật biển cùng với các rạng san hô nhiều màu sắc phong phú bằng kính lặn, ống thở hay bằng tàu đáy kính (tự túc chi phí).</span><br />\r\n<br />\r\n<strong>11h30:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Tàu đến&nbsp;</span><strong>Hòn Một</strong><span style=\"font-family:open sans,sans-serif\">, quý khách dùng bữa trưa trên tàu với các món ăn đặc trưng của vùng biển, tham gia chương trình giao lưu văn nghệ trên tàu do các thủy thủ tổ chức. Sau bữa trưa, quý khách sẽ được trải nghiệm “Quầy bar nổi” với cảm giác hòa mình vào dòng nước trong xanh của vịnh Nha Trang và thưởng thức ly rượu vang ngay dưới nước.</span><br />\r\n<br />\r\n<strong>13h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Tàu đưa quý khách đến</span><strong>&nbsp;Bãi Tranh,</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;quý khách nhận lều, tự do nghỉ ngơi, tắm biển hay tham gia các môn thể thao nước như: dù bay, môtô nước…(phí không bao gồm)</span><br />\r\n<br />\r\n<strong>16h00:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Quý khách về lại&nbsp;</span><strong>Cảng Cầu Đá.</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe đưa đoàn về lại khách sạn. Kết thúc chương trình du ngoạn 4 đảo vịnh Nha Trang trong 1 ngày.</span></p>', 12, 790000, 599000, 1, '2018-11-02 14:35:20', '2018-11-06 11:59:38'),
(13, 'Tour Du Lịch Tây Ninh - Địa Đạo Củ Chi', 3, '2018-11-25', '2018-11-25', '1 ngày', 'Tp Hồ Chí Minh', 'Tp Hồ Chí Minh', 'Ô tô', 1, NULL, 'mabK_5.jpg', 'ppHt_hi.jpg', 'ZCzw_ng.jpg', '<p><span style=\"font-family:open sans,sans-serif\"><strong>NGÀY 1: TP.HỒ CHÍ MINH – TÂY NINH – CỦ CHI – TP.HỒ CHÍ MINH</strong>&nbsp;</span><br />\r\n<br />\r\n<strong>07h45:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Xe và hướng dẫn viên đón quý khách tại điểm hẹn</span><strong>: 220 Đề Thám, Phạm Ngũ Lão, Quận 1</strong><span style=\"font-family:open sans,sans-serif\">, khởi hành đi du lịch Tây Ninh - địa đạo Củ Chi trong 1 ngày. Đến&nbsp;</span><strong>Tây Ninh</strong><span style=\"font-family:open sans,sans-serif\">, Quý khách thăm quan:</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">•&nbsp;&nbsp;&nbsp;</span><strong>Tòa Thánh Tây Ninh:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Nổi bật trong quần thể kiến trúc là đền Thánh, với những đặc trưng tiêu biểu cho kiến trúc đền, chùa của tôn giáo Cao Đài. Công trình thể hiện sự hài hoà giữa mỹ thuật kiến trúc Á Đông và Phương Tây. Với các vòm mái và hoa văn trang trí khéo léo, tinh xảo thể hiện tinh thần tam giáo…</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Quý khách còn có thể tìm hiểu thêm về</span><strong>&nbsp;đạo Cao Đài,</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;một tôn giáo riêng của địa phương và tham dự lễ cầu kinh lúc 12:00 trưa.</span><br />\r\n<br />\r\n<strong>Buổi trưa:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Sau đó, Quý khách dùng cơm trưa&nbsp; tại nhà hàng (chi phí tự túc), nghỉ ngơi tự do.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Xe và hướng đưa Quý khách đi đến</span><strong>&nbsp;Hóc Môn</strong><span style=\"font-family:open sans,sans-serif\">, Quý khách có cơ hội thăm quan&nbsp;</span><strong>Địa đạo Củ Chi</strong><span style=\"font-family:open sans,sans-serif\">:</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">•&nbsp;&nbsp; Tìm hiểu cách du kích Việt Nam xưa đã xây dựng, sinh sống và chiến đấu ở địa đạo, được xem những thước phim tài liệu quý báu về chiến tranh, về cách mà quân dân VN đã chiến thắng vũ khí hiện đại tân tiến chỉ với ý chí dân tộc.&nbsp;</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">•&nbsp;&nbsp; Khám phá&nbsp;</span><strong>Địa đạo Củ Chi</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;- hệ thống phòng thủ nằm trong lòng đất, tọa lạc tại huyện Củ Chi, thành phố Hồ Chí Minh. Công trình bắt đầu được xây dựng từ năm 1940 trong thời kỳ kháng chiến chống Pháp. Tuy nằm sâu trong lòng đất, nhưng nhiều cơ sở vật chất như trạm xá, phòng làm việc, nhà ở… vẫn được xây dựng, để phục vụ người dân trú ẩn trong chiến tranh. Hiện, địa đạo này là điểm du lịch hấp dẫn du khách tới thăm và tìm hiểu về một giai đoạn lịch sử đã qua của Việt Nam.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">•&nbsp;&nbsp; Tận mắt chứng kiến những vũ khí thô sơ tự chế, bẫy chông bằng tre, bò trườn trong các đường địa đạo, và xem người dân địa phương làm bánh tráng và rượu gạo.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Ngoài ra, quý khách còn có cơ hội bắn súng tại trường tập bắn ở địa đạo (chi phí tự túc).</span><br />\r\n<br />\r\n<strong>Buổi chiều:</strong><span style=\"font-family:open sans,sans-serif\">&nbsp;Sau khi ra khỏi địa đạo, quý khách thưởng thức món khoai mì luộc chấm với muối mè dân dã - đặc sản của vùng kháng chiến Củ Chi ngày xưa. Đoàn khởi hành về lại điểm đón ban đầu.</span><br />\r\n<br />\r\n<span style=\"font-family:open sans,sans-serif\">Chia tay – Kết thúc chương trình du lịch Tây Ninh - địa đạo Củ Chi trong 1 ngày.&nbsp;</span></p>', 40, 170000, 0, 1, '2018-11-02 14:39:09', '2018-11-02 16:02:53'),
(14, 'Tour Du Lịch: Cao Lãnh-Đồng Tháp Mười', 3, '2018-11-17', '2018-11-18', '2 ngày 1 đêm', 'Tp Hồ Chí Minh', 'Đồng Tháp', 'Ô tô,Du thuyền', 21, NULL, 'TBdV_dongthap101.jpg', 'sfDi_061.jpg', 'e65G_mg.jpg', '<p><strong>NGÀY 01: SÀI GÒN – CAO LÃNH – GÁO GIỒNG (Ăn trưa, tối)</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Sáng</strong>:<strong>&nbsp;06h00</strong>&nbsp;Xe và hướng dẫn đón quý khách tại điểm hẹn ở Sài khởi hành đi&nbsp;<strong>TP Cao Lãnh.</strong></li>\r\n</ul>\r\n\r\n<p><strong>08h30:</strong>&nbsp;Quý khách bắt đầu tham quan&nbsp;<strong>KDL Đồng Sen Tháp Mười</strong>, khu du tích&nbsp;<strong>Gò Tháp</strong>&nbsp;-&nbsp;được xếp hạng di tích khảo cổ và kiến trúc nghệ thuật Gò Tháp là di tích quốc gia đặc biệt.&nbsp;Tại đây quý khách tham quan Khu mộ táng với những Di chỉ của nền văn hóa&nbsp;<strong>Óc eo, Đền thờ ông Thiên Hộ Dương, Đốc Binh Kiều, Miếu Bà Chúa xứ,</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Trưa</strong>: Dùng cơm trưa tại nhà hàng và thưởng thức các món ăn đặc sản mùa nước nổi miền Tây Nam Bộ.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Chiều</strong>: Quý khách tiếp tục tham quan&nbsp;<strong>Khu du lịch sinh thái Gáo Giồng</strong>. Bơi xuồng xuyên rừng tràm, tham quan khu vườn chim thiên nhiên vào mùa nước nổi gồm nhiều loại chim như cò, vạc, trích, le le, điên điển... Lên đài quan sát ngắm toàn cảnh khu sinh thái với thảm thực vật phong phú như tràm, sen, bông súng, năng, sậy... Quý khách lên xe trở về lại Cao Lãnh.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Tối</strong>: Quý khách ăn tối và tự do khám phá Cao Lãnh về đêm</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Nghỉ đêm tại Cao Lãnh</li>\r\n</ul>\r\n\r\n<p><strong>Bao gồm</strong>: Xe tham quan theo chương trình, hướng dẫn viên, ăn trưa, ăn tối, vé vào cổng, nước suối và khách sạn 3* tại Cao Lãnh</p>\r\n\r\n<p><strong>Không bao gồm</strong>: Ăn sáng, đồ uống, bảo hiểm, VAT, tip và chi phí ngoài chương trình</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>NGÀY 02: CAO LÃNH – SA DEC – SÀI GÒN (ăn sáng, trưa)</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Sáng</strong>: Quý khách ăn sáng tại khách sạn</li>\r\n</ul>\r\n\r\n<p><strong>08h30</strong>: Đến Cao Lãnh quý khách tham quan<strong>&nbsp;Khu Di tích Cụ Phó bảng Nguyễn Sinh Sắc&nbsp;</strong>(gồm nhà sàn Bác Hồ, Khu mộ Cụ Phó bảng Nguyễn Sinh Sắc và Làng Hòa An xưa – nơi tái hiện ngôi làng mà Cụ Nguyễn Sinh Sắc từng sống trước đây), tham quan&nbsp;<strong>Bảo tàng Đồng Tháp&nbsp;</strong>(nơi trưng bày di chỉ của nền văn hóa Óc Eo và những sinh hoạt văn hóa đặc trưng của nền văn hóa Đồng bằng sông Cửu Long).</p>\r\n\r\n<ul>\r\n	<li>Tiếp tục hành trình đến&nbsp;<strong>Tam Nông</strong>&nbsp;vào mùa nước nổi. Dùng cơm trưa,</li>\r\n</ul>\r\n\r\n<p>Kế tiếp, xe đưa quý khách đến với&nbsp;<strong>Tp.Sa Đéc</strong>&nbsp;- tham quan&nbsp;<strong>Làng Hoa Tân Quy Đông</strong>. Làng hoa Tân Quy Đông còn gọi là Vườn hoa Tân Quy Đông hay Làng hoa Sa Đéc, thuộc xã Tân Quy Đông, thành phố Sa Đéc, tỉnh Đồng Tháp. Đây là một làng nghề truyền thống cả trăm năm, nằm bên bờ sông Tiền quanh năm lộng gió, màu mỡ phù sa, ngập tràn ánh nắng, và được mệnh danh là xứ sở của các loài hoa kiểng.</p>\r\n\r\n<p>Tham quan&nbsp;<strong>Nhà cổ Huỳnh Thủy Lê</strong>: nét đặc biệt của ngôi nhà cổ này là sự giao thoa kiến trúc Việt – Pháp - Hoa cùng câu chuyện tình lãng mạn giữa nữ văn hào Pháp Marguerite Duras với công tử họ Huỳnh.</p>\r\n\r\n<ul>\r\n	<li>Kết thúc&nbsp;<strong>Tour Du Lịch Đồng Tháp Mùa Nước Nổi 2 Ngày 1 Đêm</strong>&nbsp;xe đưa quý khách về lại Sài Gòn. Hướng dẫn viên&nbsp;chia tay và hẹn gặp lại quý khách</li>\r\n</ul>\r\n\r\n<p><strong><em>Lưu ý</em></strong><em>: Nhận phòng khách sạn sau&nbsp;</em>14h00 chiều - Trả phòng khách sạn trước 12h00 trưa.</p>\r\n\r\n<p>Điểm đón: Tại văn phòng&nbsp;lữ hành - 57 Lê Thị Hồng Gấm, Phường Nguyễn Thai Bình Quận 1, TP HCM.</p>', 40, 1200000, 980000, 1, '2018-11-02 14:41:42', '2018-11-03 14:36:21'),
(15, 'Tour Du Lịch Đảo Ngọc Phú Quốc', 3, '2018-11-27', '2018-11-30', '3 ngày 2 đêm', 'Tp Hồ Chí Minh', 'Phú Quốc', 'Ô tô,Du thuyền', 22, NULL, 'XeIn_300.jpg', '5FaD_8f1.jpg', 'eMmA_quoc.jpg', '<p><strong>NGÀY 1</strong><strong>&nbsp;:&nbsp; PHÚ QUỐC – ĐÔNG ĐẢO (ăn trưa, tối)</strong></p>\r\n\r\n<p>- Xe đón du khách tại sân bay Phú Quốc, đưa đoàn về khách sạn gửi hành lý, tự do nghỉ ngơi</p>\r\n\r\n<p>11g30: đưa đoàn đi ăn trưa với đặc sản Phú Quốc tại nhà hàng La Senta. Về KS nhận phòng</p>\r\n\r\n<p>Chiều: Khởi hành tham quan phía Đông đảo:</p>\r\n\r\n<p><strong>Vườn tiêu&nbsp;</strong>với những nọc tiêu thẳng tắp, xanh mơn mỡn, nổi tiếng chắc hạt, thơm ngon</p>\r\n\r\n<p><strong>Chùa Sư Muôn</strong>&nbsp;hay còn gọi là Hùng Long Tự, dâng hương, cầu an cho người thân</p>\r\n\r\n<p>Tham quan&nbsp;<strong>trại nuôi ong mật</strong>, tìm hiểu cuộc sống cần cù của những chú ong bé nhỏ và học cách lấy mật ong (quay mật) của người dân. Đến mùa trái cây, Quý khách còn được chiêm ngưỡng và tận tay hái các loại sầu riêng, chôm chôm ….trĩu quả trên cành</p>\r\n\r\n<p><strong>Làng chài cổ Hàm Ninh</strong>&nbsp;nơi đây nổi tiếng với nghề đánh bắt lưới ghẹ, cá ngựa, hải sâm, hái rong biển, Quý khách có dịp thưởng thức hải sản tươi vừa đánh bắt với giá gốc</p>\r\n\r\n<p>Ăn tối tại nhà hàng</p>\r\n\r\n<p><strong>Option thêm:</strong>&nbsp;Tham quan khu vui chơi giải trí&nbsp;<strong>&nbsp;Vinpearl land</strong>&nbsp;(nếu Quý khách vào Vin Pearland thì sẽ đi bằng xe trung chuyển của VinPearl, tự bỏ chương trình tham quan đông đảo, bỏ ăn tối, không bù chương trình, không bù hoặc chuyển bữa ăn)</p>\r\n\r\n<p>Về khách sạn nghỉ ngơi. Tự do dạo bãi biển, thưởng thức không khí yên tĩnh tuyệt vời của huyện đảo hoặc&nbsp;<strong>đăng ký tour câu mực đêm</strong><em>(Chi phí tự túc: tháng 11 đến tháng 3: 250.000đ/khách)</em></p>\r\n\r\n<p><strong>NGÀY 2</strong>:&nbsp;<strong>&nbsp;CITY</strong>&nbsp;-&nbsp;<strong>BÃI SAO – hoặc tour câu cá ngắm san hô ( ăn 3 bữa )</strong></p>\r\n\r\n<p><strong><em>Buổi sáng:</em></strong>&nbsp;Dùng điểm tâm sáng tại Khách sạn, sau đó du khách tham quan:</p>\r\n\r\n<table style=\"border-collapse:collapse; border-spacing:0px; box-sizing:border-box; font-family:open sans,sans-serif\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Lựa chọn 1: CITY – NAM ĐẢO</strong></p>\r\n\r\n			<p>9:00: Xe đưa du khách tham quan city:</p>\r\n\r\n			<p>Tham quan thắng cảnh&nbsp;<strong>Dinh Cậu</strong>&nbsp;và&nbsp;<strong>Dinh Bà Thủy Long Thánh Mẫu&nbsp;</strong>nét văn hóa tín ngưỡng, chỗ dựa tinh thần của ngư dân trên trên đảo trước khi ra khơi</p>\r\n\r\n			<p>Tham quan mua sắm tại<strong>&nbsp;Chợ Dương Đông</strong></p>\r\n\r\n			<p>Cơ sở ủ&nbsp;<strong>rượu vang Sim</strong>&nbsp;– một loại rượu đặc sản tại địa phương, thưởng thức rượu Sim rừng miễn phí</p>\r\n\r\n			<p><strong>Cơ sở nước mắm Phú Quốc</strong>&nbsp;với cách ủ truyền thống có lịch sử hơn 200 năm phát triển tại Phú Quốc</p>\r\n\r\n			<p>Ăn trưa tại nhà hàng địa phương với đặc sản địa phương</p>\r\n\r\n			<p>Tiếp tục tham quan Nam đảo:</p>\r\n\r\n			<p><strong>Cơ sở nuôi cấy ngọc trai</strong>&nbsp;&nbsp;tìm hiểu về quy trình nuôi trai lấy ngọc và tự tay mổ ốc trai&nbsp;</p>\r\n\r\n			<p><strong>Thiền Viện Trúc Lâm Hộ Quốc</strong>, nằm tựa lưng vào núi, hướng mặt ra biển. Đường lên Chùa tuyệt đẹp với một bên là rừng núi xanh tươi, một bên là đại dương mênh mông</p>\r\n\r\n			<p><strong>Di tích lịch sử nhà tù Phú Quốc</strong>&nbsp;– xem film tư liệu, cảm nhận nỗi đau của các chiến sĩ yêu nước và sống với niềm tự hào dân tộc</p>\r\n\r\n			<p>Đến&nbsp;<strong>Bãi Sao</strong>&nbsp;- bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 2 đến tháng 10, trầm mình trong làn nước trong vắt, mát rượi (giữa tháng 11- hết tháng 12 biển động, Bãi Sao không đẹp)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Lựa chọn 2: CÂU CÁ NGẮM SAN HÔ (đăng ký khi mua tour sẽ không phụ thu)</strong></p>\r\n\r\n			<p>8g00: Xe đưa du khách tham quan:</p>\r\n\r\n			<p><strong>Cơ sở nuôi cấy ngọc trai&nbsp;</strong>&nbsp;tìm hiểu về quy trình nuôi trai lấy ngọc và tự tay mổ ốc trai&nbsp;</p>\r\n\r\n			<p>Đến cảng An Thới, lên tàu du lịch đến Hòn Dâm, Hòn Dừa, Hòn Rõi…neo tàu,&nbsp;<strong>câu cá theo cách truyền thống</strong>&nbsp;của ngư dân Phú Quốc. Tàu được trang bị đầy đủ áo phao, kính lặn, ống thở, chân vịt…để Quý khách có thể&nbsp;<strong>chiêm ngưỡng hệ động vật phong phú, rực rỡ sắc màu</strong>&nbsp;dưới đáy biển</p>\r\n\r\n			<p>Ăn trưa trên tàu</p>\r\n\r\n			<p>Tàu cập bến, Quý khách được đưa đến&nbsp;<strong>Bãi Sao</strong>&nbsp;- bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 2 đến tháng 10, trầm mình trong làn nước trong vắt, mát rượi</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>18g30: ăn tối tại nhà hàng Cơm Niêu Hồn Việt</p>\r\n\r\n<p>Xe đưa Quý khách về khách sạn, trên đường về sẽ ghé&nbsp;<strong>chợ đêm Dinh Cậu</strong>, Quý khách tự do dạo chợ, mua đặc sản và khám phá văn hóa ẩm thực địa phương, sau đó bách bộ về khách sạn</p>\r\n\r\n<p><strong>NGÀY 3</strong>:&nbsp;<strong>TẠM BIỆT PHÚ QUỐC ( ăn sáng)</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quý khách dùng điểm tâm, tự do tắm biển. Trả phòng, tiễn sân bay , tạm biệt.</p>', 45, 1660000, 1560000, 1, '2018-11-02 14:47:13', '2018-11-06 11:55:47');
INSERT INTO `tour` (`id`, `tentour`, `id_mien`, `ngay_khoihanh`, `ngay_ketthuc`, `thoigian_tour`, `diem_khoihanh`, `diem_den`, `phuongtien`, `id_ks`, `ten_ks`, `hinh_1`, `hinh_2`, `hinh_3`, `noidung`, `soluong_nguoi`, `gia`, `gia_km`, `noibat`, `created_at`, `updated_at`) VALUES
(16, 'Tour Du Lịch Đà Nẵng - Hồ Chí Minh - Côn Đảo', 3, '2018-11-15', '2018-11-18', '4 ngày 3 đêm', 'Đà Nẵng', 'Tp Hồ Chí Minh', 'Máy bay,Ô tô,Du thuyền', 19, NULL, 'C4G5_12.jpg', 'OeqG_miennam.jpg', 'qCIH_o.jpg', '<p><strong>NGÀY 1</strong><strong>&nbsp;:&nbsp; PHÚ QUỐC – ĐÔNG ĐẢO (ăn trưa, tối)</strong></p>\r\n\r\n<p>- Xe đón du khách tại sân bay Phú Quốc, đưa đoàn về khách sạn gửi hành lý, tự do nghỉ ngơi</p>\r\n\r\n<p>11g30: đưa đoàn đi ăn trưa với đặc sản Phú Quốc tại nhà hàng La Senta. Về KS nhận phòng</p>\r\n\r\n<p>Chiều: Khởi hành tham quan phía Đông đảo:</p>\r\n\r\n<p><strong>Vườn tiêu&nbsp;</strong>với những nọc tiêu thẳng tắp, xanh mơn mỡn, nổi tiếng chắc hạt, thơm ngon</p>\r\n\r\n<p><strong>Chùa Sư Muôn</strong>&nbsp;hay còn gọi là Hùng Long Tự, dâng hương, cầu an cho người thân</p>\r\n\r\n<p>Tham quan&nbsp;<strong>trại nuôi ong mật</strong>, tìm hiểu cuộc sống cần cù của những chú ong bé nhỏ và học cách lấy mật ong (quay mật) của người dân. Đến mùa trái cây, Quý khách còn được chiêm ngưỡng và tận tay hái các loại sầu riêng, chôm chôm ….trĩu quả trên cành</p>\r\n\r\n<p><strong>Làng chài cổ Hàm Ninh</strong>&nbsp;nơi đây nổi tiếng với nghề đánh bắt lưới ghẹ, cá ngựa, hải sâm, hái rong biển, Quý khách có dịp thưởng thức hải sản tươi vừa đánh bắt với giá gốc</p>\r\n\r\n<p>Ăn tối tại nhà hàng</p>\r\n\r\n<p><strong>Option thêm:</strong>&nbsp;Tham quan khu vui chơi giải trí&nbsp;<strong>&nbsp;Vinpearl land</strong>&nbsp;(nếu Quý khách vào Vin Pearland thì sẽ đi bằng xe trung chuyển của VinPearl, tự bỏ chương trình tham quan đông đảo, bỏ ăn tối, không bù chương trình, không bù hoặc chuyển bữa ăn)</p>\r\n\r\n<p>Về khách sạn nghỉ ngơi. Tự do dạo bãi biển, thưởng thức không khí yên tĩnh tuyệt vời của huyện đảo hoặc&nbsp;<strong>đăng ký tour câu mực đêm</strong><em>(Chi phí tự túc: tháng 11 đến tháng 3: 250.000đ/khách)</em></p>\r\n\r\n<p><strong>NGÀY 2</strong>:&nbsp;<strong>&nbsp;CITY</strong>&nbsp;-&nbsp;<strong>BÃI SAO – hoặc tour câu cá ngắm san hô ( ăn 3 bữa )</strong></p>\r\n\r\n<p><strong><em>Buổi sáng:</em></strong>&nbsp;Dùng điểm tâm sáng tại Khách sạn, sau đó du khách tham quan:</p>\r\n\r\n<table style=\"border-collapse:collapse; border-spacing:0px; box-sizing:border-box; font-family:open sans,sans-serif\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Lựa chọn 1: CITY – NAM ĐẢO</strong></p>\r\n\r\n			<p>9:00: Xe đưa du khách tham quan city:</p>\r\n\r\n			<p>Tham quan thắng cảnh&nbsp;<strong>Dinh Cậu</strong>&nbsp;và&nbsp;<strong>Dinh Bà Thủy Long Thánh Mẫu&nbsp;</strong>nét văn hóa tín ngưỡng, chỗ dựa tinh thần của ngư dân trên trên đảo trước khi ra khơi</p>\r\n\r\n			<p>Tham quan mua sắm tại<strong>&nbsp;Chợ Dương Đông</strong></p>\r\n\r\n			<p>Cơ sở ủ&nbsp;<strong>rượu vang Sim</strong>&nbsp;– một loại rượu đặc sản tại địa phương, thưởng thức rượu Sim rừng miễn phí</p>\r\n\r\n			<p><strong>Cơ sở nước mắm Phú Quốc</strong>&nbsp;với cách ủ truyền thống có lịch sử hơn 200 năm phát triển tại Phú Quốc</p>\r\n\r\n			<p>Ăn trưa tại nhà hàng địa phương với đặc sản địa phương</p>\r\n\r\n			<p>Tiếp tục tham quan Nam đảo:</p>\r\n\r\n			<p><strong>Cơ sở nuôi cấy ngọc trai</strong>&nbsp;&nbsp;tìm hiểu về quy trình nuôi trai lấy ngọc và tự tay mổ ốc trai&nbsp;</p>\r\n\r\n			<p><strong>Thiền Viện Trúc Lâm Hộ Quốc</strong>, nằm tựa lưng vào núi, hướng mặt ra biển. Đường lên Chùa tuyệt đẹp với một bên là rừng núi xanh tươi, một bên là đại dương mênh mông</p>\r\n\r\n			<p><strong>Di tích lịch sử nhà tù Phú Quốc</strong>&nbsp;– xem film tư liệu, cảm nhận nỗi đau của các chiến sĩ yêu nước và sống với niềm tự hào dân tộc</p>\r\n\r\n			<p>Đến&nbsp;<strong>Bãi Sao</strong>&nbsp;- bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 2 đến tháng 10, trầm mình trong làn nước trong vắt, mát rượi (giữa tháng 11- hết tháng 12 biển động, Bãi Sao không đẹp)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Lựa chọn 2: CÂU CÁ NGẮM SAN HÔ (đăng ký khi mua tour sẽ không phụ thu)</strong></p>\r\n\r\n			<p>8g00: Xe đưa du khách tham quan:</p>\r\n\r\n			<p><strong>Cơ sở nuôi cấy ngọc trai&nbsp;</strong>&nbsp;tìm hiểu về quy trình nuôi trai lấy ngọc và tự tay mổ ốc trai&nbsp;</p>\r\n\r\n			<p>Đến cảng An Thới, lên tàu du lịch đến Hòn Dâm, Hòn Dừa, Hòn Rõi…neo tàu,&nbsp;<strong>câu cá theo cách truyền thống</strong>&nbsp;của ngư dân Phú Quốc. Tàu được trang bị đầy đủ áo phao, kính lặn, ống thở, chân vịt…để Quý khách có thể&nbsp;<strong>chiêm ngưỡng hệ động vật phong phú, rực rỡ sắc màu</strong>&nbsp;dưới đáy biển</p>\r\n\r\n			<p>Ăn trưa trên tàu</p>\r\n\r\n			<p>Tàu cập bến, Quý khách được đưa đến&nbsp;<strong>Bãi Sao</strong>&nbsp;- bãi biển cát trắng đẹp nhất Phú Quốc từ tháng 2 đến tháng 10, trầm mình trong làn nước trong vắt, mát rượi</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>18g30: ăn tối tại nhà hàng Cơm Niêu Hồn Việt</p>\r\n\r\n<p>Xe đưa Quý khách về khách sạn, trên đường về sẽ ghé&nbsp;<strong>chợ đêm Dinh Cậu</strong>, Quý khách tự do dạo chợ, mua đặc sản và khám phá văn hóa ẩm thực địa phương, sau đó bách bộ về khách sạn</p>\r\n\r\n<p><strong>NGÀY 3</strong>:&nbsp;<strong>TẠM BIỆT PHÚ QUỐC ( ăn sáng)</strong></p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quý khách dùng điểm tâm, tự do tắm biển. Trả phòng, tiễn sân bay , tạm biệt.</p>', 35, 5990000, 5490000, 1, '2018-11-02 14:55:36', '2018-11-02 14:55:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyen` int(10) DEFAULT '0',
  `sdt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `quyen`, `sdt`, `diachi`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Ton Quoc viet', 'tonquocviet159753@gmail.com', '$2y$10$CmUXIZrvIkT/Iln133f4qeb6wF6ymGauoqe4RlJfJTfF0fD.9wW3W', 1, '1234567', '232 Hoàng Diệu Đà Nẵng, 232/11', 1, 'VTe00D04l4RJfTjWZOU4BJsotmmdU08B0NEMIrjE85iKPJqJ9XWmHKDHv44n', '2018-11-06 10:40:39', '2018-11-07 02:24:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitet_dattour`
--
ALTER TABLE `chitet_dattour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_tour` (`id_tour`);

--
-- Chỉ mục cho bảng `dattour`
--
ALTER TABLE `dattour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_kh` (`id_kh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_mien` (`id_mien`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mien_khachsan`
--
ALTER TABLE `mien_khachsan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mien_tour`
--
ALTER TABLE `mien_tour`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ma_mien` (`id_mien`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitet_dattour`
--
ALTER TABLE `chitet_dattour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dattour`
--
ALTER TABLE `dattour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `mien_khachsan`
--
ALTER TABLE `mien_khachsan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `mien_tour`
--
ALTER TABLE `mien_tour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD CONSTRAINT `khachsan_id_mien_foreign` FOREIGN KEY (`id_mien`) REFERENCES `mien_khachsan` (`id`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_ma_mien` FOREIGN KEY (`id_mien`) REFERENCES `mien_tour` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
