
create table usuarios
(
	in_codigo_usuario int primary key,
    vc_representante_usuario varchar(128),
    vc_contrasena_usuario varchar (128),
    vc_representante_nombre_apellido varchar(256),
    ch_situacion_registro char(2)
);

create table usuarios_zonas  (
	in_cod_zona int auto_increment primary key,
	vc_nombre_zona VARCHAR(256),
    in_usuario_codigo INT ,
    CONSTRAINT fk_usuarios_usuarios_zonas 
	FOREIGN KEY (in_usuario_codigo)  
	REFERENCES usuarios(in_codigo_usuario),
    UNIQUE (vc_nombre_zona,in_usuario_codigo)
);




insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('AGUAYTIA',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('CAMPO VERDE',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('CIUDAD CONSTITUCION',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('CURIMANA',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('HUIPOCA',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('KILOMETRO 86',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('NESHUYA',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('POZUZO',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('PUCALLPA 3 ANDY',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('PUERTO BERMUDEZ',507);
insert into usuarios_zonas (vc_nombre_zona,in_usuario_codigo) values ('SAN ALEJANDRO',507);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AYACUCHO - SIVIA', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHIRUMPIARI', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('KIMBIRI', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('KIMBIRI - AYACUCHO', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LLOCHEGUA', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LLOCHEGUA - HUANTA - AYACUCHO', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LOBO - TAHUANTINSUYO', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('MANTARO', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PALMAPAMPA', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PICHARI - AYACUCHO', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN FRANCISCO - AYNA LA MAR', 506);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SANTA ROSA - AYACUCHO', 506);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PUCALLPA 2 DAVID', 517);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AMBO', 514);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANUCO', 514);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LA UNION', 514);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ANDAHUAYLAS', 512);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('EL TAMBO - J', 512);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('EL TAMBO - M', 512);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('UCAYALI - ATALAYA', 512);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('VOLANTE 4', 512);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ZONA GUSTAVO', 512);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ANDAHUAYLAS', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AYACUCHO 1', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AYACUCHO 2', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AYACUCHO 3', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AYACUCHO 4', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AYACUCHO 5', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHINCHEROS', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN MIGUEL - AYACUCHO', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TAMBO - AYACUCHO', 503);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('URIPA', 503);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CARHUAMAYO', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHILCA 2', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAN', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO 3', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUAYUCACHI', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('JUNIN', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LA OROYA', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PASCO', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('YANAHUANCA', 515);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('YANAHUANCA - PASCO', 515);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('AUCAYACU', 510);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CACHICOTO', 510);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('MONZON', 510);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN MARTIN', 510);
-- insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TINGO MARÍA', 510);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TINGO MARIA', 510);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TOCACHE', 510);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('UCHIZA', 510);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ACOBAMBA', 511);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAVELICA', 511);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAVELICA 1', 511);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAVELICA 2', 511);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANTA - AYA MARTES', 511);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANTA LUNES', 511);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANTA - AYA LUNES', 511);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('MAZAMARI', 509);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PICHANAKI', 509);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PICHANAKI - SANGANI', 509);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN MARTIN DE PANGOA', 509);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SANTA ANA - PERENE', 509);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SATIPO', 509);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO NORTE', 518);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PAMPAS - TAYACAJA', 518);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('VOLANTE 2', 518);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('VOLANTE 4', 518);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('VOLANTE 5', 518);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUASAHUASI', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LA MERCED', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('OXAPAMPA', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN RAMON', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TARMA L', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TARMA L', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TARMA M', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('TARMA V', 504);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('VILLARICA', 504);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ICA JUEVES', 516);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ICA LUNES', 516);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ICA M', 516);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ICA VIERNES', 516);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHILCA 1', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('DEFUNCIONES', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('EL TAMBO - J', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO - 2', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO SUR 1', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO 1', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO 3', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('INCOBRABLES', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('KILOMETRO 86', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('LIMA', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('MIDHCO ORIENTE', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('OFICINA', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PRE - JUDICIALES', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('REPRES. EL TAMBO', 501);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('REPRESENTANTES', 501);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHILCA 1', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHONGOS', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CHUPACA', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('COLCABAMBA', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUAMANCACA', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO SUR 1', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO SUR 1', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO SUR 2', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYOSUR 2', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUARI', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PERIFERICAS - CHILCA', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PILCOMAYO', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('REPRES. CHILCA', 508);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAPALLANGA', 508);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO - 2', 600);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUANCAYO 3', 600);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('REPRES. EL TAMBO', 600);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('REPRESENTANTES', 600);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PUCALLPA 1 ANDY', 513);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PUCALLPA 1 ANDY', 513);

insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('CONCEPCION', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('EL TAMBO - J', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('EL TAMBO - M', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('HUALHUAS', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('JAUJA', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('ORCOTUNA', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PERIFERICAS - EL TAMBO', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('PERIFERICAS EL TAMBO', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('QUILCAS', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('REPRES. EL TAMBO', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN AGUSTIN DE CAJAS', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN JERONIMO', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SAN PEDRO DE SAÑOS', 505);
insert into usuarios_zonas (vc_nombre_zona, in_usuario_codigo) values ('SICAYA', 505);


insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (507,'andyfasanando','andyfasanando','ANDY FASANANDO REATEGUI');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (506,'arlyluis','arlyluis','ARLY LUIS ROJAS LAURENTE');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (517,'davidmarcelo','davidmarcelo','DAVID MARCELO DIONICIO');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (514,'freddyespinoza','freddyespinoza','FREDDY ESPINOZA ESPINOZA');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (512,'gustavovivas','gustavovivas','GUSTAVO VIVAS MELGAR');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (503,'humbertoalvarado','humbertoalvarado','HUMBERTO ALVARADO');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (515,'ivanchavez','ivanchavez','IVAN CHAVEZ POMA');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (510,'jhanponce','jhanponce','JHAN PONCE RAMOS');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (511,'joelandre','joelandre','JOEL ANDRÉ ALONZO FLORES');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (509,'johnacevedo','johnacevedo','JOHN ACEVEDO DE LA CRUZ');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (518,'joseflores','joseflores','JOSÉ FLORES LLALICO');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (504,'josephchavez','josephchavez','JOSEPH CHAVEZ  SANTIVAÑEZ');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (516,'luisore','luisore','LUIS ORE RUIZ');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (501,'miguelangel','miguelangel','MIGUEL ANGEL VERGARA EIZAG');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (508,'miguelpomareda','miguelpomareda','MIGUEL POMAREDA LIZARRAGA');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (600,'oficina','oficina','OFICINA');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (513,'robertocarlos','robertocarlos','ROBERTO CARLOS CASTILLO RODRIGUEZ');
insert into usuarios (in_codigo_usuario,vc_representante_usuario,vc_contrasena_usuario,vc_representante_nombre_apellido) values  (505,'saulvia','saulvia','SAUL VIA Y RADA VALIVIESO');






















CALL sp_validar_usuario ('12' , '12');
call sp_obtener_usuario_zona (507)



