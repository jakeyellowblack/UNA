-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2020 a las 09:35:49
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `monto` float NOT NULL,
  `existencia` int(11) NOT NULL,
  `Fabrica_id` int(11) NOT NULL,
  `f_existencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `descripcion`, `monto`, `existencia`, `Fabrica_id`, `f_existencia`) VALUES
(1, 'nibh. Donec est mauris, rhoncus id, mollis ne', 30185.2, 654, 1, 99980),
(2, 'pharetra. Nam ac nulla. In tincidunt congue t', 74510.1, 721, 2, 78653),
(3, 'Mauris ut quam vel sapien imperdiet', 3027.56, 174, 3, 39130),
(4, 'libero. Integer in magna. Phasellus dolor eli', 54710.3, 988, 4, 98327),
(5, 'penatibus et magnis dis parturient montes,', 89744.1, 156, 5, 35864),
(6, 'adipiscing non, luctus sit amet, faucibus', 40708.8, 646, 6, 76427),
(7, 'vel, mauris. Integer sem elit, pharetra ut, p', 38040.9, 731, 7, 48420),
(8, 'quis massa. Mauris vestibulum, neque sed dict', 68926.4, 427, 8, 17445),
(9, 'dolor vitae dolor. Donec fringilla. Donec', 84030.4, 646, 9, 58918),
(10, 'risus. Nulla eget metus eu erat semper rutrum', 32538.4, 746, 10, 79498),
(11, 'enim. Curabitur massa. Vestibulum accumsan ne', 86686.9, 43, 11, 91289),
(12, 'Nunc mauris. Morbi non sapien molestie orci t', 68444, 741, 12, 70059),
(13, 'et magnis dis parturient montes, nascetur rid', 47433.6, 217, 13, 2788),
(14, 'sociis natoque penatibus et magnis dis partur', 44351.8, 517, 14, 56118),
(15, 'sit amet massa. Quisque porttitor eros nec te', 50870.4, 894, 15, 63538),
(16, 'dictum. Phasellus in felis. Nulla tempor augu', 35731.9, 562, 16, 8603),
(17, 'Vestibulum ante ipsum primis in', 28399.7, 60, 17, 68103),
(18, 'Aliquam tincidunt, nunc', 73347, 91, 18, 2339),
(19, 'cursus et, magna. Praesent interdum ligula eu', 6347.15, 447, 19, 3543),
(20, 'in', 50635.5, 660, 20, 92603),
(21, 'ligula. Donec luctus', 81518.5, 158, 21, 5110),
(22, 'gravida non, sollicitudin a,', 14460.1, 763, 22, 83046),
(23, 'cursus vestibulum. Mauris magna. Duis', 332.09, 593, 23, 76221),
(24, 'amet, dapibus id, blandit at, nisi. Cum', 20703.9, 930, 24, 99092),
(25, 'Nunc ac sem ut dolor dapibus gravida. Aliquam', 18962.3, 718, 25, 40565),
(26, 'commodo hendrerit. Donec porttitor tellus non', 23276.2, 612, 26, 91837),
(27, 'ac nulla.', 97031.1, 47, 27, 30151),
(28, 'mi tempor lorem, eget mollis lectus pede et r', 30066.8, 507, 28, 5141),
(29, 'arcu eu odio tristique pharetra. Quisque ac l', 71889.9, 438, 29, 47130),
(30, 'felis purus ac tellus. Suspendisse sed dolor.', 72914.5, 496, 30, 67393),
(31, 'nec, leo. Morbi neque tellus, imperdiet non, ', 24384, 131, 31, 59387),
(32, 'nulla ante, iaculis nec, eleifend non, dapibu', 88772.2, 205, 32, 73671),
(33, 'amet,', 56983, 401, 33, 34528),
(34, 'Maecenas malesuada fringilla est. Mauris eu t', 54224.2, 535, 34, 78466),
(35, 'per conubia nostra, per inceptos hymenaeos. M', 39689.1, 139, 35, 92388),
(36, 'molestie tellus. Aenean egestas hendrerit neq', 34310.3, 434, 36, 36815),
(37, 'natoque penatibus et magnis dis parturient mo', 40828.9, 849, 37, 52420),
(38, 'risus. Donec egestas. Aliquam nec enim. Nunc ', 21936.3, 343, 38, 15604),
(39, 'Cum sociis natoque penatibus et magnis dis pa', 93751.3, 240, 39, 4270),
(40, 'Pellentesque ultricies dignissim lacus.', 58333.4, 593, 40, 38298),
(41, 'interdum. Curabitur dictum. Phasellus in feli', 71542.1, 146, 41, 42231),
(42, 'elit elit fermentum risus, at fringilla purus', 89709.9, 372, 42, 63681),
(43, 'sed, sapien. Nunc pulvinar arcu et pede. Nunc', 4556.83, 478, 43, 91256),
(44, 'a, malesuada id, erat. Etiam vestibulum massa', 77447.7, 245, 44, 14993),
(45, 'enim consequat purus. Maecenas libero est, co', 28299.4, 335, 45, 46728),
(46, 'elit, pretium et, rutrum non, hendrerit id, a', 61970.2, 320, 46, 93569),
(47, 'enim. Curabitur massa. Vestibulum accumsan ne', 82723.8, 195, 47, 90595),
(48, 'dolor, nonummy ac, feugiat non, lobortis quis', 41450, 260, 48, 47569),
(49, 'Aliquam tincidunt, nunc ac mattis ornare, lec', 73247.6, 942, 49, 97760),
(50, 'interdum. Nunc sollicitudin commodo ipsum. Su', 90817.7, 642, 50, 21355),
(51, 'turpis egestas. Aliquam fringilla cursus puru', 9509.92, 913, 51, 73591),
(52, 'eros. Nam consequat dolor', 8734.02, 903, 52, 97943),
(53, 'sapien, gravida non, sollicitudin a, malesuad', 5667.51, 603, 53, 94402),
(54, 'suscipit, est ac facilisis facilisis, magna t', 59358.7, 621, 54, 51039),
(55, 'consectetuer, cursus et, magna. Praesent inte', 93466.7, 467, 55, 16214),
(56, 'lorem vitae odio sagittis semper. Nam tempor ', 21811.1, 309, 56, 24340),
(57, 'primis in faucibus', 43290.5, 83, 57, 50449),
(58, 'turpis vitae', 76488.5, 356, 58, 75136),
(59, 'convallis in, cursus et, eros. Proin ultrices', 15468.2, 730, 59, 51294),
(60, 'volutpat. Nulla facilisis. Suspendisse commod', 65524.4, 384, 60, 55503),
(61, 'rutrum lorem ac risus. Morbi metus. Vivamus e', 7135.51, 423, 61, 52269),
(62, 'mi. Aliquam gravida mauris ut mi. Duis risus ', 87483.6, 751, 62, 58839),
(63, 'est. Mauris eu turpis. Nulla aliquet. Proin v', 87766.5, 812, 63, 53231),
(64, 'consequat nec,', 68685.1, 576, 64, 1327),
(65, 'leo, in lobortis tellus justo sit amet nulla.', 92831, 967, 65, 95383),
(66, 'Aliquam gravida mauris ut mi. Duis risus odio', 70127, 913, 66, 241),
(67, 'Integer vulputate, risus a ultricies adipisci', 99799.9, 493, 67, 22346),
(68, 'Aliquam erat volutpat. Nulla dignissim. Maece', 99147.3, 196, 68, 11778),
(69, 'dapibus ligula. Aliquam erat volutpat. Nulla ', 97077.1, 788, 69, 15118),
(70, 'Vestibulum accumsan neque et', 81010.4, 195, 70, 12062),
(71, 'Phasellus ornare. Fusce mollis.', 8758.01, 993, 71, 76640),
(72, 'scelerisque scelerisque dui. Suspendisse ac m', 48897.4, 716, 72, 58423),
(73, 'non justo. Proin non massa non ante bibendum ', 50550.4, 453, 73, 92066),
(74, 'orci. Ut sagittis lobortis mauris. Suspendiss', 96579.3, 452, 74, 20746),
(75, 'massa. Vestibulum accumsan neque et nunc. Qui', 28350.5, 866, 75, 89794),
(76, 'odio tristique pharetra. Quisque ac libero ne', 41695.6, 770, 76, 56822),
(77, 'pharetra, felis eget varius ultrices, mauris ', 15540.9, 836, 77, 57759),
(78, 'dapibus gravida. Aliquam tincidunt, nunc ac m', 9055.51, 493, 78, 52319),
(79, 'laoreet lectus quis massa. Mauris vestibulum,', 15228.3, 312, 79, 64051),
(80, 'sit amet, consectetuer adipiscing elit. Curab', 33249.4, 164, 80, 39206),
(81, 'fringilla mi lacinia mattis. Integer eu lacus', 5134.95, 35, 81, 90062),
(82, 'mauris ipsum porta elit, a feugiat tellus lor', 44655.6, 135, 82, 31051),
(83, 'Duis', 55654.7, 113, 83, 5479),
(84, 'cursus non, egestas', 29428.8, 550, 84, 15556),
(85, 'metus. In nec orci. Donec nibh. Quisque nonum', 89429.3, 63, 85, 20871),
(86, 'vitae semper egestas, urna justo faucibus lec', 39352.8, 730, 86, 24148),
(87, 'elit, a feugiat', 29468.1, 381, 87, 14346),
(88, 'Nam nulla magna, malesuada vel, convallis in,', 65057.4, 564, 88, 84248),
(89, 'ipsum ac mi eleifend egestas. Sed pharetra, f', 71009.7, 329, 89, 44820),
(90, 'odio. Nam interdum enim non nisi. Aenean eget', 9908.76, 249, 90, 19724),
(91, 'tortor. Integer aliquam adipiscing lacus. Ut ', 73464.1, 837, 91, 76398),
(92, 'libero. Integer in magna. Phasellus dolor eli', 11997.6, 227, 92, 96830),
(93, 'Duis elementum, dui quis accumsan convallis, ', 12035.4, 303, 93, 84008),
(94, 'eu lacus.', 6248.06, 95, 94, 13143),
(95, 'Integer tincidunt aliquam arcu. Aliquam ultri', 61186.6, 53, 95, 20460),
(96, 'vel arcu.', 10619, 3, 96, 57696),
(97, 'erat nonummy ultricies ornare, elit elit ferm', 16013.9, 553, 97, 72894),
(98, 'euismod in, dolor. Fusce feugiat. Lorem', 58324.6, 774, 98, 92437),
(99, 'in sodales elit erat vitae risus. Duis a mi f', 3019.38, 612, 99, 95802),
(100, 'varius. Nam porttitor scelerisque', 1675.25, 444, 100, 19333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `direccion_envio` varchar(45) NOT NULL,
  `saldo` float NOT NULL,
  `descuento` float NOT NULL,
  `limite_credito` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `direccion_envio`, `saldo`, `descuento`, `limite_credito`) VALUES
(1, 'Apdo.:324-281 Euismod Carretera', 44213.2, 99689.1, 78133.1),
(2, 'Apdo.:288-6490 Eu, Calle', 9982.99, 48496.1, 50984.4),
(3, '5998 Neque. ', 90636.5, 5919.67, 13807.4),
(4, '4691 Lacus. C.', 79940.3, 8627.91, 39038.9),
(5, '9849 Ante, Ctra.', 12025.4, 90880.7, 88606.1),
(6, 'Apdo.:823-2666 Sollicitudin Avda.', 19912.2, 61209.8, 69190.9),
(7, '7225 Eget Ctra.', 75891.7, 83271.9, 20350),
(8, 'Apartado núm.: 177, 8369 Sem Carretera', 58372, 16173.8, 81681.1),
(9, '201-502 Lectus Carretera', 62225.3, 60239, 64615.3),
(10, '908-6325 Vulputate Av.', 11326.2, 50101, 57267.1),
(11, '6682 Euismod ', 75423.3, 91794.3, 29088.4),
(12, 'Apartado núm.: 482, 7209 Adipiscing Carretera', 25392.1, 31162.9, 78350.5),
(13, '601-7156 Ornare Calle', 6765.79, 36434, 68820.3),
(14, 'Apdo.:678-936 Non, Ctra.', 51412.1, 80957.2, 78721.8),
(15, 'Apdo.:726-9448 Cum Av.', 9423.22, 45700.4, 46703.7),
(16, 'Apartado núm.: 367, 756 Massa. Av.', 84227.6, 10616.8, 68679.6),
(17, '365-7565 Justo. Av.', 70926.9, 70278.9, 78994.9),
(18, 'Apartado núm.: 323, 8352 Fringilla Carretera', 67795, 39996, 80056.4),
(19, 'Apartado núm.: 653, 8206 Auctor Ctra.', 84409.7, 90936.9, 79891),
(20, '5277 Dui. C.', 78885.9, 60239.5, 63673.1),
(21, 'Apartado núm.: 181, 5117 Eget Calle', 81843, 84700.2, 3708.87),
(22, '884-8604 Imperdiet Avenida', 20100.5, 27534.3, 11435.2),
(23, '8254 Eu Carretera', 93425.3, 507.88, 40112.2),
(24, 'Apdo.:853-2858 Orci Av.', 19129.7, 64877, 10471.2),
(25, 'Apartado núm.: 592, 192 Nulla Avenida', 11139.8, 91.37, 62237.9),
(26, '1313 Turpis. C.', 91150.1, 47379.4, 39807.5),
(27, 'Apdo.:498-2503 Non Calle', 18467.3, 57406.8, 39655.5),
(28, '3145 Faucibus Ctra.', 26398.8, 71048.6, 93018),
(29, 'Apdo.:168-5658 Duis ', 72714.2, 60505.2, 10752.4),
(30, 'Apdo.:691-2718 Tellus Ctra.', 17886.7, 61884.8, 4512.7),
(31, 'Apdo.:170-3328 Enim C/', 88435.3, 60618.8, 17199.3),
(32, 'Apdo.:542-4364 Diam Avenida', 79444.8, 98031.4, 45799),
(33, '7969 Posuere C/', 1661.47, 36508.6, 79576.4),
(34, 'Apartado núm.: 468, 1149 Suspendisse Calle', 39486.4, 3061.67, 59629.3),
(35, '999-1620 Lectus Av.', 42113.5, 55898.9, 87927),
(36, 'Apdo.:480-6829 Velit. C/', 58603.8, 27409, 47287.2),
(37, 'Apartado núm.: 459, 9168 Nascetur C.', 52324.8, 43882.5, 1294.48),
(38, 'Apartado núm.: 688, 9240 Dolor C/', 64453.1, 60107.1, 4678.29),
(39, 'Apartado núm.: 111, 7737 Turpis Avda.', 30331.4, 38726.9, 64702.9),
(40, 'Apartado núm.: 840, 1768 Pede Av.', 66225.3, 49945.9, 4890.46),
(41, '549-5649 Vitae, Carretera', 1732.16, 90794.4, 12886.2),
(42, 'Apartado núm.: 601, 6933 Nec ', 73037.8, 2481.24, 29462.4),
(43, '7910 Pede. Avda.', 8653.7, 22476.1, 53018),
(44, 'Apartado núm.: 119, 6501 Neque. Av.', 14690.6, 56611.9, 53623.2),
(45, '3435 Est, Av.', 59627.4, 55632.9, 84478.7),
(46, 'Apartado núm.: 321, 2909 Magnis Avda.', 49826.7, 68154.9, 81646),
(47, '372-1243 Libero. ', 45653.9, 67483.9, 30155.4),
(48, 'Apdo.:494-4897 Facilisis ', 42398.7, 80437.1, 6857.42),
(49, '1321 Eget Avenida', 47488.5, 69548.2, 82031.9),
(50, '5172 Interdum. Avda.', 26900.1, 38747.1, 61930.4),
(51, '7348 Quis Ctra.', 22104.3, 64492.7, 55608.1),
(52, 'Apartado núm.: 834, 5840 Ornare Av.', 43321.7, 35513.7, 59392.7),
(53, 'Apdo.:931-8291 Donec Avda.', 33649.9, 55547.3, 58501),
(54, '3414 A, Carretera', 54647.2, 78757.7, 10592.2),
(55, '872-7918 Mattis. Av.', 53028.8, 88091.9, 27956.8),
(56, '245-7715 Vel Avenida', 45712.3, 34753.8, 57530.4),
(57, '677-5365 Tellus. C/', 9586.71, 90546, 6788.67),
(58, 'Apartado núm.: 521, 5605 Penatibus Calle', 24071.7, 5638.16, 50311.8),
(59, 'Apdo.:760-1993 Nec Av.', 1955.81, 7618.26, 78642.5),
(60, '3376 Lorem Ctra.', 95675.6, 93358.3, 15504.1),
(61, 'Apdo.:473-7920 Justo. Avda.', 3978.15, 13809.9, 2285.91),
(62, 'Apartado núm.: 596, 1459 Cras C.', 71952.6, 8256.76, 17553.5),
(63, 'Apdo.:641-2248 Duis Calle', 26994.5, 39456.3, 89157.1),
(64, 'Apartado núm.: 709, 5212 Hendrerit. Avda.', 82388.4, 53018.2, 60683.3),
(65, '1328 Arcu. Ctra.', 95864, 4285.36, 68003.9),
(66, '4737 Neque Avenida', 86774.7, 5043.37, 39918.8),
(67, '9294 Maecenas Avenida', 49841.4, 27252, 5637.5),
(68, '145-8505 Cursus. C/', 31553.8, 17337.5, 79749.3),
(69, '433-6230 A C.', 7962.49, 97130.2, 53355.6),
(70, 'Apdo.:933-6013 Mauris, Avenida', 29861.9, 7487.28, 32907),
(71, 'Apdo.:368-4927 Varius C.', 14851.6, 45322.6, 16196.8),
(72, '776-2487 Adipiscing, ', 67158.7, 8629.5, 88913.7),
(73, '487-686 Sagittis. Calle', 4094.6, 12244.3, 64020.6),
(74, '6775 Mauris Ctra.', 88197.6, 41053.1, 36946.9),
(75, '3806 Sed Carretera', 23409.8, 68192.9, 39756.2),
(76, '4513 Sem. C.', 97962.3, 83632.3, 22015.6),
(77, 'Apartado núm.: 979, 9673 Tristique C/', 67514.5, 40543, 22584.3),
(78, 'Apdo.:404-914 Est, Calle', 13348.1, 13878.8, 85389.5),
(79, 'Apdo.:179-4839 Parturient Ctra.', 64981.8, 36107.5, 87789.1),
(80, 'Apartado núm.: 974, 9096 Ultrices Carretera', 83498.8, 84610.2, 66042.4),
(81, 'Apartado núm.: 213, 9937 Elit Av.', 39900, 899.64, 87286.3),
(82, 'Apdo.:165-3238 Mattis C/', 16096.5, 22432.4, 72266.1),
(83, 'Apartado núm.: 898, 3825 Rutrum. Avenida', 77209.6, 39121.1, 41747.8),
(84, 'Apdo.:830-1558 Gravida C.', 22997.9, 10290.4, 19182.9),
(85, '6127 In Carretera', 55435.3, 5347.05, 61741.8),
(86, 'Apdo.:681-6918 Nonummy. C/', 91213.1, 21956.4, 84738.8),
(87, 'Apdo.:494-9471 Egestas ', 83283, 5044.09, 76135.5),
(88, '3984 Molestie ', 54080.7, 15792, 69120.7),
(89, 'Apdo.:715-2375 Eros. C/', 3039.39, 43485.2, 48075.9),
(90, 'Apartado núm.: 203, 1693 In Calle', 78352, 7462.08, 88464.5),
(91, '7481 Venenatis C/', 5423.02, 72073.9, 23745.7),
(92, '6672 Mauris C.', 71004.6, 25395.6, 77653.7),
(93, 'Apdo.:471-4522 Nascetur Avda.', 85508.5, 63930.3, 30497.5),
(94, '836-6833 In Avda.', 89225.7, 36654.9, 26357.1),
(95, 'Apartado núm.: 187, 4234 Ipsum. C/', 1704.51, 44610.7, 15528.5),
(96, '1468 At, C.', 64184.7, 59144.4, 480.75),
(97, '264-5186 Lectus C.', 93323, 89569, 43744.8),
(98, 'Apartado núm.: 811, 5733 Dolor C.', 26753.3, 43441.9, 44363.2),
(99, 'Apdo.:133-1082 Eu Av.', 54771.3, 56148.8, 12562.2),
(100, '951-4289 Vitae, C/', 35024, 78754, 68310.9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

CREATE TABLE `fabrica` (
  `id` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `total_articulos` int(11) NOT NULL,
  `infor_extra` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fabrica`
--

INSERT INTO `fabrica` (`id`, `telefono`, `total_articulos`, `infor_extra`) VALUES
(1, 1971880282, 301, 'nulla. Integer urna. Vivamus molestie dapibus'),
(2, 2147483647, 113, 'vitae nibh. Donec est mauris, rhoncus id, mol'),
(3, 2147483647, 790, 'nec, imperdiet nec, leo. Morbi neque tellus, '),
(4, 2147483647, 148, 'Duis'),
(5, 1816680644, 371, 'elementum at, egestas a, scelerisque sed, sap'),
(6, 2147483647, 126, 'Suspendisse non leo. Vivamus nibh'),
(7, 2147483647, 496, 'habitant morbi tristique senectus et netus et'),
(8, 2147483647, 112, 'vel est tempor bibendum. Donec felis orci, ad'),
(9, 2147483647, 517, 'pede. Praesent eu dui. Cum sociis natoque'),
(10, 2147483647, 624, 'vehicula aliquet libero. Integer in'),
(11, 1341930133, 375, 'gravida mauris ut mi. Duis risus odio, auctor'),
(12, 2147483647, 548, 'odio vel est tempor bibendum.'),
(13, 2147483647, 999, 'hymenaeos. Mauris ut quam vel sapien'),
(14, 2147483647, 821, 'scelerisque neque sed sem egestas blandit. Na'),
(15, 2147483647, 879, 'Mauris quis turpis vitae purus gravida sagitt'),
(16, 2147483647, 113, 'Vestibulum accumsan neque et nunc. Quisque or'),
(17, 2147483647, 311, 'ornare. Fusce mollis. Duis sit amet diam eu d'),
(18, 2147483647, 921, 'nec orci. Donec nibh. Quisque nonummy ipsum n'),
(19, 2147483647, 406, 'imperdiet ornare. In faucibus. Morbi vehicula'),
(20, 1287615330, 154, 'erat vitae risus. Duis a mi fringilla mi laci'),
(21, 2147483647, 28, 'libero. Donec consectetuer mauris id sapien. '),
(22, 2147483647, 833, 'pretium et, rutrum non, hendrerit id, ante. N'),
(23, 2147483647, 394, 'risus. Morbi metus. Vivamus'),
(24, 2147483647, 744, 'molestie'),
(25, 2147483647, 739, 'Aenean egestas'),
(26, 2147483647, 912, 'morbi'),
(27, 2147483647, 252, 'ante. Vivamus non lorem vitae odio sagittis s'),
(28, 2147483647, 445, 'pretium neque. Morbi quis urna. Nunc quis arc'),
(29, 2147483647, 450, 'ut cursus luctus, ipsum leo elementum sem, vi'),
(30, 2147483647, 86, 'nec, euismod in, dolor. Fusce feugiat. Lorem '),
(31, 2147483647, 610, 'neque venenatis lacus. Etiam bibendum ferment'),
(32, 1876718115, 905, 'a, dui. Cras pellentesque. Sed dictum. Proin '),
(33, 2147483647, 952, 'arcu eu odio tristique pharetra. Quisque ac l'),
(34, 2147483647, 305, 'Nam interdum enim non nisi. Aenean eget'),
(35, 2147483647, 552, 'a neque. Nullam ut nisi a odio semper cursus.'),
(36, 2147483647, 737, 'Pellentesque ultricies dignissim lacus. Aliqu'),
(37, 2147483647, 82, 'tellus justo sit amet nulla. Donec non justo.'),
(38, 2147483647, 318, 'ornare, facilisis'),
(39, 2147483647, 904, 'adipiscing lacus. Ut nec urna et'),
(40, 2147483647, 830, 'euismod in, dolor.'),
(41, 2147483647, 102, 'ac tellus. Suspendisse sed dolor. Fusce mi lo'),
(42, 1706079441, 725, 'aliquet vel, vulputate eu, odio. Phasellus at'),
(43, 2147483647, 514, 'non, lacinia at, iaculis quis, pede. Praesent'),
(44, 2147483647, 510, 'luctus'),
(45, 1412975117, 429, 'condimentum. Donec at arcu. Vestibulum ante i'),
(46, 2147483647, 493, 'dui nec urna'),
(47, 2147483647, 8, 'consequat purus. Maecenas libero'),
(48, 2147483647, 976, 'semper tellus id nunc interdum feugiat. Sed n'),
(49, 2147483647, 557, 'dui. Fusce diam nunc, ullamcorper eu, euismod'),
(50, 2147483647, 388, 'vitae semper egestas, urna justo faucibus lec'),
(51, 2147483647, 506, 'Nunc commodo auctor velit.'),
(52, 2113672638, 483, 'at risus. Nunc'),
(53, 2147483647, 459, 'In faucibus. Morbi vehicula. Pellentesque tin'),
(54, 2147483647, 51, 'sem semper erat, in consectetuer ipsum nunc i'),
(55, 2147483647, 87, 'elit, pellentesque a, facilisis non, bibendum'),
(56, 1476576965, 385, 'sodales. Mauris blandit enim consequat purus.'),
(57, 2147483647, 1000, 'ligula eu enim. Etiam imperdiet dictum magna.'),
(58, 1657570060, 113, 'Curabitur dictum. Phasellus in felis. Nulla t'),
(59, 2147483647, 857, 'mus. Aenean eget magna. Suspendisse tristique'),
(60, 2147483647, 758, 'Aliquam adipiscing lobortis risus. In mi pede'),
(61, 2147483647, 621, 'eu tellus eu augue porttitor interdum. Sed au'),
(62, 2147483647, 372, 'Ut nec urna et arcu imperdiet ullamcorper. Du'),
(63, 2147483647, 866, 'velit. Pellentesque ultricies dignissim lacus'),
(64, 2147483647, 371, 'Suspendisse tristique neque venenatis lacus.'),
(65, 1838687981, 785, 'lectus rutrum urna, nec luctus felis purus'),
(66, 2147483647, 601, 'rutrum non, hendrerit id, ante. Nunc mauris s'),
(67, 2147483647, 375, 'egestas a, dui. Cras pellentesque. Sed dictum'),
(68, 2147483647, 637, 'tempus mauris erat eget ipsum. Suspendisse'),
(69, 2147483647, 787, 'non, sollicitudin a, malesuada id, erat. Etia'),
(70, 2147483647, 425, 'at sem molestie sodales.'),
(71, 2147483647, 217, 'enim, gravida sit amet, dapibus id, blandit a'),
(72, 2147483647, 728, 'cursus. Integer mollis. Integer tincidunt ali'),
(73, 2147483647, 579, 'vel nisl. Quisque fringilla euismod enim. Eti'),
(74, 2147483647, 797, 'ullamcorper magna. Sed eu eros. Nam consequat'),
(75, 2147483647, 420, 'sagittis felis. Donec tempor, est ac mattis s'),
(76, 2147483647, 510, 'non, lobortis quis,'),
(77, 2147483647, 692, 'in faucibus orci luctus et ultrices posuere c'),
(78, 2147483647, 569, 'Cras convallis convallis dolor. Quisque tinci'),
(79, 2147483647, 679, 'sagittis augue, eu tempor erat'),
(80, 2147483647, 291, 'tincidunt nibh. Phasellus nulla. Integer vulp'),
(81, 2147483647, 600, 'at lacus. Quisque purus sapien,'),
(82, 2147483647, 38, 'turpis nec mauris blandit mattis. Cras'),
(83, 2147483647, 392, 'nisl. Maecenas malesuada fringilla est. Mauri'),
(84, 2147483647, 58, 'ante dictum mi, ac mattis velit justo nec ant'),
(85, 2147483647, 659, 'Integer mollis. Integer'),
(86, 2147483647, 124, 'Curae; Phasellus ornare. Fusce mollis. Duis s'),
(87, 2147483647, 740, 'elementum, dui quis accumsan convallis, ante '),
(88, 1643693598, 20, 'ipsum porta elit, a feugiat tellus lorem eu m'),
(89, 2147483647, 50, 'ultrices posuere cubilia Curae; Donec tincidu'),
(90, 2147483647, 595, 'id, libero. Donec consectetuer mauris'),
(91, 1913319236, 840, 'dignissim. Maecenas ornare egestas ligula. Nu'),
(92, 2147483647, 605, 'quis, pede. Praesent eu dui. Cum sociis natoq'),
(93, 2147483647, 550, 'elit, dictum eu, eleifend nec, malesuada ut, '),
(94, 2147483647, 93, 'arcu. Nunc mauris. Morbi non sapien molestie '),
(95, 2147483647, 318, 'ac metus vitae velit egestas lacinia. Sed con'),
(96, 2147483647, 502, 'nec ante. Maecenas mi felis, adipiscing fring'),
(97, 2147483647, 610, 'Phasellus fermentum convallis ligula. Donec l'),
(98, 2147483647, 42, 'scelerisque sed, sapien. Nunc pulvinar arcu e'),
(99, 2147483647, 190, 'ut, pharetra sed, hendrerit a, arcu. Sed et l'),
(100, 2147483647, 674, 'tortor, dictum eu, placerat eget, venenatis a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `Cliente_id` int(11) NOT NULL,
  `Articulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `fecha`, `cantidad`, `Cliente_id`, `Articulo_id`) VALUES
(1, '2021-08-12', 577, 1, 1),
(2, '2019-10-24', 801, 2, 2),
(3, '2020-11-20', 837, 3, 3),
(4, '2020-08-16', 654, 4, 4),
(5, '2020-03-03', 742, 5, 5),
(6, '2020-05-18', 71, 6, 6),
(7, '2021-07-23', 261, 7, 7),
(8, '2020-05-20', 46, 8, 8),
(9, '2020-06-09', 242, 9, 9),
(10, '2019-11-16', 869, 10, 10),
(11, '2019-09-18', 183, 11, 11),
(12, '2020-03-14', 611, 12, 12),
(13, '2021-07-14', 901, 13, 13),
(14, '2020-03-22', 175, 14, 14),
(15, '2021-07-24', 705, 15, 15),
(16, '2020-06-08', 685, 16, 16),
(17, '2019-09-14', 225, 17, 17),
(18, '2019-11-25', 829, 18, 18),
(19, '2020-05-11', 720, 19, 19),
(20, '2020-01-03', 494, 20, 20),
(21, '2019-10-14', 592, 21, 21),
(22, '2021-05-02', 177, 22, 22),
(23, '2021-03-12', 68, 23, 23),
(24, '2020-07-26', 375, 24, 24),
(25, '2020-11-05', 263, 25, 25),
(26, '2020-06-12', 908, 26, 26),
(27, '2020-02-20', 859, 27, 27),
(28, '2020-02-29', 948, 28, 28),
(29, '2019-12-18', 407, 29, 29),
(30, '2021-07-17', 144, 30, 30),
(31, '2020-07-02', 372, 31, 31),
(32, '2021-03-28', 800, 32, 32),
(33, '2020-02-06', 543, 33, 33),
(34, '2020-02-09', 357, 34, 34),
(35, '2019-10-25', 890, 35, 35),
(36, '2020-11-10', 816, 36, 36),
(37, '2019-09-06', 823, 37, 37),
(38, '2020-03-02', 965, 38, 38),
(39, '2020-06-21', 191, 39, 39),
(40, '2021-05-08', 769, 40, 40),
(41, '2020-03-20', 202, 41, 41),
(42, '2021-01-15', 746, 42, 42),
(43, '2019-12-28', 182, 43, 43),
(44, '2021-04-02', 659, 44, 44),
(45, '2020-07-14', 320, 45, 45),
(46, '2021-04-01', 320, 46, 46),
(47, '2019-12-21', 556, 47, 47),
(48, '2019-11-08', 519, 48, 48),
(49, '2021-02-28', 21, 49, 49),
(50, '2021-08-16', 338, 50, 50),
(51, '2021-02-28', 806, 51, 51),
(52, '2021-06-26', 29, 52, 52),
(53, '2020-10-03', 571, 53, 53),
(54, '2021-07-01', 176, 54, 54),
(55, '2020-12-21', 696, 55, 55),
(56, '2020-06-25', 272, 56, 56),
(57, '2021-07-30', 619, 57, 57),
(58, '2020-10-15', 764, 58, 58),
(59, '2021-08-21', 200, 59, 59),
(60, '2019-09-20', 443, 60, 60),
(61, '2020-07-07', 480, 61, 61),
(62, '2021-03-11', 619, 62, 62),
(63, '2020-01-19', 347, 63, 63),
(64, '2021-06-17', 11, 64, 64),
(65, '2020-05-31', 402, 65, 65),
(66, '2020-10-16', 457, 66, 66),
(67, '2020-10-11', 661, 67, 67),
(68, '2020-09-29', 458, 68, 68),
(69, '2020-11-09', 716, 69, 69),
(70, '2020-02-27', 231, 70, 70),
(71, '2019-12-23', 428, 71, 71),
(72, '2021-06-20', 234, 72, 72),
(73, '2019-09-18', 892, 73, 73),
(74, '2020-12-24', 976, 74, 74),
(75, '2020-09-16', 857, 75, 75),
(76, '2020-10-14', 985, 76, 76),
(77, '2020-03-30', 446, 77, 77),
(78, '2019-11-27', 838, 78, 78),
(79, '2020-05-12', 810, 79, 79),
(80, '2020-04-28', 960, 80, 80),
(81, '2021-03-08', 390, 81, 81),
(82, '2021-04-07', 905, 82, 82),
(83, '2020-01-10', 403, 83, 83),
(84, '2019-10-23', 480, 84, 84),
(85, '2020-10-12', 383, 85, 85),
(86, '2021-03-05', 323, 86, 86),
(87, '2019-10-19', 816, 87, 87),
(88, '2021-03-19', 379, 88, 88),
(89, '2019-09-12', 582, 89, 89),
(90, '2019-10-08', 48, 90, 90),
(91, '2020-09-21', 337, 91, 91),
(92, '2019-12-22', 215, 92, 92),
(93, '2020-06-29', 878, 93, 93),
(94, '2021-06-08', 986, 94, 94),
(95, '2020-12-25', 198, 95, 95),
(96, '2021-05-28', 660, 96, 96),
(97, '2021-01-14', 25, 97, 97),
(98, '2020-07-08', 602, 98, 98),
(99, '2021-04-17', 704, 99, 99),
(100, '2020-01-29', 732, 100, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Articulo_Fabrica_idx` (`Fabrica_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fabrica`
--
ALTER TABLE `fabrica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Pedido_Cliente1_idx` (`Cliente_id`),
  ADD KEY `fk_Pedido_Articulo1_idx` (`Articulo_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `fk_Articulo_Fabrica` FOREIGN KEY (`Fabrica_id`) REFERENCES `fabrica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_Pedido_Articulo1` FOREIGN KEY (`Articulo_id`) REFERENCES `articulo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Pedido_Cliente1` FOREIGN KEY (`Cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
