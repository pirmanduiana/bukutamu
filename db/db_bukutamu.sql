/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.33-MariaDB : Database - db_bukutamu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_bukutamu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_bukutamu`;

/*Table structure for table `t_feedbackid` */

DROP TABLE IF EXISTS `t_feedbackid`;

CREATE TABLE `t_feedbackid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` int(11) DEFAULT NULL,
  `lokasi_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `t_feedbackid` */

insert  into `t_feedbackid`(`id`,`feedback`,`lokasi_id`,`created_at`,`updated_at`) values 
(1,1,NULL,'2018-07-05 06:14:15','2018-07-05 06:14:15'),
(2,0,NULL,'2018-07-05 06:16:16','2018-07-05 06:16:16'),
(3,1,NULL,'2018-07-05 06:16:20','2018-07-05 06:16:20'),
(4,0,NULL,'2018-07-05 06:27:47','2018-07-05 06:27:47'),
(5,1,NULL,'2018-07-05 07:22:39','2018-07-05 07:22:39'),
(6,0,NULL,'2018-07-05 07:22:43','2018-07-05 07:22:43'),
(7,1,NULL,'2018-07-05 07:45:36','2018-07-05 07:45:36'),
(8,1,NULL,'2018-07-05 07:45:44','2018-07-05 07:45:44'),
(9,1,NULL,'2018-07-05 07:46:56','2018-07-05 07:46:56'),
(10,1,NULL,'2018-07-05 07:47:02','2018-07-05 07:47:02'),
(11,0,NULL,'2018-07-05 07:56:43','2018-07-05 07:56:43'),
(12,1,NULL,'2018-07-05 07:56:46','2018-07-05 07:56:46'),
(13,0,NULL,'2018-07-05 07:56:53','2018-07-05 07:56:53'),
(14,1,NULL,'2018-07-05 07:59:52','2018-07-05 07:59:52'),
(15,0,NULL,'2018-07-05 07:59:56','2018-07-05 07:59:56'),
(16,1,NULL,'2018-07-05 08:00:00','2018-07-05 08:00:00'),
(17,0,NULL,'2018-07-05 08:00:04','2018-07-05 08:00:04'),
(18,0,NULL,'2018-07-05 08:02:19','2018-07-05 08:02:19'),
(19,1,NULL,'2018-07-05 08:02:24','2018-07-05 08:02:24'),
(20,0,NULL,'2018-07-05 08:03:57','2018-07-05 08:03:57'),
(21,1,NULL,'2018-07-05 08:12:31','2018-07-05 08:12:31'),
(22,0,NULL,'2018-07-05 08:12:40','2018-07-05 08:12:40'),
(23,0,NULL,'2018-07-05 08:12:46','2018-07-05 08:12:46'),
(24,1,NULL,'2018-07-05 08:12:51','2018-07-05 08:12:51'),
(25,1,NULL,'2018-07-05 08:13:08','2018-07-05 08:13:08'),
(26,1,NULL,'2018-07-05 08:32:51','2018-07-05 08:32:51'),
(27,0,NULL,'2018-07-05 08:32:58','2018-07-05 08:32:58'),
(28,0,NULL,'2018-07-05 08:33:08','2018-07-05 08:33:08'),
(29,1,NULL,'2018-07-05 08:33:12','2018-07-05 08:33:12'),
(30,1,NULL,'2018-07-05 08:33:21','2018-07-05 08:33:21'),
(31,0,NULL,'2018-07-05 08:33:25','2018-07-05 08:33:25'),
(32,1,NULL,'2018-07-05 08:33:29','2018-07-05 08:33:29'),
(33,1,NULL,'2018-07-05 08:33:55','2018-07-05 08:33:55'),
(34,0,NULL,'2018-07-05 08:34:00','2018-07-05 08:34:00'),
(35,0,NULL,'2018-07-05 17:44:48','2018-07-05 17:44:48'),
(36,1,NULL,'2018-07-05 17:44:52','2018-07-05 17:44:52'),
(37,0,NULL,'2018-07-06 00:46:46','2018-07-06 00:46:46'),
(38,0,1,'2018-07-10 01:02:00','2018-07-10 01:02:00');

/*Table structure for table `t_lokasi` */

DROP TABLE IF EXISTS `t_lokasi`;

CREATE TABLE `t_lokasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `flag_aktif` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_lokasi` */

insert  into `t_lokasi`(`id`,`nama`,`lokasi`,`flag_aktif`,`created_at`,`updated_at`) values 
(1,'Festival Budaya Pertanian Kabupaten Badung','Petang',1,'2018-07-10 08:53:14','0000-00-00 00:00:00');

/*Table structure for table `t_tamu` */

DROP TABLE IF EXISTS `t_tamu`;

CREATE TABLE `t_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `asal` text,
  `lokasi_id` int(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_tamu` */

insert  into `t_tamu`(`id`,`nama`,`email`,`no_hp`,`asal`,`lokasi_id`,`created_at`,`updated_at`) values 
(1,'Lel','kdsj','9238','kskjd',1,'2018-07-10 00:55:54','2018-07-10 00:55:54');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
