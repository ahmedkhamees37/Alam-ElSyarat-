-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 مايو 2019 الساعة 14:18
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(22) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `password` varchar(22) NOT NULL,
  `img` varchar(222) NOT NULL,
  `phone_number` varchar(333) NOT NULL,
  `Email` varchar(333) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `img`, `phone_number`, `Email`) VALUES
(5, 'ahmed', '111', 'images (5).jpg', '01550844759 ', 'ahmedlkamees37@gmail.com'),
(11, 'khamis', '222', '5064346-1921554641.jpg', '3535434 ', 'ahmedkhamees37@gmail.com');

-- --------------------------------------------------------

--
-- بنية الجدول `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `votes` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `links`
--

INSERT INTO `links` (`id`, `title`, `description`, `votes`) VALUES
(0, 'Mercedes-Benz\r\n', 'is a German global automobile marque and a division of Daimler AG. The brand is known for luxury vehicles, buses, coaches, and trucks. The headquarters is in Stuttgart, Baden-Württemberg. The name ?rst appeared in 1926 under Daimler-Benz. In 2018, Mercedes-Benz was the biggest selling premium vehicle brand in the world, having sold 2.31 million passenger cars.[4] Mercedes-Benz traces its origins to Daimler-MotorenGesellschaft''s 1901 Mercedes and Karl Benz''s 1886 Benz Patent-Motorwagen, which is widely regarded as the ?rst gasoline-powered automobile. The slogan for the brand is "the best or nothing".[5]\r\n', 0),
(0, 'Hyundai Motor Company\r\n', 'commonly known as Hyundai Motors (Hangul: ???? ?; Hanja: ?????; RR: Hyeondae Jadongcha  listen; Hangul: ??; Hanja: ? ?; MR: Hy?ndae, IPA: [hj???nd?], [3] modernity; KRX: 005380), is a South Korean multinationalautomotive manufacturer headquartered in Seoul. The company was founded in 1967 and, along with its 32.8% owned subsidiary, Kia Motors, and its 100% owned luxury subsidiary Genesis Motor,[4] altogether comprise the Hyundai Motor Group. It is the third largest vehicle manufacturer in the world.[5]Hyundai operates the world''s largest integrated automobile manufacturing facility[6] in Ulsan, South Korea which has an annual production capacity of 1.6 million units. The company employs about 75,000 people worldwide. Hyundai vehicles are sold in 193 countries through some 5,000 dealerships and showrooms.[7]', 0),
(0, 'Audi AG', ' is a German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles. Audi is a member of the Volkswagen Group and has its roots at Ingolstadt, Bavaria, Germany. Audi-branded vehicles are produced in nine production facilities worldwide.The origins of the company are complex,going back to the early 20th century and the initial enterprises (Horch and the Audiwerke) founded by engineer August Horch; and two other manufacturers (DKW and Wanderer), leading to the foundation of Auto Union in 1932. The modern era of Audi essentially began in the 1960s when Auto Union was acquired by Volkswagen from Daimler-Benz.[10] After relaunching the Audi brand with the 1965 introduction of the Audi F103 series, Volkswagen merged Auto Union with NSU Motorenwerke in 1969, thus creating the present day form of the company.\r\nThe company name is based on the Latintranslation of the surname of the founder, August Horch. "Horch", meaning "listen" in German, becomes "audi" in Latin. The four rings of the Audi logo each represent one of four car companies that banded together to create Audi''s predecessor company, Auto Union. Audi''s slogan is Vorsprung durch Technik, meaning "Being Ahead through Technology". However, Audi USA had used the slogan "Truth in Engineering" from 2007 to 2016, and have not used the slogan since 2016.[11] Audi, along with fellow German marques BMW and Mercedes-Benz, is among the best-selling luxury automobile brands in the world', 0),
(0, 'Ferrari', 'is\r\nan Italianluxury sports car manufacturer based in Maranello. Founded by Enzo Ferrari in 1939 out of Alfa Romeo''s race division as Auto Avio Costruzioni, the company built its ?rst car in 1940. However, the company''s inception as an auto manufacturer is usually recognized in 1947, when the ?rst Ferrari-badged car was completed. In 2014 Ferrari was rated the world''s most powerful brand by Brand Finance.[3] In June 2018, the 1964 250 GTO became the most expensive car in history, setting an all-time record selling price of $70 million.[4][5]\r\nFiat S.p.A. acquired 50% of Ferrari in 1969 and expanded its stake to 90% in 1988.[6] In October 2014 Fiat Chrysler Automobiles N.V.(FCA) announced its intentions to separate Ferrari S.p.A. from FCA; as of the announcement FCA owned 90% of Ferrari.[7] [8][9] The separation began in October 2015 with a restructuring that established Ferrari N.V. (a company incorporated in the Netherlands) as the new holding company of the Ferrari group and the subsequent sale by FCA of 10% of the shares in an IPO and concurrent listing of common shares on the New York Stock Exchange.[10] Through the remaining steps of the separation, FCA''s interest in Ferrari''s business was distributed to shareholders of FCA, with 10% continuing to be owned by Piero Ferrari.[11] The spin-off was completed on 3 January 2016.[10]\r\nThroughout its history, the company has been noted\r\nfor its continued participation in racing, especially in Formula One, where it is the oldest and most successful racing team, holding the most constructors championships (16) and having produced the highest number of drivers'' championship wins (15).[12] Ferrari road cars are generally seen as a symbol of speed, luxury and wealth.[13]\r\n', 0),
(0, 'BMW AG ', ' originally an initialism for Bayerische Motoren Werke in German, or Bavarian Motor Works in English) is a German multinational company which currently produces automobiles and motorcycles, and also produced aircraft engines until 1945. The company was founded in 1916 and is headquartered in Munich, Bavaria. BMW produces motor vehicles in Germany, Brazil, China, India, South Africa, the United Kingdom, and the United States. In 2015, BMW was the world''s twelfth largest producer of motor vehicles, with 2,279,503 vehicles produced. [2] The Quandt family are long-term shareholders of the company, with the remaining shares owned by public ?oat.\r\nAutomobiles are marketed under the\r\nbrands BMW (with sub-brands BMW M for performance models and BMW i for plug-in electric performance models and BMW i for plug-in electric cars), Mini and Rolls-Royce. Motorcycles are marketed under the brand BMW Motorrad.\r\nThe company has signi?cant motorsport history, especially in touring cars, Formula 1, sports cars and the Isle of Man TT', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `head` varchar(77) NOT NULL,
  `det` varchar(2222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- إرجاع أو استيراد بيانات الجدول `menu`
--

INSERT INTO `menu` (`id`, `head`, `det`) VALUES
(2, 'Ø®Ø¯Ù…Ø§ØªÙ†Ø§', 'Ø¹Ø±Ø¶ Ø§Ø­Ø¯Ø« Ø§Ù†ÙˆØ§Ø¹ Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª ÙˆØ§Ù„Ù…ÙˆØ¯ÙŠÙ„Ø§Øª ÙˆØ§Ù„ØªØµØ§Ù…ÙŠÙ… Ø¨Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø§Ù†ÙˆØ§Ø¹ Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª Ù‡ÙˆÙ†Ø¯Ø§ÙŠ Ùˆ Ù…Ø±Ø³ÙŠØ¯Ø³ Ùˆ ÙÙŠØ±Ø§Ø±ÙŠ ÙˆØ§ÙˆØ¯ÙŠ Ø§Ù„Ø®   '),
(3, 'Ù…Ù† Ø§Ø¹Ù…Ø§Ù„Ù†Ø§', 'Ø³ÙŠØ§Ø±Ø§Øª ØªØ¹Ù…Ù„ Ø¨Ø§Ù„Ø¯ÙŠØ²Ù„ Ø§Ù„Ø­ÙŠÙˆÙŠ Ùˆ Ø³ÙŠØ§Ø±Ø§Øª ØªØ¹Ù…Ù„ Ø¨Ø§Ù„ÙƒØ­ÙˆÙ„ Ùˆ Ø³ÙŠØ§Ø±Ø§Øª ØªØ¹Ù…Ù„ Ø¨Ø§Ù„ØºØ§Ø² Ø§Ù„Ø·Ø¨ÙŠØ¹ÙŠ Ùˆ Ø³ÙŠØ§Ø±Ø§Øª ØªØ¹Ù…Ù„ Ø¨Ø§Ù„ØºØ§Ø² Ø§Ù„Ù†ÙØ·ÙŠ Ø§Ù„Ù…Ø³Ø§Ù„ ÙˆØ§Ù„Ø³ÙŠØ§Ø±Ø§Øª Ø§Ù„ÙƒÙ‡Ø±Ø¨Ø§Ø¦ÙŠØ© '),
(4, 'Ø§Ø®Ø± Ø§Ù„Ø§Ø®Ø¨Ø§Ø±', 'Ù‡ÙŠÙˆÙ†Ø¯Ø§ÙŠ ØªÙ‚Ø¯Ù… "Ø³ÙˆÙ†Ø§ØªØ§" Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø© ÙƒÙ„ Ù‹ÙŠØ§ ÙÙŠ Ù†ÙŠÙˆÙŠÙˆØ±Ùƒ , Ø¨ÙˆØ±Ø´ ØªØ³ØªØ¹ÙŠÙ† Ø¨Ø³Ù‚Ù Ù‚Ù…Ø§Ø´ÙŠ Ù„ØªØ®ÙÙŠÙ ÙˆØ²Ù† ""Speed , ÙˆØ¯ÙŠ ØªÙØªØ­ Ø§Ù„Ø¨Ø§Ø¨ Ù„Ø´Ø±Ø§Ø¡  A6Ø§Ù„ÙØ§Ø±Ù‡Ø© Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø©.. ,"Ø¨ÙŠ Ø¥Ù… Ø¯Ø¨Ù„ÙŠÙˆ  "i8Ø§Ù„Ù‡Ø¬ÙŠÙ† ØªØ¯Ø®Ù„ Ø§Ù„Ø³ÙˆÙ‚ Ø§Ù„Ù…ØµØ±ÙŠ Ø±Ø³Ù… Ù‹ÙŠØ§.. '),
(5, 'Ù…Ù† Ù†Ø­Ù†', '  Ø®Ø¨Ø±Ø§Ø¡ ÙÙŠ Ø¹Ø§Ù„Ù… Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª'),
(9, 'fff', 'ttttt');

-- --------------------------------------------------------

--
-- بنية الجدول `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `date` varchar(33) CHARACTER SET utf8 NOT NULL,
  `head` varchar(222) CHARACTER SET utf8 NOT NULL,
  `det` varchar(333) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- إرجاع أو استيراد بيانات الجدول `news`
--

INSERT INTO `news` (`id`, `date`, `head`, `det`) VALUES
(1, '2019/05/04', 'Ù‡ÙŠÙˆÙ†Ø¯Ø§ÙŠ ØªÙ‚Ø¯Ù… "Ø³ÙˆÙ†Ø§ØªØ§" Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø© ÙƒÙ„ Ù‹ÙŠØ§ ÙÙŠ Ù†ÙŠÙˆÙŠÙˆØ±Ùƒ', 'ÙƒØ´ÙØª Ø´Ø±ÙƒØ© "Ù‡ÙŠÙˆÙ†Ø¯Ø§ÙŠ Ù…ÙˆØªÙˆØ±" Ø§Ù„ÙƒÙˆØ±ÙŠØ© Ø§Ù„Ø¬Ù†ÙˆØ¨ÙŠØ© Ù„ØµÙ†Ø§Ø¹Ø© ÙˆØªØ·ÙˆÙŠØ±\r\nØ§Ù„Ø³ÙŠØ§Ø±Ø§ØªØŒ Ø¹Ù† Ø§Ù„Ù†Ù…ÙˆØ°Ø¬ Ø§Ù„Ø¬Ø¯ÙŠØ¯ ÙƒÙ„ÙŠØ§ Ù…Ù† Ø³ÙŠØ§Ø±Ø§Øª " "SonataØ§Ù„Ø¹Ø§Ø¦Ù„ÙŠØ©\r\nØ§Ù„Ø´Ù‡ÙŠØ±Ø© ÙˆØ°Ù„Ùƒ Ø¹Ù„Ù‰ Ù‡Ø§Ù…Ø´ Ù…Ø´Ø§Ø±ÙƒØªÙ‡Ø§ Ø¨Ù…Ø¹Ø±Ø¶ Ù†ÙŠÙˆÙŠÙˆØ±Ùƒ Ø§Ù„Ø¯ÙˆÙ„ÙŠ\r\nÙ„Ù„Ø³ÙŠØ§Ø±Ø§Øª Ø§Ù„Ù…Ù…'),
(2, '2019/05/04', 'ÙŠÙˆÙ… Ø§Ù„Ø£Ø±Ø¶', 'ØªØ­Ù„ ÙÙŠ  22Ø£Ø¨Ø±ÙŠÙ„ Ù…Ù† ÙƒÙ„ Ø¹Ø§Ù… Ø°ÙƒØ±Ù‰ "ÙŠÙˆÙ… Ø§Ù„Ø£Ø±Ø¶"ØŒ ÙˆÙ‡ÙŠ Ø§Ù„Ù…Ù†Ø§Ø³Ø¨Ø©\r\nØ§Ù„ØªÙŠ Ø§Ø¨ØªØ¯Ø¹Ù‡Ø§ Ø§Ù„Ø³ÙŠÙ†Ø§ØªÙˆØ± Ø§Ù„Ø£Ù…Ø±ÙŠÙƒÙŠ Ø¬Ø§ÙŠÙ„ÙˆØ±Ø¯ Ù†ÙŠÙ„Ø³ÙˆÙ† Ù‚Ø¨Ù„  49Ø¹Ø§ Ù‹Ù…Ø§\r\nÙˆØ³Ø¹Ù‰ Ù…Ù† Ø®Ù„Ø§Ù„Ù‡Ø§ Ø¥Ù„Ù‰ Ø§Ù„ØªÙˆØ¹ÙŠØ© Ø¨Ù…Ø®Ø§Ø·Ø± Ø§Ù„Ù…Ù…Ø§Ø±Ø³Ø§Øª Ø§Ù„Ø¨Ø´Ø±ÙŠØ© Ø§Ù„Ø®Ø§Ø·Ø¦Ø©\r\nØ¹Ù„Ù‰ Ø§Ù„'),
(3, '2019/05/04', 'fff', ' ÙƒØ´ÙØª Ø´Ø±ÙƒØ© Ø¨ÙˆØ±Ø´ Ø§Ù„Ù†Ù‚Ø§Ø¨ Ø¹Ù† Ù†Ø³Ø®Ø©  SpeedsterÙ…Ù† Ø£ÙŠÙ‚ÙˆÙ†ØªÙ‡Ø§\r\n ØŒ911ÙˆØ°Ù„Ùƒ Ø®Ù„Ø§Ù„ ÙØ¹Ø§Ù„ÙŠØ§Øª Ù…Ø¹Ø±Ø¶ Ù†ÙŠÙˆÙŠÙˆØ±Ùƒ Ø§Ù„Ø¯ÙˆÙ„ÙŠ Ù„Ù„Ø³ÙŠØ§Ø±Ø§Øª\r\nÙˆØ§Ù„Ù…Ù…ØªØ¯ Ø­ØªÙ‰  28Ù…Ù† Ø§Ù„Ø´Ù‡Ø± Ø§Ù„Ø¬Ø§Ø±ÙŠ ÙˆØ£ÙˆØ¶Ø­Øª Ø§Ù„Ø´Ø±ÙƒØ© Ø§Ù„Ø£Ù„Ù…Ø§Ù†ÙŠØ© Ø£Ù†\r\nØ³ÙŠØ§Ø±ØªÙ‡Ø§ Ø§Ù„Ø¬Ø¯ÙŠØ¯Ø© ØªØ¹ØªÙ…Ø¯ Ø¹Ù„Ù'),
(11, '2019/05/13', 'fg', 'ffgf'),
(10, '2019/05/12', ' <a href="indexx.php"><button>Ù„Ù„Ø¨Ø­Ø« Ø¹Ù† Ø§Ù„Ù…Ø°ÙŠØ¯</button></a>', '    ');

-- --------------------------------------------------------

--
-- بنية الجدول `serv`
--

CREATE TABLE IF NOT EXISTS `serv` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `head` varchar(88) CHARACTER SET latin1 NOT NULL,
  `img` varchar(222) NOT NULL,
  `det` varchar(333) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- إرجاع أو استيراد بيانات الجدول `serv`
--

INSERT INTO `serv` (`id`, `head`, `img`, `det`) VALUES
(2, 'ÙÙŠØ±Ø§Ø±ÙŠ', 'images_New1.jpg', 'Ù‡ÙŠ Ø´Ø±ÙƒÙ‡ ØµÙ†Ø§Ø¹Ø© Ø³ÙŠØ§Ø±Ø§Øª Ø±ÙŠØ§Ø¶ÙŠÙ‡ Ù…Ù‚Ø±Ù‡Ø§ ÙÙŠ Ù…Ø§Ø±Ø§Ù†ÙŠÙ„Ùˆ\r\nÙÙŠ Ø¥ÙŠØ·Ø§Ù„ÙŠØ§ØŒ Ø£Ø³Ø³Ù‡Ø§ Ø¥Ù†Ø²Ùˆ ÙÙŠØ±Ø§Ø±ÙŠ ÙÙŠ Ø¹Ø§Ù…  ØŒ1947ÙˆØªØ¹ØªØ¨Ø± Ø§Ù„Ø¹Ù„Ø§Ù…Ø©\r\nØ§Ù„ØªØ¬Ø§Ø±ÙŠØ© Ù…Ù† Ù‚Ø¨Ù„ Ø§Ù„Ø¥ÙŠØ·Ø§Ù„ÙŠÙŠÙ† Ø¨Ø£Ù†Ù‡Ø§ "Ø§Ù„Ø£ÙƒØ«Ø± Ø´Ù‡Ø±Ø© ÙÙŠ ØªØ§Ø±ÙŠØ® Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª ".\r\nÙˆØ¨Ø¯Ø£ ØªØ§Ø±ÙŠØ® Ø´Ø±'),
(3, 'Ø´Ø±ÙƒØ© Ù‡ÙŠÙˆÙ†Ø¯Ø§ÙŠ Ù…ÙˆØªÙˆØ±', 'images (5)_New1.jpg', 'ÙØ±Ø¹ Ù…Ù† Ù…Ø¬Ù…ÙˆØ¹Ø© Ø³ÙŠØ§Ø±Ø§Øª Ù‡ÙŠÙˆÙ†Ø¯Ø§ÙŠ/ÙƒÙŠØ§ØŒ ÙˆÙ‡ÙŠ Ø«Ø§Ù†ÙŠ Ø£ÙƒØ¨Ø± Ø´Ø±ÙƒØ©\r\nÙÙŠ ÙƒÙˆØ±ÙŠØ§ Ø§Ù„Ø¬Ù†ÙˆØ¨ÙŠØ©Ø¨Ø¹Ø¯ Ø³Ø§Ù…Ø³ÙˆÙ†Ø¬ØŒ ÙˆØ±Ø§Ø¨Ø¹ Ø£ÙƒØ¨Ø± Ù…ØµÙ†Ø¹ÙŠ Ø§Ù„Ø³ÙŠØ§Ø±Ø§Øª\r\nÙÙŠ Ø§Ù„Ø¹Ø§Ù„Ù… Ù…Ù† Ø­ÙŠØ« Ø¹Ø¯Ø¯ Ø§Ù„ÙˆØ­Ø¯Ø§Øª Ø§Ù„Ù…Ø¨Ø§Ø¹Ø© Ø³Ù†ÙˆÙŠ Ù‹Ø§ØŒ ÙˆÙˆØ§Ø­Ø¯Ø© Ù…Ù† Ø£ÙƒØ¨Ø±\r\nØ´Ø±ÙƒØ§Øª Ø£Ø³ÙŠØ§Ø');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
