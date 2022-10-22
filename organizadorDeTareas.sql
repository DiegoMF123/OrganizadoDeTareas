create database gestor_tareas;

create table gestor_tareas.estado(
id_estado int not null AUTO_INCREMENT,
descripcion_estado varchar(20)not null,
primary key(id_estado)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;


INSERT INTO estado(id_estado, descripcion_estado) VALUES (1, 'Activo');
INSERT INTO estado(id_estado, descripcion_estado) VALUES (2, 'Inactivo');
insert into estado(id_estado, descripcion_estado) VALUES (3, 'Público');
insert into estado(id_estado, descripcion_estado) VALUES (4, 'Privado');

create table gestor_tareas.etiqueta(
id_etiqueta int not null auto_increment,
nombre_etiqueta varchar(20) not null,
id_estado int not null,
primary key(id_etiqueta),
foreign key(id_estado) references estado(id_estado)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.tablero(
id_tablero int auto_increment,
nombre_tablero varchar(50),
fecha_creacion datetime not null,
id_estado int not null,
usuario_creacion int,
descripcion varchar(100),
primary key(id_tablero),
foreign key(id_estado) references estado(id_estado)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.rol(
id_rol int not null auto_increment,
rol varchar(20) not null,
primary key(id_rol)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

INSERT INTO rol(id_rol, rol) VALUES (1, 'Administrador');
INSERT INTO rol(id_rol, rol) VALUES (2, 'Invitado');

create table gestor_tareas.usuario(
id_usuario int not null,
usuario varchar(50) not null,
nombre_usuario varchar(100) not null,
correo varchar(50) not null,
contrasenia varchar(10) not null,
id_estado int not null,
id_rol int not null,
primary key(id_usuario),
foreign key(id_estado) references estado(id_estado),
foreign key(id_rol) references rol(id_rol)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

INSERT INTO usuario(id_usuario, usuario, nombre_usuario, correo, contrasenia, id_estado, id_rol) 
VALUES (1, 'adsmijang', 'Diego Sebastian Mijangos Flores', 'diegisseb@gmail.com', 'dsmf', 1, 1);



create table gestor_tareas.participante(
id_participante int not null auto_increment,
id_tablero int not null,
id_usuario int not null,
id_estado int,
primary key(id_participante),
foreign key(id_tablero) references gestor_tareas.tablero(id_tablero),
foreign key(id_usuario) references gestor_tareas.usuario(id_usuario),
foreign key(id_estado) references gestor_tareas.estado(id_estado)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.lista_tareas(
id_lista_tarea int not null auto_increment,
descripcion_lista varchar(100)not null,
id_estado int,
primary key(id_lista_tarea),
FOREIGN key(id_estado) references gestor_tareas.estado(id_estado)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.detalle_tablero(
id_detalle_tablero int not null auto_increment,
id_tablero int not null,
id_etiqueta int not null,
id_lista_tarea int,
detalle_descripcion varchar(50),
primary key(id_detalle_tablero),
foreign key(id_tablero) references gestor_tareas.tablero(id_tablero),
foreign key(id_etiqueta) references gestor_tareas.etiqueta(id_etiqueta),
foreign key(id_lista_tarea) references gestor_tareas.lista_tareas(id_lista_tarea)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.tarea(
id_tarea int not null auto_increment,
id_estado int,
id_participante_asignado int,
nombre_tarea varchar(50),
descripcion_tarea varchar(100),
prioridad int,
esfuerzo int,
etiqueta int,
fecha_inicio datetime,
fecha_fin datetime,
id_lista_tarea int,
primary key(id_tarea),
foreign key(id_estado) references gestor_tareas.estado(id_estado),
foreign key(id_participante_asignado) references gestor_tareas.participante(id_participante),
foreign key(id_lista_tarea) references gestor_tareas.lista_tareas(id_lista_tarea)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.comentario(
id_comentario int not null auto_increment,
comentario varchar(200) not null,
fecha_creacion datetime not null,
id_estado int not null,
id_tarea int not null,
primary key(id_comentario),
foreign key(id_estado) references gestor_tareas.estado(id_estado),
foreign key(id_tarea) references gestor_tareas.tarea(id_tarea)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

create table gestor_tareas.lista_actividades(
id_lista_actividad int auto_increment,
nombre_lista varchar(25),
id_tarea int not null,
avance int,
id_estado int,
primary key(id_lista_actividad),
foreign key(id_tarea) references gestor_tareas.tarea(id_tarea),
foreign key(id_estado) references gestor_tareas.estado(id_estado)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;


create table gestor_tareas.actividad(
id_actividad int not null auto_increment,
nombre_actividad varchar(50),
descripcion varchar(200),
id_estado int not null,
id_lista int not null,
primary key(id_actividad),
foreign key(id_estado) references gestor_tareas.estado(id_estado),
foreign key(id_lista) references gestor_tareas.lista_actividades(id_lista_actividad)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;