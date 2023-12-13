-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 04:36 PM
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
-- Database: `tangkasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_bsu` varchar(255) DEFAULT NULL,
  `id_bsu` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `nama_bsu`, `id_bsu`, `jenis_kelamin`, `login_id`) VALUES
(1, 'Loki', 'Tangkasa', '999', 'Laki-laki', 1),
(2, 'Jein Gray', 'Tangkasa', '1010', 'Perempuan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `judul`, `tanggal_upload`, `keterangan`) VALUES
(1, 'Organik', '2023-12-04', 'Sampah organik'),
(2, 'Kertas', '2023-12-12', 'Pelajari proses daur ulang kertas dan bagaimana Anda dapat membantu mengumpulkan kertas-kertas bekas untuk mengurangi limbah.'),
(3, 'Plastik kaca Beling', '2023-12-28', 'Pelajari proses daur ulang kertas dan bagaimana Anda dapat membantu mengumpulkan kertas-kertas bekas untuk mengurangi limbah.');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `img`, `judul`) VALUES
(1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpW5vEaEfxjAVWkZdltEGsEUxJndyZBhft7g', 'Yogyakarta'),
(2, 'https://tangerangnews.com/assets/uploaded/photo/2022/12/18/b42954e2559025d2a844a193cbab8240.jpg', 'Malang'),
(3, 'https://awsimages.detik.net.id/api/wm/2023/09/12/tempat-bank-sampah-induk-di-kota-bandung_169.jpeg?wid=60&w=650&v=1&t=jpeg', 'Makassar'),
(4, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxMTExYTExQWFxYXGiIcGRkZGRwdHRwfGB8cGSIcHB8dHysjHBwnHR8aIzQjKSsuMTIxGSE2OzYwOiowMS4BCwsLDw4PHRERHTAnIScwMDAwODIyMDAxLjAzMC4yMDAwNDAwMC4wMDIuNTIwMDAyMDAwMDAwMDAwMDAwMDAwMP/AABEIAMIBAwMBIgACEQEDEQH/', 'Bali'),
(5, 'https://www.panggungharjo.desa.id/wp-content/uploads/2021/06/w1.jpg', 'Surabaya'),
(6, 'https://live.staticflickr.com/65535/50879832138_af65195111_h.jpg', 'Madura');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'loki', '123'),
(2, 'Jein', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `login_nasabah`
--

CREATE TABLE `login_nasabah` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `nama`, `username`, `password`, `umur`, `jenis_kelamin`, `alamat`) VALUES
(7, 'rosie is Rose', 'Rose', 120210, 26, 'perempuan', 'aussie'),
(8, 'loki odin son', 'lokinibos', 99, 90, 'laki', 'Asgard'),
(9, 'susanti', 'Susanti', 1209, 0, '', ''),
(10, 'Thor', 'Thor', 10, 0, '', ''),
(11, 'ehsan01', 'Ehsan', 123, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_nasabah`
--
ALTER TABLE `login_nasabah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`);

--
-- Constraints for table `login_nasabah`
--
ALTER TABLE `login_nasabah`
  ADD CONSTRAINT `login_nasabah_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registrasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
