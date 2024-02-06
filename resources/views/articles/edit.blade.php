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
        <main>
            <form class="max-w-md mx-auto mt-5" action="{{ route('articles.update', $article) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                    <input type="text" name="title" id="title" value="{{$article->title}}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>
                <div class="mb-5">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                    <textarea id="description" name="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="">{{$article->description}}</textarea>
                </div>
                <div class="mb-5">
                    <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                    <input type="text" name="link" id="link" value="{{$article->link}}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>


                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Imagen</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX.
                    800x400px).</p>


                <button type="submit"
                    class="mt-5 text-white bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
            </form>
        </main>


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

