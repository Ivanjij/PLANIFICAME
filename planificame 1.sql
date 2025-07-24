-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2025 a las 01:55:52
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
-- Base de datos: `planificame`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`) VALUES
(1, 'Habilidades Blandas', 'Cursos relacionados con habilidades interpersonales y comunicativas.'),
(2, 'Habilidades Técnicas', 'Cursos relacionados con el conocimiento técnico específico en áreas profesionales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_url` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_url`, `category_id`) VALUES
(1, 'Curso de Comunicación Efectiva', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Comunicacion_Efectiva.php', 1),
(2, 'Curso de Mejorar la comunicación en equipo', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Mejorar_la_comunicacion_en_equipo.php', 1),
(3, 'Curso de Presentaciones exitosas y claras', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Presentaciones_exitosas_y_claras.php', 1),
(4, 'Curso de Trabajo en Equipo', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Trabajo_en_Equipo.php', 1),
(5, 'Curso de Colaboracion y resolucion de conflictos', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Colaboracion_y_resolucion_de_conflictos.php', 1),
(6, 'Curso de Trabajo multidisciplinario eficaz', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Trabajo_multidisciplinario_eficaz.php', 1),
(7, 'Curso de Liderazgo', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Liderazgo.php', 1),
(8, 'Curso de Liderazgo en equipos de alto rendimiento', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Liderazgo_en_equipos_de_alto_rendimiento.php', 1),
(9, 'Curso de Toma de decisiones bajo presion', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Toma_de_decisiones_bajo_presion.php', 1),
(10, 'Curso de Gestion del Tiempo', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Gestion_del_Tiempo.php', 1),
(11, 'Curso de Priorizacion y manejo de tareas', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Priorizacion_y_manejo_de_tareas.php', 1),
(12, 'Curso de Equilibrio entre trabajo y vida personal', 'http://localhost/PLANIFICAME/views/courses/habilidadesBlandas/Curso_de_Equilibrio_entre_trabajo_y_vida_personal.php', 1),
(13, 'Curso de Desarrollo de Habilidades Técnicas', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Desarrollo_de_Habilidades_Tecnicas.php', 2),
(14, 'Curso de Domina tus habilidades tecnicas clave', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Domina_tus_habilidades_tecnicas_clave.php', 2),
(15, 'Curso de Actualizacion continua en tu area de trabajo', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Actualizacion_continua_en_tu_area_de_trabajo.php', 2),
(16, 'Curso de Gestion de Informacion', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Gestion_de_Informacion.php', 2),
(17, 'Curso de Organizacion y estructuracion de datos', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Organizacion_y_estructuracion_de_datos.php', 2),
(18, 'Curso de Optimización de procesos informaticos', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Optimización_de_procesos_informaticos.php', 2),
(19, 'Curso de Herramientas y Tecnologias Profesionales', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Herramientas_y_Tecnologias_Profesionales.php', 2),
(20, 'Curso de Uso eficiente de herramientas digitales', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Uso_eficiente_de_herramientas_digitales.php', 2),
(21, 'Curso de Adaptacion a nuevas tecnologias', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Adaptacion_a_nuevas_tecnologias.php', 2),
(22, 'Curso de Seguridad y Proteccion de Informacion', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Seguridad_y_Proteccion_de_Informacion.php', 2),
(23, 'Curso de Proteccion de datos y recursos', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Proteccion_de_datos_y_recursos.php', 2),
(24, 'Curso de Implementacion de protocolos de seguridad', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Implementacion_de_protocolos_de_seguridad.php', 2),
(25, 'Curso de Optimización de Procesos', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Optimización_de_Procesos.php', 2),
(26, 'Curso de Mejora continua en procesos profesionales', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Mejora_continua_en_procesos_profesionales.php', 2),
(27, 'Curso de Automatizacion y eficiencia operativa', 'http://localhost/PLANIFICAME/views/courses/habilidadesTecnicas/Curso_de_Automatizacion_y_eficiencia_operativa.php', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_requested` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre_completo`, `email`, `password`, `fecha_registro`) VALUES
(4, 'Fernando Yair Luna Luna', 'badfaceyairrx@gmail.com', '$2y$10$9m7CSYt97bHqoRpqt4604egH5ah4tu7YS799s6U4CsoVlbMuOAtzS', '2025-06-25 22:28:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_courses`
--

CREATE TABLE `user_courses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user_courses`
--

INSERT INTO `user_courses` (`id`, `user_id`, `course_id`, `date_added`) VALUES
(36, 4, 1, '2025-06-30 23:46:21'),
(37, 4, 1, '2025-06-30 23:50:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_course_progress`
--

CREATE TABLE `user_course_progress` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `progress` int(3) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indices de la tabla `user_course_progress`
--
ALTER TABLE `user_course_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `user_course_progress`
--
ALTER TABLE `user_course_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `user_courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_courses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_course_progress`
--
ALTER TABLE `user_course_progress`
  ADD CONSTRAINT `user_course_progress_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_course_progress_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
