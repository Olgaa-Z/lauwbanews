-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 11:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lauwbanews`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `isi_berita` varchar(300) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kategori_berita` varchar(50) NOT NULL,
  `viewer_berita` int(11) NOT NULL,
  `berita_utama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `gambar`, `tgl_berita`, `kategori_berita`, `viewer_berita`, `berita_utama`) VALUES
(1, 'RB Leipzig memenangkan laga pertama mereka', 'Rb leipzig memenangkan laga bundesliga pertama mereka', 'rb.jpg', '2019-08-31 02:31:54', 'Olahraga', 123, 1),
(2, 'RB Leipzig memenangkan laga pertama mereka', 'Rb leipzig memenangkan laga bundesliga pertama mereka', 'rb.jpg', '2019-08-20 01:19:43', 'Olahraga', 123, 0),
(3, 'Prabowo dan Jokowi maaf maaf an', 'udah baikan', 'jokowi.jpg', '2019-08-20 01:19:55', 'Politik', 1332, 0),
(4, 'Prabowo dan Jokowi maaf maaf an', 'udah baikan', 'jokowi.jpg', '2019-08-31 02:31:58', 'Politik', 1332, 1),
(5, 'Google memutus kontrak dengan Huawei', 'Huawei nangis, terus ngambek bikin OS Sendiri', 'huawei.jpg', '2019-08-20 01:20:23', 'Teknologi', 1232, 0),
(6, 'Google memutus kontrak dengan Huawei', 'Huawei nangis, terus ngambek bikin OS Sendiri', 'huawei.jpg', '2019-08-20 01:20:33', 'Teknologi', 1232, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tgl_video` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `video`, `tgl_video`) VALUES
(1, 'dota', 'video.mp4', '2019-08-31 02:38:12'),
(2, 'Video Dua', 'videodua.mp4', '2020-07-20 08:45:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
