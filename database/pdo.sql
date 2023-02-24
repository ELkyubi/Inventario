-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 10:05:04
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pdo`
--
CREATE DATABASE IF NOT EXISTS `pdo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pdo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(7) NOT NULL,
  `categoria_nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria_ubicacion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`, `categoria_ubicacion`) VALUES
(4, 'Electrónica', 'Electro domésticos'),
(5, 'Muebleria', 'Material'),
(6, 'Limpieza', 'Detergentes'),
(13, 'Papeleria', 'escritorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `producto_id` int(20) NOT NULL,
  `producto_nombre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `producto_stock` int(25) NOT NULL,
  `producto_unidad` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `producto_foto` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria_id` int(7) NOT NULL,
  `producto_fech_ingreso` date NOT NULL,
  `producto_fech_egreso` date NOT NULL,
  `ua_id` int(11) NOT NULL,
  `producto_observaciones` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `producto_nombre`, `producto_stock`, `producto_unidad`, `producto_foto`, `categoria_id`, `producto_fech_ingreso`, `producto_fech_egreso`, `ua_id`, `producto_observaciones`) VALUES
(3, 'Silla', 11, 'Pieza', '', 5, '2022-11-23', '2022-12-29', 2, 'aaaa'),
(4, 'Pantalla', 5, 'pieza', '', 4, '2022-11-24', '0001-01-01', 2, ''),
(5, 'Detergente', 10, 'caja', '', 6, '2022-11-25', '2022-11-26', 1, 'AAAAAAAAAAAAAAAAAAAAAAA'),
(6, 'Escritorio', 5, 'Pieza', '', 5, '2022-11-24', '0001-01-01', 5, 'escritorio asdasdasd'),
(7, 'Sacapuntas', 5, 'pieza', '', 13, '2022-11-01', '2022-12-05', 1, 'asdasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_administrativa`
--

CREATE TABLE `unidad_administrativa` (
  `ua_id` int(11) NOT NULL,
  `ua_nombre` varchar(40) NOT NULL,
  `ua_ubicacion` varchar(40) NOT NULL,
  `ua_encargado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad_administrativa`
--

INSERT INTO `unidad_administrativa` (`ua_id`, `ua_nombre`, `ua_ubicacion`, `ua_encargado`) VALUES
(1, 'Direccion', 'Plantel 01', 'PersonaX'),
(2, 'Informática', 'Oficinas generales', 'LIc Marco'),
(4, 'Indeterminado', 'Indeterminado', 'Indeterminado'),
(5, 'Inventario', 'Dirección general', 'Pedro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(10) NOT NULL,
  `usuario_nombre` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_apellido` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario_clave` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_usuario`, `usuario_clave`) VALUES
(1, 'Administrador', 'Principal', 'Administrador', '$2y$10$EPY9LSLOFLDDBriuJICmFOqmZdnDXxLJG8YFbog5LcExp77DBQvgC'),
(4, 'Ricardo', 'Canche', 'ELKyubi', '$2y$10$fIB1vSZyfGsel7fXtPx7KeUdPxlXCTQ9aiYAIPKtNchH6TTY7EC4.'),
(5, 'Raul', 'Vera', 'RaulV', '$2y$10$SwSNn1Z5MSjms8nSXoZUpem.D2Lqbkp7JDGnEP9aWMklZMZxj5C4S'),
(6, 'Marco', 'Ruiz', 'Inge', '$2y$10$b62RvYQhrnYNxLv9iNhJ3eTk1ms2OFWDMhAkPmerNO.F5NTKUfyDm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `ua_id` (`ua_id`);

--
-- Indices de la tabla `unidad_administrativa`
--
ALTER TABLE `unidad_administrativa`
  ADD PRIMARY KEY (`ua_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `producto_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `unidad_administrativa`
--
ALTER TABLE `unidad_administrativa`
  MODIFY `ua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`ua_id`) REFERENCES `unidad_administrativa` (`ua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
