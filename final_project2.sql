-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 22 2019 г., 15:26
-- Версия сервера: 10.4.8-MariaDB
-- Версия PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `final_project2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `short_content`, `content`, `post_date`) VALUES
(3, 2, '  8 любопытных фактов о Java 8 любопытных фактов о Java 8 любопытных фактов о Java', 'В 1995 году Sun Microsystems выпустили объектно-ориентированную среду программирования Java. И сейчас этот язык стал одним из самых популярных во всем мире.', 'Востребованность Java действительно впечатляет. После запуска вышло 9 основных версий. Они стали феноменальными по одной очень важной причине – редчайшей портативности, ведь приложения на Java подходят для любой ОС или устройства. \r\n\r\n\r\n\r\nГлавными преимуществами этой среды можно назвать независимую архитектуру, простоту в исполнении программ, надежность и безопасность. \r\n\r\n\r\n\r\nИ в подтверждение своих слов, предлагаем вам познакомиться с 8 любопытными фактами о Java:\r\n\r\nВ Соединенных Штатах на 90% компьютеров есть Java VM. И больше чем 95% корпоративных ПК используют данный язык. \r\nНа старте разработки Java проектировался для цифрового интерактивного TV. Однако сфера по уровню развития оказалась неготовой, чтобы применять его. \r\nСоздатель языка Джеймс Гослинг изначально назвал свой продукт в честь дерева, которое росло возле его офиса – Oak (Дуб). Потом имя изменили на Green, но только третий вариант стал окончательным – Java. Вдохновением для разработчика стал одноименный сорт кофе. Вот почему на официальной эмблеме красуется символ чашки с дымящимся напитком. Также распространена версия об аллюзии, т. е. намеке на кофейные аппараты, которые первыми среди прочих бытовых устройств начали программироваться на Java. В 2010 году контроль за развитием языка перешёл к Oracle, поглотившей фирму Sun Microsystems. \r\nВ среднем заработная плата Java-программиста составляет около 84 тысяч долларов. Во всем мире насчитывается до 9 млн Java-разработчиков.\r\nПортал Tiobe.com отдал Java II место в рейтинге популярности языков программирования, признав более востребованным только один язык – C. \r\nОсновная Java-технология – фреймворк автоматического тестирования программ JUnit – используется 8 из 10 программистами. Следующим по популярности является Jenkins: им пользуются 70% специалистов. \r\nВ последнем релизе эффективность и производительность среды были повышены за счет уменьшения числа стандартных вставок, улучшению коллекций и добавлению примечаний.\r\nДюка – символ языка Java – создал Джо Пэлрэнг. Впоследствии одной из работ аниматора стал популярный во всем мире мультфильм \"Шрэк\". ', '2019-11-11 13:58:51'),
(6, 2, ' Bjarne Stroustrup On Why Learn C++', 'Computers can learn to find flares and other events in vast streams of solar images to help forecasters issue timely alerts, according to a new study. The machine-learning technique searches satellite data for features significant for space weather. Changing conditions on the Sun can affect various technologies on Earth, blocking radio communications, damaging power grids, and diminishing navigation system accuracy.', 'Being able to process solar data in real time is important because flares erupting on the Sun impact Earth over the course of minutes. These techniques provide a rapid, continuously updated overview of solar features and can point us to areas requiring more scrutiny,\" said Rob Steenburgh, a forecaster in the NOAA Space Weather Prediction Center (SWPC) in Boulder.\r\n\r\nThe research was published in October in the Journal of Space Weather and Space Climate.\r\n\r\nTo predict incoming space weather, forecasters summarize current conditions on the Sun twice daily. Today, they use hand-drawn maps labeled with various solar features -- including, active regions, filaments, and coronal hole boundaries. But solar imagers produce a new set of observations every few minutes. For example, the Solar Ultraviolet Imager (SUVI) on NOAA\'s GOES-R Series satellites runs on a 4-minute cycle, collecting data in six different wavelengths every cycle.', '2019-12-04 14:45:37'),
(7, 2, 'Contributor Covenant Code of Conduct', '{\r\n  \"scripts\": {\r\n    \"test\": \"awesome-lint\"\r\n  },\r\n  \"devDependencies\": {\r\n    \"awesome-lint\": \"*\"\r\n  }\r\n}', 'language: ruby\r\nnode_js:\r\n  - \'node\'\r\nrvm:\r\n  - 2.2\r\nenv:\r\n  - TRAVIS_NODE_VERSION=\"7\"\r\ninstall:\r\n  - rm -rf ~/.nvm && git clone https://github.com/creationix/nvm.git ~/.nvm && (cd ~/.nvm && git checkout `git describe --abbrev=0 --tags`) && source ~/.nvm/nvm.sh && nvm install $TRAVIS_NODE_VERSION\r\n  - npm install\r\nbefore_script:\r\n  - gem install awesome_bot\r\n  - npm install --global awesome-lint\r\nscript:\r\n  - awesome-lint\r\n  - awesome_bot README.md --white-list $(paste -d, -s white_listed_sites.txt) --allow-ssl --allow-redirect\r\n\r\n', '2019-12-04 14:47:22'),
(8, 2, 'Help PHP', 'How to make a registration in php', 'i need help ', '2019-12-04 14:50:23'),
(10, 2, 'IBN', 'rewrwer', 'jnonlnkl', '2019-12-11 11:39:46');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `comment`, `post_date`) VALUES
(2, 2, 3, 'It\'s cool bro (:', '2019-11-11 17:32:13'),
(4, 2, 8, 'function addUser($email, $password, $fullName){\r\n\r\n		global $connection;\r\n\r\n		$query = $connection->prepare(\"\r\n			INSERT INTO users (id, email, password, full_name) \r\n			VALUES (NULL, :email, :password, :full_name)\r\n		\");\r\n\r\n		$query->execute(\r\n			array(\r\n				\"email\"=>$email, \r\n				\"password\"=>$password,\r\n				\"full_name\"=>$fullName\r\n			)\r\n		);\r\n', '2019-12-04 14:50:35');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `ava` varchar(250) NOT NULL,
  `ava_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `ava`, `ava_type`) VALUES
(2, 'ps.exel.style@gmail.com', '6363', 'Rustam Abdurasulov', '2ec32edd6551d3fef9bf2387f2191bf213642335', 'jpg'),
(3, 'Rebok.xeon@gmail.com', '5454', 'Maks', '', ''),
(6, 'Roman@gmail.com', '3434', 'Roma', '', ''),
(14, 'dima@gmail.com', '5353', 'Rustam Abdurasulov', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
