-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2019 a las 05:50:45
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_daw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_preguntas`
--

CREATE TABLE `datos_preguntas` (
  `Pregunta` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Respuesta1` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Respuesta2` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Respuesta3` varchar(5000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Respuesta4` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_alumnos`
--

CREATE TABLE `login_alumnos` (
  `CARNE` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CONTRASEÑA` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_profesores`
--

CREATE TABLE `login_profesores` (
  `CARNE` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CONTRASEÑA` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
