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
