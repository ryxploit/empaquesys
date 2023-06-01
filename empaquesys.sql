-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 20:25:40
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
-- Base de datos: `empaquesys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_embarques`
--

CREATE TABLE `t_embarques` (
  `id_embarques` int(11) NOT NULL,
  `fecha_embarque` varchar(100) NOT NULL,
  `trailer` varchar(100) NOT NULL,
  `caja` varchar(100) NOT NULL,
  `hora_embarque` varchar(100) NOT NULL,
  `chofer` varchar(100) NOT NULL,
  `termografo` varchar(11) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  `numero_envio` varchar(100) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `status_embarque` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_embarques`
--

INSERT INTO `t_embarques` (`id_embarques`, `fecha_embarque`, `trailer`, `caja`, `hora_embarque`, `chofer`, `termografo`, `destinatario`, `numero_envio`, `observaciones`, `status_embarque`) VALUES
(16, '2023-05-30', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_lotes`
--

CREATE TABLE `t_lotes` (
  `id_lotes` int(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `corredor` varchar(100) NOT NULL,
  `numero_cajas` varchar(100) NOT NULL,
  `productor` varchar(100) NOT NULL,
  `registro` varchar(100) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `nombre_huerta` varchar(100) NOT NULL,
  `hidrotermico` varchar(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `lote` varchar(100) NOT NULL,
  `promedio` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `muestra` varchar(100) NOT NULL,
  `numero_cuadrilla` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_lotes`
--

INSERT INTO `t_lotes` (`id_lotes`, `fecha`, `corredor`, `numero_cajas`, `productor`, `registro`, `folio`, `nombre_huerta`, `hidrotermico`, `ubicacion`, `lote`, `promedio`, `total`, `muestra`, `numero_cuadrilla`) VALUES
(65, '2023-05-30', 'CARLOS', '100', 'JORGE', 'HUE266266', 'APD00118-1', 'LA CASA', 'NO', 'CAJON', '01', '16-14', '4523', '', ''),
(66, '2023-05-30', 'MELISSA', '105', 'MARIO', 'HUE6595', 'ESC17181-1', 'LA GRANJA', 'NO', 'PONCE', '02', '46-15', '586', '', ''),
(67, '2023-05-30', 'JORGE', '102', 'CARLOS', 'HUE566595', 'ROS12345-1', 'MONTEALTO', 'NO', 'MONTEALTO', '03', '25-566', '2231', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_pallet`
--

CREATE TABLE `t_pallet` (
  `id_pallet` int(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `variedad` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `pallet` varchar(100) NOT NULL,
  `tamaño` varchar(100) NOT NULL,
  `hidrotermico` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `rastreo` varchar(100) NOT NULL,
  `peso` varchar(50) NOT NULL,
  `lote` varchar(100) NOT NULL,
  `codigo_rastreo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_pallet`
--

INSERT INTO `t_pallet` (`id_pallet`, `fecha`, `variedad`, `marca`, `pallet`, `tamaño`, `hidrotermico`, `total`, `folio`, `rastreo`, `peso`, `lote`, `codigo_rastreo`) VALUES
(231, '2023-05-30', 'KENT', 'MEXCO', '1', '10', 'SI', '80', 'APD00118-1', '', '', '01', 'FOA02'),
(232, '2023-05-30', 'KENT', 'MEXCO', '2', '10', 'NO', '80', 'APD00118-1', '', '', '01', 'FOA02'),
(233, '2023-05-30', 'KENT', 'MEXCO', '3', '10', 'NO', '80', 'APD00118-1', '', '', '01', 'FOA02'),
(234, '2023-05-30', 'KENT', 'MEXCO', '4', '10', 'NO', '19', 'ESC17181-1', '', '', '02', 'FOA02'),
(235, '2023-05-30', 'KENT', 'MEXCO', '5', '10', 'NO', '80', 'ESC17181-1', '', '', '02', 'FOA02'),
(236, '2023-05-30', 'KENT', 'MEXCO', '4', '12', 'NO', '45', 'ESC17181-1', '', '', '02', 'FOA02'),
(237, '2023-05-30', 'KENT', 'MEXCO', '6', '10', 'NO', '80', 'ESC17181-1', '', '', '02', 'FOA02'),
(238, '2023-05-30', 'KENT', 'MEXCO', '4', '10', 'NO', '16', 'ROS12345-1', '', '', '03', 'FOA02'),
(239, '2023-05-30', 'KENT', 'MEXCO', '7', '10', 'NO', '80', 'ROS12345-1', '', '', '03', 'FOA02'),
(240, '2023-05-30', 'KENT', 'MEXCO', '8', '10', 'NO', '80', 'ROS12345-1', '', '', '03', 'FOA02'),
(241, '2023-05-30', 'KENT', 'MEXCO', '9', '12', 'NO', '80', 'ROS12345-1', '', '', '03', 'FOA02'),
(242, '2023-05-30', 'KENT', 'MEXCO', '10', '10', 'NO', '80', 'ROS12345-1', '', '', '03', 'FOA02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_pallet_embarque`
--

CREATE TABLE `t_pallet_embarque` (
  `id_embarques_pallet` int(11) NOT NULL,
  `pedido` varchar(100) NOT NULL,
  `numero_pallet` varchar(100) NOT NULL,
  `peso_pallet` varchar(50) NOT NULL,
  `marca_caja` varchar(100) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `calibre` varchar(50) NOT NULL,
  `hidrotermico` varchar(50) NOT NULL,
  `termografo_pallet` varchar(11) NOT NULL,
  `embarque_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_pallet_embarque`
--

INSERT INTO `t_pallet_embarque` (`id_embarques_pallet`, `pedido`, `numero_pallet`, `peso_pallet`, `marca_caja`, `cantidad`, `calibre`, `hidrotermico`, `termografo_pallet`, `embarque_id`) VALUES
(124, 'FOA02', '1', '', 'MEXCO', '80', '10', 'NO', '', '16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_pedidos`
--

CREATE TABLE `t_pedidos` (
  `id_pedidos` int(11) NOT NULL,
  `codigo_embarque` varchar(250) NOT NULL,
  `sello_cliente` varchar(250) NOT NULL,
  `aeropuerto_destino` varchar(250) NOT NULL,
  `ejecutivo` varchar(250) NOT NULL,
  `variedad` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `etiqueta` varchar(250) NOT NULL,
  `tipo_caja` varchar(250) NOT NULL,
  `capuchon` varchar(250) NOT NULL,
  `fondo` varchar(250) NOT NULL,
  `termografo` varchar(250) NOT NULL,
  `malla` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_pedidos`
--

INSERT INTO `t_pedidos` (`id_pedidos`, `codigo_embarque`, `sello_cliente`, `aeropuerto_destino`, `ejecutivo`, `variedad`, `marca`, `etiqueta`, `tipo_caja`, `capuchon`, `fondo`, `termografo`, `malla`) VALUES
(29, 'FOA02', '', '', '', 'KENT', 'MEXCO', 'MEXCO', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_rastreos`
--

CREATE TABLE `t_rastreos` (
  `id_rastreo` int(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `sello` varchar(100) NOT NULL,
  `capuchon` varchar(100) NOT NULL,
  `fondo` varchar(100) NOT NULL,
  `malla` varchar(100) NOT NULL,
  `termografo` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_rastreos`
--

INSERT INTO `t_rastreos` (`id_rastreo`, `fecha`, `codigo`, `sello`, `capuchon`, `fondo`, `malla`, `termografo`, `destino`) VALUES
(28, '2023-05-30', 'FOA02', '', 'NEGRO', 'NEGRO', 'NO', 'NO', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `usuario`, `password`, `type`) VALUES
(12, 'ADMINISTRADOR', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ADMINISTRADOR'),
(13, 'LOTES', 'c6af5de2f96eeb02a77760504e911fb9c5681a49', 'LOTES'),
(14, 'RASTREO', 'f6a863655729c0d7f26f2773704af3bb00298e24', 'RASTREO'),
(16, 'PAKINGLIST', '399c9bd3a21b5b0feec39424464ffee40b72f6b1', 'PAKING LIST'),
(17, 'EMBARQUES', 'dc2eec1b3cc6f6f666b7a3498b39301aff639422', 'EMBARQUES'),
(18, 'carlos', 'ab5e2bca84933118bbc9d48ffaccce3bac4eeb64', 'ADMINISTRADOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_embarques`
--
ALTER TABLE `t_embarques`
  ADD PRIMARY KEY (`id_embarques`);

--
-- Indices de la tabla `t_lotes`
--
ALTER TABLE `t_lotes`
  ADD PRIMARY KEY (`id_lotes`);

--
-- Indices de la tabla `t_pallet`
--
ALTER TABLE `t_pallet`
  ADD PRIMARY KEY (`id_pallet`);

--
-- Indices de la tabla `t_pallet_embarque`
--
ALTER TABLE `t_pallet_embarque`
  ADD PRIMARY KEY (`id_embarques_pallet`);

--
-- Indices de la tabla `t_pedidos`
--
ALTER TABLE `t_pedidos`
  ADD PRIMARY KEY (`id_pedidos`);

--
-- Indices de la tabla `t_rastreos`
--
ALTER TABLE `t_rastreos`
  ADD PRIMARY KEY (`id_rastreo`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_embarques`
--
ALTER TABLE `t_embarques`
  MODIFY `id_embarques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `t_lotes`
--
ALTER TABLE `t_lotes`
  MODIFY `id_lotes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `t_pallet`
--
ALTER TABLE `t_pallet`
  MODIFY `id_pallet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT de la tabla `t_pallet_embarque`
--
ALTER TABLE `t_pallet_embarque`
  MODIFY `id_embarques_pallet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `t_pedidos`
--
ALTER TABLE `t_pedidos`
  MODIFY `id_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `t_rastreos`
--
ALTER TABLE `t_rastreos`
  MODIFY `id_rastreo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
