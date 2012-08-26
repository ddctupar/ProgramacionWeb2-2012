-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2012 a las 06:19:14
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ferreteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_total` float NOT NULL,
  PRIMARY KEY (`id_carrito`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `carrito`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `categoria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `username`, `password`, `email`) VALUES
(1, 'DARDO', 'CAMAÑO', 'dardo_c', '123456789', 'dardo_c@yahoo.com'),
(2, 'LUIS', 'PETOVELLO', 'luigi', '987654321', 'luiji@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_carrito` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_carrito` (`id_carrito`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `compra`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(256) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `imagen`, `precio`, `descripcion`) VALUES
(1, '../imagenes/agujereadora.jpg', 600, 'GUJEREADORA RADIAL GP-820\r\n\r\nESTA AGUJEREADORA PERMITE SER TAMBIEN TRANSPORTADA\r\n\r\nPARA HACER TRABAJOS SOBRE LAS PIEZAS DIRECTAMENTE.\r\n\r\nCONSTRUIDA EN FUNDICION PERLITICA , TIENE LAS BASES RECTIFICADAS,\r\n\r\nUNA MAQUINA MUY UTIL, IDEAL PARA AGRO O TALLERES DE CALDERERIA.\r\n'),
(2, '../imagenes/amoladora.jpg', 800, 'GUJEREADORA RADIAL GP-820 ESTA AGUJEREADORA PERMITE SER TAMBIEN TRANSPORTADA PARA HACER TRABAJOS SOBRE LAS PIEZAS DIRECTAMENTE. CONSTRUIDA EN FUNDICION PERLITICA , TIENE LAS BASES RECTIFICADAS, UNA MAQUINA MUY UTIL, IDEAL PARA AGRO O TALLERES DE CALDERERIA. '),
(3, '../imagenes/llave-inglesa.png', 300, 'GUJEREADORA RADIAL GP-820 ESTA AGUJEREADORA PERMITE SER TAMBIEN TRANSPORTADA PARA HACER TRABAJOS SOBRE LAS PIEZAS DIRECTAMENTE. CONSTRUIDA EN FUNDICION PERLITICA , TIENE LAS BASES RECTIFICADAS, UNA MAQUINA MUY UTIL, IDEAL PARA AGRO O TALLERES DE CALDERERIA. '),
(4, '../imagenes/pala.jpg', 100, 'PALA PICO ACERO TEMPLADO AL CARBON CON MANGO DE MADERA. '),
(5, '../imagenes/trompo.jpg', 500, 'TROMPO PARA MEZCLA EN OBRA. ');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_carrito`) REFERENCES `carrito` (`id_carrito`) ON DELETE CASCADE ON UPDATE CASCADE;
