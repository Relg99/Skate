-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2019 a las 19:39:55
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cetipay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `PK_pago` int(11) NOT NULL,
  `Saldo` bigint(11) DEFAULT NULL,
  `FK_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuenta`
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
-- Estructura de tabla para la tabla `usuario`
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
-- Volcado de datos para la tabla `usuario`
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
(33, 'juan', ' pa', 3311564293, 'a16100279', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`PK_pago`),
  ADD KEY `FK_user` (`FK_user`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`PK_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `PK_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `PK_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`FK_user`) REFERENCES `usuario` (`PK_usuarios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
