-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2023 a las 14:13:06
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
-- Base de datos: `bibliotech`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `image` varchar(200) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `author_name` varchar(10) NOT NULL,
  `author_lastname` varchar(20) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`image`, `isbn`, `author_name`, `author_lastname`, `title`, `description`) VALUES
('', '978-2-266-18276-8', 'Katherine', 'Neville', 'El Ocho', 'Catherine Velis, una alta ejecutiva experta en ordenadores, se ve atrapada sin quererlo en la búsqueda de un legendario ajedrez que perteneció a Carlomagno.'),
('', '9782709628204', 'Arthur ', 'Golden', 'Memorias de una geisha', 'Memorias de una geisha es una novela de Arthur Golden, publicada en 1997. La novela cuenta la historia de una geisha que trabajaba en Kioto antes de la Segunda Guerra Mundial.'),
('', '9788432239939', ' Rosa ', 'Montero', 'La ridícula idea de no volver a verle', 'En estas páginas, la autora, habla de la superación del dolor, de las relaciones entre hombres y mujeres, del esplendor del sexo, de la buena muerte y de la bella vida, de la ciencia y de la ignorancia, de la fuerza salvadora de la literatura y de la sabiduría de quienes aprenden a disfrutar de la existencia con plenitud y con ligereza.'),
('', '9788498381498', 'Antoine ', 'de Saint-Exupéry.', 'El Principito', 'El Principito es un cuento poético que viene acompañado de ilustraciones hechas con acuarelas por el mismo Saint-Exupéry. En él, un piloto se encuentra perdido en el desierto del Sahara después de que su avión sufriera una avería, pero para su sorpresa, es allí donde conoce a un pequeño príncipe proveniente de otro planeta.'),
('', '9788499088044', 'Ildefonso ', 'Falcones', 'La catedral del mar', 'La catedral del mar es la primera novela del abogado y escritor español Ildefonso Falcones. Se escribió originalmente en castellano durante cuatro años consecutivos, y se publicó en 2006. Narra la vida de la Barcelona del siglo XIV. La historia tiene como nexo o tema central la construcción de la iglesia de Santa María del Mar. Su continuación, editada en 2016, es Los herederos de la tierra.\r\n\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
