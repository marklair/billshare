/*
 Navicat MySQL Data Transfer

 Source Server         : cake
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : billshare

 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 01/25/2013 23:18:25 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `billingcycles`
-- ----------------------------
DROP TABLE IF EXISTS `billingcycles`;
CREATE TABLE `billingcycles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `billingcycles`
-- ----------------------------
INSERT INTO `billingcycles` VALUES ('1', 'Annually'), ('2', 'Monthly'), ('3', 'Quarterly'), ('4', 'Weekly'), ('5', 'Daily');

-- ----------------------------
--  Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `household_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `comments`
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '2', '1', '1', 'comment', 'blah blah blah', '2011-02-28 18:45:34', '2011-02-28 18:45:34'), ('2', '5', '2', '7', 'nice post', 'I like it', '2012-04-06 21:23:36', '2012-04-06 21:23:36'), ('3', '6', '2', '7', 'mee too', 'I like it too', '2012-04-06 21:25:28', '2012-04-06 21:25:28'), ('4', '6', '2', '8', 'fdasdf', 'adfadf', '2012-04-09 14:07:24', '2012-04-09 14:07:24'), ('6', '6', '2', '8', 'test comment', 'this should work', '2012-04-09 14:36:27', '2012-04-09 14:36:27'), ('7', '3', '1', '5', 'good post', 'me likey', '2012-04-10 21:31:30', '2012-04-10 21:31:30'), ('8', '3', '1', '5', 'good post1', 'me likey1', '2012-04-10 21:38:30', '2012-04-11 09:35:11');

-- ----------------------------
--  Table structure for `households`
-- ----------------------------
DROP TABLE IF EXISTS `households`;
CREATE TABLE `households` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(9) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `households`
-- ----------------------------
INSERT INTO `households` VALUES ('1', '5037 Musselshell Dr.', '2', '2011-02-28 18:18:22', '2011-02-28 18:18:22', 'New Port RIchey', 'Florida', '34655', 'USA'), ('2', '123 Test Street', '1', '2012-03-13 16:12:53', '2012-03-22 14:02:13', 'Testvilleington', 'Florida', '33334', 'USA'), ('3', '3 household str', '0', '2012-03-23 15:17:57', '2012-03-23 15:18:31', 'threeville', 'FL', '34555', 'USA');

-- ----------------------------
--  Table structure for `payfreqs`
-- ----------------------------
DROP TABLE IF EXISTS `payfreqs`;
CREATE TABLE `payfreqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `multiplier` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `payfreqs`
-- ----------------------------
INSERT INTO `payfreqs` VALUES ('1', 'Annually', '0'), ('2', 'Monthly', '0'), ('3', 'Weekly', '0'), ('4', 'Hourly', '0');

-- ----------------------------
--  Table structure for `personal_expenses`
-- ----------------------------
DROP TABLE IF EXISTS `personal_expenses`;
CREATE TABLE `personal_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `billingcycle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `personal_expenses`
-- ----------------------------
INSERT INTO `personal_expenses` VALUES ('1', '4', 'Car', '500', '2'), ('2', '6', 'Car', '500', '2'), ('3', '6', 'Car', '500', '2'), ('4', '6', 'Car', '500', '2'), ('5', '6', 'Car', '500', '2'), ('6', '6', 'Car', '500', '2'), ('7', '6', 'Car', '500', '2'), ('8', '6', 'Car', '500', '2'), ('9', '6', 'Car', '500', '2'), ('10', '6', 'Car', '500', '2'), ('11', '6', 'Car', '500', '2');

-- ----------------------------
--  Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `household_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `posts`
-- ----------------------------
INSERT INTO `posts` VALUES ('3', '1', '3', '2012-03-13 09:46:21', '2012-03-13 09:46:21', 'test post from user', 'hi'), ('4', '1', '1', '2012-03-13 09:47:40', '2012-03-13 09:47:40', 'admin post', 'this is your leader'), ('5', '1', '4', '2012-03-13 09:54:05', '2012-03-13 09:54:05', 'manager post', 'this is your team leader\r\n'), ('7', '2', '5', '2012-03-13 17:24:12', '2012-03-13 17:24:12', 'post from mgr2', 'blah blah'), ('8', '2', '5', '2012-03-22 14:46:05', '2012-03-22 14:46:05', 'test post from hoh2', 'hi '), ('9', '2', '6', '2012-04-09 11:34:00', '2012-04-09 11:34:00', 'fadf', 'adfasd'), ('10', '2', '6', '2012-04-09 11:34:23', '2012-04-09 11:34:23', 'fadf', 'adfasd');

-- ----------------------------
--  Table structure for `shared_expenses`
-- ----------------------------
DROP TABLE IF EXISTS `shared_expenses`;
CREATE TABLE `shared_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `billingcycle_id` int(11) NOT NULL,
  `household_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `shared_expenses`
-- ----------------------------
INSERT INTO `shared_expenses` VALUES ('1', 'Mortgage', '1500', '2', '2');

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `household_id` int(11) NOT NULL,
  `income_amt` decimal(10,0) NOT NULL,
  `payfreq_id` int(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `users`
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'cazbah', 'f3dcb0ae0d62b8d71bd5a42d2a545bb7e1069530', 'Mark', 'Lair', '555-555-5555', 'mark@stltest.com', '1', '12345', '1', '2012-03-12 15:49:51', '2012-03-12 15:49:51', 'admin'), ('3', 'test', '719f5c16f2effa98477f99c69f577b37645ab1ea', 'test', 'test', '555-555-5555', 'test@test.com', '1', '44444444', '1', '2012-03-13 09:44:47', '2012-03-14 14:40:09', 'user'), ('4', 'mgr', '719f5c16f2effa98477f99c69f577b37645ab1ea', 'mgr', 'mc gillicutty', '555-555-5555', 'mgr@test.com', '1', '123456', '1', '2012-03-13 09:53:06', '2012-03-13 09:53:06', 'hoh'), ('5', 'mgr2', '719f5c16f2effa98477f99c69f577b37645ab1ea', 'manager2', 'household2', '444-444-4444', 'test@test.com', '2', '5', '1', '2012-03-13 16:10:38', '2012-03-13 17:15:39', 'hoh'), ('6', 'test2', '719f5c16f2effa98477f99c69f577b37645ab1ea', 'test2', 'test', '555-555-5555', 'test2@test2.com', '2', '4', '1', '2012-03-15 10:50:10', '2012-03-15 10:50:10', 'user'), ('7', 'mgr3', '719f5c16f2effa98477f99c69f577b37645ab1ea', 'test3', 'test', '555-555-5555', 'test3@test3.com', '3', '45000', '1', '2012-03-23 15:17:57', '2012-03-23 15:17:57', 'hoh');

