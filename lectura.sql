-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2021 at 09:57 PM
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
  `fecha_hora` datetime NOT NULL,
  `temperatura` decimal(10,2) NOT NULL,
  `presion` decimal(10,2) NOT NULL,
  `velocidad_viento` decimal(10,2) NOT NULL,
  `direccion_viento` varchar(20) NOT NULL,
  `radiacion_solar` varchar(20) NOT NULL,
  `radiacion_uv` int(11) NOT NULL,
  `humedad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lectura`
--

INSERT INTO `lectura` (`id_estacion`, `fecha_hora`, `temperatura`, `presion`, `velocidad_viento`, `direccion_viento`, `radiacion_solar`, `radiacion_uv`, `humedad`) VALUES
(1, '2021-05-19 16:03:46', '12.00', '100.30', '122.40', 'Norte', 'alta', 4, '34.90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lectura`
--
ALTER TABLE `lectura`
  ADD PRIMARY KEY (`id_estacion`,`fecha_hora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
