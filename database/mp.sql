-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 08:30 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bo_suu_tap`
--

CREATE TABLE `bo_suu_tap` (
  `id_hinh` int(11) NOT NULL,
  `hinh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bo_suu_tap`
--

INSERT INTO `bo_suu_tap` (`id_hinh`, `hinh`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_mon` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='chi_tiet_hoa_don';

--
-- Dumping data for table `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`ma_hoa_don`, `ma_mon`, `so_luong`, `don_gia`) VALUES
(16, 19, 1, 50000),
(18, 26, 1, 750000);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_tien` double NOT NULL,
  `tien_dat_coc` double NOT NULL,
  `con_lai` double NOT NULL,
  `hinh_thuc_thanh_toan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tinh_trang` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_khach_hang`, `ngay_dat`, `tong_tien`, `tien_dat_coc`, `con_lai`, `hinh_thuc_thanh_toan`, `ghi_chu`, `tinh_trang`) VALUES
(16, 18, '2016-10-21', 50000, 0, 0, 'Tiền mặt', '', 1),
(17, 18, '2016-10-21', 0, 0, 0, 'Tiền mặt', '', 1),
(18, 18, '2016-10-21', 750000, 0, 0, 'Tiền mặt', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `phai`, `dia_chi`, `dien_thoai`, `email`, `matkhau`, `ghi_chu`) VALUES
(16, 'Trung', 0, 'Canada', '1234567', 'info@vietcareline.com', '12345', NULL),
(15, 'Nguyên thị minh nguyệt', 1, '123Pay test thanh toán', '0973567208', 'tramle120887@gmail.com', '12345', NULL),
(14, 'Thanh Trúc', 1, '400/1 Hồng bàng', '0908969671', 'acomicamvi@yahoo.com', '12345', NULL),
(17, 'chi', 0, 'hcm', '32123132', 'mychi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'df'),
(18, 'Nguyen Anh Tuan', 1, '357 Lê Hồng Phong', '09789456', 'tuan@gmail.com', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Table structure for table `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ten_loai_nguoi_dung` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`ma_loai_nguoi_dung`, `ten_loai_nguoi_dung`) VALUES
(1, 'Quản trị'),
(2, 'Khách hàng'),
(3, 'Nhân viên'),
(4, 'Kỹ thuật'),
(5, 'Kế toán'),
(6, 'Trưởng phòng'),
(7, 'Phó phòng'),
(8, 'Giám đốc'),
(9, 'Phó giám đốc');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url_ten_loai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `ma_loai_cha` int(11) NOT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai`, `ten_loai`, `url_ten_loai`, `mo_ta`, `ma_loai_cha`, `hinh`) VALUES
(1, 'SỨC KHỎE & SẮC ĐẸP', 'suc-khoe-sac-dep', 'SỨC KHỎE & SẮC ĐẸP', 0, ''),
(207, 'Trang điểm', 'trang-diem', 'Trang điểm', 1, 'maybelline-0312-699921-1-zoom.jpg'),
(209, 'Chăm sóc da & mặt', 'cham-soc-da-mat', 'Chăm sóc da & mặt', 1, 'vichy-6328-207832-1-zoom.jpg'),
(211, 'Nước hoa', 'nuoc-hoa', 'Nước hoa', 1, 'nuoc_hoa_1.jpg'),
(212, 'Dụng cụ chăm sóc sắc đẹp', 'dung-cu-cham-soc-sac-dep', 'Dụng cụ chăm sóc sắc đẹp', 1, 'vibroaction-2199-909891-1-zoom.jpg'),
(213, 'Chăm sóc tóc', 'cham-soc-toc', '<p>Chăm s&oacute;c t&oacute;c</p>\r\n', 1, '4.jpg'),
(214, 'Tắm & Chăm sóc cơ thể', 'tam-cham-soc-co-the', '<p>Tắm &amp; Chăm s&oacute;c cơ thể</p>\r\n', 1, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten_dang_nhap` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mat_khau` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ngay_dang_ky` date DEFAULT NULL,
  `ngay_dang_nhap_cuoi` date DEFAULT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `ma_loai_nguoi_dung`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`, `ngay_dang_nhap_cuoi`, `active`) VALUES
(1, 1, 'Quản trị', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@hcmuns.edu.vn', '2007-11-01', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `ma_san_pham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `noi_dung_tom_tat` text COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_chi_tiet` text COLLATE utf8_unicode_ci,
  `don_gia` int(11) NOT NULL DEFAULT '0',
  `dvt` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Cái',
  `tinh_trang` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang demo, chưa có hàng',
  `hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `san_pham_moi` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_san_pham`, `ma_san_pham`, `ten_san_pham`, `ma_loai`, `noi_dung_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `dvt`, `tinh_trang`, `hinh`, `san_pham_moi`) VALUES
(1, 'usbeef1', 'kem white lucent', 209, 'Dưỡng trắng.', 'Dạng kem, thấm nhanh.', 550000, 'Kg', 'Có hàng, giao hàng tận nơi', '1.jpg', 0),
(2, 'usbeef2', 'Kem shi', 209, 'Dưỡng ẩm.', 'Giúp da căng mịn.', 450000, 'Kg', 'Có hàng, giao hàng tận nơi', '2.jpg', 0),
(3, 'usbeef3', 'Pond''s', 209, 'Dưỡng trắng.', 'Trắng hồng rạng rỡ.', 429000, 'Kg', 'Có hàng, giao hàng tận nơi', '3.jpg', 1),
(4, 'usbeef4', 'Olay', 209, 'Chống lão hóa da.', 'Chống lão hóa da khi tuổi về già.', 390000, 'Kg', 'Có hàng, giao hàng tận nơi', '4.jpg', 0),
(5, 'hokubee1', 'Kem agc', 207, 'Kem phủ lớp.', 'Kem mịn, không bong vảy.', 689000, 'Kg', 'Có hàng, giao hàng tận nơi', '5.jpg', 0),
(6, 'hokubee2', 'Kem Lane', 209, 'Dưỡng da ban đêm.', 'Phục hồi da hư tổn.', 669000, 'Kg', 'Có hàng, giao hàng tận nơi', '6.jpg', 1),
(7, 'aubeef1', 'Kem sebo', 209, 'Dưỡng da', 'Mịn, thấm nhanh.', 590000, 'Kg', 'Có hàng, giao hàng tận nơi', '7.jpg', 0),
(8, 'aubeef3', 'Sữa rửa mặt Pamer', 209, 'Làm sạch bụi bẩn, bã nhờn.', 'Tạo bọt giúp việc rửa dễ dàng.', 16000, 'Kg', 'Đang demo, chưa có hàng', '8.jpg', 0),
(9, 'aubeef6', 'Pond''s', 207, 'Phấn Pond''s', 'Làm thêm cơ thể.', 340000, 'Kg', 'Có hàng, giao hàng tận nơi', '9.jpg', 1),
(10, 'aubeef7', 'Nivea', 209, 'Dưỡng trắng.', 'Thấm nhanh, trắng nhanh.', 390000, 'Kg', 'Có hàng, giao hàng tận nơi', '10.jpg', 0),
(11, 'KVDP-IKONE', 'Vichy', 209, 'Dưỡng ẩm ban ngày.', 'Chống nắng, dưỡng ẩm.', 1350000, 'Khung', 'Có hàng, giao hàng tận nơi', '11.jpg', 0),
(12, 'KVDP-SDV', 'Lancome', 209, 'Chống nắng.', 'Chống nắng tốt.', 410000, 'Cái', 'Có hàng, giao hàng tận nơi', '12.jpg', 0),
(13, 'KVDP-SKONE', 'Transino', 209, 'sữa rửa mặt.', 'Trắng da, sạch bụi bẩn.', 630000, 'Khung', 'Có hàng, giao hàng tận nơi', '13.jpg', 1),
(14, '7210-522401', 'Stanhome', 209, 'Sữa rửa mặt.', 'Tẩy tế bào chết.', 149000, 'chai', 'Đang demo, chưa có hàng', '14.jpg', 0),
(15, '8763-86923', 'Lanige', 209, 'Kem dưỡng ẩm da mặt.', 'Thấm nhanh', 149000, 'chai', 'Đang demo, chưa có hàng', '15.jpg', 0),
(16, '8459-55995', 'Mbr', 207, 'Dưỡng mi.', 'Dưỡng mi nhanh dài.', 180000, 'chai', 'Đang demo, chưa có hàng', '16.jpg', 0),
(17, '1798-92309', 'Vaseline', 209, 'Sữa dưỡng thể.', 'Trắng da toàn thân.', 56000, 'chai', 'Đang demo, chưa có hàng', '17.jpg', 0),
(18, 'A301', 'Cọ trang điểm đa năng', 212, 'Tool/ dụng cụ', 'Cọ trang điểm ', 100000, 'Cái', '', '18.jpg', 0),
(19, 'A302', 'Lượt chải tóc', 213, 'Tool/ dụng cụ', 'Lược chải tóc ', 50000, 'Cái', '', '19.jpg', 1),
(20, 'A303', 'Cọ đánh phấn', 2012, 'Cọ/ Tool/ dụng cụ', 'Cọ đánh phấn phủ ', 60000, 'Cái', 'CÒn hàng', '20.jpg', 0),
(21, 'A304', 'Bọt rửa mặt', 2012, 'Tool/ dụng cụ', 'Bọt rửa mặt', 30000, 'Cái', 'Còn hàng', '21.jpg', 1),
(22, 'A305', 'Cọ trang điểm đa năng', 207, 'Trang điềm', 'Cọ trang điểm đa năng ', 100000, 'Cái', '', '18.jpg', 0),
(23, 'GG226', 'Cọ đánh phấn', 207, 'Trang điểm/ CỌ', 'Cọ đánh phấn phủ ', 60000, 'Cái', 'CÒn hàng', '24.jpg', 1),
(24, 'MGS7', 'Mi giả', 207, 'Trang điểm', 'Mi giả ', 200000, 'Hộp', 'Còn hàng', '22.jpg', 0),
(25, 'PPC98', 'Phấn nền', 207, 'Phấn phủ trang điểm', 'Phấn phủ che khuyết điểm ', 80000, 'Hộp', 'CÒn hàng', '23.jpg', 1),
(26, 'Cellande Spa', 'Cellande Spa', 209, 'Chăm sóc da sau mụn', 'Lấy đi tế bào chết, cải thiện làn da săn chắc', 750000, 'Hủ', 'Có hàng', '1432270398_cellande_6.png', 1),
(27, 'SW-88', 'Mặt nạ nhện Spider Web', 209, 'các vấn đề về da mặt', 'Mặt nạ nhện Spider', 10540000, '05 Miếng / Bộ', 'Có hàng, giao hàng tận nơi', '1437665439_spider-web-2.png', 1),
(28, 'BLFMI-100', 'Nước hoa nam ', 211, 'loại nước hoa mớ năm 2016,mang lại sự nam tính', 'Hương cam', 1500000, 'Chai', 'Có hàng, giao hàng tận nơi', '1432527037_BENTLEY.png', 1),
(29, 'CC-WODA', 'Chance Chanel Woda', 211, 'Nước hoa Chance Chanel Woda', 'Nước hoa Chance Chanel Woda', 3200000, 'Chai', 'Có hàng, giao hàng tận nơi', '1432527902_chanel-chance-woda-perfumowana-50-ml.png', 1),
(30, 'CCEF-EDT', 'Chance Chanel', 211, 'Chance Chanel', 'Chance Chanel', 45000, 'Chai', 'Hàng đang về, vui lòng đặt trước', 'CHANEL-CHANCE-EAU-FRAICHE.png', 0),
(31, 'TFN-100', 'Tomford Noir 100 ml', 211, 'Nước hoa Tomford Noir', 'Nước hoa Tomford Noir', 2500000, 'Chai', 'Có hàng, giao hàng tận nơi', '1432528190_TOMFORD-NOIR.png', 0),
(44, 'PPH5', 'Son môi', 207, 'Màu đỏ quyến rũ.', 'Mướt, bám màu tốt', 200000, 'thỏi', 'CÒn hàng', '11.1.jpg', 1),
(32, 'Abena-6662', 'Dầu gội và tắm Abena', 213, 'Sản phẩm 2 trong 1', 'Thích hợp cho mọi loại da', 265000, 'Chai', 'Có hàng', '1432399472_shower-and-bathing-soap.png', 1),
(33, 'HCR-3N', 'Thuốc nhuộm tóc 3N', 213, 'Thuốc nhuộm tóc ', 'Dễ sử dụng', 120000, 'Hộp', 'Có hàng, giao hàng tận nơi', '1429348379_HIRICA3N.JPG', 1),
(43, 'PPH3', 'Kẻ mắt Eye', 207, 'Vẻ mắt không lem', 'Vẻ mắt không lem', 200000, 'thỏi', 'CÒn hàng', '9.1.jpg', 1),
(34, 'HCR-5N', 'Thuốc nhuộm tóc 5N', 213, 'Sản phẩm phổ biến tại Hàn quốc', 'Sản phẩm thuốc nhuộm cao cấp ', 120000, 'Hộp', 'Có hàng, giao hàng tận nơi', '1429348826_HIRICA5N.JPG', 1),
(42, 'PPH2', 'Son dưỡng DHC', 209, 'Son dưỡng môi', 'Làm môi mềm,trị thâm.', 200000, 'thỏi', 'CÒn hàng', '7.1.jpg', 1),
(35, 'HCR-E4', 'Thuốc nhuộm tóc ', 213, 'Mang lại cho bạn mái tóc hoàn hảo', 'THuốc nhuộm dạng gội HicareSản ', 220000, 'Hộp', 'Có hàng, giao hàng tận nơi', '1429347125_HIRICA-EASY-4.JPG', 1),
(41, 'PPH1', 'Son Volite', 207, 'Son môi', 'Mướt, bám màu tốt', 200000, 'thỏi', 'CÒn hàng', '6.1.jpg', 1),
(36, 'Abena-6994', 'Sữa tắm ', 214, 'Sữa Tắm Dưỡng Thể  Abena', 'Độ pH 5-6 không kích ứng da', 260000, 'Chai', 'Có hàng, giao hàng tận nơi', '1432399680_6964-1.png', 1),
(40, 'PPC100', 'Nước hoa ', 211, 'Nước hoa', 'Nước hoa châu Âu', 200000, 'Hộp', 'CÒn hàng', '25.jpg', 1),
(37, 'AQF-01', 'Kem đánh răng Aquafresh', 214, 'Ngăn chặn những tác hại về răng', 'Ngăn chặn những tác hại về răng ', 200000, 'Tuýp', 'Có hàng, giao hàng tận nơi', '1431259956_AQUAFRESH_1.png', 1),
(38, 'C3DW-FAT', 'Kem đánh răng Crest 3D', 214, 'Kem đánh răng Crest 3D', 'Ngăn chặn những tác hại về răng ', 200000, 'Tuýp', 'Có hàng, giao hàng tận nơi', '1431260017_CREST-GLAMOROROUS-WHITENING-VIBRANT-TOOTHPASTE_7.png', 1),
(39, 'PPC99', 'Nước hoa', 211, 'Nước hoa châu Âu', 'Nước hoa châu Âu', 200000, 'Hộp', 'CÒn hàng', '26.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma_tin_tuc` int(11) NOT NULL,
  `tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tom_tat` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `chi_tiet` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` date NOT NULL,
  `ngay_gui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`) VALUES
(1, 'Bí quyết dưỡng da tự nhiên', '24/06/2011 - Bí quyết dưỡng da tự nhiên bằng dưa hấu thơm ngon cho làn da đẹp tuyệt vời', '<div style="padding:30px">\r\n<p>Dưa hấu là loại quả rất quen thuộc với chúng ta, dưa hấu là quả có nhiều vitamin tốt cho sức khỏe.<br />\r\nChúng tôi xin giới thiệu <strong>bí quyết dưỡng da tự nhiên</strong> bằng dưa hấu thơm ngon cho làn da đẹp tuyệt vời cho chị em phụ nữ</p>\r\n<h3><span style="color: #0000ff;">1. Da cháy nắng</span></h3>\r\n<p>Với dưa hấu sẽ khắc phục tình trạng da cháy nắng để bạn có một làn da đẹp và không sợ bị cháy nắng da. Bạn chỉ cần ép nước dưa hấu và thêm một ít nước sạch cho vào tủ lạnh để nước ép dưa hấu được mát hơn. rồi lấy ra thấm vào các vùng da bị tổn thương khoảng 30 phút.</p>\r\n<p style="text-align: center;"><img class="alignnone size-full wp-image-6729" alt="bi-quyet-duong-da-bang-dua-hau-1" src="images/baiviet/news11.jpg" width="600" height="375" /></p>\r\n<p>Cách chữa trị này rất lành tính và dịu nhẹ nhưng có tác dụng khá tốt. Nó sẽ làm mát vết bỏng nắng tức thì, xóa mờ vết cháy nắng. Bạn có thể làm theo phương pháp này mỗi tuần 3 lần.</p>\r\n<h3><span style="color: #0000ff;">2. Da lão hóa.</span></h3>\r\n<p>Mối lo da lão hóa của bạn sẽ được đẩy lùi nhờ các dưỡng chất đến từ dưa hấu. Bạn hãy trộn 2 thìa nước dưa hấu ép nguyên chất với 1 thìa quả bơ nghiền nhuyễn. Sau đó bạn đắp lên mặt trong 20 phút sau đó rửa lại mặt bằng nước ấm.</p>\r\n<p>Trong quả bơ có chứa rất nhiều vitamin A giúp da bạn săn chắc, bảo vệ da khỏi các yếu tố gây lão hoa da. Các chất chống oxi hóa có trong mặt nạ bơ, dưa hấu góp phần giúp da mịn màng, xóa dấu vết của các rãnh nhăn. Bạn có thể đắp loại mặt nạ này mỗi tuần 2 lần.</p>\r\n<h3><span style="color: #0000ff;">3. Da khô</span></h3>\r\n<p>Dưa hấu là người bạn hỗ trợ tuyệt vời đối với da bị khô, bong tróc bởi chúng chưa rất nhiều nước. Ngoài ra khi dưa hấu được kết hợp với mật ong ( cũng là một giải pháp cứu cánh làn da khô hạn) thì tác dụng dưỡng ẩm lại càng tăng lên gấp bội.<br />\r\nBạn hãy trộn nước ép dưa hấu với mật ong nguyên chất. Thoa hỗn hợp này lên mặt trong 15-20 phút sau đó rửa lại thật sạch lại với nước.</p>\r\n<h3><span style="color: #0000ff;">4. Da bị mụn</span></h3>\r\n<p>Một phương pháp hiệu quả dành cho làn da bị mụn: trộn 1 thìa nước dưa hấu ép với 1 thìa chuối nạo nhuyễn cùng nửa thìa nước chanh. Chuối rất giàu vitamin B2, B6, B12 sẽ giúp da bạn giảm viêm nhiễm, cân bằng lại độ ẩm cần thiết cho da khiến da bạn mềm mại. Ngoài ra chanh còn giúp kiềm dầu, khiến da bạn sạch sẽ, trơn láng.</p>\r\n<p style="text-align: center;"><img  alt="bi-quyet-duong-da-bang-dua-hau-2-981x1024" src="images/baiviet/news12.jpg" width="400" height="400" /></p>\r\n<p>Cách làm rất đơn giản, bạn hãy trộn thật đều những nguyên liệu kể trên. Sau đó, bạn hãy thoa lên mặt, để chừng 15 phút rồi tráng lại mặt với nước ấm.</p>\r\n<h3><span style="color: #0000ff;">5. Da có lỗ chân lông to</span></h3>\r\n<p>Với những người luôn khổ sở vì sở hữu lỗ chân lông to, dưa hấu cũng sẽ khắc phục được phần nào vấn đề mất thẩm mỹ này. Bạn hãy trộn 1 thìa dưa hấu ép với 1 thìa lá bạc hạ xay nát. Sau đó bạn cho hỗn hợp vào tủ lạnh để nó đông thành đá. Sau đó, sử dụng chính loại đá viên này để mát xa mặt mỗi ngày sau bước rửa mặt thông thường.</p>\r\n<p><em>Bạn có thể ăn hoặc làm nước ép uống hàng ngày để có được làn da đẹp như ý nhe !</em></p>\r\n</div>', 'duongda.jpg', '(Theo Phụ Nữ TP HCM)', '2014-01-04', '0000-00-00'),
(2, 'Dưỡng môi mềm mịn', '24/06/2011 - Dưỡng môi mềm mịn trong mùa hanh khô với những bí quyết cực kỳ đơn giản ', '<div style="padding:20px">\r\n    <p>&nbsp;</p>\r\n<p>Mùa đông bắt đầu đến kéo theo những cơn gió hanh khô cũng là lúc chị em lo lắng về tình trạng <span style="color: #3366ff;"><strong>khô môi</strong></span>. Làm sao để giữ được đôi <span style="color: #3366ff;"><strong>môi luôn căng mọng quyến rũ</strong> </span>là câu hỏi của tất cả chị em phụ nữ. Chúng tôi xin giới thiệu cho các bạn một vài <span style="color: #3366ff;"><strong>bí quyết</strong></span> đơn giản ngay dưới đây. Hy vọng sẽ giúp chị em khắc phục được tình trạng khô môi trong những ngày này.</p>\r\n<p>Khô môi thường xảy ra khi môi bị mất đi chất dầu tự nhiên. Kết quả khiến môi bị khô, nứt, đau, đóng vảy có khi rướm máu. Nhất là trong thời tiết hanh khô này, bạn cần phải chú ý chăm sóc đôi môi hơn cả nếu bạn muốn sở hữu làn môi mềm mịn, quyến rũ.</p>\r\n<p><span style="color: #993300; font-size: 12pt;"><strong> Nguyên nhân cơ bản dẫn đến tình trạng khô môi</strong></span></p>\r\n<p>&#8211; Khô môi chủ yếu do nắng, gió, nóng, môi trường lạnh: Nếu như căn phòng của bạn không khí đang quá khô hanh, bạn cần phải bổ sung thêm độ ẩm nhân tạo. Do đó, vào mùa đông, để dưỡng ẩm cho làn da bạn nên mua một máy tạo độ ẩm không khí.</p>\r\n<p>&#8211; Liếm môi thường xuyên: Thói quen liếm môi nhiều lần/ngày chỉ càng làm tệ hại cho tình trạng đôi môi của bạn. Bởi vì khi hành động liếm môi của bạn kết thúc, môi bạn sẽ thường bị khô. Chưa kể, nước bọt của bạn có chứa thức ăn và các yếu tố làm da bị khô hơn khi tiếp xúc với oxy.</p>\r\n<p>&nbsp;</p>\r\n<p><img  aligncenter" src="images/baiviet/news21.jpg" alt="1" width="400" height="300" /></p>\r\n<p>&nbsp;</p>\r\n<p>&#8211; Hóa chất từ son môi, từ chất xăm môi: Nếu bạn thường xuyên sử dụng son môi, hãy tẩy trang cho môi thật sạch và tẩy da chết cho môi 1 tuần/lần.<br />\r\n&#8211; Di truyền: Đây có thể là khả năng ít nhưng cũng là một trong những nguyên nhân khiến môi bạn khô. Bạn hãy chăm sóc kỹ đôi môi nếu bạn là một trong số những người có nguyên nhân này.</p>\r\n<p><span style="color: #993300; font-size: 12pt;"><strong> Cách giải quyết tình trạng khô môi một cách đơn giản nhất</strong></span></p>\r\n<p>&#8211; Tránh các yếu tố gây khô môi như đã kể trên.<br />\r\n&#8211; Uống đủ nước, từ 1,5 đến 2 lít/ ngày.<br />\r\n&#8211; Bổ sung vitamin E tổng hợp.<br />\r\n&#8211; Bôi kem dưỡng ẩm môi 1 đến 2 giờ/ lần.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news22.jpg"><img src="images/baiviet/news22.jpg" alt="2" width="400" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p>&#8211; Bôi son dưỡng ẩm, giúp giảm đau, có chất chống nắng SPF 15.<br />\r\n&#8211; Thỉnh thoảng dùng bàn chải mềm chải nhẹ để lớp vảy trên môi tróc ra.<br />\r\n&#8211; Ăn thêm trái cây, rau có chứa chất Carotene như cà rốt, cà chua.</p>\r\n<p><span style="color: #993300; font-size: 12pt;"><strong> Một số phương pháp trị khô, nẻ môi từ tự nhiên</strong></span></p>\r\n<p><span style="font-size: 10pt; color: #003366;"><strong> Chống nẻ môi bằng mật ong</strong></span></p>\r\n<p>Cách trị nẻ môi phổ biến nhất và cũng được xem là một trong những cách hiệu quả nhất chính là sử dụng mật ong. Mật ong có tác dụng dưỡng ẩm và chữa trị chứng nẻ môi mùa đông cực tốt.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news23.jpg"><img src="images/baiviet/news23.jpg" alt="3" width="400" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p>Bạn chỉ cần lấy một chút mật ong nguyên chất thoa nhẹ nhàng lên môi 3 lần một ngày. Hoặc bạn cũng có thể kết hợp mật ong cùng glycerin (bạn có thể mua glycerin tại các hiệu thuốc Tây khá dễ dàng) để tạo thành hỗn hợp dưỡng môi chống khô nẻ môi hiệu quả. Nếu sử dụng theo cách này, bạn chỉ cần bôi hỗn hợp dưỡng môi trước khi đi ngủ và sau khi thức dậy là được. Bạn sẽ cảm nhận ngay được kết quả tuyệt vời mà mật ong đem lại cho làn môi của mình ngay sau lần sử dụng đầu tiên.</p>\r\n<p><span style="color: #003366;"><strong> Vaseline</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news24.jpg"><img src="images/baiviet/news24.jpg" alt="4" width="451" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p>Vaseline rất hiệu quả trong việc điều trị đôi môi khô. Đơn giản chỉ cần áp dụng một số vaseline trên đôi môi khô của bạn nhiều lần trong ngày để bảo vệ môi. Lưu ý khi thoa vaseline trên đôi môi khô trước khi đi ngủ để giữ cho đôi môi được nuôi dưỡng trong đêm. Đầu tiên bạn có thể thoa 1 ít mật ong lên môi và để khô trong vài giây và sau đó thoa vaseline. Chờ một vài phút và làm sạch bằng cách sử dụng 1 miếng bông thấm nước ấm. Lặp lại 2 lần/ngày.</p>\r\n<p><span style="color: #003366;"><strong> Tẩy tế bào chết cho môi bằng đường</strong></span></p>\r\n<p>Nhiều người có thói quen tẩy tế bào chết cho da mặt và cơ thể nhưng lại bỏ qua đôi môi của mình. Nếu bạn là một trong số đó, hãy thay đổi thói quen này bằng cách sử dụng đường để tẩy tế bào chết cho môi, giúp môi luôn mịn màng và quyến rũ.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news25.jpg"><img src="images/baiviet/news25.jpg" alt="5" width="400" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p>Chỉ cần trộn hai muỗng cà phê đường với một muỗng cà phê mật ong, bạn sẽ có loại kem tẩy tế bào da chết hoàn hảo mà lại an toàn cho đôi môi của mình. Bôi hỗn hợp lên môi, mát xa nhẹ nhàng và để trong khoảng 5 phút, bạn sẽ loại bỏ được những lớp tế bào chết cũng như những vảy da nứt nẻ bong tróc trên môi mình. Cuối cùng, bạn chỉ cần rửa sạch bằng nước ấm rồi bôi một chút dầu ô liu và ngắm nhìn làn môi xinh của mình mà thôi.</p>\r\n<p><span style="color: #003366;"><strong> Dầu dừa</strong></span></p>\r\n<p>Nó là một loại kem dưỡng ẩm tự nhiên có thể được thoa trên môi khô mà không có bất kỳ tác dụng phụ nào. Sử dụng vài lần một ngày để giữ cho đôi môi ẩm ướt. Ngoài dầu dừa bạn cũng có thể sử dụng dầu ô liu, dầu mù tạt.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news26.jpg"><img  src="images/baiviet/news26.jpg" alt="6" width="400" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #003366;"><strong>Hoa hồng</strong></span></p>\r\n<p>Ngâm những cánh hoa trong sữa trong một vài giờ, nghiền nhuyễn, sau đó thoa lên môi khô từ 2-3 lần/ngày và mỗi đêm trước khi đi ngủ. Biện pháp khắc phục này sẽ giúp duy trì độ ẩm đôi môi của bạn cũng như trong việc duy trì màu sắc đôi môi.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news27.jpg"><img src="images/baiviet/news27.jpg" alt="7" width="400" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #003366;"><strong>Dưa chuột</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p><a href="images/baiviet/news28.jpg"><img src="images/baiviet/news28.jpg" alt="8" width="400" height="300" /></a></p>\r\n<p>&nbsp;</p>\r\n<p>Chà xát nhẹ nhàng 1 lát nhỏ dưa chuột lên môi khô. Để trong 15-20 phút và sau đó rửa sạch môi với nước bình thường. Áp dụng nhiều lần trong ngày, nước ép dưa chuột sẽ giúp tình trạng mau được chữa khỏi.</p>\r\n<p><em>Bài viết trên là những mẹo đơn giản nhất giúp bạn thoát khỏi nỗi ám ảnh khô môi mỗi khi mùa lạnh tới. Chúc các bạn luôn sở hữu đôi môi căng mọng và quyến rũ!</em></p>\r\n\r\n</div>', 'duongmoi.jpg', '(Theo Phụ Nữ TP HCM)', '2014-01-04', '2014-01-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bo_suu_tap`
--
ALTER TABLE `bo_suu_tap`
  ADD PRIMARY KEY (`id_hinh`);

--
-- Indexes for table `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_mon`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Indexes for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`ma_loai_nguoi_dung`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `ma_loai_nguoi_dung` (`ma_loai_nguoi_dung`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_san_pham`),
  ADD UNIQUE KEY `ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma_tin_tuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bo_suu_tap`
--
ALTER TABLE `bo_suu_tap`
  MODIFY `id_hinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `ma_loai_nguoi_dung` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;
--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma_tin_tuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
