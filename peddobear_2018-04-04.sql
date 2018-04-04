# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: 127.0.0.1 (MySQL 5.7.21)
# Схема: peddobear
# Время создания: 2018-04-04 07:35:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы file_storage_item
# ------------------------------------------------------------

DROP TABLE IF EXISTS `file_storage_item`;

CREATE TABLE `file_storage_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `component` varchar(255) NOT NULL,
  `base_url` varchar(1024) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `upload_ip` varchar(15) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `file_storage_item` WRITE;
/*!40000 ALTER TABLE `file_storage_item` DISABLE KEYS */;

INSERT INTO `file_storage_item` (`id`, `component`, `base_url`, `path`, `type`, `size`, `name`, `upload_ip`, `created_at`)
VALUES
	(8,'fileStorage','/source','1/c8y56G8Nk9TDZma8YlYraYccV7cnylJa.png','image/png',116272,'c8y56G8Nk9TDZma8YlYraYccV7cnylJa','127.0.0.1',1521583304),
	(9,'fileStorage','/source','1/OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s.png','image/png',126587,'OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s','127.0.0.1',1521583311),
	(10,'fileStorage','/source','1/kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY.png','image/png',116272,'kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY','127.0.0.1',1521583317),
	(11,'fileStorage','/source','1/ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO.png','image/png',126587,'ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO','127.0.0.1',1521583322),
	(12,'fileStorage','/source','1/ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0.png','image/png',116272,'ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0','127.0.0.1',1521583406),
	(13,'fileStorage','/source','1/9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No.png','image/png',126587,'9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No','127.0.0.1',1521583414),
	(14,'fileStorage','/source','1/oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9.png','image/png',116272,'oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9','127.0.0.1',1521585079),
	(15,'fileStorage','/source','1/QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos.png','image/png',126587,'QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos','127.0.0.1',1521585090);

/*!40000 ALTER TABLE `file_storage_item` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы i18n_message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `i18n_message`;

CREATE TABLE `i18n_message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `translation` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`,`language`),
  CONSTRAINT `fk_i18n_message_source_message` FOREIGN KEY (`id`) REFERENCES `i18n_source_message` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `i18n_message` WRITE;
/*!40000 ALTER TABLE `i18n_message` DISABLE KEYS */;

INSERT INTO `i18n_message` (`id`, `language`, `translation`)
VALUES
	(1,'en','testing');

/*!40000 ALTER TABLE `i18n_message` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы i18n_source_message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `i18n_source_message`;

CREATE TABLE `i18n_source_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `i18n_source_message` WRITE;
/*!40000 ALTER TABLE `i18n_source_message` DISABLE KEYS */;

INSERT INTO `i18n_source_message` (`id`, `category`, `message`)
VALUES
	(1,'frontend','test');

/*!40000 ALTER TABLE `i18n_source_message` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`,`language`),
  KEY `idx_message_language` (`language`),
  CONSTRAINT `fk_message_source_message` FOREIGN KEY (`id`) REFERENCES `source_message` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;

INSERT INTO `message` (`id`, `language`, `translation`)
VALUES
	(1,'en','START'),
	(1,'pl','START'),
	(2,'en','O NAS'),
	(2,'pl','O NAS'),
	(3,'en','SKLEP'),
	(3,'pl','SKLEP'),
	(4,'en','PROMOCJE'),
	(4,'pl','PROMOCJE'),
	(5,'en','KOSZYK'),
	(5,'pl','KOSZYK'),
	(6,'en','KONTAKT'),
	(6,'pl','KONTAKT'),
	(7,'en','Informacja kontaktowa'),
	(7,'pl','Informacja kontaktowa'),
	(8,'en',' Współpraca i zakup hurtowy'),
	(8,'pl',' Współpraca i zakup hurtowy'),
	(9,'en','Opcje płatności'),
	(9,'pl','Opcje płatności'),
	(11,'en','O nas'),
	(11,'pl','O nas'),
	(12,'en','TED TO'),
	(12,'pl','TED TO'),
	(13,'en','<strong>TED A CAR</strong> to uniwersalny aromatyzator klasy premium, ujęty w stylowej formie. Odpowiedni do stosowania w samochodach, łazienkach i innych pomieszczeniach.'),
	(13,'pl','<strong>TED A CAR</strong> to uniwersalny aromatyzator klasy premium, ujęty w stylowej formie. Odpowiedni do stosowania w samochodach, łazienkach i innych pomieszczeniach.'),
	(14,'en','<strong>TED A CAR<strong> różni się od produktów konkurencyjnych modnym i stylowym wyglądem, a także oryginalnymi zapachami, które docenią miłośnicy stylowych gadżetów.'),
	(14,'pl','<strong>TED A CAR<strong> różni się od produktów konkurencyjnych modnym i stylowym wyglądem, a także oryginalnymi zapachami, które docenią miłośnicy stylowych gadżetów.'),
	(15,'en','Opracowane w Europie, trwałe i przyjemne aromaty, szybko pomagają pozbyć się nieprzyjemnych zapachów. Ponadto wprowadzają przyjemną atmosferę i poprawiają samopoczucie osób, przebywających w danym pomieszczeniu'),
	(15,'pl','Opracowane w Europie, trwałe i przyjemne aromaty, szybko pomagają pozbyć się nieprzyjemnych zapachów. Ponadto wprowadzają przyjemną atmosferę i poprawiają samopoczucie osób, przebywających w danym pomieszczeniu'),
	(16,'en',' Warstwa zewnętrzna staje się wielokolorowa poprzez pokrycie nietoksycznymi i antyalergicznymi farbami'),
	(16,'pl',' Warstwa zewnętrzna staje się wielokolorowa poprzez pokrycie nietoksycznymi i antyalergicznymi farbami'),
	(17,'en','Dzięki specjalnie dostosowanej celulozie, która ma funkcję konserwującą, zapach jest równie trwały przez miesiąc'),
	(17,'pl','Dzięki specjalnie dostosowanej celulozie, która ma funkcję konserwującą, zapach jest równie trwały przez miesiąc'),
	(18,'en','Używamy wyłącznie karton ekologiczny. Jest nietoksyczny, a także bezpieczny dla środowiska. Nie powoduje żadnych podrażnień'),
	(18,'pl','Używamy wyłącznie karton ekologiczny. Jest nietoksyczny, a także bezpieczny dla środowiska. Nie powoduje żadnych podrażnień'),
	(19,'en','Trzy warstwy wewnętrzne są równomiernie penetrowane płynem do perfum za pomocą specjalnej maszyny. Każda warstwa absorbuje idealną ilość zapachu. Efektem tego jest ten luksusowy zapach'),
	(19,'pl','Trzy warstwy wewnętrzne są równomiernie penetrowane płynem do perfum za pomocą specjalnej maszyny. Każda warstwa absorbuje idealną ilość zapachu. Efektem tego jest ten luksusowy zapach'),
	(20,'en','Wreszcie otoczy cię ulubiony zapach!'),
	(20,'pl','Wreszcie otoczy cię ulubiony zapach!'),
	(21,'en','Dalej'),
	(21,'pl','Dalej'),
	(22,'en','Dodaj do koszyka'),
	(22,'pl','Dodaj do koszyka'),
	(23,'en','PROMOCJE'),
	(23,'pl','PROMOCJE'),
	(25,'en','WRÓĆ'),
	(25,'pl','WRÓĆ'),
	(26,'en','Koszyk'),
	(26,'pl','Koszyk'),
	(27,'en','Cena'),
	(27,'pl','Cena'),
	(28,'en','ILOŚĆ'),
	(28,'pl','ILOŚĆ'),
	(29,'en','RAZEM'),
	(29,'pl','RAZEM'),
	(30,'en','USUŃ'),
	(30,'pl','USUŃ'),
	(32,'en','ILOŚĆ RAZEM'),
	(32,'pl','ILOŚĆ RAZEM'),
	(33,'en','MIEJSCE DOSTAWY'),
	(33,'pl','MIEJSCE DOSTAWY'),
	(34,'en','CENA RAZEM'),
	(34,'pl','CENA RAZEM'),
	(35,'en','KONTAKT'),
	(35,'pl','KONTAKT'),
	(36,'en','WRÓĆ DO SKLEPU'),
	(36,'pl','WRÓĆ DO SKLEPU'),
	(37,'en','Koszty dostawy wliczone'),
	(37,'pl','Koszty dostawy wliczone'),
	(38,'en','TWÓJ KOSZYK JEST PUSTY, ALE MOŻESZ NAPRAWIĆ'),
	(38,'pl','TWÓJ KOSZYK JEST PUSTY, ALE MOŻESZ NAPRAWIĆ'),
	(40,'en','Dziękujemy!\r\nTwoja płatność została pomyślnie przetworzona\r\n(kupić trochę więcej TEDów)'),
	(40,'pl','Dziękujemy!\r\nTwoja płatność została pomyślnie przetworzona\r\n(kupić trochę więcej TEDów)'),
	(41,'en','PŁATNOŚĆ NIE POWIODŁA SIĘ \\ NIE PANIKUJ, SPRÓBUJ PONOWNIE'),
	(41,'pl','PŁATNOŚĆ NIE POWIODŁA SIĘ \\ NIE PANIKUJ, SPRÓBUJ PONOWNIE');

/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы migration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;

INSERT INTO `migration` (`version`, `apply_time`)
VALUES
	('m000000_000000_base',1520619735),
	('m150207_210500_i18n_init',1522824643),
	('m180309_182300_i18n',1520619818),
	('m180320_185429_add_table_shop',1521572593),
	('m180320_203132_add_file_storage_table',1521577909),
	('m180320_222035_add_column_to_shop',1521584517);

/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы shop
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sale` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `special_price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;

INSERT INTO `shop` (`id`, `slug`, `image_base_url`, `image_path`, `price`, `sale`, `status`, `created_at`, `updated_at`, `special_price`)
VALUES
	(2,'','/source','1/ClKUn4hHRe4_8mxZ1ZtBu2ps7bov3US0.png',23,2,1,1521575809,1521583407,NULL),
	(3,NULL,'/source','1/9nQObK46tTvfq_PIkGKCOvfTm_K1Q0No.png',3,NULL,2,1521578532,1521585047,10),
	(4,NULL,'/source','1/c8y56G8Nk9TDZma8YlYraYccV7cnylJa.png',2,2,1,1521583305,1521583305,NULL),
	(5,NULL,'/source','1/OOxCEyOjn4J2TmzxuqbZm2lBc-br3z0s.png',22,2,2,1521583312,1521585062,10),
	(6,NULL,'/source','1/kbEHtBqhy5HXHIcAskG14c2JvBE7-6iY.png',25,2,1,1521583318,1521583368,NULL),
	(7,NULL,'/source','1/ZyZxtl8J-oRvmo_033VWZaFhyEKG6LlO.png',32,2,1,1521583324,1521583358,NULL),
	(8,NULL,'/source','1/oWpMlmzTFFAbRlb51YvA0hF8C7JeQEt9.png',25,NULL,2,1521585085,1521585085,10),
	(9,NULL,'/source','1/QhtRMF-Ox3p9dFcuv8mFnw6lINqHZBos.png',30,NULL,2,1521585098,1521585098,10);

/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы shop_i18n
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_i18n`;

CREATE TABLE `shop_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) DEFAULT NULL,
  `i18n` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_shop_i18n` (`shop_id`),
  CONSTRAINT `fk_shop_i18n` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `shop_i18n` WRITE;
/*!40000 ALTER TABLE `shop_i18n` DISABLE KEYS */;

INSERT INTO `shop_i18n` (`id`, `shop_id`, `i18n`, `title`, `description`, `created_at`, `updated_at`)
VALUES
	(3,2,'pl','Тест','Тест',1521575809,1521578414),
	(4,2,'en','Test','Test',1521575809,1521578414),
	(5,3,'pl','Тест №2','Тест №2',1521578532,1521578532),
	(6,3,'en','Тест №2','Тест №2',1521578532,1521578532),
	(7,4,'pl','qwer','qwer',1521583305,1521583305),
	(8,4,'en','qwer','qwer',1521583306,1521583306),
	(9,5,'pl','qwer2','qwer2',1521583312,1521583378),
	(10,5,'en','qwer2','qwer2',1521583312,1521583378),
	(11,6,'pl','qwer5','qwer5',1521583318,1521583368),
	(12,6,'en','qwer5','qwer5',1521583318,1521583368),
	(13,7,'pl','qwer3','qwer3',1521583324,1521583358),
	(14,7,'en','qwer3','qwer3',1521583324,1521583358),
	(15,8,'pl','qwer45','qwer45',1521585085,1521585085),
	(16,8,'en','qwer45','qwer45',1521585085,1521585085),
	(17,9,'pl','qwer454','qwer454',1521585098,1521585098),
	(18,9,'en','qwer454','qwer454',1521585098,1521585098);

/*!40000 ALTER TABLE `shop_i18n` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы source_message
# ------------------------------------------------------------

DROP TABLE IF EXISTS `source_message`;

CREATE TABLE `source_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_source_message_category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `source_message` WRITE;
/*!40000 ALTER TABLE `source_message` DISABLE KEYS */;

INSERT INTO `source_message` (`id`, `category`, `message`)
VALUES
	(1,'frontend','Home'),
	(2,'frontend','About us'),
	(3,'frontend','Shop'),
	(4,'frontend','Special offers'),
	(5,'frontend','Shoping Cart'),
	(6,'frontend','Contacts'),
	(7,'frontend','contact information'),
	(8,'frontend','cooperation'),
	(9,'frontend','payment options'),
	(10,'frontend','social media'),
	(11,'frontend','about'),
	(12,'frontend','ted_is'),
	(13,'frontend','text_about_one'),
	(14,'frontend','text_about_two'),
	(15,'frontend','text_about_three'),
	(16,'frontend','world_smells'),
	(17,'frontend','eternal_layers'),
	(18,'frontend','anti_alergic'),
	(19,'frontend','specialy_adapted'),
	(20,'frontend','friendly'),
	(21,'frontend','next'),
	(22,'frontend','add to cart'),
	(23,'frontend','special offers'),
	(24,'frontend','continue'),
	(25,'frontend','returne'),
	(26,'frontend','shopping cart'),
	(27,'frontend','price'),
	(28,'frontend','quantity'),
	(29,'frontend','total'),
	(30,'frontend','remove'),
	(31,'frontend','delivery'),
	(32,'frontend','total quantity'),
	(33,'frontend','delivery point'),
	(34,'frontend','total price'),
	(35,'frontend','contact information title'),
	(36,'frontend','return to shop'),
	(37,'frontend','Delivery costs included'),
	(38,'frontend','YOUR CART IS EMPTY BUT YOU CAN FIX IT'),
	(40,'frontend','Thank you your payment was processed successfully ( buy some more TED\'s)'),
	(41,'frontend','Payment Failed \\ don’t panic try again');

/*!40000 ALTER TABLE `source_message` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
