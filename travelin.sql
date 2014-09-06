-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2014 a las 03:04:53
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `travelin`
--
CREATE DATABASE IF NOT EXISTS `travelin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `travelin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `idReserva` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idComentario` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `idUsuarioComenta` int(11) NOT NULL,
  `idEstableci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diariodeviajero`
--

CREATE TABLE IF NOT EXISTS `diariodeviajero` (
  `idDiario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE IF NOT EXISTS `establecimiento` (
`idEstableci` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idTipoEstableci` int(11) NOT NULL,
  `idCiudad` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `idEstado` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotoestableci`
--

CREATE TABLE IF NOT EXISTS `fotoestableci` (
  `idFotoEstableci` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `idEstableci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosviajero`
--

CREATE TABLE IF NOT EXISTS `fotosviajero` (
  `idFotoV` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `idDiario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE IF NOT EXISTS `habitacion` (
  `idHabitacion` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `camas` int(11) NOT NULL,
  `privada` tinyint(1) NOT NULL,
  `idEstableci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `idMensaje` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` date NOT NULL,
  `idUsuarioEscrib` int(11) NOT NULL,
  `idEstableci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parada`
--

CREATE TABLE IF NOT EXISTS `parada` (
  `idParada` int(11) NOT NULL,
  `idDiario` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idEstado` int(11) NOT NULL,
  `idEstableci` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `idPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `idReserva` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idHabitacion` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguidor`
--

CREATE TABLE IF NOT EXISTS `seguidor` (
  `usuSigueA` int(11) NOT NULL,
  `usuSeguido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestableci`
--

CREATE TABLE IF NOT EXISTS `tipoestableci` (
  `idTipoEstableci` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nick` varchar(15) DEFAULT NULL,
  `idCiudad` int(11) DEFAULT NULL,
  `nombreFotoPerfil` varchar(80) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido`, `email`, `password`, `nick`, `idCiudad`, `nombreFotoPerfil`) VALUES
(1, 'Leandro', 'Quipildor', 'leandro_1980@live.com.ar', '1234', 'kipi', NULL, ''),
(2, 'Jualiana', 'Avellaneda', 'ajulianaeva@gmail.com', '1111', 'july', NULL, ''),
(3, 'cosme', NULL, 'fulanito@homer.com', 'donut', NULL, NULL, NULL),
(4, 'laika', NULL, 'guau@guau.dog', 'dog', NULL, NULL, NULL),
(5, 'ddd', NULL, 'fulanito@homer.com.ar', 'pp', NULL, NULL, NULL),
(6, 'neko', NULL, 'neko@neko.net', 'gato', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
 ADD PRIMARY KEY (`idReserva`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
 ADD PRIMARY KEY (`id`), ADD KEY `idProvincia` (`idProvincia`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
 ADD PRIMARY KEY (`idComentario`), ADD KEY `idUsuarioComenta` (`idUsuarioComenta`,`idEstableci`), ADD KEY `idEstableci` (`idEstableci`);

--
-- Indices de la tabla `diariodeviajero`
--
ALTER TABLE `diariodeviajero`
 ADD PRIMARY KEY (`idDiario`), ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
 ADD PRIMARY KEY (`idEstableci`), ADD KEY `idUsuario` (`idUsuario`,`idTipoEstableci`,`idCiudad`,`idEstado`), ADD KEY `idEstado` (`idEstado`), ADD KEY `idTipoEstableci` (`idTipoEstableci`), ADD KEY `idCiudad` (`idCiudad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
 ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `fotoestableci`
--
ALTER TABLE `fotoestableci`
 ADD PRIMARY KEY (`idFotoEstableci`), ADD KEY `idEstableci` (`idEstableci`);

--
-- Indices de la tabla `fotosviajero`
--
ALTER TABLE `fotosviajero`
 ADD PRIMARY KEY (`idFotoV`), ADD KEY `idDiario` (`idDiario`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
 ADD PRIMARY KEY (`idHabitacion`), ADD KEY `idEstableci` (`idEstableci`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
 ADD PRIMARY KEY (`idMensaje`), ADD KEY `idUsuarioEscrib` (`idUsuarioEscrib`,`idEstableci`), ADD KEY `idEstableci` (`idEstableci`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parada`
--
ALTER TABLE `parada`
 ADD PRIMARY KEY (`idParada`,`idDiario`), ADD KEY `idEstado` (`idEstado`), ADD KEY `idEstableci` (`idEstableci`), ADD KEY `idDiario` (`idDiario`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
 ADD PRIMARY KEY (`id`), ADD KEY `idPais` (`idPais`), ADD KEY `idPais_2` (`idPais`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
 ADD PRIMARY KEY (`idReserva`), ADD KEY `idUsuario` (`idUsuario`), ADD KEY `idEstado` (`idEstado`), ADD KEY `idHabitacion` (`idHabitacion`);

--
-- Indices de la tabla `seguidor`
--
ALTER TABLE `seguidor`
 ADD PRIMARY KEY (`usuSigueA`,`usuSeguido`), ADD KEY `usuSeguido` (`usuSeguido`);

--
-- Indices de la tabla `tipoestableci`
--
ALTER TABLE `tipoestableci`
 ADD PRIMARY KEY (`idTipoEstableci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`), ADD KEY `idCiudad` (`idCiudad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
MODIFY `idEstableci` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`idReserva`) REFERENCES `reserva` (`idReserva`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idUsuarioComenta`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`idEstableci`) REFERENCES `establecimiento` (`idEstableci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `diariodeviajero`
--
ALTER TABLE `diariodeviajero`
ADD CONSTRAINT `diariodeviajero_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `diariodeviajero_ibfk_2` FOREIGN KEY (`idDiario`) REFERENCES `fotosviajero` (`idDiario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
ADD CONSTRAINT `establecimiento_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `establecimiento_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `establecimiento_ibfk_3` FOREIGN KEY (`idTipoEstableci`) REFERENCES `tipoestableci` (`idTipoEstableci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `establecimiento_ibfk_4` FOREIGN KEY (`idCiudad`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotoestableci`
--
ALTER TABLE `fotoestableci`
ADD CONSTRAINT `fotoestableci_ibfk_1` FOREIGN KEY (`idEstableci`) REFERENCES `establecimiento` (`idEstableci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`idEstableci`) REFERENCES `establecimiento` (`idEstableci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`idUsuarioEscrib`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `mensaje_ibfk_2` FOREIGN KEY (`idEstableci`) REFERENCES `establecimiento` (`idEstableci`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `parada`
--
ALTER TABLE `parada`
ADD CONSTRAINT `parada_ibfk_1` FOREIGN KEY (`idEstableci`) REFERENCES `establecimiento` (`idEstableci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `parada_ibfk_2` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `parada_ibfk_3` FOREIGN KEY (`idDiario`) REFERENCES `diariodeviajero` (`idDiario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
ADD CONSTRAINT `provincia_ibfk_1` FOREIGN KEY (`idPais`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `reserva_ibfk_4` FOREIGN KEY (`idHabitacion`) REFERENCES `habitacion` (`idHabitacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `seguidor`
--
ALTER TABLE `seguidor`
ADD CONSTRAINT `seguidor_ibfk_1` FOREIGN KEY (`usuSigueA`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `seguidor_ibfk_2` FOREIGN KEY (`usuSeguido`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idCiudad`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
