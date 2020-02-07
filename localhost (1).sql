-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-08-2019 a las 18:50:10
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE `proyecto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma`
--

CREATE TABLE IF NOT EXISTS `cronograma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` varchar(100) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo_proyecto` (`codigo_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `cronograma`
--

INSERT INTO `cronograma` (`id`, `codigo_proyecto`, `fecha_inicio`, `fecha_fin`) VALUES
(37, 'gfdgd', '2019-08-08', '2019-08-31'),
(38, '777', '2019-08-09', '2019-08-10'),
(39, 'ytuty', '2019-08-02', '2019-08-22'),
(40, 'ytuty5', '2019-08-02', '2019-08-22'),
(41, '12595', '2019-08-07', '2019-08-24'),
(42, 'ewr', '2019-08-08', '2019-08-31'),
(43, '24585', '2019-08-16', '2019-08-24'),
(44, 'dsfsdfre', '2019-08-01', '2019-08-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregables`
--

CREATE TABLE IF NOT EXISTS `entregables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha_entrega` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo_proyecto` (`codigo_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `entregables`
--

INSERT INTO `entregables` (`id`, `codigo_proyecto`, `nombre`, `fecha_entrega`) VALUES
(36, 'gfdgd', 'dfdfds', '2019-08-24'),
(38, '777', 'ghgfh', '2019-08-16'),
(39, 'ytuty', 'wewe', '2019-08-16'),
(40, 'ytuty5', 'wewe', '2019-08-16'),
(41, '12595', 'www', '2019-08-16'),
(42, 'ewr', 'fccbc', '2019-08-17'),
(43, '24585', 'qwwe', '2019-08-31'),
(44, 'dsfsdfre', 'fdg', '2019-08-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_proyecto`
--

CREATE TABLE IF NOT EXISTS `estudiantes_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` varchar(100) NOT NULL,
  `estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estudiante` (`estudiante`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `estudiante_2` (`estudiante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Volcado de datos para la tabla `estudiantes_proyecto`
--

INSERT INTO `estudiantes_proyecto` (`id`, `codigo_proyecto`, `estudiante`) VALUES
(28, '12595', 98),
(29, '12595', 100),
(30, 'ewr', 98),
(31, 'ghh', 100),
(32, 'rwerwr', 98),
(33, '24585', 98),
(34, '24585', 100),
(35, 'dfsd', 98),
(36, 'dfsd', 100),
(37, 'ewrwer3', 98),
(38, 'sdfsd', 98),
(39, '342342', 98),
(40, 'xcxcx', 98),
(41, 'dfdf', 98),
(42, 'ret ert ert', 98),
(43, 'dsfsdfre', 98);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_proyecto`
--

CREATE TABLE IF NOT EXISTS `grupo_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) NOT NULL,
  `codigo_proyecto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_grupo` (`id_grupo`),
  KEY `codigo_proyecto` (`codigo_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `grupo_proyecto`
--

INSERT INTO `grupo_proyecto` (`id`, `id_grupo`, `codigo_proyecto`) VALUES
(32, 16, 'gfdgd'),
(33, 17, '777'),
(34, 33, 'ytuty'),
(35, 20, 'ytuty5'),
(36, 31, '12595'),
(37, 32, 'ewr'),
(38, 29, '24585'),
(39, 32, 'dsfsdfre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(100) NOT NULL,
  `nombre_programa` int(11) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `fecha_agregado` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre_programa` (`nombre_programa`),
  KEY `nombre_programa_2` (`nombre_programa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `nombre_grupo`, `nombre_programa`, `estado`, `fecha_agregado`) VALUES
(15, 'mototaxista', 16, 'activo', '2019-08-19'),
(16, 'modelo', 17, 'activo', '2019-08-19'),
(17, 'tarea', 16, 'activo', '2019-08-19'),
(18, 'diseÃ±adores', 16, 'activo', '2019-08-20'),
(19, 'ert', 18, 'activo', '2019-08-20'),
(20, 'ertete', 17, 'activo', '2019-08-20'),
(21, 'trytr', 16, 'activo', '2019-08-20'),
(22, 'dfgdf', 16, 'activo', '2019-08-20'),
(23, 'dfgdfg', 16, 'activo', '2019-08-20'),
(24, 'mototaxistaf', 17, 'activo', '2019-08-20'),
(25, 'rete', 17, 'activo', '2019-08-20'),
(26, 'reter', 18, 'activo', '2019-08-20'),
(27, 'rte', 17, 'activo', '2019-08-20'),
(28, 'tryrt', 17, 'activo', '2019-08-20'),
(29, 'tyr', 18, 'activo', '2019-08-20'),
(30, 'yrty', 17, 'activo', '2019-08-20'),
(31, 'fgfd', 16, 'activo', '2019-08-20'),
(32, 'diseÃ±adorest', 16, 'activo', '2019-08-20'),
(33, 'diseÃ±adorestr', 16, 'activo', '2019-08-20'),
(34, 'diseÃ±adorestrt', 16, 'activo', '2019-08-20'),
(35, 'gfh', 16, 'activo', '2019-08-20'),
(36, 'fgdf', 17, 'activo', '2019-08-20'),
(37, 'fdg', 18, 'activo', '2019-08-20'),
(38, 'rty', 16, 'activo', '2019-08-20'),
(39, 'tryrt5', 17, 'activo', '2019-08-20'),
(40, 'tryrt5d', 17, 'activo', '2019-08-20'),
(41, 'tryrtt', 20, 'activo', '2019-08-20'),
(42, 'tryrtty', 20, 'activo', '2019-08-20'),
(43, 'tryrttytt', 20, 'activo', '2019-08-20'),
(44, 'tryrttyttb', 20, 'activo', '2019-08-20'),
(45, 'tryrttyttbg', 20, 'activo', '2019-08-20'),
(46, 'fdsdf', 17, 'activo', '2019-08-20'),
(47, 'tryrtyr', 19, 'activo', '2019-08-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigadores_proyecto`
--

CREATE TABLE IF NOT EXISTS `investigadores_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` varchar(100) NOT NULL,
  `investigador` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL,
  KEY `investigador` (`investigador`),
  KEY `id` (`id`),
  KEY `investigador_2` (`investigador`),
  KEY `codigo_proyecto` (`codigo_proyecto`),
  KEY `codigo_proyecto_2` (`codigo_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `investigadores_proyecto`
--

INSERT INTO `investigadores_proyecto` (`id`, `codigo_proyecto`, `investigador`, `rol`) VALUES
(29, '', 101, 'Inv Principal'),
(39, '12595', 101, 'Coinvestigador'),
(41, '24585', 99, 'Inv Principal'),
(42, '24585', 101, 'Coinvestigador'),
(43, 'ewrwer3', 99, 'Inv Principal'),
(44, 'sdfsd', 99, 'Inv Principal'),
(45, '342342', 99, 'Inv Principal'),
(46, 'xcxcx', 99, 'Inv Principal'),
(47, 'dfdf', 99, 'Inv Principal'),
(48, 'ret ert ert', 99, 'Inv Principal'),
(49, 'dsfsdfre', 99, 'Inv Principal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE IF NOT EXISTS `miembros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `cedula` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `grupo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo` (`grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id`, `nombre`, `cedula`, `rol`, `grupo`) VALUES
(98, 'keyner', 657567, 'Estudiante', 15),
(99, 'keyner jhonaiker', 6857567, 'Investigador', 15),
(100, 'manuel ortega', 45465, 'Estudiante', 15),
(101, 'samuel', 34334534, 'Investigador', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_proyecto`
--

CREATE TABLE IF NOT EXISTS `programa_proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_programa` int(11) NOT NULL,
  `codigo_proyecto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_programa` (`id_programa`),
  KEY `codigo_proyecto` (`codigo_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `programa_proyecto`
--

INSERT INTO `programa_proyecto` (`id`, `id_programa`, `codigo_proyecto`) VALUES
(32, 16, 'gfdgd'),
(33, 17, '777'),
(35, 17, 'ytuty5'),
(36, 16, '12595'),
(37, 16, 'ewr'),
(38, 18, '24585'),
(39, 16, 'dsfsdfre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE IF NOT EXISTS `programas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `programa` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `fecha_agregado` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `programa`, `estado`, `fecha_agregado`) VALUES
(16, 'ingenieria', 'activo', '2019-08-19'),
(17, 'contaduria', 'activo', '2019-08-19'),
(18, 'keyner', 'activo', '2019-08-19'),
(19, 'never', 'activo', '2019-08-19'),
(20, 'sistema', 'activo', '2019-08-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(100) NOT NULL,
  `nombre_proyecto` varchar(100) NOT NULL,
  `presupuesto` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(11) NOT NULL,
  `fecha_agregado` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `codigo`, `nombre_proyecto`, `presupuesto`, `descripcion`, `estado`, `fecha_agregado`) VALUES
(37, 'gfdgd', 'ecopetrol', 3432423, 'gfdg', 'inactivo', '2019-08-19'),
(38, '777', 'fd', 324234, 'reter', 'terminado', '2019-08-20'),
(39, 'ytuty', 'ytu67657567', 56546, '65765675', 'activo', '2019-08-20'),
(40, 'ytuty5', 'ytu67657567', 56546, '65765675', 'activo', '2019-08-20'),
(41, '12595', 'perfecto', 24234242, '', 'activo', '2019-08-21'),
(42, 'ewr', 'ecopetrol saswewr', 3423, 'ew rw re rereter', 'activo', '2019-08-22'),
(43, '24585', 'almanaque', 2342343, 'dfsdfsd', 'activo', '2019-08-22'),
(44, 'dsfsdfre', 'sdfsd', 432423, '324324', 'activo', '2019-08-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE IF NOT EXISTS `seguimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` varchar(100) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo_proyecto` (`codigo_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `seguimientos`
--

INSERT INTO `seguimientos` (`id`, `codigo_proyecto`, `documento`, `nombre`, `tipo`, `descripcion`) VALUES
(4, 'gfdgd', '1566251744_PIRAMIDE DE CARROLL DE ECOPETROL.docx', 'dfdfds', 'parcial', ' vvv g jgjgj gjgjk ut ututuut'),
(5, 'gfdgd', '1566251895_PIRAMIDE DE CARROLL DE ECOPETROL.docx', 'dfgfdg', 'parcial', 'gfbgbg'),
(6, '777', '1566334413_AVANCES.docx', 'ghgfh', 'parcial', 'rwer'),
(7, '777', '1566339327_smart_bazaar.zip', 'ghgfh', 'parcial', 'gjg jgh jhg jg'),
(8, '777', '1566339389_chart.png', 'ghgfh', 'parcial', 'gjg jgh jhg jg'),
(9, '777', '1566339416_1565059178_pages (1).pdf', 'ghgfh', 'parcial', 'gjg jgh jhg jg'),
(10, '12595', '1566422904_Administrador de la nube.pdf', 'www', 'parcial', 'rtretre'),
(11, '12595', '1566423177_Administrador de la nube.pdf', 'www', 'parcial', 'khjkh'),
(12, '12595', '1566424136_Administrador de la nube.pdf', 'www', 'parcial', 'ggggg'),
(13, '12595', '1566503777_descarga.png', 'www', 'parcial', 'este es'),
(14, '24585', '1566504060_39ea275e1a9bc71dd03925b6ddc755bc--banner-app.jpg', 'qwwe', 'parcial', 'dfgfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `codigo_proyecto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `rol`, `codigo_proyecto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrador', 'null'),
(2, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'coordinador', 'null'),
(26, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', '12595'),
(27, 'samuel', '827ccb0eea8a706c4c34a16891f84e7b', 'Coinvestigador', '12595'),
(28, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'ewr'),
(31, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', '24585'),
(32, 'samuel', '827ccb0eea8a706c4c34a16891f84e7b', 'Coinvestigador', '24585'),
(36, 'manuel ortega', '96917805fd060e3766a9a1b834639d35', 'estudiante', '24585'),
(37, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'ewrwer3'),
(38, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', 'ewrwer3'),
(39, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', 'sdfsd'),
(40, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'sdfsd'),
(41, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', '342342'),
(42, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', '342342'),
(43, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', 'xcxcx'),
(44, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'xcxcx'),
(45, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'dfdf'),
(46, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', 'dfdf'),
(47, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', 'ret ert ert'),
(48, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'ret ert ert'),
(49, 'keyner', '827ccb0eea8a706c4c34a16891f84e7b', 'estudiante', 'dsfsdfre'),
(50, 'keyner jhonaiker', '827ccb0eea8a706c4c34a16891f84e7b', 'Inv Principal', 'dsfsdfre');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cronograma`
--
ALTER TABLE `cronograma`
  ADD CONSTRAINT `cronograma_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyecto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantes_proyecto`
--
ALTER TABLE `estudiantes_proyecto`
  ADD CONSTRAINT `estudiantes_proyecto_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `miembros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo_proyecto`
--
ALTER TABLE `grupo_proyecto`
  ADD CONSTRAINT `grupo_proyecto_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupo_proyecto_ibfk_2` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyecto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`nombre_programa`) REFERENCES `programas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `investigadores_proyecto`
--
ALTER TABLE `investigadores_proyecto`
  ADD CONSTRAINT `investigadores_proyecto_ibfk_1` FOREIGN KEY (`investigador`) REFERENCES `miembros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD CONSTRAINT `miembros_ibfk_1` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programa_proyecto`
--
ALTER TABLE `programa_proyecto`
  ADD CONSTRAINT `programa_proyecto_ibfk_1` FOREIGN KEY (`id_programa`) REFERENCES `programas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programa_proyecto_ibfk_2` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyecto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD CONSTRAINT `seguimientos_ibfk_1` FOREIGN KEY (`codigo_proyecto`) REFERENCES `proyecto` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
