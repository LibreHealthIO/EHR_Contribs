CREATE TABLE IF NOT EXISTS pqrs_form_hepatitis_c (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT NULL, 
  `purpose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0084` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0085` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0087` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0130` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0183` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0226` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0390` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Hepatitis_C0401` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `finalize` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)
