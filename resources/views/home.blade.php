<!doctype html>
<html lang=="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booverly</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-50 text-indigo-950">
    <header class="bg-indigo-50">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Booverly</div>
            <ul class="flex space-x-4 font-bold botao-nav">
                <li><a href="#" class="text-indigo-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:text-indigo-800">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg space-y-6">
        <form action="" class="flex justify-between mt-6">
            <h1 class="font-bold text-indigo-950">Explorar</h1>
            <div class="botao-dentro">
                <div class="w-full max-w-sm min-w-[200px]">
                    <div class="relative">
                        <input
                            type="text"
                            class="w-full bg-transparent placeholder:text-slate-400 text-indigo-700 text-sm border border-indigo-200 rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-indigo-400 hover:border-indigo-300 shadow-sm focus:shadow"
                            placeholder=" ... "
                            name="pesquisar"
                        />
                        <button
                            class="absolute top-1 right-1 flex items-center rounded bg-indigo-800 py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-indigo-700 focus:shadow-none active:bg-indigo-700 hover:bg-indigo-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="submit"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                            </svg>

                            Buscar
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <section class="space-y-4">
            {{--Livro--}}
            <div>
                <div>
                    <div>Imagem</div>
                    <div>
                        <div>titulo</div>
                        <div>autor</div>
                        <div>avaliação</div>
                    </div>
                </div>
                <div>descrição</div>
            </div>
        </section>
    </main>
</body>
</html>
