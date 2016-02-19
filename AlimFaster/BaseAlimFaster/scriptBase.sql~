
--EDWIN: Estado
--	    Sucursal
--	    Producto
--	    TipoProducto

CREATE TABLE estado(
    codigo_estado serial NOT NULL,
    descripcion varchar(50) NULL,
    codigo_restaurante int NULL,
    codigo_cliente int NULL,
    codigo_usuario int Null,
    codigo_producto int NULL,
    codigo_tarjeta int NULL,
    numero_mesa int NULL,
    CONSTRAINT PK_codigo_estado PRIMARY KEY (codigo_estado)
 );

CREATE TABLE sucursal(
    codigo_sucursal serial NOT NULL,
    nombre varchar(50) NULL,
    direccion varchar(50) NULL,
    ciudad varchar(50) NULL,
    capacidad_maxima int NULL,
    codigo_producto int NULL,
    CONSTRAINT PK_codigo_sucursal PRIMARY KEY (codigo_sucursal)
 );

CREATE TABLE producto(
    codigo_producto serial NOT NULL,
    descripcion varchar(50) NULL,
    costo numeric(4,2) NULL,
    pvp numeric(4,2) NULL,
    utilidad numeric(4,2) NULL,
    contenido_neto varchar(50)NULL,
    peso_neto numeric(4,2) NULL,
    CONSTRAINT PK_codigo_producto PRIMARY KEY (codigo_producto)
 );

CREATE TABLE tipo_producto(
    codigo_tipo serial NOT NULL,
    nombre varchar(50) NULL,
    hora_inicio varchar(10) NULL,
    hora_fin varchar(10) NULL,
    codigo_producto int NULL,
    CONSTRAINT PK_codigo_tipo PRIMARY KEY (codigo_tipo)
 );


--AÑADIR CLAVES FORANEAS
ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_restaurante FOREIGN KEY (codigo_restaurante)
  REFERENCES restaurante (codigo_restaurante);

ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_cliente FOREIGN KEY (codigo_cliente)
  REFERENCES cliente (codigo_cliente);

ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_usuario FOREIGN KEY (codigo_usuario)
  REFERENCES usuario (codigo_usuario);
 
ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_producto FOREIGN KEY (codigo_producto)
  REFERENCES producto (codigo_producto);  

ALTER TABLE estado
  ADD CONSTRAINT fk_codigo_tarjeta FOREIGN KEY (codigo_tarjeta)
  REFERENCES tarjeta_credito (numero_tarjeta); 
  
ALTER TABLE estado
  ADD CONSTRAINT fk_numero_mesa FOREIGN KEY (numero_mesa)
  REFERENCES mesa (numero_mesa);
   

ALTER TABLE sucursal
  ADD CONSTRAINT fk_codigo_producto FOREIGN KEY (codigo_producto)
  REFERENCES producto (codigo_producto);
  
ALTER TABLE tipo_producto
  ADD CONSTRAINT fk_codigo_producto FOREIGN KEY (codigo_producto)
  REFERENCES producto (codigo_producto);

--Roger 

create table usuario
  (
	codigo integer
	email varchar(50),
	contrasena varchar(50),
	registro timestamp default now()
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE usuario
  OWNER TO postgres;
  ALTER TABLE usuario
  add constraint pk_usuario primary key (codigo),
  ADD CONSTRAINT usuario_persona_fk FOREIGN KEY (codigo)
  REFERENCES persona (codigo_persona);
  
  create table perfil
  (
	codigo integer,
	descripcion varchar(50),
	registro timestamp timestamp default now()
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE perfil
  OWNER TO postgres;
  ALTER TABLE perfil
  add constraint pk_perfil primary key (codigo);
  
  create table permiso
  (
	codigo integer,
	pantalla varchar (50)
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE permiso
  OWNER TO postgres;
  ALTER TABLE permiso
  add constraint pk_permiso primary key (codigo);
  
  create table permiso_perfil
  (
	usuario integer,
	perfil	integer,
	permiso integer,
	consultar varchar(1),
	grabar varchar(1),
	eliminar varchar(1)
  )
  WITH
  (
  OIDS=FALSE
  );
  ALTER TABLE permiso_perfil
  OWNER TO postgres;
  ALTER TABLE permiso_perfil
  add constraint pk_permiso_perfil primary key (usuario,perfil,permiso),
  ADD CONSTRAINT permiso_usuario_fk FOREIGN KEY (usuario)
  REFERENCES usuario (codigo),
  ADD CONSTRAINT permiso_perfil_fk FOREIGN KEY (perfil)
  REFERENCES perfil (codigo),
  add constraint permiso_fk foreign key (permiso)
  references permiso (codigo);

--Claudia:   
-- Restaurante
--	Cliente
--	Cabecera reservacion
--	detalle reservacion 

CREATE TABLE restaurante(
    codigo_restaurante int NOT NULL,
    codigo_sucursal int NOT NULL,
    codigo_reservacion int NOT NULL,
    razon_social varchar(50) NULL,
    telefono int NULL,
    correo_electronico varchar(50) NULL,
    autorizacion_sri int NULL,
    autorizacion_fecha date NULL,
    telefax int NULL,
    telefono_movil int NULL,
    nombre_imagen varchar(50) NULL,
    CONSTRAINT PK_restaurante PRIMARY KEY (codigo_restaurante));


CREATE TABLE cliente(
    codigo_cliente int NOT NULL,
    numero_factura int NOT NULL,
    categoria varchar(50) NULL,
    cuenta_bancaria int NULL,
    cuenta_paypal int NULL,
    CONSTRAINT PK_cliente PRIMARY KEY (codigo_cliente));

CREATE TABLE cabecera_reservacion(
    codigo_reservacion serial NOT NULL,
    secuencia_reservacion int NOT NULL,
    numero_factura int NOT NULL,
    numero_personas int NOT NULL,
    CONSTRAINT PK_cabecera_reservacion PRIMARY KEY (codigo_reservacion));
        

 CREATE TABLE detalle_reservacion(
    secuencia_reservacion serial NOT NULL,
    numero_mesa int NOT NULL,
    CONSTRAINT PK_detalle_reservacion PRIMARY KEY (secuencia_reservacion));

 --AÑADIR CLAVES FORANEAS
ALTER TABLE restaurante
  ADD CONSTRAINT fk_restaurante_sucursal FOREIGN KEY (codigo_sucursal)
  REFERENCES sucursal (codigo_sucursal);


ALTER TABLE restaurante
  ADD CONSTRAINT fk_restaurante_reservacion FOREIGN KEY (codigo_reservacion)
  REFERENCES cabecera_reservacion (codigo_reservacion);

  ALTER TABLE cliente
  ADD CONSTRAINT fk_cliente_factura FOREIGN KEY (numero_factura)
  REFERENCES cabecera_factura (numero_factura);

  ALTER TABLE cabecera_reservacion
  ADD CONSTRAINT fk_reservacion_detalle FOREIGN KEY (secuencia_reservacion)
  REFERENCES detalle_reservacion (secuencia_reservacion);

  ALTER TABLE cabecera_reservacion
  ADD CONSTRAINT fk_reservacion_factura FOREIGN KEY (numero_factura)
  REFERENCES cabecera_factura (numero_factura);

  ALTER TABLE detalle_reservacion
  ADD CONSTRAINT fk_detReservacion_mesa FOREIGN KEY (numero_mesa)
  REFERENCES mesa (numero_mesa);
