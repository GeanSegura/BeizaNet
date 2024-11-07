DELIMITER //
DROP PROCEDURE IF EXISTS sp_obtener_parametro;
CREATE PROCEDURE sp_obtener_parametro(
    IN p_in_codigo_parametro INT
    )
BEGIN

   IF EXISTS (SELECT 1 FROM bzn_parametros WHERE in_codigo_parametro = p_in_codigo_parametro )
	THEN
		SELECT 1 AS codigo_parametro FROM usuarios_zonas WHERE in_codigo_parametro = p_in_codigo_parametro;
   ELSE 
		SELECT '' AS codigo_parametro;
	END IF;
 

END//
DELIMITER ;
