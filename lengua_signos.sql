-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2023 a las 23:06:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lengua_signos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `definiciones`
--

CREATE TABLE `definiciones` (
  `id` int(11) NOT NULL,
  `nombreArchivo` varchar(50) NOT NULL,
  `nombreSigno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `definiciones`
--

INSERT INTO `definiciones` (`id`, `nombreArchivo`, `nombreSigno`) VALUES
(2, 'abrigo_signo', 'abrigo'),
(3, 'chaqueta_signo', 'chaqueta'),
(4, 'plato_ducha_signo', 'plato_duhca'),
(5, 'economia_signo', 'economia'),
(6, 'chubasquero_signo', 'chubasquero'),
(7, 'agotado_signo', 'agotado'),
(8, 'dulce_signo', 'dulce'),
(9, 'dolor_signo', 'dolor'),
(10, 'cariño_signo', 'cariño'),
(11, 'claro_signo', 'claro'),
(12, 'elastico_signo', 'elastico'),
(13, 'tentacion_signo', 'tentacion'),
(14, 'tarta_signo', 'tarta'),
(15, 'completo_signo', 'completo'),
(16, 'def_agotado', 'agotado'),
(17, 'def_dolor', 'dolor'),
(18, 'def_dulce', 'dulce'),
(19, 'def_economia', 'economia'),
(20, 'def_plato_ducha', 'plato_duhca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signo`
--

CREATE TABLE `signo` (
  `codigo` varchar(50) NOT NULL,
  `configuracion` varchar(100) NOT NULL,
  `orientacion` varchar(20) NOT NULL,
  `movimiento` varchar(100) NOT NULL,
  `espacio` varchar(100) NOT NULL,
  `no_manual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `signo`
--

INSERT INTO `signo` (`codigo`, `configuracion`, `orientacion`, `movimiento`, `espacio`, `no_manual`) VALUES
('c|j|_-1b-d|c-t-n', 'cerrados/juntos/_', '1b', 'desplazamiento/curvo', 'tronco', 'no_manual'),
('c|j|p-1b-d|c-t-n', 'cerrados/juntos/pulgar', '1b', 'desplazamiento/curvo', 'tronco', 'no_manual'),
('f|s|p-1c-a|r-t-_', 'flexionados/separados/pulgar', '1c', 'ambos/recto', 'tronco', ''),
('c|j|_-1b-d|c-t-_', 'cerrados/juntos/_', '1b', 'desplazamiento/curvo', 'tronco', ''),
('e|j|_-1c-d|r-c-_', 'extendidos/juntos/_', '1c', 'desplazamiento/recto', 'cabeza', ''),
('f|s|p-1c-a|o-t-n', 'flexionados/separados/pulgar', '1c', 'ambos/ondulado', 'tronco', 'no_manual'),
('e|j|_-1c-d|r-c-n', 'extendidos/juntos/_', '1c', 'desplazamiento/recto', 'cabeza', 'no_manual'),
('e|j|p-1d-d|r-c-_', 'extendidos/juntos/pulgar', '1d', 'desplazamiento/recto', 'cabeza', ''),
('e|s|p-1c-d|c-t-_', 'extendidos/separados/pulgar', '1c', 'desplazamiento/curvo', 'tronco', ''),
('f|j|_-1b-d|r-t-_', 'flexionados/juntos/_', '1b', 'desplazamiento/recto', 'tronco', ''),
('e|j|_-1a-f|r-t-n', 'extendidos/juntos/_', '1a', 'fijo/recto', 'tronco', 'no_manual'),
('e|j|p-1c-d|c-t-_', 'extendidos/juntos/pulgar', '1c', 'desplazamiento/curvo', 'tronco', ''),
('e|j|_-1d-a|c-t-_', 'extendidos/juntos/_', '1d', 'ambos/curvo', 'tronco', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signo_definicion`
--

CREATE TABLE `signo_definicion` (
  `codigo` varchar(50) NOT NULL,
  `nombreSigno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `signo_definicion`
--

INSERT INTO `signo_definicion` (`codigo`, `nombreSigno`) VALUES
('c|j|_-1b-d|c-t-n', 'abrigo'),
('c|j|p-1b-d|c-t-n', 'chaqueta'),
('f|s|p-1c-a|r-t-_', 'plato_duhca'),
('c|j|_-1b-d|c-t-_', 'economia'),
('f|s|p-1c-d|r-t-_', 'chubasquero'),
('f|s|p-1c-a|o-t-n', 'agotado'),
('e|j|_-1c-d|r-c-_', 'dulce'),
('e|j|_-1c-d|r-c-n', 'dolor'),
('e|j|p-1d-d|r-c-_', 'cariño'),
('e|s|p-1c-d|c-t-_', 'claro'),
('f|j|_-1b-d|r-t-_', 'elastico'),
('e|j|_-1a-f|r-t-n', 'tentacion'),
('e|j|p-1c-d|c-t-_', 'tarta'),
('e|j|_-1d-a|c-t-_', 'completo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `definiciones`
--
ALTER TABLE `definiciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `definiciones`
--
ALTER TABLE `definiciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
