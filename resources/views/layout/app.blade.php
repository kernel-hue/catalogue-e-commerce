<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechTools Catalog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans min-h-screen">

    <header class="bg-[#0b1120] border-b border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between gap-4">
            <div class="flex items-center gap-2 font-bold text-xl tracking-wide text-blue-500 min-w-max">
                <span class="p-1.5 bg-blue-600 text-white rounded-lg">KT</span>
                <span>KLAUSTOOL<span class="text-slate-400 font-normal">CATALOG</span></span>
            </div>

            <nav class="hidden md:flex items-center space-x-6 text-sm font-medium text-slate-300">
               <a href="{{route('catalogue.index')}}" class="text-blue-400 border-b-2 border-blue-500 pb-1">Accueil</a>
               <a href="#" class="hover:text-white transition">Catalogue</a>
               <a href="#" class="hover:text-white transition">Nouveautés</a>
               <a href="#" class="hover:text-white transition">Promos</a>
               <a href="#" class="hover:text-white transition">Blog</a>
            </nav>

            <div class="flex-1 max-w-md hidden sm:block">
                <div class="relative flex items-center px-2">
                    <input type="text" placeholder="Rechercher..."
                        class="w-full bg-slate-900 border border-slate-700 rounded-lg pl-4 pr-10 py-1.5 text-sm text-slate-200 focus:outline-none focus:border-blue-500">
                    <button class="absolute right-0 top-0 bottom-0 px-3 bg-blue-600 rounded-r-lg hover:bg-blue-500 transition text-white">🔍</button>
                </div>
            </div>

            <div class="flex items-center gap-4 text-sm text-slate-300">
                <a href="#" class="hover:text-white flex items-center gap-1">👤 Compte</a>
                <a href="{{ route('cart.index') }}" class="hover:text-white flex items-center gap-1">🛒 Panier</a>
                <a href="#" class="hover:text-white flex items-center gap-1">❓ Aide</a>
            </div>
        </div>
    </header>

    @yield('content')

</body>
</html>