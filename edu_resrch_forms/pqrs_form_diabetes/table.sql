CREATE TABLE IF NOT EXISTS pqrs_form_diabetes (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT NULL, 
  `purpose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Diabetes0001` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diabetes0110` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diabetes0117` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diabetes0119` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diabetes0126` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diabetes0226` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `finalize` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)
