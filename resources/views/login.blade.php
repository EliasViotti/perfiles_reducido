<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-gray-800 p-8 rounded-lg shadow-lg">
        <a href="{{ route('welcome') }}" 
                class="text-sm text-blue-400 hover:text-blue-500 justify-left flex">
                    < Volver al inicio 
        </a>
        <h2 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            <!-- Cross Site Request Forgery, vendria a ser algo de ciberseguridad -->
            @csrf 

            <div>
                <label for="email" class="block text-sm font-medium">Correo electrónico</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium">Contraseña</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full py-2 bg-blue-600 hover:bg-blue-700 rounded-lg font-semibold transition">
                Acceder
            </button>
            <a href="{{ url('recuperar_password') }}" 
                class="text-sm text-blue-400 hover:text-blue-500 justify-center flex"><!-- Todavia no existe esta vista -->
                    ¿Olvidaste tu contraseña?
            </a>
        </form>
    </div>

</body>
</html>
