-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2015 г., 00:52
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kohana`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `scope` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3218 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `c_title`, `parent_id`, `lft`, `rgt`, `lvl`, `scope`) VALUES
(3054, 'Бодики, человечки', 3044, 12, 13, 2, 1),
(3166, 'оооооо', 3161, 26, 27, 2, 2),
(3167, '1', 3048, 2, 3, 2, 5),
(3165, 'Джинсы, штанишки, капри', 3161, 24, 25, 2, 2),
(3164, 'Комплекты', 3161, 22, 23, 2, 2),
(3048, 'Девочки 8-14 лет', 0, 1, 20, 1, 5),
(3049, 'Куртки, пальто, комбинезоны, жилетки', 3044, 2, 3, 2, 1),
(3050, 'Регланы, кофты, кардиганы, флиски, худи', 3044, 4, 5, 2, 1),
(3051, 'Джинсы, штанишки, лосины', 3044, 6, 7, 2, 1),
(3052, 'Наборы', 3044, 8, 9, 2, 1),
(3053, 'Футболки, майки, шорты, юбки, платья, сарафаны', 3044, 10, 11, 2, 1),
(3163, 'Регланы, кофты, кардиганы, флиски, худи', 3161, 20, 21, 2, 2),
(3044, 'Малыши 0-24 мес.', 0, 1, 14, 1, 1),
(3201, 'ыыыыыыыыыыыыы', 3194, 14, 15, 2, 2),
(3194, 'Мальчики 2-8 лет', 0, 1, 16, 1, 2),
(3172, '6', 3048, 12, 13, 2, 5),
(3173, '7', 3048, 14, 15, 2, 5),
(3170, '4', 3048, 8, 9, 2, 5),
(3171, '5', 3048, 10, 11, 2, 5),
(3169, '3', 3048, 6, 7, 2, 5),
(3168, '2', 3048, 4, 5, 2, 5),
(3161, 'Мальчики 8-14 лет', 0, 17, 28, 1, 2),
(3200, 'Пижамы', 3194, 12, 13, 2, 2),
(3162, 'Куртки, пальто, плащи, жилетки', 3161, 18, 19, 2, 2),
(3122, 'nnnnn', 0, 21, 22, 1, 5),
(3174, '8', 3048, 16, 17, 2, 5),
(3175, '9', 3048, 18, 19, 2, 5),
(3197, 'Комплекты', 3194, 6, 7, 2, 2),
(3198, 'Джинсы, штанишки, капри', 3194, 8, 9, 2, 2),
(3199, 'Футболки, майки, рубашки, шорты', 3194, 10, 11, 2, 2),
(3217, 'Носочки, колготки, трусики', 3210, 42, 43, 2, 2),
(3216, 'Пижамы', 3210, 40, 41, 2, 2),
(3215, 'Футболки, майки, блузки, юбки, шорты, платья, сарафаны', 3210, 38, 39, 2, 2),
(3214, 'Джинсы, штанишки, капри, лосины', 3210, 36, 37, 2, 2),
(3210, 'Девочки 2-8 лет', 0, 29, 44, 1, 2),
(3196, 'Регланы, кофты, кардиганы, флиски, худи', 3194, 4, 5, 2, 2),
(3195, 'Куртки, пальто, плащи, жилетки', 3194, 2, 3, 2, 2),
(3213, 'Комплекты', 3210, 34, 35, 2, 2),
(3212, 'Регланы, кофты, кардиганы, флиски, худи', 3210, 32, 33, 2, 2),
(3211, 'Куртки, пальто, плащи, жилетки', 3210, 30, 31, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=62 ;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `name`, `text`, `date`) VALUES
(3, 150, 'ві', 'ііііііііі', '08.08.2015'),
(4, 150, 'всв', 'высыв', '08.08.2015'),
(5, 150, 'всв', 'высыв', '08.08.2015'),
(6, 150, 'с', 'сссссссссссс', '08.08.2015'),
(7, 150, 'с', 'с', '08.08.2015'),
(8, 150, 'чя', 'яс', '08.08.2015'),
(9, 150, 'яч', 'ячя', '08.08.2015'),
(10, 150, 'с', 'с', '08.08.2015'),
(11, 150, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '09.08.2015'),
(12, 150, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '09.08.2015'),
(13, 150, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '09.08.2015'),
(14, 150, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '09.08.2015'),
(15, 150, 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '09.08.2015'),
(16, 150, 'dfsdf', 'sdfsdfsdf', '09.08.2015'),
(17, 150, 'dfsdf', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxzxz', '09.08.2015'),
(18, 149, 'x', 'x', '09.08.2015'),
(19, 149, 'xczc', 'zczczc', '09.08.2015'),
(20, 149, 'xcxcx', 'xxxxxxxx', '09.08.2015'),
(21, 149, 'xcxcx', 'xxxxxxxx', '09.08.2015'),
(22, 149, 'xcxcx', 'xxxxxxxx', '09.08.2015'),
(23, 149, 'sdsd', 'sdsd', '09.08.2015'),
(24, 149, 'sdsd', 'sdsd', '09.08.2015'),
(25, 149, 'ccccccc', 'ccccccccccccccccccccc', '09.08.2015'),
(26, 150, 'c', 'c', '09.08.2015'),
(27, 150, 'xxxxxxxxxxxxx', 'xxxxxxxxx', '09.08.2015'),
(28, 150, 'xxxxxxx', 'xxxxxxx', '09.08.2015'),
(29, 150, 'x', 'xxxxxxxxxxxx', '09.08.2015'),
(30, 150, 'ccccccccc', 'xcxcxcxcxcxcxxcdcxcxc', '09.08.2015'),
(31, 150, 'sc', 'cd', '09.08.2015'),
(32, 150, 'sc', 'cd', '09.08.2015'),
(33, 150, 'sc', 'cd', '09.08.2015'),
(34, 150, 'scdcdc', 'cdsdcsdc', '09.08.2015'),
(35, 150, 'ghbdtn', 'приветик', '09.08.2015'),
(36, 150, 'ghbdtn', 'приветик', '09.08.2015'),
(37, 150, 'ыв', 'вы', '09.08.2015'),
(38, 150, 'в', 'вччччччччччччччччччччччччччччччччччччччччччччччччччч фывы ыфвыф ыфв ыфв ыфвфыв фыв фыв фыв ыфв ыфв ', '09.08.2015'),
(39, 149, 'd', ' sdf dsfds fsd sdf sdf sd sdf sdf sd fds sdf sdfsdf sd fsdf sdf ', '09.08.2015'),
(40, 149, 'ы', 'ыыыыыыы выфыф фывфы фыв фыв фыв фы вфы вфы в фыв ', '09.08.2015'),
(41, 149, 'с', 'ссссссссссссссс ывы ыв ыв ыв ыв ыв ыв ыв ыв ыв', '09.08.2015'),
(42, 149, 'с', 'ссссссссссссссс ывы ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв ыв', '09.08.2015'),
(43, 150, 'ссы', 'ыва ыва ыва ыва ыв аыв выаыва авы ыва ыаываы аыва ', '09.08.2015'),
(44, 150, 'с ', ' с с с с с с сс с с с с с с с с с с с ', '09.08.2015'),
(45, 149, 'максим', 'Нарушается обмен веществ, который ведет не только к функциональным и органическим изменениям в органах и тканях, но еще и к задержке жидкости в организме за счет нарушения выработки белка – альбумина. То есть при печеночной недостаточности отеки белкового характера. Возникает застой крови в большом круге кровообращения, нарастает асцит (отек живота), который может сдавливать нижнюю полую вену, что усиливает отек нижних конечностей. Что делать? Во время лечить основное заболевание – вирусные и токсические гепатиты, опухоли.', '09.08.2015'),
(46, 150, 'x', 'xxxxxxxxxxxxxxxxxxxxxxxxx', '10.08.2015  10:'),
(47, 150, 'zdc', 'dzccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', '10.08.2015  10:'),
(48, 150, 'sd', 'dssddsdsssssssdddddddddddddddddddddddddddddddddddddddddddd', '10.08.2015  18:'),
(49, 149, 'sss', 'sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', '10.08.2015  21:17:45'),
(50, 149, 'asdasd', 'dddddddddddddddddd  sdfffffffffffff', '16.08.2015  16:25:57'),
(51, 150, 'Dima', 'привет, хочу сказать ывы ывывыв ыв ', '30.08.2015  09:19:55'),
(52, 150, 'Dima', 'привет, хочу сказать ывы ывывыв ыв ', '30.08.2015  09:20:06'),
(53, 149, 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaa', '05.09.2015  10:02:37'),
(54, 129, 'vxv', 'xv xxxxxvxc dfdf sdfsd sdf ', '22.09.2015  21:30:09'),
(55, 124, 'Dima', 'dddddasd asd asd as da sda dad asdedwefwe wwefe', '06.10.2015  13:18:06'),
(56, 125, 'Dima', 'бла бла бла бла бла бла бла бла бюла\n', '18.11.2015  18:39:25'),
(57, 128, 'чччччч', 'ччччччччччччччччччч ыв ывывыв ыв', '19.11.2015  22:09:21'),
(58, 128, 'сссс', 'ам вам авм вам вам вам вам вам авм ', '19.11.2015  22:10:06'),
(59, 128, 'ссв', 'вс вс св всв св св св с вс в свсвсвсвс  вс в с', '19.11.2015  22:10:44'),
(60, 128, 'ссв', 'вс вс св всв св св св с вс в свсвсвсвс  вс в с', '19.11.2015  22:25:35'),
(61, 128, 'ссв', 'вс вс св всв св св св с вс в свсвсвсвс  вс в с', '19.11.2015  22:25:36');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=112 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `product_id`, `name`) VALUES
(76, 99, 'sp9nu2rmzbdf4lac.jpg'),
(77, 100, 'qb31tghdvao45w2j.jpg'),
(78, 101, '8aoyh5qknl1s0bju.jpg'),
(79, 102, '10rya263ftk8djwg.jpg'),
(80, 102, 'pk2vtzf3jibwudh0.jpg'),
(81, 92, 't4vcdipm3uqg58sl.jpg'),
(82, 105, 'c156vdyr3j40leos.jpg'),
(83, 106, 'fg5ojm0rip2bw9xz.jpg'),
(84, 141, 'fc0w91oqx756s3uz.jpg'),
(85, 142, 'chjv9ozxbm2anwg0.jpg'),
(86, 143, 'vy8k2romswe563l1.jpg'),
(87, 144, 'scnav7lrpe0yb6k2.jpg'),
(88, 145, 'l76wnvayopqzhjud.jpg'),
(89, 146, 'ecrs6kp54ngjq7b9.jpg'),
(90, 147, 'afk6e8zhrd2jmi0u.jpg'),
(91, 129, 'bep1hj89wclzk73g.jpg'),
(92, 128, 's7y4nk9mw56tvrl1.jpg'),
(93, 128, '4niywx2a5kzovfuq.jpg'),
(94, 128, 'ep4lh569vbn7mcdw.jpg'),
(95, 128, 'wqinet6gbfmxzl2o.jpg'),
(96, 127, 'b7gunsdwq15okilh.jpg'),
(97, 126, 'cba5v3e07l49qwkx.jpg'),
(98, 124, 'exbf20isatnkohpd.jpg'),
(99, 124, 'p0tgjz4r72euslkq.jpg'),
(100, 124, 'ls0xjvp3auwf2gi4.jpg'),
(101, 124, 'qrcotxvg0zwlhpn4.jpg'),
(102, 125, 'e97f2wz3mxu5o18r.jpg'),
(103, 125, '79a6xpv38krfqlb1.jpg'),
(104, 123, '96unki34jvrtws1m.jpg'),
(105, 122, 'z5qn1wfl8phuiey0.jpg'),
(108, 149, 'gvpq4uckmxjz91ea.jpg'),
(109, 150, '9h1gptrvlz3d7kjs.jpg'),
(110, 121, 'xckdfumj5o9qvrgl.jpg'),
(111, 152, 'k7u3i9rz245c1hpw.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `intro` mediumtext NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `new_chek` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `date`, `new_chek`) VALUES
(1, 'My First page', 'Уважаемые покупатели, рады вам сообщить, что в нашем магазине в Броварах по адресу ул. Грушевского 15, появился терминал для расчетов пластиковыми картами.', 'Уважаемые покупатели, рады вам сообщить, что в нашем магазине в Броварах по адресу ул. Грушевского 15, появился терминал для расчетов пластиковыми картами. Теперь оплачивать покупки у нас стало удобнее. Всегда рады видеть вас в нашем магазине!', '2015-04-27 23:30:35', 1),
(2, 'My First', 'мои новости', 'vvvvvvvvvvvvvvvv', '2015-04-27 23:30:35', 1),
(3, 'My First aswd', 'About project', 'sdfdfdfsdf', '2015-04-27 23:30:35', 1),
(4, 'My First page', 'About project', 'eeeeeeeeeeeeeeeeeeee', '2015-04-27 23:31:05', 1),
(5, 'My First ', 'About project', 'vvvvvvvvvvvvvvvv', '2015-04-27 23:31:05', 0),
(6, 'My First aswd', 'About project', 'sdfdfdfsdf', '2015-04-27 23:31:05', 0),
(7, 'My First asdas', 'About project', 'sdfsdfsdff', '2015-04-27 23:31:05', 0),
(8, 'sdfsd dsfvg', 'fff', 'ffffffffff', '2005-05-20 15:00:00', 0),
(20, 'as', 'as', 'as', '2005-05-20 15:00:00', 0),
(21, 'as', 'as', 'as', '2005-05-20 15:00:00', 0),
(22, 'asччччччччччччччччч', 'as', 'as', '2005-05-20 15:00:00', 1),
(23, 'asччччччччччччччччч', 'as', 'as', '2005-05-20 15:00:00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `image_id` int(10) NOT NULL,
  `popular` int(1) NOT NULL,
  `color` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=157 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `cost`, `status`, `image_id`, `popular`, `color`, `size`) VALUES
(129, 'Медведь', 'ываваитара ваыва', '100', 1, 91, 0, '', 0),
(128, 'w', 'w', '100', 1, 92, 0, '', 0),
(151, 'dddddddddddddd', 'vcvbcvvc  df d dfdf', '100', 1, 0, 0, '', 0),
(126, 'ssss', 'sss', '1000', 1, 97, 0, '', 0),
(125, 'ssss', 'sss', '1000', 1, 102, 0, '', 0),
(124, 'ssss', 'sss', '1000', 1, 98, 0, '', 0),
(123, '12', '12', '12', 1, 104, 0, '', 0),
(122, '12', '12', '12', 1, 105, 0, '', 0),
(121, '12', '12', '12', 1, 110, 0, '', 0),
(120, '123', '13', '123', 1, 0, 0, '', 0),
(119, '123', '13', '123', 1, 0, 0, '', 0),
(118, '123', '13', '123', 1, 0, 0, '', 0),
(117, 'eeee', 'eee', '100', 1, 0, 0, '', 0),
(116, 'eeee', 'eee', '100', 1, 0, 0, '', 0),
(115, 'eeee', 'eee', '100', 1, 0, 0, '', 0),
(114, '123123123', '123', '123', 1, 0, 0, '', 0),
(113, 'dddd', 'dddd', '1000', 1, 0, 0, '', 0),
(112, 'dddd', 'dddd', '1000', 1, 0, 0, '', 0),
(130, 'Медведь', 'ываваитара ваыва', '100', 1, 0, 0, '', 0),
(142, 'Заяц', 'мягкий', '250', 1, 85, 1, '', 0),
(132, 'Медведь', 'ываваитара ваыва', '100', 1, 0, 0, '', 0),
(133, 'sss', 'sss', '1000', 1, 0, 0, '', 0),
(134, 'sss', 'sss', '1000', 1, 0, 0, '', 0),
(135, 'wwwww', 'www', '1000', 1, 0, 0, '', 0),
(136, 'kk', 'kkk', '100', 1, 0, 0, '', 0),
(137, 'www', 'ww', '100', 1, 0, 0, '', 0),
(138, 'www', 'ww', '100', 1, 0, 0, '', 0),
(139, 'www', 'ww', '100', 1, 0, 0, '', 0),
(140, 'www', 'ww', '100', 1, 0, 0, '', 0),
(141, 'Медведь', 'тра тра', '100', 1, 84, 1, '', 0),
(143, 'кукла', 'большая', '600', 1, 86, 1, '', 0),
(144, 'разное', 'пппп', '600', 1, 87, 0, '', 0),
(145, 'еще', 'лллл', '100', 1, 88, 1, '', 0),
(146, 'ььь', 'ттт', '777', 1, 89, 0, '', 0),
(147, 'ыыыыыы', 'ыы', '100', 1, 90, 0, '', 0),
(148, 'ddddddddd', 'dscdsc', '100', 1, 0, 0, '', 0),
(149, 'Ветровка "М"', 'Состав: 100% полиэстер. ..', '330', 1, 108, 1, '', 0),
(150, 'Ветровка на трикотажной падкладке "Стиль"', 'Состав: 100% полиэстер. Замеры: 12-18 мес. (80-86 см): длина по спинке - 36 см, шири..', '320', 1, 109, 1, '', 0),
(152, 'dddddddddddddd', 'vcvbcvvc  df d dfdf', '100', 1, 111, 0, '', 0),
(153, '', '', '', 0, 0, 0, '', 0),
(154, '', '', '', 0, 0, 0, '', 0),
(155, 'кукла', 'очень хорошая', '10', 1, 0, 0, '', 0),
(156, 'кукла', 'очень хорошая', '10', 1, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products_categories`
--

CREATE TABLE IF NOT EXISTS `products_categories` (
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `products_categories`
--

INSERT INTO `products_categories` (`product_id`, `category_id`) VALUES
(92, 73),
(93, 71),
(94, 71),
(95, 71),
(96, 71),
(97, 71),
(98, 71),
(99, 71),
(100, 71),
(101, 73),
(102, 72),
(103, 84),
(105, 93),
(106, 288),
(109, 286),
(111, 287),
(113, 327),
(114, 3068),
(121, 3216),
(122, 3211),
(123, 3164),
(124, 3052),
(125, 3050),
(126, 3052),
(127, 330),
(128, 3049),
(129, 3049),
(130, 3163),
(140, 327),
(141, 344),
(142, 2094),
(143, 2112),
(144, 3059),
(145, 344),
(146, 344),
(147, 344),
(148, 2902),
(149, 3049),
(150, 3049),
(151, 3049),
(152, 3197),
(155, 3049),
(156, 3122);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(3, 1),
(5, 1),
(6, 1),
(8, 1),
(9, 1),
(10, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(13, 2),
(17, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`, `first_name`) VALUES
(3, 'dimasoja@gmail.com', 'admi', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 0, NULL, 'sdf sdf '),
(5, 'dimasoja@mail.com', 'admk', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 0, NULL, 'sdf sdf '),
(6, 'dimasoja@ukr.ne', 'qwer', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1430655647, 'qwed'),
(8, 'dimasoa@ukr.net', 'asdd', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 0, NULL, 'asd'),
(9, 'dasoja@ukr.net', 'cccc', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1430678820, 'cccc'),
(10, 'dm3s@mail.ru', 'dima', 'f9f6b45dcd29a01dc124dc0141c295df7aa9ee44370309b338c27ae7ceec6b8b', 0, NULL, 'dima'),
(13, 'dim@mail.ru', 'dimas', 'f9f6b45dcd29a01dc124dc0141c295df7aa9ee44370309b338c27ae7ceec6b8b', 14, 1431199790, 'dimas'),
(14, 'dm3@mail.ru', 'qwedv', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1431203910, 'dsvsdv'),
(15, 'admin123@mail.ru', 'xxxxxxxx', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1431204173, 'xxxxxxxx'),
(16, 'dm3sddd@mail.ru', 'adminx', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1431205774, 'sdxxx'),
(17, 'admin@mail.ru', 'admin', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 162, 1448124766, 'admin'),
(18, 'dfc@mail.ru', 'dsfdsfsdf', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1439148538, 'sdfsdf'),
(19, 'qq@mail.ru', 'qqqqqqqqqqq', '5199ae786b459defe8d65dc937e22c01000c069fbae8f82d689f710457a7d120', 1, 1447451894, 'qqqqqqqqq');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
