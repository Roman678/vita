-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 18 2016 г., 19:22
-- Версия сервера: 5.5.24-log
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `smrt_eskivo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `ico` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`id`, `code`, `name`, `ico`) VALUES
(1, 'fr', 'Français', ''),
(2, 'en', 'english', ''),
(4, 'de', 'Deutsche', ''),
(5, 'es', 'Español', ''),
(6, 'pt', 'Português', ''),
(7, 'it', 'Italiano', ''),
(8, 'gr', 'Ελληνικa', ''),
(9, 'ar', 'عربي', ''),
(10, 'lt', 'Lietuviškai', '');

-- --------------------------------------------------------

--
-- Структура таблицы `smart_options`
--

CREATE TABLE IF NOT EXISTS `smart_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_option` text NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `smrt_ctg`
--

CREATE TABLE IF NOT EXISTS `smrt_ctg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parrent_id` int(11) NOT NULL DEFAULT '0',
  `link` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keyword` text NOT NULL,
  `template` text NOT NULL,
  `lang` varchar(10) NOT NULL,
  `parrent_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=76 ;

--
-- Дамп данных таблицы `smrt_ctg`
--

INSERT INTO `smrt_ctg` (`id`, `parrent_id`, `link`, `title`, `description`, `keyword`, `template`, `lang`, `parrent_cat`) VALUES
(29, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'en', 0),
(30, 0, 'features', 'features', 'features', 'features', 'features', 'en', 0),
(31, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'en', 0),
(32, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'en', 0),
(33, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'en', 0),
(34, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'fr', 0),
(35, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'de', 0),
(36, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'es', 0),
(37, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'pt', 0),
(38, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'it', 0),
(39, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'gr', 0),
(40, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'ar', 0),
(41, 0, 'about_us', 'about us', 'about us', 'about us', 'about_us', 'lt', 0),
(42, 0, 'features', 'features', 'features', 'features', 'features', 'fr', 0),
(43, 0, 'features', 'features', 'features', 'features', 'features', 'de', 0),
(44, 0, 'features', 'features', 'features', 'features', 'features', 'es', 0),
(45, 0, 'features', 'features', 'features', 'features', 'features', 'pt', 0),
(46, 0, 'features', 'features', 'features', 'features', 'features', 'it', 0),
(47, 0, 'features', 'features', 'features', 'features', 'features', 'gr', 0),
(48, 0, 'features', 'features', 'features', 'features', 'features', 'ar', 0),
(49, 0, 'features', 'features', 'features', 'features', 'features', 'lt', 0),
(50, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'fr', 0),
(51, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'de', 0),
(52, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'es', 0),
(53, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'pt', 0),
(54, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'it', 0),
(55, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'gr', 0),
(56, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'ar', 0),
(57, 0, 'contact_us', 'contact us', 'contact us', 'contact us', 'contact_us', 'lt', 0),
(58, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'fr', 0),
(59, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'de', 0),
(60, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'es', 0),
(61, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'pt', 0),
(62, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'it', 0),
(63, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'gr', 0),
(64, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'ar', 0),
(65, 0, 'gallery', 'gallery', 'gallery', 'gallery', 'gallery', 'lt', 0),
(66, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'fr', 0),
(67, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'de', 0),
(68, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'es', 0),
(69, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'pt', 0),
(70, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'it', 0),
(71, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'gr', 0),
(72, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'ar', 0),
(73, 0, 'whats_new', 'whats new', 'whats new', 'whats new', 'whats_new', 'lt', 0),
(74, 0, 'Terms_Conditions', 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', 'page', 'en', 0),
(75, 0, 'Credentials', 'Credentials', 'Credentials', 'Credentials', 'page', 'en', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `smrt_pg`
--

CREATE TABLE IF NOT EXISTS `smrt_pg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_write` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` text NOT NULL,
  `category` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keyword` text NOT NULL,
  `short_text` text NOT NULL,
  `full_text` text NOT NULL,
  `img` text NOT NULL,
  `lang` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `smrt_pg`
--

INSERT INTO `smrt_pg` (`id`, `data_write`, `link`, `category`, `title`, `description`, `keyword`, `short_text`, `full_text`, `img`, `lang`) VALUES
(1, '2015-08-12 05:46:31', 'about_us', 29, 'about us', 'about us', 'about us', '<p>about us here content</p>', '<p>about us here content</p>', '', 'en'),
(2, '2015-08-12 03:01:45', 'features', 30, 'features', 'features', 'features', '<p>features</p>', '<p>features</p>', '', 'en'),
(4, '2015-08-12 03:02:30', 'gallery', 32, 'gallery', 'gallery', 'gallery', '<p>gallery</p>', '<p>gallery</p>', '', 'en'),
(5, '2015-08-12 03:02:51', 'whats_new', 33, 'whats new', 'whats new', 'whats new', '<p>whats new</p>', '<p>whats new</p>', '', 'en'),
(6, '2015-08-12 03:16:08', 'contact_us', 31, 'contact us', 'contact us', 'contact us', '<p>contact us</p>', '<p>contact us</p>', '', 'en'),
(7, '2015-08-14 02:14:05', 'Terms_&_Conditions', 74, 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', '<p>Terms &amp; Conditions</p>', '<p>Terms &amp; Conditions</p>', '', 'en'),
(8, '2015-08-14 02:14:33', 'Credentials', 75, 'Credentials', 'Credentials', 'Credentials', '<p>Credentials</p>', '<p>Credentials</p>', '', 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `smrt_shop`
--

CREATE TABLE IF NOT EXISTS `smrt_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `category` int(11) NOT NULL,
  `text` text NOT NULL,
  `images` text NOT NULL,
  `tags` text NOT NULL,
  `description` text NOT NULL,
  `keyword` text NOT NULL,
  `lang` varchar(100) NOT NULL,
  `data_write` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `isset` varchar(20) NOT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT '0.00',
  `sale` int(2) NOT NULL,
  `home` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Дамп данных таблицы `smrt_shop`
--

INSERT INTO `smrt_shop` (`id`, `title`, `link`, `category`, `text`, `images`, `tags`, `description`, `keyword`, `lang`, `data_write`, `user_id`, `code`, `isset`, `price`, `sale`, `home`) VALUES
(58, 'Champagne Taittinger', 'Champagne_Taittinger', 19, '<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Taittinger1.jpg,Taittinger3.jpg', 'Champagne', 'Champagne Taittinger', 'Champagne Taittinger', 'fr', '2015-05-18 00:14:04', 0, '003', 'on', 100.00, 0, 'on'),
(56, 'Haut Medoc de Giscours', 'Haut_Medoc_de_Giscours', 16, '<p>A perfect blend of Cabernet Sauvignon and Merlot, Le Haut-Medoc de Giscours benefits<br />from the meticulous care of the team at Chateau Giscours. This wine is very pleasant in its<br />early years, offering a pure, intense bouquet of fruit and spices and expressing the quality<br />of its origins with the passing of time. !!!!!</p>\r\n<p>GRAPE VARIETY</p>\r\n<p><br />50% Merlot 50% Cabernet</p>\r\n<p>TASTING NOTES</p>\r\n<p><br />A dark deep ruby red.<br />A flattering bouquet giving<br />notes of Cinnamon, Clove,<br />Blueberry, and Blackberry !<br />Medium to full body with a<br />taste ofenerous, ripe black<br />fruits, some spicyness, juicy. !!!</p>\r\n<p>CULINARY ASSOCIATIONS</p>\r\n<p><br />This wine goes wonderfully<br />w well with red meats, food in<br />sauce, Perking duck and<br />goose. It really comes into its</p>', 'Giscours1.jpg,Giscours2.jpg', 'kosher', 'Haut Medoc de Giscours', 'Haut Medoc de Giscours', 'fr', '2015-05-17 23:50:36', 0, '001', 'on', 100.00, 0, 'on'),
(57, 'Chateau Capbern Gasqueton', 'Chateau_Capbern_Gasqueton', 14, '<p>Top 3 facts: !<br />#1 Due to its cooler terroir is usually the last major appellation in the Medoc<br />to start harvesting.<br />#2 St. Estephe has the largest concentration of Cru Bourgeois classified<br />growths in the Medoc, with 35 chateaux classed as Cru Bourgeois.<br />#3 Ch&acirc;teau Capbern Gasqueton has large concentrations of clay in their<br />terroir, which helps the region in the hot, dry vintages, as well as provide great<br />soils for Merlot.</p>\r\n<p>GRAPE VARIETY<br />70% Grenache !<br />30% Cinsault</p>\r\n<p>TASTING NOTES<br />Deep ruby in color emphasized by<br />dark purple reflections.<br />Rich, vibrant, fruit driven nose with plum !<br />Full bodied, and really good value stuff.<br />Tobacco, and slightly charred oak</p>\r\n<p>Region:<br />Boredaux<br />Crop year:<br />2011<br />Alcoholic strength:<br />12.5%</p>\r\n<p>CULINARY ASSOCIATIONS<br />The ideal accompaniment for a roasted, braised or grilled meats like steak, veal, pork, beef<br />and game. The pairs with hard and soft cheese also.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Carbern1.jpg,Carbern2.jpg,Carbern3.jpg', 'blush', 'Chateau Capbern Gasqueton', 'Chateau Capbern Gasqueton', 'fr', '2015-05-18 00:01:42', 0, '002', 'on', 100.00, 0, 'on'),
(59, 'Chateau Haut Bergey Blanc', 'Chateau_Haut_Bergey_Blanc', 18, '<p>Region:<br />Bordeaux<br />Crop year:<br />2000<br />Alcoholic strength:<br />13.5%</p>', 'Blanc1.jpg,Blanc2.jpg,Blanc3.jpg', 'Chateau Haut', 'Chateau Haut Bergey Blanc', 'Chateau Haut Bergey Blanc', 'fr', '2015-05-18 00:20:38', 0, '005', 'on', 100.00, 0, 'on'),
(60, 'Petit Castel', 'Petit_Castel', 17, '<p>TASTING NOTES<br />Black cherry red.<br />Green pepper notes on the nose. !!<br />Big, round, sweet blackberry and blackberry,<br />give<br />a mouthful of fruit.</p>\r\n<p>&nbsp;</p>\r\n<p>Region:<br />Bordeaux<br />Crop year:<br />2012<br />Alcoholic strength:<br />14.5%</p>\r\n<p>GRAPE VARIETY<br />60% Merlot<br />40% Cabernet</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Castel1.jpg,Castel2.jpg', 'Petit Castel', 'Petit Castel', 'Petit Castel', 'fr', '2015-05-18 00:27:56', 0, '006', 'on', 100.00, 0, 'on'),
(61, 'Chateau Citran', 'Chateau_Citran', 17, '<p>A portion of the Chateau Citran vineyards is located not far from the Margaux<br />estate of Chateau Ferriere. It is a large, Left Bank estate, with 90 hectares of<br />vines on a terroir of sand, gravel, chalk and clay. On average, the vines are 25<br />years of age. The goal of Chateau Citran is to eventually increase the portion of<br />Cabernet Sauvignon in the vineyards, with new plantings that will take the<br />place of some of the estates forested areas.<br />The wine of Chateau Citran is vinified in large, temperature controlled,<br />stainless steel vats. Malolatic fermentation takes place in tank. The wine is<br />aged in 40% new, French oak for between 12 and 14 months.</p>\r\n<p>Region:<br />Bordeaux<br />Crop year:<br />2009<br />Alcoholic strength:<br />13%</p>\r\n<p>VARIETY<br />58%<br />Cabernet Sauvignon<br />42%<br />Merlot</p>', 'Citran1.jpg,Citran2.jpg', 'Chateau Citran', 'Chateau Citran', 'Chateau Citran', 'fr', '2015-05-18 00:34:03', 0, '007', 'on', 100.00, 0, 'on'),
(62, 'Champagne Taittinger', 'Champagne_Taittinger', 19, '<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Taittinger1.jpg,Taittinger3.jpg', 'Champagne', 'Champagne Taittinger', 'Champagne Taittinger', 'en', '2015-05-18 00:14:04', 0, '003', 'on', 100.00, 0, 'on'),
(63, 'Haut Medoc de Giscours', 'Haut_Medoc_de_Giscours', 16, '<p>A perfect blend of Cabernet Sauvignon and Merlot, Le Haut-Medoc de Giscours benefits<br />from the meticulous care of the team at Chateau Giscours. This wine is very pleasant in its<br />early years, offering a pure, intense bouquet of fruit and spices and expressing the quality<br />of its origins with the passing of time. !!!!!</p>\r\n<p>GRAPE VARIETY</p>\r\n<p><br />50% Merlot 50% Cabernet</p>\r\n<p>TASTING NOTES</p>\r\n<p><br />A dark deep ruby red.<br />A flattering bouquet giving<br />notes of Cinnamon, Clove,<br />Blueberry, and Blackberry !<br />Medium to full body with a<br />taste ofenerous, ripe black<br />fruits, some spicyness, juicy. !!!</p>\r\n<p>CULINARY ASSOCIATIONS</p>\r\n<p><br />This wine goes wonderfully<br />w well with red meats, food in<br />sauce, Perking duck and<br />goose. It really comes into its</p>', 'Giscours1.jpg,Giscours2.jpg', 'kosher', 'Haut Medoc de Giscours', 'Haut Medoc de Giscours', 'en', '2015-05-17 23:50:36', 0, '001', 'on', 100.00, 0, 'on'),
(64, 'Chateau Capbern Gasqueton', 'Chateau_Capbern_Gasqueton', 14, '<p>Top 3 facts: !<br />#1 Due to its cooler terroir is usually the last major appellation in the Medoc<br />to start harvesting.<br />#2 St. Estephe has the largest concentration of Cru Bourgeois classified<br />growths in the Medoc, with 35 chateaux classed as Cru Bourgeois.<br />#3 Ch&acirc;teau Capbern Gasqueton has large concentrations of clay in their<br />terroir, which helps the region in the hot, dry vintages, as well as provide great<br />soils for Merlot.</p>\r\n<p>GRAPE VARIETY<br />70% Grenache !<br />30% Cinsault</p>\r\n<p>TASTING NOTES<br />Deep ruby in color emphasized by<br />dark purple reflections.<br />Rich, vibrant, fruit driven nose with plum !<br />Full bodied, and really good value stuff.<br />Tobacco, and slightly charred oak</p>\r\n<p>Region:<br />Boredaux<br />Crop year:<br />2011<br />Alcoholic strength:<br />12.5%</p>\r\n<p>CULINARY ASSOCIATIONS<br />The ideal accompaniment for a roasted, braised or grilled meats like steak, veal, pork, beef<br />and game. The pairs with hard and soft cheese also.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Carbern1.jpg,Carbern2.jpg,Carbern3.jpg', 'blush', 'Chateau Capbern Gasqueton', 'Chateau Capbern Gasqueton', 'en', '2015-05-18 00:01:42', 0, '002', 'on', 100.00, 0, 'on'),
(65, 'Chateau Haut Bergey Blanc', 'Chateau_Haut_Bergey_Blanc', 18, '<p>Region:<br />Bordeaux<br />Crop year:<br />2000<br />Alcoholic strength:<br />13.5%</p>', 'Blanc1.jpg,Blanc2.jpg,Blanc3.jpg', 'Chateau Haut', 'Chateau Haut Bergey Blanc', 'Chateau Haut Bergey Blanc', 'en', '2015-05-18 00:20:38', 0, '005', 'on', 100.00, 0, 'on'),
(66, 'Petit Castel', 'Petit_Castel', 13, '<p>TASTING NOTES<br />Black cherry red.<br />Green pepper notes on the nose. !!<br />Big, round, sweet blackberry and blackberry,<br />give<br />a mouthful of fruit.</p>\r\n<p>&nbsp;</p>\r\n<p>Region:<br />Bordeaux<br />Crop year:<br />2012<br />Alcoholic strength:<br />14.5%</p>\r\n<p>GRAPE VARIETY<br />60% Merlot<br />40% Cabernet</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Castel1.jpg,Castel2.jpg', 'Petit Castel', 'Petit Castel', 'Petit Castel', 'fr', '2015-05-28 03:20:45', 0, '006', 'on', 100.00, 0, 'on'),
(67, 'Chateau Citran', 'Chateau_Citran', 13, '<p>A portion of the Chateau Citran vineyards is located not far from the Margaux<br />estate of Chateau Ferriere. It is a large, Left Bank estate, with 90 hectares of<br />vines on a terroir of sand, gravel, chalk and clay. On average, the vines are 25<br />years of age. The goal of Chateau Citran is to eventually increase the portion of<br />Cabernet Sauvignon in the vineyards, with new plantings that will take the<br />place of some of the estates forested areas.<br />The wine of Chateau Citran is vinified in large, temperature controlled,<br />stainless steel vats. Malolatic fermentation takes place in tank. The wine is<br />aged in 40% new, French oak for between 12 and 14 months.</p>\r\n<p>Region:<br />Bordeaux<br />Crop year:<br />2009<br />Alcoholic strength:<br />13%</p>\r\n<p>VARIETY<br />58%<br />Cabernet Sauvignon<br />42%<br />Merlot</p>', 'Citran1.jpg,Citran2.jpg', 'Chateau Citran', 'Chateau Citran', 'Chateau Citran', 'en', '2015-05-28 03:22:41', 0, '007', 'on', 100.00, 0, 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `smrt_types`
--

CREATE TABLE IF NOT EXISTS `smrt_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_types` text NOT NULL,
  `lang` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Структура таблицы `smrt_usr`
--

CREATE TABLE IF NOT EXISTS `smrt_usr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `phone` varchar(200) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `access_group` int(2) NOT NULL,
  `last_enter` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `online` int(11) NOT NULL,
  `md5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `smrt_usr`
--

INSERT INTO `smrt_usr` (`id`, `login`, `pass`, `phone`, `name`, `email`, `access_group`, `last_enter`, `online`, `md5`) VALUES
(1, 'smart', '', '', 'smart', 'tropic.r@gmail.com', 1, '2015-05-01 00:51:50', 0, '48d9ab3f4b99732cb95d81d6019d034d');

-- --------------------------------------------------------

--
-- Структура таблицы `smrt_vendors`
--

CREATE TABLE IF NOT EXISTS `smrt_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_vendors` text NOT NULL,
  `lang` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
