-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 09:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noticias`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(3) NOT NULL,
  `password_ad` varchar(14) NOT NULL,
  `nombre_ad` varchar(30) NOT NULL,
  `apellido_ad` varchar(30) NOT NULL,
  `correo_ad` varchar(30) NOT NULL,
  `puesto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(3) NOT NULL,
  `numero` int(3) NOT NULL,
  `administrador` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publ_text`
--

CREATE TABLE `publ_text` (
  `id_publicaciontxt` int(3) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `imagen` longblob DEFAULT NULL,
  `contenido` text NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publ_text`
--

INSERT INTO `publ_text` (`id_publicaciontxt`, `titulo`, `imagen`, `contenido`, `deleted_at`) VALUES
(10, 'Emma', NULL, 'Emma es bien shidoliro xs', NULL),
(11, 'adks', NULL, 'fsdafdsfsdfdfdfdfd', NULL),
(12, 'Emma', NULL, 'fdsfhgyterhrthjsrgfr', NULL),
(13, 'aaaaa', NULL, 'bbbbbbbbbbbbbbbbb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(3) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `numero`, `password`, `deleted_at`) VALUES
(1, 'Rosas', 'EsPuto', 'emma_pinchi@hotmail.', '1234567890', '123456789', NULL),
(2, 'NSA', 'EsPuto', 'emma.pinchi@gmail.co', '1234567890', '123456789', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indexes for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD KEY `administrador` (`administrador`);

--
-- Indexes for table `publ_text`
--
ALTER TABLE `publ_text`
  ADD PRIMARY KEY (`id_publicaciontxt`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publ_text`
--
ALTER TABLE `publ_text`
  MODIFY `id_publicaciontxt` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `publicacion` (`administrador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
