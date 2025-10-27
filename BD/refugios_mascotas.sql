-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-10-2025 a las 17:42:08
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
-- Base de datos: `refugios_mascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE `adopcion` (
  `id_adopcion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `estatus` enum('pendiente','en revision','rechazado','aceptado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo_refugio`
--

CREATE TABLE `correo_refugio` (
  `id_correo_refugio` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fk_refugio` int(11) NOT NULL,
  `estatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo_usuario`
--

CREATE TABLE `correo_usuario` (
  `id_correo_usuario` int(11) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id_datos_personales` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(40) NOT NULL,
  `apellido_m` varchar(40) NOT NULL,
  `edad` char(2) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `nombre_calle` varchar(40) NOT NULL,
  `numero_exterior` varchar(7) DEFAULT NULL,
  `numero_interior` varchar(7) DEFAULT NULL,
  `cp` char(5) NOT NULL,
  `fk_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `id_especie` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fk_pais` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_adopcion`
--

CREATE TABLE `formulario_adopcion` (
  `id_formulario` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `fK_adopcion` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_feliz`
--

CREATE TABLE `historia_feliz` (
  `id_historia_feliz` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `foto` varchar(60) NOT NULL,
  `fk_mascota` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id_mascotas` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `fk_especie` int(11) NOT NULL,
  `fk_refugio` int(11) NOT NULL,
  `estatus` enum('disponible','adoptado','indisponible') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas_adopcion`
--

CREATE TABLE `mascotas_adopcion` (
  `id_mascotas_adopcion` int(11) NOT NULL,
  `fk_mascota` int(11) NOT NULL,
  `fk_adopcion` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fk_estado` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nombre` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refugio`
--

CREATE TABLE `refugio` (
  `id_refugio` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(60) NOT NULL,
  `estatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refugio_direcciones`
--

CREATE TABLE `refugio_direcciones` (
  `id_refugio_direcciones` int(11) NOT NULL,
  `fk_refugio` int(11) NOT NULL,
  `fk_direccion` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas_formulario`
--

CREATE TABLE `respuestas_formulario` (
  `id_respuestas_formulario` int(11) NOT NULL,
  `respuestas` text NOT NULL,
  `fk_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Admin'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_refugio`
--

CREATE TABLE `telefono_refugio` (
  `id_telefono_refugio` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fk_refugio` int(11) NOT NULL,
  `estatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono_usuario`
--

CREATE TABLE `telefono_usuario` (
  `id_telefono_usuario` int(11) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `fk_rol` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `password`, `foto`, `fk_rol`, `estatus`) VALUES
(1, 'usuario1test', '123', 'foto', 2, '1'),
(2, 'usuario2test', '1234', 'foto', 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_direcciones`
--

CREATE TABLE `usuarios_direcciones` (
  `id_usuarios_direcciones` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_direccion` int(11) NOT NULL,
  `estatus` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_refugio`
--

CREATE TABLE `usuario_refugio` (
  `id_usuario_refugio` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fK_refugio` int(11) NOT NULL,
  `estatus` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`id_adopcion`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `correo_refugio`
--
ALTER TABLE `correo_refugio`
  ADD PRIMARY KEY (`id_correo_refugio`),
  ADD KEY `fk_refugio` (`fk_refugio`);

--
-- Indices de la tabla `correo_usuario`
--
ALTER TABLE `correo_usuario`
  ADD PRIMARY KEY (`id_correo_usuario`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id_datos_personales`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `fk_municipio` (`fk_municipio`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `fk_pais` (`fk_pais`);

--
-- Indices de la tabla `formulario_adopcion`
--
ALTER TABLE `formulario_adopcion`
  ADD PRIMARY KEY (`id_formulario`),
  ADD KEY `fK_adopcion` (`fK_adopcion`);

--
-- Indices de la tabla `historia_feliz`
--
ALTER TABLE `historia_feliz`
  ADD PRIMARY KEY (`id_historia_feliz`),
  ADD KEY `fk_mascota` (`fk_mascota`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id_mascotas`),
  ADD KEY `fk_especie` (`fk_especie`),
  ADD KEY `fk_refugio` (`fk_refugio`);

--
-- Indices de la tabla `mascotas_adopcion`
--
ALTER TABLE `mascotas_adopcion`
  ADD PRIMARY KEY (`id_mascotas_adopcion`),
  ADD KEY `fk_mascota` (`fk_mascota`),
  ADD KEY `fk_adopcion` (`fk_adopcion`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `fk_estado` (`fk_estado`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `refugio`
--
ALTER TABLE `refugio`
  ADD PRIMARY KEY (`id_refugio`);

--
-- Indices de la tabla `refugio_direcciones`
--
ALTER TABLE `refugio_direcciones`
  ADD PRIMARY KEY (`id_refugio_direcciones`),
  ADD KEY `fk_refugio` (`fk_refugio`),
  ADD KEY `fk_direccion` (`fk_direccion`);

--
-- Indices de la tabla `respuestas_formulario`
--
ALTER TABLE `respuestas_formulario`
  ADD PRIMARY KEY (`id_respuestas_formulario`),
  ADD KEY `fk_pregunta` (`fk_pregunta`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `telefono_refugio`
--
ALTER TABLE `telefono_refugio`
  ADD PRIMARY KEY (`id_telefono_refugio`),
  ADD KEY `fk_refugio` (`fk_refugio`);

--
-- Indices de la tabla `telefono_usuario`
--
ALTER TABLE `telefono_usuario`
  ADD PRIMARY KEY (`id_telefono_usuario`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_rol` (`fk_rol`);

--
-- Indices de la tabla `usuarios_direcciones`
--
ALTER TABLE `usuarios_direcciones`
  ADD PRIMARY KEY (`id_usuarios_direcciones`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_direccion` (`fk_direccion`);

--
-- Indices de la tabla `usuario_refugio`
--
ALTER TABLE `usuario_refugio`
  ADD PRIMARY KEY (`id_usuario_refugio`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fK_refugio` (`fK_refugio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `id_adopcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `correo_refugio`
--
ALTER TABLE `correo_refugio`
  MODIFY `id_correo_refugio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `correo_usuario`
--
ALTER TABLE `correo_usuario`
  MODIFY `id_correo_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id_datos_personales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id_especie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formulario_adopcion`
--
ALTER TABLE `formulario_adopcion`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historia_feliz`
--
ALTER TABLE `historia_feliz`
  MODIFY `id_historia_feliz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_mascotas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mascotas_adopcion`
--
ALTER TABLE `mascotas_adopcion`
  MODIFY `id_mascotas_adopcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `refugio`
--
ALTER TABLE `refugio`
  MODIFY `id_refugio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `refugio_direcciones`
--
ALTER TABLE `refugio_direcciones`
  MODIFY `id_refugio_direcciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas_formulario`
--
ALTER TABLE `respuestas_formulario`
  MODIFY `id_respuestas_formulario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `telefono_refugio`
--
ALTER TABLE `telefono_refugio`
  MODIFY `id_telefono_refugio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefono_usuario`
--
ALTER TABLE `telefono_usuario`
  MODIFY `id_telefono_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_direcciones`
--
ALTER TABLE `usuarios_direcciones`
  MODIFY `id_usuarios_direcciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_refugio`
--
ALTER TABLE `usuario_refugio`
  MODIFY `id_usuario_refugio` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `correo_refugio`
--
ALTER TABLE `correo_refugio`
  ADD CONSTRAINT `correo_refugio_ibfk_1` FOREIGN KEY (`fk_refugio`) REFERENCES `refugio` (`id_refugio`);

--
-- Filtros para la tabla `correo_usuario`
--
ALTER TABLE `correo_usuario`
  ADD CONSTRAINT `correo_usuario_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD CONSTRAINT `datos_personales_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`fk_municipio`) REFERENCES `municipio` (`id_municipio`);

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`fk_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `formulario_adopcion`
--
ALTER TABLE `formulario_adopcion`
  ADD CONSTRAINT `formulario_adopcion_ibfk_1` FOREIGN KEY (`fK_adopcion`) REFERENCES `adopcion` (`id_adopcion`);

--
-- Filtros para la tabla `historia_feliz`
--
ALTER TABLE `historia_feliz`
  ADD CONSTRAINT `historia_feliz_ibfk_1` FOREIGN KEY (`fk_mascota`) REFERENCES `mascotas` (`id_mascotas`);

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_ibfk_1` FOREIGN KEY (`fk_especie`) REFERENCES `especie` (`id_especie`),
  ADD CONSTRAINT `mascotas_ibfk_2` FOREIGN KEY (`fk_refugio`) REFERENCES `refugio` (`id_refugio`);

--
-- Filtros para la tabla `mascotas_adopcion`
--
ALTER TABLE `mascotas_adopcion`
  ADD CONSTRAINT `mascotas_adopcion_ibfk_1` FOREIGN KEY (`fk_mascota`) REFERENCES `mascotas` (`id_mascotas`),
  ADD CONSTRAINT `mascotas_adopcion_ibfk_2` FOREIGN KEY (`fk_adopcion`) REFERENCES `adopcion` (`id_adopcion`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `refugio_direcciones`
--
ALTER TABLE `refugio_direcciones`
  ADD CONSTRAINT `refugio_direcciones_ibfk_1` FOREIGN KEY (`fk_refugio`) REFERENCES `refugio` (`id_refugio`),
  ADD CONSTRAINT `refugio_direcciones_ibfk_2` FOREIGN KEY (`fk_direccion`) REFERENCES `direccion` (`id_direccion`);

--
-- Filtros para la tabla `respuestas_formulario`
--
ALTER TABLE `respuestas_formulario`
  ADD CONSTRAINT `respuestas_formulario_ibfk_1` FOREIGN KEY (`fk_pregunta`) REFERENCES `formulario_adopcion` (`id_formulario`);

--
-- Filtros para la tabla `telefono_refugio`
--
ALTER TABLE `telefono_refugio`
  ADD CONSTRAINT `telefono_refugio_ibfk_1` FOREIGN KEY (`fk_refugio`) REFERENCES `refugio` (`id_refugio`);

--
-- Filtros para la tabla `telefono_usuario`
--
ALTER TABLE `telefono_usuario`
  ADD CONSTRAINT `telefono_usuario_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fk_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `usuarios_direcciones`
--
ALTER TABLE `usuarios_direcciones`
  ADD CONSTRAINT `usuarios_direcciones_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuarios_direcciones_ibfk_2` FOREIGN KEY (`fk_direccion`) REFERENCES `direccion` (`id_direccion`);

--
-- Filtros para la tabla `usuario_refugio`
--
ALTER TABLE `usuario_refugio`
  ADD CONSTRAINT `usuario_refugio_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_refugio_ibfk_2` FOREIGN KEY (`fK_refugio`) REFERENCES `refugio` (`id_refugio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
