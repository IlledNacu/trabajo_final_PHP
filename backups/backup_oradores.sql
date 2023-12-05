-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 07:38:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador_cac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(1, 'Maria', 'Fernández', 'm_fernandez@hotmail.com', 'El amor en los tiempos del cól', '2023-11-13 06:36:37'),
(2, 'Claudia', 'Giménez', 'claugimenez2000@gmail.com', 'La literatura después del COVI', '2023-11-13 06:36:37'),
(3, 'Laura', 'Gómez', 'lau.g@gmail.com', 'Literatura argentina de terror', '2023-11-13 06:36:37'),
(4, 'Dante', 'Zucchini', 'd_zucchini@yahoo.com.ar', 'El arte de escribir crítica', '2023-11-13 06:36:37'),
(5, 'Martina', 'Benitez', 'mar.benitez@gmail.com', 'Investigar más allá de la ficc', '2023-11-13 06:36:37'),
(6, 'Alvida Luisa', 'Pérez', 'alperez@gmail.com', 'El Prometeo contemporáneo', '2023-11-13 06:36:37'),
(7, 'Francisco', 'Bergoglio', 'elpapapancho@hotmail.com', 'Las reescrituras de la biblia', '2023-11-13 06:36:37'),
(8, 'Lautaro Nehuén', 'Sabatini', 'lautinsaba@hotmail.com', 'El clan de los Buendía', '2023-11-13 06:36:37'),
(9, 'Miguel Ángel', 'Agüero', 'mangel@yahoo.com.ar', 'Ética en el ghostwriting', '2023-11-13 06:36:37'),
(10, 'Natalia Jazmín', 'Maldonado', 'nati_maldonado@hotmail.com', 'Literatura sociológica', '2023-11-13 06:36:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
