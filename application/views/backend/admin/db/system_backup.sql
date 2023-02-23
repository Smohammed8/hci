#
# TABLE STRUCTURE FOR: admin
#

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_join` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logout` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `authentication_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `registered_by` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skin_colour` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_align` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `date_of_join` (`date_of_join`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (2, 'Dr Fufa Diriba', 'diribafuf@gmail.com', '092178478b5b7f2ad4c5531604efa95e', ' Friday, February 14, 2020', 'Male', '', 'Head', '02/14/2020 12:26:56', '02/14/2020 12:48:46', 0, '562615', 'yes', '3', NULL, NULL, NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (3, 'Seid Mohammed', 'seidm9815@gmail.com', '33ceb07bf4eeb3da587e268d663aba1a', 'Sunday, October 27, 2019', 'Male', '0917638874', 'Super_admin', '07/16/2020 11:46:56', '07/14/2020 17:12:04', 1, '662830', 'yes', '3', 'english', 'blue', 'left-to-right');
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (4, 'Abdilbasit   Mohammed', 'abdilbasit@ju.edu.et', '092178478b5b7f2ad4c5531604efa95e', 'Monday, January 20, 2020', 'Male', '0917140010', 'Admin', '04/21/2020 11:59:14', '04/21/2020 13:47:00', 0, '235988', 'yes', '3', 'english', 'default', 'left-to-right');
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (5, 'Abdusemed Ababiya', 'abdababiya@gmail.com', '311eba6dada049960e16974e652ef134', 'Monday, January 20, 2020', 'Male', '0917796529', 'Admin', '03/25/2020 13:16:35', '02/28/2020 13:15:58', 1, '842292', 'yes', '3', 'english', 'green', 'left-to-right');
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (6, 'Eliyas  Diriba', 'eliyas@ju.edu.et', '33ceb07bf4eeb3da587e268d663aba1a', 'Monday, January 20, 2020', 'Male', '0919352512', 'Admin', '04/24/2020 08:59:45', '04/24/2020 09:43:55', 0, '812291', 'yes', '3', 'english', 'black', 'left-to-right');
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (7, 'Covid User', 'seid@ju.edu.et', '33ceb07bf4eeb3da587e268d663aba1a', 'Friday, January 24, 2020', 'Male', '0901841121', 'Covid_user', '04/26/2020 04:03:51', '04/26/2020 04:31:31', 0, '182029', 'yes', '3', 'english', 'blue', 'left-to-right');
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (9, 'Mame  Mame', 'mame@ju.edu.et', '092178478b5b7f2ad4c5531604efa95e', ' Wednesday, February 19, 2020', 'Male', '', 'Org', '03/30/2020 13:10:15', '03/30/2020 13:10:37', 0, '179552', 'no', 'self', NULL, NULL, NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (10, 'Habtamu  Mamo', 'habtamu@ju.edu.et', '092178478b5b7f2ad4c5531604efa95e', 'Saturday, February 01, 2020', 'Male', '0912547463', 'User', '05/31/2020 12:08:39', '05/31/2020 12:12:27', 0, '424786', 'yes', '3', 'english', 'blue', NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (11, 'Test Admin', 'alemayehu@ju.edu.et', '33ceb07bf4eeb3da587e268d663aba1a', 'Saturday, February 01, 2020', 'Male', '09854742', 'Head', '07/14/2020 17:12:11', '07/14/2020 18:41:38', 0, '756216', 'yes', 'self', 'english', 'blue', NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (12, 'Gitme  Berhanu', 'gitme@ju.edu.et', 'c23882c7cd112b4062aaf46f89ed8d77', 'Tuesday, February 11, 2020', 'Male', '0900000000', 'Admin', '02/11/2020 08:03:07', '02/11/2020 08:49:15', 0, '435511', 'yes', '3', NULL, NULL, NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (14, 'Melaku  Melaku', 'melakuside@gmail.com', '1e087518bb201ac252c77ad859c2072b', ' Tuesday, February 25, 2020', 'Male', '', 'Admin', NULL, NULL, 0, NULL, 'yes', 'self', NULL, NULL, NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (34, 'Yakob  Mubarek', 'jacobleli653@gmail.com', 'ffd8692bf7f138f54cb57558abcaa201', ' Wednesday, February 26, 2020', 'Male', '0917061524', 'User', '02/26/2020 13:43:06', '02/26/2020 13:58:26', 0, '741835', 'yes', 'self', NULL, NULL, NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (35, 'Henuk  Mecha', 'henuk@ju.edu.et', '33ceb07bf4eeb3da587e268d663aba1a', 'Monday, March 16, 2020', 'Male', '', 'Org', '04/23/2020 13:45:29', '04/23/2020 13:51:59', 0, '990846', 'yes', '3', NULL, NULL, NULL);
INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `date_of_join`, `Sex`, `phone`, `role`, `last_login`, `logout`, `status`, `authentication_key`, `active`, `registered_by`, `language`, `skin_colour`, `text_align`) VALUES (36, 'Alemayehu  Wondimehu', 'alemayehumekonnen@gmail.com', 'd595fe25c35d5c7be2e76d225d8883fb', ' Wednesday, March 25, 2020', 'Male', '0917716863', 'Head', '04/02/2020 07:57:18', '04/02/2020 08:26:30', 0, '370162', 'yes', '3', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: agreement
#

DROP TABLE IF EXISTS `agreement`;

CREATE TABLE `agreement` (
  `agreement_id` int(11) NOT NULL AUTO_INCREMENT,
  `agreement` varchar(100) NOT NULL,
  PRIMARY KEY (`agreement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `agreement` (`agreement_id`, `agreement`) VALUES (1, 'CB Health Insurance');
INSERT INTO `agreement` (`agreement_id`, `agreement`) VALUES (2, 'Health Care finance');
INSERT INTO `agreement` (`agreement_id`, `agreement`) VALUES (3, 'Credit Service');


#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `try_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (`try_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2544 DEFAULT CHARSET=latin1;

INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2505, '34d7a7f4026b94d4ac93d4ce36372fde5cae8755', '127.0.0.1', 1593963899, '__ci_last_regenerate|i:1593963873;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2506, '5d6bbea796023f7579fa8b4cb6bb07bd62d9f410', '127.0.0.1', 1593964542, '__ci_last_regenerate|i:1593964275;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2507, '7195eb7af9c27d2aad6585c9f70bacac7ae1a089', '127.0.0.1', 1593964859, '__ci_last_regenerate|i:1593964706;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";flash_message|s:25:\"Data updated successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2508, '0e1d3516457f5020f2e386580126225efcf01641', '127.0.0.1', 1593965115, '__ci_last_regenerate|i:1593965029;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2510, 'b9172d35ebacfd33ccfe0a24c2c0abcfa9fe5f91', '127.0.0.1', 1593966320, '__ci_last_regenerate|i:1593966082;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2511, '327169f7f0612171813bb7bd30828fb1c9e3fd77', '127.0.0.1', 1593966442, '__ci_last_regenerate|i:1593966394;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2512, '41a55578bbd51a73dc7abcee0d67690f6dc7f97d', '127.0.0.1', 1593967131, '__ci_last_regenerate|i:1593967098;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2513, 'bb3cdebc6101d0596274f28ccfa44fd3e237bfbd', '127.0.0.1', 1593967547, '__ci_last_regenerate|i:1593967414;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2514, 'e3abbcd0ef33116f52852a50800e229332c2b4d0', '127.0.0.1', 1593967720, '__ci_last_regenerate|i:1593967718;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2516, 'eb12d794f4321b510bdf6c200d9d8551dc7e6ccf', '127.0.0.1', 1593968508, '__ci_last_regenerate|i:1593968339;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2517, 'fc43d65f0703d89ed5e293f0433868f2e312823a', '127.0.0.1', 1593968996, '__ci_last_regenerate|i:1593968704;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2518, '4ababc4f99255ea71448f4f27b6b1a5bb899a6a2', '127.0.0.1', 1593969177, '__ci_last_regenerate|i:1593969024;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2519, 'aed0df883a64e377c3ff78955a567b8959fb04db', '127.0.0.1', 1593969577, '__ci_last_regenerate|i:1593969362;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2520, '80e8b69fe54dc0888ceaa6e5dceee0d98c74f9fa', '127.0.0.1', 1593977512, '__ci_last_regenerate|i:1593977249;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2521, '6674b66a093192a3733cdcf8438a27ba49be60ef', '127.0.0.1', 1593977789, '__ci_last_regenerate|i:1593977572;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2522, '2ad0764dd5b56e7cd657918c02596b4a9a7473c9', '127.0.0.1', 1593978223, '__ci_last_regenerate|i:1593977964;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2523, '2bee65c6e0090ee692c6c5b09e5bf62b14fd084e', '127.0.0.1', 1593978616, '__ci_last_regenerate|i:1593978325;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2524, '9f25e5b6ac8f0cfaf0fab86e912ed1ab89af75ca', '127.0.0.1', 1593978915, '__ci_last_regenerate|i:1593978631;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2527, 'eabf96900c8cc27268475cca65a4d9c2c9170442', '127.0.0.1', 1593979695, '__ci_last_regenerate|i:1593979440;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2528, 'd728baf11182fb328744d7f5a5f278e101a3fb81', '127.0.0.1', 1593979751, '__ci_last_regenerate|i:1593979749;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2530, '791d2598bb866e86e734580a806236192f8ebcba', '127.0.0.1', 1594746857, '__ci_last_regenerate|i:1594746724;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2531, 'ad7c346d4607f77f33a45055749305829f25241f', '127.0.0.1', 1594747756, '__ci_last_regenerate|i:1594747177;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2532, '4136b1c01fa44effda38d089daba2cf600fc052b', '127.0.0.1', 1594748251, '__ci_last_regenerate|i:1594747958;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2533, '5c870b479897c8952603785c954fa335ba34e801', '127.0.0.1', 1594748559, '__ci_last_regenerate|i:1594748262;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2534, '32a28841dff7cceacf28f9df18c08c721edc93af', '127.0.0.1', 1594749154, '__ci_last_regenerate|i:1594748985;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2535, 'de3270466dacb54f57605cc42eb4667f8604686a', '127.0.0.1', 1594749431, '__ci_last_regenerate|i:1594749431;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2536, 'bf0a0680cee75b2eabe5b5daa4f607ab1bb16d96', '127.0.0.1', 1594750032, '__ci_last_regenerate|i:1594750010;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2537, '2e58eaa4c20352cc4e624402677e28616e150077', '127.0.0.1', 1594750995, '__ci_last_regenerate|i:1594750698;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2538, '2af4476808960d5f95425e6271a39396beb07a3d', '127.0.0.1', 1594751086, '__ci_last_regenerate|i:1594751045;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2539, '38eda9f4efeb878e3836a18a104fa47607b9220e', '127.0.0.1', 1594752098, '__ci_last_regenerate|i:1594752098;');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2540, '35e3bcf93090ca66a8ddb5d5a5b330d1b7f0aa2f', '127.0.0.1', 1594900151, '__ci_last_regenerate|i:1594899999;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2541, '32e88f3708d40f67d8d6a9f0c773e4ab755f8c56', '127.0.0.1', 1594900554, '__ci_last_regenerate|i:1594900391;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2542, '2150096dc40e6aaf9eeddfeee86ac70741d4d9c3', '127.0.0.1', 1594901142, '__ci_last_regenerate|i:1594900831;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');
INSERT INTO `ci_sessions` (`try_id`, `id`, `ip_address`, `timestamp`, `data`) VALUES (2543, '7983c38d063726ecf8c71227dc7585d6452cab6a', '127.0.0.1', 1594901431, '__ci_last_regenerate|i:1594901161;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:13:\"Seid Mohammed\";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";');


#
# TABLE STRUCTURE FOR: class
#

DROP TABLE IF EXISTS `class`;

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (1, 'Tegray region', 'Ethiopiai\'s most northerly region is Tigray, which covers 80,000 square km and is administered from its capital city of Mekele. The population totals more than 5.06 million, of which 95% are Orthodox Christian and the remainder Muslim. The Tigraian people, the dominant ethnic group, are agriculturists who also herd cattle and other livestock.');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (2, 'Afar Region', 'Although it covers a vast area of 270,000 square km running up the border with Djibouti and Eritrea, Afar region is arid, thinly populated and almost bereft of large towns. According to July 2013 estimates of the Central Statistical Agency of Ethiopia, the total population of Afar is 1.65 million, of which less than 10% live in urban areas. ');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (3, 'Amahara region', 'Governed from its large modern capital city of Bahir Dar, on the southern tip of Lake Tana, Amhara covers an area of 170,752 square km and supports a population estimated at 19.2 million in 2013. Although the substantial cities of Bahr Dar, Gondar and Dessie all lie within Amhara, roughly 90% of the region\'s population is rural.');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (4, 'Oromia', 'The vast region of oromia covers an area of more than 350,000 square km (almost one-third of the country) and supports a correspondingly large population of over 32.2 million people. Roughly 85% of the regional population is Oromo, and another 10% Amhara. Aside from the 5% who still practise animist or other traditional religions, the regional split between Christian and Muslim is as good as even.');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (5, 'Somalia region', 'Named for the distinctive Somali people, who comprise 95% of its population, this is the second largest of Ethiopia\'s regions, covering an area of 250,000 square km along the Somali border. Much of the region is desert or semi-desert, its vast area, the total population is around 5.3 million.');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (6, 'Benishangumuz', 'The most obscure of Ethiopia\'s regions, practically never visited by tourists, is Benishangul-Gumuz, which runs for about 2,000km along the Sudanese border to the east of Amhara, but is on average no more than 200km. Relatively low-lying but with an annual rainfall in excess of 1,000mm, this remote and poorly developed area is characterised by a hot, humid climate. ');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (7, 'SNNP Region', 'Although it smells like the handiwork of an uninspired committee, the name of this 112,323 square km region does provide an accurate reflection of its incredible cultural diversity. The regional population of roughly 17.9 million represents some 45 different ethino-lingustic groups, of which none comprises 20% of the regional population, and only the Sidamo, Gurage and Walaita make up more than 10% each. ');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (8, 'Gambela', 'The small state, which covers an area of 25,274 square km along the southern Sudanese border, essentially comprises lush, humid lowland draining into the Baro River, an important tributary of the NileRiver. Relatively remote and undeveloped, Gambella region supports a predominantly rural population of roughly 406,000 ethnically varied people.');
INSERT INTO `class` (`class_id`, `name`, `note`) VALUES (9, 'Harari region', 'Consisting of the walled city of Harar and its immediate environs, Harari is essentially a modern revival of the autonomous city-state of Harar, which was one of the most powerful regional political entities from the 16th until the late 19th century, when it was co-opted into Abyssinia by Menelik II. The state covers an area of roughly 350 square km and supports a population estimated at 215,000, of which some 131,000 are city dwellers.');


#
# TABLE STRUCTURE FOR: complain
#

DROP TABLE IF EXISTS `complain`;

CREATE TABLE `complain` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_by` varchar(30) NOT NULL,
  `region` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `year` varchar(20) NOT NULL,
  `quarter` int(11) NOT NULL,
  `view` varchar(30) DEFAULT NULL,
  `approved_by` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `complain` (`request_id`, `request_by`, `region`, `zone`, `woreda`, `comment`, `year`, `quarter`, `view`, `approved_by`) VALUES (1, '9', '4', '10', '06', 'Hi pc new?', '2011', 2, 'New', '11');
INSERT INTO `complain` (`request_id`, `request_by`, `region`, `zone`, `woreda`, `comment`, `year`, `quarter`, `view`, `approved_by`) VALUES (2, '9', '4', '10', '06', 'Hi pc new', '2012', 1, 'New', '11');


#
# TABLE STRUCTURE FOR: copyright
#

DROP TABLE IF EXISTS `copyright`;

CREATE TABLE `copyright` (
  `footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `footer` varchar(50) NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `copyright` (`footer_id`, `footer`) VALUES (2, 'JMC-ICT');


#
# TABLE STRUCTURE FOR: document
#

DROP TABLE IF EXISTS `document`;

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: enable_tbl
#

DROP TABLE IF EXISTS `enable_tbl`;

CREATE TABLE `enable_tbl` (
  `enable_id` int(11) NOT NULL AUTO_INCREMENT,
  `signup` int(11) NOT NULL,
  `survey` int(11) NOT NULL,
  PRIMARY KEY (`enable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `enable_tbl` (`enable_id`, `signup`, `survey`) VALUES (1, 1, 1);


#
# TABLE STRUCTURE FOR: encounter
#

DROP TABLE IF EXISTS `encounter`;

CREATE TABLE `encounter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mrn_no` int(11) NOT NULL COMMENT '0 undefined , 1 present , 2  absent',
  `date_of_visit` varchar(50) NOT NULL,
  `diagniss` int(11) NOT NULL,
  `cbhi_ID` varchar(50) NOT NULL,
  `cbhi_code` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: exam
#

DROP TABLE IF EXISTS `exam`;

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: facility
#

DROP TABLE IF EXISTS `facility`;

CREATE TABLE `facility` (
  `Facility_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `cachement` varchar(20) NOT NULL,
  `ownership` varchar(20) NOT NULL,
  `tmale` varchar(20) NOT NULL,
  `tfemale` varchar(20) NOT NULL,
  `cols1` int(11) DEFAULT NULL,
  `cols2` int(11) DEFAULT NULL,
  `cols3` int(11) DEFAULT NULL,
  `cols4` int(11) DEFAULT NULL,
  `cols5` int(11) DEFAULT NULL,
  `cols6` int(11) DEFAULT NULL,
  `cols7` int(11) DEFAULT NULL,
  `cols8` int(11) DEFAULT NULL,
  `cols9` int(11) DEFAULT NULL,
  `cols10` int(11) DEFAULT NULL,
  `cols11` int(11) DEFAULT NULL,
  `cols12` int(11) DEFAULT NULL,
  `cols13` int(11) DEFAULT NULL,
  `cols14` int(11) DEFAULT NULL,
  `cols15` int(11) DEFAULT NULL,
  PRIMARY KEY (`Facility_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `facility` (`Facility_id`, `name`, `type`, `cachement`, `ownership`, `tmale`, `tfemale`, `cols1`, `cols2`, `cols3`, `cols4`, `cols5`, `cols6`, `cols7`, `cols8`, `cols9`, `cols10`, `cols11`, `cols12`, `cols13`, `cols14`, `cols15`) VALUES (1, 'Jimma Medical Center', 'Hospital', '15000000', 'Public', '7000000', '8000000', 4524, 34132, 32123, 2244, 224, 2441, 242, 2431, 2421, 4214, 2244, 4545, 4565, 454, 45454);


#
# TABLE STRUCTURE FOR: indigent
#

DROP TABLE IF EXISTS `indigent`;

CREATE TABLE `indigent` (
  `indigent_id` int(11) NOT NULL AUTO_INCREMENT,
  `agreement_id` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`indigent_id`),
  KEY `agreement_id` (`agreement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `indigent` (`indigent_id`, `agreement_id`, `name`) VALUES (1, '1', 'H');
INSERT INTO `indigent` (`indigent_id`, `agreement_id`, `name`) VALUES (2, '1', 'K');
INSERT INTO `indigent` (`indigent_id`, `agreement_id`, `name`) VALUES (3, '3', 'Employee');
INSERT INTO `indigent` (`indigent_id`, `agreement_id`, `name`) VALUES (4, '3', 'Student');
INSERT INTO `indigent` (`indigent_id`, `agreement_id`, `name`) VALUES (5, '3', 'Prisoner');
INSERT INTO `indigent` (`indigent_id`, `agreement_id`, `name`) VALUES (6, '2', 'Letter');


#
# TABLE STRUCTURE FOR: kebele
#

DROP TABLE IF EXISTS `kebele`;

CREATE TABLE `kebele` (
  `kebele_id` int(11) NOT NULL AUTO_INCREMENT,
  `kebele_code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `region_id` varchar(10) NOT NULL,
  `zone_id` varchar(10) NOT NULL,
  `woreda_id` varchar(10) NOT NULL,
  PRIMARY KEY (`kebele_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: language
#

DROP TABLE IF EXISTS `language`;

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci,
  `Amharic` longtext COLLATE utf8_unicode_ci,
  `Afaan_oromoo` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`phrase_id`),
  UNIQUE KEY `phrase` (`phrase`)
) ENGINE=MyISAM AUTO_INCREMENT=3371 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1, 'login', 'Login', 'Login', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2, 'account_type', 'Account type', 'ተጠቃሚ አይነት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (4, 'teacher', 'User Accounts', 'ተጠቃሚዎች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (7, 'email', 'Email', 'Email', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (8, 'password', 'Password', 'የሚስጥር ቁጥር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (9, 'forgot_password ?', 'Forgot password ?', 'የሚስጥር ቁጥር	ረሳህ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (10, 'reset_password', 'Reset password', 'የሚስጥር ቁጥር ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (11, 'reset', 'Reset', 'ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (12, 'admin_dashboard', 'Welcome admin page', 'እንካን ደህና መጡ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (13, 'account', 'My account', 'የኔ መለያ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (14, 'profile', 'Profile', 'ማህደር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (15, 'change_password', 'Change password', 'የሚስጥር ቁጥር ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (16, 'logout', 'Logout', 'ዘግተህ ውጣ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (17, 'panel', 'Panel', 'ገጽ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (19, 'dashboard', 'Dashboard', 'መነሻ ገዕ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (22, 'cbhi_no', 'CBHI #ID', 'የግለሰብ መለያ ቁጥር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (25, 'class', 'Insurer by Location', 'አድራሻ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (27, 'fname', 'Name of Beneficiary:', 'ሙሉ ስም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (34, 'username', 'Email', 'ኢ-ማል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (43, 'noticeboard-event', 'Noticeboard-event', 'ማስታዎቂያ ሰልድያ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (45, 'settings', 'Settings', 'መቼት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (46, 'system_settings', 'System settings', 'ሲስተም መቼት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (47, 'manage_language', 'Manage language', 'ቋንቋ አስትካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (48, 'backup_restore', 'Backup restore', 'ባክአፕ እና ሪስቶረ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (49, 'system_name', 'Integrated HCI System', 'Integrated HCI System', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (51, 'manage_teacher', 'Manage Users', 'ማኔጅ ዩዘርስ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (52, 'noticeboard', 'Notice board', 'ማስታዎቂያ ሰልድያ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (53, 'language', 'English(USA)', 'አማርኛ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (54, 'backup', 'Backup', 'ባክአፕ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (55, 'calendar_schedule', 'Calendar schedule', 'ካላንደር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (56, 'select_a_class', 'Select a Region', 'ክልል ምርጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (57, 'insurance_payment ', 'Insurance Payment Information by service type', 'ክፍያ በአግልግሎት አይነት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (60, 'photo', 'Photo', 'ፎቶ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (62, 'personal_info', 'Personal Information', 'የግል መረጃ ዝርዝር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (63, 'options', 'Options', 'አማራጮች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (64, 'PatientByregion', 'Patient By region', 'ህሙማን በክልል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (66, 'edit', 'Edit', 'እንደገና አስተካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (67, 'delete', 'Delete', 'አጥፋ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (68, 'personal_profile', 'Personal profile', 'የግል ማህድር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (70, 'name', 'Full Name', 'ስም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (71, 'join_date', 'Date of Service Provided', 'አገልግሎት የተሰጠበት ቀን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (72, 'sex', 'Sex', 'ዖታ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (73, 'male', 'Male', 'ወንድ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (74, 'female', 'Female', 'ሰት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (77, 'phone', 'Phone', 'ስልክ ቁጥር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (82, 'add_teacher', 'Add User', 'መዝግብልኝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (92, 'Add_new_user', 'Add new user', 'አድስ ተተቃሚ መዝግብ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (93, 'add', 'Add', 'መዝግብልኝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (95, 'college', 'Region', 'ክልል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (97, 'add_model', 'Insurance Managment System(IMS)', 'ኢንሹራንስ ማነጅመንት ሲስትም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (98, 'personal_information', 'Patient Personal Information', 'የህሙማን የግል መረጃ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (103, 'List_Regions', 'List Regions', 'የክልል ዝርዝሮች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (104, 'class_list', 'Region list', 'ክልሎች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (105, 'add_class', 'List of Regions', 'የክልል ዝርዝሮች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (106, 'class_name', 'Region name', 'ክልል ስም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (109, 'edit_class', 'Edit Region', 'እንደገና አስተካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (114, 'date', 'Date', 'ቀን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (115, 'department', 'Zone', 'ዞን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (117, 'role', 'Role', 'ሚና', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (714, 'patient_information', 'Patient Information', 'የህሙማን መረጃ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (713, 'age', 'Age', 'ዕድማ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (726, 'Old case', 'Old case', 'ነባር ጉዳይ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (123, 'admin', 'Admin', 'አድሚን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (124, 'user', 'User', 'ተጠቃሚ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (126, 'woreda', 'Woreda', 'ወረዳ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (136, 'day', 'Day', 'ቀን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (143, 'title', 'Title', 'ርዕስ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (144, 'description', 'Description', 'መግልጫ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (146, 'status', 'Status', 'ሁናት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (742, 'kebele_code', 'Kebele Code', 'ቀበለ ኮድ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (162, 'available', 'Available', 'አለ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (163, 'unavailable', 'Unavailable', 'የለም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (172, 'manage_dormitory', 'Welcome to System configuration page', 'ሲስተም ማስተካካይስ ግዕ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (177, 'manage_noticeboard', 'Manage noticeboard', 'ማስታዎቂያዎች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (178, 'noticeboard_list', 'Noticeboard list', 'ማስታዎቂ ዝርዝር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (179, 'add_noticeboard', 'Add noticeboard', 'ማስታዎቂ መዝግብ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (180, 'notice', 'Notice', 'ማስታዎቂ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (181, 'add_notice', 'Add notice', 'ማስታዎቂ ጨምር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (182, 'edit_noticeboard', 'Edit noticeboard', 'ማስታዎቂ አስተካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (184, 'save', 'Save', 'መዝግብልኝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (185, 'system_title', 'System title', 'ሲስተም ርዕስ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (186, 'paypal_email', 'Paypal email', 'የሲስተም ኢማል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (187, 'currency', 'Currency', 'ገንዘብ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (188, 'phrase_list', 'Phrase list', 'ሀረጎችዝርዝር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (189, 'add_phrase', 'Add phrase', 'ሀረጎች ጨምር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (190, 'add_language', 'Add language', 'ቋንቋ ጨምር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (191, 'phrase', 'Phrase', 'ሀረጎች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (192, 'manage_backup_restore', 'Manage backup restore', 'ባክኣፕ ሪስቶር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (193, 'restore', 'Restore', 'ሪስቶር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (198, 'all', 'All', 'ሁሉም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (199, 'upload_&_restore_from_backup', 'Upload & restore from backup', 'ባክአፕ ጫን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (200, 'manage_profile', 'Manage profile', 'ማህደር አስተካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (201, 'update_profile', 'Update profile', 'ማህደር ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (202, 'new_password', 'New password', 'አድስ የሚስጥር ቁጥር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (203, 'confirm_new_password', 'Confirm new password', 'የሚስጥር ቁጥር በድጋሚ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (204, 'update_password', 'Update password', 'ቀይርልኝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (210, 'delete_language', 'Delete language', 'ቋንቋ አጥፋ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (211, 'settings_updated', 'Settings updated', 'Settings has been updated', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (212, 'update_phrase', 'Update phrase', 'ሀረግ ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (213, 'login_failed', 'Login has been failed', 'Login has been failed', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (218, 'system_email', 'System email', 'ኢሜል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (219, 'option', 'Option', 'አማራጭ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (220, 'edit_phrase', 'Edit phrase', 'ሀረግ ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (221, 'forgot_your_password', 'Forgot Your Password', 'የሚስጥር ቁጥርህን ረሳህ?', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (222, 'forgot_password', 'Forgot Password', 'የሚስጥር ቁጥር ረሳህ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (223, 'back_to_login', 'Back To Login', 'ወድመግቢያ ግዕ ሂድ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (224, 'return_to_login_page', 'Return to Login Page', 'ወድመግቢያ ግዕ ሂድ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (225, 'admit_patient', 'New patient', 'አድስ ህሙማን መዝግብ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (226, 'admit_bulk', 'Batch upload', 'ከኢክሲል ሽት ጫን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (230, 'select_zone_first', 'Select zone first', 'ቀድመህ ዞን ምረጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (231, 'message', 'Message', 'መልእክቶች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (232, 'general_settings', 'General settings', 'አጠቃላይ መችት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (233, 'language_settings', 'Language settings', ' ቋንቋ መችት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (234, 'edit_profile', 'Edit profile', 'ማህድር አስተካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (235, 'event_schedule', 'Event  schedule', 'ማስታዎቂያ ሰልድያ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (236, 'cancel', 'Cancel', 'ሰርዝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (237, 'addmission_form', 'Registration form', 'የመመዝገቢያ ፎርም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (238, 'value_required', 'Please value missing!', 'እባክዎ ይህንን ፊልድ ይሙሉ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (239, 'select', 'Select', 'ምረጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (240, 'gender', 'Gender', 'ዖታ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (243, 'select_excel_file', 'Select excel file', 'excel file ምርጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (244, 'upload_and_import', 'Upload and import', 'ለመጫን ምርጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (245, 'manage_classes', 'List of regions', 'ክልል ዝርዝር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (246, 'manage_zone', 'Manage Zones', 'ዞኖች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (247, 'add_new_encounter', 'Add new encounter', 'አድስ ህክምና ጅምር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (248, 'section_name', 'Zone', 'ዞን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (252, 'update', 'Update', 'አስተካክል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (254, 'select_region_first', 'Select Region first', 'ቀድመህ ክልል ምርጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (255, 'patient_history', 'Patient Encounter & service Charge Information', 'የህሙማን ህክምና እና የአገልግሎት ክፍያ መርጃ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (256, 'search', 'Search', 'ፈልግ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (259, 'parents', 'List of Woredea', 'የወረዳዎች ዝርዝር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (264, 'text_align', 'Text align', '', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (265, 'clickatell_username', 'clickatell_username', '', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (266, 'clickatell_password', 'clickatell_password', '', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (267, 'clickatell_api_id', 'clickatell_api_id', '', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (268, 'sms_settings', 'SMS settings', 'አጭር መልእክት መቸት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (269, 'data_updated', 'Data updated successfully', 'Data has been updated successfully', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (270, 'data_added_successfully', 'Data has been added successfully', 'Data has been updated successfully', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (271, 'edit_notice', 'Edit notice', 'ማስታዎቂ ቀይር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (272, 'private_messaging', 'Private Messaging', 'ግላዊ መልዕክት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (273, 'messages', 'Inbox Messages', 'የመልዕክት ሳጥን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (274, 'new_message', 'New message', 'አድስ መልዕክት ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (275, 'write_new_message', 'Write new message', 'አድስ መልዕክት ላክ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (276, 'recipient', 'Recipient', 'ተቀባይ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (277, 'select_a_user', 'Select a user', 'ተቀባይ ምርጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (278, 'write_your_message', 'Write your message', 'መልዕክትህን አእዚህ ዓፍ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (279, 'send', 'Send', 'ላክልኝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (280, 'current_password', 'Current password', 'ነባር የሚስጥር ቁጥር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (285, 'theme_settings', 'You can select theme color what you want', 'የፈለከውን ባክግራውንድ ከለር ምረጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (286, 'select_theme', 'Select theme', 'ባክግራውንድ ከለር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (287, 'theme_selected', 'Now you are selected new theme!', 'Now you are selected new theme!', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (288, 'language_list', 'Language list', 'ቋንቋ ዝርዝር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (294, 'select_date', 'Select date', 'ቀን ምረጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (295, 'select_month', 'Select month', 'ወር ምረጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (296, 'select_year', 'Select year', 'አመት ምረጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (298, 'twilio_account', 'Twilio account', 'Twilio account', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (299, 'authentication_token', 'authentication_token', 'authentication_token', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (300, 'registered_phone_number', 'Registered phone number', 'Registered phone number', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (301, 'select_a_service', 'Select a service', 'Select a service', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (302, 'active', 'Active', 'Active', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (303, 'disable_sms_service', 'Disable SMS service  ', 'Disable SMS service  ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (304, 'not_selected', 'Not selected!', 'Not selected!', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (305, 'disabled', 'Disabled', 'Disabled', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (710, 'submit', 'Submit', 'መዝግብልኝ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (311, 'zone', 'Zone', 'ዞን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (313, 'payment_informations', 'Payment informations', 'ክፍያ መረጃ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (314, 'total', 'Total', 'አጠቃላይ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (319, 'cash', 'Cash', 'ካሽ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (321, 'card', 'Card', 'ካርድ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (322, 'data_deleted', 'Data deleted', 'Data deleted', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (323, 'total_amount', 'Total amount', 'አጠቃላይ ድምር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (332, 'send_sms_to_all', 'Send sms to all', 'Send sms to all', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (333, 'yes', 'Yes', 'አዎ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (334, 'no', 'No', 'አይድለም', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (335, 'activated', 'activated', ' 	activated', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (336, 'sms_service_not_activated', 'SMS service not activate', 'SMS service not activate', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (341, 'image', 'Image', 'ፎቶ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (342, 'doc', 'doc', 'doc', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (343, 'pdf', 'Pdf', 'Pdf', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (344, 'excel', 'Excel', 'Excel', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (345, 'other', 'other', 'ሊሎች', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (351, 'send_marks_by_sms', 'Send marks by sms', 'send_marks_by_sms', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (353, 'select_receiver', 'Select receiver', 'ተቀባይ ምርጥ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (356, 'for', 'for', 'ለ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (357, 'message_sent', 'Message has been sent!', 'Message has been sent!', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (364, 'reply_message', 'Reply message', 'መልእክ መልሰህ ላከ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (365, 'account_updated', 'Account has been updated!', 'Account has been updated!', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (366, 'upload_logo', 'upload_logo', 'ሎጎ ጫን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (367, 'upload', 'Upload', 'ጫን', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (370, 'default_theme', 'Defualt theme', 'ኖርማል ባክግራውንድ ከለር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (371, 'default', 'Defualt', 'ኖርማል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (375, 'update_product', 'Update Product', 'Update Product', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (376, 'install_update', 'Install Update', 'Install Update', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (378, 'hour', 'hour(s)', 'ሰዓት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (379, 'minutes', 'Minutes', 'ደቂቃ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (380, 'password_updated', 'Password updated!', 'የሚስጥር ቁጥር በትክክል ተቀይሯል፡፡', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (382, 'Charts', 'Charts', 'ቻርት', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (387, 'system_information', 'System information', 'ሲስትም መረጃ', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (389, 'manage_session', 'manage_session', 'manage_session', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (410, 'classs', 'Region', 'ክልል', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (428, 'noticeboards', 'Noticeboards', 'ማስታዎቂያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (436, 'manage_account', 'Manage account', 'ማነጅ ዩዘር', '');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (440, 'on', 'On', 'On', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (488, 'send_message', 'Send message', 'መልእክት ላክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (489, 'Write message...', 'Write message...', 'መልእክትህን እዚህ ዓፍ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (503, 'report', 'Report', 'ሪፖረት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (504, 'ci_sessions', 'Sessions', 'Sessions', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (506, 'message_thread', 'Message thread', 'መልእክት ትሪድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (507, 'All tables', 'All tables', 'ሁሉም ተብል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (508, 'select_language', 'Select language', 'ቋንቋ ምረጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (746, 'CB Health Insurance', 'CB Health Insurance', 'የጠና መድህን አግልግሎት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (745, 'Agreement', 'Agreement', 'ውል ሰምምነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (740, 'Health Care finance', 'Health Care finance', 'ሂልዝ ከር ፋይናንስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (739, 'Credit Service', 'Credit Service', 'የዱቢ ህክምና', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (738, 'Dube Health Service', 'Dube Health Service', 'የዱቢ ህክምና', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (737, 'Health Insurance', 'Health Insurance', 'የጠና መድህን አግልግሎት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (736, 'Health Care finance by Letter', 'Health Care finance', 'ሂልዝ ከር ፋይናንስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (735, 'Add Region', 'Add Region', 'ክልል ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (734, 'manage_class', 'Region', 'ክልል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (733, 'manage Woredas', 'Woredas', 'ወረዳ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (732, 'manage zones ', 'Zones ', 'ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (730, 'Woredas', 'Woredas', 'ወረዳ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (728, 'kebele', 'Kebele', 'ቀበሊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (725, 'Add Insurance ', 'Add Insurance', 'ጢና ምድህን ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (724, 'Add Insurance Data', 'Add Insurance Data', 'ጢና ምድህን መረጃ ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (723, 'Treatment', 'Treatment', 'ሀክምና', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (721, 'price', 'Price', 'ዋጋ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (649, 'Add new Woreda', 'Add new Woreda', 'አድስ ወረዳ ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (706, 'Add new Zone', 'Add new Zone', 'አድስ ዞን ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (705, 'manage_sections', 'Manage zone', 'ዞኖች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (703, 'indigent', 'Indigent', 'ኢንድጀንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (749, 'encounter', 'Encounter', 'የህሙማን ዓይንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (750, 'diagnosis', 'Diagnosis', 'የበሽታው አይነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (751, 'lab', 'Lab', 'ምርምራ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (752, 'imaging', 'Imaging', 'ኢሚጅንግ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (753, 'procedure', 'Procedure', 'ፕሮሲጀር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (754, 'drug', 'Drug', 'መድሃኒት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (755, 'bed', 'Bed', 'አልጋ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (756, 'remark', 'Remark', 'ሪማርክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (757, 'add payment', 'Add payment', 'አገልግሎት ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (758, 'service', 'Service', 'አገልግሎት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (759, 'patient outcome:', 'Patient outcome:', 'የህሙማን ውጢት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (760, 'died', 'Died', 'ህይዎቱ አልፏል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (761, 'escape', 'Escape', 'አምልጧል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (762, 'back-referral', 'Back-referral', 'ወደጢና ተቋማት ተመለስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (763, 'higher-referral', 'Higher-referral', 'ወደ ከፍተኛ ህክምና ሂዲ/ች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (764, 'better-improved', 'Better-improved', 'ተሽሎት/ሏት ወጣች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (765, 'discharged', 'Discharged', 'ህክምና ጨርሶ ወጣ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (766, 'search by', 'Search by', ' ፈልግ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (768, 'CBHI ID', 'CBHI ID', 'ህሙማን መለያ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (951, 'payment', 'Payment', 'ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (954, 'add organization', 'Add organization', 'ትቋማት መዝግብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (966, 'facility type', 'Facility type', 'የትቋም አይንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (967, 'Health Organization name', 'Health Organization name', 'የትቋሙ ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (968, 'facility catchment population', 'Facility catchment population', 'የትቋሙ የሚያስተናግድዉ ህሙማን ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (970, 'ownership', 'Ownership', 'ባለቢትነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (984, 'By Month', 'By Month', 'የወር ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (985, 'By Quarter', 'By Quarter', ' የሩብ ዓምት ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1142, 'Kebeles', 'Kebeles', 'ቀበሊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1217, 'User Accounts', 'User Accounts', 'የተጠቃሚ መለያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1218, 'manage_users', 'Manage Users', 'ተጠቃሚዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1219, 'Monitor Active user', 'Monitor Active user', 'አሁን በመጠቀም ላይ ያሉትን እይ ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1220, 'access control list', 'Access control list', 'አክሰስ ኮንትሮል ሊስት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1221, 'manage Kebele', 'Manage Kebele', 'ማኒጅ ቀበለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1222, 'add parameters', 'Add parameters', 'ፓራማትር ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1223, 'generate_reports', 'Generate reports', 'ዝርዝር ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1224, 'System Configuration ', 'System Configuration ', 'ሲስተም ማስተካካያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3002, 'Total Regions', 'Total Regions', 'የክልሎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1227, 'Total Patients', 'Total Patients', 'አጠቃላይ የህሙማን ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1228, 'Total Zones', 'Total Zones', 'አጠቃላይ የዞኖች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1229, 'In Gambela', 'In Gambela', 'በጋምቢላ ክልል ውስጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1230, 'In Oromia', 'In Oromia', 'በኦሮምያ ክልል ውስጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1231, 'In SNNP', 'In SNNP', 'በደቡብ ክልል ውስጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1232, 'Total Woreda', 'Total Woreda', 'አጠቃላይ የወረዳዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1233, 'In Jimma Zone', 'In Jimma Zone', 'ጅማ ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1234, 'In Bunobedele ', 'Bunobedele', 'ቡኖ በደሊ ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1235, 'Elibabora', 'Elibabora', 'ኢልባቦር ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1236, 'Kaffa Zone', 'Kaffa Zone', 'ከፋ ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1238, 'Calculator', 'Calculator', 'ዋጋ አስላ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1239, 'Returnable', 'Calculate total Charge', 'አጠቃላይ ዋጋ አስላ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1240, 'create_new_encounter', 'Create new encounter', 'አድስ ህክምና ጀምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1243, 'current date', 'Current date', 'የዛሪው ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1244, 'OPD', 'OPD', 'ተመላላሽ ታካሚ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1245, 'IPD', 'IPD', 'ተኝቶ ታካሚ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1246, 'Price(ETB)', 'Price(ETB)', 'ዋግ(በብር)', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1268, 'report_by_month', 'Report by month', 'የወር ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1270, 'create_report', 'Create report', 'ሪፖርት ፍጠር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1271, 'Generate Monghly Report', 'Generate Monthly Report', 'ወርሃዊ ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1272, 'month', 'Month', 'ወር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1274, 'year', 'Year', 'አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1278, 'report_by_quarter', 'Report by quarter', 'የሩብ አመት ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1280, 'Generate Quarter Report', 'Generate Quarter Report', 'የሩብ አመት ሪፖርት አውጣ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1281, 'quarter', 'Quarter', 'ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1282, 'First Quarter', 'First Quarter', 'የመጀመሪያ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1283, 'Second Quarter', 'Second Quarter', 'ሁለተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1284, 'Third Quarter', 'Third Quarter', 'ሶስተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1285, 'Fourth Quarter', 'Fourth Quarter', 'አራተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1291, 'sn', 'SN', 'ተራ ቁ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1292, 'CN', 'Card No', 'ካርድ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1293, 'CBHI Code', 'CBHI Code', 'ህሙማን ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1294, 'full name', 'Full Name', 'ሙሉ ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1295, 'region', 'Region', 'ክልል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1315, 'add_new_patient', 'Add new patient', 'አድስ  ህሙማን መዝግብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1316, 'CBHI #ID', 'CBHI #ID', 'የህሙማን ID', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1318, 'code', 'Code', 'ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1319, 'encounter_status', 'Encounter status', 'የህክምና ዝርዝር መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1329, 'user_id', 'User id', 'የተጠቃሚ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1330, 'registered_on', 'Registered on', 'የተመዘገበበት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1331, 'disable', 'Disable', 'Disable', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1332, 'enable', 'Enable', 'Disable', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1341, 'sent_message', 'Sent message', 'የተላኩ መልእክቶች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1342, 'woreda_town_organization', 'Woreda/Organization', 'ወረዳ/ተቋማት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1343, 'active_user_list', 'Active user list', 'በመጠቀም ላይ ያሉ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1348, 'dd_mm_yyyy', 'DD MM YYYY', 'ቀን-ወር-አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1350, 'head', 'Finance Head', 'የፋይናንስ ሃላፊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1351, 'password_mismatch', 'Password mismatch', 'Password mismatch', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1356, 'last_login', 'Last login in', 'የመጨረሻ የገባበት ቅን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1364, 'ip_address', 'IP Address', 'ኮምፒዩተር አድራሻ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1386, 'manage_user_access', 'Manage user access', 'user access', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1395, 'browser', 'Browser', 'ብሮውዘር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1397, 'trial', 'Trial', 'ሙከራ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1423, 'block_user', 'Block user', 'ተጠቃሚዉን አቋርጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (1490, 'total amount', 'Total amount', 'አጠቃላይ መጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2851, 'add_student', 'Add patient', 'ህሙማን መዝግብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2852, 'add_bulk_student', 'Add bulk patient', 'ባች አፕሎድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2853, 'Batch upload Exceel', 'Batch upload Exceel', 'ኢክሰል ፋይል ጫን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2854, 'address', 'Address', 'አድራሻ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2855, 'file', 'File', 'ፋይል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2856, 'select_a_theme_to_make_changes', 'Select a theme to make changes 	', 'ባክግራውንድ ከለር ምረጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2857, 'note', 'Note', 'ኖት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2858, 'detials', 'Detials', 'ዝርዝር መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2859, 'manage_subject', 'Manage Woreda', 'ማነጅ ወረዳ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2860, 'zone_code', 'Zone code', 'ዞን ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2862, 'configuration', 'Configuration', 'መቸት ማስተካካያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2863, 'patient encounter status', 'Patient encounter status', 'የህሙማን ህክምና ሁነታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2864, 'payment information by servics type', 'Payment information by services type', 'የክፍያ መረጃ በአገልግሎት አይንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2865, 'last_login_trial', 'Last login trial', 'የመጨረሻ የገባበት እለት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2866, 'device', 'Device', 'የኮምፒዩተር አይነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2867, 'operating_system', 'OS', 'ኦፕሪቲንግ ሲስተም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2868, 'logged_as', 'Logged as', 'የገባዉ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2869, 'log Out', 'Logout', 'ዘግተህ ውጣ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2870, 'please wait...', 'Please wait...', 'Please wait...', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2871, 'add_user', 'Add user', 'ተጠቃሚ ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2872, 'firstname', 'First name', 'ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2873, 'lastname', 'Last name', 'የአባት ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2874, 'System administrator ', 'System administrator ', 'ሲስተም አስተዳደር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2875, 'financ_head ', 'Finance head ', 'ፋይናንስ ሃላፊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2876, 'my_reports', 'My reports', 'የኔ ረፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2877, 'today', 'Today', 'የዛሪ ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2878, 'this_week', 'This week', 'የዚህ ሳምንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2879, 'this_month', 'This month', 'የዚህ ወር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2880, 'this_quarter', 'This quarter', 'የዚህ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2881, 'this_year', 'This year', 'የዘህ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2882, 'edit_patient', 'Edit patient', 'እንደገና አስተተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2883, 'cbhi', 'CBHI ID', 'CBHI ID', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2884, 'encouter', 'Encounter', 'ህክና መሪጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2885, 'Visit(OPD)', 'Visit(OPD)', ' ተመላላሽ ታካሚ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2886, 'Admission(IPD)', 'Admission(IPD)', 'ተኝቶ ታካሚ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2887, 'kebele_cod', 'Kebele code', 'ቀበለ ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2888, 'my_profile', 'My profile', 'የኔ ማህደር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2889, 'per_user_report', 'Per user report', 'የዩዘር ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2890, 'general_report', 'General report', 'አጠቃላይ ዝርዝር ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2891, 'supper_admin', 'Supper Admin', 'ዋና ዮዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2892, 'SupperAdmin', 'Supper Admin', 'ዋና ዮዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2893, 'edit_teacher', 'Edit user', 'ዩዘር አስተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2894, 'roll', 'Roll', 'ተ.ቁ.', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2895, 'usename', 'Email', 'ኢ-ማል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2896, 'edit_user', 'Edit user', 'ዩዘር አስተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2897, 'Developer', 'Developer', 'ማን ሰራዉ?', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2898, 'Date_of_service', 'Date of service', 'አገልግሎት የተሰጠብት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2899, 'number of days', 'Number of days', 'ስንት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2900, 'fee_per day', 'Fee per day', 'የቀን ዋጋ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2901, 'service_charge', 'Service charge', 'አግልግሎት ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2902, 'add_new_woreda', 'Add new woreda', 'አድስ ወረዳ ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2903, 'Does_not_exist_try_again', 'Does not exist! try again!', 'አእባክዎ ያስግቡት የህክምና ካርድ ቁጥር የተሳሳት  ነው! እንደገና በትክክል ያስግቡ::', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2905, 'date_of_registration', 'Date of registration', 'የተመዘገበበት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2906, 'registered_by', 'Registered by', 'የመዘገበው ሰው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2907, 'subtotal_amount(in ETB)', 'Subtotal_amount(in ETB)', 'የእያንዳንዱ አጠቃላይ ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2908, 'birr', 'Birr', '#ብር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2909, 'Editing_encounter', 'Editing encounter', 'የህክምና መረጃ አስተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2910, 'Main Diagniss(HMIS)', 'Main Diagniss(HMIS)', 'የበሽታው ዓይነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2911, 'section', 'Zone', 'ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2912, ' imaging', ' Imaging', 'ኢማጅንግ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2914, 'collect_insurance_data', 'Collect insurance data', 'ኢንሹራንስ መረጃ መዝግብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2915, 'When S/He came?', 'When S/He came?', 'መች ነበር የመጣው/ችው?', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2916, '#Price(ETB)', '#Price(ETB)', '#ብር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2917, 'patients_information', 'Patient information', 'የህሙማን መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2918, 'Invalid login', 'Invalid login', 'ለመግባት አልተሳካም!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2919, 'Please Enter correct username or password!', 'Please Enter correct Email or Password!', 'እባከዎ ያስግቡት መረጃ የተሳሳተ ነው! የሚስጥር ቁጥሩን ደግመው በትክክል ያስገቡ፡፡', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2920, 'new_patient', 'Click to register new patient', 'አድስ ህሙማን ለመመዝግብ ይህን ይጫኑ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2921, 'all_kebele', 'All kebele', 'ሁሉም ቀበለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2922, 'add_new_kebele', 'Add new kebele', 'አድስ ቀበለ መዝግብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2923, 'woreda_code', 'Woreda code', 'ወረዳ ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2924, 'region_code', 'Region code', 'ክልል ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2925, 'details', 'Details', 'ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2926, 'kebele_name', 'Kebele Name', 'የቀበለ ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2927, 'add_kebele', 'Add kebele', 'ቀበለ መዝግብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2928, 'student', 'Student', 'ተማሪ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2929, 'employee', 'Employee', 'ሰራተኛ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2930, 'add_new_zone', ' 	Add new zone', 'አድስ ዞን ጨምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2931, 'edit_zone', 'Edit zone', 'እንደገና አስተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2932, 'edit woreda', 'Edit woreda', 'እንደገና አስተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2933, 'Organization/Woreda', 'Organization/Woreda', ' ተቋም/ወረዳ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2934, 'Health Care financ', 'Health Care financ', 'ሂልዝከር ፋይናንስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2935, 'health_care_finance', 'Health care finance', 'ሂልዝከር ፋይናንስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2936, 'CBHI_beneficiary', 'CBHI_beneficiary', 'ሃልዝ ኢንሹራንስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2937, '#Total Districts', '#Total Districts', 'የወረዳ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2941, 'document', 'Document', 'ፋይል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2952, 'log', 'Log', 'ሎግ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2953, 'patients', 'Patients', 'ህሙማን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2954, 'services', 'Services', 'አግልግሎት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2955, 'zones', 'Zones', 'ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2956, 'map_loction', 'Map loction', 'የካርታ አድራሻ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2957, 'patient_profile', 'Patient profile', 'የህሙማን ማህደር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2959, 'system_adminstrator ', 'System administrator ', 'ሲስተም አስተዳድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2960, 'welcome! you are new user please change common password \"jimma\" with new strong  password for security purpuse. ', 'Welcome! You are actually new user please change common password \"jimma\" with new strong  password for security purpose ', 'አእንኳን ደህና መጡ ውድ ደንበኛችን!እባከዎ አድስ ስልሆኑ የጋራ የሆነዉን \'jimma\' የሚስጥር ቁጥር አድስ የራሰዎን ለደህንነት ሲባል ይቀይር፡፡', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2964, 'disable_user', 'Disable user', 'ድስአብል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2965, 'appication statistics overview', 'Application Statistics Overview', 'የሲስትም አጠቃላይ መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2963, 'Enabled', 'Enabled', 'ኢንብል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2966, 'show_password', 'Show Password', 'የሚስጥር ቁጥሩን አሳየኝ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2967, 'basic_pataient_information', 'Basic Patient Information', 'የህሙማን መሰረታዊ መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2970, 'Health Organiztion name', 'Health Organization name', 'የጠና ተቋማት ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2971, 'hospital', 'Hospital', 'ሆስፒታል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2972, 'Health_center', 'Health Center', 'የጠና ተቋማት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2973, 'private_facility', 'Private facility', 'የግል ተቋማት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2974, 'public_facility', 'Public facility', 'የመንግስት ተቋማት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2975, 'Off', 'Off', 'Off', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2976, 'exam', 'Diagnsis', 'ምርመራ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2977, 'parent', 'Woreda', 'ወረዳ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2978, 'update_Version', 'Update Version', 'ቨርሽን አሳድግ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2979, 'basic_user_information', 'Basic user information', 'የተጠቃሚ መረጃዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2980, 'authentication_key', 'Authentication key', 'የሚስጥር ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2981, 'Reinitialize_password', 'Reinitialize password', 'የሚስጥር ቁጥር አስጀምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2982, 'server_ID', 'Server ID', 'ሰርቨር አይድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2983, 'Server_IP', 'Server IP', 'ሰርቨር አድራሻ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2984, 'domain_name', 'Domain name', 'ዶመን ነም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2985, 'Letters mandatory', 'Letters mandatory', 'ለተር መጠቅም ግደታ ነው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2986, 'Uppercase letters mandatory', 'Uppercase letters mandatory', 'ካፒያል ለትር መጠቀም ግደታ ነው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2987, 'Lowercase letters mandatory', 'Lowercase letters mandatory', 'ስሞል ለትር መጠቀም ግደታ ነው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2990, 'background_color', 'Background color', 'ባክግራውንድ ከለር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2991, 'change', 'Change', 'ቀይር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2992, 'prisoner', 'Prisoner', 'ታራሚ/እስረኛ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2993, 'report_by_month_view', 'Report by month view', 'ወርሃዊ ሪፖርት ፕሪንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2994, 'jimma_university ', 'Jimma University ', 'ጅማ ዩኒቨርሲቲ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2995, 'jimma_university_specialized_hospital', 'Jimma University Specialized Hospital', 'የጅማ ህክምና ማዕክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2996, 'monthly_report', 'Monthly report', 'ወርሃዊ ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2997, 'district/organization', 'District/organization', 'ወረዳ/ተቋማት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2998, 'finance', 'Finance Information', 'አጠቃላይ የክፍያ መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (2999, 'Subtotal', 'Subtotal', 'ከፊል አጠቃላይ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3000, 'jimma_medical_center', 'Jimma Medical Center', 'ጅማ ማድካል ሰንተር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3003, 'MRN', 'MRN', 'ካርድ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3007, 'Woreda/Town/Organization', 'Woreda/Town/Organization', 'ወረዳ/ከተማ/ተቋማት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3008, 'patient_type', 'Patient type', 'የህሙማን ዓይንት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3010, 'my_registration', 'My Registration', 'እነ የማዘገብኳቸው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3011, 'my_patient_info', 'My Patient information', 'የነ ህሙማኖች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3012, 'medical_history', 'Medical history', 'የህሙማን ታሪክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3013, 'my_encounters', 'My Encounters', 'የነ እንካውንተር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3014, 'filter', 'filter', 'አውጣልኝ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3015, 'user_stastices', 'User Statistics', 'የተጠቃሚ መረጃዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3031, 'encounter_status_at', 'Patient encounter status at', 'ለህክምና የመጣበት ቀንና አገልግሎቱን ያገኘበት በ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3016, 'cards', 'Card', 'የካርድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3017, 'revenue', 'አጠቃላይ ገቢ በአገልግሎት ዓይነት', 'አጠቃላይ ገቢ በአገልግሎት ዓይነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3096, 'duplicate_encounter_not allowed!', 'Duplicate encounter not allowed!', 'Duplicate encounter not allowed!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3019, 'tcbhi ', 'የኢንሹራንስ ታካሚዎች ብዛት', 'የኢንሹራንስ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3020, 'hcare', 'የሃልዝ ከር ፋይናንስ ታካሚዎች ብዛት 	', 'የሃልዝ ከር ፋይናንስ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3021, 'crs', 'የዱበ ታካሚዎች ብዛተ', 'የዱበ ታካሚዎች ብዛተ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3022, 'tipd ', 'ተኝቶ ታካሚዎች ብዛት', 'ተኝቶ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3023, 'topd  ', 'የተመላላሽ ታካሚዎች ብዛት', 'የተመላላሽ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3024, 'tfemale', 'አጠቃላይ የእንሹራንስ ሰት ታካሚዎች ብዛት', 'አጠቃላይ የእንሹራንስ ሰት ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3025, 'tmale ', 'አጠቃላይ የእንሹራንስ ወንድ ታካሚዎች ብዛት', 'አጠቃላይ የእንሹራንስ ወንድ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3026, 'qualification', 'Qualification', 'የትምህርት ዝግጅት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3027, 'position', 'Current Position', 'የስራ መደብ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3028, 'plcae_of_work', 'Place of work', 'የስራ ቦታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3029, 'previous', 'My Previous works', 'ቀደምት ስራዎቸ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3030, 'user_stastics', 'User Statistics', 'የሰራተኞች መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3032, 'service_type', 'Service type', 'የአገልግሎት ኣይነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3033, 'back', 'Back to home', 'ወደኋላ ተመለስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3034, 'current_status', 'Current status', 'አሁን ያለበት ሁነታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3035, 'logged_out_at', 'Logged out at', 'ዘግቶ የወጣበት ሳዓት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3036, 'last_logged_in', 'Last logged in', 'የመጨረሻ የገባበት ሳዓት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3037, 'registration_of_new_patient', 'Registration of new patient', 'ዛረ አድስ ህሙማን የመዘገበው ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3038, 'creating_new_encouters', 'Creating new encounters', 'ዛረ ነባር ታካሚዎችን የመዘገበው ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3039, 'no_of_editing', 'No of editing', 'እንደገና ያስተካከለው ዶክመንት ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3040, 'no_of_error_made', 'No of error made', 'በሲስተሙ ላይ የሰራችድው ስህተቶች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3041, 'idel_time', 'Idel time', 'ስራ የፈታበት ጊዘ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3042, 'total_new_patient_registration', 'Total new patient registration', 'አጠቃላይ አድስ የመዘገባቸው ህሙማን ብዛት ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3043, 'total_old_encouters', 'Total old encounters', 'አጠቃላይ የመዘገባቸው ነባር ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3044, 'monitor', 'Monitor', 'የ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3046, 'today_work_activities', 'Today work activities', 'ን የዛረውን ክንዉን ተመልከት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3047, 'type_activity', 'Type activities', 'የክንውን አይነቶች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3048, 'indication', 'Indication', 'መግለጫዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3049, '#Total Disrricts', 'Total Disrricts', 'አጠቃላይ ወረዳዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3051, 'kekebe_details', 'Kekebe details', 'የቀበለ መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3052, 'family', 'Family members', 'የበተሰብ አባል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3053, 'family_information', 'Family information', 'የበተሰብ ዝርዝር መረጃዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3054, 'flag', 'Flag', 'ባንድራ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3055, 'edit_region', 'Edit region', 'ክልል አስትካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3056, 'online', 'Online', 'Online', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3058, 'posted_by', 'Posted by', 'የለጠፈው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3059, 'acountant', 'Acountant', 'ሂሳብ ሰራተኛ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3060, 'user_manual', 'User manual', 'የአጠቃቀመ መመሪያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3061, 'developer_guide', 'Developer Guide', 'Developer መመሪያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3062, 'link', 'Link', 'ውክልና ስጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3063, 'copy_right', 'Copy Right', 'ኮፒ ራይት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3064, ' MRN', 'MRN', 'ካርድ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3065, 'select_agreement_first', 'Select agreement first', 'ቅድሚያ ውሉን ምረጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3066, 'sign_up', 'Sign Up', 'Sign Up', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3067, 'user_sign_up', 'User Sign Up', 'መመዝገቢያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3068, 'super_adminstrator ', 'Super Administrator', 'የሲስተም ዋና ሃላፊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3069, 'Your email or phone exist in the system ', 'Your email or phone exist in the system ', 'ቀድመው የተመዘገቡ ይመስላ!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3070, 'seems_you_are_already_registered!', 'Seems you are already registered!', 'ቀድመው የተመዘገቡ ይመስላ!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3071, 'activation', 'Activation', 'Activation', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3072, 'enable_user', 'Enable user', 'Enable user', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3073, 'total_users', 'Total users', 'አጠቃላይ የተጠቃሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3074, 'admins', 'System Adminstrators', 'የሲስተም ሃላፊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3075, 'super_admins', 'Super Adminstrator', 'የሲስተም ዋና ሃላፊ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3076, 'heads', 'Accountants', 'ሂሳብ ሰራተኛ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3077, 'users', 'System users', 'አጠቃላይ የተጠቃሚ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3078, 'user stastices', 'User Statistics', 'የተጠቃሚ ዝርዝር መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3079, 'new_registrations', 'New registration', 'አድስ የተመዘገቡ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3080, 'online_users', 'Online users', 'አሁን በመጠቀም ላይ  ያሉ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3081, 'inactive_users', 'Inactive users', 'የማይጥቀሙ ዩዘርስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3082, 'todays_logins', 'Today logins', 'ዛሬ የገቡ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3083, 'my_encounter', 'My encounter', 'እኔ ያስተናግድኳቸው ህሙማን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3084, 'my_total_patients', 'My total patients', 'አጠቃላይ የእኔ ህሙማን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3085, 'today_actvities', 'Today activities', 'የዛሬ ክንውኖች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3086, 'new registration', 'New registration', 'አድስ የተመዘገቡ	', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3087, 'health_care', 'Health care fiinance', ' ሄልዝ ኬር ፋይናንስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3088, 'credit_service', 'Credit service', 'የዱቤ ህክምና', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3089, 'insurance', 'Insurance', 'የጤና መድህን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3090, 'total_revenue', 'Total', 'በአጠቃላይ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3091, 'deposit_for_bed', 'Deposit for bed', 'ለአልጋ ተቀማጭ አሲዝ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3092, 'deposit_amount', 'Deposit amount', 'የተያዘው መጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3093, 'mrn_id', 'MRN', 'ካርድ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3094, 'encounter_id', 'Encounter ID', 'Encounter ID', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3095, 'deposited_amount', 'Deposit amount', 'የተያዘው መጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3097, 'clear', 'Clear', NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3098, 'patient_profile_view', 'Patient Profile view', 'የህሙማን ማህደር እይታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3099, 'total_encounter', 'Total encounter', 'አጠቃላይ ታካሚዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3100, 'first_quarter', 'First Quarter', 'የመጀመሪያ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3101, 'second_quarter', 'Second quarter', 'ሁለተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3102, 'third_quarter', 'Third quarter', 'ሶስተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3103, 'fourth_quarter', 'Fourth quarter', 'አራተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3104, 'patient', 'Patient', 'ሀሙማን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3105, 'querterly_expence', 'Quarterly expense', 'ሩብ አመት ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3106, '1st_querter', '1st quarter', 'የመጀመሪያ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3107, '2nd_quarter', '2nd quarter', 'ሁለተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3108, '3rd_quarter', '3rd quarter', 'ሶስተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3109, '4th_quarter', '4th quarter', 'አራተኛ ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3110, 'payment_status', 'payment status', 'የክፍያ ሁነታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3111, 'paid', 'Paid', 'የተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3112, 'unpaid', 'Unpaid', 'ያልተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3113, 'unpaid_finance', 'Unpaid finance', 'ያልተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3114, 'paid_fanance_info', 'Paid finance info', 'የተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3115, 'send_request', 'Send request', 'ጥያቀ ላክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3116, 'my_requests', 'My requests', 'የነ ጥያቀዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3117, 'request_by', 'Request by', 'የጠየቀዉ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3118, 'date_of_request', 'Date of request', 'የተላከት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3119, 'date_of_aproval', 'Date of approval', 'የፀደቀበት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3120, 'approved', 'Approved', 'ፀድቋል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3121, 'approved_by', 'Approved_by', 'ያፀደቀው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3122, 'new approval request', 'New approval request', 'አድስ ጥያቄ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3123, 'link_user', 'Link user', 'ውክልና ስጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3124, 'user_linked_successfully', 'User linked successfully', 'User linked successfully', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3125, 'manage_user', 'Manage user', 'የተጠቃሚ ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3126, 'Liked', 'Linked', 'ተዎክሏል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3127, 'CBHI_Code', 'CBHI #Code', 'ኮድ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3128, 'user_already_linked!', 'User already linked!', 'User already linked!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3129, 'deligated  users', 'Delegated  users', 'የተዎከሉ ተጠቃሚዎች ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3130, 'deligated_user', 'Delegated user', 'የተዎከለ ተጠቃሚ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3131, 'deligated by', 'Delegated by', 'የወከለው ሰው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3132, 'cancel_deligation', 'Cancel delegation', 'ውክልናውን አቋርጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3133, 'user_deligations', 'User delegations', 'ውክልናዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3134, 'renewed', 'Renewed', 'ታድሷል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3135, 'monthly_payment_request', 'Monthly payment request', 'ውርሃዊ ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3136, 'quarterly_payment_request', 'Quarterly payment request', 'የሩብ አመት ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3137, 'new_requests', 'New requests', 'አድስ መልእክት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3138, 'approved_requests', 'Approved requests', 'የፀደቀ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3139, 'approved_finance.', 'Approved finance', 'የተከፈል ካሽ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3140, 'approved payments list', 'Approved payments list', 'የከፋይ ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3141, 'request_year', 'Request year', 'አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3142, 'request_quarter', 'Request quarter', 'ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3143, 'inbox_requests', 'Inbox requests', 'የገባ መልእክት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3144, 'approval_request', 'Approval request', 'መልእክት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3145, 'approve', 'Approve', 'አፅድቅ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3146, 'payment_approval', 'Payment approval', 'Payment approval', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3147, 'approve_request', 'Approve request', 'Approve request', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3148, 'send_payment_approval', 'Send payment approval', 'Send payment approval', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3149, 'sent_successfully', 'Sent successfully', 'Sent successfully', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3150, 'unpaid cash', 'Unpaid cash', 'ያልተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3151, 'unpaid_cash', 'Unpaid cash', 'ያልተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3153, 'approve_payment', 'Approve payment', 'Approve payment', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3154, 'inbox_request', 'inbox request', 'መልእክት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3155, 'accept_payment', 'accept payment', 'ክፍያ አረጋግጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3156, 'verify_payment', 'Verify payment', 'ክፍያ አረጋግጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3157, 'verify_payment_organization_payments', 'Verify payment organization payments', 'ክፍያ አረጋግጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3158, 'verify_payment_organization_payments_monthly', 'Verify payment organization payments monthly', 'ወርሃዊ ክፍያ አረጋግጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3159, 'verify_payment_organization_payments_quarterly', 'Verify payment organization payments quarterly', 'የሩብ አመት ክፍያ አረጋግጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3160, 'montly_payment_sucessfully_accepted!', 'Monthly payment successfully accepted!', 'Monthly payment successfully accepted!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3161, 'quarterly_payment_sucessfully_accepted!', 'Quarterly payment successfully accepted!', 'Quarterly payment successfully accepted!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3162, 'paid_total_revenue', 'Paid total revenue', 'አጠቃላይ ገቢ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3163, 'remaining', 'Remaining', 'የቀረው መጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3164, 'service_charge_info', 'Service charge info', 'አገልግሎት ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3165, 'select_all', 'Select all', 'ሁሉንም ምረጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3166, 'select_none', 'Select none', 'ምንም አትምረጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3167, 'not_report_found!', 'Not report found!', 'Not report found!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3168, 'partially_paid', 'Partially paid', 'በከፊል የተከፈል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3169, 'not found! Check quarter or year!', 'Not found! Check quarter or year!', 'Not found! Check quarter or year!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3170, 'remaining_amount must_be_less_than_99%_and_greater_than_minus_one_%!', 'Remaining amount must be less than 99% and greater than minus one %!', 'Remaining amount must be less than 99% and greater than minus one %!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3171, 'Report not found with given info!', 'Report not found with given info!', 'Report not found with given info!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3172, 'partially_paid_list', 'Partially paid list', 'በከፊል የተከፈል ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3173, 'partially_made_cash', 'Partially made cash', 'በከፊል የተከፈል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3174, 'fully_covered', 'Fully covered', 'ሙሉ ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3175, 'remain', 'Remain', 'የቀረ መጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3176, 'fully_approve', 'Fully approve', 'ቀሪ ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3177, 'Report not found with given information with quarter two!', 'Report not found with given information with quarter two', 'Report not found with given information with quarter two', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3178, 'Report not found with given information with this month!', 'Report not found with given information with this month!', 'Report not found with given information with this month!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3179, 'report_per_month_payment', 'Report per month payment', 'ወርሃዊ ክፍያ ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3181, 'summary_preview', 'Summary preview', 'ቀድመ እይታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3182, 'already_payment_made!', 'Already payment made!', 'Already payment made!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3183, 'request_id', 'Request_id', 'Request_id', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3184, 'per_time', 'Per time', 'ወቅት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3185, 'month(quarter)', 'Month/Quarter', 'ወር/ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3186, 'month or quarter', 'Month/Quarter', 'ወር/ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3187, 'month/quarter', 'Month/Quarter', 'ወር/ሩብ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3188, 'payment_history', 'Payment history', 'ክፍያ ታሪክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3189, 'paid_amount', 'Paid amount', 'የተከፈለ ምጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3190, 'unpaid_amount', 'Unpaid amount', 'ያልተከፈለ ምጠን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3191, 'payment_details', 'Payment details', 'ክፍያ በዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3192, 'fully_paid', 'Fully paid', 'ሙሉ ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3193, 'finished', 'Finished', 'አልቋል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3194, 'successfull_payment_covered(100%)', 'Successfully payment covered(100%)', 'Successfully payment covered(100%)', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3195, 'closed', 'Closed', 'ተዘግቷል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3196, 'report_per_month_view', 'Report per month view', 'ወርሃዊ ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3197, 'report_per_quarter_preview', 'Report per quarter preview', 'የሩብ አመት ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3198, 'outcome', 'Outcome', 'የመጨረሻ ውጤት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3199, 'max_year', 'Max year', 'መድረሻ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3200, 'min_year', 'Min year', 'መነሻ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3201, 'No report found associated with those information!', 'No report found associated with those information!', 'No report found associated with those information!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3202, 'Report not found with given information with quarter three!', 'Report not found with given information with quart...', 'Report not found with given information with quart...', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3203, 'partially paid', 'Partially paid', 'በከፊል የተከፈለ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3204, 'date of approved', 'Date of approved', 'የፀደቀበት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3205, 'date_of_approved', 'Date of approved', 'የፀደቀበት ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3206, 'send_comment', 'Send comment', 'አቤቱታ ላክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3207, 'complain(s)', 'Complain(s)', 'አቤቱታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3208, 'complain_list', 'Complain list', 'አቤቱታ ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3209, 'comment', 'Comment', 'አስታያየት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3210, 'view', 'View', 'እይታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3211, 'seen', 'Seen', 'የታየ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3212, 'more_message_details', 'More message details', 'ተጨማሪ የመልክት ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3213, 'complain', 'Complain', 'አቤቱታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3214, 'ok', 'Ok', 'እሽ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3215, 'send_complain_message', 'Send complain message', 'አቤቱታ ላክ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3216, 'client', 'Client', 'አጋር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3217, 'user_type', 'User type', 'User type', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3218, 'inbox_complain', 'Inbox complain', 'የገቡ ቅሪታዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3219, 'message_seen', 'Message seen', 'Message seen', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3220, 'message_details', 'Message details', 'የመልክት ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3221, 'edit kebele', 'Edit kebele', 'እንደገና አስተካክል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3222, 'paid_service_charge_info', 'Paid service charge info', 'የተከፈለ የአግልግሎት ክፍያ መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3223, 'patient_appointment', 'Patient appointment', 'የህሙማን ቀጠሮ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3224, 'hmis_data', 'HMIS Data ', 'HMIS መረጃዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3225, 'HMIS_Data_view', 'HMIS Data view', 'HMIS ዝርዝር መረጃዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3226, 'cachement_population', 'cachment population', 'ጠቅላላ የቅበላ አቅም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3227, 'Health_Management_Information_Systems(HMIS)_Data_view', 'HMIS data view', 'HMIS ዝርዝር መረጃዎች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3228, 'Health_Facility_Name', 'Health_Facility_Name', 'የጤናው ተቋማት ስም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3229, 'Type_of_Facility', 'Type_of_Facility', 'የጤና ተቋም አይነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3230, 'Catchment_Population', 'Catchment_Population', 'ጠቅላላ የቅበላ አቅም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3231, 'OPD_Utilization-#of_Paying', 'OPD_Utilization-#of_Paying', 'በክፍያ አጠቃላይ የተመላላሽ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3232, 'IPD_Utilization_#of-Paying', 'IPD_Utilization_#of-Paying', 'በክፍያ አጠቃላይ ተኝቶ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3233, 'Total_#of_visits_all_patients(HMIS)-Male', 'Total_#of_visits_all_patients(HMIS)-Male', 'አጠቃላይ የወንድ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3234, 'Total-#of_visits_all_patients (HMIS)-Female', 'Total-#of_visits_all_patients (HMIS)-Female', 'አጠቃላይ የሴት ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3235, 'Total-#of_visits_CBHI_clients-Male', 'Total-#of_visits CBHI clients-Male', 'የእንሹራንስ ወንድ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3236, 'Total-#of_visits_CBHI_clients-Female', 'Total-#of_visits CBHI clients-Female', 'የእንሹራንስ ሴት ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3237, 'Total-#of_OPD_claims', 'Total-#of OPD claims', 'አጠቃላይ ተመላላሽ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3238, 'Total-#of_IPD_claims', 'Total-#of IPD claims', 'አጠቃላይ ተኝቶ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3239, 'Amount_claimed_for_card', 'Amount_claimed_for_card', 'የካርድ ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3240, 'Amount_claimed_for_lab', 'Amount claimed for lab', 'የምርመራ ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3241, 'Amount_claimed_for_drugs & SS', 'Amount claimed for drugs & SS', 'የመድሃኒት ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3242, 'Amount_claimed_for_imaging', 'Amount claimed for imaging', 'የኢሜጅንግ ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3243, 'Amount_claimed_for_surgery', 'Amount claimed for surgery', 'የፕሮሲጀር ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3244, 'Amount_claimed_for_bed_day', 'Amount claimed for bed day', 'የአልጋ ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3245, 'Amount_claimed-other', 'Amount claimed-other', 'የሌሎች ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3246, 'Total_amount_claimed', 'Total amount claimed', 'አጠቃላይ ድምር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3247, 'Patients_referred_for_medical_services', 'Patients referred for medical services', 'ለተጨማሪ ህክምና ወደ ሌላ ቦታ የተዘዋዎሩ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3248, 'Patients_referred_due_to_drug_stock-out', 'Patients referred due to drug stock-out', 'በመድሃኒት ማለቅ ምክንያት ወደ ሌላ ቦታ የተዘዋዎሩ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3249, 'Male-Total_#of_visit(HMIS)', 'Male-Total #of visit(HMIS)', 'አጠቃላይ የወንድ ተመላላሽ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3250, 'Female-Total_#of_visit(HMIS)', 'Female-Total #of visit(HMIS)', 'አጠቃላይ የሴት ተመላላሽ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3251, 'total_cachment', 'Total cachment', 'አጠቃላይ የመቀበል አቅም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3252, 'evolution', 'Evolution', 'የመጨረሻ ውጤት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3253, 'reason_out', 'Reason out', 'ምክንያት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3254, 'Drug stock-out', 'Drug stock-out', 'በመድሃኒት ማላቅ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3255, 'Medical Service', 'Medical Service', 'በህክምና አገልግሎት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3256, 'patient_evolution', 'Patient evolution', 'የህሙማን የመጨረሻ ውጤት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3257, 'Total-#of_visits_C B H I_clients-Male', 'Total-#of visits CBHI clients-Male', 'የእንሹራንስ ወንድ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3258, 'Total_#of_visits_all_patients(H M I S)-Male', 'Total_#of visits all patients(HMIS)-Male', 'አጠቃላይ የወንድ ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3259, 'Total-#of_visits_all_patients(H M I S)-Female', 'Total-#of visits all patients(HMIS)-Female', 'አጠቃላይ የሴት ታካሚዎች ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3260, 'Total-#of_visits_C B H I_clients-Female', 'Total-#of visits CBHI clients-Female', 'የእንሹራንስ ሴት ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3261, 'Total-#of_O P D_claims', 'Total-#of OPD claims', 'አጠቃላይ ተመላላሽ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3262, 'Total-#of_I P D_claims', 'Total-#of IPD claims', 'አጠቃላይ ተኝቶ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3263, 'Total_#of_visits_all_patients (H M I S)-Male', 'Total_#of_visits_all_patients(HMIS)-Male', 'አጠቃላይ የወንድ ተመላላሽ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3264, 'Total-#of_visits_all_patients (H M I S)-Female', 'Total-#of_visits_all_patients(HMIS)-Female', 'አጠቃላይ የሴት ተመላላሽ ታካሚ ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3265, 'close_encounter', 'Close encounter', 'Close encounter', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3266, 'No_of_woreda/organazations', 'No of woreda/org', 'የተቋማት ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3267, 'No of_woreda/org', 'No of woreda/org', 'የተቋማት ብዛት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3268, 'terminate_agreement', 'Terminate agreement', 'ውሉን አቋርጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3269, 'terminated', 'Terminated', 'ውል ተቋርጧል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3270, 'agreement_terminated', 'Agreement terminated', 'ውል ተቋርጧል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3271, 'end_agreement', 'End agreement', 'ውሉን አቋርጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3272, 'agreement_made', 'Agreement made', 'ውል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3273, 'disable_agreement', 'Disable agreement', 'ውሉን አቋርጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3274, 'enable_agreement', 'Enable agreement', 'ውል አእንደገና አድስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3275, 'terminate_organzation_agreement', 'Terminate organization agreement', 'ውሉን አቋርጥ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3276, 'terminate', 'Terminate', 'ውል ተቋርጧል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3277, 'agreed', 'Agreed', 'ውል ገብቷል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3278, 'report_view_by_quarter', 'Report view by quarter', 'ሪፖርት በሩብ አምት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3279, 'general_finance_stastices', 'Finance statistics', 'ዝርዝር የፋይናንስ መረጃ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3280, '2012', '2012', '2012', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3281, '2013', '2013', '2013', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3282, '2014', '2014', '2014', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3283, '2015', '2015', '2015', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3284, '2016', '2016', '2019', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3285, '2017', '2017', '2017', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3286, '2018', '2018', '2018', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3287, '2019', '2019', '2019', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3288, '2020', '2020', '2020', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3289, '2021', '2021', '2021', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3290, '2022', '2022', '2022', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3291, 'fisical_quarters', 'Fiscal quarters', 'የበጅት አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3292, 'quarters_of_fisical_year', 'Quarters of fiscal year', 'የበጅት አመቱ ሩብ አመቶች', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3293, 'Region/Zone', 'Region/Zone', 'ክልል/ዞን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3294, 'July', 'July', 'ሀምሌ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3295, 'Aug', 'Aug', 'ነሃሴ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3296, 'Sep', 'Sep', 'መስከረም', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3297, 'Oct', 'Oct', 'ጥቅምት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3298, 'Nov', 'Nov', 'ህዳር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3299, 'Dec', 'Dec', 'ታህሳስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3300, 'Jan', 'Jan', 'ጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3301, 'Feb', 'Feb', 'የካቲት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3302, 'March', 'Mar', 'መጋቢት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3303, 'Apr', 'Apr', 'ሚያዚያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3304, 'May', 'May', 'ግንቦት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3305, 'Jun', 'Jun', 'ሰኔ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3306, 'quarter-I', 'Quarter-I', 'ሩብ ዓመት-I', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3307, 'quarter-II', 'Quarter-II', 'ሩብ ዓመት-II', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3308, 'quarter-III', 'Quarter-III', 'ሩብ ዓመት-III', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3309, 'quarter-IV', 'Quarter-IV', 'ሩብ ዓመት-IV', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3310, 'Mar', 'Mar', 'መጋቢት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3311, 'ሐምሌ', 'Jul', 'ሐምሌ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3312, 'ነሐሴ', 'Aug', 'ነሃሴ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3313, 'H', 'H', 'H', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3314, 'K', 'K', 'K', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3315, 'Puag', 'Puag', 'ጷጉሜ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3316, 'new_patient_profile', 'New patient profile', 'አድስ ህሙማን ማህደር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3317, 'medical_record_number', 'Medical record number', 'ካርድ ቁጥር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3318, 'address_or_kebele', 'Address/kebele', 'አድራሻ/ቀበሌ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3319, 'date_of_birth', 'Date of birth', 'የትውልድ ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3320, 'user_account_list', 'User account list', 'የተጠቃሚ ዝርዝር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3321, 'fanance_chart', 'Finance chart', 'ፋይናንስ ቻርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3322, 'deligation_canceled_successfully', 'Delegation canceled successfully', 'Delegation canceled successfully', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3323, 'kebele_or_address', 'Address/kebele', 'አድራሻ/ቀበሌ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3324, 'paid_cash', 'Paid cash', 'ብካሽ የተከፈል', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3367, 'system_configuration', NULL, NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3325, 'servics_charge', 'Services Charge', 'አገልግሎት ክፍያ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3326, 'CBHI_#code', 'CBHI_#Code', 'CBHI_#Code', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3327, 'age/date_of_birth', 'Age/date of birth', 'እድሜ/የትውልድ ዘመን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3328, 'renewal', 'Renewal', 'እድሳት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3329, 'renewal_status', 'Renewal Status', 'የእድሳት ሁነታ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3330, 'set_up_renewal_year', 'Renewal year', 'የእድሳት ዓመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3331, 'renew', 'Renew', 'እንደገና አድስ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3332, 'set_expiry_year', 'Set expiry year', 'አገልግሎቱ የሚያልቅበትን አመት ሙላ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3333, 'renewal_updated', 'Renewal year successfully updated', 'Renewal year successfully updated', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3334, 'list_of_beneficiaries', 'List of beneficiaries', 'እንሹራንስ ተጠቃሚዎች ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3335, 'individual_report', 'Individual report', 'ግላዊ ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3336, 'pending', 'Pending', 'Pending', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3337, 'customed_report', 'Costumed report', 'ከስተም ሪፖርት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3338, 'customed_report_view', 'Costumed report view', 'ከስተም ሪፖርት ቪው', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3339, 'generate_customed_report', 'Generate costumed report', 'ከስተም ሪፖርት አውጣ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3340, 'initial_year', 'Initial year', 'መነሻ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3341, 'final_year', 'Final year', 'መድረሻ አመት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3342, 'initial_month', 'Initial month', 'መነሻ ወር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3343, 'final_month', 'Final month', 'መድረሻ ወር', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3344, 'initial_date', 'Initial date', 'መነሻ ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3345, 'final_date', 'Final date', 'መድረሻ ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3346, 'invalid_year_selection!!', 'Invalid year selection!', 'Invalid year selection!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3347, 'invalid_year_and_month_selection!!', 'Invalid year and month selection!', 'Invalid year and month selection!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3348, 'invalid_year_and_month_and_date_selection!', 'Invalid year_and month and date selection!', 'Invalid year_and month and date selection!', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3349, 'generate_customed_report_per_district', 'Costumed report per district', 'Costumed report per district', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3350, 'date_interval', 'Date interval', 'የቀን ልዩነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3351, 'intial_date', 'Initial date', 'መነሻ ቀን', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3352, 'month_interval', 'Month interval', 'የወር ልዩነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3353, 'year_interval', 'Year interval', 'የአመት ልዩነት', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3354, 'generate_customed_report_per_user', 'Costumed report per user', 'Costumed report per user', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3355, 'generate_customed_report_per_agreement', 'Costumed report per agreement', 'Costumed report per agreement', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3356, 'this_user_has_no_any_registration_on_this_time_interval', 'This user has no any registration on this time interval', 'This user has no any registration on this time interval', 'This user has no any registration on this time interval');
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3357, 'generate_customed_report_per_registration', 'Generate costumed report per registration', 'Generate costumed report per registration', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3358, 'registration', 'Registration', 'ምዝገባ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3359, 'patient_registration', 'Patient registration', 'ህሙማን ምዝገባ', NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3360, 'income_via_agreement', 'Income via agreement', NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3361, 'general_report_view', 'General report view', NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3362, 'next', NULL, NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3368, 'admin_level_setting', NULL, NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3365, 'checklist_add', NULL, NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3366, 'check_status_add', NULL, NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3369, 'allowed', NULL, NULL, NULL);
INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `Amharic`, `Afaan_oromoo`) VALUES (3370, 'approved_finance', NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: link_tbl
#

DROP TABLE IF EXISTS `link_tbl`;

CREATE TABLE `link_tbl` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `linked_by` varchar(20) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `link_tbl` (`link_id`, `user_id`, `region`, `zone`, `woreda`, `linked_by`) VALUES (7, '9', '4', '10', '01', '3');
INSERT INTO `link_tbl` (`link_id`, `user_id`, `region`, `zone`, `woreda`, `linked_by`) VALUES (8, '35', '4', '10', '16', '3');


#
# TABLE STRUCTURE FOR: log
#

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: message
#

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_thread_code` longtext NOT NULL,
  `message` longtext NOT NULL,
  `sender` longtext NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (8, '89197d41346c45c', 'h', 'admin-6', '04/24/2020 09:30:23', 0);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (9, '045fb9cace3ed97', 'covid', 'admin-6', '04/24/2020 09:31:03', 0);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (10, '1b96e99d10ced3d', 'Hi', 'admin-6', '04/24/2020 09:43:38', 1);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (11, 'e317d77546d2460', 'Hello Dear', 'admin-3', '04/25/2020 01:44:11', 0);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (12, '843eb73ef77a776', 'Hello', 'admin-3', '04/25/2020 01:50:29', 0);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (13, '8d68866a8ab3bda', 'Hello covid-19', 'admin-3', '04/25/2020 01:51:12', 1);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (14, 'd3d06cf1599c2fa', 'Seyido pc new', 'admin-11', '04/25/2020 02:13:24', 1);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (15, '8ecc47eba32a25e', 'Hi', 'admin-11', '04/25/2020 02:13:42', 0);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (16, 'd3d06cf1599c2fa', 'Reply me', 'admin-11', '04/25/2020 02:23:23', 1);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (17, 'e317d77546d2460', 'HH', 'admin-3', '05/30/2020 13:42:58', 0);
INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES (18, 'e317d77546d2460', 'Hi', 'admin-3', '05/31/2020 11:12:45', 0);


#
# TABLE STRUCTURE FOR: message_thread
#

DROP TABLE IF EXISTS `message_thread`;

CREATE TABLE `message_thread` (
  `message_thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_thread_code` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sender` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reciever` longtext COLLATE utf8_unicode_ci NOT NULL,
  `last_message_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_thread_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES (13, '1b96e99d10ced3d', 'admin-6', 'admin-3', '2020-04-24 12:43:38');
INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES (14, 'e317d77546d2460', 'admin-3', 'admin-4', '2020-04-25 04:44:11');
INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES (15, '843eb73ef77a776', 'admin-3', 'admin-34', '2020-04-25 04:50:29');
INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES (16, '8d68866a8ab3bda', 'admin-3', 'admin-7', '2020-04-25 04:51:11');
INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES (17, 'd3d06cf1599c2fa', 'admin-11', 'admin-3', '2020-04-25 05:13:24');
INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES (18, '8ecc47eba32a25e', 'admin-11', 'admin-6', '2020-04-25 05:13:42');


#
# TABLE STRUCTURE FOR: mode
#

DROP TABLE IF EXISTS `mode`;

CREATE TABLE `mode` (
  `maintainac_id` int(11) NOT NULL AUTO_INCREMENT,
  `maintainac_mode` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`maintainac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `mode` (`maintainac_id`, `maintainac_mode`) VALUES (1, '0');


#
# TABLE STRUCTURE FOR: noticeboard
#

DROP TABLE IF EXISTS `noticeboard`;

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_timestamp` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `noticeboard` (`notice_id`, `notice_title`, `notice`, `create_timestamp`, `user`) VALUES (6, 'Urgent training', 'There is meeting and training for new employee', 1587168000, '3');


#
# TABLE STRUCTURE FOR: outcome
#

DROP TABLE IF EXISTS `outcome`;

CREATE TABLE `outcome` (
  `outcome_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`outcome_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `outcome` (`outcome_id`, `name`) VALUES (1, 'Died');
INSERT INTO `outcome` (`outcome_id`, `name`) VALUES (2, 'Escape');
INSERT INTO `outcome` (`outcome_id`, `name`) VALUES (3, 'Back-referral');
INSERT INTO `outcome` (`outcome_id`, `name`) VALUES (4, 'Higher-referral');
INSERT INTO `outcome` (`outcome_id`, `name`) VALUES (5, 'Discharged');


#
# TABLE STRUCTURE FOR: parent
#

DROP TABLE IF EXISTS `parent`;

CREATE TABLE `parent` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `woreda_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreemenrt_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agreed` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (1, 'D01', 'ጀማ ከተማ ሠ/ማ/ጉዳይ ጽ/ቤት', '10', '4', 'Health Care finance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (2, 'D02', 'ሸቤ ሶምቦ ወረዳ ', '10', '4', 'Health Care finance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (3, 'D03', 'መኮ ወረዳ ሠ/ማ/ጉዳይ ጽ/ቤት', '19', '4', 'Health Care finance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (4, 'D04', 'አቦቦ ወረዳ', 'Z06', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (5, 'D05', 'ድማ ወረዳ', '01', '8', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (6, 'D06', 'ጎግ ወረዳ', 'Z04', '8', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (7, 'D07', 'ጆር ወረዳ', '003', '8', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (8, 'D08', 'እታንግ ልዩ ወረዳ', 'Z03', '8', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (9, 'D09', 'ጎዳሪ ወረዳ', 'Z02', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (10, 'D10', 'መንገሽ ወረዳ', 'Z01', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (11, '08', 'ሊሙ ሰቃ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (12, '06', 'ሊሙ ኮሳ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (13, '10', 'ጢሮ አፈታ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (14, '11', 'ሠነንጠማ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (15, '07', 'ዴዶ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (16, '09', 'ሠቃ ጨቆርሳ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (17, '15', 'መንቾ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (18, '10', 'አሞ ናዳ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (19, '03', 'ጉማይ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (20, '04', 'ቀርሳ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (21, '01', 'ጌራ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (22, '16', 'ጮራ ቦቶር ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (23, 'D12', 'ኦሞቢየም ጤ/መድህን ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (24, '02', 'ጉማ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (25, '05', 'ማና ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (26, '12', 'ሰኮሩ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (27, '01', 'ቦረቻ ወረዳ', '19', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (28, '06', 'በደሌ ከተማ', '19', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (29, '05', 'ገቺ ወረዳ/ጤ/መ/ኢ', '19', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (30, '02', 'ደዴሳ ወረዳ ጤ/መ/ኢ', '19', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (31, '04', 'ጮራ ወረዳ ጤ/መ/ኢ', '19', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (32, '03', 'ጨዋቃ ወረዳ ጤ/መ/ኢ', '19', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (33, 'D15', ' ሆሩሙ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (34, 'D16', 'ያዩ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (35, 'D17', ' ቢኖ ኖፃ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (36, 'D18', ' አሌ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (37, 'D19', ' ዲዶ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (38, '08', ' መቱ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (39, 'D21', ' ዳሪሙ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (40, '03', ' ቡሬ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (41, 'D22', ' ጊምቦ ወረዳ ጤ/መ/ኢ', '21', '7', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (42, 'D23', ' ጀማ ዩኒ/የተማሪወዎች አገልግሎት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (43, 'D24', ' ጀማ ዩኒ/ጤና ሳይንስ ኮሌጅ', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (44, 'D25', 'ቲቢ ግሪን ኮፊ አ/ማ', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (45, 'JU-employee', 'ጀማ ዩኒ/የቀሚ ሰራተኞች', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (46, 'Agri', 'ጀማ ዩኒ/ግብ/እን/ህክምና ኮሌጅ', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (47, 'JIT', 'ጀማ ዩኒ/ቴክ/ኢንስቲትዩት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (48, 'D29', 'ጀማ ከተማ ማረሚያ ቤቶች አስተዳደር', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (49, 'D30', 'ቦንጋ ማረሚያ ቤቶች አስተዳደር', '21', '7', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (50, 'D31', 'ጀማ ከተማ አዉቶቢስ አገልግሎት ድርጅት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (51, 'D32', 'ሊሙ ቡና እርሻ ልማት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (52, 'D33', 'አርጆ ደዴሳ ስካር ልማት ፈብሪካ', '19', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (53, 'D34', 'የስደተኞች ከስደት ተመላሽ ድርጅት', '02', '8', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (54, 'D35', '  ግልገል ግቤ ቁ-1 ሃይል ማ/ጣቢያ', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (55, 'D36', 'Salini-impregilo S.P.A Koysha Hydroelectric pro', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (56, 'D36', 'Gambella MSF Spain', '02', '8', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (57, 'D37', 'Gambella MSF Holland', '02', '8', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (58, 'D38', 'በበቃ ቡና እርሻ ልማት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (59, 'D39', 'ቲፒ ቡና እርሻ ልማት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (60, 'CBE-Main', 'ኢትዮጲያ ንግድ ባንክ አብይ ቅ/ፍ', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (61, 'J/A/D', 'ጀማ ኤርፖርቶች ድርጅት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (62, 'D42', 'የኢት/ኤሌ/ አገልግሎት ምእራብ ሪጅን', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (63, 'G/E/L/D', 'ጉጀብ እርሻ ልማት ድርጅት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (64, 'D44', 'አዲስ ኪዳን ቤተ/የህፃነናት ፕሮጀክት', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (65, 'JUSH', 'ጅማ ሜድካል ሰንተር', '10', '4', 'Credit Service', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (68, 'D45', 'ኖኖ ቤንጃ ወረዳ', '10', '4', 'Health Insurance', 'Yes');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (69, 'D46', 'ሲግሞ ወረዳ', '10', '4', 'CB Health Insurance', 'Terminated');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (70, 'D47', 'አጋሮ ከተማ', '10', '4', 'CB Health Insurance', 'Terminated');
INSERT INTO `parent` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`, `agreed`) VALUES (71, '10', ' ሀሎ ወረዳ ጤ/መ/ኢ', '09', '4', 'Health Insurance', 'Yes');


#
# TABLE STRUCTURE FOR: password
#

DROP TABLE IF EXISTS `password`;

CREATE TABLE `password` (
  `password_id` int(11) NOT NULL AUTO_INCREMENT,
  `duration` varchar(10) NOT NULL,
  `warning` varchar(10) NOT NULL,
  `characters` varchar(10) NOT NULL,
  `reusable` int(11) NOT NULL,
  `letter` varchar(10) NOT NULL,
  `uppercase` varchar(10) NOT NULL,
  `lowercase` varchar(10) NOT NULL,
  PRIMARY KEY (`password_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `password` (`password_id`, `duration`, `warning`, `characters`, `reusable`, `letter`, `uppercase`, `lowercase`) VALUES (1, '90', '5', 'defualt', 3, 'default', 'default', 'defualt');


#
# TABLE STRUCTURE FOR: patients
#

DROP TABLE IF EXISTS `patients`;

CREATE TABLE `patients` (
  `mrn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cbhi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `woreda_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `indigent` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreement` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kebele` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `renewal` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setup_year` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `full_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cdate` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`mrn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('1313', '1215/06', '06', 'K', 'CB Health Insurance', 'Ab Km Lm', 'M', '0917638870', '', '2000-05-23', NULL, NULL, '4', '10', 'K/10/06/1215/06', '3', 'Sunday, May 31, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('156893', '06/01540', '01', 'H', 'CB Health Insurance', 'Hdzuber Shemohammed', 'F', '', 'Dusta', '10/2/1949', '2011', '2012', '4', '10', 'H/10/01/06/01540', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('260773', '17/05136', '01', 'K', 'CB Health Insurance', 'Abdurezak Abareshad', 'M', '', 'Kebo wacho', '10/2/1988', '2011', '2012', '4', '10', 'K/10/01/17/05136', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('261761', '01/01236', '01', 'K', 'CB Health Insurance', 'Abagidi Abafita', 'M', '', 'chira', '10/2/1962', '2011', '2012', '4', '10', 'K/10/01/01/01236', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('27144', '03/01392', '01', 'K', 'CB Health Insurance', 'AbaMeded AbaMecha', 'M', '', 'Koba', '10/2/1945', '2011', '2012', '4', '10', 'K/10/01/03/01392', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('279379', '16/01082/01', '01', 'K', 'CB Health Insurance', 'Taju Nizamu', 'F', '', 'wanja kersa', '10/2/1974', '2011', '2012', '4', '10', 'K/10/01/16/01082/01', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('30431', '01/09107', '01', 'K', 'CB Health Insurance', 'Wegayehu Mekonin', 'M', '', 'chira', '10/2/1967', '2011', '2012', '4', '10', 'K/10/01/01/09107', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('34763', '01/01571', '01', 'K', 'CB Health Insurance', 'Diribe Tuli', 'F', '', 'Chira', '10/2/1989', '2011', '2012', '4', '10', 'K/10/01/01/01571', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('354937', '25/02156', '01', 'H', 'CB Health Insurance', 'Mamedumer Abafita', 'M', '', '', '10/2/1962', '2011', '2012', '4', '10', 'H/10/01/25/02156', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('358413', '03/07534', '01', 'H', 'CB Health Insurance', 'Hdfira Abagelan', 'F', '', 'Chira', '10/2/1947', '2011', '2012', '4', '10', 'H/10/01/03/07534', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('366157', '06/00722', '01', 'K', 'CB Health Insurance', 'Habiba Seyid', 'F', '', 'Dusta', '10/2/1962', '2011', '2012', '4', '10', 'K/10/01/06/00722', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('418521', '04/07948', '01', 'H', 'CB Health Insurance', 'HdJafar AbaJemal', 'F', '', 'Gore nesi', '10/2/1949', '2011', '2012', '4', '10', 'H/10/01/04/07948', '6', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('456509', '00973', '01', 'H', 'CB Health Insurance', 'Semera Abdulkerim', 'F', '', 'Genji chala', '10/2/1995', '2011', '2012', '4', '10', 'H/10/01/22/00973', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('501613', '25/10245', '01', 'K', 'CB Health Insurance', 'Temam Kedir', 'M', '', 'kubo selajaq', '10/2/1967', '2011', '2012', '4', '10', 'K/10/01/25/10245', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('503919', '06/00766', '01', 'K', 'CB Health Insurance', 'Demekech Defar', 'F', '', 'dusta', '10/2/1962', '2011', '2012', '4', '10', 'K/10/01/06/00766', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('503959', '01/10766', '01', 'H', 'CB Health Insurance', 'Demekech Defar', 'F', '', 'Dusta', '10/2/1961', '2011', '2012', '4', '10', 'H/10/01/01/10766', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('528937', '01/01898', '01', 'K', 'CB Health Insurance', 'Tobiyawu Abebe', 'F', '', '', '10/2/1957', '2011', '2012', '4', '10', 'K/10/01/01/01898', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('550785', '06/00766', '01', 'K', 'CB Health Insurance', 'Demekech Defar', 'F', '', 'Dusta', '10/2/1962', '2011', '2012', '4', '10', 'K/10/01/06/00766', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('624200', '03/02284', '01', 'K', 'CB Health Insurance', 'HajiShafi Abagero', 'M', '', 'Chira', '10/2/1959', '2011', '2012', '4', '10', 'K/10/01/03/02284', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('656128', '01/04662', '01', 'H', 'CB Health Insurance', 'Amarech Zeleke', 'F', '', 'Chira', '10/2/1980', '2011', '2012', '4', '10', 'H/10/01/01/04662', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('656228', '01/04662/01', '01', 'K', 'CB Health Insurance', 'Amarech Zeleke', 'F', '', 'Chira', '10/2/1980', '2011', '2012', '4', '10', 'K/10/01/01/04662/01', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('704498', '01/06094', '01', 'H', 'CB Health Insurance', 'Abaoli Abajobir', 'M', '', 'chira', '10/2/1942', '2011', '2012', '4', '10', 'H/10/01/01/06094', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('717445', '25/04292', '01', 'K', 'CB Health Insurance', 'Muktar Abdurehim', 'M', '', 'kubo selaja', '10/2/1965', '2011', '2012', '4', '10', 'K/10/01/25/04292', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('719563', '01/06981', '01', 'H', 'CB Health Insurance', 'Abdurehim Awol', 'M', '', 'Chira', '10/2/2001', '2011', '2012', '4', '10', 'H/10/01/01/06981', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('735720', '04/00033', '01', 'H', 'CB Health Insurance', 'Mesnura Sefu', 'F', '', 'done', '10/2/2002', '2011', '2012', '4', '10', 'H/10/01/04/00033', '6', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('750592', '01/00024', '01', 'K', 'CB Health Insurance', 'SheHusen Ali', 'M', '', 'Chira', '10/2/1959', '2011', '2012', '4', '10', 'K/10/01/01/00024', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('751507', '29/05773', '01', 'K', 'CB Health Insurance', 'Awol Abagojam', 'M', '', 'kayeche chel', '10/2/1950', '2011', '2012', '4', '10', 'K/10/01/29/05773', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('759946', '19/01141', '16', 'K', 'CB Health Insurance', 'Awoli Abanega', 'M', '', 'forteke', '10/2/1977', '2011', '2012', '4', '10', 'K/10/16/19/01141', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('766861', '16/0167/01', '01', 'K', 'CB Health Insurance', 'Zara Ababulgu', 'F', '', 'wanja kersa', '10/2/1972', '2011', '2012', '4', '10', 'K/10/01/16/0167/01', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('770021', '09/00092', '01', 'H', 'CB Health Insurance', 'Kume Abamiliki', 'F', '', 'Sediloya', '10/2/1942', '2011', '2012', '4', '10', 'H/10/01/09/00092', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('770618', '16/00743/01', '01', 'H', 'CB Health Insurance', 'Neima Abatemam', 'F', '', 'Wanja kersa', '10/2/1986', '2011', '2012', '4', '10', 'H/10/01/16/00743/01', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('77424', '29/1739', '01', 'K', 'CB Health Insurance', 'Ayisha Kemal', 'F', '', 'Cherako', '10/2/1990', '2011', '2012', '4', '10', 'K/10/01/29/1739', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('78103', '05993', '01', 'H', 'CB Health Insurance', 'Abdo Mufti', 'M', '', 'Genji chala', '10/2/1954', '2011', '2012', '4', '10', 'H/10/01/01/05993', '11', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('787845', '22/07392', '01', 'K', 'CB Health Insurance', 'Misku Hajijemal', 'F', '', 'Chala', '10/2/1974', '2011', '2012', '4', '10', 'K/10/01/22/07392', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('789442', '08797', '01', 'H', 'CB Health Insurance', 'Sefu Kedir', 'M', '', 'Chira', '10/2/1984', '2011', '2012', '4', '10', 'H/10/01/01/08797', '11', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('794960', '11/90642', '16', 'K', 'CB Health Insurance', 'Kebede Etana', 'M', '', '', '10/2/1987', '2011', '2012', '4', '10', 'K/10/16/11/90642', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('795485', '22/06456/06', '01', 'H', 'CB Health Insurance', 'Ezedin Abajebel', 'M', '', 'Genchi chala', '10/2/1999', '2011', '2012', '4', '10', 'H/10/01/22/06456/06', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('798949', '01/02670', '01', 'K', 'CB Health Insurance', 'Dame Abasanbi', 'F', '', 'chira', '10/2/1998', '2011', '2012', '4', '10', 'K/10/01/01/02670', '6', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('800780', '05/07853', '01', 'K', 'CB Health Insurance', 'Esmael Gidi', 'M', '', 'muje', '10/2/2011', '2011', '2012', '4', '10', 'K/10/01/05/07853', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('806565', '09/0090', '01', 'K', 'CB Health Insurance', 'Nejiba Nezif', 'F', '', 'Sediloya', '10/2/1977', '2011', '2012', '4', '10', 'K/10/01/09/0090', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('809987', '25/05287', '01', 'K', 'CB Health Insurance', 'Bontu Habib', 'F', '', 'kubo seleja', '10/2/2003', '2011', '2012', '4', '10', 'K/10/01/25/05287', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('81022', '25/09080', '01', 'H', 'CB Health Insurance', 'Abagojam Abafira', 'M', '', 'kubo seleja', '10/2/1939', '2011', '2012', '4', '10', 'H/10/01/25/09080', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('811142', '05/08950', '01', 'H', 'CB Health Insurance', 'Misba Abalulesa', 'F', '', 'Gera', '10/2/1967', '2011', '2012', '4', '10', 'H/10/01/05/08950', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('811353', '22/05155/01', '01', 'K', 'CB Health Insurance', 'Denu Ababor', 'M', '', 'Genji chala', '10/2/1977', '2011', '2012', '4', '10', 'K/10/01/22/05155/01', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('814505', '060902', '16', 'H', 'CB Health Insurance', 'Kmale Abedweye', 'M', '', 'senfosagte', '10/2/2000', '2011', '2012', '4', '10', 'H/10/16/060902', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('815830', '03/00326', '16', 'H', 'CB Health Insurance', 'Hasen Debela', 'M', '', '', '10/2/1982', '2011', '2012', '4', '10', 'H/10/16/03/00326', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('816304', '01/02175/01', '01', 'K', 'CB Health Insurance', 'Hawa Abagojam', 'F', '', 'Chora', '10/2/1967', '2011', '2012', '4', '10', 'K/10/01/01/02175/01', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('817217', '05/05832', '01', 'K', 'CB Health Insurance', 'AbaZinab AbaGero', 'M', '', 'Muja', '10/2/1962', '2011', '2012', '4', '10', 'K/10/01/05/05832', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('818534', '17/05884', '01', 'H', 'CB Health Insurance', 'HdMuhaba Abagojam', 'F', '', 'Gena', '10/2/1962', '2011', '2012', '4', '10', 'H/10/01/17/05884', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('820232', '25/06720/01', '01', 'K', 'CB Health Insurance', 'Shito Abafira', 'F', '', 'kubo selaja', '10/2/1972', '2011', '2012', '4', '10', 'K/10/01/25/06720/01', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('820516', '17/09056', '01', 'H', 'CB Health Insurance', 'Kemalo AbaFira', 'M', '', 'Genachala', '10/2/1994', '2011', '2012', '4', '10', 'H/10/01/17/09056', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('821299', '02908', '16', 'K', 'CB Health Insurance', 'Mkiya Mahmed', 'F', '', 'abora', '10/2/1982', '2011', '2012', '4', '10', 'K/10/16/02908', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('825748', '05502', '16', 'K', 'CB Health Insurance', 'Rahmet Mahamed', 'F', '', 'dlekos', '10/2/2007', '2011', '2012', '4', '10', 'K/10/16/05502', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('826394', '21/00163', '01', 'K', 'CB Health Insurance', 'Zakir Abajilbi', 'M', '', 'bulado choch', '10/2/1952', '2011', '2012', '4', '10', 'K/10/01/21/00163', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('827082', '28/02775', '01', 'H', 'CB Health Insurance', 'Ababulgu Abachebsa', 'M', '', 'borcho deka', '10/2/1932', '2011', '2012', '4', '10', 'H/10/01/28/02775', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('828830', '09/07428/02', '01', 'H', 'CB Health Insurance', 'Kebebe Bokona', 'M', '', 'Sediloya', '10/2/1982', '2011', '2012', '4', '10', 'H/10/01/09/07428/02', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('828833', '22/04886', '01', 'H', 'CB Health Insurance', 'SheJemal AbaBulgu', 'M', '', 'Genchi chala', '10/2/1952', '2011', '2012', '4', '10', 'H/10/01/22/04886', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('829011', '20/02633', '01', 'H', 'CB Health Insurance', 'Ibrahim Tegegn', 'M', '', 'Kolaselaja', '10/2/1970', '2011', '2012', '4', '10', 'H/10/01/20/02633', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('829065', '01/592/05', '01', 'K', 'CB Health Insurance', 'Natinael Abebe', 'M', '', 'Chira', '10/2/1982', '2011', '2012', '4', '10', 'K/10/01/01/592/05', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('82924', '10/2424/04', '01', 'H', 'CB Health Insurance', 'Abdurehman Mohammed', 'M', '', 'Genchi chala', '10/2/2006', '2011', '2012', '4', '10', 'H/10/01/10/2424/04', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('830508', '03/08947', '01', 'H', 'CB Health Insurance', 'Kelifa AbaGojam', 'M', '', 'Goredika', '10/2/1962', '2011', '2012', '4', '10', 'H/10/01/03/08947', '3', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('830516', '17/09056', '01', 'H', 'CB Health Insurance', 'Kamilu Abafira', 'M', '', 'gena chala', '10/2/1994', '2011', '2012', '4', '10', 'H/10/01/17/09056', '6', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('831022', '25/09080', '01', 'K', 'CB Health Insurance', 'Abagojam Abafogi', 'M', '', 'kuboseaja', '10/2/1937', '2011', '2012', '4', '10', 'K/10/01/25/09080', '6', 'Wednesday, March 25, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('831391', '11/08509', '01', 'K', 'CB Health Insurance', 'Faruk Miftahi', 'M', '', 'temi teso', '10/2/2003', '2011', '2012', '4', '10', 'K/10/01/11/08509', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('831735', '22/011346', '01', 'H', 'CB Health Insurance', 'Asinakech Kindu', 'F', '', 'Genji chala', '10/2/1997', '2011', '2012', '4', '10', 'H/10/01/22/011346', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('831755', '30/17175', '01', 'H', 'CB Health Insurance', 'Kebede Mengesha', 'M', '', 'Yacho belete', '10/2/1930', '2011', '2012', '4', '10', 'H/10/01/30/17175', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('831944', '05/06827', '01', 'K', 'CB Health Insurance', 'Abadiga Abagero', 'M', '', 'Muje', '10/2/1952', '2011', '2012', '4', '10', 'K/10/01/05/06827', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('832481', '22/08851', '01', 'K', 'CB Health Insurance', 'Kedir Abagero', 'M', '', 'Genchi chala', '10/2/1972', '2011', '2012', '4', '10', 'K/10/01/22/08851', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('835255', '09/00710', '01', 'K', 'CB Health Insurance', 'Zerfe Gale', 'F', '', 'Chira', '10/2/1952', '2011', '2012', '4', '10', 'K/10/01/09/00710', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('836040', '01/07707', '01', 'H', 'CB Health Insurance', 'Mashere Abajebel', 'F', '', 'Chira', '10/2/1988', '2011', '2012', '4', '10', 'H/10/01/01/07707', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('836335', '16/08717', '01', 'H', 'CB Health Insurance', 'Ayantu Tahir', 'F', '', 'Wanja kersa', '10/2/1980', '2011', '2012', '4', '10', 'H/10/01/16/08717', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('836457', '09/00841', '16', 'K', 'CB Health Insurance', 'Gezahnge Telahun', 'M', '', 'moneta', '10/2/1954', '2011', '2012', '4', '10', 'K/10/16/09/00841', '36', 'Thursday, March 26, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('836706', '01/06921', '01', 'H', 'CB Health Insurance', 'Maritu Wolde', 'F', '', 'Chira', '10/2/1979', '2011', '2012', '4', '10', 'H/10/01/01/06921', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('837486', '11/07127', '01', 'H', 'CB Health Insurance', 'Fayiz Sultan', 'M', '', 'Oso', '10/2/2008', '2011', '2012', '4', '10', 'H/10/01/11/07127', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('837787', '28/05604', '01', 'H', 'CB Health Insurance', 'Suriya Amino', 'F', '', 'Borcho', '10/2/2004', '2011', '2012', '4', '10', 'H/10/01/28/05604', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('838481', '05/08950/01', '01', 'H', 'CB Health Insurance', 'Misku Abalulesa', 'F', '', 'Muje', '10/2/1967', '2011', '2012', '4', '10', 'H/10/01/05/08950/01', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('839200', '18/05/882', '01', 'H', 'CB Health Insurance', 'Abadiga Abagunbul', 'M', '', 'Secha', '10/2/1952', '2011', '2012', '4', '10', 'H/10/01/18/05/882', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('839280', '21/08545/05', '01', 'H', 'CB Health Insurance', 'Abdulakim Demsew', 'M', '', 'Chala', '10/2/2008', '2011', '2012', '4', '10', 'H/10/01/21/08545/05', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('839882', '09/07427', '01', 'H', 'CB Health Insurance', 'Kedir Abasedi', 'M', '', 'Sediloya', '10/2/1977', '2011', '2012', '4', '10', 'H/10/01/09/07427', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('839892', '09/07927', '01', 'H', 'CB Health Insurance', 'Kedir Abasedi', 'M', '', 'Sedi', '10/2/1977', '2011', '2012', '4', '10', 'H/10/01/09/07927', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('840592', '00982', '01', 'H', 'CB Health Insurance', 'Taju Abadilbi', 'M', '', 'Genji chala', '10/2/1970', '2011', '2012', '4', '10', 'H/10/01/22/00982', '11', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('841981', '01/02567/01', '01', 'H', 'CB Health Insurance', 'Tadelech Tekele', 'F', '', '', '10/2/1962', '2011', '2012', '4', '10', 'H/10/01/01/02567/01', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('843156', '09/06798', '01', 'K', 'CB Health Insurance', 'Welde Adamu', 'M', '', 'Sediloya', '10/2/1942', '2011', '2012', '4', '10', 'K/10/01/09/06798', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('843433', '06/06015', '01', 'H', 'CB Health Insurance', 'Merdiya Abasimel', 'F', '', 'Dusta', '10/2/1952', '2011', '2012', '4', '10', 'H/10/01/06/06015', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('843453', '06/06055', '01', 'H', 'CB Health Insurance', 'Merdiya Abasimel', 'F', '', 'Gera', '10/2/1952', '2011', '2012', '4', '10', 'H/10/01/06/06055', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('843773', '09/00917/02', '01', 'H', 'CB Health Insurance', 'Shiweb Zekiyu', 'F', '', 'Sediloya', '10/2/1992', '2011', '2012', '4', '10', 'H/10/01/09/00917/02', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('844334', '16/00743', '01', 'H', 'CB Health Insurance', 'Yesuf Abajemal', 'M', '', 'Wanja kersa', '10/2/1981', '2011', '2012', '4', '10', 'H/10/01/16/00743', '3', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('847680', '25/04292', '01', 'K', 'CB Health Insurance', 'Bediru Abaita', 'M', '', 'kubo selaja', '10/2/1972', '2011', '2012', '4', '10', 'K/10/01/25/04292', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('850073', '08/08002', '01', 'K', 'CB Health Insurance', 'Ananasi Abajebel', 'M', '', 'dusta', '10/2/1977', '2011', '2012', '4', '10', 'K/10/01/08/08002', '6', 'Tuesday, March 24, 2020');
INSERT INTO `patients` (`mrn_id`, `cbhi`, `woreda_id`, `indigent`, `agreement`, `name`, `sex`, `phone`, `kebele`, `age`, `renewal`, `setup_year`, `class_id`, `section_id`, `full_code`, `user`, `cdate`) VALUES ('850124', '32/05168', '07', 'H', 'CB Health Insurance', 'Misku Ababor', 'M', '', 'sherifi', '10/2/1980', '2011', '2012', '4', '10', 'H/10/07/32/05168', '36', 'Wednesday, March 25, 2020');


#
# TABLE STRUCTURE FOR: payment
#

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `per_time` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `unpaid_amount` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `paid` varchar(20) NOT NULL,
  `remain` varchar(20) NOT NULL,
  `fully_covered` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `approved_by` varchar(30) DEFAULT NULL,
  `approval_date` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `payment` (`payment_id`, `region`, `zone`, `woreda`, `per_time`, `year`, `paid_amount`, `unpaid_amount`, `total`, `paid`, `remain`, `fully_covered`, `status`, `approved_by`, `approval_date`) VALUES (11, '4', '10', '01', '3', '2012', '8601.50', '0.00', '8601.50', '100', '0', 'Yes', 'Monthly', NULL, NULL);
INSERT INTO `payment` (`payment_id`, `region`, `zone`, `woreda`, `per_time`, `year`, `paid_amount`, `unpaid_amount`, `total`, `paid`, `remain`, `fully_covered`, `status`, `approved_by`, `approval_date`) VALUES (12, '4', '10', '01', '4', '2012', '13508.81', '0.00', '13508.81', '100', '0', 'Yes', 'Monthly', '11', ' Tuesday, July 14, 2020');


#
# TABLE STRUCTURE FOR: region
#

DROP TABLE IF EXISTS `region`;

CREATE TABLE `region` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (1, 'Tegray ', 'Ethiopiai\'s most northerly region is Tigray, which covers 80,000 square km and is administered from its capital city of Mekele. The population totals more than 5.06 million, of which 95% are Orthodox Christian and the remainder Muslim. The Tigraian people, the dominant ethnic group, are agriculturists who also herd cattle and other livestock.');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (2, 'Afar ', 'Although it covers a vast area of 270,000 square km running up the border with Djibouti and Eritrea, Afar region is arid, thinly populated and almost bereft of large towns. According to July 2013 estimates of the Central Statistical Agency of Ethiopia, the total population of Afar is 1.65 million, of which less than 10% live in urban areas. ');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (3, 'Amahara ', 'Governed from its large modern capital city of Bahir Dar, on the southern tip of Lake Tana, Amhara covers an area of 170,752 square km and supports a population estimated at 19.2 million in 2013. Although the substantial cities of Bahr Dar, Gondar and Dessie all lie within Amhara, roughly 90% of the region\'s population is rural.');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (4, 'Oromia', 'The vast region of oromia covers an area of more than 350,000 square km (almost one-third of the country) and supports a correspondingly large population of over 32.2 million people. Roughly 85% of the regional population is Oromo, and another 10% Amhara. Aside from the 5% who still practise animist or other traditional religions, the regional split between Christian and Muslim is as good as even.');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (5, 'Harari ', 'Consisting of the walled city of Harar and its immediate environs, Harari is essentially a modern revival of the autonomous city-state of Harar, which was one of the most powerful regional political entities from the 16th until the late 19th century, when it was co-opted into Abyssinia by Menelik II. The state covers an area of roughly 350 square km and supports a population estimated at 215,000, of which some 131,000 are city dwellers.');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (6, 'Benishangumuz', 'The most obscure of Ethiopia\'s regions, practically never visited by tourists, is Benishangul-Gumuz, which runs for about 2,000km along the Sudanese border to the east of Amhara, but is on average no more than 200km. Relatively low-lying but with an annual rainfall in excess of 1,000mm, this remote and poorly developed area is characterised by a hot, humid climate. ');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (7, 'Somalia ', 'Named for the distinctive Somali people, who comprise 95% of its population, this is the second largest of Ethiopia\'s regions, covering an area of 250,000 square km along the Somali border. Much of the region is desert or semi-desert, its vast area, the total population is around 5.3 million.');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (8, 'Gambela', 'The small state, which covers an area of 25,274 square km along the southern Sudanese border, essentially comprises lush, humid lowland draining into the Baro River, an important tributary of the NileRiver. Relatively remote and undeveloped, Gambella region supports a predominantly rural population of roughly 406,000 ethnically varied people.');
INSERT INTO `region` (`class_id`, `name`, `note`) VALUES (9, 'SNNP ', 'Although it smells like the handiwork of an uninspired committee, the name of this 112,323 square km region does provide an accurate reflection of its incredible cultural diversity. The regional population of roughly 17.9 million represents some 45 different ethino-lingustic groups, of which none comprises 20% of the regional population, and only the Sidamo, Gurage and Walaita make up more than 10% each. ');


#
# TABLE STRUCTURE FOR: section
#

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (1, '01', 'Mezhenger', '8', 'Found in Gambela');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (2, '02', 'Gambela town', '8', 'Found in Gambela');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (3, '03', 'Anyuake', '8', 'Found in Gambela');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (4, '04', 'Nuwer', '8', 'Found in Gambela');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (5, '09', 'Elibabor', '4', 'found in oromia');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (7, '10', 'Jimma', '4', 'found in oromia ');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (16, '19', 'Buno Bedele', '4', 'found in oromia');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (19, '21', 'Keffa ', '7', 'Found in south nations and nationality of people');
INSERT INTO `section` (`zone_id`, `section_id`, `name`, `class_id`, `note`) VALUES (20, '22', 'Benjimaji', '7', 'Found in south nations and nationality of people');


#
# TABLE STRUCTURE FOR: server
#

DROP TABLE IF EXISTS `server`;

CREATE TABLE `server` (
  `server_id` varchar(30) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `domain_name` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`server_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `server` (`server_id`, `ip`, `domain_name`, `link`) VALUES ('ims2020', '10.142.65.143', 'hci.ju.edu.et', '10.142.65.36/hci.ju.edu.et');


#
# TABLE STRUCTURE FOR: services
#

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `services` (`service_id`, `name`) VALUES (1, 'card');
INSERT INTO `services` (`service_id`, `name`) VALUES (2, 'drugs');
INSERT INTO `services` (`service_id`, `name`) VALUES (3, 'surgery');
INSERT INTO `services` (`service_id`, `name`) VALUES (4, 'Imaging');
INSERT INTO `services` (`service_id`, `name`) VALUES (5, 'lab');
INSERT INTO `services` (`service_id`, `name`) VALUES (6, 'Bed_fee');
INSERT INTO `services` (`service_id`, `name`) VALUES (7, 'other');


#
# TABLE STRUCTURE FOR: settings
#

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (1, 'system_name', 'Jimma Medical Center<br><small>Integrated HCI System</small><br><small>Version 1.1</small>');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (2, 'system_title', 'Integrated HCI System');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (3, 'address', 'Jimma,Ethiopia');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (4, 'phone', '0471142514');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (5, 'paypal_email', 'seidm9815@gmail.com');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (6, 'currency', 'ETB');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (7, 'system_email', 'info@ju.edu.et');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (20, 'active_sms_service', 'clickatell');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (11, 'language', 'english');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (12, 'text_align', 'left-to-right');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (13, 'clickatell_user', '');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (14, 'clickatell_password', '');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (15, 'clickatell_api_id', '');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (16, 'skin_colour', 'blue');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (17, 'twilio_account_sid', '');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (18, 'twilio_auth_token', '');
INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES (19, 'twilio_sender_phone_number', '');


#
# TABLE STRUCTURE FOR: signup
#

DROP TABLE IF EXISTS `signup`;

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL AUTO_INCREMENT,
  `offset` int(11) NOT NULL,
  PRIMARY KEY (`signup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `signup` (`signup_id`, `offset`) VALUES (1, 1);


#
# TABLE STRUCTURE FOR: survey
#

DROP TABLE IF EXISTS `survey`;

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `offset` int(11) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `survey` (`survey_id`, `offset`) VALUES (1, 0);


#
# TABLE STRUCTURE FOR: treatment
#

DROP TABLE IF EXISTS `treatment`;

CREATE TABLE `treatment` (
  `encounter_id` int(11) NOT NULL AUTO_INCREMENT,
  `mrn_id` int(11) NOT NULL,
  `CBHI_code` varchar(50) NOT NULL,
  `encounter` varchar(20) NOT NULL,
  `agreement` varchar(30) NOT NULL,
  `region` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `diagniss` varchar(255) DEFAULT NULL,
  `paid` varchar(20) DEFAULT NULL,
  `Date_of_service` varchar(30) NOT NULL,
  `outcome` varchar(50) DEFAULT NULL,
  `reason` varchar(50) DEFAULT NULL,
  `card` decimal(15,2) NOT NULL,
  `lab` decimal(15,2) NOT NULL,
  `Imaging` decimal(15,2) NOT NULL,
  `surgery` decimal(15,2) NOT NULL,
  `drugs` decimal(15,2) NOT NULL,
  `Bed_fee` decimal(15,2) NOT NULL,
  `other` decimal(15,2) DEFAULT NULL,
  `total` decimal(15,2) NOT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `cdate` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `edited` int(11) DEFAULT NULL,
  PRIMARY KEY (`encounter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (1, 843433, 'H/10/01/06/06015', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '60', 4, 2012, '', 'Yes', '2012-4-2', NULL, NULL, '5.00', '133.00', '0.00', '0.00', '32.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (2, 843773, 'H/10/01/09/00917/02', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '20', 4, 2012, '', 'Yes', '2012-4-2', NULL, NULL, '5.00', '140.00', '0.00', '0.00', '28.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (3, 843156, 'K/10/01/09/06798', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '70', 4, 2012, '', 'Yes', '2012-4-6', NULL, NULL, '5.00', '350.00', '0.00', '0.00', '439.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (4, 843453, 'H/10/01/06/06055', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '60', 4, 2012, '', 'Yes', '2012-4-1', NULL, NULL, '5.00', '203.00', '0.00', '0.00', '33.50', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (5, 841981, 'H/10/01/01/02567/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '50', 3, 2012, '', 'Yes', '2012-3-29', NULL, NULL, '5.00', '235.00', '0.00', '0.00', '0.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (6, 354937, 'H/10/01/25/02156', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '50', 3, 2012, '', 'Yes', '2012-3-29', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '365.67', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (7, 839882, 'H/10/01/09/07427', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '35', 3, 2012, '', 'Yes', '2012-3-24', NULL, NULL, '5.00', '0.00', '475.00', '0.00', '184.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (9, 260773, 'K/10/01/17/05136', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '24', 3, 2012, '', 'Yes', '2012-3-24', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '471.40', '0.00', '0.00', '476.40', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (10, 503959, 'H/10/01/01/10766', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '51', 3, 2012, '', 'Yes', '2012-3-24', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '140.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (11, 839892, 'H/10/01/09/07927', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '35', 3, 2012, '', 'Yes', '2012-3-23', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '35.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (12, 795485, 'H/10/01/22/06456/06', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '13', 3, 2012, '', 'Yes', '2012-3-23', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '97.50', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (13, 839280, 'H/10/01/21/08545/05', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '4', 3, 2012, '', 'Yes', '2012-3-23', NULL, NULL, '5.00', '0.00', '0.00', '120.00', '292.00', '108.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (14, 839200, 'H/10/01/18/05/882', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '60', 4, 2012, '', 'Yes', '2012-4-1', NULL, NULL, '5.00', '35.00', '0.00', '0.00', '48.80', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (15, 770618, 'H/10/01/16/00743/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '26', 3, 2012, '', 'Yes', '2012-3-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '89.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (16, 837486, 'H/10/01/11/07127', 'IPD', 'CB Health Insurance', '4', '10', '01', 'M', '4', 3, 2012, '', 'Yes', '2012-3-30', NULL, NULL, '5.00', '0.00', '0.00', '120.00', '464.80', '264.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (17, 787845, 'H/10/01/22/07392', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '38', 3, 2012, '', 'Yes', '2012-3-19', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '82.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (18, 837787, 'H/10/01/28/05604', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '8', 3, 2012, '', 'Yes', '2012-3-10', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '247.48', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (19, 835255, 'K/10/01/09/00710', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '60', 4, 2012, '', 'Yes', '2012-4-15', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '1169.00', '72.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (20, 77424, 'K/10/01/29/1739', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '22', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '501.94', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (21, 770021, 'H/10/01/09/00092', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '70', 3, 2012, '', 'Yes', '2012-3-5', NULL, NULL, '5.00', '0.00', '130.00', '0.00', '15.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (22, 156893, 'H/10/01/06/01540', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '63', 3, 2012, '', 'Yes', '2012-3-5', NULL, NULL, '5.00', '0.00', '130.00', '0.00', '15.75', '0.00', '0.00', '150.75', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (23, 836706, 'H/10/01/01/06921', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '33', 3, 2012, '', 'Yes', '2012-3-4', NULL, NULL, '5.00', '20.00', '0.00', '0.00', '0.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (24, 836040, 'H/10/01/01/07707', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '24', 3, 2012, '', 'Yes', '2012-3-3', NULL, NULL, '5.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (25, 836335, 'H/10/01/16/08717', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '32', 3, 2012, '', 'Yes', '2012-3-1', NULL, NULL, '5.00', '20.00', '0.00', '0.00', '0.00', '0.00', '40.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (26, 816304, 'K/10/01/01/02175/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '45', 4, 2012, '', 'Yes', '2012-4-1', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '56.50', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (27, 81022, 'H/10/01/25/09080', 'IPD', 'CB Health Insurance', '4', '10', '01', 'M', '75', 2, 2012, '', 'No', '2012-2-28', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '850.46', '60.00', '0.00', '915.46', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (28, 656228, 'K/10/01/01/04662/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '28', 3, 2012, '', 'Yes', '2012-3-26', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '52.50', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (29, 719563, 'H/10/01/01/06981', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '11', 2, 2012, '', 'No', '2012-2-28', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '192.00', '0.00', '0.00', '197.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (30, 366157, 'K/10/01/06/00722', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '50', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '360.00', '0.00', '0.00', '726.10', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (31, 831944, 'K/10/01/05/06827', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '60', 2, 2012, '', 'No', '2012-2-23', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '788.20', '0.00', '0.00', '793.20', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (32, 809987, 'K/10/01/25/05287', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '9', 2, 2012, '', 'No', '2012-2-27', NULL, NULL, '5.00', '20.00', '0.00', '250.00', '1224.40', '252.00', '72.00', '1823.40', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (34, 528937, 'K/10/01/01/01898', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '55', 4, 2012, '', 'Yes', '2012-4-23', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '1088.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (35, 750592, 'K/10/01/01/00024', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '53', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '746.02', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (36, 832481, 'K/10/01/22/08851', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '40', 2, 2012, '', 'No', '2012-2-20', NULL, NULL, '5.00', '70.00', '75.00', '0.00', '0.00', '0.00', '0.00', '150.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (37, 358413, 'H/10/01/03/07534', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '65', 2, 2012, '', 'No', '2012-2-19', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '15.00', '0.00', '0.00', '20.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (38, 82924, 'H/10/01/10/2424/04', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '6', 2, 2012, '', 'No', '2012-2-19', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5.00', NULL, 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (39, 624200, 'K/10/01/03/02284', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '53', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '131.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (40, 818534, 'H/10/01/17/05884', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '50', 2, 2012, '', 'No', '2012-2-18', NULL, NULL, '5.00', '124.00', '0.00', '0.00', '0.00', '0.00', '0.00', '129.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (41, 828833, 'H/10/01/22/04886', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '60', 2, 2012, '', 'No', '2012-2-17', NULL, NULL, '5.00', '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', '55.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (42, 831755, 'H/10/01/30/17175', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '82', 2, 2012, '', 'No', '2012-2-17', NULL, NULL, '5.00', '35.00', '0.00', '0.00', '0.00', '0.00', '0.00', '40.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (43, 27144, 'K/10/01/03/01392', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '67', 3, 2012, '', 'Yes', '2012-3-17', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '1352.10', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (44, 840592, 'H/10/01/22/00982', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '42', 4, 2012, '', 'Yes', '2012-4-23', NULL, NULL, '5.00', '110.00', '0.00', '0.00', '0.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '11', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (45, 789442, 'H/10/01/01/08797', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '28', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '666.60', '0.00', '0.00', '443.00', NULL, 'Tuesday, March 24, 2020', '11', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (46, 78103, 'H/10/01/01/05993', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '17', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '70.20', '0.00', '0.00', '443.00', NULL, 'Tuesday, March 24, 2020', '11', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (47, 456509, 'H/10/01/22/00973', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '17', 4, 2012, '', 'Yes', '2012-4-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '5.60', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '11', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (48, 279379, 'K/10/01/01082/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '38', 3, 2012, '', 'Yes', '2012-3-5', NULL, NULL, '5.00', '148.00', '130.00', '0.00', '79.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (49, 704498, 'H/10/01/01/06094', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '70', 4, 2012, 'LHD', 'Yes', '2012-4-5', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '321.60', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (50, 501613, 'K/10/01/25/10245', 'IPD', 'CB Health Insurance', '4', '10', '01', 'M', '45', 4, 2012, 'CLO', 'Yes', '2012-4-6', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '243.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (51, 766861, 'K/10/01/16/0167/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '40', 2, 2012, 'Hypothyo', 'No', '2012-2-24', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '153.60', '0.00', '0.00', '158.60', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (52, 800780, 'K/10/01/05/07853', 'IPD', 'CB Health Insurance', '4', '10', '01', 'M', '1', 4, 2012, '', 'Yes', '2012-4-23', NULL, NULL, '5.00', '0.00', '0.00', '100.00', '547.00', '288.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (53, 844334, 'H/10/01/16/00743', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '31', 4, 2012, '', 'Yes', '2012-4-6', NULL, NULL, '5.00', '24.00', '0.00', '0.00', '14.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (54, 503919, 'K/10/01/06/00766', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '50', 4, 2012, 'Aflo+DCL', 'Yes', '2012-4-21', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '245.55', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (55, 811353, 'K/10/01/22/05155/01', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '35', 4, 2012, 'HTN+HTY', 'Yes', '2012-4-9', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '2301.60', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (56, 820232, 'K/10/01/25/06720/01', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '40', 2, 2012, '', 'No', '2012-2-25', NULL, NULL, '5.00', '20.00', '0.00', '150.00', '1491.20', '216.00', '0.00', '1882.20', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (57, 261761, 'K/10/01/01/01236', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '50', 3, 2012, '', 'Yes', '2012-3-5', NULL, NULL, '5.00', '28.00', '130.00', '0.00', '74.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (58, 850073, 'K/10/01/08/08002', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '35', 4, 2012, '', 'Yes', '2012-4-29', NULL, NULL, '5.00', '445.00', '0.00', '0.00', '0.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (59, 826394, 'K/10/01/21/00163', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '60', 4, 2012, '', 'Yes', '2012-4-27', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '70.80', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (60, 30431, 'K/10/01/01/09107', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '45', 4, 2012, '', 'Yes', '2012-4-1', NULL, NULL, '5.00', '60.00', '0.00', '0.00', '1166.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (61, 847680, 'K/10/01/25/04292', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '40', 4, 2012, '', 'Yes', '2012-4-22', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '49.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (62, 717445, 'K/10/01/25/04292', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '47', 3, 2012, '', 'Yes', '2012-3-23', NULL, NULL, '5.00', '55.00', '0.00', '0.00', '1155.00', '0.00', '0.00', '443.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (63, 751507, 'K/10/01/29/05773', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '62', 2, 2012, '', 'No', '2012-2-29', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '193.60', '0.00', '0.00', '198.60', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (64, 831735, 'H/10/01/22/011346', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '15', 2, 2012, '', 'No', '2012-2-17', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5.00', NULL, 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (65, 827082, 'H/10/01/28/02775', 'IPD', 'CB Health Insurance', '4', '10', '01', 'M', '80', 2, 2012, '', 'No', '2012-2-14', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '0.00', '96.00', '0.00', '101.00', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (66, 831391, 'K/10/01/11/08509', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '9', 2, 2012, '', 'No', '2012-2-19', NULL, NULL, '5.00', '98.00', '0.00', '0.00', '175.72', '0.00', '60.00', '338.72', '', 'Tuesday, March 24, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (67, 817217, 'K/10/01/05/05832', 'IPD', 'CB Health Insurance', '4', '10', '01', 'M', '50', 2, 2012, '', 'No', '2012-2-12', NULL, NULL, '5.00', '125.00', '0.00', '0.00', '413.00', '144.00', '0.00', '687.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (68, 828830, 'H/10/01/09/07428/02', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '30', 2, 2012, '', 'No', '2012-2-4', NULL, NULL, '5.00', '80.00', '0.00', '0.00', '0.00', '0.00', '0.00', '85.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (69, 829065, 'K/10/01/01/592/05', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '30', 2, 2012, '', 'No', '2012-2-5', NULL, NULL, '5.00', '15.00', '80.00', '0.00', '40.50', '0.00', '0.00', '140.50', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (70, 829011, 'H/10/01/20/02633', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '42', 2, 2012, '', 'No', '2012-2-4', NULL, NULL, '5.00', '23.00', '0.00', '0.00', '0.00', '0.00', '0.00', '28.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (71, 735720, 'H/10/01/04/00033', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '10', 2, 2012, '', 'No', '2012-2-14', NULL, NULL, '5.00', '42.00', '0.00', '0.00', '0.00', '0.00', '0.00', '47.00', '', 'Wednesday, March 25, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (72, 806565, 'K/10/01/09/0090', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '35', 2, 2012, '', 'No', '2012-2-13', NULL, NULL, '5.00', '20.00', '0.00', '100.00', '765.00', '132.00', '0.00', '1022.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (73, 830516, 'H/10/01/17/09056', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '18', 2, 2012, '', 'No', '2012-2-19', NULL, NULL, '5.00', '50.00', '0.00', '0.00', '21.00', '0.00', '0.00', '76.00', '', 'Wednesday, March 25, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (74, 550785, 'K/10/01/06/00766', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '50', 3, 2012, '', 'Yes', '2012-3-5', NULL, NULL, '5.00', '0.00', '130.00', '0.00', '805.00', '0.00', '0.00', '443.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (75, 34763, 'K/10/01/01/01571', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '23', 4, 2012, '', 'Yes', '2012-4-6', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '353.00', '0.00', '0.00', '443.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (76, 798949, 'K/10/01/01/02670', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '14', 3, 2012, '', 'Yes', '2012-3-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '168.30', '0.00', '0.00', '443.00', '', 'Wednesday, March 25, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (77, 830508, 'H/10/01/03/08947', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '50', 2, 2012, '', 'No', '2012-2-28', NULL, NULL, '5.00', '71.00', '0.00', '0.00', '0.00', '0.00', '0.00', '76.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (78, 831022, 'K/10/01/25/09080', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '75', 2, 2012, '', 'No', '2012-2-19', NULL, NULL, '5.00', '61.00', '225.00', '0.00', '311.60', '0.00', '400.00', '1002.60', '', 'Wednesday, March 25, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (79, 820516, 'H/10/01/17/09056', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '18', 2, 2012, '', 'No', '2012-2-12', NULL, NULL, '5.00', '73.00', '0.00', '0.00', '0.00', '0.00', '0.00', '78.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (80, 656128, 'H/10/01/01/04662', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '32', 2, 2012, '', 'No', '2012-2-12', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5.00', NULL, 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (81, 418521, 'H/10/01/04/07948', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '45', 2, 2012, '', 'No', '2012-2-13', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '769.00', '0.00', '0.00', '774.00', '', 'Wednesday, March 25, 2020', '6', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (82, 811142, 'H/10/01/05/08950', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '45', 3, 2012, '', 'Yes', '2012-3-26', NULL, NULL, '5.00', '0.00', '120.00', '0.00', '132.00', '0.00', '0.00', '443.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (83, 838481, 'H/10/01/05/08950/01', 'IPD', 'CB Health Insurance', '4', '10', '01', 'F', '45', 3, 2012, '', 'Yes', '2012-3-23', NULL, NULL, '5.00', '23.00', '75.00', '120.00', '0.00', '168.00', '0.00', '443.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (84, 831944, 'K/10/01/05/06827', 'OPD', 'CB Health Insurance', '4', '10', '01', 'M', '60', 2, 2012, '', 'No', '2012-2-21', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '438.00', '0.00', '0.00', '443.00', '', 'Wednesday, March 25, 2020', '3', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (85, 850124, 'H/10/07/32/05168', 'OPD', 'CB Health Insurance', '4', '10', '07', 'M', '32', 4, 2012, '', 'No', '2012-4-30', NULL, NULL, '5.00', '175.00', '0.00', '0.00', '0.00', '0.00', '0.00', '180.00', '', 'Wednesday, March 25, 2020', '36', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (86, 821299, 'K/10/16/02908', 'OPD', 'CB Health Insurance', '4', '10', '16', 'F', '30', 1, 2012, '', 'No', '2012-1-7', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '672.00', '0.00', '0.00', '677.00', '', 'Thursday, March 26, 2020', '34', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (87, 825748, 'K/10/16/05502', 'OPD', 'CB Health Insurance', '4', '10', '16', 'F', '5', 1, 2012, '', 'No', '2012-1-7', NULL, NULL, '5.00', '60.00', '0.00', '0.00', '0.00', '0.00', '0.00', '65.00', '', 'Thursday, March 26, 2020', '34', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (88, 814505, 'H/10/16/060902', 'OPD', 'CB Health Insurance', '4', '10', '16', 'M', '12', 1, 2012, '', 'No', '2012-1-7', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '75.00', '80.00', '', 'Thursday, March 26, 2020', '34', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (89, 759946, 'K/10/16/19/01141', 'OPD', 'CB Health Insurance', '4', '10', '16', 'M', '35', 1, 2012, '', 'No', '2012-1-7', NULL, NULL, '5.00', '0.00', '0.00', '0.00', '28.00', '0.00', '0.00', '33.00', '', 'Thursday, March 26, 2020', '34', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (90, 794960, 'K/10/16/11/90642', 'IPD', 'CB Health Insurance', '4', '10', '16', 'M', '25', 1, 2012, '', 'No', '2012-1-7', NULL, NULL, '5.00', '0.00', '0.00', '100.00', '397.00', '96.00', '0.00', '598.00', '', 'Thursday, March 26, 2020', '34', 1);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (91, 815830, 'H/10/16/03/00326', 'IPD', 'CB Health Insurance', '4', '10', '16', 'M', '30', 1, 2012, '', 'No', '2012-1-7', NULL, NULL, '5.00', '0.00', '0.00', '200.00', '419.00', '264.00', '150.00', '1038.00', '', 'Thursday, March 26, 2020', '34', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (92, 836457, 'K/10/16/11/00841', 'OPD', 'CB Health Insurance', '4', '10', '16', 'M', '58', 3, 2012, '', 'No', '2012-3-3', NULL, NULL, '5.00', '63.00', '0.00', '0.00', '21.00', '0.00', '80.00', '169.00', '', 'Thursday, March 26, 2020', '36', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (93, 156893, 'H/10/01/06/01540', 'OPD', 'CB Health Insurance', '4', '10', '01', 'F', '63', 6, 2012, '', 'No', '2012-6-6', NULL, NULL, '0.00', '0.00', '0.00', '0.00', '155.00', '0.00', '0.00', '155.00', NULL, 'Tuesday, April 21, 2020', '4', 0);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (95, 1313, 'K/10/06/1215/06', 'OPD', 'CB Health Insurance', '4', '10', '06', 'M', '13', 11, 2013, '', 'No', '2013-11-2', NULL, NULL, '5.00', '58.00', '0.00', '0.00', '275.00', '0.00', '0.00', '338.00', '', 'Sunday, July 05, 2020', '3', 1);
INSERT INTO `treatment` (`encounter_id`, `mrn_id`, `CBHI_code`, `encounter`, `agreement`, `region`, `zone`, `woreda`, `sex`, `age`, `month`, `year`, `diagniss`, `paid`, `Date_of_service`, `outcome`, `reason`, `card`, `lab`, `Imaging`, `surgery`, `drugs`, `Bed_fee`, `other`, `total`, `remark`, `cdate`, `user`, `edited`) VALUES (96, 1313, 'K/10/06/1215/06', 'OPD', 'CB Health Insurance', '4', '10', '06', 'M', '13', 13, 2013, '', 'No', '2013-13-4', NULL, NULL, '0.00', '37.00', '0.00', '0.00', '163.50', '0.00', '0.00', '200.50', '', 'Sunday, July 05, 2020', '3', 1);


#
# TABLE STRUCTURE FOR: user_type
#

DROP TABLE IF EXISTS `user_type`;

CREATE TABLE `user_type` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `user_type` (`role_id`, `role`) VALUES (1, 'Super_admin');
INSERT INTO `user_type` (`role_id`, `role`) VALUES (2, 'Admin');
INSERT INTO `user_type` (`role_id`, `role`) VALUES (3, 'Head');
INSERT INTO `user_type` (`role_id`, `role`) VALUES (4, 'User');
INSERT INTO `user_type` (`role_id`, `role`) VALUES (5, 'Org');


#
# TABLE STRUCTURE FOR: woreda
#

DROP TABLE IF EXISTS `woreda`;

CREATE TABLE `woreda` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `woreda_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreemenrt_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (1, 'D01', 'ጀማ ከተማ ሠ/ማ/ጉዳይ ጽ/ቤት', '10', '6', 'Health Care finance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (2, 'D02', 'ሸቤ ሶምቦ ወረዳ ', '10', '6', 'Health Care finance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (3, 'D03', 'መኮ ወረዳ ሠ/ማ/ጉዳይ ጽ/ቤት', '19', '6', 'Health Care finance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (4, 'D04', 'Abobo District', '003', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (5, 'D05', 'Dimma District', '003', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (6, 'D06', 'Gog District', '003', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (7, 'D07', 'Jor District', '003', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (8, 'D08', 'Etang special District', '001', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (9, 'D09', 'Godare District', '001', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (10, 'D10', 'Mengesh District', '001', '9', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (11, '08', 'ሊሙ ሰቃ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (12, '06', 'ሊሙ ኮሳ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (13, '10', 'ጢሮ አፈታ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (14, '11', 'ሠነንጠማ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (15, '07', 'ዴዶ ወረደዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (16, '09', 'ሠቃ ጨቆርሳ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (17, '15', 'መንቾ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (18, '10', 'አሞ ናዳ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (19, '03', 'ጉማይ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (20, '04', 'ቀርሳ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (21, '01', 'ጌራ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (22, '16', 'ጮራ ቦቶር ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (23, 'D12', 'ኦሞቢየም ጤ/መድህን ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (24, '02', 'ጉማ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (25, '05', 'ማና ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (26, '12', 'ሰኮሩ ወረዳ', '10', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (27, '01', 'ቦረቻ ወረዳ', '19', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (28, '06', 'በደሌ ከተማ', '19', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (29, '05', 'ገቺ ወረዳ/ጤ/መ/ኢ', '19', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (30, '02', 'ደዴሳ ወረዳ ጤ/መ/ኢ', '19', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (31, 'D13', 'ጮራ ወረዳ ጤ/መ/ኢ', '19', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (32, 'D14', 'ጨዋቃ ወረዳ ጤ/መ/ኢ', '19', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (33, 'D15', ' ሆሩሙ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (34, 'D16', 'ያዩ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (35, 'D17', ' ቢኖ ኖፃ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (36, 'D18', ' አሌ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (37, 'D19', ' ዲዶ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (38, 'D20', ' መቱ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (39, 'D21', ' ዳሪሙ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (40, '03', ' ቡሬ ወረዳ ጤ/መ/ኢ', '09', '6', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (41, 'D22', ' ጊምቦ ወረዳ ጤ/መ/ኢ', '21', '11', 'Health Insurance');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (42, 'D23', ' ጀማ ዩኒ/የተማሪወዎች አገልግሎት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (43, 'D24', ' ጀማ ዩኒ/ጤና ሳይንስ ኮሌጅ', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (44, 'D25', 'ቲቢ ግሪን ኮፊ አ/ማ', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (45, 'JU-employee', 'ጀማ ዩኒ/የቀሚ ሰራተኞች', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (46, 'Agri', 'ጀማ ዩኒ/ግብ/እን/ህክምና ኮሌጅ', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (47, 'JIT', 'ጀማ ዩኒ/ቴክ/ኢንስቲትዩት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (48, 'D29', 'ጀማ ከተማ ማረሚያ ቤቶች አስተዳደር', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (49, 'D30', 'ቦንጋ ማረሚያ ቤቶች አስተዳደር', '21', '11', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (50, 'D31', 'ጀማ ከተማ አዉቶቢስ አገልግሎት ድርጅት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (51, 'D32', 'ሊሙ ቡና እርሻ ልማት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (52, 'D33', 'አርጆ ደዴሳ ስካር ልማት ፈብሪካ', '19', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (53, 'D34', 'የስደተኞች ከስደት ተመላሽ ድርጅት', '002', '9', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (54, 'D35', '  ግልገል ግቤ ቁ-1 ሃይል ማ/ጣቢያ', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (55, 'D36', 'Salini-impregilo S.P.A Koysha Hydroelectric pro', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (56, 'D36', 'Gambella MSF Spain', '002', '9', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (57, 'D37', 'Gambella MSF Holland', '002', '9', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (58, 'D38', 'በበቃ ቡና እርሻ ልማት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (59, 'D39', 'ቲፒ ቡና እርሻ ልማት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (60, 'CBE-Main', 'ኢትዮጲያ ንግድ ባንክ አብይ ቅ/ፍ', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (61, 'ጅ/አርፖርት/ድ', 'ጀማ ኤርፖርቶች ድርጅት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (62, 'D42', 'የኢት/ኤሌ/ አገልግሎት ምእራብ ሪጅን', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (63, 'ጎእልምድ', 'ጉጀብ እርሻ ልማት ድርጅት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (64, 'D44', 'አዲስ ኪዳን ቤተ/የህፃነናት ፕሮጀክት', '10', '6', 'Credit Service');
INSERT INTO `woreda` (`district_id`, `woreda_id`, `name`, `section_id`, `class_id`, `agreemenrt_type`) VALUES (65, 'JUSH', 'ጅማ ማድካል ሰንተር', '10', '6', 'Credit Service');


#
# TABLE STRUCTURE FOR: year
#

DROP TABLE IF EXISTS `year`;

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `max_year` varchar(20) NOT NULL,
  `min_year` varchar(30) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `year` (`year_id`, `max_year`, `min_year`) VALUES (1, '2013', '2012');


#
# TABLE STRUCTURE FOR: zones
#

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `section_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`section_id`),
  KEY `section_id` (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('001', 'Mezhenger', '9');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('002', 'Gambela town', '9');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('003', 'Anyuake Zone', '9');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('004', 'Nuwer Zone', '9');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('09', 'Elibabora', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('1', 'East Harerge', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('10', 'Jimma ', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('11', 'West Wollega', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('12', 'North  Gonder Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('13', 'East Gojam Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('14', 'West Gojam Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('15', 'Kemisie Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('16', 'Gujji Zone', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('17', 'South Shewa Zone', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('18', ' West Shewa Zone', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('19', 'Buno Bedele', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('2', 'West Harerge', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('20', 'East Shewa Zone', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('21', 'Keffa Zone', '11');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('22', 'Gurage Zone', '11');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('23', 'Wollayeta Zone', '11');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('24', 'Selte Zone', '11');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('3', 'Bale Zone', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('4', 'North Shewa Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('5', 'South Wollo Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('6', 'North Wollo Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('7', 'South Gonder Zone', '5');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('8', 'Arsi Zone', '6');
INSERT INTO `zones` (`section_id`, `name`, `class_id`) VALUES ('9', 'East Wollega Zone', '6');


