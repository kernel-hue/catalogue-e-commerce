@extends('layout.app')


@section('content')

    <section class="relative bg-slate-900 border-b border-slate-800 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-30">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=80"
             alt="Bureau Tech"
             class="w-full h-full object-cover">
        </div>

        <div class="max-w-7xl mx-auto px-4 py-12 relative z-10">
            <span class="text-xs uppercase tracking-widest text-slate-400 font-semibold">Découvrez l'avenir du travail</span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-white mt-1">Outils Tech Innovants</h1>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row gap-8">
        <aside class="w-full md:w-64 shrink-0 space-y-1">
            <button class="w-full text-left px-4 py-2.5 bg-slate-800 text-white font-medium rounded-lg flex items-center gap-3 border border-slate-700">
                <span>☰</span>Tous les produits
            </button>
            <nav class="space-y-1 text-sm text-slate-400 pt-2">
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition">💻 Informatique</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition">📷 Photo & Vidéo</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition">🎵 Audio</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-slate-800 hover:text-white transition">📱 Mobilité</a>
            </nav>
        </aside>

        <div class="flex-1 space-y-8">
            <h2 class="text-2xl font-light font-serif text-black text-center mb-6 bg-green-300 px-4 py-2 rounded-lg">Les Bangers Tech en ce moment</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach($products as $product)
                <article class="bg-slate-900 border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow flex flex-col">
                    <div class="h-35 overflow-hidden">
                        <img src="{{$product->image}}"
                         alt="{{$product->image}}" 
                         class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 space-y-2">
                        <h3 class="font-semibold text-white line-clamp-2">{{$product->name}}</h3>
                        <p class="text-xs text-slate-300 mt-1 line-clamp-3">{{$product->description}}</p>
                        <div class="mt-3 flex items-center gap-2">
                            <span class="text-xl font-bold text-blue-600">{{number_format($product->price, 0, ',', '.')}} FCFA</span>
                            @if($product->old_price)
                            <span class="text-sm text-gray-400 line-through">{{number_format($product->price, 0, ',', '.')}} FCFA</span>
                            @endif
                        </div>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                             @csrf
                             <button type="submit" class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 rounded-lg transition-colors flex items-center justify-center gap-2">
                                    Ajouter au Panier
                            </button>
                        </form>
                    </div>
                </article>
                @endforeach

            </div>

        </div>

    </main>


    
@endsection