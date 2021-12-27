/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.1.38-MariaDB : Database - tics
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tics` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tics`;

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appaterno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apmaterno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`nombre`,`appaterno`,`apmaterno`,`email`,`telefono`,`direccion`,`created_at`,`updated_at`) values (2,'Jennifer','Edith','Ramos','al221410130@gmail.com','0987654321','Orquideas 33 balbla','2020-04-13 03:09:04','2020-04-13 03:09:04'),(3,'Fernando','Ramos','Romero','hakudoshi447@gmail.com','5528985647','Xonacatlan','2020-04-13 03:10:16','2020-04-13 03:17:08');

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `idemp` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `appat` varchar(50) NOT NULL,
  `apmat` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idemp`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `empleados` */

insert  into `empleados`(`idemp`,`nombre`,`appat`,`apmat`,`telefono`,`direccion`,`updated_at`,`created_at`) values (3,'Marina','Garcia','Gutierres','1234567890','Xonacatlan','2020-04-13 03:53:06','2020-04-13 03:46:27'),(4,'Alexander','Perez','Martinez','0987654321','Xonacatlan','2020-04-13 03:56:15','2020-04-13 03:54:02');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_04_12_201923_create_usuario_table',1),(4,'2020_04_12_202028_create_cliente_table',1),(5,'2020_04_12_202127_create_empleado_table',1),(6,'2020_04_12_202202_create_producto_table',1),(7,'2020_04_12_202245_create_venta_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracteristicas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `falla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `productos` */

insert  into `productos`(`id`,`producto`,`serie`,`caracteristicas`,`falla`,`cantidad`,`precio`,`created_at`,`updated_at`) values (2,'Laptop','ASD4567','Azul, procesador tal, etc','No sirve la bocina y teclado','2','3000.00','2020-04-13 04:23:25','2020-04-13 04:30:48');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idusuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varbinary(50) NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idusuario`,`nombre`,`usuario`,`email`,`password`,`created_at`,`updated_at`) values (2,'Alexander','Alex','al221410130@gmail.com','1234567','2020-04-13 01:01:00','2020-04-13 02:33:22'),(3,'Fernando','fernando566','hakudoshi447@gmail.com','9876543','2020-04-13 01:01:20','2020-04-13 01:01:20'),(4,'Edith','Edith75','edith@hotmail.com','456789999','2020-04-13 01:01:45','2020-04-13 02:37:58'),(7,'Jennief jdjdj','hdhjfhdfb','jjudeunrhug@gmail.com','3456789','2020-04-13 01:14:19','2020-04-13 01:14:19');

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `venta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracteristicas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ventas` */

insert  into `ventas`(`id`,`venta`,`cantidad`,`precio`,`caracteristicas`,`descripcion`,`cliente`,`created_at`,`updated_at`) values (1,'Normal','10','23000','laptos sin fallas','computadoras en perfecto estado','Fernando Ramos',NULL,'2020-04-13 05:04:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
