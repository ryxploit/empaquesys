-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2021 a las 00:44:22
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

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
  `destinatario` varchar(100) NOT NULL,
  `numero_envio` varchar(100) NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_embarques`
--

INSERT INTO `t_embarques` (`id_embarques`, `fecha_embarque`, `trailer`, `caja`, `hora_embarque`, `chofer`, `destinatario`, `numero_envio`, `observaciones`) VALUES
(1, '2021-09-14', 'fghdfhfgh', 'hfghfgh', '01:06', 'fghfgh', 'gbhnuyn', '23467', 'gtrgrthr');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_lotes`
--

INSERT INTO `t_lotes` (`id_lotes`, `fecha`, `corredor`, `numero_cajas`, `productor`, `registro`, `folio`, `nombre_huerta`, `hidrotermico`, `ubicacion`, `lote`, `promedio`, `total`, `muestra`, `numero_cuadrilla`) VALUES
(1, '2021-08-05', 'EDGAR LAMBRANOV', '120', 'LUIS LOPEZ ARROLLO', 'HUE345665657556554', 'VL5445HY4554', 'NO SE', 'no', 'CHAMETLA', '67', '9', '24', 'NO SE', '34567'),
(4, '2021-09-07', 'JUAN LOPEZ', '120', 'ARREOLA LOPEZ ', 'HUE345665657556554', 'R05208149-1', 'NO SE', 'SI', 'CHAMETLA', '69', '9', '13', 'NO SE', '34567');

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
  `lote` varchar(100) NOT NULL,
  `codigo_rastreo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_pallet`
--

INSERT INTO `t_pallet` (`id_pallet`, `fecha`, `variedad`, `marca`, `pallet`, `tamaño`, `hidrotermico`, `total`, `folio`, `rastreo`, `lote`, `codigo_rastreo`) VALUES
(1, '2021-08-07', 'KENT', 'DELIFRUIT', '34', '43', 'no', '23', 'VL5445HY4554', '67', '', '1'),
(2, '2021-08-07', 'KENT', 'DELIFRUIT', '34', '43', 'no', '23', 'VL5445HY4554', '67', '', '1'),
(3, '2021-08-07', 'KENT', 'DELIFRUIT', '34', '43', 'no', '23', 'VL5445HY4554', '67', '', '1'),
(4, '2021-08-05', 'KENT', 'DELIFRUIT', '34', '43', 'no', '23', 'VL5445HY4554', '67', '', '1'),
(5, '2021-08-05', 'KENT', 'DELIFRUIT', '34', '43', 'no', '23', 'VL5445HY4554', '67', '', '1'),
(6, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(7, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(8, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(9, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(10, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(11, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(12, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(13, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(14, '', '', '', '', '', 'si', '', '', '67', '', '1'),
(15, '', 'dcdf', '', '', '', 'si', '', '', '67', '', '1'),
(16, '', 'dcdf', '', '', '', 'si', '', '', '67', '', '1'),
(17, '', '', '', 'pu', '', 'si', '', '', '67', '', '1'),
(21, '2021-08-10', 'KENT', 'DELIFRUIT', '134', '43', 'no', '23', 'VL5445HY4554', '67456', '67', 'SEA04'),
(24, '2021-08-04', 'KENT', 'DELIFRUIT', '34', '9', 'si', '23', 'R05208149-1', '2345', '69', 'SEA04');

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
  `embarque_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_pallet_embarque`
--

INSERT INTO `t_pallet_embarque` (`id_embarques_pallet`, `pedido`, `numero_pallet`, `peso_pallet`, `marca_caja`, `cantidad`, `calibre`, `embarque_id`) VALUES
(1, 'SEA04', '345', '14KG', 'KOALA', '13', '6', '1'),
(2, 'SEA04', '345', '14KG', 'KOALA', '14', '9', '1'),
(3, 'SEA04', '347', '14KG', 'KOALA', '13', '6', '1'),
(4, 'SEA04', '345', '14KG', 'KOALA', '13', '6', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_pedidos`
--

INSERT INTO `t_pedidos` (`id_pedidos`, `codigo_embarque`, `sello_cliente`, `aeropuerto_destino`, `ejecutivo`, `variedad`, `marca`, `etiqueta`, `tipo_caja`, `capuchon`, `fondo`, `termografo`, `malla`) VALUES
(5, 'SEA04', 'SEDIFEL', 'PARIS', 'SAMANTA', 'KENT', 'DELIFRUIT', 'DELIFRUIT', 'NIPPON', 'NEGRO', 'CONBINADO', 'SI', 'SI');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_rastreos`
--

INSERT INTO `t_rastreos` (`id_rastreo`, `fecha`, `codigo`, `sello`, `capuchon`, `fondo`, `malla`, `termografo`, `destino`) VALUES
(4, '2021-09-08', 'SEA04', 'SEAA', 'BLANCO', 'BLANCO', 'SI', 'NO', 'CHAMETLAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `usuario`, `password`, `type`) VALUES
(7, 'carlos', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');

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
  MODIFY `id_embarques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `t_lotes`
--
ALTER TABLE `t_lotes`
  MODIFY `id_lotes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_pallet`
--
ALTER TABLE `t_pallet`
  MODIFY `id_pallet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `t_pallet_embarque`
--
ALTER TABLE `t_pallet_embarque`
  MODIFY `id_embarques_pallet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_pedidos`
--
ALTER TABLE `t_pedidos`
  MODIFY `id_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `t_rastreos`
--
ALTER TABLE `t_rastreos`
  MODIFY `id_rastreo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
