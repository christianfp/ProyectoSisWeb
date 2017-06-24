-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.35 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sisWebdb
CREATE DATABASE IF NOT EXISTS `sisWebdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sisWebdb`;

-- Dumping structure for table sisWebdb.cursos
CREATE TABLE IF NOT EXISTS `cursos` (
  `curso_id` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(7) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `resumen` varchar(500) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `docente` varchar(50) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `imagecontent` longblob NOT NULL,
  PRIMARY KEY (`curso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table sisWebdb.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `grado_academico` varchar(50) NOT NULL,
  `estado_laboral` varchar(50) NOT NULL,
  `formacion_academica` varchar(350) NOT NULL,
  `formacion_profesional` varchar(350) NOT NULL,
  `historial_trabajo` varchar(350) NOT NULL,
  `nombre_foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table sisWebdb.historicos
CREATE TABLE IF NOT EXISTS `historicos` (
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mensaje` varchar(50) NOT NULL,
  PRIMARY KEY (`fecha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table sisWebdb.materia
CREATE TABLE IF NOT EXISTS `materia` (
  `codigo` int(11) NOT NULL,
  `sigla` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

-- Data exporting was unselected.
-- Dumping structure for table sisWebdb.materiasDictadas
CREATE TABLE IF NOT EXISTS `materiasDictadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table sisWebdb.noticia
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `content` varchar(10000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table sisWebdb.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `uuid` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2016 a las 07:00:47
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_php`
--
CREATE DATABASE IF NOT EXISTS `mvc_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `mvc_php`;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8_spanish_ci NOT NULL,
  `autor` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Truncar tablas antes de insertar `noticia`
--

TRUNCATE TABLE `noticia`;
--
-- Volcado de datos para la tabla `noticia`
--


-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.18-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para plantel_docente
CREATE DATABASE IF NOT EXISTS `plantel_docente` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `plantel_docente`;

-- Volcando estructura para tabla plantel_docente.docente
CREATE TABLE IF NOT EXISTS `docente` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `grado_academico` varchar(50) NOT NULL,
  `estado_laboral` varchar(50) NOT NULL,
  `formacion_academica` varchar(600) NOT NULL,
  `formacion_profesional` varchar(600) NOT NULL,
  `historial_trabajo` varchar(600) NOT NULL,
  `nombre_foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla plantel_docente.materia
CREATE TABLE IF NOT EXISTS `materia` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `sigla` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='	';

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla plantel_docente.materiasdictadas
CREATE TABLE IF NOT EXISTS `materiasdictadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
