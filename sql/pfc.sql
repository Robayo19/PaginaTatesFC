CREATE DATABASE pfc;
use pfc;
CREATE TABLE IF NOT EXISTS 5_Usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    numero INT,
    direccion VARCHAR(20),
    edad INT,
    correo_electronico VARCHAR(90),
    contraseña varchar(20) NOT NULL,
    id_rol INT
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS 5_Productos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40),
    precio INT,
    stock INT
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS 5_Pedidos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT,
    id_usuario INT,
    cantidad INT,
    fecha_envio DATE,
    fecha_entrega DATE
)ENGINE = InnoDB;
CREATE TABLE IF NOT EXISTS 5_Jugadores(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(20),
    apellido VARCHAR(30),
    dorsal INT,
    posicion  VARCHAR(20)
)ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS 5_Rol(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30)
)ENGINE = InnoDB;


LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Usuarios.csv'
    INTO TABLE 5_Usuarios
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;

LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Productos.csv'
    INTO TABLE 5_Productos
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;

LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Pedidos.csv'
    INTO TABLE 5_Pedidos
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;
LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Jugadores.csv'
    INTO TABLE 5_Jugadores
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;
    
LOAD DATA INFILE 'C:\\xampp\\htdocs\\php\\ProyectoFinal\\csv\\Rol.csv'
    INTO TABLE 5_Rol
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS;
    
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/
/*-------------------------------------------------------------TRIGGERS------------------------------------------------------------------------------*/
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/
/*************************************************************************************************************************************************************/


select * from respaldo_5_usuarios;
/*-------------------------------------------------------------USUARIOS------------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS respaldo_5_Usuarios(
	id_Usuario int(11),
    nombre_nuevo varchar(20),
	nombre_antiguo varchar(20),
	apellido_nuevo varchar(20),
	apellido_antiguo varchar(20),
	numero_nuevo int,
	numero_antiguo int,
	direccion_nuevo varchar(20),
	direccion_antiguo varchar(20),
	edad_nuevo varchar(20),
	edad_antiguo varchar(20),
	correo_electronico_nuevo varchar(20),
	correo_electronico_antiguo varchar(20),
	contrasena_nuevo varchar(20),
	contrasena_antiguo varchar(20),
	id_rol_nuevo int,
	id_rol_antiguo int,
    tipo_operacion varchar(10),
    fecha_modificacion DATETIME,
	usuario VARCHAR(20) NOT NULL
) engine=InnoDB;

DELIMITER $$

CREATE TRIGGER insertar_5_usuarios AFTER INSERT ON 5_usuarios
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_usuarios VALUES (NULL, new.nombre,null, new.apellido,null, new.numero,null,new.direccion,null,new.edad,null,
        new.correo_electronico,null,new.contraseña,null,new.id_rol,null, "INSERT", NOW() ,USER());
	END $$
    DELIMITER ;

DELIMITER $$
CREATE TRIGGER actualizar_5_usuarios BEFORE UPDATE ON 5_usuarios
FOR EACH ROW
BEGIN
		INSERT INTO respaldo_5_Usuarios VALUES (NULL, new.nombre,old.nombre, new.apellido,old.apellido, new.numero,old.numero,new.direccion,old.direccion,new.edad,old.edad,
        new.correo_electronico,old.correo_electronico,new.contraseña,old.contraseña,new.id_rol,old.id_rol, "UPDATE", NOW() ,USER());
END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER borrar_5_usuarios BEFORE DELETE ON 5_usuarios
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_Usuarios VALUES (NULL, null,old.nombre, null,old.apellido, null,old.numero,null,old.direccion,null,old.edad,
        null,old.correo_electronico,null,old.contraseña,null,old.id_rol, "DELETE", NOW() ,USER());
	END $$
    DELIMITER ; 
/*-------------------------------------------------------------PRODUCTOS------------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS respaldo_5_Productos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40),
    precio_nuevo INT,
	precio_antiguo INT,
    stock_nuevo INT,
    stock_antiguo INT,
    tipo_operacion varchar(10),
    fecha_modificacion DATETIME,
     usuario VARCHAR(20) NOT NULL
)ENGINE = InnoDB;

DELIMITER $$
CREATE TRIGGER insertar_5_Productos AFTER INSERT ON 5_productos
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_Usuarios VALUES (NULL, new.nombre,new.precio,null,new.stock,null, "INSERT", NOW() ,USER());
	END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER actualizar_5_Productos  BEFORE UPDATE ON 5_productos
FOR EACH ROW
BEGIN
	  INSERT INTO respaldo_5_Usuarios VALUES (NULL, new.nombre,new.precio,old.precio,new.stock,old.stock, "UPDATE", NOW() ,USER());
END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER borrar_5_Productos  BEFORE DELETE ON 5_productos
FOR EACH ROW
BEGIN
	  INSERT INTO respaldo_5_Usuarios VALUES (NULL, old.nombre,null,old.precio,null,old.stock, "DELETE", NOW() ,USER());
END $$
DELIMITER ;

/*-------------------------------------------------------------PEDIDOS------------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS respaldo_5_Pedidos(
	id INT PRIMARY KEY AUTO_INCREMENT,
    id_producto INT,
    id_usuario INT,
    cantidad_nuevo INT,
	cantidad_antiguo INT,
    fecha_envio DATE,
    fecha_entrega DATE,
    tipo_operacion varchar(10),
    fecha_modificacion DATETIME,
     usuario VARCHAR(20) NOT NULL
)ENGINE = InnoDB;

DELIMITER $$

CREATE TRIGGER insertar_5_Pedidos AFTER INSERT ON 5_pedidos
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_pedidos VALUES (NULL, new.id_producto,new.id_usuario,new.cantidad,null,new.fecha_envio,new.fecha_entrega, "INSERT", NOW() ,USER());
	END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER actualizar_5_Pedidos  BEFORE UPDATE ON 5_pedidos
FOR EACH ROW
BEGIN
	  INSERT INTO respaldo_5_pedidos VALUES (NULL, new.id_producto,new.id_usuario,new.cantidad,old.cantidad,new.fecha_envio,new.fecha_entrega, "UPDATE", NOW() ,USER());
END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER borrar_5_Pedidos  BEFORE DELETE ON 5_pedidos
FOR EACH ROW
BEGIN
	  INSERT INTO respaldo_5_pedidos VALUES (NULL, old.id_producto,old.id_usuario,null,old.cantidad,old.fecha_envio,old.fecha_entrega, "DELETE", NOW() ,USER());
END $$
DELIMITER ;

/*-------------------------------------------------------------JUGADORES------------------------------------------------------------------------------*/

CREATE TABLE IF NOT EXISTS respaldo_5_Jugadores(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre_antiguo VARCHAR(20),
    nombre_nuevo VARCHAR(20),
    apellido_antiguo VARCHAR(30),
    apellido_nuevo VARCHAR(30),
    dorsal_antiguo INT,
    dorsal_nuevo INT,
    posicion_antiguo  VARCHAR(20),
    posicion_nuevo  VARCHAR(20),
    tipo_operacion varchar(10),
    fecha_modificacion DATETIME,
     usuario VARCHAR(20) NOT NULL
)ENGINE = InnoDB;

DELIMITER $$
CREATE TRIGGER insertar_5_Jugadores AFTER INSERT ON 5_jugadores
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_jugadores VALUES (NULL, null,new.nombre,null,new.apellido,null,new.dorsal,null,new.posicion, "INSERT", NOW() ,USER());
	END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER actualizar_5_Jugadores BEFORE UPDATE ON 5_jugadores
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_jugadores VALUES (NULL, old.nombre,new.nombre,old.apellido,new.apellido,old.dorsal,new.dorsal,old.posicion,new.posicion, "UPDATE", NOW() ,USER());
	END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER borrar_5_Jugadores BEFORE DELETE ON 5_jugadores
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_jugadores VALUES (NULL, old.nombre,null,old.apellido,null,old.dorsal,null,old.posicion,null, "DELETE", NOW() ,USER());
	END $$
DELIMITER ;

CREATE TABLE IF NOT EXISTS respaldo_5_Rol(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_antiguo VARCHAR(30),
    tipo_operacion varchar(10),
    fecha_modificacion DATETIME,
     usuario VARCHAR(20) NOT NULL
)ENGINE = InnoDB;

DELIMITER $$
CREATE TRIGGER insertar_5_rol AFTER INSERT ON 5_Rol
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_rol VALUES (NULL,new.nombre, "INSERT", NOW() ,USER());
	END $$
DELIMITER ;
SELECT * FROM respaldo_5_rol;
DELIMITER $$
CREATE TRIGGER actualizar_5_rol BEFORE UPDATE ON 5_Rol
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_rol VALUES (NULL,new.nombre, "UPDATE", NOW() ,USER());
	END $$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER borrar_5_rol BEFORE DELETE ON 5_Rol
	FOR EACH ROW
	BEGIN
		INSERT INTO respaldo_5_rol VALUES (NULL,old.nombre, "DELETE", NOW() ,USER());
	END $$
DELIMITER ;

UPDATE 5_usuarios SET edad=22 WHERE id = 6;
        



