<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="container">
        <div class="title">Registrarse</div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Apellido paterno" name="last_name" value="{{ old('last_name') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Apellido materno" name="second_last_name" value="{{ old('second_last_name') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('second_last_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Numero de cédula" name="identification" value="{{ old('identification') }}" required>
                    <i class="uil uil-card-atm icon"></i>
                </div>
                @error('identification')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="text" placeholder="Usuario" name="username" value="{{ old('username') }}" required>
                    <i class="uil uil-user icon"></i>
                </div>
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="email" placeholder="Correo institucional" name="email" value="{{ old('email') }}" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="password" class="password" placeholder="Contraseña" name="password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="input-box">
                    <input type="password" class="password" placeholder="Confirmar contraseña" name="password_confirmation" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Registrarse">
            </div>
        </form>
        <div class="login-signup">
            <span class="text">¿Ya tienes una cuenta?</span>
            <a href="{{ route('login') }}" class="text signup-link">Inicia sesión</a>
        </div>

    </div>

    <script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>