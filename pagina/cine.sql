-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2023 a las 10:46:58
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
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'ALIEN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam unde in nulla est saepe voluptate non incidunt. Quis eos architecto modi illum repellat nulla nihil quia corrupti officiis unde.', 'img/f2.jpg'),
(2, 'EL SILENCIO DE LOS CORDEROS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam unde in nulla est saepe voluptate non incidunt. Quis eos architecto modi illum repellat nulla nihil quia corrupti officiis unde.', 'img/f3.jpg'),
(3, 'GUARDIANES DE LA GALAXIA', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam unde in nulla est saepe voluptate non incidunt. Quis eos architecto modi illum repellat nulla nihil quia corrupti officiis unde.', 'img/f4.jpg'),
(4, 'JURASSIC PARK', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam unde in nulla est saepe voluptate non incidunt. Quis eos architecto modi illum repellat nulla nihil quia corrupti officiis unde.', 'img/f5.jpg'),
(5, 'PAUL', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam unde in nulla est saepe voluptate non incidunt. Quis eos architecto modi illum repellat nulla nihil quia corrupti officiis unde.', 'img/f6.jpg'),
(6, 'SCARFACE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam unde in nulla est saepe voluptate non incidunt. Quis eos architecto modi illum repellat nulla nihil quia corrupti officiis unde.', 'img/f1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
