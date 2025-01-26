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
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
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
    <main>
        Lista de Livros
    </main>
</body>
</html>
