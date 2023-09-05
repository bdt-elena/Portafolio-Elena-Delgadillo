-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-09-2023 a las 04:23:34
-- Versión del servidor: 8.0.29
-- Versión de PHP: 8.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art_edit_projects`
--

CREATE TABLE `art_edit_projects` (
  `id` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `art_edit_projects`
--

INSERT INTO `art_edit_projects` (`id`, `nombre`, `id_categoria`) VALUES
(1, 'edit.jpg', 1),
(2, 'edit2.png', 1),
(3, 'edit3.jpg', 1),
(4, 'edit4.jpg', 1),
(7, 'dibujo.png', 2),
(8, 'dibujo2.jpg', 2),
(9, 'dibujo3.png', 2),
(10, 'dibujo4.png', 2),
(11, 'dibujo5.png', 2),
(12, 'dibujo6.jpg', 2),
(13, 'dibujo7.png', 2),
(14, 'dibujo8.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'edicion'),
(2, 'ilustracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `id_project` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `imagen`, `id_project`) VALUES
(1, 'news1', 1),
(2, 'news2', 1),
(3, 'savage2', 3),
(4, 'savage3', 3),
(5, 'parkipay2', 2),
(6, 'parkipay3', 2),
(7, 'cafe2', 4),
(8, 'cafe3', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `funcionalidad` text NOT NULL,
  `tecnologias` varchar(300) NOT NULL,
  `github` varchar(300) DEFAULT NULL,
  `netlify` varchar(300) DEFAULT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `project`
--

INSERT INTO `project` (`id`, `nombre`, `descripcion`, `funcionalidad`, `tecnologias`, `github`, `netlify`, `imagen`) VALUES
(1, 'News In Classic', 'News In Classic es un portal de noticias donde los usuario podrán leer noticias de multiples categorías (internacionales, locales, deportes, entre otros). Este proyecto fue realizado en la Universidad con herramientas como PHP, Bootstrap, JavaScript, etc. ', 'La pagina cuenta con registro de usuarios; inicio de sesión; comentarios y likes;  y busqueda y ordenamiento de noticias por categoría. Los administradores pueden agregar editores para que estos puedan publicar noticias, pero necesitan pasar por una revisión del adminstrador para ser publicadas o rechazadas.', 'PHP, CSS, Bootstrap, HTML, JavaScript, MySQL', 'https://github.com/bdt-elena/News-In-Classic', NULL, 'news'),
(2, 'Parkipay', 'Parkipay es un servicio web para que los conductores puedan aparcar un sitio de manera totalmente digital para estacionarse de manera mas rápida y eficiente en alguna sucursal, local o tienda que quiera visitar. ', 'Los usuarios se registran e inician sesión, y una vez que tienen una cuenta pueden buscar estacionamientos y reservar en ellos. Se generará un QR cada que se haga una reservación, que se podrá utilizar una vez que llegue a su destino. Los usuario tambien pueden dejar comentarios en las sucursales que visiten para que otras personas puedan verlo. Los administradores se encargaran de agregar, eliminar y editar estacionamientos.', 'JavaScript, ReactJS, Bootstrap, MongoDB, HTML, CSS ', 'https://github.com/bdt-elena/Parkipay', NULL, 'parkipay'),
(3, 'Savage Mind Band', 'Pagina web dedicada a la banda de Heavy Metal de Monterrey, Savage Mind. Para conocer a sus integrantes, escuchar sus canciones, encontrar sus redes sociales y más.', 'El sitio cuenta con un navegador, donde nos puede direccionar a ver el apartado para integrantes, eventos, multimedia, discografía y la pantalla de inicio. La multimedia tiene un submenú para vídeos y otro para fotos. En discografía se podrá escuchar una muestra de las canciones que redireccionan a Spotify.', 'SASS, HTML, JavaScript', 'https://github.com/bdt-elena/SavageMind-BandPage', 'https://savagemindband-f8865f.netlify.app/', 'savage'),
(4, 'Blog de Café', 'Blogs sobre café, cursos y talleres. Hecho con flexbox y grid, una práctica de Interfaz responsiva y minimalista.', 'El sitio cuenta con un navegador simple pero completo. Este proyecto es unicamente una recreación con HTML y SASS del curso de Desarrollo Web.', 'SASS, HTML', NULL, 'https://benevolent-concha-23ccce.netlify.app/', 'cafe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsive_images`
--

CREATE TABLE `responsive_images` (
  `id` int NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `id_project` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `responsive_images`
--

INSERT INTO `responsive_images` (`id`, `imagen`, `id_project`) VALUES
(1, 'parkipay_mobile', 2),
(2, 'parkipay_mobile2', 2),
(3, 'parkipay_mobile3', 2),
(4, 'parkipay_mobile4', 2),
(5, 'savage_mobile', 3),
(6, 'savage_mobile2', 3),
(7, 'savage_mobile3', 3),
(8, 'savage_mobile4', 3),
(9, 'cafe_mobile', 4),
(10, 'cafe_mobile2', 4),
(11, 'cafe_mobile3', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `art_edit_projects`
--
ALTER TABLE `art_edit_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`);

--
-- Indices de la tabla `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `responsive_images`
--
ALTER TABLE `responsive_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_project` (`id_project`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `art_edit_projects`
--
ALTER TABLE `art_edit_projects`
  ADD CONSTRAINT `art_edit_projects_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `responsive_images`
--
ALTER TABLE `responsive_images`
  ADD CONSTRAINT `responsive_images_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
