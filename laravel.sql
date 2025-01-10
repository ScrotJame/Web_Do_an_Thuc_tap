-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2025 lúc 04:45 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id_chucvu` int(11) NOT NULL,
  `tenchucvu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id_chucvu`, `tenchucvu`) VALUES
(1, 'Trưởng phòng'),
(2, 'Quản lý'),
(3, 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthuchopdong`
--

CREATE TABLE `hinhthuchopdong` (
  `id_hinhthuchopdong` int(11) NOT NULL,
  `tenhinhthuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhthuchopdong`
--

INSERT INTO `hinhthuchopdong` (`id_hinhthuchopdong`, `tenhinhthuc`) VALUES
(1, 'Toàn thời gian'),
(2, 'Bán thời gian');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khautru`
--

CREATE TABLE `khautru` (
  `id_khautru` int(11) NOT NULL,
  `id_nhanvien` int(11) NOT NULL,
  `loaikhautru` varchar(50) NOT NULL,
  `sotientru` decimal(10,0) NOT NULL,
  `ngaytru` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khautru`
--

INSERT INTO `khautru` (`id_khautru`, `id_nhanvien`, `loaikhautru`, `sotientru`, `ngaytru`) VALUES
(23, 1, 'Thuế TNCN', 500000, '2024-01-15'),
(24, 10, 'Bảo hiểm xã hội', 300000, '2024-01-20'),
(25, 29, 'Phí công đoàn', 200000, '2024-02-10'),
(26, 30, 'Thuế TNCN', 450000, '2024-02-15'),
(27, 31, 'Bảo hiểm y tế', 250000, '2024-03-05'),
(28, 32, 'Phí công đoàn', 150000, '2024-03-12'),
(29, 33, 'Thuế TNCN', 400000, '2024-04-08'),
(30, 34, 'Bảo hiểm thất nghiệp', 350000, '2024-04-20'),
(31, 35, 'Phí công đoàn', 100000, '2024-05-01'),
(32, 36, 'Thuế TNCN', 550000, '2024-05-10'),
(33, 37, 'Bảo hiểm xã hội', 300000, '2024-06-15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `id_luong` int(11) NOT NULL,
  `id_nhanvien` int(11) NOT NULL,
  `luongcoban` decimal(10,0) NOT NULL,
  `thangtinhluong` date NOT NULL,
  `phucap` decimal(10,0) NOT NULL,
  `thuong` decimal(10,0) NOT NULL,
  `khautru` decimal(10,0) NOT NULL,
  `luongnhan` decimal(10,0) DEFAULT NULL,
  `id_trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `luong`
--

INSERT INTO `luong` (`id_luong`, `id_nhanvien`, `luongcoban`, `thangtinhluong`, `phucap`, `thuong`, `khautru`, `luongnhan`, `id_trangthai`) VALUES
(1, 1, 5000000, '2024-08-25', 1000000, 500000, 150000, 5350000, 1),
(2, 10, 6000000, '2024-01-31', 700000, 300000, 150000, 6650000, 0),
(3, 29, 4500000, '2024-01-31', 400000, 250000, 50000, 4700000, 1),
(4, 30, 5500000, '2024-02-28', 600000, 300000, 200000, 6100000, 0),
(5, 31, 4800000, '2024-02-28', 500000, 200000, 100000, 5400000, 1),
(6, 32, 5000000, '2024-02-28', 400000, 150000, 50000, 5400000, 1),
(7, 33, 5300000, '2024-03-31', 450000, 300000, 100000, 5950000, 0),
(8, 34, 6000000, '2024-03-31', 500000, 400000, 200000, 6800000, 1),
(9, 35, 4700000, '2024-03-31', 350000, 250000, 50000, 4950000, 0),
(10, 36, 5800000, '2024-04-30', 600000, 300000, 150000, 6550000, 1),
(11, 37, 4900000, '2024-04-30', 500000, 200000, 100000, 5300000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhang_nv`
--

CREATE TABLE `nganhang_nv` (
  `id_nhanvien` int(11) NOT NULL,
  `sotaikhoan` int(13) NOT NULL,
  `tennganhang` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nganhang_nv`
--

INSERT INTO `nganhang_nv` (`id_nhanvien`, `sotaikhoan`, `tennganhang`, `id`) VALUES
(1, 123456789, 'Ngân hàng Vietcombank', 1),
(10, 987654321, 'Ngân hàng Agribank', 2),
(29, 1122334455, 'Ngân hàng BIDV', 3),
(30, 2147483647, 'Ngân hàng Techcombank', 4),
(31, 2147483647, 'Ngân hàng Vietinbank', 5),
(32, 2147483647, 'Ngân hàng Sacombank', 6),
(33, 2147483647, 'Ngân hàng ACB', 7),
(34, 2147483647, 'Ngân hàng MB', 8),
(35, 2147483647, 'Ngân hàng TPBank', 9),
(36, 2147483647, 'Ngân hàng VIB', 10),
(37, 2147483647, 'Ngân hàng SHB', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nhanvien` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `id_phongban` int(11) NOT NULL,
  `id_chucvu` int(11) NOT NULL,
  `ngayvaolam` date NOT NULL,
  `id_hinhthuchopdong` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `id_quyenhan` int(11) NOT NULL DEFAULT 3,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id_nhanvien`, `hoten`, `ngaysinh`, `gioitinh`, `id_phongban`, `id_chucvu`, `ngayvaolam`, `id_hinhthuchopdong`, `email`, `sodienthoai`, `diachi`, `id_quyenhan`, `avatar`) VALUES
(1, 'Trịnh Trung Hiếu', '2003-07-15', 1, 2, 3, '2024-12-16', 2, 'hieu@gmail.com', 358745998, 'Hà Nội', 3, ''),
(10, 'Nguyen Van A', '1990-05-10', 0, 1, 1, '2020-01-15', 1, 'nva@example.com', 123456789, 'Ha Noi', 1, ''),
(29, 'Nguyen Van A', '1990-01-01', 0, 1, 1, '2020-05-01', 1, 'a.nguyen@example.com', 123456789, 'Ha Noi', 1, NULL),
(30, 'Tran Thi B', '1992-02-02', 1, 2, 2, '2021-06-15', 2, 'b.tran@example.com', 987654321, 'Da Nang', 2, NULL),
(31, 'Le Van C', '1988-03-03', 0, 3, 3, '2019-07-20', 1, 'c.le@example.com', 345678901, 'Ho Chi Minh City', 3, NULL),
(32, 'Pham Thi D', '1993-04-04', 1, 1, 2, '2022-08-10', 1, 'd.pham@example.com', 789123456, 'Hai Phong', 1, NULL),
(33, 'Hoang Van E', '1991-05-05', 0, 2, 3, '2021-09-25', 2, 'e.hoang@example.com', 567890123, 'Can Tho', 2, NULL),
(34, 'Do Thi F', '1995-06-06', 1, 3, 1, '2023-01-15', 1, 'f.do@example.com', 234567890, 'Vung Tau', 3, NULL),
(35, 'Nguyen Van G', '1989-07-07', 0, 1, 3, '2020-03-12', 1, 'g.nguyen@example.com', 981234567, 'Hue', 1, NULL),
(36, 'Tran Thi H', '1994-08-08', 1, 2, 1, '2021-11-05', 2, 'h.tran@example.com', 678901234, 'Nha Trang', 2, NULL),
(37, 'Le Van K', '1987-09-09', 0, 3, 2, '2018-12-20', 2, 'k.le@example.com', 345678910, 'Quang Ninh', 3, NULL),
(40, 'Nguyễn Tiến Minh', '2024-01-07', 0, 3, 3, '2025-01-07', 1, 'Masallacinyarbawa15@gmail.com', 354478568, 'Hoàng Mai, Hà Nội', 3, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id_quyenhan` int(11) NOT NULL,
  `quyenhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`id_quyenhan`, `quyenhan`) VALUES
(1, 'Admin'),
(2, 'Nhân viên cấp cao'),
(3, 'Nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `id_phongban` int(11) NOT NULL,
  `tenphongban` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`id_phongban`, `tenphongban`) VALUES
(1, 'Phòng IT'),
(2, 'Phòng Marketing'),
(3, 'Phòng Kế toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id_trangthai` int(11) NOT NULL,
  `tentrangthai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id_trangthai`, `tentrangthai`) VALUES
(0, 'Chưa thanh toán'),
(1, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Piniastudio', 'help@piniastudio.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL),
(2, 'hieu', 'nguyencuong2112bghg@gmail.com', NULL, '$2y$10$Fcfo6oQNhJA.2QpLIngokOtq6qInpco74F3B4f.uQ.TZsijPgZwWi', NULL, '2024-12-19 20:42:15', '2024-12-19 20:42:15'),
(3, 'HunterZ', 'hieubg@gmail.com', NULL, '$2y$10$I5nQ2CBhQicLyGdwJvD1cuw5CqVxU14EDpzJEA3tNCSD9./RLY4DO', NULL, '2025-01-02 18:57:42', '2025-01-02 18:57:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id_chucvu`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `hinhthuchopdong`
--
ALTER TABLE `hinhthuchopdong`
  ADD PRIMARY KEY (`id_hinhthuchopdong`);

--
-- Chỉ mục cho bảng `khautru`
--
ALTER TABLE `khautru`
  ADD PRIMARY KEY (`id_khautru`),
  ADD KEY `khautru_nv` (`id_nhanvien`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`id_luong`),
  ADD KEY `luongnv` (`id_nhanvien`),
  ADD KEY `trangthaitt` (`id_trangthai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nganhang_nv`
--
ALTER TABLE `nganhang_nv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nganhang_nv` (`id_nhanvien`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`),
  ADD KEY `chucvu_nv` (`id_chucvu`),
  ADD KEY `phongban_nv` (`id_phongban`),
  ADD KEY `hopdong_nv` (`id_hinhthuchopdong`),
  ADD KEY `quyenhan_nv` (`id_quyenhan`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id_quyenhan`);

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id_phongban`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id_chucvu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhthuchopdong`
--
ALTER TABLE `hinhthuchopdong`
  MODIFY `id_hinhthuchopdong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khautru`
--
ALTER TABLE `khautru`
  MODIFY `id_khautru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `luong`
--
ALTER TABLE `luong`
  MODIFY `id_luong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nganhang_nv`
--
ALTER TABLE `nganhang_nv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id_quyenhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id_phongban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_trangthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khautru`
--
ALTER TABLE `khautru`
  ADD CONSTRAINT `khautru_nv` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`id_nhanvien`);

--
-- Các ràng buộc cho bảng `luong`
--
ALTER TABLE `luong`
  ADD CONSTRAINT `luongnv` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`id_nhanvien`),
  ADD CONSTRAINT `trangthaitt` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthai` (`id_trangthai`);

--
-- Các ràng buộc cho bảng `nganhang_nv`
--
ALTER TABLE `nganhang_nv`
  ADD CONSTRAINT `nganhang_nv` FOREIGN KEY (`id_nhanvien`) REFERENCES `nhanvien` (`id_nhanvien`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `chucvu_nv` FOREIGN KEY (`id_chucvu`) REFERENCES `chucvu` (`id_chucvu`),
  ADD CONSTRAINT `hopdong_nv` FOREIGN KEY (`id_hinhthuchopdong`) REFERENCES `hinhthuchopdong` (`id_hinhthuchopdong`),
  ADD CONSTRAINT `phongban_nv` FOREIGN KEY (`id_phongban`) REFERENCES `phongban` (`id_phongban`),
  ADD CONSTRAINT `quyenhan_nv` FOREIGN KEY (`id_quyenhan`) REFERENCES `phanquyen` (`id_quyenhan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
