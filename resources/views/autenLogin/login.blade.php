<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="" type="image/x-icon">
    <title>BeizaNet</title>
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
    }

    body {
        background-color: var(--fondo-login);
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
    }

    .contenedor-login-left {
        width: 600px;
        background-image: url(img/logo-azul-left.jpg);
        background-size: cover;
        position: relative;
    }

    .contenedor-login-left img {
        width: 280px;
        display: flex;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .contenedor-login-right {
        width: 300px;
        background-color: var(--text-input-field);
        padding: 20px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    .titulo {
        color: var(--color-letra-secundario);
        font-weight: bold;
    }

    .subtitulo_movil {
        display: none
    }

    .subtitulo {
        color: white;
        font-size: 36px;
        font-weight: bold;
        position: absolute;
        bottom: 240px;
        right: 160px;
    }

    .titulo::first-letter {
        color: var(--color-letra-pricipal);
    }

    .linea-login {
        display: flex;
        flex-direction: row;
    }

    .ln {
        margin-top: 40px;
        width: 112px;
    }

    .form-login {
        margin-top: 68px;
        display: flex;
        flex-direction: column;
    }

    .lbl {
        color: var(--color-letra-pricipal);
        font-weight: bold;
        font-size: var(--fs);
        margin: 12px 0 12px 0;
        cursor: pointer;
    }

    .ipt {
        height: 24px;
        border: 0px;
        border-radius: 4px;
        background-color: white;
        font-family: "Quicksand", sans-serif;
        cursor: pointer;
        padding: 4px;
        box-sizing: border-box;
    }

    .ipt-ingresar {
        margin-top: 44px;
        height: 28px;
        background-color: #fc5969;
        color: white;
        font-size: var(--fs);
        cursor: pointer;
    }

    .contenedor-login-right-movile {
        display: none;
    }

    .ipt::placeholder {
        font-size: var(--fs);
        font-family: "Quicksand", sans-serif;
    }

    .ipt:focus {
        outline: none;
    }

    @media(max-width:740px) {
        .contenedor-login-galaxy {
            height: 100vh;
            display: grid;
            justify-content: center;
            width: 100%;
        }

        .contenedor-login-left {
            display: none
        }

        .contenedor-login-right {
            place-items: center;
            height: 532px;
            margin: 32px 0px 44px 0px;
            border-radius: 4px;
            padding: 20px 20px 0px 20px;
        }

        .linea-login {
            height: 10px;
            gap: 16px;
        }

        .ln {
            margin-top: 16px
        }

        .form-login,
        .ipt-ingresar {
            margin-top: 32px;
            width: 224px;
        }

        .contenedor-login-right-movile {
            display: flex;
            background-image: url(img/logo-azul-left.jpg);
            background-size: contain;
            width: 300px;
            height: 184px;
            margin-top: 20px;
            align-items: flex-end;
            position: relative;
            border-radius: 0px 0px 4px 4px;
        }

        .contenedor-login-right-movile .subtitulo {
            position: absolute;
            right: 40px;
            top: 24px;
            font-size: 32px;
        }

        .contenedor-login-right-movile img {
            display: block;
            width: 160px;
        }


    }
</style>

<body>
    <div class="login-galaxy">
        <div class="contenedor-login-galaxy">

            <div class="contenedor-login-left">
                <h2 class="subtitulo">BeizaNet</h2>
                <img src="img/FondoGalaxyPersons.png" alt="fondo-persons-galaxy">
            </div>

            <div class="contenedor-login-right">
                <h1 class="titulo">Bienvenido</h1>
                <div class="linea-login">
                    <hr class="ln linea-a">
                    <hr class="ln linea-b">
                </div>

                <form class="form-login" action="{{ route('login') }}" method="POST">
                    @csrf
                    <label class="lbl lbl-usuario" for="usuario">Usuario</label>
                    <input id="usuario" class="ipt ipt-usuario" type="text"
                        placeholder="Ingrese su nombre de usuario" name="usuario">

                    <label class="lbl lbl-contrasena" for="contrasena">Contraseña</label>
                    <input id="contrasena" class="ipt ipt-contrasena" type="password" placeholder="*********"
                        name="contrasena">

                    <input class="ipt ipt-ingresar" type="submit" value="Ingresar">

                </form>

                <div class="contenedor-login-right-movile">
                    <h2 class="subtitulo">BeizaNet</h2>
                    <img src="img/FondoGalaxyPersons.png" alt="fondo-persons-galaxy">
                </div>

            </div>

        </div>
    </div>
</body>
</html>
