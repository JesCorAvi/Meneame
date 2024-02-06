<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
    <x-app-layout>
        <header class="flex h-8 bg-gray-300 ">
            <ul class="inline-flex text-center ml-96 items-center">
                <li><a href="" class="text-orange-600 mr-12 borde bg-gray-200 py-1 px-1">PUBLICAR</a></li>
                <li><a href="" class="text-black mr-12">NUEVAS</a></li>
                <li><a href="" class="text-black mr-12">ARTÍCULOS</a></li>
                <li><a href="" class="text-black mr-12">POPULARES</a></li>
                <li><a href="" class="text-black mr-12">MAS VISITADAS</a></li>
                <li>
                    <div x-data="{ open: false }" class="relative">
                        <div x-data="{ open: false }" class="relative">
                            <button @mouseover="open = true" @mouseleave="open = false" class="text-gray-500 focus:outline-none focus:border-gray-700 focus:text-gray-700">
                                <p class="text-black">MÁS</p>
                            </button>
                            <div x-show="open" @mouseover="open = true" @mouseleave="open = false" class="absolute left-rem] w-36 bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg">
                                <!-- Contenido del desplegable -->
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100"><strong>TODAS</strong></a>
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100">ACTUALIDAD</a>
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100">CULTURA</a>
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100">OCIO</a>
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100">TECNOLOGIA</a>
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100">M/*</a>
                                <a href="#" class="text-left block px-2 py-1 text-sm text-gray-700 hover:bg-gray-100">@RSS</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>

    </x-app-layout>
    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"></h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Ayuda</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">FAQ</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contacto</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Aviso legal</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">+Menéame</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Nótame</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Nueva versión</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Estadísticas</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Más votadas</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Más visitadas</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Más comentadas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
