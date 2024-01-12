-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 12:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bomon`
--

CREATE TABLE `tb_bomon` (
  `MABOMON` char(20) NOT NULL,
  `TENBOMON` char(20) DEFAULT NULL,
  `SDTBOMON` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bomon`
--

INSERT INTO `tb_bomon` (`MABOMON`, `TENBOMON`, `SDTBOMON`) VALUES
('CK-DL', 'Cơ khí-Động lực', 921345618),
('CNTT', 'Công nghệ thông tin', 921345678),
('D-DT', 'Điện-Điện tử', 921345619),
('XD', 'Xây dựng', 921345676);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dongia`
--

CREATE TABLE `tb_dongia` (
  `MADONGIA` char(20) NOT NULL,
  `MADONVI` char(20) NOT NULL,
  `DONGIA` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_dongia`
--

INSERT INTO `tb_dongia` (`MADONGIA`, `MADONVI`, `DONGIA`) VALUES
('dg1', 'VND', '2000000'),
('dg2', 'VND', '1000000'),
('dg3', 'VND', '500000'),
('dg4', 'VND', '3000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donvi`
--

CREATE TABLE `tb_donvi` (
  `MADONVI` char(20) NOT NULL,
  `DONVI` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_donvi`
--

INSERT INTO `tb_donvi` (`MADONVI`, `DONVI`) VALUES
('VND', 'Việt nam đồng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nguoithan`
--

CREATE TABLE `tb_nguoithan` (
  `MANGUOITHAN` char(20) NOT NULL,
  `MAQH` char(20) NOT NULL,
  `MACDV` char(20) NOT NULL,
  `TENNGUOITHAN` char(20) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` char(20) DEFAULT NULL,
  `SDT` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_nguoithan`
--

INSERT INTO `tb_nguoithan` (`MANGUOITHAN`, `MAQH`, `MACDV`, `TENNGUOITHAN`, `NGAYSINH`, `GIOITINH`, `SDT`) VALUES
('01', '1', '001', 'Võ Thị A', '1990-11-11', 'Nữ', 913132256),
('02', '2', '002', 'Nguyễn Thị B', '1990-12-09', 'Nữ', 913123216),
('03', '3', '003', 'Trần Văn C', '1990-12-06', 'Nam', 913123756);

-- --------------------------------------------------------

--
-- Table structure for table `tb_quanhe`
--

CREATE TABLE `tb_quanhe` (
  `MAQH` char(20) NOT NULL,
  `MOIQUANHE` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_quanhe`
--

INSERT INTO `tb_quanhe` (`MAQH`, `MOIQUANHE`) VALUES
('1', 'con'),
('2', 'vợ chồng'),
('3', 'cha mẹ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_quyen`
--

CREATE TABLE `tb_quyen` (
  `MAQUYEN` char(20) NOT NULL,
  `QUYEN` char(20) DEFAULT NULL,
  `MOTA` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_quyen`
--

INSERT INTO `tb_quyen` (`MAQUYEN`, `QUYEN`, `MOTA`) VALUES
('01', 'admin', 'Người sử dụng có quyền admin thường có quyền lực cao nhất trong hệ thống hoặc ứng dụng.'),
('02', 'users', 'Người sử dụng thông thường chỉ có quyền lực hạn chế so với admin.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_thamhoi`
--

CREATE TABLE `tb_thamhoi` (
  `MATHAMHOI` char(20) NOT NULL,
  `MADONGIA` char(20) NOT NULL,
  `MACDV` char(20) NOT NULL,
  `NOIDUNG` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_thamhoi`
--

INSERT INTO `tb_thamhoi` (`MATHAMHOI`, `MADONGIA`, `MACDV`, `NOIDUNG`) VALUES
('1', 'dg1', '001', 'Người thân bị bệnh'),
('2', 'dg2', '002', 'Trợ cấp thiên tai'),
('3', 'dg3', '003', 'Tai nạn');

-- --------------------------------------------------------

--
-- Table structure for table `tb_thongtincdv`
--

CREATE TABLE `tb_thongtincdv` (
  `MACDV` char(20) NOT NULL,
  `MABOMON` char(20) NOT NULL,
  `CHUCVU` char(20) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `GIOITINH` char(20) DEFAULT NULL,
  `NGAYVAOCD` date DEFAULT NULL,
  `TENCVD` char(20) DEFAULT NULL,
  `DIACHI` text DEFAULT NULL,
  `SDT` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_thongtincdv`
--

INSERT INTO `tb_thongtincdv` (`MACDV`, `MABOMON`, `CHUCVU`, `NGAYSINH`, `GIOITINH`, `NGAYVAOCD`, `TENCVD`, `DIACHI`, `SDT`) VALUES
('001', 'CNTT', 'Công đoàn viên', '1990-11-11', 'Nam', '2010-11-11', 'Nguyễn Văn A', 'Số nhà 123, đường Võ Văn Kiệt, Trà Vinh', 913372110),
('002', 'XD', 'Công đoàn viên', '1990-12-09', 'Nữ', '2012-12-12', 'Lê Thị C', 'Số nhà 100, đường Võ Văn Kiệt, Trà Vinh', 913123456),
('003', 'CNTT', 'Công đoàn viên', '1990-12-02', 'Nam', '2012-06-12', 'Võ Văn C', 'Số nhà 167, đường Võ Văn Kiệt, Trà Vinh', 913372111);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tintuc`
--

CREATE TABLE `tb_tintuc` (
  `MATINTUC` char(20) NOT NULL,
  `TIEUDE` text DEFAULT NULL,
  `MOIDUNG` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tintuc`
--

INSERT INTO `tb_tintuc` (`MATINTUC`, `TIEUDE`, `MOIDUNG`) VALUES
('tt1', 'Hội thi tiếng hát karaoke năm 2023 mừng Ngày Phụ nữ Việt Nam 20/10.', ''),
('tt2', 'Trường Đại học Trà Vinh có thêm 03 chương trình đào tạo đạt kiểm định chất lượng giáo dục quốc tế AUN – QA là ngành Điều dưỡng, Nông nghiệp và Ngôn ngữ Khmer, nâng tổng số chương trình đạt chuẩn chất lượng giáo dục quốc tế lên 09 chương trình và là Trường nằm trong tốp đầu ở ĐBSCL có nhiều chương trình đạt kiểm định chất lượng giáo dục quốc tế AUN – QA và FIBAA.', NULL),
('tt3', 'Lễ ký kết Biên bản ghi nhớ thực hiện Chương trình “75 nghìn sáng kiến, vượt khó, phát triển”.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `USERS_ID` char(20) NOT NULL,
  `MACDV` char(20) NOT NULL,
  `MAQUYEN` char(20) NOT NULL,
  `TAIKHOAN` char(20) DEFAULT NULL,
  `MATKHAU` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`USERS_ID`, `MACDV`, `MAQUYEN`, `TAIKHOAN`, `MATKHAU`) VALUES
('001', '001', '01', 'taikhoan1', '123'),
('002', '002', '02', 'taikhoan2', '123'),
('003', '003', '02', 'taikhoan3', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bomon`
--
ALTER TABLE `tb_bomon`
  ADD PRIMARY KEY (`MABOMON`);

--
-- Indexes for table `tb_dongia`
--
ALTER TABLE `tb_dongia`
  ADD PRIMARY KEY (`MADONGIA`),
  ADD KEY `FK_DON_VI` (`MADONVI`);

--
-- Indexes for table `tb_donvi`
--
ALTER TABLE `tb_donvi`
  ADD PRIMARY KEY (`MADONVI`);

--
-- Indexes for table `tb_nguoithan`
--
ALTER TABLE `tb_nguoithan`
  ADD PRIMARY KEY (`MANGUOITHAN`),
  ADD KEY `FK_NGUOI_THAN` (`MACDV`),
  ADD KEY `FK_QUAN_HE_THAN_NHAN` (`MAQH`);

--
-- Indexes for table `tb_quanhe`
--
ALTER TABLE `tb_quanhe`
  ADD PRIMARY KEY (`MAQH`);

--
-- Indexes for table `tb_quyen`
--
ALTER TABLE `tb_quyen`
  ADD PRIMARY KEY (`MAQUYEN`);

--
-- Indexes for table `tb_thamhoi`
--
ALTER TABLE `tb_thamhoi`
  ADD PRIMARY KEY (`MATHAMHOI`),
  ADD KEY `FK_ASSOCIATION_9` (`MADONGIA`),
  ADD KEY `FK_THAM_HOI` (`MACDV`);

--
-- Indexes for table `tb_thongtincdv`
--
ALTER TABLE `tb_thongtincdv`
  ADD PRIMARY KEY (`MACDV`),
  ADD KEY `FK_THUOC_BO_MON` (`MABOMON`);

--
-- Indexes for table `tb_tintuc`
--
ALTER TABLE `tb_tintuc`
  ADD PRIMARY KEY (`MATINTUC`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`USERS_ID`),
  ADD KEY `FK_QUYEN_TRUY_CAP` (`MAQUYEN`),
  ADD KEY `FK_TAI_KHOAN` (`MACDV`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dongia`
--
ALTER TABLE `tb_dongia`
  ADD CONSTRAINT `FK_DON_VI` FOREIGN KEY (`MADONVI`) REFERENCES `tb_donvi` (`MADONVI`);

--
-- Constraints for table `tb_nguoithan`
--
ALTER TABLE `tb_nguoithan`
  ADD CONSTRAINT `FK_NGUOI_THAN` FOREIGN KEY (`MACDV`) REFERENCES `tb_thongtincdv` (`MACDV`),
  ADD CONSTRAINT `FK_QUAN_HE_THAN_NHAN` FOREIGN KEY (`MAQH`) REFERENCES `tb_quanhe` (`MAQH`);

--
-- Constraints for table `tb_thamhoi`
--
ALTER TABLE `tb_thamhoi`
  ADD CONSTRAINT `FK_ASSOCIATION_9` FOREIGN KEY (`MADONGIA`) REFERENCES `tb_dongia` (`MADONGIA`),
  ADD CONSTRAINT `FK_THAM_HOI` FOREIGN KEY (`MACDV`) REFERENCES `tb_thongtincdv` (`MACDV`);

--
-- Constraints for table `tb_thongtincdv`
--
ALTER TABLE `tb_thongtincdv`
  ADD CONSTRAINT `FK_THUOC_BO_MON` FOREIGN KEY (`MABOMON`) REFERENCES `tb_bomon` (`MABOMON`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `FK_QUYEN_TRUY_CAP` FOREIGN KEY (`MAQUYEN`) REFERENCES `tb_quyen` (`MAQUYEN`),
  ADD CONSTRAINT `FK_TAI_KHOAN` FOREIGN KEY (`MACDV`) REFERENCES `tb_thongtincdv` (`MACDV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
