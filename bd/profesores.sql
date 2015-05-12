-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 23-04-2012 a las 21:36:23
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `etar`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comentario`
-- 

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `email` varchar(100) collate utf8_spanish_ci NOT NULL,
  `comentario` text collate utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `comentario`
-- 

INSERT INTO `comentario` VALUES (1, 'cesar', 'cesar3r2@gmail.com', 'comentario', '2012-04-20', '13:33:03');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `noticias`
-- 

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `fecha` date default NULL,
  `titulo` varchar(250) character set utf8 collate utf8_spanish_ci default NULL,
  `descripcion` text character set utf8 collate utf8_spanish_ci,
  `link` varchar(250) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `noticias`
-- 

INSERT INTO `noticias` VALUES (1, '2012-04-23', 'Instalan Festival Latinoamericano de Software Libre en Aragua.', NULL, NULL);
INSERT INTO `noticias` VALUES (2, '2012-04-23', 'Este 13 de abril se inauguran 2 Infocentros Comunales.', NULL, NULL);
INSERT INTO `noticias` VALUES (3, '2012-04-23', '23 de abril día del libro y del derecho de autor.', NULL, NULL);
INSERT INTO `noticias` VALUES (4, '2012-04-23', 'Con éxito culminó la Misión Saber y Trabajo en Amazonas.', NULL, NULL);
INSERT INTO `noticias` VALUES (5, '2012-04-23', 'Entregada dotación para todas las aldeas universitarias de Misión Sucre en el estado Nueva Esparta.', NULL, NULL);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuario`
-- 

CREATE TABLE `usuario` (
  `usuario` varchar(25) collate utf8_spanish_ci NOT NULL,
  `clave` varchar(25) collate utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) collate utf8_spanish_ci default NULL,
  PRIMARY KEY  (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `usuario`
-- 

INSERT INTO `usuario` VALUES ('cesar', '123', 'CESAR RAMOS');