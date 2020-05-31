-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2020 at 09:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quanlynhansu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tlb_chuc_vu`
--

CREATE TABLE `tlb_chuc_vu` (
  `id_role` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_chuc_vu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tlb_chuc_vu`
--

INSERT INTO `tlb_chuc_vu` (`id_role`, `ten_chuc_vu`) VALUES
('0', 'Admin'),
('1', 'Giám đốc'),
('2', 'Trưởng nhóm'),
('3', 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_cong_viec`
--

CREATE TABLE `tlb_cong_viec` (
  `stt` int(11) NOT NULL,
  `id_cong_viec` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_phong_ban` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tlb_cong_viec`
--

INSERT INTO `tlb_cong_viec` (`stt`, `id_cong_viec`, `id_phong_ban`, `trang_thai`) VALUES
(1, 'CVN1', 'PNS', 3),
(2, 'CVK2', 'PKT', 2),
(3, 'CVK1', 'PKT', 1),
(5, 'CVN2', 'PNS', 2),
(6, 'CNC1', 'PCM', 1),
(7, 'PCM2', 'PCM', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_cong_viec_chi_tiet`
--

CREATE TABLE `tlb_cong_viec_chi_tiet` (
  `id_cong_viec` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_cong_viec` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta_cong_viec` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `tai_lieu_lien_quan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tlb_cong_viec_chi_tiet`
--

INSERT INTO `tlb_cong_viec_chi_tiet` (`id_cong_viec`, `ten_cong_viec`, `mo_ta_cong_viec`, `ngay_bat_dau`, `ngay_ket_thuc`, `tai_lieu_lien_quan`) VALUES
('CVC1', 'Báo cáo chuyên môn', 'Báo cáo chi tiết chuyên môn', '2019-06-29', '2019-07-03', ''),
('CVC2', 'Hội giảng Lớp Chuyên môn 1', 'Phân công cán bộ tham dự hội giảng', '2019-06-02', '2019-06-19', 'file2'),
('CVK1', 'Kế hoạch chấm thi', 'Chấm thi  AT13, AT14', '2019-06-05', '2019-06-27', ''),
('CVK2', 'Kế hoạch coi thi', 'Phân công cán bộ coi thi khóa AT13', '2019-06-27', '2019-06-29', 'file2'),
('CVN1', 'Kế hoạch tuyển sinh', 'Lên kế hoạch tuyển sinh khóa AT16', '2019-06-12', '2019-07-17', 'file4'),
('CVN2', 'Trả lương', 'Trả lương cán bộ tháng 6', '2019-06-28', '2019-06-30', 'file3');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_nguoi_dung`
--

CREATE TABLE `tlb_nguoi_dung` (
  `ma_nhan_vien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tlb_nguoi_dung`
--

INSERT INTO `tlb_nguoi_dung` (`ma_nhan_vien`, `mat_khau`, `id_role`) VALUES
('admin', '10b8e822d03fb4fd946188e852a4c3e2', '0'),
('Mana1', '10b8e822d03fb4fd946188e852a4c3e2', '1'),
('Mana2', '10b8e822d03fb4fd946188e852a4c3e2', '1'),
('User1', '10b8e822d03fb4fd946188e852a4c3e2', '2'),
('User2', '10b8e822d03fb4fd946188e852a4c3e2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_nhan_vien`
--

CREATE TABLE `tlb_nhan_vien` (
  `ma_nhan_vien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_phong_ban` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `dt_di_dong` int(15) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tlb_nhan_vien`
--

INSERT INTO `tlb_nhan_vien` (`ma_nhan_vien`, `id_phong_ban`, `ho_ten`, `gioi_tinh`, `dt_di_dong`, `email`, `ngay_sinh`, `dia_chi`) VALUES
('Mana1', '', 'Phạm Tuấn Khanh', 1, 396254875, 'tuankhanhptk@gmail.com', '1970-01-02', 'Đồng Tháp'),
('Mana2', '', 'Nguyễn Hữu Trí', 1, 365214895, 'huutrivc27@gmail.com', '1975-05-05', 'Hà Nội'),
('User1', 'PNS', 'Phạm Văn Khánh', 1, 365214785, 'vankhanh@gmail.com', '1987-08-16', 'Bắc Giang'),
('User2', 'PNS', 'Nguyễn Bình An', 1, 36521368, 'binhan@gmail.com', '1989-09-12', 'Hà Nam'),
('admin', '', '', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_nhan_vien_phong_ban`
--

CREATE TABLE `tlb_nhan_vien_phong_ban` (
  `stt` int(11) NOT NULL,
  `ma_nhan_vien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_cong_viec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tlb_nhan_vien_phong_ban`
--

INSERT INTO `tlb_nhan_vien_phong_ban` (`stt`, `ma_nhan_vien`, `id_cong_viec`, `trang_thai`) VALUES
(0, 'U1A', 'CVK1', 1),
(2, 'U1B', 'CVN2', 2),
(3, '123', 'CVN1', 1),
(4, '123', 'CVN1', 1),
(5, 'U3A', 'CVN2', 2),
(6, 'U3A', 'CVK2', 3),
(8, 'U1A', 'CVNEW', 3),
(9, 'U1A', 'CV1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_phong_ban`
--

CREATE TABLE `tlb_phong_ban` (
  `id_phong_ban` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_phong_ban` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tlb_phong_ban`
--

INSERT INTO `tlb_phong_ban` (`id_phong_ban`, `ten_phong_ban`) VALUES
('PCM', 'Phòng chuyên môn'),
('PKT', 'Phòng khảo thí'),
('PNS', 'Phòng nhân sự');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_trang_thai`
--

CREATE TABLE `tlb_trang_thai` (
  `trang_thai` int(11) NOT NULL,
  `mo_ta_trang_thai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tlb_trang_thai`
--

INSERT INTO `tlb_trang_thai` (`trang_thai`, `mo_ta_trang_thai`) VALUES
(1, 'Chưa thực hiện'),
(2, 'Đang thực hiện'),
(3, 'Đã hoàn thành');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tlb_chuc_vu`
--
ALTER TABLE `tlb_chuc_vu`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tlb_cong_viec`
--
ALTER TABLE `tlb_cong_viec`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `tlb_cong_viec_chi_tiet`
--
ALTER TABLE `tlb_cong_viec_chi_tiet`
  ADD PRIMARY KEY (`id_cong_viec`);

--
-- Indexes for table `tlb_nguoi_dung`
--
ALTER TABLE `tlb_nguoi_dung`
  ADD PRIMARY KEY (`ma_nhan_vien`);

--
-- Indexes for table `tlb_nhan_vien`
--
ALTER TABLE `tlb_nhan_vien`
  ADD PRIMARY KEY (`ma_nhan_vien`);

--
-- Indexes for table `tlb_nhan_vien_phong_ban`
--
ALTER TABLE `tlb_nhan_vien_phong_ban`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `tlb_phong_ban`
--
ALTER TABLE `tlb_phong_ban`
  ADD PRIMARY KEY (`id_phong_ban`);

--
-- Indexes for table `tlb_trang_thai`
--
ALTER TABLE `tlb_trang_thai`
  ADD PRIMARY KEY (`trang_thai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tlb_cong_viec`
--
ALTER TABLE `tlb_cong_viec`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tlb_nhan_vien_phong_ban`
--
ALTER TABLE `tlb_nhan_vien_phong_ban`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
