-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para steticnews
CREATE DATABASE IF NOT EXISTS `steticnews` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `steticnews`;

-- Volcando estructura para tabla steticnews.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` text DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla steticnews.categoria: ~4 rows (aproximadamente)
INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
	(1, 'Salud'),
	(2, 'Deporte'),
	(3, 'Economía'),
	(4, 'clima');

-- Volcando estructura para tabla steticnews.publicacion
CREATE TABLE IF NOT EXISTS `publicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `contenido_publicacion` varchar(255) NOT NULL DEFAULT '',
  `etiquetas` text DEFAULT NULL,
  `id_categ` int(11) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `links` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_publicacion_categoria` (`id_categ`),
  KEY `FK_publicacion_region` (`id_region`),
  CONSTRAINT `FK_publicacion_categoria` FOREIGN KEY (`id_categ`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `FK_publicacion_region` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla steticnews.publicacion: ~4 rows (aproximadamente)
INSERT INTO `publicacion` (`id`, `creation_date`, `contenido_publicacion`, `etiquetas`, `id_categ`, `id_region`, `links`) VALUES
	(2, '2023-02-10 15:00:00', 'El juvenil delantero sumó pocos minutos en este 2023', '[{"etiqueta": "futbol"}, {"etiqueta": "boca"}]', 2, 1, '[{ "nombre": "ole", "link": "www.ole.com.ar/boca-juniors/carlos-cenci-langoni-presente-titular_0_xajVT9MzjD.html"}]'),
	(4, '2023-02-10 00:00:00', 'En la semana, el Banco Central tuvo que vender USD 286 millones en el mercado de cambios', '[{"etiqueta": "economia"}]', 3, 1, '[{ "nombre": "infobae", "link": "www.infobae.com/economia/2023/02/10/en-la-semana-el-banco-central-tuvo-que-vender-usd-286-millones-en-el-mercado-de-cambios/"}]'),
	(6, '2023-02-06 00:00:00', 'En medio de la ola de calor, 180 mil usuarios de Edesur se quedaron sin luz por "déficit de generación eléctrica"', '[{"etiqueta": "calor"},{"etiqueta": "temperatura"},{"etiqueta": "tecnologia"}]', 4, NULL, '[{ "nombre": "clarin", "link": "www.clarin.com/sociedad/medio-ola-calor-edesur-dejo-luz-180-mil-usuarios_0_w7qKAJbrtU.html"},\r\n{ "nombre": "infobae", "link": "www.infobae.com/sociedad/2022/01/17/tras-la-ola-de-calor-mas-de-20000-usuarios-siguen-sin-luz-en-amba/"}]'),
	(13, '2023-02-10 00:00:00', 'Nuevo programa que busca la innovación en el sistema de salud, impulsado por la Fundación Garrahan', '[{"etiqueta": "salud"},{"etiqueta": "tecnologia"}]', 1, 1, '[{ "nombre": "infobae", "link": "www.infobae.com/salud/2023/02/10/como-funciona-el-programa-que-busca-la-innovacion-en-el-sistema-de-salud-impulsado-por-la-fundacion-garrahan/"}]');

-- Volcando estructura para tabla steticnews.region
CREATE TABLE IF NOT EXISTS `region` (
  `id_region` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_region` text NOT NULL,
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla steticnews.region: ~2 rows (aproximadamente)
INSERT INTO `region` (`id_region`, `nombre_region`) VALUES
	(1, 'Argentina'),
	(2, 'Brazil');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
