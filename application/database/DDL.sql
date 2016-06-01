-- Creacion de tabla para manejo de sesiones con codeignter

CREATE TABLE `ci_sessions` (
	`id`	TEXT NOT NULL,
	`ip_address`	TEXT NOT NULL,
	`timestamp`	INTEGER NOT NULL DEFAULT 0,
	`data`	BLOB NOT NULL,
	PRIMARY KEY(id)
);