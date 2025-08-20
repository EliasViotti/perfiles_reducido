<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">

    <div class="text-center space-y-6">
        <h1 class="text-4xl font-bold tracking-wide">Bienvenido al portal de la comisión 2.2</h1>
            <p class="text-1xl font-thin tracking-wide text-gray-500">Por favor, dinos si eres alumno o profesor iniciando sesion</p>

        <div class="flex justify-center space-x-4">
            <a href="{{ route('login') }}">
                <button class="px-6 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-white font-semibold transition">
                    Iniciar sesión
                </button>
            </a>
            <button class="px-6 py-2 bg-gray-700 hover:bg-gray-800 rounded-lg text-white font-semibold transition">
                Registrarse
            </button>
        </div>
    </div>

</body>
</html>
