-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 01:49:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
(9, '2022-06-22', '', '', '', '', '', '', '', '', 'enviado'),
(11, '2022-06-24', '', '', '18:58', '', '', 'NEA01\r\nPARIS', '', '', 'enviado'),
(12, '2022-06-24', '', '', '19:25', '', '', 'KM22010\r\nGUADALAJARA\r\n\r\nEM22002\r\nGUADALAJARA', '', '', 'enviado'),
(14, '2022-06-25', '', '', '', '', '', '', '', '', ''),
(15, '2022-06-25', '', '', '', '', '', '', '', '', '');

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
(22, '2022-06-20', 'RAMON PONCE (SABRIMEX)', '159', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-3', 'IÑAQUI', 'NO', 'EL CHALATAL, LOMA VERDE', '001', '163.5K (PESO DE 10 JABAS CON FRUTA) - 15K (PESO DE JABAS 1.5KG DE CADA JABA)= 148.5 K ', '2,361 KG', '44.5KG - 3K= 41.5', 'C-1'),
(23, '2022-06-20', 'EDGAR ZAMBRANO', '129', 'JESUS VALENZUELA DELGADO', 'HUE062501406161', 'ROS226652-2', 'EL CHAUTE', 'NO', 'LOS ZAPOTES CHELE', ' 002', '165 KG - 15 K = 150 KG', '1,935', '33.5 KG - 3K = 30.5 KG', 'C-5'),
(24, '2022-06-21', 'EDGAR ZAMBRANO', '18', 'ANTONIO DOMINGUEZ GARCIA ', 'HUE062501401862', 'APD247251-1', 'SAN ANTONIO', 'NO', 'LAS INDIGENAS CHAMETLA', '003', '143.5KG-15K=128.5', '231', '10.5KG-1.5=9K', 'C-5'),
(25, '2022-06-21', 'JOSE JUAN LOPEZ', '69', 'RUBY MARIA URIBE NEVAREZ', 'HUE062501405319', 'APD245561-1', 'EL GUAMARAL', 'NO', 'EL CHALATAL LOMA VERDE', '004', '155.5KG-15K=140.5KG', '969.4', '17K-1.5K=15.5', 'C-3'),
(26, '2022-06-21', 'RAMON', '113', 'HILARIO DURAN RINCON', 'HUE062501405461', 'ROS226963-1', 'EL MILAGRO', 'NO', 'EJIDO EL LAZARO RINCON DEL VERDE', '005', '164.5-15=149.5', '1,689', '35.5-3= 32.5', 'C-1'),
(27, '2022-06-21', 'PEDRO SANCHEZ', '200', 'JACINTO DURAN ARENAS', 'HUE062501403745', 'ROS226945-1', 'EL PALMAR ', 'NO', 'CAJON VERDE', '006', '149.5-15=134.5', '2,690', '49.5-4.5=45', 'C-2'),
(28, '2022-06-22', 'RAFAEL SANCHEZ', '160', 'JOSE LUCIANO OSUNA PEREZ', 'HUE062501402472', 'ROS227566-1', 'LA TECOMATERA', 'SI', 'CACALOTAN', '007', '156.5 - 15 = 141.5', '2,264', '40 K - 3 K = 37 KG', 'C-4'),
(29, '2022-06-22', 'RAMON PONCE (SABRIMEX)', '101', 'JACINTO DURAN ARENAS', 'HUE062501403745', 'ROS226945-1', 'LOS TRES HERMANOS', 'SELECCIONAR...', 'EL PALMAR CAJON VERDE', '006', '158-15= 143', '1444', '21-1.5=19.5', 'C1'),
(30, '2022-06-22', 'RAMON PONCE (SABRIMEX)', '192', 'JAIME SANCHEZ AGUILAR', 'HUE062501406297', 'APD246957-1', 'LOS TECOMATES', 'SI', 'LOMA GREÑA, POZOLE', '008', '198.5-18=180.5', '3465', '41-3=39', 'C2'),
(31, '2022-06-22', 'JUAN JOSE ACOSTA', '120', 'JANERY MARISOL OROZCO PALOM.', 'HUE062501406116', 'ROS227338-1', 'LA NORIA', 'SI', 'POTRERILLOS', '009', '152-15=137', '1640', '28-3=25', 'C3'),
(32, '2022-06-23', 'RAMON PONCE (SABRIMEX)', '142', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-1', 'IÑAQUI', 'NO', 'EL CHALATAL, LOMA VERDE', '001', '156.5 - 15 = 141.5', '2009', '27K - 3K = 24K', 'C1'),
(33, '2022-06-23', 'RAMON PONCE (SABRIMEX)', '181', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-1', 'IÑAQUI', 'NO', 'EL CHALATAL, LOMA VERDE', '001', '141.5 - 15 = 126.5', '2,289', '40.5 - 3 = 37.5', 'C2'),
(34, '2022-06-23', 'JOSE JUAN LOPEZ', '111', 'ENRIQUE VALDEZ AGUILAR', 'HUE062501400394', 'ROS226729-1', 'EL RECREO', 'NO', 'AGUA VERDE', '010', '150K-15K=135K', '1,498', '18 K- 1.5 K= 16.5', 'C3'),
(35, '2022-06-23', 'EDGAR ZAMBRANO', '160', 'HECTOR MORALES MORALES', 'HUE062501404953', 'ROS227003-1', 'EL SAUCE II', 'NO', 'EL SAUCE, PONCE', '011', '152.5K-15K=137.5', '2,200', '37K-3K=34K', 'C5'),
(36, '2022-06-24', 'RAMON PONCE (SABRIMEX)', '200', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-3', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '150.5-15=135.5', '2,700', '75-6=69', 'C-1'),
(37, '2022-06-24', 'RAMON PONCE (SABRIMEX)', '100', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-3', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '190-18=172', '1,700', '47-4.5=42.5', 'C2'),
(38, '2022-06-24', 'JOSE JUAN LOPEZ', '126', 'LUIS ANTONIO AGUILAR  CONTRERAS', 'HUE062501402901', 'ROS227571-2', 'LA URRACA', 'SI', 'LA URRACA, CACALOTAN', '013', '153-15 = 138', '1,738', '31-3=39', 'C3'),
(39, '2022-06-24', 'EDGAR ZAMBRANO', '10 ', 'HECTOR MORALES MORALES', 'HUE062501402901', 'ROS227003-1', 'EL SAUCE II', 'NO', 'EL SAUCE, PONCE', '011', '', '', '10K- 1.5 = 8.5', 'C5'),
(40, '2022-06-24', 'OSCAR CRUZ', '128', 'JULIO CRUZ', 'HUE062501402015', 'ROS227768-1', 'LA TREINTA', 'SI', 'LAGUNA DE BELTRANES', '014', '150.5-15=135.5', '1,733', '35-3=32', 'C7'),
(41, '2022-06-25', 'RAMON PONCE', '200', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-5', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '146-15=131', '2,620', '82.5-7.5=75', 'C1'),
(42, '2022-06-25', 'RAMON PONCE', '240', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-5', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '186.5-18=168.6', '4,044', '001', 'C2'),
(43, '2022-06-25', 'RAMON PONCE', '35', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-7', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '151.5-15=136.5', '477', '18-1.5=16.5', 'C2'),
(44, '2022-06-25', 'JOSE JUAN LOPEZ', '150', 'JANERY MARISOL OROZCO PALOM.', 'HUE062501406116', 'ROS227338-2', 'LA NORIA', 'SI', 'POTRERILLOS', '016', '151-15=136', '2040', '41.4-3=39.5', 'C3'),
(45, '2022-06-25', 'GUSTAVO LOPEZ', '160', 'JOSE TRINIDAD LIZARRAGA', 'HUE062501400404', 'ROS228216-1', 'LA NORIA', 'SI', 'AGUA VERDE', '017', '176.5-18=158.5', '2,536', '27.5-3=24.5', 'C6'),
(46, '2022-06-25', 'GUSTAVO YAÑEZ', '473', 'SALVADOR HARO RODRIGUEZ', 'HUE06150160255', 'TCL071170-1 TCL071170-2', 'ARROYO II', 'SELECCIONAR...', 'TIERRA GENEROSA', '018', '180K-18= 162', '7,662', '36K-3=33', 'C6'),
(47, '2022-06-27', 'RAMON PONCE', '40', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-10', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '190-18=172', '688', '17.2', 'C2'),
(48, '2022-06-27', 'RAMON PONCE', '192', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-9', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '182.5-18=164.5', '3,158', '48.5-4.5=44', 'C2'),
(49, '2022-06-27', 'RAMON PONCE', '200', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-8', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '183-18=165', '3,300', '38-3=35', 'C1'),
(50, '2022-06-27', 'JOSE JUAN LOPEZ', '150', 'OSCAR MANUEL AREVALOS VARGAS', 'HUE062501406021', 'APD248585-1', 'DON CAYO', 'NO', 'MONTE ALTO', '019', '167.5-15=152.5', '2,287', '35-3=32', 'C3'),
(51, '2022-06-24', 'EDGAR ZAMBRANO', '125', 'EVERARDO NAVIA BELTRAN', 'HUE062501405599', 'ROS227003-1', 'MAYRA CAROL ELIZABETH', 'SI', 'LAS TRANCAS', '012', '143-15=128', '1,600', '37-3=34', 'C5'),
(52, '2022-06-28', 'RAMON PONCE', '200', 'JOSE MANUEL DELGADO LOPEZ', 'HUE062501402168', 'APD247308-1', 'LUPITA', 'NO', 'EL CHALATAL LOMA VERDE', '021', '178.5', '3,570', '31', 'C1'),
(53, '2022-06-28', 'RAMON PONCE', '200', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD247344-13', 'IÑAQUI', 'SI', 'EL CHALATAL LOMA VERDE', '001', '136.5', '2,730', '29', 'C2'),
(54, '2022-06-28', 'RAMON PONCE', '80', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501402168', 'APD247344-12', 'IÑAQUI', 'NO', 'EL CHALATAL LOMA VERDE', '001', '151', '1,208', '12.5', 'C2'),
(55, '2022-06-28', 'JOSE JUAN LOPEZ', '150', 'OSCAR MANUEL AREVALOS VARGAS', 'HUE062501406021', 'APD248585-2', 'DON CAYO', 'NO', 'MONTE ALTO', '019', '139.5', '2,092', '17', 'C3'),
(56, '2022-06-28', 'FERNANDO PULIDO', '162', 'ALFREDO PALOMARES COLADO', 'HUE062501402935', 'APD247371-1', 'EL TANQUE', 'SI', 'EL FILO, CAJON VERDE', '022', '141', '2,282', '4.5', 'C9'),
(57, '2022-06-28', 'FERNANDO PULIDO', '40', 'ALFREDO PALOMARES COLADO', 'HUE062501402935', 'APD247371-2', 'EL TANQUE', 'SI', 'EL FILO CAJON VERDE', '022', '144', '2,332', '4.5', 'C9'),
(58, '2022-06-28', 'EDGAR ZAMBRANO', '162', 'JOSE LIZARRAGA VILLELA', 'HUE062501401771', 'ROS228217-1', 'VINATERIA', 'SELECCIONAR...', 'AGUA VERDE', '023', '131.5', '2,130', '17.5', 'C5'),
(59, '2022-06-29', 'RAMON PONCE', '108', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD249167-1', 'IÑAQUI', 'NO', 'EL CHALATAL CAJON VERDE', '001', '146.5', '1,582', '17.5', 'C1'),
(60, '2022-06-29', 'RAMON PONCE', '197', 'JOSE TOMAS MEZA SARMIENTO', 'HUE062501406027', 'APD249167-2', 'IÑAQUI', 'NO', 'EL CHALATAL LOMA VERDE', '001', '179', '3,349', '30', 'C2'),
(61, '2022-06-29', 'JOSE JUAN LOPEZ', '150', 'ARNULFO VALDEZ MORENO', 'HUE062501404917', 'ROS227887-1', 'EL TANQUE III', 'NO', 'LA GUASIMA', '025', '152.5K-15K=137.5', '2,062', '21', 'C3'),
(62, '2022-06-29', 'GUSTAVO LOPEZ', '200', 'JOSE TRINIDAD LIZARRAGA MONTAÑO', 'HUE062501400404', 'ROS228216-2', 'LA NORIA', 'SI', 'AGUA VERDE', '017', '180.5', '3610', '19', 'C8'),
(63, '2022-06-29', 'EDGAR ZAMBRANO', '51', 'ELVIRA GARCIA GUARDADO', 'HUE062500905972', 'ESC451245-1', 'MONSERRAT', 'NO', 'OJO DE AGUA PALMILLAS', '026', '140', '714', '7.5', 'C5'),
(64, '2022-06-29', 'EDGAR ZAMBRANO', '75', 'GUADALUPE DIAZ OSUNA', 'HUE062501401998', 'ROS228277-2', 'LA DEL CRUCERO', 'NO', 'CRUCERO DE CHAMETLA', '020', '135', '1012', '17.5', 'C5');

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
(51, '2022-06-21', 'KENT', 'CAMINO', '1', '12', 'NO', '80', 'APD245569-3', '216001236', '', '001', 'PM22008'),
(52, '2022-06-21', 'KENT', 'CAMINO', '2', '10', 'NO', '80', 'APD245569-3', '216001236', '', '001', 'PM22008'),
(54, '2022-06-21', 'KENT', 'CAMINO', '3', '12', 'NO', '80', 'APD245569-3', '216001236', '', '001', 'PM22008'),
(57, '2022-06-21', 'KENT', 'CAMINO', '4', '10', 'NO', '80', 'APD245569-3', '216001236', '', '001', 'PM22008'),
(58, '2022-06-22', 'KENT', 'GOURMET', '5', '10', 'NO', '66', 'ROS226652-2', '216002236', '', '002', 'ASA'),
(59, '2022-06-22', 'KENT', 'GOURMET', '6', '12', 'NO', '66', 'ROS226652-2', '216002236', '', '002', 'ASA'),
(60, '2022-06-22', 'KENT', 'GOURMET', '7', '10', 'NO', '66', 'ROS226652-2', '216002236', '', '002', 'ASA'),
(61, '2022-06-22', 'KENT', 'GOURMET', '8', '12', 'NO', '66', 'ROS226652-2', '216002236', '', '002', 'ASA'),
(62, '2022-06-22', 'KENT', 'CAMINO', '5', '12', 'NO', '80', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(63, '2022-06-22', 'KENT', 'CAMINO', '6', '12', 'NO', '80', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(64, '2022-06-22', 'KENT', 'CAMINO', '7', '10', 'NO', '80', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(65, '2022-06-22', 'KENT', 'CAMINO', '8', '12', 'NO', '80', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(66, '2022-06-22', 'KENT', 'CAMINO', '9', '12', 'NO', '80', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(67, '2022-06-22', 'KENT', 'CAMINO', '10', '10', 'NO', '77', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(68, '2022-06-22', 'KENT', 'CAMINO', '10', '9', 'NO', '3', 'R05226945-1', '226006236', '', '006', 'PM22008'),
(69, '2022-06-22', 'KENT', 'GOURMET', '9', '12', 'NO', '66', 'APD245561-1', '216004236', '', '004', 'ASA'),
(70, '2022-06-22', 'KENT', 'GOURMET', '10', '10', 'NO', '66', 'APD245561-1', '216004236', '', '004', 'ASA'),
(71, '2022-06-23', 'KENT', 'GOURMET', '11', '12', 'NO', '31', 'APD245561-1', '236004246', '433KG', '004', 'NEA01'),
(72, '2022-06-23', 'KENT', 'GOURMET', '12', '10', 'NO', '9', 'APD245561-1', '236004246', '432KG', '004', 'NEA01'),
(73, '2022-06-23', 'KENT', 'GOURMET', '12', '14', 'NO', '1', 'APD245561-1', '236004246', '432KG', '004', 'NEA01'),
(74, '2022-06-23', 'KENT', 'GOURMET', '12', '10', 'NO', '12', 'APD247250-1', '236003246', '432KG', '003', 'NEA01'),
(75, '2022-06-23', 'KENT', 'GOURMET', '12', '14', 'NO', '7', 'APD247250-1', '236003246', '432KG', '003', 'NEA01'),
(76, '2022-06-23', 'KENT', 'GOURMET', '11', '12', 'NO', '27', 'APD247250-1', '236003246', '433KG', '003', 'NEA01'),
(77, '2022-06-24', 'KENT', 'GOURMET', '11', '12', 'SI', '8', 'ROS227566-1', '246007246', '433KG', '007', 'NEA01'),
(78, '2022-06-24', 'KENT', 'GOURMET', '12', '10', 'SI', '25', 'ROS227566-1', '246007246', '432KG', '007', 'NEA01'),
(79, '2022-06-24', 'KENT', 'GOURMET', '12', '12', 'SI', '12', 'ROS227566-1', '246007246', '432KG', '007', 'NEA01'),
(82, '2022-06-24', 'KENT', 'MEXCO', '13', '12', 'SI', '66', 'ROS227566-1', '246007246', '438KG', '007', 'NEA01'),
(83, '2022-06-24', 'KENT', 'MEXCO', '14', '12', 'SI', '66', 'ROS227566-1', '246007246', '440KG', '007', 'NEA01'),
(84, '2022-06-24', 'KENT', 'MEXCO', '15', '10', 'SI', '66', 'ROS227566-1', '246007246', '445KG', '007', 'NEA01'),
(86, '2022-06-23', 'KENT', 'MUY BUENO ', '1', '12', 'NO', '80', 'ROS22693-1', '236005246', '522KG', '005', 'KM22010 '),
(87, '2022-06-23', 'KENT', 'MUY BUENO ', '2', '12', 'NO', '80', 'ROS22693-1', '236005246', '520KG', '005', 'KM22010 '),
(88, '2022-06-23', 'KENT', 'MUY BUENO ', '3', '10', 'NO', '68', 'ROS22693-1', '236005246', '515KG', '005', 'KM22010 '),
(89, '2022-06-23', 'KENT', 'MUY BUENO ', '4', '12', 'NO', '69', 'ROS22693-1', '236005246', '521KG', '005', 'KM22010 '),
(90, '2022-06-24', 'KENT', 'MUY BUENO ', '3', '10', 'NO', '12', 'ROS226945-2', '246006246', '515KG', '006', 'KM22010 '),
(91, '2022-06-24', 'KENT', 'MUY BUENO ', '4', '12', 'NO', '11', 'ROS226945-2', '246006246', '521KG', '006', 'KM22010 '),
(92, '2022-06-24', 'KENT', 'MUY BUENO ', '5', '12', 'NO', '80', 'ROS226945-2', '246006246', '526KG', '006', 'KM22010 '),
(95, '2022-06-24', 'KENT', 'MEXCO', '18', '10', 'SI', '21', 'ROS227566-1', '246007246', '438KG', '007', 'NEA01'),
(96, '2022-06-24', 'KENT', 'MEXCO', '16', '12', 'SI', '43', 'ROS227566-1', '246007246', '435KG', '007', 'NEA01'),
(97, '2022-06-24', 'KENT', 'MEXCO', '22', '14', 'SI', '37', 'ROS227566-1', '246007246', '448KG', '007', 'NEA01'),
(98, '2022-06-24', 'KENT', 'MEXCO', '16', '12', 'SI', '23', 'ROS227338-1', '246009246', '435KG', '009', 'NEA01'),
(99, '2022-06-24', 'KENT', 'MEXCO', '17', '12', 'SI', '66', 'ROS227338-1', '246009246', '446KG', '009', 'NEA01'),
(100, '2022-06-24', 'KENT', 'MEXCO', '18', '10', 'SI', '45', 'ROS227338-1', '246009246', '438KG', '009', 'NEA01'),
(101, '2022-06-24', 'KENT', 'MEXCO', '19', '12', 'SI', '66', 'ROS227338-1', '246009246', '437KG', '009', 'NEA01'),
(102, '2022-06-24', 'KENT', 'MEXCO', '22', '14', 'SI', '24', 'ROS227338-1', '246009246', '448KG', '009', 'NEA01'),
(103, '2022-06-24', 'KENT', 'MEXCO', '21', '10', 'SI', '35', 'ROS227338-1', '246009246', '438KG', '009', 'NEA01'),
(104, '2022-06-24', 'KENT', 'MEXCO', '20', '12', 'SI', '36', 'ROS227338-1', '246009246', '439KG', '009', 'NEA01'),
(105, '2022-06-24', 'KENT', 'MEXCO', '20', '12', 'NO', '30', 'ROS227003-1', '246011246', '439KG', '011', 'NEA01'),
(106, '2022-06-24', 'KENT', 'MEXCO', '21', '10', 'NO', '31', 'ROS227003-1', '246011246', '438KG', '011', 'NEA01'),
(107, '2022-06-24', 'KENT', 'MEXCO', '22', '14', 'NO', '1', 'ROS227003-1', '246011246', '448KG', '011', 'NEA01'),
(108, '2022-06-24', 'KENT', 'MEXCO', '22', '12', 'NO', '4', 'ROS227003-1', '246011246', '448KG', '011', 'NEA01'),
(109, '2022-06-24', 'KENT', 'VALENTINA', '1', '12', 'NO', '57', 'ROS226945-2', '246006246', '518KG', '006', 'EM22002'),
(110, '2022-06-24', 'KENT', 'VALENTINA', '3', '10', 'NO', '41', 'ROS226945-2', '246006246', '503KG', '006', 'EM22002'),
(111, '2022-06-24', 'KENT', 'VALENTINA', '1', '12', 'SI', '23', 'APD246957-1', '246008246', '518KG', '008', 'EM22002'),
(112, '2022-06-24', 'KENT', 'VALENTINA', '2', '12', 'SI', '80', 'APD246957-1', '246008246', '516KG', '008', 'EM22002'),
(113, '2022-06-24', 'KENT', 'VALENTINA', '3', '10', 'SI', '33', 'APD246957-1', '246008246', '503KG', '008', 'EM22002'),
(114, '2022-06-24', 'KENT', 'VALENTINA', '3', '12', 'SI', '6', 'APD246957-1', '246008246', '503KG', '008', 'EM22002'),
(115, '2022-06-25', 'KENT', 'CAMINO', '1', '12', 'SI', '80', 'APD246957-1', '256008256', '', '008', 'PM22009'),
(116, '2022-06-25', 'KENT', 'CAMINO', '2', '12', 'SI', '80', 'APD246957-1', '256008256', '', '008', 'PM22009'),
(117, '2022-06-25', 'KENT', 'CAMINO', '3', '12', 'SI', '80', 'APD246957-1', '256008256', '', '008', 'PM22009'),
(118, '2022-06-25', 'KENT', 'CAMINO', '4', '10', 'SI', '67', 'APD246957-1', '256008256', '', '008', 'PM22009'),
(119, '2022-06-25', 'KENT', 'CAMINO', '4', '12', 'SI', '13', 'APD246957-1', '256008256', '', '008', 'PM22009'),
(120, '2022-06-25', 'KENT', 'SABRIMEX', '1', '12', 'NO', '80', 'APD247344-1', '256001256', '', '001', 'PM22009'),
(121, '2022-06-25', 'KENT', 'SABRIMEX', '2', '12', 'NO', '80', 'APD247344-1', '256001256', '', '001', 'PM22009'),
(122, '2022-06-25', 'KENT', 'CAMINO', '5', '12', 'NO', '80', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(123, '2022-06-25', 'KENT', 'CAMINO', '6', '10', 'NO', '80', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(124, '2022-06-25', 'KENT', 'CAMINO', '7', '12', 'NO', '80', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(125, '2022-06-25', 'KENT', 'CAMINO', '8', '12', 'NO', '80', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(126, '2022-06-25', 'KENT', 'CAMINO', '9', '12', 'NO', '80', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(127, '2022-06-25', 'KENT', 'CAMINO', '10', '10', 'NO', '55', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(128, '2022-06-25', 'KENT', 'CAMINO', '10', '12', 'NO', '25', 'APD246957-1', '256001256', '', '001', 'PM22009'),
(129, '2022-06-25', 'KENT', 'MEXCO', '1', '12', 'NO', '66', 'ROS226729-1', '256010256', '', '010', 'ALA01'),
(130, '2022-06-25', 'KENT', 'MEXCO', '2', '12', 'NO', '66', 'ROS226729-1', '256010256', '', '010', 'ALA01'),
(131, '2022-06-25', 'KENT', 'MEXCO', '3', '12', 'NO', '66', 'ROS227003-1', '256011256', '', '011', 'ALA01'),
(133, '2022-06-25', 'KENT', 'MEXCO', '4', '10', 'NO', '66', 'ROS227003-1', '256011256', '', '011', 'ALA01'),
(135, '2022-06-25', 'KENT', 'MEXCO', '5', '12', 'NO', '66', 'ROS227003-1', '256011256', '', '011', 'ALA01'),
(136, '2022-06-25', 'KENT', 'MEXCO', '6', '10', 'NO', '50', 'ROS227003-1', '256011256', '', '011', 'ALA01'),
(137, '2022-06-25', 'KENT', 'MEXCO', '6', '12', 'NO', '16', 'ROS227003-1', '256011256', '', '011', 'ALA01'),
(138, '2022-06-25', 'KENT', 'SABRIMEX', '2', '10', 'NO', '8', 'APD247344-1', '256001276', '452KG', '001', 'CM22010'),
(139, '2022-06-25', 'KENT', 'SABRIMEX', '1', '12', 'NO', '39', 'APD247344-1', '256001276', '436KG', '001', 'CM22010'),
(140, '2022-06-27', 'KENT', 'SABRIMEX', '1', '12', 'NO', '27', 'TCL071170-1', '276018276', '436KG', '018', 'CM22010'),
(141, '2022-06-27', 'KENT', 'SABRIMEX', '2', '10', 'NO', '58', 'TCL071170-1', '276018276', '452KG', '018', 'CM22010'),
(142, '2022-06-27', 'KENT', 'SABRIMEX', '3', '12', 'NO', '66', 'TCL071170-1', '276018276', '444KG', '018', 'CM22010'),
(143, '2022-06-27', 'KENT', 'SABRIMEX', '4', '12', 'NO', '66', 'TCL071170-1', '276018276', '444KG', '018', 'CM22010'),
(144, '2022-06-27', 'KENT', 'SABRIMEX', '5', '10', 'NO', '66', 'TCL071170-1', '276018276', '449KG', '018', 'CM22010'),
(145, '2022-06-27', 'KENT', 'SABRIMEX', '6', '12', 'NO', '66', 'TCL071170-1', '276018276', '434KG', '018', 'CM22010'),
(146, '2022-06-27', 'KENT', 'SABRIMEX', '6', '12', 'NO', '66', 'TCL071170-1', '276018276', '434KG', '018', 'CM22010'),
(147, '2022-06-27', 'KENT', 'SABRIMEX', '6', '12', 'NO', '66', 'TCL071170-1', '276018276', '434KG', '018', 'CM22010'),
(148, '2022-06-27', 'KENT', 'SABRIMEX', '7', '12', 'NO', '66', 'TCL071170-1', '276018276', '428KG', '018', 'CM22010'),
(149, '2022-06-27', 'KENT', 'SABRIMEX', '8', '10', 'NO', '66', 'TCL071170-1', '276018276', '411KG', '018', 'CM22010'),
(150, '2022-06-27', 'KENT', 'SABRIMEX', '9', '12', 'NO', '66', 'TCL071170-1', '276018276', '430KG', '018', 'CM22010'),
(151, '2022-06-27', 'KENT', 'SABRIMEX', '10', '10', 'NO', '66', 'TCL071170-1', '276018276', '451KG', '018', 'CM22010'),
(152, '2022-06-27', 'KENT', 'SABRIMEX', '11', '9', 'NO', '66', 'TCL071170-1', '276018276', '463KG', '018', 'CM22010'),
(153, '2022-06-27', 'KENT', 'SABRIMEX', '12', '12', 'NO', '55', 'TCL071170-1', '276018276', '423KG', '018', 'CM22010'),
(154, '2022-06-27', 'KENT', 'SABRIMEX', '12', '10', 'NO', '11', 'TCL071170-1', '276018276', '423KG', '018', 'CM22010'),
(155, '2022-06-27', 'KENT', 'MEXCO', '29', '12', 'SI', '66', 'ROS227545-1', '276012276', '422KG', '012', 'DOA01'),
(156, '2022-06-27', 'KENT', 'MEXCO', '30', '12', 'SI', '66', 'ROS227545-1', '276012276', '423KG', '012', 'DOA01'),
(157, '2022-06-27', 'KENT', 'MEXCO', '31', '14', 'SI', '64', 'ROS227545-1', '276012276', '443KG', '012', 'DOA01'),
(158, '2022-06-27', 'KENT', 'MEXCO', '34', '10', 'SI', '20', 'ROS227545-1', '276012276', '429KG', '012', 'DOA01'),
(159, '2022-06-27', 'KENT', 'MEXCO', '32', '12', 'SI', '36', 'ROS227545-1', '276012276', '428KG', '012', 'DOA01'),
(160, '2022-06-27', 'KENT', 'MEXCO', '31', '14', 'SI', '2', 'ROS227571-2', '276013276', '443KG', '013', 'DOA01'),
(161, '2022-06-27', 'KENT', 'MEXCO', '32', '12', 'SI', '30', 'ROS227571-2', '276013276', '428KG', '013', 'DOA01'),
(162, '2022-06-27', 'KENT', 'MEXCO', '33', '12', 'SI', '66', 'ROS227571-2', '276013276', '440KG', '013', 'DOA01'),
(163, '2022-06-27', 'KENT', 'MEXCO', '34', '10', 'SI', '46', 'ROS227571-2', '276013276', '429KG', '013', 'DOA01'),
(164, '2022-06-27', 'KENT', 'PHILIBON', '35', '12', 'SI', '66', 'ROS227571-2', '276013276', '438KG', '013', 'BOA01'),
(165, '2022-06-27', 'KENT', 'PHILIBON', '36', '14', 'SI', '41', 'ROS227571-2', '276013276', '449KG', '013', 'BOA01'),
(166, '2022-06-27', 'KENT', 'PHILIBON', '37', '12', 'SI', '14', 'ROS227571-2', '276013276', '427KG', '013', 'BOA01'),
(167, '2022-06-27', 'KENT', 'PHILIBON', '36', '14', 'SI', '25', 'ROS227768-1', '276014276', '449KG', '014', 'BOA01'),
(168, '2022-06-27', 'KENT', 'PHILIBON', '37', '12', 'SI', '52', 'ROS227768-1', '276014276', '427KG', '014', 'BOA01'),
(169, '2022-06-27', 'KENT', 'PHILIBON', '38', '12', 'SI', '66', 'ROS227768-1', '276014276', '430KG', '014', 'BOA01'),
(170, '2022-06-27', 'KENT', 'PHILIBON', '39', '14', 'SI', '66', 'ROS227768-1', '276014276', '442KG', '014', 'BOA01'),
(171, '2022-06-27', 'KENT', 'PHILIBON', '40', '10', 'NO', '18', 'ROS227003-1', '276011276', '435KG', '011', 'BOA01'),
(172, '2022-06-27', 'KENT', 'PHILIBON', '40', '12', 'NO', '42', 'ROS227003-1', '276011276', '435KG', '011', 'BOA01'),
(173, '2022-06-27', 'KENT', 'PHILIBON', '40', '14', 'NO', '6', 'ROS227003-1', '276011276', '435KG', '011', 'BOA01'),
(174, '2022-06-28', 'KENT', 'VALENTINA', '1', '12', 'SI', '90', 'APD247344-6', '286001296', '560KG', '001', 'SM22014'),
(175, '2022-06-28', 'KENT', 'VALENTINA', '2', '14', 'SI', '90', 'APD247344-6', '286001296', '590KG', '001', 'SM22014'),
(176, '2022-06-28', 'KENT', 'VALENTINA', '3', '14', 'SI', '90', 'APD247344-6', '286001296', '592KG', '001', 'SM22014'),
(177, '2022-06-28', 'KENT', 'VALENTINA', '4', '12', 'SI', '90', 'APD247344-6', '286001296', '593KG', '001', 'SM22014'),
(178, '2022-06-28', 'KENT', 'VALENTINA', '5', '12', 'SI', '90', 'APD247344-6', '286001296', '592KG', '001', 'SM22014'),
(179, '2022-06-28', 'KENT', 'VALENTINA', '6', '12', 'SI', '90', 'APD247344-6', '286001296', '596KG', '001', 'SM22014'),
(180, '2022-06-28', 'KENT', 'VALENTINA', '7', '14', 'SI', '90', 'APD247344-6', '286001296', '591KG', '001', 'SM22014'),
(181, '2022-06-28', 'KENT', 'VALENTINA', '8', '14', 'SI', '90', 'APD247344-6', '286001296', '595KG', '001', 'SM22014'),
(182, '2022-06-28', 'KENT', 'VALENTINA', '9', '12', 'SI', '90', 'APD247344-6', '286001296', '600KG', '001', 'SM22014'),
(183, '2022-06-28', 'KENT', 'VALENTINA', '10', '14', 'SI', '90', 'APD247344-6', '286001296', '601KG', '001', 'SM22014'),
(184, '2022-06-28', 'KENT', 'VALENTINA', '11', '12', 'SI', '90', 'APD247344-6', '286001296', '596KG', '001', 'SM22014'),
(185, '2022-06-28', 'KENT', 'MEXCO', '41', '12', 'NO', '66', 'ROS228250-1', '286015296', '431KG', '001', 'MGA01'),
(186, '2022-06-28', 'KENT', 'MEXCO', '42', '14', 'NO', '66', 'ROS228250-1', '286015296', '441KG', '001', 'MGA01'),
(187, '2022-06-28', 'KENT', 'MEXCO', '43', '12', 'NO', '52', 'ROS228250-1', '286015296', '434KG', '001', 'MGA01'),
(188, '2022-06-28', 'KENT', 'MEXCO', '43', '12', 'NO', '14', 'ROS227338-2', '286016296', '434KG', '016', 'MGA01'),
(189, '2022-06-28', 'KENT', 'MEXCO', '44', '12', 'NO', '66', 'ROS227338-2', '286016296', '437KG', '016', 'MGA01'),
(190, '2022-06-28', 'KENT', 'MEXCO', '45', '10', 'NO', '37', 'ROS227338-2', '286016296', '', '016', 'MGA01'),
(191, '2022-06-28', 'KENT', 'MEXCO', '45', '10', 'NO', '29', 'ROS227338-2', '286016296', '', '016', 'MGA01'),
(192, '2022-06-28', 'KENT', 'MEXCO', '46', '12', 'NO', '66', 'ROS227338-2', '286016296', '441KG', '016', 'MGA01'),
(193, '2022-06-29', 'KENT', 'MEXCO', '47', '12', 'SI', '66', 'ROS228216-1', '296017296', '443KG', '017', 'FOA01'),
(194, '2022-06-29', 'KENT', 'MEXCO', '49', '12', 'SI', '66', 'ROS228216-1', '296017296', '429KG', '017', 'FOA01'),
(195, '2022-06-29', 'KENT', 'MEXCO', '50', '12', 'SI', '66', 'ROS228216-1', '296017296', '429KG', '001', 'FOA01'),
(196, '2022-06-29', 'KENT', 'MEXCO', '52', '12', 'SI', '55', 'ROS228216-1', '296017296', '423KG', '017', 'FOA01'),
(197, '2022-06-29', 'KENT', 'MEXCO', '54', '10', 'NO', '22', 'ROS228216-1', '296017296', '440KG', '017', 'FOA01'),
(198, '2022-06-29', 'KENT', 'MEXCO', '52', '12', 'SI', '11', 'APD248585-1', '296019296', '423KG', '019', 'FOA01'),
(199, '2022-06-29', 'KENT', 'MEXCO', '53', '12', 'NO', '66', 'APD248585-1', '296019296', '438KG', '019', 'FOA01'),
(200, '2022-06-29', 'KENT', 'MEXCO', '54', '10', 'NO', '44', 'APD248585-1', '296019296', '440KG', '019', 'FOA01'),
(201, '2022-06-29', 'KENT', 'VALENTINA', '12', '10-12', 'SI', '68-22', 'APD247344-6', '286001296', '596KG', '001', 'SM22014'),
(203, '2022-06-29', 'KENT', 'VALENTINA', '13', '12', 'NO', '30', 'APD247344-6', '286001296', '600KG', '001', 'SM22014'),
(204, '2022-06-29', 'KENT', 'VALENTINA', '14', '14', 'NO', '20', 'APD247344-8', '296001296', '590KG', '001', 'SM22014'),
(205, '2022-06-29', 'KENT', 'VALENTINA', '15', '12', 'NO', '90', 'APD247344-8', '296001296', '599KG', '001', 'SM22014'),
(206, '2022-06-29', 'KENT', 'VALENTINA', '16', '10-10', 'NO', '73-17', 'APD247344-8', '296001296', '613KG', '001', 'SM22014'),
(207, '2022-06-29', 'KENT', 'VALENTINA', '17', '14-14', 'NO', '54-34', 'APD247344-8', '296001296', '595KG', '001', 'SM22014'),
(208, '2022-06-29', 'KENT', 'VALENTINA', '18', '12-12', 'NO', '30-60', 'APD247344-8', '296001296', '599KG', '001', 'SM22014'),
(213, '2022-06-29', 'KENT', 'VALENTINA', '19', '14-14', 'SI', '3-87', 'APD247344-1', '296001296', '579KG', '001', 'SM22014'),
(215, '2022-06-29', 'KENT', 'VALENTINA', '20', '12', 'SI', '90', 'APD247344-9', '296001296', '593KG', '001', 'SM22014'),
(216, '2022-06-29', 'KENT', 'VALENTINA', '21', '14-12', 'SI', '76-14', 'APD247344-9', '296001296', '', '001', 'SM22014'),
(217, '2022-06-29', 'KENT', 'VALENTINA', '22', '12-10', 'SI', '74-16', 'APD247344-9', '296001296	', '604KG', '001', 'SM22014'),
(218, '2022-06-29', 'KENT', 'DELIFRUT', '48', '14', 'SI', '66', 'ROS228210-1', '296017296', '450KG', '017', 'GRA01'),
(219, '2022-06-29', 'KENT', 'SALTO ORIGEN', '55', '12', 'SI', '66', 'APD247371-1', '296022296', '437KG', '022', 'TIA03'),
(220, '2022-06-29', 'KENT', 'SALTO ORIGEN', '56', '12', 'SI', '66', 'APD247371-1', '296022296	', '', '022', 'TIA03'),
(221, '2022-06-29', 'KENT', 'SALTO ORIGEN', '57', '14', 'SI', '64', 'APD247371-1', '296022296', '', '022', 'TIA03'),
(222, '2022-06-29', 'KENT', 'SALTO ORIGEN', '58', '12', 'SI', '66', 'APD247371-1', '296022296', '', '022', 'TIA03'),
(223, '2022-06-29', 'KENT', 'SALTO ORIGEN', '59', '10', 'SI', '65', 'APD247371-1', '296022296	', '', '022', 'TIA03'),
(224, '2022-06-29', 'KENT', 'DELIFRUT', '51', '14', 'SI', '66', 'ROS228210-1', '296017296', '445KG', '017', 'GRA01'),
(225, '2022-06-29', 'KENT', 'DELIFRUT', '60', '10', 'SI', '66', 'APD248585-1', '296019296', '', '019', 'GRA01'),
(226, '2022-06-29', 'KENT', 'DELIFRUT', '61', '12', 'SI', '66', 'APD248585-1', '296019296	', '439KG', '019', 'GRA01'),
(227, '2022-06-29', 'KENT', 'DELIFRUT', '62', '10-12', 'SI', '16-50', 'ROS22877-1', '296020296', '440KG', '020', 'GRA01'),
(228, '2022-06-29', 'KENT', 'DELIFRUT', '63', '12-14', 'SI', '48-18', 'ROS228216-1,APD248585-1', '296017296-296019296', '443KG', '017', 'GRA01'),
(229, '2022-06-29', 'KENT', 'SALTO ORIGEN', '59', '12', 'SI', '1', 'APD247371-1', '296022296	', '', '022', 'TIA03'),
(230, '2022-06-29', 'KENT', 'SALTO ORIGEN', '57', '12', 'SI', '2', 'APD247371-1', '296022296', '', '022', 'TIA03');

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
(70, 'PM22008', '1', '529KG', 'CAMINO', '80', '12', 'NO', '', '9'),
(71, 'PM22008', '2', '528KG', 'CAMINO', '80', '10', 'NO', '', '9'),
(72, 'PM22008', '3', '526KG', 'CAMINO', '80', '12', 'NO', '', '9'),
(73, 'PM22008', '4', '523KG', 'CAMINO', '80', '10', 'NO', '', '9'),
(74, 'PM22008', '5', '527KG', 'CAMINO', '80', '12', 'NO', '', '9'),
(75, 'PM22008', '6', '541KG', 'CAMINO', '80', '12', 'NO', '', '9'),
(76, 'PM22008', '7', '530KG', 'CAMINO', '80', '10', 'NO', '', '9'),
(77, 'PM22008', '8', '535KG', 'CAMINO', '80', '12', 'NO', '', '9'),
(78, 'PM22008', '9', '537KG', 'CAMINO', '80', '12', 'NO', '', '9'),
(79, 'PM22008', '10', '528KG', 'CAMINO', '77', '10', 'NO', '', '9'),
(80, 'PM22008', '10', '528KG', 'CAMINO', '3', '9', 'NO', '', '9'),
(81, 'ASA', '5', '442KG', 'GOURMET', '66', '10', 'NO', '', '10'),
(82, 'ASA', '6', '441KG', 'GOURMET', '66', '12', 'NO', '', '10'),
(83, 'ASA', '7', '441KG', 'GOURMET', '66', '10', 'NO', '', '10'),
(84, 'ASA', '8', '440KG', 'GOURMET', '66', '12', 'NO', '', '10'),
(85, 'PM22008', '9', '427KG', 'GOURMET', '66', '12', 'NO', '', '10'),
(86, 'ASA', '10', '437KG', 'GOURMET', '57', '10', 'NO', '', '10'),
(87, 'ASA', '10', '437KG', 'GOURMET', '9', '9', 'NO', '', '10'),
(88, 'NEA01', '11', '433KG', 'MEXCO', '66', '12', 'NO', '', '11'),
(89, 'NEA01', '12', '432KG', 'MEXCO', '46', '10', 'NO', '', '11'),
(90, 'NEA01', '12', '432KG', 'MEXCO', '12', '12', 'NO', '', '11'),
(91, 'NEA01', '12', '432KG', 'MEXCO', '8', '14', 'NO', '', '11'),
(92, 'NEA01', '16', '435KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(93, 'NEA01', '17', '446KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(94, 'NEA01', '18', '446KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(95, 'NEA01', '19', '437KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(96, 'NEA01', '20', '439KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(97, 'NEA01', '21', '438KG', 'MEXCO', '66', '10', 'NO', '', '11'),
(98, 'NEA01', '22', '448KG', 'MEXCO', '62', '14', 'SI', '', '11'),
(99, 'NEA01', '22', '448KG', 'MEXCO', '4', '12', 'SI', '', '11'),
(100, 'NEA01', '13', '438KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(101, 'NEA01', '14', '440KG', 'MEXCO', '66', '12', 'SI', '', '11'),
(102, 'NEA01', '15', '445KG', 'MEXCO', '66', '10', 'SI', '', '11'),
(103, 'KM22010', '3', '515KG', 'MUY BUENO', '80', '10', 'NO', '', '12'),
(104, 'KM22010', '4', '521KG', 'MUY BUENO', '80', '12', 'NO', '', '12'),
(105, 'KM22010', '5', '526KG', 'MUY BUENO', '80', '12', 'NO', '', '12'),
(106, 'KM22010', '2', '520KG', 'MUY BUENO', '80', '12', 'NO', '', '12'),
(107, 'KM22010', '1', '522KG', 'MUY BUENO', '80', '12', 'NO', '', '12'),
(108, 'EM22002', '1', '518KG', 'VALENTINA', '80', '12', 'NO', '', '12'),
(109, 'EM22002', '2', '516KG', 'VALENTINA', '80', '12', 'SI', '', '12'),
(110, 'EM22002', '3', '503KG', 'VALENTINA', '74', '10', 'NO', '', '12'),
(111, 'EM22002', '3', '503KG', 'VALENTINA', '6', '12', 'SI', '', '12'),
(112, 'PM22009', '4', '521KG', 'CAMINO', '67', '10', 'SI', '', '14'),
(113, 'PM22009', '4', '521KG', 'CAMINO', '13', '12', 'SI', '', '14'),
(114, 'PM22009', '3', '512KG', 'CAMINO', '80', '12', 'SI', '', '14'),
(115, 'PM22009', '2', '511KG', 'CAMINO', '80', '12', 'SI', '', '14'),
(116, 'PM22009', '1', '510KG', 'CAMINO', '80', '12', 'SI', '', '14'),
(117, 'PM22009', '7', '518KG', 'CAMINO', '80', '12', 'NO', '', '14'),
(118, 'PM22009', '8', '519KG', 'CAMINO', '80', '12', 'NO', '', '14'),
(119, 'PM22009', '6', '530KG', 'CAMINO', '80', '10', 'NO', '', '14'),
(120, 'PM22009', '9', '521KG', 'CAMINO', '80', '12', 'NO', '', '14'),
(121, 'PM22009', '10', '523KG', 'CAMINO', '55', '10', 'NO', '', '14'),
(122, 'PM22009', '10', '523KG', 'CAMINO', '25', '12', 'NO', '', '14'),
(123, 'PM22009', '5', '533KG', 'CAMINO', '80', '12', 'NO', '', '14');

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
(13, 'PM22008', 'SABRIMEX', 'CIUDAD DE MEXICO', 'PSL', 'KENT', 'CAMINO', 'CAMINO', 'NIPPON', 'ROSA', 'BLANCO', 'NO', 'NO'),
(14, 'ASA01', 'ASCIONE', 'MADRID', 'ISABEL', 'KENT', 'GOURMET', 'GOURMET', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO'),
(15, 'NEA01', 'NETA SAS', 'PARIS', 'ISABEL', 'KENT', 'GOURMET', 'GOURMET', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO'),
(16, 'KM22010 ', 'SABRIMEX', 'GUADALAJARA', 'PACO', 'KENT', 'MUY BUENO ', 'MUY BUENO', 'NIPPON', 'ROSA', 'BLANCO', 'NO', 'SI'),
(17, 'EM22002', 'WESTFALIA', 'GUADALAJARA', 'PACO', 'KENT', 'VALENTINA', 'VALENTINA', 'NIPPON', 'NEGRO', 'BLANCO', 'NO', 'NO'),
(18, 'PM22009', 'SABRIMEX', 'GUADALAJARA', 'PACO', 'KENT', 'CAMINO', 'CAMINO', 'NIPPON', 'ROSA', 'BLANCO', 'NO', 'SI'),
(19, 'ALA01', 'AL.M.A', 'MADRID', 'ISABEL', 'KENT', 'MEXCO', 'MEXCO', 'NIPPON', 'ROSA', 'NEGRO', 'NO', 'NO'),
(20, 'CM22010', 'CAPEXO', 'GUADALAJARA', 'PACO', 'KENT', 'SABRIMEX', 'SABRIMEX', 'NIPPON', 'NEGRO', 'BLANCO', 'NO', 'SI'),
(21, 'DOA01', 'DOLL', 'MADRID', 'RODEO', 'KENT', 'MEXCO', 'MEXCO', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO'),
(22, 'BOA01', 'CGA', 'PARIS', 'RODEO', 'KENT', 'PHILIBON', 'PHILIBON', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'SI'),
(23, 'SM22013', '', '', '', 'KENT', 'SABRIMEX', 'SABRIMEX', 'SELECCIONAR...', 'ROSA', 'SELECCIONAR...', 'NO', 'SI'),
(24, 'FOA01', 'FRUTAS OLMOS', 'MADRID', 'ISABEL', 'KENT', 'MEXCO', 'MEXCO', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO'),
(25, 'MGA01', 'MANGANA', 'PARIS', 'ISABEL', 'KENT', 'MEXCO', 'MEXCO', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO'),
(26, 'GRA01', 'GREEN YARD', 'PARIS', 'ISABEL', 'KENT', 'DELIFRUT', 'DELIFRUT', 'NIPPON', 'NEGRO', 'NEGRO', 'NO', 'NO'),
(27, 'SM22014', '', 'JAPON', 'PACO', 'KENT', 'VALENTINA', 'VALENTINA', 'NIPPON', 'ROSA', 'BLANCO', 'NO', 'NO'),
(28, 'TIA03', 'TRIEX', '', 'RODEO', 'KENT', 'SALTO ORIGEN', 'SALTO ORIGEN', 'NIPPON', 'ROSA', 'BLANCO', 'NO', 'NO');

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
(11, '2022-06-21', 'PM22008', '', 'ROSA', 'blanco', 'No', 'NO', 'CIUDAD DE MEXICO'),
(12, '2022-06-21', 'ASA01', '', 'NEGRO', 'NEGRO', 'NO', 'NO', 'MADRID'),
(14, '2022-06-24', 'NEA01', '', 'NEGRO', 'NEGRO', 'NO', 'NO', 'PARIS'),
(15, '2022-06-24', 'KM22010 ', '', 'ROSA', 'BLANCO', 'SI', 'NO', 'GUADALAJARA'),
(16, '2022-06-24', 'EM22002', '', 'NEGRO', 'BLANCO', 'NO', 'NO', 'GUADALAJARA'),
(17, '2022-06-25', 'PM22009', '', 'ROSA', 'BLANCO', 'SI', 'NO', 'GUADALAJARA'),
(18, '2022-06-25', 'ALA01', '', 'ROSA', 'NEGRO', 'NO', 'NO', 'MADRID'),
(19, '2022-06-27', 'CM22010', 'CAPEXO', 'NEGRO', 'BLANCO', 'SI', 'NO', 'GUADALAJARA'),
(20, '2022-06-27', 'DOA01', '', 'NEGRO', 'NEGRO', 'NO', 'NO', 'MADRID'),
(21, '2022-06-27', 'BOA01', '', 'NEGRO', 'NEGRO', 'SI', 'NO', 'PARIS'),
(22, '2022-06-28', 'FOA01', '', 'NEGRO', 'NEGRO', 'NO', 'NO', 'MADRID'),
(23, '2022-06-28', 'GRA01', '', 'NEGRO', 'NEGRO', 'NO', 'NO', 'PARIS'),
(24, '2022-06-28', 'MGA01', '', 'NEGRO', 'NEGRO', 'NO', 'NO', 'PARIS'),
(25, '2022-06-28', 'SM22014', '', 'ROSA', 'BLANCO', 'NO', 'SI', 'JAPON'),
(26, '2022-06-29', 'TIA03', '', 'ROSA', 'BLANCO', 'NO', 'NO', '');

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
  MODIFY `id_embarques` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `t_lotes`
--
ALTER TABLE `t_lotes`
  MODIFY `id_lotes` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `t_pallet`
--
ALTER TABLE `t_pallet`
  MODIFY `id_pallet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `t_pallet_embarque`
--
ALTER TABLE `t_pallet_embarque`
  MODIFY `id_embarques_pallet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `t_pedidos`
--
ALTER TABLE `t_pedidos`
  MODIFY `id_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `t_rastreos`
--
ALTER TABLE `t_rastreos`
  MODIFY `id_rastreo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
