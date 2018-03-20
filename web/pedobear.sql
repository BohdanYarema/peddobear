-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2018 г., 01:32
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pedobear`
--

-- --------------------------------------------------------

--
-- Структура таблицы `file_storage_item`
--

CREATE TABLE `file_storage_item` (
  `id` int(11) NOT NULL,
  `component` varchar(255) NOT NULL,
  `base_url` varchar(1024) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `upload_ip` varchar(15) DEFAULT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `file_storage_item`
--

INSERT INTO `file_storage_item` (`id`, `component`, `base_url`, `path`, `type`, `size`, `name`, `upload_ip`, `created_at`) VALUES
(8, 'fileStorage', '/source', '1/c8y56G8Nk9TDZma8YlYraYccV7cnylJa.png', 'image/png', 116272, 'c8y56G8Nk9TDZma8YlYraYccV7cnylJa', '127.0.0.1', 1521583304),
(9, 'fileStorage', '/source', '1/OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s.png', 'image/png', 126587, 'OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s', '127.0.0.1', 1521583311),
(10, 'fileStorage', '/source', '1/kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY.png', 'image/png', 116272, 'kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY', '127.0.0.1', 1521583317),
(11, 'fileStorage', '/source', '1/ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO.png', 'image/png', 126587, 'ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO', '127.0.0.1', 1521583322),
(12, 'fileStorage', '/source', '1/ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0.png', 'image/png', 116272, 'ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0', '127.0.0.1', 1521583406),
(13, 'fileStorage', '/source', '1/9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No.png', 'image/png', 126587, '9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No', '127.0.0.1', 1521583414),
(14, 'fileStorage', '/source', '1/oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9.png', 'image/png', 116272, 'oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9', '127.0.0.1', 1521585079),
(15, 'fileStorage', '/source', '1/QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos.png', 'image/png', 126587, 'QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos', '127.0.0.1', 1521585090);

-- --------------------------------------------------------

--
-- Структура таблицы `i18n_message`
--

CREATE TABLE `i18n_message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `translation` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `i18n_message`
--

INSERT INTO `i18n_message` (`id`, `language`, `translation`) VALUES
(1, 'en', 'testing');

-- --------------------------------------------------------

--
-- Структура таблицы `i18n_source_message`
--

CREATE TABLE `i18n_source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `i18n_source_message`
--

INSERT INTO `i18n_source_message` (`id`, `category`, `message`) VALUES
(1, 'frontend', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1520619735),
('m180309_182300_i18n', 1520619818),
('m180320_185429_add_table_shop', 1521572593),
('m180320_203132_add_file_storage_table', 1521577909),
('m180320_222035_add_column_to_shop', 1521584517);

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `slug` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sale` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `special_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `slug`, `image_base_url`, `image_path`, `price`, `sale`, `status`, `created_at`, `updated_at`, `special_price`) VALUES
(2, '', '/source', '1/ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0.png', 23, 2, 1, 1521575809, 1521583407, NULL),
(3, NULL, '/source', '1/9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No.png', 3, NULL, 2, 1521578532, 1521585047, 10),
(4, NULL, '/source', '1/c8y56G8Nk9TDZma8YlYraYccV7cnylJa.png', 2, 2, 1, 1521583305, 1521583305, NULL),
(5, NULL, '/source', '1/OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s.png', 22, 2, 2, 1521583312, 1521585062, 10),
(6, NULL, '/source', '1/kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY.png', 25, 2, 1, 1521583318, 1521583368, NULL),
(7, NULL, '/source', '1/ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO.png', 32, 2, 1, 1521583324, 1521583358, NULL),
(8, NULL, '/source', '1/oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9.png', 25, NULL, 2, 1521585085, 1521585085, 10),
(9, NULL, '/source', '1/QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos.png', 30, NULL, 2, 1521585098, 1521585098, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `shop_i18n`
--

CREATE TABLE `shop_i18n` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `i18n` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `shop_i18n`
--

INSERT INTO `shop_i18n` (`id`, `shop_id`, `i18n`, `title`, `description`, `created_at`, `updated_at`) VALUES
(3, 2, 'pl', 'Тест', 'Тест', 1521575809, 1521578414),
(4, 2, 'en', 'Test', 'Test', 1521575809, 1521578414),
(5, 3, 'pl', 'Тест №2', 'Тест №2', 1521578532, 1521578532),
(6, 3, 'en', 'Тест №2', 'Тест №2', 1521578532, 1521578532),
(7, 4, 'pl', 'qwer', 'qwer', 1521583305, 1521583305),
(8, 4, 'en', 'qwer', 'qwer', 1521583306, 1521583306),
(9, 5, 'pl', 'qwer2', 'qwer2', 1521583312, 1521583378),
(10, 5, 'en', 'qwer2', 'qwer2', 1521583312, 1521583378),
(11, 6, 'pl', 'qwer5', 'qwer5', 1521583318, 1521583368),
(12, 6, 'en', 'qwer5', 'qwer5', 1521583318, 1521583368),
(13, 7, 'pl', 'qwer3', 'qwer3', 1521583324, 1521583358),
(14, 7, 'en', 'qwer3', 'qwer3', 1521583324, 1521583358),
(15, 8, 'pl', 'qwer45', 'qwer45', 1521585085, 1521585085),
(16, 8, 'en', 'qwer45', 'qwer45', 1521585085, 1521585085),
(17, 9, 'pl', 'qwer454', 'qwer454', 1521585098, 1521585098),
(18, 9, 'en', 'qwer454', 'qwer454', 1521585098, 1521585098);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `file_storage_item`
--
ALTER TABLE `file_storage_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `i18n_message`
--
ALTER TABLE `i18n_message`
  ADD PRIMARY KEY (`id`,`language`);

--
-- Индексы таблицы `i18n_source_message`
--
ALTER TABLE `i18n_source_message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop_i18n`
--
ALTER TABLE `shop_i18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shop_i18n` (`shop_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `file_storage_item`
--
ALTER TABLE `file_storage_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `i18n_source_message`
--
ALTER TABLE `i18n_source_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `shop_i18n`
--
ALTER TABLE `shop_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `i18n_message`
--
ALTER TABLE `i18n_message`
  ADD CONSTRAINT `fk_i18n_message_source_message` FOREIGN KEY (`id`) REFERENCES `i18n_source_message` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shop_i18n`
--
ALTER TABLE `shop_i18n`
  ADD CONSTRAINT `fk_shop_i18n` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
