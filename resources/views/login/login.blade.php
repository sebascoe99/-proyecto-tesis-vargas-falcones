<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                <form action="{{ route('login') }}" method="POST">
                @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Usuario" placeholder="usuario" name="username" value="{{ old('username') }}" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Contraseña" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="logCheck" id="logCheck" disabled hidden>
                            <label for="logCheck" class="text" hidden>Remember</label>
                        </div>
                        <a href="/recuperar-contraseña" class="text">Recuperar contraseña</a>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Iniciar sesión">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">¿Aun no tienes una cuenta?</span>
                    <a href="{{ route('register') }}" class="text signup-link">Registrate ahora</a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>