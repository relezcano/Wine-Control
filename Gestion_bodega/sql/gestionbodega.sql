-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2018 a las 18:33:20
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionbodega`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `dni` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `reason` varchar(60) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `idEmploy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`id`, `name`, `lastName`, `phone`, `email`, `dni`, `address`, `type`, `reason`, `obs`, `idEmploy`) VALUES
(1, 'Ramiro', 'Lezcano', '2944632918', 'relezcano369@gmail.com', '20-36616769-3', 'Martin Garcia 3624', 'Consumidor Final', 'La carroza', 'asdasasdasdasdasdasdasdasdasdsdasdasdasdas', 1),
(2, 'Carlos', 'Lopez', '24234235352', 'ejemplo@gmail.com', '642684685468', ' asdkad 1132', 'Distribuidor', 'el gnomo', 'kdhgsgsjgcabsdjgasbkjgskbjhasbgdvas\r\nasiugcahoiguahgociudhgcaidugch\r\nasdicguahdnogicaudhncogiducngaoidugcaiu', 2),
(5, 'Esteban', 'Quito', '486548965', 'estebanquito@gmail.com', '30-684654426-7', 'saravan 754', 'Comercio (Vinoteca, restaurant, otros.)', 'Vinoteca Uvita :P', 'sakjnaskjdnasdjnasodnaspobnasovnasovnasovasoivasodiasdofksaf\r\nasdfoasdnfasodfnasodfnasodfasodfknasdf\r\nsadnfoasdjnfsakdjfnas`dofjnsaodfjnasdofnasd', 1),
(6, 'Sergio', 'Carcamo', '3465835673', 'ejemplo2@gmail.com', '20-12312123123-8', 'sdfgsdfg 64165', 'Consumidor Final', '', 'ghbjnasdfbhnjfsdhnjfdshnsdfbsdknfbsjdnbdsobdsfsdf\r\ndsvsdvkdjsfnvdksjvnsd\r\nsdfvsdfvsdvdfsvdfvdsf', 2),
(7, 'Elena', 'Pustula', '154813805', 'epustula@gmail.com', '5737969', 'Martin Garcia 3624', 'Consumidor Final', '', 'Mi vieja', 1),
(8, 'Roberto', 'tototo', '23253523', 'roberto@gmail.com', '2545786545', 'saragoga 585', 'Consumidor Final', '', 'jaghakbibaiaiuvasiuvnapsivans asuihvaisuvnaisurv nas a uasi', 1),
(9, 'Pedro', 'Clancey', '123124234', 'pepelui@gmail.com', '32458759', 'saragoza mucho 666', 'Consumidor Final', '', 'lalaksldaskdasflkvnoaincaiowjd adjas doaksm lakmsdi asdokasm dokam sda\r\ns\r\ndas a\r\nsdasda\r\nsdasdasdasd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(11) NOT NULL,
  `transport` varchar(100) DEFAULT NULL,
  `dateDis` date DEFAULT NULL,
  `dateAr` date DEFAULT NULL,
  `send` varchar(50) DEFAULT NULL,
  `recive` varchar(50) DEFAULT NULL,
  `guide` varchar(35) DEFAULT NULL,
  `amountPack` int(20) DEFAULT NULL,
  `origin` varchar(60) DEFAULT NULL,
  `destination` varchar(60) DEFAULT NULL,
  `commission` varchar(20) DEFAULT NULL,
  `obs` varchar(255) NOT NULL,
  `idEmploy` int(11) NOT NULL,
  `idRecive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispatch`
--

INSERT INTO `dispatch` (`id`, `transport`, `dateDis`, `dateAr`, `send`, `recive`, `guide`, `amountPack`, `origin`, `destination`, `commission`, `obs`, `idEmploy`, `idRecive`) VALUES
(1, 'Imaz', '2018-02-04', '2018-02-05', 'Ramiro', 'Jorge', '24626262262626', 7, 'bariloche', 'mar del plata', '$8000', 'asdasdasdasdadasdasdasdasdasdasdasdasdasdasdasdadadasdasdadasdasdasdasdasdasdasdasdasdasdasd', 1, 2),
(5, 'Ramabus', '2018-02-04', '2018-02-05', 'Ramiro', 'Oscar', '213456789456', 1, 'bariloche', 'mar del plata', '$10000', 'lalalalalalalalalalala', 1, 3),
(6, 'Cruz del sur', '2018-02-06', '2018-02-08', 'Jorge', 'Ramiro', '2464249849', 1, 'bariloche', 'mar', '$10000', 'asdasdasdasdasdasdasdas', 2, 1),
(7, 'Nomade', '2018-02-04', '2018-02-05', 'Oscar', 'Ramiro', '123456789987654321', 10, 'Bariloche', 'MDQ', '$8000', 'nos vamossssssssss!!!!!', 3, 1),
(8, 'Imaz', '2018-02-05', '2018-02-08', 'Ramiro', 'Oscar', '5398426846428', 10, 'bariloche', 'mendoza', '$15000', 'gbxfnxncvncvnhg', 1, 3),
(9, 'Imaz', '2018-02-05', '2018-02-06', 'Jorge', 'Oscar', '246924696924', 5, 'bariloche', 'mendoza', '$5000', 'akdbsdkbnsdifhvbsidvfbsdihnvfpsdijvn!!!!!\"\"Â·\"$\"Â·%$Â·&Â·&%/%$&%$', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `winery` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `phone`, `email`, `pass`, `admin`, `winery`) VALUES
(1, 'Ramiro', 'Lezcano', '2944632918', 'relezcano369@gmail.com', 'pageplant', 1, 0),
(2, 'Jorge', 'Lezcano', '2944519915', 'patagonia.cecchin@gmail.com', 'albatross', 1, 0),
(3, 'Oscar', 'Cecchin', '254654365456', 'bodegacecchin@gmail.com', '123456', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
