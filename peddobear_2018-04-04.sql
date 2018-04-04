# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.7.12)
# Database: peddobear
# Generation Time: 2018-04-04 06:00:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table file_storage_item
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
	(3,'fileStorage','/source','1/HFNGQ3_B3A6jirWdb6Rx7K2xrptcLLcP.png','image/png',86178,'HFNGQ3_B3A6jirWdb6Rx7K2xrptcLLcP','93.75.20.130',1522607282),
	(4,'fileStorage','/source','1/pCKmQF5O6uIa9YBI77GeFvNBnAJPmeRY.png','image/png',5783,'pCKmQF5O6uIa9YBI77GeFvNBnAJPmeRY','93.75.20.130',1522607287),
	(5,'fileStorage','/source','1/3BDrGAoHR6T5laIvHNuNFIHOxBYIX6NM.png','image/png',61323,'3BDrGAoHR6T5laIvHNuNFIHOxBYIX6NM','93.75.20.130',1522607304),
	(6,'fileStorage','/source','1/JGcQSDnyWR2VXJzEVet4hgip2jTMA9Ab.png','image/png',5023,'JGcQSDnyWR2VXJzEVet4hgip2jTMA9Ab','93.75.20.130',1522607308),
	(7,'fileStorage','/source','1/EGq_pBeqMygg5PYPSK_16COiHa5nT5OO.png','image/png',91377,'EGq_pBeqMygg5PYPSK_16COiHa5nT5OO','93.75.20.130',1522607320),
	(8,'fileStorage','/source','1/8V4kLgyFG9EoIkI4WsP9L1OeW7RtFI4H.png','image/png',5929,'8V4kLgyFG9EoIkI4WsP9L1OeW7RtFI4H','93.75.20.130',1522607384),
	(9,'fileStorage','/source','1/AREgNq6-NXBeHVS8_zflURF7vgrYNuw1.png','image/png',60142,'AREgNq6-NXBeHVS8_zflURF7vgrYNuw1','93.75.20.130',1522607394),
	(10,'fileStorage','/source','1/g2XpciYhgt31wRaix1qjrDHEhDtFZ_P2.png','image/png',4805,'g2XpciYhgt31wRaix1qjrDHEhDtFZ_P2','93.75.20.130',1522607398),
	(11,'fileStorage','/source','1/bRVgHZg-lODI-mOIOGvvBlEpAlitinZ7.png','image/png',85283,'bRVgHZg-lODI-mOIOGvvBlEpAlitinZ7','93.75.20.130',1522607407),
	(12,'fileStorage','/source','1/_Ly6BBmcupRjYv8oD6mDDpPn0w5u3LoK.png','image/png',6038,'_Ly6BBmcupRjYv8oD6mDDpPn0w5u3LoK','93.75.20.130',1522607411),
	(13,'fileStorage','/source','1/khJkOswOrsD83u1xm0NeLMJVrNoIYPKW.png','image/png',65204,'khJkOswOrsD83u1xm0NeLMJVrNoIYPKW','93.75.20.130',1522607424),
	(15,'fileStorage','/source','1/yHObaZMstvoYTq-LOFrlK-pKmAbDvfoR.png','image/png',5394,'yHObaZMstvoYTq-LOFrlK-pKmAbDvfoR','93.75.20.130',1522607784),
	(16,'fileStorage','/source','1/OCY5e8FYpkku9KbCT2_Yz9cSGZeTsCLK.png','image/png',5783,'OCY5e8FYpkku9KbCT2_Yz9cSGZeTsCLK','93.75.20.130',1522616734);

/*!40000 ALTER TABLE `file_storage_item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table i18n_message
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
	(1,'en','HOME'),
	(1,'pl','START');

/*!40000 ALTER TABLE `i18n_message` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table i18n_source_message
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
	(1,'frontend','Home');

/*!40000 ALTER TABLE `i18n_source_message` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;

INSERT INTO `log` (`id`, `text`)
VALUES
	(1,'{\"mc_gross\":\"0.01\",\"protection_eligibility\":\"Ineligible\",\"address_status\":\"confirmed\",\"payer_id\":\"8BVCPUPHPZU2S\",\"address_street\":\"Raduzhna 11a\",\"payment_date\":\"03:07:40 Apr 01, 2018 PDT\",\"payment_status\":\"Pending\",\"charset\":\"windows-1252\",\"address_zip\":\"02218\",\"first_name\":\"Bohdan\",\"address_country_code\":\"UA\",\"address_name\":\"Bohdan Yarema\",\"notify_version\":\"3.9\",\"custom\":\"\",\"payer_status\":\"verified\",\"address_country\":\"Ukraine\",\"address_city\":\"Kiev\",\"quantity\":\"1\",\"verify_sign\":\"AM.GxCUzUiHLbKQWZsAAfy0pAeM2AqyNqtbQHzgVg5WwbDTSFZSgckE0\",\"payer_email\":\"bohdanyarema1992@gmail.com\",\"txn_id\":\"9FL664317B019532R\",\"payment_type\":\"instant\",\"last_name\":\"Yarema\",\"address_state\":\"Kiev\",\"receiver_email\":\"bohdanyarema1992-facilitator@gmail.com\",\"pending_reason\":\"unilateral\",\"txn_type\":\"web_accept\",\"item_name\":\"\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a \\u001a\\u001a\\u001a\\u001a\\u001a\\u001a \\u001a\\u001a\\u001a \\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\",\"mc_currency\":\"USD\",\"item_number\":\"User123\",\"residence_country\":\"UA\",\"transaction_subject\":\"\",\"payment_gross\":\"0.01\",\"ipn_track_id\":\"ba539a8e2152d\"}'),
	(2,'{\"mc_gross\":\"0.01\",\"protection_eligibility\":\"Ineligible\",\"address_status\":\"confirmed\",\"payer_id\":\"8BVCPUPHPZU2S\",\"address_street\":\"Raduzhna 11a\",\"payment_date\":\"02:49:11 Apr 01, 2018 PDT\",\"payment_status\":\"Pending\",\"charset\":\"windows-1252\",\"address_zip\":\"02218\",\"first_name\":\"Bohdan\",\"address_country_code\":\"UA\",\"address_name\":\"Bohdan Yarema\",\"notify_version\":\"3.9\",\"custom\":\"\",\"payer_status\":\"verified\",\"address_country\":\"Ukraine\",\"address_city\":\"Kiev\",\"quantity\":\"1\",\"verify_sign\":\"AjMnwXM378zwB2e9TE6s-XZujLRDAkP1Xgusm4RaeVM-QFRbO7oKJ8FC\",\"payer_email\":\"bohdanyarema1992@gmail.com\",\"txn_id\":\"4H4936796L187321B\",\"payment_type\":\"instant\",\"last_name\":\"Yarema\",\"address_state\":\"Kiev\",\"receiver_email\":\"bohdanyarema1992-facilitator@gmail.com\",\"pending_reason\":\"unilateral\",\"txn_type\":\"web_accept\",\"item_name\":\"\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a \\u001a\\u001a\\u001a\\u001a\\u001a\\u001a \\u001a\\u001a\\u001a \\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\",\"mc_currency\":\"USD\",\"item_number\":\"User123\",\"residence_country\":\"UA\",\"transaction_subject\":\"\",\"payment_gross\":\"0.01\",\"ipn_track_id\":\"d76a3cc34feb0\"}'),
	(3,'{\"mc_gross\":\"0.01\",\"protection_eligibility\":\"Ineligible\",\"address_status\":\"confirmed\",\"payer_id\":\"8BVCPUPHPZU2S\",\"address_street\":\"Raduzhna 11a\",\"payment_date\":\"03:29:08 Apr 01, 2018 PDT\",\"payment_status\":\"Pending\",\"charset\":\"windows-1252\",\"address_zip\":\"02218\",\"first_name\":\"Bohdan\",\"address_country_code\":\"UA\",\"address_name\":\"Bohdan Yarema\",\"notify_version\":\"3.9\",\"custom\":\"\",\"payer_status\":\"verified\",\"address_country\":\"Ukraine\",\"address_city\":\"Kiev\",\"quantity\":\"1\",\"verify_sign\":\"ASOkSL9qIdtqAxup3RzKnyf.6OAHAASBlj.d--ytABi1PsTM7f5UbEm4\",\"payer_email\":\"bohdanyarema1992@gmail.com\",\"txn_id\":\"6L1451824D717945D\",\"payment_type\":\"instant\",\"last_name\":\"Yarema\",\"address_state\":\"Kiev\",\"receiver_email\":\"bohdanyarema1992-facilitator@gmail.com\",\"pending_reason\":\"unilateral\",\"txn_type\":\"web_accept\",\"item_name\":\"\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\\u001a \\u001a\\u001a\\u001a\\u001a\\u001a\\u001a \\u001a\\u001a\\u001a \\u001a\\u001a\\u001a\\u001a\\u001a\\u001a\",\"mc_currency\":\"USD\",\"item_number\":\"User123\",\"residence_country\":\"UA\",\"transaction_subject\":\"\",\"payment_gross\":\"0.01\",\"ipn_track_id\":\"60473c4bae1c5\"}'),
	(4,'{\"mc_gross\":\"0.01\",\"protection_eligibility\":\"Ineligible\",\"address_status\":\"confirmed\",\"payer_id\":\"8BVCPUPHPZU2S\",\"address_street\":\"Raduzhna 11a\",\"payment_date\":\"04:05:26 Apr 01, 2018 PDT\",\"payment_status\":\"Pending\",\"charset\":\"windows-1252\",\"address_zip\":\"02218\",\"first_name\":\"Bohdan\",\"address_country_code\":\"UA\",\"address_name\":\"Bohdan Yarema\",\"notify_version\":\"3.9\",\"custom\":\"\",\"payer_status\":\"verified\",\"address_country\":\"Ukraine\",\"address_city\":\"Kiev\",\"quantity\":\"1\",\"verify_sign\":\"ACxuDoK6EI0zC7aghE5q476z3AlBAFtJFUVOlBwk0c4Of.WoT2bj11Oh\",\"payer_email\":\"bohdanyarema1992@gmail.com\",\"txn_id\":\"95J31831US592991U\",\"payment_type\":\"instant\",\"last_name\":\"Yarema\",\"address_state\":\"Kiev\",\"receiver_email\":\"bohdanyarema1992-facilitator@gmail.com\",\"pending_reason\":\"unilateral\",\"txn_type\":\"web_accept\",\"item_name\":\"Peddobear item\",\"mc_currency\":\"USD\",\"item_number\":\"User123\",\"residence_country\":\"UA\",\"transaction_subject\":\"\",\"payment_gross\":\"0.01\",\"ipn_track_id\":\"4928b33e402ef\"}'),
	(5,'{\"mc_gross\":\"0.01\",\"protection_eligibility\":\"Ineligible\",\"address_status\":\"confirmed\",\"payer_id\":\"8BVCPUPHPZU2S\",\"address_street\":\"Raduzhna 11a\",\"payment_date\":\"04:35:57 Apr 01, 2018 PDT\",\"payment_status\":\"Pending\",\"charset\":\"windows-1252\",\"address_zip\":\"02218\",\"first_name\":\"Bohdan\",\"address_country_code\":\"UA\",\"address_name\":\"Bohdan Yarema\",\"notify_version\":\"3.9\",\"custom\":\"\",\"payer_status\":\"verified\",\"address_country\":\"Ukraine\",\"address_city\":\"Kiev\",\"quantity\":\"1\",\"verify_sign\":\"Ap6PkXMOBrwka.zykNQR4z.01YpLAmQJSeXgeSxWtW0c6PyGr7g1gHOH\",\"payer_email\":\"bohdanyarema1992@gmail.com\",\"txn_id\":\"17859390R4012535C\",\"payment_type\":\"instant\",\"last_name\":\"Yarema\",\"address_state\":\"Kiev\",\"receiver_email\":\"bohdanyarema1992-facilitator@gmail.com\",\"pending_reason\":\"unilateral\",\"txn_type\":\"web_accept\",\"item_name\":\"Peddobear item\",\"mc_currency\":\"USD\",\"item_number\":\"User123\",\"residence_country\":\"UA\",\"transaction_subject\":\"\",\"payment_gross\":\"0.01\",\"ipn_track_id\":\"4ccb6424b5601\"}');

/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table message
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
	(1,'en','HOME'),
	(1,'pl','START'),
	(2,'pl','O NAS'),
	(3,'pl','SKLEP'),
	(4,'pl','PROMOCJE'),
	(5,'pl','KOSZYK'),
	(6,'pl','KONTAKT');

/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;

INSERT INTO `migration` (`version`, `apply_time`)
VALUES
	('m000000_000000_base',1522573343),
	('m150207_210500_i18n_init',1522698298),
	('m180320_185429_add_table_shop',1522573346),
	('m180320_203132_add_file_storage_table',1522573346),
	('m180320_222035_add_column_to_shop',1522573346),
	('m180401_084008_add_table_log',1522573346),
	('m180401_174931_change_shop_table',1522606643),
	('m180401_194036_add_table_page',1522617245),
	('m180401_194244_seed_data_page',1522617245);

/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page`;

CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `meta_image_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_image_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;

INSERT INTO `page` (`id`, `slug`, `status`, `meta_image_path`, `meta_image_base_url`, `created_at`, `updated_at`)
VALUES
	(1,'coockie',1,NULL,NULL,1522617245,1522619044),
	(2,'about',1,NULL,NULL,1522617245,1522619352),
	(3,'shop',1,NULL,NULL,1522617245,1522617245),
	(4,'special',1,NULL,NULL,1522617245,1522617245),
	(5,'cart',1,NULL,NULL,1522617245,1522617245),
	(6,'contact',1,NULL,NULL,1522617245,1522617245),
	(7,'success',1,NULL,NULL,1522617245,1522617245),
	(8,'fail',1,NULL,NULL,1522617245,1522617245),
	(9,'index',1,NULL,NULL,1522617245,1522617245),
	(10,'payment',1,NULL,NULL,1522617245,1522617245),
	(11,'notify',1,NULL,NULL,1522617245,1522617245);

/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_i18n
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_i18n`;

CREATE TABLE `page_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `i18n` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_page_i18n` (`page_id`),
  CONSTRAINT `fk_page_i18n` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `page_i18n` WRITE;
/*!40000 ALTER TABLE `page_i18n` DISABLE KEYS */;

INSERT INTO `page_i18n` (`id`, `page_id`, `i18n`, `title`, `description`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`)
VALUES
	(1,1,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(2,1,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(3,2,'pl','about','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522619352),
	(4,2,'en','about','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522619352),
	(5,3,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(6,3,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(7,4,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(8,4,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(9,5,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(10,5,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(11,6,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(12,6,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(13,7,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(14,7,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(15,8,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(16,8,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(17,9,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(18,9,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(19,10,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(20,10,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(21,11,'pl','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245),
	(22,11,'en','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Coockie','Coockie','Lorem ipsum dolor sit amet, consectetur adipiscing elit.',1522617245,1522617245);

/*!40000 ALTER TABLE `page_i18n` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop`;

CREATE TABLE `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `slide_path` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_base_url` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;

INSERT INTO `shop` (`id`, `image_base_url`, `image_path`, `status`, `created_at`, `updated_at`, `slide_path`, `slide_base_url`)
VALUES
	(1,'/source','1/HFNGQ3_B3A6jirWdb6Rx7K2xrptcLLcP.png',1,1522607288,1522607288,'1/pCKmQF5O6uIa9YBI77GeFvNBnAJPmeRY.png','/source'),
	(2,'/source','1/3BDrGAoHR6T5laIvHNuNFIHOxBYIX6NM.png',1,1522607309,1522607309,'1/JGcQSDnyWR2VXJzEVet4hgip2jTMA9Ab.png','/source'),
	(3,'/source','1/EGq_pBeqMygg5PYPSK_16COiHa5nT5OO.png',1,1522607386,1522607386,'1/8V4kLgyFG9EoIkI4WsP9L1OeW7RtFI4H.png','/source'),
	(4,'/source','1/AREgNq6-NXBeHVS8_zflURF7vgrYNuw1.png',2,1522607399,1522608239,'1/g2XpciYhgt31wRaix1qjrDHEhDtFZ_P2.png','/source'),
	(5,'/source','1/bRVgHZg-lODI-mOIOGvvBlEpAlitinZ7.png',1,1522607412,1522607412,'1/_Ly6BBmcupRjYv8oD6mDDpPn0w5u3LoK.png','/source'),
	(6,'/source','1/khJkOswOrsD83u1xm0NeLMJVrNoIYPKW.png',2,1522607440,1522608224,'1/yHObaZMstvoYTq-LOFrlK-pKmAbDvfoR.png','/source');

/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_i18n
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
  `price` float DEFAULT NULL,
  `special_price` float DEFAULT NULL,
  `meta_title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fk_shop_i18n` (`shop_id`),
  CONSTRAINT `fk_shop_i18n` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `shop_i18n` WRITE;
/*!40000 ALTER TABLE `shop_i18n` DISABLE KEYS */;

INSERT INTO `shop_i18n` (`id`, `shop_id`, `i18n`, `title`, `description`, `created_at`, `updated_at`, `price`, `special_price`, `meta_title`, `meta_description`)
VALUES
	(1,1,'pl','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607288,1522607288,12,10,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(2,1,'en','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607288,1522607288,5,3,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(3,2,'pl','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607309,1522607309,12,10,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(4,2,'en','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607309,1522607309,5,3,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(5,3,'pl','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607386,1522607386,12,10,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(6,3,'en','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607386,1522607386,5,3,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(7,4,'pl','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607399,1522608239,12,10,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(8,4,'en','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607399,1522608239,5,3,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(9,5,'pl','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607412,1522607412,12,10,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(10,5,'en','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607412,1522607412,5,3,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(11,6,'pl','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607440,1522608224,12,10,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.'),
	(12,6,'en','Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.',1522607440,1522608224,5,3,'Joma','Joma - The essence of autumn. The sensual freshness of ripe pears embraces a bouquet of white freesias and warms up the aroma of ambergris, patchouli and trees. Warm and attractive.');

/*!40000 ALTER TABLE `shop_i18n` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table source_message
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
	(35,'frontend','contact information');

/*!40000 ALTER TABLE `source_message` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
