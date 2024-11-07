DELIMITER //
DROP PROCEDURE IF EXISTS sp_validar_usuario;
CREATE PROCEDURE sp_validar_usuario(
    IN p_usuario VARCHAR(255),
    IN p_contrasena VARCHAR(255)
)
BEGIN

   IF EXISTS (SELECT in_codigo_usuario FROM usuarios WHERE  vc_representante_usuario = p_usuario AND vc_contrasena_usuario =p_contrasena )
	THEN
		SELECT in_codigo_usuario FROM usuarios WHERE  vc_representante_usuario = p_usuario AND vc_contrasena_usuario =p_contrasena;
   ELSE 
		SELECT 0;
	END IF;
    
END//
DELIMITER ;
