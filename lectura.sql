-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2021 at 07:26 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `lectura`
--

CREATE TABLE `lectura` (
  `id_estacion` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `temperatura` decimal(10,2) NOT NULL,
  `presion` decimal(10,2) NOT NULL,
  `velocidad_viento` decimal(10,2) NOT NULL,
  `direccion_viento` int(5) NOT NULL,
  `radiacion_solar` int(5) NOT NULL,
  `radiacion_uv` int(11) NOT NULL,
  `humedad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectura`
--

INSERT INTO `lectura` (`id_estacion`, `fecha`, `temperatura`, `presion`, `velocidad_viento`, `direccion_viento`, `radiacion_solar`, `radiacion_uv`, `humedad`) VALUES
(2, '2021-05-18 12:30:33', '23.40', '42.40', '34.60', 0, 8, 4, '23.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lectura`
--
ALTER TABLE `lectura`
  ADD PRIMARY KEY (`id_estacion`,`fecha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
