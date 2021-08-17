-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-08-2021 a las 20:49:53
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_web_prueba_cistec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias`
--

DROP TABLE IF EXISTS `tbl_noticias`;
CREATE TABLE IF NOT EXISTS `tbl_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titular` varchar(250) DEFAULT NULL,
  `Cuerpo` text,
  `Fecha` date DEFAULT NULL,
  `Slug` varchar(250) DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tbl_noticias_tbl_usuarios1_idx` (`usuarios_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_noticias`
--

INSERT INTO `tbl_noticias` (`id`, `Titular`, `Cuerpo`, `Fecha`, `Slug`, `usuarios_id`) VALUES
(1, 'Suiza gana la eurocopa', 'Así que Suiza será la rival de España. No era lo esperado, pero ya no hay duda de que el adversario es una roca. Se cargó a la campeona del mundo con un partidazo. Fue mejor en el primer tiempo y fue capaz de igualar después el 3-1 cuando ya parecía liquidada.', '2021-02-03', 'Suiza-gana-la-eurocopa', 6),
(2, 'El bitcoin cae un 25%', 'El Bitcoin, la criptomoneda más utilizada, ha acentuado su tendencia a la baja y ha perdido el nivel de los 49.000 dólares (40.600 euros), con lo que ya cae un 25 % desde el máximo histórico registrado hace nueve días.', '2020-06-17', 'El-bitcoin-cae-un-25%', 6),
(10, 'Johnny Depp, Premio Donostia', 'De hecho, Depp volverá al Festival tras haber presentado en 2020 Crock of Gold: Bebiendo con Shane MaCgowan. No obstante, en este caso, llegará a la alfombra roja sin ninguna película que presentar y en un momento muy delicado en su carrera. No en vano, se encuentra inmerso en varios procesos judiciales. Su exmujer, Amber Heard, y él se han acusado mútuamente de malos tratos y el actor también ha denunciado al periódico The Sun por difamación.', '2021-08-01', 'Johnny-Depp-Premio-Donostia', 1),
(11, 'Johnny Depp, Premio Donostia', 'Pero Tim Burton no es el único gran nombre del séptimo arte con el que Johnny Depp ha forjado su fama. A comienzos de los 90, además de con Burton, trabajó con Emir Kusturica en El sueño de Arizona (1992) y todavía se le recuerda su papel de joven y entrañable enamoradizo en ¿A quién ama Gilbert Grape? en el que hacía de protector hermano mayor de otro jovencísimo Leonardo DiCaprio. El intérprete repetiría casi una década después con Lasse Hallström, en ese caso en la comedia romántica Chocolat (2000).', '2020-11-13', 'Johnny-Depp-Premio-Donostia', 6),
(12, 'El camaleónico Johnny Depp, Premio Donostia', 'De hecho, Depp volverá al Festival tras haber presentado en 2020 Crock of Gold: Bebiendo con Shane MaCgowan. No obstante, en este caso, llegará a la alfombra roja sin ninguna película que presentar y en un momento muy delicado en su carrera. No en vano, se encuentra inmerso en varios procesos judiciales. Su exmujer, Amber Heard, y él se han acusado mútuamente de malos tratos y el actor también ha denunciado al periódico The Sun por difamación.', '2021-05-13', 'El-camaleónico-Johnny-Depp-Premio-Donostia', 1),
(13, 'El camaleónico Johnny Depp, Premio Donostia', 'De hecho, Depp volverá al Festival tras haber presentado en 2020 Crock of Gold: Bebiendo con Shane MaCgowan. No obstante, en este caso, llegará a la alfombra roja sin ninguna película que presentar y en un momento muy delicado en su carrera. No en vano, se encuentra inmerso en varios procesos judiciales. Su exmujer, Amber Heard, y él se han acusado mútuamente de malos tratos y el actor también ha denunciado al periódico The Sun por difamación.', '2021-04-27', 'El-camaleónico-Johnny-Depp-Premio-Donostia', 1),
(14, 'El camaleónico Johnny Depp, Premio Donostia', 'De hecho, Depp volverá al Festival tras haber presentado en 2020 Crock of Gold: Bebiendo con Shane MaCgowan. No obstante, en este caso, llegará a la alfombra roja sin ninguna película que presentar y en un momento muy delicado en su carrera. No en vano, se encuentra inmerso en varios procesos judiciales. Su exmujer, Amber Heard, y él se han acusado mútuamente de malos tratos y el actor también ha denunciado al periódico The Sun por difamación.', '2020-01-01', 'El-camaleónico-Johnny-Depp-Premio-Donostia', 1),
(15, 'El camaleónico Johnny Depp, Premio Donostia', 'De hecho, Depp volverá al Festival tras haber presentado en 2020 Crock of Gold: Bebiendo con Shane MaCgowan. No obstante, en este caso, llegará a la alfombra roja sin ninguna película que presentar y en un momento muy delicado en su carrera. No en vano, se encuentra inmerso en varios procesos judiciales. Su exmujer, Amber Heard, y él se han acusado mútuamente de malos tratos y el actor también ha denunciado al periódico The Sun por difamación.', '2021-01-04', 'El-camaleónico-Johnny-Depp-Premio-Donostia', 1),
(16, 'Realidad aumentada en publicidad: así funciona la tecnología que adapta lo que vemos en el deporte según donde se emita', 'Es el mismo partido, pero la publicidad que se ve en las vallas es diferente. Desde hace muchos años, los espectadores de las retransmisiones deportivas se han acostumbrado a que alrededor del partido haya publicidad a lo largo de la línea. Desde el fútbol hasta el baloncesto, pasando por otros deportes de equipo. Pero lo que parece totalmente integrado en el campo, en realidad varía según el canal, servicio o país donde se emita.', '2021-08-03', 'Realidad-aumentada-en-publicidad:-así-funciona-la-tecnología-que-adapta-lo-que-vemos-en-el-deporte-según-donde-se-emita', 1),
(17, 'Bertucci: ONG’s de EEUU están decididas a entregar ayuda humanitaria a Venezuela', 'Después de las elecciones parlamentarias del pasado 6 de diciembre, el partido de Javier Bertucci se convirtió en la segunda fuerza de oposición dentro de la Asamblea Nacional (AN) con una fracción de cuatro parlamentarios. “Sacamos más de 300 mil votos”, dijo el diputado, quien adquirió fama nacional por las ollas solidarias de sopas promovidas desde la organización “El Evangelio Cambia”, derivada de su iglesia evangélica donde es pastor.     ', '2021-08-17', 'Bertucci:-ONG’s-de-EEUU-están-decididas-a-entregar-ayuda-humanitaria-a-Venezuela', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias_categorias`
--

DROP TABLE IF EXISTS `tbl_noticias_categorias`;
CREATE TABLE IF NOT EXISTS `tbl_noticias_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_noticias_categorias`
--

INSERT INTO `tbl_noticias_categorias` (`id`, `Nombre`) VALUES
(1, 'Deportes'),
(2, 'Salud'),
(3, 'Cultura y ocio'),
(4, 'Tecnología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_noticias_tiene_categorias`
--

DROP TABLE IF EXISTS `tbl_noticias_tiene_categorias`;
CREATE TABLE IF NOT EXISTS `tbl_noticias_tiene_categorias` (
  `noticias_id` int(11) NOT NULL,
  `noticias_categorias_id` int(11) NOT NULL,
  KEY `fk_tbl_noticias_tiene_categorias_tbl_noticias_idx` (`noticias_id`),
  KEY `fk_tbl_noticias_tiene_categorias_tbl_noticias_categorias1_idx` (`noticias_categorias_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_noticias_tiene_categorias`
--

INSERT INTO `tbl_noticias_tiene_categorias` (`noticias_id`, `noticias_categorias_id`) VALUES
(10, 3),
(1, 1),
(11, 3),
(2, 3),
(17, 3),
(16, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(250) DEFAULT NULL,
  `Contrasena` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `Usuario`, `Contrasena`, `Email`) VALUES
(1, 'admin', '$2y$10$ZHpB0xgUue7gSbRwtMBIYOoDCVT3XFaYQ1YtgNYCMm2efbctEG28.', 'admin@outlook.live'),
(6, 'user123', '$2y$10$uF093g.U/jKTdAco5K8HVuVbU7VXRe9aTTOzEqzAdE41ZTh2Z7Dg2', 'user123@outlook.es');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_noticias`
--
ALTER TABLE `tbl_noticias`
  ADD CONSTRAINT `fk_tbl_noticias_tbl_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `tbl_usuarios` (`id`);

--
-- Filtros para la tabla `tbl_noticias_tiene_categorias`
--
ALTER TABLE `tbl_noticias_tiene_categorias`
  ADD CONSTRAINT `fk_tbl_noticias_tiene_categorias_tbl_noticias` FOREIGN KEY (`noticias_id`) REFERENCES `tbl_noticias` (`id`),
  ADD CONSTRAINT `fk_tbl_noticias_tiene_categorias_tbl_noticias_categorias1` FOREIGN KEY (`noticias_categorias_id`) REFERENCES `tbl_noticias_categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
