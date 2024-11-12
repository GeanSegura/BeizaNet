<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
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
        width: 8%;
        background-color: var(--fondo-login);
        border-radius: 12px 0px 0px 12px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .sider-titulo {
        color: white;
        font-size: var(--fs);
        margin-left: 30px;
    }

    .contenedor-a-icon {
        height: 68px;
        display: flex;
        flex-direction: row;
        box-sizing: border-box;
        padding: 4px 0 0 8px;
        margin-top: 8px;
        align-items: center
    }

    .contenedor-a-icon a {
        color: white;
        font-size: var(--fs);
        text-decoration: none;
    }


    .contenedor-a-icon:hover {
        background-color: #4f77c9ad;
        height: 68px;
    }

    .contenedor-a-icon img {
        width: 40px;
        height: 32px;
        margin-right: 8px;
    }

    .contenedor-salir-usuario {
        display: grid;
        align-items: end;
        height: 100%;
        box-sizing: border-box;
        width: 100%;
    }

    .salir-usuario {
        display: flex;
        flex-direction: column;
        padding: 0px 0px 0px 0px;
    }

    .contenedor-salir {
        display: flex;
        flex-direction: row;

    }

    .contenedor-salir img {
        width: 24px;
        height: 24px;
        cursor: pointer;
        margin-left: 8px;
    }

    .contenedor-salir a {
        color: white;
        text-decoration: none;
        padding: 1px 0px 0px 4px;
        cursor: pointer;
    }

    .usuario {
        height: 80px;
    }

    .page-principal {
        width: 92%;
        display: flex;
        flex-direction: column;
    }

    .page-principal-titulo {
        margin: 8px 0px 0px 8px;
        height: 6%;
    }

    .lbl {
        font-weight: 400;
    }

    .linea-p {
        width: 98%;
        text-align: center;
        margin-right: 12px;
    }

    .menu-opciones {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
        margin: 0px 12px 0px 12px;
        height: 80px;
        gap: 4px;
        box-sizing: border-box;
        margin-bottom: 24px;
        height: 12%;
    }

    .menu-opciones>div {
        border: 0px;
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1),
            -5px -5px 15px rgba(255, 255, 255, 0.1);
        /* Sombra superior */
        display: flex;
        flex-direction: column;
        padding: 8px;
        box-sizing: border-box;
    }

    .menu-opciones>div>img {
        border: 0px;
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1),
            -5px -5px 15px rgba(255, 255, 255, 0.1);
        /* Sombra superior */
        padding: 8px;
        box-sizing: border-box;
        width: 68px;
        margin-left: 8px;
    }

    .lbl-opciones {
        font-size: var(--fs);
        text-align: center;
    }

    .end-page {
        display: flex;
        align-items: end;
        height: 16%;
    }

    .contenedor-end {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-bottom: 12px;
        margin-left: 8px;
    }

    .contenedor-end div {
        display: flex;
        justify-content: space-around;
    }

    .lbl {
        color: #052f81;
        font-size: var(--fm);
        font-weight: bold;
    }

    .tablas {
        margin: 12px;
        height: 66%;
    }

    .tabla-columns {
        display: grid;
        grid-template-columns: 1fr 2fr;
        height: 100%;
    }

    .tbl-left {
        overflow: auto;
    }

    .tbl-left a {
        text-decoration: underline;
        color: black;
    }

    .tbl-left a:hover {
        text-decoration: underline;
        color: blue;
        font-weight: bold;
        font-size: 12px;
    }

    .tbl-right {
        overflow: auto;
        display: flex;
        flex-direction: column;
    }

    .contenedor-eleccion-zona {
        margin-left: 4px;
        background-color: #98DED9;
        border-radius: 8px;
        width: 96%;
    }

    .eleccion-zona {
        margin-left: 8px;
        font-size: var(--fm);
    }

    table {
        text-align: center;
        margin: 4px;
        border-radius: 8px;
        box-shadow: 0 0px 8px rgba(0, 0, 0, 0.2);
        background-color: #fff;
        width: 96%;
        overflow: auto;
        table-layout: fixed;
        border-collapse: collapse;
    }

    td,
    th {
        width: 16%;
        height: 20px;
        font-size: 10px;
        border: 1px solid black;
        font-weight: 900;
    }

    th {
        background-color: #45dcb7;
    }


    td {
        min-width: 40px;
        max-width: 400px;
        min-height: 20px;
        max-height: 40px;

    }

    .tbl-left-end {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 4px;
        margin-left: 12px;
        font-size: 12px;
        width: 94%;
    }

    .tbl-right a:hover {
        text-decoration: underline;
        color: blue;
        font-weight: bold;
        font-size: 12px;
    }

    .tbl-left-end div {
        border-radius: 8px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1),
            -5px -5px 15px rgba(255, 255, 255, 0.1);
    }

    .tbl-left .tbl-left-top th:nth-child(1),
    td:nth-child(1) {
        width: 30%;
    }

    .tbl-left .tbl-left-top th:nth-child(2),
    td:nth-child(2) {
        width: 15%;
    }

    .tbl-left .tbl-left-top th:nth-child(3),
    td:nth-child(3) {
        width: 15%;
    }

    .tbl-left .tbl-left-top th:nth-child(4),
    td:nth-child(4) {
        width: 10%;
    }

    .tbl-left .tbl-left-top th:nth-child(5),
    td:nth-child(5) {
        width: 20%;
    }

    .tbl-left .tbl-left-top th:nth-child(6),
    td:nth-child(6) {
        width: 10%;
    }

    .tbl-right .tbl-top th:nth-child(1),
    td:nth-child(1) {
        width: 14%;
    }
</style>

<body>


        <div id="ocultar-cobro-ventas" class="cobro-ventas">
            <div class="contenedor-cobro-ventas">
                <div class="sider-bar-left">
                    <h2 class="sider-titulo">BeizaNet</h2>

                    <div class="contenedor-a-icon">
                        <img src="icon/icono_cuentas_cobrar.png" alt="icon-cuenta-cobrar">
                        <a href="./">Cuentas por cobrar x zonas</a>
                    </div>

                    <div class="contenedor-salir-usuario">

                        <div class="salir-usuario">
                            <div class="contenedor-salir">
                                <img src="{{ asset('icon/icono_salida.png') }}" alt="icon-salida">
                                <a href="{{ route('salir') }}">Salir</a>

                            </div>

                            <div class="usuario">

                            </div>
                        </div>


                    </div>

                </div>

                <div class="page-principal">

                    <div class="page-principal-titulo">
                        <label class="lbl lbl-titulo">Cuentas por cobrar x zonas</label>
                        <hr class="linea-p">
                    </div>

                    <div class="menu-opciones">

                        <div>
                            <img src="icon/icon-imprimir.png" alt="opc-1">
                            <label class="lbl-opciones">Imprimir</label>
                        </div>
                        <div>
                            <img src="icon/icon-buscar.png" alt="opc-2">
                            <label class="lbl-opciones">Buscar</label>
                        </div>
                        <div>
                            <img src="icon/icon-nuevo.png" alt="opc-3">
                            <label class="lbl-opciones">Nuevo</label>
                        </div>
                        <div>
                            <img src="icon/icon-ayuda.png" alt="opc-4">
                            <label class="lbl-opciones">Ayuda</label>
                        </div>
                        <div>
                            <img src="icon/icon-restablecer.png" alt="opc-5">
                            <label class="lbl-opciones">Refinanciar</label>
                        </div>
                        <div>
                            <img src="icon/icon-pendientes.png" alt="opc-6">
                            <label class="lbl-opciones">Pendientes</label>
                        </div>

                    </div>

                    <div class="tablas">
                        <div class="tabla-columns">

                            <div class="tbl-left">

                                <table class="tbl-left-top">
                                    <tr>

                                        <th>Zona</th>
                                        <th>Importe</th>
                                        <th>Vencidos</th>
                                        <th>%</th>
                                        <th>Pendientes</th>
                                        <th>%</th>

                                    </tr>

                                    @foreach ($zonas as $zona)
                                        <tr>

                                            <td>
                                                <a href="javascript:void(0);" class="zona-link"
                                                    data-zona="{{ $zona->vc_nombre_zona }}">{{ $zona->vc_nombre_zona }}</a>
                                            </td>

                                            <td>
                                                <span>{{$zona->vc_saldo ?? '' }}</span>
                                            </td>

                                            <td>
                                                <span>{{ $vencidos ?? ''}}</span>
                                            </td>

                                            <td>
                                                <span>{{ $porcentaje1 ?? ''}}</span>
                                            </td>

                                            <td>
                                                <span>{{ $pendientes ?? '' }}</span>
                                            </td>

                                            <td>
                                                <span>{{ $porcentaje2 ?? ''}}</span>
                                            </td>

                                        </tr>
                                    @endforeach

                                </table>

                                <div class="tbl-left-end">
                                    <div>
                                        <label>Total</label>
                                        <span>--</span>
                                    </div>

                                    <div>
                                        <span>--</span>
                                    </div>

                                    <div>
                                        <span>--</span>
                                    </div>

                                    <div>
                                        <span>--</span>
                                    </div>

                                    <div>
                                        <span>--</span>
                                    </div>
                                </div>

                            </div>

                            <div class="tbl-right">

                                <div class="contenedor-eleccion-zona">
                                    <label class="eleccion-zona">Acombamba</label>
                                </div>

                                <div class="tbl-top">
                                    <table id="cuentas-table">
                                        <thead>
                                            <tr>
                                                <th>Código de Cuenta</th>
                                                <th>Denominación Comercial</th>
                                                <th>Razón Social</th>
                                                <th>Lim. Crédito</th>
                                                <th>Vencidas</th>
                                                <th>Pendientes</th>
                                                <th>Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cuentas-tbody"></tbody>
                                    </table>

                                    <div class="tbl-left-end">
                                        <div>
                                            <label>Total</label>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="tbl-button">
                                    <table>
                                        <tr>
                                            <th>Documento</th>
                                            <th>Emisión</th>
                                            <th>Importe</th>
                                            <th>Vencimiento</th>
                                            <th>Saldo</th>
                                            <th>Días atrasados</th>
                                        </tr>

                                        <tbody id="documentos-tbody"></tbody>

                                    </table>

                                    <div class="tbl-left-end">
                                        <div>
                                            <label>Total</label>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>

                                        <div>
                                            <span>--</span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="end-page">
                        <div class="contenedor-end">
                            <hr class="linea-p">

                            <div>
                                <label class="lbl lbl-titulo">MIDHCO DISTRIBUCIONES S.A.C</label>
                                <label class="lbl lbl-usuario">Usuario :
                                    <span> {{ $nombre_usuario }} </span>
                                </label>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>


    <div id="contenidoGaf" style="display: none;">

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/cobroVentasScripts.js') }}"></script>


</body>

</html>
