/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.1.37-MariaDB : Database - hist_chat_application
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hist_chat_application` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hist_chat_application`;

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message` text,
  `message_time` datetime DEFAULT NULL,
  PRIMARY KEY (`message_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `messages` */

insert  into `messages`(`message_id`,`user_id`,`message`,`message_time`) values 
(1,1,'xzxxxzxzxZx','2024-08-15 11:09:03'),
(2,1,'Hello','2024-08-15 11:12:22'),
(3,1,'dcsdcsdcsdcsdc','2024-08-15 11:13:03'),
(4,1,'czxcxcxzcxzcxzcxzcxzczxc','2024-08-15 11:14:17'),
(5,1,'Salam','2024-08-15 11:28:52'),
(6,1,'Hello Every One','2024-08-15 11:31:03'),
(7,1,'dvsdvsvdvsvsvs','2024-08-15 11:37:36'),
(8,3,'W Salam','2024-08-15 11:40:30'),
(9,3,'ccxczxczxczx','2024-08-15 11:46:30'),
(10,1,'ABCD','2024-08-15 11:47:24'),
(11,3,'csdcdscsdcsdcs','2024-08-15 11:48:09'),
(12,3,'Hello Haider Are You There','2024-08-15 11:53:38'),
(13,1,'xxZxX','2024-08-15 11:54:28'),
(14,1,'New MSG','2024-08-15 11:55:22'),
(15,3,'Ali KHAn Message Show Ho Rha Hai','2024-08-15 11:55:53'),
(16,3,'Hello Waseem','2024-08-15 12:17:53'),
(17,2,'Yes Ali','2024-08-15 12:18:05'),
(18,3,'sffafasdsdasdsadsads&#039;','2024-08-15 12:19:19'),
(19,1,'xxzxZxZx','2024-08-15 12:31:31'),
(20,2,'Yes Hello Dear Haider','2024-08-15 12:37:17'),
(21,1,'Yes Waseem I&#039;m Here','2024-08-15 12:37:47'),
(22,4,'vxcvxcvcxvxcvxcvcxvxcvxcv','2024-08-15 12:44:03'),
(23,1,'hello','2024-08-15 23:10:01'),
(24,2,'bhai kahir to hai','2024-08-15 23:11:37'),
(25,1,'ha','2024-08-15 23:12:41'),
(26,6,'Hello kese ho sary?','2024-08-15 23:59:55'),
(27,8,'bhai me jawad hon hyderabad se aur ap?','2024-08-16 00:05:11'),
(28,6,'me jhanzaib hu islamabad se...','2024-08-16 00:07:24'),
(29,9,'hello my name is shazy','2024-08-16 00:09:31'),
(30,9,'sorry shanzy*','2024-08-16 00:09:42'),
(31,8,'shanzy ap kesi ho?','2024-08-16 00:10:10'),
(32,9,'karam h malik ka ap btao?','2024-08-16 00:10:31'),
(33,10,'hello me salman india se','2024-08-16 00:14:09'),
(34,9,'ary bhai salman bollywood wala...','2024-08-16 00:14:38'),
(35,9,'G G wahi hon','2024-08-16 00:14:50'),
(36,10,'han me wohi hon salman','2024-08-16 00:15:10'),
(37,9,'I am testing users of this application fr','2024-08-16 00:15:51'),
(38,9,'new and old','2024-08-16 00:16:05'),
(39,10,'hmm','2024-08-16 00:16:22');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` blob,
  `is_online` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`first_name`,`last_name`,`email`,`password`,`profile_image`,`is_online`) values 
(1,'Haider','Khan','hk@gmail.com','12345','profile_images/image.jpg',0),
(2,'Waseem','Baloch','wb@gmail.com','12345','profile_images/image.jpg',0),
(3,'Ali','Khan','a@gmail.com','12345','profile_images/image.jpg',0),
(4,'Iqra','Shaikh','iq@gmail.com','12345','profile_images/image.jpg',0),
(6,'Jhanzaib','Khan','jani@gmail.com','hellojani','profile_images/1764489048name.jpg',0),
(8,'Ahmed','Mujtaba','memonjawad54@gmail.com','hello123','profile_images/3546048711672334622901.jpg',0),
(9,'Shanzy','Ali','shanzy@gmail.com','sh12345','profile_images/1702725078hi.jpg',0),
(10,'Salman','Khan','salman@gmail.com','sk123','profile_images/660916149images.jpeg',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
