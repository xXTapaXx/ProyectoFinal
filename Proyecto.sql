-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2014 a las 03:00:35
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
`id` int(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `sede` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `codigo`, `nombre`, `sede`) VALUES
(2, 'ISW', 'Ingeneria en Software', 'San Carlos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `cedula` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `ingles` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `proyecto` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `duracion` varchar(100) NOT NULL,
  `tecnologia` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `calificacion` varchar(100) NOT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cedula`, `nombre`, `apellidos`, `telefono`, `correo`, `direccion`, `foto`, `carrera`, `ingles`, `skill`, `proyecto`, `curso`, `duracion`, `tecnologia`, `descripcion`, `fecha`, `calificacion`, `comentario`) VALUES
('207220239', 'Jason', 'Gamboa Solano', '87334413', 'jgs14@hotmail.com', 'Leyla', 'imagenes/utn.png', 'ISW', 'basico', 'Programador', 'web', 'web', '2annos', 'html', 'crear parginas web', '23/06/2014', '100', 'Excellente'),
('ISW', '123', '123', '123', '123@hotmail.com', '123', 'imagenes/user.png', '123', '123', '123', '', '123', '123', '123', '123', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasenna` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `contrasenna`, `role`) VALUES
('1', 'Jason', 'Admin', 'admin', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
 ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
