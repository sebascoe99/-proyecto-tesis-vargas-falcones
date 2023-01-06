<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/password.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Recuperar contraseña</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Recuperar contraseña</span>
                <form action="{{ route('') }}" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Usuario" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Correo Institucional" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirmar contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="logCheck" id="logCheck" disabled hidden>
                            <label for="logCheck" class="text" hidden>Remember</label>
                        </div>
                        <a href="#" class="text" disabled hidden>Forgot password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Guardar">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Regresar a </span>
                    <a href="/login" class="text signup-link">Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>