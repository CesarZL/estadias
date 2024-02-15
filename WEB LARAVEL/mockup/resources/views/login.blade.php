<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mockup</title>

        <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">

        <script src="https://kit.fontawesome.com/b871c9bab3.js" crossorigin="anonymous"></script>

        @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/codex-editor.js'])

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    </head>
    <body class="antialiased">
        
        <section class="bg-gray-100 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    PROYECTO DE LATEX     
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Inicia sesión en tu cuenta
                        </h1>
                        <form class="space-y-4 md:space-y-6">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu correo</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-purple-600 dark:ring-offset-gray-800" required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="remember" class="text-gray-500 dark:text-gray-300">Recuérdame</label>
                                    </div>
                                </div>
                                <a href="/forget" class="text-sm font-medium text-purple-600 hover:underline dark:text-purple-500">¿Olvidaste tu contraseña?</a>
                            </div>
                            <a type="submit" href="/inicio" class="w-full bg-purple-600 text-white hover:bg-purple-700 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Iniciar sesión</a>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                ¿No tienes una cuenta? <a href="/register" class="font-medium text-purple-600 hover:underline dark:text-purple-500">Crea una</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
          </section>



       
    </body>
</html>
