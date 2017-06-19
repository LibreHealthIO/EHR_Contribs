CREATE TABLE IF NOT EXISTS pqrs_form_rheumatoid_arthritis (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `pid` bigint(20) DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `groupname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `authorized` tinyint(4) DEFAULT NULL,
  `activity` tinyint(4) DEFAULT NULL, 
  `purpose` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0108` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0128` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0131` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0176` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0177` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0178` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0179` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0180` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Rheumatoid_Arthritis0337` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recommendation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `finalize` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
)
