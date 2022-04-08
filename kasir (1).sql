-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 04:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang_detail`
--

CREATE TABLE `barang_detail` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `date` date NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `module_groups`
--

CREATE TABLE `module_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `short_code` varchar(100) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `is_active` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `module_groups`
--

INSERT INTO `module_groups` (`id`, `name`, `short_code`, `icon`, `is_active`) VALUES
(1, 'Sistem Settings', 'settings', '1', 1),
(2, 'Master data', 'master-data', '1', 1),
(3, 'Transaksi', 'transaksi', '1', 1),
(4, 'Laporan', 'laporan', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_operations`
--

CREATE TABLE `module_operations` (
  `id` int(11) NOT NULL,
  `m_group_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `can_view` int(1) DEFAULT 0,
  `can_add` int(1) DEFAULT 0,
  `can_edit` int(1) DEFAULT 0,
  `can_delete` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `module_operations`
--

INSERT INTO `module_operations` (`id`, `m_group_id`, `name`, `slug`, `can_view`, `can_add`, `can_edit`, `can_delete`) VALUES
(1, 1, 'General Setting', 'general', 1, NULL, 1, NULL),
(2, 1, 'Backup Database', 'backup', 1, 1, 1, 1),
(3, 1, 'User', 'users', 1, 1, 1, NULL),
(4, 1, 'Module', 'module', 1, 1, 1, 1),
(5, 1, 'Operation', 'operations', 1, 1, 1, 1),
(6, 1, 'Role', 'roles', 1, 1, 1, 0),
(7, 2, 'Data Barang', 'barang', 1, 1, 1, NULL),
(8, 2, 'Perubahan Harga', 'perharga', 1, 1, 1, 0),
(10, 4, 'Penjualan', 'lappenjualan', 1, NULL, NULL, NULL),
(40, 3, 'Penjualan', 'trpenjualan', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `id` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `is_superadmin` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_superadmin`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, '2020-03-12 00:00:00', '2020-03-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `m_operation_id` int(11) DEFAULT NULL,
  `can_view` int(1) DEFAULT 0,
  `can_add` int(1) DEFAULT 0,
  `can_edit` int(1) DEFAULT 0,
  `can_delete` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`id`, `role_id`, `m_operation_id`, `can_view`, `can_add`, `can_edit`, `can_delete`) VALUES
(180, 8, 2, 0, 0, 0, 0),
(181, 8, 1, 0, 0, 0, 0),
(182, 8, 4, 0, 0, 0, 0),
(183, 8, 5, 0, 0, 0, 0),
(184, 8, 6, 0, 0, 0, 0),
(185, 8, 3, 0, 0, 0, 0),
(186, 8, 7, 0, 0, 0, 0),
(187, 8, 8, 0, 0, 0, 0),
(188, 8, 40, 0, 0, 0, 0),
(189, 8, 10, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `name`, `is_active`) VALUES
(1, 'Pack', 1),
(2, 'Sachet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `timezone` varchar(30) NOT NULL DEFAULT 'UTC',
  `logo` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `propinsi` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `app_logo` varchar(100) DEFAULT NULL,
  `footer` varchar(100) DEFAULT NULL,
  `login_background` varchar(100) NOT NULL,
  `login_logo` varchar(100) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `site_desc` text DEFAULT NULL,
  `home_title` varchar(50) DEFAULT NULL,
  `site_title` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `phone`, `address`, `instagram`, `youtube`, `whatsapp`, `timezone`, `logo`, `kota`, `propinsi`, `zip`, `created_at`, `updated_at`, `app_logo`, `footer`, `login_background`, `login_logo`, `keyword`, `site_desc`, `home_title`, `site_title`, `latitude`, `longitude`) VALUES
(0, 'KASIR', '-', '082332313232', '-', '-', '-', '-', 'UTC', '1632720548_icon-32x32.png', '', '', '-', '2020-03-12 00:00:00', '2021-10-18 10:45:07', '1632720548_icon-32x32.png', 'Copyright © 2021 Theme_Nate. All rights reserved.', '', NULL, NULL, NULL, NULL, 'KASIR', '-7.9146022', '113.8217761');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `opd` varchar(20) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `verification_code` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles_id`, `username`, `nama_lengkap`, `contact_no`, `email`, `password`, `opd`, `is_active`, `images`, `verification_code`, `created_at`, `updated_at`) VALUES
(10, 1, 'superadmin', 'Super Administrator', '123123', 'superadmin@system.com', '$2y$10$WsD7vPYgWmIFrO14shybxewGnUxJj1RGcR8Ar0RoVL32qJscbOd/m', NULL, 1, NULL, '', '2020-05-11 00:00:00', '2020-05-27 00:00:00'),
(29, 1, 'superadmin123', 'test', 'asdasdasd', 'test@gmail.com', '$2y$10$BHjqotMGczDqO2L2/5Z6TeBuyQI25H170ka56ixbZqRyiZ7InYbf.', '123456', 1, NULL, '', '2021-12-23 00:00:00', '2021-12-24 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_detail`
--
ALTER TABLE `barang_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_groups`
--
ALTER TABLE `module_groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `module_operations`
--
ALTER TABLE `module_operations`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `perm_group_id` (`m_group_id`) USING BTREE;

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_detail`
--
ALTER TABLE `barang_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `module_groups`
--
ALTER TABLE `module_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `module_operations`
--
ALTER TABLE `module_operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
