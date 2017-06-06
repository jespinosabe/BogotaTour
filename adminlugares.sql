create table usuarios(
nombre varchar(40) not null,
correo_usuario varchar(64) not null primary key,
password varchar(40) not null,
fecha_nacimiento date not null,
ciudad varchar(40) not null,
direccion_cliente varchar(255) not null,
telefono_cliente char(30) not null,
genero varchar (20) not null,
fotografia varchar (100) not null
);

create table categoria_lugar(
id_categoria int not null auto_increment primary key,
nombre_categoria varchar(40) not null
);


create table lugares(
id_lugar int not null auto_increment primary key,
nombre_lugar varchar(40) not null,
id_categoria  int  not null,
direccion_lugar varchar(255) not null,
telefono_lugar char(30) not null,
horario_lugar varchar(40) not null,
descripcion_lugar varchar(400) not null,
correo_lugar varchar(40) null,
foto_lugar varchar (100) not null,
foreign key (id_categoria) references categoria_lugar(id_categoria) on delete cascade on update cascade
);


create table categoria_evento(
id_tipo int not null auto_increment primary key,
nombre_evento varchar(40) not null);

create table eventos(
id_evento int not null auto_increment primary key,
nombre_evento varchar(40) not null,
tipo_evento  varchar(40)  not null,
direccion_evento varchar(255) not null,
telefono_evento char(30) not null,
precio_evento varchar(40) not null,
horario_evento varchar(40) not null,
descripcion_evento varchar(400) not null,
foto_evento varchar (100) not null);




create table le(
evento int not null,
lugar int not null,
foreign key (evento) references eventos(id_evento) on delete cascade on update cascade,
foreign key (lugar) references lugares(id_lugar) on delete cascade on update cascade
);

INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Restaurantes');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Bares');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Hoteles');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Clubes');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Centros_Comerciales');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Parques');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Gimnasios');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Cultura');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Deportes');
INSERT INTO categoria_lugar (nombre_categoria)  VALUES ('Miradores');


INSERT INTO categoria_evento (nombre_evento) VALUES ('Concierto');
INSERT INTO categoria_evento (nombre_evento) VALUES ('Obra_Teatro');
INSERT INTO categoria_evento (nombre_evento) VALUES ('Deporte');
INSERT INTO categoria_evento (nombre_evento) VALUES ('arte');
INSERT INTO categoria_evento (nombre_evento) VALUES ('Humanitario');
INSERT INTO categoria_evento (nombre_evento) VALUES ('Conferencia');


