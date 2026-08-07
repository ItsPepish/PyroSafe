<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>PyroSafe - Login</title>
</head>
<body>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="">
            <h1>Panel Administrativo</h1>
            <p>Ingresa con tus credenciales.</p>
        </div>
        <div class="">
            <form action="{{ route('admin.auth') }}" method="POST" class="flex flex-col">
                @csrf
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}" required>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" autocomplete="current-password" required>
                @error('errorLogin')
                <p>{{ $message }}</p>
                @enderror
                <button type="submit">Ingresar al panel</button>
            </form>
        </div>
    </div>
</body>
</html>