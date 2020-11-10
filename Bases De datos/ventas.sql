-- MySQL dump 10.11
--
-- Host: localhost    Database: ventas
-- ------------------------------------------------------
-- Server version	5.0.18-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `juegos`
--
create database ventas;
use ventas;

DROP TABLE IF EXISTS `juegos`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `juegos` (
  `idJuego` int(11) NOT NULL auto_increment,
  `Titulo` varchar(90) collate utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(1000) collate utf8_spanish_ci NOT NULL,
  `Plataforma` varchar(30) collate utf8_spanish_ci NOT NULL,
  `Desarrollador` varchar(40) collate utf8_spanish_ci NOT NULL,
  `Categoria` varchar(30) collate utf8_spanish_ci NOT NULL,
  `Idioma` varchar(90) collate utf8_spanish_ci NOT NULL,
  `Lanzamiento` varchar(90) collate utf8_spanish_ci NOT NULL,
  `Tipo` varchar(30) collate utf8_spanish_ci NOT NULL,
  `Precio` varchar(40) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`idJuego`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `juegos`
--

LOCK TABLES `juegos` WRITE;
/*!40000 ALTER TABLE `juegos` DISABLE KEYS */;
INSERT INTO `juegos` VALUES (1, 'The Walking Dead: Michonne', 'En el primer episodio de Michonne tenemos un personaje capital y de muchas posibilidades rodeado de un argumento que no le hace demasiada justicia. Eso, en un juego de TellTale donde lo único que importa es lo narrativo, es difícil de entender; y al final nuestra capacidad para disfrutar de este In to Deep depende directa y exclusivamente de nuestro interés en la dura y áspera heroína.', 'Xbox360', 'Telltale Games', 'Aventura', 'Textos en español y voces en ingles', '23 de febrero de 2016', 'Pieza', '$600');
INSERT INTO `juegos` VALUES (2, 'Minecraft: Story Mode', 'Minecraft: Story Mode es un juego de Telltale, sí, pero lo disfrutarán mucho más los grandes aficionados a Minecraft que quieran ver otra perspectiva de su juego favorito, que los fans de la compañía cuenta-cuentos por excelencia.', 'Xbox360', 'Telltale Games', 'Aventura', 'Textos en español y voces en inglés', '13 de octubre de 2015', 'Pieza', '$590');
INSERT INTO `juegos` VALUES (3, 'Grand Theft Auto V', 'Rockstar ha sido uno de los grandes triunfadores de la actual generación, y han vuelto a demostrar el por qué con el inabarcable GTA V. Hacer justicia con un análisis a todo lo que ofrece es imposible, y sencillamente calificamos de imprescindible su compra a cualquier usuario amante de las experiencias adultas de calidad.', 'Xbox360', 'RockStar Games', 'Accion', 'Textos en español y voces en inglés', '17 de septiembre de 2013', 'Pieza', '$700');
INSERT INTO `juegos` VALUES (4, 'Destiny', 'Destiny, con sus fortalezas y sus debilidades, es ante todo un gran videojuego de acción con contenidos como para mantenernos entretenidos muchas horas, y con un buen equilibrio entre campaña cooperativa y multijugador competitivo.', 'Xbox360', 'Bungie', 'Accion', 'Textos en español y voces en español', '9 de septiembre de 2014 ', 'Pieza', '$680');
INSERT INTO `juegos` VALUES (5, 'Gears of War 3', 'Con la acción por bandera y con la calidad por absoluta norma. Así llega el épico final de la trilogía Gears of War, con un episodio a la altura de los más grandes títulos de acción de la generación. Montones de horas de entretenimiento, multijugador impecable, campaña dramática y poderosa... ¿Más de lo mismo? Seguro, pero a quién le importa cuando es tan bueno.', 'Xbox360', 'Epic Games', 'Shooter', 'Manual en español, textos en español y voces en español', '20 de septiembre de 2011', 'Pieza', '$750');
INSERT INTO `juegos` VALUES (6, 'Left 4 Dead 2', 'Left 4 Dead 2 dividirá a los usuarios que se acerquen a él. Los sedientos de nuevas masacres Zombie no dudarán en comprarlo y disfrutar de él como con el original, aunque a buen seguro echarán en falta más novedades. ', 'Xbox360', 'Valve', 'Shooter', 'Manual en español, textos en español y voces en español', '19 de noviembre de 2009', 'Pieza', '$590');
INSERT INTO `juegos` VALUES (7, 'Minecraft', 'Cada cierto tiempo aparecen títulos que marcan de forma notoria a la industria del videojuego, y tenemos muy claro que Minecraft es uno de los elegidos. Es verdad que esta adaptación a Xbox 360 está lejos del alcance y las enormes posibilidades de juego del original; pero también es cierto que son muy pocos los títulos capaces de hacerle sombra cuando se trata de divertir.', 'Xbox360', 'Mojang', 'Estrategia', 'Textos en español', '9 de mayo de 2012', 'Pieza', '$800');
INSERT INTO `juegos` VALUES (8, 'XCOM: Enemy Unknown', 'Con Enemy Unknown la saga XCOM vuelve a gozar de la buena forma que los fans de la estrategia por turnos llevaban años demandando. Tras varios capítulos decepcionantes, los creadores de Civilization se hacen cargo de la nueva entrega y logran grandes resultados.', 'Xbox360', 'Firaxis Games', 'Estrategia', 'Manual en español, textos en español y voces en español', '12 de octubre de 2012', 'Pieza', '$645');
INSERT INTO `juegos` VALUES (9, 'Braid', 'Desarrollado por el diseñador experimental Jonathan Blow, ganador del "Independent Games Festival", Braid es un juego que mezcla plataformas 2D con elementos puzle dentro de un sistema de juego que permite manipular el tiempo de la acción.', 'Xbox360', 'Hothead Games, Number None, Inc.', 'Puzzle', 'Español', '6 de agosto de 2008', 'Pieza', '$400');
INSERT INTO `juegos` VALUES (10, 'Puzzle Quest: Galactrix', 'Con Galactrix, la afamada saga Puzzle Quest plantea una nueva ambientación en un mundo de ciencia ficción, pero manteniendo su sabia mezcla de juego puzzle con elementos de rol y estrategia.', 'Xbox360', 'Infinite Interactive', 'Puzzle', 'Español', '24 de febrero de 2009', 'Pieza', '$350');
INSERT INTO `juegos` VALUES (11, 'Beyond: Dos Almas', 'Videojuego de los creadores de Heavy Rain que vuelve a sumergirnos en una aventura adulta que apuesta por el realismo y autenticidad de sus personajes, la emotividad y las consecuencias de nuestros actos.', 'PlayStation 3 y 4', 'Quantic Dream', 'Aventura', 'Textos en español y voces en español', '9 de octubre de 2013 ', 'Pieza', '$710');
INSERT INTO `juegos` VALUES (12, 'Heavy Rain', 'Heavy Rain es le segundo juego desarrollado por Quantic Dream, los afamados creadores de Fahrenheit, una nueva a aventura que sigue el mismo patrón de acción, misterio y estilo cinematográfico de su primera obra.', 'PlayStation 3 y 4', 'Quantic Dream', 'Aventura', 'Textos en español y voces en español', '25 de febrero de 2010', 'Pieza', '$490');
INSERT INTO `juegos` VALUES (13, 'The Last of Us', 'The Last of Us es un videojuego de acción, aventura y supervivencia desarrollado por Naugthy Dog, los creadores de Uncharted. TLoU nos presenta un escenario en el que la población ha sido diezmada por una terrible plaga, y los supervivientes se están matando entre sí por la comida y las armas. Los protagonistas son Joel, y Ellie una valiente adolescente, que deberán colaborar para sobrevivir en su peligroso viaje a través de los EE.UU. ', 'PlayStation 3 y 4', 'Naughty Dog', 'Accion', 'Textos en español y voces en español', '14 de junio de 2013', 'Pieza', '$600');
INSERT INTO `juegos` VALUES (14, 'Metal Gear Solid V: The Phantom Pain', 'La última aventura de Snake bajo las órdenes de Hideo Kojima, tras la controvertida salida de éste de Konami, se cuenta entre los episodios más arriesgados y potentes de la franquicia de espionaje, ciencia ficción y, ahora, también mundo abierto. Acompañado por personajes como Quiet, Ocelot o el ya entrañable perro, el modo historia nos permite escoger quién deseamos que nos acompañe en sus distintas misiones, puesto que cada uno de los personajes tiene sus habilidades propias. ', 'PlayStation 3 y 4', 'Kojima Productions', 'Accion', 'Textos en español y voces en inglés', '1 de septiembre de 2015', 'Pieza', '$850');
INSERT INTO `juegos` VALUES (15, 'Uncharted 3: Drake''s Deception', 'Tercera entrega del juego de acción y aventura exclusivo de PlayStation 3, protagonizada por el carismático buscador de reliquias, Nathan Drake.', 'PlayStation 3 ', 'Naughty Dog', 'Shooter', 'Manual en español, textos en español y voces en español', '2 de noviembre de 2011', 'Pieza', '$650');
INSERT INTO `juegos` VALUES (16, 'Red Dead Redemption', 'Sandbox clásico firmado por Rockstar, creadores de la saga Grand Theft Auto, que, en esta ocasión, traslada sus fórmulas de acción y libertad total a un sugerente telón de fondo relacionado con el salvaje Oeste. En el videojuego somos John Marston, todo un icono ya de los anti-héroes de la historia del entretenimiento interactivo, que se ve involucrado en una historia de venganza y justicia contra un grupo de bandoleros para proteger a su familia en peligro. ', 'PlayStation 3', 'RockStar Games', 'Shooter', 'Manual en español, textos en español y voces en inglés', '21 de mayo de 2010', 'Pieza', '$350');
INSERT INTO `juegos` VALUES (17, 'FIFA 15: Ultimate Team', 'Modo extra de juego incluido en FIFA 15, que permite a los jugadores jugar con cromos virtuales y hacer equipos de ensueño con los hombres, nombres y equipaciones que deseen. Hay un sistema de compra-venta virtual en el que participan amantes del fútbol de todo el mundo.', 'PlayStation 3 y 4', 'EA Sports', 'Estrategia', 'Textos en español y voces en español', '25 de septiembre de 2014', 'Pieza', '$630');
INSERT INTO `juegos` VALUES (18, 'Plants vs. Zombies', 'Una inmensa horda de divertidos zombis se dispone a invadir tu casa, y tu única línea de defensa es un arsenal de 49 plantas "atrapazombis". Este es el divertido plateamiento de este interesante juego mezcla de estrategia, acción y puzle.', 'PlayStation 3', 'PopCap', 'Estrategia', 'Textos en español', '9 de febrero de 2011', 'Pieza', '$245');
INSERT INTO `juegos` VALUES (19, 'Capitán América: Super Soldier', 'Videojuego basado en la nueva película del Superhéroe del universo Marvel, Capitán América en el que se nos plantea una experiencia con elementos de plataformas y movimientos acrobáticos, en el que el escudo de nuestro héroe tomará un papel fundamental, a la hora de enfrentarnos tanto a los enemigos, como a los retos y puzles que se nos planteen.', 'PlayStation 3', 'SEGA', 'Puzzle', 'Español', '15 de julio de 2011', 'Pieza', '$300');
INSERT INTO `juegos` VALUES (20, 'Portal 2', 'Segunda entrega del exitoso juego de Valve, Portal, el original FPS que nos plantea una hábil sucesión de puzzles que deben ser resueltos mediante la creación de portales para viajar de una estancia a otra.', 'PlayStation 3', 'Valve', 'Puzzle', 'Manual en español, textos en español y voces en español', '19 de abril de 2011', 'Pieza', '$390');
INSERT INTO `juegos` VALUES (21, ' Phoenix Wright: Ace Attorney', 'Phoenix Wright se resiste al retiro de la abogacía. Sexta entrega de la mítica franquicia de investigación portátil.', 'Nintendo 3DS', 'Capcom', 'Aventura', 'Textos en español y voces en inglés', '2016 (Por determinar)', 'Pieza', '$400');
INSERT INTO `juegos` VALUES (22, 'Zero Time Dilemma', 'Zero Time Dilemma es la tercera entrega de la querida saga de aventuras interactivas que contará con el regreso de cara conocidas, múltiples finales, cinemáticas dobladas y puzles vitales para la supervivencia en el juego. En el videojuego los jugadores deben escapar de un lugar misterioso, un objetivo que implicará tomar difíciles decisiones.', 'Nintendo 3DS', 'ChunSoft', 'Aventura', 'Textos en español y voces en inglés', '28 de junio de 2016', 'Pieza', '$625');
INSERT INTO `juegos` VALUES (23, 'Kirby: Planet Robobot', 'Videojuego de plataformas protagonizado por el simpático Kirby, que nos presenta a una Dream Land mecanizada por los invasores a los que Kirby no duda en plantar cara usando la propia tecnología invasora. Kirby: Planet Robobot para 3DS cuenta con cooperativo para cuatro jugadores, y además es compatible con todas las figuras amiibo, algunas de las cuales otorgan a Kirby habilidades especiales.', 'Nintendo 3DS', 'HAL Laboratory, Inc.', 'Accion', 'Textos en español', '10 de junio de 2016', 'Pieza', '$600');
INSERT INTO `juegos` VALUES (24, 'Hyrule Warriors: Legends', 'El intenso Hyrule Warriors de Wii U se adapta a Nintendo 3DS conservando intacta su esencia jugable, que combina la acción hack ‘n slash propia de los Dynasty Warriors con el universo Zelda. El título trae consigo dos nuevos personajes sacados directamente del clásico Wind Waker: Tetra y el rey de Hyrule, además de los 4 DLCs del juego de Wii U y nuevos enemigos.', 'Nintendo 3DS', 'Omega Force', 'Accion', 'Textos en español y voces en inglés', '24 de marzo de 2016', 'Pieza', '$780');
INSERT INTO `juegos` VALUES (25, 'Resident Evil: Revelations', 'Nuevo episodio de la saga Resident Evil que en esta entrega presenta un regreso al género "survival horror".', 'Nintendo 3DS', 'Capcom', 'Shooter', 'Manual en español, textos en español y voces en español', '27 de enero de 2012 ', 'Pieza', '$710');
INSERT INTO `juegos` VALUES (26, 'Metroid Prime: Federation Force', 'Vídeojuego de acción cooperativa para 4 jugadores basado en misiones. Su propuesta cuenta también con Blastball (un original deporte futurista parecido al fútbol) como parte de su fórmula jugable entre encargo y encargo, elemento que estuvo incluido en el Nintendo World Championships. ', 'Nintendo 3DS', 'Next Level Games', 'Shooter', 'Manual en español, textos en español y voces en español', '2 de septiembre de 2016 ', 'Pieza', '$890');
INSERT INTO `juegos` VALUES (27, 'Fire Emblem Fates: Conquista', 'Tras el magnifico Fire Emblem: Awakening, Nintendo 3DS recibe la segunda entrega para Nintendo 3DS de la popular serie Fire Emblem, que en esta ocasión llega en dos videojuegos distintos (Estirpe y Conquista) más un DLC (Revelación), con diferentes campañas, misiones e historias.', 'Nintendo 3DS', 'Intelligent Systems', 'Estrategia', 'Textos en español y voces en inglés', '20 de mayo de 2016', 'Pieza', '$510');
INSERT INTO `juegos` VALUES (28, 'Fire Emblem: Awakening', 'Nueva entrega dentro de la reputada serie Fire Emblem que apuesta por un cruce entre tradición y novedades para darnos más rol táctico, en esta ocasión acompañado por el potencial 3D de la portátil de Nintendo.', 'Nintendo 3DS', 'Intelligent Systems', 'Estrategia', 'Manual en español, textos en español y voces en inglés', ' 19 de abril de 2013', 'Pieza', '$445');
INSERT INTO `juegos` VALUES (29, 'Profesor Layton y el Legado de los Ashalanti', 'Sexta aventura protagonizada por el carismático detective creado por level 5. En este tercer juego de la segunda trilogía del profesor Layton, el avispado erudito viajará por el mundo resolviendo enigmas de una civilización antigua.', 'Nintendo 3DS', 'Level 5', 'Puzzle', 'Textos en español y voces en español', '8 de noviembre de 2013', 'Pieza', '$520');
INSERT INTO `juegos` VALUES (30, 'Puzzle & Dragons Z & Super Mario Bros', 'El fenómeno puzzle japonés se alía con la franquicia Super Mario en un nuevo episodio exclusivo de Nintendo 3DS. El juego incluye la versión Z del exitoso Puzzle & Dragons, así como la Super Mario Bros. Edition especialmente diseñada para 3DS.', 'Nintendo 3DS', 'GungHo', 'Puzzle', 'Textos en español', '8 de mayo de 2015 ', 'Pieza', '$560');

/*!40000 ALTER TABLE `juegos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-09  3:41:30