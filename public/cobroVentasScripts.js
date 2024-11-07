$(document).on('click', '.zona-link', function(e) {
  
    e.preventDefault(); 

    var zona = $(this).data('zona'); 


    $.ajax({
    url: `/cobro-ventas/${zona}`, 
    type: 'GET',
    success: function(response) {
        var tbody = $('#cuentas-tbody');
        tbody.empty(); 

        if (Array.isArray(response) && response.length > 0) {
            response.forEach(function(cuenta) {
                var row = $('<tr>');
                row.append('<td><a href="#">' + cuenta.vc_codigo_cuenta + '</a></td>');
                row.append('<td><a href="#">' + cuenta.vc_razon_social_cuenta + '</a></td>');
                row.append('<td><a href="#">' + cuenta.vc_nombre_cuenta + '</a></td>');
                row.append('<td><a href="#">' + cuenta.de_limite_credito + '</a></td>');
                row.append('<td><a>0.00</a></td>');
                row.append('<td><a>0.00</a></td>');
                row.append('<td><a href="#">' + cuenta.vc_saldo_cuenta + '</a></td>');
                tbody.append(row); 
            });
        } else {
            tbody.append('<tr><td colspan="7">No hay cuentas disponibles.</td></tr>');
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
        $('#cuentas-tbody').html('<tr><td colspan="7">Error al obtener datos. Inténtalo de nuevo más tarde.</td></tr>');
    }
});
});
