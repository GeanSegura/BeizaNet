DELIMITER //
DROP PROCEDURE IF EXISTS sp_obtener_usuario_zona;
CREATE PROCEDURE sp_obtener_usuario_zona(
    IN p_in_usuario_codigo INT
    )
BEGIN

   IF EXISTS (SELECT vc_nombre_zona FROM usuarios_zonas WHERE in_usuario_codigo = p_in_usuario_codigo )
	THEN
		SELECT vc_nombre_zona FROM usuarios_zonas WHERE in_usuario_codigo = p_in_usuario_codigo;
   ELSE 
		SELECT '' AS vc_nombre_zona;
	END IF;
    
END//
DELIMITER ;
