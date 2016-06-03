-- Creacion de tabla para manejo de sesiones con codeignter

CREATE TABLE `ci_sessions` (
	`id`	TEXT NOT NULL,
	`ip_address`	TEXT NOT NULL,
	`timestamp`	INTEGER NOT NULL DEFAULT 0,
	`data`	BLOB NOT NULL,
	PRIMARY KEY(id)
);


-- Creación de tabla de categorias

CREATE TABLE `t_categoria` (
	`id_categoria`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`nombre`	TEXT NOT NULL UNIQUE,
	`descripcio`	TEXT
);


-- Creacion de la tabla de articulos

CREATE TABLE `t_articulo` (
	`id_articulo`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`nombre`	TEXT NOT NULL UNIQUE,
	`contenido`	TEXT NOT NULL,
	`fecha`	INTEGER,
	`keywords`	TEXT,
	`id_categoria`	INTEGER NOT NULL,
	FOREIGN KEY(`id_categoria`) REFERENCES `t_categoria`(`id_categoria`)
);