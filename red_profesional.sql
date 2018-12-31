-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2018 a las 09:21:27
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red_profesional`
--
CREATE DATABASE IF NOT EXISTS `red_profesional` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `red_profesional`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_conocimiento`
--

CREATE TABLE `tab_conocimiento` (
  `id_conocimiento` int(10) NOT NULL,
  `conocimiento` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nivel_conocimiento` int(10) DEFAULT NULL,
  `id_hoja_vida` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_educacion`
--

CREATE TABLE `tab_educacion` (
  `id_educacion` int(10) NOT NULL,
  `titulo_educacion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `institucion_educacion` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio_educacion` int(4) DEFAULT NULL,
  `nivel_educacion` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tiempo_educacion` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_hoja_vida` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_formacion`
--

CREATE TABLE `tab_formacion` (
  `id_formacion` int(10) NOT NULL,
  `nombre_formacion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lugar_formacion` varchar(110) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `anio_formacion` date DEFAULT NULL,
  `tiempo_formacion` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_formacion` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_hoja_vida` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_funciones`
--

CREATE TABLE `tab_funciones` (
  `id_funciones` int(10) NOT NULL,
  `funciones` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_laboral` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_habilidades`
--

CREATE TABLE `tab_habilidades` (
  `id_habilidades` int(10) NOT NULL,
  `habilidades` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_hoja_vida` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_hoja_vida`
--

CREATE TABLE `tab_hoja_vida` (
  `id_hoja_vida` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_laboral`
--

CREATE TABLE `tab_laboral` (
  `id_laboral` int(10) NOT NULL,
  `empresa_laboral` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cargo_laboral` varchar(125) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tiempo_laboral` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_laboral` int(10) DEFAULT NULL,
  `id_hoja_vida` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_login`
--

CREATE TABLE `tab_login` (
  `id_login` int(10) NOT NULL,
  `usuario_login` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenia_login` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `rol_login` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tab_login`
--

INSERT INTO `tab_login` (`id_login`, `usuario_login`, `contrasenia_login`, `rol_login`, `id_usuario`) VALUES
(1, 'root', 'root', 'root', 1),
(9, 'kikex', '$2y$10$P5KcoOag5n/pT85KmrmJC.zH.KaE2GN6Q9mogNTYUbDrWK6XSP4AC', 'Administrativo', 9),
(10, 'rkl', '$2y$10$sYPnC957A8hfBxIte.q/e.g14BVysARszRfC8fNDXHfPoDab3UaHS', 'Participante', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_notificacion`
--

CREATE TABLE `tab_notificacion` (
  `id_notificacion` int(10) NOT NULL,
  `estado_notificacion` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_oferta` int(10) NOT NULL,
  `reaccion_notificacion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_leido` date DEFAULT NULL,
  `id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_oferta`
--

CREATE TABLE `tab_oferta` (
  `id_oferta` int(10) NOT NULL,
  `descripcion_oferta` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa_oferta` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_oferta` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `representante_participante` varchar(145) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono_representante_participante` int(15) DEFAULT NULL,
  `direccion_oferta` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `hora_oferta` time DEFAULT NULL,
  `fecha_creacion_oferta` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_referencia`
--

CREATE TABLE `tab_referencia` (
  `id_referencia` int(10) NOT NULL,
  `empresa_referencia` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cargo_referencia` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre_referencia` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido_referencia` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo_referencia` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono_referencia` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_referencia` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_hoja_vida` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_requerimiento`
--

CREATE TABLE `tab_requerimiento` (
  `id_requerimiento` int(10) NOT NULL,
  `requerimiento` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_oferta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_usuario`
--

CREATE TABLE `tab_usuario` (
  `id_usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido_usuario` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `genero_usuario` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `dui_usuario` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nit_usuario` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_usuario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `carnet_menor_usuario` int(10) DEFAULT NULL,
  `correo_usuario` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono1_usuario` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono2_usuario` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion_usuario` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cargo_usuario` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `especialidad_usuario` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `grupo_usuario` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nivel_usuario` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_sangre_usuario` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado_usuario` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento_usuario` date DEFAULT NULL,
  `fecha_inicio_pasantia` date DEFAULT NULL,
  `fecha_fin_pasantia` date DEFAULT NULL,
  `id_oferta` int(10) DEFAULT NULL,
  `imagen_perfil` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tab_usuario`
--

INSERT INTO `tab_usuario` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `genero_usuario`, `dui_usuario`, `nit_usuario`, `licencia_usuario`, `carnet_menor_usuario`, `correo_usuario`, `telefono1_usuario`, `telefono2_usuario`, `direccion_usuario`, `cargo_usuario`, `especialidad_usuario`, `grupo_usuario`, `nivel_usuario`, `tipo_sangre_usuario`, `estado_usuario`, `fecha_nacimiento_usuario`, `fecha_inicio_pasantia`, `fecha_fin_pasantia`, `id_oferta`, `imagen_perfil`) VALUES
(1, 'root', 'administrador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Salvador Enrique', 'Quezada Campos', NULL, NULL, NULL, NULL, NULL, 'enrique.qzada@gmail.com', NULL, NULL, NULL, 'Programador', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Ana Raquel', 'Hernandez Moran', NULL, NULL, NULL, NULL, NULL, 'enrique.qzada@gmail.com', NULL, NULL, NULL, NULL, 'PHP', '1', '3', NULL, 'activo', NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_conocimiento`
--
ALTER TABLE `tab_conocimiento`
  ADD PRIMARY KEY (`id_conocimiento`),
  ADD KEY `FKtab_conoci988913` (`id_hoja_vida`);

--
-- Indices de la tabla `tab_educacion`
--
ALTER TABLE `tab_educacion`
  ADD PRIMARY KEY (`id_educacion`),
  ADD KEY `FKtab_educac610208` (`id_hoja_vida`);

--
-- Indices de la tabla `tab_formacion`
--
ALTER TABLE `tab_formacion`
  ADD PRIMARY KEY (`id_formacion`),
  ADD KEY `FKtab_formac729694` (`id_hoja_vida`);

--
-- Indices de la tabla `tab_funciones`
--
ALTER TABLE `tab_funciones`
  ADD PRIMARY KEY (`id_funciones`),
  ADD KEY `FKtab_funcio500712` (`id_laboral`);

--
-- Indices de la tabla `tab_habilidades`
--
ALTER TABLE `tab_habilidades`
  ADD PRIMARY KEY (`id_habilidades`),
  ADD KEY `FKtab_habili879116` (`id_hoja_vida`);

--
-- Indices de la tabla `tab_hoja_vida`
--
ALTER TABLE `tab_hoja_vida`
  ADD PRIMARY KEY (`id_hoja_vida`),
  ADD KEY `FKtab_hoja_v453682` (`id_usuario`);

--
-- Indices de la tabla `tab_laboral`
--
ALTER TABLE `tab_laboral`
  ADD PRIMARY KEY (`id_laboral`),
  ADD KEY `FKtab_labora579883` (`id_hoja_vida`);

--
-- Indices de la tabla `tab_login`
--
ALTER TABLE `tab_login`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `usuario_login` (`usuario_login`),
  ADD KEY `FKtab_login146987` (`id_usuario`);

--
-- Indices de la tabla `tab_notificacion`
--
ALTER TABLE `tab_notificacion`
  ADD PRIMARY KEY (`id_notificacion`),
  ADD KEY `id_oferta` (`id_oferta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tab_oferta`
--
ALTER TABLE `tab_oferta`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `tab_referencia`
--
ALTER TABLE `tab_referencia`
  ADD PRIMARY KEY (`id_referencia`),
  ADD KEY `FKtab_refere953783` (`id_hoja_vida`);

--
-- Indices de la tabla `tab_requerimiento`
--
ALTER TABLE `tab_requerimiento`
  ADD PRIMARY KEY (`id_requerimiento`),
  ADD KEY `FKtab_requer487243` (`id_oferta`);

--
-- Indices de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FKtab_usuari416654` (`id_oferta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_conocimiento`
--
ALTER TABLE `tab_conocimiento`
  MODIFY `id_conocimiento` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_educacion`
--
ALTER TABLE `tab_educacion`
  MODIFY `id_educacion` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_formacion`
--
ALTER TABLE `tab_formacion`
  MODIFY `id_formacion` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_funciones`
--
ALTER TABLE `tab_funciones`
  MODIFY `id_funciones` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_habilidades`
--
ALTER TABLE `tab_habilidades`
  MODIFY `id_habilidades` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_hoja_vida`
--
ALTER TABLE `tab_hoja_vida`
  MODIFY `id_hoja_vida` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_laboral`
--
ALTER TABLE `tab_laboral`
  MODIFY `id_laboral` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_login`
--
ALTER TABLE `tab_login`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tab_notificacion`
--
ALTER TABLE `tab_notificacion`
  MODIFY `id_notificacion` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_oferta`
--
ALTER TABLE `tab_oferta`
  MODIFY `id_oferta` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_referencia`
--
ALTER TABLE `tab_referencia`
  MODIFY `id_referencia` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_requerimiento`
--
ALTER TABLE `tab_requerimiento`
  MODIFY `id_requerimiento` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tab_conocimiento`
--
ALTER TABLE `tab_conocimiento`
  ADD CONSTRAINT `FKtab_conoci988913` FOREIGN KEY (`id_hoja_vida`) REFERENCES `tab_hoja_vida` (`id_hoja_vida`);

--
-- Filtros para la tabla `tab_educacion`
--
ALTER TABLE `tab_educacion`
  ADD CONSTRAINT `FKtab_educac610208` FOREIGN KEY (`id_hoja_vida`) REFERENCES `tab_hoja_vida` (`id_hoja_vida`);

--
-- Filtros para la tabla `tab_formacion`
--
ALTER TABLE `tab_formacion`
  ADD CONSTRAINT `FKtab_formac729694` FOREIGN KEY (`id_hoja_vida`) REFERENCES `tab_hoja_vida` (`id_hoja_vida`);

--
-- Filtros para la tabla `tab_funciones`
--
ALTER TABLE `tab_funciones`
  ADD CONSTRAINT `FKtab_funcio500712` FOREIGN KEY (`id_laboral`) REFERENCES `tab_laboral` (`id_laboral`);

--
-- Filtros para la tabla `tab_habilidades`
--
ALTER TABLE `tab_habilidades`
  ADD CONSTRAINT `FKtab_habili879116` FOREIGN KEY (`id_hoja_vida`) REFERENCES `tab_hoja_vida` (`id_hoja_vida`);

--
-- Filtros para la tabla `tab_hoja_vida`
--
ALTER TABLE `tab_hoja_vida`
  ADD CONSTRAINT `FKtab_hoja_v453682` FOREIGN KEY (`id_usuario`) REFERENCES `tab_usuario` (`id_usuario`);

--
-- Filtros para la tabla `tab_laboral`
--
ALTER TABLE `tab_laboral`
  ADD CONSTRAINT `FKtab_labora579883` FOREIGN KEY (`id_hoja_vida`) REFERENCES `tab_hoja_vida` (`id_hoja_vida`);

--
-- Filtros para la tabla `tab_login`
--
ALTER TABLE `tab_login`
  ADD CONSTRAINT `FKtab_login146987` FOREIGN KEY (`id_usuario`) REFERENCES `tab_usuario` (`id_usuario`);

--
-- Filtros para la tabla `tab_notificacion`
--
ALTER TABLE `tab_notificacion`
  ADD CONSTRAINT `tab_notificacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tab_usuario` (`id_usuario`),
  ADD CONSTRAINT `tab_notificacion_ibfk_2` FOREIGN KEY (`id_oferta`) REFERENCES `tab_oferta` (`id_oferta`);

--
-- Filtros para la tabla `tab_referencia`
--
ALTER TABLE `tab_referencia`
  ADD CONSTRAINT `FKtab_refere953783` FOREIGN KEY (`id_hoja_vida`) REFERENCES `tab_hoja_vida` (`id_hoja_vida`);

--
-- Filtros para la tabla `tab_requerimiento`
--
ALTER TABLE `tab_requerimiento`
  ADD CONSTRAINT `FKtab_requer487243` FOREIGN KEY (`id_oferta`) REFERENCES `tab_oferta` (`id_oferta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
