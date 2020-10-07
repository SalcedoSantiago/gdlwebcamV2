-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2020 at 04:04 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdlwebcam`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria_evento`
--

CREATE TABLE `categoria_evento` (
  `cat_id` tinyint(10) NOT NULL,
  `nombre_event` varchar(50) NOT NULL,
  `icono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria_evento`
--

INSERT INTO `categoria_evento` (`cat_id`, `nombre_event`, `icono`) VALUES
(1, 'Seminarios', 'fa-university'),
(2, 'Conferencias', 'fa-comment'),
(3, 'Talleres', 'fa-code');

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL,
  `nombre_evento` varchar(100) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` time NOT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(10) NOT NULL,
  `clave` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`evento_id`, `nombre_evento`, `fecha_evento`, `hora_evento`, `id_cat_evento`, `id_inv`, `clave`) VALUES
(13, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03'),
(20, 'AngularJS', '2016-12-10', '10:00:00', 3, 1, 'taller_06'),
(23, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09'),
(24, 'De Photoshop a HTML5 y CSS3', '2016-12-10', '19:00:00', 3, 5, 'taller_10'),
(26, 'Responsive Web Design', '2016-12-09', '10:00:00', 3, 1, 'taller_01'),
(27, 'Flexbox', '2016-12-09', '12:00:00', 3, 2, 'taller_02'),
(28, 'HTML5 y CSS3', '2016-12-09', '14:00:00', 3, 3, 'taller_03'),
(30, 'WordPress', '2016-12-09', '19:00:00', 3, 5, 'taller_05'),
(36, 'PHP y MySQL', '2016-12-10', '12:00:00', 3, 2, 'taller_07'),
(38, 'SEO en Google', '2016-12-10', '17:00:00', 3, 4, 'taller_09'),
(42, 'Los mejores lugares para encontrar trabajo', '2016-12-10', '17:00:00', 2, 1, 'conf_05'),
(43, 'Pasos para crear un negocio rentable ', '2016-12-10', '19:00:00', 2, 2, 'conf_06'),
(44, 'Aprende a Programar en una mañana', '2016-12-10', '10:00:00', 1, 3, 'sem_02'),
(56, 'Laravel', '2016-12-11', '10:00:00', 3, 1, 'taller_12'),
(57, 'Crea tu propia API', '2016-12-11', '12:00:00', 3, 2, 'taller_13'),
(58, 'JavaScript y jQuery', '2016-12-11', '14:00:00', 3, 3, 'taller_14'),
(59, 'Creando Plantillas para WordPress', '2016-12-11', '17:00:00', 3, 4, 'taller_15'),
(60, 'Tiendas Virtuales en Magento', '2016-12-11', '19:00:00', 3, 5, 'taller_16');

-- --------------------------------------------------------

--
-- Table structure for table `invitados`
--

CREATE TABLE `invitados` (
  `invitado_id` tinyint(10) NOT NULL,
  `nombre_invitado` varchar(60) NOT NULL,
  `apellido_invitado` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invitados`
--

INSERT INTO `invitados` (`invitado_id`, `nombre_invitado`, `apellido_invitado`, `descripcion`, `url_imagen`) VALUES
(1, 'Rafael', 'Herrera', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint unde voluptas consectetur vitae provident repellendus iste labore non', 'invitado1.jpg'),
(2, 'Shari', 'Herrera', 'acilis veniam aperiam quisquam porro, eum quibusdam, voluptatibus similique? Debitis!', 'invitado2.jpg'),
(3, 'Gregorio', 'Sanchez', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint unde voluptas conseco', 'invitado3.jpg'),
(4, 'Susana', 'Rivera', 'Lorem, ipsum dolor sit amet consectetur adipisiorro, eum quibusdam, voluptatibus similique? Debitis!', 'invitado4.jpg'),
(5, 'Harold', 'Garcia', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint unde voluptas consectetur vitque? Debitis!', 'invitado5.jpg'),
(6, 'Susan', 'Sanchez', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint unde voluptas consectetur vitae ebitis!', 'invitado6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regalos`
--

CREATE TABLE `regalos` (
  `id_regalo` int(11) NOT NULL,
  `nombre_regalo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regalos`
--

INSERT INTO `regalos` (`id_regalo`, `nombre_regalo`) VALUES
(1, 'pulsera'),
(2, 'etiquetas'),
(3, 'plumas');

-- --------------------------------------------------------

--
-- Table structure for table `registrados`
--

CREATE TABLE `registrados` (
  `id_registro` bigint(20) NOT NULL,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  `pagado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`evento_id`),
  ADD KEY `id_cat_evento` (`id_cat_evento`),
  ADD KEY `id_inv` (`id_inv`);

--
-- Indexes for table `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`invitado_id`);

--
-- Indexes for table `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`id_regalo`);

--
-- Indexes for table `registrados`
--
ALTER TABLE `registrados`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `regalo` (`regalo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_evento`
--
ALTER TABLE `categoria_evento`
  MODIFY `cat_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `invitados`
--
ALTER TABLE `invitados`
  MODIFY `invitado_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regalos`
--
ALTER TABLE `regalos`
  MODIFY `id_regalo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrados`
--
ALTER TABLE `registrados`
  MODIFY `id_registro` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`cat_id`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`);

--
-- Constraints for table `registrados`
--
ALTER TABLE `registrados`
  ADD CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`id_regalo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
