-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2012 at 05:38 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `negocio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `producto_id_producto` int(10) unsigned NOT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`),
  KEY `producto_id_producto` (`producto_id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `producto_id_producto`, `tipo`) VALUES
(1, 1, 'MECANICA'),
(2, 2, 'CONSTRUCCION1244'),
(3, 3, 'HOGAR'),
(4, 4, 'HOGAR'),
(5, 5, 'CONSTRUCCION'),
(8, 9, 'NUEVA');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fecha_registro` date NOT NULL,
  `administrador` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `email`, `username`, `pass`, `fecha_registro`, `administrador`) VALUES
(1, 'dardo', 'camaño', 'dardo_c@yahoo.com', 'ddc', '1234', '2012-11-13', 1),
(2, 'diego', 'camaño', 'partyzone@yahoo.es', 'diego', '1234', '2012-11-13', 0),
(3, 'gonzalo', 'camaÃ±o', 'gonza@yahoo.com', 'gonza', '4567', '2012-11-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(10) unsigned NOT NULL,
  `cliente_id_cliente` int(10) unsigned NOT NULL,
  `producto_id_producto` int(10) unsigned NOT NULL,
  `cantidad` int(10) unsigned DEFAULT NULL,
  `precio_unitario` float DEFAULT NULL,
  `precio_total` float DEFAULT NULL,
  `comprado` tinyint(1) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `producto_id_producto` (`producto_id_producto`),
  KEY `cliente_id_cliente` (`cliente_id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`id_compra`, `cliente_id_cliente`, `producto_id_producto`, `cantidad`, `precio_unitario`, `precio_total`, `comprado`, `fecha`) VALUES
(3, 1, 2, 1, 1230.78, 1230.78, 1, '2012-11-14'),
(8, 1, 5, 6, 1889.99, 11339.9, 1, '2012-11-14'),
(11, 1, 5, 6, 1889.99, 11339.9, 1, '2012-11-14'),
(12, 2, 3, 2, 555.32, 1110.64, 1, '2012-11-14'),
(15, 2, 3, 4, 555.32, 2221.28, 1, '2012-11-14'),
(18, 2, 3, 4, 555.32, 2221.28, 1, '2012-11-16'),
(21, 2, 2, 1, 1230.78, 1230.78, 1, '2012-11-15'),
(22, 3, 4, 1, 399.99, 399.99, 1, '2012-11-16'),
(23, 3, 3, 3, 555.32, 1665.96, 1, '2012-11-16'),
(24, 2, 5, 1, 1889.99, 1889.99, 1, '2012-11-17'),
(25, 2, 1, 1, 844.88, 844.88, 1, '2012-11-17'),
(26, 2, 2, 3, 1230.78, 3692.34, 1, '2012-11-17'),
(27, 3, 5, 4, 1889.99, 7559.96, 1, '2012-11-17'),
(30, 2, 3, 1, 555.32, 555.32, 1, '2012-11-19'),
(32, 2, 2, 1, 1230.78, 1230.78, 1, '2012-11-20'),
(33, 2, 1, 1, 844.88, 844.88, 1, '2012-11-20'),
(34, 2, 5, 5, 1889.99, 9449.95, 1, '2012-11-20'),
(35, 2, 4, 2, 399.99, 799.98, 1, '2012-11-20'),
(36, 2, 2, 1, 1230.78, 1230.78, 0, '2012-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `compra_seq`
--

CREATE TABLE IF NOT EXISTS `compra_seq` (
  `sequence` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sequence`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `compra_seq`
--

INSERT INTO `compra_seq` (`sequence`) VALUES
(36);

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `imagen`, `descripcion`) VALUES
(1, 'Agujereadora', 844.88, 'imagenes/agujereadora.jpg', 'TALADRO DE MANO\r\nDefinición.\r\nSus tipos son muy variados y en general puede decirse que están formadas por un bloque muy compacto y de poco eso que lleva un motor que hace girar el eje portaherra-mientas a través de un reductor de velocidades. También lleva las correspondientes empañaduras para su manejo.'),
(2, 'Amoladora', 1230.78, 'imagenes/amoladora.jpg', 'Con discos incluidos...321'),
(3, 'Llave Inglesa', 555.32, 'imagenes/llave inglesa.jpg', 'De las buenas...'),
(4, 'Pala Pico plano', 399.99, 'imagenes/pala pico.jpg', 'De jardin...'),
(5, 'Trompo', 1889.99, 'imagenes/trompo.jpg', 'Profesional...'),
(9, 'Nuevo', 123, 'noimage', 'Descripcion del producto insertado por el admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`producto_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`producto_id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
