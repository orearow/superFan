# Host: localhost  (Version 5.7.17-log)
# Date: 2017-03-25 16:58:05
# Generator: MySQL-Front 6.0  (Build 1.86)


#
# Structure for table "movie"
#

DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `release` int(11) NOT NULL AUTO_INCREMENT,
  `plot synopsis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`release`),
  UNIQUE KEY `name` (`release`),
  UNIQUE KEY `year` (`release`),
  UNIQUE KEY `release` (`release`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "movie"
#


#
# Structure for table "movie has"
#

DROP TABLE IF EXISTS `movie has`;
CREATE TABLE `movie has` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`),
  UNIQUE KEY `first name` (`Id`),
  UNIQUE KEY `last name` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "movie has"
#


#
# Structure for table "movie watches"
#

DROP TABLE IF EXISTS `movie watches`;
CREATE TABLE `movie watches` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `FANid` (`Id`),
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "movie watches"
#


#
# Structure for table "movie writers"
#

DROP TABLE IF EXISTS `movie writers`;
CREATE TABLE `movie writers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `writers` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "movie writers"
#


#
# Structure for table "movie-directors"
#

DROP TABLE IF EXISTS `movie-directors`;
CREATE TABLE `movie-directors` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `director` (`Id`),
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "movie-directors"
#


#
# Structure for table "tv directors"
#

DROP TABLE IF EXISTS `tv directors`;
CREATE TABLE `tv directors` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `directors` (`Id`),
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tv directors"
#


#
# Structure for table "tv series"
#

DROP TABLE IF EXISTS `tv series`;
CREATE TABLE `tv series` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `crated by` varchar(255) DEFAULT NULL,
  `number of episodes` varchar(255) DEFAULT NULL,
  `syndication status` varchar(255) DEFAULT NULL,
  `network exclusivity` varchar(255) DEFAULT NULL,
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tv series"
#


#
# Structure for table "tv-has"
#

DROP TABLE IF EXISTS `tv-has`;
CREATE TABLE `tv-has` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`),
  UNIQUE KEY `first name` (`Id`),
  UNIQUE KEY `last name` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tv-has"
#


#
# Structure for table "tv-watches"
#

DROP TABLE IF EXISTS `tv-watches`;
CREATE TABLE `tv-watches` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `FANid` (`Id`),
  UNIQUE KEY `Name` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tv-watches"
#


#
# Structure for table "tv-wriers"
#

DROP TABLE IF EXISTS `tv-wriers`;
CREATE TABLE `tv-wriers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `writers` (`Id`),
  UNIQUE KEY `name` (`Id`),
  UNIQUE KEY `year` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "tv-wriers"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `email` varchar(30) NOT NULL DEFAULT '0',
  `gender` varchar(255) DEFAULT NULL,
  `fanid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`fanid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

INSERT INTO `user` VALUES ('brandongob@gmail.com','male',1),('brandongob@gmail.com','male',2),('brandongob@gmail.com','male',3),('brandongob@gmail.com','male',4),('brandongob@gmail.com','male',5),('brandongob@gmail.com','male',6);
