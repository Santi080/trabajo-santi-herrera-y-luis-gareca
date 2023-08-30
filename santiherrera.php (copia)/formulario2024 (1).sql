-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2023 a las 21:14:02
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conexiondelogin`
--

CREATE TABLE `conexiondelogin` (
  `Id_login` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `confirmacontrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_nombre` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` varchar(100) NOT NULL,
  `consulta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_nombre`, `nombre`, `apellido`, `correo`, `consulta`) VALUES
(47, 'sdfgb', 'sfsdds', 'davis45464@gmailcom', 'me fui'),
(49, 'facufth', '', '', ''),
(50, '', '', '', ''),
(51, 'facufth', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(57, 'facu', 'abregu', 'pele4567@gmail.com', 'me fui'),
(58, 'facu', 'gareca', 'davis45464@gmailcom', 'me fui'),
(59, 'facu', 'gareca', 'davis45464@gmailcom', 'me fui'),
(60, 'sdfgb', 'sfsdds', 'davis45464@gmailcom', 'trabajo'),
(61, '', '', '', ''),
(62, 'facu', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, 'facu', '', '', ''),
(67, 'facu', '', '', ''),
(68, 'facu', '', '', ''),
(69, '', '', '', ''),
(70, 'facu', '', '', ''),
(71, '', '', '', ''),
(72, 'facu', '', '', ''),
(73, '', '', '', ''),
(74, 'facu', '', '', ''),
(75, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(76, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(77, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(78, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(79, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(80, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(81, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(82, 'facu', 'abregu', 'davis45464@gmailcom', 'me fui'),
(83, 'pepito', 'zombra', 'zombra67@gmail.com', 'a cuanto esta el dolar hoy?'),
(84, '', '', '', ''),
(85, 'pepito', 'zombra', 'zombra67@gmail.com', 'a cuanto esta el dolar hoy?'),
(86, 'pepito', 'zombra', 'zombra67@gmail.com', 'a cuanto esta el dolar hoy?'),
(87, 'pepito', 'zombra', 'zombra67@gmail.com', 'a cuanto esta el dolar hoy?'),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, '', '', '', ''),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(106, '', '', '', ''),
(107, '', '', '', ''),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, '', '', '', ''),
(115, '', '', '', ''),
(116, 'facu', 'gareca', 'pele4567@gmail.com', 'la playa'),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, 'facu', 'gareca', 'pele4567@gmail.com', 'la playa'),
(120, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `url_foto` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `url_foto`, `descripcion`) VALUES
(1, './img/mariojuego.jpg', 'mario bros'),
(2, './img/fornitejuego.jpg', 'FORNITE'),
(3, './img/forzahorizon5juego.jpg', 'FORZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conexiondelogin`
--
ALTER TABLE `conexiondelogin`
  ADD PRIMARY KEY (`Id_login`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_nombre`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conexiondelogin`
--
ALTER TABLE `conexiondelogin`
  MODIFY `Id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_nombre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
