<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite ('resources/css/app.css')
    <title>PyroSafe - Login</title>
</head>
<body>
    <div class="flex min-h-svh items-center justify-center bg-[#10222b] px-4 py-16 text-[#dee6e9]">
        <div class="w-full max-w-md">
            <div class="mb-8 flex flex-col items-center text-center">
                <h1 class="text-2xl font-bold text-white">Panel Administrativo</h1>
                <p class="mt-2 text-sm text-pretty text-[#dee6e9]/70">Ingresa con tus credenciales.</p>
            </div>
            <form
                action="{{ route('admin.auth') }}"
                method="POST"
                class="flex flex-col gap-2 rounded-2xl border border-[#283b45] bg-[#1b313d]/40 p-6 backdrop-blur">
                @csrf
                <label for="email" class="font-semibold">Correo Electrónico</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    autocomplete="email"
                    placeholder="ejemplo@correo.com"
                    value="{{ old('email') }}"
                    required
                    class="rounded-md border border-[#283b45] bg-[#10222b] px-2 py-1 text-[#dee6e9]" />
                <label for="password" class="font-semibold">Contraseña</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    autocomplete="current-password"
                    placeholder="ejemplo123"
                    required
                    class="rounded-md border border-[#283b45] bg-[#10222b] px-2 py-1 text-[#dee6e9]" />
                @error ('errorLogin')
                    <p class="text-center font-semibold text-red-500">{{ $message }}</p>
                @enderror
                <button
                    type="submit"
                    class="mt-4 cursor-pointer rounded-2xl bg-sky-500 py-2 font-medium text-white transition-colors hover:bg-sky-600">
                    Ingresar al panel
                </button>
            </form>
        </div>
    </div>
</body>
</html>
