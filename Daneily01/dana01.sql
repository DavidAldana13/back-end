-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 16:22:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dana01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `nombre` varchar(150) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `telefono` int(15) NOT NULL,
  `comen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`nombre`, `correo`, `telefono`, `comen`) VALUES
('Gabriel Gómez', 'gabigom@gmail.com', 89657890, 'Necesito valuar un púlsela con ustedes, puedo sacar un cita para pasar mas tarde por la valuación.'),
('Isaac Jiménez', 'jim999@outloock.com', 99031167, 'Quisiera obtener mas información sobre que artículos aceptan.'),
('Marcela Uitz', 'mar103uitz@gmail.com', 45337809, 'Información sobre los plazos que manejan en cuanto a cada tipo de prenda empeñada, también sobre el porcentaje de interés que suelen manejar. Gracias!!!'),
('Laura Gonzales ', 'lau_gon99@gmail.com', 95164487, 'Me podrían proporcionar más información de como ubicarlos o que ruta de camión pasa por esa zona ya que me han comentado que manejan un interés menor a la competencia.'),
('Patricio Ramírez', 'ra-pat89@outloock.com', 99067856, '¿Solo cuentan con empeños?, necesito mas información ya que me interesa vender mi dispositivo móvil, es una emergencia, que hago para llegar hasta su sucursal y espero su pronta repuesta.'),
('Karen Estrella', 'LE17080556@merida.tecnm.mx', 1504583, 'Excelente servicio y comunicacion'),
('JOse JosePerez1', 'jose1998@merida.tecnm.mx', 998065413, 'Excelente pagina y productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empenio`
--

CREATE TABLE `empenio` (
  `tipo` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `num_serie` varchar(30) NOT NULL,
  `valuo` int(100) NOT NULL,
  `prestamo` int(100) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `comentarios` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_pago` date NOT NULL,
  `estatus` varchar(15) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empenio`
--

INSERT INTO `empenio` (`tipo`, `marca`, `modelo`, `color`, `num_serie`, `valuo`, `prestamo`, `curp`, `comentarios`, `fecha`, `fecha_pago`, `estatus`, `id`) VALUES
('Electrodomestico', 'Mabe', '876', 'blanco', '0000000', 1000, 300, 'AARD980533HYNLSV08', 'Excelente estado ', '2022-05-26', '2022-06-09', 'empenio', 18),
('Electrodomestico', 'mitzu', 'especial', 'dorado', '8976777897', 100000, 1000, 'DEAR89456700TR', 'excelente estado', '2022-11-09', '2022-12-08', 'empenio', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `nombre_completo` varchar(30) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `telefono` int(15) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `contrasenia` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `curp` varchar(19) NOT NULL,
  `rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_completo` varchar(30) NOT NULL,
  `curp` varchar(19) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `contrasenia` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_completo`, `curp`, `telefono`, `direccion`, `contrasenia`, `correo`) VALUES
('David Ernesto Aldana Rosel', 'AARD980533HYNLSV08', 3493010, 'calle 13 x 46 y 48', 'contraseÃ±a', 'davidaldana76@gmail.com'),
('David Ernesto Aldana Rosel', 'Admin', 92493010, 'C.67 321 x 46 y 48', '1345', 'david@gmail.com'),
('ernesto', 'DEAR89456700TR', 0, 'calle 13 x 46 y 48', 'aldana', 'ernerto@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empenio`
--
ALTER TABLE `empenio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curp` (`curp`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`curp`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`curp`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`curp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empenio`
--
ALTER TABLE `empenio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empenio`
--
ALTER TABLE `empenio`
  ADD CONSTRAINT `empenio_ibfk_1` FOREIGN KEY (`curp`) REFERENCES `usuarios` (`curp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
