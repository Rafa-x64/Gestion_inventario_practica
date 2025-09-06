-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2025 a las 03:40:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` varchar(20) NOT NULL,
  `id_empresa` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` enum('Masculino','Femenino','Otro') NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `ROL` enum('super administrador','empleado administrador','empleado vendedor') NOT NULL,
  `fecha_registro` date NOT NULL,
  `tipo_contrato` varchar(50) DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  `salario` decimal(10,2) DEFAULT NULL,
  `bonificaciones` decimal(10,2) DEFAULT NULL,
  `motivo_bonificacion` text DEFAULT NULL,
  `tipo_deduccion` varchar(50) DEFAULT NULL,
  `monto_deduccion` float DEFAULT NULL,
  `tipo_pago` varchar(50) DEFAULT NULL,
  `banco` varchar(100) DEFAULT NULL,
  `numero_cuenta` varchar(30) DEFAULT NULL,
  `beneficios_adicionales` varchar(255) DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_empresa`, `nombre`, `cedula`, `fecha_nacimiento`, `sexo`, `telefono`, `estado_civil`, `correo`, `direccion`, `ROL`, `fecha_registro`, `tipo_contrato`, `hora_entrada`, `hora_salida`, `estado`, `salario`, `bonificaciones`, `motivo_bonificacion`, `tipo_deduccion`, `monto_deduccion`, `tipo_pago`, `banco`, `numero_cuenta`, `beneficios_adicionales`, `usuario`, `contraseña`) VALUES
('USR_68A128A2', 'EMP_688e7f6209092', 'Rafael Andres Alvarez Tortoza', '31.757.781', '2025-08-16', 'Masculino', '+58 412-555-1041', 'Soltero', 'alvarezrafaelat@gmail.com', 'Piritu Estado Portuguesa, Sector Palo Grande Principal Calle 7 Entre Carreras 8 Y 9', 'empleado administrador', '2025-08-17', 'Tiempo Completo', '20:56:00', '20:57:00', 'activo', 1500.00, 1500.00, 'ninguno\r\n', 'seguridad social', 500, 'Quincenal', 'Banesco', '6012886217832620', 'ninguno', 'usuario123', '$2y$12$4k0imAUjz/1xdTgOpJ4mnO.x9sZ6ogBL3B9Lyrh6chYmsagNy0vqG'),
('USR_68A69738', 'EMP_688e7f6209092', 'Andres Alejandro Alvarez Tortoza', '12.345.678', '2025-08-20', 'Masculino', '0412-111-11-11', 'Soltero', 'andresalvarez@gmail.com', 'Piritu Estado Portuguesa', 'empleado vendedor', '2025-08-21', 'Tiempo Parcial', '23:45:00', '23:46:00', 'activo', 1500.00, 1500.00, 'Por buen desempeño', 'seguridad social', 500, 'Quincenal', 'Venezuela', '4539148803436467', 'seguro medico, bono alimentacion', 'andres01', '$2y$12$TGaFBSKoq4JhlJrhEsy.bepH3NpoCqhskE5p72bhKCwdEya/0gjbO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` varchar(20) NOT NULL,
  `nombre_legal` varchar(100) NOT NULL,
  `rif` varchar(15) NOT NULL,
  `direccion` text NOT NULL,
  `contacto` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nombre_representante` varchar(100) NOT NULL,
  `fecha_registro` varchar(10) NOT NULL,
  `estado_condicion` varchar(10) NOT NULL,
  `ruta_logo` text NOT NULL,
  `tipo_empresa` varchar(50) NOT NULL,
  `moneda` varchar(10) NOT NULL,
  `zona_horaria` varchar(50) NOT NULL,
  `usuario_admin` varchar(100) NOT NULL,
  `contraseña_admin` varchar(255) NOT NULL,
  `ROL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre_legal`, `rif`, `direccion`, `contacto`, `correo`, `nombre_representante`, `fecha_registro`, `estado_condicion`, `ruta_logo`, `tipo_empresa`, `moneda`, `zona_horaria`, `usuario_admin`, `contraseña_admin`, `ROL`) VALUES
('EMP_6884f0c94d2b5', 'empresa de ejemplo nro6', 'J-31757781-4', 'cualquiera', '04125551041', 'alvarezrafaelat@gmail.com', 'rafael alvarez', '2025-07-26', 'activo', 'C:\\xampp\\htdocs\\Gestion_inventario\\controller/../uploads/logos/logo_6884f0c9a1ebd.jpg', 'persona_natural', 'Bolivar', 'America/Caracas', 'rafa123', '$2y$12$4aQX1/K2mnNoHl6/r/YdJOpYdeZEhvB6yvg29AmDne6hpNVHiWkH2', ''),
('EMP_688abdd8cec82', 'empresa de ejemplo nro.7', 'J-31757781-4', 'piritu', '04125551041', 'alvarezrafaelat@gmail.com', 'rafael alvarez', '2025-07-31', 'activo', 'C:\\xampp\\htdocs\\Gestion_inventario\\controller/../uploads/logos/logo_688abdd939906.jpg', 'sociedad_anonima', 'Bolivar', 'America/Caracas', 'rafa123', '$2y$12$Zt7AvphI1gMlAwtUyVVVSOC8RBbv3KG4F/71crL7h3Om8YPDM3Msq', 'super usuario'),
('EMP_688ad4054137c', 'ejemplo nro 8', 'J-12345678-8', 'direccion ejemplo 8', '04121111111', 'ejemplo_8@gmail.com', 'nombre ejemplo ocho', '2025-07-31', 'activo', 'C:\\xampp\\htdocs\\Gestion_inventario\\controller/../uploads/logos/logo_688ad4059680c.jpg', 'sociedad_anonima', 'Bolivar', 'No se ha detectado la zona horaria.', 'ejemplo8', '$2y$12$2N.xV.qgH9Z35mbqN8bYG.0p3kPraN0xhNQaXsR/C7iutsaQftTYm', 'super usuario'),
('EMP_688e7f6209092', 'ejemplo nro 9 ', 'J-12345678-9', 'ejemplo 9', '04125551041', 'ejemplo9@gmail.com', 'ejemplo nueve', '2025-08-02', 'activo', 'C:\\xampp\\htdocs\\Gestion_inventario\\controller/../uploads/logos/logo_688e7f62609cf.jpg', 'persona_natural', 'Dolar', 'America/Caracas', 'ejemplo9', '$2y$12$1MNZ8Wc7j7mJRoQ2ACYzdOsf98Kgf9M1PeFk74rfXrD1xtzqg/Jvy', 'super administrador'),
('EMP_68BB17C9', 'empresa ejemplo', 'J-12345678-4', 'barquisimeto', '04125551041', 'alvarezrafaelat@gmail.com', 'rafael alvarez', '2025-09-05', 'activo', 'C:\\xampp\\htdocs\\DEV\\PHP\\Gestion_inventario\\controller/../uploads/logos/logo_68bb17ca5e55e.jpg', 'sociedad_civil', 'Bolivar', 'America/Caracas', 'admin123', '$2y$12$ZZgfndUb15t1mM8ZFIjwneJ9/YGOxJ410qxv1FMnUAgUlF9Sy3J8.', 'super administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
