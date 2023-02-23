CREATE DATABASE IF NOT EXISTS ims_db;

USE ims_db;

DROP TABLE IF EXISTS admin;

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
  `login_attempts` int(11) DEFAULT '0',
  PRIMARY KEY (`admin_id`),
  KEY `date_of_join` (`date_of_join`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO admin VALUES("3","SEID MOHAMMED ","seidm9815@gmail.com","99297b16826d4f1f47e1bac452455ba7","Sunday, October 27, 2019","Male","0917638874","Super_admin","11/06/2020 18:48:51","11/06/2020 18:38:18","1","24683","yes","3","english","blue","left-to-right","0");
INSERT INTO admin VALUES("4","Abdilbasit   Mohammed","abdilbasit@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Monday, January 20, 2020","Male","0917140010","Admin","04/21/2020 11:59:14","04/21/2020 13:47:00","0","235988","yes","3","english","default","left-to-right","0");
INSERT INTO admin VALUES("5","Abdusemed Ababiya","abdababiya@gmail.com","311eba6dada049960e16974e652ef134","Monday, January 20, 2020","Male","0917796529","Admin","10/27/2020 10:23:11","10/27/2020 10:35:01","0","945257","yes","3","english","green","left-to-right","0");
INSERT INTO admin VALUES("6","Eliyas  Diriba","eliyas@ju.edu.et","fbbe02c6bb6e8f1c615c2f2ade3e1f08","Monday, January 20, 2020","Male","0919352512","Admin","10/27/2020 08:43:35","10/27/2020 08:44:00","0","360270","yes","3","english","black","left-to-right","0");
INSERT INTO admin VALUES("11","Test Admin","alemayehu@ju.edu.et","33ceb07bf4eeb3da587e268d663aba1a","Saturday, February 01, 2020","Male","09854742","Head","11/06/2020 08:51:30","11/06/2020 08:58:59","0","444877","yes","self","english","blue","","0");
INSERT INTO admin VALUES("12","Gitme  Berhanu","gitme@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Tuesday, February 11, 2020","Male","0900000000","Admin","10/22/2020 10:36:33","10/22/2020 10:38:49","0","458262","yes","3","","","","0");
INSERT INTO admin VALUES("34","Yakob  Mubarek","jacobleli653@gmail.com","199ca96b820b8c25326244b71839e4b0"," Wednesday, February 26, 2020","Male","0917061524","User","10/26/2020 12:01:50","10/26/2020 14:42:50","0","315359","yes","self","","","","0");
INSERT INTO admin VALUES("35","Henuk  Mecha","henuk@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Monday, March 16, 2020","Male","","Org","10/04/2020 19:22:46","10/04/2020 19:23:17","0","627300","yes","3","","","","0");
INSERT INTO admin VALUES("36","Alemayehu  Wondimehu","alemayehumekonnen@gmail.com","ea57060c28a877982997edd6a4aacbe1"," Wednesday, March 25, 2020","Male","0917716863","Head","10/23/2020 07:04:36","10/23/2020 07:18:58","0","347967","yes","3","","","","0");
INSERT INTO admin VALUES("42","DULA  BORU","dula.boru@ju.edu.et","91dc4fd57f50ac905084fc6f4abc4975"," Tuesday, October 06, 2020","Male","","Admin","10/19/2020 13:16:35","10/19/2020 13:19:54","0","260224","yes","3","","","","0");
INSERT INTO admin VALUES("43","SERKALEM  GEBERA","serkalem@ju.edu.et","18dcb0929987319bcb41e933e23c4a4f"," Monday, October 12, 2020","Female","","User","10/27/2020 13:55:06","10/27/2020 10:42:44","1","872940","yes","self","","","","0");
INSERT INTO admin VALUES("44","FIKIRTE  HORDOFA","fikirte@ju.edu.et","9a4fc8ce37d96fb7d8bb1b0c7cf606aa"," Monday, October 12, 2020","Female","0917822234","User","10/27/2020 13:58:33","10/27/2020 10:05:42","1","371841","yes","self","","","","0");
INSERT INTO admin VALUES("45","FIREHWET  MIDEKSA","firehwet@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Monday, October 12, 2020","Female","0945030018","User","11/03/2020 19:27:47","10/27/2020 10:43:07","1","738572","yes","3","","","","0");
INSERT INTO admin VALUES("46","MEBRATE  HAILE","mebizuye@gmail.com","48bfd121ed804b10f9d8e8fd480c75c9"," Monday, October 12, 2020","Female","0953080813","Admin","10/27/2020 13:56:49","10/27/2020 08:14:58","1","846051","yes","3","","","","0");
INSERT INTO admin VALUES("47","ENDALE  BEZU","endale@ju.edu.et","74f1a11300c8699eff03877ef3f2507c","Monday, October 12, 2020","Male","0924413216","Admin","10/22/2020 08:24:28","10/22/2020 08:27:17","0","62657","yes","46","","","","0");
INSERT INTO admin VALUES("48","SHAMSIYA  SIRAJ","shamsiya@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Monday, October 12, 2020","Female","0945052798","User","10/27/2020 13:56:44","10/27/2020 10:42:33","1","239240","yes","46","","","","0");
INSERT INTO admin VALUES("50","KIBRU  DEGIFE","kibru@ju.edu.et","141a8f61b3b6c6a20364632f33135eea","Monday, October 12, 2020","Male","0917885512","User","10/25/2020 12:43:32","10/25/2020 15:45:55","0","805135","yes","46","","","","0");
INSERT INTO admin VALUES("52","Birhane Hailu","birhane@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Monday, October 12, 2020","Female","0917587605","User","10/26/2020 18:43:25","10/26/2020 18:43:30","0","103941","yes","46","","","","0");
INSERT INTO admin VALUES("53","ETENESH  NEGASH","etenesh@ju.edu.et","e10adc3949ba59abbe56e057f20f883e"," Tuesday, October 13, 2020","Female","","User","10/27/2020 04:29:57","10/27/2020 04:41:01","0","360692","yes","self","","","","0");
INSERT INTO admin VALUES("55","GENET  GEBREEGIZIYABIHER","genet@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Friday, October 16, 2020","Female","0917064911","User","10/26/2020 08:19:12","10/26/2020 10:50:59","0","900883","yes","46","","","","0");
INSERT INTO admin VALUES("56","DR AHMED  AHMED","ahmed759602@gmail.com","092178478b5b7f2ad4c5531604efa95e","Friday, October 16, 2020","Male","","Head","10/27/2020 17:14:15","10/27/2020 17:38:32","0","799662","yes","3","","","","0");
INSERT INTO admin VALUES("57","ZENASH  SOLOMON","zinash@ju.edu.et","808510806d9c505ec2a4d7425056382d","Friday, October 16, 2020","Female","","Head","10/16/2020 15:39:44","10/16/2020 15:52:51","0","296167","yes","3","","","","0");
INSERT INTO admin VALUES("58","JATENI  HALAKE","jateni.halake@ju.edu.et","0370b9313d21ab36e7cdd6efd83af6c0"," Wednesday, October 21, 2020","Male","","Admin","10/21/2020 16:11:10","10/21/2020 16:13:18","0","654862","yes","self","","","","0");
INSERT INTO admin VALUES("59","SEID  MOHAMMED","seid@ju.edu.et","092178478b5b7f2ad4c5531604efa95e","Sunday, October 25, 2020","Male","0985192541","Super_admin","10/25/2020 12:12:32","10/25/2020 12:13:04","0","728308","yes","3","","","","0");



DROP TABLE IF EXISTS agreement;

CREATE TABLE `agreement` (
  `agreement_id` int(11) NOT NULL AUTO_INCREMENT,
  `agreement` varchar(100) NOT NULL,
  PRIMARY KEY (`agreement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO agreement VALUES("1","CB Health Insurance");
INSERT INTO agreement VALUES("2","Health Care finance");
INSERT INTO agreement VALUES("3","Credit Service");



DROP TABLE IF EXISTS beneficiary;

CREATE TABLE `beneficiary` (
  `beneficiary_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `cbhi` varchar(20) NOT NULL,
  `family_code` varchar(30) NOT NULL,
  `region` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `woreda` varchar(11) NOT NULL,
  `indigent` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user` varchar(30) NOT NULL,
  `full_code` varchar(50) NOT NULL,
  PRIMARY KEY (`beneficiary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS ci_sessions;

CREATE TABLE `ci_sessions` (
  `try_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (`try_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

INSERT INTO ci_sessions VALUES("12","bcdaac9781ec1ca7e9bde62ef08c5bf0a35cf283","127.0.0.1","1603900783","__ci_last_regenerate|i:1603900489;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("13","995a935a3608912baf524e4c5c7f9d2e23b35e5a","127.0.0.1","1603900843","__ci_last_regenerate|i:1603900799;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("14","dd79af15b30f20143b3463259f0c955f2b8b3a61","127.0.0.1","1603901652","__ci_last_regenerate|i:1603901271;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("16","7859b89290bd3c7f341a19d38c40473a617bbb85","127.0.0.1","1603902234","__ci_last_regenerate|i:1603901941;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("17","961ae48716fced2ec1a2bd4f41ae22a1e28b1853","127.0.0.1","1603903296","__ci_last_regenerate|i:1603902587;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("18","e2fefe0c8a042c7038c6c90e701dbb84b6c9eebe","127.0.0.1","1603903624","__ci_last_regenerate|i:1603903302;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("19","acd25a8ac5f0dde1b7cf16d7bafba9e0d36d96fc","127.0.0.1","1603904117","__ci_last_regenerate|i:1603903738;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("20","a58cdf9a7126309f4ffe9e6a67f707382412074a","127.0.0.1","1603904151","__ci_last_regenerate|i:1603904139;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("21","3b4dc13afe43ea0a8ee4aa9629caccfbf0069578","127.0.0.1","1603905509","__ci_last_regenerate|i:1603905200;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("22","117e82f30855c98ae128caf3e5649f224aa0f8f1","127.0.0.1","1603906076","__ci_last_regenerate|i:1603905515;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("23","5414cf4a5ed046b9b65804150193c31b56908e87","127.0.0.1","1603906394","__ci_last_regenerate|i:1603906111;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("24","28ee2e497c68c152bb5eef9be2aef13a8623c6a7","127.0.0.1","1603907327","__ci_last_regenerate|i:1603907038;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("25","a7d1b359acc5c7621cf39ee047667521d9c357ef","127.0.0.1","1603907832","__ci_last_regenerate|i:1603907647;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("27","f53dd9f411a868fa863bef1922478f242c873c95","127.0.0.1","1603908254","__ci_last_regenerate|i:1603907997;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("28","cac9b86622c0c44a757f4fcbfc9d0c1c43dca0f6","127.0.0.1","1603910421","__ci_last_regenerate|i:1603910126;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("29","fdcb292242041626eb042e926419d389fcddad2a","127.0.0.1","1603910706","__ci_last_regenerate|i:1603910445;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("30","1c90aea8da80df22c727b65a6646b4782088313d","127.0.0.1","1603910960","__ci_last_regenerate|i:1603910775;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";flash_message|s:25:\"Data updated successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"new\";}");
INSERT INTO ci_sessions VALUES("31","fe7a0470f442e711db37b070c705edf349f1c17a","127.0.0.1","1603911476","__ci_last_regenerate|i:1603911227;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("32","3fe96a0ed16806cdbc48840e604fbd1c7472ab24","127.0.0.1","1603912021","__ci_last_regenerate|i:1603911868;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("33","55b7cc2ebef64531203e4e9cc168cb669ec04e2f","127.0.0.1","1603912978","__ci_last_regenerate|i:1603912661;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("34","bf64d3b3b2109c07d3d40edb50b731e9d79b5225","127.0.0.1","1603913344","__ci_last_regenerate|i:1603913064;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("35","769828889c07813ffce397834b7a935028b7d3da","127.0.0.1","1603913962","__ci_last_regenerate|i:1603913673;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("36","1b9f1977bfc6a1563e3a3f0f6007d2d0b0ed4dfd","127.0.0.1","1603914304","__ci_last_regenerate|i:1603913994;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("38","b1eac7fbf4a0bf5e06bc476ed3118cc6ffca3d30","127.0.0.1","1603914434","__ci_last_regenerate|i:1603914434;");
INSERT INTO ci_sessions VALUES("39","67d0f4bc85e51783453c50639ee0b5da2029061f","127.0.0.1","1603997590","__ci_last_regenerate|i:1603997371;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("40","05b7242aa40e7a965b466264940545db9a59acb8","127.0.0.1","1603998030","__ci_last_regenerate|i:1603997747;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("41","0e54f0c808b40f090d63edfc913e3c4cd21aa4ec","127.0.0.1","1603998428","__ci_last_regenerate|i:1603998175;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("42","f9196cc9a29dff3026d0ebc95cd860f9d77010bf","127.0.0.1","1603998904","__ci_last_regenerate|i:1603998685;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("43","b29f2fd91475003619418764f0c435ec6d996faa","127.0.0.1","1603999264","__ci_last_regenerate|i:1603998995;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("44","cb187685cb61c8194df472f73be809e7042dfbbc","127.0.0.1","1603999362","__ci_last_regenerate|i:1603999305;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("45","f98e71dc77d5d3b56d24eac679e86837f3248eb6","127.0.0.1","1603999845","__ci_last_regenerate|i:1603999616;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("46","56c16649a6121daf3e4aa27de6c1fc06c50a9f2a","127.0.0.1","1604000230","__ci_last_regenerate|i:1603999967;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("47","4b24de0c58e4254edab63f2d81cbd0d508a0831e","127.0.0.1","1604000758","__ci_last_regenerate|i:1604000489;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("48","66ca1bd743815a1ee55fbc7f910c18731dbd6a40","127.0.0.1","1604001370","__ci_last_regenerate|i:1604001026;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("49","aa41d8b859672bdac00b262b7fd7cd68d6853a00","127.0.0.1","1604001860","__ci_last_regenerate|i:1604001860;");
INSERT INTO ci_sessions VALUES("50","5071a6d5d9f68b20598a0788a4c2404e9d69c679","127.0.0.1","1604084124","__ci_last_regenerate|i:1604083900;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("51","fb4de8260eae6dae5e47686079092bcc7d92550b","127.0.0.1","1604085002","__ci_last_regenerate|i:1604084785;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("52","96c49f8b03356511ee0de30dfed9c3099eb83e44","127.0.0.1","1604085226","__ci_last_regenerate|i:1604085089;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("53","8bb1e83f9dc5756999faba39af871a402fbef63e","127.0.0.1","1604085760","__ci_last_regenerate|i:1604085490;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("55","1feda919b58f2f9c8919af9f1c0b73815e4cd0a7","127.0.0.1","1604086082","__ci_last_regenerate|i:1604086082;");
INSERT INTO ci_sessions VALUES("57","3e08f361fa7ce6e086f3f7a3e83a5b8cca9b6c8c","127.0.0.1","1604431926","__ci_last_regenerate|i:1604431656;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("58","7c08d4bbe32a7a08672a372a7a9dd0ff821a2ac4","127.0.0.1","1604432283","__ci_last_regenerate|i:1604432011;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("59","7b95aeadd2545a69228dfaa35ca4cdbad87475a1","127.0.0.1","1604432406","__ci_last_regenerate|i:1604432356;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("60","7b4a50b450d8fab2cad5e58508d952d94233edd1","127.0.0.1","1604432973","__ci_last_regenerate|i:1604432687;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("61","6c48e8681b3f528c7c83f68e9e1155a07a45aea3","127.0.0.1","1604433321","__ci_last_regenerate|i:1604433156;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;flash_message|s:25:\"Data updated successfully\";__ci_vars|a:1:{s:13:\"flash_message\";s:3:\"old\";}");
INSERT INTO ci_sessions VALUES("62","fff1d212a9790cb134a0017e3e7e73a480692884","127.0.0.1","1604434034","__ci_last_regenerate|i:1604433792;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("63","f87dda58270a2de8dfffdfed4772916fa12303ec","127.0.0.1","1604434405","__ci_last_regenerate|i:1604434137;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("64","f2f21b2f2abb290b3e46a35446ad0dcbc60cd1ed","127.0.0.1","1604434693","__ci_last_regenerate|i:1604434441;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("65","a86ad72b221b1ea093b5771d7b039eb1d98eafd7","127.0.0.1","1604434846","__ci_last_regenerate|i:1604434745;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("66","752bb9f8def958f718c31e5d206d3e197409e787","127.0.0.1","1604435200","__ci_last_regenerate|i:1604435200;admin_login|s:1:\"1\";admin_id|s:2:\"45\";login_user_id|s:2:\"45\";name|s:17:\"FIREHWET  MIDEKSA\";login_type|s:5:\"admin\";text_align|N;skin_colour|N;language|N;");
INSERT INTO ci_sessions VALUES("68","d70d0ca378ba387d0ec87ca7b04a996779cd3213","127.0.0.1","1604652929","__ci_last_regenerate|i:1604652675;admin_login|s:1:\"1\";admin_id|s:2:\"11\";login_user_id|s:2:\"11\";name|s:10:\"Test Admin\";login_type|s:5:\"admin\";text_align|N;skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("70","1a4b9ffb8064fca595fb0ad3bdd4942b37a1568d","127.0.0.1","1604653139","__ci_last_regenerate|i:1604653139;");
INSERT INTO ci_sessions VALUES("71","2a7c5b982c43935c46ab28cb064b96a4a645da30","127.0.0.1","1604686884","__ci_last_regenerate|i:1604686631;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("72","2e6371cb37a44577443acc957a88361b8bc27eff","127.0.0.1","1604687231","__ci_last_regenerate|i:1604686932;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("73","a746f2f8f331c374dd46c5e46cd0e7a3f2b042db","127.0.0.1","1604687291","__ci_last_regenerate|i:1604687257;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("74","9a579cd089f2b93389ee15ee6e1e6fce6f5f5718","127.0.0.1","1604688531","__ci_last_regenerate|i:1604687899;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("75","c069b4799161fba133f72db66fb0b2c8c1d7db8d","127.0.0.1","1604688653","__ci_last_regenerate|i:1604688532;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";backup_message|s:15:\"Backup Restored\";__ci_vars|a:1:{s:14:\"backup_message\";s:3:\"old\";}");
INSERT INTO ci_sessions VALUES("76","2ab7b4914dc76e7a62ce5294405833d581d91c1f","127.0.0.1","1604688954","__ci_last_regenerate|i:1604688872;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("77","779b1bacdb1a9c5924bca7b17a42a693d8f223e9","127.0.0.1","1604689298","__ci_last_regenerate|i:1604689287;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("78","5de93bb0b128bb792d323a4c4300ffe71342a2f2","127.0.0.1","1604689299","__ci_last_regenerate|i:1604689298;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("79","957ea533e44c89494ae6751eaff9f783c77e6166","127.0.0.1","1604689415","__ci_last_regenerate|i:1604689299;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";backup_message|s:15:\"Backup Restored\";__ci_vars|a:1:{s:14:\"backup_message\";s:3:\"old\";}");
INSERT INTO ci_sessions VALUES("80","1476cae02bb05bacc04bfcdab22c87ab82c26825","127.0.0.1","1604689819","__ci_last_regenerate|i:1604689773;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";");
INSERT INTO ci_sessions VALUES("81","439435cc026d74d2dcf6f56c0f5b8093e9b49d0e","127.0.0.1","1604690209","__ci_last_regenerate|i:1604690122;admin_login|s:1:\"1\";admin_id|s:1:\"3\";login_user_id|s:1:\"3\";name|s:14:\"SEID MOHAMMED \";login_type|s:5:\"admin\";text_align|s:13:\"left-to-right\";skin_colour|s:4:\"blue\";language|s:7:\"english\";backup_message|s:15:\"Backup Restored\";__ci_vars|a:1:{s:14:\"backup_message\";s:3:\"new\";}");



DROP TABLE IF EXISTS class;

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO class VALUES("1","Tegray region","Ethiopiai\'s most northerly region is Tigray, which covers 80,000 square km and is administered from its capital city of Mekele. The population totals more than 5.06 million, of which 95% are Orthodox Christian and the remainder Muslim. The Tigraian people, the dominant ethnic group, are agriculturists who also herd cattle and other livestock.");
INSERT INTO class VALUES("2","Afar Region","Although it covers a vast area of 270,000 square km running up the border with Djibouti and Eritrea, Afar region is arid, thinly populated and almost bereft of large towns. According to July 2013 estimates of the Central Statistical Agency of Ethiopia, the total population of Afar is 1.65 million, of which less than 10% live in urban areas. ");
INSERT INTO class VALUES("3","Amahara region","Governed from its large modern capital city of Bahir Dar, on the southern tip of Lake Tana, Amhara covers an area of 170,752 square km and supports a population estimated at 19.2 million in 2013. Although the substantial cities of Bahr Dar, Gondar and Dessie all lie within Amhara, roughly 90% of the region\'s population is rural.");
INSERT INTO class VALUES("4","Oromia","The vast region of oromia covers an area of more than 350,000 square km (almost one-third of the country) and supports a correspondingly large population of over 32.2 million people. Roughly 85% of the regional population is Oromo, and another 10% Amhara. Aside from the 5% who still practise animist or other traditional religions, the regional split between Christian and Muslim is as good as even.");
INSERT INTO class VALUES("5","Somalia region","Named for the distinctive Somali people, who comprise 95% of its population, this is the second largest of Ethiopia\'s regions, covering an area of 250,000 square km along the Somali border. Much of the region is desert or semi-desert, its vast area, the total population is around 5.3 million.");
INSERT INTO class VALUES("6","Benishangumuz","The most obscure of Ethiopia\'s regions, practically never visited by tourists, is Benishangul-Gumuz, which runs for about 2,000km along the Sudanese border to the east of Amhara, but is on average no more than 200km. Relatively low-lying but with an annual rainfall in excess of 1,000mm, this remote and poorly developed area is characterised by a hot, humid climate. ");
INSERT INTO class VALUES("7","SNNP Region","Although it smells like the handiwork of an uninspired committee, the name of this 112,323 square km region does provide an accurate reflection of its incredible cultural diversity. The regional population of roughly 17.9 million represents some 45 different ethino-lingustic groups, of which none comprises 20% of the regional population, and only the Sidamo, Gurage and Walaita make up more than 10% each. ");
INSERT INTO class VALUES("8","Gambela","The small state, which covers an area of 25,274 square km along the southern Sudanese border, essentially comprises lush, humid lowland draining into the Baro River, an important tributary of the NileRiver. Relatively remote and undeveloped, Gambella region supports a predominantly rural population of roughly 406,000 ethnically varied people.");
INSERT INTO class VALUES("9","Harari region","Consisting of the walled city of Harar and its immediate environs, Harari is essentially a modern revival of the autonomous city-state of Harar, which was one of the most powerful regional political entities from the 16th until the late 19th century, when it was co-opted into Abyssinia by Menelik II. The state covers an area of roughly 350 square km and supports a population estimated at 215,000, of which some 131,000 are city dwellers.");
INSERT INTO class VALUES("10","Addis Abeba","   Addis Ababa lies at an elevation of 2,355 metres (7,726 ft) and is a grassland biome, located at 9°1′48″N 38°44′24″E.[19] The city lies at the foot of Mount Entoto and forms part of the watershed for the Awash. From its lowest point, around Bole International Airport, at 2,326 metres (7,631 ft) above sea level in the southern periphery, Addis Ababa rises to over 3,000 metres (9,800 ft) in the Entoto Mountains to the north.");



DROP TABLE IF EXISTS complain;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS copyright;

CREATE TABLE `copyright` (
  `footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `footer` varchar(50) NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO copyright VALUES("2","JMC-ICT");



DROP TABLE IF EXISTS document;

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS enable_tbl;

CREATE TABLE `enable_tbl` (
  `enable_id` int(11) NOT NULL AUTO_INCREMENT,
  `signup` int(11) NOT NULL,
  `survey` int(11) NOT NULL,
  PRIMARY KEY (`enable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO enable_tbl VALUES("1","1","1");



DROP TABLE IF EXISTS encounter;

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




DROP TABLE IF EXISTS exam;

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE IF EXISTS facility;

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

INSERT INTO facility VALUES("1","Jimma Medical Center","Hospital","15000000","Public","7000000","8000000","4524","34132","32123","2244","224","2441","242","2431","2421","4214","2244","4545","4565","454","45454");



DROP TABLE IF EXISTS family;

CREATE TABLE `family` (
  `family_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `family_code` varchar(30) NOT NULL,
  `region` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `woreda` varchar(11) NOT NULL,
  `indigent` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `kebele` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `full_code` varchar(50) NOT NULL,
  PRIMARY KEY (`family_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS fiscal_year;

CREATE TABLE `fiscal_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO fiscal_year VALUES("1","2013");



DROP TABLE IF EXISTS indigent;

CREATE TABLE `indigent` (
  `indigent_id` int(11) NOT NULL AUTO_INCREMENT,
  `agreement_id` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`indigent_id`),
  KEY `agreement_id` (`agreement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO indigent VALUES("1","1","H");
INSERT INTO indigent VALUES("2","1","K");
INSERT INTO indigent VALUES("3","3","Employee");
INSERT INTO indigent VALUES("4","3","Student");
INSERT INTO indigent VALUES("5","3","Prisoner");
INSERT INTO indigent VALUES("6","2","Letter");
INSERT INTO indigent VALUES("7","3","Refuge");
INSERT INTO indigent VALUES("10","1","K/F/C/GMB");



DROP TABLE IF EXISTS kebele;

CREATE TABLE `kebele` (
  `kebele_id` int(11) NOT NULL AUTO_INCREMENT,
  `kebele_code` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `region_id` varchar(10) NOT NULL,
  `zone_id` varchar(10) NOT NULL,
  `woreda_id` varchar(10) NOT NULL,
  PRIMARY KEY (`kebele_id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

INSERT INTO kebele VALUES("17","02","Saqqaa 02","4","10","09");
INSERT INTO kebele VALUES("18","01","Saqqaa 01","4","10","09");
INSERT INTO kebele VALUES("19","03","G Bosoo","4","10","09");
INSERT INTO kebele VALUES("20","04","U Qocee","4","10","09");
INSERT INTO kebele VALUES("21","05","Meexxii","4","10","09");
INSERT INTO kebele VALUES("22","06","G Ulaa Ukkee","4","10","09");
INSERT INTO kebele VALUES("23","07","Shashamane","4","10","09");
INSERT INTO kebele VALUES("24","08","B Qacamaa","4","10","09");
INSERT INTO kebele VALUES("25","09","Allaggaa","4","10","09");
INSERT INTO kebele VALUES("26","10","Kusaro","4","10","09");
INSERT INTO kebele VALUES("27","11","D Gibee","4","10","09");
INSERT INTO kebele VALUES("28","12","D Yaayyaa","4","10","09");
INSERT INTO kebele VALUES("29","13","B Roggee","4","10","09");
INSERT INTO kebele VALUES("30","14","S Genneffoo","4","10","09");
INSERT INTO kebele VALUES("31","16","W Madaaluu","4","10","09");
INSERT INTO kebele VALUES("32","15","I Tunjoo","4","10","09");
INSERT INTO kebele VALUES("33","17","X Wachoo","4","10","09");
INSERT INTO kebele VALUES("34","18","A Suufaa","4","10","09");
INSERT INTO kebele VALUES("35","19","I Togobee","4","10","09");
INSERT INTO kebele VALUES("36","20","B Guddoo","4","10","09");
INSERT INTO kebele VALUES("37","21","D Qarsuu","4","10","09");
INSERT INTO kebele VALUES("38","22","B Tulii","4","10","09");
INSERT INTO kebele VALUES("39","23","U Buyyoo","4","10","09");
INSERT INTO kebele VALUES("40","24","Q Wacco","4","10","09");
INSERT INTO kebele VALUES("41","25","M Ushaanee","4","10","09");
INSERT INTO kebele VALUES("42","26","Nasee","4","10","09");
INSERT INTO kebele VALUES("43","27","Liilluu","4","10","09");
INSERT INTO kebele VALUES("44","28","G Dakkaa","4","10","09");
INSERT INTO kebele VALUES("45","29"," K Harrii","4","10","09");
INSERT INTO kebele VALUES("46","30","S Goroo","4","10","09");
INSERT INTO kebele VALUES("47","31","G Luccinee","4","10","09");
INSERT INTO kebele VALUES("48","32","S Qaaqee","4","10","09");
INSERT INTO kebele VALUES("49","33","B Keeraa ","4","10","09");
INSERT INTO kebele VALUES("50","34","D Shekkotaa","4","10","09");
INSERT INTO kebele VALUES("51","35","G Bakkee","4","10","09");
INSERT INTO kebele VALUES("52","36","G Sadan","4","10","09");
INSERT INTO kebele VALUES("53","01","Y/sokoru","4","10","12");
INSERT INTO kebele VALUES("54","02","G/kalta","4","10","12");
INSERT INTO kebele VALUES("55","03","Wengasho","4","10","12");
INSERT INTO kebele VALUES("56","04","Daaka","4","10","12");
INSERT INTO kebele VALUES("57","05","Gangal","4","10","12");
INSERT INTO kebele VALUES("58","06","Bagiso","4","10","12");
INSERT INTO kebele VALUES("59","07","Sokru","4","10","12");
INSERT INTO kebele VALUES("60","08","Danaba","4","10","12");
INSERT INTO kebele VALUES("61","09","Chopaa","4","10","12");
INSERT INTO kebele VALUES("62","10","Unkure","4","10","12");
INSERT INTO kebele VALUES("63","11","Walma","4","10","12");
INSERT INTO kebele VALUES("64","12","Boore","4","10","12");
INSERT INTO kebele VALUES("65","13","Caala","4","10","12");
INSERT INTO kebele VALUES("66","14","Ceeka","4","10","12");
INSERT INTO kebele VALUES("67","15","Barroo","4","10","12");
INSERT INTO kebele VALUES("68","16","Liban","4","10","12");
INSERT INTO kebele VALUES("69","17","Yabu","4","10","12");
INSERT INTO kebele VALUES("70","18","Adaama","4","10","12");
INSERT INTO kebele VALUES("71","19","Saqalga","4","10","12");
INSERT INTO kebele VALUES("72","20","Marara","4","10","12");
INSERT INTO kebele VALUES("73","21","Magaala Natri","4","10","12");
INSERT INTO kebele VALUES("74","22","Naatri Mancho","4","10","12");
INSERT INTO kebele VALUES("75","23","Ashee","4","10","12");
INSERT INTO kebele VALUES("76","24","Dobbii","4","10","12");
INSERT INTO kebele VALUES("77","25","Makan","4","10","12");
INSERT INTO kebele VALUES("78","26","S/Dikee","4","10","12");
INSERT INTO kebele VALUES("79","27","E/B/A/O","4","10","12");
INSERT INTO kebele VALUES("80","28","Gebjiro","4","10","12");
INSERT INTO kebele VALUES("81","29","Baecuma","4","10","12");
INSERT INTO kebele VALUES("82","30","Widayi","4","10","12");
INSERT INTO kebele VALUES("83","31","Sadeeqa","4","10","12");
INSERT INTO kebele VALUES("84","32","Andoode","4","10","12");
INSERT INTO kebele VALUES("85","33","Qumbi","4","10","12");
INSERT INTO kebele VALUES("86","34","T/sha","4","10","12");
INSERT INTO kebele VALUES("87","35","Qulaxa","4","10","12");
INSERT INTO kebele VALUES("88","36","H/qaqe","4","10","12");
INSERT INTO kebele VALUES("89","37","K/qaaqe","4","10","12");
INSERT INTO kebele VALUES("90","38","G/biifti","4","10","12");
INSERT INTO kebele VALUES("91","39","d/kobo","4","10","12");
INSERT INTO kebele VALUES("92","40","Abalti","4","10","12");
INSERT INTO kebele VALUES("93","41","Beede","4","10","12");
INSERT INTO kebele VALUES("94","42","A/bayi","4","10","12");
INSERT INTO kebele VALUES("95","43","Gibee","4","10","12");



DROP TABLE IF EXISTS language;

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci,
  `Amharic` longtext COLLATE utf8_unicode_ci,
  `Afaan_oromoo` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`phrase_id`),
  UNIQUE KEY `phrase` (`phrase`)
) ENGINE=MyISAM AUTO_INCREMENT=3446 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO language VALUES("1","login","Login","Login","");
INSERT INTO language VALUES("2","account_type","Account type","ተጠቃሚ አይነት","");
INSERT INTO language VALUES("4","teacher","User Accounts","ተጠቃሚዎች","");
INSERT INTO language VALUES("7","email","Email","Email","");
INSERT INTO language VALUES("8","password","Password","የሚስጥር ቁጥር","");
INSERT INTO language VALUES("9","forgot_password ?","Forgot password ?","የሚስጥር ቁጥር	ረሳህ","");
INSERT INTO language VALUES("10","reset_password","Reset password","የሚስጥር ቁጥር ቀይር","");
INSERT INTO language VALUES("11","reset","Reset","ቀይር","");
INSERT INTO language VALUES("12","admin_dashboard","Welcome admin page","እንካን ደህና መጡ","");
INSERT INTO language VALUES("13","account","My account","የኔ መለያ","");
INSERT INTO language VALUES("14","profile","Profile","ማህደር","");
INSERT INTO language VALUES("15","change_password","Change password","የሚስጥር ቁጥር ቀይር","");
INSERT INTO language VALUES("16","logout","Logout","ዘግተህ ውጣ","");
INSERT INTO language VALUES("17","panel","Panel","ገጽ","");
INSERT INTO language VALUES("19","dashboard","Dashboard","መነሻ ገዕ","");
INSERT INTO language VALUES("22","cbhi_no","CBHI #ID","የግለሰብ መለያ ቁጥር","");
INSERT INTO language VALUES("25","class","Insurer by Location","አድራሻ","");
INSERT INTO language VALUES("27","fname","Name of Beneficiary:","ሙሉ ስም","");
INSERT INTO language VALUES("34","username","Email","ኢ-ማል","");
INSERT INTO language VALUES("43","noticeboard-event","Noticeboard-event","ማስታዎቂያ ሰልድያ","");
INSERT INTO language VALUES("45","settings","Settings","መቼት","");
INSERT INTO language VALUES("46","system_settings","System settings","ሲስተም መቼት","");
INSERT INTO language VALUES("47","manage_language","Manage language","ቋንቋ አስትካክል","");
INSERT INTO language VALUES("48","backup_restore","Backup restore","ባክአፕ እና ሪስቶረ","");
INSERT INTO language VALUES("49","system_name","Integrated HCI System","Integrated HCI System","");
INSERT INTO language VALUES("51","manage_teacher","Manage Users","ማኔጅ ዩዘርስ","");
INSERT INTO language VALUES("52","noticeboard","Notice board","ማስታዎቂያ ሰልድያ","");
INSERT INTO language VALUES("53","language","English(USA)","አማርኛ","");
INSERT INTO language VALUES("54","backup","Backup","ባክአፕ","");
INSERT INTO language VALUES("55","calendar_schedule","Calendar schedule","ካላንደር","");
INSERT INTO language VALUES("56","select_a_class","Select a Region","ክልል ምርጥ","");
INSERT INTO language VALUES("57","insurance_payment ","Insurance Payment Information by service type","ክፍያ በአግልግሎት አይነት","");
INSERT INTO language VALUES("60","photo","Photo","ፎቶ","");
INSERT INTO language VALUES("62","personal_info","Patient Information","የግል መረጃ ዝርዝር","");
INSERT INTO language VALUES("63","options","Options","አማራጮች","");
INSERT INTO language VALUES("64","PatientByregion","Patient By region","ህሙማን በክልል","");
INSERT INTO language VALUES("66","edit","Edit","እንደገና አስተካክል","");
INSERT INTO language VALUES("67","delete","Delete","አጥፋ","");
INSERT INTO language VALUES("68","personal_profile","Personal profile","የግል ማህድር","");
INSERT INTO language VALUES("70","name","Full Name","ስም","");
INSERT INTO language VALUES("71","join_date","Date of Service Provided","አገልግሎት የተሰጠበት ቀን","");
INSERT INTO language VALUES("72","sex","Sex","ዖታ","");
INSERT INTO language VALUES("73","male","Male","ወንድ","");
INSERT INTO language VALUES("74","female","Female","ሰት","");
INSERT INTO language VALUES("77","phone","Phone","ስልክ ቁጥር","");
INSERT INTO language VALUES("82","add_teacher","Add User","መዝግብልኝ","");
INSERT INTO language VALUES("92","Add_new_user","Add new user","አድስ ተተቃሚ መዝግብ","");
INSERT INTO language VALUES("93","add","Add","መዝግብልኝ","");
INSERT INTO language VALUES("95","college","Region","ክልል","");
INSERT INTO language VALUES("97","add_model","Insurance Managment System(IMS)","ኢንሹራንስ ማነጅመንት ሲስትም","");
INSERT INTO language VALUES("98","personal_information","Patient Information","የህሙማን የግል መረጃ","");
INSERT INTO language VALUES("103","List_Regions","List Regions","የክልል ዝርዝሮች","");
INSERT INTO language VALUES("104","class_list","Region list","ክልሎች","");
INSERT INTO language VALUES("105","add_class","List of Regions","የክልል ዝርዝሮች","");
INSERT INTO language VALUES("106","class_name","Region name","ክልል ስም","");
INSERT INTO language VALUES("109","edit_class","Edit Region","እንደገና አስተካክል","");
INSERT INTO language VALUES("114","date","Date","ቀን","");
INSERT INTO language VALUES("115","department","Zone","ዞን","");
INSERT INTO language VALUES("117","role","Role","ሚና","");
INSERT INTO language VALUES("714","patient_information","Patient Information","የህሙማን መረጃ","");
INSERT INTO language VALUES("713","age","Age","ዕድማ","");
INSERT INTO language VALUES("726","Old case","Old case","ነባር ጉዳይ","");
INSERT INTO language VALUES("123","admin","Admin","አድሚን","");
INSERT INTO language VALUES("124","user","User","ተጠቃሚ","");
INSERT INTO language VALUES("126","woreda","Woreda","ወረዳ","");
INSERT INTO language VALUES("136","day","Day","ቀን","");
INSERT INTO language VALUES("143","title","Title","ርዕስ","");
INSERT INTO language VALUES("144","description","Description","መግልጫ","");
INSERT INTO language VALUES("146","status","Status","ሁናት","");
INSERT INTO language VALUES("742","kebele_code","Kebele Code","ቀበለ ኮድ","");
INSERT INTO language VALUES("162","available","Available","አለ","");
INSERT INTO language VALUES("163","unavailable","Unavailable","የለም","");
INSERT INTO language VALUES("172","manage_dormitory","Welcome to System configuration page","ሲስተም ማስተካካይስ ግዕ","");
INSERT INTO language VALUES("177","manage_noticeboard","Manage noticeboard","ማስታዎቂያዎች","");
INSERT INTO language VALUES("178","noticeboard_list","Noticeboard list","ማስታዎቂ ዝርዝር","");
INSERT INTO language VALUES("179","add_noticeboard","Add noticeboard","ማስታዎቂ መዝግብ","");
INSERT INTO language VALUES("180","notice","Notice","ማስታዎቂ","");
INSERT INTO language VALUES("181","add_notice","Add notice","ማስታዎቂ ጨምር","");
INSERT INTO language VALUES("182","edit_noticeboard","Edit noticeboard","ማስታዎቂ አስተካክል","");
INSERT INTO language VALUES("184","save","Save","መዝግብልኝ","");
INSERT INTO language VALUES("185","system_title","System title","ሲስተም ርዕስ","");
INSERT INTO language VALUES("186","paypal_email","Paypal email","የሲስተም ኢማል","");
INSERT INTO language VALUES("187","currency","Currency","ገንዘብ","");
INSERT INTO language VALUES("188","phrase_list","Phrase list","ሀረጎችዝርዝር","");
INSERT INTO language VALUES("189","add_phrase","Add phrase","ሀረጎች ጨምር","");
INSERT INTO language VALUES("190","add_language","Add language","ቋንቋ ጨምር","");
INSERT INTO language VALUES("191","phrase","Phrase","ሀረጎች","");
INSERT INTO language VALUES("192","manage_backup_restore","Manage backup restore","ባክኣፕ ሪስቶር","");
INSERT INTO language VALUES("193","restore","Restore","ሪስቶር","");
INSERT INTO language VALUES("198","all","All","ሁሉም","");
INSERT INTO language VALUES("199","upload_&_restore_from_backup","Upload & restore from backup","ባክአፕ ጫን","");
INSERT INTO language VALUES("200","manage_profile","Manage profile","ማህደር አስተካክል","");
INSERT INTO language VALUES("201","update_profile","Update profile","ማህደር ቀይር","");
INSERT INTO language VALUES("202","new_password","New password","አድስ የሚስጥር ቁጥር","");
INSERT INTO language VALUES("203","confirm_new_password","Confirm new password","የሚስጥር ቁጥር በድጋሚ","");
INSERT INTO language VALUES("204","update_password","Update password","ቀይርልኝ","");
INSERT INTO language VALUES("210","delete_language","Delete language","ቋንቋ አጥፋ","");
INSERT INTO language VALUES("211","settings_updated","Settings updated","Settings has been updated","");
INSERT INTO language VALUES("212","update_phrase","Update phrase","ሀረግ ቀይር","");
INSERT INTO language VALUES("213","login_failed","Login has been failed","Login has been failed","");
INSERT INTO language VALUES("218","system_email","System email","ኢሜል","");
INSERT INTO language VALUES("219","option","Option","አማራጭ","");
INSERT INTO language VALUES("220","edit_phrase","Edit phrase","ሀረግ ቀይር","");
INSERT INTO language VALUES("221","forgot_your_password","Forgot Your Password","የሚስጥር ቁጥርህን ረሳህ?","");
INSERT INTO language VALUES("222","forgot_password","Forgot Password","የሚስጥር ቁጥር ረሳህ","");
INSERT INTO language VALUES("223","back_to_login","Back To Login","ወድመግቢያ ግዕ ሂድ","");
INSERT INTO language VALUES("224","return_to_login_page","Return to Login Page","ወድመግቢያ ግዕ ሂድ","");
INSERT INTO language VALUES("225","admit_patient","New patient","አድስ ህሙማን መዝግብ","");
INSERT INTO language VALUES("226","admit_bulk","Batch upload","ከኢክሲል ሽት ጫን","");
INSERT INTO language VALUES("230","select_zone_first","Select zone first","ቀድመህ ዞን ምረጥ","");
INSERT INTO language VALUES("231","message","Message","መልእክቶች","");
INSERT INTO language VALUES("232","general_settings","General settings","አጠቃላይ መችት","");
INSERT INTO language VALUES("233","language_settings","Language settings"," ቋንቋ መችት","");
INSERT INTO language VALUES("234","edit_profile","Edit profile","ማህድር አስተካክል","");
INSERT INTO language VALUES("235","event_schedule","Event  schedule","ማስታዎቂያ ሰልድያ","");
INSERT INTO language VALUES("236","cancel","Cancel","ሰርዝ","");
INSERT INTO language VALUES("237","addmission_form","Registration form","የመመዝገቢያ ፎርም","");
INSERT INTO language VALUES("238","value_required","Please value missing!","እባክዎ ይህንን ፊልድ ይሙሉ","");
INSERT INTO language VALUES("239","select","Select","ምረጥ","");
INSERT INTO language VALUES("240","gender","Gender","ዖታ","");
INSERT INTO language VALUES("243","select_excel_file","Select excel file","excel file ምርጥ","");
INSERT INTO language VALUES("244","upload_and_import","Upload and import","ለመጫን ምርጥ","");
INSERT INTO language VALUES("245","manage_classes","List of regions","ክልል ዝርዝር","");
INSERT INTO language VALUES("246","manage_zone","Manage Zones","ዞኖች","");
INSERT INTO language VALUES("247","add_new_encounter","Add new encounter","አድስ ህክምና ጅምር","");
INSERT INTO language VALUES("248","section_name","Zone","ዞን","");
INSERT INTO language VALUES("252","update","Update","አስተካክል","");
INSERT INTO language VALUES("254","select_region_first","Select Region first","ቀድመህ ክልል ምርጥ","");
INSERT INTO language VALUES("255","patient_history","Patient Encounter & service Charge Information","የህሙማን ህክምና እና የአገልግሎት ክፍያ መርጃ","");
INSERT INTO language VALUES("256","search","Search","ፈልግ","");
INSERT INTO language VALUES("259","parents","List of Woredea","የወረዳዎች ዝርዝር","");
INSERT INTO language VALUES("264","text_align","Text align","","");
INSERT INTO language VALUES("265","clickatell_username","clickatell_username","","");
INSERT INTO language VALUES("266","clickatell_password","clickatell_password","","");
INSERT INTO language VALUES("267","clickatell_api_id","clickatell_api_id","","");
INSERT INTO language VALUES("268","sms_settings","SMS settings","አጭር መልእክት መቸት","");
INSERT INTO language VALUES("269","data_updated","Data updated successfully","Data has been updated successfully","");
INSERT INTO language VALUES("270","data_added_successfully","Data has been added successfully","Data has been updated successfully","");
INSERT INTO language VALUES("271","edit_notice","Edit notice","ማስታዎቂ ቀይር","");
INSERT INTO language VALUES("272","private_messaging","Private Messaging","ግላዊ መልዕክት","");
INSERT INTO language VALUES("273","messages","Inbox Messages","የመልዕክት ሳጥን","");
INSERT INTO language VALUES("274","new_message","New message","አድስ መልዕክት ","");
INSERT INTO language VALUES("275","write_new_message","Write new message","አድስ መልዕክት ላክ","");
INSERT INTO language VALUES("276","recipient","Recipient","ተቀባይ","");
INSERT INTO language VALUES("277","select_a_user","Select a user","ተቀባይ ምርጥ","");
INSERT INTO language VALUES("278","write_your_message","Write your message","መልዕክትህን አእዚህ ዓፍ","");
INSERT INTO language VALUES("279","send","Send","ላክልኝ","");
INSERT INTO language VALUES("280","current_password","Current password","ነባር የሚስጥር ቁጥር","");
INSERT INTO language VALUES("285","theme_settings","You can select theme color what you want","የፈለከውን ባክግራውንድ ከለር ምረጥ","");
INSERT INTO language VALUES("286","select_theme","Select theme","ባክግራውንድ ከለር","");
INSERT INTO language VALUES("287","theme_selected","Now you are selected new theme!","Now you are selected new theme!","");
INSERT INTO language VALUES("288","language_list","Language list","ቋንቋ ዝርዝር","");
INSERT INTO language VALUES("294","select_date","Select date","ቀን ምረጥ","");
INSERT INTO language VALUES("295","select_month","Select month","ወር ምረጥ","");
INSERT INTO language VALUES("296","select_year","Select year","አመት ምረጥ","");
INSERT INTO language VALUES("298","twilio_account","Twilio account","Twilio account","");
INSERT INTO language VALUES("299","authentication_token","authentication_token","authentication_token","");
INSERT INTO language VALUES("300","registered_phone_number","Registered phone number","Registered phone number","");
INSERT INTO language VALUES("301","select_a_service","Select a service","Select a service","");
INSERT INTO language VALUES("302","active","Active","Active","");
INSERT INTO language VALUES("303","disable_sms_service","Disable SMS service  ","Disable SMS service  ","");
INSERT INTO language VALUES("304","not_selected","Not selected!","Not selected!","");
INSERT INTO language VALUES("305","disabled","Disabled","Disabled","");
INSERT INTO language VALUES("710","submit","Submit","መዝግብልኝ","");
INSERT INTO language VALUES("311","zone","Zone","ዞን","");
INSERT INTO language VALUES("313","payment_informations","Payment informations","ክፍያ መረጃ","");
INSERT INTO language VALUES("314","total","Total","አጠቃላይ","");
INSERT INTO language VALUES("319","cash","Cash","ካሽ","");
INSERT INTO language VALUES("321","card","Card","ካርድ","");
INSERT INTO language VALUES("322","data_deleted","Data deleted","Data deleted","");
INSERT INTO language VALUES("323","total_amount","Total amount","አጠቃላይ ድምር","");
INSERT INTO language VALUES("332","send_sms_to_all","Send sms to all","Send sms to all","");
INSERT INTO language VALUES("333","yes","Yes","አዎ","");
INSERT INTO language VALUES("334","no","No","አይድለም","");
INSERT INTO language VALUES("335","activated","activated"," 	activated","");
INSERT INTO language VALUES("336","sms_service_not_activated","SMS service not activate","SMS service not activate","");
INSERT INTO language VALUES("341","image","Image","ፎቶ","");
INSERT INTO language VALUES("342","doc","doc","doc","");
INSERT INTO language VALUES("343","pdf","Pdf","Pdf","");
INSERT INTO language VALUES("344","excel","Excel","Excel","");
INSERT INTO language VALUES("345","other","other","ሊሎች","");
INSERT INTO language VALUES("351","send_marks_by_sms","Send marks by sms","send_marks_by_sms","");
INSERT INTO language VALUES("353","select_receiver","Select receiver","ተቀባይ ምርጥ","");
INSERT INTO language VALUES("356","for","for","ለ","");
INSERT INTO language VALUES("357","message_sent","Message has been sent!","Message has been sent!","");
INSERT INTO language VALUES("364","reply_message","Reply message","መልእክ መልሰህ ላከ","");
INSERT INTO language VALUES("365","account_updated","Account has been updated!","Account has been updated!","");
INSERT INTO language VALUES("366","upload_logo","upload_logo","ሎጎ ጫን","");
INSERT INTO language VALUES("367","upload","Upload","ጫን","");
INSERT INTO language VALUES("370","default_theme","Defualt theme","ኖርማል ባክግራውንድ ከለር","");
INSERT INTO language VALUES("371","default","Defualt","ኖርማል","");
INSERT INTO language VALUES("375","update_product","Update Product","Update Product","");
INSERT INTO language VALUES("376","install_update","Install Update","Install Update","");
INSERT INTO language VALUES("378","hour","hour(s)","ሰዓት","");
INSERT INTO language VALUES("379","minutes","Minutes","ደቂቃ","");
INSERT INTO language VALUES("380","password_updated","Password updated!","የሚስጥር ቁጥር በትክክል ተቀይሯል፡፡","");
INSERT INTO language VALUES("382","Charts","Charts","ቻርት","");
INSERT INTO language VALUES("387","system_information","System information","ሲስትም መረጃ","");
INSERT INTO language VALUES("389","manage_session","manage_session","manage_session","");
INSERT INTO language VALUES("410","classs","Region","ክልል","");
INSERT INTO language VALUES("428","noticeboards","Noticeboards","ማስታዎቂያ","");
INSERT INTO language VALUES("436","manage_account","Manage account","ማነጅ ዩዘር","");
INSERT INTO language VALUES("440","on","On","On","");
INSERT INTO language VALUES("488","send_message","Send message","መልእክት ላክ","");
INSERT INTO language VALUES("489","Write message...","Write message...","መልእክትህን እዚህ ዓፍ","");
INSERT INTO language VALUES("503","report","Report","ሪፖረት","");
INSERT INTO language VALUES("504","ci_sessions","Sessions","Sessions","");
INSERT INTO language VALUES("506","message_thread","Message thread","መልእክት ትሪድ","");
INSERT INTO language VALUES("507","All tables","All tables","ሁሉም ተብል","");
INSERT INTO language VALUES("508","select_language","Select language","ቋንቋ ምረጥ","");
INSERT INTO language VALUES("746","CB Health Insurance","CB Health Insurance","የጠና መድህን አግልግሎት","");
INSERT INTO language VALUES("745","Agreement","Agreement","ውል ሰምምነት","");
INSERT INTO language VALUES("740","Health Care finance","Health Care finance","ሂልዝ ከር ፋይናንስ","");
INSERT INTO language VALUES("739","Credit Service","Credit Service","የዱቢ ህክምና","");
INSERT INTO language VALUES("738","Dube Health Service","Dube Health Service","የዱቢ ህክምና","");
INSERT INTO language VALUES("737","Health Insurance","Health Insurance","የጠና መድህን አግልግሎት","");
INSERT INTO language VALUES("736","Health Care finance by Letter","Health Care finance","ሂልዝ ከር ፋይናንስ","");
INSERT INTO language VALUES("735","Add Region","Add Region","ክልል ጨምር","");
INSERT INTO language VALUES("734","manage_class","Region","ክልል","");
INSERT INTO language VALUES("733","manage Woredas","Woredas","ወረዳ","");
INSERT INTO language VALUES("732","manage zones ","Zones ","ዞን","");
INSERT INTO language VALUES("730","Woredas","Woredas","ወረዳ","");
INSERT INTO language VALUES("728","kebele","Kebele","ቀበሊ","");
INSERT INTO language VALUES("725","Add Insurance ","Add Insurance","ጢና ምድህን ጨምር","");
INSERT INTO language VALUES("724","Add Insurance Data","Add Insurance Data","ጢና ምድህን መረጃ ጨምር","");
INSERT INTO language VALUES("723","Treatment","Treatment","ሀክምና","");
INSERT INTO language VALUES("721","price","Price","ዋጋ","");
INSERT INTO language VALUES("649","Add new Woreda","Add new Woreda","አድስ ወረዳ ጨምር","");
INSERT INTO language VALUES("706","Add new Zone","Add new Zone","አድስ ዞን ጨምር","");
INSERT INTO language VALUES("705","manage_sections","Manage zone","ዞኖች","");
INSERT INTO language VALUES("703","indigent","Indigent","ኢንድጀንት","");
INSERT INTO language VALUES("749","encounter","Encounter","የህሙማን ዓይንት","");
INSERT INTO language VALUES("750","diagnosis","Diagnosis","የበሽታው አይነት","");
INSERT INTO language VALUES("751","lab","Lab","ምርምራ","");
INSERT INTO language VALUES("752","imaging","Imaging","ኢሚጅንግ","");
INSERT INTO language VALUES("753","procedure","Procedure","ፕሮሲጀር","");
INSERT INTO language VALUES("754","drug","Drug","መድሃኒት","");
INSERT INTO language VALUES("755","bed","Bed","አልጋ","");
INSERT INTO language VALUES("756","remark","Remark","ሪማርክ","");
INSERT INTO language VALUES("757","add payment","Add payment","አገልግሎት ክፍያ","");
INSERT INTO language VALUES("758","service","Service","አገልግሎት","");
INSERT INTO language VALUES("759","patient outcome:","Patient outcome:","የህሙማን ውጢት","");
INSERT INTO language VALUES("760","died","Died","ህይዎቱ አልፏል","");
INSERT INTO language VALUES("761","escape","Escape","አምልጧል","");
INSERT INTO language VALUES("762","back-referral","Back-referral","ወደጢና ተቋማት ተመለስ","");
INSERT INTO language VALUES("763","higher-referral","Higher-referral","ወደ ከፍተኛ ህክምና ሂዲ/ች","");
INSERT INTO language VALUES("764","better-improved","Better-improved","ተሽሎት/ሏት ወጣች","");
INSERT INTO language VALUES("765","discharged","Discharged","ህክምና ጨርሶ ወጣ","");
INSERT INTO language VALUES("766","search by","Search by"," ፈልግ","");
INSERT INTO language VALUES("768","CBHI ID","CBHI ID","ህሙማን መለያ ቁጥር","");
INSERT INTO language VALUES("951","payment","Payment","ክፍያ","");
INSERT INTO language VALUES("954","add organization","Add organization","ትቋማት መዝግብ","");
INSERT INTO language VALUES("966","facility type","Facility type","የትቋም አይንት","");
INSERT INTO language VALUES("967","Health Organization name","Health Organization name","የትቋሙ ስም","");
INSERT INTO language VALUES("968","facility catchment population","Facility catchment population","የትቋሙ የሚያስተናግድዉ ህሙማን ብዛት","");
INSERT INTO language VALUES("970","ownership","Ownership","ባለቢትነት","");
INSERT INTO language VALUES("984","By Month","By Month","የወር ሪፖርት","");
INSERT INTO language VALUES("985","By Quarter","By Quarter"," የሩብ ዓምት ሪፖርት","");
INSERT INTO language VALUES("1142","Kebeles","Kebeles","ቀበሊ","");
INSERT INTO language VALUES("1217","User Accounts","User Accounts","የተጠቃሚ መለያ","");
INSERT INTO language VALUES("1218","manage_users","Manage Users","ተጠቃሚዎች","");
INSERT INTO language VALUES("1219","Monitor Active user","Monitor Active user","አሁን በመጠቀም ላይ ያሉትን እይ ","");
INSERT INTO language VALUES("1220","access control list","Access control list","አክሰስ ኮንትሮል ሊስት","");
INSERT INTO language VALUES("1221","manage Kebele","Manage Kebele","ማኒጅ ቀበለ","");
INSERT INTO language VALUES("1222","add parameters","Add parameters","ፓራማትር ጨምር","");
INSERT INTO language VALUES("1223","generate_reports","Generate reports","ዝርዝር ሪፖርት","");
INSERT INTO language VALUES("1224","System Configuration ","System Configuration ","ሲስተም ማስተካካያ","");
INSERT INTO language VALUES("3002","Total Regions","Total Regions","የክልሎች ብዛት","");
INSERT INTO language VALUES("1227","Total Patients","Total Patients","አጠቃላይ የህሙማን ብዛት","");
INSERT INTO language VALUES("1228","Total Zones","Total Zones","አጠቃላይ የዞኖች ብዛት","");
INSERT INTO language VALUES("1229","In Gambela","In Gambela","በጋምቢላ ክልል ውስጥ","");
INSERT INTO language VALUES("1230","In Oromia","In Oromia","በኦሮምያ ክልል ውስጥ","");
INSERT INTO language VALUES("1231","In SNNP","In SNNP","በደቡብ ክልል ውስጥ","");
INSERT INTO language VALUES("1232","Total Woreda","Total Woreda","አጠቃላይ የወረዳዎች ብዛት","");
INSERT INTO language VALUES("1233","In Jimma Zone","In Jimma Zone","ጅማ ዞን","");
INSERT INTO language VALUES("1234","In Bunobedele ","Bunobedele","ቡኖ በደሊ ዞን","");
INSERT INTO language VALUES("1235","Elibabora","Elibabora","ኢልባቦር ዞን","");
INSERT INTO language VALUES("1236","Kaffa Zone","Kaffa Zone","ከፋ ዞን","");
INSERT INTO language VALUES("1238","Calculator","Calculator","ዋጋ አስላ","");
INSERT INTO language VALUES("1239","Returnable","Calculate total Charge","አጠቃላይ ዋጋ አስላ","");
INSERT INTO language VALUES("1240","create_new_encounter","Create new encounter","አድስ ህክምና ጀምር","");
INSERT INTO language VALUES("1243","current date","Current date","የዛሪው ቀን","");
INSERT INTO language VALUES("1244","OPD","OPD","ተመላላሽ ታካሚ","");
INSERT INTO language VALUES("1245","IPD","IPD","ተኝቶ ታካሚ","");
INSERT INTO language VALUES("1246","Price(ETB)","Price(ETB)","ዋግ(በብር)","");
INSERT INTO language VALUES("1268","report_by_month","Report by month","የወር ሪፖርት","");
INSERT INTO language VALUES("1270","create_report","Create report","ሪፖርት ፍጠር","");
INSERT INTO language VALUES("1271","Generate Monghly Report","Generate Monthly Report","ወርሃዊ ሪፖርት","");
INSERT INTO language VALUES("1272","month","Month","ወር","");
INSERT INTO language VALUES("1274","year","Year","አመት","");
INSERT INTO language VALUES("1278","report_by_quarter","Report by quarter","የሩብ አመት ሪፖርት","");
INSERT INTO language VALUES("1280","Generate Quarter Report","Generate Quarter Report","የሩብ አመት ሪፖርት አውጣ","");
INSERT INTO language VALUES("1281","quarter","Quarter","ሩብ አመት","");
INSERT INTO language VALUES("1282","First Quarter","First Quarter","የመጀመሪያ ሩብ አመት","");
INSERT INTO language VALUES("1283","Second Quarter","Second Quarter","ሁለተኛ ሩብ አመት","");
INSERT INTO language VALUES("1284","Third Quarter","Third Quarter","ሶስተኛ ሩብ አመት","");
INSERT INTO language VALUES("1285","Fourth Quarter","Fourth Quarter","አራተኛ ሩብ አመት","");
INSERT INTO language VALUES("1291","sn","SN","ተራ ቁ","");
INSERT INTO language VALUES("1292","CN","Card No","ካርድ ቁጥር","");
INSERT INTO language VALUES("1293","CBHI Code","CBHI Code","ህሙማን ኮድ","");
INSERT INTO language VALUES("1294","full name","Full Name","ሙሉ ስም","");
INSERT INTO language VALUES("1295","region","Region","ክልል","");
INSERT INTO language VALUES("1315","add_new_patient","Add new patient","አድስ  ህሙማን መዝግብ","");
INSERT INTO language VALUES("1316","CBHI #ID","CBHI #ID","የህሙማን ID","");
INSERT INTO language VALUES("1318","code","Code","ኮድ","");
INSERT INTO language VALUES("1319","encounter_status","Encounter status","የህክምና ዝርዝር መረጃ","");
INSERT INTO language VALUES("1329","user_id","User id","የተጠቃሚ ቁጥር","");
INSERT INTO language VALUES("1330","registered_on","Registered on","የተመዘገበበት ቀን","");
INSERT INTO language VALUES("1331","disable","Disable","Disable","");
INSERT INTO language VALUES("1332","enable","Enable","Disable","");
INSERT INTO language VALUES("1341","sent_message","Sent message","የተላኩ መልእክቶች","");
INSERT INTO language VALUES("1342","woreda_town_organization","Woreda/Organization","ወረዳ/ተቋማት","");
INSERT INTO language VALUES("1343","active_user_list","Active user list","በመጠቀም ላይ ያሉ","");
INSERT INTO language VALUES("1348","dd_mm_yyyy","DD MM YYYY","ቀን-ወር-አመት","");
INSERT INTO language VALUES("1350","head","Finance Head","የፋይናንስ ሃላፊ","");
INSERT INTO language VALUES("1351","password_mismatch","Password mismatch","Password mismatch","");
INSERT INTO language VALUES("1356","last_login","Last login in","የመጨረሻ የገባበት ቅን","");
INSERT INTO language VALUES("1364","ip_address","IP Address","ኮምፒዩተር አድራሻ","");
INSERT INTO language VALUES("1386","manage_user_access","Manage user access","user access","");
INSERT INTO language VALUES("1395","browser","Browser","ብሮውዘር","");
INSERT INTO language VALUES("1397","trial","Trial","ሙከራ","");
INSERT INTO language VALUES("1423","block_user","Block user","ተጠቃሚዉን አቋርጥ","");
INSERT INTO language VALUES("1490","total amount","Total amount","አጠቃላይ መጠን","");
INSERT INTO language VALUES("2851","add_student","Add patient","ህሙማን መዝግብ","");
INSERT INTO language VALUES("2852","add_bulk_student","Add bulk patient","ባች አፕሎድ","");
INSERT INTO language VALUES("2853","Batch upload Exceel","Batch upload Exceel","ኢክሰል ፋይል ጫን","");
INSERT INTO language VALUES("2854","address","Address","አድራሻ","");
INSERT INTO language VALUES("2855","file","File","ፋይል","");
INSERT INTO language VALUES("2856","select_a_theme_to_make_changes","Select a theme to make changes 	","ባክግራውንድ ከለር ምረጥ","");
INSERT INTO language VALUES("2857","note","Note","ኖት","");
INSERT INTO language VALUES("2858","detials","Detials","ዝርዝር መረጃ","");
INSERT INTO language VALUES("2859","manage_subject","Manage Woreda","ማነጅ ወረዳ","");
INSERT INTO language VALUES("2860","zone_code","Zone code","ዞን ኮድ","");
INSERT INTO language VALUES("2862","configuration","Configuration","መቸት ማስተካካያ","");
INSERT INTO language VALUES("2863","patient encounter status","Patient encounter status","የህሙማን ህክምና ሁነታ","");
INSERT INTO language VALUES("2864","payment information by servics type","Payment information by services type","የክፍያ መረጃ በአገልግሎት አይንት","");
INSERT INTO language VALUES("2865","last_login_trial","Last login trial","የመጨረሻ የገባበት እለት","");
INSERT INTO language VALUES("2866","device","Device","የኮምፒዩተር አይነት","");
INSERT INTO language VALUES("2867","operating_system","OS","ኦፕሪቲንግ ሲስተም","");
INSERT INTO language VALUES("2868","logged_as","Logged as","የገባዉ","");
INSERT INTO language VALUES("2869","log Out","Logout","ዘግተህ ውጣ","");
INSERT INTO language VALUES("2870","please wait...","Please wait...","Please wait...","");
INSERT INTO language VALUES("2871","add_user","Add user","ተጠቃሚ ጨምር","");
INSERT INTO language VALUES("2872","firstname","First name","ስም","");
INSERT INTO language VALUES("2873","lastname","Last name","የአባት ስም","");
INSERT INTO language VALUES("2874","System administrator ","System administrator ","ሲስተም አስተዳደር","");
INSERT INTO language VALUES("2875","financ_head ","Finance head ","ፋይናንስ ሃላፊ","");
INSERT INTO language VALUES("2876","my_reports","My reports","የኔ ረፖርት","");
INSERT INTO language VALUES("2877","today","Today","የዛሪ ","");
INSERT INTO language VALUES("2878","this_week","This week","የዚህ ሳምንት","");
INSERT INTO language VALUES("2879","this_month","This month","የዚህ ወር","");
INSERT INTO language VALUES("2880","this_quarter","This quarter","የዚህ ሩብ አመት","");
INSERT INTO language VALUES("2881","this_year","This year","የዘህ አመት","");
INSERT INTO language VALUES("2882","edit_patient","Edit patient","እንደገና አስተተካክል","");
INSERT INTO language VALUES("2883","cbhi","CBHI ID","CBHI ID","");
INSERT INTO language VALUES("2884","encouter","Encounter","ህክና መሪጃ","");
INSERT INTO language VALUES("2885","Visit(OPD)","Visit(OPD)"," ተመላላሽ ታካሚ","");
INSERT INTO language VALUES("2886","Admission(IPD)","Admission(IPD)","ተኝቶ ታካሚ","");
INSERT INTO language VALUES("2887","kebele_cod","Kebele code","ቀበለ ኮድ","");
INSERT INTO language VALUES("2888","my_profile","My profile","የኔ ማህደር","");
INSERT INTO language VALUES("2889","per_user_report","Per user report","የዩዘር ሪፖርት","");
INSERT INTO language VALUES("2890","general_report","General report","አጠቃላይ ዝርዝር ሪፖርት","");
INSERT INTO language VALUES("2891","supper_admin","Supper Admin","ዋና ዮዝር","");
INSERT INTO language VALUES("2892","SupperAdmin","Supper Admin","ዋና ዮዝር","");
INSERT INTO language VALUES("2893","edit_teacher","Edit user","ዩዘር አስተካክል","");
INSERT INTO language VALUES("2894","roll","Roll","ተ.ቁ.","");
INSERT INTO language VALUES("2895","usename","Email","ኢ-ማል","");
INSERT INTO language VALUES("2896","edit_user","Edit user","ዩዘር አስተካክል","");
INSERT INTO language VALUES("2897","Developer","Developer","ማን ሰራዉ?","");
INSERT INTO language VALUES("2898","Date_of_service","Date of service","አገልግሎት የተሰጠብት ቀን","");
INSERT INTO language VALUES("2899","number of days","Number of days","ስንት ቀን","");
INSERT INTO language VALUES("2900","fee_per day","Fee per day","የቀን ዋጋ","");
INSERT INTO language VALUES("2901","service_charge","Service charge","አግልግሎት ክፍያ","");
INSERT INTO language VALUES("2902","add_new_woreda","Add new woreda","አድስ ወረዳ ጨምር","");
INSERT INTO language VALUES("2903","Does_not_exist_try_again","Does not exist! try again!","አእባክዎ ያስግቡት የህክምና ካርድ ቁጥር የተሳሳት  ነው! እንደገና በትክክል ያስግቡ::","");
INSERT INTO language VALUES("2905","date_of_registration","Date of registration","የተመዘገበበት ቀን","");
INSERT INTO language VALUES("2906","registered_by","Registered by","የመዘገበው ሰው","");
INSERT INTO language VALUES("2907","subtotal_amount(in ETB)","Subtotal_amount(in ETB)","የእያንዳንዱ አጠቃላይ ድምር","");
INSERT INTO language VALUES("2908","birr","Birr","#ብር","");
INSERT INTO language VALUES("2909","Editing_encounter","Editing encounter","የህክምና መረጃ አስተካክል","");
INSERT INTO language VALUES("2910","Main Diagniss(HMIS)","Main Diagniss(HMIS)","የበሽታው ዓይነት","");
INSERT INTO language VALUES("2911","section","Zone","ዞን","");
INSERT INTO language VALUES("2912"," imaging"," Imaging","ኢማጅንግ","");
INSERT INTO language VALUES("2914","collect_insurance_data","Collect insurance data","ኢንሹራንስ መረጃ መዝግብ","");
INSERT INTO language VALUES("2915","When S/He came?","When S/He came?","መች ነበር የመጣው/ችው?","");
INSERT INTO language VALUES("2916","#Price(ETB)","#Price(ETB)","#ብር","");
INSERT INTO language VALUES("2917","patients_information","Patient information","የህሙማን መረጃ","");
INSERT INTO language VALUES("2918","Invalid login","Invalid login","ለመግባት አልተሳካም!","");
INSERT INTO language VALUES("2919","Please Enter correct username or password!","Please Enter correct Email or Password!","እባከዎ ያስግቡት መረጃ የተሳሳተ ነው! የሚስጥር ቁጥሩን ደግመው በትክክል ያስገቡ፡፡","");
INSERT INTO language VALUES("2920","new_patient","Click to register new patient","አድስ ህሙማን ለመመዝግብ ይህን ይጫኑ","");
INSERT INTO language VALUES("2921","all_kebele","All kebele","ሁሉም ቀበለ","");
INSERT INTO language VALUES("2922","add_new_kebele","Add new kebele","አድስ ቀበለ መዝግብ","");
INSERT INTO language VALUES("2923","woreda_code","Woreda code","ወረዳ ኮድ","");
INSERT INTO language VALUES("2924","region_code","Region code","ክልል ኮድ","");
INSERT INTO language VALUES("2925","details","Details","ዝርዝር","");
INSERT INTO language VALUES("2926","kebele_name","Kebele Name","የቀበለ ስም","");
INSERT INTO language VALUES("2927","add_kebele","Add kebele","ቀበለ መዝግብ","");
INSERT INTO language VALUES("2928","student","Student","ተማሪ","");
INSERT INTO language VALUES("2929","employee","Employee","ሰራተኛ","");
INSERT INTO language VALUES("2930","add_new_zone"," 	Add new zone","አድስ ዞን ጨምር","");
INSERT INTO language VALUES("2931","edit_zone","Edit zone","እንደገና አስተካክል","");
INSERT INTO language VALUES("2932","edit woreda","Edit woreda","እንደገና አስተካክል","");
INSERT INTO language VALUES("2933","Organization/Woreda","Organization/Woreda"," ተቋም/ወረዳ","");
INSERT INTO language VALUES("2934","Health Care financ","Health Care financ","ሂልዝከር ፋይናንስ","");
INSERT INTO language VALUES("2935","health_care_finance","Health care finance","ሂልዝከር ፋይናንስ","");
INSERT INTO language VALUES("2936","CBHI_beneficiary","CBHI_beneficiary","ሃልዝ ኢንሹራንስ","");
INSERT INTO language VALUES("2937","#Total Districts","#Total Districts","የወረዳ ብዛት","");
INSERT INTO language VALUES("2941","document","Document","ፋይል","");
INSERT INTO language VALUES("2952","log","Log","ሎግ","");
INSERT INTO language VALUES("2953","patients","Patients","ህሙማን","");
INSERT INTO language VALUES("2954","services","Services","አግልግሎት","");
INSERT INTO language VALUES("2955","zones","Zones","ዞን","");
INSERT INTO language VALUES("2956","map_loction","Map loction","የካርታ አድራሻ","");
INSERT INTO language VALUES("2957","patient_profile","Patient profile","የህሙማን ማህደር","");
INSERT INTO language VALUES("2959","system_adminstrator ","System administrator ","ሲስተም አስተዳድ","");
INSERT INTO language VALUES("2960","welcome! you are new user please change common password \"jimma\" with new strong  password for security purpuse. ","Welcome! You are actually new user please change common password \"jimma\" with new strong  password for security purpose ","አእንኳን ደህና መጡ ውድ ደንበኛችን!እባከዎ አድስ ስልሆኑ የጋራ የሆነዉን \'jimma\' የሚስጥር ቁጥር አድስ የራሰዎን ለደህንነት ሲባል ይቀይር፡፡","");
INSERT INTO language VALUES("2964","disable_user","Disable user","ድስአብል","");
INSERT INTO language VALUES("2965","appication statistics overview","Application Statistics Overview","የሲስትም አጠቃላይ መረጃ","");
INSERT INTO language VALUES("2963","Enabled","Enabled","ኢንብል","");
INSERT INTO language VALUES("2966","show_password","Show Password","የሚስጥር ቁጥሩን አሳየኝ","");
INSERT INTO language VALUES("2967","basic_pataient_information","Basic Patient Information","የህሙማን መሰረታዊ መረጃ","");
INSERT INTO language VALUES("2970","Health Organiztion name","Health Organization name","የጠና ተቋማት ስም","");
INSERT INTO language VALUES("2971","hospital","Hospital","ሆስፒታል","");
INSERT INTO language VALUES("2972","Health_center","Health Center","የጠና ተቋማት","");
INSERT INTO language VALUES("2973","private_facility","Private facility","የግል ተቋማት","");
INSERT INTO language VALUES("2974","public_facility","Public facility","የመንግስት ተቋማት","");
INSERT INTO language VALUES("2975","Off","Off","Off","");
INSERT INTO language VALUES("2976","exam","Diagnsis","ምርመራ","");
INSERT INTO language VALUES("2977","parent","Woreda","ወረዳ","");
INSERT INTO language VALUES("2978","update_Version","Update Version","ቨርሽን አሳድግ","");
INSERT INTO language VALUES("2979","basic_user_information","Basic user information","የተጠቃሚ መረጃዎች","");
INSERT INTO language VALUES("2980","authentication_key","Authentication key","የሚስጥር ኮድ","");
INSERT INTO language VALUES("2981","Reinitialize_password","Reinitialize password","የሚስጥር ቁጥር አስጀምር","");
INSERT INTO language VALUES("2982","server_ID","Server ID","ሰርቨር አይድ","");
INSERT INTO language VALUES("2983","Server_IP","Server IP","ሰርቨር አድራሻ","");
INSERT INTO language VALUES("2984","domain_name","Domain name","ዶመን ነም","");
INSERT INTO language VALUES("2985","Letters mandatory","Letters mandatory","ለተር መጠቅም ግደታ ነው","");
INSERT INTO language VALUES("2986","Uppercase letters mandatory","Uppercase letters mandatory","ካፒያል ለትር መጠቀም ግደታ ነው","");
INSERT INTO language VALUES("2987","Lowercase letters mandatory","Lowercase letters mandatory","ስሞል ለትር መጠቀም ግደታ ነው","");
INSERT INTO language VALUES("2990","background_color","Background color","ባክግራውንድ ከለር","");
INSERT INTO language VALUES("2991","change","Change","ቀይር","");
INSERT INTO language VALUES("2992","prisoner","Prisoner","ታራሚ/እስረኛ","");
INSERT INTO language VALUES("2993","report_by_month_view","Report by month view","ወርሃዊ ሪፖርት ፕሪንት","");
INSERT INTO language VALUES("2994","jimma_university ","Jimma University ","ጅማ ዩኒቨርሲቲ","");
INSERT INTO language VALUES("2995","jimma_university_specialized_hospital","Jimma University Specialized Hospital","የጅማ ህክምና ማዕክል","");
INSERT INTO language VALUES("2996","monthly_report","Monthly report","ወርሃዊ ሪፖርት","");
INSERT INTO language VALUES("2997","district/organization","District/organization","ወረዳ/ተቋማት","");
INSERT INTO language VALUES("2998","finance","Finance Information","አጠቃላይ የክፍያ መረጃ","");
INSERT INTO language VALUES("2999","Subtotal","Subtotal","ከፊል አጠቃላይ","");
INSERT INTO language VALUES("3000","jimma_medical_center","Jimma Medical Center","ጅማ ማድካል ሰንተር","");
INSERT INTO language VALUES("3003","MRN","MRN","ካርድ ቁጥር","");
INSERT INTO language VALUES("3007","Woreda/Town/Organization","Woreda/Town/Organization","ወረዳ/ከተማ/ተቋማት","");
INSERT INTO language VALUES("3008","patient_type","Patient type","የህሙማን ዓይንት","");
INSERT INTO language VALUES("3010","my_registration","My Registration","እነ የማዘገብኳቸው","");
INSERT INTO language VALUES("3011","my_patient_info","My Patient information","የነ ህሙማኖች","");
INSERT INTO language VALUES("3012","medical_history","Medical history","የህሙማን ታሪክ","");
INSERT INTO language VALUES("3013","my_encounters","My Encounters","የነ እንካውንተር","");
INSERT INTO language VALUES("3014","filter","filter","አውጣልኝ","");
INSERT INTO language VALUES("3015","user_stastices","User Statistics","የተጠቃሚ መረጃዎች","");
INSERT INTO language VALUES("3031","encounter_status_at","Patient encounter status at","ለህክምና የመጣበት ቀንና አገልግሎቱን ያገኘበት በ","");
INSERT INTO language VALUES("3016","cards","Card","የካርድ","");
INSERT INTO language VALUES("3017","revenue","አጠቃላይ ገቢ በአገልግሎት ዓይነት","አጠቃላይ ገቢ በአገልግሎት ዓይነት","");
INSERT INTO language VALUES("3096","duplicate_encounter_not allowed!","Duplicate encounter not allowed!","Duplicate encounter not allowed!","");
INSERT INTO language VALUES("3019","tcbhi ","የኢንሹራንስ ታካሚዎች ብዛት","የኢንሹራንስ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3020","hcare","የሃልዝ ከር ፋይናንስ ታካሚዎች ብዛት 	","የሃልዝ ከር ፋይናንስ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3021","crs","የዱበ ታካሚዎች ብዛተ","የዱበ ታካሚዎች ብዛተ","");
INSERT INTO language VALUES("3022","tipd ","ተኝቶ ታካሚዎች ብዛት","ተኝቶ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3023","topd  ","የተመላላሽ ታካሚዎች ብዛት","የተመላላሽ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3024","tfemale","አጠቃላይ የእንሹራንስ ሰት ታካሚዎች ብዛት","አጠቃላይ የእንሹራንስ ሰት ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3025","tmale ","አጠቃላይ የእንሹራንስ ወንድ ታካሚዎች ብዛት","አጠቃላይ የእንሹራንስ ወንድ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3026","qualification","Qualification","የትምህርት ዝግጅት","");
INSERT INTO language VALUES("3027","position","Current Position","የስራ መደብ","");
INSERT INTO language VALUES("3028","plcae_of_work","Place of work","የስራ ቦታ","");
INSERT INTO language VALUES("3029","previous","My Previous works","ቀደምት ስራዎቸ","");
INSERT INTO language VALUES("3030","user_stastics","User Statistics","የሰራተኞች መረጃ","");
INSERT INTO language VALUES("3032","service_type","Service type","የአገልግሎት ኣይነት","");
INSERT INTO language VALUES("3033","back","Back to home","ወደኋላ ተመለስ","");
INSERT INTO language VALUES("3034","current_status","Current status","አሁን ያለበት ሁነታ","");
INSERT INTO language VALUES("3035","logged_out_at","Logged out at","ዘግቶ የወጣበት ሳዓት","");
INSERT INTO language VALUES("3036","last_logged_in","Last logged in","የመጨረሻ የገባበት ሳዓት","");
INSERT INTO language VALUES("3037","registration_of_new_patient","Registration of new patient","ዛረ አድስ ህሙማን የመዘገበው ብዛት","");
INSERT INTO language VALUES("3038","creating_new_encouters","Creating new encounters","ዛረ ነባር ታካሚዎችን የመዘገበው ብዛት","");
INSERT INTO language VALUES("3039","no_of_editing","No of editing","እንደገና ያስተካከለው ዶክመንት ብዛት","");
INSERT INTO language VALUES("3040","no_of_error_made","No of error made","በሲስተሙ ላይ የሰራችድው ስህተቶች","");
INSERT INTO language VALUES("3041","idel_time","Idel time","ስራ የፈታበት ጊዘ","");
INSERT INTO language VALUES("3042","total_new_patient_registration","Total new patient registration","አጠቃላይ አድስ የመዘገባቸው ህሙማን ብዛት ","");
INSERT INTO language VALUES("3043","total_old_encouters","Total old encounters","አጠቃላይ የመዘገባቸው ነባር ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3044","monitor","Monitor","የ","");
INSERT INTO language VALUES("3046","today_work_activities","Today work activities","ን የዛረውን ክንዉን ተመልከት","");
INSERT INTO language VALUES("3047","type_activity","Type activities","የክንውን አይነቶች","");
INSERT INTO language VALUES("3048","indication","Indication","መግለጫዎች","");
INSERT INTO language VALUES("3049","#Total Disrricts","Total Disrricts","አጠቃላይ ወረዳዎች","");
INSERT INTO language VALUES("3051","kekebe_details","Kekebe details","የቀበለ መረጃ","");
INSERT INTO language VALUES("3052","family","Family members","የበተሰብ አባል","");
INSERT INTO language VALUES("3053","family_information","Family information","የበተሰብ ዝርዝር መረጃዎች","");
INSERT INTO language VALUES("3054","flag","Flag","ባንድራ","");
INSERT INTO language VALUES("3055","edit_region","Edit region","ክልል አስትካክል","");
INSERT INTO language VALUES("3056","online","Online","Online","");
INSERT INTO language VALUES("3058","posted_by","Posted by","የለጠፈው","");
INSERT INTO language VALUES("3059","acountant","Acountant","ሂሳብ ሰራተኛ","");
INSERT INTO language VALUES("3060","user_manual","User manual","የአጠቃቀመ መመሪያ","");
INSERT INTO language VALUES("3061","developer_guide","Developer Guide","Developer መመሪያ","");
INSERT INTO language VALUES("3062","link","Link","ውክልና ስጥ","");
INSERT INTO language VALUES("3063","copy_right","Copy Right","ኮፒ ራይት","");
INSERT INTO language VALUES("3064"," MRN","MRN","ካርድ ቁጥር","");
INSERT INTO language VALUES("3065","select_agreement_first","Select agreement first","ቅድሚያ ውሉን ምረጥ","");
INSERT INTO language VALUES("3066","sign_up","Sign Up","Sign Up","");
INSERT INTO language VALUES("3067","user_sign_up","User Sign Up","መመዝገቢያ","");
INSERT INTO language VALUES("3068","super_adminstrator ","Super Administrator","የሲስተም ዋና ሃላፊ","");
INSERT INTO language VALUES("3069","Your email or phone exist in the system ","Your email or phone exist in the system ","ቀድመው የተመዘገቡ ይመስላ!","");
INSERT INTO language VALUES("3070","seems_you_are_already_registered!","Seems you are already registered!","ቀድመው የተመዘገቡ ይመስላ!","");
INSERT INTO language VALUES("3071","activation","Activation","Activation","");
INSERT INTO language VALUES("3072","enable_user","Enable user","Enable user","");
INSERT INTO language VALUES("3073","total_users","Total users","አጠቃላይ የተጠቃሚ ብዛት","");
INSERT INTO language VALUES("3074","admins","System Adminstrators","የሲስተም ሃላፊ","");
INSERT INTO language VALUES("3075","super_admins","Super Adminstrator","የሲስተም ዋና ሃላፊ","");
INSERT INTO language VALUES("3076","heads","Accountants","ሂሳብ ሰራተኛ","");
INSERT INTO language VALUES("3077","users","System users","አጠቃላይ የተጠቃሚ","");
INSERT INTO language VALUES("3078","user stastices","User Statistics","የተጠቃሚ ዝርዝር መረጃ","");
INSERT INTO language VALUES("3079","new_registrations","New registration","አድስ የተመዘገቡ","");
INSERT INTO language VALUES("3080","online_users","Online users","አሁን በመጠቀም ላይ  ያሉ","");
INSERT INTO language VALUES("3081","inactive_users","Inactive users","የማይጥቀሙ ዩዘርስ","");
INSERT INTO language VALUES("3082","todays_logins","Today logins","ዛሬ የገቡ","");
INSERT INTO language VALUES("3083","my_encounter","My encounter","እኔ ያስተናግድኳቸው ህሙማን","");
INSERT INTO language VALUES("3084","my_total_patients","My total patients","አጠቃላይ የእኔ ህሙማን","");
INSERT INTO language VALUES("3085","today_actvities","Today activities","የዛሬ ክንውኖች","");
INSERT INTO language VALUES("3086","new registration","New registration","አድስ የተመዘገቡ	","");
INSERT INTO language VALUES("3087","health_care","Health care fiinance"," ሄልዝ ኬር ፋይናንስ","");
INSERT INTO language VALUES("3088","credit_service","Credit service","የዱቤ ህክምና","");
INSERT INTO language VALUES("3089","insurance","Insurance","የጤና መድህን","");
INSERT INTO language VALUES("3090","total_revenue","Total","በአጠቃላይ","");
INSERT INTO language VALUES("3091","deposit_for_bed","Deposit for bed","ለአልጋ ተቀማጭ አሲዝ","");
INSERT INTO language VALUES("3092","deposit_amount","Deposit amount","የተያዘው መጠን","");
INSERT INTO language VALUES("3093","mrn_id","MRN","ካርድ ቁጥር","");
INSERT INTO language VALUES("3094","encounter_id","Encounter ID","Encounter ID","");
INSERT INTO language VALUES("3095","deposited_amount","Deposit amount","የተያዘው መጠን","");
INSERT INTO language VALUES("3097","clear","Clear","","");
INSERT INTO language VALUES("3098","patient_profile_view","Patient Profile view","የህሙማን ማህደር እይታ","");
INSERT INTO language VALUES("3099","total_encounter","Total encounter","አጠቃላይ ታካሚዎች","");
INSERT INTO language VALUES("3100","first_quarter","First Quarter","የመጀመሪያ ሩብ አመት","");
INSERT INTO language VALUES("3101","second_quarter","Second quarter","ሁለተኛ ሩብ አመት","");
INSERT INTO language VALUES("3102","third_quarter","Third quarter","ሶስተኛ ሩብ አመት","");
INSERT INTO language VALUES("3103","fourth_quarter","Fourth quarter","አራተኛ ሩብ አመት","");
INSERT INTO language VALUES("3104","patient","Patient","ሀሙማን","");
INSERT INTO language VALUES("3105","querterly_expence","Quarterly expense","ሩብ አመት ክፍያ","");
INSERT INTO language VALUES("3106","1st_querter","1st quarter","የመጀመሪያ ሩብ አመት","");
INSERT INTO language VALUES("3107","2nd_quarter","2nd quarter","ሁለተኛ ሩብ አመት","");
INSERT INTO language VALUES("3108","3rd_quarter","3rd quarter","ሶስተኛ ሩብ አመት","");
INSERT INTO language VALUES("3109","4th_quarter","4th quarter","አራተኛ ሩብ አመት","");
INSERT INTO language VALUES("3110","payment_status","payment status","የክፍያ ሁነታ","");
INSERT INTO language VALUES("3111","paid","Paid","የተከፈለ","");
INSERT INTO language VALUES("3112","unpaid","Unpaid","ያልተከፈለ","");
INSERT INTO language VALUES("3113","unpaid_finance","Unpaid finance","ያልተከፈለ","");
INSERT INTO language VALUES("3114","paid_fanance_info","Paid finance info","የተከፈለ","");
INSERT INTO language VALUES("3115","send_request","Send request","ጥያቀ ላክ","");
INSERT INTO language VALUES("3116","my_requests","My requests","የነ ጥያቀዎች","");
INSERT INTO language VALUES("3117","request_by","Request by","የጠየቀዉ","");
INSERT INTO language VALUES("3118","date_of_request","Date of request","የተላከት ቀን","");
INSERT INTO language VALUES("3119","date_of_aproval","Date of approval","የፀደቀበት ቀን","");
INSERT INTO language VALUES("3120","approved","Approved","ፀድቋል","");
INSERT INTO language VALUES("3121","approved_by","Approved_by","ያፀደቀው","");
INSERT INTO language VALUES("3122","new approval request","New approval request","አድስ ጥያቄ","");
INSERT INTO language VALUES("3123","link_user","Link user","ውክልና ስጥ","");
INSERT INTO language VALUES("3124","user_linked_successfully","User linked successfully","User linked successfully","");
INSERT INTO language VALUES("3125","manage_user","Manage user","የተጠቃሚ ዝርዝር","");
INSERT INTO language VALUES("3126","Liked","Linked","ተዎክሏል","");
INSERT INTO language VALUES("3127","CBHI_Code","CBHI #Code","ኮድ","");
INSERT INTO language VALUES("3128","user_already_linked!","User already linked!","User already linked!","");
INSERT INTO language VALUES("3129","deligated  users","Delegated  users","የተዎከሉ ተጠቃሚዎች ዝርዝር","");
INSERT INTO language VALUES("3130","deligated_user","Delegated user","የተዎከለ ተጠቃሚ","");
INSERT INTO language VALUES("3131","deligated by","Delegated by","የወከለው ሰው","");
INSERT INTO language VALUES("3132","cancel_deligation","Cancel delegation","ውክልናውን አቋርጥ","");
INSERT INTO language VALUES("3133","user_deligations","User delegations","ውክልናዎች","");
INSERT INTO language VALUES("3134","renewed","Renewed","ታድሷል","");
INSERT INTO language VALUES("3135","monthly_payment_request","Monthly payment request","ውርሃዊ ክፍያ","");
INSERT INTO language VALUES("3136","quarterly_payment_request","Quarterly payment request","የሩብ አመት ክፍያ","");
INSERT INTO language VALUES("3137","new_requests","New requests","አድስ መልእክት","");
INSERT INTO language VALUES("3138","approved_requests","Approved requests","የፀደቀ","");
INSERT INTO language VALUES("3139","approved_finance.","Approved finance","የተከፈል ካሽ","");
INSERT INTO language VALUES("3140","approved payments list","Approved payments list","የከፋይ ዝርዝር","");
INSERT INTO language VALUES("3141","request_year","Request year","አመት","");
INSERT INTO language VALUES("3142","request_quarter","Request quarter","ሩብ አመት","");
INSERT INTO language VALUES("3143","inbox_requests","Inbox requests","የገባ መልእክት","");
INSERT INTO language VALUES("3144","approval_request","Approval request","መልእክት","");
INSERT INTO language VALUES("3145","approve","Approve","አፅድቅ","");
INSERT INTO language VALUES("3146","payment_approval","Payment approval","Payment approval","");
INSERT INTO language VALUES("3147","approve_request","Approve request","Approve request","");
INSERT INTO language VALUES("3148","send_payment_approval","Send payment approval","Send payment approval","");
INSERT INTO language VALUES("3149","sent_successfully","Sent successfully","Sent successfully","");
INSERT INTO language VALUES("3150","unpaid cash","Unpaid cash","ያልተከፈለ","");
INSERT INTO language VALUES("3151","unpaid_cash","Unpaid cash","ያልተከፈለ","");
INSERT INTO language VALUES("3153","approve_payment","Approve payment","Approve payment","");
INSERT INTO language VALUES("3154","inbox_request","inbox request","መልእክት","");
INSERT INTO language VALUES("3155","accept_payment","accept payment","ክፍያ አረጋግጥ","");
INSERT INTO language VALUES("3156","verify_payment","Verify payment","ክፍያ አረጋግጥ","");
INSERT INTO language VALUES("3157","verify_payment_organization_payments","Verify organization payments","ክፍያ አረጋግጥ","");
INSERT INTO language VALUES("3158","verify_payment_organization_payments_monthly","Verify organization payments-monthly","ወርሃዊ ክፍያ አረጋግጥ","");
INSERT INTO language VALUES("3159","verify_payment_organization_payments_quarterly","Verify organization payments-quarterly","የሩብ አመት ክፍያ አረጋግጥ","");
INSERT INTO language VALUES("3160","montly_payment_sucessfully_accepted!","Monthly payment successfully accepted!","Monthly payment successfully accepted!","");
INSERT INTO language VALUES("3161","quarterly_payment_sucessfully_accepted!","Quarterly payment successfully accepted!","Quarterly payment successfully accepted!","");
INSERT INTO language VALUES("3162","paid_total_revenue","Paid total revenue","አጠቃላይ ገቢ","");
INSERT INTO language VALUES("3163","remaining","Remaining","የቀረው መጠን","");
INSERT INTO language VALUES("3164","service_charge_info","Service charge info","አገልግሎት ክፍያ","");
INSERT INTO language VALUES("3165","select_all","Select all","ሁሉንም ምረጥ","");
INSERT INTO language VALUES("3166","select_none","Select none","ምንም አትምረጥ","");
INSERT INTO language VALUES("3167","not_report_found!","Not report found!","Not report found!","");
INSERT INTO language VALUES("3168","partially_paid","Partially paid","በከፊል የተከፈል","");
INSERT INTO language VALUES("3169","not found! Check quarter or year!","Not found! Check quarter or year!","Not found! Check quarter or year!","");
INSERT INTO language VALUES("3170","remaining_amount must_be_less_than_99%_and_greater_than_minus_one_%!","Remaining amount must be less than 99% and greater than minus one %!","Remaining amount must be less than 99% and greater than minus one %!","");
INSERT INTO language VALUES("3171","Report not found with given info!","Report not found with given info!","Report not found with given info!","");
INSERT INTO language VALUES("3172","partially_paid_list","Partially paid list","በከፊል የተከፈል ዝርዝር","");
INSERT INTO language VALUES("3173","partially_made_cash","Partially made cash","በከፊል የተከፈል","");
INSERT INTO language VALUES("3174","fully_covered","Fully covered","ሙሉ ክፍያ","");
INSERT INTO language VALUES("3175","remain","Remain","የቀረ መጠን","");
INSERT INTO language VALUES("3176","fully_approve","Fully approve","ቀሪ ክፍያ","");
INSERT INTO language VALUES("3177","Report not found with given information with quarter two!","Report not found with given information with quarter two","Report not found with given information with quarter two","");
INSERT INTO language VALUES("3178","Report not found with given information with this month!","Report not found with given information with this month!","Report not found with given information with this month!","");
INSERT INTO language VALUES("3179","report_per_month_payment","Report per month payment","ወርሃዊ ክፍያ ሪፖርት","");
INSERT INTO language VALUES("3181","summary_preview","Summary preview","ቀድመ እይታ","");
INSERT INTO language VALUES("3182","already_payment_made!","Already payment made!","Already payment made!","");
INSERT INTO language VALUES("3183","request_id","Request_id","Request_id","");
INSERT INTO language VALUES("3184","per_time","Per time","ወቅት","");
INSERT INTO language VALUES("3185","month(quarter)","Month/Quarter","ወር/ሩብ አመት","");
INSERT INTO language VALUES("3186","month or quarter","Month/Quarter","ወር/ሩብ አመት","");
INSERT INTO language VALUES("3187","month/quarter","Month/Quarter","ወር/ሩብ አመት","");
INSERT INTO language VALUES("3188","payment_history","Payment history","ክፍያ ታሪክ","");
INSERT INTO language VALUES("3189","paid_amount","Paid amount","የተከፈለ ምጠን","");
INSERT INTO language VALUES("3190","unpaid_amount","Unpaid amount","ያልተከፈለ ምጠን","");
INSERT INTO language VALUES("3191","payment_details","Payment details","ክፍያ በዝርዝር","");
INSERT INTO language VALUES("3192","fully_paid","Fully paid","ሙሉ ክፍያ","");
INSERT INTO language VALUES("3193","finished","Finished","አልቋል","");
INSERT INTO language VALUES("3194","successfull_payment_covered(100%)","Successfully payment covered(100%)","Successfully payment covered(100%)","");
INSERT INTO language VALUES("3195","closed","Closed","ተዘግቷል","");
INSERT INTO language VALUES("3196","report_per_month_view","Report per month view","ወርሃዊ ሪፖርት","");
INSERT INTO language VALUES("3197","report_per_quarter_preview","Report per quarter preview","የሩብ አመት ሪፖርት","");
INSERT INTO language VALUES("3198","outcome","Outcome","የመጨረሻ ውጤት","");
INSERT INTO language VALUES("3199","max_year","Max year","መድረሻ አመት","");
INSERT INTO language VALUES("3200","min_year","Min year","መነሻ አመት","");
INSERT INTO language VALUES("3201","No report found associated with those information!","No report found associated with those information!","No report found associated with those information!","");
INSERT INTO language VALUES("3202","Report not found with given information with quarter three!","Report not found with given information with quart...","Report not found with given information with quart...","");
INSERT INTO language VALUES("3203","partially paid","Partially paid","በከፊል የተከፈለ","");
INSERT INTO language VALUES("3204","date of approved","Date of approved","የፀደቀበት ቀን","");
INSERT INTO language VALUES("3205","date_of_approved","Date of approved","የፀደቀበት ቀን","");
INSERT INTO language VALUES("3206","send_comment","Send comment","አቤቱታ ላክ","");
INSERT INTO language VALUES("3207","complain(s)","Complain(s)","አቤቱታ","");
INSERT INTO language VALUES("3208","complain_list","Complain list","አቤቱታ ዝርዝር","");
INSERT INTO language VALUES("3209","comment","Comment","አስታያየት","");
INSERT INTO language VALUES("3210","view","View","እይታ","");
INSERT INTO language VALUES("3211","seen","Seen","የታየ","");
INSERT INTO language VALUES("3212","more_message_details","More message details","ተጨማሪ የመልክት ዝርዝር","");
INSERT INTO language VALUES("3213","complain","Complain","አቤቱታ","");
INSERT INTO language VALUES("3214","ok","Ok","እሽ","");
INSERT INTO language VALUES("3215","send_complain_message","Send complain message","አቤቱታ ላክ","");
INSERT INTO language VALUES("3216","client","Client","አጋር","");
INSERT INTO language VALUES("3217","user_type","User type","User type","");
INSERT INTO language VALUES("3218","inbox_complain","Inbox complain","የገቡ ቅሪታዎች","");
INSERT INTO language VALUES("3219","message_seen","Message seen","Message seen","");
INSERT INTO language VALUES("3220","message_details","Message details","የመልክት ዝርዝር","");
INSERT INTO language VALUES("3221","edit kebele","Edit kebele","እንደገና አስተካክል","");
INSERT INTO language VALUES("3222","paid_service_charge_info","Paid service charge info","የተከፈለ የአግልግሎት ክፍያ መረጃ","");
INSERT INTO language VALUES("3223","patient_appointment","Patient appointment","የህሙማን ቀጠሮ","");
INSERT INTO language VALUES("3224","hmis_data","HMIS Data ","HMIS መረጃዎች","");
INSERT INTO language VALUES("3225","HMIS_Data_view","HMIS Data view","HMIS ዝርዝር መረጃዎች","");
INSERT INTO language VALUES("3226","cachement_population","cachment population","ጠቅላላ የቅበላ አቅም","");
INSERT INTO language VALUES("3227","Health_Management_Information_Systems(HMIS)_Data_view","HMIS data view","HMIS ዝርዝር መረጃዎች","");
INSERT INTO language VALUES("3228","Health_Facility_Name","Health_Facility_Name","የጤናው ተቋማት ስም","");
INSERT INTO language VALUES("3229","Type_of_Facility","Type_of_Facility","የጤና ተቋም አይነት","");
INSERT INTO language VALUES("3230","Catchment_Population","Catchment_Population","ጠቅላላ የቅበላ አቅም","");
INSERT INTO language VALUES("3231","OPD_Utilization-#of_Paying","OPD_Utilization-#of_Paying","በክፍያ አጠቃላይ የተመላላሽ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3232","IPD_Utilization_#of-Paying","IPD_Utilization_#of-Paying","በክፍያ አጠቃላይ ተኝቶ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3233","Total_#of_visits_all_patients(HMIS)-Male","Total_#of_visits_all_patients(HMIS)-Male","አጠቃላይ የወንድ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3234","Total-#of_visits_all_patients (HMIS)-Female","Total-#of_visits_all_patients (HMIS)-Female","አጠቃላይ የሴት ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3235","Total-#of_visits_CBHI_clients-Male","Total-#of_visits CBHI clients-Male","የእንሹራንስ ወንድ ታካሚ ብዛት","");
INSERT INTO language VALUES("3236","Total-#of_visits_CBHI_clients-Female","Total-#of_visits CBHI clients-Female","የእንሹራንስ ሴት ታካሚ ብዛት","");
INSERT INTO language VALUES("3237","Total-#of_OPD_claims","Total-#of OPD claims","አጠቃላይ ተመላላሽ ታካሚ ብዛት","");
INSERT INTO language VALUES("3238","Total-#of_IPD_claims","Total-#of IPD claims","አጠቃላይ ተኝቶ ታካሚ ብዛት","");
INSERT INTO language VALUES("3239","Amount_claimed_for_card","Amount_claimed_for_card","የካርድ ድምር","");
INSERT INTO language VALUES("3240","Amount_claimed_for_lab","Amount claimed for lab","የምርመራ ድምር","");
INSERT INTO language VALUES("3241","Amount_claimed_for_drugs & SS","Amount claimed for drugs & SS","የመድሃኒት ድምር","");
INSERT INTO language VALUES("3242","Amount_claimed_for_imaging","Amount claimed for imaging","የኢሜጅንግ ድምር","");
INSERT INTO language VALUES("3243","Amount_claimed_for_surgery","Amount claimed for surgery","የፕሮሲጀር ድምር","");
INSERT INTO language VALUES("3244","Amount_claimed_for_bed_day","Amount claimed for bed day","የአልጋ ድምር","");
INSERT INTO language VALUES("3245","Amount_claimed-other","Amount claimed-other","የሌሎች ድምር","");
INSERT INTO language VALUES("3246","Total_amount_claimed","Total amount claimed","አጠቃላይ ድምር","");
INSERT INTO language VALUES("3247","Patients_referred_for_medical_services","Patients referred for medical services","ለተጨማሪ ህክምና ወደ ሌላ ቦታ የተዘዋዎሩ","");
INSERT INTO language VALUES("3248","Patients_referred_due_to_drug_stock-out","Patients referred due to drug stock-out","በመድሃኒት ማለቅ ምክንያት ወደ ሌላ ቦታ የተዘዋዎሩ","");
INSERT INTO language VALUES("3249","Male-Total_#of_visit(HMIS)","Male-Total #of visit(HMIS)","አጠቃላይ የወንድ ተመላላሽ ታካሚ ብዛት","");
INSERT INTO language VALUES("3250","Female-Total_#of_visit(HMIS)","Female-Total #of visit(HMIS)","አጠቃላይ የሴት ተመላላሽ ታካሚ ብዛት","");
INSERT INTO language VALUES("3251","total_cachment","Total cachment","አጠቃላይ የመቀበል አቅም","");
INSERT INTO language VALUES("3252","evolution","Evolution","የመጨረሻ ውጤት","");
INSERT INTO language VALUES("3253","reason_out","Reason out","ምክንያት","");
INSERT INTO language VALUES("3254","Drug stock-out","Drug stock-out","በመድሃኒት ማላቅ","");
INSERT INTO language VALUES("3255","Medical Service","Medical Service","በህክምና አገልግሎት","");
INSERT INTO language VALUES("3256","patient_evolution","Patient evolution","የህሙማን የመጨረሻ ውጤት","");
INSERT INTO language VALUES("3257","Total-#of_visits_C B H I_clients-Male","Total-#of visits CBHI clients-Male","የእንሹራንስ ወንድ ታካሚ ብዛት","");
INSERT INTO language VALUES("3258","Total_#of_visits_all_patients(H M I S)-Male","Total_#of visits all patients(HMIS)-Male","አጠቃላይ የወንድ ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3259","Total-#of_visits_all_patients(H M I S)-Female","Total-#of visits all patients(HMIS)-Female","አጠቃላይ የሴት ታካሚዎች ብዛት","");
INSERT INTO language VALUES("3260","Total-#of_visits_C B H I_clients-Female","Total-#of visits CBHI clients-Female","የእንሹራንስ ሴት ታካሚ ብዛት","");
INSERT INTO language VALUES("3261","Total-#of_O P D_claims","Total-#of OPD claims","አጠቃላይ ተመላላሽ ታካሚ ብዛት","");
INSERT INTO language VALUES("3262","Total-#of_I P D_claims","Total-#of IPD claims","አጠቃላይ ተኝቶ ታካሚ ብዛት","");
INSERT INTO language VALUES("3263","Total_#of_visits_all_patients (H M I S)-Male","Total_#of_visits_all_patients(HMIS)-Male","አጠቃላይ የወንድ ተመላላሽ ታካሚ ብዛት","");
INSERT INTO language VALUES("3264","Total-#of_visits_all_patients (H M I S)-Female","Total-#of_visits_all_patients(HMIS)-Female","አጠቃላይ የሴት ተመላላሽ ታካሚ ብዛት","");
INSERT INTO language VALUES("3265","close_encounter","Close encounter","Close encounter","");
INSERT INTO language VALUES("3266","No_of_woreda/organazations","No of woreda/org","የተቋማት ብዛት","");
INSERT INTO language VALUES("3267","No of_woreda/org","No of woreda/org","የተቋማት ብዛት","");
INSERT INTO language VALUES("3268","terminate_agreement","Terminate agreement","ውሉን አቋርጥ","");
INSERT INTO language VALUES("3269","terminated","Terminated","ውል ተቋርጧል","");
INSERT INTO language VALUES("3270","agreement_terminated","Agreement terminated","ውል ተቋርጧል","");
INSERT INTO language VALUES("3271","end_agreement","End agreement","ውሉን አቋርጥ","");
INSERT INTO language VALUES("3272","agreement_made","Agreement made","ውል","");
INSERT INTO language VALUES("3273","disable_agreement","Disable agreement","ውሉን አቋርጥ","");
INSERT INTO language VALUES("3274","enable_agreement","Enable agreement","ውል አእንደገና አድስ","");
INSERT INTO language VALUES("3275","terminate_organzation_agreement","Terminate organization agreement","ውሉን አቋርጥ","");
INSERT INTO language VALUES("3276","terminate","Terminate","ውል ተቋርጧል","");
INSERT INTO language VALUES("3277","agreed","Agreed","ውል ገብቷል","");
INSERT INTO language VALUES("3278","report_view_by_quarter","Report view by quarter","ሪፖርት በሩብ አምት","");
INSERT INTO language VALUES("3279","general_finance_stastices","Finance statistics","ዝርዝር የፋይናንስ መረጃ","");
INSERT INTO language VALUES("3280","2012","2012","2012","");
INSERT INTO language VALUES("3281","2013","2013","2013","");
INSERT INTO language VALUES("3282","2014","2014","2014","");
INSERT INTO language VALUES("3283","2015","2015","2015","");
INSERT INTO language VALUES("3284","2016","2016","2019","");
INSERT INTO language VALUES("3285","2017","2017","2017","");
INSERT INTO language VALUES("3286","2018","2018","2018","");
INSERT INTO language VALUES("3287","2019","2019","2019","");
INSERT INTO language VALUES("3288","2020","2020","2020","");
INSERT INTO language VALUES("3289","2021","2021","2021","");
INSERT INTO language VALUES("3290","2022","2022","2022","");
INSERT INTO language VALUES("3291","fisical_quarters","Fiscal quarters","የበጅት አመት","");
INSERT INTO language VALUES("3292","quarters_of_fisical_year","Quarters of fiscal year","የበጅት አመቱ ሩብ አመቶች","");
INSERT INTO language VALUES("3293","Region/Zone","Region/Zone","ክልል/ዞን","");
INSERT INTO language VALUES("3294","July","July","ሀምሌ","");
INSERT INTO language VALUES("3295","Aug","Aug","ነሃሴ","");
INSERT INTO language VALUES("3296","Sep","Sep","መስከረም","");
INSERT INTO language VALUES("3297","Oct","Oct","ጥቅምት","");
INSERT INTO language VALUES("3298","Nov","Nov","ህዳር","");
INSERT INTO language VALUES("3299","Dec","Dec","ታህሳስ","");
INSERT INTO language VALUES("3300","Jan","Jan","ጥር","");
INSERT INTO language VALUES("3301","Feb","Feb","የካቲት","");
INSERT INTO language VALUES("3302","March","Mar","መጋቢት","");
INSERT INTO language VALUES("3303","Apr","Apr","ሚያዚያ","");
INSERT INTO language VALUES("3304","May","May","ግንቦት","");
INSERT INTO language VALUES("3305","Jun","Jun","ሰኔ","");
INSERT INTO language VALUES("3306","quarter-I","Quarter-I","ሩብ ዓመት-I","");
INSERT INTO language VALUES("3307","quarter-II","Quarter-II","ሩብ ዓመት-II","");
INSERT INTO language VALUES("3308","quarter-III","Quarter-III","ሩብ ዓመት-III","");
INSERT INTO language VALUES("3309","quarter-IV","Quarter-IV","ሩብ ዓመት-IV","");
INSERT INTO language VALUES("3310","Mar","Mar","መጋቢት","");
INSERT INTO language VALUES("3311","ሐምሌ","Jul","ሐምሌ","");
INSERT INTO language VALUES("3312","ነሐሴ","Aug","ነሃሴ","");
INSERT INTO language VALUES("3313","H","H","H","");
INSERT INTO language VALUES("3314","K","K","K","");
INSERT INTO language VALUES("3315","Puag","Puag","ጷጉሜ","");
INSERT INTO language VALUES("3316","new_patient_profile","New patient profile","አድስ ህሙማን ማህደር","");
INSERT INTO language VALUES("3317","medical_record_number","Medical record number","ካርድ ቁጥር","");
INSERT INTO language VALUES("3318","address_or_kebele","Address/kebele","አድራሻ/ቀበሌ","");
INSERT INTO language VALUES("3319","date_of_birth","Date of birth","የትውልድ ቀን","");
INSERT INTO language VALUES("3320","user_account_list","User account list","የተጠቃሚ ዝርዝር","");
INSERT INTO language VALUES("3321","fanance_chart","Finance chart","ፋይናንስ ቻርት","");
INSERT INTO language VALUES("3322","deligation_canceled_successfully","Delegation canceled successfully","Delegation canceled successfully","");
INSERT INTO language VALUES("3323","kebele_or_address","Address/kebele","አድራሻ/ቀበሌ","");
INSERT INTO language VALUES("3324","paid_cash","Paid cash","ብካሽ የተከፈል","");
INSERT INTO language VALUES("3367","system_configuration","","","");
INSERT INTO language VALUES("3325","servics_charge","Services Charge","አገልግሎት ክፍያ","");
INSERT INTO language VALUES("3326","CBHI_#code","CBHI_#Code","CBHI_#Code","");
INSERT INTO language VALUES("3327","age/date_of_birth","Age/date of birth","እድሜ/የትውልድ ዘመን","");
INSERT INTO language VALUES("3328","renewal","Renewal","እድሳት","");
INSERT INTO language VALUES("3329","renewal_status","Renewal Status","የእድሳት ሁነታ","");
INSERT INTO language VALUES("3330","set_up_renewal_year","Renewal year","የእድሳት ዓመት","");
INSERT INTO language VALUES("3331","renew","Renew","እንደገና አድስ","");
INSERT INTO language VALUES("3332","set_expiry_year","Set expiry year","አገልግሎቱ የሚያልቅበትን አመት ሙላ","");
INSERT INTO language VALUES("3333","renewal_updated","Renewal year successfully updated","Renewal year successfully updated","");
INSERT INTO language VALUES("3334","list_of_beneficiaries","List of beneficiaries","እንሹራንስ ተጠቃሚዎች ","");
INSERT INTO language VALUES("3335","individual_report","Individual report","ግላዊ ሪፖርት","");
INSERT INTO language VALUES("3336","pending","Pending","Pending","");
INSERT INTO language VALUES("3337","customed_report","Costumed report","ከስተም ሪፖርት","");
INSERT INTO language VALUES("3338","customed_report_view","Costumed report view","ከስተም ሪፖርት ቪው","");
INSERT INTO language VALUES("3339","generate_customed_report","Generate costumed report","ከስተም ሪፖርት አውጣ","");
INSERT INTO language VALUES("3340","initial_year","Initial year","መነሻ አመት","");
INSERT INTO language VALUES("3341","final_year","Final year","መድረሻ አመት","");
INSERT INTO language VALUES("3342","initial_month","Initial month","መነሻ ወር","");
INSERT INTO language VALUES("3343","final_month","Final month","መድረሻ ወር","");
INSERT INTO language VALUES("3344","initial_date","Initial date","መነሻ ቀን","");
INSERT INTO language VALUES("3345","final_date","Final date","መድረሻ ቀን","");
INSERT INTO language VALUES("3346","invalid_year_selection!!","Invalid year selection!","Invalid year selection!","");
INSERT INTO language VALUES("3347","invalid_year_and_month_selection!!","Invalid year and month selection!","Invalid year and month selection!","");
INSERT INTO language VALUES("3348","invalid_year_and_month_and_date_selection!","Invalid year_and month and date selection!","Invalid year_and month and date selection!","");
INSERT INTO language VALUES("3349","generate_customed_report_per_district","Costumed report per district","Costumed report per district","");
INSERT INTO language VALUES("3350","date_interval","Date interval","የቀን ልዩነት","");
INSERT INTO language VALUES("3351","intial_date","Initial date","መነሻ ቀን","");
INSERT INTO language VALUES("3352","month_interval","Month interval","የወር ልዩነት","");
INSERT INTO language VALUES("3353","year_interval","Year interval","የአመት ልዩነት","");
INSERT INTO language VALUES("3354","generate_customed_report_per_user","Costumed report per user","Costumed report per user","");
INSERT INTO language VALUES("3355","generate_customed_report_per_agreement","Costumed report per agreement","Costumed report per agreement","");
INSERT INTO language VALUES("3356","this_user_has_no_any_registration_on_this_time_interval","This user has no any registration on this time interval","This user has no any registration on this time interval","This user has no any registration on this time interval");
INSERT INTO language VALUES("3357","generate_customed_report_per_registration","Generate costumed report per registration","Generate costumed report per registration","");
INSERT INTO language VALUES("3358","registration","Registration","ምዝገባ","");
INSERT INTO language VALUES("3359","patient_registration","Patient registration","ህሙማን ምዝገባ","");
INSERT INTO language VALUES("3360","income_via_agreement","Income via agreement","","");
INSERT INTO language VALUES("3361","general_report_view","General report view","","");
INSERT INTO language VALUES("3362","next","","","");
INSERT INTO language VALUES("3368","admin_level_setting","","","");
INSERT INTO language VALUES("3365","checklist_add","","","");
INSERT INTO language VALUES("3366","check_status_add","","","");
INSERT INTO language VALUES("3369","allowed","","","");
INSERT INTO language VALUES("3370","approved_finance","","","");
INSERT INTO language VALUES("3371","covid_user","","","");
INSERT INTO language VALUES("3372","print_account_info","","","");
INSERT INTO language VALUES("3373","account_info_prin","","","");
INSERT INTO language VALUES("3374","all_patient_info_print","","","");
INSERT INTO language VALUES("3375","payment_history_pdf_print","","","");
INSERT INTO language VALUES("3376","select_quarter","","","");
INSERT INTO language VALUES("3377","all_finance_print","","","");
INSERT INTO language VALUES("3378","yesterday","Yesterday","ትናንት","");
INSERT INTO language VALUES("3379","last_week","","","");
INSERT INTO language VALUES("3380","last_year","","","");
INSERT INTO language VALUES("3381","last_month","","","");
INSERT INTO language VALUES("3382","search for","","","");
INSERT INTO language VALUES("3383","users_search_result","","","");
INSERT INTO language VALUES("3384","welcome! you are new user please change common password \"jimma\" with new strong  password for security purpuse","","","");
INSERT INTO language VALUES("3385","organization","","","");
INSERT INTO language VALUES("3386","today_encounter","","","");
INSERT INTO language VALUES("3387","fiscal_year","","","");
INSERT INTO language VALUES("3388","register_new_user","","","");
INSERT INTO language VALUES("3389","new_user_profile","","","");
INSERT INTO language VALUES("3390","exception","","","");
INSERT INTO language VALUES("3391","refuge","","","");
INSERT INTO language VALUES("3392","sub-city","","","");
INSERT INTO language VALUES("3393","DOB","","","");
INSERT INTO language VALUES("3394","OPD_Utilization-#of_Non_Paying","","","");
INSERT INTO language VALUES("3395","IPD_Utilization_#of_Non_Paying","","","");
INSERT INTO language VALUES("3396","better_healed","","","");
INSERT INTO language VALUES("3397","IPD_Utilization_#of_Paying","","","");
INSERT INTO language VALUES("3398","service_utilization","","","");
INSERT INTO language VALUES("3399","add_new_beneficiary","","","");
INSERT INTO language VALUES("3400","visit_information","","","");
INSERT INTO language VALUES("3401","beneficiary_add","","","");
INSERT INTO language VALUES("3402","beneficiary_info","","","");
INSERT INTO language VALUES("3403","family_code","","","");
INSERT INTO language VALUES("3404","select_indigent","","","");
INSERT INTO language VALUES("3405","mname","","","");
INSERT INTO language VALUES("3406","lname","","","");
INSERT INTO language VALUES("3407","first_name","","","");
INSERT INTO language VALUES("3408","middle_name","","","");
INSERT INTO language VALUES("3409","last_name","","","");
INSERT INTO language VALUES("3410","cdate","","","");
INSERT INTO language VALUES("3411","in_our_woreda","","","");
INSERT INTO language VALUES("3412","prepare_report","","","");
INSERT INTO language VALUES("3413","today_visits","","","");
INSERT INTO language VALUES("3414","relation","","","");
INSERT INTO language VALUES("3415","CBHI#ID","","","");
INSERT INTO language VALUES("3416","basic_beneficiary_information","","","");
INSERT INTO language VALUES("3417","no_of_family","","","");
INSERT INTO language VALUES("3418","edit_beneficiary","","","");
INSERT INTO language VALUES("3419","Report not found with given information with quarter one!","","","");
INSERT INTO language VALUES("3420","add_your_kebele","","","");
INSERT INTO language VALUES("3421","woreda_kebele","","","");
INSERT INTO language VALUES("3422","beneficiary__profile","","","");
INSERT INTO language VALUES("3423","new_beneficiary","","","");
INSERT INTO language VALUES("3424","add_family","","","");
INSERT INTO language VALUES("3425","add_payment","","","");
INSERT INTO language VALUES("3426","created_report_view","","","");
INSERT INTO language VALUES("3427","service charge","","","");
INSERT INTO language VALUES("3428","income","","","");
INSERT INTO language VALUES("3429"," select","","","");
INSERT INTO language VALUES("3430","full_code","","","");
INSERT INTO language VALUES("3431","add_yearly_payment","","","");
INSERT INTO language VALUES("3432","ETB","","","");
INSERT INTO language VALUES("3433","beneficiary status","","","");
INSERT INTO language VALUES("3434","payment information by renewal year","","","");
INSERT INTO language VALUES("3435","new_letter_no","","","");
INSERT INTO language VALUES("3436","K/F/C/GMB","","","");
INSERT INTO language VALUES("3437","payment_request","","","");
INSERT INTO language VALUES("3438","service_charge_information","","","");
INSERT INTO language VALUES("3439","history","","","");
INSERT INTO language VALUES("3440","total_patient_registration","","","");
INSERT INTO language VALUES("3441","grant_master_list","","","");
INSERT INTO language VALUES("3442","today_service_charge","","","");
INSERT INTO language VALUES("3443","last_quarter","","","");
INSERT INTO language VALUES("3444","not_allowed_to_create_encounter!","","","");
INSERT INTO language VALUES("3445","database","","","");



DROP TABLE IF EXISTS link_tbl;

CREATE TABLE `link_tbl` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `woreda` varchar(20) NOT NULL,
  `linked_by` varchar(20) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS log;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS message;

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_thread_code` longtext NOT NULL,
  `message` longtext NOT NULL,
  `sender` longtext NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO message VALUES("4","3a88342b14ecb69","ANICHE FESAM","admin-44","10/12/2020 13:38:32","0");
INSERT INTO message VALUES("5","e5001f46fef1428","hello shemesya this time online tanks","admin-36","10/14/2020 11:42:21","1");
INSERT INTO message VALUES("13","f8a73e23d5dde42","Hello Yakob? If any problem please inform me!","admin-3","10/22/2020 07:41:36","1");
INSERT INTO message VALUES("14","35d34b8f980d4fe","Abdul semod selam new? Yesterday Dula was going to Zenash to talk about our Training cost. But she said something please discuss the issue with Dula how can we continue!","admin-3","10/23/2020 08:37:00","0");
INSERT INTO message VALUES("15","9627ac81bfea362","Why You have been created  encounter using this card number(887518) patient in September?","admin-11","10/26/2020 13:35:48","1");
INSERT INTO message VALUES("16","024bed996077c17","Why You have been created encounter using this card number(887518) patient in September?","admin-3","10/26/2020 13:37:07","1");



DROP TABLE IF EXISTS message_thread;

CREATE TABLE `message_thread` (
  `message_thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_thread_code` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sender` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reciever` longtext COLLATE utf8_unicode_ci NOT NULL,
  `last_message_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_thread_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO message_thread VALUES("19","c79e973b24877d7","admin-44","admin-34","2020-10-12 13:21:59");
INSERT INTO message_thread VALUES("20","3a88342b14ecb69","admin-44","admin-39","2020-10-12 14:38:32");
INSERT INTO message_thread VALUES("21","e5001f46fef1428","admin-36","admin-48","2020-10-14 12:42:21");
INSERT INTO message_thread VALUES("22","024bed996077c17","admin-3","admin-43","2020-10-19 08:37:44");
INSERT INTO message_thread VALUES("23","f8a73e23d5dde42","admin-3","admin-34","2020-10-19 08:38:47");
INSERT INTO message_thread VALUES("24","04b8c46e422454e","admin-3","admin-48","2020-10-19 08:40:30");
INSERT INTO message_thread VALUES("25","f87f2f958960d38","admin-36","admin-3","2020-10-21 15:34:18");
INSERT INTO message_thread VALUES("26","35d34b8f980d4fe","admin-3","admin-5","2020-10-23 09:37:00");
INSERT INTO message_thread VALUES("27","9627ac81bfea362","admin-11","admin-43","2020-10-26 14:35:48");



DROP TABLE IF EXISTS mode;

CREATE TABLE `mode` (
  `maintainac_id` int(11) NOT NULL AUTO_INCREMENT,
  `maintainac_mode` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`maintainac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO mode VALUES("1","0");



DROP TABLE IF EXISTS noticeboard;

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_timestamp` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




DROP TABLE IF EXISTS outcome;

CREATE TABLE `outcome` (
  `outcome_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`outcome_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO outcome VALUES("1","Died");
INSERT INTO outcome VALUES("2","Escape");
INSERT INTO outcome VALUES("3","Back-referral");
INSERT INTO outcome VALUES("4","Higher-referral");
INSERT INTO outcome VALUES("5","Discharged");



DROP TABLE IF EXISTS parent;

CREATE TABLE `parent` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `woreda_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreemenrt_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agreed` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO parent VALUES("1","D01","Jimma town labor and social affair office","10","4","Credit Service","Terminated","0");
INSERT INTO parent VALUES("2","D02","Shebe Sembo Woreda","10","4","Health Care finance","Terminated","0");
INSERT INTO parent VALUES("3","D03","Meko Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("5","D05","Godere District ","01","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("11","08","Limu Seka Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("12","06","Limu Kosa Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("13","10","Tirro Afeta Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("14","11"," Senenxema Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("15","07","Dedo Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("16","09","Seka Cheqorsa Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("17","15","Mencho Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("18","10","Omonada Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("19","03","Gumay Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("20","04","Kersa Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("21","01","Gera woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("22","16","Chora Botor Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("23","14","Omobeyem Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("24","02","Goma Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("25","05","Mana Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("26","12","Sokoru Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("27","01","Borecha Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("28","06","Bedele Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("29","05","Gechi Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("30","02","Deddessa Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("31","04","Chorraa Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("32","03","Chewaqa Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("33","04"," Horumu Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("34","07","Yayu Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("35","06"," Bilo Nopha Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("36","08","Alle Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("37","09","Diddo Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("38","08","Mettu Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("39","03","Darimu Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("40","03","Bure Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("41","D22","Ginbo woreda","21","7","Health Insurance","Yes","0");
INSERT INTO parent VALUES("42","D23"," JU Students Service","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("43","D24"," JU Health Institue","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("90","03","Alege Sachi","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("45","jue","JU Permanent Employee","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("46","Agri","JU Agri and Veternary College","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("47","JIT"," Jimma Institue of technology","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("48","D29","Jimma Town Prisons Adminstration","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("49","D30","Bonga Prisons Adminstration","21","7","Credit Service","Yes","0");
INSERT INTO parent VALUES("50","D31","Jimma town city bus service","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("51","D32","Limu Buna Farm Development","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("52","D33","Arjo Dedessa Sugar factory","19","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("53","D34","Gambela Refugee Repatriation Organization","02","8","Credit Service","Yes","0");
INSERT INTO parent VALUES("54","D35"," Gilgel Gebe No 1 power station","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("55","D36","Salini-impregilo S.P.A Koysha Hydroelectric pro","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("56","D36","Gambella MSF Spain","02","8","Credit Service","Yes","0");
INSERT INTO parent VALUES("57","D37","Gambella MSF Holland","02","8","Credit Service","Yes","0");
INSERT INTO parent VALUES("58","D38","Bebeqa Buna farm devepment","145 ","7","Credit Service","Yes","0");
INSERT INTO parent VALUES("60","CBE-Main","CBE Jimma Main branch","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("61","J/A/D","Jimma Abajifar Airport","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("62","D42","Ethiopia Electric service South region","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("63","G/E/L/D","Gojeb farm development organization","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("64","D44","Addis Kidan Bete/Childhood Project","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("65","JUSH","Jimma Medical Center","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("68","D45","Nono Benja Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("69","D46","Sigmo Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("70","D47","Agaro town","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("71","10","Hallo Woreda","09","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("72","23","Tolaye Woreda","10","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("73","D200","Federal Police Commission Fetno Derash Jimma","10","4","Credit Service","Yes","0");
INSERT INTO parent VALUES("74","07","Debohana","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("75","08","Dega Woreda","19","4","Health Insurance","Yes","0");
INSERT INTO parent VALUES("76","D201","Hydroelectric Power Station","98","7","Credit Service","Yes","0");
INSERT INTO parent VALUES("77","D122","Jikawo Woreda","04","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("78","D123","Lare Woreda","04","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("79","D124","Akobo Woreda","04","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("80","D125","Matar Woreda","04","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("81","D126","Makuey Woreda","04","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("82","D04","Abobo Woreda","03","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("83","D128","Dimma Woreda","03","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("84","D129","Gambela Town","03","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("85","D130","Gog Woreda","03","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("86","D131","Jor District","03","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("87","D132","Mengesh District","01","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("88","D08","Itang Special  District","02","8","Health Insurance","Yes","0");
INSERT INTO parent VALUES("89","D145","Tepi  Green Coffee farm","145","7","Credit Service","Yes","0");



DROP TABLE IF EXISTS password;

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

INSERT INTO password VALUES("1","90","5","defualt","3","default","default","defualt");



DROP TABLE IF EXISTS patients;

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`patient_id`),
  UNIQUE KEY `mrn_id` (`mrn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1032 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO patients VALUES("1","002154","11/08439","D23","K/F/C/GMB","CB Health Insurance","ITENESH HORDOFA","F","","Dabeniabo","1958-03-01","","","4","10","K/F/C/GMB/10/D23/11/08439","11","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("2","00440","DNS/58/14/013","D29","Prisoner","Credit Service","MELKAMU GEBEYEHU DAGNACHEW","M","","MAREMIYA BET","1968-02-05","","","4","10","Prisoner/DNS/58/14/013","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("3","005353","0212992/01","04","K","CB Health Insurance","HADEZUBERE ABADIGA ABAHUSENE","F","","Omoticho","1967-03-02","","","4","10","K/10/04/0212992/01","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("4","009555","267/19/013","D29","Employee","Credit Service","MENIGESHA DEGEFA ARIGAW","M","0917002522","","1959-02-01","","","4","10","Employee/267/19/013","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("5","010034","16/00810","10","K","CB Health Insurance","MEREMA HUSEN MUKESEN","F","","Harogiba","1940-02-02","","","4","10","K/10/10/16/00810","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("6","010243","02/09042","02","K","CB Health Insurance","TIGLU BEQELE MCA","M","","Xsosadach","1933-02-06","","","4","10","K/10/02/02/09042","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("7","013412","01/00730","09","K","CB Health Insurance","GETACHEW GIRMA TADESE","M","","01","1977-02-09","","","4","10","K/10/09/01/00730","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("8","015537","07/00739/01","05","K","CB Health Insurance","HADESUFIAN ABASAMBI ABASESE","F","","Gudeta bula","1960-02-05","","","4","10","K/10/05/07/00739/01","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("9","019686","22/12078","05","K","CB Health Insurance","MAFUE HAFIZ ABATEMAME","M","","Bilida","1997-02-19","","","4","10","K/10/05/22/12078","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("10","021010","26/02601","07","H","CB Health Insurance","KESBIRAHANU MIRET AMARA","M","","Ofole","1973-02-18","","","4","10","H/10/07/26/02601","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("11","021593","30/04051/04","02","K","CB Health Insurance","MAREM AHMD KASEW","F","0912922734","Bureqajira","2007-02-05","","","4","19","K/19/02/30/04051/04","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("12","022240","19/01860/01","04","K","CB Health Insurance","KANANI ETICH EBA","F","","Sume","1948-02-12","","","4","10","K/10/04/19/01860/01","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("13","022610","15/00607-2","10","K","CB Health Insurance","ABARAGO ABASAMBI ABAMALIKA","M","","Mica","1953-02-21","","","4","10","K/10/10/15/00607-2","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("14","022613","25/09020/00","04","H","CB Health Insurance","DIRIBA ASAFA ABUSH","M","","SHAWAXOXOBI","1972-02-11","","","4","10","H/10/04/25/09020/00","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("15","023167","30/01887","09","K","CB Health Insurance","SHEALIY ABALULESA ABADULA","M","","Satamagoro","1954-02-19","","","4","10","K/10/09/30/01887","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("16","023424","27/07002","04","K","CB Health Insurance","ABADIGA ABAWRI ABAJOBR","M","","Gunju","1970-01-01","","","4","10","K/10/04/27/07002","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("17","023454","01/02082","04","H","CB Health Insurance","HADHADILBI SHEHASEN ABABULGU","F","","Wayu","1990-02-11","","","4","10","H/10/04/01/02082","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("18","023471","35/01406","07","K","CB Health Insurance","ABASAMBI ABAGOJM ABADULA","M","0918976369","Warokolobo","1944-02-26","","","4","10","K/10/07/35/01406","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("19","024026","12/00188/05","15","K","CB Health Insurance","NAWI ABANEGA ABASAMBI","M","","Irigio","1970-01-01","","","4","10","K/10/15/12/00188/05","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("20","025955","18/01505","05","K","CB Health Insurance","ABARAYA ABADIGA SEKE","M","","Doyotoli","1940-02-10","","","4","10","K/10/05/18/01505","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("21","025957","08177/05","05","K","CB Health Insurance","KNZI ABAJHD ABADIGA","F","","Sombo","1970-01-01","","","4","10","K/10/05/08177/05","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("22","026702","15/02406","05","K","CB Health Insurance","AWOL ABATEMAM ABADURA","M","","Kore lelisa","1967-01-19","","","4","10","K/10/05/15/02406","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("23","026967","7/007/07","05","K","CB Health Insurance","SAYID RAYA ABAGALANI","M","","","1985-02-03","","","4","10","K/10/05/7/007/07","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("24","029789","20/03443","05","H","CB Health Insurance","SAIDE ABANEGA ABASANBE","M","0917944663","Bebelakara","1980-02-04","","","4","10","H/10/05/20/03443","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("25","029792","05/01578/02","04","K","CB Health Insurance","HADENIYA ABAMECHA ABAGISA","F","","Tikurebaleto","1948-02-02","","","4","10","K/10/04/05/01578/02","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("26","029902","9/03906/01","07","H","CB Health Insurance","FATUMA ABAJIHAD ABAMECHA","F","","D/s","1965-02-03","","","4","10","H/10/07/9/03906/01","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("27","030465","30/01442","07","H","CB Health Insurance","AHIMED MAMED ABAJIRGA","M","","SAPO","1975-02-16","","","4","10","H/10/07/30/01442","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("28","031911","01/07880","10","H","CB Health Insurance","KEZINA ABABULIGU ABAKETA","F","","01","1978-02-02","","","4","10","H/10/10/01/07880","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("29","031943","07/11184/02","04","K","CB Health Insurance","HDAQORO ABAMECA ABAWAJI","F","","Toliqarsu","1956-02-05","","","4","10","K/10/04/07/11184/02","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("30","032769","11/01115","05","K","CB Health Insurance","ABATAMAM ABAGARO ABABGIBE","M","","Sombomana","1957-02-18","","","4","10","K/10/05/11/01115","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("31","032941","08/09620","05","K","CB Health Insurance","MEKURIYA MULEGATA NGAYA","M","","Yabu","1958-02-12","","","4","10","K/10/05/08/09620","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("32","033249","32/05818","02","K","CB Health Insurance","ABAZINABE HAJE ABADIGA","M","","Kota","1955-02-04","","","4","10","K/10/02/32/05818","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("33","033764","25/02785/01","07","K","CB Health Insurance","KEZNE MOHMED ABABULGU","F","","Odatata","1997-02-19","","","4","10","K/10/07/25/02785/01","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("34","033873","27/07524/04","04","K","CB Health Insurance","DELIL ABAFITA ABAWAR","M","","Gungu","1945-02-12","","","4","10","K/10/04/27/07524/04","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("35","033884","26/02494","04","K","CB Health Insurance","NURA ABABORE ABAGERO","M","","Ankeso","1997-02-16","","","4","10","K/10/04/26/02494","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("36","033886","03/02023/01","04","K","CB Health Insurance","ZAME ABAMACA ABALOFE","M","0923428889","Babo","1967-02-11","","","4","10","K/10/04/03/02023/01","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("37","034050","01/11743","05","K","CB Health Insurance","NEFISA SHEAHIMED SHESIRAJ","F","","Dowa","1981-02-05","","","4","10","K/10/05/01/11743","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("38","034521","2801789","04","K","CB Health Insurance","HDNIZIFE ABAJIHADE ABAGERO","F","","Kelecha","1953-02-02","","","4","10","K/10/04/2801789","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("39","034763","01/01571","01","K","CB Health Insurance","DIRIBE TULE TOLA","F","0923345547","Chira","1978-08-18","","","4","10","K/10/01/01/01571","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("40","034819","22/03702","05","K","CB Health Insurance","TSEHAY ABRHAM BEYENE","M","0923900771","Bilida","1948-02-03","","","4","10","K/10/05/22/03702","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("41","034820","02/25479","02","K","CB Health Insurance","KIDEST GARAMA GOBANA","F","","Tasosadcha","1978-02-19","","","4","10","K/10/02/02/25479","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("42","034874","27/00364","CBE-Main","K","CB Health Insurance","FAJE ABABORE ABASIMELI","M","","Gnju","1970-02-03","","","4","10","K/10/CBE-Main/27/00364","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("43","035468","4/01803","07","K","CB Health Insurance","ABAJEBELE ABABULEGU ABAGERO","M","","Abokoyi","1930-02-04","","","4","10","K/10/07/4/01803","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("44","035469","12/11138","02","K","CB Health Insurance","TADALE HALAMARIYAM GAMADA","M","","Gembe","1958-02-10","","","4","10","K/10/02/12/11138","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("45","036169","30/08949/01","04","K","CB Health Insurance","MAMAD ABAGARO ABABORA","M","","Marawa","1971-02-18","","","4","10","K/10/04/30/08949/01","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("46","037187","57/2012","JIT","Employee","Credit Service","WSN WNDEMU NBIU","F","","Jiren","1985-02-12","","","4","10","Employee/57/2012","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("47","037307","14/08463","02","K","CB Health Insurance","ABANEGA ABADIGA ABAJOBIR","M","0913341779","Omogobu","1940-02-02","","","4","10","K/10/02/14/08463","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("48","038136","01/05127/01","09","K","CB Health Insurance","KERIYYA ABABIYA ABABULGU","F","","01","1978-02-07","","","4","10","K/10/09/01/05127/01","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("49","038934","16/03235/03","04","K","CB Health Insurance","KALID NEZIF ABARESHAD","M","","SUNKULE","1999-02-03","","","4","10","K/10/04/16/03235/03","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("50","039405","06/033977","01","H","CB Health Insurance","NESHA ABAGERO ABAGOJAM","M","","Dusta","1975-02-19","","","4","10","H/10/01/06/033977","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("51","039407","03/04303/01","06","K","CB Health Insurance","SIMEGE KASA ALEMAYHU","F","","Harogeba","1955-02-03","","","4","10","K/10/06/03/04303/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("52","039575","01/00151/01","04","K","CB Health Insurance","FATUMA ABAGIJAM ABAWAREY","F","0917119545","Wayu","1952-03-01","","","4","10","K/10/04/01/00151/01","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("53","044584","05/24/03111","05","K","CB Health Insurance","ABAGARO ABABULGU ABABORA","M","","Kentary","1937-02-11","","","4","10","K/10/05/05/24/03111","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("54","044987","9/01529","07","K","CB Health Insurance","ABAGARO ABASESE ABADIKO","M","","Dimasarxe","1968-02-18","","","4","10","K/10/07/9/01529","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("55","045381","26/0122/0","04","H","CB Health Insurance","TAJU ABAFIXA ","M","","Akaso","1964-02-19","","","4","10","H/10/04/26/0122/0","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("56","045458","19/05781","05","K","CB Health Insurance","CHALITU AWOLI ABAFITA","F","","Doyobikela","1998-02-02","","","4","10","K/10/05/19/05781","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("57","055546","13/01462/01","D12","K","CB Health Insurance","HDEKANZI ABANEGA ABAMEHA","F","","Omoduri","1968-02-04","","","4","10","K/10/D12/13/01462/01","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("58","057040","08/00092","07","K","CB Health Insurance","ABABIYA ABAFOGE ABAGERO","M","","Cahaletabulo","1950-02-11","","","4","10","K/10/07/08/00092","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("59","062542","10/03386","02","K","CB Health Insurance","ZAYTUNA MAHAMAD ABAGIGE","F","","Andode","1960-02-04","","","4","10","K/10/02/10/03386","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("60","065676","03/00104/04","09","K","CB Health Insurance","YASIIN NASIRE ABAMEHA","M","","GEBABOSO","1999-02-11","","","4","10","K/10/09/03/00104/04","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("61","068333","25/01618","04","K","CB Health Insurance","ABAFITA ABAFOGI ABAROGE","M","","Kalacha","1935-02-02","","","4","10","K/10/04/25/01618","48","Monday, October 12, 2020");
INSERT INTO patients VALUES("62","075847","01/03137","05","K","CB Health Insurance","EJIGAYO ADIMASU ALAMU","F","","Yabu","1937-02-19","","","4","10","K/10/05/01/03137","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("63","076823","03/20930","09","K","CB Health Insurance","HDHZUBER ABALULESA ABAFOGI","F","","Gibeboso","1970-01-01","","","4","10","K/10/09/03/20930","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("64","077937","10/01573/01","04","K","CB Health Insurance","ABAJABEL ABAGARO ABADULA","M","","Kitibile","1948-02-02","","","4","10","K/10/04/10/01573/01","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("65","079490","14/04971","05","K","CB Health Insurance","HDKANEZE ABATAMAME ABAFOGE","M","","SAYBONTU","1960-02-19","","","4","10","K/10/05/14/04971","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("66","080166","15/02431","05","K","CB Health Insurance","NASIR ABAJIHAD ABAGIBE","M","","Qorelalisa","1940-02-08","","","4","10","K/10/05/15/02431","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("67","084804","21/08813","09","H","CB Health Insurance","AHIMD ABAFITA ABGERO","M","","Deto KERSO","1970-02-04","","","4","10","H/10/09/21/08813","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("68","090755","01/10211","09","K","CB Health Insurance","HADEKUMA ABAGERO ABAGODU","F","","Seka 01","1952-02-05","","","4","10","K/10/09/01/10211","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("69","093767","16/03405","05","H","CB Health Insurance","YAZIDE ABAGUMBUL ABAMEGALE","M","","Hwndakenane","1967-02-04","","","4","10","H/10/05/16/03405","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("70","094552","8/03069/02","07","K","CB Health Insurance","ABRAHAM DOLO HAGOSE","M","0976571021","Chltebulo","1992-02-29","","","4","10","K/10/07/8/03069/02","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("71","099686","22/12078","05","K","CB Health Insurance","MAFUZE HAFEZE ABATEMAME","M","","Belda","1997-02-18","","","4","10","K/10/05/22/12078","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("72","100387","04/06392","04","K","CB Health Insurance","ABABIYA ABAJEBEL ABAFOGI","M","","Girma","1970-02-22","","","4","10","K/10/04/04/06392","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("73","105070","09/00142","15","H","CB Health Insurance","ABANAGA ABAMOGA ABAWAJI","M","","Garimu","1945-02-03","","","4","10","H/10/15/09/00142","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("74","119588","08/12320","05","H","CB Health Insurance","SHITO ABAGUMBULE ABABORA","F","","Lemelelisa","1974-02-01","","","4","10","H/10/05/08/12320","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("75","127575","24/09375","05","K","CB Health Insurance","ABAFITA ABADURA ABAJOBERE","M","0911800218","Kenterey","1955-02-06","","","4","10","K/10/05/24/09375","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("76","136306","27/03244","07","K","CB Health Insurance","ABANIME ABABORE ABAWARE","M","0610096322","KORETEYOSEREBE","1958-02-03","","","4","10","K/10/07/27/03244","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("77","139388","9/04906","07","H","CB Health Insurance","ABATAMAM ABAGARO ABADUDU","M","","Dimasarxe","1948-02-18","","","4","10","H/10/07/9/04906","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("78","150018","01/06970/02","05","K","CB Health Insurance","ABEDULIMEJEDE ZINABE ABABULIGU","M","0988441652","Yebu","1999-03-02","","","4","10","K/10/05/01/06970/02","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("79","159615","24/04136","05","K","CB Health Insurance","ABABOR ABAWAJI ABARUSKI","M","","Kentri","1945-02-18","","","4","10","K/10/05/24/04136","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("80","164045","12/00320","15","K","CB Health Insurance","ABARAYYA ABAFOGI ABADULA","M","","Trgibo","1951-02-07","","","4","10","K/10/15/12/00320","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("81","191594","19/03754","05","K","CB Health Insurance","KENZI HASSEN ABAGUNBUL","F","","Doyobiqila","1975-02-04","","","4","10","K/10/05/19/03754","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("82","194103","12/06273","05","K","CB Health Insurance","SEFU MUSTEFA WOYESA","M","0912285197","Seko","1977-02-05","","","4","19","K/19/05/12/06273","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("83","194623","25/12152","04","K","CB Health Insurance","DAMISE HYLEMARIYAM MALIKA","M","","Shawaxoxobi","1935-02-11","","","4","10","K/10/04/25/12152","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("84","194786","00012/01","07","K","CB Health Insurance","HADEWERA ABADIGA ABADEKO","F","","KETAKADEDA","1944-02-03","","","4","10","K/10/07/00012/01","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("85","195053","27/00219","04","K","CB Health Insurance","ABAMECHA ABAFOGI ABARORO","M","","Gunju","1940-02-04","","","4","10","K/10/04/27/00219","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("86","195182","13/00130","15","K","CB Health Insurance","ABARAYA ABALAMU ABADULA","M","","Warasambo","1951-02-03","","","4","10","K/10/15/13/00130","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("87","196295","0500554","02","K","CB Health Insurance","SHIFA ABAMILKI ABAGRO","M","","Toba","1942-02-03","","","4","10","K/10/02/0500554","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("88","197667","33/01458/02","06","K","CB Health Insurance","MISRA ABAMECHA ABASAMBI","F","0909877599","Mito gundu","1980-02-05","","","4","10","K/10/06/33/01458/02","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("89","198858","13/00827/01","04","K","CB Health Insurance","HAJIABAJABAL FARIS AMZA","M","0917161988","Dogoso","1953-02-18","","","4","10","K/10/04/13/00827/01","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("90","209612","05/01644","04","K","CB Health Insurance","SHENASERA ABADUR ABADIKO","M","","Xqurebalto","1970-01-01","","","4","10","K/10/04/05/01644","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("91","219746","30/05506","09","K","CB Health Insurance","ABAJIHAD ABALULASA ABAGERO","M","","SENTMAGORU","1959-02-12","","","4","10","K/10/09/30/05506","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("92","233223","06/01351/1","07","K","CB Health Insurance","HADEBIYA ABAJIHAD ABATULEM","F","0988464456","Belo","1958-02-19","","","4","10","K/10/07/06/01351/1","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("93","233533","16/04115","02","K","CB Health Insurance","AMATA SILASE GEBREGIYGIS","F","","BULBULO","1947-02-11","","","4","10","K/10/02/16/04115","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("94","239212","9/01114/02","07","K","CB Health Insurance","TOFIQI AWLE ABAMCA","M","","Dimasrxe","1993-02-03","","","4","10","K/10/07/9/01114/02","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("95","240070","19/00943","09","K","CB Health Insurance","AWOLI ABALULESA ABADULA","M","0986427229","Ilekatogo","1964-02-24","","","4","10","K/10/09/19/00943","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("96","251395","01/09723","05","K","CB Health Insurance","HAWA ABABULGU ABAGERO","F","","Yebu","1941-03-02","","","4","10","K/10/05/01/09723","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("97","254547","22/18165","02","K","CB Health Insurance","JEWARE ABABULGU ABAJOBIR","F","0932217302","Genjielbu","1980-02-02","","","4","10","K/10/02/22/18165","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("98","259111","30/05726","06","K","CB Health Insurance","NURA ABALULESA ABABORA","M","","Amubuye","1946-02-05","","","4","10","K/10/06/30/05726","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("99","261438","07/061904","07","H","CB Health Insurance","MUSLIMA SHEMAHMAD ABABOSIMNE","F","","Kort wserbe","1998-02-19","","","4","10","H/10/07/07/061904","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("100","277902","21/16749","02","K","CB Health Insurance","FEDILA ABADAFSAJII ABADAGA","F","","Gabaneabo","1965-02-19","","","4","10","K/10/02/21/16749","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("101","284285","13/00363","02","K","CB Health Insurance","ABANIGA ABAFOGE ABAGIBE","M","","KESOETY","1950-02-23","","","4","10","K/10/02/13/00363","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("102","285875","06/13449","02","K","CB Health Insurance","FATUMA ABAGARO ABAWAR","F","","Limusapa","1953-02-10","","","4","10","K/10/02/06/13449","45","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("103","289285","06/02718/1","14","K","CB Health Insurance","SHARAFE SHEKALIL ABAWAJI","F","","Sirgola","1963-02-09","","","4","10","K/10/14/06/02718/1","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("104","290671","16/01333","05","H","CB Health Insurance","FATI ABAWIDAD ABAJEMAL","M","0924121201","Hundakeneni","1988-06-15","","","4","10","H/10/05/16/01333","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("105","293556","16/00792","10","K","CB Health Insurance","TEMAM GISSA SAJE","M","0917061228","Haro gibe","1954-02-10","","","4","10","K/10/10/16/00792","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("106","295347","21/01663","05","K","CB Health Insurance","TILAHUN KASA DESETA","M","","BEBELAKOSA","1950-02-02","","","4","10","K/10/05/21/01663","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("107","298178","07/00/0/11","15","K","CB Health Insurance","ABATAMAM ABAFOGI ABAJIRGEY","M","","Dobi bildimo","1936-02-19","","","4","10","K/10/15/07/00/0/11","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("108","311873","15/00123/01","10","K","CB Health Insurance","ZEHARA TAJU ABAEARI","F","","Abdigudina","1979-02-07","","","4","10","K/10/10/15/00123/01","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("109","311921","03/01979","02","K","CB Health Insurance","DANIELI SURA DABELA","M","0910893752","Limusaye","1994-02-03","","","4","10","K/10/02/03/01979","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("110","313547","31/01092/01","06","K","CB Health Insurance","MULU ALEMAYAW HWNDERA","F","","Babu","1975-02-05","","","4","10","K/10/06/31/01092/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("111","318603","08/12467/03","04","K","CB Health Insurance","SABISEB ABAFIRA ABAGIDE","M","0917414154","Bulibuli","1991-02-02","","","4","10","K/10/04/08/12467/03","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("112","321255","10/13671","09","K","CB Health Insurance","HDNEZIFE SHTEMAME ABCHEBESA","F","","Kusaro","1968-02-05","","","4","10","K/10/09/10/13671","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("113","322749","22/01469","09","H","CB Health Insurance","HUSSEN ABAGISA ABABULGU","M","","B/TULU","1961-02-02","","","4","10","H/10/09/22/01469","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("114","342705","16/00032","10","K","CB Health Insurance","KEYIRU ABAJOBIR ABAGERO","M","","Lelisa","1978-02-16","","","4","10","K/10/10/16/00032","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("115","342814","09/00538","09","K","CB Health Insurance","SEFU RESHID ABABULGU","M","0996334427","Andodealaga","1980-01-03","","","4","10","K/10/09/09/00538","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("116","347196","07/01676/01","04","H","CB Health Insurance","NASIR ABAGOJEM ABALOFE","M","","Tuliqarsu","1969-02-15","","","4","10","H/10/04/07/01676/01","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("117","347967","27/00223/01","04","K","CB Health Insurance","ABAMECHA ABADIGA ABADHASA","M","0975314808","Gunju","1942-02-02","","","4","10","K/10/04/27/00223/01","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("118","356010","20/140163","05","K","CB Health Insurance","BIYA ABABOR SHKI","M","","Bablakara","1996-02-02","","","4","10","K/10/05/20/140163","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("119","356610","200163","05","Letter","Health Care finance","BIYA ABABOR SHEKI","M","","Babalakara","1986-02-06","","","4","10","Letter/200163","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("120","358118","5/06181","08","K","CB Health Insurance","NASIR ABABULIGU ABAMAGAL","M","","Cafe","1954-02-04","","","4","10","K/10/08/5/06181","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("121","363995","17/04081","05","K","CB Health Insurance","ABAJIHAD ABAGISA ABAWARIE","M","","Etsaguda","1945-02-27","","","4","10","K/10/05/17/04081","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("122","364805","11/01226","12","K","CB Health Insurance","JABAL ABAFITA ABAMILKI","M","","CEKA","1968-02-19","","","4","10","K/10/12/11/01226","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("123","365131","26/07180","10","K","CB Health Insurance","ABADIGA ABABOR ABAWAJI","M","","Lalobeyam","1933-02-18","","","4","10","K/10/10/26/07180","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("124","368383","24/01876/02","04","K","CB Health Insurance","HADEQASIM ABADURA ABABORA","F","","Goraserity","1935-02-10","","","4","10","K/10/04/24/01876/02","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("125","370911","27/08891/01","06","H","CB Health Insurance","ZAKIR ABAMEGAL ABAFOGI","M","","Kalagebsa","1967-02-05","","","4","10","H/10/06/27/08891/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("126","383573","01/00720/01","09","K","CB Health Insurance","JABAL ABAFOGI ABADIMA","M","0917874025","01","1962-02-16","","","4","10","K/10/09/01/00720/01","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("127","383795","29/02465/01","04","K","CB Health Insurance","AWOL ISHEKI ABAGISA","M","","Kombolcha","1971-02-08","","","4","10","K/10/04/29/02465/01","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("128","392789","04/03840/02","16","K","CB Health Insurance","NAJASE JAMALI SAREFUDIN","M","","Chorabega","2004-02-10","","","4","10","K/10/16/04/03840/02","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("129","393834","07/00096","14","K","CB Health Insurance","SHEISA ABAGOJAME ABSIMALI","M","","Gonabeyem","1970-01-01","","","4","10","K/10/14/07/00096","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("130","395086","24/12391/03","04","K","CB Health Insurance","ABDO ABATEMAM ABAJOBIR","M","","G/SARITY","1996-02-03","","","4","10","K/10/04/24/12391/03","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("131","397178","01/06267/01","07","K","CB Health Insurance","MURADA MAMEDESANE HASENA","F","0917020199","Yebu","1981-02-02","","","4","10","K/10/07/01/06267/01","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("132","397619","07/102565/01","04","K","CB Health Insurance","HKUMA ABAMACHA ABAWAJI","F","","Tolekareso","1947-02-19","","","4","10","K/10/04/07/102565/01","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("133","409626","28/02841","02","K","CB Health Insurance","LEYILAT MOHAMED MHUMUD","F","","Yaciurate","1969-02-09","","","4","10","K/10/02/28/02841","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("134","415941","1703/9/2013","G/E/L/D","Employee","Credit Service","SALAMON MAMO FIREW","M","0917057194","","1961-02-11","","","7","21","Employee/1703/9/2013","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("135","418521","34/07948","09","K","CB Health Insurance","ABAJEMALI ABAGERO ABAMILKE","M","0917801940","Demitusakota","1960-02-02","","","4","10","K/10/09/34/07948","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("136","419149","03/10810","05","K","CB Health Insurance","BOGALECH MAMO BEYENE","F","","Hundatoli","1963-02-04","","","4","10","K/10/05/03/10810","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("137","420625","31/01818/02","04","K","CB Health Insurance","FAKIYA JEMALI ABATEMAME","F","","Kijomuja","1986-02-03","","","4","10","K/10/04/31/01818/02","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("138","423187","08/09870/01","05","K","CB Health Insurance","FAXUMA ABAGOJM ABAWJI","F","","Lmilelisa","1945-02-05","","","4","10","K/10/05/08/09870/01","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("139","423890","01/00529","05","K","CB Health Insurance","KAMILA BIYA SHAFI","F","","Yebu","1968-02-01","","","4","10","K/10/05/01/00529","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("140","425299","19/03140","02","H","CB Health Insurance","MISKU ABADURA ABAGISA","F","0913214920","Omobeko","1977-02-02","","","4","10","H/10/02/19/03140","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("141","427270","27/01276/01","04","K","CB Health Insurance","TEFERA KEBEDE SHURE","M","","Mara","1975-02-10","","","4","10","K/10/04/27/01276/01","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("142","446908","30//07647","06","K","CB Health Insurance","ALIMA MOHAMAD SAYID","F","","Ambuye","1940-02-04","","","4","10","K/10/06/30//07647","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("143","447686","27/04987","07","K","CB Health Insurance","JIHAD ABATEMAM ABAWARI","M","","Kort wserbe","1969-02-01","","","4","10","K/10/07/27/04987","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("144","447979","170031217329","15","K","CB Health Insurance","HABIBA ABAJIHAD ABADIDU","F","","Mole","1968-02-10","","","4","10","K/10/15/170031217329","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("145","466684","28/03136/01","04","K","CB Health Insurance","ABAOLI SAKE SHABEDUREMAN","M","0923881053","KALECHA","1928-02-03","","","4","10","K/10/04/28/03136/01","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("146","468536","22/07987","05","K","CB Health Insurance","ZALIKA ABAFITA ABABELO","M","0642607133","BILEDA","1980-03-01","","","4","10","K/10/05/22/07987","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("147","469357","30/09005","04","K","CB Health Insurance","ABAJIHADE ABABULIGU ABAFOGE","M","","Merewa","1943-02-25","","","4","10","K/10/04/30/09005","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("148","472375","27/09310","04","H","CB Health Insurance","ALIMA ABADURA ABADIKO","F","","Gunju","1975-03-02","","","4","10","H/10/04/27/09310","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("149","472391","27/00997","07","K","CB Health Insurance","REISE SHAHIMED SHNAHMED","M","","Qrxiwasarbi","1984-02-04","","","4","10","K/10/07/27/00997","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("150","472788","16/00088/04","15","K","CB Health Insurance","SABIRE ABABIYA ABAWAJE","M","0967027904","MOLA","1996-02-03","","","4","10","K/10/15/16/00088/04","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("151","475012","23/00964","08","K","CB Health Insurance","ALEMA DAWID YESUF","F","","Koma","1975-02-01","","","4","10","K/10/08/23/00964","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("152","484320","25/16815","02","K","CB Health Insurance","IFTU QADERO ABAMILKE","F","0965809023","Dayekechena","2006-02-04","","","4","10","K/10/02/25/16815","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("153","485331","30/01232/01","04","K","CB Health Insurance","ABANEGA ABAFITA ABAWAJI","M","0977234110","MEREWA","1948-02-04","","","4","10","K/10/04/30/01232/01","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("154","488838","06668/02","04","K","CB Health Insurance","HADEFIRA ABAFITA ABAGERO","F","","MERWA","1950-02-13","","","4","10","K/10/04/06668/02","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("155","492131","01/8323","05","K","CB Health Insurance","NESRIYA AHIMED ABAFOGI","F","0935035531","Yebu","1984-02-17","","","4","10","K/10/05/01/8323","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("156","493273","43/29/017","D145","Employee","Credit Service","BELETU EMERU MULUGETA","F","","","1956-02-12","","","7","145","Employee/43/29/017","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("157","497045","10/08408","02","K","CB Health Insurance","HASEN NEGASH ABAWARE","M","0917315332","COCIILAMI","1983-02-19","","","4","10","K/10/02/10/08408","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("158","509982","19/01448","05","K","CB Health Insurance","DENU AWOL ABAGUMBUL","F","0917029283","Doyobikila","1975-02-15","","","4","10","K/10/05/19/01448","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("159","512006","27/0226/08","04","K","CB Health Insurance","KARIMA AMID ABASANBE","F","","GUNJU","1998-01-01","","","4","10","K/10/04/27/0226/08","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("160","512874","22/02525","10","K","CB Health Insurance","SHEJAMAL ABAGOJEM ABAMILKI","M","0910096433","Tulisabata","1948-02-08","","","4","10","K/10/10/22/02525","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("161","514176","05/00584","05","P/YKW","CB Health Insurance","ABAJIAHAD ABAFOGI ABAWAKO","M","","Mexxi","1950-02-19","","","4","10","P/YKW/05/00584","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("162","515022","03/00371/08","05","K","CB Health Insurance","DGITI ABARAYA ABADIKO","F","","Hundatoli","1928-02-04","","","4","10","K/10/05/03/00371/08","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("163","516394","2906056","08","K","CB Health Insurance","NASIR YASIN ABAFITA","M","0917214879","Murkuz","1963-02-14","","","4","10","K/10/08/2906056","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("164","517774","08/04662","05","K","CB Health Insurance","ABAZINAB ABAGISA ABAJOBIR","M","0917562608","Lemilelisa","1960-02-02","","","4","10","K/10/05/08/04662","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("165","519446","21/02086","06","K","CB Health Insurance","AHEMEDE ABEDALM MUHAMEDE","M","0917004909","01","1975-03-02","","","4","10","K/10/06/21/02086","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("166","520562","05/02876/01","04","H","CB Health Insurance","FATUMA ABAMECHA ABALOFE","F","","Tuqurbalto","1970-03-01","","","4","10","H/10/04/05/02876/01","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("167","522367","08/08236/04","09","K","CB Health Insurance","ABIDULEBASX AMIN ABAJABAL","M","","Qacama","2007-02-26","","","4","10","K/10/09/08/08236/04","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("168","523058","27/10052","02","K","CB Health Insurance","MAHAMED ABAGOJEM ABAWARI","M","","Dedourache","1944-02-10","","","4","10","K/10/02/27/10052","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("169","523154","28/14065","02","K","CB Health Insurance","UMER TEMAM MEHAMED","M","","Yachi ","1949-02-04","","","4","10","K/10/02/28/14065","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("170","525937","26/04180","04","K","CB Health Insurance","ABANAIM ABAMACA ABAGARE","M","","Ankasora","1945-02-08","","","4","10","K/10/04/26/04180","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("171","526946","158/06","D29","Employee","Credit Service","HANA IBERHEM IDERESE","F","","Maremeya","1981-02-11","","","4","10","Employee/158/06","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("172","529337","05/09/03630","05","K","CB Health Insurance","BADIRUU ABAGAROO ABAJAABAL","M","","Haro","1958-02-17","","","4","10","K/10/05/05/09/03630","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("173","533902","05/03657","05","K","CB Health Insurance","ABDELHI KALIFA ABAGOJAM","M","0917064781","Bilida","1987-03-02","","","4","10","K/10/05/05/03657","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("174","537825","01/03776/01","05","K","CB Health Insurance","WESENE MESHESHA WELDEYUHNIS","F","","Yabu","1945-02-10","","","4","10","K/10/05/01/03776/01","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("175","539081","03/09669/00","04","K","CB Health Insurance","HADEYAKUM ABASAMBI ABAGERO","F","","Babo","1960-02-11","","","4","10","K/10/04/03/09669/00","34","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("176","543962","17/01353","10","K","CB Health Insurance","NUREDIN SHAFI GUDETA","M","0909644779","Wirtu yedi","1967-02-16","","","4","10","K/10/10/17/01353","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("177","546201","02/02556/01","04","K","CB Health Insurance","ABABIYA SHEEBRAHIM ABAWEYESA","M","0917102011","OMOTUCHO","1954-02-18","","","4","10","K/10/04/02/02556/01","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("178","546409","05/01756","11","K","CB Health Insurance","KEDIJA MOHAMED SEID","F","","Gatira","1983-02-01","","","4","10","K/10/11/05/01756","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("179","547666","25/07912","10","H","CB Health Insurance","SALISHE AMAMADAWELABAFITA","M","","COLEBEYAM","1998-02-11","","","4","10","H/10/10/25/07912","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("180","549425","21/00047","10","K","CB Health Insurance","HAFIZE ABABIYA ABABULIGU","M","","Omochala","1970-02-02","","","4","10","K/10/10/21/00047","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("181","550944","18/18756","02","H","CB Health Insurance","ABABIYA SHAHMED ABARASA","M","","Omohurda","1949-02-19","","","4","10","H/10/02/18/18756","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("182","552615","30/03922","09","K","CB Health Insurance","ABANEGA ABAFITA ABAGERO","M","0942923912","Sentemgoro","1965-02-03","","","4","10","K/10/09/30/03922","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("183","554415","31/09010/02","04","K","CB Health Insurance","SAMIRA ABATAMAM ABAMACA","F","0938525131","Qujomuja","1995-02-01","","","4","10","K/10/04/31/09010/02","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("184","559334","28/05021","05","H","CB Health Insurance","SHEAHIMED ABADURA ABABILO","M","","Bilida","1949-02-01","","","4","10","H/10/05/28/05021","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("185","560642","63/14/2013","D29","Prisoner","Credit Service","MHMEDE SULMAN ABARORO","M","","Mndraqoci","1965-02-17","","","4","10","Prisoner/63/14/2013","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("186","562513","15/0154/06","10","K","CB Health Insurance","BACHA TOLERA DABALA","M","","Micha","1992-02-10","","","4","10","K/10/10/15/0154/06","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("187","563604","15/001000/01","09","K","CB Health Insurance","FAXUMA ABADURA ABADIGA","F","","Ilikeginjo","1974-03-02","","","4","10","K/10/09/15/001000/01","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("188","565011","24/01088","09","K","CB Health Insurance","GIZAW MAKO SOLA","M","0917288145","QORAWACHO","1945-03-02","","","4","10","K/10/09/24/01088","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("189","566863","31/02682","06","H","CB Health Insurance","ABATEMAM ABADIGA ABAWARI","M","","Babu","1948-02-05","","","4","10","H/10/06/31/02682","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("190","567383","05/03090/","01","K","CB Health Insurance","ABAGIDE ABAFOGE ABAGUDURU","M","","Mety","1945-02-10","","","4","10","K/10/01/05/03090/","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("191","569511","14/01607","07","K","CB Health Insurance","ABAJIHAD SHEMUSA ABADASA","M","","Genjoaby","1953-03-02","","","4","10","K/10/07/14/01607","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("192","570752","13/00134","15","K","CB Health Insurance","NIGUSE WELDSENBT WLDMIKAL","M","","Horasonbo","1964-02-26","","","4","10","K/10/15/13/00134","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("193","576319","04/09029/01","04","H","CB Health Insurance","SUFI MUHAME ABAJEBELI","M","","Girema","1980-02-25","","","4","10","H/10/04/04/09029/01","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("194","578929","17/02559/01","04","K","CB Health Insurance","HDRIJALI ABAMECHA ABAGELANE","F","","Kusayebero","1958-02-25","","","4","10","K/10/04/17/02559/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("195","582019","18/01076","10","K","CB Health Insurance","ZENU ABAGERO ABABULI","M","0975315786","Micha","1989-02-03","","","4","10","K/10/10/18/01076","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("196","586242","35/09124","D32","K","CB Health Insurance","SAIID HASAN ALI","M","","Babo","1970-01-01","","","4","10","K/10/D32/35/09124","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("197","586931","03/04905","05","K","CB Health Insurance","ZENU ABAGOJAM ABAFOGI","M","","Hundatoli","1962-02-05","","","4","10","K/10/05/03/04905","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("198","587338","30/02090","07","H","CB Health Insurance","HDEMASERE ABAZINABE ABAGOJAME","F","","Sapo","1960-02-02","","","4","10","H/10/07/30/02090","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("199","587980","0942/0036/2013","D38","Employee","Credit Service","ABUYE TESFEYE ABEYE","M","","","1981-02-19","","","7","145","Employee/0942/0036/2013","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("200","589471","DNS57/14/013","D29","Prisoner","Credit Service","SURAFEL GETACHEW BALAY","M","","MAREMIYABET","1993-02-17","","","4","10","Prisoner/DNS57/14/013","45","Friday, October 16, 2020");
INSERT INTO patients VALUES("201","591636","09/03423/02","04","K","CB Health Insurance","AMINA MHMED ABABOR","F","","Goro","1988-02-11","","","4","10","K/10/04/09/03423/02","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("202","592816","22/010247/04","06","K","CB Health Insurance","ABUBAKIR MUSTAFA ABASIMAL","M","","02","2005-02-18","","","4","10","K/10/06/22/010247/04","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("203","593221","31/00648/01","07","H","CB Health Insurance","HDAKORO ABAGERO ABAGOJAME","F","0917499515","Segere","1945-02-03","","","4","10","H/10/07/31/00648/01","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("204","594195","09/02463/01","04","K","CB Health Insurance","ABERAR SHEMOHAMED HAJI","F","","Golo","1983-02-12","","","4","10","K/10/04/09/02463/01","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("205","596434","24/01297","06","K","CB Health Insurance","SHIFRW KEBDE MERGA","M","","Dabanadaru","1970-01-01","","","4","19","K/19/06/24/01297","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("206","597066","01/03137/02","05","K","CB Health Insurance","ADISWA ABABE ALEMU","F","","Yebu","1964-02-11","","","4","10","K/10/05/01/03137/02","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("207","599357","33/07593","02","K","CB Health Insurance","NEFISA ABANEBISO ABAGERO","F","","Beshasha","1992-02-01","","","4","10","K/10/02/33/07593","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("208","599965","25/01656/01","04","K","CB Health Insurance","GUDO TULUU AYNO","F","","Sh/xaxxobii","1944-02-19","","","4","10","K/10/04/25/01656/01","52","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("209","604461","26/05630","05","K","CB Health Insurance","HINDIYA ABAGIDI ABAGERWO","F","","Semodo","1977-02-23","","","4","10","K/10/05/26/05630","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("210","609128","22/06938","05","K","CB Health Insurance","WERQE BAYENE MAMO","F","","Bilida","1946-02-08","","","4","10","K/10/05/22/06938","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("211","609972","31/00536/04","04","K","CB Health Insurance","ZEBIBA HAFIZ ABABOR","M","0917053493","Kujomuja","1998-02-02","","","4","10","K/10/04/31/00536/04","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("212","613732","3/03297","04","K","CB Health Insurance","HADAHBIYA ABATAMAM ABAGISA","F","","Dhayi","1964-02-10","","","4","10","K/10/04/3/03297","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("213","620756","14/022888","10","K","CB Health Insurance","HADEKORO ABADULA ABABOLA","F","","Waktola","1935-02-01","","","4","10","K/10/10/14/022888","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("214","622367","00/08285/03","12","K","CB Health Insurance","ABDULBASXI AMINE ABAJABAJABLE","M","0934255277","Boyokishg","1970-01-01","","","4","10","K/10/12/00/08285/03","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("215","625264","22/01692","05","K","CB Health Insurance","ASSMAMAW TRIKU BZABIHE","M","0917262896","Bilida","1952-02-02","","","4","10","K/10/05/22/01692","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("216","628105","27/01257","07","K","CB Health Insurance","ABARASHAD ABAWARI ABAGARO","M","","Qarexiwasrbi","1953-02-04","","","4","10","K/10/07/27/01257","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("217","629277","14/00512","07","K","CB Health Insurance","ABATAMAME ABAGARO ABABORA","M","","Gangoabay","1965-02-19","","","4","10","K/10/07/14/00512","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("218","631640","17/09309","D01","K","CB Health Insurance","IMEBET ZEWEDU GBEREYS","F","0952418335","Sisayberu","1995-02-22","","","4","10","K/10/D01/17/09309","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("219","632482","25/06143","05","K","CB Health Insurance","AHAMED ABAMECHA ABAWARI","M","","Urgiy","1967-03-02","","","4","10","K/10/05/25/06143","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("220","635166","30/01626","07","K","CB Health Insurance","MAMED USEN ABADIGA","M","0932472202","Sapo","1947-03-02","","","4","10","K/10/07/30/01626","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("221","635708","DNS/05/14/013","D29","Prisoner","Credit Service","MOHAMED TEMAM ABAGODU","M","","Maremiyabet","1978-02-04","","","4","10","Prisoner/DNS/05/14/013","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("222","640021","29/07316","04","K","CB Health Insurance","HABETAMU TESFAYE TESHOME","M","0910739829","Bejaharo","1973-02-25","","","4","19","K/19/04/29/07316","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("223","642894","01/00017","01","K","CB Health Insurance","KADIRE ABALULASA ABABORA","M","0917053699","Chera","1955-02-02","","","4","10","K/10/01/01/00017","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("224","646178","37/010397","06","K","CB Health Insurance","AWOLI ABDULIKADIRE ABASIMALI","M","0917238645","Mendera","1968-02-02","","","4","10","K/10/06/37/010397","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("225","649673","DNS/64/14/2013","D29","Prisoner","Credit Service","SEFU ABARA WEDEMIKAEL","M","","","1986-02-17","","","4","10","Prisoner/DNS/64/14/2013","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("226","650243","04/00089/07","15","H","CB Health Insurance","NEJASH ARAB ABAMECHA","M","","D/KARAM","1010-02-03","","","4","10","H/10/15/04/00089/07","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("227","653058","27/01189","04","K","CB Health Insurance","HADHAEDIRS ABAGIDI ABAZEBAN","F","0917761588","Gunju","1948-02-16","","","4","10","K/10/04/27/01189","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("228","653841","DNs/5814/013","D29","Prisoner","Credit Service","ABARESADE ABABORE ABADIKO","M","","","1951-02-01","","","4","10","Prisoner/DNs/5814/013","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("229","655851","18/16339","02","K","CB Health Insurance","HALIMA ABANEBSO ABAFOGI","F","","Omogurude","1995-02-03","","","4","10","K/10/02/18/16339","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("230","656228","01/04662/01","01","K","CB Health Insurance","AMARECH ZELEKE WUBE","F","","Chira","1975-02-02","","","4","10","K/10/01/01/04662/01","52","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("231","656472","13/04775/01","05","Letter","Health Care finance","ZENBA SHAFI JAMAL","F","0967109808","Kamis","1970-01-01","","","4","10","Letter/13/04775/01","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("232","657838","2819/0034/2013","D38","Employee","Credit Service","TADELECH YIMER HABTE","F","","","1977-10-20","","","7","145","Employee/2819/0034/2013","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("233","660532","02/02193/00","04","K","CB Health Insurance","AHIMED ABADIDU ABASEKO","M","","Omotucho","1973-02-05","","","4","10","K/10/04/02/02193/00","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("234","660639","15/04857/1","10","K","CB Health Insurance","ABAZINAB ABAOLI ABABOSEN","M","","Micha","1968-03-01","","","4","10","K/10/10/15/04857/1","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("235","665699","29/00493/01","06","K","CB Health Insurance","ZEYIDA ABALULESA ABAGUDETA","F","","Libun gonde","1964-02-17","","","4","10","K/10/06/29/00493/01","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("236","665976","03/07538/02","10","K","CB Health Insurance","AYISHA HAJIIBRAHIM ABASIMAL","F","","B/gombo","1983-02-03","","","4","10","K/10/10/03/07538/02","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("237","668189","02/05026","10","H","CB Health Insurance","KADIJA ABATEMAME HAJE","F","","02","1980-02-23","","","4","10","H/10/10/02/05026","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("238","669765","38/10712","02","K","CB Health Insurance","ZARA KADIR USMAN","F","0986442320","Qdamasa","1981-02-19","","","4","10","K/10/02/38/10712","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("239","669834","17/07036","05","K","CB Health Insurance","ABFIRA ABAGISA ABADIDU","M","0917111839","Itesaguda","1945-02-03","","","4","10","K/10/05/17/07036","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("240","672626","11-12/0040/2013","D38","Employee","Credit Service","ABEBA ALEME WORKU","F","0965990130","Bebeke","1979-02-11","","","7","145","Employee/11-12/0040/2013","34","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("241","673370","14/02772/04","09","K","CB Health Insurance","ABATEMAME ABAFOGE ABAGIBA","M","0932231786","Sakelagenafo","1942-02-03","","","4","10","K/10/09/14/02772/04","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("242","673544","11/00465/01","04","K","CB Health Insurance","ALAWIYA ABATAMAM ABABULGU","F","","Wadiko","1963-02-11","","","4","10","K/10/04/11/00465/01","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("243","674129","22/03985","05","K","CB Health Insurance","ABAZINAB ALITO WANORE","M","","Magalabilida","1938-02-04","","","4","10","K/10/05/22/03985","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("244","678449","28/08534/01","04","K","CB Health Insurance","AYISHA ABAFIRA SHEJEMALE","F","","KELECHA","1965-02-02","","","4","10","K/10/04/28/08534/01","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("245","681515","02/07937","10","K","CB Health Insurance","AMIIR AWAL ABANEME","M","","Nada","1970-01-01","","","4","10","K/10/10/02/07937","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("246","685884","276/19/2013","D29","Employee","Credit Service","AKILILU TESFAYE NEGATU","M","","","1983-02-18","","","4","10","Employee/276/19/2013","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("247","687630","31/20738","02","K","CB Health Insurance","ZAKU ABASAMBE ABAFOGI","F","0937174923","Odoadame","1961-03-02","","","4","10","K/10/02/31/20738","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("248","692892","DNS74/14/2013","D29","Prisoner","Credit Service","GETACHEW BAQALE FIQADU","M","","","1977-02-18","","","4","10","Prisoner/DNS74/14/2013","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("249","694405","63/14/2013","D29","Prisoner","Credit Service","SISAY DIRIBA WEUMA","M","","Mendrs","1970-01-01","","","4","10","Prisoner/63/14/2013","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("250","695860","21/06856","05","H","CB Health Insurance","HADEKAMIL SHEAHIMED HAJI","F","","BEBELAKOSA","1969-02-01","","","4","10","H/10/05/21/06856","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("251","696698","08/08309","05","K","CB Health Insurance","MISKU ABAFITA SEAZUBERE","F","","LAMELELISA","1970-02-03","","","4","10","K/10/05/08/08309","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("252","701591","16/02558","01","K","CB Health Insurance","ABAFIRA ABAGERO ABADULA","M","0955055472","Hundakenane","1951-02-03","","","4","10","K/10/01/16/02558","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("253","702307","24/04135/03","05","K","CB Health Insurance","LEZA ABARAYA ABADILEBE","M","","Kentere","1990-02-01","","","4","10","K/10/05/24/04135/03","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("254","702343","01/0100288/02","05","K","CB Health Insurance","HAJERA MOHMEDE HASEIN","F","","Gudetabula","1972-02-12","","","4","10","K/10/05/01/0100288/02","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("255","702380","11/05547","04","K","CB Health Insurance","ABARAYA SHEJAMAL SHEKI","M","","Waduko","1955-02-03","","","4","10","K/10/04/11/05547","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("256","707988","28/01258/03","04","K","CB Health Insurance","ESMAIL ABARASHAD ABAGALAN","M","0986430793","Kalacha","1990-02-12","","","4","10","K/10/04/28/01258/03","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("257","710974","28//07928","04","K","CB Health Insurance","ABATAMAME SHALI ABARASA","M","","Kalcha","1945-02-19","","","4","10","K/10/04/28//07928","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("258","711053","08/05557","05","K","CB Health Insurance","AYISHA KEMAL ABAGOJAM","F","","LAMELALISA","1969-02-19","","","4","10","K/10/05/08/05557","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("259","711866","29/08046","04","K","CB Health Insurance","ABAZINAB ABABULEGU ABASIDEN","M","","Kombolecha","1960-02-01","","","4","10","K/10/04/29/08046","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("260","712642","01/09716/01","02","K","CB Health Insurance","AYISHA TAJU SAGEMAL","F","","Yebu","1981-02-04","","","4","10","K/10/02/01/09716/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("261","713366","31/00458","07","K","CB Health Insurance","ABAJIHAD ABAZEBEN DIMA","M","0939787133","Sheger","1978-02-05","","","4","10","K/10/07/31/00458","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("262","713731","25/18372","02","K","CB Health Insurance","SHUREFA ABASIMEL ABALULESA","M","","Taykchene","1960-02-13","","","4","10","K/10/02/25/18372","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("263","714114","28/05345","07","K","CB Health Insurance","SEFU ABAJIHADE ABAGERO","M","0910037588","Kuno","1980-02-02","","","4","10","K/10/07/28/05345","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("264","714794","DNS/58/14/013","D29","Prisoner","Credit Service","JAFERE AWOLI ABAWARE","M","","","1978-02-17","","","4","10","Prisoner/DNS/58/14/013","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("265","717302","01/07977/02","04","H","CB Health Insurance","AHIMED ABAMOGA ABAZINAB","M","","Wayu","1973-02-03","","","4","10","H/10/04/01/07977/02","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("266","719323","06/01290","11","K","CB Health Insurance","SHEZENU ABADIGA ABAFOGI","M","","GELO","1960-02-19","","","4","10","K/10/11/06/01290","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("267","719773","03/08394","05","K","CB Health Insurance","HADESULTAN ABASANBI ABAWARI","F","","Hundatoli","1950-02-05","","","4","10","K/10/05/03/08394","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("268","720746","19/2013","D31","Employee","Credit Service","SAJIN TARKU TAFRA","M","","Marmiya","1972-02-19","","","4","10","Employee/19/2013","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("269","720967","32/05159/02","07","K","CB Health Insurance","RUHANI HASEN ABAJEBELI","F","0904465377","SEREFE","2010-02-02","","","4","10","K/10/07/32/05159/02","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("270","721739","07/00001","15","K","CB Health Insurance","HAJI ABATAMAM ABABULGU","M","","Dobibildimo","1967-02-19","","","4","10","K/10/15/07/00001","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("271","726452","1142/0038/2013","D38","Employee","Credit Service","AZMERA ABRAHA REDA","F","","Bebeka","1973-02-12","","","7","145","Employee/1142/0038/2013","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("272","727429","06/00386","10","K","CB Health Insurance","ABAJABEL ABAFITA ABAWARI","M","","Nadachala","1940-02-15","","","4","10","K/10/10/06/00386","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("273","730647","03/00030","03","K","CB Health Insurance","MISIKU ABADAGA ABALULSA","F","","Gurbodaga","1973-02-23","","","4","10","K/10/03/03/00030","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("274","731369","14/05207/04","07","K","CB Health Insurance","ALEWUYA TEMAM ABABULGU","F","","Genji abeyi","1964-02-05","","","4","10","K/10/07/14/05207/04","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("275","732665","14/00223","05","H","CB Health Insurance","ABABIYA HAJE ABAFOGE","M","","Kosaya","1964-02-04","","","4","10","H/10/05/14/00223","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("276","732961","27/00553/04","04","K","CB Health Insurance","FOZYA HUSEN ABAMECHA","F","0917403159","Gunju","1996-02-09","","","4","10","K/10/04/27/00553/04","43","Saturday, October 24, 2020");
INSERT INTO patients VALUES("277","734164","1800875","09","K","CB Health Insurance","ABATAMAM ABATIBA ABAGAERO","M","0924820246","Atirosufa","1963-02-18","","","4","10","K/10/09/1800875","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("278","734626","10/03543","04","K","CB Health Insurance","ABAFITA ABADIDU ABAGERO","M","0932869476","KETENBELA","1949-02-24","","","4","10","K/10/04/10/03543","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("279","734754","10/08572","05","K","CB Health Insurance","ABAJIHAD ABAMECA SAIID","M","","Kelaguda","1944-02-13","","","4","10","K/10/05/10/08572","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("280","736442","DNS/58/14/013","D29","Prisoner","Credit Service","MITIKU DIDA GOBENA","M","","MAREMIYA BET","1951-02-04","","","4","10","Prisoner/DNS/58/14/013","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("281","737643","31/09535/05","06","H","CB Health Insurance","FARUQE ABDULIKAREM KAMAL","M","0917208630","Babo","1970-01-01","","","4","10","H/10/06/31/09535/05","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("282","737851","26/08927","05","H","CB Health Insurance","AWOL ABAGISA ABAGOLE","M","0917009581","Somodo","1955-02-17","","","4","10","H/10/05/26/08927","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("283","740076","28/088","06","K","CB Health Insurance","ZEYTUNA ABAMEYA ABADISASA","F","","Kosageshe","1952-02-05","","","4","10","K/10/06/28/088","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("284","740405","14/05775/01","05","K","CB Health Insurance","GAZALA SABSIB ABABULGU","F","","Sayebontu","1962-02-18","","","4","10","K/10/05/14/05775/01","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("285","740531","01/08989/01","05","H","CB Health Insurance","MUNIRA MUSA HUSEN","F","","Chore","1983-02-01","","","4","10","H/10/05/01/08989/01","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("286","741354","30/05418/01","06","K","CB Health Insurance","HIERIYA SHUCRIA ABDO","F","","Bmbuya","1969-02-06","","","4","10","K/10/06/30/05418/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("287","741934","25/11216/00","06","K","CB Health Insurance","UKASA MAHAMED ABAWARI","M","","H/koticha","1981-02-03","","","4","10","K/10/06/25/11216/00","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("288","743205","19/07538","04","K","CB Health Insurance","SISYE JAAKAA WAQYO","M","0917339584","01","1943-02-06","","","4","10","K/10/04/19/07538","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("289","747436","30/00179/03","04","K","CB Health Insurance","ASIYA FIREAA ABAFOGE","F","0917006406","Merewa","2004-02-03","","","4","10","K/10/04/30/00179/03","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("290","747863","H/N274/19/013","D29","Employee","Credit Service","MEKONIN KELBESA SERBESA","M","0941274474","Mendera kochi","1990-02-03","","","4","10","Employee/H/N274/19/013","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("291","748526","01/09223","05","K","CB Health Insurance","HAFIZ ABABOR ABAFOGI","M","0913608734","Yabu","1975-02-06","","","4","10","K/10/05/01/09223","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("292","749958","1948/20","D36","Prisoner","Credit Service","NYAHOUTH RUACH GANG","M","","Gambla","1978-02-05","","","8","02","Prisoner/1948/20","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("293","750275","11/12/0033/2013","D38","Letter","Health Care finance","TSIGE SAQU DEJENE","F","","","1975-02-17","","","4","10","Letter/11/12/0033/2013","45","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("294","751443","158/06","10","Employee","Credit Service","ABNT AYLE DNU","F","","Sxosmro","1978-02-06","","","4","10","Employee/158/06","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("295","751507","29/05773","01","K","CB Health Insurance","AWEL ABAGOJEM ABADIGA","M","","Carko","1948-02-18","","","4","10","K/10/01/29/05773","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("296","754215","1301606/04","12","K","CB Health Insurance","FUAD ABDO ABABOR","M","","Cals","1994-02-11","","","4","10","K/10/12/1301606/04","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("297","754261","03/00355/01","05","K","CB Health Insurance","RUKIYA AMAN IBRAHIM","F","","Hunda toli","1972-02-05","","","4","10","K/10/05/03/00355/01","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("298","755206","15/02030","09","K","CB Health Insurance","ABASELAM ABAGUMBUL ABABILO","M","","Sakelatunjo","1940-02-02","","","4","10","K/10/09/15/02030","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("299","757157","26/01184/01","06","K","CB Health Insurance","NEZIFA ALIYI ABAGERO","F","","KEMISEBABIYA","1979-02-04","","","4","10","K/10/06/26/01184/01","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("300","759620","03/001078/01","02","K","CB Health Insurance","SAWEDA ABAFITA ABABOSENO","M","","Gepa","1986-02-03","","","4","19","K/19/02/03/001078/01","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("301","761201","02/10903/01","04","K","CB Health Insurance","KADIJA ABAGIDI ABAGISA","F","","Omotucho","1973-02-19","","","4","10","K/10/04/02/10903/01","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("302","764177","27/12512/07","04","K","CB Health Insurance","REYAN TAYER ABATEMAM","M","0933749554","Gunju","2011-03-01","","","4","10","K/10/04/27/12512/07","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("303","767604","27/04666","07","K","CB Health Insurance","MHAMEDSANI ABBADURA ABAJOBIR","M","","Qorxiwseybi","1960-02-05","","","4","10","K/10/07/27/04666","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("304","770346","03/00817","14","K","CB Health Insurance","SHBEDERU ABAGOJAME ABADIDU","M","0917590439","Odabuli","1952-02-03","","","4","10","K/10/14/03/00817","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("305","770553","05/00286/03","07","K","CB Health Insurance","ALAMDU SHERIF MOHAMED","M","","Bondobegela","2009-02-01","","","4","09","K/09/07/05/00286/03","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("306","770643","17/09148/01","04","K","CB Health Insurance","HADEKANZE ABAJABAL ABADIGA","F","","KUSYA","1951-02-19","","","4","10","K/10/04/17/09148/01","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("307","772599","27/03530/02","04","K","CB Health Insurance","ANSO ABAJEBELI ABAWAREY","F","","Gunju","1946-03-02","","","4","10","K/10/04/27/03530/02","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("308","774560","07/14592","02","K","CB Health Insurance","ABAOLI ABADILIBE ABADURA","M","","METIYKOTICHA","1962-02-05","","","4","10","K/10/02/07/14592","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("309","776481","10/10244","02","K","CB Health Insurance","LENSE ABAFITA ABASAMBI","F","","Coce","1939-02-19","","","4","10","K/10/02/10/10244","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("310","778202","23/00088","15","K/F/C/GMB","CB Health Insurance","MASHAR ABAJIHDE ABAGISA","M","","Yayalke","1985-02-04","","","4","10","K/F/C/GMB/23/00088","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("311","781178","01/01280","01","K","CB Health Insurance","ABASARO ABAFOGE ABADEKO","M","","Hera","1945-02-11","","","4","10","K/10/01/01/01280","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("312","781343","11/06204/01","09","K","CB Health Insurance","HKASMA ABAMACHA ABAWAJE","F","","Dabogeba","1956-02-19","","","4","10","K/10/09/11/06204/01","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("313","782294","10/00091/04","04","K","CB Health Insurance","FATIYA NAZIF ABABIYA","F","","Kitmbile","1990-02-18","","","4","10","K/10/04/10/00091/04","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("314","782723","05/05163","02","K","CB Health Insurance","MITIKU DISAASA BILO","M","","Faxo","1950-02-07","","","4","19","K/19/02/05/05163","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("315","783458","07/03915","05","K","CB Health Insurance","JIHAD ABAOLI ABADIKO","M","","Gudetabula","1963-02-03","","","4","10","K/10/05/07/03915","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("316","783514","09/11248/01","12","K","CB Health Insurance","AYELECH ADANE SIYUM","F","","Deneba","1945-02-05","","","4","10","K/10/12/09/11248/01","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("317","783998","14/17413","02","K","CB Health Insurance","ABDU MAHAMED ABAMACHA","M","0920529572","Omogobu","1975-02-11","","","4","10","K/10/02/14/17413","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("318","786410","27/07142/01","06","K","CB Health Insurance","FATUMA ABAMECHA ABAAMEY","F","","Kilagabisa","1975-02-23","","","4","10","K/10/06/27/07142/01","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("319","786620","27/00379/01","04","K","CB Health Insurance","LEZA MOHAMED ABAFITA","F","","Gunju","1984-02-03","","","4","10","K/10/04/27/00379/01","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("320","789204","15/03165","10","K","CB Health Insurance","MUSETEFA ABAJEBELI ABABORE","M","0955066910","Micha","1983-02-03","","","4","10","K/10/10/15/03165","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("321","789909","DNS/14/013","D01","Employee","Credit Service","SURAFELI SISAYE ANDAREGA","M","","Maremeya","1988-02-11","","","4","10","Employee/DNS/14/013","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("322","792272","25/0020/01","04","H","CB Health Insurance","ABABECH BAYANE BIRA","F","","SHAWAXOXOBI","1974-02-11","","","4","10","H/10/04/25/0020/01","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("323","792699","04/24/02913/02","04","K","CB Health Insurance","GIDA TEMESIGEN DUGUMA","F","","ABABORA","1971-09-08","","","4","19","K/19/04/04/24/02913/02","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("324","793208","23/10942","05","K","CB Health Insurance","FADILA ABAFITA ABAZABELI","F","","BILEDA","1985-02-10","","","4","10","K/10/05/23/10942","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("325","793966","21/05418/01","02","K","CB Health Insurance","SEMIRA MUZAMBIL KALILI","F","0904047132","CHALO","1986-02-03","","","4","19","K/19/02/21/05418/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("326","795004","22/08157","05","K","CB Health Insurance","ABDULAZIZ ABARESHAD ABAMEGAL","M","","Blilda","1973-02-12","","","4","10","K/10/05/22/08157","34","Thursday, October 22, 2020");
INSERT INTO patients VALUES("327","795202","09/0298/01","04","K","CB Health Insurance","ABARAYA ABAGARO BABAGODU","M","","GELO","1962-02-25","","","4","10","K/10/04/09/0298/01","45","Thursday, October 15, 2020");
INSERT INTO patients VALUES("328","795780","24/06927","05","K","CB Health Insurance","NAJEBE ABAZINABE ABABULIGU","M","0917113194","Kentery","1978-03-02","","","4","10","K/10/05/24/06927","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("329","796063","01/06538/01","09","K","CB Health Insurance","TEKLU ASFAW TEKLETSADIK","M","0948976789","SEKA 02","1946-02-04","","","4","10","K/10/09/01/06538/01","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("330","797305","DNS64/14/2013","D29","Prisoner","Credit Service","ESHETU DAMISE HAELE","M","","Maremay","1978-02-03","","","4","10","Prisoner/DNS64/14/2013","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("331","797603","02/06978","04","K","CB Health Insurance","FEIZA ABAJEBEL ABAGELAN","F","","OMOTICHO","1970-02-02","","","4","10","K/10/04/02/06978","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("332","800256","0357/04","D22","K/F/C/GMB","CB Health Insurance","ESUBALEW KASAHUN GOSHU","M","","Shonba","2004-02-13","","","7","21","K/F/C/GMB/0357/04","34","Friday, October 23, 2020");
INSERT INTO patients VALUES("333","800685","0608940","04","K","CB Health Insurance","DILBI ABABOR ABADULA","M","0917499876","Xiqur abulo","1970-02-21","","","4","10","K/10/04/0608940","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("334","801940","09/00921","01","K","CB Health Insurance","FAYA ABDE BONJA","M","","Sadyloya","1928-02-03","","","4","10","K/10/01/09/00921","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("335","804019","18/112075","06","K","CB Health Insurance","AMIR BEDERU HUSEN","M","0963404016","Dalejimata","1984-02-03","","","4","10","K/10/06/18/112075","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("336","804425","17/00324","15","K","CB Health Insurance","NASIR ABABIYAA ABAMISO","M","0961937729","Mole","1963-02-11","","","4","10","K/10/15/17/00324","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("337","806028","11/02643","01","K","CB Health Insurance","ABAJIHAD ABAFOGI ABABUSHEN","M","0917068155","TUMATESO","1962-02-03","","","4","10","K/10/01/11/02643","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("338","806072","17/24234/03","12","K","CB Health Insurance","MNAWER NAIM ABAGIDI","M","","Marara","1997-02-05","","","4","10","K/10/12/17/24234/03","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("339","806198","309/19/2013","D29","Employee","Credit Service","HAYATE NAZIFE ABAMECHA","F","0917246062","","2011-02-03","","","4","10","Employee/309/19/2013","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("340","807127","16/06549","05","K","CB Health Insurance","DIGE ZAKIR ABAFIRA","M","0917121113","Hundakeneni","1981-02-02","","","4","10","K/10/05/16/06549","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("341","807857","02/03937","04","K","CB Health Insurance","HASEN ABADURA ABAGISA","M","","Omotucho","1950-03-02","","","4","10","K/10/04/02/03937","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("342","809808","293/19/2013","D29","Prisoner","Credit Service","EBSA TEMEZGEN KENEHA","M","0964230812","MAREMIYABET","1991-02-19","","","4","10","Prisoner/293/19/2013","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("343","809847","38/07459","06","K","CB Health Insurance","HUSAN GOBNA DEYGO","M","","Wabakotha","1956-02-19","","","4","10","K/10/06/38/07459","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("344","812325","14/23012","02","K","CB Health Insurance","RABIYA GALI ABAFOGI","M","","GOBU","1975-02-03","","","4","10","K/10/02/14/23012","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("345","812533","15/01396","06","K","CB Health Insurance","MENGESHA LIGDI TUFA","M","0920675413","Doran","1966-02-20","","","4","19","K/19/06/15/01396","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("346","812535","DNS17/14/2013","D29","Prisoner","Credit Service","TAMAZGEN CALA WADAJO","F","","","1983-02-13","","","4","10","Prisoner/DNS17/14/2013","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("347","814234","30/12262","04","K","CB Health Insurance","FIQADU BAQALA DONACHO","M","0991345669","Kuwe dabana","1963-02-12","","","4","19","K/19/04/30/12262","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("348","814257","1213/13","jue","Employee","Credit Service","SEID MOHAMMED SEID","M","0985192541","Jimma","1986-02-19","","","4","10","Employee/1213/13","11","Sunday, October 25, 2020");
INSERT INTO patients VALUES("349","817437","31/00031","07","H","CB Health Insurance","BUZINESE ABAKALIBE ABAMAGALI","F","0930819986","Segere","1954-02-02","","","4","10","H/10/07/31/00031","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("350","818797","28/04108/01","06","K","CB Health Insurance","MUNTAHA ABAMACA ABABORA","F","0935895930","GESHE","1964-02-16","","","4","10","K/10/06/28/04108/01","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("351","820978","1947/20","D34","Prisoner","Credit Service","KAYER MAKUACH WEL","M","","Gambla","1980-02-19","","","8","02","Prisoner/1947/20","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("352","821208","02/00206","15","K","CB Health Insurance","ABANEIM ABANANO ABADASA","M","0917884565","Busaseelen","1963-02-02","","","4","10","K/10/15/02/00206","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("353","823457","26/03858/0","04","K","CB Health Insurance","ABAMOGA ABAGODU ABADIKO","M","","Ankaso","1999-02-02","","","4","10","K/10/04/26/03858/0","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("354","824392","68/14/2013","D29","Prisoner","Credit Service","KADIR ASHIM ABASIMAL","M","","Marmiyabet","1979-02-07","","","4","10","Prisoner/68/14/2013","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("355","824575","14/08183","09","K","CB Health Insurance","ABAZINAB ABAGERO ABAWARI","M","","Sakelagenafo","1951-02-01","","","4","10","K/10/09/14/08183","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("356","826134","0126781","02","K","CB Health Insurance","ZARFE TASFAYE ALEMU","F","","Qiltowalqa","1975-02-17","","","4","10","K/10/02/0126781","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("357","826157","03/06994/05","09","K","CB Health Insurance","AMINA SAMISUDIN ABADURA","F","","Gebaboso","1996-02-02","","","4","10","K/10/09/03/06994/05","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("358","826967","04/01355/07","04","K","CB Health Insurance","ADNAN GALI ABABOR","M","","Girma","2011-02-02","","","4","10","K/10/04/04/01355/07","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("359","828927","16/02567/03","06","H","CB Health Insurance","NASEREYA HAWE ABADEGA","F","0927588875","Genadanbe","1996-02-05","","","4","10","H/10/06/16/02567/03","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("360","828948","14/07596/08","12","H","CB Health Insurance","WOLID AMIN ABANEGA","M","","Bore","2011-02-01","","","4","10","H/10/12/14/07596/08","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("361","830418","10/00397","14","K","CB Health Insurance","SHESIDE ABAGUNBUL ABASIMEL","M","","Jalasasa","1946-02-05","","","4","10","K/10/14/10/00397","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("362","830428","6914/013","D29","Prisoner","Credit Service","ABIDO ABADURA ABABOSON","M","","","1983-02-01","","","4","10","Prisoner/6914/013","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("363","830564","11/011/818/01","06","H","CB Health Insurance","NISRA SILAGHI EMAME","F","","Dingha","1996-02-11","","","4","10","H/10/06/11/011/818/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("364","830775","11/02005","10","K","CB Health Insurance","SHETEMAM SHEAWOL ABAWAJI","M","0924821897","Burkaasendabo","1956-02-02","","","4","10","K/10/10/11/02005","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("365","832186","34/04741/01","06","K","CB Health Insurance","BERHANE MULUNEH EJESO","F","","Diga","1963-02-12","","","4","19","K/19/06/34/04741/01","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("366","833297","22/09905/01","05","K","CB Health Insurance","UMII ABADIGA ABALABU","F","","Bilida","1976-02-13","","","4","10","K/10/05/22/09905/01","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("367","836331","27/05014","07","K","CB Health Insurance","ABANEGA ABAMILKI ABAWARI","M","","Kursakurti","1962-02-12","","","4","10","K/10/07/27/05014","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("368","836583","27/14383/06","04","K","CB Health Insurance","FAWZEN ABAJEBEL ABADURA","M","0931049832","Gungu","2008-02-09","","","4","10","K/10/04/27/14383/06","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("369","836618","25/00372/04","10","K","CB Health Insurance","TAHIR ABARAYA ABADIDU","M","0969203854","Boneya","1994-02-02","","","4","10","K/10/10/25/00372/04","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("370","837423","36/00023","09","K","CB Health Insurance","TADELU RAGGASA SAREBSA","F","","Gepasadan","1968-02-04","","","4","10","K/10/09/36/00023","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("371","837824","24/00575","10","K","CB Health Insurance","HAJEABAJEBLI ABAFOGI ABAJOBERE","M","0910055896","Ale","1945-02-23","","","4","10","K/10/10/24/00575","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("372","838231","1/0120376","08","H","CB Health Insurance","SEMIRA SEID MOHAMED","F","","ADISLEMAT","2012-02-01","","","4","10","H/10/08/1/0120376","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("373","838372","01/06200","05","K","CB Health Insurance","MIFTA ABAWRI ABADIDU","M","","Mxi","1973-02-06","","","4","10","K/10/05/01/06200","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("374","839396","02/14785","04","K","CB Health Insurance","ABAJIHAD SHEUSEN ABADIDU","M","","Omotho","1962-03-01","","","4","10","K/10/04/02/14785","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("375","839556","1879/20","D34","Refuge","Credit Service","CHJN GTLUWK TOT","M","","","2003-02-06","","","8","02","Refuge/1879/20","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("376","840271","18/01076","10","K","CB Health Insurance","ZEENU ABAGAYO ABABULI","M","","Mica","1980-02-04","","","4","10","K/10/10/18/01076","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("377","840326","2120/0039/2013","D38","Employee","Credit Service","ADMASU KIFL HYLE","M","0945046223","Bebeqa","1970-01-01","","","7","145","Employee/2120/0039/2013","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("378","840676","26/02883/04","07","H","CB Health Insurance","SALADIN AWOL ABAMECHA","M","","Ofoledawe","1970-01-01","","","4","10","H/10/07/26/02883/04","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("379","841080","24/20430","02","K","CB Health Insurance","AMBERU ABADAFIS ABABFATI","F","","G/kamse","1968-02-03","","","4","10","K/10/02/24/20430","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("380","843859","35/03938","07","K","CB Health Insurance","KEMAL ABAGIDI ABAWARI","M","","Warokolobo","1960-02-04","","","4","10","K/10/07/35/03938","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("381","843939","01/03442","16","K","CB Health Insurance","SHAKEDIR MOHAMED ABANANO","M","","01","1967-02-01","","","4","10","K/10/16/01/03442","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("382","843949","DNS/71/14/013","D29","Prisoner","Credit Service","ABAFIRA ABABOR ABAWAJI","M","","Maremiyabet","1953-02-16","","","4","10","Prisoner/DNS/71/14/013","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("383","845693","25/12149/01","04","K","CB Health Insurance","THAYETU HAYELA TESEMA","F","0964974729","Totobe","1957-02-02","","","4","10","K/10/04/25/12149/01","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("384","846086","23/06045/01","10","K","CB Health Insurance","KAMILA SHEJEMAL ABAFITA","F","0939889980","TALIBEYM","1093-02-19","","","4","10","K/10/10/23/06045/01","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("385","846657","19/00720","10","K","CB Health Insurance","ADERE BERCHA AYALO","M","","Busa","1948-02-11","","","4","10","K/10/10/19/00720","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("386","847774","09/06788/02","10","K","CB Health Insurance","ZABI AWAL ABAFIXA","F","0917303936","Hojatabula","1970-01-01","","","4","10","K/10/10/09/06788/02","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("387","847801","17/06342/01","10","K","CB Health Insurance","BURTUKAN ABAJABL ABADIGA","M","0917050138","Wirtu yadi","1977-02-13","","","4","10","K/10/10/17/06342/01","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("388","848219","01/00037","05","K","CB Health Insurance","TIGA TAREKGE AHEMEDIN","M","0917522049","Yebu","1956-02-24","","","4","10","K/10/05/01/00037","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("389","849503","31/04065/1","09","K","CB Health Insurance","SHMSE ABAJIHAD ABAGISA","F","","G/LUCHNE","1970-02-03","","","4","10","K/10/09/31/04065/1","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("390","850140","05/03122/04","16","K","CB Health Insurance","ZAMZAM HABISA JIMA","F","0927588774","01","1977-02-11","","","4","10","K/10/16/05/03122/04","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("391","852356","15/02445","10","K","CB Health Insurance","ABAADEME ABABULGU ABASIML","M","","Sandboabidigudna","1938-02-25","","","4","10","K/10/10/15/02445","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("392","852490","08/03754","04","H","CB Health Insurance","KAZINA ABABIYA ABAFITA","F","0960884128","Bulbul","1960-02-29","","","4","10","H/10/04/08/03754","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("393","852697","02/17028","02","K","CB Health Insurance","ABINET KEBEDE BAYEY","F","","Kalosedha","1960-02-20","","","4","10","K/10/02/02/17028","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("394","852903","30/000172/02","04","K","CB Health Insurance","ALIMA XAYEB ABAWARI","F","","Marawa","1981-02-26","","","4","10","K/10/04/30/000172/02","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("395","853078","10/04322","05","K","CB Health Insurance","SEFIYAT HUSEN MOHAMED","F","","Kelaguda","1994-03-02","","","4","10","K/10/05/10/04322","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("396","854704","17/05530/01","02","H","CB Health Insurance","ABEDULIBAREKI AHEMEDE MUHAMEDE","M","","AMNERO","2000-02-23","","","4","19","H/19/02/17/05530/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("397","854863","06/06662","05","H","CB Health Insurance","ZAHARA NAZIFI ABADIGA","F","","Gubamuleta","1982-02-03","","","4","10","H/10/05/06/06662","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("398","855676","22/12885/01","04","K","CB Health Insurance","SULTANA ABANEZIFE HAJE","F","0988568518","Mara","1972-02-16","","","4","10","K/10/04/22/12885/01","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("399","855678","05/05724/04","05","K","CB Health Insurance","IMRAN GALI ABAFIRA","M","","Koralelisa","2007-02-26","","","4","10","K/10/05/05/05724/04","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("400","857490","06/12077","02","K","CB Health Insurance","QAMAYU ABABULGU ABAGEYO","F","0917542312","04","1970-01-01","","","4","10","K/10/02/06/12077","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("401","857664","06/12794","04","K","CB Health Insurance","ABARAYA ABABUSEN ABABOSO","M","","Tikurabulo","1952-02-04","","","4","10","K/10/04/06/12794","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("402","857911","01/00140/08","11","K","CB Health Insurance","ELIYASE HUSEN ABACHEBESA","M","0901123932","Toba","1982-02-03","","","4","10","K/10/11/01/00140/08","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("403","857996","42/14/013","D29","Prisoner","Credit Service","SEMIRA JIHAD ","F","","","1985-02-12","","","4","10","Prisoner/42/14/013","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("404","858083","13/12938","09","H","CB Health Insurance","NASIR ABABULGU ABACHBSA","M","","Bobrga","1975-02-19","","","4","10","H/10/09/13/12938","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("405","858660","1/07014","06","K","CB Health Insurance","JEMAL HAJI ABABULGU","M","","Adislimat","1918-02-10","","","4","10","K/10/06/1/07014","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("406","859012","06/00358","04","K","CB Health Insurance","KEYRU ABABOR ABABULGU","M","0917241118","Tikurabulo","1970-02-02","","","4","10","K/10/04/06/00358","48","Monday, October 12, 2020");
INSERT INTO patients VALUES("407","859381","29/05589","07","H","CB Health Insurance","SABIT SHENASR ABAGOJAM","M","0939381945","Siosidisa","1982-01-02","","","4","10","H/10/07/29/05589","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("408","859717","23/06684","07","K","CB Health Insurance","WUBAYEW GETAHUN HALEMARIYAM","F","","Maxaso","1962-02-18","","","4","10","K/10/07/23/06684","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("409","859918","7/02581","07","K","CB Health Insurance","ABAJIHAD ABAMILKI ABAMALKA","M","","BITO","1957-02-03","","","4","10","K/10/07/7/02581","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("410","861603","02/012020","06","H","CB Health Insurance","DIRIBA BEDANE FAJE","M","","YACHA","1954-02-01","","","4","10","H/10/06/02/012020","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("411","861986","1894/20","D34","Refuge","Credit Service","GOY KURIYOM KAP","M","","Gambela","2006-02-16","","","8","02","Refuge/1894/20","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("412","862025","25/12159","04","K","CB Health Insurance","BIYA ABDULKERIM SHEESA","M","0977917400","Tikurbalto","1977-02-02","","","4","10","K/10/04/25/12159","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("413","862208","05/00100/01","15","K","CB Health Insurance","MUNERA AWOLI ABADURA","F","","Dabisemanta","1994-02-03","","","4","10","K/10/15/05/00100/01","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("414","862358","12/2820890","12","K","CB Health Insurance","ABARAYA ABABORE ABAWAJE","M","","Sakalga","1942-02-19","","","4","10","K/10/12/12/2820890","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("415","862998","7/06428","07","H","CB Health Insurance","HIKMA NASIR ABABORE","F","","K/Korti","1999-02-17","","","4","10","H/10/07/7/06428","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("416","864963","08/08248/01","05","H","CB Health Insurance","ASNAKU ABDURAMAN AHJE","F","","YABU","1968-02-19","","","4","10","H/10/05/08/08248/01","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("417","866467","09/12500/03","12","K","CB Health Insurance","EMANI KALID ABAFIRA","F","","Danaba","1970-01-01","","","4","10","K/10/12/09/12500/03","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("418","866540","14/07663","09","K","CB Health Insurance","AWPL ABAMECA ABABULEGU","M","","Sakla","1970-02-02","","","4","10","K/10/09/14/07663","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("419","866669","19/01070/01","16","K","CB Health Insurance","KADIJA GURMESA GAROMA","F","0904471248","Karatalgo","1973-02-09","","","4","10","K/10/16/19/01070/01","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("420","866844","08/05690/01","05","K","CB Health Insurance","FOZIYA KEBIR ABAGUMBUL","F","0910004386","Lami","1979-02-15","","","4","10","K/10/05/08/05690/01","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("421","867113","33/26581","02","K","CB Health Insurance","AYIKAL MOHAMEDE ABAOLII","M","","Odowadam","2004-02-19","","","4","10","K/10/02/33/26581","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("422","867583","03/06223","09","K","CB Health Insurance","AHEMEDE ABAMECHA ABAFOGE","M","0917947690","Gibeboso","1954-02-03","","","4","10","K/10/09/03/06223","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("423","867767","8/10463","11","Letter","Health Care finance","ABDUREZAQ HAMZA WAGA","M","","Gido","1992-02-02","","","4","10","Letter/8/10463","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("424","868216","27/11945","04","K","CB Health Insurance","ABAMECHA ABAFOGE ABADIDU","M","","Gunju","1960-02-03","","","4","10","K/10/04/27/11945","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("425","869297","32/20537","02","H","CB Health Insurance","MUSAB JABALE ABABEYA","M","","KOTA","1970-01-01","","","4","10","H/10/02/32/20537","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("426","869365","01/08143","10","K","CB Health Insurance","KEBEDE ESHETU JEMANE","M","","Nada","1946-02-01","","","4","10","K/10/10/01/08143","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("427","870842","19/06092","11","K","CB Health Insurance","MARIYAMA ABAJIRIGA ABAFOGI","F","","Sika","1983-02-01","","","4","10","K/10/11/19/06092","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("428","871410","01/040447","09","H","CB Health Insurance","HADANEGA ABAGERO ABAGOJAM","F","0948964031","01","1940-02-19","","","4","10","H/10/09/01/040447","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("429","872294","20/00063","15","K","CB Health Insurance","SHEMOHAMMED ABAMEGAL ABAGERO","M","","Sorasefita","1954-02-11","","","4","10","K/10/15/20/00063","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("430","872652","1/9/2013","CBE-Main","Employee","Credit Service","MULUQEN FISA ","M","","Jimma","1990-02-10","","","4","10","Employee/1/9/2013","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("431","872744","27/10203","02","K","CB Health Insurance","HAILE WALDE ANIBO","M","","GADANGGUTAN","1963-02-19","","","4","10","K/10/02/27/10203","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("432","873121","15/06348","10","K","CB Health Insurance","KATIMA ABARAYA ABADIGA","F","0987817032","Abdigudina","1984-02-10","","","4","10","K/10/10/15/06348","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("433","873142","16/02327","05","K","CB Health Insurance","KEMAL ABAOLI ABAJIRU","M","","Kunageneni","1960-02-01","","","4","10","K/10/05/16/02327","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("434","873353","09/00233/04","15","K","CB Health Insurance","ASEMA HAJESEMESU ABAFITA","F","0941463502","Garedukededa","2000-02-02","","","4","10","K/10/15/09/00233/04","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("435","873585","294/19/2013","D29","Employee","Credit Service","LIDT MERGA KIDANE","F","","03","1988-02-13","","","4","10","Employee/294/19/2013","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("436","873664","25/02308/03","07","K","CB Health Insurance","KALID NAZIF ABADURA","M","0946251574","Odohidhatah","1998-02-03","","","4","10","K/10/07/25/02308/03","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("437","873839","12/02139/02","10","K","CB Health Insurance","RHANE GALI ABABORE","F","0917520924","Sayaadamo","2008-02-03","","","4","10","K/10/10/12/02139/02","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("438","873923","31/08094/01","06","K","CB Health Insurance","LUBABA ADEME MUSETEFA","M","","Babu","1990-03-02","","","4","10","K/10/06/31/08094/01","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("439","874690","03/00113","15","K","CB Health Insurance","ABAJEHADE ABSMBI ABFITA","M","","Darega","1957-02-03","","","4","10","K/10/15/03/00113","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("440","875060","19/16284","02","K","CB Health Insurance","AYSHA ABARAGO SESE","F","0902219422","Qujo","1964-02-16","","","4","10","K/10/02/19/16284","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("441","875146","16/04129/14","03","K","CB Health Insurance","HAFIZ TAJU GUDATA","M","0943210978","Abunagali","1970-01-01","","","4","09","K/09/03/16/04129/14","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("442","875149","0017/02","D22","K","CB Health Insurance","BEREKET ALEMAYEHU ASHAMPI","M","","Keja","2012-08-02","","","7","21","K/21/D22/0017/02","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("443","875553","1871/20","D37","Prisoner","Credit Service","PITRE DING NIYAL","M","0954073477","01","1971-02-12","","","8","02","Prisoner/1871/20","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("444","875734","236/19/2013","D29","Employee","Credit Service","FUADE MUHAMED BASIRE","M","0910012299","Menderakochi","1979-02-03","","","4","10","Employee/236/19/2013","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("445","875759","3/07416","06","H","CB Health Insurance","SISAY ABASHARO BEKELE","F","","Adengema","1979-02-01","","","4","10","H/10/06/3/07416","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("446","875805","01/03355","03","K","CB Health Insurance","KINDE DAGAFU KASA","M","0917396997","Toba","1927-02-11","","","4","10","K/10/03/01/03355","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("447","876181","1840/20","D34","Prisoner","Credit Service","YYONI FOCH BINMI","M","0962091019","","2010-02-02","","","8","02","Prisoner/1840/20","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("448","876294","20/14646","04","K","CB Health Insurance","ABDURAKIM HAJI ABAGODU","M","","Haderahika","1997-02-25","","","4","10","K/10/04/20/14646","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("449","876451","39/03537","06","K","CB Health Insurance","TESFAYE KEBEDE GODORE","M","0927546366","Kere lilo","1970-01-01","","","4","19","K/19/06/39/03537","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("450","876718","20/04094","10","K","CB Health Insurance","ABARAYA ABADEGA ABADIDU","M","0917163483","Nadabidaru","1962-02-02","","","4","10","K/10/10/20/04094","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("451","876913","17/04686","02","K","CB Health Insurance","SHABU SEBESO ABAMECHA","M","0986458884","Chaderosusa","1986-02-02","","","4","10","K/10/02/17/04686","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("452","876931","20/08332","09","K","CB Health Insurance","ABARAYA ABAGUMBULI ABAMILKI","M","","Bakagudeta","1955-03-02","","","4","10","K/10/09/20/08332","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("453","876949","10/06854/01","01","K","CB Health Insurance","ENDYA UMER MUSAB","F","","Dh/Texxoo","1958-02-03","","","4","19","K/19/01/10/06854/01","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("454","877162","01/08938","12","K","CB Health Insurance","SHAMSYA SAMBE BUSHAN","F","0919108390","Solon","1969-02-05","","","4","10","K/10/12/01/08938","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("455","877305","DNS64/14/2013","D29","Prisoner","Credit Service","SHETU DAMISE HAYILE","M","","Maremay","1978-02-11","","","4","10","Prisoner/DNS64/14/2013","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("456","877423","22/10689","02","K","CB Health Insurance","ZENU ABAMECHA ABADIKO","M","","GENJIELEBU","1960-02-02","","","4","10","K/10/02/22/10689","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("457","878197","08/01393/01","04","K","CB Health Insurance","HINDIYA KADIR ABADURA","F","","Bulibuli","1978-02-03","","","4","10","K/10/04/08/01393/01","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("458","878366","40/02189/01","06","K","CB Health Insurance","NABIL NAGASE KAMALI","M","0984897037","Welkasmbo","2002-02-02","","","4","10","K/10/06/40/02189/01","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("459","878580","05/01136/01","D03","K","CB Health Insurance","WARIQITU KABADA NGRI","F","","Mucucocanco","1961-02-17","","","4","19","K/19/D03/05/01136/01","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("460","878720","17/001182","02","K","CB Health Insurance","BAYISA BANTI KUSA","M","0913186245","Embero","1966-02-20","","","4","19","K/19/02/17/001182","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("461","878857","17/03083","09","H","CB Health Insurance","JAMALI ABAGIDE ABAWAREY","M","","Wachotebo","1978-02-23","","","4","10","H/10/09/17/03083","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("462","878945","14/09145","04","K","CB Health Insurance","ABAJEBELE ABAFOGI ABAKOYAS","M","","OSO","1940-02-01","","","4","10","K/10/04/14/09145","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("463","878964","18/05064","06","K","CB Health Insurance","DIREBA BATU DUBI","M","","Galajemata","1933-02-03","","","4","10","K/10/06/18/05064","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("464","878965","32/19096","02","K","CB Health Insurance","LAYILA AWAL ABAJOBRE","F","","Qota","1972-02-05","","","4","10","K/10/02/32/19096","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("465","878966","036/03593","D16","K","CB Health Insurance","SHAFI ADEM AMAN","M","","A/ayyayoo","1931-02-26","","","4","09","K/09/D16/036/03593","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("466","878992","15/08707","04","K","CB Health Insurance","HAJE ABAGOJAME ABAMECHA","M","","SIBA","1947-02-03","","","4","10","K/10/04/15/08707","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("467","879092","02/40105","D01","K","CB Health Insurance","KADIJA ABARAYA ABADIGA","F","","Sayewodawa","1970-02-03","","","4","10","K/10/D01/02/40105","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("468","879112","24/14434/03","04","K","CB Health Insurance","ABDO MHMED ABASANBI","M","","Gora","1970-01-01","","","4","10","K/10/04/24/14434/03","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("469","879241","14/010552/04","05","K","CB Health Insurance","HDMUDRE ABANGA ABAGARO","F","","Sonbobontu","1970-01-01","","","4","10","K/10/05/14/010552/04","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("470","879284","DNS/45/14/013","D29","Prisoner","Credit Service","MIFTAHI AHMED ","M","","Maremiyabet","1986-02-04","","","4","10","Prisoner/DNS/45/14/013","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("471","879289","DNS/45/14/013","D29","Prisoner","Credit Service","MIFTAH AHMED ","M","","","1986-02-02","","","4","10","Prisoner/DNS/45/14/013","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("472","879482","27/10175","09","K","CB Health Insurance","HDATAJU ABAZINAB ABAWARI","F","0917599328","Lilu","1970-01-01","","","4","10","K/10/09/27/10175","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("473","879658","307/19/2013","D29","Employee","Credit Service","AZEB LAMA TALILA","F","","","1984-02-10","","","4","10","Employee/307/19/2013","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("474","879878","16/03814/01","16","K","CB Health Insurance","ABERU TEKA DIBABA","F","","Alelo mieso","1986-02-04","","","4","10","K/10/16/16/03814/01","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("475","879895","02/23093","02","K","CB Health Insurance","WELDU JALA DIGA","M","0917306678","Teso sedecha","1940-02-05","","","4","10","K/10/02/02/23093","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("476","879958","40/01176","06","K","CB Health Insurance","SARIFE ABABULO INSA","M","0924791382","Welka","1954-02-18","","","4","10","K/10/06/40/01176","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("477","879965","01/00017","15","K","CB Health Insurance","ABAJHAD ABAGUNBUL ABAJIRGA","M","","Bilu","1970-01-01","","","4","10","K/10/15/01/00017","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("478","880257","6/05626/01","07","H","CB Health Insurance","FOZE NASIR ABASANBI","F","","Bilo","1977-02-17","","","4","10","H/10/07/6/05626/01","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("479","880512","26/00712/01","10","K","CB Health Insurance","MASHO ABARAYA ABADULA","F","","Lalobeyem","1983-02-05","","","4","10","K/10/10/26/00712/01","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("480","880518","21/04993","07","K","CB Health Insurance","MHMED ABAWARI ABAJOBR","M","0945032968","Qortiwsrbi","1952-02-18","","","4","10","K/10/07/21/04993","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("481","880923","1920/10","D34","Refuge","Credit Service","MUN OKELO OKIYO","F","","gambela","2012-07-11","","","8","02","Refuge/1920/10","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("482","881006","04/03373","09","K","CB Health Insurance","JEBEL ABASANBE ABADURA","M","","Hushankoch","1953-02-19","","","4","10","K/10/09/04/03373","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("483","881274","1274","D37","Refuge","Credit Service","THOWLA GEDIBEN REKET","F","","","2010-02-07","","","8","02","Refuge/1274","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("484","881478","10/05084","06","K","CB Health Insurance","FATUMA ABAFITA ABAJOBIR","F","0935379371","Dembi gabena","1959-02-05","","","4","10","K/10/06/10/05084","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("485","881653","05/14787","04","K","CB Health Insurance","ABDO AAJIKADER ABAGALANE","M","","Xkurebalta","1950-02-19","","","4","10","K/10/04/05/14787","53","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("486","882133","11/01223/01","12","K","CB Health Insurance","RASHID ABABORI ABAMILKI","F","0995932512","Ceqa","1974-02-17","","","4","10","K/10/12/11/01223/01","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("487","882345","07/05394","09","K","CB Health Insurance","ABAOLI ABAMECHA ABALABU","M","","Shashamane","1945-02-03","","","4","10","K/10/09/07/05394","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("488","882561","1830/20","D34","Employee","Credit Service","GNONGIR KUT OKOCH","F","0996254311","","1978-02-02","","","8","02","Employee/1830/20","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("489","882673","05/14787","04","K","CB Health Insurance","ABDO HAJE KEDERE","M","","Tekurebalto","1950-02-13","","","4","10","K/10/04/05/14787","52","Thursday, October 22, 2020");
INSERT INTO patients VALUES("490","882739","06/03502","05","K","CB Health Insurance","AMAD ABAWARI ABAGOGU","M","","Gubemulata","1960-02-11","","","4","10","K/10/05/06/03502","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("491","882835","13/1689/01","12","K","CB Health Insurance","HAMZA  ABADIGA ABAGOJAM","M","","CALA","2000-02-18","","","4","10","K/10/12/13/1689/01","44","Thursday, October 15, 2020");
INSERT INTO patients VALUES("492","883000","29/20453","02","K","CB Health Insurance","BIYA ABADURA ABAERESO","M","","Chamichego","1965-02-12","","","4","10","K/10/02/29/20453","34","Thursday, October 22, 2020");
INSERT INTO patients VALUES("493","883185","13/00593/01","09","K","CB Health Insurance","HAMBERI NASIRE ABABEYA","F","","Bobaroga","1975-02-19","","","4","10","K/10/09/13/00593/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("494","883419","28/06405","07","K","CB Health Insurance","ABAJIHD ABAGARO ABABORA","M","","Hulo","1960-02-06","","","4","10","K/10/07/28/06405","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("495","883453","30/02303","06","K","CB Health Insurance","ANWAR SARIFE SUREFA","M","0923495309","Ambuya","1970-02-04","","","4","10","K/10/06/30/02303","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("496","883718","12/4004","07","K","CB Health Insurance","MAHAMEDZEN ABAFITA ABABULGU","M","0972362385","Dilbi","1984-02-19","","","4","10","K/10/07/12/4004","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("497","883735","28/08534","04","K","CB Health Insurance","ABAFIRA SHEJAMAL SHEKALIFA","M","0925940629","Kalecha","1958-02-15","","","4","10","K/10/04/28/08534","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("498","883881","1903/20","D37","Prisoner","Credit Service","NYWU TEYANG RIW","M","","Trekde","1978-02-26","","","8","02","Prisoner/1903/20","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("499","883903","31/01025","06","Letter","Health Care finance","ABRSHE AYYALE KASA","F","","Babo","1970-01-01","","","4","10","Letter/31/01025","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("500","884023","04/14016","D31","K","CB Health Insurance","ABABIYA ABADURA ABAFITA","M","","Osanakocha","1967-02-02","","","4","10","K/10/D31/04/14016","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("501","884037","05374/01","10","K","CB Health Insurance","FATUMA SAISA ABAMECHA","F","","Chafanega","1968-02-03","","","4","10","K/10/10/05374/01","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("502","884102","63204","D200","Employee","Credit Service","ABIYE CHEKOL KENAW","M","","Qera","1986-02-11","","","4","10","Employee/63204","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("503","884237","02/04926","09","K","CB Health Insurance","ABAMECHA ABABULGU ABAGIBE","M","","02","1956-02-29","","","4","10","K/10/09/02/04926","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("504","884330","26/03723/02","04","K","CB Health Insurance","HADNEZIF ABANEGA ABASIMELE","F","","ANIKESO","1959-02-01","","","4","10","K/10/04/26/03723/02","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("505","884356","04/12671","04","K","CB Health Insurance","ABARAYA ABAGISA ABAGERO","M","0995322023","Kitenbile","1945-03-02","","","4","10","K/10/04/04/12671","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("506","884589","01/04932","09","K","CB Health Insurance","KEZINA JEMAL ABAGISA","F","","01","1983-02-04","","","4","10","K/10/09/01/04932","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("507","884621","30/050792","06","H","CB Health Insurance","FATUNA ABADEKO ABAWARE","F","","Ambuy","1970-02-19","","","4","10","H/10/06/30/050792","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("508","884727","24/13438/01","04","K","CB Health Insurance","ALIMA TAJU ABADIGA","F","","Karogora","1982-10-13","","","4","10","K/10/04/24/13438/01","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("509","884976","35","D200","Employee","Credit Service","TOLESA NGUSE BEDHANE","M","0911795770","Bosakito","1970-02-04","","","4","10","Employee/35","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("510","884991","03/00180","15","K","CB Health Insurance","SHARIF ABABIYA ABAMECHA","F","","DERGEBERTO","1968-02-02","","","4","10","K/10/15/03/00180","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("511","885051","09/12062/08","04","K","CB Health Insurance","BINIYAM BIYAA ABAJABAL","M","0987827388","Gelo","2012-07-02","","","4","10","K/10/04/09/12062/08","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("512","885055","14/09648","D01","K","CB Health Insurance","MAMEDSANE ABABULGU ABAJOBIR","M","0917238994","Siybontu","1975-02-15","","","4","10","K/10/D01/14/09648","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("513","885184","07/11203","09","K","CB Health Insurance","SAIDA ABAZENABE ABAFETA","F","","Shashmane","1975-02-19","","","4","10","K/10/09/07/11203","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("514","885303","10/07138","05","K","CB Health Insurance","FATUMA BIYA ABADILIBE","F","","Kelaguda","1968-02-01","","","4","10","K/10/05/10/07138","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("515","885319","310/19/013","D29","Prisoner","Credit Service","SIRAJ YASIN SORI","M","","","1993-02-03","","","4","10","Prisoner/310/19/013","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("516","885382","06/06253","05","K","CB Health Insurance","URGE JIFARA NAGASA","F","0988553755","Gubemulata","1979-02-02","","","4","10","K/10/05/06/06253","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("517","885577","32/14482","09","K","CB Health Insurance","FAWEZAN MAMUDE ABAGERO","M","","Sebadaka","2001-02-23","","","4","10","K/10/09/32/14482","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("518","885674","21/07517","10","H","CB Health Insurance","ABAMEREHABA ABADULA ABADIKO","M","0917878132","Hundatoli","1952-02-01","","","4","10","H/10/10/21/07517","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("519","885729","27/06434/00","04","K","CB Health Insurance","ABATEMAM ABAGERO ABADIDU","M","0917917224","Gunju","1940-02-04","","","4","10","K/10/04/27/06434/00","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("520","886111","09/10485/01","12","K","CB Health Insurance","ALIMA ABAZINAB ABAMECHA","F","0917619705","Deneba","1973-02-11","","","4","10","K/10/12/09/10485/01","34","Thursday, October 22, 2020");
INSERT INTO patients VALUES("521","886370","1863/20","D34","Refuge","Credit Service","BUYA GATWECH KUANY","M","0917924823","gambela","2000-10-20","","","8","02","Refuge/1863/20","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("522","886633","01/010051","10","K","CB Health Insurance","SHEMAMEDZEN ESA MOHAMED","M","","YEBU","1975-02-01","","","4","10","K/10/10/01/010051","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("523","886942","17/03111/07","02","K","CB Health Insurance","SHARAFU ABAOREE ABAQOYYAS","M","0917019125","Yenbero","1970-01-01","","","4","19","K/19/02/17/03111/07","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("524","887046","31/09126/01","06","K","CB Health Insurance","ZAKIRA SHAFI IBRAHIM","F","0917069048","Babu","1985-03-01","","","4","10","K/10/06/31/09126/01","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("525","887155","32/03059/01","04","K","CB Health Insurance","ALIMA ABAGIDE ABABUSHIM","F","","AWAYESEBU","1968-02-02","","","4","10","K/10/04/32/03059/01","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("526","887324","29/01747/02","06","K","CB Health Insurance","RANATU TEFERA MERGA","F","","Dkagudru","1935-02-11","","","4","19","K/19/06/29/01747/02","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("527","887334","06584/02","04","H","CB Health Insurance","JAMILA ABAMACHA ABAFOGI","F","","Gilo","1999-02-02","","","4","10","H/10/04/06584/02","11","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("528","887337","01/10273/01","01","H","CB Health Insurance","FATUMA ABAMECHA ABADILBI","F","0936901010","Chira","1971-02-02","","","4","10","H/10/01/01/10273/01","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("529","887492","08/0001/01","08","K","CB Health Insurance","SHURE KALECHO HUNIDA","F","","Karesa","1976-02-03","","","4","19","K/19/08/08/0001/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("530","887518","10/09473","04","K","CB Health Insurance","ABAMECHA ABAGERO ABASAJA","M","","Kitwenbela","1926-02-03","","","4","10","K/10/04/10/09473","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("531","887633","29/07507/04","04","K","CB Health Insurance","MAATIYOS ULUMAA TAKAH","M","","Bejahoro","1999-02-23","","","4","19","K/19/04/29/07507/04","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("532","887756","36/21095","02","K","CB Health Insurance","SALIYA SEIFU ABAJEBEL","F","0904462731","Amafuntule","2007-02-17","","","4","10","K/10/02/36/21095","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("533","887794","10/02532/02","06","K","CB Health Insurance","WEZIFA SHEMSU HAJI","F","","D/gabena","1994-02-10","","","4","10","K/10/06/10/02532/02","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("534","887899","31/10297","02","K","CB Health Insurance","NEGO ABAKUMASA ABAKOYAS","M","","Odo adami","1998-02-05","","","4","10","K/10/02/31/10297","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("535","888268","08/03/41","D12","K","CB Health Insurance","MHAMAD ABAFOGI ABAWAJI","M","","Gonacala","1968-02-25","","","4","10","K/10/D12/08/03/41","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("536","888429","21/07852","10","K","CB Health Insurance","MUSHIRA ABARESHAD ABAGUMBULE","M","","","1994-02-01","","","4","10","K/10/10/21/07852","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("537","888554","69/14/013","D29","Prisoner","Credit Service","MHAMED ABANAGA ","M","","Manderaqoci","1953-02-02","","","4","10","Prisoner/69/14/013","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("538","888742","01/00015","05","K","CB Health Insurance","AHEMEDE ABADIGA ABAGERO","M","0942637811","Yabu","1959-02-03","","","4","10","K/10/05/01/00015","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("539","888744","1898/20","D34","Refuge","Credit Service","LATEJOR KAN CHOLE","F","0992127595","Gambela","1997-02-01","","","8","02","Refuge/1898/20","44","Thursday, October 15, 2020");
INSERT INTO patients VALUES("540","888764","26/14594","04","K","CB Health Insurance","ABABOR ABAGARO ABAJIRGA","M","","AKASO","1940-02-18","","","4","10","K/10/04/26/14594","45","Thursday, October 15, 2020");
INSERT INTO patients VALUES("541","888776","19/09976","05","K","CB Health Insurance","ZEYNEBA ABADURA ABASEMELE","F","","BEKLA","1970-02-18","","","4","10","K/10/05/19/09976","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("542","888946","10/00562","15","H","CB Health Insurance","NAZIF ABADURA ABAWAR","M","","Asanufe","1970-01-01","","","4","10","H/10/15/10/00562","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("543","889049","06/02268","10","H","CB Health Insurance","ABABIZINAB ABADIGAA ABAGARO","M","","Nadacala","1963-02-19","","","4","10","H/10/10/06/02268","53","Friday, October 16, 2020");
INSERT INTO patients VALUES("544","889053","24/04783/02","05","K","CB Health Insurance","HINDIYA SHARF ABADURA","F","","Kantri","1992-02-19","","","4","10","K/10/05/24/04783/02","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("545","889140","09/03333","09","H","CB Health Insurance","ABAJEBEL ABABULGU ABAGIBE","M","0917619806","Alaga","1965-02-11","","","4","10","H/10/09/09/03333","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("546","889146","14/01098","07","K","CB Health Insurance","HAYAT TIJANI ABAFIXA","F","0917249133","Gianjoabayi","2002-02-26","","","4","10","K/10/07/14/01098","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("547","889214","06/02971","11","K","CB Health Insurance","SHMAMUD EBA WAYESA","M","","Gela","1954-02-03","","","4","10","K/10/11/06/02971","50","Sunday, October 25, 2020");
INSERT INTO patients VALUES("548","889238","32/01205","06","K","CB Health Insurance","MITEKU MENEGESA SEDALILI","M","0917943822","Abukombolicha","1948-02-24","","","4","19","K/19/06/32/01205","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("549","889328","02/05321/04","09","H","CB Health Insurance","ABDULBASIT AHIMED ABAFITA","M","","Seka 02","2008-02-05","","","4","10","H/10/09/02/05321/04","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("550","889406","16/02390","01","H","CB Health Insurance","GETAHUN KASAW ALEMU","M","","WANJAKERESA","1943-02-03","","","4","10","H/10/01/16/02390","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("551","889517","32/05045","06","H","CB Health Insurance","ZAHARA ABAGERO ABAMEYA","F","0936393630","Mndera","1964-02-24","","","4","10","H/10/06/32/05045","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("552","889536","05/01053/01","03","K","CB Health Insurance","FATUMA MEHAMED ALI","F","0941334549","Efoyachi","1961-02-02","","","4","10","K/10/03/05/01053/01","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("553","889556","06/02655","05","K","CB Health Insurance","BULTU ABADURA ABAFOGE","F","","GUBAMULETA","1970-02-02","","","4","10","K/10/05/06/02655","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("554","889558","06/02655","05","K","CB Health Insurance","BULTU ABAMECHA ABAFOGI","F","","GUBAMULETA","1970-02-01","","","4","10","K/10/05/06/02655","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("555","889619","09/00090/08","01","K","CB Health Insurance","AHMID NIZFE ABAMEHA","M","","Sediloya","1996-02-04","","","4","10","K/10/01/09/00090/08","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("556","889648","21/06298/02","01","H","CB Health Insurance","UMERA ALIYI YADETA","F","","Lekasiden","1998-02-02","","","4","19","H/19/01/21/06298/02","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("557","889684","DNS/58/14/013","D29","Prisoner","Credit Service","GEZALI SHEMUDEN","M","","Maremia","1932-02-12","","","4","10","Prisoner/DNS/58/14/013","11","Friday, October 16, 2020");
INSERT INTO patients VALUES("558","889707","1834/2020","D34","Refuge","Credit Service","LAM BIEL JOM","M","","","1990-02-12","","","8","02","Refuge/1834/2020","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("559","889708","842/20","D123","Refuge","Credit Service","NYKUACH THALVAL CHOUL","F","","01","2012-02-03","","","8","04","Refuge/842/20","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("560","889710","04/00940/03","D03","K","CB Health Insurance","MELKITU GEBRE AMENTE","F","","","1993-02-03","","","4","19","K/19/D03/04/00940/03","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("561","889761","07/11/00046","08","K","CB Health Insurance","NEGASA BEKELE JUKA","M","","Soteloado","1952-02-10","","","4","19","K/19/08/07/11/00046","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("562","889768","00948","04","K","CB Health Insurance","MAREMA DUGUMA JICHA","M","0917261722","Ababora","1968-02-03","","","4","19","K/19/04/00948","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("563","889896","17/0742","02","K","CB Health Insurance","JEWARIYA ABAMECHA ABAGISA","F","","Chederosuse","1973-02-20","","","4","10","K/10/02/17/0742","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("564","889899","05/03086","07","K","CB Health Insurance","TOLASA EDOSA GONDERE","F","0948117888","Aynogamoji","1970-01-01","","","4","19","K/19/07/05/03086","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("565","889902","07/00219","03","K","CB Health Insurance","KANIZE ABAGIDE ABABUILIGU","F","0913956121","Gatokura","1974-02-10","","","4","10","K/10/03/07/00219","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("566","890106","10/00545","15","K","CB Health Insurance","ZEWDE WELANCHO WOJU","M","0993508463","Hasanope","1977-02-02","","","4","10","K/10/15/10/00545","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("567","890161","29/08793","04","H","CB Health Insurance","ABATEMAMNE ABAJOBERE ABANANO","M","","Kombolicha","1976-02-03","","","4","10","H/10/04/29/08793","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("568","890217","01/02349/01","01","K","CB Health Insurance","DASI DABABA MIKAYALI","F","0976010163","Chera","1965-02-04","","","4","10","K/10/01/01/02349/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("569","890231","248/19/013","D29","Employee","Credit Service","SIYAME AHEMED JEBELI","F","0917830179","Herematamenetena","1996-02-10","","","4","10","Employee/248/19/013","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("570","890307","07/05270","05","K","CB Health Insurance","HUSEN ABALUELESA ABABULGU","M","","Gudeta bula","1960-02-11","","","4","10","K/10/05/07/05270","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("571","890364","10/02/04/14536","D12","K","CB Health Insurance","JEWAR NEZIF KEMAL","M","0931015264","Acaafta","2009-02-02","","","4","10","K/10/D12/10/02/04/14536","48","Monday, October 12, 2020");
INSERT INTO patients VALUES("572","890375","10/12669/06","04","K","CB Health Insurance","LAYILA TAJU ABADIGA","F","","Kitibile","1982-02-11","","","4","10","K/10/04/10/12669/06","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("573","890392","18/011325","05","K","CB Health Insurance","BINIYAM MHMED ABAGARO","M","","Doyobiqila","2001-02-05","","","4","10","K/10/05/18/011325","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("574","890415","15/010174","05","H","CB Health Insurance","SHAEBIRAHIM ABAGOJAM ABAGISA","M","","Koralelisa","1969-02-01","","","4","10","H/10/05/15/010174","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("575","890484","20/07112","05","K","CB Health Insurance","SULTAN ABABOR ABASURA","M","","BABALAKARA","1958-02-18","","","4","10","K/10/05/20/07112","45","Friday, October 16, 2020");
INSERT INTO patients VALUES("576","890545","BN/5515","D201","Employee","Credit Service","ASERAT BAFA ","M","","","1960-02-10","","","7","98","Employee/BN/5515","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("577","890697","1836/20","D34","Refuge","Credit Service","NYAREAK GATLUAK CHOUL","F","0954072025","01","1983-02-18","","","8","02","Refuge/1836/20","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("578","890722","DNS/64/14/2013","D29","Prisoner","Credit Service","ABUSE ALEMU KANTORA","M","","Maremeya","1985-02-03","","","4","10","Prisoner/DNS/64/14/2013","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("579","890752","09103423/02","04","K","CB Health Insurance","AMINA MOHAMED ABABORU","F","","Gandgaloti","1986-02-19","","","4","10","K/10/04/09103423/02","53","Sunday, October 18, 2020");
INSERT INTO patients VALUES("580","890894","22/010687/01","05","K","CB Health Insurance","SUFI JEMALI ABASANBE","F","0912177543","Blida","1960-02-02","","","4","10","K/10/05/22/010687/01","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("581","891251","DNS/71/14/013","D29","Prisoner","Credit Service","KASAHUN NIGUSE PULA","M","","Maremiya bet","1975-02-16","","","4","10","Prisoner/DNS/71/14/013","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("582","891645","30/07056","10","K","CB Health Insurance","ABAMOGA ABAMACHA ABADIKO","M","0917262730","Tuli","1953-02-10","","","4","10","K/10/10/30/07056","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("583","891853","19/04715","10","K","CB Health Insurance","AYISHA ABAGIDI ABAFOGI","F","0965018596","Babo","1988-02-13","","","4","10","K/10/10/19/04715","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("584","891933","3208003","02","K","CB Health Insurance","HUZAFE TAYER ABABEYA","M","","Kotacowa","1998-02-19","","","4","10","K/10/02/3208003","53","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("585","892008","01/12362","05","K","CB Health Insurance","EDILU BEKELE HAYLE","M","0921220730","Yebu","1989-02-11","","","4","10","K/10/05/01/12362","34","Thursday, October 22, 2020");
INSERT INTO patients VALUES("586","892016","06/04036","05","K","CB Health Insurance","AWOLI ABADIGA ABAGERO","M","","Gubamuleta","1962-02-10","","","4","10","K/10/05/06/04036","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("587","892035","0512/671","12","K","CB Health Insurance","ALFA MHMDE ABAFIXA","M","0936370087","Ganglata","1970-01-01","","","4","10","K/10/12/0512/671","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("588","892282","28/09687/01","04","K","CB Health Insurance","ZAZIFA MUNAWR ABATAMAME","F","","Kalch","1985-02-26","","","4","10","K/10/04/28/09687/01","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("589","892295","P/YKW/128/1","D22","K","CB Health Insurance","ASNAKECH ABARA FANTA","F","0917233644","Yamikichawelega","1947-02-25","","","7","21","K/21/D22/P/YKW/128/1","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("590","892374","04627/03","06","K","CB Health Insurance","DERARTU HASEN AREGA","F","0917478741","CEMA","1998-02-19","","","4","10","K/10/06/04627/03","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("591","892405","19/00080/05","15","K","CB Health Insurance","UMAR ABANEM ABABOSON","M","","KAGADELBE","1996-02-20","","","4","10","K/10/15/19/00080/05","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("592","892410","22/14/013","D29","Prisoner","Credit Service","AFIZ ABARASHAD ABAMACHA","M","","","1985-02-04","","","4","10","Prisoner/22/14/013","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("593","892412","DNS/45/14/013","D29","Prisoner","Credit Service","ABANEGA ABASANBI","M","","","1952-02-02","","","4","10","Prisoner/DNS/45/14/013","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("594","892641","1779/20","D34","Refuge","Credit Service","NYADOL LAM ","M","","","1998-02-05","","","8","02","Refuge/1779/20","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("595","892714","01/02179","09","K","CB Health Insurance","MOHAMED ABAJEBELE SHEKI","M","0970120550","01","1978-02-01","","","4","10","K/10/09/01/02179","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("596","892884","31/02129/04","09","K","CB Health Insurance","RIHAD ABARASHAD ABAGARO","M","0982165767","Gashlucne","1970-01-01","","","4","10","K/10/09/31/02129/04","48","Monday, October 12, 2020");
INSERT INTO patients VALUES("597","892945","11/001/02","08","H","CB Health Insurance","RIJALI TOLI NAGESA","M","0991655631","Sotaloado","2001-02-24","","","4","19","H/19/08/11/001/02","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("598","892956","17/05591/03","02","K","CB Health Insurance","NAJATE ALI HUSEN","F","0917805818","Jembero","1997-02-03","","","4","19","K/19/02/17/05591/03","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("599","893021","02/04/013","D29","Prisoner","Credit Service","TAHIR ABAJIHAD ","M","","","1985-02-01","","","4","10","Prisoner/02/04/013","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("600","893151","19/05023","07","H","CB Health Insurance","AMIDA ABADIGA ABADIKO","F","","Kata","1977-02-03","","","4","10","H/10/07/19/05023","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("601","893173","01/03199/04","14","K","CB Health Insurance","YESUUF ABAGIDI ABAGODU","M","","Dalota","2011-02-11","","","4","10","K/10/14/01/03199/04","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("602","893353","06/05027/03","10","K","CB Health Insurance","ZALFAY SHKAMAL ABABULEGU","F","0984653817","Nadacalah","1996-02-10","","","4","10","K/10/10/06/05027/03","48","Monday, October 12, 2020");
INSERT INTO patients VALUES("603","893404","28/16825","02","K","CB Health Insurance","ASNA RASHAD ABAJABL","F","","Yaciurache","1998-02-08","","","4","10","K/10/02/28/16825","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("604","893446","32/09092","04","K","CB Health Insurance","ABAJIHADE ABAWAREY ABABESERE","M","","Awayesebu","1958-02-03","","","4","10","K/10/04/32/09092","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("605","893475","08/100016/04","09","K","CB Health Insurance","RAFZ SHEMSU MOHAMED","M","","Boyu","1999-02-12","","","4","10","K/10/09/08/100016/04","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("606","893545","2705091/03","07","K","CB Health Insurance","KURSMUM SHJAMALI ABAGOJME","F","","Kotyoserb","1996-02-19","","","4","10","K/10/07/2705091/03","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("607","893556","26/09012/01","04","K","CB Health Insurance","AYISHA ABAMECHA ABADIKO","F","0917060614","Ankeso","1993-02-04","","","4","10","K/10/04/26/09012/01","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("608","893623","35/29","D200","Employee","Credit Service","MELKAMU AYALE AMBO","M","0930471571","","1993-02-19","","","4","10","Employee/35/29","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("609","893664","23/03363","04","K","CB Health Insurance","ABATEMAME ABAFOGE ABAWAJE","M","0986454462","Karakora","1950-02-02","","","4","10","K/10/04/23/03363","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("610","893675","09/10219","02","K","CB Health Insurance","BUSA HAREDFA BANITOLO","F","0965792064","Choca","1930-02-02","","","4","10","K/10/02/09/10219","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("611","893695","29/14/013","D29","Prisoner","Credit Service","BAHIRU NASIR SHERIF","M","","","1985-02-12","","","4","10","Prisoner/29/14/013","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("612","893757","1767/20","D34","Refuge","Credit Service","NYALOL GOK RUOCH","F","0993768331","Gambela","1978-02-01","","","8","02","Refuge/1767/20","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("613","893836","15/03101/2","10","K","CB Health Insurance","DAWE ABDI DEBAL","M","0939930024","Mica","1970-01-01","","","4","10","K/10/10/15/03101/2","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("614","893851","24/04780/01","05","K","CB Health Insurance","HADEMUDIN ABAGERO ABADIKO","F","0917237607","Kenteri","1964-02-02","","","4","10","K/10/05/24/04780/01","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("615","893876","01/11984","04","K","CB Health Insurance","ABABORE ABAFOGE ABAMILKE","M","0917619560","Wayu","1946-02-04","","","4","10","K/10/04/01/11984","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("616","893883","453/20","D34","Refuge","Credit Service","AWINA UDEL GORA","F","","","1963-02-19","","","8","02","Refuge/453/20","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("617","893887","16/04666/01","10","K","CB Health Insurance","ZINASH AKALU WLDEMARIYAM","M","","HAROGIBE","1975-02-04","","","4","10","K/10/10/16/04666/01","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("618","893896","02/05704/09","02","K","CB Health Insurance","MANSUR MAHAMED GARO","M","","Dambi","2001-02-10","","","4","19","K/19/02/02/05704/09","45","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("619","893910","15/00942","10","K","CB Health Insurance","GALI ABAGIDI ABAWARI","M","","Abdigudina","1966-02-05","","","4","10","K/10/10/15/00942","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("620","894008","14/195","02","K","CB Health Insurance","YEABSIRA BOGALE GEBIRA","M","","Omogobu","1980-02-01","","","4","10","K/10/02/14/195","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("621","894048","12/09634","05","K","CB Health Insurance","ABDO SHERIF ABAFOGI","M","","Gubebosoka","1975-02-04","","","4","10","K/10/05/12/09634","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("622","894183","08/07/076000/01","08","K","CB Health Insurance","GEREMEW EJIGU BIRANU","M","0964124704","Dimajila","1996-03-04","","","4","19","K/19/08/08/07/076000/01","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("623","894190","04/00234","15","K","CB Health Insurance","ABABOR ABADIDU ABABULGU","M","","Dararkorma","1943-02-11","","","4","10","K/10/15/04/00234","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("624","894268","20/00535/04","D23","K","CB Health Insurance","ABEDURHEMAE SHYASEN ABABULIGU","M","0934562514","YERADOCHA","2005-02-02","","","4","10","K/10/D23/20/00535/04","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("625","894319","13/1154","05","K","CB Health Insurance","ABAFIRA ABAQIX SHKI","M","","Urgyi","1970-01-01","","","4","10","K/10/05/13/1154","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("626","894348","25/12085","05","K","CB Health Insurance","FXUMA SHARIF ABABULGU","F","","Bilida","1970-01-01","","","4","10","K/10/05/25/12085","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("627","894387","16/02953","10","K","CB Health Insurance","FIKIRUDIN GALI HUSEN","M","0967669079","Asenedebo","1998-02-21","","","4","10","K/10/10/16/02953","45","Friday, October 16, 2020");
INSERT INTO patients VALUES("628","894480","17/05968","07","K","CB Health Insurance","HDATAMAM ABABOOR ABABULGU","F","0914473156","Gesh","1970-01-01","","","4","10","K/10/07/17/05968","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("629","894482","139/14/2013","D29","Prisoner","Credit Service","ANWAR FUAD YASIN","M","","M/kocki","1994-02-03","","","4","10","Prisoner/139/14/2013","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("630","894483","05/07027","08","K","CB Health Insurance","ABDU ADEME MUHAMED","M","0917921721","Sanaga fato","1978-02-05","","","4","19","K/19/08/05/07027","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("631","894533","14/7974","10","K","CB Health Insurance","ABAJABAL ABAGOJAM ABAWAJE","M","0917633236","WAKITILA","1938-02-18","","","4","10","K/10/10/14/7974","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("632","894538","41/4/14138","02","K","CB Health Insurance","ZENET ABAQANO ABAGIB","F","0963239783","Cago","1999-02-24","","","4","10","K/10/02/41/4/14138","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("633","894622","305529","05","K","CB Health Insurance","MERIDIYA JAMAL ABAWARI","F","","Karakasoixi","1970-02-07","","","4","10","K/10/05/305529","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("634","894623","31/09123","06","K","CB Health Insurance","AYELECHE TILHUNE WALIDA","F","0909466498","Babu","1950-02-03","","","4","10","K/10/06/31/09123","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("635","894641","01/14561","04","K","CB Health Insurance","TARIKU LIGDI TULU","M","0906230114","01","1990-02-10","","","4","19","K/19/04/01/14561","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("636","894646","DNS/40/14/2013","D29","Prisoner","Credit Service","AJIBU ABAWARI ABAGISA","M","","Maremiya bet","1993-02-09","","","4","10","Prisoner/DNS/40/14/2013","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("637","894648","mksp/1766/20","D34","Refuge","Credit Service","NYAMA KAN PAK","F","","Gambela","2013-01-25","","","8","02","Refuge/mksp/1766/20","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("638","1213","33/06560","02","H","CB Health Insurance","HADEDILBI ABAMECHA ABAGODU","F","0984691067","Sito","1945-02-02","","","4","10","H/10/02/33/06560","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("639","894697","16/01856/02","10","K","CB Health Insurance","FIKERITE MEZAGBU MENGESH","M","","Arogeba","1998-02-19","","","4","10","K/10/10/16/01856/02","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("640","894703","02491/01","04","K","CB Health Insurance","UMALEANA TAHA ABABORE","F","0948096075","Tolikereso","1962-02-17","","","4","10","K/10/04/02491/01","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("641","894717","19/06625/01","07","K","CB Health Insurance","MULUNESH MENGESHA MAHE","F","","Keta kedida","1968-02-10","","","4","10","K/10/07/19/06625/01","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("642","894722","05829","05","K","CB Health Insurance","HADEBIYA ABANEGA ABAMILKE","M","0984890191","Gubemuleta","1959-02-03","","","4","10","K/10/05/05829","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("643","894732","05/02319/01","10","K","CB Health Insurance","ZENABA ABASHERF ABAGARO","F","0917631408","Doyoyaya","1985-02-11","","","4","10","K/10/10/05/02319/01","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("644","894735","1/03484","07","H","CB Health Insurance","ABASHARAFEDIN ABABULGU ABARORO","M","","Alama","1965-02-19","","","4","10","H/10/07/1/03484","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("645","894756","08/05151","09","K","CB Health Insurance","AMAD AWAL HAJIHUSEN","F","0925864142","Guyoqacama","1980-02-12","","","4","10","K/10/09/08/05151","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("646","894763","05/08137/01","04","K","CB Health Insurance","MARUMA ABDALA ABABULGU","F","","Xiqurbalto","1980-02-10","","","4","10","K/10/04/05/08137/01","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("647","894814","06/01616/4","10","H","CB Health Insurance","ZELIKA SHEAHIMED ABAJIHAD","F","","BIDARU","2000-02-01","","","4","10","H/10/10/06/01616/4","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("648","894827","09/07752","04","K","CB Health Insurance","TAHA ABAQOYASA ABARORO","M","","GELO","1960-02-15","","","4","10","K/10/04/09/07752","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("649","894828","20/04996","09","K","CB Health Insurance","MUHAMEDE ABAGERO ABANANO","M","0917323369","Bakegudo","1970-02-02","","","4","10","K/10/09/20/04996","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("650","894831","22/01718/01","04","H","CB Health Insurance","AYISHA HUSEN ABACABESA","F","","Gunju","1982-02-02","","","4","10","H/10/04/22/01718/01","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("651","894835","09/00186","15","H","CB Health Insurance","ABAFITA ANAMILKE DAHSA","M","","Gariiru","1942-02-02","","","4","10","H/10/15/09/00186","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("652","894845","07/09476/01","04","K","CB Health Insurance","FATIYA HUSEN ABAGIDI","F","","Tolekoresu","1995-02-19","","","4","10","K/10/04/07/09476/01","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("653","894855","28/11395","12","H","CB Health Insurance","ABAZINAB SHEJEMAL SHEMOHAMEDSANI","M","","Arokake","1961-10-13","","","4","10","H/10/12/28/11395","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("654","894910","17/10858/05","04","H","CB Health Insurance","MUSAAB ZAKIYII ABAMACHA","M","","Kusabaru","2004-02-19","","","4","10","H/10/04/17/10858/05","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("655","894927","02/01335/01","01","K","CB Health Insurance","JAWARE ABAJIHADE SHAHEMEDE","M","","Kelato","1982-02-03","","","4","10","K/10/01/02/01335/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("656","894944","23/18384","02","K","CB Health Insurance","ABAJABAL ABADIKO SHEKALIFA","M","","Kowesaja","1960-02-15","","","4","10","K/10/02/23/18384","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("657","894952","01/08069","10","K","CB Health Insurance","RABIYA ABAFIRA ABAFITA","F","0917258946","Nadabidaru","1985-02-03","","","4","10","K/10/10/01/08069","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("658","895077","19/00640","D03","K","CB Health Insurance","SHITAYE GEMECHU TULA","F","","gemeda","1968-02-12","","","4","19","K/19/D03/19/00640","34","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("659","895116","14/20790","02","K","CB Health Insurance","TAJURE ABADURA ABAWARI","F","","OMOGOBU","1950-02-02","","","4","10","K/10/02/14/20790","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("660","895128","01/11984","12","K","CB Health Insurance","ABABORE ABAFOGE ABAMILKE","M","0992508001","Wayu","1946-02-02","","","4","10","K/10/12/01/11984","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("661","895135","28/12526","09","K","CB Health Insurance","ROZAA NASIR ABAGERO","F","","Budodaka","1997-02-19","","","4","10","K/10/09/28/12526","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("662","895141","23/05203","07","H","CB Health Insurance","ABADURA ABAFOGI ABAGOJIM","M","0937465682","Maxanso","1956-08-12","","","4","10","H/10/07/23/05203","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("663","895151","23/08298","04","K","CB Health Insurance","ABAS NASIR ABAJIHA","M","0965810856","Karogora","2012-02-19","","","4","10","K/10/04/23/08298","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("664","895180","  01/00651","02","H","CB Health Insurance","XAASO RADE ALIE","M","","01","1938-02-19","","","4","10","H/10/02/  01/00651","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("665","895198","10/04391","05","K","CB Health Insurance","SHAFI ABAGIDI ABALULESA","M","0917306419","Doyobiqila","1975-02-02","","","4","10","K/10/05/10/04391","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("666","895202","1204018/01","05","K","CB Health Insurance","ZELIKA SEFU ABACHA","F","0975598531","Gubebosoqa","1982-02-04","","","4","10","K/10/05/1204018/01","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("667","895222","S/01/128/01","D22","H","CB Health Insurance","KETEMES ADEME ADO","M","","Gogeb","2013-02-03","","","7","21","H/21/D22/S/01/128/01","11","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("668","895224","10/10162","09","K","CB Health Insurance","ABABULIGU ABAGODU ABAJOBERE","M","","Kusaro","1943-02-03","","","4","10","K/10/09/10/10162","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("669","895234","03/02549","05","K","CB Health Insurance","ADEM HUSEN LEMU","M","","Bedogaliko","1968-06-15","","","4","19","K/19/05/03/02549","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("670","895239","10996/03","05","K","CB Health Insurance","MAMEDESANE ABEDELAA ABALOFA","M","","DOWA","1993-02-02","","","4","10","K/10/05/10996/03","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("671","895248","24/00515/03","10","K","CB Health Insurance","SETENA TEMAM ABASAMBI","F","0978284554","ALE","1995-02-02","","","4","10","K/10/10/24/00515/03","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("672","895263","07/00710","05","K","CB Health Insurance","RAYA ABAGELAN ABADULA","M","0917013559","Gudetabula","1956-02-02","","","4","10","K/10/05/07/00710","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("673","895279","20/01556/02","04","K","CB Health Insurance","TINA ARDA BEDIYE","F","","","1972-02-11","","","4","10","K/10/04/20/01556/02","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("674","895281","04/05/11121/06","04","K","CB Health Insurance","AMINA ABADIR HASEN","F","0913801210","Uta","1970-01-01","","","4","19","K/19/04/04/05/11121/06","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("675","895282","17/04471","05","K","CB Health Insurance","EDIRIS ABAMILKI BONSA","M","0917247411","Etisaguda","1965-02-16","","","4","10","K/10/05/17/04471","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("676","895284","17/04589/03","10","K","CB Health Insurance","MASHO ABAOLI ABAGUMBULE","F","","ASENDABO","1994-02-01","","","4","10","K/10/10/17/04589/03","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("677","895294","13/03505/01","06","K","CB Health Insurance","ATSEDA ADERA BEDEGA","F","0917005014","Debelo","1956-02-02","","","4","10","K/10/06/13/03505/01","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("678","895296","35/30","D200","Employee","Credit Service","LEMI SINTAYEHU MELAKU","M","0940433942","Ginjo","1984-02-02","","","4","10","Employee/35/30","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("679","895297","35/30","D200","Employee","Credit Service","MASETEWALI TAMERU KABEDA","M","0928377392","GIJO","1988-02-03","","","4","10","Employee/35/30","11","Monday, October 12, 2020");
INSERT INTO patients VALUES("680","895298","35/32","D200","Employee","Credit Service","GOLORO GOBA GODETO","M","0940429427","Ginjo","1990-02-02","","","4","10","Employee/35/32","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("681","895299","35/30","D200","Employee","Credit Service","ZENA MOHAMED SIRAJ","M","0940429407","Ginjo","1992-02-02","","","4","10","Employee/35/30","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("682","895300","35/31","D200","Employee","Credit Service","DEREJE AWOL MOLISO","M","0961469734","Ginjo","1990-02-02","","","4","10","Employee/35/31","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("683","895301","35/30","D200","Employee","Credit Service","MATIYOS SAMUEL KAPICHO","M","0941014703","Ginjo","1993-02-02","","","4","10","Employee/35/30","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("684","895309","1855/20","D34","Refuge","Credit Service","NHANHIAL GATLUAK ROUT","F","","","1994-02-01","","","8","02","Refuge/1855/20","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("685","895310","11593","12","K","CB Health Insurance","DAMENA DAMESA DENAGEDE","M","","Sokoru","1937-02-18","","","4","10","K/10/12/11593","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("686","895328","06/00098","15","K","CB Health Insurance","ABADIGA ABAZABEN ABASIMELE","M","0921775780","Didiboberodo","1936-02-01","","","4","10","K/10/15/06/00098","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("687","895373","24/05939","05","K","CB Health Insurance","ABEDLEY NURU ABAMAGLE","M","0938204848","Kentere","1993-02-06","","","4","10","K/10/05/24/05939","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("688","895394","32/02904/02","04","K","CB Health Insurance","KAYERU TIJNE ABAMECHA","F","","Awayesebo","1985-02-16","","","4","10","K/10/04/32/02904/02","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("689","895399","08/04502/01","10","K","CB Health Insurance","MUHAMEDE SHYASENE ABAGERO","M","0932884223","Dechanede","1968-02-02","","","4","10","K/10/10/08/04502/01","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("690","895421","DNS/45/14/013","D29","Prisoner","Credit Service","ABDI KEDIR Hajii","M","","","1991-02-02","","","4","10","Prisoner/DNS/45/14/013","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("691","895422","16/00143","15","K","CB Health Insurance","ABABULGU ABAGELAN ABAGUDETA","M","","Mole","1943-02-10","","","4","10","K/10/15/16/00143","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("692","895423","01/02982","D01","Employee","Credit Service","ABATEMAME ABAMEGALI ABAMILKE","M","","Alameguda","1960-02-02","","","4","10","Employee/01/02982","36","Monday, October 12, 2020");
INSERT INTO patients VALUES("693","895428","15/00906/05","10","K","CB Health Insurance","TEMIKIN NEZIF ABDUREMAN","M","","ABDEGUDINA","2003-02-01","","","4","10","K/10/10/15/00906/05","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("694","895432","26/118108/01","12","K","CB Health Insurance","ABABIYA ABAGISA ABAGODU","M","","ANDODE","1953-02-01","","","4","10","K/10/12/26/118108/01","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("695","895439","24/14434/03","04","K","CB Health Insurance","ABDO MAMADAMIN ABASABI","M","","Gorasarit","1998-02-15","","","4","10","K/10/04/24/14434/03","45","Monday, October 12, 2020");
INSERT INTO patients VALUES("696","895440","0214/01","D22","K","CB Health Insurance","MESELECH WLDE KETO","F","0966103297","Kuti","1965-02-02","","","7","21","K/21/D22/0214/01","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("697","895441","07/00658","05","K","CB Health Insurance","ABABOR ABAWAREY ABABOSEN","M","","Gudetabula","1947-02-03","","","4","10","K/10/05/07/00658","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("698","895476","08/0260/05","09","H","CB Health Insurance","MUNIRA ABAFITA ABAWAREY","F","","Buyokechema","1980-02-02","","","4","10","H/10/09/08/0260/05","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("699","895484","23/00143","15","H","CB Health Insurance","NAJI ABATEMAM SHEKE","M","","YAYALEKE","1997-03-13","","","4","10","H/10/15/23/00143","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("700","895487","1727030/01","05","K","CB Health Insurance","ZEYIDA TAMAME ABAGISA","F","","Yabu","1970-02-04","","","4","10","K/10/05/1727030/01","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("701","895490","27/05768","05","K","CB Health Insurance","ZETUNA MULETA KITESA","F","0917131389","HURUFA","1971-02-01","","","4","19","K/19/05/27/05768","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("702","895492","21/00068/01","15","H","CB Health Insurance","LEZE MOHAMEDSANI ABATEMAM","F","0925657030","Toliharer","1986-02-02","","","4","10","H/10/15/21/00068/01","34","Monday, October 12, 2020");
INSERT INTO patients VALUES("703","895495","01/04533","07","H","CB Health Insurance","BEDASA TEREFE GUTEMA","M","0917470240","Dabo","1987-02-01","","","4","19","H/19/07/01/04533","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("704","895504","32/06612/02","05","H","CB Health Insurance","JUNID SAYIDO ABIDISA","M","","Asendabo","1997-02-01","","","4","19","H/19/05/32/06612/02","44","Monday, October 12, 2020");
INSERT INTO patients VALUES("705","895506","31/01909","08","K","CB Health Insurance","HAWA ABAJORGA ABABERA","F","0949007401","Mole","1971-02-23","","","4","10","K/10/08/31/01909","43","Monday, October 12, 2020");
INSERT INTO patients VALUES("706","895507","0113058/01","04","K","CB Health Insurance","TSEGA GYOHANIS FITHUN","F","","01","1978-02-11","","","4","19","K/19/04/0113058/01","48","Monday, October 12, 2020");
INSERT INTO patients VALUES("707","895512","25/018042","10","K","CB Health Insurance","JAMIL ABARAYA ABAMCA","F","","Colbym","1985-02-04","","","4","10","K/10/10/25/018042","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("708","895528","10/03595","03","K","CB Health Insurance","ZAHARA ABADIGA ABAGERO","F","","Yasirabera","1982-02-03","","","4","10","K/10/03/10/03595","34","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("709","895532","30/01443/02","07","H","CB Health Insurance","MUSLIMA ABABIYA ABAJORJA","F","0917064816","Sapo","2000-02-03","","","4","10","H/10/07/30/01443/02","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("710","895536","18/03016/03","05","K","CB Health Insurance","CALTU RAYA ABATAMAM","F","0941445209","Doyo","1999-02-02","","","4","10","K/10/05/18/03016/03","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("711","895543","24/08049","10","K","CB Health Insurance","ABADURA ABAJOBIR ABAGARO","M","","Alle","1948-02-20","","","4","10","K/10/10/24/08049","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("712","895565","36/06401","07","K","CB Health Insurance","ABASANBI SHEKI HUSEN","M","0902842687","Wala","1950-02-19","","","4","10","K/10/07/36/06401","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("713","895580","19/03377","06","H","CB Health Insurance","HADETEMAM ABAJIRU ABAFITA","F","0970056708","Galekemise","1953-02-04","","","4","10","H/10/06/19/03377","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("714","895592","04/05302","05","H","CB Health Insurance","MNERA SABESEB KADI","M","0935756193","Dowa","1976-02-03","","","4","10","H/10/05/04/05302","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("715","895596","32/01433","07","H","CB Health Insurance","LAYILA ABADURA ABAFOGI","F","0996338127","Sharfi","1960-02-03","","","4","10","H/10/07/32/01433","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("716","895600","11/07348/01","05","K","CB Health Insurance","RUQIYA AWOL ABADURA","F","0917247272","Sombo","1981-02-19","","","4","10","K/10/05/11/07348/01","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("717","895609","02/04485/2","10","K","CB Health Insurance","KERIYA ZENU ABATAMAM","F","","Ako","1978-02-10","","","4","10","K/10/10/02/04485/2","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("718","895620","143/29.1/019/13","D145","Employee","Credit Service","MECHULO MAMO MALETO","M","","","1977-02-02","","","7","145","Employee/143/29.1/019/13","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("719","895622","30/04051/04","02","K","CB Health Insurance","MAREM AHIMED KASAUHN","F","","Burkajalla","1970-01-01","","","4","19","K/19/02/30/04051/04","53","Friday, October 16, 2020");
INSERT INTO patients VALUES("720","895639","03/07189/02","06","H","CB Health Insurance","MUSIBA NASIRE ABAJEBELI","F","0978879669","Harengema","1993-02-03","","","4","10","H/10/06/03/07189/02","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("721","895684","1878/20","D36","Refuge","Credit Service","NYABOM GOAY TONG","M","","","2011-02-07","","","8","02","Refuge/1878/20","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("722","895685","1875/20","D34","Refuge","Credit Service","WIYUAL CHOUL BOL","M","0938582943","Gambela","2005-02-10","","","8","02","Refuge/1875/20","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("723","895699","15/03835/05","09","K","CB Health Insurance","IZEDIN HAJI ABATEMAME","M","0983098444","Ilekatogoba","1996-02-02","","","4","10","K/10/09/15/03835/05","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("724","895700","18/18410","02","K","CB Health Insurance","FATUMA NASIR ","F","","Goride","1963-02-19","","","4","10","K/10/02/18/18410","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("725","895701","11/11814/03","12","K","CB Health Insurance","HDNASIRE ABAGERO ABARUSIKE","F","0917478367","Chake","1963-02-03","","","4","10","K/10/12/11/11814/03","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("726","895703","P/Goji/0069/01","D22","K","CB Health Insurance","WARQINESH GIBO GINDO","F","0978876751","Gojeb","1978-02-20","","","7","21","K/21/D22/P/Goji/0069/01","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("727","895709","12/02273/07","10","K","CB Health Insurance","AMIN ABADURA ABABULGU","M","0917547508","Setodame","1985-02-19","","","4","10","K/10/10/12/02273/07","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("728","895720","46u/14/013","D29","Prisoner","Credit Service","RASHAD ABAMCA ABABULGU","M","","","1963-02-04","","","4","10","Prisoner/46u/14/013","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("729","895721","DNS/46/14/013","D29","Employee","Credit Service","YASIEN ABAMECA ABAGISA","M","","","1988-02-05","","","4","10","Employee/DNS/46/14/013","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("730","895722","DNS/46/14/013","D29","Prisoner","Credit Service","KEDIR ABADIKO ABARORO","M","","","1953-02-11","","","4","10","Prisoner/DNS/46/14/013","48","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("731","895735","10/01114/01","06","K","CB Health Insurance","TIRUNESE GEBERA ABARO","F","0942636919","DAMIBGABENA","1949-02-03","","","4","10","K/10/06/10/01114/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("732","895736","27/05046/02","06","H","CB Health Insurance","RAMA EBRHIM ABAHUSSEN","F","","K/gaBSA","1981-02-03","","","4","10","H/10/06/27/05046/02","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("733","895742","09/06103/4","09","K","CB Health Insurance","RAISA ABAFITA ABABULGU","F","0992501975","Adodealaga","1998-02-11","","","4","10","K/10/09/09/06103/4","45","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("734","895743","02/12670","12","K","CB Health Insurance","ABABIYA ABAGUMBUL ABAGUNJO","F","0918940588","Daka","1963-02-18","","","4","10","K/10/12/02/12670","45","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("735","895744","07/02314/04","D12","K","CB Health Insurance","FARUKI AWOLI BADIRU","M","0964975198","CHOCHA","2003-02-03","","","4","10","K/10/D12/07/02314/04","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("736","895752","28/19865","02","K","CB Health Insurance","ZAHARA SHKADIRE ABAGERO","F","0942354532","Yaach","1985-02-03","","","4","10","K/10/02/28/19865","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("737","895754","04/001155","02","H","CB Health Insurance","LEYILA NEGASH KUMA","F","0985746764","SOBO","1952-02-12","","","4","19","H/19/02/04/001155","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("738","895756","15/14757/01","04","K","CB Health Insurance","KAMILA ABAFIRA ABAGISA","F","0985287117","Siba","1986-02-03","","","4","10","K/10/04/15/14757/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("739","895757","27/011238","06","K","CB Health Insurance","KADIR ABAFIRA ABABULGU","M","","Kalagabsa","1983-02-19","","","4","10","K/10/06/27/011238","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("740","895763","25/04978/02","10","K","CB Health Insurance","AMIDA ABABIYA ABAJEBEL","F","","Chole beyem","1985-02-05","","","4","10","K/10/10/25/04978/02","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("741","895768","03/06381","05","K","CB Health Insurance","FERID BEDRU ABADIGA","M","0996336687","Hundatoli","1999-02-03","","","4","10","K/10/05/03/06381","34","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("742","895778","20/07081/02","05","K","CB Health Insurance","HASSEN ABAJEBEL ABAJEMAL","M","","BEBELA KARA","1995-02-03","","","4","10","K/10/05/20/07081/02","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("743","895779","12/07710/01","04","K","CB Health Insurance","AMINa ZAKIR ABANAIM","F","","BALA/WAJO","1973-02-03","","","4","10","K/10/04/12/07710/01","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("744","895783","26/011712","06","K","CB Health Insurance","ABANAGA ABADIGA ABABOR","M","","KAMISE WABIYA","1943-02-19","","","4","10","K/10/06/26/011712","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("745","895787","19/02114/05","07","K","CB Health Insurance","NESIRA ZAKIR ABADIGA","F","","Ketakedida","2001-02-19","","","4","10","K/10/07/19/02114/05","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("746","895791","01/00436/02","03","K","CB Health Insurance","NABIYATE UMER ABARAGO","F","0917532048","TOBA","1998-02-03","","","4","10","K/10/03/01/00436/02","43","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("747","895800","26/11110","05","K","CB Health Insurance","NEJASH KEDIR ABAJIHAD","M","","SOMODO","2008-02-03","","","4","10","K/10/05/26/11110","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("748","895804","25/03521/01","05","K","CB Health Insurance","KEDIRE ABANEGA ABAMEGAL","F","","Uruguay","1987-02-19","","","4","10","K/10/05/25/03521/01","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("749","895824","26/09971","05","K","CB Health Insurance","ALIMA ABAGIDI ABABOSEN","F","0917962230","Somodo","1991-02-19","","","4","10","K/10/05/26/09971","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("750","895830","21/14236","02","K","CB Health Insurance","ABEDELA IBIRHEM ABASANBE","M","0933357376","Buladochoci","1939-02-02","","","4","10","K/10/02/21/14236","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("751","895840","04/1402282","04","K","CB Health Insurance","JABELU LIGEDI MERDASA","M","0917518150","Tulumuta","1983-02-24","","","4","19","K/19/04/04/1402282","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("752","895843","01/02997/01","D16","K","CB Health Insurance","RAHALI TAMENE ABEDESA","F","0344229115","01","1993-02-10","","","4","09","K/09/D16/01/02997/01","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("753","895844","1877/20","D34","Refuge","Credit Service","NYABOUL JOCK NHIAL","F","","HARA","2013-02-12","","","8","02","Refuge/1877/20","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("754","895846","17/6678/02","D21","K","CB Health Insurance","TAAJU YAASIN IDRIS","M","0972374046","Guri","1970-01-01","","","4","09","K/09/D21/17/6678/02","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("755","895847","30/14085","02","K","CB Health Insurance","NAZIFE ABAMILKE ABADASA","M","0904462405","Jematadaro","1962-02-02","","","4","10","K/10/02/30/14085","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("756","895858","01/07137","10","K","CB Health Insurance","HADAFITA ABAGODU ABASANGI","F","","NADA01","1938-02-03","","","4","10","K/10/10/01/07137","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("757","895861","6/05625","07","H","CB Health Insurance","NURU ABAGIDI ABAFOGI","M","0977683679","Bilo","1940-02-19","","","4","10","H/10/07/6/05625","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("758","895901","05/00838","08","K","CB Health Insurance","NURA YASEN DANO","M","0906703094","Atenago","1950-02-09","","","4","10","K/10/08/05/00838","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("759","895904","03/05049","01","K","CB Health Insurance","SHETEMAM ABASIMEL ABADIGA","M","0920884271","Goredako","1960-02-04","","","4","10","K/10/01/03/05049","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("760","895905","08/13617/01","09","K","CB Health Insurance","MISKU ABAFOGI ABADIKO","F","","Buyokechema","1965-02-04","","","4","10","K/10/09/08/13617/01","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("761","895973","DNS/49/14/013","D29","Prisoner","Credit Service","ALAMUDIN ABARAYA ABAGOJAM","M","","Maremiyabet","1988-02-04","","","4","10","Prisoner/DNS/49/14/013","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("762","895974","DNS/49/14/013","D29","Prisoner","Credit Service","GALI ABAMECHA ABAWAJI","M","","Maremiyabet","1963-02-04","","","4","10","Prisoner/DNS/49/14/013","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("763","895975","DNS/49/013","D29","Employee","Credit Service","SADAME SAMISUDIN ABAMILKE","M","","Maremiya","1985-02-04","","","4","10","Employee/DNS/49/013","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("764","895976","49/14/013","D29","Prisoner","Credit Service","SEIFU ABDUSELAM ABAJIHAD","M","","MAREMIYABET","1987-02-11","","","4","10","Prisoner/49/14/013","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("765","895984","11882","09","K","CB Health Insurance","MUSBAHUDIN ABARAYA ABAGARO","M","0917247378","Alaga andode","1978-02-19","","","4","10","K/10/09/11882","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("766","896002","12/02970/03","04","H","CB Health Insurance","HADEBIYA ABAFITA ABALOFE","F","","BALAWAJO","1970-01-01","","","4","10","H/10/04/12/02970/03","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("767","896008","16/04309","10","K","CB Health Insurance","ABAJIHADE ABADIDU ABAGERO","M","0993149283","Lalisa","1963-02-02","","","4","10","K/10/10/16/04309","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("768","896014","02/11954/02","09","K","CB Health Insurance","ABDULKERIM ABABIYA ABASIMEL","M","0911756396","Seka 02","1995-02-04","","","4","10","K/10/09/02/11954/02","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("769","896021","03/02777","04","K","CB Health Insurance","DALIL ABAJIHADE ABAFOGE","M","0917500467","Babosereta","1969-02-03","","","4","10","K/10/04/03/02777","43","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("770","896022","DNS/51/14/013","D29","Prisoner","Credit Service","ABDI ABABOR ABAGIDI","M","","Maremiyabet","1986-02-04","","","4","10","Prisoner/DNS/51/14/013","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("771","896045","02/04392/01","16","K","CB Health Insurance","ALHMUDIN AHEMEDE SHMUHAMEDE","M","","HAROSOYOMA","1996-02-03","","","4","10","K/10/16/02/04392/01","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("772","896046","02/06425","06","K","CB Health Insurance","AHMED ABDULA AHMED","M","","Hroxaxsa","1970-01-01","","","4","19","K/19/06/02/06425","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("773","896059","10/1546","01","K","CB Health Insurance","TAKELE GEBRE GBRMARIYAM","M","","Chira","1970-01-01","","","4","10","K/10/01/10/1546","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("774","896063","25/01474/06","04","K","CB Health Insurance","EBSE FEKEDE DIDA","F","0967581451","Chega","1997-02-03","","","4","19","K/19/04/25/01474/06","34","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("775","896065","17/01361","05","K","CB Health Insurance","HDHNEZIF ABAMECH ABAGODU","F","0922839255","Itisaguda","1970-01-01","","","4","10","K/10/05/17/01361","48","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("776","896078","15/03641/01","07","K","CB Health Insurance","SHIKURI SHFADIL ABAZINAB","F","0988454913","Gierimguda","1998-02-18","","","4","10","K/10/07/15/03641/01","52","Wednesday, October 14, 2020");
INSERT INTO patients VALUES("777","896106","02/06530","09","K","CB Health Insurance","KEDIR ABAFITA ABAFOGI","M","0942632398","02","1983-02-10","","","4","10","K/10/09/02/06530","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("778","896112","22/16478","02","K","CB Health Insurance","HADABIYA ABAMACHA ABAGIBE","F","0917507995","GAJIELBU","1961-02-12","","","4","10","K/10/02/22/16478","45","Thursday, October 15, 2020");
INSERT INTO patients VALUES("779","896124","27/05857/03","04","K","CB Health Insurance","MISWOR ZENU ABAMECHA","M","0917196233","Gunju","2000-02-03","","","4","10","K/10/04/27/05857/03","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("780","896126","20/00042/03","15","H","CB Health Insurance","AJIBA ABAZINAB ABADIGA","F","0905243079","Sora sefata","1997-02-05","","","4","10","H/10/15/20/00042/03","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("781","896150","14/0210","D16","K","CB Health Insurance","AMAR SHUKURI TIJANI","M","","Sena","2012-11-01","","","4","09","K/09/D16/14/0210","45","Friday, October 16, 2020");
INSERT INTO patients VALUES("782","896153","18/93/20","D34","Refuge","Credit Service","CHANKOSE WILWAL PUK","M","","","1990-02-11","","","8","02","Refuge/18/93/20","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("783","896156","06/01480/06","10","K","CB Health Insurance","EFTU ABAZINAB SHEKI","F","0921160204","NADACALA","2003-02-25","","","4","10","K/10/10/06/01480/06","45","Friday, October 16, 2020");
INSERT INTO patients VALUES("784","896174","10/11845","05","K","CB Health Insurance","AMARE MUHAMEDE KADERE","M","0917058057","Kelaguda","2004-02-03","","","4","10","K/10/05/10/11845","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("785","896175","01/08989","05","H","CB Health Insurance","HAFIZ MUKITAR IBRAHIM","M","0984935342","Chore","2007-02-22","","","4","10","H/10/05/01/08989","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("786","896197","17/14554","02","K","CB Health Insurance","ABDULAZIZ NABSO ABANURA","M","0936730217","Rosuse","1995-02-07","","","4","10","K/10/02/17/14554","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("787","896207","04/00780/01","04","K","CB Health Insurance","ABAMECHA ABAJOBIR ABADIKO","M","","Babu","1934-02-04","","","4","10","K/10/04/04/00780/01","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("788","896217","mlb/467/20","D129","Employee","Credit Service","LUBAKE LOKINE LOSHEN","F","0926307474","02","1970-01-01","","","8","03","Employee/mlb/467/20","45","Thursday, October 15, 2020");
INSERT INTO patients VALUES("789","896229","02/001974/04","02","K","CB Health Insurance","EKRAM ASFAW SEID","F","0911793817","Dembi","2012-05-14","","","4","19","K/19/02/02/001974/04","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("790","896240","16//05986","05","Letter","Health Care finance","KALISA ZAKIR ABATAMAM","F","","Hundaqanani","1970-01-01","","","4","10","Letter/16//05986","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("791","896250","18/23665","02","K","CB Health Insurance","MUHAMEDE IBERHIM BUSERA","M","0921219920","Omoguruda","1943-02-02","","","4","10","K/10/02/18/23665","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("792","896252","07/02182/01","03","H","CB Health Insurance","AMBARU ABAFOGI ABASINBO","F","","Gofa","1967-02-06","","","4","10","H/10/03/07/02182/01","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("793","896254","04/110742","05","K","CB Health Insurance","BIRQISA BEYA ABAGOJEM","F","","Doha","1970-01-01","","","4","10","K/10/05/04/110742","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("794","896259","26/04111/04","02","K","CB Health Insurance","SUMAYA ZENU ABASANBI","F","","Andode","2003-02-05","","","4","10","K/10/02/26/04111/04","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("795","896261","35/05242","07","H","CB Health Insurance","SALIM ABAJIHAD ABAGOJEM","M","","Warokolobo","1984-02-20","","","4","10","H/10/07/35/05242","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("796","896266","24/011797","06","H","CB Health Insurance","MOHAMED KUMSA MULATA","M","","H/jimate","1971-02-03","","","4","10","H/10/06/24/011797","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("797","896272","14/03709","D16","K","CB Health Insurance","KELIL MOHAMED LEMU","M","","Sena","1960-02-10","","","4","09","K/09/D16/14/03709","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("798","896274","12/01489/02","04","K","CB Health Insurance","BIRKISA BIYA ABAFITA","F","","Balbwajo","1975-02-03","","","4","10","K/10/04/12/01489/02","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("799","896281","23/00169/05","15","K","CB Health Insurance","BIRETUKWAN ABAJEBELI ABASEMELI","F","","Yayaloka","1990-02-03","","","4","10","K/10/15/23/00169/05","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("800","896290","dnu/53/14/2013","D29","Refuge","Credit Service","MAIKES HAILU GEBRE","M","","Ginjo","1970-01-01","","","4","10","Refuge/dnu/53/14/2013","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("801","896294","dns/53/14/2013","D29","Prisoner","Credit Service","ASEFA ANTENE ANWAR","M","","","1955-02-02","","","4","10","Prisoner/dns/53/14/2013","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("802","896295","dns53/14/2013","D29","Prisoner","Credit Service","NASIR MOHAMED AHMED","M","","M/kocki","1993-02-03","","","4","10","Prisoner/dns53/14/2013","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("803","896296","55/14/2013","D29","Prisoner","Credit Service","TAJU SHAHIMED ABABULGU","M","","","1968-02-03","","","4","10","Prisoner/55/14/2013","50","Thursday, October 15, 2020");
INSERT INTO patients VALUES("804","896297","10/01549/09","14","K","CB Health Insurance","HADEMASHER ABADURA ABADIDU","F","0953651119","Yela sasachi","1960-02-05","","","4","10","K/10/14/10/01549/09","34","Thursday, October 15, 2020");
INSERT INTO patients VALUES("805","896298","36/010973","06","H","CB Health Insurance","ZENU ABAKORO ABAGIDE","M","0979752107","Tenebolalo","1960-02-03","","","4","10","H/10/06/36/010973","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("806","896303","26/04111","12","K","CB Health Insurance","ZENA ABASAMBI ABABOR","F","","Andode","1970-01-01","","","4","10","K/10/12/26/04111","48","Thursday, October 15, 2020");
INSERT INTO patients VALUES("807","896307","16/09348","01","K","CB Health Insurance","LOMI ABAJEHADE ABABULIGU","M","0917007021","Wanjakeresa","1977-02-03","","","4","10","K/10/01/16/09348","43","Thursday, October 15, 2020");
INSERT INTO patients VALUES("808","896327","3/0513/07","07","K","CB Health Insurance","SABERY AHIMAD AJIE","M","","Sito","1970-01-01","","","4","10","K/10/07/3/0513/07","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("809","896345","11/02649/01","D16","H","CB Health Insurance","ZEWEDA MEREGASA GOBENA","F","0917159651","Wetea","1955-02-03","","","4","09","H/09/D16/11/02649/01","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("810","896347","1898/20","D34","Refuge","Credit Service","DENG GATELUWAK WAJING","M","0996249863","03","1953-02-01","","","8","02","Refuge/1898/20","44","Thursday, October 15, 2020");
INSERT INTO patients VALUES("811","896386","26/09526","09","H","CB Health Insurance","HAJI ABAMACHA ABADIDU","M","","Nasa","1980-02-19","","","4","10","H/10/09/26/09526","53","Friday, October 16, 2020");
INSERT INTO patients VALUES("812","896392","06/06291","10","H","CB Health Insurance","ABABEYA SAKI SASIFA","M","","Nada hala","1963-02-12","","","4","10","H/10/10/06/06291","53","Saturday, October 17, 2020");
INSERT INTO patients VALUES("813","896393","32/05027","07","K","CB Health Insurance","NIGATU DARASE ADENO","M","","Sharfe","1979-02-19","","","4","10","K/10/07/32/05027","53","Friday, October 16, 2020");
INSERT INTO patients VALUES("814","896409","28/02658/01","04","H","CB Health Insurance","REIS JEMAL ABABOSEN","M","","Kalacha","1996-02-11","","","4","10","H/10/04/28/02658/01","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("815","896416","DNS/57/14/013","D29","Prisoner","Credit Service","WONDESEN MOGES GEBREGZIABHER","M","","Maremiyabet","1989-02-05","","","4","10","Prisoner/DNS/57/14/013","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("816","896417","DNS/57/14/013","D29","Prisoner","Credit Service","RESHAD KADIRE AHEMED","M","","Maremeya","1973-02-04","","","4","10","Prisoner/DNS/57/14/013","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("817","896426","19/09898","05","K","CB Health Insurance","ABAFITA ABADIGA ABABOSO","M","0925173313","Doyo","1958-02-02","","","4","10","K/10/05/19/09898","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("818","896429","1913/20","D36","Prisoner","Credit Service","BOR DING TUR","M","","Ganbla","2003-02-10","","","8","02","Prisoner/1913/20","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("819","896444","16/00006/04","15","K","CB Health Insurance","SUMAYA GALIB ABATAMAM","F","","Mole","2001-02-13","","","4","10","K/10/15/16/00006/04","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("820","896451","39/03537","D03","K","CB Health Insurance","TASFAYEE KABEDA GODORA","M","","Caralelo","1946-02-19","","","4","19","K/19/D03/39/03537","44","Friday, October 16, 2020");
INSERT INTO patients VALUES("821","896454","02/12831","09","K","CB Health Insurance","ABDULBASIX ABAMECA ABAGODU","M","0969479236","02","1980-02-05","","","4","10","K/10/09/02/12831","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("822","896466","10/05708","02","K","CB Health Insurance","ABAGID ABAFIXA ABASARBO","F","","Gela","1960-02-03","","","4","19","K/19/02/10/05708","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("823","896475","07/02011","05","K","CB Health Insurance","AMARE ABATEMAME SHEBADULQADIR","M","0937097817","Gudetabula","2005-02-11","","","4","10","K/10/05/07/02011","55","Friday, October 16, 2020");
INSERT INTO patients VALUES("824","896476","02/00228","05","K","CB Health Insurance","MIFITAHU ABAFIRA ABAGUMBULI","M","0994102758","Butira","1972-02-09","","","4","10","K/10/05/02/00228","43","Friday, October 16, 2020");
INSERT INTO patients VALUES("825","896487","12/03119/06","01","K","CB Health Insurance","ABDULHAMID JAFER ABAJIHAD","M","0935612416","Keso bedeyi","2003-02-05","","","4","10","K/10/01/12/03119/06","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("826","896488","468/20","D36","Refuge","Credit Service","KOLEN NARE OLISO","M","","","1994-02-06","","","8","02","Refuge/468/20","48","Friday, October 16, 2020");
INSERT INTO patients VALUES("827","896489","17/08840/01","04","K","CB Health Insurance","KEZINA AMIN ABAMOGA","F","0917498053","Kusaye beru","1975-02-05","","","4","10","K/10/04/17/08840/01","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("828","896505","32/00884/02","04","K","CB Health Insurance","HMBARU ABDO ABABORU","F","0920557620","Awaysabu","1983-02-19","","","4","10","K/10/04/32/00884/02","53","Friday, October 16, 2020");
INSERT INTO patients VALUES("829","896514","09/04530/01","04","H","CB Health Insurance","YESE ABATAMAM ABAFITA","F","","Gelo","1995-02-11","","","4","10","H/10/04/09/04530/01","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("830","896535","30/04051/05","02","K","CB Health Insurance","MEDINA AHIMED KASAHUN","F","","BURKAJALELA","2012-04-01","","","4","19","K/19/02/30/04051/05","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("831","896547","07/03638/02","04","H","CB Health Insurance","ADEMASHER SHEMAMED ABAGISA","F","","Tolikerso","1949-02-01","","","4","10","H/10/04/07/03638/02","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("832","896560","27/01717/06","04","H","CB Health Insurance","REHANA ABANEGA ABAMECHA","F","","Gunju","2004-02-01","","","4","10","H/10/04/27/01717/06","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("833","896571","24/04360/04","05","K","CB Health Insurance","TEYIBA ABABIYA ABAGERO","F","0917230945","Kenitere","1993-02-01","","","4","10","K/10/05/24/04360/04","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("834","896598","02/05704/05","02","K","CB Health Insurance","MUFID MOHAMED GERO","M","0996259029","Dembi","1997-02-11","","","4","19","K/19/02/02/05704/05","34","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("835","896645","17/04206/02","05","K","CB Health Insurance","UMMI ABARAJUL SALA","F","0994101552","Etsaguda","1972-02-19","","","4","10","K/10/05/17/04206/02","53","Sunday, October 18, 2020");
INSERT INTO patients VALUES("836","896679","10/01573/02","04","K","CB Health Insurance","HABENIME ABAJEBEL ABAGERO","F","","Kitiblae","1953-02-12","","","4","10","K/10/04/10/01573/02","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("837","896699","17/01515","16","K","CB Health Insurance","DAGEFU BIRANU BONTU","M","0996829730","Biduborale","1946-02-20","","","4","10","K/10/16/17/01515","45","Monday, October 19, 2020");
INSERT INTO patients VALUES("838","896702","18/00778/01","08","K","CB Health Insurance","ASEGEDECH REGASA TEBO","F","0917114065","Hndaoba","1951-02-11","","","4","09","K/09/08/18/00778/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("839","896724","0911259/07","12","K","CB Health Insurance","TEMARIAMWERQ TEFER MEGAL","F","0917978503","DENEBA","1970-01-01","","","4","10","K/10/12/0911259/07","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("840","896745","03/05606/02","D35","H","CB Health Insurance","ISAQ TAHA ABATEMAM","M","0942606186","BABUSARTE","1970-01-01","","","4","10","H/10/D35/03/05606/02","55","Monday, October 19, 2020");
INSERT INTO patients VALUES("841","896748","13/0556/8","03","K","CB Health Insurance","USTAZE MESBAU ABARAGO","M","","Alyo","2012-02-04","","","4","10","K/10/03/13/0556/8","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("842","896757","20/20961","02","K","CB Health Insurance","UMAR NUGSAE TADASE","M","","Ganjedalco","2011-02-19","","","4","10","K/10/02/20/20961","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("843","896774","32/01946/11","04","K","CB Health Insurance","MUBASHIRAT ABAJEBELEA ABAFOGI","F","","Awayesebu","2012-06-01","","","4","10","K/10/04/32/01946/11","44","Saturday, October 17, 2020");
INSERT INTO patients VALUES("844","896780","25/03998/02","07","H","CB Health Insurance","SUDI SEIFU ABAMEHA","F","","Odohidhatah","2008-02-04","","","4","10","H/10/07/25/03998/02","52","Saturday, October 17, 2020");
INSERT INTO patients VALUES("845","896789","01/08862/01","05","H","CB Health Insurance","TAJURE ABARAYA ABAFITA","F","0922859159","Meti","1986-02-19","","","4","10","H/10/05/01/08862/01","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("846","896801","36/00176/01","06","K","CB Health Insurance","HAWA ABAMATI ABAMHAMD","F","","Tngolalo","1962-02-09","","","4","10","K/10/06/36/00176/01","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("847","896802","04/09025/04","12","K","CB Health Insurance","SAFAHA ABABIYA ABAMECHA","M","0910813973","YEROSOKORU","1970-01-01","","","4","10","K/10/12/04/09025/04","55","Monday, October 19, 2020");
INSERT INTO patients VALUES("848","896812","25/01865","05","K","CB Health Insurance","KAMILA ABAFIRA ABADURA","F","0917173710","Urgyi","1970-01-01","","","4","10","K/10/05/25/01865","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("849","896814","29/06370","07","H","CB Health Insurance","ABAJEBEL ABASANBI ABAWAJI","M","","S/sidsa","1952-02-10","","","4","10","H/10/07/29/06370","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("850","896829","06/03535/01","02","K","CB Health Insurance","SEMERA HUSEN ASINBO","F","0965558976","Gesa","1987-03-02","","","4","19","K/19/02/06/03535/01","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("851","896830","03/01980","10","H","CB Health Insurance","MOHAMEDAMIN SHEYASIN ABADIGA","M","0919107493","Keneni","1968-02-09","","","4","10","H/10/10/03/01980","34","Monday, October 19, 2020");
INSERT INTO patients VALUES("852","896838","05/05/06562","05","K","CB Health Insurance","GAZALI ABATAMAME SHIDRISE","M","0923338297","Yabu","1977-02-17","","","4","10","K/10/05/05/05/06562","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("853","896841","24/05724","01","K","CB Health Insurance","HADAKORE SHHSEN ABAGOJAME","F","0917248804","TILA","1943-03-02","","","4","10","K/10/01/24/05724","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("854","896846","03/00783","02","K","CB Health Insurance","FANAYE MHAMEDE ABAJIIRU","F","","Shayi","1960-02-20","","","4","10","K/10/02/03/00783","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("855","896851","10/02536/05","03","K","CB Health Insurance","FIZAI MUHAMEDE HAJEABAMECHA","M","0943225282","Yaserakora","2001-02-24","","","4","10","K/10/03/10/02536/05","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("856","896854","26/04744","07","H","CB Health Insurance","HAWA ABADIGA ABADURA","F","0917262622","Ofoladawo","1973-02-12","","","4","10","H/10/07/26/04744","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("857","896855","05/03543","04","K","CB Health Insurance","SHJEMALI ABASIMALI ABAMILKE","M","","Tikurabulo","1939-02-24","","","4","10","K/10/04/05/03543","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("858","896874","10/007201","15","K","CB Health Insurance","MISKIA SAMHMDAMNE ABADEGA","M","","Hasnuba","1953-02-21","","","4","10","K/10/15/10/007201","52","Monday, October 19, 2020");
INSERT INTO patients VALUES("859","896876","05/002576","03","Letter","Health Care finance","SHEWEYE WEQJIRA DINQO","F","","Yaci","1953-02-04","","","4","10","Letter/05/002576","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("860","896880","07/00417/02","16","H","CB Health Insurance","MHAMEDSANI MUSXAFA NURA","M","0955067095","Dire","1991-02-03","","","4","10","H/10/16/07/00417/02","34","Monday, October 19, 2020");
INSERT INTO patients VALUES("861","896882","31/012027","08","K","CB Health Insurance","SADE ABDO ABASIMEL","M","0917744711","BABU","2000-02-22","","","4","10","K/10/08/31/012027","55","Monday, October 19, 2020");
INSERT INTO patients VALUES("862","896903","01/00251/00","15","K","CB Health Insurance","UMI ABAJIHAD ABABOR","F","","Bilu","1972-02-10","","","4","10","K/10/15/01/00251/00","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("863","896905","25/04010/04","12","K","CB Health Insurance","AHMAD TAMAM ABASIMAL","M","","Shiro deke","2001-02-06","","","4","10","K/10/12/25/04010/04","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("864","896908","39/08834/04","06","K","CB Health Insurance","ALO MUSTAFA ADAM","F","","Wabesonbo","1996-02-11","","","4","10","K/10/06/39/08834/04","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("865","896920","14/05333","07","K","CB Health Insurance","ABABORE ABADULA ABAMILIKI","M","","Abayi","1942-02-10","","","4","10","K/10/07/14/05333","48","Monday, October 19, 2020");
INSERT INTO patients VALUES("866","896930","11/02675/08","04","K","CB Health Insurance","NEJASH NAJI ABABORE","M","","WADIKO","2007-02-23","","","4","10","K/10/04/11/02675/08","55","Monday, October 19, 2020");
INSERT INTO patients VALUES("867","896940","21/04708/1","09","K","CB Health Insurance","ABAFITA ABAGELAN ABABUSHEN","M","0917052423","DETOQARSO","1948-02-22","","","4","10","K/10/09/21/04708/1","55","Monday, October 19, 2020");
INSERT INTO patients VALUES("868","896958","11/010532/01","05","K","CB Health Insurance","ZANEBA AHEMED ABADURA","F","0939981252","Sombo","1975-02-24","","","4","10","K/10/05/11/010532/01","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("869","896965","08/1000/08","15","K","CB Health Insurance","ABDULQADERE ABABOR ABAGOJEM","M","","Galilokededa","1973-02-05","","","4","10","K/10/15/08/1000/08","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("870","896966","05/000488","15","K","CB Health Insurance","ABAJABL ABABORE ABAGOJAM","M","","Gariroqadida","1973-02-02","","","4","10","K/10/15/05/000488","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("871","896967","15/00923/01","10","K","CB Health Insurance","ZARA TAJU ABAWARI","F","0931928785","Abdi gudina","1979-02-10","","","4","10","K/10/10/15/00923/01","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("872","896979","08/07935/07","04","K","CB Health Insurance","YESIRIBA RIDA ABANEGA","F","","BULEBULE","1965-02-01","","","4","10","K/10/04/08/07935/07","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("873","896990","20/04116","05","K","CB Health Insurance","ABAJIHADE ABAMEGALI ABAMILIKE","M","0917801292","Bebelakara","1948-02-24","","","4","10","K/10/05/20/04116","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("874","896991","17/06125","05","K","CB Health Insurance","SAWEDA SAFU ABADIGA","F","0917505755","Itesaguda","1975-02-02","","","4","10","K/10/05/17/06125","43","Monday, October 19, 2020");
INSERT INTO patients VALUES("875","896994","07/14561","02","K","CB Health Insurance","KAMILA ABADURA SHMUSA","M","0980374706","Metykoticha","1982-02-03","","","4","10","K/10/02/07/14561","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("876","896997","01/04283/04","05","K","CB Health Insurance","IMANE FIRA ABAGERO","F","0925270980","Yebu","1995-02-10","","","4","10","K/10/05/01/04283/04","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("877","896998","21/010739","05","K","CB Health Insurance","FAXUMA SEFU SHRASHIDE","F","0960835252","Babalakosa","1978-02-04","","","4","10","K/10/05/21/010739","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("878","897003","20/06628/01","07","K","CB Health Insurance","KAMILI ABAJIHADE ABAKELIBE","M","0970183708","Koretyoserebe","1995-02-03","","","4","10","K/10/07/20/06628/01","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("879","897005","04/02280","05","K","CB Health Insurance","ALAMU AGANCHO BADHASA","M","","Dowa","1972-02-05","","","4","10","K/10/05/04/02280","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("880","897008","DNS?64/14/2013","D29","Prisoner","Credit Service","TESEFAYA GEBERAMEDHIN NAGA","M","","Maremeya","1968-02-02","","","4","10","Prisoner/DNS?64/14/2013","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("881","897009","12/0227367","10","K","CB Health Insurance","AMIN ABADURA ABABULGU","M","","Satodame","1985-02-19","","","4","10","K/10/10/12/0227367","53","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("882","897016","31/06981/01","06","K","CB Health Insurance","ZHARA KALEL ABADIDU","F","0917821379","Babu","1969-02-03","","","4","10","K/10/06/31/06981/01","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("883","897017","32/03356/02","05","K","CB Health Insurance","LAZIZA MUSETEFA ASEME","F","0948100197","Asendaboalemegena","1961-02-04","","","4","19","K/19/05/32/03356/02","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("884","897018","08/03210","05","K","CB Health Insurance","ABATAMAME ABAFOGI ABAWAJI","M","0917006347","Lmilalisa","1970-01-01","","","4","10","K/10/05/08/03210","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("885","897073","28/12356","04","K","CB Health Insurance","FIRA ABATEMAME ABAGOJAME","M","0939895821","Kelecha","1967-02-24","","","4","10","K/10/04/28/12356","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("886","897078","15/05724","05","K","CB Health Insurance","SAWADA GALI ABAFIRA","F","0979884199","Qorelelisa","1984-02-04","","","4","10","K/10/05/15/05724","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("887","897089","01/11984/08","04","K","CB Health Insurance","NAJATE ABABORE ABAFOGE","F","0917659560","Wayu","1998-02-11","","","4","10","K/10/04/01/11984/08","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("888","897094","hn/91/19/013","D29","Employee","Credit Service","SADA MUSTEFA FANTAHUN","F","","","1995-02-16","","","4","10","Employee/hn/91/19/013","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("889","897106","07/07509","04","K","CB Health Insurance","ABDO ABABOR SH/BASHER","M","","T/baltoi","1965-02-03","","","4","10","K/10/04/07/07509","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("890","897107","08/09191/05","04","K","CB Health Insurance","ASIA ABANEGA ABADIGA","F","","Bulbul","2002-02-10","","","4","10","K/10/04/08/09191/05","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("891","897108","17/06194","11","K","CB Health Insurance","KUZEMA HUSEN GAMTESA","F","","Shanibasira","1971-02-10","","","4","10","K/10/11/17/06194","45","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("892","897109","0022/08","D42","Employee","Credit Service","NESRU CHIRO MUKTAR","M","","","1982-03-02","","","4","10","Employee/0022/08","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("893","897115","14/01126","10","K","CB Health Insurance","HADENAZIFE ABAMECHA ABAJOBERE","F","0934531045","Wketola","1956-02-02","","","4","10","K/10/10/14/01126","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("894","897116","38/03050","08","K","CB Health Insurance","SHIFA ABASIMEL ABAGERO","M","0917946566","Seka","1960-02-10","","","4","10","K/10/08/38/03050","34","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("895","897118","03/10930","09","K","CB Health Insurance","HADEZUBER ABALULESA ABAFOGI","F","","Gibeboso","1747-02-01","","","4","10","K/10/09/03/10930","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("896","897120","02/04023","11","Letter","Health Care finance","ABDO JAMAL DHABA","M","","Damu","1983-02-13","","","4","10","Letter/02/04023","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("897","897121","09/010008/01","05","K","CB Health Insurance","MUNIRA ABABOR ABAWARE","F","","Haro","1976-02-01","","","4","10","K/10/05/09/010008/01","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("898","897128","07/02562/02","04","K","CB Health Insurance","HAFIZ HAJI ABATEMAME","M","","Tolekersu","20-02-1994","","","4","10","K/10/04/07/02562/02","53","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("899","897130","06/17760","02","K","CB Health Insurance","HADEKORO ABAKOYAS ABABOSON","F","","Lemusapa","1948-02-01","","","4","10","K/10/02/06/17760","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("900","897143","26/03811","05","K","CB Health Insurance","JIHADE ABAMILKE ABADIKO","M","0939489817","Somodo","1962-02-10","","","4","10","K/10/05/26/03811","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("901","897145","01/10926","05","K","CB Health Insurance","AWAL ABASAMBI ABAFOGI","M","0917320061","Hundatoli","1962-02-05","","","4","10","K/10/05/01/10926","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("902","897150","01/16292","04","Letter","Health Care finance","RASHAD ALIYI GUTA","M","0988852163","01","1981-02-03","","","4","19","Letter/01/16292","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("903","897152","26/14592","04","K","CB Health Insurance","AYISA ABANIME ABADURA","F","0954595644","Ankeso","1975-02-16","","","4","10","K/10/04/26/14592","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("904","897155","2/05208/01","09","K","CB Health Insurance","RAMETU ABDLIQADIR ABADURA","F","","Getoqarsi","1975-02-05","","","4","10","K/10/09/2/05208/01","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("905","897158","31/05441","05","K","CB Health Insurance","ALEMI DARGE YANFA","F","","Dikebake","1980-02-02","","","4","19","K/19/05/31/05441","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("906","897160","31/04769","04","H","CB Health Insurance","ALIMA ABABORE HAJE","F","","Kujomuja","1970-02-03","","","4","10","H/10/04/31/04769","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("907","897162","01/0001","08","K","CB Health Insurance","BIRITIKUWAN AHIMED ABEBE","F","0942923964","Dega","1976-02-01","","","4","19","K/19/08/01/0001","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("908","897167","01/06196","11","H","CB Health Insurance","SUKIREY JIBIRELI YASEN","F","0976009737","Gatera","1978-02-03","","","4","10","H/10/11/01/06196","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("909","897171","06/02043","05","K","CB Health Insurance","QAMERU MAMED ABALULESA","F","","Gubemuleta","1973-02-08","","","4","10","K/10/05/06/02043","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("910","897172","17/01126/01","11","H","CB Health Insurance","ABDA NASIR AHIMED","M","","Shani/basira","1970-01-01","","","4","10","H/10/11/17/01126/01","50","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("911","897177","08/01021","05","K","CB Health Insurance","SANI ABAJABLE ABAGARO","M","0924799417","Lamilalisa","1977-02-24","","","4","10","K/10/05/08/01021","48","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("912","897181","15/04948","05","K","CB Health Insurance","SALADIN GALIB ABATAMAME","M","","Qorelelisa","2009-02-07","","","4","10","K/10/05/15/04948","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("913","897202","09/06978/01","05","K","CB Health Insurance","FATE IBRIHIM ENIDERES","F","0936111087","Haro","1981-02-06","","","4","10","K/10/05/09/06978/01","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("914","897207","1892/2020","D34","Refuge","Credit Service","SETIVEN LULE BELE","M","","Gambela","1966-02-11","","","8","02","Refuge/1892/2020","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("915","897211","11/02450/01","06","K","CB Health Insurance","ZUMARA ABADRI ABADIGA","F","","Dengajasola","1988-02-01","","","4","10","K/10/06/11/02450/01","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("916","897213","1932/20","D34","Refuge","Credit Service","KAN MALOUTH TURJOUK","M","0991367557","Ule","1975-02-01","","","8","02","Refuge/1932/20","44","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("917","897254","22/03979/01","05","K","CB Health Insurance","KISSEE SEBERU TEKLU","M","","Babalkosa","1978-02-19","","","4","10","K/10/05/22/03979/01","53","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("918","897260","01/03293/06","07","K","CB Health Insurance","ABDURAMAN WERQU YENUS","M","","01","2004-02-09","","","4","09","K/09/07/01/03293/06","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("919","897264","292/19/2013","D29","Prisoner","Credit Service","CIBON MKONINE QLEBESA","M","","","2012-02-04","","","4","10","Prisoner/292/19/2013","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("920","897278","18/11520","05","K","CB Health Insurance","ZAHARA ZENU ABABORE","F","0917519900","Doyotoli","1985-02-02","","","4","10","K/10/05/18/11520","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("921","897308","10/00583/01","01","K","CB Health Insurance","ZEMZEMU LAMU GOREGA","F","0942892305","Teko","1956-03-01","","","4","19","K/19/01/10/00583/01","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("922","897309","100/2013","CBE-Main","Employee","Credit Service","DESALEYN TADEGE TEFRA","M","0921858198","01","1985-02-05","","","4","10","Employee/100/2013","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("923","897313","63/14/2013","D29","Prisoner","Credit Service","ABDULKARIM SHEKALIL ABAFITA","M","","Maremay","1979-02-11","","","4","10","Prisoner/63/14/2013","45","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("924","897314","14/04678/1","10","K","CB Health Insurance","SHEABADIR ABASAMBI ABAGAMEL","M","","Micha","1953-03-01","","","4","10","K/10/10/14/04678/1","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("925","897324","23/09841","03","K","CB Health Insurance","ZENEBA JEMALI ABADIGA","M","","Lemelelisa","1979-02-03","","","4","10","K/10/03/23/09841","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("926","897335","20/08156","10","K","CB Health Insurance","MUKITAR ABAZINAB ABAGOJAM","M","","Nada","1993-02-06","","","4","10","K/10/10/20/08156","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("927","897347","26/08497","04","K","CB Health Insurance","ABAZINAB ABADURA HUSEN","M","","Ankeso","1955-02-11","","","4","10","K/10/04/26/08497","34","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("928","897375","15/07677","10","K","CB Health Insurance","FATIYA ABAZINAB AHIMED","F","0917589517","Asandabo","1999-02-04","","","4","10","K/10/10/15/07677","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("929","897377","20/13639","09","K","CB Health Insurance","ZARA SEMAN ABAGERO","F","0977683247","Bakigudo","1991-03-02","","","4","10","K/10/09/20/13639","55","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("930","897398","12/00024","15","K","CB Health Insurance","ZAKIR ABAFITA ABABOSEN","M","0909242846","Ergibo","1975-02-11","","","4","10","K/10/15/12/00024","34","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("931","897400","26/04188","12","K","CB Health Insurance","ABATEMAM ABAGERO ABAWAJI","M","0965994189","Andode","1955-02-11","","","4","10","K/10/12/26/04188","34","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("932","897407","34/13050","02","K","CB Health Insurance","ZENU ABAGERO ABADILIBE","M","0917397857","Kedamaye","1956-02-02","","","4","10","K/10/02/34/13050","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("933","897415","14/03135","02","K","CB Health Insurance","NURA ABADEFAR MOHAMED","M","0967629094","Bunba","1994-02-12","","","4","19","K/19/02/14/03135","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("934","897417","64/14/2013","D29","Prisoner","Credit Service","TSADIK ABAFIRA ABABULO","M","","","1995-02-20","","","4","10","Prisoner/64/14/2013","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("935","897468","15/13658","09","K","CB Health Insurance","JIHAD ABADURA ABAGOJU","M","","ELIKATUNIJO","1968-02-01","","","4","10","K/10/09/15/13658","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("936","897496","11/01127","05","K","CB Health Insurance","HAWI ABAMECHA ABADIDU","M","","Sombomana","1976-02-01","","","4","10","K/10/05/11/01127","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("937","897516","27/02261/07","04","K","CB Health Insurance","AKEREMUDIN AMIDO ABASANIBE","M","","Gunju","2001-02-02","","","4","10","K/10/04/27/02261/07","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("938","897519","09373/02","01","K","CB Health Insurance","NASRLA ABAFOGI ABAGODU","M","","Xibacale","2007-02-12","","","4","10","K/10/01/09373/02","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("939","897554","158/06","jue","Employee","Credit Service","EFRATA MULUKEN TADESSE","F","","","2005-02-17","","","4","10","Employee/158/06","54","Thursday, October 22, 2020");
INSERT INTO patients VALUES("940","897568","16/06229","06","K","CB Health Insurance","USMAEL JAMAL GEMEDA","M","0991656138","Rasoyura","1967-02-19","","","4","19","K/19/06/16/06229","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("941","897571","06/20","D36","Employee","Credit Service","SHEWIT MESELE MERESA","F","0931110808","","1991-02-10","","","8","02","Employee/06/20","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("942","897572","10/001008/02","04","K","CB Health Insurance","UMI RAGO ABAJEBL","F","0921792881","Kitmbil","1980-02-06","","","4","10","K/10/04/10/001008/02","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("943","897577","DNS/69/14013","D29","Prisoner","Credit Service","EYERUS TSGAYE ADISSU","F","","Maremeya","1994-03-02","","","4","10","Prisoner/DNS/69/14013","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("944","897578","69/14/013","D29","Prisoner","Credit Service","FAXE ABARIYAD ABAGARO","F","","Marmiyabet","1993-02-02","","","4","10","Prisoner/69/14/013","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("945","897581","25/05706","02","K","CB Health Insurance","GOMITEY SIFERAW NIGUSA","F","0917541442","Dayekechena","1977-02-04","","","4","10","K/10/02/25/05706","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("946","897586","14/07503/04","10","K","CB Health Insurance","ABDULIMEJIDE HWI ABAJEBL","M","0917010787","Eakatola","2001-02-11","","","4","10","K/10/10/14/07503/04","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("947","897598","04/24518","02","K","CB Health Insurance","HDAJAFERE ABAMECHA ABAGISA","F","","Achafeta","1965-02-03","","","4","10","K/10/02/04/24518","43","Thursday, October 22, 2020");
INSERT INTO patients VALUES("948","897601","06/02076","D36","K","CB Health Insurance","BIYIN ABATE GELAW","F","0963424807","Atinago","1991-02-05","","","4","10","K/10/D36/06/02076","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("949","897602","38/05370/01","12","K","CB Health Insurance","LEYILA ABABIYA SHHUSEN","F","0917765575","Sedeka","1965-02-04","","","4","10","K/10/12/38/05370/01","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("950","897605","18/03024","05","K","CB Health Insurance","ABAZINAB SHEUMER ABADIKO","M","","DOYOTOLI","1957-02-01","","","4","10","K/10/05/18/03024","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("951","897614","24/00141","10","K","CB Health Insurance","ABDURMAN ABAJEBEL ABASAMBI","M","0911738760","Alei","1970-03-01","","","4","10","K/10/10/24/00141","55","Saturday, October 24, 2020");
INSERT INTO patients VALUES("952","897619","143/292/027/13","D145","Employee","Credit Service","ASRAT WLEDMIKEL GEBRE","M","","Kosa","1992-02-16","","","7","145","Employee/143/292/027/13","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("953","897624","15/01713","14","K","CB Health Insurance","HADESULETAN SHEMOHAMED RESHID","F","","HAFERISA GUBONA","1957-02-01","","","4","10","K/10/14/15/01713","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("954","897631","02/00731/01","04","K","CB Health Insurance","MEHAMDE ABDO MUSEDKE","M","","Omotuho","1965-02-20","","","4","10","K/10/04/02/00731/01","52","Thursday, October 22, 2020");
INSERT INTO patients VALUES("955","897638","04/06270/05","06","K","CB Health Insurance","ZAKIR ADEM AMIN","M","","Bakalebiftu","2004-02-26","","","4","19","K/19/06/04/06270/05","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("956","897648","143/29-2/027/13","D145","Employee","Credit Service","GADISA HOREDOFA KARORESA","F","0917198659","Addisbirhan","1983-02-05","","","7","145","Employee/143/29-2/027/13","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("957","897682","28/0832/03","05","K","CB Health Insurance","NASIIRYA ABADERY A BAMACHA","F","","Somodo","1995-02-19","","","4","10","K/10/05/28/0832/03","52","Thursday, October 22, 2020");
INSERT INTO patients VALUES("958","897691","19/0134","05","K","CB Health Insurance","SABITA SIRAJ ABAJOBIR","F","0917522023","Dooyobikila","1973-02-10","","","4","10","K/10/05/19/0134","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("959","897699","DNS/71/14/013","D29","Prisoner","Credit Service","ADSU TESEFAYE IDOSA","M","","Maremeya","1998-02-11","","","4","10","Prisoner/DNS/71/14/013","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("960","897701","08/12269/01","05","K","CB Health Insurance","TANZILA KELIFA ABADIGA","F","0945048858","Lemilelisa","1982-02-04","","","4","10","K/10/05/08/12269/01","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("961","897706","05/08482","04","K","CB Health Insurance","FOAD ABABIYA ABAGARO","M","0913490269","Xkurebalto","1982-02-19","","","4","10","K/10/04/05/08482","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("962","897772","2025201","02","K","CB Health Insurance","ZENU TEMAME HAJEBUSIRA","M","0988448388","Genjedalecho","1980-02-10","","","4","10","K/10/02/2025201","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("963","897775","01/11961","05","K","CB Health Insurance","FIRDOSA ZAKIR ABANGA","F","0904222355","Yebu","1986-02-06","","","4","10","K/10/05/01/11961","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("964","897779","DNS/71/14/013","D29","Prisoner","Credit Service","GIDI ABAOLI ABAFITA","M","","Maremeya","1996-02-13","","","4","10","Prisoner/DNS/71/14/013","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("965","897780","00/32100","02","H","CB Health Insurance","ABRAGOO ABAWARAE ABADEMA","M","0913225581","Siinsoo","1945-02-19","","","4","10","H/10/02/00/32100","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("966","897802","07/00848","14","K","CB Health Insurance","SHMAMEDJEMAL SHHUSSEN ABADULA","M","","G/beyem","1967-02-01","","","4","10","K/10/14/07/00848","50","Friday, October 23, 2020");
INSERT INTO patients VALUES("967","897803","04/09204","04","H","CB Health Insurance","HADATEMAM ABABULGU ABAGERO","F","","Girma","1961-02-10","","","4","10","H/10/04/04/09204","50","Friday, October 23, 2020");
INSERT INTO patients VALUES("968","897809","09/23923","02","K","CB Health Insurance","MELISAA TAMIRU TSEMA","F","0913368138","Coce","2002-02-12","","","4","10","K/10/02/09/23923","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("969","897814","150266/2","05","H","CB Health Insurance","MUDOSIR BIRALA DHABA","M","","Dabo","1994-02-19","","","4","19","H/19/05/150266/2","53","Friday, October 23, 2020");
INSERT INTO patients VALUES("970","897815","22/06183/01","11","K","CB Health Insurance","MASHARE ABAFIXA ABADURA","F","0937776141","Yirawongo","1978-02-12","","","4","10","K/10/11/22/06183/01","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("971","897817","05/11696","04","K","CB Health Insurance","TARIKU FITA TOKON","M","0977385251","Uta none","1960-02-13","","","4","19","K/19/04/05/11696","34","Friday, October 23, 2020");
INSERT INTO patients VALUES("972","897818","05/14292/02","04","K","CB Health Insurance","ZENELABIT ABARESHAD ABAGERO","M","0929373870","Tikur balto","2003-02-05","","","4","10","K/10/04/05/14292/02","34","Friday, October 23, 2020");
INSERT INTO patients VALUES("973","897823","04/010027/01","05","K","CB Health Insurance","FATUMA UMER HUSEN","F","0917823060","Dowa","1981-02-04","","","4","10","K/10/05/04/010027/01","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("974","897828","10/00397","14","K","CB Health Insurance","SHASAYID ABAGUMBUL ABASEMELE","M","","Ylyasshen","1940-02-12","","","4","10","K/10/14/10/00397","52","Saturday, October 24, 2020");
INSERT INTO patients VALUES("975","897833","07/04110/02","10","H","CB Health Insurance","MASHO NESHA ABAGIDI","M","","Kitble","1979-02-03","","","4","10","H/10/10/07/04110/02","50","Friday, October 23, 2020");
INSERT INTO patients VALUES("976","897840","13/10509","09","K","CB Health Insurance","ABAGOJAM ABAGISA ABAJOBIR","M","","B/roge","1960-02-04","","","4","10","K/10/09/13/10509","50","Friday, October 23, 2020");
INSERT INTO patients VALUES("977","897842","40/02105","08","K","CB Health Insurance","MISKU SURA ABASANGI","F","","Yedo","1972-02-02","","","4","10","K/10/08/40/02105","50","Friday, October 23, 2020");
INSERT INTO patients VALUES("978","897858","16/00296","10","H","CB Health Insurance","KAZUBA ABABIYA ABAJOBIR","F","","Harogibe","1985-02-03","","","4","10","H/10/10/16/00296","50","Saturday, October 24, 2020");
INSERT INTO patients VALUES("979","897864","22/24296","02","K","CB Health Insurance","ABDI SHIFA ABAAMEYYO","M","0945325367","Ganji ilbu","1996-02-12","","","4","10","K/10/02/22/24296","52","Saturday, October 24, 2020");
INSERT INTO patients VALUES("980","897918","03/03935/02","04","K","CB Health Insurance","HAFEZE ABARAYA ABAGERO","M","","Babuserta","1994-02-23","","","4","10","K/10/04/03/03935/02","52","Saturday, October 24, 2020");
INSERT INTO patients VALUES("981","897965","42/00722/07","06","K","CB Health Insurance","MUSENA JIHAD SHEUSEN","M","0917215034","Yatutirgi","2005-02-23","","","4","10","K/10/06/42/00722/07","55","Sunday, October 25, 2020");
INSERT INTO patients VALUES("982","897993","10/01610/3","10","K","CB Health Insurance","ABDULWALIBA SHAMOHAMED SHAHASEN","M","","Kejelo","1993-02-01","","","4","10","K/10/10/10/01610/3","44","Sunday, October 25, 2020");
INSERT INTO patients VALUES("983","898050","01/20660","06","K","CB Health Insurance","KAMALI ABABULIGU ABABULA","M","0917004925","WALKASOMBO","1970-01-01","","","4","10","K/10/06/01/20660","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("984","898051","29/07284/01","04","K","CB Health Insurance","QONJIT YDETA GAMTA","F","0910739829","Bejaharo","1965-03-01","","","4","19","K/19/04/29/07284/01","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("985","898061","09/02077","05","K","CB Health Insurance","MHAMEDE EIFA ABADEGA","M","","Haro","1978-02-12","","","4","10","K/10/05/09/02077","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("986","898067","0901125","11","K","CB Health Insurance","BIYA YASIN NEMO","M","0961933192","Kimiso","1993-02-12","","","4","10","K/10/11/0901125","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("987","898076","02/01456","04","K","CB Health Insurance","CHALTU NEGA ABAGERO","F","0917514886","Omottucho","2008-03-01","","","4","10","K/10/04/02/01456","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("988","898128","26/23809","04","K","CB Health Insurance","NABIYT ABEDO SEMALE","F","","Akso","2010-02-19","","","4","10","K/10/04/26/23809","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("989","898138","33/05860","08","K","CB Health Insurance","AMAR ABDURQADIR ABABIYA","M","","Omoqaqa","2007-02-10","","","4","10","K/10/08/33/05860","45","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("990","898145","08/01533","09","K","CB Health Insurance","ROZA EBRHIM JAMANA","F","","Sibo","1970-01-01","","","4","09","K/09/09/08/01533","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("991","898166","06/05225","03","K","CB Health Insurance","WAKUMA GUTEMA TIBA","M","0928550013","01","1946-02-01","","","4","09","K/09/03/06/05225","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("992","898170","18/01590","07","H","CB Health Insurance","KALISA JABEL ABAJAMAL","F","","Elala","1975-02-23","","","4","10","H/10/07/18/01590","55","Monday, October 26, 2020");
INSERT INTO patients VALUES("993","898182","07/03303","11","K","CB Health Insurance","SHARIF ABABOR ABASANBI","M","0927859181","Gesecha","1948-02-16","","","4","10","K/10/11/07/03303","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("994","898185","23/00195","15","K","CB Health Insurance","HADEKENZE ABASANIBE ABABOSEN","F","0976026993","Yayalake","1967-02-03","","","4","10","K/10/15/23/00195","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("995","898213","06/01171/2","14","K","CB Health Insurance","AYUB ABANAIM ABADIGA","M","0991376224","Sirgolasara","1991-02-17","","","4","10","K/10/14/06/01171/2","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("996","898218","06/08510/01","05","K","CB Health Insurance","SEKINA SEBSIB ZENU","F","0917008311","Gube muleta","1990-02-17","","","4","10","K/10/05/06/08510/01","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("997","898233","16/0029/01","01","K","CB Health Insurance","GEZACHU TASAMA TESFAY","M","","Wanjakarsa","1977-02-19","","","4","10","K/10/01/16/0029/01","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("998","898246","12/010857","05","K","CB Health Insurance","MAMUDE AGAFARI TESAMA","F","","Gubebosoqa","1995-02-12","","","4","10","K/10/05/12/010857","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("999","898247","36/09960/01","09","H","CB Health Insurance","ALAWIYA ABADAGA ABAJIBIR","F","","Gepa","1993-02-24","","","4","10","H/10/09/36/09960/01","45","Monday, October 26, 2020");
INSERT INTO patients VALUES("1000","898259","01/13740","09","K","CB Health Insurance","ABDI AWLE ABATAMAME","M","","Mite","2009-02-19","","","4","10","K/10/09/01/13740","53","Monday, October 26, 2020");
INSERT INTO patients VALUES("1001","898282","011817/02","04","K","CB Health Insurance","AYISHA HAWE ABAJEHDE","F","","Ketbela","1982-02-19","","","4","10","K/10/04/011817/02","53","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1002","898283","04/06133","05","K","CB Health Insurance","KANZI KEDIR ABABULEGU","F","0906222381","Duwa","1975-02-01","","","4","10","K/10/05/04/06133","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1003","898284","10/1000","09","K","CB Health Insurance","ESHATU GALANA BUNGULA","M","0911973490","Didu","1960-02-09","","","4","09","K/09/09/10/1000","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1004","898291","08/01579/01","10","K","CB Health Insurance","FAXUMA BADIRU ABADURA","F","0928269071","Borasadm","1967-02-11","","","4","10","K/10/10/08/01579/01","48","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1005","898303","20/01828/01","11","K","CB Health Insurance","KERIYA SEID OBSA","F","0917507163","Gatira","1965-02-16","","","4","10","K/10/11/20/01828/01","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("1006","898306","05/03453/03","11","K","CB Health Insurance","NAIF JUNEDI KEDIR","M","0917494149","Gatira","1999-02-17","","","4","10","K/10/11/05/03453/03","34","Monday, October 26, 2020");
INSERT INTO patients VALUES("1007","898307","08/00834","05","K","CB Health Insurance","AYISA SHABEDU SHZUBERE","M","0917546661","LAMELELISA","1992-02-04","","","4","10","K/10/05/08/00834","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("1008","898314","35/31","D200","Employee","Credit Service","MEBETU ASEMARA TEGEGA","M","0905292637","Bosaadise","1989-02-25","","","4","10","Employee/35/31","43","Monday, October 26, 2020");
INSERT INTO patients VALUES("1009","898344","02/12995","04","K","CB Health Insurance","ZENEBA ABAGIDE ABABULIGU","F","0992133614","Omoticho","1977-02-03","","","4","10","K/10/04/02/12995","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1010","898366","17/02520/01","04","H","CB Health Insurance","MUNISA ABANEGA ABAFOGE","F","0954605877","Kosayabero","1969-02-02","","","4","10","H/10/04/17/02520/01","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1011","898473","0015/02","05","K","CB Health Insurance","YASIN AHIMED ABADIGA","M","","Yebu","1787-02-01","","","4","10","K/10/05/0015/02","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1012","898486","10/07141","12","K","CB Health Insurance","ABATEMAM ABAFOGI ABAKOYAS","M","","Choba","1957-02-01","","","4","10","K/10/12/10/07141","44","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1013","898497","21/02528/03","06","K","CB Health Insurance","JAMILA TESOME ABERA","F","0963436592","01","1998-02-04","","","4","10","K/10/06/21/02528/03","43","Tuesday, October 27, 2020");
INSERT INTO patients VALUES("1014","898742","01/06103","09","K","CB Health Insurance","FETIYA ABAFITA ABABULGU","F","","Andodealaga","1997-02-02","","","4","10","K/10/09/01/06103","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("1015","899006","15/05724","05","K","CB Health Insurance","GALI ABAFIRA ABALULESA","M","","Kore lelisa","1974-02-04","","","4","10","K/10/05/15/05724","34","Friday, October 16, 2020");
INSERT INTO patients VALUES("1016","899114","40/07107","06","K","CB Health Insurance","FAJE KEDA SEDA","M","","Sanabadura","1943-02-03","","","4","19","K/19/06/40/07107","43","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("1017","899116","11/00044/08","09","K","CB Health Insurance","FUADE ABAZINAB ABACHEBESA","M","0965840088","Dabogibe","1984-02-03","","","4","10","K/10/09/11/00044/08","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("1018","899119","3373","08","K","CB Health Insurance","MULU SENA TAKKEJN","F","","Sado","1958-02-17","","","4","09","K/09/08/3373","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("1019","899132","21/08093","10","K","CB Health Insurance","ALEWIYA NASIR ADEM","F","","Hundatoli","1974-02-27","","","4","10","K/10/10/21/08093","48","Wednesday, October 21, 2020");
INSERT INTO patients VALUES("1020","899141","31/05441/01","05","K","CB Health Insurance","ALAMI DAREGE YANFA","F","","Gifebakal","1978-02-06","","","4","19","K/19/05/31/05441/01","48","Thursday, October 22, 2020");
INSERT INTO patients VALUES("1021","899147","21/01385/01","01","K","CB Health Insurance","ASINATI USMAEL KEDIR","F","0917395538","Lekasida","1991-02-01","","","4","19","K/19/01/21/01385/01","44","Sunday, October 25, 2020");
INSERT INTO patients VALUES("1022","899157","17/04812","02","H","CB Health Insurance","JIHADE ABAGOJAM ABADULA","M","0917821409","Itesaguda","1959-02-03","","","4","10","H/10/02/17/04812","43","Tuesday, October 20, 2020");
INSERT INTO patients VALUES("1023","899226","41/08243/2","03","K","CB Health Insurance","HUNDATU WABE TOLERA","F","","Mexibeko","1970-01-01","","","4","09","K/09/03/41/08243/2","48","Friday, October 23, 2020");
INSERT INTO patients VALUES("1024","899233","37/44446","02","H","CB Health Insurance","ABAJIHAD SHEIDIRIS ABASIMBO","M","","Boradisera","1940-02-01","","","4","10","H/10/02/37/44446","44","Thursday, October 22, 2020");
INSERT INTO patients VALUES("1025","899264","26/10070","04","K","CB Health Insurance","ABATEMAM ABAMECHA ABABULGU","M","","Ankeso","1955-02-13","","","4","10","K/10/04/26/10070","45","Thursday, October 22, 2020");
INSERT INTO patients VALUES("1026","899310","17/00017/01","09","H","CB Health Insurance","REGASA GOSA GOFO","M","","Waja","1953-02-03","","","4","09","H/09/09/17/00017/01","43","Friday, October 23, 2020");
INSERT INTO patients VALUES("1027","899708","842/2020","D123","Refuge","Credit Service","NYAKUACH THALVAL CHOUL","F","","01","1970-01-01","","","8","04","Refuge/842/2020","50","Tuesday, October 13, 2020");
INSERT INTO patients VALUES("1028","1214","12130","D47","Employee","Credit Service","AB AB AB","M","","","2000-02-02","","","4","10","Employee/12130","11","Wednesday, October 28, 2020");
INSERT INTO patients VALUES("1029","1212","10/120","03","K","CB Health Insurance","SM SM SM","M","","Jsm","2010-02-03","","","4","10","K/10/03/10/120","45","Tuesday, November 03, 2020");
INSERT INTO patients VALUES("1030","2020","10/142","07","Student","Credit Service","AB AB AB","M","","","2000-02-17","","","4","10","Student/10/142","45","Tuesday, November 03, 2020");
INSERT INTO patients VALUES("1031","2013","10/120","D47","K","CB Health Insurance","SM SM SM","M","","Df","2013-02-03","","","4","10","K/10/D47/10/120","11","Friday, November 06, 2020");



DROP TABLE IF EXISTS payment;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS reg_table;

CREATE TABLE `reg_table` (
  `tbl_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(40) NOT NULL,
  `mrn` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cbhiNo` varchar(40) NOT NULL,
  `agre` varchar(40) NOT NULL,
  `indigent` varchar(40) NOT NULL,
  `sex` varchar(40) NOT NULL,
  `region` varchar(40) NOT NULL,
  `zone` varchar(40) NOT NULL,
  `woreda` varchar(40) NOT NULL,
  `kebele` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  PRIMARY KEY (`tbl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO reg_table VALUES("1","Photo","Medical record number","Name of Beneficiary","CBHI #ID/Letter No","Agreement","Indigent","Gender","Region ","Zone","Woreda/Organization","Address/kebele","Date of birth","Phone");



DROP TABLE IF EXISTS region;

CREATE TABLE `region` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO region VALUES("1","Tegray ","Ethiopiai\'s most northerly region is Tigray, which covers 80,000 square km and is administered from its capital city of Mekele. The population totals more than 5.06 million, of which 95% are Orthodox Christian and the remainder Muslim. The Tigraian people, the dominant ethnic group, are agriculturists who also herd cattle and other livestock.");
INSERT INTO region VALUES("2","Afar ","Although it covers a vast area of 270,000 square km running up the border with Djibouti and Eritrea, Afar region is arid, thinly populated and almost bereft of large towns. According to July 2013 estimates of the Central Statistical Agency of Ethiopia, the total population of Afar is 1.65 million, of which less than 10% live in urban areas. ");
INSERT INTO region VALUES("3","Amahara ","Governed from its large modern capital city of Bahir Dar, on the southern tip of Lake Tana, Amhara covers an area of 170,752 square km and supports a population estimated at 19.2 million in 2013. Although the substantial cities of Bahr Dar, Gondar and Dessie all lie within Amhara, roughly 90% of the region\'s population is rural.");
INSERT INTO region VALUES("4","Oromia","The vast region of oromia covers an area of more than 350,000 square km (almost one-third of the country) and supports a correspondingly large population of over 32.2 million people. Roughly 85% of the regional population is Oromo, and another 10% Amhara. Aside from the 5% who still practise animist or other traditional religions, the regional split between Christian and Muslim is as good as even.");
INSERT INTO region VALUES("5","Harari ","Consisting of the walled city of Harar and its immediate environs, Harari is essentially a modern revival of the autonomous city-state of Harar, which was one of the most powerful regional political entities from the 16th until the late 19th century, when it was co-opted into Abyssinia by Menelik II. The state covers an area of roughly 350 square km and supports a population estimated at 215,000, of which some 131,000 are city dwellers.");
INSERT INTO region VALUES("6","Benishangumuz","The most obscure of Ethiopia\'s regions, practically never visited by tourists, is Benishangul-Gumuz, which runs for about 2,000km along the Sudanese border to the east of Amhara, but is on average no more than 200km. Relatively low-lying but with an annual rainfall in excess of 1,000mm, this remote and poorly developed area is characterised by a hot, humid climate. ");
INSERT INTO region VALUES("7","Somalia ","Named for the distinctive Somali people, who comprise 95% of its population, this is the second largest of Ethiopia\'s regions, covering an area of 250,000 square km along the Somali border. Much of the region is desert or semi-desert, its vast area, the total population is around 5.3 million.");
INSERT INTO region VALUES("8","Gambela","The small state, which covers an area of 25,274 square km along the southern Sudanese border, essentially comprises lush, humid lowland draining into the Baro River, an important tributary of the NileRiver. Relatively remote and undeveloped, Gambella region supports a predominantly rural population of roughly 406,000 ethnically varied people.");
INSERT INTO region VALUES("9","SNNP ","Although it smells like the handiwork of an uninspired committee, the name of this 112,323 square km region does provide an accurate reflection of its incredible cultural diversity. The regional population of roughly 17.9 million represents some 45 different ethino-lingustic groups, of which none comprises 20% of the regional population, and only the Sidamo, Gurage and Walaita make up more than 10% each. ");



DROP TABLE IF EXISTS renewal;

CREATE TABLE `renewal` (
  `renewal_id` int(11) NOT NULL AUTO_INCREMENT,
  `family_number` int(11) NOT NULL,
  `date_of_payment` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `reciept_number` varchar(30) NOT NULL,
  `date_of_renewal` date NOT NULL,
  `date_of_expiry` date NOT NULL,
  `region` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `woreda` int(11) NOT NULL,
  PRIMARY KEY (`renewal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS section;

CREATE TABLE `section` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO section VALUES("1","01","Mezhenger","8","Found in Gambela");
INSERT INTO section VALUES("2","02","Gambela town","8","Found in Gambela");
INSERT INTO section VALUES("3","03","Anyuake","8","Found in Gambela");
INSERT INTO section VALUES("4","04","Nuwer","8","Found in Gambela");
INSERT INTO section VALUES("5","09","Elibabor","4","found in oromia");
INSERT INTO section VALUES("7","10","Jimma","4","found in oromia ");
INSERT INTO section VALUES("16","19","Buno Bedele","4","found in oromia");
INSERT INTO section VALUES("19","21","Keffa ","7","Found in south nations and nationality of people");
INSERT INTO section VALUES("20","145","Bench Sheko","7","");
INSERT INTO section VALUES("21","98","Konta","7","Liyu konta");



DROP TABLE IF EXISTS server;

CREATE TABLE `server` (
  `server_id` varchar(30) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `domain_name` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL,
  PRIMARY KEY (`server_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO server VALUES("hci","10.142.65.143","hci.ju.edu.et","http://hci.ju.edu.et/login");



DROP TABLE IF EXISTS services;

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO services VALUES("1","card");
INSERT INTO services VALUES("2","drugs");
INSERT INTO services VALUES("3","surgery");
INSERT INTO services VALUES("4","Imaging");
INSERT INTO services VALUES("5","lab");
INSERT INTO services VALUES("6","Bed_fee");
INSERT INTO services VALUES("7","other");



DROP TABLE IF EXISTS settings;

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO settings VALUES("1","system_name","Jimma Medical Center<br><small>Integrated HCI System</small><br> </small> <small> Version 1.1</small> ");
INSERT INTO settings VALUES("2","system_title","Integrated HCI System");
INSERT INTO settings VALUES("3","address","Jimma,Ethiopia");
INSERT INTO settings VALUES("4","phone","0471142514");
INSERT INTO settings VALUES("5","paypal_email","seidm9815@gmail.com");
INSERT INTO settings VALUES("6","currency","ETB");
INSERT INTO settings VALUES("7","system_email","info@ju.edu.et");
INSERT INTO settings VALUES("20","active_sms_service","clickatell");
INSERT INTO settings VALUES("11","language","english");
INSERT INTO settings VALUES("12","text_align","left-to-right");
INSERT INTO settings VALUES("13","clickatell_user","");
INSERT INTO settings VALUES("14","clickatell_password","");
INSERT INTO settings VALUES("15","clickatell_api_id","");
INSERT INTO settings VALUES("16","skin_colour","blue");
INSERT INTO settings VALUES("17","twilio_account_sid","");
INSERT INTO settings VALUES("18","twilio_auth_token","");
INSERT INTO settings VALUES("19","twilio_sender_phone_number","");



DROP TABLE IF EXISTS signup;

CREATE TABLE `signup` (
  `signup_id` int(11) NOT NULL AUTO_INCREMENT,
  `offset` int(11) NOT NULL,
  PRIMARY KEY (`signup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO signup VALUES("1","1");



DROP TABLE IF EXISTS survey;

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `offset` int(11) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS treatment;

CREATE TABLE `treatment` (
  `encounter_id` int(11) NOT NULL AUTO_INCREMENT,
  `mrn_id` varchar(15) NOT NULL,
  `CBHI_code` varchar(50) NOT NULL,
  `encounter` varchar(20) NOT NULL,
  `indigent` varchar(30) DEFAULT NULL,
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
  `Date_of_service` date NOT NULL,
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
  `cdate` varchar(30) DEFAULT NULL,
  `final_date` varchar(30) DEFAULT NULL,
  `user` varchar(30) NOT NULL,
  `edited` int(11) DEFAULT NULL,
  PRIMARY KEY (`encounter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1070 DEFAULT CHARSET=latin1;

INSERT INTO treatment VALUES("1","895310","K/10/12/11593","OPD","K","CB Health Insurance","4","10","12","M","76","2","2013","","No","2013-02-02","","","5.00","30.00","75.00","0.00","15.90","0.00","0.00","125.90","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("2","894703","K/10/04/02491/01","OPD","K","CB Health Insurance","4","10","04","F","51","2","2013","","No","2013-02-02","","","5.00","0.00","80.00","0.00","18.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("3","737851","H/10/05/26/08927","OPD","H","CB Health Insurance","4","10","05","M","58","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","226.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("4","828948","H/10/12/14/07596/08","IPD","H","CB Health Insurance","4","10","12","M","2","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","0.00","120.00","251.00","252.00","0.00","628.00","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("5","057040","K/10/07/08/00092","OPD","K","CB Health Insurance","4","10","07","M","63","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","102.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("6","342814","K/10/09/09/00538","OPD","K","CB Health Insurance","4","10","09","M","33","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","119.70","0.00","0.00","124.70","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("7","035468","K/10/07/4/01803","OPD","K","CB Health Insurance","4","10","07","M","83","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("8","895224","K/10/09/10/10162","OPD","K","CB Health Insurance","4","10","09","M","70","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("9","889536","K/10/03/05/01053/01","OPD","K","CB Health Insurance","4","10","03","F","52","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","22.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("10","895309","Refuge/1855/20","OPD","Refuge","Credit Service","8","02","D34","F","19","2","2013","","No","2013-02-02","","","5.00","250.00","80.00","0.00","0.00","0.00","0.00","335.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("11","029789","H/10/05/20/03443","OPD","H","CB Health Insurance","4","10","05","M","33","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","104.00","0.00","0.00","109.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("12","254547","K/10/02/22/18165","OPD","K","CB Health Insurance","4","10","02","F","33","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("13","895328","K/10/15/06/00098","OPD","K","CB Health Insurance","4","10","15","M","77","2","2013","","No","2013-02-02","","","5.00","75.00","155.00","0.00","0.00","0.00","0.00","235.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("14","034763","K/10/01/01/01571","OPD","K","CB Health Insurance","4","10","01","F","35","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","148.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("15","895279","K/10/04/20/01556/02","OPD","K","CB Health Insurance","4","10","04","F","41","2","2013","","No","2013-02-02","","","5.00","73.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("16","298178","K/10/15/07/00/0/11","OPD","K","CB Health Insurance","4","10","15","M","77","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","208.00","0.00","0.00","213.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("17","233223","K/10/07/06/01351/1","OPD","K","CB Health Insurance","4","10","07","F","55","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","127.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("18","895141","H/10/07/23/05203","IPD","H","CB Health Insurance","4","10","07","M","57","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","92.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("19","893695","Prisoner/29/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","28","2","2013","","No","2013-02-02","","","5.00","20.00","0.00","0.00","20.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("20","1213","H/10/02/33/06560","OPD","H","CB Health Insurance","4","10","02","F","68","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("21","554415","K/10/04/31/09010/02","OPD","K","CB Health Insurance","4","10","04","F","18","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","94.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("22","894722","K/10/05/05829","OPD","K","CB Health Insurance","4","10","05","M","54","2","2013","","No","2013-02-02","","","5.00","0.00","60.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("23","609972","K/10/04/31/00536/04","OPD","K","CB Health Insurance","4","10","04","M","15","2","2013","","No","2013-02-02","","","5.00","350.01","75.00","0.00","1164.05","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("24","888946","H/10/15/10/00562","OPD","H","CB Health Insurance","4","10","15","M","43","2","2013","","No","2013-02-02","","","5.00","0.00","400.00","40.00","0.00","0.00","0.00","445.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("25","884037","K/10/10/05374/01","OPD","K","CB Health Insurance","4","10","10","F","45","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","113.60","0.00","0.00","118.60","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("26","290671","H/10/05/16/01333","OPD","H","CB Health Insurance","4","10","05","M","25","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","67.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("27","702307","K/10/05/24/04135/03","OPD","K","CB Health Insurance","4","10","05","M","23","2","2013","","No","2013-02-01","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("28","077937","K/10/04/10/01573/01","OPD","K","CB Health Insurance","4","10","04","M","65","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","351.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("29","889768","K/19/04/00948","OPD","K","CB Health Insurance","4","19","04","M","45","2","2013","","No","2013-02-02","","","5.00","33.00","0.00","0.00","0.00","0.00","0.00","38.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("30","895263","K/10/05/07/00710","OPD","K","CB Health Insurance","4","10","05","M","57","2","2013","","No","2013-02-02","","","5.00","33.00","75.00","0.00","10.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("31","857996","Prisoner/42/14/013","OPD","Prisoner","Credit Service","4","10","D29","F","28","2","2013","","No","2013-02-02","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","25.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("32","895239","K/10/05/10996/03","OPD","K","CB Health Insurance","4","10","05","M","20","2","2013","","No","2013-02-02","","","5.00","30.00","75.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("33","895135","K/10/09/28/12526","OPD","K","CB Health Insurance","4","10","09","F","16","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","149.00","0.00","0.00","154.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("34","893021","Prisoner/02/04/013","OPD","Prisoner","Credit Service","4","10","D29","M","28","2","2013","","No","2013-02-02","","","5.00","23.00","0.00","0.00","9.00","0.00","0.00","37.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("35","895296","Employee/35/30","OPD","Employee","Credit Service","4","10","D200","M","29","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("36","194786","K/10/07/00012/01","OPD","K","CB Health Insurance","4","10","07","F","69","2","2013","","No","2013-02-02","","","5.00","23.00","38.00","0.00","787.76","0.00","0.00","5.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("37","893404","K/10/02/28/16825","OPD","K","CB Health Insurance","4","10","02","F","15","2","2013","","No","2013-02-02","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("38","009555","Employee/267/19/013","IPD","Employee","Credit Service","4","10","D47","M","54","2","2013","","No","2013-02-02","Higher-referral","Drug stock-out","5.00","0.00","0.00","0.00","146.60","0.00","0.00","151.60","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("39","895300","Employee/35/31","OPD","","Credit Service","4","10","D200","M","23","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("40","347196","H/10/04/07/01676/01","OPD","H","CB Health Insurance","4","10","04","M","44","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","227.85","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("41","895298","Employee/35/32","OPD","","Credit Service","4","10","D200","M","23","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("42","894183","K/19/08/08/07/076000/01","IPD","K","CB Health Insurance","4","19","08","M","17","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","0.00","0.00","106.00","96.00","0.00","207.00","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("43","895301","Employee/35/30","OPD","","Credit Service","4","10","D200","M","20","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("44","895297","Employee/35/30","OPD","","Credit Service","4","10","D200","M","25","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("45","895281","K/19/04/04/05/11121/06","OPD","K","CB Health Insurance","4","19","04","F","43","2","2013","","No","2013-02-02","","","5.00","350.00","0.00","0.00","0.00","0.00","0.00","355.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("46","895299","Employee/35/30","OPD","","Credit Service","4","10","D200","M","21","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("47","878992","K/10/04/15/08707","OPD","K","CB Health Insurance","4","10","04","M","66","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("48","894814","H/10/10/06/01616/4","OPD","H","CB Health Insurance","4","10","10","F","13","2","2013","","No","2013-02-02","","","5.00","26.00","0.00","0.00","28.00","0.00","0.00","59.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("49","862025","K/10/04/25/12159","IPD","K","CB Health Insurance","4","10","04","M","36","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","7.20","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("50","512006","K/10/04/27/0226/08","OPD","K","CB Health Insurance","4","10","04","F","15","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("51","136306","K/10/07/27/03244","OPD","K","CB Health Insurance","4","10","07","M","55","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","177.28","0.00","0.00","5.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("52","893851","K/10/05/24/04780/01","IPD","K","CB Health Insurance","4","10","05","F","49","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","3.00","0.00","0.00","24.00","0.00","0.00","32.00","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("53","885382","K/10/05/06/06253","OPD","K","CB Health Insurance","4","10","05","F","34","2","2013","","No","2013-02-02","","","5.00","20.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("54","861603","H/10/06/02/012020","OPD","H","CB Health Insurance","4","10","06","M","59","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","103.00","0.00","0.00","108.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("55","029792","K/10/04/05/01578/02","OPD","K","CB Health Insurance","4","10","04","F","65","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","153.72","0.00","0.00","65.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("56","037307","K/10/02/14/08463","OPD","K","CB Health Insurance","4","10","02","M","73","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","102.90","0.00","0.00","20.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("57","807127","K/10/05/16/06549","OPD","K","CB Health Insurance","4","10","05","M","32","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("58","512874","K/10/10/22/02525","OPD","K","CB Health Insurance","4","10","10","M","65","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","69.30","0.00","0.00","74.30","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("59","678449","K/10/04/28/08534/01","OPD","K","CB Health Insurance","4","10","04","F","48","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("60","418521","K/10/09/34/07948","OPD","K","CB Health Insurance","4","10","09","M","53","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","486.30","0.00","0.00","491.30","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("61","895151","K/10/04/23/08298","OPD","K","CB Health Insurance","4","10","04","M","1","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","21.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("62","884991","K/10/15/03/00180","OPD","K","CB Health Insurance","4","10","15","F","45","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","276.00","0.00","0.00","281.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("63","894944","K/10/02/23/18384","OPD","K","CB Health Insurance","4","10","02","M","53","2","2013","","No","2013-02-02","","","5.00","23.00","0.00","0.00","52.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("64","895248","K/10/10/24/00515/03","OPD","K","CB Health Insurance","4","10","10","F","18","2","2013","","No","2013-02-02","","","5.00","339.00","155.00","0.00","674.00","0.00","0.00","1173.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("65","877423","K/10/02/22/10689","OPD","K","CB Health Insurance","4","10","02","M","53","2","2013","","No","2013-01-02","","","5.00","0.00","0.00","0.00","21.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("66","653058","K/10/04/27/01189","OPD","K","CB Health Insurance","4","10","04","F","65","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("67","466684","K/10/04/28/03136/01","OPD","K","CB Health Insurance","4","10","04","M","85","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","157.80","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("68","804425","K/10/15/17/00324","OPD","K","CB Health Insurance","4","10","15","M","50","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","127.00","0.00","0.00","132.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("69","889558","K/10/05/06/02655","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","120.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("70","036169","K/10/04/30/08949/01","OPD","K","CB Health Insurance","4","10","04","M","42","2","2013","","No","2013-02-01","","","5.00","0.00","0.00","0.00","120.75","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("71","034819","K/10/05/22/03702","OPD","K","CB Health Insurance","4","10","05","M","65","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","803.70","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("72","792699","K/19/04/04/24/02913/02","OPD","K","CB Health Insurance","4","19","04","F","42","2","2013","","No","2013-02-02","","","5.00","200.00","0.00","0.00","138.00","0.00","0.00","343.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("73","895394","K/10/04/32/02904/02","OPD","K","CB Health Insurance","4","10","04","F","28","2","2013","","No","2013-02-02","","","5.00","90.00","0.00","0.00","28.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("74","887337","H/10/01/01/10273/01","IPD","H","CB Health Insurance","4","10","01","F","42","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","30.00","0.00","0.00","10439.00","348.00","0.00","30.00","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("75","887155","K/10/04/32/03059/01","OPD","K","CB Health Insurance","4","10","04","F","45","2","2013","","No","2013-02-02","","","5.00","200.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("76","884330","K/10/04/26/03723/02","OPD","K","CB Health Insurance","4","10","04","F","54","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("77","425299","H/10/02/19/03140","OPD","H","CB Health Insurance","4","10","02","F","36","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("78","895284","K/10/10/17/04589/03","OPD","K","CB Health Insurance","4","10","10","F","19","2","2013","","No","2013-02-02","","","5.00","73.00","0.00","0.00","0.00","0.00","0.00","78.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("79","886633","K/10/10/01/010051","OPD","K","CB Health Insurance","4","10","10","M","38","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","105.00","0.00","0.00","110.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("80","885051","K/10/04/09/12062/08","IPD","K","CB Health Insurance","4","10","04","M","1","2","2013","","No","2013-02-02","","","5.00","20.00","0.00","0.00","26.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("81","517774","K/10/05/08/04662","OPD","K","CB Health Insurance","4","10","05","M","53","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","688.80","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("82","695860","H/10/05/21/06856","OPD","H","CB Health Insurance","4","10","05","F","44","2","2013","","No","2013-02-02","","","5.00","200.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("83","895440","K/21/D22/0214/01","OPD","K","CB Health Insurance","7","21","D22","F","48","2","2013","","No","2013-02-02","","","5.00","250.00","75.00","0.00","0.00","0.00","0.00","330.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("84","895439","K/10/04/24/14434/03","OPD","K","CB Health Insurance","4","10","04","M","15","2","2013","","No","2013-02-02","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("85","755206","K/10/09/15/02030","OPD","K","CB Health Insurance","4","10","09","M","73","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","246.00","0.00","0.00","251.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("86","895428","K/10/10/15/00906/05","OPD","K","CB Health Insurance","4","10","10","M","10","2","2013","","No","2013-02-02","","","5.00","23.00","75.00","0.00","0.00","0.00","0.00","103.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("87","895294","K/10/06/13/03505/01","OPD","K","CB Health Insurance","4","10","06","F","57","2","2013","","No","2013-02-02","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","35.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("88","858660","K/10/06/1/07014","OPD","K","CB Health Insurance","4","10","06","M","95","2","2013","","No","2013-02-02","","","5.00","500.00","0.00","0.00","243.71","0.00","0.00","748.71","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("89","895432","K/10/12/26/118108/01","OPD","K","CB Health Insurance","4","10","12","M","60","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("90","894763","K/10/04/05/08137/01","OPD","K","CB Health Insurance","4","10","04","F","33","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","50.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("91","895399","K/10/10/08/04502/01","OPD","K","CB Health Insurance","4","10","10","M","45","2","2013","","No","2013-02-02","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","85.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("92","895484","H/10/15/23/00143","OPD","H","CB Health Insurance","4","10","15","M","16","2","2013","","No","2013-02-02","","","5.00","73.00","0.00","0.00","55.00","0.00","0.00","133.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("93","895282","K/10/05/17/04471","OPD","K","CB Health Insurance","4","10","05","M","48","2","2013","","No","2013-02-02","","","5.00","76.00","0.00","0.00","210.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("94","895492","H/10/15/21/00068/01","OPD","H","CB Health Insurance","4","10","15","F","27","2","2013","","No","2013-02-02","","","5.00","350.00","0.00","0.00","0.00","0.00","0.00","355.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("95","895490","K/19/05/27/05768","IPD","K","CB Health Insurance","4","19","05","F","42","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","220.00","400.00","110.00","2126.00","72.00","0.00","2933.00","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("96","068333","K/10/04/25/01618","IPD","K","CB Health Insurance","4","10","04","M","78","2","2013","","No","2013-02-02","","","5.00","245.00","0.00","0.00","145.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("97","830775","K/10/10/11/02005","OPD","K","CB Health Insurance","4","10","10","M","57","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","107.20","0.00","0.00","112.20","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("98","892714","K/10/09/01/02179","IPD","K","CB Health Insurance","4","10","09","M","35","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","23.00","0.00","0.00","38.00","204.00","0.00","270.00","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("99","821208","K/10/15/02/00206","OPD","K","CB Health Insurance","4","10","15","M","50","2","2013","","No","2013-02-02","","","5.00","40.00","0.00","0.00","16.00","0.00","0.00","61.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("100","895495","H/19/07/01/04533","OPD","H","CB Health Insurance","4","19","07","M","26","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("101","546409","K/10/11/05/01756","OPD","K","CB Health Insurance","4","10","11","F","30","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","192.00","0.00","0.00","197.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("102","893757","Refuge/1767/20","OPD","","Credit Service","8","02","D34","F","35","2","2013","","No","2013-02-02","","","5.00","0.00","75.00","0.00","446.80","0.00","0.00","526.80","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("103","740531","H/10/05/01/08989/01","OPD","H","CB Health Insurance","4","10","05","F","30","2","2013","","No","2013-02-02","","","5.00","10.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("104","625264","K/10/05/22/01692","OPD","K","CB Health Insurance","4","10","05","M","61","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","93.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("105","894008","K/10/02/14/195","IPD","K","CB Health Insurance","4","10","02","M","33","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","362.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("106","895128","K/10/12/01/11984","OPD","K","CB Health Insurance","4","10","12","M","67","2","2013","","No","2013-02-02","","","5.00","190.00","475.00","0.00","10.20","0.00","0.00","680.20","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("107","892884","K/10/09/31/02129/04","OPD","K","CB Health Insurance","4","10","09","M","43","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","38.00","0.00","0.00","43.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("108","895234","K/19/05/03/02549","OPD","K","CB Health Insurance","4","19","05","M","45","2","2013","","No","2013-02-02","","","5.00","140.00","80.00","0.00","4.50","0.00","0.00","229.50","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("109","873839","K/10/10/12/02139/02","IPD","K","CB Health Insurance","4","10","10","F","5","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","50.00","40.00","0.00","83.05","48.00","0.00","226.05","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("110","895504","H/19/05/32/06612/02","OPD","H","CB Health Insurance","4","19","05","M","16","2","2013","","No","2013-02-02","","","5.00","28.00","0.00","0.00","0.00","0.00","0.00","33.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("111","845693","K/10/04/25/12149/01","OPD","K","CB Health Insurance","4","10","04","F","56","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","104.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("112","893353","K/10/10/06/05027/03","OPD","K","CB Health Insurance","4","10","10","F","17","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","67.90","0.00","0.00","72.90","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("113","599357","K/10/02/33/07593","OPD","K","CB Health Insurance","4","10","02","F","21","2","2013","","No","2013-02-02","","","5.00","200.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("114","711866","K/10/04/29/08046","OPD","K","CB Health Insurance","4","10","04","M","53","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","19.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("115","894831","H/10/04/22/01718/01","IPD","H","CB Health Insurance","4","10","04","F","31","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","60.00","0.00","144.00","60.00","0.00","65.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("116","873142","K/10/05/16/02327","OPD","K","CB Health Insurance","4","10","05","M","53","2","2013","","No","2013-02-02","","","5.00","3.00","0.00","0.00","101.50","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("117","889648","H/19/01/21/06298/02","IPD","H","CB Health Insurance","4","19","01","F","15","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","30.00","0.00","60.00","74.90","132.00","0.00","169.90","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("118","895476","H/10/09/08/0260/05","OPD","H","CB Health Insurance","4","10","09","F","33","2","2013","","No","2013-02-02","","","5.00","26.00","0.00","0.00","0.00","0.00","0.00","31.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("119","318603","K/10/04/08/12467/03","OPD","K","CB Health Insurance","4","10","04","M","22","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","56.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("120","836618","K/10/10/25/00372/04","OPD","K","CB Health Insurance","4","10","10","M","19","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("121","895507","K/19/04/0113058/01","OPD","K","CB Health Insurance","4","19","04","F","35","2","2013","","No","2013-02-02","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","85.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("122","890415","H/10/05/15/010174","OPD","H","CB Health Insurance","4","10","05","M","44","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("123","894828","K/10/09/20/04996","OPD","K","CB Health Insurance","4","10","09","M","43","2","2013","","No","2013-02-02","","","5.00","50.00","0.00","0.00","103.00","0.00","0.00","158.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("124","890106","K/10/15/10/00545","OPD","K","CB Health Insurance","4","10","15","M","36","2","2013","","No","2013-02-02","","","5.00","0.00","75.00","2.00","1103.60","0.00","0.00","1185.60","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("125","552615","K/10/09/30/03922","OPD","K","CB Health Insurance","4","10","09","M","48","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","28.80","0.00","0.00","33.80","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("126","888429","K/10/10/21/07852","IPD","K","CB Health Insurance","4","10","10","M","19","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","60.00","0.00","0.00","144.00","132.00","0.00","341.00","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("127","875149","K/21/D22/0017/02","OPD","K","CB Health Insurance","7","21","D22","M","1","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","471.00","0.00","0.00","476.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("128","895506","K/10/08/31/01909","OPD","K","CB Health Insurance","4","10","08","F","42","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","60.00","6.00","0.00","0.00","71.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("129","859012","K/10/04/06/00358","OPD","K","CB Health Insurance","4","10","04","M","43","2","2013","","No","2013-02-02","","","5.00","23.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("130","876913","K/10/02/17/04686","OPD","K","CB Health Insurance","4","10","02","M","27","2","2013","","No","2013-02-02","","","5.00","20.00","0.00","0.00","122.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("131","895421","Prisoner/DNS/45/14/013","OPD","","Credit Service","4","10","D29","M","22","2","2013","","No","2013-02-02","","","5.00","146.00","72.00","0.00","608.00","0.00","0.00","831.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("132","890364","K/10/D12/10/02/04/14536","OPD","K","CB Health Insurance","4","10","D12","M","4","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","75.00","0.00","204.00","156.00","0.00","440.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("133","895423","Employee/01/02982","OPD","Employee","Credit Service","4","10","D01","M","53","2","2013","","No","2013-02-02","","","5.00","80.00","0.00","40.00","149.00","0.00","0.00","274.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("134","879289","Prisoner/DNS/45/14/013","OPD","","Credit Service","4","10","D29","M","27","2","2013","","No","2013-02-02","","","5.00","70.00","0.00","0.00","306.50","0.00","0.00","381.50","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("135","892412","Prisoner/DNS/45/14/013","OPD","","Credit Service","4","10","D29","M","61","2","2013","","No","2013-02-02","","","5.00","80.00","0.00","0.00","206.85","0.00","0.00","291.85","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("136","895441","K/10/05/07/00658","OPD","K","CB Health Insurance","4","10","05","M","66","2","2013","","No","2013-02-03","","","5.00","50.00","155.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("137","609128","K/10/05/22/06938","OPD","K","CB Health Insurance","4","10","05","F","67","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","1339.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("138","893836","K/10/10/15/03101/2","OPD","K","CB Health Insurance","4","10","10","M","43","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","40.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("139","895528","K/10/03/10/03595","OPD","K","CB Health Insurance","4","10","03","F","31","2","2013","","No","2013-02-03","","","5.00","80.00","555.00","0.00","1471.00","0.00","0.00","2111.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("140","894756","K/10/09/08/05151","OPD","K","CB Health Insurance","4","10","09","F","33","2","2013","","No","2013-02-03","","","5.00","0.00","75.00","0.00","67.80","0.00","0.00","147.80","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("141","894827","K/10/04/09/07752","OPD","K","CB Health Insurance","4","10","04","M","53","2","2013","","No","2013-02-03","","","5.00","20.00","475.00","400.00","21.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("142","895532","H/10/07/30/01443/02","OPD","H","CB Health Insurance","4","10","07","F","13","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("143","119588","H/10/05/08/12320","OPD","H","CB Health Insurance","4","10","05","F","39","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","60.00","28.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("144","875734","Employee/236/19/2013","OPD","","Credit Service","4","10","D29","M","34","2","2013","","No","2013-02-03","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","85.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("145","895699","K/10/09/15/03835/05","OPD","K","CB Health Insurance","4","10","09","M","17","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("146","529337","K/10/05/05/09/03630","OPD","K","CB Health Insurance","4","10","05","M","55","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","75.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("147","895536","K/10/05/18/03016/03","OPD","K","CB Health Insurance","4","10","05","F","14","2","2013","","No","2013-02-03","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("148","875805","K/10/03/01/03355","OPD","K","CB Health Insurance","4","10","03","M","86","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","90.20","0.00","0.00","30.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("149","895701","K/10/12/11/11814/03","OPD","K","CB Health Insurance","4","10","12","F","50","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("150","878966","K/09/D16/036/03593","OPD","K","CB Health Insurance","4","09","D16","M","82","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","83.80","0.00","0.00","88.80","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("151","446908","K/10/06/30//07647","OPD","K","CB Health Insurance","4","10","06","F","73","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","148.00","0.00","0.00","153.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("152","878964","K/10/06/18/05064","OPD","K","CB Health Insurance","4","10","06","M","80","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("153","646178","K/10/06/37/010397","OPD","K","CB Health Insurance","4","10","06","M","45","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","67.80","0.00","0.00","72.80","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("154","894697","K/10/10/16/01856/02","IPD","K","CB Health Insurance","4","10","10","M","15","2","2013","","No","2013-02-02","","","5.00","0.00","80.00","0.00","82.00","0.00","0.00","167.00","","2020-10-10","2020-11-09","53","1");
INSERT INTO treatment VALUES("155","080166","K/10/05/15/02431","OPD","K","CB Health Insurance","4","10","05","M","73","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","102.90","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("156","894835","H/10/15/09/00186","IPD","H","CB Health Insurance","4","10","15","M","71","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","90.00","0.00","0.00","97.00","72.00","0.00","264.00","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("157","030465","H/10/07/30/01442","OPD","H","CB Health Insurance","4","10","07","M","38","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","102.90","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("158","894845","K/10/04/07/09476/01","OPD","K","CB Health Insurance","4","10","04","F","18","2","2013","","No","2013-02-03","","","5.00","70.00","80.00","0.00","154.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("159","895202","K/10/05/1204018/01","OPD","K","CB Health Insurance","4","10","05","F","31","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("160","311921","K/10/02/03/01979","OPD","K","CB Health Insurance","4","10","02","M","19","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","73.60","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("161","546201","K/10/04/02/02556/01","OPD","K","CB Health Insurance","4","10","04","M","59","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","14.40","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("162","039405","H/10/01/06/033977","OPD","H","CB Health Insurance","4","10","01","M","38","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","128.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("163","895202","K/10/05/1204018/01","OPD","K","CB Health Insurance","4","10","05","F","31","2","2013","","No","2013-02-03","","","5.00","170.00","0.00","0.00","848.55","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("164","364805","K/10/12/11/01226","OPD","K","CB Health Insurance","4","10","12","M","45","2","2013","","No","2013-02-03","","","5.00","250.00","75.00","0.00","6.00","0.00","0.00","336.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("165","895720","Prisoner/46u/14/013","OPD","","Credit Service","4","10","D29","M","50","2","2013","","No","2013-02-03","","","5.00","30.00","0.00","40.00","0.00","0.00","0.00","75.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("166","895596","H/10/07/32/01433","OPD","H","CB Health Insurance","4","10","07","F","53","2","2013","","No","2013-02-03","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("167","034820","K/10/02/02/25479","OPD","K","CB Health Insurance","4","10","02","F","35","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","96.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("168","895721","Employee/DNS/46/14/013","OPD","","Credit Service","4","10","D29","M","25","2","2013","","No","2013-02-03","","","5.00","30.00","75.00","0.00","18.00","0.00","0.00","128.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("169","783458","K/10/05/07/03915","OPD","K","CB Health Insurance","4","10","05","M","50","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","21.60","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("170","818797","K/10/06/28/04108/01","OPD","K","CB Health Insurance","4","10","06","F","49","2","2013","","No","2013-02-03","","","5.00","200.00","0.00","0.00","0.00","0.00","0.00","205.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("171","420625","K/10/04/31/01818/02","OPD","K","CB Health Insurance","4","10","04","F","27","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","33.61","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("172","895600","K/10/05/11/07348/01","OPD","K","CB Health Insurance","4","10","05","F","32","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("173","711053","K/10/05/08/05557","OPD","K","CB Health Insurance","4","10","05","F","44","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","45.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("174","894641","K/19/04/01/14561","OPD","K","CB Health Insurance","4","19","04","M","23","2","2013","","No","2013-02-03","","","5.00","63.00","0.00","0.00","0.00","0.00","0.00","68.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("175","854863","H/10/05/06/06662","OPD","H","CB Health Insurance","4","10","05","F","31","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","69.30","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("176","079490","K/10/05/14/04971","OPD","K","CB Health Insurance","4","10","05","M","53","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","117.66","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("177","021593","K/19/02/30/04051/04","OPD","K","CB Health Insurance","4","19","02","F","6","2","2013","","No","2013-02-03","","","5.00","23.00","0.00","0.00","34.00","0.00","0.00","62.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("178","894533","K/10/10/14/7974","OPD","K","CB Health Insurance","4","10","10","M","75","2","2013","","No","2013-02-03","","","5.00","0.00","155.00","0.00","10.60","0.00","0.00","170.60","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("179","599965","K/10/04/25/01656/01","OPD","K","CB Health Insurance","4","10","04","F","69","2","2013","","No","2013-02-03","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("180","892295","P/YKW/128/1","OPD","P/YKW","CB Health Insurance","7","21","D22","F","66","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","160.00","0.00","0.00","0.00","165.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("181","895512","K/10/10/25/018042","OPD","K","CB Health Insurance","4","10","10","F","28","2","2013","","No","2013-02-03","","","5.00","420.00","0.00","0.00","0.00","0.00","0.00","425.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("182","892374","K/10/06/04627/03","OPD","K","CB Health Insurance","4","10","06","F","15","2","2013","","No","2013-02-03","","","5.00","20.00","155.00","0.00","1507.00","0.00","0.00","1687.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("183","883718","K/10/07/12/4004","IPD","K","CB Health Insurance","4","10","07","M","29","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","0.00","0.00","0.00","1248.42","396.00","0.00","5.00","","2020-10-10","2020-11-09","45","1");
INSERT INTO treatment VALUES("184","599965","K/10/04/25/01656/01","OPD","K","CB Health Insurance","4","10","04","F","69","2","2013","","No","2013-02-03","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("185","895180","H/10/02/  01/00651","OPD","H","CB Health Insurance","4","10","02","M","75","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","15.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("186","894483","K/19/08/05/07027","OPD","K","CB Health Insurance","4","19","08","M","35","2","2013","","No","2013-02-03","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("187","599965","K/10/04/25/01656/01","OPD","K","CB Health Insurance","4","10","04","F","69","2","2013","","No","2013-02-03","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("188","895722","Prisoner/DNS/46/14/013","OPD","","Credit Service","4","10","D29","M","60","2","2013","","No","2013-02-03","","","5.00","0.00","75.00","0.00","49.00","0.00","0.00","129.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("189","734164","K/10/09/1800875","OPD","K","CB Health Insurance","4","10","09","M","50","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","24.20","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("190","895639","H/10/06/03/07189/02","OPD","H","CB Health Insurance","4","10","06","F","20","2","2013","","No","2013-02-03","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("191","869297","H/10/02/32/20537","OPD","H","CB Health Insurance","4","10","02","M","43","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","216.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("192","895565","K/10/07/36/06401","OPD","K","CB Health Insurance","4","10","07","M","63","2","2013","","No","2013-02-03","","","5.00","240.00","475.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("193","599965","K/10/04/25/01656/01","OPD","K","CB Health Insurance","4","10","04","F","69","2","2013","","No","2013-02-03","","","5.00","200.00","0.00","0.00","69.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("194","795780","K/10/05/24/06927","OPD","K","CB Health Insurance","4","10","05","M","35","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("195","497045","K/10/02/10/08408","OPD","K","CB Health Insurance","4","10","02","M","30","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("196","880257","H/10/07/6/05626/01","OPD","H","CB Health Insurance","4","10","07","F","36","2","2013","","No","2013-02-03","","","5.00","20.00","0.00","0.00","12.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("197","878857","H/10/09/17/03083","OPD","H","CB Health Insurance","4","10","09","M","35","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","27.00","0.00","0.00","32.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("198","039407","K/10/06/03/04303/01","OPD","K","CB Health Insurance","4","10","06","F","58","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","855.60","0.00","0.00","860.60","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("199","890375","K/10/04/10/12669/06","OPD","K","CB Health Insurance","4","10","04","F","31","2","2013","","No","2013-02-03","","","0.00","0.00","0.00","0.00","30.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("200","832186","K/19/06/34/04741/01","OPD","K","CB Health Insurance","4","19","06","F","50","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("201","828927","H/10/06/16/02567/03","OPD","H","CB Health Insurance","4","10","06","F","17","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","28.70","0.00","0.00","33.70","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("202","783998","K/10/02/14/17413","OPD","K","CB Health Insurance","4","10","02","M","38","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","39.60","0.00","0.00","20.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("203","889707","Refuge/1834/2020","IPD","","Credit Service","8","02","D34","M","23","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","0.00","0.00","0.00","23.00","0.00","0.00","28.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("204","850140","K/10/16/05/03122/04","OPD","K","CB Health Insurance","4","10","16","F","36","2","2013","","No","2013-02-03","","","5.00","0.00","400.00","0.00","14.71","0.00","0.00","419.71","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("205","578929","K/10/04/17/02559/01","OPD","K","CB Health Insurance","4","10","04","F","55","2","2013","","No","2013-01-03","","","5.00","0.00","0.00","0.00","717.60","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("206","895077","K/19/D03/19/00640","OPD","K","CB Health Insurance","4","19","06","F","45","2","2013","","No","2013-02-03","","","5.00","200.00","40.00","0.00","166.00","0.00","0.00","411.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("207","872744","K/10/02/27/10203","OPD","K","CB Health Insurance","4","10","02","M","50","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","48.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("208","895703","K/21/D22/P/Goji/0069/01","OPD","K","CB Health Insurance","7","21","D22","F","35","2","2013","","No","2013-02-03","","","5.00","50.00","0.00","0.00","0.00","0.00","0.00","55.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("209","895487","K/10/05/1727030/01","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","15.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("210","864963","H/10/05/08/08248/01","OPD","H","CB Health Insurance","4","10","05","F","45","2","2013","","No","2013-02-03","","","5.00","20.00","0.00","0.00","94.80","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("211","669834","K/10/05/17/07036","OPD","K","CB Health Insurance","4","10","05","M","68","2","2013","","No","2013-02-03","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("212","874690","K/10/15/03/00113","IPD","K","CB Health Insurance","4","10","15","M","56","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","82.00","0.00","0.00","87.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("213","895592","H/10/05/04/05302","OPD","H","CB Health Insurance","4","10","05","M","37","2","2013","","No","2013-02-03","","","5.00","30.00","60.00","0.00","0.00","0.00","0.00","95.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("214","895768","K/10/05/03/06381","OPD","K","CB Health Insurance","4","10","05","M","14","2","2013","","No","2013-02-03","","","5.00","26.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("215","879092","K/10/D01/02/40105","OPD","K","CB Health Insurance","4","10","D01","F","43","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","15.12","0.00","0.00","263.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("216","895742","K/10/09/09/06103/4","OPD","K","CB Health Insurance","4","10","09","F","15","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","27.00","0.00","0.00","32.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("217","895756","K/10/04/15/14757/01","OPD","K","CB Health Insurance","4","10","04","F","27","2","2013","","No","2013-02-03","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("218","880518","K/10/07/21/04993","OPD","K","CB Health Insurance","4","10","07","M","61","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("219","894910","H/10/04/17/10858/05","OPD","H","CB Health Insurance","4","10","04","M","9","2","2013","","No","2013-02-03","","","5.00","34.00","0.00","40.00","85.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("220","730647","K/10/03/03/00030","OPD","K","CB Health Insurance","4","10","03","F","40","2","2013","","No","2013-02-03","","","5.00","200.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("221","895609","K/10/10/02/04485/2","OPD","K","CB Health Insurance","4","10","10","F","35","2","2013","","No","2013-02-03","","","5.00","3.00","0.00","0.00","0.00","0.00","0.00","8.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("222","893883","Refuge/453/20","IPD","","Credit Service","8","02","D34","F","50","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","0.00","0.00","678.60","180.00","0.00","683.60","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("223","895744","K/10/D12/07/02314/04","OPD","K","CB Health Insurance","4","10","D12","M","10","2","2013","","No","2013-02-03","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("224","890545","Employee/BN/5515","OPD","","Credit Service","7","98","D201","M","53","2","2013","","No","2013-02-02","","","5.00","0.00","75.00","400.00","300.00","0.00","0.00","780.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("225","261438","H/10/07/07/061904","OPD","H","CB Health Insurance","4","10","07","F","15","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","225.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("226","895791","K/10/03/01/00436/02","OPD","K","CB Health Insurance","4","10","03","F","15","2","2013","","No","2013-02-03","","","5.00","33.00","0.00","0.00","8.40","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("227","862998","H/10/07/7/06428","OPD","H","CB Health Insurance","4","10","07","F","14","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("228","882133","K/10/12/11/01223/01","IPD","K","CB Health Insurance","4","10","12","F","39","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","80.00","0.00","10.00","228.00","0.00","323.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("229","887633","K/19/04/29/07507/04","IPD","K","CB Health Insurance","4","19","04","M","14","2","2013","","No","2013-02-02","","","5.00","50.00","0.00","0.00","1266.00","0.00","0.00","1321.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("230","893475","K/10/09/08/100016/04","IPD","K","CB Health Insurance","4","10","09","M","14","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","20.00","0.00","0.00","491.00","192.00","0.00","708.00","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("231","026967","K/10/05/7/007/07","IPD","K","CB Health Insurance","4","10","05","M","28","2","2013","","No","2013-02-03","","","5.00","50.00","0.00","0.00","232.80","0.00","0.00","287.80","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("232","872294","K/10/15/20/00063","OPD","K","CB Health Insurance","4","10","15","M","59","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","67.00","0.00","0.00","72.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("233","895709","K/10/10/12/02273/07","OPD","K","CB Health Insurance","4","10","10","M","28","2","2013","","No","2013-02-03","","","5.00","83.00","75.00","0.00","0.00","0.00","0.00","163.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("234","892410","Prisoner/22/14/013","OPD","","Credit Service","4","10","D29","M","28","2","2013","","No","2013-02-03","","","0.00","0.00","75.00","0.00","0.00","0.00","0.00","75.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("235","830564","H/10/06/11/011/818/01","IPD","H","CB Health Insurance","4","10","06","F","17","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","30.00","0.00","60.00","638.00","72.00","0.00","805.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("236","873664","K/10/07/25/02308/03","OPD","K","CB Health Insurance","4","10","07","M","15","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","50.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("237","812325","K/10/02/14/23012","IPD","K","CB Health Insurance","4","10","02","M","38","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","0.00","100.00","1078.50","108.00","0.00","20.00","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("238","895422","K/10/15/16/00143","OPD","K","CB Health Insurance","4","10","15","M","70","2","2013","","No","2013-02-02","","","5.00","0.00","80.00","0.00","30.00","0.00","0.00","115.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("239","878580","K/19/D03/05/01136/01","OPD","K","CB Health Insurance","4","19","D03","F","52","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","15.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("240","854704","H/19/02/17/05530/01","OPD","H","CB Health Insurance","4","19","02","M","13","2","2013","","No","2013-02-02","","","5.00","165.00","80.00","0.00","175.80","0.00","0.00","425.80","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("241","793966","K/19/02/21/05418/01","OPD","K","CB Health Insurance","4","19","02","F","27","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("242","895222","H/21/D22/S/01/128/01","IPD","H","CB Health Insurance","7","21","D22","M","0","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","236.00","0.00","0.00","241.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("243","895787","K/10/07/19/02114/05","OPD","K","CB Health Insurance","4","10","07","F","12","2","2013","","No","2013-02-03","","","5.00","60.00","0.00","0.00","32.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("244","774560","K/10/02/07/14592","OPD","K","CB Health Insurance","4","10","02","M","51","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("245","888268","K/10/D12/08/03/41","IPD","K","CB Health Insurance","4","10","D12","M","45","2","2013","","No","2013-02-03","Discharged","Better Healed","0.00","0.00","0.00","0.00","66.00","420.00","0.00","486.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("246","894735","H/10/07/1/03484","OPD","H","CB Health Insurance","4","10","07","M","48","2","2013","","No","2013-02-03","","","5.00","10.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("247","891645","K/10/10/30/07056","IPD","K","CB Health Insurance","4","10","10","M","60","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","0.00","0.00","0.00","480.00","192.00","0.00","677.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("248","895735","K/10/06/10/01114/01","OPD","K","CB Health Insurance","4","10","06","F","64","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","53.50","0.00","0.00","58.50","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("249","514176","P/YKW/05/00584","OPD","P/YKW","CB Health Insurance","4","10","05","M","63","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","14.40","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("250","887492","K/19/08/08/0001/01","IPD","K","CB Health Insurance","4","19","08","F","37","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","318.00","0.00","0.00","323.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("251","895757","K/10/06/27/011238","OPD","K","CB Health Insurance","4","10","06","M","30","2","2013","","No","2013-02-03","","","5.00","80.00","75.00","0.00","0.00","0.00","0.00","160.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("252","895700","K/10/02/18/18410","OPD","K","CB Health Insurance","4","10","02","F","50","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("253","893876","K/10/04/01/11984","OPD","K","CB Health Insurance","4","10","04","M","67","2","2013","","No","2013-02-03","","","5.00","10.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("254","892641","Refuge/1779/20","IPD","","Credit Service","8","02","D34","M","15","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","0.00","0.00","0.00","206.00","288.00","0.00","211.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("255","866669","K/10/16/19/01070/01","OPD","K","CB Health Insurance","4","10","16","F","40","2","2013","","No","2013-02-03","","","5.00","55.00","0.00","0.00","201.00","0.00","0.00","261.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("256","887334","H/10/04/06584/02","IPD","H","CB Health Insurance","4","10","04","F","14","2","2013","","No","2013-02-02","Discharged","Better Healed","5.00","0.00","0.00","60.00","1778.56","108.00","0.00","65.00","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("257","895543","K/10/10/24/08049","IPD","K","CB Health Insurance","4","10","10","M","65","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","145.00","0.00","0.00","267.00","84.00","0.00","417.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("258","867113","K/10/02/33/26581","OPD","K","CB Health Insurance","4","10","02","M","9","2","2013","","No","2013-02-03","","","5.00","23.00","0.00","0.00","490.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("259","894927","K/10/01/02/01335/01","OPD","K","CB Health Insurance","4","10","01","M","31","2","2013","","No","2013-02-02","","","5.00","123.00","0.00","0.00","317.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("260","894855","H/10/12/28/11395","OPD","H","CB Health Insurance","4","10","12","M","52","2","2013","","No","2013-02-02","","","5.00","16.00","75.00","0.00","30.80","0.00","0.00","126.80","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("261","890217","K/10/01/01/02349/01","OPD","K","CB Health Insurance","4","10","01","F","48","2","2013","","No","2013-02-03","","","5.00","200.00","0.00","0.00","34.50","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("262","884727","K/10/04/24/13438/01","OPD","K","CB Health Insurance","4","10","04","F","31","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","28.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("263","894538","K/10/02/41/4/14138","OPD","K","CB Health Insurance","4","10","02","F","14","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","98.70","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("264","493273","Employee/43/29/017","OPD","","Credit Service","7","145","D145","F","57","2","2013","","No","2013-02-02","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("265","895778","K/10/05/20/07081/02","OPD","K","CB Health Insurance","4","10","05","M","18","2","2013","","No","2013-02-03","","","5.00","60.00","0.00","0.00","425.50","0.00","0.00","5.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("266","895116","K/10/02/14/20790","IPD","K","CB Health Insurance","4","10","02","F","63","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","674.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("267","395086","K/10/04/24/12391/03","OPD","K","CB Health Insurance","4","10","04","M","17","2","2013","","No","2013-02-03","","","5.00","60.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("268","895800","K/10/05/26/11110","OPD","K","CB Health Insurance","4","10","05","M","5","2","2013","","No","2013-02-03","","","5.00","8.00","0.00","0.00","37.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("269","898742","K/10/09/01/06103","OPD","K","CB Health Insurance","4","10","09","F","16","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","49.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("270","895620","Employee/143/29.1/019/13","OPD","","Credit Service","7","145","D145","M","36","2","2013","","No","2013-02-03","","","10.00","0.00","0.00","0.00","0.00","0.00","0.00","10.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("271","895736","H/10/06/27/05046/02","OPD","H","CB Health Insurance","4","10","06","F","32","2","2013","","No","2013-02-03","","","10.00","40.00","0.00","0.00","73.00","0.00","0.00","123.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("272","895858","K/10/10/01/07137","OPD","K","CB Health Insurance","4","10","10","F","75","2","2013","","No","2013-02-03","","","10.00","86.00","0.00","0.00","45.00","0.00","0.00","141.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("273","656228","K/10/01/01/04662/01","IPD","K","CB Health Insurance","4","10","01","M","38","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","30.00","0.00","0.00","35.00","84.00","0.00","30.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("274","895779","K/10/04/12/07710/01","IPD","K","CB Health Insurance","4","10","04","F","40","2","2013","","No","2013-02-03","Discharged","Better Healed","10.00","487.00","75.00","0.00","5581.00","96.00","0.00","65.00","","2020-10-10","2020-11-09","50","1");
INSERT INTO treatment VALUES("275","889708","Refuge/842/20","IPD","","Credit Service","8","04","D123","F","1","2","2013","","No","2013-02-03","Discharged","Better Healed","5.00","0.00","0.00","0.00","79.00","168.00","0.00","84.00","","2020-10-10","2020-11-09","50","1");
INSERT INTO treatment VALUES("276","884589","K/10/09/01/04932","IPD","K","CB Health Insurance","4","10","09","F","30","2","2013","","No","2013-02-03","","","5.00","63.00","0.00","60.00","308.00","0.00","0.00","436.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("277","895840","K/19/04/04/1402282","OPD","K","CB Health Insurance","4","19","04","M","30","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("278","895843","K/09/D16/01/02997/01","OPD","K","CB Health Insurance","4","09","D16","F","20","2","2013","","No","2013-02-04","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("279","849503","K/10/09/31/04065/1","OPD","K","CB Health Insurance","4","10","09","F","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","267.00","0.00","0.00","272.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("280","889761","K/19/08/07/11/00046","OPD","K","CB Health Insurance","4","19","08","M","61","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","269.50","0.00","0.00","274.50","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("281","895847","K/10/02/30/14085","OPD","K","CB Health Insurance","4","10","02","M","51","2","2013","","No","2013-02-04","","","5.00","76.00","75.00","0.00","22.60","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("282","895846","K/09/D21/17/6678/02","OPD","K","CB Health Insurance","4","09","D21","M","43","2","2013","","No","2013-02-04","","","5.00","20.00","400.00","0.00","1471.00","0.00","0.00","1896.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("283","894048","K/10/05/12/09634","OPD","K","CB Health Insurance","4","10","05","M","38","2","2013","","No","2013-02-04","","","5.00","340.00","0.00","0.00","4.00","0.00","0.00","349.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("284","164045","K/10/15/12/00320","OPD","K","CB Health Insurance","4","10","15","M","62","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","660.60","0.00","0.00","665.60","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("285","084804","H/10/09/21/08813","OPD","H","CB Health Insurance","4","10","09","M","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","40.00","0.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("286","893556","K/10/04/26/09012/01","OPD","K","CB Health Insurance","4","10","04","F","20","2","2013","","No","2013-02-04","","","5.00","30.00","40.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("287","025957","K/10/05/08177/05","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","24.40","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("288","895752","K/10/02/28/19865","OPD","K","CB Health Insurance","4","10","02","F","28","2","2013","","No","2013-02-04","","","5.00","220.00","0.00","0.00","28.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("289","846086","K/10/10/23/06045/01","OPD","K","CB Health Insurance","4","10","10","F","920","2","2013","","No","2013-02-04","","","5.00","510.00","75.00","0.00","108.00","0.00","0.00","698.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("290","895373","K/10/05/24/05939","OPD","K","CB Health Insurance","4","10","05","M","20","2","2013","","No","2013-02-04","","","5.00","0.00","80.00","40.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("291","023471","K/10/07/35/01406","OPD","K","CB Health Insurance","4","10","07","M","69","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("292","895974","Prisoner/DNS/49/14/013","OPD","","Credit Service","4","10","D29","M","50","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("293","789909","Employee/DNS/14/013","OPD","Employee","Credit Service","4","10","D01","M","25","2","2013","","No","2013-02-04","","","5.00","23.00","75.00","0.00","0.00","0.00","0.00","263.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("294","895976","Prisoner/49/14/013","OPD","","Credit Service","4","10","D29","M","26","2","2013","","No","2013-02-04","","","5.00","23.00","75.00","0.00","0.00","0.00","0.00","103.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("295","895973","Prisoner/DNS/49/14/013","OPD","","Credit Service","4","10","D29","M","25","2","2013","","No","2013-02-04","","","5.00","46.00","0.00","0.00","0.00","0.00","0.00","51.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("296","285875","K/10/02/06/13449","OPD","K","CB Health Insurance","4","10","02","F","60","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","276.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("297","895975","Employee/DNS/49/013","OPD","","Credit Service","4","10","D29","M","28","2","2013","","No","2013-02-04","","","5.00","33.00","75.00","0.00","0.00","0.00","0.00","113.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("298","743205","K/10/04/19/07538","OPD","K","CB Health Insurance","4","10","04","M","70","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","158.40","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("299","876718","K/10/10/20/04094","OPD","K","CB Health Insurance","4","10","10","M","51","2","2013","","No","2013-02-04","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("300","065676","K/10/09/03/00104/04","OPD","K","CB Health Insurance","4","10","09","M","14","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","40.00","0.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("301","896008","K/10/10/16/04309","OPD","K","CB Health Insurance","4","10","10","M","50","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("302","855678","K/10/05/05/05724/04","OPD","K","CB Health Insurance","4","10","05","M","6","2","2013","","No","2013-02-04","","","5.00","3.00","75.00","0.00","3.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("303","515022","K/10/05/03/00371/08","OPD","K","CB Health Insurance","4","10","05","F","85","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","838.80","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("304","895905","K/10/09/08/13617/01","OPD","K","CB Health Insurance","4","10","09","F","48","2","2013","","No","2013-02-04","","","5.00","373.00","0.00","0.00","170.00","0.00","0.00","548.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("305","895754","H/19/02/04/001155","OPD","H","CB Health Insurance","4","19","02","F","61","2","2013","","No","2013-02-04","","","5.00","0.00","150.00","0.00","0.00","0.00","0.00","155.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("306","895830","K/10/02/21/14236","OPD","K","CB Health Insurance","4","10","02","M","74","2","2013","","No","2013-02-04","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("307","896021","K/10/04/03/02777","OPD","K","CB Health Insurance","4","10","04","M","44","2","2013","","No","2013-02-04","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("308","896022","Prisoner/DNS/51/14/013","OPD","","Credit Service","4","10","D29","M","27","2","2013","","No","2013-02-04","","","5.00","83.00","0.00","0.00","0.00","0.00","0.00","88.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("309","233533","K/10/02/16/04115","OPD","K","CB Health Insurance","4","10","02","F","66","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","30.75","0.00","0.00","20.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("310","879284","Prisoner/DNS/45/14/013","OPD","","Credit Service","4","10","D29","M","27","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","232.00","0.00","0.00","237.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("311","770643","K/10/04/17/09148/01","OPD","K","CB Health Insurance","4","10","04","F","62","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","684.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("312","895743","K/10/12/02/12670","OPD","K","CB Health Insurance","4","10","12","F","50","2","2013","","No","2013-01-04","","","5.00","453.00","0.00","0.00","175.20","0.00","0.00","633.20","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("313","892956","K/19/02/17/05591/03","OPD","K","CB Health Insurance","4","19","02","F","16","2","2013","","No","2013-02-04","","","5.00","220.00","400.00","0.00","1521.80","0.00","0.00","2146.80","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("314","635708","Prisoner/DNS/05/14/013","OPD","","Credit Service","4","10","D29","M","35","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","67.80","0.00","0.00","72.80","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("315","488838","K/10/04/06668/02","OPD","K","CB Health Insurance","4","10","04","F","63","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","312.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("316","883453","K/10/06/30/02303","OPD","K","CB Health Insurance","4","10","06","M","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","62.96","0.00","0.00","67.96","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("317","895904","K/10/01/03/05049","OPD","K","CB Health Insurance","4","10","01","M","53","2","2013","","No","2013-02-04","","","5.00","33.00","0.00","0.00","40.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("318","852356","K/10/10/15/02445","OPD","K","CB Health Insurance","4","10","10","M","75","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("319","750275","Letter/11/12/0033/2013","OPD","","Health Care finance","4","10","D38","F","38","2","2013","","No","2013-02-04","","","5.00","200.00","0.00","0.00","984.35","0.00","0.00","1189.35","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("320","895844","Refuge/1877/20","OPD","","Credit Service","8","02","D34","F","0","2","2013","","No","2013-02-04","","","5.00","110.00","0.00","60.00","8.40","0.00","0.00","183.40","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("321","757157","K/10/06/26/01184/01","OPD","K","CB Health Insurance","4","10","06","F","34","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("322","894480","K/10/07/17/05968","OPD","K","CB Health Insurance","4","10","07","F","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("323","485331","K/10/04/30/01232/01","OPD","K","CB Health Insurance","4","10","04","M","65","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","40.80","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("324","890697","Refuge/1836/20","OPD","","Credit Service","8","02","D34","F","30","2","2013","","No","2013-02-04","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("325","321255","K/10/09/10/13671","OPD","K","CB Health Insurance","4","10","09","F","45","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("326","812533","K/19/06/15/01396","OPD","K","CB Health Insurance","4","19","06","M","47","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","40.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("327","796063","K/10/09/01/06538/01","OPD","K","CB Health Insurance","4","10","09","M","67","2","2013","","No","2013-02-04","","","5.00","0.00","75.00","0.00","132.00","0.00","0.00","212.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("328","888776","K/10/05/19/09976","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","78.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("329","023424","K/10/04/27/07002","OPD","K","CB Health Insurance","4","10","04","M","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","60.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("330","419149","K/10/05/03/10810","OPD","K","CB Health Insurance","4","10","05","F","50","2","2014","","No","2013-02-04","","","5.00","0.00","0.00","0.00","150.00","0.00","0.00","155.00","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("331","896014","K/10/09/02/11954/02","OPD","K","CB Health Insurance","4","10","09","M","18","2","2013","","No","2013-02-04","","","5.00","20.00","0.00","0.00","31.50","0.00","0.00","56.50","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("332","840676","H/10/07/26/02883/04","OPD","H","CB Health Insurance","4","10","07","M","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","11.30","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("333","895580","H/10/06/19/03377","OPD","H","CB Health Insurance","4","10","06","F","60","2","2013","","No","2013-02-04","","","5.00","0.00","150.00","40.00","84.00","0.00","0.00","279.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("334","896059","K/10/01/10/1546","OPD","K","CB Health Insurance","4","10","01","M","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","234.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("335","896002","H/10/04/12/02970/03","OPD","H","CB Health Insurance","4","10","04","F","43","2","2013","","No","2013-02-04","","","5.00","390.00","155.00","0.00","12.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("336","885577","K/10/09/32/14482","OPD","K","CB Health Insurance","4","10","09","M","12","2","2013","","No","2013-02-04","","","5.00","50.00","0.00","0.00","481.00","0.00","0.00","536.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("337","781178","K/10/01/01/01280","OPD","K","CB Health Insurance","4","10","01","M","68","2","2013","","No","2013-02-04","","","5.00","0.00","75.00","0.00","226.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("338","806028","K/10/01/11/02643","OPD","K","CB Health Insurance","4","10","01","M","51","2","2013","","No","2013-02-04","","","5.00","73.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("339","896065","K/10/05/17/01361","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-04","","","5.00","33.00","75.00","40.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("340","892945","H/19/08/11/001/02","OPD","H","CB Health Insurance","4","19","08","M","12","2","2013","","No","2013-02-04","","","5.00","20.00","0.00","0.00","664.00","0.00","0.00","689.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("341","896063","K/19/04/25/01474/06","OPD","K","CB Health Insurance","4","19","04","F","16","2","2013","","No","2013-02-04","","","5.00","30.00","0.00","40.00","0.00","0.00","0.00","75.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("342","884976","Employee/35","OPD","","Credit Service","4","10","D200","M","43","2","2013","","No","2013-02-04","","","5.00","176.00","0.00","0.00","17.20","0.00","0.00","198.20","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("343","895901","K/10/08/05/00838","OPD","K","CB Health Insurance","4","10","08","M","63","2","2013","","No","2013-02-04","","","5.00","193.00","0.00","0.00","164.00","0.00","0.00","362.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("344","889899","K/19/07/05/03086","OPD","K","CB Health Insurance","4","19","07","F","43","2","2013","","No","2013-02-04","","","5.00","33.00","0.00","0.00","0.00","0.00","0.00","38.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("345","893896","K/19/02/02/05704/09","OPD","K","CB Health Insurance","4","19","02","M","12","2","2013","","No","2013-02-04","","","5.00","40.00","0.00","0.00","2405.21","0.00","0.00","2450.21","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("346","847774","K/10/10/09/06788/02","OPD","K","CB Health Insurance","4","10","10","F","43","2","2013","","No","2013-02-04","","","5.00","27.00","0.00","0.00","0.00","0.00","0.00","32.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("347","896078","K/10/07/15/03641/01","OPD","K","CB Health Insurance","4","10","07","F","15","2","2013","","No","2013-02-04","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("348","878965","K/10/02/32/19096","OPD","K","CB Health Insurance","4","10","02","F","41","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("349","859381","H/10/07/29/05589","OPD","H","CB Health Insurance","4","10","07","M","31","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","211.15","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("350","209612","K/10/04/05/01644","OPD","K","CB Health Insurance","4","10","04","M","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","9.60","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("351","673370","K/10/09/14/02772/04","OPD","K","CB Health Insurance","4","10","09","M","71","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","37.50","0.00","0.00","42.50","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("352","895804","K/10/05/25/03521/01","OPD","K","CB Health Insurance","4","10","05","F","26","2","2013","","No","2013-02-04","","","5.00","70.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("353","747863","Employee/N274/19/013","OPD","","Credit Service","4","10","D29","M","23","2","2013","","No","2013-02-04","","","5.00","46.00","0.00","0.00","0.00","0.00","0.00","51.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("354","879482","K/10/09/27/10175","OPD","K","CB Health Insurance","4","10","09","F","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","22.00","0.00","0.00","27.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("355","055546","K/10/D12/13/01462/01","OPD","K","CB Health Insurance","4","10","D12","F","45","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","60.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("356","748526","K/10/05/01/09223","OPD","K","CB Health Insurance","4","10","05","M","38","2","2013","","No","2013-02-04","","","5.00","23.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("357","093767","H/10/05/16/03405","OPD","H","CB Health Insurance","4","10","05","M","46","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("358","786620","K/10/04/27/00379/01","OPD","K","CB Health Insurance","4","10","04","F","29","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","276.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("359","655851","K/10/02/18/16339","IPD","K","CB Health Insurance","4","10","02","F","18","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","64.00","336.00","0.00","20.00","","2020-10-10","2020-11-09","34","1");
INSERT INTO treatment VALUES("360","889619","K/10/01/09/00090/08","OPD","K","CB Health Insurance","4","10","01","M","17","2","2013","","No","2013-02-04","","","5.00","50.00","75.00","0.00","0.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("361","889902","K/10/03/07/00219","OPD","K","CB Health Insurance","4","10","03","F","39","2","2013","","No","2013-02-04","","","5.00","33.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("362","892035","K/10/12/0512/671","IPD","K","CB Health Insurance","4","10","12","M","43","2","2013","","No","2013-02-04","Discharged","Better Healed","5.00","0.00","0.00","0.00","626.84","324.00","0.00","955.84","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("363","879878","K/10/16/16/03814/01","OPD","K","CB Health Insurance","4","10","16","F","27","2","2013","","No","2013-02-04","","","5.00","10.00","0.00","0.00","0.00","0.00","0.00","15.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("364","887324","K/19/06/29/01747/02","OPD","K","CB Health Insurance","4","19","06","F","78","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","26.00","0.00","0.00","31.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("365","896197","K/10/02/17/14554","OPD","K","CB Health Insurance","4","10","02","M","18","2","2013","","No","2013-02-05","","","5.00","30.00","75.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("366","650243","H/10/15/04/00089/07","OPD","H","CB Health Insurance","4","10","15","M","1003","2","2013","","No","2013-02-05","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("367","859918","K/10/07/7/02581","OPD","K","CB Health Insurance","4","10","07","M","56","2","2013","","No","2013-02-05","","","5.00","10.00","0.00","0.00","17.60","0.00","0.00","5.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("368","893887","K/10/10/16/04666/01","OPD","K","CB Health Insurance","4","10","10","M","38","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","381.56","0.00","0.00","386.56","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("369","896112","K/10/02/22/16478","OPD","K","CB Health Insurance","4","10","02","F","52","2","2013","","No","2013-02-05","","","5.00","270.00","75.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("370","896217","Employee/mlb/467/20","OPD","Employee","Credit Service","8","03","D129","F","43","2","2013","","No","2013-02-05","","","5.00","43.00","75.00","0.00","0.00","0.00","0.00","123.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("371","896106","K/10/09/02/06530","OPD","K","CB Health Insurance","4","10","09","M","30","2","2013","","No","2013-02-04","","","5.00","50.00","60.00","0.00","185.00","0.00","0.00","300.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("372","895824","K/10/05/26/09971","OPD","K","CB Health Insurance","4","10","05","F","22","2","2013","","No","2013-02-04","","","5.00","218.00","0.00","0.00","149.00","0.00","0.00","372.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("373","882561","Employee/1830/20","IPD","Employee","Credit Service","8","02","D34","F","35","2","2013","","No","2013-02-04","","","5.00","20.00","0.00","0.00","126.80","0.00","0.00","151.80","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("374","871410","H/10/09/01/040447","IPD","H","CB Health Insurance","4","10","09","F","73","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","476.00","0.00","0.00","481.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("375","889896","K/10/02/17/0742","OPD","K","CB Health Insurance","4","10","02","F","40","2","2013","","No","2013-02-04","","","5.00","53.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("376","896229","K/19/02/02/001974/04","OPD","K","CB Health Insurance","4","19","02","F","1","2","2013","","No","2013-02-05","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","35.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("377","887756","K/10/02/36/21095","IPD","K","CB Health Insurance","4","10","02","F","6","2","2013","","No","2013-02-04","","","5.00","68.00","75.00","0.00","320.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("378","713366","K/10/07/31/00458","OPD","K","CB Health Insurance","4","10","07","M","35","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("379","660532","K/10/04/02/02193/00","OPD","K","CB Health Insurance","4","10","04","M","40","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","274.20","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("380","642894","K/10/01/01/00017","OPD","K","CB Health Insurance","4","10","01","M","58","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","67.80","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("381","882835","K/10/12/13/1689/01","OPD","K","CB Health Insurance","4","10","12","M","13","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","68.00","0.00","0.00","73.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("382","896045","K/10/16/02/04392/01","OPD","K","CB Health Insurance","4","10","16","M","17","2","2013","","No","2013-02-05","","","5.00","33.00","75.00","40.00","0.00","0.00","0.00","153.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("383","795202","K/10/04/09/0298/01","OPD","K","CB Health Insurance","4","10","04","M","51","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","20.40","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("384","034050","K/10/05/01/11743","OPD","K","CB Health Insurance","4","10","05","F","32","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","504.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("385","888764","K/10/04/26/14594","OPD","K","CB Health Insurance","4","10","04","M","73","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("386","880512","K/10/10/26/00712/01","OPD","K","CB Health Insurance","4","10","10","F","30","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("387","024026","K/10/15/12/00188/05","OPD","K","CB Health Insurance","4","10","15","M","43","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","360.00","0.00","0.00","365.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("388","894952","K/10/10/01/08069","OPD","K","CB Health Insurance","4","10","10","F","28","2","2013","","No","2013-02-05","","","5.00","30.00","0.00","0.00","138.00","0.00","0.00","173.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("389","038934","K/10/04/16/03235/03","OPD","K","CB Health Insurance","4","10","04","M","14","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","336.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("390","159615","K/10/05/24/04136","OPD","K","CB Health Insurance","4","10","05","M","68","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("391","887899","K/10/02/31/10297","OPD","K","CB Health Insurance","4","10","02","M","15","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","68.60","0.00","0.00","20.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("392","797603","K/10/04/02/06978","OPD","K","CB Health Insurance","4","10","04","F","43","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","135.60","0.00","0.00","65.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("393","888742","K/10/05/01/00015","OPD","K","CB Health Insurance","4","10","05","M","54","2","2013","","No","2013-02-05","","","5.00","120.00","0.00","0.00","77.40","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("394","010243","K/10/02/02/09042","OPD","K","CB Health Insurance","4","10","02","M","80","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","168.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("395","893910","K/10/10/15/00942","OPD","K","CB Health Insurance","4","10","10","M","47","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","9.00","0.00","0.00","14.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("396","045458","K/10/05/19/05781","OPD","K","CB Health Insurance","4","10","05","F","15","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","504.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("397","322749","H/10/09/22/01469","OPD","H","CB Health Insurance","4","10","09","M","52","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","342.00","0.00","0.00","347.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("398","883419","K/10/07/28/06405","OPD","K","CB Health Insurance","4","10","07","M","53","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("399","896250","K/10/02/18/23665","OPD","K","CB Health Insurance","4","10","02","M","70","2","2013","","No","2013-02-05","","","5.00","50.00","475.00","0.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("400","896252","H/10/03/07/02182/01","OPD","H","CB Health Insurance","4","10","03","F","46","2","2013","","No","2013-02-05","","","5.00","73.00","0.00","0.00","10.20","0.00","0.00","30.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("401","740076","K/10/06/28/088","OPD","K","CB Health Insurance","4","10","06","F","61","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","36.00","0.00","0.00","41.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("402","754261","K/10/05/03/00355/01","OPD","K","CB Health Insurance","4","10","05","F","41","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("403","896207","K/10/04/04/00780/01","OPD","K","CB Health Insurance","4","10","04","M","79","2","2013","","No","2013-02-05","","","5.00","40.00","80.00","0.00","8.40","0.00","0.00","65.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("404","881478","K/10/06/10/05084","OPD","K","CB Health Insurance","4","10","06","F","54","2","2013","","No","2013-02-05","","","5.00","76.00","0.00","0.00","253.00","0.00","0.00","334.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("405","731369","K/10/07/14/05207/04","OPD","K","CB Health Insurance","4","10","07","F","49","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("406","896272","K/09/D16/14/03709","OPD","K","CB Health Insurance","4","09","D16","M","53","2","2013","","No","2013-02-05","","","5.00","30.00","400.00","0.00","9.60","0.00","0.00","444.60","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("407","894648","Refuge/mksp/1766/20","OPD","Refuge","Credit Service","8","02","D34","F","0","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","49.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("408","896274","K/10/04/12/01489/02","OPD","K","CB Health Insurance","4","10","04","F","38","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("409","896046","K/19/06/02/06425","OPD","K","CB Health Insurance","4","19","06","M","43","2","2013","","No","2013-02-05","","","5.00","53.00","0.00","0.00","10.80","0.00","0.00","68.80","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("410","656472","Letter/13/04775/01","OPD","Letter","Health Care finance","4","10","05","F","43","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","8.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("411","896266","H/10/06/24/011797","OPD","H","CB Health Insurance","4","10","06","M","42","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("412","879965","K/10/15/01/00017","OPD","K","CB Health Insurance","4","10","15","M","43","2","2013","","No","2013-02-05","","","5.00","0.00","30.00","0.00","0.00","0.00","0.00","35.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("413","896254","K/10/05/04/110742","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","22.00","0.00","80.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("414","885729","K/10/04/27/06434/00","OPD","K","CB Health Insurance","4","10","04","M","73","2","2013","","No","2013-01-05","","","5.00","20.00","75.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("415","896297","K/10/14/10/01549/09","OPD","K","CB Health Insurance","4","10","D12","F","53","2","2013","","No","2013-02-05","","","5.00","70.00","0.00","0.00","252.00","0.00","0.00","327.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("416","896298","H/10/06/36/010973","OPD","H","CB Health Insurance","4","10","06","M","53","2","2013","","No","2013-02-05","","","5.00","260.00","80.00","0.00","305.00","0.00","0.00","650.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("417","896124","K/10/04/27/05857/03","OPD","K","CB Health Insurance","4","10","04","M","13","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","15.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("418","896290","Refuge/dnu/53/14/2013","OPD","Refuge","Credit Service","4","10","D29","M","43","2","2013","","No","2013-02-03","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("419","896281","K/10/15/23/00169/05","OPD","K","CB Health Insurance","4","10","15","F","23","2","2013","","No","2013-02-05","","","5.00","80.00","0.00","40.00","355.00","0.00","0.00","480.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("420","896295","Prisoner/dns53/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","20","2","2013","","No","2013-02-05","","","5.00","138.00","0.00","0.00","109.00","0.00","0.00","252.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("421","896126","H/10/15/20/00042/03","OPD","H","CB Health Insurance","4","10","15","F","16","2","2013","","No","2013-02-05","","","5.00","73.00","75.00","0.00","34.00","0.00","0.00","187.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("422","894319","K/10/05/13/1154","OPD","K","CB Health Insurance","4","10","05","M","43","2","2013","","No","2013-02-05","","","5.00","20.00","20.00","0.00","0.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("423","873923","K/10/06/31/08094/01","OPD","K","CB Health Insurance","4","10","06","M","23","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","37.50","0.00","0.00","42.50","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("424","882345","K/10/09/07/05394","OPD","K","CB Health Insurance","4","10","09","M","68","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","15.60","0.00","0.00","20.60","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("425","896303","K/10/12/26/04111","OPD","K","CB Health Insurance","4","10","12","F","43","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("426","029902","H/10/07/9/03906/01","OPD","H","CB Health Insurance","4","10","07","F","48","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","123.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("427","883903","Letter/31/01025","OPD","Letter","Health Care finance","4","10","06","F","43","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("428","896294","Prisoner/dns/53/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","58","2","2013","","No","2013-02-05","","","5.00","430.00","400.00","0.00","216.00","0.00","0.00","1051.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("429","826967","K/10/04/04/01355/07","OPD","K","CB Health Insurance","4","10","04","M","2","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","21.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("430","195053","K/10/04/27/00219","OPD","K","CB Health Insurance","4","10","04","M","73","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","67.20","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("431","894348","K/10/05/25/12085","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("432","665976","K/10/10/03/07538/02","OPD","K","CB Health Insurance","4","10","10","F","30","2","2013","","No","2013-02-05","","","5.00","26.00","75.00","0.00","38.40","0.00","0.00","144.40","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("433","896240","Letter/16//05986","OPD","Letter","Health Care finance","4","10","05","F","43","2","2013","","No","2013-02-05","","","5.00","23.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("434","896307","K/10/01/16/09348","OPD","K","CB Health Insurance","4","10","01","M","36","2","2013","","No","2013-02-05","","","5.00","100.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("435","894482","Prisoner/139/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","19","2","2013","","No","2013-02-05","","","5.00","0.00","80.00","0.00","22.00","0.00","0.00","107.00","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("436","259111","K/10/06/30/05726","OPD","K","CB Health Insurance","4","10","06","M","67","2","2013","","No","2013-02-05","","","5.00","0.00","0.00","0.00","674.40","0.00","0.00","679.40","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("437","194103","K/19/05/12/06273","OPD","K","CB Health Insurance","4","19","05","M","36","2","2013","","No","2013-02-05","","","0.00","0.00","0.00","40.00","0.00","0.00","0.00","40.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("438","893664","K/10/04/23/03363","IPD","K","CB Health Insurance","4","10","04","M","63","2","2013","","No","2013-02-05","Died","","5.00","250.00","0.00","0.00","1264.00","192.00","0.00","65.00","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("439","896296","Prisoner/55/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","45","2","2013","","No","2013-02-05","","","5.00","205.00","80.00","0.00","242.75","0.00","0.00","532.75","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("440","741934","K/10/06/25/11216/00","OPD","K","CB Health Insurance","4","10","06","M","32","2","2013","","No","2013-02-05","","","5.00","43.00","0.00","0.00","6.75","0.00","0.00","54.75","","2020-10-10","2020-11-09","50","0");
INSERT INTO treatment VALUES("441","896347","Refuge/1898/20","OPD","Refuge","Credit Service","8","02","D34","M","60","2","2013","","No","2013-02-05","","","5.00","315.00","0.00","0.00","169.00","0.00","0.00","489.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("442","896409","H/10/04/28/02658/01","OPD","H","CB Health Insurance","4","10","04","M","17","2","2013","","No","2013-02-06","","","5.00","116.00","0.00","0.00","299.90","0.00","0.00","65.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("443","857490","K/10/02/06/12077","IPD","K","CB Health Insurance","4","10","02","F","43","2","2013","","No","2013-01-15","Discharged","Better Healed","5.00","0.00","0.00","0.00","498.00","60.00","0.00","20.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("444","383795","K/10/04/29/02465/01","OPD","K","CB Health Insurance","4","10","04","M","42","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("445","368383","K/10/04/24/01876/02","OPD","K","CB Health Insurance","4","10","04","F","78","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","684.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("446","596434","K/19/06/24/01297","OPD","K","CB Health Insurance","4","19","06","M","43","2","2013","","No","2013-02-06","","","1.00","0.00","0.00","0.00","1920.00","0.00","0.00","1921.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("447","866844","K/10/05/08/05690/01","OPD","K","CB Health Insurance","4","10","05","F","34","2","2013","","No","2013-02-06","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("448","896417","Prisoner/DNS/57/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","40","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("449","896416","Prisoner/DNS/57/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","24","2","2013","","No","2013-02-06","","","5.00","23.00","0.00","0.00","0.00","0.00","0.00","28.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("450","727429","K/10/10/06/00386","OPD","K","CB Health Insurance","4","10","10","M","73","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("451","896454","K/10/09/02/12831","OPD","K","CB Health Insurance","4","10","09","M","33","2","2013","","No","2013-02-06","","","5.00","30.00","75.00","0.00","117.00","0.00","0.00","227.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("452","896153","Refuge/18/93/20","OPD","Refuge","Credit Service","8","02","D34","M","23","2","2013","","No","2013-02-06","","","5.00","30.00","150.00","0.00","248.00","0.00","0.00","433.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("453","883735","K/10/04/28/08534","OPD","K","CB Health Insurance","4","10","04","M","55","2","2013","","No","2013-02-06","","","5.00","0.00","80.00","0.00","15.12","0.00","0.00","65.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("454","719773","K/10/05/03/08394","OPD","K","CB Health Insurance","4","10","05","F","63","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","660.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("455","782723","K/19/02/05/05163","OPD","K","CB Health Insurance","4","19","02","M","63","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","67.80","0.00","0.00","72.80","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("456","090755","K/10/09/01/10211","OPD","K","CB Health Insurance","4","10","09","F","61","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","20.40","0.00","0.00","25.40","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("457","685884","Employee/276/19/2013","OPD","Employee","Credit Service","4","10","D29","M","30","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","36.00","0.00","0.00","41.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("458","894387","K/10/10/16/02953","IPD","K","CB Health Insurance","4","10","10","M","15","2","2013","","No","2013-02-06","Discharged","Better Healed","5.00","0.00","0.00","0.00","128.84","36.00","0.00","169.84","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("459","038136","K/10/09/01/05127/01","OPD","K","CB Health Insurance","4","10","09","F","35","2","2013","","No","2013-02-06","","","5.00","0.00","40.00","0.00","0.00","0.00","0.00","45.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("460","896345","H/09/D16/11/02649/01","IPD","H","CB Health Insurance","4","09","D16","F","58","2","2013","","No","2013-02-06","Discharged","Better Healed","5.00","30.00","0.00","80.00","0.00","36.00","0.00","115.00","","2020-10-10","2020-11-09","43","1");
INSERT INTO treatment VALUES("461","586931","K/10/05/03/04905","OPD","K","CB Health Insurance","4","10","05","M","51","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("462","604461","K/10/05/26/05630","OPD","K","CB Health Insurance","4","10","05","F","36","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("463","896259","K/10/02/26/04111/04","OPD","K","CB Health Insurance","4","10","02","F","10","2","2013","","No","2013-02-06","","","5.00","0.00","75.00","40.00","0.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("464","817437","H/10/07/31/00031","OPD","H","CB Health Insurance","4","10","07","F","59","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("465","015537","K/10/05/07/00739/01","OPD","K","CB Health Insurance","4","10","05","F","53","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("466","896426","K/10/05/19/09898","OPD","K","CB Health Insurance","4","10","05","M","55","2","2013","","No","2013-02-06","","","5.00","76.00","75.00","0.00","12.00","0.00","0.00","168.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("467","876451","K/19/06/39/03537","OPD","K","CB Health Insurance","4","19","06","M","43","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("468","876451","K/19/06/39/03537","OPD","K","CB Health Insurance","4","19","06","M","43","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("469","876451","K/19/06/39/03537","OPD","K","CB Health Insurance","4","19","06","M","43","2","2013","","No","2013-02-06","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","85.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("470","881274","Refuge/1274","OPD","Refuge","Credit Service","8","02","D37","F","3","2","2013","","No","2013-02-06","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("471","896475","K/10/05/07/02011","OPD","K","CB Health Insurance","4","10","05","M","8","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("472","896476","K/10/05/02/00228","OPD","K","CB Health Insurance","4","10","05","M","41","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("473","878366","K/10/06/40/02189/01","IPD","K","CB Health Insurance","4","10","06","M","11","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","15.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("474","885055","K/10/D01/14/09648","OPD","K","CB Health Insurance","4","10","D01","M","38","2","2013","","No","2013-02-06","","","5.00","86.00","75.00","0.00","5.30","0.00","0.00","263.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("475","589471","Prisoner/DNS57/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","20","2","2013","","No","2013-02-06","","","5.00","200.00","0.00","0.00","14.00","0.00","0.00","219.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("476","879112","K/10/04/24/14434/03","OPD","K","CB Health Insurance","4","10","04","M","43","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","12.60","0.00","0.00","65.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("477","640021","K/19/04/29/07316","OPD","K","CB Health Insurance","4","19","04","M","40","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","113.70","0.00","0.00","118.70","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("478","593221","H/10/07/31/00648/01","OPD","H","CB Health Insurance","4","10","07","F","68","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","34.20","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("479","879895","K/10/02/02/23093","OPD","K","CB Health Insurance","4","10","02","M","73","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","104.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("480","839556","Refuge/1879/20","OPD","Refuge","Credit Service","8","02","D34","M","10","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("481","838372","K/10/05/01/06200","OPD","K","CB Health Insurance","4","10","05","M","40","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","26.70","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("482","197667","K/10/06/33/01458/02","OPD","K","CB Health Insurance","4","10","06","F","33","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","182.25","0.00","0.00","187.25","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("483","884102","Employee/63204","OPD","Employee","Credit Service","4","10","D01","M","27","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","104.00","0.00","0.00","263.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("484","889328","H/10/09/02/05321/04","OPD","H","CB Health Insurance","4","10","09","M","5","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","15.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("485","566863","H/10/06/31/02682","OPD","H","CB Health Insurance","4","10","06","M","65","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","687.00","0.00","0.00","692.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("486","861986","Refuge/1894/20","OPD","Refuge","Credit Service","8","02","D34","M","7","2","2013","","No","2013-02-06","","","5.00","25.00","0.00","0.00","574.41","0.00","0.00","604.41","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("487","423187","K/10/05/08/09870/01","OPD","K","CB Health Insurance","4","10","05","F","68","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("488","896417","Prisoner/DNS/57/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","40","2","2013","","No","2013-02-06","","","5.00","23.00","0.00","40.00","0.00","0.00","0.00","68.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("489","191594","K/10/05/19/03754","OPD","K","CB Health Insurance","4","10","05","F","38","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","20.40","0.00","0.00","5.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("490","713731","K/10/02/25/18372","OPD","K","CB Health Insurance","4","10","02","M","53","2","2013","","No","2013-02-06","","","50.00","0.00","0.00","0.00","48.00","0.00","0.00","20.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("491","783514","K/10/12/09/11248/01","OPD","K","CB Health Insurance","4","10","12","F","68","2","2013","","No","2013-02-06","","","5.00","0.00","75.00","0.00","15.00","0.00","0.00","95.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("492","896150","K/09/D16/14/0210","OPD","K","CB Health Insurance","4","09","D16","M","0","2","2013","","No","2013-02-06","","","5.00","30.00","80.00","0.00","0.00","0.00","0.00","115.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("493","509982","K/10/05/19/01448","OPD","K","CB Health Insurance","4","10","05","F","38","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","7.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("494","896487","K/10/01/12/03119/06","OPD","K","CB Health Insurance","4","10","01","M","10","2","2013","","No","2013-02-06","","","5.00","73.00","75.00","0.00","25.00","0.00","0.00","30.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("495","892016","K/10/05/06/04036","OPD","K","CB Health Insurance","4","10","05","M","51","2","2013","","No","2013-02-06","","","5.00","10.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("496","896489","K/10/04/17/08840/01","OPD","K","CB Health Insurance","4","10","04","F","38","2","2013","","No","2013-02-06","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("497","890161","H/10/04/29/08793","OPD","H","CB Health Insurance","4","10","04","M","37","2","2013","","No","2013-02-06","","","5.00","20.00","0.00","0.00","36.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("498","896466","K/19/02/10/05708","IPD","K","CB Health Insurance","4","19","02","F","53","2","2013","","No","2013-02-06","Discharged","Better Healed","5.00","73.00","0.00","400.00","0.00","60.00","0.00","538.00","","2020-10-10","2020-11-09","48","1");
INSERT INTO treatment VALUES("499","875060","K/10/02/19/16284","OPD","K","CB Health Insurance","4","10","02","F","49","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","34.50","0.00","0.00","20.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("500","653891","Prisoner/DNs/5814/013","OPD","Prisoner","Credit Service","4","10","D29","M","62","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","21.25","0.00","0.00","26.25","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("501","653841","Prisoner/DNs/5814/013","OPD","Prisoner","Credit Service","4","10","D29","M","62","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","21.25","0.00","0.00","26.25","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("502","888744","Refuge/1898/20","IPD","Refuge","Credit Service","8","02","D34","F","16","2","2013","","No","2013-02-06","","","5.00","310.00","0.00","0.00","428.65","0.00","0.00","743.65","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("503","714794","Prisoner/DNS/58/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","35","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","28.50","0.00","0.00","33.50","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("504","00440","Prisoner/DNS/58/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","45","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("505","736442","Prisoner/DNS/58/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","62","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","29.60","0.00","0.00","34.60","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("506","896175","H/10/05/01/08989","OPD","H","CB Health Insurance","4","10","05","M","6","2","2013","","No","2013-02-06","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("507","484320","K/10/02/25/16815","OPD","K","CB Health Insurance","4","10","02","F","7","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","143.40","0.00","0.00","20.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("508","631640","K/10/D01/17/09309","OPD","K","CB Health Insurance","4","10","D01","F","18","2","2013","","No","2013-02-06","","","5.00","0.00","150.00","0.00","108.00","0.00","0.00","263.00","","2020-10-10","2020-11-09","55","0");
INSERT INTO treatment VALUES("509","751443","Employee/158/06","OPD","Employee","Credit Service","4","10","10","F","35","2","2013","","No","2013-02-06","","","5.00","0.00","45.00","0.00","92.10","0.00","0.00","142.10","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("510","899006","K/10/05/15/05724","OPD","K","CB Health Insurance","4","10","05","M","39","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","34","0");
INSERT INTO treatment VALUES("511","890484","K/10/05/20/07112","OPD","K","CB Health Insurance","4","10","05","M","55","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("512","895684","Refuge/1878/20","OPD","Refuge","Credit Service","8","02","D36","M","2","2","2013","","No","2013-02-06","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","85.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("513","469357","K/10/04/30/09005","OPD","K","CB Health Insurance","4","10","04","M","70","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","161.60","0.00","0.00","65.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("514","896488","Refuge/468/20","OPD","Refuge","Credit Service","8","02","D36","M","19","2","2013","","No","2013-02-06","","","5.00","30.00","75.00","40.00","0.00","0.00","0.00","150.00","","2020-10-10","2020-11-09","48","0");
INSERT INTO treatment VALUES("515","896174","K/10/05/10/11845","OPD","K","CB Health Insurance","4","10","05","M","9","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","4.50","0.00","0.00","5.00","","2020-10-10","2020-11-09","43","0");
INSERT INTO treatment VALUES("516","896156","K/10/10/06/01480/06","OPD","K","CB Health Insurance","4","10","10","F","10","2","2013","","No","2013-02-06","","","1.00","20.00","75.00","0.00","48.00","0.00","0.00","144.00","","2020-10-10","2020-11-09","45","0");
INSERT INTO treatment VALUES("517","896505","K/10/04/32/00884/02","OPD","K","CB Health Insurance","4","10","04","F","30","2","2013","","No","2013-02-06","","","5.00","6.00","0.00","0.00","36.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("518","889684","Prisoner/DNS/58/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","81","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","162.80","0.00","0.00","167.80","","2020-10-10","2020-11-09","11","0");
INSERT INTO treatment VALUES("519","889049","H/10/10/06/02268","OPD","H","CB Health Insurance","4","10","10","M","50","2","2013","","No","2013-02-06","","","5.00","30.00","0.00","60.00","0.00","0.00","0.00","95.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("520","896386","H/10/09/26/09526","OPD","H","CB Health Insurance","4","10","09","M","33","2","2013","","No","2013-02-06","","","5.00","80.00","0.00","0.00","0.00","0.00","0.00","85.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("521","895622","K/19/02/30/04051/04","OPD","K","CB Health Insurance","4","19","02","F","43","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","42.48","0.00","0.00","47.48","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("522","896451","K/19/D03/39/03537","OPD","K","CB Health Insurance","4","19","06","M","67","2","2013","","No","2013-02-06","","","5.00","50.00","0.00","0.00","94.00","0.00","0.00","149.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("523","896393","K/10/07/32/05027","OPD","K","CB Health Insurance","4","10","07","M","34","2","2013","","No","2013-02-06","","","5.00","50.00","0.00","400.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("524","896392","H/10/10/06/06291","OPD","H","CB Health Insurance","4","10","10","M","50","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","160.02","0.00","0.00","165.02","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("525","896535","K/19/02/30/04051/05","OPD","K","CB Health Insurance","4","19","02","F","1","2","2013","","No","2013-02-07","","","10.00","0.00","0.00","0.00","104.00","0.00","0.00","114.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("526","885674","H/10/10/21/07517","OPD","H","CB Health Insurance","4","10","10","M","61","2","2013","","No","2013-02-07","","","5.00","0.00","0.00","0.00","126.00","0.00","0.00","131.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("527","896547","H/10/04/07/03638/02","OPD","H","CB Health Insurance","4","10","04","F","64","2","2013","","No","2013-02-07","","","10.00","111.00","75.00","0.00","79.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("528","896571","K/10/05/24/04360/04","OPD","K","CB Health Insurance","4","10","05","F","20","2","2013","","No","2013-02-07","","","10.00","20.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("529","821208","K/10/15/02/00206","IPD","K","CB Health Insurance","4","10","15","M","50","2","2013","","No","2013-02-07","","","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("530","821208","K/10/15/02/00206","IPD","K","CB Health Insurance","4","10","15","M","50","2","2013","","No","2013-02-06","","","0.00","0.00","0.00","0.00","0.00","156.00","0.00","0.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("531","838231","H/10/08/1/0120376","OPD","H","CB Health Insurance","4","10","08","F","1","2","2013","","No","2013-02-07","","","5.00","0.00","0.00","0.00","149.89","0.00","0.00","154.89","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("532","896774","K/10/04/32/01946/11","OPD","K","CB Health Insurance","4","10","04","F","1","2","2013","","No","2013-02-07","","","10.00","93.00","0.00","0.00","172.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("533","895905","K/10/09/08/13617/01","OPD","K","CB Health Insurance","4","10","09","F","48","2","2013","","No","2013-02-07","Discharged","Better Healed","0.00","1.00","0.00","0.00","485.79","0.00","0.00","486.79","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("534","892945","H/19/08/11/001/02","OPD","H","CB Health Insurance","4","19","08","M","12","2","2013","","No","2013-02-06","","","0.00","0.00","0.00","60.00","32.00","0.00","0.00","92.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("535","119588","H/10/05/08/12320","IPD","H","CB Health Insurance","4","10","05","F","39","2","2013","","No","2013-02-07","Discharged","Better Healed","0.00","0.00","0.00","0.00","5303.00","204.00","0.00","5303.00","","2020-10-10","2020-11-09","44","1");
INSERT INTO treatment VALUES("536","873142","K/10/05/16/02327","IPD","K","CB Health Insurance","4","10","05","M","53","2","2013","","No","2013-02-06","","","0.00","0.00","0.00","0.00","0.00","276.00","0.00","5.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("537","858660","K/10/06/1/07014","OPD","K","CB Health Insurance","4","10","06","M","95","2","2013","","No","2013-02-07","","","0.00","120.00","0.00","0.00","266.00","0.00","0.00","386.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("538","896560","H/10/04/27/01717/06","OPD","H","CB Health Insurance","4","10","04","F","9","2","2013","","No","2013-02-07","","","10.00","20.00","0.00","0.00","75.20","0.00","0.00","65.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("539","866669","K/10/16/19/01070/01","OPD","K","CB Health Insurance","4","10","16","F","40","2","2013","","No","2013-02-07","","","0.00","20.00","0.00","0.00","434.00","0.00","0.00","454.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("540","896298","H/10/06/36/010973","OPD","H","CB Health Insurance","4","10","06","M","53","2","2013","","No","2013-02-06","","","0.00","0.00","0.00","0.00","88.00","0.00","0.00","88.00","","2020-10-10","2020-11-09","44","0");
INSERT INTO treatment VALUES("541","896780","H/10/07/25/03998/02","OPD","H","CB Health Insurance","4","10","07","F","5","2","2013","","No","2013-02-07","","","5.00","23.00","0.00","0.00","25.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","52","0");
INSERT INTO treatment VALUES("542","890752","K/10/04/09103423/02","OPD","K","CB Health Insurance","4","10","04","F","27","2","2013","","No","2013-02-08","","","5.00","0.00","0.00","0.00","70.00","0.00","0.00","65.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("543","896645","K/10/05/17/04206/02","OPD","K","CB Health Insurance","4","10","05","F","41","2","2013","","No","2013-02-08","","","5.00","70.00","0.00","0.00","50.00","0.00","0.00","5.00","","2020-10-10","2020-11-09","53","0");
INSERT INTO treatment VALUES("544","896702","K/09/08/18/00778/01","OPD","K","CB Health Insurance","4","09","08","F","62","2","2013","","No","2013-02-09","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("545","876294","K/10/04/20/14646","OPD","K","CB Health Insurance","4","10","04","M","16","2","2013","","No","2013-02-09","","","5.00","10.00","0.00","0.00","311.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("546","033249","K/10/02/32/05818","OPD","K","CB Health Insurance","4","10","02","M","58","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","691.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("547","597066","K/10/05/01/03137/02","OPD","K","CB Health Insurance","4","10","05","F","49","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("548","196295","K/10/02/0500554","OPD","K","CB Health Insurance","4","10","02","M","71","2","2013","","No","2013-02-09","","","5.00","0.00","40.00","0.00","0.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("549","127575","K/10/05/24/09375","OPD","K","CB Health Insurance","4","10","05","M","58","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","730.00","0.00","0.00","735.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("550","021010","H/10/07/26/02601","OPD","H","CB Health Insurance","4","10","07","M","40","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","107.20","0.00","0.00","112.20","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("551","840271","K/10/10/18/01076","OPD","K","CB Health Insurance","4","10","10","M","33","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","136.80","0.00","0.00","141.80","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("552","896830","H/10/10/03/01980","OPD","H","CB Health Insurance","4","10","10","M","45","2","2013","","No","2013-02-09","","","5.00","33.00","0.00","0.00","0.00","0.00","0.00","38.00","","2020-10-19","2020-11-18","34","0");
INSERT INTO treatment VALUES("553","883185","K/10/09/13/00593/01","OPD","K","CB Health Insurance","4","10","09","F","38","2","2013","","No","2013-02-09","","","5.00","45.00","0.00","0.00","585.60","0.00","0.00","635.60","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("554","761201","K/10/04/02/10903/01","OPD","K","CB Health Insurance","4","10","04","F","40","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","153.85","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("555","894646","Prisoner/DNS/40/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","20","2","2013","","No","2013-02-09","","","5.00","0.00","75.00","0.00","18.00","0.00","0.00","98.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("556","892405","K/10/15/19/00080/05","OPD","K","CB Health Insurance","4","10","15","M","17","2","2013","","No","2013-02-09","","","5.00","50.00","0.00","0.00","0.00","0.00","0.00","55.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("557","045381","H/10/04/26/0122/0","OPD","H","CB Health Insurance","4","10","04","M","49","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","120.75","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("558","219746","K/10/09/30/05506","OPD","K","CB Health Insurance","4","10","09","M","54","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","450.75","0.00","0.00","455.75","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("559","139388","H/10/07/9/04906","OPD","H","CB Health Insurance","4","10","07","M","65","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","104.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("560","895984","K/10/09/11882","OPD","K","CB Health Insurance","4","10","09","M","35","2","2013","","No","2013-02-09","","","5.00","160.00","572.30","0.00","1477.00","0.00","0.00","2214.30","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("561","075847","K/10/05/01/03137","OPD","K","CB Health Insurance","4","10","05","F","76","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","172.20","0.00","0.00","177.20","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("562","363995","K/10/05/17/04081","OPD","K","CB Health Insurance","4","10","05","M","68","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","730.00","0.00","0.00","735.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("563","847801","K/10/10/17/06342/01","OPD","K","CB Health Insurance","4","10","10","M","36","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","97.20","0.00","0.00","102.20","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("564","893446","K/10/04/32/09092","OPD","K","CB Health Insurance","4","10","04","M","55","2","2013","","No","2013-02-09","","","5.00","10.00","0.00","0.00","38.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("565","044584","K/10/05/05/24/03111","OPD","K","CB Health Insurance","4","10","05","M","76","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","660.00","0.00","0.00","665.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("566","582019","K/10/10/18/01076","OPD","K","CB Health Insurance","4","10","10","M","24","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","419.00","0.00","0.00","424.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("567","814234","K/19/04/30/12262","OPD","K","CB Health Insurance","4","19","04","M","50","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","40.00","0.00","0.00","45.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("568","896851","K/10/03/10/02536/05","OPD","K","CB Health Insurance","4","10","03","M","12","2","2013","","No","2013-02-09","","","5.00","88.00","0.00","40.00","0.00","0.00","0.00","133.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("569","896699","K/10/16/17/01515","OPD","K","CB Health Insurance","4","10","16","M","67","2","2013","","No","2013-02-09","","","5.00","90.00","75.00","60.00","0.00","0.00","0.00","230.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("570","896846","K/10/02/03/00783","OPD","K","CB Health Insurance","4","10","02","F","53","2","2013","","No","2013-02-09","","","5.00","73.00","75.00","40.00","0.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("571","890231","Employee/248/19/013","OPD","Employee","Credit Service","4","10","D29","F","17","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","42.00","0.00","0.00","47.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("572","776481","K/10/02/10/10244","OPD","K","CB Health Insurance","4","10","02","F","74","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("573","702343","K/10/05/01/0100288/02","OPD","K","CB Health Insurance","4","10","05","F","41","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","157.00","0.00","0.00","162.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("574","896854","H/10/07/26/04744","OPD","H","CB Health Insurance","4","10","07","F","40","2","2013","","No","2013-02-09","","","5.00","0.00","80.00","0.00","22.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("575","800685","K/10/04/0608940","OPD","K","CB Health Insurance","4","10","04","M","43","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("576","896855","K/10/04/05/03543","OPD","K","CB Health Insurance","4","10","04","M","74","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("577","896679","K/10/04/10/01573/02","OPD","K","CB Health Insurance","4","10","04","F","60","2","2013","","No","2013-02-09","","","5.00","0.00","400.00","0.00","13.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("578","855676","K/10/04/22/12885/01","OPD","K","CB Health Insurance","4","10","04","F","41","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","276.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("579","198858","K/10/04/13/00827/01","OPD","K","CB Health Insurance","4","10","04","M","60","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","894.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("580","896991","K/10/05/17/06125","OPD","K","CB Health Insurance","4","10","05","F","38","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","97.80","0.00","0.00","102.80","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("581","896789","H/10/05/01/08862/01","OPD","H","CB Health Insurance","4","10","05","F","27","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("582","472375","H/10/04/27/09310","OPD","H","CB Health Insurance","4","10","04","F","38","2","2013","","No","2013-02-09","","","5.00","30.00","0.00","40.00","647.40","0.00","0.00","65.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("583","878720","K/19/02/17/001182","OPD","K","CB Health Insurance","4","19","02","M","47","2","2013","","No","2013-02-09","","","5.00","360.00","0.00","0.00","248.00","0.00","0.00","613.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("584","772599","K/10/04/27/03530/02","OPD","K","CB Health Insurance","4","10","04","F","67","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","22.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("585","712642","K/10/02/01/09716/01","OPD","K","CB Health Insurance","4","10","02","F","32","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","104.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("586","023167","K/10/09/30/01887","OPD","K","CB Health Insurance","4","10","09","M","59","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","767.00","0.00","0.00","772.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("587","852697","K/10/02/02/17028","OPD","K","CB Health Insurance","4","10","02","F","53","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","18.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("588","687630","K/10/02/31/20738","OPD","K","CB Health Insurance","4","10","02","F","52","2","2013","","No","2013-02-09","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("589","033886","K/10/04/03/02023/01","OPD","K","CB Health Insurance","4","10","04","M","46","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","338.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("590","852697","K/10/02/02/17028","OPD","K","CB Health Insurance","4","10","02","F","53","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("591","836331","K/10/07/27/05014","OPD","K","CB Health Insurance","4","10","07","M","51","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","96.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("592","896829","K/19/02/06/03535/01","OPD","K","CB Health Insurance","4","19","02","F","26","2","2013","","No","2013-02-09","","","5.00","5.00","75.00","0.00","0.00","0.00","0.00","85.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("593","039575","K/10/04/01/00151/01","OPD","K","CB Health Insurance","4","10","04","F","61","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","297.50","0.00","0.00","65.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("594","019686","K/10/05/22/12078","OPD","K","CB Health Insurance","4","10","05","M","16","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","258.00","0.00","0.00","263.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("595","884023","K/10/D31/04/14016","OPD","K","CB Health Insurance","4","10","D31","M","46","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","74.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("596","895783","K/10/06/26/011712","IPD","K","CB Health Insurance","4","10","06","M","70","2","2013","","No","2013-02-09","Discharged","Better Healed","5.00","260.00","0.00","0.00","95.00","84.00","0.00","444.00","","2020-10-19","2020-11-18","45","1");
INSERT INTO treatment VALUES("597","719323","K/10/11/06/01290","OPD","K","CB Health Insurance","4","10","11","M","53","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","28.80","0.00","0.00","33.80","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("598","447979","K/10/15/170031217329","OPD","K","CB Health Insurance","4","10","15","F","45","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","660.00","0.00","0.00","665.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("599","896444","K/10/15/16/00006/04","OPD","K","CB Health Insurance","4","10","15","F","12","2","2013","","No","2013-02-09","","","5.00","3.00","0.00","0.00","0.00","0.00","0.00","8.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("600","894268","K/10/D23/20/00535/04","OPD","K","CB Health Insurance","4","10","D23","M","8","2","2013","","No","2013-02-09","","","5.00","20.00","60.00","0.00","0.00","0.00","0.00","85.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("601","516394","K/10/08/2906056","OPD","K","CB Health Insurance","4","10","08","M","50","2","2013","","No","2013-02-09","","","5.00","0.00","75.00","0.00","93.00","0.00","0.00","173.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("602","896801","K/10/06/36/00176/01","IPD","K","CB Health Insurance","4","10","06","F","51","2","2013","","No","2013-02-09","","","5.00","78.00","80.00","0.00","0.00","0.00","0.00","163.00","","2020-10-19","2020-11-18","48","1");
INSERT INTO treatment VALUES("603","565011","K/10/09/24/01088","OPD","K","CB Health Insurance","4","10","09","M","68","2","2013","","No","2013-02-09","","","5.00","40.00","0.00","0.00","30.00","0.00","0.00","75.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("604","896514","H/10/04/09/04530/01","OPD","H","CB Health Insurance","4","10","04","F","18","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","23.99","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("605","896838","K/10/05/05/05/06562","OPD","K","CB Health Insurance","4","10","05","M","36","2","2013","","No","2013-02-09","","","5.00","33.00","75.00","0.00","101.36","0.00","0.00","214.36","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("606","896876","Letter/05/002576","OPD","Letter","Health Care finance","4","10","03","F","60","2","2013","","No","2013-02-09","","","5.00","0.00","198.00","0.00","0.00","0.00","0.00","203.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("607","896724","K/10/12/0911259/07","OPD","K","CB Health Insurance","4","10","12","F","43","2","2013","","No","2013-02-09","","","5.00","0.00","150.00","0.00","0.00","0.00","0.00","155.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("608","889053","K/10/05/24/04783/02","OPD","K","CB Health Insurance","4","10","05","F","21","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","100.80","0.00","0.00","105.80","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("609","793208","K/10/05/23/10942","OPD","K","CB Health Insurance","4","10","05","F","28","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","465.00","0.00","0.00","470.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("610","284285","K/10/02/13/00363","OPD","K","CB Health Insurance","4","10","02","M","63","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","920.00","0.00","0.00","20.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("611","896841","K/10/01/24/05724","OPD","K","CB Health Insurance","4","10","01","F","70","2","2013","","No","2013-02-09","","","5.00","95.00","150.00","0.00","0.00","0.00","0.00","30.00","","2020-10-19","2020-11-18","43","0");
INSERT INTO treatment VALUES("612","313547","K/10/06/31/01092/01","OPD","K","CB Health Insurance","4","10","06","F","38","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","167.00","0.00","0.00","172.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("613","896748","K/10/03/13/0556/8","OPD","K","CB Health Insurance","4","10","03","M","1","2","2013","","No","2013-02-09","","","5.00","25.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("614","370911","H/10/06/27/08891/01","OPD","H","CB Health Insurance","4","10","06","M","46","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","205.00","0.00","0.00","210.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("615","741354","K/10/06/30/05418/01","OPD","K","CB Health Insurance","4","10","06","F","44","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("616","896905","K/10/12/25/04010/04","OPD","K","CB Health Insurance","4","10","12","M","12","2","2013","","No","2013-02-09","","","5.00","28.00","0.00","0.00","0.00","0.00","0.00","33.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("617","587980","Employee/0942/0036/2013","OPD","Employee","Credit Service","7","145","D38","M","32","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("618","033873","K/10/04/27/07524/04","OPD","K","CB Health Insurance","4","10","04","M","68","2","2013","","No","2013-02-09","","","0.00","0.00","0.00","0.00","282.20","0.00","0.00","65.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("619","707988","K/10/04/28/01258/03","OPD","K","CB Health Insurance","4","10","04","M","23","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","299.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("620","702380","K/10/04/11/05547","OPD","K","CB Health Insurance","4","10","04","M","58","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","231.20","0.00","0.00","65.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("621","613732","K/10/04/3/03297","OPD","K","CB Health Insurance","4","10","04","F","49","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","129.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("622","896874","K/10/15/10/007201","OPD","K","CB Health Insurance","4","10","15","M","60","2","2013","","No","2013-02-09","","","5.00","73.00","75.00","0.00","0.00","0.00","0.00","153.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("623","872652","Employee/1/9/2013","OPD","Employee","Credit Service","4","10","CBE-Main","M","23","2","2013","","No","2013-02-08","","","5.00","0.00","400.00","0.00","1471.00","0.00","0.00","1876.00","","2020-10-19","2020-11-18","45","1");
INSERT INTO treatment VALUES("624","896880","H/10/16/07/00417/02","OPD","H","CB Health Insurance","4","10","16","M","22","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("625","896880","H/10/16/07/00417/02","OPD","H","CB Health Insurance","4","10","16","M","22","2","2013","","No","2013-02-09","","","5.00","205.00","0.00","0.00","27.80","0.00","0.00","237.80","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("626","809847","K/10/06/38/07459","OPD","K","CB Health Insurance","4","10","06","M","57","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","48.00","0.00","0.00","53.00","","2020-10-19","2020-11-18","52","0");
INSERT INTO treatment VALUES("627","896920","K/10/07/14/05333","OPD","K","CB Health Insurance","4","10","07","M","71","2","2013","","No","2013-02-09","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-19","2020-11-18","48","0");
INSERT INTO treatment VALUES("628","896261","H/10/07/35/05242","OPD","H","CB Health Insurance","4","10","07","M","29","2","2013","","No","2013-02-09","","","5.00","106.00","0.00","0.00","30.70","0.00","0.00","5.00","","2020-10-19","2020-11-18","45","0");
INSERT INTO treatment VALUES("629","896802","K/10/12/04/09025/04","OPD","K","CB Health Insurance","4","10","12","M","43","2","2013","","No","2013-02-09","","","5.00","23.00","0.00","0.00","0.00","0.00","0.00","28.00","","2020-10-19","2020-11-18","55","0");
INSERT INTO treatment VALUES("630","896882","K/10/08/31/012027","OPD","K","CB Health Insurance","4","10","08","M","13","2","2013","","No","2013-02-09","","","5.00","195.00","0.00","0.00","0.00","0.00","0.00","200.00","","2020-10-19","2020-11-18","55","0");
INSERT INTO treatment VALUES("631","896745","H/10/D35/03/05606/02","OPD","H","CB Health Insurance","4","10","D35","M","43","2","2013","","No","2013-02-09","","","5.00","61.00","0.00","40.00","176.00","0.00","0.00","282.00","","2020-10-19","2020-11-18","55","0");
INSERT INTO treatment VALUES("632","896930","K/10/04/11/02675/08","OPD","K","CB Health Insurance","4","10","04","M","6","2","2013","","No","2013-02-09","","","5.00","20.00","0.00","0.00","88.00","0.00","0.00","65.00","","2020-10-19","2020-11-18","55","0");
INSERT INTO treatment VALUES("633","896940","K/10/09/21/04708/1","OPD","K","CB Health Insurance","4","10","09","M","65","2","2013","","No","2013-02-09","","","5.00","210.00","400.00","0.00","24.00","0.00","0.00","639.00","","2020-10-19","2020-11-18","55","0");
INSERT INTO treatment VALUES("634","896997","K/10/05/01/04283/04","OPD","K","CB Health Insurance","4","10","05","F","18","2","2013","","No","2013-02-10","","","5.00","0.00","100.00","0.00","0.00","0.00","0.00","105.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("635","840326","Employee/2120/0039/2013","OPD","Employee","Credit Service","7","145","D38","M","43","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("636","896990","K/10/05/20/04116","OPD","K","CB Health Insurance","4","10","05","M","65","2","2013","","No","2013-02-10","","","5.00","108.00","0.00","0.00","16.00","0.00","0.00","129.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("637","896998","K/10/05/21/010739","OPD","K","CB Health Insurance","4","10","05","F","35","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("638","896994","K/10/02/07/14561","OPD","K","CB Health Insurance","4","10","02","M","31","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","40.00","0.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("639","897073","K/10/04/28/12356","OPD","K","CB Health Insurance","4","10","04","M","46","2","2013","","No","2013-02-10","","","5.00","106.00","0.00","0.00","81.80","0.00","0.00","65.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("640","875146","K/09/03/16/04129/14","OPD","K","CB Health Insurance","4","09","03","M","43","2","2013","","No","2013-02-10","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","85.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("641","897078","K/10/05/15/05724","OPD","K","CB Health Insurance","4","10","05","F","29","2","2013","","No","2013-02-10","","","5.00","30.00","0.00","40.00","0.00","0.00","0.00","75.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("642","622367","K/10/12/00/08285/03","OPD","K","CB Health Insurance","4","10","12","M","43","2","2013","","No","2013-02-10","","","5.00","0.00","75.00","60.00","0.00","0.00","0.00","140.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("643","897003","K/10/07/20/06628/01","OPD","K","CB Health Insurance","4","10","07","M","18","2","2013","","No","2013-02-10","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("644","673544","K/10/04/11/00465/01","OPD","K","CB Health Insurance","4","10","04","F","50","2","2013","","No","2013-02-10","","","5.00","10.00","0.00","0.00","296.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("645","427270","K/10/04/27/01276/01","OPD","K","CB Health Insurance","4","10","04","M","38","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","398.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("646","669765","K/10/02/38/10712","OPD","K","CB Health Insurance","4","10","02","F","32","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","2.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("647","841081","K/10/02/24/20430","OPD","K","CB Health Insurance","4","10","02","F","45","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("648","895861","H/10/07/6/05625","OPD","H","CB Health Insurance","4","10","07","M","73","2","2013","","No","2013-02-10","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("649","896903","K/10/15/01/00251/00","OPD","K","CB Health Insurance","4","10","15","F","41","2","2013","","No","2013-02-10","","","5.00","70.00","0.00","0.00","0.00","0.00","0.00","75.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("650","694405","Prisoner/63/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","43","2","2013","","No","2013-02-10","","","5.00","28.00","0.00","0.00","0.00","0.00","0.00","33.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("651","897008","Prisoner/DNS?64/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","45","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","40.00","130.00","0.00","0.00","175.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("652","896965","K/10/15/08/1000/08","OPD","K","CB Health Insurance","4","10","15","M","40","2","2013","","No","2013-02-10","","","5.00","0.00","75.00","0.00","48.00","0.00","0.00","128.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("653","013412","K/10/09/01/00730","OPD","K","CB Health Insurance","4","10","09","M","36","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","551.10","0.00","0.00","556.10","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("654","890722","Prisoner/DNS/64/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","28","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","202.80","0.00","0.00","207.80","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("655","887794","K/10/06/10/02532/02","OPD","K","CB Health Insurance","4","10","06","F","19","2","2013","","No","2013-02-10","","","5.00","70.00","0.00","0.00","0.00","0.00","0.00","75.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("656","567383","K/10/01/05/03090/","OPD","K","CB Health Insurance","4","10","01","M","68","2","2013","","No","2013-02-10","","","5.00","120.00","0.00","0.00","590.00","0.00","0.00","30.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("657","836583","K/10/04/27/14383/06","OPD","K","CB Health Insurance","4","10","04","M","5","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","60.00","0.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("658","848219","K/10/05/01/00037","OPD","K","CB Health Insurance","4","10","05","M","57","2","2013","","No","2013-02-10","","","5.00","185.00","0.00","0.00","0.00","0.00","0.00","190.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("659","037187","Employee/57/2012","OPD","Employee","Credit Service","4","10","JIT","F","28","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","388.50","0.00","0.00","393.50","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("660","837824","K/10/10/24/00575","OPD","K","CB Health Insurance","4","10","10","M","68","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","150.00","0.00","0.00","155.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("661","717302","H/10/04/01/07977/02","OPD","H","CB Health Insurance","4","10","04","M","40","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","76.40","0.00","0.00","65.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("662","586242","K/10/D32/35/09124","OPD","K","CB Health Insurance","4","10","D32","M","43","2","2013","","No","2013-02-10","","","5.00","88.00","0.00","0.00","0.00","0.00","0.00","93.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("663","896908","K/10/06/39/08834/04","OPD","K","CB Health Insurance","4","10","06","F","17","2","2013","","No","2013-02-10","","","5.00","58.00","0.00","0.00","0.00","0.00","0.00","63.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("664","897018","K/10/05/08/03210","OPD","K","CB Health Insurance","4","10","05","M","43","2","2013","","No","2013-02-10","","","5.00","100.00","20.00","0.00","14.00","0.00","0.00","139.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("665","897089","K/10/04/01/11984/08","OPD","K","CB Health Insurance","4","10","04","F","15","2","2013","","No","2013-02-10","","","5.00","38.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("666","897094","Employee/hn/91/19/013","OPD","Employee","Credit Service","4","10","D29","F","18","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("667","526946","Employee/158/06","OPD","Employee","Credit Service","4","10","D29","F","32","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","468.50","0.00","0.00","473.50","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("668","649673","Prisoner/DNS/64/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","27","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","20.00","0.00","0.00","25.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("669","562513","K/10/10/15/0154/06","OPD","K","CB Health Insurance","4","10","10","M","21","2","2013","","No","2013-02-10","","","4.00","0.00","0.00","0.00","591.00","0.00","0.00","595.00","","2020-10-20","2020-11-19","50","1");
INSERT INTO treatment VALUES("670","899157","H/10/02/17/04812","OPD","H","CB Health Insurance","4","10","02","M","54","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","248.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("671","547666","H/10/10/25/07912","OPD","H","CB Health Insurance","4","10","10","M","15","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","80.85","0.00","0.00","85.85","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("672","560642","Prisoner/63/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","48","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","166.00","0.00","0.00","171.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("673","889238","K/19/06/32/01205","OPD","K","CB Health Insurance","4","19","06","M","65","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("674","792272","H/10/04/25/0020/01","OPD","H","CB Health Insurance","4","10","04","F","39","2","2013","","No","2013-02-10","","","5.00","20.00","0.00","0.00","295.20","0.00","0.00","65.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("675","239212","K/10/07/9/01114/02","OPD","K","CB Health Insurance","4","10","07","M","20","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","260.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("676","897143","K/10/05/26/03811","OPD","K","CB Health Insurance","4","10","05","M","51","2","2013","","No","2013-02-10","","","5.00","88.00","0.00","0.00","0.00","0.00","0.00","93.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("677","022613","H/10/04/25/09020/00","OPD","H","CB Health Insurance","4","10","04","M","41","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","313.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("678","240070","K/10/09/19/00943","OPD","K","CB Health Insurance","4","10","09","M","49","2","2013","","No","2013-02-10","","","5.00","10.00","0.00","0.00","959.00","0.00","0.00","974.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("679","866540","K/10/09/14/07663","OPD","K","CB Health Insurance","4","10","09","M","43","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("680","891853","K/10/10/19/04715","OPD","K","CB Health Insurance","4","10","10","F","25","2","2013","","No","2013-02-10","","","5.00","48.00","0.00","0.00","0.00","0.00","0.00","53.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("681","899116","K/10/09/11/00044/08","OPD","K","CB Health Insurance","4","10","09","M","29","2","2013","","No","2013-02-10","","","5.00","0.00","40.00","0.00","120.00","0.00","0.00","165.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("682","897145","K/10/05/01/10926","OPD","K","CB Health Insurance","4","10","05","M","51","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("683","383573","K/10/09/01/00720/01","OPD","K","CB Health Insurance","4","10","09","M","51","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","28.80","0.00","0.00","33.80","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("684","701591","K/10/01/16/02558","OPD","K","CB Health Insurance","4","10","01","M","62","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","208.00","0.00","0.00","30.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("685","878197","K/10/04/08/01393/01","OPD","K","CB Health Insurance","4","10","04","F","35","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("686","026702","K/10/05/15/02406","OPD","K","CB Health Insurance","4","10","05","M","46","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","6.00","0.00","0.00","11.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("687","846657","K/10/10/19/00720","OPD","K","CB Health Insurance","4","10","10","M","65","2","2013","","No","2013-02-10","","","5.00","208.00","0.00","0.00","18.50","0.00","0.00","231.50","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("688","889140","H/10/09/09/03333","OPD","H","CB Health Insurance","4","10","09","M","48","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("689","895763","K/10/10/25/04978/02","OPD","K","CB Health Insurance","4","10","10","F","28","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","4.00","0.00","0.00","9.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("690","897106","K/10/04/07/07509","OPD","K","CB Health Insurance","4","10","04","M","48","2","2013","","No","2013-02-10","","","5.00","35.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("691","894717","K/10/07/19/06625/01","OPD","K","CB Health Insurance","4","10","07","F","45","2","2013","","No","2013-02-10","","","5.00","20.00","0.00","0.00","276.80","0.00","0.00","5.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("692","523154","K/10/02/28/14065","OPD","K","CB Health Insurance","4","10","02","M","64","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","111.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("693","897167","H/10/11/01/06196","OPD","H","CB Health Insurance","4","10","11","F","35","2","2013","","No","2013-02-10","","","5.00","120.00","75.00","0.00","0.00","0.00","0.00","200.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("694","897005","K/10/05/04/02280","OPD","K","CB Health Insurance","4","10","05","M","41","2","2013","","No","2013-02-10","","","5.00","58.00","0.00","0.00","15.12","0.00","0.00","78.12","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("695","896967","K/10/10/15/00923/01","OPD","K","CB Health Insurance","4","10","10","F","34","2","2013","","No","2013-02-10","","","5.00","75.00","75.00","0.00","0.00","0.00","0.00","155.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("696","897172","H/10/11/17/01126/01","OPD","H","CB Health Insurance","4","10","11","M","43","2","2013","","No","2013-02-10","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","35.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("697","076823","K/10/09/03/20930","OPD","K","CB Health Insurance","4","10","09","F","43","2","2013","","No","2013-02-10","","","5.00","75.00","0.00","0.00","40.00","0.00","0.00","120.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("698","897116","K/10/08/38/03050","OPD","K","CB Health Insurance","4","10","08","M","53","2","2013","","No","2013-02-10","","","5.00","200.00","0.00","0.00","0.00","0.00","0.00","205.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("699","570752","K/10/15/13/00134","OPD","K","CB Health Insurance","4","10","15","M","49","2","2013","","No","2013-02-10","","","5.00","98.00","80.00","0.00","31.80","0.00","0.00","214.80","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("700","897107","K/10/04/08/09191/05","OPD","K","CB Health Insurance","4","10","04","F","11","2","2013","","No","2013-02-10","","","5.00","30.00","0.00","0.00","589.15","0.00","0.00","65.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("701","897177","K/10/05/08/01021","OPD","K","CB Health Insurance","4","10","05","M","36","2","2013","","No","2013-02-10","","","5.00","0.00","80.00","0.00","27.00","0.00","0.00","112.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("702","876931","K/10/09/20/08332","OPD","K","CB Health Insurance","4","10","09","M","58","2","2013","","No","2013-02-10","","","5.00","10.00","0.00","0.00","330.00","0.00","0.00","345.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("703","897150","Letter/01/16292","OPD","Letter","Health Care finance","4","19","04","M","32","2","2013","","No","2013-02-10","","","5.00","30.00","60.00","0.00","0.00","0.00","0.00","95.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("704","876181","Prisoner/1840/20","OPD","Prisoner","Credit Service","8","02","D34","M","3","2","2013","","No","2013-02-10","","","5.00","40.00","75.00","0.00","0.00","0.00","0.00","120.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("705","356610","Letter/200163","OPD","Letter","Health Care finance","4","10","05","M","27","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","168.00","0.00","0.00","173.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("706","841080","K/10/02/24/20430","OPD","K","CB Health Insurance","4","10","02","F","45","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","60.00","618.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("707","897108","K/10/11/17/06194","OPD","K","CB Health Insurance","4","10","11","F","42","2","2013","","No","2013-02-10","","","5.00","23.00","75.00","0.00","0.00","0.00","0.00","103.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("708","896958","K/10/05/11/010532/01","OPD","K","CB Health Insurance","4","10","05","F","38","2","2013","","No","2013-02-10","","","5.00","190.00","0.00","0.00","20.00","0.00","0.00","215.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("709","523058","K/10/02/27/10052","OPD","K","CB Health Insurance","4","10","02","M","69","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("710","896812","K/10/05/25/01865","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","5.00","0.00","0.00","10.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("711","867767","Letter/8/10463","OPD","Letter","Health Care finance","4","10","11","M","21","2","2013","","No","2013-02-10","","","5.00","33.00","75.00","0.00","60.00","0.00","0.00","173.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("712","886370","Refuge/1863/20","OPD","Refuge","Credit Service","8","02","D34","M","13","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","56.00","0.00","0.00","61.00","","2020-10-20","2020-11-19","34","0");
INSERT INTO treatment VALUES("713","897155","K/10/09/2/05208/01","OPD","K","CB Health Insurance","4","10","09","F","38","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","13.50","0.00","0.00","18.50","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("714","657838","Employee/2819/0034/2013","OPD","Employee","Credit Service","7","145","D38","F","36","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","209.00","0.00","0.00","214.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("715","896814","H/10/07/29/06370","OPD","H","CB Health Insurance","4","10","07","M","61","2","2013","","No","2013-02-10","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","45","0");
INSERT INTO treatment VALUES("716","472391","K/10/07/27/00997","OPD","K","CB Health Insurance","4","10","07","M","29","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","426.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","48","0");
INSERT INTO treatment VALUES("717","897160","H/10/04/31/04769","OPD","H","CB Health Insurance","4","10","04","F","43","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","32.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("718","897158","K/19/05/31/05441","OPD","K","CB Health Insurance","4","19","05","F","33","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("719","897109","Employee/0022/08","OPD","Employee","Credit Service","4","10","D42","M","31","2","2013","","No","2013-02-10","","","5.00","150.00","0.00","0.00","0.00","0.00","0.00","155.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("720","867583","K/10/09/03/06223","OPD","K","CB Health Insurance","4","10","09","M","59","2","2013","","No","2013-02-10","","","5.00","50.00","0.00","0.00","388.80","0.00","0.00","443.80","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("721","897016","K/10/06/31/06981/01","OPD","K","CB Health Insurance","4","10","06","F","44","2","2013","","No","2013-02-10","","","5.00","28.00","0.00","0.00","10.00","0.00","0.00","43.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("722","876949","K/19/01/10/06854/01","OPD","K","CB Health Insurance","4","19","01","F","55","2","2013","","No","2013-02-10","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-20","2020-11-19","50","0");
INSERT INTO treatment VALUES("723","897017","K/19/05/32/03356/02","OPD","K","CB Health Insurance","4","19","05","F","52","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","40.00","0.00","0.00","0.00","45.00","","2020-10-20","2020-11-19","43","0");
INSERT INTO treatment VALUES("724","866467","K/10/12/09/12500/03","IPD","K","CB Health Insurance","4","10","12","F","43","2","2013","","No","2013-02-10","Discharged","Better Healed","5.00","36.00","0.00","0.00","28.00","72.00","0.00","69.00","","2020-10-20","2020-11-19","45","1");
INSERT INTO treatment VALUES("725","897162","K/19/08/01/0001","OPD","K","CB Health Insurance","4","19","08","F","37","2","2013","","No","2013-02-10","","","5.00","120.00","0.00","0.00","30.00","0.00","0.00","155.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("726","895824","K/10/05/26/09971","OPD","K","CB Health Insurance","4","10","05","F","22","2","2013","","No","2013-02-10","","","0.00","370.00","0.00","0.00","645.50","0.00","0.00","1015.50","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("727","887633","K/19/04/29/07507/04","OPD","K","CB Health Insurance","4","19","04","M","14","2","2013","","No","2013-02-10","","","0.00","18.00","75.00","0.00","1105.40","0.00","0.00","1198.40","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("728","879878","K/10/16/16/03814/01","OPD","K","CB Health Insurance","4","10","16","F","27","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","53.00","0.00","0.00","53.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("729","895685","Refuge/1875/20","OPD","Refuge","Credit Service","8","02","D34","M","8","2","2013","","No","2013-02-10","","","5.00","35.00","75.00","0.00","0.00","0.00","0.00","115.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("730","894008","K/10/02/14/195","IPD","K","CB Health Insurance","4","10","02","M","33","2","2013","","No","2013-02-10","Discharged","Better Healed","0.00","20.00","75.00","0.00","555.00","204.00","100.00","20.00","","2020-10-20","2020-11-19","44","1");
INSERT INTO treatment VALUES("731","770553","K/09/07/05/00286/03","OPD","K","CB Health Insurance","4","09","07","M","4","2","2013","","No","2013-02-10","","","5.00","145.00","0.00","0.00","62.00","0.00","0.00","212.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("732","894910","H/10/04/17/10858/05","OPD","H","CB Health Insurance","4","10","04","M","9","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","36.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("733","884589","K/10/09/01/04932","IPD","K","CB Health Insurance","4","10","09","F","30","2","2013","","No","2013-02-10","Discharged","Better Healed","0.00","0.00","0.00","0.00","7.00","204.00","0.00","7.00","","2020-10-20","2020-11-19","44","1");
INSERT INTO treatment VALUES("734","897118","K/10/09/03/10930","OPD","K","CB Health Insurance","4","10","09","F","266","2","2013","","No","2013-02-10","","","10.00","0.00","0.00","0.00","138.00","0.00","0.00","148.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("735","887492","K/19/08/08/0001/01","OPD","K","CB Health Insurance","4","19","08","F","37","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","215.16","0.00","0.00","215.16","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("736","895901","K/10/08/05/00838","IPD","K","CB Health Insurance","4","10","08","M","63","2","2013","","No","2013-02-10","Discharged","Better Healed","0.00","178.00","75.00","0.00","151.00","48.00","0.00","452.00","","2020-10-20","2020-11-19","44","1");
INSERT INTO treatment VALUES("737","894048","K/10/05/12/09634","IPD","K","CB Health Insurance","4","10","05","M","38","2","2013","","No","2013-02-10","Discharged","Better Healed","0.00","0.00","0.00","0.00","8.00","168.00","160.00","336.00","","2020-10-20","2020-11-19","44","1");
INSERT INTO treatment VALUES("738","896930","K/10/04/11/02675/08","OPD","K","CB Health Insurance","4","10","04","M","6","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","28.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("739","885051","K/10/04/09/12062/08","OPD","K","CB Health Insurance","4","10","04","M","1","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","65.90","0.00","0.00","65.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("740","897213","Refuge/1932/20","OPD","Refuge","Credit Service","8","02","D34","M","38","2","2013","","No","2013-02-10","","","10.00","205.00","0.00","0.00","261.57","0.00","0.00","476.57","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("741","896679","K/10/04/10/01573/02","OPD","K","CB Health Insurance","4","10","04","F","60","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","58.00","0.00","0.00","65.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("742","609972","K/10/04/31/00536/04","IPD","K","CB Health Insurance","4","10","04","M","15","2","2013","","No","2013-02-10","Discharged","Better Healed","0.00","120.00","0.00","0.00","191.00","48.00","0.00","65.00","","2020-10-20","2020-11-19","44","1");
INSERT INTO treatment VALUES("743","897121","K/10/05/09/010008/01","OPD","K","CB Health Insurance","4","10","05","F","37","2","2013","","No","2013-02-10","","","10.00","200.00","0.00","0.00","0.00","0.00","0.00","210.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("744","895248","K/10/10/24/00515/03","OPD","K","CB Health Insurance","4","10","10","F","18","2","2013","","No","2013-02-10","","","0.00","40.00","0.00","0.00","328.00","0.00","0.00","368.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("745","894927","K/10/01/02/01335/01","IPD","K","CB Health Insurance","4","10","01","M","31","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","28.00","0.00","0.00","30.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("746","888744","Refuge/1898/20","IPD","Refuge","Credit Service","8","02","D34","F","16","2","2013","","No","2013-02-10","","","0.00","140.00","0.00","0.00","212.00","0.00","0.00","352.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("747","897130","K/10/02/06/17760","OPD","K","CB Health Insurance","4","10","02","F","65","2","2013","","No","2013-02-10","","","10.00","40.00","0.00","0.00","90.00","0.00","0.00","20.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("748","896298","H/10/06/36/010973","OPD","H","CB Health Insurance","4","10","06","M","53","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","32.00","0.00","0.00","32.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("749","882561","Employee/1830/20","OPD","Employee","Credit Service","8","02","D34","F","35","2","2013","","No","2013-02-10","","","0.00","0.00","0.00","0.00","60.00","0.00","0.00","60.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("750","897211","K/10/06/11/02450/01","IPD","K","CB Health Insurance","4","10","06","F","25","2","2013","","No","2013-02-10","","","10.00","35.00","0.00","0.00","312.00","0.00","0.00","357.00","","2020-10-20","2020-11-19","44","0");
INSERT INTO treatment VALUES("751","897202","K/10/05/09/06978/01","OPD","K","CB Health Insurance","4","10","05","F","32","2","2013","","No","2013-02-11","","","5.00","50.00","75.00","0.00","27.00","0.00","0.00","157.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("752","899114","K/19/06/40/07107","IPD","K","CB Health Insurance","4","19","06","M","70","3","2013","","No","2013-03-11","Discharged","Better Healed","5.00","0.00","0.00","0.00","228.50","36.00","0.00","233.50","","2020-10-21","2020-11-20","43","1");
INSERT INTO treatment VALUES("753","875553","Prisoner/1871/20","OPD","Prisoner","Credit Service","8","02","D37","M","42","2","2013","","No","2013-02-11","","","5.00","0.00","75.00","0.00","65.00","0.00","0.00","145.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("754","897171","K/10/05/06/02043","OPD","K","CB Health Insurance","4","10","05","F","40","2","2013","","No","2013-02-11","","","5.00","208.00","75.00","0.00","0.00","0.00","0.00","288.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("755","897152","K/10/04/26/14592","OPD","K","CB Health Insurance","4","10","04","F","38","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","48.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("756","897207","Refuge/1892/2020","OPD","Refuge","Credit Service","8","02","D34","M","47","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("757","897120","Letter/02/04023","OPD","Letter","Health Care finance","4","10","11","M","30","2","2013","","No","2013-02-11","","","5.00","0.00","75.00","400.00","0.00","0.00","0.00","480.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("758","897309","Employee/100/2013","OPD","Employee","Credit Service","4","10","CBE-Main","M","28","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("759","897308","K/19/01/10/00583/01","OPD","K","CB Health Insurance","4","19","01","F","57","2","2013","","No","2013-02-11","","","5.00","50.00","0.00","0.00","0.00","0.00","0.00","55.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("760","883881","Prisoner/1903/20","OPD","Prisoner","Credit Service","8","02","D37","M","35","2","2013","","No","2013-02-11","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","25.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("761","887046","K/10/06/31/09126/01","OPD","K","CB Health Insurance","4","10","06","F","28","2","2013","","No","2013-02-11","","","5.00","88.00","0.00","0.00","375.00","0.00","0.00","468.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("762","897324","K/10/03/23/09841","OPD","K","CB Health Insurance","4","10","03","M","34","2","2013","","No","2013-02-11","","","5.00","30.00","40.00","0.00","0.00","0.00","0.00","75.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("763","897313","Prisoner/63/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","34","2","2013","","No","2013-02-11","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","45.00","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("764","002154","K/F/C/GMB/10/D23/11/08439","OPD","K/F/C/GMB","CB Health Insurance","4","10","D23","F","55","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","24.20","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("765","895198","K/10/05/10/04391","OPD","K","CB Health Insurance","4","10","05","M","38","2","2013","","No","2013-02-11","","","5.00","0.00","40.00","40.00","0.00","0.00","0.00","85.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("766","587338","H/10/07/30/02090","OPD","H","CB Health Insurance","4","10","07","F","53","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","38.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("767","025955","K/10/05/18/01505","OPD","K","CB Health Insurance","4","10","05","M","73","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","80.80","0.00","0.00","85.80","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("768","767604","K/10/07/27/04666","OPD","K","CB Health Insurance","4","10","07","M","53","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","342.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("769","105070","H/10/15/09/00142","OPD","H","CB Health Insurance","4","10","15","M","68","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","155.60","0.00","0.00","160.60","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("770","890307","K/10/05/07/05270","OPD","K","CB Health Insurance","4","10","05","M","53","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","9.60","0.00","0.00","14.60","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("771","897335","K/10/10/20/08156","OPD","K","CB Health Insurance","4","10","10","M","20","2","2013","","No","2013-02-11","","","5.00","145.00","0.00","0.00","100.00","0.00","0.00","250.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("772","005353","K/10/04/0212992/01","OPD","K","CB Health Insurance","4","10","04","F","46","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","19.20","0.00","0.00","65.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("773","896966","K/10/15/05/000488","OPD","K","CB Health Insurance","4","10","15","M","40","2","2013","","No","2013-02-11","","","5.00","0.00","75.00","0.00","163.68","0.00","0.00","243.68","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("774","889517","H/10/06/32/05045","OPD","H","CB Health Insurance","4","10","06","F","49","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","56.00","0.00","0.00","61.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("775","672626","Employee/11-12/0040/2013","OPD","Employee","Credit Service","7","145","D38","F","34","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","34","0");
INSERT INTO treatment VALUES("776","897115","K/10/10/14/01126","OPD","K","CB Health Insurance","4","10","10","F","57","2","2013","","No","2013-02-11","","","5.00","0.00","75.00","0.00","104.00","0.00","0.00","184.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("777","897375","K/10/10/15/07677","OPD","K","CB Health Insurance","4","10","10","F","14","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","80.00","22.00","0.00","0.00","107.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("778","879958","K/10/06/40/01176","IPD","K","CB Health Insurance","4","10","06","M","59","2","2013","","No","2013-02-11","","","5.00","90.00","0.00","0.00","407.00","0.00","0.00","502.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("779","882739","K/10/05/06/03502","OPD","K","CB Health Insurance","4","10","05","M","53","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","20.40","0.00","0.00","25.40","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("780","899132","K/10/10/21/08093","OPD","K","CB Health Insurance","4","10","10","F","39","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","57.00","0.00","0.00","62.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("781","893675","K/10/02/09/10219","OPD","K","CB Health Insurance","4","10","02","F","83","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","52.50","0.00","0.00","20.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("782","897181","K/10/05/15/04948","OPD","K","CB Health Insurance","4","10","05","M","4","2","2013","","No","2013-02-11","","","5.00","25.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("783","044987","K/10/07/9/01529","OPD","K","CB Health Insurance","4","10","07","M","45","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","660.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("784","839396","K/10/04/02/14785","OPD","K","CB Health Insurance","4","10","04","M","51","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","383.70","0.00","0.00","65.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("785","539081","K/10/04/03/09669/00","OPD","K","CB Health Insurance","4","10","04","F","53","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","187.20","0.00","0.00","65.00","","2020-10-21","2020-11-20","34","0");
INSERT INTO treatment VALUES("786","894190","K/10/15/04/00234","OPD","K","CB Health Insurance","4","10","15","M","70","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","40.80","0.00","0.00","45.80","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("787","576319","H/10/04/04/09029/01","OPD","H","CB Health Insurance","4","10","04","M","33","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","331.40","0.00","0.00","65.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("788","897347","K/10/04/26/08497","OPD","K","CB Health Insurance","4","10","04","M","58","2","2013","","No","2013-02-11","","","5.00","85.00","0.00","0.00","121.20","0.00","0.00","65.00","","2020-10-21","2020-11-20","34","0");
INSERT INTO treatment VALUES("789","897398","K/10/15/12/00024","OPD","K","CB Health Insurance","4","10","15","M","38","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","45.20","0.00","0.00","50.20","","2020-10-21","2020-11-20","34","0");
INSERT INTO treatment VALUES("790","897400","K/10/12/26/04188","OPD","K","CB Health Insurance","4","10","12","M","58","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","34","0");
INSERT INTO treatment VALUES("791","358118","K/10/08/5/06181","OPD","K","CB Health Insurance","4","10","08","M","59","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","684.00","0.00","0.00","689.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("792","852903","K/10/04/30/000172/02","OPD","K","CB Health Insurance","4","10","04","F","32","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","135.60","0.00","0.00","65.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("793","897314","K/10/10/14/04678/1","OPD","K","CB Health Insurance","4","10","10","M","60","2","2013","","No","2013-02-11","","","5.00","60.00","75.00","0.00","0.00","0.00","0.00","140.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("794","897407","K/10/02/34/13050","OPD","K","CB Health Insurance","4","10","02","M","57","2","2013","","No","2013-02-11","","","5.00","33.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("795","714114","K/10/07/28/05345","OPD","K","CB Health Insurance","4","10","07","M","33","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("796","734754","K/10/05/10/08572","OPD","K","CB Health Insurance","4","10","05","M","69","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("797","520562","H/10/04/05/02876/01","OPD","H","CB Health Insurance","4","10","04","F","43","2","2013","","No","2013-02-11","","","5.00","108.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("798","884237","K/10/09/02/04926","OPD","K","CB Health Insurance","4","10","09","M","57","2","2013","","No","2013-02-11","","","5.00","205.00","0.00","0.00","332.00","0.00","0.00","542.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("799","852490","H/10/04/08/03754","OPD","H","CB Health Insurance","4","10","04","F","53","2","2013","","No","2013-02-11","","","5.00","78.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("800","897377","K/10/09/20/13639","OPD","K","CB Health Insurance","4","10","09","F","22","2","2013","","No","2013-02-11","","","5.00","105.00","0.00","0.00","0.00","0.00","0.00","110.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("801","890392","K/10/05/18/011325","OPD","K","CB Health Insurance","4","10","05","M","12","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","44.00","0.00","0.00","49.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("802","801940","K/10/01/09/00921","OPD","K","CB Health Insurance","4","10","01","M","85","2","2013","","No","2013-02-11","","","5.00","0.00","400.00","0.00","1471.00","0.00","0.00","30.00","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("803","635166","K/10/07/30/01626","OPD","K","CB Health Insurance","4","10","07","M","66","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","660.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","55","0");
INSERT INTO treatment VALUES("804","897260","K/09/07/01/03293/06","OPD","K","CB Health Insurance","4","09","07","M","9","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","320.00","0.00","0.00","325.00","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("805","897264","Prisoner/292/19/2013","OPD","Prisoner","Credit Service","4","10","D29","M","1","2","2013","","No","2013-02-11","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","45.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("806","522367","K/10/09/08/08236/04","OPD","K","CB Health Insurance","4","10","09","M","6","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","63.00","0.00","0.00","68.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("807","519446","K/10/06/21/02086","OPD","K","CB Health Insurance","4","10","06","M","38","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","295.70","0.00","0.00","300.70","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("808","837423","K/10/09/36/00023","OPD","K","CB Health Insurance","4","10","09","F","45","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","22.00","0.00","0.00","27.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("809","764177","K/10/04/27/12512/07","OPD","K","CB Health Insurance","4","10","04","M","2","2","2013","","No","2013-02-11","","","5.00","38.00","0.00","0.00","33.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("810","737643","H/10/06/31/09535/05","OPD","H","CB Health Insurance","4","10","06","M","43","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","18.00","0.00","0.00","23.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("811","896598","K/19/02/02/05704/05","OPD","K","CB Health Insurance","4","19","02","M","16","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","262.80","0.00","0.00","267.80","","2020-10-21","2020-11-20","34","0");
INSERT INTO treatment VALUES("812","392789","K/10/16/04/03840/02","OPD","K","CB Health Insurance","4","10","16","M","9","2","2013","","No","2013-02-11","","","5.00","38.00","80.00","0.00","125.60","0.00","0.00","248.60","","2020-10-21","2020-11-20","43","0");
INSERT INTO treatment VALUES("813","897415","K/19/02/14/03135","OPD","K","CB Health Insurance","4","19","02","M","19","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("814","897417","Prisoner/64/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","18","2","2013","","No","2013-02-11","","","5.00","100.00","0.00","0.00","0.00","0.00","0.00","105.00","","2020-10-21","2020-11-20","48","0");
INSERT INTO treatment VALUES("815","877305","Prisoner/DNS64/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","35","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("816","823457","K/10/04/26/03858/0","OPD","K","CB Health Insurance","4","10","04","M","14","2","2013","","No","2013-02-11","","","5.00","180.00","0.00","0.00","10.80","0.00","0.00","65.00","","2020-10-21","2020-11-20","45","0");
INSERT INTO treatment VALUES("817","891933","K/10/02/3208003","OPD","K","CB Health Insurance","4","10","02","M","15","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","249.00","0.00","0.00","20.00","","2020-10-21","2020-11-20","53","0");
INSERT INTO treatment VALUES("818","881653","K/10/04/05/14787","OPD","K","CB Health Insurance","4","10","04","M","63","2","2013","","No","2013-02-11","","","5.00","170.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","53","0");
INSERT INTO treatment VALUES("819","897254","K/10/05/22/03979/01","OPD","K","CB Health Insurance","4","10","05","M","35","2","2013","","No","2013-02-11","","","5.00","60.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","53","0");
INSERT INTO treatment VALUES("820","897128","K/10/04/07/02562/02","OPD","K","CB Health Insurance","4","10","04","M","19","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","53","0");
INSERT INTO treatment VALUES("821","897128","K/10/04/07/02562/02","OPD","K","CB Health Insurance","4","10","04","M","19","2","2013","","No","2013-02-11","","","5.00","0.00","0.00","0.00","22.00","0.00","0.00","65.00","","2020-10-21","2020-11-20","53","0");
INSERT INTO treatment VALUES("822","897496","K/10/05/11/01127","OPD","K","CB Health Insurance","4","10","05","M","37","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","74.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("823","887046","K/10/06/31/09126/01","OPD","K","CB Health Insurance","4","10","06","F","28","2","2013","","No","2013-02-12","","","0.00","0.00","75.00","0.00","694.00","0.00","0.00","769.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("824","899141","K/19/05/31/05441/01","OPD","K","CB Health Insurance","4","19","05","F","35","2","2013","","No","2013-02-12","","","5.00","125.00","0.00","0.00","0.00","0.00","0.00","130.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("825","899233","H/10/02/37/44446","OPD","H","CB Health Insurance","4","10","02","M","73","2","2013","","No","2013-02-12","","","10.00","0.00","0.00","0.00","84.00","0.00","0.00","20.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("826","899119","K/09/08/3373","IPD","K","CB Health Insurance","4","09","08","F","55","2","2013","","No","2013-02-12","Discharged","Better Healed","5.00","0.00","0.00","0.00","0.00","36.00","0.00","41.00","","2020-10-22","2020-11-21","48","1");
INSERT INTO treatment VALUES("827","880923","Refuge/1920/10","OPD","Refuge","Credit Service","8","02","D34","F","1","2","2013","","No","2013-02-12","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("828","894732","K/10/10/05/02319/01","OPD","K","CB Health Insurance","4","10","10","F","28","2","2013","","No","2013-02-11","","","5.00","0.00","60.00","0.00","0.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("829","889710","K/19/D03/04/00940/03","IPD","K","CB Health Insurance","4","19","D03","F","20","2","2013","","No","2013-02-12","Discharged","Better Healed","5.00","0.00","0.00","0.00","0.00","180.00","0.00","185.00","","2020-10-22","2020-11-21","48","1");
INSERT INTO treatment VALUES("830","893623","Employee/35/29","OPD","Employee","Credit Service","4","10","D200","M","20","2","2013","","No","2013-02-11","","","5.00","0.00","40.00","0.00","0.00","0.00","0.00","45.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("831","897554","Employee/158/06","OPD","Employee","Credit Service","4","10","jue","F","8","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-22","2020-11-21","54","0");
INSERT INTO treatment VALUES("832","889146","K/10/07/14/01098","IPD","K","CB Health Insurance","4","10","07","F","11","2","2013","","No","2013-02-12","Discharged","Better Healed","5.00","0.00","50.00","0.00","0.00","36.00","0.00","5.00","","2020-10-22","2020-11-21","48","1");
INSERT INTO treatment VALUES("833","897568","K/19/06/16/06229","OPD","K","CB Health Insurance","4","19","06","M","46","2","2013","","No","2013-02-11","","","5.00","55.00","230.00","0.00","0.00","0.00","0.00","290.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("834","877162","K/10/12/01/08938","OPD","K","CB Health Insurance","4","10","12","F","44","2","2013","","No","2013-02-12","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","85.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("835","311873","K/10/10/15/00123/01","OPD","K","CB Health Insurance","4","10","10","F","34","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","32.00","0.00","0.00","37.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("836","830418","K/10/14/10/00397","OPD","K","CB Health Insurance","4","10","14","M","67","2","2013","","No","2013-02-12","","","5.00","45.00","75.00","0.00","74.00","0.00","0.00","199.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("837","897571","Employee/06/20","OPD","Employee","Credit Service","8","02","D36","F","22","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("838","892008","K/10/05/01/12362","OPD","K","CB Health Insurance","4","10","05","M","24","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","15.00","0.00","0.00","20.00","","2020-10-22","2020-11-21","34","0");
INSERT INTO treatment VALUES("839","897572","K/10/04/10/001008/02","OPD","K","CB Health Insurance","4","10","04","F","33","2","2013","","No","2013-02-12","","","5.00","30.00","40.00","0.00","0.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("840","886111","K/10/12/09/10485/01","OPD","K","CB Health Insurance","4","10","12","F","40","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-22","2020-11-21","34","0");
INSERT INTO treatment VALUES("841","032941","K/10/05/08/09620","OPD","K","CB Health Insurance","4","10","05","M","55","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","310.40","0.00","0.00","315.40","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("842","809808","Prisoner/293/19/2013","OPD","Prisoner","Credit Service","4","10","D29","M","22","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("843","888554","Prisoner/69/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","60","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","10.60","0.00","0.00","15.60","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("844","830428","Prisoner/6914/013","OPD","Prisoner","Credit Service","4","10","D29","M","30","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("845","897578","Prisoner/69/14/013","OPD","Prisoner","Credit Service","4","10","D29","F","20","2","2013","","No","2013-02-12","","","5.00","43.00","0.00","0.00","0.00","0.00","0.00","48.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("846","897577","Prisoner/DNS/69/14013","OPD","Prisoner","Credit Service","4","10","D29","F","19","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("847","034874","K/10/CBE-Main/27/00364","IPD","K","CB Health Insurance","4","10","CBE-Main","M","43","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","11.70","0.00","0.00","16.70","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("848","393834","K/10/14/07/00096","OPD","K","CB Health Insurance","4","10","14","M","43","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","30.75","0.00","0.00","35.75","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("849","897581","K/10/02/25/05706","OPD","K","CB Health Insurance","4","10","02","F","36","2","2013","","No","2013-02-12","","","5.00","205.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("850","843859","K/10/07/35/03938","OPD","K","CB Health Insurance","4","10","07","M","53","2","2013","","No","2013-02-12","","","5.00","0.00","50.00","0.00","52.70","0.00","0.00","5.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("851","826157","K/10/09/03/06994/05","OPD","K","CB Health Insurance","4","10","09","F","17","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","207.00","0.00","0.00","212.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("852","897586","K/10/10/14/07503/04","OPD","K","CB Health Insurance","4","10","10","M","12","2","2013","","No","2013-02-12","","","5.00","93.00","0.00","0.00","0.00","0.00","0.00","98.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("853","726452","Employee/1142/0038/2013","OPD","Employee","Credit Service","7","145","D38","F","40","2","2013","","No","2013-02-12","","","5.00","208.00","0.00","0.00","158.80","0.00","0.00","371.80","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("854","899264","K/10/04/26/10070","OPD","K","CB Health Insurance","4","10","04","M","58","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("855","843939","K/10/16/01/03442","OPD","K","CB Health Insurance","4","10","16","M","46","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","20.40","0.00","0.00","25.40","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("856","868216","K/10/04/27/11945","OPD","K","CB Health Insurance","4","10","04","M","53","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("857","824575","K/10/09/14/08183","OPD","K","CB Health Insurance","4","10","09","M","62","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","1155.00","0.00","0.00","1160.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("858","289285","K/10/14/06/02718/1","OPD","K","CB Health Insurance","4","10","14","F","50","2","2013","","No","2013-02-12","","","5.00","120.00","0.00","0.00","374.50","0.00","0.00","499.50","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("859","896303","K/10/12/26/04111","OPD","K","CB Health Insurance","4","10","12","F","43","2","2013","","No","2013-02-12","","","5.00","110.00","0.00","0.00","34.40","0.00","0.00","149.40","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("860","883000","K/10/02/29/20453","OPD","K","CB Health Insurance","4","10","02","M","48","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","22.40","0.00","0.00","20.00","","2020-10-22","2020-11-21","34","0");
INSERT INTO treatment VALUES("861","795004","K/10/05/22/08157","OPD","K","CB Health Insurance","4","10","05","M","40","2","2013","","No","2013-02-12","","","0.00","0.00","0.00","0.00","373.75","0.00","0.00","373.75","","2020-10-22","2020-11-21","34","0");
INSERT INTO treatment VALUES("862","195182","K/10/15/13/00130","OPD","K","CB Health Insurance","4","10","15","M","62","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","819.00","0.00","0.00","824.00","","2020-10-22","2020-11-21","45","0");
INSERT INTO treatment VALUES("863","897516","K/10/04/27/02261/07","OPD","K","CB Health Insurance","4","10","04","M","12","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","62.50","0.00","0.00","65.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("864","897598","K/10/02/04/24518","OPD","K","CB Health Insurance","4","10","02","F","48","2","2013","","No","2013-02-12","","","5.00","80.00","0.00","40.00","0.00","0.00","0.00","20.00","","2020-10-22","2020-11-21","43","0");
INSERT INTO treatment VALUES("865","897601","K/10/D36/06/02076","OPD","K","CB Health Insurance","4","10","D36","F","22","2","2013","","No","2013-02-12","","","5.00","98.00","75.00","0.00","85.80","0.00","0.00","263.80","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("866","897602","K/10/12/38/05370/01","OPD","K","CB Health Insurance","4","10","12","F","48","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("867","873585","Employee/294/19/2013","OPD","Employee","Credit Service","4","10","D29","F","25","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","270.00","0.00","0.00","275.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("868","893173","K/10/14/01/03199/04","OPD","K","CB Health Insurance","4","10","14","M","2","2","2013","","No","2013-02-12","","","5.00","38.00","75.00","0.00","0.00","0.00","0.00","118.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("869","897468","K/10/09/15/13658","OPD","K","CB Health Insurance","4","10","09","M","45","2","2013","","No","2013-02-12","","","5.00","58.00","0.00","0.00","185.00","0.00","0.00","248.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("870","878945","K/10/04/14/09145","OPD","K","CB Health Insurance","4","10","04","M","73","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","69.50","0.00","0.00","65.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("871","879241","K/10/05/14/010552/04","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","40.00","15.12","0.00","0.00","60.12","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("872","897519","K/10/01/09373/02","OPD","K","CB Health Insurance","4","10","01","M","6","2","2013","","No","2013-02-12","","","5.00","354.00","75.00","0.00","52.25","0.00","0.00","30.00","","2020-10-22","2020-11-21","48","0");
INSERT INTO treatment VALUES("873","897605","K/10/05/18/03024","OPD","K","CB Health Insurance","4","10","05","M","56","2","2013","","No","2013-02-12","","","5.00","85.00","0.00","0.00","0.00","0.00","0.00","90.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("874","897624","K/10/14/15/01713","OPD","K","CB Health Insurance","4","10","14","F","56","2","2013","","No","2013-02-12","","","5.00","58.00","0.00","0.00","103.00","0.00","0.00","166.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("875","896979","K/10/04/08/07935/07","OPD","K","CB Health Insurance","4","10","04","F","48","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","23.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","44","0");
INSERT INTO treatment VALUES("876","897631","K/10/04/02/00731/01","OPD","K","CB Health Insurance","4","10","04","M","48","2","2013","","No","2013-02-12","","","5.00","130.00","0.00","0.00","20.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","52","0");
INSERT INTO treatment VALUES("877","882673","K/10/04/05/14787","OPD","K","CB Health Insurance","4","10","04","M","63","2","2013","","No","2013-02-12","","","5.00","0.00","0.00","0.00","95.50","0.00","0.00","65.00","","2020-10-22","2020-11-21","52","0");
INSERT INTO treatment VALUES("878","897682","K/10/05/28/0832/03","OPD","K","CB Health Insurance","4","10","05","F","18","2","2013","","No","2013-02-12","","","5.00","60.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-22","2020-11-21","52","0");
INSERT INTO treatment VALUES("879","897691","K/10/05/19/0134","OPD","K","CB Health Insurance","4","10","05","F","40","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("880","194623","K/10/04/25/12152","OPD","K","CB Health Insurance","4","10","04","M","78","2","2013","","No","2013-02-13","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("881","897638","K/19/06/04/06270/05","OPD","K","CB Health Insurance","4","19","06","M","9","2","2013","","No","2013-02-13","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","45.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("882","897772","K/10/02/2025201","OPD","K","CB Health Insurance","4","10","02","M","33","2","2013","","No","2013-02-13","","","5.00","208.00","150.00","0.00","226.00","0.00","0.00","20.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("883","781343","K/10/09/11/06204/01","OPD","K","CB Health Insurance","4","10","09","F","57","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("884","806072","K/10/12/17/24234/03","OPD","K","CB Health Insurance","4","10","12","M","16","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","339.75","0.00","0.00","344.75","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("885","629277","K/10/07/14/00512","OPD","K","CB Health Insurance","4","10","07","M","48","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","40.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("886","897775","K/10/05/01/11961","OPD","K","CB Health Insurance","4","10","05","F","27","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("887","031911","H/10/10/01/07880","OPD","H","CB Health Insurance","4","10","10","F","35","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","112.50","0.00","0.00","117.50","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("888","770346","K/10/14/03/00817","OPD","K","CB Health Insurance","4","10","14","M","61","2","2013","","No","2013-02-13","","","5.00","70.00","0.00","0.00","854.00","0.00","0.00","929.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("889","720746","Employee/19/2013","OPD","Employee","Credit Service","4","10","D31","M","41","2","2013","","No","2013-02-13","","","5.00","41.00","0.00","0.00","15.60","0.00","0.00","61.60","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("890","681515","K/10/10/02/07937","OPD","K","CB Health Insurance","4","10","10","M","43","2","2013","","No","2013-02-13","","","5.00","55.00","0.00","0.00","0.00","0.00","0.00","60.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("891","034521","K/10/04/2801789","OPD","K","CB Health Insurance","4","10","04","F","60","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","204.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("892","824392","Prisoner/68/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","34","2","2013","","No","2013-02-13","","","5.00","43.00","0.00","0.00","8.70","0.00","0.00","56.70","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("893","858083","H/10/09/13/12938","OPD","H","CB Health Insurance","4","10","09","M","38","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","29.00","0.00","0.00","34.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("894","897699","Prisoner/DNS/71/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","15","2","2013","","No","2013-02-13","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","25.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("895","550944","H/10/02/18/18756","OPD","H","CB Health Insurance","4","10","02","M","64","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","20.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("896","897779","Prisoner/DNS/71/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","17","2","2013","","No","2013-02-13","","","5.00","101.00","0.00","0.00","0.00","0.00","0.00","106.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("897","754215","K/10/12/1301606/04","OPD","K","CB Health Insurance","4","10","12","M","19","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","67.73","0.00","0.00","72.73","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("898","884621","H/10/06/30/050792","OPD","H","CB Health Insurance","4","10","06","F","43","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("899","887518","K/10/04/10/09473","OPD","K","CB Health Insurance","4","10","04","M","87","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","105.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","43","1");
INSERT INTO treatment VALUES("900","896429","Prisoner/1913/20","OPD","Prisoner","Credit Service","8","02","D36","M","10","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","15.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("901","897648","Employee/143/29-2/027/13","OPD","Employee","Credit Service","7","145","D145","F","30","2","2013","","No","2013-02-13","","","5.00","116.00","75.00","0.00","0.00","0.00","40.00","236.00","pathology","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("902","277902","K/10/02/21/16749","OPD","K","CB Health Insurance","4","10","02","F","48","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","624.00","0.00","0.00","20.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("903","031943","K/10/04/07/11184/02","OPD","K","CB Health Insurance","4","10","04","F","57","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","13.50","0.00","0.00","65.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("904","873353","K/10/15/09/00233/04","OPD","K","CB Health Insurance","4","10","15","F","13","2","2013","","No","2013-02-13","","","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("905","873353","K/10/15/09/00233/04","OPD","K","CB Health Insurance","4","10","15","F","13","2","2013","","No","2013-02-12","","","5.00","320.00","0.00","0.00","327.00","0.00","0.00","652.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("906","897701","K/10/05/08/12269/01","OPD","K","CB Health Insurance","4","10","05","F","31","2","2013","","No","2013-02-13","","","5.00","0.00","80.00","0.00","34.00","0.00","0.00","119.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("907","397619","K/10/04/07/102565/01","OPD","K","CB Health Insurance","4","10","04","F","66","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","162.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("908","749958","Prisoner/1948/20","OPD","Prisoner","Credit Service","8","02","D36","M","35","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","60.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("909","668189","H/10/10/02/05026","OPD","H","CB Health Insurance","4","10","10","F","33","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("910","710974","K/10/04/28//07928","OPD","K","CB Health Insurance","4","10","04","M","68","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","130.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("911","897809","K/10/02/09/23923","OPD","K","CB Health Insurance","4","10","02","F","11","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","20.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("912","010034","K/10/10/16/00810","OPD","K","CB Health Insurance","4","10","10","F","73","2","2013","","No","2013-02-13","","","5.00","190.00","0.00","0.00","30.00","0.00","0.00","225.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("913","897817","K/19/04/05/11696","OPD","K","CB Health Insurance","4","19","04","M","53","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","80.00","0.00","0.00","0.00","85.00","","2020-10-23","2020-11-22","34","0");
INSERT INTO treatment VALUES("914","800256","K/F/C/GMB/0357/04","IPD","K/F/C/GMB","CB Health Insurance","7","21","D22","M","9","2","2013","","No","2013-02-13","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","25.00","","2020-10-23","2020-11-22","34","0");
INSERT INTO treatment VALUES("915","897278","K/10/05/18/11520","OPD","K","CB Health Insurance","4","10","05","F","28","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","9.00","0.00","0.00","14.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("916","897815","K/10/11/22/06183/01","OPD","K","CB Health Insurance","4","10","11","F","35","2","2013","","No","2013-02-13","","","5.00","85.00","0.00","0.00","0.00","0.00","0.00","90.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("917","033764","K/10/07/25/02785/01","OPD","K","CB Health Insurance","4","10","07","F","16","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","68.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("918","897818","K/10/04/05/14292/02","OPD","K","CB Health Insurance","4","10","04","M","10","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","34","0");
INSERT INTO treatment VALUES("919","897814","H/19/05/150266/2","OPD","H","CB Health Insurance","4","19","05","M","19","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("920","804019","K/10/06/18/112075","OPD","K","CB Health Insurance","4","10","06","M","29","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","9.60","0.00","0.00","14.60","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("921","778202","K/F/C/GMB/23/00088","OPD","K/F/C/GMB","CB Health Insurance","4","10","15","M","28","2","2013","","No","2013-02-13","","","5.00","111.00","0.00","0.00","0.00","0.00","0.00","116.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("922","591636","K/10/04/09/03423/02","IPD","K","CB Health Insurance","4","10","04","F","25","2","2013","","No","2013-02-13","Discharged","Better Healed","5.00","0.00","0.00","0.00","0.00","108.00","0.00","65.00","","2020-10-23","2020-11-22","48","1");
INSERT INTO treatment VALUES("923","893545","K/10/07/2705091/03","OPD","K","CB Health Insurance","4","10","07","F","17","2","2013","","No","2013-02-13","","","5.00","32.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("924","897823","K/10/05/04/010027/01","OPD","K","CB Health Insurance","4","10","05","F","32","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("925","833297","K/10/05/22/09905/01","OPD","K","CB Health Insurance","4","10","05","F","37","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","19.80","0.00","0.00","24.80","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("926","820978","Prisoner/1947/20","OPD","Prisoner","Credit Service","8","02","D34","M","33","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("927","873839","K/10/10/12/02139/02","OPD","K","CB Health Insurance","4","10","10","F","5","2","2013","","No","2013-02-13","","","0.00","20.00","0.00","0.00","31.00","0.00","0.00","51.00","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("928","899310","H/09/09/17/00017/01","OPD","H","CB Health Insurance","4","09","09","M","60","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","112.50","0.00","0.00","117.50","","2020-10-23","2020-11-22","43","0");
INSERT INTO treatment VALUES("929","896757","K/10/02/20/20961","OPD","K","CB Health Insurance","4","10","02","M","2","2","2013","","No","2013-02-13","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("930","892282","K/10/04/28/09687/01","OPD","K","CB Health Insurance","4","10","04","F","28","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","92.50","0.00","0.00","65.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("931","897780","H/10/02/00/32100","OPD","H","CB Health Insurance","4","10","02","M","68","2","2013","","No","2013-02-13","","","5.00","280.00","0.00","0.00","8.00","0.00","0.00","20.00","","2020-10-23","2020-11-22","53","0");
INSERT INTO treatment VALUES("932","899226","K/09/03/41/08243/2","OPD","K","CB Health Insurance","4","09","03","F","43","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","5.00","0.00","0.00","10.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("933","897619","Employee/143/292/027/13","OPD","Employee","Credit Service","7","145","D145","M","21","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","14.00","0.00","0.00","19.00","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("934","894622","K/10/05/305529","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-13","","","5.00","80.00","60.00","0.00","3.60","0.00","0.00","148.60","","2020-10-23","2020-11-22","48","0");
INSERT INTO treatment VALUES("935","897803","H/10/04/04/09204","OPD","H","CB Health Insurance","4","10","04","F","52","2","2013","","No","2013-02-13","","","5.00","33.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-23","2020-11-22","50","0");
INSERT INTO treatment VALUES("936","897706","K/10/04/05/08482","OPD","K","CB Health Insurance","4","10","04","M","31","2","2013","","No","2013-02-13","","","5.00","0.00","0.00","0.00","12.60","0.00","0.00","65.00","","2020-10-23","2020-11-22","50","0");
INSERT INTO treatment VALUES("937","897833","H/10/10/07/04110/02","OPD","H","CB Health Insurance","4","10","10","M","34","2","2013","","No","2013-02-13","","","5.00","70.00","0.00","0.00","69.00","0.00","0.00","144.00","","2020-10-23","2020-11-22","50","0");
INSERT INTO treatment VALUES("938","897802","K/10/14/07/00848","OPD","K","CB Health Insurance","4","10","14","M","46","2","2013","","No","2013-02-13","","","5.00","300.00","0.00","0.00","0.00","0.00","0.00","305.00","","2020-10-23","2020-11-22","50","0");
INSERT INTO treatment VALUES("939","897842","K/10/08/40/02105","OPD","K","CB Health Insurance","4","10","08","F","41","2","2013","","No","2013-02-13","","","10.00","80.00","0.00","0.00","138.00","0.00","0.00","228.00","","2020-10-23","2020-11-22","50","0");
INSERT INTO treatment VALUES("940","897840","K/10/09/13/10509","OPD","K","CB Health Insurance","4","10","09","M","53","2","2013","","No","2013-02-13","","","10.00","0.00","75.00","0.00","73.60","0.00","0.00","158.60","","2020-10-23","2020-11-22","50","0");
INSERT INTO treatment VALUES("941","897858","H/10/10/16/00296","OPD","H","CB Health Insurance","4","10","10","F","28","2","2013","","No","2013-02-13","","","5.00","0.00","75.00","0.00","41.00","0.00","0.00","121.00","","2020-10-24","2020-11-23","50","0");
INSERT INTO treatment VALUES("942","897864","K/10/02/22/24296","OPD","K","CB Health Insurance","4","10","02","M","17","2","2013","","No","2013-02-14","","","5.00","28.00","0.00","0.00","215.00","0.00","0.00","20.00","","2020-10-24","2020-11-23","52","0");
INSERT INTO treatment VALUES("943","897918","K/10/04/03/03935/02","OPD","K","CB Health Insurance","4","10","04","M","19","2","2013","","No","2013-02-14","","","5.00","65.00","0.00","0.00","285.00","0.00","0.00","65.00","","2020-10-24","2020-11-23","52","0");
INSERT INTO treatment VALUES("944","897828","K/10/14/10/00397","OPD","K","CB Health Insurance","4","10","14","M","73","2","2013","","No","2013-02-14","","","5.00","415.00","0.00","0.00","276.55","0.00","0.00","696.55","","2020-10-24","2020-11-23","52","0");
INSERT INTO treatment VALUES("945","897614","K/10/10/24/00141","IPD","K","CB Health Insurance","4","10","10","M","43","2","2013","","No","2013-02-14","","","5.00","0.00","0.00","0.00","148.00","0.00","0.00","153.00","","2020-10-24","2020-11-23","55","0");
INSERT INTO treatment VALUES("946","732961","K/10/04/27/00553/04","OPD","K","CB Health Insurance","4","10","04","F","17","2","2013","","No","2013-02-14","","","5.00","0.00","0.00","0.00","20.00","0.00","0.00","65.00","","2020-10-24","2020-11-23","55","1");
INSERT INTO treatment VALUES("947","897965","K/10/06/42/00722/07","OPD","K","CB Health Insurance","4","10","06","M","8","2","2013","","No","2013-02-14","","","5.00","50.00","225.00","0.00","181.00","0.00","0.00","461.00","","2020-10-25","2020-11-24","55","0");
INSERT INTO treatment VALUES("948","889214","K/10/11/06/02971","IPD","K","CB Health Insurance","4","10","11","M","59","2","2013","","No","2013-02-15","Discharged","Better Healed","5.00","0.00","0.00","0.00","43.00","60.00","0.00","48.00","","2020-10-25","2020-11-24","50","1");
INSERT INTO treatment VALUES("949","899147","K/19/01/21/01385/01","OPD","K","CB Health Insurance","4","19","01","F","22","2","2013","","No","2013-02-15","","","10.00","0.00","0.00","0.00","44.00","0.00","0.00","54.00","","2020-10-25","2020-11-24","44","0");
INSERT INTO treatment VALUES("950","897993","K/10/10/10/01610/3","OPD","K","CB Health Insurance","4","10","10","M","20","2","2013","","No","2013-02-15","","","10.00","0.00","150.00","0.00","0.00","0.00","0.00","160.00","","2020-10-25","2020-11-24","44","0");
INSERT INTO treatment VALUES("951","898050","K/10/06/01/20660","OPD","K","CB Health Insurance","4","10","06","M","43","2","2013","","No","2013-02-16","","","5.00","55.00","0.00","0.00","0.00","0.00","0.00","60.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("952","033884","K/10/04/26/02494","OPD","K","CB Health Insurance","4","10","04","M","16","2","2013","","No","2013-02-16","","","5.00","10.00","0.00","0.00","638.20","0.00","0.00","65.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("953","747436","K/10/04/30/00179/03","OPD","K","CB Health Insurance","4","10","04","F","9","2","2013","","No","2013-02-16","","","5.00","0.00","80.00","0.00","50.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("954","898076","K/10/04/02/01456","OPD","K","CB Health Insurance","4","10","04","F","5","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","49.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("955","295347","K/10/05/21/01663","OPD","K","CB Health Insurance","4","10","05","M","63","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","991.40","0.00","0.00","996.40","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("956","100387","K/10/04/04/06392","OPD","K","CB Health Insurance","4","10","04","M","43","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","340.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("957","826134","K/10/02/0126781","OPD","K","CB Health Insurance","4","10","02","F","38","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","340.00","0.00","0.00","20.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("958","094552","K/10/07/8/03069/02","OPD","K","CB Health Insurance","4","10","07","M","21","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","265.70","0.00","0.00","5.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("959","898051","K/19/04/29/07284/01","OPD","K","CB Health Insurance","4","19","04","F","48","2","2013","","No","2013-02-16","","","5.00","95.00","0.00","0.00","0.00","0.00","0.00","100.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("960","660639","K/10/10/15/04857/1","OPD","K","CB Health Insurance","4","10","10","M","45","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","427.70","0.00","0.00","432.70","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("961","807857","K/10/04/02/03937","OPD","K","CB Health Insurance","4","10","04","M","63","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","14.40","0.00","0.00","65.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("962","884356","K/10/04/04/12671","OPD","K","CB Health Insurance","4","10","04","M","68","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","48.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("963","543962","K/10/10/17/01353","OPD","K","CB Health Insurance","4","10","10","M","46","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","379.20","0.00","0.00","384.20","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("964","533902","K/10/05/05/03657","OPD","K","CB Health Insurance","4","10","05","M","26","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","335.00","0.00","0.00","340.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("965","656228","K/10/01/01/04662/01","OPD","K","CB Health Insurance","4","10","01","F","38","2","2013","","No","2013-02-16","","","0.00","25.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("966","843949","Prisoner/DNS/71/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","60","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","9.20","0.00","0.00","14.20","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("967","898170","H/10/07/18/01590","OPD","H","CB Health Insurance","4","10","07","F","38","2","2013","","No","2013-02-16","","","5.00","26.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("968","342705","K/10/10/16/00032","OPD","K","CB Health Insurance","4","10","10","M","35","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","465.00","0.00","0.00","470.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("969","472788","K/10/15/16/00088/04","OPD","K","CB Health Insurance","4","10","15","M","17","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","558.00","0.00","0.00","563.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("970","786410","K/10/06/27/07142/01","OPD","K","CB Health Insurance","4","10","06","F","38","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","34.50","0.00","0.00","39.50","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("971","891251","Prisoner/DNS/71/14/013","OPD","Prisoner","Credit Service","4","10","D29","M","38","2","2013","","No","2013-02-15","","","5.00","0.00","0.00","0.00","9.20","0.00","0.00","14.20","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("972","674129","K/10/05/22/03985","OPD","K","CB Health Insurance","4","10","05","M","75","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","12.00","0.00","0.00","17.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("973","894623","K/10/06/31/09123","OPD","K","CB Health Insurance","4","10","06","F","63","2","2013","","No","2013-02-16","","","5.00","30.00","0.00","0.00","12.00","0.00","0.00","47.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("974","251395","K/10/05/01/09723","OPD","K","CB Health Insurance","4","10","05","F","72","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","372.20","0.00","0.00","377.20","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("975","889406","H/10/01/16/02390","OPD","H","CB Health Insurance","4","10","01","M","70","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","28.00","0.00","0.00","30.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("976","782294","K/10/04/10/00091/04","OPD","K","CB Health Insurance","4","10","04","F","23","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("977","696698","K/10/05/08/08309","OPD","K","CB Health Insurance","4","10","05","F","43","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","20.40","0.00","0.00","25.40","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("978","720967","K/10/07/32/05159/02","OPD","K","CB Health Insurance","4","10","07","F","3","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","44.85","0.00","0.00","5.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("979","569511","K/10/07/14/01607","OPD","K","CB Health Insurance","4","10","07","M","60","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","959.20","0.00","0.00","5.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("980","734626","K/10/04/10/03543","OPD","K","CB Health Insurance","4","10","04","M","64","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","121.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("981","594195","K/10/04/09/02463/01","OPD","K","CB Health Insurance","4","10","04","F","30","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","563.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("982","632482","K/10/05/25/06143","OPD","K","CB Health Insurance","4","10","05","M","46","2","2013","","No","2013-02-16","","","5.00","10.00","0.00","0.00","331.00","0.00","0.00","346.00","","2020-10-26","2020-11-25","55","0");
INSERT INTO treatment VALUES("983","898303","K/10/11/20/01828/01","OPD","K","CB Health Insurance","4","10","11","F","48","2","2013","","No","2013-02-16","","","5.00","88.00","0.00","0.00","0.00","0.00","0.00","93.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("984","898218","K/10/05/06/08510/01","OPD","K","CB Health Insurance","4","10","05","F","23","2","2013","","No","2013-02-16","","","5.00","0.00","150.00","0.00","172.00","0.00","0.00","327.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("985","898306","K/10/11/05/03453/03","OPD","K","CB Health Insurance","4","10","11","M","14","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("986","665699","K/10/06/29/00493/01","OPD","K","CB Health Insurance","4","10","06","F","49","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","138.00","0.00","0.00","143.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("987","492131","K/10/05/01/8323","OPD","K","CB Health Insurance","4","10","05","F","29","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","156.00","0.00","0.00","161.00","","2020-10-26","2020-11-25","34","0");
INSERT INTO treatment VALUES("988","898182","K/10/11/07/03303","OPD","K","CB Health Insurance","4","10","11","M","65","2","2013","","No","2013-02-16","","","5.00","70.00","0.00","0.00","0.00","0.00","0.00","75.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("989","898185","K/10/15/23/00195","OPD","K","CB Health Insurance","4","10","15","F","46","2","2013","","No","2013-02-16","","","5.00","155.00","0.00","0.00","0.00","0.00","0.00","160.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("990","789204","K/10/10/15/03165","OPD","K","CB Health Insurance","4","10","10","M","30","2","2013","","No","2013-02-16","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("991","740405","K/10/05/14/05775/01","OPD","K","CB Health Insurance","4","10","05","F","51","2","2013","","No","2013-02-16","","","5.00","15.00","0.00","0.00","0.00","0.00","0.00","20.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("992","468536","K/10/05/22/07987","OPD","K","CB Health Insurance","4","10","05","M","33","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","60.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("993","592816","K/10/06/22/010247/04","OPD","K","CB Health Insurance","4","10","06","M","8","2","2013","","No","2013-02-16","","","5.00","20.00","0.00","0.00","0.00","0.00","0.00","25.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("994","898314","Employee/35/31","OPD","Employee","Credit Service","4","10","D200","M","24","2","2013","","No","2013-02-16","","","5.00","5.00","0.00","0.00","56.00","0.00","0.00","66.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("995","885577","K/10/09/32/14482","IPD","K","CB Health Insurance","4","10","09","M","12","2","2013","","No","2013-02-16","Discharged","Better Healed","0.00","0.00","0.00","0.00","0.00","216.00","0.00","216.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("996","885577","K/10/09/32/14482","OPD","K","CB Health Insurance","4","10","09","M","12","2","2013","","No","2013-02-16","Discharged","","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("997","857911","K/10/11/01/00140/08","OPD","K","CB Health Insurance","4","10","11","M","31","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","40.00","0.00","0.00","45.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("998","873121","K/10/10/15/06348","OPD","K","CB Health Insurance","4","10","10","F","29","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","16.00","0.00","0.00","21.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("999","751507","K/10/01/29/05773","OPD","K","CB Health Insurance","4","10","01","M","65","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","28.80","0.00","0.00","30.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1000","857664","K/10/04/06/12794","OPD","K","CB Health Insurance","4","10","04","M","61","2","2013","","No","2013-02-16","","","5.00","50.00","0.00","0.00","46.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("1001","898247","H/10/09/36/09960/01","OPD","H","CB Health Insurance","4","10","09","F","20","2","2013","","No","2013-02-16","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","35.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1002","898307","K/10/05/08/00834","OPD","K","CB Health Insurance","4","10","05","M","21","2","2013","","No","2013-02-16","","","5.00","105.00","0.00","0.00","0.00","0.00","0.00","110.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("1003","549425","K/10/10/21/00047","OPD","K","CB Health Insurance","4","10","10","M","43","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","461.40","0.00","0.00","466.40","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("1004","898213","K/10/14/06/01171/2","OPD","K","CB Health Insurance","4","10","14","M","22","2","2013","","No","2013-02-16","","","5.00","58.00","75.00","0.00","0.00","0.00","0.00","138.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1005","890894","K/10/05/22/010687/01","OPD","K","CB Health Insurance","4","10","05","F","53","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","69.00","0.00","0.00","74.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("1006","898246","K/10/05/12/010857","OPD","K","CB Health Insurance","4","10","05","F","18","2","2013","","No","2013-02-16","","","5.00","75.00","75.00","0.00","17.00","0.00","0.00","172.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1007","732665","H/10/05/14/00223","OPD","H","CB Health Insurance","4","10","05","M","49","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","116.00","0.00","0.00","121.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("1008","023454","H/10/04/01/02082","OPD","H","CB Health Insurance","4","10","04","F","23","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","14.40","0.00","0.00","65.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1009","692892","Prisoner/DNS74/14/2013","OPD","Prisoner","Credit Service","4","10","D29","M","36","2","2013","","No","2013-02-16","","","5.00","78.00","75.00","0.00","0.00","0.00","0.00","158.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1010","397178","K/10/07/01/06267/01","OPD","K","CB Health Insurance","4","10","07","F","32","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","240.00","0.00","0.00","5.00","","2020-10-26","2020-11-25","43","0");
INSERT INTO treatment VALUES("1011","365131","K/10/10/26/07180","OPD","K","CB Health Insurance","4","10","10","M","80","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","196.00","0.00","0.00","201.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1012","859717","K/10/07/23/06684","OPD","K","CB Health Insurance","4","10","07","F","51","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","40.80","0.00","0.00","5.00","","2020-10-26","2020-11-25","45","0");
INSERT INTO treatment VALUES("1013","898128","K/10/04/26/23809","OPD","K","CB Health Insurance","4","10","04","F","3","2","2013","","No","2013-02-16","","","5.00","3.00","0.00","0.00","467.00","0.00","0.00","65.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1014","898233","K/10/01/16/0029/01","OPD","K","CB Health Insurance","4","10","01","M","36","2","2013","","No","2013-02-16","","","5.00","25.00","0.00","0.00","0.00","0.00","0.00","30.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1015","881006","K/10/09/04/03373","OPD","K","CB Health Insurance","4","10","09","M","60","2","2013","","No","2013-02-16","","","5.00","180.00","0.00","0.00","50.00","0.00","0.00","235.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1016","862358","K/10/12/12/2820890","OPD","K","CB Health Insurance","4","10","12","M","71","2","2013","","No","2013-02-16","","","5.00","100.00","0.00","0.00","0.00","0.00","0.00","105.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1017","898061","K/10/05/09/02077","OPD","K","CB Health Insurance","4","10","05","M","35","2","2013","","No","2013-02-16","","","5.00","100.00","0.00","0.00","164.00","0.00","0.00","269.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1018","898259","K/10/09/01/13740","OPD","K","CB Health Insurance","4","10","09","M","4","2","2013","","No","2013-02-16","","","5.00","40.00","0.00","0.00","30.00","0.00","0.00","75.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1019","885184","K/10/09/07/11203","OPD","K","CB Health Insurance","4","10","09","F","38","2","2013","","No","2013-02-16","","","5.00","55.00","0.00","0.00","0.00","0.00","0.00","60.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1020","896327","K/10/07/3/0513/07","OPD","K","CB Health Insurance","4","10","07","M","43","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","45.00","0.00","0.00","5.00","","2020-10-26","2020-11-25","53","0");
INSERT INTO treatment VALUES("1021","898282","K/10/04/011817/02","OPD","K","CB Health Insurance","4","10","04","F","31","2","2013","","No","2013-02-16","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","65.00","","2020-10-27","2020-11-26","53","0");
INSERT INTO treatment VALUES("1022","898284","K/09/09/10/1000","OPD","K","CB Health Insurance","4","09","09","M","53","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1023","898283","K/10/05/04/06133","OPD","K","CB Health Insurance","4","10","05","F","38","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1024","898145","K/09/09/08/01533","OPD","K","CB Health Insurance","4","09","09","F","43","2","2013","","No","2013-02-17","","","5.00","30.00","0.00","0.00","0.00","0.00","0.00","35.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1025","898166","K/09/03/06/05225","OPD","K","CB Health Insurance","4","09","03","M","67","2","2013","","No","2013-02-17","","","5.00","0.00","80.00","0.00","0.00","0.00","0.00","85.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1026","898344","K/10/04/02/12995","OPD","K","CB Health Insurance","4","10","04","F","36","2","2013","","No","2013-02-17","","","5.00","115.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1027","875759","H/10/06/3/07416","OPD","H","CB Health Insurance","4","10","06","F","34","2","2013","","No","2013-02-17","","","5.00","0.00","75.00","40.00","0.00","0.00","0.00","120.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1028","898067","K/10/11/0901125","OPD","K","CB Health Insurance","4","10","11","M","20","2","2013","","No","2013-02-17","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1029","879658","Employee/307/19/2013","OPD","Employee","Credit Service","4","10","D29","F","29","2","2013","","No","2013-02-17","","","5.00","0.00","75.00","0.00","0.00","0.00","0.00","80.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1030","537825","K/10/05/01/03776/01","OPD","K","CB Health Insurance","4","10","05","F","68","2","2013","","No","2013-02-17","","","5.00","125.00","0.00","0.00","216.00","0.00","0.00","346.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1031","812535","Prisoner/DNS17/14/2013","OPD","Prisoner","Credit Service","4","10","D29","F","30","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","9.20","0.00","0.00","14.20","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1032","898366","H/10/04/17/02520/01","OPD","H","CB Health Insurance","4","10","04","F","44","2","2013","","No","2013-02-17","","","5.00","78.00","0.00","0.00","0.00","0.00","0.00","65.00","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1033","628105","K/10/07/27/01257","OPD","K","CB Health Insurance","4","10","07","M","60","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","208.00","0.00","0.00","5.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1034","853078","K/10/05/10/04322","OPD","K","CB Health Insurance","4","10","05","F","19","2","2013","","No","2013-02-16","","","5.00","130.00","0.00","0.00","0.00","0.00","0.00","135.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1035","150018","K/10/05/01/06970/02","OPD","K","CB Health Insurance","4","10","05","M","14","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","173.40","0.00","0.00","178.40","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1036","022610","K/10/10/15/00607-2","OPD","K","CB Health Insurance","4","10","10","M","60","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","149.20","0.00","0.00","154.20","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1037","062542","K/10/02/10/03386","OPD","K","CB Health Insurance","4","10","02","F","53","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","465.00","0.00","0.00","20.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1038","347967","K/10/04/27/00223/01","OPD","K","CB Health Insurance","4","10","04","M","71","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","348.00","0.00","0.00","65.00","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1039","620756","K/10/10/14/022888","OPD","K","CB Health Insurance","4","10","10","F","78","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","661.00","0.00","0.00","666.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1040","721739","K/10/15/07/00001","OPD","K","CB Health Insurance","4","10","15","M","46","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","337.20","0.00","0.00","342.20","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1041","886942","K/19/02/17/03111/07","OPD","K","CB Health Insurance","4","19","02","M","43","2","2013","","No","2013-02-17","","","5.00","90.00","0.00","0.00","0.00","0.00","0.00","95.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1042","475012","K/10/08/23/00964","OPD","K","CB Health Insurance","4","10","08","F","38","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","30.00","0.00","0.00","35.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1043","032769","K/10/05/11/01115","OPD","K","CB Health Insurance","4","10","05","M","56","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","24.00","0.00","0.00","29.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1044","022240","K/10/04/19/01860/01","OPD","K","CB Health Insurance","4","10","04","F","65","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","105.60","0.00","0.00","65.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1045","898291","K/10/10/08/01579/01","OPD","K","CB Health Insurance","4","10","10","F","46","2","2013","","No","2013-02-17","","","5.00","80.00","75.00","0.00","0.00","0.00","0.00","160.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1046","035469","K/10/02/12/11138","OPD","K","CB Health Insurance","4","10","02","M","55","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","470.00","0.00","0.00","20.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1047","525937","K/10/04/26/04180","OPD","K","CB Health Insurance","4","10","04","M","68","2","2013","","No","2013-02-17","","","5.00","20.00","0.00","0.00","40.00","0.00","0.00","65.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1048","893151","H/10/07/19/05023","OPD","H","CB Health Insurance","4","10","07","F","36","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","67.25","0.00","0.00","5.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1049","885303","K/10/05/10/07138","OPD","K","CB Health Insurance","4","10","05","F","45","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","248.00","0.00","0.00","253.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1050","806198","Employee/309/19/2013","OPD","Employee","Credit Service","4","10","D29","F","2","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","10.00","0.00","0.00","15.00","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1051","415941","Employee/1703/9/2013","OPD","Employee","Credit Service","7","21","G/E/L/D","M","52","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","78.00","0.00","0.00","83.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1052","447686","K/10/07/27/04987","OPD","K","CB Health Insurance","4","10","07","M","44","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","29.00","0.00","0.00","5.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1053","885319","Prisoner/310/19/013","OPD","Prisoner","Credit Service","4","10","D29","M","20","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","15.00","0.00","0.00","20.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1054","898473","K/10/05/0015/02","OPD","K","CB Health Insurance","4","10","05","M","226","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","80.00","20.00","0.00","0.00","105.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1055","898497","K/10/06/21/02528/03","OPD","K","CB Health Insurance","4","10","06","F","15","2","2013","","No","2013-02-17","","","5.00","45.00","0.00","0.00","0.00","0.00","0.00","50.00","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1056","870842","K/10/11/19/06092","OPD","K","CB Health Insurance","4","10","11","F","30","2","2013","","No","2013-02-17","","","5.00","115.00","0.00","0.00","0.00","0.00","0.00","120.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1057","862208","K/10/15/05/00100/01","OPD","K","CB Health Insurance","4","10","15","F","19","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","296.00","0.00","0.00","301.00","","2020-10-27","2020-11-26","43","0");
INSERT INTO treatment VALUES("1058","409626","K/10/02/28/02841","OPD","K","CB Health Insurance","4","10","02","F","44","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","33.90","0.00","0.00","20.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1059","423890","K/10/05/01/00529","OPD","K","CB Health Insurance","4","10","05","F","45","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","936.00","0.00","0.00","941.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1060","563604","K/10/09/15/001000/01","OPD","K","CB Health Insurance","4","10","09","F","39","2","2013","","No","2013-02-17","","","5.00","40.00","0.00","0.00","0.00","0.00","0.00","45.00","","2020-10-27","2020-11-26","48","0");
INSERT INTO treatment VALUES("1061","559334","H/10/05/28/05021","OPD","H","CB Health Insurance","4","10","05","M","64","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","170.00","0.00","0.00","175.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1062","898138","K/10/08/33/05860","OPD","K","CB Health Insurance","4","10","08","M","6","2","2013","","No","2013-02-16","","","5.00","0.00","0.00","0.00","60.00","0.00","0.00","65.00","","2020-10-27","2020-11-26","45","0");
INSERT INTO treatment VALUES("1063","869365","K/10/10/01/08143","OPD","K","CB Health Insurance","4","10","10","M","67","2","2013","","No","2013-02-17","","","5.00","0.00","0.00","0.00","56.00","0.00","0.00","61.00","","2020-10-27","2020-11-26","44","0");
INSERT INTO treatment VALUES("1064","233223","K/10/07/06/01351/1","OPD","K","CB Health Insurance","4","10","07","F","55","2","2013","","No","2013-02-18","","","0.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-28","2020-11-27","11","0");
INSERT INTO treatment VALUES("1065","1212","K/10/07/10/120","OPD","K","CB Health Insurance","4","10","07","M","43","2","2013","","No","2013-02-06","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-10-28","2020-11-27","11","0");
INSERT INTO treatment VALUES("1066","1213","H/10/02/33/06560","OPD","H","CB Health Insurance","4","10","02","F","68","2","2013","","No","2013-02-04","","","0.00","0.00","0.00","0.00","20.00","0.00","0.00","20.00","","2020-10-28","2020-11-27","11","0");
INSERT INTO treatment VALUES("1067","1214","Employee/12130","OPD","Employee","Credit Service","4","10","D47","M","13","2","2013","","No","2013-02-04","","","5.00","0.00","0.00","0.00","130.00","0.00","0.00","135.00","","2020-10-28","2020-11-27","11","0");
INSERT INTO treatment VALUES("1068","2020","Student/10/142","OPD","Student","Credit Service","4","10","07","M","13","2","2013","","No","2013-02-10","","","5.00","0.00","0.00","0.00","0.00","0.00","0.00","5.00","","2020-11-03","2020-12-03","45","0");
INSERT INTO treatment VALUES("1069","896745","H/10/D35/03/05606/02","OPD","H","CB Health Insurance","4","10","D35","M","43","2","2013","","No","2013-02-04","","","0.00","0.00","0.00","0.00","20.00","0.00","0.00","20.00","","2020-11-03","2020-12-03","45","0");



DROP TABLE IF EXISTS user_type;

CREATE TABLE `user_type` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO user_type VALUES("1","Super_admin");
INSERT INTO user_type VALUES("2","Admin");
INSERT INTO user_type VALUES("3","Head");
INSERT INTO user_type VALUES("4","User");
INSERT INTO user_type VALUES("5","Org");



DROP TABLE IF EXISTS woreda;

CREATE TABLE `woreda` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `woreda_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreemenrt_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agreed` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO woreda VALUES("1","D01","Jimma town labor and social affair office","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("2","D02","Shebe Sembo Woreda","10","4","Health Care finance","Yes");
INSERT INTO woreda VALUES("3","D03","Meko Woreda","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("4","D04","Abebbo Woreda","Z06","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("5","D05","Dimma Woreda","01","8","Health Insurance","Yes");
INSERT INTO woreda VALUES("6","D06"," Goge Woreda","Z04","8","Health Insurance","Yes");
INSERT INTO woreda VALUES("7","D07","Jorre Woreda","003","8","Health Insurance","Yes");
INSERT INTO woreda VALUES("8","D08","Etang Special Woreda","Z03","8","Health Insurance","Yes");
INSERT INTO woreda VALUES("9","D09","Godari Woreda","Z02","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("10","D10","Mengesh Woreda","Z01","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("11","08","Limu Seqa Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("12","06","Limu Kosa Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("13","10","Xirro Afeta Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("14","11"," Senenxema Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("15","07","Dedo Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("16","09","Seqa Cheqorsa Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("17","15","Mencho Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("18","10","Omonada Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("19","03","Gumay Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("20","04","Qerssa Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("21","01","Gera woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("22","16","Chora Botor Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("23","D12","Omobeyem Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("24","02","Goma Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("25","05","Mana Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("26","12","Sekoru Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("27","01","Boyecha Woreda","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("28","06","Bedele Town","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("29","05","Gechi Woreda","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("30","02","Deddessa Woreda","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("31","04","Chorraa Woreda","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("32","03","Chewaqa Woreda","19","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("33","D15"," Horumu Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("34","D16","Yayu Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("35","D17"," Bilo Notsa Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("36","D18","Alle Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("37","D19","Diddo Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("38","08","Mettu Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("39","D21","Darimu Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("40","03","Bure Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("41","D22","Gembo woreda","21","7","Health Insurance","Yes");
INSERT INTO woreda VALUES("42","D23"," JU Students Service","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("43","D24"," JU Health Institue","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("44","D25","TB Green Coffee S.C","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("45","JU-employee","JU Permanent Employee","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("46","Agri","JU Agri and Veternary College","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("47","JIT"," JIT","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("48","D29","Jimma Town Prisons Adminstration","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("49","D30","Bonga Prisons Adminstration","21","7","Credit Service","Yes");
INSERT INTO woreda VALUES("50","D31","Jimma town city bus service","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("51","D32","Limu Buna Farm Development","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("52","D33","Arjo Dedessa Sugar factory","19","4","Credit Service","Yes");
INSERT INTO woreda VALUES("53","D34","የስደተኞች ከስደት ተመላሽ ድርጅት","02","8","Credit Service","Yes");
INSERT INTO woreda VALUES("54","D35"," Gilgel Gebe No 1 power station","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("55","D36","Salini-impregilo S.P.A Koysha Hydroelectric pro","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("56","D36","Gambella MSF Spain","02","8","Credit Service","Yes");
INSERT INTO woreda VALUES("57","D37","Gambella MSF Holland","02","8","Credit Service","Yes");
INSERT INTO woreda VALUES("58","D38","Bebeqa Buna farm devepment","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("59","D39","TB Buna farm development","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("60","CBE-Main","CBE Jimma Main branch","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("61","J/A/D","Jimma Airport","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("62","D42","Ethiopia Electric service South region","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("63","G/E/L/D","Gojeb farm development organization","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("64","D44","Addis Kidan Bete/Childhood Project","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("65","JUSH","Jimma Medical Center","10","4","Credit Service","Yes");
INSERT INTO woreda VALUES("68","D45","Nono Benja Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("69","D46","Sigmo Woreda","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("70","D47","Agaro town","10","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("71","10","Hallo Woreda","09","4","Health Insurance","Yes");
INSERT INTO woreda VALUES("72","23","Tolaye Woreda","10","4","Health Insurance","Yes");



DROP TABLE IF EXISTS year;

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL AUTO_INCREMENT,
  `max_year` varchar(20) NOT NULL,
  `min_year` varchar(30) NOT NULL,
  PRIMARY KEY (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO year VALUES("1","2013","2012");



DROP TABLE IF EXISTS zones;

CREATE TABLE `zones` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO zones VALUES("1","1","Mezhenger","8","Found in Gambela");
INSERT INTO zones VALUES("2","2","Gambela town","8","Found in Gambela");
INSERT INTO zones VALUES("3","3","Anyuake","8","Found in Gambela");
INSERT INTO zones VALUES("4","4","Nuwer","8","Found in Gambela");
INSERT INTO zones VALUES("5","9","Elibabor","4","found in oromia");
INSERT INTO zones VALUES("7","10","Jimma","4","found in oromia ");
INSERT INTO zones VALUES("16","19","Buno Bedele","4","found in oromia");
INSERT INTO zones VALUES("19","21","Keffa ","7","Found in south nations and nationality of people");
INSERT INTO zones VALUES("20","145","Benjimaji","7","Found in SSNP");



