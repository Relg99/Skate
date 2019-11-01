-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 10:34 PM
-- Server version: 10.4.6-MariaDB-log
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cetipay`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuenta`
--

CREATE TABLE `cuenta` (
  `PK_pago` int(11) NOT NULL,
  `Saldo` bigint(11) DEFAULT NULL,
  `FK_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuenta`
--

INSERT INTO `cuenta` (`PK_pago`, `Saldo`, `FK_user`) VALUES
(1, 94329, 1),
(8, 987300, 13),
(9, 8810, 14),
(10, 100, 15),
(11, 1100, 16),
(12, 509, 17),
(13, 1100, 18),
(14, 1000, 19),
(15, 9580, 20),
(16, 987300, 21),
(17, 1100, 22),
(18, 720, 23),
(23, 410, 28),
(24, 200, 29),
(25, 9200, 30),
(27, 0, 32),
(28, 0, 33);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `PK_usuarios` int(11) NOT NULL,
  `Nombre` varchar(128) DEFAULT NULL,
  `Apellido` varchar(128) DEFAULT NULL,
  `Telefono` bigint(11) DEFAULT NULL,
  `Correo` varchar(128) DEFAULT NULL,
  `Contrasena` varchar(128) DEFAULT NULL,
  `Ultima_Conexion` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`PK_usuarios`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Contrasena`, `Ultima_Conexion`) VALUES
(1, 'Alan', 'Lomeli', 666, 'alomeligcia@gmail.com', 'clave', 1571591942),
(13, 'Ricardo', 'Lopez', 3314118949, 'relg1999@gmail.com', '123', 0),
(14, 'Mohamed', 'Olmos', 3323248689, 'moes131212@gmail.com', 'clave', 0),
(15, 'Mariana', 'Bojorquez', 3312409806, 'bojorquez.mariana73@gmail.com', '1234', 0),
(16, 'Juan Pablo ', 'Rodriguez Ramirez', 3339507279, 'krozzimpulse@gmail.com', '123', 0),
(17, 'Adriana', 'Espinosa', 3310489567, 'Adriana@gmail.com', '123', 0),
(18, 'juanpa', 'reyes', 3317179422, 'pablo16100279@gmail.com', '1234', 0),
(19, 'Pablo', 'LeÃ³n', 3310227112, 'telasponcho@gmail.com', 'clave', 0),
(20, 'Mario', 'Villalpando', 3315348578, 'marioeltrunco@gmail.com', 'cacadevaca', 0),
(21, 'Christian', 'Ochoa', 3315734116, 'christianhdez022@gmail.com', 'clave', 0),
(22, 'Andre Gabriel', 'Monterrubio Blas', 3313155339, 'andremblas@gmail.com', 'clave', 0),
(23, 'Nito', 'RodrÃ­guez', 3318420499, 'juanpa1099@hotmail.com', 'nito123', 0),
(28, 'Hillary', 'Castaneda', 3314644352, 'hilary1723@gmail.com', '123', 0),
(29, 'Ma', 'Ji', 3311416392, 'a16100159@ceti.mx', '123', 0),
(30, 'Herbert', 'Jaime', 3310489361, 'herbert@hotmail.com', '1234', 0),
(32, 'Juan Pablo ', 'Rodriguez Ramirez', 3339507279, 'krozzimpulse@gmail.com', '123', 0),
(33, 'juan', ' pa', 3311564293, 'a16100279', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`PK_pago`),
  ADD KEY `FK_user` (`FK_user`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`PK_usuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `PK_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `PK_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`FK_user`) REFERENCES `usuario` (`PK_usuarios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
