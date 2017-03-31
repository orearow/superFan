# Host: localhost  (Version 5.7.17-log)
# Date: 2017-03-31 11:36:18
# Generator: MySQL-Front 6.0  (Build 1.86)


#
# Structure for table "movie"
#

DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `release` int(11) NOT NULL,
  `plot synopsis` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "movie"
#

