-- Creas tablas principales 

create table socios_negocio  (
	vc_codigo_empleado_depart_venta  varchar(256),
	vc_nombre_empleado_depart_venta VARCHAR(256),
	vc_codigo_sn varchar(64)  ,
	vc_nombre_sn varchar(256),
	vc_saldo   varchar(256),
    vc_nombre_extranjero varchar(256),
    vc_lim_credito decimal (10,2) ,    
    vc_numero_documento varchar(64) ,
	vc_emision  varchar(256),
	vc_vencimiento  varchar(256),
    vc_total_documento  varchar(256), 
    vc_nombre_cliente_proveedor varchar(256),
    vc_numero_referencia_sn varchar(256),
    vc_pagado_hasta varchar(256),
    vc_calle varchar (256),
	in_secuencial  int auto_increment primary key ,
    UNIQUE (vc_codigo_empleado_depart_venta,vc_codigo_sn,vc_numero_documento)
);



