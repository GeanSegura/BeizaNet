<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>
<style>
    :root {
        --fondo-cobro-ventas: #B4D4FF;
        --fondo-login: #052f81;
        --fs: 12px;
        --fm: 14px;
        --fl: 16px;
        --fll: 20px;
        --color-letra-pricipal: #205cce;
        --color-letra-secundario: #7bb3f8;
        --text-input-field: #F7F7F7;
    }

    body {
        background-color: var(--fondo-cobro-ventas);
        font-family: "Quicksand", sans-serif;
        font-weight: 500;
        
    }

    .cobro-ventas {
        display: grid;
        place-items: center;
        width: 100%;
        height: 100vh;
    }

    .contenedor-cobro-ventas {
        width: 1260px;
        height: 640px;
        background-color: white;
        border-radius: 12px;
        box-shadow: 0px 0px 20px #176B87;
        display: flex;
        flex-direction: row;
    }

    .sider-bar-left {
        width: 12%;
        background-color: var(--fondo-login);
        border-radius: 12px 0px 0px 12px;
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: space-between;
    }

    .sider-titulo {
        margin: 20px 0px 0px 60px;
        font-size: var(--fl);
    }

    .contenedor-salir {
        margin: 0px 0px 56px 32px;
    }

     .page-principal {
        width: 88%;
        height: 100%;
        display: grid;
        grid-template-rows: auto 1fr;
        place-items: center;
        background-color: var(--color-letra-secundario);
    }

    .page-principal-titulo {
        margin: 0px 0px 0px 0px;
        width: 88%;
    }

    .linea-p {
        width: 98%;
        text-align: center;
        margin-right: 12px;
    }

    .info-documento {
        padding: 24px;
        background-color: white;
        width: 80%;
        height: 520px;
        display: grid;
        grid-template-rows: 1fr 2fr 1fr;
        box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.5),
        -5px -5px 15px rgba(29, 190, 155, 0.1);
        border-radius: 12px;
    }

    .cabecera {
        margin:16px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 72px;
    }

    .cabecera label {
        font-size: var(--fs);
        font-weight: 600;
    }

    .cabecera-right {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 12px;
    }

    .cabecera-left {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 12px;
    }

    .cabecera-right input {
      height: 16px ;
      width: 280px;
      border: 1px solid black
    }

    .cabecera-left input {
        height: 16px ;
        width: 160px;
        border: 1px solid black
    }

    .cabecera-left input:focus {
        width: 100px;
        outline: none;
    }

    .cabecera-left select{
        height: 16px ;
        width: 100px;
        font-family: "Quicksand", sans-serif;
        color: black;
        font-weight: 400;
        font-size: var(--fs);
        border: 1px solid black;
    }

    .table-principal {
        place-items: center;
    }

    .pie-pagina{
        display: flex;
        flex-direction: column;
        align-items: end;
        justify-content: center;
        position: relative;
    }

    .pie-pagina label{
        font-size: var(--fs);
        font-weight: 600;
    }

    .pie-pagina input{
        height: 16px;
        border: 1px solid black;
    }

    .pie-pagina div{
      width: 240px;
      height: 80px;
      display: grid;
      gap: 12px;
      grid-template-columns: auto 1fr;
    }

    .pie-pagina div{
        position: relative;
        right: 240px;
        Top: 12px;
    }

    .lbl-total{
        font-weight: bold;
    }


    .table-principal table{
        border-collapse: collapse;
        font-size: var(--fs);
        font-weight: 500;
        text-align: center;
    }

    .table-principal th {
        width: 76px;
        background-color: #45dcb7;
        font-weight: bold;
    }

    .table-principal td {
        width: 88px;
    }

    .table-principal td,tr,th {
        border: solid 1px black;
    }

    .ipt{
        color: black;
        font-size: 12px;
        font-weight:bold;
    }
  
 
    
   
</style>

<body>
    <div class="cobro-ventas">
        <div class="contenedor-cobro-ventas">

            <div class="sider-bar-left">
                <h2 class="sider-titulo">BeizaNet</h2>
                    <div class="contenedor-salir">
                        <img src="{{ asset('icon/icono_salida.png') }}" alt="icon-salida">
                        <a href="#" id="cerrar-documento-detalle">Salir</a>
                    </div>
            </div>

            <div class="page-principal">

                <div class="page-principal-titulo">
                    <label class="lbl lbl-titulo">Documento detalle</label>
                    <hr class="linea-p">
                </div>

                <div class="info-documento">

                    <div class="cabecera">

                        <div class="cabecera-left">

                            <label>Emisión</label>
                            <input class="ipt" type="text" readonly value="2024-02-29">
             
                            <label>Forma de pago</label>
                            <input class="ipt" type="text" readonly value="FACTURA 30 DÍAS">

                            <label>Documento</label>
                            <input class="ipt" type="text" value="01/F101-00079389">
                           
                            
                        </div>

                        <div class="cabecera-right">
                            
                                <label>RUC</label>
                                <input class="ipt" type="text" value="">
                 
                                <label>Cliente</label>
                                <input  class="ipt" type="text" value="MIGUEL POMAREDA LIZARRAGA">

                                <label>Dirección</label>
                                <input class="ipt"  type="text" value="AV. DANIEL ALCIDES CARRION N 1345">
                       
                        </div>

                    </div>

                    <div class="table-principal">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Producto</th>
                                <th>Sub linea</th>
                                <th>P.unitario</th>
                                <th>Total</th>

                            </tr>

                            <tbody id="documentos-detalle-tbody"></tbody>

                        </table>
                    </div>

                    <div class="pie-pagina">

                        <div> 
                            <label>V.V.</label>
                            <input class="ipt" type="text" value="">
            
                            <label>I.G.V.</label>
                            <input class="ipt" type="text">

                            <label class="lbl lbl-total">TOTAL</label>
                            <input class="ipt" type="text" value="12.1">
                        </div>

                    </div>

                    

                </div>
              
            </div>

        </div>
    </div>
</body>

</html>