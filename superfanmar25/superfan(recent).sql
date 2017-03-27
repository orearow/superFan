# Host: localhost  (Version 5.7.17-log)
# Date: 2017-03-27 11:35:57
# Generator: MySQL-Front 6.0  (Build 1.86)


#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL DEFAULT '0',
  `privileges` int(1) DEFAULT NULL,
  `fanid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`fanid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

