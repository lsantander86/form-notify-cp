-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2021 a las 00:18:00
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `came_pagos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetaprepaga_cp`
--

CREATE TABLE `tarjetaprepaga_cp` (
  `id` int(11) NOT NULL,
  `correo` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 NOT NULL,
  `razon_social` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tipo_documento` varchar(70) CHARACTER SET utf8 NOT NULL,
  `numero_documento` varchar(50) CHARACTER SET utf8 NOT NULL,
  `provincia` varchar(70) CHARACTER SET utf8 NOT NULL,
  `localidad` varchar(100) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cp` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefono` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarjetaprepaga_cp`
--
ALTER TABLE `tarjetaprepaga_cp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarjetaprepaga_cp`
--
ALTER TABLE `tarjetaprepaga_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
