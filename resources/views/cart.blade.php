@extends('layout.app')

@section('content')
<main class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-white mb-6">Mon Panier</h1>

    @if (session('success'))
        <div class="bg-green-600 text-white px-4 py-2 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (count($cart) > 0)
        <div class="space-y-4">
            @foreach ($cart as $id => $item)
                <div class="bg-slate-900 border border-slate-800 rounded-xl p-4 flex items-center gap-4">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-20 h-20 object-cover rounded-lg">

                    <div class="flex-1">
                        <h3 class="text-white font-semibold">{{ $item['name'] }}</h3>
                        <p class="text-slate-400 text-sm">{{ number_format($item['price'], 0, ',', '.') }} FCFA</p>
                    </div>

                    <form action="{{ route('cart.update', $id) }}" method="POST" class="flex items-center gap-2">
                        @csrf
                        @method('PATCH')
                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1"
                               class="w-16 bg-slate-800 border border-slate-700 rounded px-2 py-1 text-white text-center">
                        <button type="submit" class="text-xs bg-slate-700 hover:bg-slate-600 text-white px-2 py-1 rounded">MAJ</button>
                    </form>

                    <span class="text-white font-bold w-24 text-right">
                        {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} FCFA
                    </span>

                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-400">🗑️</button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class="mt-6 text-right">
            <span class="text-xl font-bold text-white">
                Total : {{ number_format(collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']), 0, ',', '.') }} FCFA
            </span>
        </div>
    @else
        <p class="text-slate-400">Ton panier est vide.</p>
    @endif
</main>
@endsection