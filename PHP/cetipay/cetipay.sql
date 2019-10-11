-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 07:43 PM
-- Server version: 10.4.6-MariaDB
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
(1, 200, 1),
(8, 987300, 13),
(9, 8810, 14),
(10, 100, 15),
(11, 1100, 16),
(12, 509, 17),
(13, 1100, 18),
(14, 1000, 19),
(15, 9580, 20),
(16, 1100, 21),
(17, 1100, 22),
(18, 720, 23),
(23, 410, 28),
(24, 200, 29),
(25, 9200, 30),
(27, 0, 32),
(28, 0, 33),
(29, 0, 34),
(30, 0, 35),
(31, 0, 36),
(32, 0, 37),
(33, 0, 38),
(34, 0, 39),
(35, 0, 40),
(36, 0, 41),
(37, 0, 42),
(38, 0, 43),
(39, 0, 44),
(40, 0, 45),
(41, 0, 46),
(42, 0, 47),
(43, 0, 48),
(44, 0, 49),
(45, 0, 50),
(46, 0, 51),
(47, 0, 52),
(48, 0, 53),
(49, 0, 54),
(50, 0, 55),
(51, 0, 56),
(52, 0, 57),
(53, 0, 58),
(54, 0, 59),
(55, 0, 60),
(56, 0, 61),
(57, 0, 62),
(58, 0, 63),
(59, 0, 64);

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
  `Contrasena` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`PK_usuarios`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Contrasena`) VALUES
(1, 'Alan', 'Lomeli', 666, 'alomeligcia@gmail.com', 'clave'),
(13, 'Ricardo', 'Lopez', 3314118949, 'relg1999@gmail.com', '123'),
(14, 'Mohamed', 'Olmos', 3323248689, 'moes131212@gmail.com', 'clave'),
(15, 'Mariana', 'Bojorquez', 3312409806, 'bojorquez.mariana73@gmail.com', '1234'),
(16, 'Juan Pablo ', 'Rodriguez Ramirez', 3339507279, 'krozzimpulse@gmail.com', '123'),
(17, 'Adriana', 'Espinosa', 3310489567, 'Adriana@gmail.com', '123'),
(18, 'juanpa', 'reyes', 3317179422, 'pablo16100279@gmail.com', '1234'),
(19, 'Pablo', 'LeÃ³n', 3310227112, 'telasponcho@gmail.com', 'clave'),
(20, 'Mario', 'Villalpando', 3315348578, 'marioeltrunco@gmail.com', 'cacadevaca'),
(21, 'Christian', 'Ochoa', 3315734116, 'christianhdez022@gmail.com', 'clave'),
(22, 'Andre Gabriel', 'Monterrubio Blas', 3313155339, 'andremblas@gmail.com', 'clave'),
(23, 'Nito', 'RodrÃ­guez', 3318420499, 'juanpa1099@hotmail.com', 'nito123'),
(28, 'Hillary', 'Castaneda', 3314644352, 'hilary1723@gmail.com', '123'),
(29, 'Ma', 'Ji', 3311416392, 'a16100159@ceti.mx', '123'),
(30, 'Herbert', 'Jaime', 3310489361, 'herbert@hotmail.com', '1234'),
(32, 'Juan Pablo ', 'Rodriguez Ramirez', 3339507279, 'krozzimpulse@gmail.com', '123'),
(33, 'juan', ' pa', 3311564293, 'a16100279', '123'),
(34, '%%%%%', '%%%%%', 1, '%%%%%%%', '1234'),
(35, '%%%%%', '%%%%%', 1, '%%%@%%%%', '1234'),
(36, '%%%%%', '%%%%%', 1, '%%%@%%%%', '1234'),
(37, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(38, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(39, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(40, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(41, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(42, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(43, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(44, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(45, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(46, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(47, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(48, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(49, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(50, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(51, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(52, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(53, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(54, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(55, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(56, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(57, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(58, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(59, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(60, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(61, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(62, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(63, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234'),
(64, '%%%%%', '%%%%%', 1, 'jaimependejo@gmail.com', '1234');

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
  MODIFY `PK_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `PK_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
