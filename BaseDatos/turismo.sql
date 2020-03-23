-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2016 a las 04:31:07
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronogramaturistico`
--

CREATE TABLE IF NOT EXISTS `cronogramaturistico` (
  `IdCronogramaTuristico` int(11) NOT NULL AUTO_INCREMENT,
  `IdLugarTuristico` int(11) NOT NULL,
  `IdDiaSemana` int(11) NOT NULL,
  `HoraSalida` varchar(8) NOT NULL,
  `HoraLlegada` varchar(8) NOT NULL,
  `Precio` decimal(9,2) DEFAULT NULL,
  `Activo` char(1) NOT NULL,
  PRIMARY KEY (`IdCronogramaTuristico`),
  KEY `CronogramaTuristico_IdLugarTuristico_FK` (`IdLugarTuristico`),
  KEY `CronogramaTuristico_IdDiaSemana_FK` (`IdDiaSemana`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cronogramaturistico`
--

INSERT INTO `cronogramaturistico` (`IdCronogramaTuristico`, `IdLugarTuristico`, `IdDiaSemana`, `HoraSalida`, `HoraLlegada`, `Precio`, `Activo`) VALUES
(1, 1, 1, '12:00 AM', '13:00 PM', '40.00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diasemana`
--

CREATE TABLE IF NOT EXISTS `diasemana` (
  `IdDiaSemana` int(11) NOT NULL AUTO_INCREMENT,
  `DiaSemana` varchar(20) NOT NULL,
  PRIMARY KEY (`IdDiaSemana`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `diasemana`
--

INSERT INTO `diasemana` (`IdDiaSemana`, `DiaSemana`) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES'),
(6, 'SABADO'),
(7, 'DOMINGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarturistico`
--

CREATE TABLE IF NOT EXISTS `lugarturistico` (
  `IdLugarTuristico` int(11) NOT NULL AUTO_INCREMENT,
  `LugarTuristico` varchar(100) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `Imagen` varchar(30) DEFAULT NULL,
  `Ubicacion` varchar(100) DEFAULT NULL,
  `Activo` varchar(1) NOT NULL,
  PRIMARY KEY (`IdLugarTuristico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `lugarturistico`
--

INSERT INTO `lugarturistico` (`IdLugarTuristico`, `LugarTuristico`, `Ciudad`, `Imagen`, `Ubicacion`, `Activo`) VALUES
(1, 'chanchan', 'ssss', 'images.jpg', '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `IdPersona` int(11) NOT NULL AUTO_INCREMENT,
  `Apellidos` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Dni` varchar(8) CHARACTER SET utf8 DEFAULT NULL,
  `Sexo` varchar(10) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Direccion` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `Telefono` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `Celular` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `Email` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `Foto` longblob,
  `Activo` char(1) NOT NULL,
  `Rnd` varchar(20) NOT NULL,
  PRIMARY KEY (`IdPersona`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IdPersona`, `Apellidos`, `Nombres`, `Dni`, `Sexo`, `FechaNacimiento`, `Direccion`, `Telefono`, `Celular`, `Email`, `Foto`, `Activo`, `Rnd`) VALUES
(1, 'CASTILLO', 'JOEL', '12345676', 'FEMENINO', '2016-06-01', '', '', '', '', NULL, '1', '232222222'),
(2, 'CERNA ISLA', 'MARIA', '34343434', 'FEMENINO', '1893-04-12', '', '', '', '', NULL, '1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE IF NOT EXISTS `reservaciones` (
  `IdReservacion` int(11) NOT NULL AUTO_INCREMENT,
  `FechaReservacion` date DEFAULT NULL,
  `HoraReservacion` varchar(8) DEFAULT NULL,
  `IdPersona` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Monto` decimal(9,2) NOT NULL,
  `IdLugarTuristico` int(11) NOT NULL,
  `Activo` char(1) NOT NULL,
  PRIMARY KEY (`IdReservacion`),
  KEY `Reservacion_IdPersona_FK` (`IdPersona`),
  KEY `Reservacion_IdUsuario_FK` (`IdUsuario`),
  KEY `Reservacion_IdLugarTuristico_FK` (`IdLugarTuristico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`IdReservacion`, `FechaReservacion`, `HoraReservacion`, `IdPersona`, `IdUsuario`, `Monto`, `IdLugarTuristico`, `Activo`) VALUES
(1, '2016-03-13', '12:00 am', 1, 1, '200.00', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Login` varchar(25) NOT NULL,
  `Pasword` varchar(10) NOT NULL,
  `TipoUsuario` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Activo` char(1) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  UNIQUE KEY `Usuario_Login_UQ` (`Login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Login`, `Pasword`, `TipoUsuario`, `Activo`) VALUES
(1, 'JCASTILLORO', '123456', 'Personal', '1'),
(2, 'MARIA', '123', 'Cliente', '1');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cronogramaturistico`
--
ALTER TABLE `cronogramaturistico`
  ADD CONSTRAINT `CronogramaTuristico_IdLugarTuristico_FK` FOREIGN KEY (`IdLugarTuristico`) REFERENCES `lugarturistico` (`IdLugarTuristico`),
  ADD CONSTRAINT `CronogramaTuristico_IdDiaSemana_FK` FOREIGN KEY (`IdDiaSemana`) REFERENCES `diasemana` (`IdDiaSemana`);

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `Reservacion_IdPersona_FK` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`IdPersona`),
  ADD CONSTRAINT `Reservacion_IdUsuario_FK` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `Reservacion_IdLugarTuristico_FK` FOREIGN KEY (`IdLugarTuristico`) REFERENCES `lugarturistico` (`IdLugarTuristico`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Usuario_IdUsuario_FK` FOREIGN KEY (`IdUsuario`) REFERENCES `persona` (`IdPersona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
