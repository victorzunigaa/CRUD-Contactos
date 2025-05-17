-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2021 a las 18:37:21
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`nombre`, `direccion`, `telefono`, `email`) VALUES
('Diana Prince', 'Orizaba', '2711544556', 'tareaspquitl@gmail.com'),
('Ricardo Jr', 'Tapia Fernadez', '2781896790', 'tareaspquitl@gmail.com'),
('Jon Bon', 'Jovi', '12345000', 'tareaspquitl@gmail.com'),
('Fredy Mercury', 'LONDON', '345678912', 'tareaspquitl@gmail.com'),
('', 'Mendoza', '0997712345', 'tareaspquitl@gmail.com'),
('Petra Perez GRACIA', 'Orizaba, VER', '6789234678', 'tareaspquitl@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
