-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 07:41 PM
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
-- Database: `skaters`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

CREATE TABLE `articulo` (
  `Articulo_ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`Articulo_ID`, `Nombre`) VALUES
(1, 'Llantas'),
(2, 'Trucks'),
(3, 'Tablas');

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `Marca_ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`Marca_ID`, `Nombre`) VALUES
(1, 'Antifashion'),
(2, 'Santa Cruz'),
(3, 'Vans'),
(4, 'Dexlix'),
(5, 'Spitfire'),
(6, 'Independent'),
(7, 'Dexlix'),
(8, 'Plan B'),
(9, 'Deathwish'),
(10, 'Hysteria'),
(11, 'Krux'),
(12, 'Vulkan'),
(13, 'VEnture'),
(14, 'Thunder');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `Producto_ID` int(11) NOT NULL,
  `Marca_FK` int(11) NOT NULL,
  `Articulo_FK` int(11) NOT NULL,
  `Cantidad` tinyint(4) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`Producto_ID`, `Marca_FK`, `Articulo_FK`, `Cantidad`, `Nombre`, `Foto`, `Modelo`, `Descripcion`, `Precio`) VALUES
(1, 4, 3, 16, 'Tabla Dexlix Cocodrilo 8.5 inch', 'tabla-dexlixcoco.png', 'T-DEXCOCO85', 'Bonita tabla Dexlix color rosa de 8.5', 1000),
(4, 7, 3, 22, 'Tabla Dexlix X THC 420 Rojo ', 'tabla-dexlixthc.png', 'THC 420', '8.4 inch', 690),
(5, 7, 3, -1, 'Tabla Dexlix Alv coco', 'tabla-dexlixalv.png', 'ALV COCO', '8.0,8.12,8.25,8.37,8.5 inch', 570),
(6, 8, 3, 30, 'Tabla Plan B Sheckler ', 'tabla-planbsheckler.png', 'Sheckler Hands', '8.25 inch', 890),
(7, 9, 3, 30, 'Tabla Deathwish Skateboards Slash', 'tabla-deathwishslash.png', 'Slash', '8 inch', 949),
(8, 8, 3, 30, 'Tabla Plan B Felipe Gustavo', 'tabla-planbfelipe.png', 'Felipe GUstavo', '8.25 inch', 890),
(10, 5, 1, 26, 'Spitfire Chargers 80hd Azul 54mm', 'llanta-spitfirechargers.png', '80hdL', '80hd Azul 54mm', 900),
(11, 5, 1, 29, 'Spitfire Wheels Mike Anderson 54 mm 99 duro Rosas', 'llanta-spitfiremike.png', 'Mike Anderson', '54 mm 99 duro Rosas', 800),
(12, 5, 1, 30, 'Spitfire Wheels F4 Lock Ins Daewon 53mm', 'llanta-spitfirelocks.png', 'Lock Ins Daewon', '53mm', 950),
(13, 5, 1, 29, 'Spitfire Wheels 80HD Chargers Green 54mm', 'llanta-spitfirechargersgreen.png', 'Chargers Green ', '54mm', 950),
(14, 5, 1, 25, 'Spitfire Wheels 80HD Chargers Red 54mm', 'llanta-spitfirechargersred.png', 'Chargers Red', '54mm', 900),
(15, 5, 1, 30, 'Spitfire Arson Dept 54mm', 'llanta-spitfirearson.png', 'Arson Dept', '54mm', 1000),
(16, 10, 2, 30, 'Trucks Hysteria X Ludica', 'trucks-Hysteria-X-Ludica-Serpiente.png', 'X LUDICA', '149', 690),
(17, 6, 2, 29, 'Trucks Independent 215', 'trucks-INDY215.png', 'Independent 215', '215', 1290),
(18, 11, 2, -1, 'Trucks Krux Pro Nora', 'krux-k4_nora_multi_colour_trucks_8_5_standard_trucks_pro_model_nora_grande.png', ' Pro Nora', '8.0', 850),
(19, 12, 2, 29, 'Trucks Vulkan Negro', 'vulkan-negro2.png', 'VK-blc', '8.5', 590),
(20, 13, 2, 25, 'Trucks Venture Biebel Brilliant V-Lights Low 5.0', 'Trucks-Venture-Biebel-Brilliant-V-Lights-Low.png', 'iebel Brilliant V-Lights Low', '5.0', 950),
(21, 14, 2, 30, 'Trucks Thunder Polish Team Editions 145', 'trucks-thunder-polished.png', 'Polish Team Editions', '145', 820);

-- --------------------------------------------------------

--
-- Table structure for table `t_usuario`
--

CREATE TABLE `t_usuario` (
  `Usuario_ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_usuario`
--

INSERT INTO `t_usuario` (`Usuario_ID`, `Nombre`) VALUES
(1, 'Cliente'),
(2, 'Administrador'),
(3, 'Almacenista');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Usuario_ID` int(11) NOT NULL,
  `Tipo_FK` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Contrasena` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Usuario_ID`, `Tipo_FK`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
(1, 2, 'Alan Jesus', 'Lomeli', 'alomeligcia@gmail.com', 'clave'),
(2, 1, 'Doug Dimmadomme', 'Dueño del Domodimm', 'dougdim@gmail.com', 'clave'),
(3, 3, 'Jose de Jesus', 'Jimenez Jara', 'josesito@gmail.com', 'clave'),
(6, 1, 'Maria', 'Jimenez', 'a16100159@ceti.mx', '123'),
(7, 1, 'Adriana', 'Espinosa', 'Adriana@gmail.com', '123'),
(8, 1, 'Nito', 'Rodriguez', 'juanpa1099@hotmail.com', 'nito123'),
(9, 1, 'Pablo', 'LeÃ³n', 'telasponcho@gmail.com', 'weeeynooo'),
(10, 1, 'Christian', 'Ochoa', 'christianhdez022@gmail.com', 'clave'),
(11, 1, 'juanpa', 'reyes', 'pablo16100279@gmail.com', '1234'),
(12, 1, 'Mohamed', 'Olmos', 'moes131212@gmail.com', 'clave'),
(13, 1, 'Hillary', 'Castaneda', 'hilary1723@gmail.com', '123'),
(14, 1, 'Mario', 'Villalpando', 'marioeltrunco@gmail.com', 'cacadevaca'),
(15, 1, 'Mariana', 'Bojorquez', 'bojorquez.mariana73@gmail.com', '1234'),
(16, 1, 'Andre Gabriel', 'Monterrubio Blas', 'andremblas@gmail.com', 'clave'),
(17, 1, 'Ricardo ', 'Lopez', 'relg1999@gmail.com', '123'),
(18, 1, 'Herbert', 'Jaime', 'herbert@hotmail.com', '1234'),
(19, 1, 'Krozz', 'RDGZ', 'krozzimpulse@gmail.com', '12'),
(20, 1, 'Coco', 'El matador', 'cocogaga@ceti.mx', 'ALVlaclase');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`Articulo_ID`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`Marca_ID`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Producto_ID`),
  ADD KEY `Marca_FK` (`Marca_FK`),
  ADD KEY `Articulo_FK` (`Articulo_FK`);

--
-- Indexes for table `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`Usuario_ID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usuario_ID`),
  ADD KEY `Tipo_FK` (`Tipo_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Articulo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `Marca_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `Producto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `Usuario_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Usuario_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`Marca_FK`) REFERENCES `marca` (`Marca_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`Articulo_FK`) REFERENCES `articulo` (`Articulo_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Tipo_FK`) REFERENCES `t_usuario` (`Usuario_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
