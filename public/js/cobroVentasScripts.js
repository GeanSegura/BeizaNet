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
                row.append( '<td><a href="javascript:void(0);" class="cuenta-link" data-cuenta="' + cuenta.vc_codigo_cuenta + '">' 
                    + cuenta.vc_codigo_cuenta + '</a></td>');
                row.append('<td><span>' + cuenta.vc_razon_social_cuenta + '</span></td>');
                row.append('<td><span>' + cuenta.vc_nombre_cuenta + '</span></td>');
                row.append('<td><span>' + cuenta.de_limite_credito + '</span></td>');
                row.append('<td><span>0.00</span></td>');
                row.append('<td><span>0.00</span></td>');
                row.append('<td><span>' + cuenta.vc_saldo_cuenta + '</span></td>');
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

$(document).on('click', '.cuenta-link', function(e) {
    e.preventDefault(); 

    var cuenta = $(this).data('cuenta'); 

    $.ajax({
    url: `/cobro-ventas/documento/${cuenta}`, 
    type: 'GET',
    success: function(response) {
        var tbody = $('#documentos-tbody');
        tbody.empty(); 
        if (Array.isArray(response) && response.length > 0) {
            response.forEach(function(documentos) {
                var row = $('<tr>');
                row.append( '<td><a href="javascript:void(0);" class="cargar-documento-detalle" >' 
                    + documentos.vc_documento + '</a></td>');
                row.append('<td><span>' + documentos.dt_emision + '</span></td>');
                row.append('<td><span>' + documentos.de_importe + '</span></td>');
                row.append('<td><span>' + documentos.dt_vencimiento + '</span></td>');
                row.append('<td><span>'+documentos.de_saldo+'</span></td>');
                row.append('<td><span>'+documentos.in_dias_diferencia+'</span></td>');
                tbody.append(row); 
            });
        } else {
            tbody.append('<tr><td colspan="7">No hay cuentas disponibles.</td></tr>');
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
        $('#documentos-tbody').html('<tr><td colspan="7">Error al obtener datos. Inténtalo de nuevo más tarde.</td></tr>');
    }
});
});

$(document).on('click', '.cargar-documento-detalle', function(e) {
    console.log('ingeso')
    e.preventDefault(); // Evita que el enlace recargue la página

        $.ajax({
            url: `/cobro-ventas/detalle/{}`, 
            type: 'GET',
        success: function(response) {
            console.log(response);
            $('#contenidoGaf').html(response.html); // Carga el contenido de gaf.blade.php en el contenedor
            $('#ocultar-cobro-ventas').hide();
            $('#contenidoGaf').show(); // Muestra el contenedor
        },
        error: function(xhr) {
            console.log('Error:', xhr);
        }
    });

    $(document).on('click', '#cerrar-documento-detalle', function() {
        $('#contenidoGaf').hide();
        $('#ocultar-cobro-ventas').show();
        $('#contenidoGaf').empty();
    });
});




