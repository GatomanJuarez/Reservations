-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 26-01-2018 a las 14:52:23
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `graduacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `clave` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clave` (`clave`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `admin`, `clave`) VALUES
(1, 'J.Daniel', 'I\'m Danman 07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `paterno` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `materno` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `clave` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `sillas` int(6) DEFAULT NULL,
  `pagado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clave` (`clave`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `paterno`, `materno`, `clave`, `sillas`, `pagado`) VALUES
(1, 'Jesús Daniel', 'Pérez', 'Garcí­a', 'Danman 07', 7, 1),
(2, 'Jesús Antonio', 'Juárez', 'Dévora', 'Filete 97', 5, 1),
(3, 'José Ángel', 'Pérez', 'García', 'P Ludo', 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sillas`
--

DROP TABLE IF EXISTS `sillas`;
CREATE TABLE IF NOT EXISTS `sillas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alumno_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno_id` (`alumno_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
