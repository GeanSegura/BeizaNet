<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalaxyNet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<style>
    :root {
        --fondo-login: #052f81;
        --fs: 12px;
        --fm: 14px;
        --fl: 16px;
        --color-letra-pricipal: #205cce;
        --color-letra-secundario: #7bb3f8;
        --text-input-field: #F7F7F7;
        --fondo-code: #f2f1f5;
    }

    body {
        background-color: var(--color-letra-secundario);
        font-family: "Quicksand", sans-serif;
    }

    .login-galaxy {
        width: 100%;
        height: 100vh;
        display: grid;
        place-items: center;
    }

    .contenedor-login-galaxy {
        width: 900px;
        height: 600px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .contenedor-login-galaxy figure {
        margin: 0;
        padding: 0;
        display: flex;
    }

    .contenedor-login-galaxy figure img {
        width: 600px;
    }

    .cont-mensajes-code {
        display: flex;
        flex-direction: column;
        width: 600px;
        background-color: var(--fondo-code);
        text-align: center;
        justify-content: center;
    }

    .cont-mensajes-code h2 {
        font-size: 64px;
    }

    .nombre-empresa {
        text-align: start;
        margin-left: 24px;
        font-weight: bold;
        color: #052f81;
        font-size: var(--fl);
    }

    .correo-contacto {
        text-align: start;
        margin-left: 24px;
        font-size: var(--fs);
    }

    @media(max-width:640px) {
        .contenedor-login-galaxy figure {
            display: flex;
            flex-direction: column;
        }

        .contenedor-login-galaxy {
            width: 360px;
            height: 560px;
            display: flex;
            flex-direction: column-reverse;
            align-items: center;
            justify-content: center;
        }


        .contenedor-login-galaxy figure img {
            width: 360px;
            height: 260px;
        }

        .cont-mensajes-code {
            display: flex;
            flex-direction: column;
            width: 360px;
            height: 300px;
            background-color: var(--fondo-code);
            text-align: center;
            justify-content: center;
        }

        .cont-mensajes-code h1 {
            font-size: 24px;
            margin: 4px;
        }

        .cont-mensajes-code h2 {
            font-size: 24px;
            margin: 4px;
        }

        .info-code {
            font-size: var(--fl);
        }

        .correo-contacto {
            font-size: var(--fm);
            margin-left: 0px;
            text-align: center;
            margin: 0px 4px;
        }

    }
</style>



<body>
    <div class="login-galaxy">
        <div class="contenedor-login-galaxy">


            <figure>
                <div class="cont-mensajes-code">
                    <h1>Estamos realizando mejoras</h1>
                    <h2>503</h2>
                    <p class="info-code">Nuestra página estará disponible nuevamente en breve.<br>Gracias por tu
                        paciencia.</p>
                    <p class="correo-contacto">Si tienes alguna consulta, no dudes en contactarnos en <a
                            href="#">gafsegurasanchez@gmail.com</a>.</p>
                    <p class="nombre-empresa">BeizaNet</p>
                </div>
                <img src="img/503Mantenimeinto.jpg">
            </figure>


        </div>
    </div>
</body>

</html>