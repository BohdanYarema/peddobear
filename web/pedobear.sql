-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 02, 2020 at 10:23 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tedd`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_token`
--

CREATE TABLE `api_token` (
  `id` int(11) NOT NULL,
  `token` text COLLATE utf8_unicode_ci,
  `expired` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_storage_item`
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
-- Dumping data for table `file_storage_item`
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
-- Table structure for table `i18n_message`
--

CREATE TABLE `i18n_message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `translation` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `i18n_message`
--

INSERT INTO `i18n_message` (`id`, `language`, `translation`) VALUES
(1, 'en', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `i18n_source_message`
--

CREATE TABLE `i18n_source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `i18n_source_message`
--

INSERT INTO `i18n_source_message` (`id`, `category`, `message`) VALUES
(1, 'frontend', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(1, 'en', 'START'),
(1, 'pl', 'START'),
(2, 'en', 'O NAS'),
(2, 'pl', 'O NAS'),
(3, 'en', 'SKLEP'),
(3, 'pl', 'SKLEP'),
(4, 'en', 'PROMOCJE'),
(4, 'pl', 'PROMOCJE'),
(5, 'en', 'KOSZYK'),
(5, 'pl', 'KOSZYK'),
(6, 'en', 'KONTAKT'),
(6, 'pl', 'KONTAKT'),
(7, 'en', 'Informacja kontaktowa'),
(7, 'pl', 'Informacja kontaktowa'),
(8, 'en', ' Współpraca i zakup hurtowy'),
(8, 'pl', ' Współpraca i zakup hurtowy'),
(9, 'en', 'Opcje płatności'),
(9, 'pl', 'Opcje płatności'),
(11, 'en', 'O nas'),
(11, 'pl', 'O nas'),
(12, 'en', 'TED TO'),
(12, 'pl', 'TED TO'),
(13, 'en', '<strong>TED A CAR</strong> to uniwersalny aromatyzator klasy premium, ujęty w stylowej formie. Odpowiedni do stosowania w samochodach, łazienkach i innych pomieszczeniach.'),
(13, 'pl', '<strong>TED A CAR</strong> to uniwersalny aromatyzator klasy premium, ujęty w stylowej formie. Odpowiedni do stosowania w samochodach, łazienkach i innych pomieszczeniach.'),
(14, 'en', '<strong>TED A CAR<strong> różni się od produktów konkurencyjnych modnym i stylowym wyglądem, a także oryginalnymi zapachami, które docenią miłośnicy stylowych gadżetów.'),
(14, 'pl', '<strong>TED A CAR<strong> różni się od produktów konkurencyjnych modnym i stylowym wyglądem, a także oryginalnymi zapachami, które docenią miłośnicy stylowych gadżetów.'),
(15, 'en', 'Opracowane w Europie, trwałe i przyjemne aromaty, szybko pomagają pozbyć się nieprzyjemnych zapachów. Ponadto wprowadzają przyjemną atmosferę i poprawiają samopoczucie osób, przebywających w danym pomieszczeniu'),
(15, 'pl', 'Opracowane w Europie, trwałe i przyjemne aromaty, szybko pomagają pozbyć się nieprzyjemnych zapachów. Ponadto wprowadzają przyjemną atmosferę i poprawiają samopoczucie osób, przebywających w danym pomieszczeniu'),
(16, 'en', ' Warstwa zewnętrzna staje się wielokolorowa poprzez pokrycie nietoksycznymi i antyalergicznymi farbami'),
(16, 'pl', ' Warstwa zewnętrzna staje się wielokolorowa poprzez pokrycie nietoksycznymi i antyalergicznymi farbami'),
(17, 'en', 'Dzięki specjalnie dostosowanej celulozie, która ma funkcję konserwującą, zapach jest równie trwały przez miesiąc'),
(17, 'pl', 'Dzięki specjalnie dostosowanej celulozie, która ma funkcję konserwującą, zapach jest równie trwały przez miesiąc'),
(18, 'en', 'Używamy wyłącznie karton ekologiczny. Jest nietoksyczny, a także bezpieczny dla środowiska. Nie powoduje żadnych podrażnień'),
(18, 'pl', 'Używamy wyłącznie karton ekologiczny. Jest nietoksyczny, a także bezpieczny dla środowiska. Nie powoduje żadnych podrażnień'),
(19, 'en', 'Trzy warstwy wewnętrzne są równomiernie penetrowane płynem do perfum za pomocą specjalnej maszyny. Każda warstwa absorbuje idealną ilość zapachu. Efektem tego jest ten luksusowy zapach'),
(19, 'pl', 'Trzy warstwy wewnętrzne są równomiernie penetrowane płynem do perfum za pomocą specjalnej maszyny. Każda warstwa absorbuje idealną ilość zapachu. Efektem tego jest ten luksusowy zapach'),
(20, 'en', 'Wreszcie otoczy cię ulubiony zapach!'),
(20, 'pl', 'Wreszcie otoczy cię ulubiony zapach!'),
(21, 'en', 'Dalej'),
(21, 'pl', 'Dalej'),
(22, 'en', 'Dodaj do koszyka'),
(22, 'pl', 'Dodaj do koszyka'),
(23, 'en', 'PROMOCJE'),
(23, 'pl', 'PROMOCJE'),
(25, 'en', 'WRÓĆ'),
(25, 'pl', 'WRÓĆ'),
(26, 'en', 'Koszyk'),
(26, 'pl', 'Koszyk'),
(27, 'en', 'Cena'),
(27, 'pl', 'Cena'),
(28, 'en', 'ILOŚĆ'),
(28, 'pl', 'ILOŚĆ'),
(29, 'en', 'RAZEM'),
(29, 'pl', 'RAZEM'),
(30, 'en', 'USUŃ'),
(30, 'pl', 'USUŃ'),
(32, 'en', 'ILOŚĆ RAZEM'),
(32, 'pl', 'ILOŚĆ RAZEM'),
(33, 'en', 'MIEJSCE DOSTAWY'),
(33, 'pl', 'MIEJSCE DOSTAWY'),
(34, 'en', 'CENA RAZEM'),
(34, 'pl', 'CENA RAZEM'),
(35, 'en', 'KONTAKT'),
(35, 'pl', 'KONTAKT'),
(36, 'en', 'WRÓĆ DO SKLEPU'),
(36, 'pl', 'WRÓĆ DO SKLEPU'),
(37, 'en', 'Koszty dostawy wliczone'),
(37, 'pl', 'Koszty dostawy wliczone'),
(38, 'en', 'TWÓJ KOSZYK JEST PUSTY, ALE MOŻESZ NAPRAWIĆ'),
(38, 'pl', 'TWÓJ KOSZYK JEST PUSTY, ALE MOŻESZ NAPRAWIĆ'),
(40, 'en', 'Dziękujemy!\r\nTwoja płatność została pomyślnie przetworzona\r\n(kupić trochę więcej TEDów)'),
(40, 'pl', 'Dziękujemy!\r\nTwoja płatność została pomyślnie przetworzona\r\n(kupić trochę więcej TEDów)'),
(41, 'en', 'PŁATNOŚĆ NIE POWIODŁA SIĘ \\ NIE PANIKUJ, SPRÓBUJ PONOWNIE'),
(41, 'pl', 'PŁATNOŚĆ NIE POWIODŁA SIĘ \\ NIE PANIKUJ, SPRÓBUJ PONOWNIE');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1520619735),
('m150207_210500_i18n_init', 1522824643),
('m180309_182300_i18n', 1520619818),
('m180320_185429_add_table_shop', 1521572593),
('m180320_203132_add_file_storage_table', 1521577909),
('m180320_222035_add_column_to_shop', 1521584517),
('m180401_084008_add_table_log', 1583180472),
('m180401_174931_change_shop_table', 1583180473),
('m180401_194036_add_table_page', 1583180473),
('m180401_194244_seed_data_page', 1583180473),
('m180404_202453_add_table_for_payment', 1583180473),
('m180408_014125_add_page_cacel', 1583180473),
('m180408_122955_add_column_to_payment', 1583180473),
('m180417_195632_change_column_order_id', 1583180473),
('m180418_091858_add_url_for_payment', 1583180473),
('m180425_182148_add_column_count', 1583180473),
('m180617_061843_add_table_for_token', 1583180473);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `slug` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `meta_image_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_image_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `slug`, `status`, `meta_image_path`, `meta_image_base_url`, `created_at`, `updated_at`) VALUES
(1, 'coockie', 1, NULL, NULL, 1583180473, 1583180473),
(2, 'about', 1, NULL, NULL, 1583180473, 1583180473),
(3, 'shop', 1, NULL, NULL, 1583180473, 1583180473),
(4, 'special', 1, NULL, NULL, 1583180473, 1583180473),
(5, 'cart', 1, NULL, NULL, 1583180473, 1583180473),
(6, 'contact', 1, NULL, NULL, 1583180473, 1583180473),
(7, 'success', 1, NULL, NULL, 1583180473, 1583180473),
(8, 'fail', 1, NULL, NULL, 1583180473, 1583180473),
(9, 'index', 1, NULL, NULL, 1583180473, 1583180473),
(10, 'payment', 1, NULL, NULL, 1583180473, 1583180473),
(11, 'notify', 1, NULL, NULL, 1583180473, 1583180473),
(12, 'cancel', 1, NULL, NULL, 1583180473, 1583180473);

-- --------------------------------------------------------

--
-- Table structure for table `page_i18n`
--

CREATE TABLE `page_i18n` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `i18n` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_i18n`
--

INSERT INTO `page_i18n` (`id`, `page_id`, `i18n`, `title`, `description`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(2, 1, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(3, 2, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(4, 2, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(5, 3, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(6, 3, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(7, 4, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(8, 4, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(9, 5, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(10, 5, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(11, 6, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(12, 6, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(13, 7, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(14, 7, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(15, 8, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(16, 8, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(17, 9, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(18, 9, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(19, 10, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(20, 10, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(21, 11, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(22, 11, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(23, 12, 'pl', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473),
(24, 12, 'en', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Coockie', 'Coockie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1583180473, 1583180473);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_type` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping` float DEFAULT NULL,
  `summary` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `payment_order_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `redirectUrl` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_items`
--

CREATE TABLE `payment_items` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `summary` float DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `image_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `slide_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `counter` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `image_base_url`, `image_path`, `status`, `created_at`, `updated_at`, `slide_path`, `slide_base_url`, `counter`) VALUES
(2, '/source', '1/ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0.png', 1, 1521575809, 1521583407, NULL, NULL, 0),
(3, '/source', '1/9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No.png', 2, 1521578532, 1521585047, NULL, NULL, 0),
(4, '/source', '1/c8y56G8Nk9TDZma8YlYraYccV7cnylJa.png', 1, 1521583305, 1521583305, NULL, NULL, 0),
(5, '/source', '1/OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s.png', 2, 1521583312, 1521585062, NULL, NULL, 0),
(6, '/source', '1/kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY.png', 1, 1521583318, 1521583368, NULL, NULL, 0),
(7, '/source', '1/ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO.png', 1, 1521583324, 1521583358, NULL, NULL, 0),
(8, '/source', '1/oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9.png', 2, 1521585085, 1521585085, NULL, NULL, 0),
(9, '/source', '1/QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos.png', 2, 1521585098, 1521585098, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_i18n`
--

CREATE TABLE `shop_i18n` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `i18n` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `special_price` float DEFAULT NULL,
  `meta_title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shop_i18n`
--

INSERT INTO `shop_i18n` (`id`, `shop_id`, `i18n`, `title`, `description`, `created_at`, `updated_at`, `price`, `special_price`, `meta_title`, `meta_description`) VALUES
(3, 2, 'pl', 'Тест', 'Тест', 1521575809, 1521578414, NULL, NULL, NULL, NULL),
(4, 2, 'en', 'Test', 'Test', 1521575809, 1521578414, NULL, NULL, NULL, NULL),
(5, 3, 'pl', 'Тест №2', 'Тест №2', 1521578532, 1521578532, NULL, NULL, NULL, NULL),
(6, 3, 'en', 'Тест №2', 'Тест №2', 1521578532, 1521578532, NULL, NULL, NULL, NULL),
(7, 4, 'pl', 'qwer', 'qwer', 1521583305, 1521583305, NULL, NULL, NULL, NULL),
(8, 4, 'en', 'qwer', 'qwer', 1521583306, 1521583306, NULL, NULL, NULL, NULL),
(9, 5, 'pl', 'qwer2', 'qwer2', 1521583312, 1521583378, NULL, NULL, NULL, NULL),
(10, 5, 'en', 'qwer2', 'qwer2', 1521583312, 1521583378, NULL, NULL, NULL, NULL),
(11, 6, 'pl', 'qwer5', 'qwer5', 1521583318, 1521583368, NULL, NULL, NULL, NULL),
(12, 6, 'en', 'qwer5', 'qwer5', 1521583318, 1521583368, NULL, NULL, NULL, NULL),
(13, 7, 'pl', 'qwer3', 'qwer3', 1521583324, 1521583358, NULL, NULL, NULL, NULL),
(14, 7, 'en', 'qwer3', 'qwer3', 1521583324, 1521583358, NULL, NULL, NULL, NULL),
(15, 8, 'pl', 'qwer45', 'qwer45', 1521585085, 1521585085, NULL, NULL, NULL, NULL),
(16, 8, 'en', 'qwer45', 'qwer45', 1521585085, 1521585085, NULL, NULL, NULL, NULL),
(17, 9, 'pl', 'qwer454', 'qwer454', 1521585098, 1521585098, NULL, NULL, NULL, NULL),
(18, 9, 'en', 'qwer454', 'qwer454', 1521585098, 1521585098, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `source_message`
--

CREATE TABLE `source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `source_message`
--

INSERT INTO `source_message` (`id`, `category`, `message`) VALUES
(1, 'frontend', 'Home'),
(2, 'frontend', 'About us'),
(3, 'frontend', 'Shop'),
(4, 'frontend', 'Special offers'),
(5, 'frontend', 'Shoping Cart'),
(6, 'frontend', 'Contacts'),
(7, 'frontend', 'contact information'),
(8, 'frontend', 'cooperation'),
(9, 'frontend', 'payment options'),
(10, 'frontend', 'social media'),
(11, 'frontend', 'about'),
(12, 'frontend', 'ted_is'),
(13, 'frontend', 'text_about_one'),
(14, 'frontend', 'text_about_two'),
(15, 'frontend', 'text_about_three'),
(16, 'frontend', 'world_smells'),
(17, 'frontend', 'eternal_layers'),
(18, 'frontend', 'anti_alergic'),
(19, 'frontend', 'specialy_adapted'),
(20, 'frontend', 'friendly'),
(21, 'frontend', 'next'),
(22, 'frontend', 'add to cart'),
(23, 'frontend', 'special offers'),
(24, 'frontend', 'continue'),
(25, 'frontend', 'returne'),
(26, 'frontend', 'shopping cart'),
(27, 'frontend', 'price'),
(28, 'frontend', 'quantity'),
(29, 'frontend', 'total'),
(30, 'frontend', 'remove'),
(31, 'frontend', 'delivery'),
(32, 'frontend', 'total quantity'),
(33, 'frontend', 'delivery point'),
(34, 'frontend', 'total price'),
(35, 'frontend', 'contact information title'),
(36, 'frontend', 'return to shop'),
(37, 'frontend', 'Delivery costs included'),
(38, 'frontend', 'YOUR CART IS EMPTY BUT YOU CAN FIX IT'),
(40, 'frontend', 'Thank you your payment was processed successfully ( buy some more TED\'s)'),
(41, 'frontend', 'Payment Failed \\ don’t panic try again');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_token`
--
ALTER TABLE `api_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_storage_item`
--
ALTER TABLE `file_storage_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n_message`
--
ALTER TABLE `i18n_message`
  ADD PRIMARY KEY (`id`,`language`);

--
-- Indexes for table `i18n_source_message`
--
ALTER TABLE `i18n_source_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`,`language`),
  ADD KEY `idx_message_language` (`language`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_i18n`
--
ALTER TABLE `page_i18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_page_i18n` (`page_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_items`
--
ALTER TABLE `payment_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_items` (`payment_id`),
  ADD KEY `fk_payment_shop` (`shop_id`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_logs` (`payment_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_i18n`
--
ALTER TABLE `shop_i18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_shop_i18n` (`shop_id`);

--
-- Indexes for table `source_message`
--
ALTER TABLE `source_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_source_message_category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_token`
--
ALTER TABLE `api_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_storage_item`
--
ALTER TABLE `file_storage_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `i18n_source_message`
--
ALTER TABLE `i18n_source_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `page_i18n`
--
ALTER TABLE `page_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_items`
--
ALTER TABLE `payment_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shop_i18n`
--
ALTER TABLE `shop_i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `source_message`
--
ALTER TABLE `source_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `i18n_message`
--
ALTER TABLE `i18n_message`
  ADD CONSTRAINT `fk_i18n_message_source_message` FOREIGN KEY (`id`) REFERENCES `i18n_source_message` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_source_message` FOREIGN KEY (`id`) REFERENCES `source_message` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page_i18n`
--
ALTER TABLE `page_i18n`
  ADD CONSTRAINT `fk_page_i18n` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_items`
--
ALTER TABLE `payment_items`
  ADD CONSTRAINT `fk_payment_items` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_payment_shop` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD CONSTRAINT `fk_payment_logs` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_i18n`
--
ALTER TABLE `shop_i18n`
  ADD CONSTRAINT `fk_shop_i18n` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
