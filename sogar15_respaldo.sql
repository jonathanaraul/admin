-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-09-2013 a las 14:35:10
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sogar15`
--
CREATE DATABASE IF NOT EXISTS `sogar15` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sogar15`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2A6A65D8D93D649` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `user`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE IF NOT EXISTS `bienes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_adqui` datetime DEFAULT NULL,
  `num_corr_inv` decimal(10,0) DEFAULT NULL,
  `serial` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `n_ord_compra` int(11) DEFAULT NULL,
  `f_ord_compra` datetime DEFAULT NULL,
  `np_ord_compra` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nfac_ord_compr` int(11) DEFAULT NULL,
  `ffac_ord_compr` datetime DEFAULT NULL,
  `em_ord_compr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imnmu_o_compr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fadq_o_compr` datetime DEFAULT NULL,
  `ncor_o_compr` int(11) DEFAULT NULL,
  `ci_n_o_compr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rif_n_o_comp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ubc_o_compr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_ord_pag` int(11) DEFAULT NULL,
  `fech_ord_pag` datetime DEFAULT NULL,
  `prad_ord_pag` int(11) DEFAULT NULL,
  `tbn_ord_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dis_ord_com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `frm_ord_pag` datetime DEFAULT NULL,
  `drm_ord_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ofc_dr_o_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `n_dr_o_pag` int(11) DEFAULT NULL,
  `t_dr_o_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_dr_o_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_dr_o_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tr_dr_o_pag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fch_dr_o_pag` datetime DEFAULT NULL,
  `fch_ac_o_pag` datetime DEFAULT NULL,
  `mnt_ac_o_pag` int(11) DEFAULT NULL,
  `nombre_marc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mod_tip_anio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_mat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_rcta` int(11) DEFAULT NULL,
  `cod_falt` int(11) DEFAULT NULL,
  `cod_dirc` int(11) DEFAULT NULL,
  `cod_cord` int(11) DEFAULT NULL,
  `cod_rspn` int(11) DEFAULT NULL,
  `cod_seg` int(15) DEFAULT NULL,
  `cod_mvts` int(11) DEFAULT NULL,
  `cod_bien` int(11) DEFAULT NULL,
  `cod_muni` int(11) DEFAULT NULL,
  `cod_estd` int(11) DEFAULT NULL,
  `cod_tbien` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_resum` (`cod_rcta`),
  KEY `id_faltan` (`cod_falt`),
  KEY `id_direcc` (`cod_dirc`,`cod_cord`,`cod_rspn`,`cod_seg`,`cod_mvts`),
  KEY `id_coord` (`cod_cord`,`cod_rspn`,`cod_seg`),
  KEY `id_movm` (`cod_mvts`),
  KEY `id_resps` (`cod_rspn`,`cod_seg`),
  KEY `id_segur` (`cod_seg`),
  KEY `cod_bien` (`cod_bien`),
  KEY `cod_muni` (`cod_muni`),
  KEY `cod_estd` (`cod_estd`),
  KEY `cod_estd_2` (`cod_estd`),
  KEY `cod_tbien` (`cod_tbien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `bienes`
--

INSERT INTO `bienes` (`id`, `fecha_adqui`, `num_corr_inv`, `serial`, `placa`, `n_ord_compra`, `f_ord_compra`, `np_ord_compra`, `nfac_ord_compr`, `ffac_ord_compr`, `em_ord_compr`, `imnmu_o_compr`, `fadq_o_compr`, `ncor_o_compr`, `ci_n_o_compr`, `rif_n_o_comp`, `ubc_o_compr`, `num_ord_pag`, `fech_ord_pag`, `prad_ord_pag`, `tbn_ord_pag`, `dis_ord_com`, `frm_ord_pag`, `drm_ord_pag`, `ofc_dr_o_pag`, `n_dr_o_pag`, `t_dr_o_pag`, `f_dr_o_pag`, `p_dr_o_pag`, `tr_dr_o_pag`, `fch_dr_o_pag`, `fch_ac_o_pag`, `mnt_ac_o_pag`, `nombre_marc`, `mod_tip_anio`, `color`, `nombre_mat`, `cod_rcta`, `cod_falt`, `cod_dirc`, `cod_cord`, `cod_rspn`, `cod_seg`, `cod_mvts`, `cod_bien`, `cod_muni`, `cod_estd`, `cod_tbien`) VALUES
(3, '2008-01-01 00:00:00', '23', '5', 'cdf', 2323, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinacion`
--

CREATE TABLE IF NOT EXISTS `coordinacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coordinador` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_cord` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_cord` (`cod_cord`),
  KEY `cod_cord_2` (`cod_cord`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `coordinacion`
--

INSERT INTO `coordinacion` (`id`, `nombre`, `coordinador`, `cod_cord`) VALUES
(2, 'Coordinacion de beneficios', 'sebastian perez', 1),
(3, '$nombre_seguro', '$poliza_seguro', 234567),
(4, '$nombre_seguro', '$poliza_seguro', 234567),
(5, '1', '2', 234567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `director` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_dirc` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_dirc` (`cod_dirc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `nombre`, `director`, `cod_dirc`) VALUES
(1, '', '', 0),
(2, 'nombre_direccion', 'nombre_director', 2323),
(3, '11', '22', 12345),
(4, 'nombre_direccion', 'nombre_director', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_estd` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_estd` (`cod_estd`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`, `cod_estd`) VALUES
(1, 'bolivar', 1),
(2, 'monagas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltantes`
--

CREATE TABLE IF NOT EXISTS `faltantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subgrupo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor_uni` int(11) NOT NULL,
  `diferencia` int(11) NOT NULL,
  `obsrvc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cod_dirc` int(11) NOT NULL,
  `cod_cord` int(11) NOT NULL,
  `cod_estd` int(11) NOT NULL,
  `cod_muni` int(11) NOT NULL,
  `cod_falt` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_direcc` (`cod_dirc`),
  KEY `id_coord` (`cod_cord`),
  KEY `id_estad` (`cod_estd`),
  KEY `id_muni` (`cod_muni`),
  KEY `cod_falt` (`cod_falt`),
  KEY `cod_cord` (`cod_cord`),
  KEY `cod_muni` (`cod_muni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE IF NOT EXISTS `movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `periodo` datetime NOT NULL,
  `grupo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `subgrupo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `concepto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `cod_rspn` int(11) NOT NULL,
  `cod_cord` int(11) NOT NULL,
  `cod_dirc` int(11) NOT NULL,
  `cod_estd` int(11) NOT NULL,
  `cod_muni` int(11) NOT NULL,
  `cod_mvts` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_coord` (`cod_cord`),
  KEY `id_direcc` (`cod_dirc`),
  KEY `id_estad` (`cod_estd`),
  KEY `id_muni` (`cod_muni`),
  KEY `cod_mvts` (`cod_mvts`),
  KEY `cod_cord` (`cod_cord`),
  KEY `cod_estd` (`cod_estd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_muni` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_muni` (`cod_muni`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `nombre`, `cod_muni`) VALUES
(1, 'libertador001', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reponsable`
--

CREATE TABLE IF NOT EXISTS `reponsable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ci` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `cod_rspn` int(11) DEFAULT NULL,
  `descr_cargo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_rspn` (`cod_rspn`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `reponsable`
--

INSERT INTO `reponsable` (`id`, `nombre`, `ci`, `cod_rspn`, `descr_cargo`) VALUES
(1, 'nombre_responsable', 'cedula_responsable', NULL, ''),
(2, 'nombre_responsable', 'hjgf', 3232, 'descripcion_cargo_responsable'),
(3, '$nombre_responsable', '$cedula_responsable', 3232, '$descripcion_cargo_responsable'),
(4, 'yhby', 'yhy', 3232, 'jyy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resumen_cuentas`
--

CREATE TABLE IF NOT EXISTS `resumen_cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_estd` int(11) NOT NULL,
  `cod_muni` int(11) NOT NULL,
  `cod_rcta` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_estad` (`cod_estd`),
  KEY `id_muni` (`cod_muni`),
  KEY `cod_rcta` (`cod_rcta`),
  KEY `cod_estd` (`cod_estd`),
  KEY `cod_muni` (`cod_muni`),
  KEY `cod_estd_2` (`cod_estd`),
  KEY `cod_muni_2` (`cod_muni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguros`
--

CREATE TABLE IF NOT EXISTS `seguros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `poliza` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vig_desde` date NOT NULL,
  `vig_hasta` date NOT NULL,
  `cod_seg` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_seg` (`cod_seg`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  KEY `id_4` (`id`),
  KEY `cod_seg_2` (`cod_seg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `seguros`
--

INSERT INTO `seguros` (`id`, `nombre`, `poliza`, `vig_desde`, `vig_hasta`, `cod_seg`) VALUES
(25, '', '', '2013-08-30', '2013-08-30', 0),
(26, '', '', '2013-08-30', '2013-08-30', 0),
(27, 'nombreSeguro', 'polizaSeguro', '2013-09-01', '2013-09-01', 0),
(28, 'nombreSeguro', 'polizaSeguro', '2013-09-01', '1990-11-11', 0),
(29, '1', '2', '2013-09-01', '1990-11-11', 5),
(30, '', '', '2013-09-01', '1990-11-11', 0),
(31, 'pepel', 'dd', '2013-09-01', '1990-11-11', 0),
(32, '1', '2', '2013-09-02', '1990-11-11', 3),
(33, 'undefined', 'undefined', '2013-09-02', '1990-11-11', 0),
(34, 'undefined', 'undefined', '2013-09-02', '1990-11-11', 0),
(35, 'undefined', 'undefined', '2013-09-02', '1990-11-11', 0),
(36, '1', '2', '2013-09-02', '1990-11-11', 5),
(37, '1', '2', '2013-09-02', '1990-11-11', 5),
(38, '', '', '2013-09-02', '1990-11-11', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE IF NOT EXISTS `sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcioncorta` longtext COLLATE utf8_unicode_ci NOT NULL,
  `descripcionlarga` longtext COLLATE utf8_unicode_ci NOT NULL,
  `acercade` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`id`, `nombre`, `version`, `descripcioncorta`, `descripcionlarga`, `acercade`) VALUES
(1, 'SDIS', 'V.1.0', 'Software para la determinacion de indices de Saturacion', 'La elaboración de un softwareque permita vigilar constantemente el comportamiento de los índices de saturación del agua para conocer si existe la formación de  incrustaciones o corrosión en los equipos de tratamiento, puede simplificar las tareas en la determinación de estos problemas en cualquier sección del transporte de las aguas de producción, la cantidad de materiales incrustantes en el agua y si estos pueden ser disueltos o no por ella.', 'Desarrollado por la Ingeniera DANIEL JOSÉ MENESES LÁREZ & JUAN CARLOS LOPERA HURTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_bienes`
--

CREATE TABLE IF NOT EXISTS `tipos_bienes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_bien` varchar(40) NOT NULL,
  `cod_tbien` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cod_tbien` (`cod_tbien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipos_bienes`
--

INSERT INTO `tipos_bienes` (`id`, `tipo_bien`, `cod_tbien`) VALUES
(3, 'Mueble', 1),
(4, 'Inmueble', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `apellido`, `username`, `salt`, `password`, `email`, `sexo`, `is_active`, `path`, `descripcion`) VALUES
(1, 'jonathan', 'araul', 'Jonathan.araul', 'e1508464552a0178374563db109a450f', '8c09316865a0145de4f3a4a0cacd52e189582c07', 'Jonthan.araul@gmail.com', 0, 1, 'avatars/jonathan-araul.jpg', '&lt;p&gt;&lt;span class=\\&quot;text-success\\&quot;&gt;Web And Mobile Developer&lt;/span&gt;&lt;/p&gt; Con 5 \n\na&Atilde;&plusmn;os de experiencia. Creando mi propio camino, fundador de Zona de \n\nSistemas, ODU Monagas, Veninsoftware e Hispano Soluciones. &lt;a \n\nhref=\\&quot;https://twitter.com/jonathan_araul\\&quot; target=\\&quot;_blank\\&quot;&gt;Sigueme en 140 \n\ncaracteres&lt;/a&gt;.'),
(2, 'eee', 'eeee', 'pepe', '5fa8a34124390cfaed3f52ae4f6260df', '73d2b977c62448be0978d2e55d999ef61bf140bc', 'pepe@gmail.com', 0, 1, 'images/avatar-man.png', '&lt;h1&gt;Hola a todos&lt;/h1&gt;\n&lt;p&gt;Mi nombre es pepe&lt;/p&gt;\n&lt;a href=\\&quot;https://www.facebook.com/jonathan.araul/\\&quot;&gt;Visiten mi Facebook&lt;/a&gt;'),
(3, 'efrain', 'fvfv', 'efraxpc', '79fce664a8ece161d7c48bbbc7b18373', '1febe54d1fda3bba6e9d1c30e23f246e574633f5', 'efraxpc', 0, 1, 'images/avatar-man.png', 'vfr');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autores`
--
ALTER TABLE `autores`
  ADD CONSTRAINT `FK_2A6A65D8D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD CONSTRAINT `bienes_ibfk_10` FOREIGN KEY (`cod_dirc`) REFERENCES `direccion` (`cod_dirc`),
  ADD CONSTRAINT `bienes_ibfk_11` FOREIGN KEY (`cod_cord`) REFERENCES `coordinacion` (`cod_cord`),
  ADD CONSTRAINT `bienes_ibfk_12` FOREIGN KEY (`cod_rspn`) REFERENCES `reponsable` (`cod_rspn`),
  ADD CONSTRAINT `bienes_ibfk_14` FOREIGN KEY (`cod_mvts`) REFERENCES `movimientos` (`cod_mvts`),
  ADD CONSTRAINT `bienes_ibfk_15` FOREIGN KEY (`cod_muni`) REFERENCES `municipio` (`cod_muni`),
  ADD CONSTRAINT `bienes_ibfk_16` FOREIGN KEY (`cod_estd`) REFERENCES `estado` (`cod_estd`),
  ADD CONSTRAINT `bienes_ibfk_17` FOREIGN KEY (`cod_tbien`) REFERENCES `tipos_bienes` (`cod_tbien`),
  ADD CONSTRAINT `bienes_ibfk_8` FOREIGN KEY (`cod_rcta`) REFERENCES `resumen_cuentas` (`cod_rcta`),
  ADD CONSTRAINT `bienes_ibfk_9` FOREIGN KEY (`cod_falt`) REFERENCES `faltantes` (`cod_falt`);

--
-- Filtros para la tabla `faltantes`
--
ALTER TABLE `faltantes`
  ADD CONSTRAINT `faltantes_ibfk_2` FOREIGN KEY (`cod_muni`) REFERENCES `municipio` (`cod_muni`),
  ADD CONSTRAINT `faltantes_ibfk_3` FOREIGN KEY (`cod_estd`) REFERENCES `estado` (`cod_estd`),
  ADD CONSTRAINT `faltantes_ibfk_4` FOREIGN KEY (`cod_cord`) REFERENCES `coordinacion` (`cod_cord`),
  ADD CONSTRAINT `faltantes_ibfk_5` FOREIGN KEY (`cod_dirc`) REFERENCES `direccion` (`cod_dirc`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`cod_muni`) REFERENCES `municipio` (`cod_muni`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`cod_dirc`) REFERENCES `direccion` (`cod_dirc`),
  ADD CONSTRAINT `movimientos_ibfk_3` FOREIGN KEY (`cod_cord`) REFERENCES `coordinacion` (`cod_cord`),
  ADD CONSTRAINT `movimientos_ibfk_4` FOREIGN KEY (`cod_estd`) REFERENCES `estado` (`cod_estd`);

--
-- Filtros para la tabla `resumen_cuentas`
--
ALTER TABLE `resumen_cuentas`
  ADD CONSTRAINT `resumen_cuentas_ibfk_1` FOREIGN KEY (`cod_estd`) REFERENCES `estado` (`cod_estd`),
  ADD CONSTRAINT `resumen_cuentas_ibfk_2` FOREIGN KEY (`cod_muni`) REFERENCES `municipio` (`cod_muni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
