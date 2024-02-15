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
        
        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Abrir sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>
        
        <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-1 font-medium mt-3">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white bg-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700 group font-bold">
                        <span class="px-3">NOMBRE DEL ARTICULO</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-gray-500 dark:text-white group mt-5">
                        <span class="flex-1 whitespace-nowrap">Secciones</span>
                        <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-500">
                            <i class="fa-solid fa-circle-plus"></i>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ">
                        <span class="flex-1 ms-3 whitespace-nowrap">Resúmen</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Abstract</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Introducción</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Metodología</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Subsección 1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Subsección 2</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Subsección 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Sección 5</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Sección 6</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">Sección 7</span>
                    </a>
                </li>



            </ul>

            <div class="absolute bottom-7 px-5">

                <button class="flex items-center w-full p-2 text-white rounded-lg group bg-green-500">
                    <span class="flex-1 whitespace-nowrap">Generar PDF</span>
                </button>

                <button class="flex items-center w-full p-2 text-white rounded-lg group bg-purple-600 mt-3">
                    <span class="flex-1 whitespace-nowrap">Agregar autor</span>
                </button>

                <div class="flex items center justify-center mt-6">
                    <div class="flex flex-col justify-center ms-3">
                        <h3 class="text-lg font-bold">Nombre del autor</h3>
                        <p class="text-md">correo@upv.edu.mx
                    </div>
                    <span class="inline-flex items-center justify-center ms-7 font-medium text-gray-500">
                        <i class="fa-solid fa-gear"></i>
                    </span>
                </div>
            </div>


            

            
            </div>
        </aside>
        
    <!-- Contenedor principal con dos columnas -->
    <div class="flex">

        <!-- Columna izquierda -->
        <div class="py-4 px-3 sm:ml-64 flex-1">
            <div class="p-5 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-screen bg-gray-50">
                <div id="editorjs" class="py-6">
                    <!-- Contenido de la columna izquierda -->
                </div>
            </div>
        </div>

        <!-- Columna derecha -->
        <div class="py-4 px-3 flex-1">
            <div class="p-5 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 h-screen bg-red-50">
                

            </div>
        </div>
        
    </div>
 

        
       
    </body>
</html>
