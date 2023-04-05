drop database sisservice;
create database sisservice;
use sisservice;

DELIMITER ;;
CREATE FUNCTION `remove_accents`(`str` TEXT) RETURNS text CHARSET utf8mb4
    NO SQL
    DETERMINISTIC
    SQL SECURITY INVOKER
BEGIN

    SET str = REPLACE(str,'Š','S');
    SET str = REPLACE(str,'š','s');
    SET str = REPLACE(str,'Ð','Dj');
    SET str = REPLACE(str,'Ž','Z');
    SET str = REPLACE(str,'ž','z');
    SET str = REPLACE(str,'À','A');
    SET str = REPLACE(str,'Á','A');
    SET str = REPLACE(str,'Â','A');
    SET str = REPLACE(str,'Ã','A');
    SET str = REPLACE(str,'Ä','A');
    SET str = REPLACE(str,'Å','A');
    SET str = REPLACE(str,'Æ','A');
    SET str = REPLACE(str,'Ç','C');
    SET str = REPLACE(str,'È','E');
    SET str = REPLACE(str,'É','E');
    SET str = REPLACE(str,'Ê','E');
    SET str = REPLACE(str,'Ë','E');
    SET str = REPLACE(str,'Ì','I');
    SET str = REPLACE(str,'Í','I');
    SET str = REPLACE(str,'Î','I');
    SET str = REPLACE(str,'Ï','I');
    SET str = REPLACE(str,'Ñ','N');
    SET str = REPLACE(str,'Ò','O');
    SET str = REPLACE(str,'Ó','O');
    SET str = REPLACE(str,'Ô','O');
    SET str = REPLACE(str,'Õ','O');
    SET str = REPLACE(str,'Ö','O');
    SET str = REPLACE(str,'Ø','O');
    SET str = REPLACE(str,'Ù','U');
    SET str = REPLACE(str,'Ú','U');
    SET str = REPLACE(str,'Û','U');
    SET str = REPLACE(str,'Ü','U');
    SET str = REPLACE(str,'Ý','Y');
    SET str = REPLACE(str,'Þ','B');
    SET str = REPLACE(str,'ß','Ss');
    SET str = REPLACE(str,'à','a');
    SET str = REPLACE(str,'á','a');
    SET str = REPLACE(str,'â','a');
    SET str = REPLACE(str,'ã','a');
    SET str = REPLACE(str,'ä','a');
    SET str = REPLACE(str,'å','a');
    SET str = REPLACE(str,'æ','a');
    SET str = REPLACE(str,'ç','c');
    SET str = REPLACE(str,'è','e');
    SET str = REPLACE(str,'é','e');
    SET str = REPLACE(str,'ê','e');
    SET str = REPLACE(str,'ë','e');
    SET str = REPLACE(str,'ì','i');
    SET str = REPLACE(str,'í','i');
    SET str = REPLACE(str,'î','i');
    SET str = REPLACE(str,'ï','i');
    SET str = REPLACE(str,'ð','o');
    SET str = REPLACE(str,'ñ','n');
    SET str = REPLACE(str,'ò','o');
    SET str = REPLACE(str,'ó','o');
    SET str = REPLACE(str,'ô','o');
    SET str = REPLACE(str,'õ','o');
    SET str = REPLACE(str,'ö','o');
    SET str = REPLACE(str,'ø','o');
    SET str = REPLACE(str,'ù','u');
    SET str = REPLACE(str,'ú','u');
    SET str = REPLACE(str,'û','u');
    SET str = REPLACE(str,'ý','y');
    SET str = REPLACE(str,'ý','y');
    SET str = REPLACE(str,'þ','b');
    SET str = REPLACE(str,'ÿ','y');
    SET str = REPLACE(str,'ƒ','f');


    RETURN str;
END ;;
DELIMITER ;


-- =========================
-- ==== CREACION TABLAS ====
-- =========================
DROP TABLE IF EXISTS `migrations`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `password_resets`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `roles`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `roles` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idrol` int(11) DEFAULT NULL,
  `idavatar` int(11) DEFAULT NULL,
  `api_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
   `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `fk_idrol_users` (`idrol`),
  CONSTRAINT `fk_idrol_users` FOREIGN KEY (`idrol`) REFERENCES `roles` (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `logerrors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `methodname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `errormessage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateoccurred` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tipodocumento`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipodocumento` (
  `iddocumento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`iddocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `clientes`;
SET character_set_client = utf8mb4 ;
CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL AUTO_INCREMENT,
  `codtipodoc` int(11) DEFAULT NULL,
  `nombrecliente` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appaternocl` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apmaternocl` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coducmento` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codcliente`),
  UNIQUE KEY `clientes_email_estado` (`email`,`estado`),
  KEY `fk_codtipodoc_clientes` (`codtipodoc`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tiposervicios`;
SET character_set_client = utf8mb4 ;
CREATE TABLE `tiposervicios` (
  `codtiposervicio` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NULL DEFAULT ' ',
  `precio` FLOAT(8,2) DEFAULT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codtiposervicio`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tasainteres`;
SET character_set_client = utf8mb4 ;
CREATE TABLE `tasainteres` (
  `codtasainteres` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codtasainteres`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



DROP TABLE IF EXISTS `tipocomprobantes`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipocomprobantes` (
  `codcomprobante` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecomprobante` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigosunat` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correlativo` int(11) NOT NULL DEFAULT '0',
  `agregarigv` int(11) DEFAULT '0',
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codcomprobante`),
  UNIQUE KEY `ak_nombrecomprobante` (`nombrecomprobante`,`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tipoestadoservicio`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipoestadoservicio` (
  `codtipoestadoservicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Producción',
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT ' ',
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codtipoestadoservicio`),
  UNIQUE KEY `ak_nombre` (`nombre`,`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `estadoservicio`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `estadoservicio` (
  `codestadoservicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreestadoservicio` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '',
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT ' ',
  `backgroundColor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#d3d3d3',
  `textColor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#000',
  `codtipoestadoservicio` int(11) NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codestadoservicio`,`codtipoestadoservicio`),
  UNIQUE KEY `ak_nombreestadoservicio` (`nombreestadoservicio`,`estado`),
  KEY `fk_codtipoestadoservicio_estadoservicio` (`codtipoestadoservicio`),
  CONSTRAINT `fk_codtipoestadoservicio_estadoservicio` FOREIGN KEY (`codtipoestadoservicio`) REFERENCES `tipoestadoservicio` (`codtipoestadoservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `estadoorden`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `estadoorden` (
  `codestadoorden` int(11) NOT NULL AUTO_INCREMENT,
  `nombreestadoorden` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Producción',
  `descripcionorden` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT ' ',
  `backgroundColor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#d3d3d3',
  `textColor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#000',
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codestadoorden`),
  UNIQUE KEY `ak_nombreestadoorden` (`nombreestadoorden`,`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `estadopago`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `estadopago` (
  `codestadopago` int(11) NOT NULL AUTO_INCREMENT,
  `nombreestadopago` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backgroundColor` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT '#d3d3d3',
  `textColor` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT '#000',
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codestadopago`),
  UNIQUE KEY `ak_nombreestadopago` (`nombreestadopago`,`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tipoigv`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipoigv` (
  `codtipoigv` int(11) NOT NULL AUTO_INCREMENT,
  `porcentaje` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sininculir` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incluido` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activacion` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codtipoigv`),
  UNIQUE KEY `ak_porcentaje` (`porcentaje`,`estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tipomoneda`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tipomoneda` (
  `codtipomoneda` int(11) NOT NULL AUTO_INCREMENT,
  `nombretipomoneda` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codtipomoneda`),
  UNIQUE KEY `ak_nombretipomoneda` (`nombretipomoneda`,`estado`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `servicios`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `servicios` (
  `codservicio` int(11) NOT NULL AUTO_INCREMENT,
  `codcliente` int(11) DEFAULT NULL,
  `codempleado` int(11) DEFAULT NULL,
  `codcomprobante` int(11) DEFAULT NULL,
  `codestadoservicio` int(11) DEFAULT NULL,
  `serie` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_servicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_anticipadogeneral` timestamp NOT NULL,
  `fecha_finsercanogeneral` timestamp NOT NULL,
  `fecha_fingeneral` timestamp NOT NULL,
  `subtotal` decimal(12,2) DEFAULT NULL,
  `total` decimal(12,2) DEFAULT NULL,
  /*`descuento` decimal(12,2) DEFAULT '0.00',
  `montodescuento` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT '0.00',
  `descunetototal` decimal(12,2) DEFAULT '0.00',
  `detalledescuento` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detallepromocion` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promocion` decimal(12,2) NOT NULL DEFAULT '0.00',
  `promociontotal` decimal(12,2) NOT NULL DEFAULT '0.00',
  `pesogeneral` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT '0.0',
  `igv` decimal(12,2) NOT NULL DEFAULT '0.00',
  `saldopendiente` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT '',  
  `codtipomoneda` int(11) DEFAULT NULL,
  `codestadopago` int(11) DEFAULT NULL,
  `codtipoigv` int(11) DEFAULT NULL,
  `igvmonto` decimal(12,2) NOT NULL DEFAULT '0.00',
  `guiaenvio` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,*/
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`codservicio`),
  KEY `fk_codcliente_servicio` (`codcliente`),
  KEY `fk_codempleado_servicio` (`codempleado`),
  KEY `fk_codcomprobante_servicio` (`codcomprobante`),
  KEY `fk_codestadoservicio_servicio` (`codestadoservicio`),
  /*KEY `fk_codtipomoneda_ventas` (`codtipomoneda`),
  KEY `fk_codestadopago_ventas` (`codestadopago`),*/
  /*KEY `fk_codtipoigv_ventas` (`codtipoigv`),*/
  CONSTRAINT `fk_codcliente_servicio` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`),
  CONSTRAINT `fk_codcomprobante_servicio` FOREIGN KEY (`codcomprobante`) REFERENCES `tipocomprobantes` (`codcomprobante`),
  CONSTRAINT `fk_codempleado_servicio` FOREIGN KEY (`codempleado`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_codestadoservicio_servicio` FOREIGN KEY (`codestadoservicio`) REFERENCES `estadoservicio` (`codestadoservicio`)
  /*CONSTRAINT `fk_codestadopago_ventas` FOREIGN KEY (`codestadopago`) REFERENCES `estadopago` (`codestadopago`),*/
  /*CONSTRAINT `fk_codtipoigv_ventas` FOREIGN KEY (`codtipoigv`) REFERENCES `tipoigv` (`codtipoigv`),*/
  /*CONSTRAINT `fk_codtipomoneda_ventas` FOREIGN KEY (`codtipomoneda`) REFERENCES `tipomoneda` (`codtipomoneda`)*/
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `detalleservicios`;
SET character_set_client = utf8mb4 ;
CREATE TABLE `detalleservicios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codservicio` int(11) NOT NULL,
  -- `posicion` int(11) NOT NULL DEFAULT '0',
  `codtiposervicio` int(11) DEFAULT NULL,
  -- `tipoprecio` int(11) NOT NULL DEFAULT '0',
  `refe_url_servicio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notadetalle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  -- `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(12,2) DEFAULT NULL,
  `descuento` decimal(12,2) DEFAULT NULL,
  `importe` decimal(12,2) DEFAULT NULL,
  `fecha_anticipado` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_contratacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_expiracion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `codestadoservicio` int(11) DEFAULT NULL,
  `frecuencia_recordatorio_fecha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `userinsert` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sistemas@padinsolutions.com',
  `dateinsert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userupdate` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateupdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`,`codservicio`),
  KEY `fk_codservicio_detalleservicio` (`codservicio`),
  KEY `fk_codestadoservicio_detalleservicio` (`codestadoservicio`),
  CONSTRAINT `fk_codtiposervicio_detalleservicio` FOREIGN KEY (`codtiposervicio`) REFERENCES `tiposervicios` (`codtiposervicio`),
  CONSTRAINT `fk_codestadoservicio_detalleservicio` FOREIGN KEY (`codestadoservicio`) REFERENCES `estadoservicio` (`codestadoservicio`),
  CONSTRAINT `fk_codservicio_detalleservicio` FOREIGN KEY (`codservicio`) REFERENCES `servicios` (`codservicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- =============================
-- ==== INSERSION EN TABLAS ====
-- =============================
INSERT INTO `roles` (idrol, rol, estado, userinsert) VALUES 
(1,'Administrador Sistema','A','2023-02-27 15:00:00'),
(2,'Administrador','A','2023-02-27 15:00:00'),
(3,'Estandar ','A','2023-02-27 15:00:00'),
(4,'Cliente','A','2023-02-27 15:00:00'),
(5,'Editor','E','2023-02-27 15:00:00');


INSERT INTO `users` (id, name, email, email_verified_at, password, idrol, idavatar, api_token, remember_token, estado, created_at, updated_at) VALUES 
(1,'Administrador del Sistema','sistemas@padinsolutions.com',NULL,'$2y$10$bNy9STlNyE6UUn3bUSojR.zK84sORZHopZbCzkN3l9OMa3evfmkYe',1,NULL,'$2y$10$sZvMQ5V6YH/11n1QTfAVv.Vhxq5EJwKkK9yf83byqZrN2KUc/bVCO','Pu8wh2LfK8Qpp02IsXOuakQjpFT1rf3SELFylbctH1L1FeUNKITDHkqdjH9v','A','2018-07-10 05:15:17','2018-07-10 05:15:17');


INSERT INTO `tipocomprobantes` VALUES 
(1,'Factura electronica','08','F001',1,0,'A','mrodriguezp@padinsolutions.com','2018-08-20 02:07:30','mrodriguezp@padinsolutions.com','2018-08-19 21:08:56');

INSERT INTO `tipoestadoservicio`  (codtipoestadoservicio,nombre,descripcion,estado,userinsert,dateinsert) VALUES
(1,'Estado general servicio','Estado general principal para el servicio','A','mrodriguezp@padinsolutions.com','2018-08-20 02:07:30'),
(2,'Estado detalle servicio','Estado para los detalles de servicio','A','mrodriguezp@padinsolutions.com','2018-08-20 02:07:30');

INSERT INTO `estadoservicio` (`codestadoservicio`,`nombreestadoservicio`,`descripcion`,`backgroundColor`,`textColor`,`codtipoestadoservicio`,`estado`,`userinsert`,`dateinsert`,`userupdate`,`dateupdate`) VALUES (1,'Servicio Vigente','El servicio del servicio aun esta vigente no esta próximo a vencer','#23c7a7','#ffffff',1,'A','sistemas@padinsolutions.com','2023-03-14 16:46:40',NULL,NULL);
INSERT INTO `estadoservicio` (`codestadoservicio`,`nombreestadoservicio`,`descripcion`,`backgroundColor`,`textColor`,`codtipoestadoservicio`,`estado`,`userinsert`,`dateinsert`,`userupdate`,`dateupdate`) VALUES (2,'Servicios próximos a vencer','Hay servicios que están por vencer','#f9cd2f','#2b1b08',1,'A','sistemas@padinsolutions.com','2023-03-14 16:47:58',NULL,NULL);
INSERT INTO `estadoservicio` (`codestadoservicio`,`nombreestadoservicio`,`descripcion`,`backgroundColor`,`textColor`,`codtipoestadoservicio`,`estado`,`userinsert`,`dateinsert`,`userupdate`,`dateupdate`) VALUES (3,'Servicios vencidos','Algunos servicios ya vencieron, renuévalos para mostrar vigente el servicio','#ec5555','#ffffff',1,'A','sistemas@padinsolutions.com','2023-03-14 16:49:05',NULL,NULL);
INSERT INTO `estadoservicio` (`codestadoservicio`,`nombreestadoservicio`,`descripcion`,`backgroundColor`,`textColor`,`codtipoestadoservicio`,`estado`,`userinsert`,`dateinsert`,`userupdate`,`dateupdate`) VALUES (4,'Vigente','El servicio aun se encuentra vigente no esta próximo a vencer','#23d18f','#ffffff',2,'A','sistemas@padinsolutions.com','2023-03-14 16:49:44',NULL,NULL);
INSERT INTO `estadoservicio` (`codestadoservicio`,`nombreestadoservicio`,`descripcion`,`backgroundColor`,`textColor`,`codtipoestadoservicio`,`estado`,`userinsert`,`dateinsert`,`userupdate`,`dateupdate`) VALUES (5,'Pronto a vencer','El servicio esta próximo a vencer','#ffd500','#000',2,'A','sistemas@padinsolutions.com','2023-03-14 16:50:28',NULL,NULL);
INSERT INTO `estadoservicio` (`codestadoservicio`,`nombreestadoservicio`,`descripcion`,`backgroundColor`,`textColor`,`codtipoestadoservicio`,`estado`,`userinsert`,`dateinsert`,`userupdate`,`dateupdate`) VALUES (6,'Vencido','El servicio ya se encuentra vencido, renuévalo o retire el servicio.','#ff5757','#ffffff',2,'A','sistemas@padinsolutions.com','2023-03-14 16:51:13',NULL,NULL);


INSERT INTO `sisservice`.`tipodocumento` (`iddocumento`, `nombre`, `estado`) VALUES ('1', 'No especificado', 'A');

